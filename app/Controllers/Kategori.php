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
            'datakategori' => $this->kategori->paginate(10, 'kategori'),
            'pager' => $this->kategori->pager,
            'nohalaman' => $noHalaman
        ];
        
        return view('/kasir/kategori/data', $data);
    }

    function formTambah(){
        if($this->request->isAJAX()){
            $msg = [
                'data' => view('kategori/modalformtambah')
            ];
            echo json_encode($msg);
        }else {
            exit('Maaf tidak ada halaman yang bisa ditampilkan');
        }
    }
}