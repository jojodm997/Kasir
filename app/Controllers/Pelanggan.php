<?php

namespace App\Controllers;


use App\Models\Modelpelanggan;


class Pelanggan extends BaseController
{
    public function __construct()
    {

        $this->pelanggan = new Modelpelanggan();
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

        $dataPelanggan = $cari ? $this->pelanggan->cariData($cari) : $this->pelanggan;

        $noHalaman = $this->request->getVar('page_produk') ? $this->request->getVar('page_produk') : 1;
        $data = [
            'datapelanggan' => $dataPelanggan->paginate(5, 'pelanggan'),
            'pager' => $this->pelanggan->pager,
            'nohalaman' => $noHalaman
        ];

        return view('/kasir/pelanggan/data', $data);
    }


    public function add()
    {
        return view('kasir/pelanggan/formtambah');
    }


    public function simpandata()
    {
        if ($this->request->isAJAX()) {
            $pel_nama = $this->request->getVar('pel_nama');
            $pel_alamat = $this->request->getVar('pel_alamat');
            $pel_telp = $this->request->getVar('pel_telp');



            $validation =  \Config\Services::validation();

            $doValid = $this->validate([
                'pel_nama' => [
                    'label' => 'Nama Pelanggan',
                    'rules' => 'is_unique[pelanggan.pel_nama]|required',
                    'errors' => [
                        'is_unique' => '{field} sudah ada, coba dengan nama yang lain',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'pel_alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'pel_telp' => [
                    'label' => 'Nomor Telepon',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
            ]);


            if (!$doValid) {
                $msg = [
                    'error' => [
                        'errorPelNama' => $validation->getError('pel_nama'),
                        'errorPelAlamat' => $validation->getError('pel_alamat'),
                        'errorPelTelp' => $validation->getError('pel_telp'),

                    ]
                ];
            } else {
                $this->pelanggan->insert([
                    'pel_nama' => $pel_nama,
                    'pel_alamat' => $pel_alamat,
                    'pel_telp' => $pel_telp,
                ]);

                $msg = [
                    'sukses' => 'Berhasil dieksekusi'
                ];
            }

            echo json_encode($msg);
        }
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {
            $kode_pel = $this->request->getPost('kode');

            $this->pelanggan->delete($kode_pel);
            $msg = [
                'sukses' => 'Produk berhasil dihapus'
            ];

            echo json_encode($msg);
        }
    }

    public function edit($kode)
    {
        $row = $this->pelanggan->find($kode);

        if ($row) {
            $data = [

                'kode' => $row['pel_kode'],

                'nama' => $row['pel_nama'],
                'alamat' => $row['pel_alamat'],
                'telp' => $row['pel_telp'],

            ];
            return view('kasir/pelanggan/formedit', $data);
        } else {
            exit('Data Tidak Ditemukan');
        }
    }



    public function updatedata()
    {
        if ($this->request->isAJAX()) {
            $pel_kode = $this->request->getVar('pel_kode');
            $pel_nama = $this->request->getVar('pel_nama');
            $pel_alamat = $this->request->getVar('pel_alamat');
            $pel_telp = $this->request->getVar('pel_telp');

            $validation =  \Config\Services::validation();

            $doValid = $this->validate([
                'pel_nama' => [
                    'label' => 'Nama Pelanggan',
                    'rules' => 'is_unique[pelanggan.pel_nama]|required',
                    'errors' => [
                        'is_unique' => '{field} sudah ada, coba dengan nama yang lain',
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'pel_alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
                'pel_telp' => [
                    'label' => 'Nomor Telepon',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong'
                    ]
                ],
            ]);

            if (!$doValid) {
                $msg = [
                    'error' => [
                        'errorPelKode' => $validation->getError('pel_kode'),
                        'errorPelNama' => $validation->getError('pel_nama'),
                        'errorPelAlamat' => $validation->getError('pel_alamat'),
                        'errorPelTelp' => $validation->getError('pel_telp'),
                    ]
                ];
            } else {


                $this->pelanggan->update($pel_kode, [
                    'pel_nama' => $pel_nama,
                    'pel_alamat' => $pel_alamat,
                    'pel_telp' => $pel_telp,
                ]);


                $msg = [
                    'sukses' => 'Berhasil dieksekusi'
                ];
            }

            echo json_encode($msg);
        }
    }
}
