<?php

namespace App\Controllers;

use App\Models\Modelproduk;


class Laporan extends BaseController
{
    public function __construct()
    {
        $this->produk = new Modelproduk();
    }

    public function index()
    {
        $tombolCari = $this->request->getPost('tombolcariproduk');

        if (isset($tombolCari)) {
            $cari = $this->request->getPost('cariproduk');
            session()->set('cariproduk', $cari);
            redirect()->to('/produk/index');
        } else {
            $cari = session()->get('cariproduk');
        }

        $dataProduk = $cari ? $this->produk->cariData($cari) : $this->produk;

        $noHalaman = $this->request->getVar('page_produk') ? $this->request->getVar('page_produk') : 1;
        $data = [
            'dataproduk' => $dataProduk->paginate(100, 'produk'),
            'pager' => $this->produk->pager,
            'nohalaman' => $noHalaman
        ];

        return view('admin/laporan', $data);
    }
}
