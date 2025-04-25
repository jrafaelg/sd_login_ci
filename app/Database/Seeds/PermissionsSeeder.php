<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $keys = [
            "post.view"=>"post view",
            "post.edit"=>"post edit",
            "post.delete"=>"post delete",
            "employee.view"=>"employee view",
            "employee.edit"=>"employee edit",
            "employee.delete"=>"employee delete",
        ];

        $data = [];
        $i = 0;
        foreach ($keys as $key => $value) {
            $data[$i] = [
                "key" => $key,
                "description" => $value
            ];
            $i++;
        };


        $this->db->table('permissions')->insertBatch($data);
    }
}
