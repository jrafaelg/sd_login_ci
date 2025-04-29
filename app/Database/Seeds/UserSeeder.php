<?php

namespace App\Database\Seeds;


use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
{

    /**
     * password gerado no run()
     */
    private string $password = '';

    /**
     * public key que para testes, será igual para todos
     */
    private string $pubKey = '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsvrU0av14BmkVDwMNwwV
JG+jSVexpKQjw40/dwTK8HiwXNDSBopozMFHztQtab+tyhOl+KAf9dVlIq5HZ3RG
fddT6YfsuEDzY6uasQuzfYetvzteWbIrVH2Gi1rpAEnPsLY1Ep4sMxYd+7ymScaF
d/SOk27MHxxCN8SQDxSUkQXg1bCn81s966XHUSWwBwR3QNhEb3TexYipF+LETAOL
I+U0qwAyev5pVOrn6YNvFAPX6MVEKqjXZeJ3XzpWs7LkQQfzwU7T8BcRECohjC1W
ox36GlcE1N6wkQkRwiBtPUTmx+3Xr4+5Dv62wZAeySIxtEuijQ5qMISqK3OvAJMo
9QIDAQAB
-----END PUBLIC KEY-----';


    /**
     * private key que para testes, será igual para todos
     */
    private string $privKey = '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';


    /**
     * tabela que receberá que a seed
     */
    private string $table = 'users';

    /**
     *
     */
    public function run()
    {

        $this->password = password_hash('123456', PASSWORD_BCRYPT);

        $data = [
            'username' => 'jrafaelg',
            'password' => $this->password,
            //'otp_secret' => '6EWSOFFEF3OM5RDW',
            'otp_secret' => 'JBSWY3DPEHPK3PXP',
            'otp_ts' => '58071289',
            'private_key' => $this->privKey,
            'public_key' => $this->pubKey,
        ];

        // Using Query Builder
        $this->db->table($this->table)->insert($data);

        // gerando fakers para preencher a tabela
        for ($i = 0; $i < 10; $i++) {
            $users[$i] = $this->generateFake();
        }

        $this->db->table($this->table)->insertBatch($users);
    }

    /**
     * gerador de dados fakes
     */
    private function generateFake()
    {

        $fakerObject = Factory::create();

        return array(
            'username' => $fakerObject->userName,
            'password' => $this->password,
            'otp_secret' => 'JBSWY3DPEHPK3PXP',
            'otp_ts' => '58071289',
            'private_key' => $this->privKey,
            'public_key' => $this->pubKey,
        );
    }
}
