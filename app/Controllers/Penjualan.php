<?php
// changes
namespace App\Controllers;

use App\Models\Modeldataproduk;
use Config\Services;

class Penjualan extends BaseController
{
    public function index()
    {
        return view('kasir/penjualan/index');
    }

    public function input()
    {
        $data = [
            'nofaktur' => $this->buatFaktur()
        ];
        return view('kasir/penjualan/input', $data);
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

        return $fakturPenjualan;
    }

    public function dataDetail()
    {
        $nofaktur = $this->request->getPost('nofaktur');

        $tempPenjualan = $this->db->table('temp_penjualan');
        $queryTampil = $tempPenjualan->select('detjual_id as id, detjual_kodebarcode as kode, namaproduk,detjual_hargajual as hargajual, detjual_jml as qty,detjual_subtotal as subtotal')->join('produk', 'detjual_kodebarcode=kodebarcode')->where('detjual_faktur', $nofaktur)->orderBy('detjual_id', 'asc');

        $data = [
            'datadetail' => $queryTampil->get()
        ];

        $msg = [
            'data' => view('kasir/penjualan/viewdetail', $data)
        ];

        echo json_encode($msg);
    }

    public function viewDataProduk()
    {
        $keyword = $this->request->getPost('keyword');
        $data = [
            'keyword' => $keyword
        ];
        if ($this->request->isAJAX()) {
            $msg = [
                'viewmodal' => view('kasir/penjualan/viewmodalcariproduk', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function listDataProduk()
    {
        if ($this->request->isAJAX()) {
            $request = Services::request();
            $modelProduk = new Modeldataproduk($request);
            if ($request->getMethod(true) == 'POST') {
                $lists = $modelProduk->get_datatables();
                $data = [];
                $no = $request->getPost("start");
                foreach ($lists as $list) {
                    $no++;
                    $row = [];
                    $row[] = $no;
                    $row[] = $list->kodebarcode;
                    $row[] = $list->namaproduk;
                    $row[] = $list->katnama;
                    $row[] = number_format($list->stok_tersedia, 0, ",", ".");
                    $row[] = number_format($list->harga_jual, 0, ",", ".");
                    $row[] = "<button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"pilihitem('" . $list->kodebarcode . "','" . $list->namaproduk . "') \">Pilih</button>";
                    $data[] = $row;
                }
                $output = [
                    "draw" => $request->getPost('draw'),
                    "recordsTotal" => $modelProduk->count_all(),
                    "recordsFiltered" => $modelProduk->count_filtered(),
                    "data" => $data
                ];
                echo json_encode($output);
            }
        }
    }

    public function simpanTemp()
    {
        if ($this->request->isAJAX()) {
            $kodebarcode = $this->request->getPost('kodebarcode');
            $namaproduk = $this->request->getPost('namaproduk');
            $jumlah = $this->request->getPost('jumlah');
            $nofaktur = $this->request->getPost('nofaktur');

            $queryCekProduk = $this->db->table('produk')->like('kodebarcode', $kodebarcode)->orlike('namaproduk', $kodebarcode)->get();

            $totalData = $queryCekProduk->getNumRows();

            if ($totalData > 1) {
                $msg = [
                    'totaldata' => 'banyak'
                ];
            } else {
                $msg = [
                    'totaldata' => 'satu'
                ];
            }
            echo json_encode($msg);
        }
    }
}
