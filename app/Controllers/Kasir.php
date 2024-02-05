<?php

namespace App\Controllers;

class Kasir extends BaseController
{
   public function index()
    {
        $data = [
            'title' => 'Dashbord'
        ];
        return view('kasir/index', $data);
    }
}
