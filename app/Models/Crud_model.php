<?php

namespace App\Models;

use CodeIgniter\Model;

class Crud_model extends Model
{
    protected $table = 'lowongan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_perusahaan', 'nama_lowongan', 'definisi_pekerjaan', 'lokasi', 'gaji', 'pengalaman', 'jenis_pekerjaan'];
}
