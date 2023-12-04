<?php

namespace App\Controllers;

use App\Models\Crud_model;
use CodeIgniter\Controller;

class Crud_lowongan extends Controller
{
    protected $crud_model;

    public function __construct()
    {
        $this->crud_model = new Crud_model();
    }

    public function read($id)
    {
        $lowongan = $this->crud_model->find($id);
    
        if ($lowongan) {
            $data['lowongan'] = $lowongan;
            return view('pages/read_lowongan', $data);
        } else {
            return redirect()->to('/crud_lowongan');
        }
    }
    

    public function create()
    {
        return view('pages/create_lowongan');
    }

    public function store()
    {
        $data = [
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'nama_lowongan' => $this->request->getPost('nama_lowongan'),
            'definisi_pekerjaan' => $this->request->getPost('definisi_pekerjaan'),
            'lokasi' => $this->request->getPost('lokasi'),
            'gaji' => $this->request->getPost('gaji'),
            'pengalaman' => $this->request->getPost('pengalaman'),
            'jenis_pekerjaan' => $this->request->getPost('jenis_pekerjaan')
        ];

        $this->crud_model->insert($data);

        return redirect()->to('/crud_lowongan');
    }

    public function read($idata)
    {
        $data['lowongan'] = $this->crud_model->find($id);

        return view('pages/read_lowongan', $data);
    }

    public function edit($id)
    {
        $data['lowongan'] = $this->crud_model->find($id);

        return view('lowongan/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'nama_lowongan' => $this->request->getPost('nama_lowongan'),
            'definisi_pekerjaan' => $this->request->getPost('definisi_pekerjaan'),
            'lokasi' => $this->request->getPost('lokasi'),
            'gaji' => $this->request->getPost('gaji'),
            'pengalaman' => $this->request->getPost('pengalaman'),
            'jenis_pekerjaan' => $this->request->getPost('jenis_pekerjaan')
        ];

        $this->crud_model->update($id, $data);

        return redirect()->to('/crud_lowongan');
    }

    public function delete($id)
    {
        $this->crud_model->delete($id);

        return redirect()->to('/crud_lowongan');
    }
}
