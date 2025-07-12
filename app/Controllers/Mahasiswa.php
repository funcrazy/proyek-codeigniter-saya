<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\JurusanModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();

        $data['mahasiswa'] = $model
            ->select('mahasiswa.*, jurusan.nama_jurusan')
            ->join('jurusan', 'jurusan.jurusan_id = mahasiswa.jurusan_id', 'left')
            ->findAll();

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        $jurusanModel = new JurusanModel();
        $data['jurusan'] = $jurusanModel->findAll();
        return view('mahasiswa/create', $data);
    }

    public function store()
    {
        $model = new MahasiswaModel();
        $model->insert([
            'nim' => $this->request->getPost('nim'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'email' => $this->request->getPost('email'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'jurusan_id' => $this->request->getPost('jurusan_id'),
            'propinsi' => $this->request->getPost('propinsi'),
            'no_hp' => $this->request->getPost('no_hp'),
        ]);
        return redirect()->to('/mahasiswa')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new MahasiswaModel();
        $jurusanModel = new JurusanModel();
        $data['mahasiswa'] = $model->find($id);
        $data['jurusan'] = $jurusanModel->findAll();
        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $model = new MahasiswaModel();
        $model->update($id, [
            'nim' => $this->request->getPost('nim'),
            'nama_mahasiswa' => $this->request->getPost('nama_mahasiswa'),
            'email' => $this->request->getPost('email'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'jurusan_id' => $this->request->getPost('jurusan_id'),
            'propinsi' => $this->request->getPost('propinsi'),
            'no_hp' => $this->request->getPost('no_hp'),
        ]);
        return redirect()->to('/mahasiswa')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);
        return redirect()->to('/mahasiswa')->with('success', 'Data berhasil dihapus!');
    }
}
