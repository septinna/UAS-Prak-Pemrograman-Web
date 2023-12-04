<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactReadModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_depan', 'nama_belakang', 'email', 'no_hp', 'pesan'];

    public function getAllContacts()
    {
        return $this->findAll();
    }

    public function deleteContact($id)
    {
        return $this->delete($id);
    }
}
