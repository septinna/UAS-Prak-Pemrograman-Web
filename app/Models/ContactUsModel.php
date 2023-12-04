<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_depan', 'nama_belakang', 'email', 'no_hp', 'pesan'];

    public function saveContact($data)
    {
        return $this->insert($data);
    }
}
