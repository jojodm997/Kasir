<?php

namespace App\Controllers;

use App\Models\Modelproduk;
use \Dompdf\Dompdf;


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

    public function generatepdf()
    {
        $dompdf = new Dompdf();

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

        $html = view('admin/laporan', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}
