<?php

namespace App\Controllers;

use App\Models\UserReadModel;
use CodeIgniter\Controller;

class UserReadController extends Controller
{
    public function index()
    {
        $userReadModel = new UserReadModel();
        $data['users'] = $userReadModel->findAll();

        return view('pages/user', $data);
    }

    public function edit($id)
    {
        $userReadModel = new UserReadModel();
        $data['user'] = $userReadModel->find($id);

        return view('pages/edit', $data);
    }

    public function update($id)
    {
        $userReadModel = new UserReadModel();
        
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        $userReadModel->update($id, $data);

        return redirect()->to('pages/edit')->with('success', 'User updated successfully!');
    }

    public function delete($id)
    {
        $userReadModel = new UserReadModel();
        $userReadModel->delete($id);

        return redirect()->to('/pages/user')->with('success', 'Yeay Data User Berhasil di hapus!');
    }
}
