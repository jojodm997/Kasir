<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        echo view('auth/login', $data);
    }

    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
         return view('auth/register', $data);
    }

    public function user()
    {
        return view('user/index');
    }

    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('user/pages/index', $data);
    }

     public function tables()
    {
        $data = [
            'title' => 'Dashboard | tables'
        ];
        return view('user/pages/tables', $data);
    }

    public function wallet(): string
    {
        $data = [
            'title' => 'Dashboard | wallet'
        ];
        return view ('user/pages/wallet', $data);
    }
}
