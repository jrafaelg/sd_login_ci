<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BackupcodesModel;
use App\Models\PermissionModel;
use App\Models\RoleModel;
use App\Models\UserModel;
use App\Libraries\Cipher;
use chillerlan\QRCode\QRCode;
use phpseclib3\Crypt\RSA;
use PragmaRX\Google2FA\Google2FA;

class Login extends BaseController
{

    public function __construct()
    {
        helper('form');
    }

    public function index()
    {

        $session_items = ['user', 'userId'];
        session()->remove($session_items);

        $data = [
            'title'     => 'Login Page',
        ];

        $view = \Config\Services::renderer();

        //$view->setVar('data', $data);

        return view('login/index', $data);


        //return  $view->render('login/index', $data);

        //return $this->_render($this->config->views['login'], ['config' => $this->config]);

        //        return view('templates/header', $data)
        //            . view('login/index')
        //            . view('templates/footer');
    }

    public function register()
    {
        $data = [
            'title'     => 'Register Page',
        ];
        return view('login/register', $data);
    }

    public function store()
    {

        $validated = $this->validate(
            [
                'username' => 'required|is_unique[users.username]',
                'password' => 'required|PasswordIsValid',
                'password_confirm' => 'required|matches[password]',
                'password_sign' => 'required|min_length[6]',
                'password_sign_confirm' => 'required|matches[password_sign]'
            ],
            [
                'username' => [
                    'required' => 'Nome de usuário é requerido',
                    'is_unique' => 'Nome de usuário já existe'
                ],
                'password' => [
                    'required' => 'Password é requerido',
                    //'PasswordStrengthValidator'  => 'PasswordStrengthValidator',
                    'PasswordStrengthValidator'  => 'Password deve ter no mínimo 8 caracteres, com pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial',
                ],
                'password_confirm' => [
                    'required' => 'Confirmação de password é requerido',
                    'matches' => 'Confirmação de password não confere'
                ],
                'password_sign' => [
                    'required' => 'Senha de assinatura é requerido',
                    'min_length' => 'Senha de assinatura deve ter no mínimo 6 caracteres'
                ],
                'password_sign_confirm' => [
                    'required' => 'Confirmação de senha de assinatura é requerido',
                    'matches' => 'Confirmação de senha de assinatura não confere',
                ],
            ]
        );

        if (!$validated) {
            //return redirect()->back()->withInput();
            return redirect()->route('login/register')->with('errors', $this->validator->getErrors())->withInput();
        }

        // instaciando o Google2FA
        $google2fa = new Google2FA();

        // gerando a chave secreta do OTP
        $otp_secret = $google2fa->generateSecretKey();

        // o timestamp é utilizado para garantir que cada código seja utilizado uma única vez
        $otp_ts = $google2fa->getTimestamp();


        // gerando as chaves
        $private_key = RSA::createKey(2048);
        $public_key = $private_key->getPublicKey();

        // encriptando a chave privada com a senha de assinatura
        $cipher = new Cipher();
        $ciphedPrivateKey = $cipher->encrypt($private_key, $this->request->getPost('password_sign'));


        $user = new UserModel();
        $user->insert([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'otp_secret' => $otp_secret,
            'otp_ts' => $otp_ts,
            'private_key' => $ciphedPrivateKey,
            'public_key' => $public_key,
        ]);

        // setando o id do usuário na session para utilizar na próxima página
        session()->set('userId', $user->getInsertID());

        //dd($user);

        return redirect()->route('login/registerotp');
    }

