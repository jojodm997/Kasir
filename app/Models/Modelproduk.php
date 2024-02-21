<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelproduk extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'kodebarcode';

    protected $allowedFields = ['katid', 'katnama'];

}