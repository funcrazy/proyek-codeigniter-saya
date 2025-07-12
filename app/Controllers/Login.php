<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth()
    {
        $usersModel = new UsersModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $usersModel->where('username', $username)->first();

        if (!$user || $user['password'] !== $password) {
            session()->setFlashdata('message', 'Username atau Password Salah');
            return redirect()->to('/login');
        }

        session()->set('username', $username);
        return redirect()->to('/');
    }

    public function logout()
    {
        session()->remove('username');
        return redirect()->to('/login');
    }
}
