<?php

namespace App\Controllers;

use App\Models\ContactReadModel;
use CodeIgniter\Controller;

class ContactReadController extends Controller
{
    public function index()
    {
        $contactReadModel = new ContactReadModel();
        $data['contacts'] = $contactReadModel->findAll();

        return view('pages/contact_read', $data);
    }

    public function delete($id)
    {
        $contactReadModel = new ContactReadModel();
        $contactReadModel->delete($id);

        return redirect()->to('/contactread')->with('success', 'Yeay, Data kontak berhasil dihapus!');
    }
}
