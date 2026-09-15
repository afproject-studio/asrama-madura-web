<?php namespace App\Controllers;

use App\Models\GaleriModel;

class Galeri extends BaseController
{
    public function index()
    {
        $galeriModel = new GaleriModel();
        $data['galeri'] = $galeriModel->orderBy('tanggal_upload', 'DESC')->findAll();
        return view('galeri', $data);
    }
}
