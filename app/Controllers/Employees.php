<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Employees extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function create()
    {
        $data = $this->request->getPost(['name', 'address', 'salary', 'cod_user', 'digital_sign']);

        // Checks whether the submitted data passed the validation rules.
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

        if ($employeesModel->insert($data)) {
            return redirect()->to('/employees')->with('success', 'Employee created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to create employee');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Employee',
        ];

        $employeesModel = model('EmployeesModel');

        $data['employee'] = $employeesModel->asArray()->find($id);

        if (empty($data['employee'])) {
            return redirect()->to('/employees')->with('error', 'Employee not found');
        }

        return view('employees/edit', $data);
    }

    public function update()
    {
        $data = $this->request->getPost(['name', 'address', 'salary', 'cod_user', 'digital_sign']);

        // Checks whether the submitted data passed the validation rules.
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

    public function delete($id)
    {
        $employeesModel = model('EmployeesModel');

        if ($employeesModel->delete($id)) {
            return redirect()->to('/employees')->with('success', 'Employee deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete employee');
        }
    }

    public function remove()
    {
        $id = $this->request->getPost('id');

        $employeesModel = model('EmployeesModel');

        if ($employeesModel->delete($id)) {
            return redirect()->to('/employees')->with('success', 'Employee deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete employee');
        }
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

        return view('employees/show', $data);
    }

    public function index()
    {
        $data = [
            'title'     => 'Employees Page',
        ];

        $employeesModel = model('EmployeesModel');

        $data['employees'] = $employeesModel->asArray()->findAll();

        return view('employees/index', $data);
    }

    public function new()
    {
        $data = [
            'title' => 'Add New Employee',
        ];

        return view('employees/new', $data);
    }
}
