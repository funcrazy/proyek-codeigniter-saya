<?php

namespace App\Models;
use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'dosen_id';
    protected $allowedFields = ['nip', 'nama_dosen', 'email', 'alamat'];
}
