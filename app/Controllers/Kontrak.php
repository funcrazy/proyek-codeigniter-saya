<?php

namespace App\Controllers;
use App\Models\KontrakModel;
use App\Models\MahasiswaModel;
use App\Models\MataKuliahModel;
use App\Models\DosenModel;

class Kontrak extends BaseController
{
    public function index()
    {
        $model = new KontrakModel();
        $data['kontrak'] = $model
            ->select('kontrak.*, mahasiswa.nama_mahasiswa, mata_kuliah.nama_mata_kuliah, dosen.nama_dosen')
            ->join('mahasiswa', 'mahasiswa.mahasiswa_id = kontrak.mahasiswa_id')
            ->join('mata_kuliah', 'mata_kuliah.mata_kuliah_id = kontrak.mata_kuliah_id')
            ->join('dosen', 'dosen.dosen_id = kontrak.dosen_id')
            ->findAll();
        return view('kontrak/index', $data);
    }

    public function create()
    {
        $data['mahasiswa'] = (new MahasiswaModel())->findAll();
        $data['mata_kuliah'] = (new MataKuliahModel())->findAll();
        $data['dosen'] = (new DosenModel())->findAll();
        return view('kontrak/create', $data);
    }

    public function store()
    {
        $model = new KontrakModel();
        $model->insert([
            'mahasiswa_id' => $this->request->getPost('mahasiswa_id'),
            'mata_kuliah_id' => $this->request->getPost('mata_kuliah_id'),
            'dosen_id' => $this->request->getPost('dosen_id'),
            'nilai' => $this->request->getPost('nilai'),
            'semester' => $this->request->getPost('semester'),
        ]);
        return redirect()->to('/kontrak')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new KontrakModel();
        $data['kontrak'] = $model->find($id);
        $data['mahasiswa'] = (new MahasiswaModel())->findAll();
        $data['mata_kuliah'] = (new MataKuliahModel())->findAll();
        $data['dosen'] = (new DosenModel())->findAll();
        return view('kontrak/edit', $data);
    }

    public function update($id)
    {
        $model = new KontrakModel();
        $model->update($id, [
            'mahasiswa_id' => $this->request->getPost('mahasiswa_id'),
            'mata_kuliah_id' => $this->request->getPost('mata_kuliah_id'),
            'dosen_id' => $this->request->getPost('dosen_id'),
            'nilai' => $this->request->getPost('nilai'),
            'semester' => $this->request->getPost('semester'),
        ]);
        return redirect()->to('/kontrak')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new KontrakModel();
        $model->delete($id);
        return redirect()->to('/kontrak')->with('success', 'Data berhasil dihapus!');
    }
}
