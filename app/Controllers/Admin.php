<?php

namespace App\Controllers;

class Admin extends BaseController
{
   public function index()
    {
        $data ['title'] = 'User list';
        $users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll();
        return view('admin/index', $data);
    }
}
