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

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        echo view('user/layout/header', $data);
        echo view('user/pages/index');
        echo view('user/layout/footer');
    }

     public function tables()
    {
        $data = [
            'title' => 'Dashboard | tables'
        ];
        echo view('user/layout/header', $data);
        echo view('user/pages/tables');
        echo view('user/layout/footer');
    }

    public function wallet(): string
    {
        $data = [
            'title' => 'Dashboard | wallet'
        ];
        return view ('user/pages/wallet', $data);
    }
}
