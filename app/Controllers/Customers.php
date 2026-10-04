<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $customers = $customerModel->findAll();

        return view('customers/index', [
            'customers' => $customers
        ]);
    }

    public function new()
    {
        return view('customers/new');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|valid_email'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $customerModel = new CustomerModel();

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $customerModel->insert($data);

        return redirect()->to('/customers');
    }

    public function edit($id)
    {
        $customerModel = new CustomerModel();

        $customer = $customerModel->find($id);

        if (!$customer) {
            return redirect()->to('/customers');
        }

        return view('customers/edit', [
            'customer' => $customer
        ]);
    }

    public function update($id)
    {
        $rules = [
            'full_name' => 'required',
            'email' => 'required|valid_email'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $customerModel = new CustomerModel();

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ];

        $customerModel->update($id, $data);

        return redirect()->to('/customers');
    }
}