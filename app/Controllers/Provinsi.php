<?php

namespace App\Controllers;

//memanggil model
use App\Models\ProvinsiModel;

class Provinsi extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->ProvinsiModel = new ProvinsiModel();
    }

    public function list()
    {
        //select data from table kategori
        $list = $this->ProvinsiModel->select('id, nama, wilayah')->orderBy('nama')->findAll();

        $output = [
            'list' => $list,
        ];
        // dd($list);
        return view('provinsi_list', $output);
    }

    public function insert()
    {
        return view('provinsi_insert');
    }

    public function insert_save()
    {
        $nama = $this->request->getVar('nama');
        $wilayah = $this->request->getVar('wilayah');

        //insert data ke table kategori
        $this->ProvinsiModel->insert([
            'nama' => $nama,
            'wilayah' => $wilayah,
        ]);

        return redirect()->to('provinsi');
    }

    public function update($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->ProvinsiModel->where('id', $id)->first();

        $output = [
            'data' => $data,
        ];

        return view('provinsi_update', $output);
    }

    public function update_save($id)
    {
        $nama = $this->request->getVar('nama');
        $wilayah = $this->request->getVar('wilayah');

        //update data ke table provinsi filter by id
        $this->ProvinsiModel->update($id, [
            'nama' => $nama,
            'wilayah' => $wilayah,
        ]);

        return redirect()->to('provinsi/');
    }

    public function delete($id)
    {
        //delete data table kategori filter by id
        $this->ProvinsiModel->delete($id);
        return redirect()->to('provinsi');
    }
}
