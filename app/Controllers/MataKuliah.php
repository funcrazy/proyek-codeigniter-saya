<?php

namespace App\Controllers;
use App\Models\MataKuliahModel;

class MataKuliah extends BaseController
{
    public function index()
    {
        $model = new MataKuliahModel();
        $data['matakuliah'] = $model->findAll();
        return view('matakuliah/index', $data);
    }

    public function create()
    {
        return view('matakuliah/create');
    }

    public function store()
    {
        $model = new MataKuliahModel();
        $model->insert([
            'kode_mata_kuliah' => $this->request->getPost('kode_mata_kuliah'),
            'nama_mata_kuliah' => $this->request->getPost('nama_mata_kuliah'),
            'jumlah_sks' => $this->request->getPost('jumlah_sks'),
        ]);
        return redirect()->to('/matakuliah')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new MataKuliahModel();
        $data['matakuliah'] = $model->find($id);
        return view('matakuliah/edit', $data);
    }

    public function update($id)
    {
        $model = new MataKuliahModel();
        $model->update($id, [
            'kode_mata_kuliah' => $this->request->getPost('kode_mata_kuliah'),
            'nama_mata_kuliah' => $this->request->getPost('nama_mata_kuliah'),
            'jumlah_sks' => $this->request->getPost('jumlah_sks'),
        ]);
        return redirect()->to('/matakuliah')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new MataKuliahModel();
        $model->delete($id);
        return redirect()->to('/matakuliah')->with('success', 'Data berhasil dihapus!');
    }
}
