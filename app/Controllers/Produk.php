<?php

namespace App\Controllers;

use App\Models\Modelproduk;
use App\Models\ModelKategori;

class Produk extends BaseController
{
    public function __construct()
    {
        $this->produk = new Modelproduk();
        $this->kategori = new ModelKategori();
    }
    public function index()
    {
        return view('kasir/produk/data');
    }

    public function add()
    {
        return view('kasir/produk/formtambah');
    }

    public function ambilDataKategori()
    {
        if ($this->request->isAJAX()) {
            $datakategori = $this->kategori->findAll();

            $isidata = "<option value='' selected>-Pilih-</option>";

            foreach ($datakategori as $row) :
                $isidata .= '<option value="' . $row['katid'] . '">' . $row['katnama'] . '</option>';
            endforeach;

            $msg = [
                'data' => $isidata
            ];
            echo json_encode($msg);
        }
    }
}
