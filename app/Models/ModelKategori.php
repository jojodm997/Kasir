<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKategori extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'katid';

    protected $allowedFields = ['katid', 'katnama'];

}