    public function registerOtp()
    {
        $data = [
            'title'     => 'OTP codes',
        ];

        //session()->set('userId', 4);

        if (!session()->has('userId')) {
            return redirect()->route('login')->with('error', 'Ocorreu um erro');
        }

        $userModel = new UserModel();
        $user = $userModel->where('id', session()->get('userId'))->first();

        // se não encontrar o usuário, redireciona para a página de login
        if (!$user) {
            return redirect()->route('login')->with('error', 'Ocorreu um erro');
        }

        if (empty($user->otp_secret)) {
            return redirect()->route('login/register')->with('error', 'Ocorreu um erro ao criar o usuário');
        }

        // instaciando o Google2FA
        $google2fa = new Google2FA();

        // gerando os dados para o qrcode
        $qrCodeUrl = $google2fa->getQRCodeUrl(
            'SD Login',
            'company@email.com',
            $user->otp_secret,
        );

        // gerando a url que direciona para o qrcode
        $qrcode_src = (new QRCode)->render($qrCodeUrl);
        $data['qrcode_src'] = $qrcode_src;
        $data['otp_secret'] = $user->otp_secret;

        // pesquisar no banco os códigos de backup que o usuário já possa ter gerado
        $backupCodesModel = new BackupcodesModel();
        $backupCodes = $backupCodesModel
            ->where('cod_user', session()->get('userId'))
            ->where('used', 0)
            ->findAll();

        $numRows = count($backupCodes);

        if ($numRows < 1) {

            $backupCodes = [];
            // for para 8 códigos de recuperação
            for ($i = 0; $i < 8; $i++) {

                // gerando um randômico de 1000 até 99999999 para evitar
                // de ser um número muito pequeno
                $randon = random_int(1000, 99999999);

                // formatando o número para preencher com zeros à esquerda
                array_push($backupCodes, [
                    'cod_user'      => session()->get('userId'),
                    'backup_code'   => sprintf("%'.08d", $randon), // preenchendo com zeros à esquerda
                ]);
            }

            // salvando os códigos de backup no banco
            $db      = \Config\Database::connect();
            $builder = $db->table('backupcodes');
            $affectedRows = $builder->insertBatch($backupCodes);
        }

        //log_message('debug', __FILE__ . ' - ' . __LINE__ . ' - ' . __METHOD__ . ' - ' . __FUNCTION__ . ' - ' . __CLASS__ . ' - ' . __DIR__);
        $log_data = [
            'id' => $user->id,
            'username' => $user->username,
            'ip_address' => $this->request->getIPAddress(),

        ];
        $data['backupCodes'] = objToArray($backupCodes);

        // gravando o log de criação do usuário
        log_message('info', 'User created successfully. ID: {id} - username: {username} - IP: {ip_address}', $log_data);

        return view('login/registerotp', $data);
    }



