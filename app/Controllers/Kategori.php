<?php

namespace App\Controllers;

use App\Models\ModelKategori;

class Kategori extends BaseController
{
    public function __construct()
    {
        $this->kategori = new ModelKategori();
    }

    public function index()
    {

        $tombolCari = $this->request->getPost('tombolkategori');

        if (isset($tombolCari)) {
            $cari = $this->request->getPost('carikategori');
            session()->set('carikategori', $cari);
            redirect()->to('/kategori/index');
        } else {
            $cari = session()->get('carikategori');
        }

        $dataKategori = $cari ? $this->kategori->cariData($cari) : $this->kategori;

        $noHalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'datakategori' => $dataKategori->paginate(10, 'kategori'),
            'pager' => $this->kategori->pager,
            'nohalaman' => $noHalaman
        ];
        return view('/kasir/kategori/data', $data);
    }

    function formTambah()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'aksi' => $this->request->getPost('aksi')
            ];
            $msg = [
                'data' => view('kasir/kategori/modalformtambah', $data)
            ];
            echo json_encode($msg);
        } else {
            exit('Maaf tidak ada halaman yang bisa ditampilkan');
        }
    }

    public function simpandata()
    {
        if ($this->request->isAJAX()) {
            $namakategori = $this->request->getVar('namakategori');

            // Cek apakah nama kategori sudah ada di dalam database
            $existingKategori = $this->kategori->where('katnama', $namakategori)->countAllResults();
            if ($existingKategori > 0) {
                $msg = [
                    'error' => 'Nama kategori sudah ada.'
                ];
                echo json_encode($msg);
                return;
            }

            // Jika nama kategori belum ada di database, lakukan penyimpanan
            $this->kategori->insert([
                'katnama' => $namakategori
            ]);

            $msg = [
                'sukses' => 'Kategori berhasil ditambahkan'
            ];
            echo json_encode($msg);
        }
    }


    function hapus()
    {
        if ($this->request->isAJAX()) {
            $idkategori = $this->request->getVar('idkategori');

            // Nonaktifkan constraint foreign key sementara
            $this->db->query('SET FOREIGN_KEY_CHECKS=0');

            // Hapus data kategori
            $this->kategori->delete($idkategori);

            // Aktifkan kembali constraint foreign key
            $this->db->query('SET FOREIGN_KEY_CHECKS=1');

            $msg = [
                'sukses' => 'Kategori berhasil dihapus'
            ];
            echo json_encode($msg);
        }
    }


    function formEdit()
    {
        if ($this->request->isAJAX()) {
            $idKategori =  $this->request->getVar('idkategori');

            $ambildatakategori = $this->kategori->find($idKategori);
            $data = [
                'idkategori' => $idKategori,
                'namakategori' => $ambildatakategori['katnama']
            ];

            $msg = [
                'data' => view('kasir/kategori/modalformedit', $data)
            ];
            echo json_encode($msg);
        }
    }

    // Controller
    function updatedata()
    {
        if ($this->request->isAJAX()) {
            $idKategori = $this->request->getVar('idkategori');
            $namaKategori = $this->request->getVar('namakategori');

            // Cek apakah nama kategori sudah ada
            $existingCategory = $this->kategori->where('katnama', $namaKategori)->first();
            if ($existingCategory && $existingCategory['katid'] != $idKategori) {
                $msg = [
                    'error' => 'Nama kategori sudah ada dalam database.'
                ];
                echo json_encode($msg);
                return;
            }

            // Jika nama kategori belum ada, lakukan update
            $this->kategori->update($idKategori, [
                'katnama' => $namaKategori
            ]);

            $msg = [
                'sukses' =>  'Data kategori berhasil diupdate'
            ];
            echo json_encode($msg);
        }
    }
}
