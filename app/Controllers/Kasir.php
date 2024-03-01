<?php

namespace App\Controllers;

class Kasir extends BaseController
{
    public function index()
    {
        $datas = [
            'title' => 'Dashbord'
        ];
        return view('kasir/index', $datas);
    }
}
