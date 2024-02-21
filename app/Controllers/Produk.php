<?php

namespace App\Controllers;

use App\Models\Modelproduk;
use App\Models\ModelKategori;
use App\Models\Modelsatuan;

class Produk extends BaseController
{
    public function __construct()
    {
        $this->produk = new Modelproduk();
        $this->kategori = new ModelKategori();
        $this->satuan = new Modelsatuan();
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

    public function ambilDataSatuan()
    {
        if ($this->request->isAJAX()) {
            $datasatuan = $this->satuan->findAll();

            $isidata = "<option value='' selected>-Pilih-</option>";

            foreach ($datasatuan as $row) :
                $isidata .= '<option value="' . $row['satid'] . '">' . $row['satnama'] . '</option>';
            endforeach;

            $msg = [
                'data' => $isidata
            ];
            echo json_encode($msg);
        }
    }

    function simpandata()
    {
        if ($this->request->isAJAX()) {
            $kodebarcode = $this->request->getVar('kodebarcode');
            $namaproduk = $this->request->getVar('namaproduk');
            $stok = str_replace(',', '', $this->request->getVar('stok'));
            $kategori = $this->request->getVar('kategori');
            $satuan = $this->request->getVar('satuan');
            $hargabeli = str_replace(',', '', $this->request->getVar('hargabeli'));
            $hargajual = str_replace(',', '', $this->request->getVar('hargajual'));

            $validation =  \Config\Services::validation();

            $doValid = $this->validate([
                'kodebarcode' => [
                    'label' => 'Kode Barcode',
                    'rules' => 'is_unique[produk.kodebarcode]|required',
                    'errors' => [
                        'is_unique' => '{field} sudah ada, coba dengan kode yang lain',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'namaproduk' => [
                    'label' => 'Nama Produk',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'stok' => [
                    'label' => 'Stok Tersedia',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'kategori' => [
                    'label' => 'Kategori',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib dipilih'
                    ]
                ],
                'satuan' => [
                    'label' => 'Satuan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib dipilih'
                    ]
                ],
                'hargabeli' => [
                    'label' => 'Harga Beli',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong',
                    ]
                ],
                'hargajual' => [
                    'label' => 'Harga Jual',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh Kosong'
                    ]
                ],
                'uploadgambar' => [
                    'label' => 'Upload Gambar',
                    'rules' => 'mime_in[uploadgambar,image/png,image/jpg,image/jpeg]|ext_in[uploadgambar,png,jpg,jpeg]|is_image[uploadgambar]',
                ]
            ]);

            if (!$doValid) {
                $msg = [
                    'error' => [
                        'errorKodeBarcode' => $validation->getError('kodebarcode'),
                        'errorNamaProduk' => $validation->getError('namaproduk'),
                        'errorStok' => $validation->getError('stok'),
                        'errorKategori' => $validation->getError('kategori'),
                        'errorSatuan' => $validation->getError('satuan'),
                        'errorHargaBeli' => $validation->getError('hargabeli'),
                        'errorHargaJual' => $validation->getError('hargajual'),
                        'errorUpload' => $validation->getError('uploadgambar')
                    ]
                ];
            } else {
                $uploadGambar = $_FILES['uploadgambar']['name'];

                if ($uploadGambar != NULL) {
                    $namaFileGambar = "$kodebarcode-$namaproduk";
                    $fileGambar = $this->request->getFile('uploadgambar');
                    $fileGambar->move('assets/upload', $namaFileGambar . '.' . $fileGambar->getExtension());

                    $pathGambar = '.assets/upload/' . $fileGambar->getName();
                } else {
                    $pathGambar = '';
                }

                $this->produk->insert([
                    'kodebarcode' => $kodebarcode,
                    'namaproduk' => $namaproduk,
                    'produk_satid' => $satuan,
                    'produk_katid' => $kategori,
                    'stok_tersedia' => $stok,
                    'hargabeli' => $hargabeli,
                    'hargajual' => $hargajual,
                    'gambar' => $pathGambar
                ]);

                $msg = [
                    'sukses' => 'Berhasil dieksekusi'
                ];
            }

            echo json_encode($msg);
        }
    }
}
