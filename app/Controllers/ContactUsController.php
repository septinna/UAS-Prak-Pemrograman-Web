<?php

namespace App\Controllers;

use App\Models\ContactUsModel;
use CodeIgniter\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function saveContact()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|valid_email',
            'no_hp' => 'required',
            'pesan' => 'required'
        ]);

        if (!$validation->run($this->request->getPost())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $contactUsModel = new ContactUsModel();

        $data = [
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp'),
            'pesan' => $this->request->getPost('pesan')
        ];

        $contactUsModel->insert($data);

        return redirect()->to('/contact')->with('success', 'Pesan berhasil dikirim!');
    }
}
