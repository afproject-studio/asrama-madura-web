<?php

namespace App\Controllers;

use App\Models\BeritaModel; // ← ini yang bikin CI4 tahu lokasi modelnya

class Home extends BaseController
{
    public function index()
    {
     helper('text');

        $beritaModel = new BeritaModel();
        $data['berita'] = $beritaModel
            ->where('jenis', 'berita')
            ->orderBy('tanggal_upload', 'DESC')
            ->findAll(3); // ambil 3 berita terbaru

        return view('home', $data);
    }
}