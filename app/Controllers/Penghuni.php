<?php

namespace App\Controllers;

use App\Models\PenghuniModel;

class Penghuni extends BaseController
{
    public function index()
    {
        $model = new PenghuniModel();
        $data['Penghuni'] = $model->findAll();

        return view('profil/penghuni', $data);
    }
}
