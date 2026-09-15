<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KegiatanAsramaModel;

class KegiatanAsrama extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new KegiatanAsramaModel();
    }

    // Halaman daftar kegiatan
    public function index()
    {
        $data = [
            'title' => 'Manajemen Kegiatan Asrama',
            'kegiatan' => $this->model->findAll()
        ];

        return view('admin/kegiatanasrama/index', $data);
    }

    // Halaman tambah kegiatan
    public function create()
    {
        return view('admin/kegiatanasrama/create', ['title' => 'Tambah Kegiatan Asrama']);
    }

    // Halaman edit kegiatan
    public function edit($id)
    {
        $kegiatan = $this->model->find($id);

        if (!$kegiatan) {
            session()->setFlashdata('error', 'Kegiatan tidak ditemukan');
            return redirect()->to('/admin/kegiatan-asrama');
        }

        return view('admin/kegiatanasrama/edit', [
            'title' => 'Edit Kegiatan Asrama',
            'kegiatan' => $kegiatan
        ]);
    }

    // Update kegiatan
    public function update($id)
    {
        $data = $this->model->find($id);
        if (!$data) {
            session()->setFlashdata('error', 'Kegiatan tidak ditemukan');
            return redirect()->to('/admin/kegiatan-asrama');
        }

        $foto = $this->request->getFile('foto');
        $namaFoto = $data['foto'];

        if ($foto && $foto->isValid()) {
            if ($namaFoto && file_exists('assets/foto/kegiatan/' . $namaFoto)) {
                unlink('assets/foto/kegiatan/' . $namaFoto);
            }
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/foto/kegiatan', $namaFoto);
        }

        $this->model->update($id, [
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'jenis_kegiatan'=> $this->request->getPost('jenis_kegiatan'),
            'tanggal'       => $this->request->getPost('tanggal'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
            'foto'          => $namaFoto
        ]);

        session()->setFlashdata('success', 'Kegiatan berhasil diperbarui');
        return redirect()->to('/admin/kegiatan-asrama');
    }

    // Hapus kegiatan
    public function delete($id)
    {
        $data = $this->model->find($id);
        if (!$data) {
            session()->setFlashdata('error', 'Kegiatan tidak ditemukan');
            return redirect()->to('/admin/kegiatan-asrama');
        }

        if ($data['foto'] && file_exists('assets/foto/kegiatan/' . $data['foto'])) {
            unlink('assets/foto/kegiatan/' . $data['foto']);
        }

        $this->model->delete($id);
        session()->setFlashdata('success', 'Kegiatan berhasil dihapus');
        return redirect()->to('/admin/kegiatan-asrama');
    }
}
