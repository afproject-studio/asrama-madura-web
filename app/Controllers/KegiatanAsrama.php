<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KegiatanAsramaModel;

class KegiatanAsrama extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new KegiatanAsramaModel();
    }

    public function index()
    {
        $data = [
            'title'    => 'Kegiatan Asrama',
            'kegiatan' => $this->model
                                ->orderBy('tanggal', 'DESC')
                                ->findAll()
        ];

        return view('kemahasiswaan/kegiatanasrama', $data);
    }
}
