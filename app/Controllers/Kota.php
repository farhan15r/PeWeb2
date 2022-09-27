<?php

namespace App\Controllers;

//memanggil model
use App\Models\KotaModel;
use App\Models\ProvinsiModel;

class Kota extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->KotaModel = new KotaModel();
        $this->ProvinsiModel = new ProvinsiModel();
    }

    public function list()
    {
        //select data from table buku
        $list = $this->KotaModel->select('kota.id, kota.nama, provinsi.nama AS provinsi_nama')->join('provinsi', 'kota.provinsi_id = provinsi.id')->orderBy('kota.nama ')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('kota_list', $output);
    }

    public function insert()
    {
        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_provinsi = $this->ProvinsiModel->orderBy('nama')->findAll();

        $output = [
            'data_provinsi' => $data_provinsi,
        ];

        return view('kota_insert', $output);
    }

    public function insert_save()
    {
        $provinsi_id = $this->request->getVar('provinsi_id');
        $nama = $this->request->getVar('nama');

        //insert data ke table buku
        $this->KotaModel->insert([
            'provinsi_id' => $provinsi_id,
            'nama' => $nama,
        ]);

        return redirect()->to('kota');
    }

    public function update($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->KotaModel->where('id', $id)->first();

        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_provinsi = $this->ProvinsiModel->orderBy('nama')->findAll();

        $output = [
            'data' => $data,
            'data_provinsi' => $data_provinsi,
        ];

        return view('kota_update', $output);
    }

    public function update_save($id)
    {
        // dd($this->request->getVar());
        $provinsi_id = $this->request->getVar('provinsi_id');
        $nama = $this->request->getVar('nama');

        //update data ke table buku filter by id
        $this->KotaModel->update($id, [
            'provinsi_id' => $provinsi_id,
            'nama' => $nama,
        ]);

        return redirect()->to('kota/');
    }

    public function delete($id)
    {
        //delete data table buku filter by id
        $this->KotaModel->delete($id);
        return redirect()->to('kota');
    }
}
