<?php

namespace App\Models;

use CodeIgniter\Model;

class SatuanSuhuModel extends Model
{
    protected $table = 'satuan_suhu';
    protected $allowedFields = ['nama'];
}
