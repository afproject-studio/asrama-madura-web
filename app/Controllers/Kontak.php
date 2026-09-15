<?php
// app/Controllers/Kontak.php
namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        $data['title'] = 'Kontak Kami';
        return view('kontak', $data);
    }
}
