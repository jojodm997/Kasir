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

        // Tambahkan detik dan menit
        $detikMenit = date('is'); // Mengambil detik dan menit saat ini
        $fakturPenjualan .= $detikMenit;

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
        if ($this->request->isAJAX()) {
            $keyword = $this->request->getPost('keyword');
            $data = [
                'keyword' => $keyword
            ];

            $msg = [
                'viewmodal' => view('kasir/penjualan/viewmodalcariproduk', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function listDataProduk()
    {
        if ($this->request->isAJAX()) {
            $keywordkode = $this->request->getPost('keywordkode');
            $request = Services::request();
            $modelProduk = new Modeldataproduk($request);
            if ($request->getMethod(true) == 'POST') {
                $lists = $modelProduk->get_datatables($keywordkode);
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
                    "recordsTotal" => $modelProduk->count_all($keywordkode),
                    "recordsFiltered" => $modelProduk->count_filtered($keywordkode),
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

            if (strlen($namaproduk) > 0) {
                $queryCekProduk = $this->db->table('produk')->where('kodebarcode', $kodebarcode)->where('namaproduk', $namaproduk)->get();
            } else {
                $queryCekProduk = $this->db->table('produk')->like('kodebarcode', $kodebarcode)->orlike('namaproduk', $kodebarcode)->get();
            }
            $totalData = $queryCekProduk->getNumRows();

            if ($totalData > 1) {
                $msg = [
                    'totaldata' => 'banyak'
                ];
            } else if ($totalData == 1) {
                $tblTempPenjualan = $this->db->table('temp_penjualan');
                $rowProduk = $queryCekProduk->getRowArray();

                $stokProduk = $rowProduk['stok_tersedia'];

                if (intval($stokProduk) == 0) {
                    $msg = [
                        'error' => 'Maaf Stok tidak mencukupi'
                    ];
                } else if ($jumlah > intval($stokProduk)) {
                    $msg = [
                        'error' => 'Maaf stok tidak mencukupi'
                    ];
                } else {
                    $insertData = [
                        'detjual_faktur' => $nofaktur,
                        'detjual_kodebarcode' => $rowProduk['kodebarcode'],
                        'detjual_hargabeli' => $rowProduk['harga_beli'],
                        'detjual_hargajual' => $rowProduk['harga_jual'],
                        'detjual_jml' => $jumlah,
                        'detjual_subtotal' => floatval($rowProduk['harga_jual']) * $jumlah
                    ];

                    $tblTempPenjualan->insert($insertData);

                    $msg = ['sukses' => 'berhasil'];
                }
            } else {
                $msg = ['error' => 'Maaf produk tidak ditemukan'];
            }

            echo json_encode($msg);
        }
    }

    public function hitungTotalBayar()
    {
        if ($this->request->isAJAX()) {
            $nofaktur = $this->request->getPost('nofaktur');

            $tblTempPenjualan = $this->db->table('temp_penjualan');

            $queryTotal =  $tblTempPenjualan->select('SUM(detjual_subtotal) as totalbayar')->where('detjual_faktur', $nofaktur)->get();
            $rowTotal = $queryTotal->getRowArray();

            $msg = [
                'totalbayar' => number_format($rowTotal['totalbayar'], 0, ",", ".")
            ];
            echo json_encode($msg);
        }
    }

    public function hapusItem()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getPost('id');
            $tblTempPenjualan = $this->db->table('temp_penjualan');
            $queryHapus = $tblTempPenjualan->delete(['detjual_id' => $id]);

            if ($queryHapus) {
                $msg = [
                    'sukses' => 'berhasil'
                ];
                echo json_encode($msg);
            }
        }
    }

    public function batalTransaksi()
    {
        if ($this->request->isAJAX()) {
            $nofaktur = $this->request->getPost('nofaktur');

            $tblTempPenjualan = $this->db->table('temp_penjualan');
            $hapusData = $tblTempPenjualan->emptyTable();

            if ($hapusData) {
                $msg = [
                    'sukses' => 'berhasil'
                ];
            }

            echo json_encode($msg);
        }
    }

    public function pembayaran()
    {
        if ($this->request->isAJAX()) {
            $nofaktur = $this->request->getPost('nofaktur');
            $tglfaktur = $this->request->getPost('tglfaktur');
            $kopel = $this->request->getPost('kopel');

            $tblTempPenjualan = $this->db->table('temp_penjualan');
            $cekDataTempPenjualan = $tblTempPenjualan->getWhere(['detjual_faktur' => $nofaktur]);

            $queryTotal =  $tblTempPenjualan->select('SUM(detjual_subtotal) as totalbayar')->where('detjual_faktur', $nofaktur)->get();
            $rowTotal = $queryTotal->getRowArray();

            if ($cekDataTempPenjualan->getNumRows() > 0) {
                $data = [
                    'nofaktur' => $nofaktur,
                    'kopel' => $kopel,
                    'totalbayar' => $rowTotal['totalbayar']
                ];

                $msg = [
                    'data' => view('kasir/penjualan/modalpembayaran', $data)
                ];
            } else {
                $msg = [
                    'error' => 'Maaf itemnya belum ada'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function simpanPembayaran()
    {
        if ($this->request->isAJAX()) {
            $nofaktur = $this->request->getPost('nofaktur');
            $kopel = $this->request->getPost('kopel');
            $totalkotor = $this->request->getPost('totalkotor');
            $totalbersih = str_replace(",", "", $this->request->getPost('totalbersih'));
            $dispersen = str_replace(",", "", $this->request->getPost('dispersen'));
            $disuang = str_replace(",", "", $this->request->getPost('disuang'));
            $jmluang = str_replace(",", "", $this->request->getPost('jmluang'));
            $sisauang = str_replace(",", "", $this->request->getPost('sisauang'));

            $tblPenjualan = $this->db->table('penjualan');
            $tblTempPenjualan = $this->db->table('temp_penjualan');
            $tblDetailPenjualan = $this->db->table('penjualan_detail');

            $dataInsertPenjualan = [
                'jual_faktur' => $nofaktur,
                'jual_tgl' => date('Y-m-d H:i:s'),
                'jual_pelkode' => $kopel,
                'jual_dispersen' => $dispersen,
                'jual_disuang' => $disuang,
                'jual_totalkotor' => $totalkotor,
                'jual_totalbersih' => $totalbersih,
                'jual_jmluang' => $jmluang,
                'jual_sisauang' => $sisauang,
            ];

            $tblPenjualan->insert($dataInsertPenjualan);

            $ambilDataTemp = $tblTempPenjualan->getWhere(['detjual_faktur' => $nofaktur]);

            $fieldDetailPenjualan = [];
            foreach ($ambilDataTemp->getResultArray() as $row) {
                $fieldDetailPenjualan[] = [
                    'detjual_faktur' => $row['detjual_faktur'],
                    'detjual_kodebarcode' => $row['detjual_kodebarcode'],
                    'detjual_hargabeli' => $row['detjual_hargabeli'],
                    'detjual_hargajual' => $row['detjual_hargajual'],
                    'detjual_jml' => $row['detjual_jml'],
                    'detjual_subtotal' => $row['detjual_subtotal'],

                ];
            }

            $tblDetailPenjualan->insertBatch($fieldDetailPenjualan);

            $tblPenjualan->emptyTable();

            $msg = [
                'sukses' => 'berhasil'
            ];
            echo json_encode($msg);
        }
    }
}
