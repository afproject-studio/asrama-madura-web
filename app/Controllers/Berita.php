<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class Berita extends BaseController
{
    public function index()
    {
        helper('text');

        $beritaModel = new BeritaModel();

        // Ambil hanya berita dengan jenis = 'berita' dan urutkan terbaru
        $data['berita'] = $beritaModel
            ->where('jenis', 'berita')
            ->orderBy('tanggal_upload', 'DESC')
            ->findAll();

        return view('berita/berita', $data);
    }

    public function detail($slug)
    {
        $beritaModel = new BeritaModel();

        // Ambil berita berdasarkan slug
        $data['berita'] = $beritaModel->where('slug', $slug)->first();

        if (!$data['berita']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Berita tidak ditemukan");
        }

        return view('berita/detail', $data);
    }
}
