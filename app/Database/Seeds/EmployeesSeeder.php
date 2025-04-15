<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        // for ($i = 0; $i < 100; $i++)
        // {
        //     $employe = $this->generateFakeEmploye();

        //     // Using Query Builder
        //     $this->db->table('employees')->insert($employe);
        // }


        for ($i = 0; $i < 100; $i++)
        {
            $employes[$i] = $this->generateFakeEmploye();

        }

        $this->db->table('employees')->insertBatch($employes);

    }

    private function generateFakeEmploye()
    {
        $fakerObject = Factory::create();

        return array(
            "name" => $fakerObject->name,
            "address" => $fakerObject->address,
            "salary" => random_int(1000, 99999999),
            "cod_user" => 1,
            "digital_sign" => random_int(1000, 99999999),
            "created_at" => date("Y-m-d H:i:s"),
        );

    }
}
