<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenghuniModel;
use App\Models\BeritaModel;
use App\Models\GaleriModel;
use App\Models\PrestasiModel;
use App\Models\KegiatanAsramaModel;


class Dashboard extends BaseController
{
    public function index()
    {
        $penghuni = new PenghuniModel();
        $berita   = new BeritaModel();
        $galeri   = new GaleriModel();
        $prestasi = new PrestasiModel();
        $kegiatan = new KegiatanAsramaModel();
        $data = [
            'totalpenghuni' => $penghuni->countAllResults(),
            'totalBerita'     => $berita->countAllResults(),
            'totalGaleri'     => $galeri->countAllResults(),
            'totalPrestasi'   => $prestasi->countAllResults(),
            'totalKegiatanAsrama'  => $kegiatan->countAll(),
            'prestasiTerbaru' => $prestasi->orderBy('tanggal', 'DESC')->findAll(5),
        ];

        return view('admin/dashboard', $data);
    }
}
