<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelproduk extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'kodebarcode';

    protected $allowedFields = [
        'kodebarcode',
        'namaproduk',
        'stok_tersedia',
        'harga_beli',
        'harga_jual',

    ];



    public function cariData($cari)
    {
        return $this->table('produk')->join('kategori', 'katid=produk_katid')->join('satuan', 'satid=produk_satid')
            ->orlike('kodebarcode', $cari)->orlike('namaproduk', $cari);
    }
}
