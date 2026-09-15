<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanAsramaModel extends Model
{
    protected $table      = 'kegiatan_asrama';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_kegiatan',
        'jenis_kegiatan',
        'tanggal',
        'deskripsi',
        'foto'
    ];

    protected $useTimestamps = false;
}
