<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function post_request()
    {
        //memanggil view
        return view('post_request');
    }

    public function post_response()
    {
        //data diambil dari view get_request
        $nama = $this->request->getVar('nama');
        $umur = (int)$this->request->getVar('umur');

        if ($umur <= 5) {
            $rentang_umur = "Balita";
        } elseif ($umur <= 12) {
            $rentang_umur = "Anak";
        } elseif ($umur <= 25) {
            $rentang_umur = "Remaja";
        } elseif ($umur <= 50) {
            $rentang_umur = "Dewasa";
        } elseif ($umur <= 100) {
            $rentang_umur = "Lansia";
        }

        //data dikirim ke view get_response
        $output = [
            'nama' => $nama,
            'rentang_umur' => $rentang_umur
        ];

        //memanggil view dengan membawa data output
        return view('post_response', $output);
    }

    public function get_request()
    {
        //memanggil view
        return view('get_request');
    }

    //$tanda diambil dari config/routes get_response/$1
    public function get_response($tanda, $warna)
    {
        //data dikirim ke view get_response
        $output = [
            'tanda' => $tanda,
            'warna' => $warna,
        ];

        //memanggil view dengan membawa data output
        return view('get_response', $output);
    }
}
