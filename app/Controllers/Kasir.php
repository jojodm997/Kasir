<?php

namespace App\Controllers;

class Kasir extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Kasir'
        ];
        echo view('kasir/layout/header', $data);
        echo view('kasir/pages/index');
        echo view('kasir/layout/footer');
    }
    
    public function tables()
    {
        $data = [
            'title' => 'Dashboard | tables'
        ];
        echo view('kasir/layout/header', $data);
        echo view('kasir/pages/tables');
        echo view('kasir/layout/footer');
    }

    public function wallet(): string
    {
        $data = [
            'title' => 'Dashboard | wallet'
        ];
        return view ('kasir/pages/wallet', $data);
    }
}
