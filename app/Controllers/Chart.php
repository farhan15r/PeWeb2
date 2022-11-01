<?php

namespace App\Controllers;

//memanggil model
use App\Models\BukuModel;
use App\Models\KategoriModel;

class Chart extends BaseController
{
  public function __construct()
  {
    //load model untuk digunakan
    $this->BukuModel = new BukuModel();
    $this->KategoriModel = new KategoriModel();
  }

  public function pie()
  {
    //select data from table buku
    $list = $this->BukuModel->select('judul, stok')->orderBy('judul')->findAll();

    $output = [
      'list' => $list,
    ];

    return view('chart_pie', $output);
  }

  public function line()
  {
    //select data from table buku
    $list = $this->BukuModel->select('judul, stok')->orderBy('judul')->findAll();

    $output = [
      'list' => $list,
    ];

    return view('chart_line', $output);
  }

  public function kategori()
  {
    // $this->db
    //   ->select('categories.c_name, COUNT(videos.id) as num_videos')
    //   ->from('categories')
    //   ->join('videos', 'categories.c_name = videos.v_category', 'left')
    //   ->group_by('categories.c_name');
    //select data from table kategori
    $list = $this->KategoriModel->select('kategori.nama, COUNT(buku.kategori_id) AS jumlah')->join('buku', 'kategori.id = buku.kategori_id', 'left')->groupBy('kategori.nama')->findAll();

    $output = [
      'list' => $list,
    ];

    return view('chart_kategori', $output);
  }
}
