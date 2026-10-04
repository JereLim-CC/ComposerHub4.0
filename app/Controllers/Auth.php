<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel->where('username', $username)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->back()->withInput();
        }

        $session = session();

        $session->set([
            'isLoggedIn' => true,
            'userId' => $user['id'],
            'username' => $user['username']
        ]);

        return redirect()->to('/tasks');
    }
    public function logout()
    {
        $session = session();

        $session->destroy();

        return redirect()->to('/login');
    }
    
        
}
