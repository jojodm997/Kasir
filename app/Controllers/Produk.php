<?php

namespace App\COntrollers;

use App\Models\Modelproduk;

class Produk extends BaseController
{
    public function __construct()
    {
        $this->>produk = new Modelproduk();
    }
    public function index()
    {
        return view('')
    }
}