<?php

namespace App\Controllers;

use App\Models\Modelproduk;

class Produk extends BaseController
{
    public function __construct()
    {
        $this->produk = new Modelproduk();
    }
    public function index()
    {
        return view('kasir/produk/data');
    }

    public function add()
    {
        return view('kasir/produk/formtambah');
    }
}
