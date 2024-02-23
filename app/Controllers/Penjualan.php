<?php
// changes
namespace App\Controllers;

class Penjualan extends BaseController
{
    public function index()
    {
        return view('kasir/penjualan/index');
    }

    public function input()
    {
        return view('kasir/penjualan/input');
    }

    public function buatFaktur()
    {
        $tgl = $this->request->getPost('tanggal');
        $query = $this->db->query("SELECT MAX(jual_faktur) AS nofaktur FROM penjualan WHERE DATE_FORMAT(jual_tgl, '%Y-%m-%d') = '$tgl'");
        $hasil = $query->getRowArray();
        $data = $hasil['nofaktur'];

        $lastNoUrut = substr($data, -4);

        $nextNoUrut = intval($lastNoUrut) + 1;

        $fakturPenjualan = 'J' . date('dmy', strtotime($tgl)) . sprintf('%04s', $nextNoUrut);

        $msg = ['fakturpenjualan' => $fakturPenjualan];
        echo json_encode($msg);
    }
}