    public function auth()
    {

        $validated = $this->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ],
            [
                'username' => [
                    'required' => 'Nome de usuário é requerido'
                ],
                'password' => [
                    'required' => 'Password é requerido'
                ]
            ]
        );

        if (!$validated) {
            return redirect()->route('login')->with('errors', $this->validator->getErrors())->withInput();
        }

        //dd($this->request->getPost());

        $user = new UserModel();
        $userFound = $user->where('username', $this->request->getPost('username'))->first();

        if (!$userFound) {
            return redirect()->route('login')->with('message', 'Usuário ou senha inválidos')->withInput();
        }

        if (!password_verify($this->request->getPost('password'), $userFound->password)) {
            return redirect()->route('login')->with('message', 'Usuário ou senha inválidos')->withInput();
        }

        unset($userFound->password);
        session()->set('user', (array)$userFound);


        //dd($userFound);

        $info = [
            'id'         => $userFound->id,
            'username'   => $userFound->username,
            'ip_address' => $this->request->getIPAddress(),
        ];

        log_message('info', 'Login: User {id} - {username} logged into the system from {ip_address}', $info);

        service('auth')->generateSessionUid();

        //$authorize = service('authorize');

        //$roles = $authorize->getRoles($userFound->id);
        //dump($roles);

        //$permissionsUser = $authorize->getPermissionsByUser($userFound->id);
        //dump($permissionsUser);

        //$permissionsRoles = $authorize->getPermissonsByRoles($roles);
        //dump($permissionsRoles);

        //$permissions = array_merge($permissionsUser, $permissionsRoles);
        //$permissions = $permissionsUser + $permissionsRoles;
        //$permissions =  [...$permissionsUser, ...$permissionsRoles];

        //session()->set('roles', $roles);
        //session()->set('permissions', $permissions);

        return redirect()->to('login/checkotp');
    }

    public function otp()
    {

        $data = [
            'title'     => 'Check OTP Page',
        ];
        return view('login/checkotp', $data);
    }

    public function checkOtp()
    {

        // se não existir a sessão do usuário, redireciona para a página de login
        if (!session()->has('user')) {
            session()->destroy();
            return redirect()->route('login')->with('error', 'Ocorreu um erro')->withInput();
        }

        // validador
        $validated = $this->validate(
            [
                'otp' => 'required|exact_length[6,8]'
            ],
            [
                'otp' => [
                    'required' => 'Código OTP é requerido',
                    'exact_length' => 'Código OTP deve ter entre 6 e 8 caracteres',
                ]
            ]
        );

        // se não passar na validação, retorna para a página de login com os erros
        if (!$validated) {
            return redirect()->to('login/checkotp')->with('errors', $this->validator->getErrors())->withInput();
        }

        $otp_secret = session()->has('user') ? session()->get('user')['otp_secret'] : null;
        $otp_ts = session()->has('user') ? session()->get('user')['otp_ts'] : null;
        $otp = $this->request->getPost('otp');

        // se o código for 8 caracteres, é um código de backup
        if (strlen($otp) == 8) {
            if (!$this->checkBackupCode($otp)) {
                return redirect()->to('login/checkotp')->with('message', 'Código OTP inválido')->withInput();
            }
        } else {

            // se não, é um código OTP normal
            $google2fa = new Google2FA();

            // metodo para garantir que cada código seja utilizado uma única vez
            $timestamp = $google2fa->verifyKeyNewer($otp_secret, $otp, $otp_ts);

            // se for false, é pq o código é inválido
            if ($timestamp === false) {
                return redirect()->to('login/checkotp')->with('message', 'Código OTP inválido')->withInput();
            }

            // atualizar o timestamp do OTP no usuário
            $userModel = new UserModel();
            $data = [
                'id'     => session()->get('user')['id'],
                'otp_ts' => $timestamp,
            ];
            $userModel->save($data);
        }

        session()->push('user', ['otp_verified' => 1]);

        return redirect()->route('employees.index');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->route('login');
    }

    private function checkBackupCode($code)
    {

        $backupCodesModel = new BackupcodesModel();
        $backupCode = $backupCodesModel
            ->where('cod_user', session()->get('user')->id)
            ->where('used', 0)
            ->where('backup_code', $code)
            ->first();

        // se não retornar nada é por que o usuário não tem mais códigos de backup
        // ou o código não existe ou já foi utilizado
        if (!$backupCode) {
            return false;
        }

        // se o código for válido, marca como utilizado
        $backupCode->used = 1;
        $backupCodesModel->save($backupCode);

        // se o código for válido, retorna true
        return true;

        /*
        $db      = \Config\Database::connect();
        $builder = $db->table('backupcodes');
        $builder->select('backup_code');
        $builder->where('cod_user', session()->get('user')->id);
        $builder->where('used', 0);
        $query = $builder->get();

        // se não retornar nada é por que o usuário não tem mais códigos de backup
        if ($query->getNumRows() < 1) {
            return false;
        }

        $backupCodes = $query->getResult();

        dd($backupCodes);
        */
    }

    // private function getRoles(int $id)
    // {

    //     $roles = [];

    //     if (empty($id)) {
    //         return $roles;
    //     }

    //     $rolesModel = new RoleModel();
    //     $rolesFound = $rolesModel
    //         ->select('roles.id, roles.key')
    //         ->join('role_user', 'role_user.role_id = roles.id')
    //         ->join('users', 'users.id = role_user.user_id')
    //         ->where('users.id', $id)
    //         ->findAll();

    //     if (empty($rolesFound)) {
    //         return $roles;
    //     }

    //     // planificando o array retornado
    //     foreach ($rolesFound as $role) {
    //         $roles[$role['id']] = $role['key'];
    //     }

    //     return $roles;
    // }

    // private function getPermissionsUser(int $id)
    // {

    //     $permissions = [];

    //     if (empty($id)) {
    //         return $permissions;
    //     }

    //     $permissionsUserModel = new PermissionModel();
    //     $permissionsFound = $permissionsUserModel
    //         ->select('permissions.id, permissions.key')
    //         ->join('permission_user', 'permission_user.permission_id = permissions.id')
    //         ->join('users', 'users.id = permission_user.user_id')
    //         ->where('users.id', $id)
    //         ->findAll();


    //     if (empty($permissionsFound)) {
    //         return $permissions;
    //     }

    //     // planificando o array retornado
    //     foreach ($permissionsFound as $permission) {
    //         $permissions[$permission['id']] = $permission['key'];
    //     }

    //     return $permissions;
    // }

    // private function getPermissonsRoles($id)
    // {
    //     $permissions = [];

    //     if (empty($id)) {
    //         return $permissions;
    //     }

    //     // pegando as chaves que são os IDs 
    //     // e ajustando apara a clausula IN do SQL
    //     $ids = array_keys($id);

    //     $permissionsModel = new PermissionModel();
    //     $permissionsFound = $permissionsModel
    //         ->select('permissions.id, permissions.key')
    //         ->join('permission_role', 'permission_role.permission_id = permissions.id')
    //         ->join('roles', 'roles.id = permission_role.role_id')
    //         ->whereIn('roles.id', $ids)
    //         ->findAll();

    //     if (empty($permissionsFound)) {
    //         return $permissions;
    //     }

    //     // planificando o array retornado
    //     foreach ($permissionsFound as $permission) {
    //         $permissions[$permission['id']] = $permission['key'];
    //     }

    //     return $permissions;
    // }
}
