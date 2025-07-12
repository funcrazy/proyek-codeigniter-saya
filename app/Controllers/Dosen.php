<?php

namespace App\Controllers;
use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        $model = new DosenModel();
        $data['dosen'] = $model->findAll();
        return view('dosen/index', $data);
    }

    public function create()
    {
        return view('dosen/create');
    }

    public function store()
    {
        $model = new DosenModel();
        $model->insert([
            'nip' => $this->request->getPost('nip'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
        ]);
        return redirect()->to('/dosen')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new DosenModel();
        $data['dosen'] = $model->find($id);
        return view('dosen/edit', $data);
    }

    public function update($id)
    {
        $model = new DosenModel();
        $model->update($id, [
            'nip' => $this->request->getPost('nip'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
        ]);
        return redirect()->to('/dosen')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new DosenModel();
        $model->delete($id);
        return redirect()->to('/dosen')->with('success', 'Data berhasil dihapus!');
    }
}
