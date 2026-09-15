<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'slug', 'isi', 'foto', 'jenis', 'tanggal_upload'];
}
