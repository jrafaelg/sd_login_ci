<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('RolesSeeder');
        $this->call('PermissionsSeeder');
        $this->call('PostsSeeder');
        $this->call('EmployeesSeeder');
        $this->call('CommentsSeeder');
    }
}
