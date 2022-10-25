<?php

namespace App\Controllers;

//memanggil model
use App\Models\SatuanSuhuModel;
use App\Models\KonversiSuhuModel;

class KonversiSuhu extends BaseController
{
    public function __construct()
    {
        //load model untuk digunakan
        $this->SatuanSuhuModel = new SatuanSuhuModel();
        $this->KonversiSuhuModel = new KonversiSuhuModel();
    }

    public function list()
    {
        //select data from table buku
        $list = $this->KonversiSuhuModel->select('konversi_suhu.id, konversi_suhu.suhu, konversi_suhu.kondisi, satuan_suhu.nama AS satuan')->join('satuan_suhu', 'konversi_suhu.satuan_id = satuan_suhu.id')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('konversi_suhu_list', $output);
    }

    public function insert()
    {
        //select data from table kategori (untuk data di selectbox/dropdown)
        $satuan_suhu = $this->SatuanSuhuModel->orderBy('nama')->findAll();

        $output = [
            'satuan_suhu' => $satuan_suhu,
        ];

        return view('konversi_suhu_insert', $output);
    }

    public function insert_save()
    {
        $satuan_id = $this->request->getVar('satuan_id');
        $suhu = $this->request->getVar('suhu');

        $batas_suhu = $this->SatuanSuhuModel->select('titik_beku, boiling_point')->where('id', $satuan_id)->first();

        $titik_beku = $batas_suhu['titik_beku'];
        $boiling_point = $batas_suhu['boiling_point'];

        if ($suhu <= $titik_beku) {
            $kondisi = 'beku';
        } elseif ($suhu <= $boiling_point) {
            $kondisi = 'normal';
        } else {
            $kondisi = 'didih';
        }

        $this->KonversiSuhuModel->insert([
            'satuan_id' => $satuan_id,
            'suhu' => $suhu,
            'kondisi' => $kondisi
        ]);

        return redirect()->to('tb1/konversi_suhu');
    }

    public function update($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->KonversiSuhuModel->where('id', $id)->first();

        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_satuan = $this->SatuanSuhuModel->orderBy('nama')->findAll();

        $output = [
            'data' => $data,
            'data_satuan' => $data_satuan,
        ];

        return view('konversi_suhu_update', $output);
    }

    public function update_save($id)
    {

        $satuan_id = $this->request->getVar('satuan_id');
        $suhu = $this->request->getVar('suhu');

        $batas_suhu = $this->SatuanSuhuModel->select('titik_beku, titik_didih')->where('id', $satuan_id)->first();

        $titik_beku = $batas_suhu['titik_beku'];
        $titik_didih = $batas_suhu['titik_didih'];

        if ($suhu <= $titik_beku) {
            $kondisi = 'beku';
        } elseif ($suhu <= $titik_didih) {
            $kondisi = 'normal';
        } else {
            $kondisi = 'didih';
        }
        //update data ke table konversi filter by id
        $this->KonversiSuhuModel->update($id, [
            'satuan_id' => $satuan_id,
            'suhu' => $suhu,
            'kondisi' => $kondisi
        ]);

        return redirect()->to('tb1/konversi_suhu');
    }

    public function delete($id)
    {
        //delete data table buku filter by id
        $this->KonversiSuhuModel->delete($id);
        return redirect()->to('tb1/konversi_suhu');
    }
}
