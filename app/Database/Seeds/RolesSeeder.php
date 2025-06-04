<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $keys = [
            "admin" => "admin",
            "writer" => "writer",
            "editor" => "editor",
            "reader" => "reader",
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

        $this->db->table('roles')->insertBatch($data);
    }
}
