<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldatadetail extends Model
{
    protected $table      = 'penjualan_detail';
    protected $primaryKey = 'detjual_id';

    protected $allowedFields = [
        'detjual_faktur',
        'detjual_kodebarcode',
        'detjual_hargabeli',
        'detjual_hargajual',
        'detjual_jml',
        'detjual_subtotal'

    ];



    public function cariData($cari)
    {
        return $this->table('produk')->join('kategori', 'katid=produk_katid')->join('satuan', 'satid=produk_satid')
            ->orlike('kodebarcode', $cari)->orlike('namaproduk', $cari);
    }
}
