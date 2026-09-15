<?php

namespace App\Controllers;

use App\Models\PrestasiModel;

class Prestasi extends BaseController
{
    public function index()
    {
        $prestasiModel = new PrestasiModel();

        $data = [
            'title'    => 'Prestasi Mahasiswa',
            'prestasi' => $prestasiModel->findAll()
        ];

        return view('kemahasiswaan/prestasi', $data);
    }
}
