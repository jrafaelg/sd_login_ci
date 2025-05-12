<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EmployeesModel;
use App\Models\UserModel;
use App\Libraries\Cipher;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;
use phpseclib3\Crypt\RSA;

class Employees extends BaseController
{

    protected $helpers = ['form'];

    private $ttl = 60;

    public function __construct()
    {
        $this->ttl = (int) env('cache.ttl', 60); // 1 minute
    }

    public function new()
    {
        $data = [
            'title' => 'Add New Employee',
        ];

        //return view('employees/new', $data);
        return $this->view('employees/new', $data);
    }

    public function create()
    {
        $data = $this->request->getPost(['name', 'address', 'salary', 'password_sign']);

        $validated = $this->validateData(
            $data,
            [
                'name'          => 'required|max_length[128]|min_length[3]',
                'address'       => 'required|max_length[5000]|min_length[10]',
                'salary'        => 'required|numeric',
                'password_sign' => 'required',
            ],
            [
                'name'         => [
                    'required'    => 'Name is required',
                    'max_length'  => 'Name cannot exceed 128 characters',
                    'min_length'  => 'Name must be at least 3 characters long',
                ],
                'address'      => [
                    'required'    => 'Address is required',
                    'max_length'  => 'Address cannot exceed 5000 characters',
                    'min_length'  => 'Address must be at least 10 characters long',
                ],
                'salary'       => [
                    'required'    => 'Salary is required',
                    'numeric'     => 'Salary must be a number',
                ],
                'password_sign' => [
                    'required'    => 'Password sign is required',
                ],
            ]
        );

        // Checks whether the submitted data passed the validation rules.
        if (!$validated) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }


        $deciphed_private_key = '';
        $cipher = new Cipher();

        // tentando decriptografar a chave privada
        $deciphed_private_key = $cipher->decrypt(session()->get('user')['private_key'], $data['password_sign']);

