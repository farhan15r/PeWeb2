<?php

namespace App\Models;

use CodeIgniter\Model;

class KonversiSuhuModel extends Model
{
    protected $table = 'konversi_suhu';
    protected $allowedFields = ['satuan_id', 'suhu', 'kondisi'];
}
