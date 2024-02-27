<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('admin/index', $data);
    }

    public function muser()
    {
        $data['title'] = 'User list';

        $this->builder->select('users.id as userid, username, email, name, created_at');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('admin/muser', $data);
    }

    public function detail($id = 0)
    {
        $data['title'] = 'Detail User';

        $this->builder->select('users.id as userid, username, email, userimage, name,');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/detail', $data);
    }

    // public function laporan()
    // {
    //     $data['title'] = 'Laporan';
    //     return view('admin/laporan', $data);
    // }
}