        // verificando se a chave privada foi decriptografada com sucesso
        if (empty($deciphed_private_key)) {
            // em caso de erro, retorna para a tela de cadastro
            $this->validator->setError('password_sign', 'Invalid password sign.');
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        // get resume form register data
        $resume = $data['name'] . $data['address'] . $data['salary'] . session()->get('user')['id'];

        // loading the deciphed private key
        $private = RSA::loadPrivateKey($deciphed_private_key);

        // sign the resume
        $sing = $private->sign($resume);
        $digital_sign = base64_encode($sing);

        // inserindo o código do usuário logado nos dados do funcionário
        $data['cod_user'] = session()->get('user')['id'];
        // inserindo a assinatura digital
        $data['digital_sign'] = $digital_sign;

        // instanciando o model
        $employeesModel = new EmployeesModel();

        try {
            $employeesModel->insert($data);
            // Clear the cache for employees
            cache()->delete('employees');
            return redirect()->to('/employees')->with('success', 'Employee created successfully')->withInput();
        } catch (\Exception $e) {

            // gerando o dados para o log
            $log_data = [
                'id' => session()->get('user')['id'],
                'username' => session()->get('user')['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to create employee: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to create employee. Try again.')->withInput();
        }
    }

    public function edit($id)
    {

        // if (! is_file(APPPATH . 'Views/pages/employees/edit.php')) {
        //     // Whoops, we don't have a page for that!
        //     throw new PageNotFoundException('edit');
        // }

        $data = [
            'title' => 'Edit Employee',
        ];

        $employeesModel = model('EmployeesModel');

        $data['employee'] = $employeesModel->asArray()->find($id);

        if (empty($data['employee'])) {
            return redirect()->to('/employees')->with('error', 'Employee not found');
        }

        return $this->view('employees/edit', $data);
    }

    public function update()
    {
        $data = $this->request->getPost(['name', 'address', 'salary', 'cod_user', 'digital_sign']);

        // Checks whether the submitted data passed the validtion rules.
        if (! $this->validateData($data, [
            'name'         => 'required|max_length[128]|min_length[3]',
            'address'      => 'required|max_length[5000]|min_length[10]',
            'salary'       => 'required|numeric',
            'cod_user'     => 'required|numeric',
            'digital_sign' => 'required|numeric',
        ])) {
            return redirect()->back()->withInput();
        }

        $employeesModel = model('EmployeesModel');

        if ($employeesModel->update($this->request->getPost('id'), $data)) {
            return redirect()->to('/employees')->with('success', 'Employee updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update employee');
        }
    }

    public function delete()
    {

        $employeesModel = model('EmployeesModel');

        $id = (int) $this->request->getPost('id');

        if (empty($id)) {
            return redirect()->back()->with('error', 'Failed to delete employee');
        }

        try {

            $employeesModel->delete($id);

            // Clear the cache for employees
            cache()->delete('employees');

            return redirect()->to('/employees')->with('success', 'Employee deleted successfully');
        } catch (\Exception $e) {

            // gerando o dados para o log
            $log_data = [
                'id' => session()->get('user')['id'],
                'username' => session()->get('user')['username'],
                'ip_address' => $this->request->getIPAddress(),
                'error' => $e->getMessage(),
            ];

            // Log the error message
            log_message('error', 'ID: {id} - username: {username} - IP: {ip_address} - Failed to delete employee: {error}', $log_data);

            return redirect()->back()->with('error', 'Failed to delete employee. Try again.');
        }
    }

    public function remove()
    {
        $id = $this->request->getPost('id');

        $employeesModel = model('EmployeesModel');

        if ($employeesModel->delete($id)) {
            // Clear the cache for employees
            cache()->delete('employees');
            return redirect()->to('/employees')->with('success', 'Employee deleted successfully');
        }

        return redirect()->back()->with('error', 'Failed to delete employee');
    }

    public function validateData1($data, $rules)
    {
        $validation = \Config\Services::validation();

        if (! $validation->setRules($rules)->run($data)) {
            return false;
        }

        return true;
    }

    public function show($id)
    {
        $data = [
            'title' => 'Employee Details',
        ];

        $employeesModel = model('EmployeesModel');

        $data['employee'] = $employeesModel->asArray()->find($id);

        if (empty($data['employee'])) {
            return redirect()->to('/employees')->with('error', 'Employee not found');
        }

        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('private_key, public_key');
        $builder->where('id', $data['employee']['cod_user']);
        $query = $builder->get();
        $keys = $query->getRowArray();

        if (empty($keys['public_key'])) {
            return redirect()->to('/employees')->with('error', 'Invalid keys');
        }


        // get resume form register data
        $resume = $data['employee']['name'] . $data['employee']['address'] . $data['employee']['salary'] . $data['employee']['cod_user'];

        $stored_public_key = $keys['public_key'];
        $public_key = RSA::loadPublicKey($stored_public_key);

        $stored_signature = $data['employee']['digital_sign'];
        $deciphed_signature = base64_decode($stored_signature);
        $digital_sign = $public_key->verify($resume, $deciphed_signature) ? 'valid signature' : 'invalid signature';

        $data['employee']['digital_sign'] = $digital_sign;

        try {
            return view('employees/show', $data);
        } catch (Exception $e) {
            throw new PageNotFoundException();
            //dd($e->getMessage());
        }



        $cipher = new Cipher();
        $deciphed_private_key = $cipher->decrypt($keys['private_key'], session()->get('user')['password_sign']);
        if (empty($deciphed_private_key)) {
            return redirect()->to('/employees')->with('error', 'Invalid password sign');
        }
        $public_key = $keys['public_key'];

        $userModel = new UserModel();
        $user = $userModel->asArray()->find($data['employee']['cod_user']);
        if (empty($user)) {
            return redirect()->to('/employees')->with('error', 'User not found');
        }
    }

    public function index()
    {
        $data = [
            'title'     => 'Employees Page',
        ];

        //dump(session_id());
        //dd(session()->get());

        $employeesModel = model('EmployeesModel');

        $employeesCached = cache()->remember('employees', $this->ttl, function () use ($employeesModel) {
            //dump('Cache created');
            return $employeesModel->asArray()->findAll();
        });

        $data['employees'] = $employeesCached;

        return view('employees/index', $data);
    }

    public function view(string $page = 'home', array $data = [], array $options = [])
    {

        // checa se o arquivo exite no disco
        if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        // chama a view() do core com a variável passada
        return view($page, $data, $options);
    }
}
