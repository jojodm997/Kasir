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
        $noHalaman = $this->request->getVar('page_kategori') ? $this->request->getVar('page_kategori') : 1;
        $data = [
            'datakategori' => $this->kategori->paginate(2, 'kategori'),
            'pager' => $this->kategori->pager,
            'nohalaman' => $noHalaman
        ];
        
        return view('/kasir/kategori/data', $data);
    }

    function formTambah(){
        if($this->request->isAJAX()){
            $msg = [
                'data' => view('kasir/kategori/modalformtambah')
            ];
            echo json_encode($msg);
        }else {
            exit('Maaf tidak ada halaman yang bisa ditampilkan');
        }
    }

    public function simpandata(){
         if($this->request->isAJAX()){
             $namakategori = $this->request->getVar('namakategori');
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
        if ($this->request->isAJAX()){
            $idkategori = $this->request->getVar('idkategori');

            $this->kategori->delete($idkategori);

            $msg = [
                'sukses' => 'Kategori berhasil dihapus'
            ];
            echo json_encode($msg);
        }
    }
}