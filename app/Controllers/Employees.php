<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Employees extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Employees Page',
        ];

        $employeesModel = model('EmployeesModel');

        $data['employees'] = $employeesModel->asArray()->findAll();

        return view('employees/index', $data);
    }
}
