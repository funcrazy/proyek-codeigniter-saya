<?php

namespace App\Models;
use CodeIgniter\Model;

class KontrakModel extends Model
{
    protected $table = 'kontrak';
    protected $primaryKey = 'kontrak_id';
    protected $allowedFields = [
        'mahasiswa_id', 'mata_kuliah_id', 'dosen_id',
        'nilai', 'semester'
    ];
}
