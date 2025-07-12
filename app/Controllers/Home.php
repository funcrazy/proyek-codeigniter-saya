<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (!session()->has('username')) {
            return redirect()->to('/login');
        }

        return view('home/index'); // dashboard utama
    }
}
