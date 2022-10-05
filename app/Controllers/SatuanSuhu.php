<?php

namespace App\Controllers;

//memanggil model
use App\Models\SatuanSuhuModel;

class SatuanSuhu extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->SatuanSuhuModel = new SatuanSuhuModel();
    }

    public function list()
    {
        //select data from table buku
        $list = $this->SatuanSuhuModel->orderBy('nama')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('satuan_suhu_list', $output);
    }
}
