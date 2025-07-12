<?php

namespace App\Controllers;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
    public function index()
    {
        $model = new JurusanModel();
        $data['jurusan'] = $model->findAll();
        return view('jurusan/index', $data);
    }

    public function create()
    {
        return view('jurusan/create');
    }

    public function store()
    {
        $model = new JurusanModel();
        $model->insert([
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
            'fakultas' => $this->request->getPost('fakultas'),
        ]);
        return redirect()->to('/jurusan')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new JurusanModel();
        $data['jurusan'] = $model->find($id);
        return view('jurusan/edit', $data);
    }

    public function update($id)
    {
        $model = new JurusanModel();
        $model->update($id, [
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
            'fakultas' => $this->request->getPost('fakultas'),
        ]);
        return redirect()->to('/jurusan')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new JurusanModel();
        $model->delete($id);
        return redirect()->to('/jurusan')->with('success', 'Data berhasil dihapus!');
    }
}
