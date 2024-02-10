<?php

namespace App\Controllers;

class Admin extends BaseController
{
   public function index()
    {
        $data ['title'] = 'Dashboard';
        return view('admin/index', $data);
    }

    public function muser()
    {
        $data ['title'] = 'User list';
        $users = new \Myth\Auth\Models\UserModel();
        $data['users'] = $users->findAll();
        return view('admin/muser', $data);
    }

    public function laporan()
    {
        $data ['title'] = 'Laporan';
        return view('admin/laporan', $data);
    }
}
