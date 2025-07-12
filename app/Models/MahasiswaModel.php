<?php

namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'mahasiswa_id';
    protected $allowedFields = [
        'nim', 'nama_mahasiswa', 'email', 'tgl_lahir',
        'alamat', 'jurusan_id', 'propinsi', 'no_hp'
    ];
}
