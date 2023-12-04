<?php

namespace App\Models;

use CodeIgniter\Model;

class UserReadModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'email', 'password'];
}
