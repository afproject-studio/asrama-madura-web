<?php

namespace App\Models;

use CodeIgniter\Model;

class PrestasiModel extends Model
{
    protected $table      = 'prestasi';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'judul',
        'deskripsi',
        'tanggal',
        'foto'
    ];

    // ⛔ MATIKAN TIMESTAMP
    protected $useTimestamps = false;

    // optional, tapi rapi
    protected $returnType = 'array';
}
