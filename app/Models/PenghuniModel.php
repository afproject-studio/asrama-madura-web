<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghuniModel extends Model
{
    protected $table      = 'penghuni';
    protected $primaryKey = 'id_penghuni';

    protected $allowedFields = [
        'nama_lengkap',
        'nim',
        'status_penghuni',
        'asal',
        'kamar',
        'angkatan',
        'foto'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
