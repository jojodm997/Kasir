<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
    {
        $data = [
            'title' => 'Dashboard | Kasir'
        ];
        echo view('auth/layout/header', $data);
        echo view('auth/pages/login');
        echo view('auth/layout/footer');
    }

    public function register()
    {
        $data = [
            'title' => 'Dashboard | Kasir'
        ];
        echo view('auth/layout/header', $data);
        echo view('auth/pages/register');
        echo view('auth/layout/footer');
    }

    public function user()
    {
        return view('user/index');
    }
}
