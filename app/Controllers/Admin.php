<?php

namespace App\Controllers;

class Admin extends BaseController
{
   public function index()
    {
        $data = [
            'title' => 'User List'
        ];
        return view('admin/index', $data);
    }

    public function musers()
    {
        $users = new \MyAuth\Auth\Models\UserModel();
        $data['users'] = $users->findAll();
        return view('admin/musers');
    }
}
