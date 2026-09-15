<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenghuniModel;

class Penghuni extends BaseController
{
    protected $penghuniModel;

    public function __construct()
    {
        $this->penghuniModel = new PenghuniModel();
    }

    // ======================
    // INDEX
    // ======================
    public function index()
    {
        return view('admin/penghuni/index', [
            'penghuni' => $this->penghuniModel->findAll()
        ]);
    }

    // ======================
    // FORM TAMBAH
    // ======================
    public function create()
    {
        return view('admin/penghuni/create');
    }

    // ======================
    // STORE + UPLOAD FOTO
    // ======================
    public function store()
    {
        $foto = $this->request->getFile('foto');
        $namaFoto = null;

        // cek apakah ada file yang diupload
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/foto/penghuni', $namaFoto);
        }

        $this->penghuniModel->insert([
            'nama_lengkap'    => $this->request->getPost('nama_lengkap'),
            'nim'             => $this->request->getPost('nim'),
            'status_penghuni' => $this->request->getPost('status_penghuni'),
            'asal'            => $this->request->getPost('asal'),
            'kamar'           => $this->request->getPost('kamar'),
            'angkatan'        => $this->request->getPost('angkatan'),
            'foto'            => $namaFoto
        ]);

        return redirect()->to('/admin/penghuni')
            ->with('success', 'Data penghuni berhasil ditambahkan');
    }

    // AGAR ACTION save TIDAK 404
    public function save()
    {
        return $this->store();
    }

    // ======================
    // FORM EDIT
    // ======================
    public function edit($id_penghuni)
    {
        $penghuni = $this->penghuniModel->find($id_penghuni);

        if (!$penghuni) {
            return redirect()->to('/admin/penghuni')
                ->with('error', 'Data tidak ditemukan');
        }

        return view('admin/penghuni/edit', compact('penghuni'));
    }

    // ======================
    // UPDATE + FOTO (OPSIONAL)
    // ======================
    public function update($id_penghuni)
    {
        $penghuni = $this->penghuniModel->find($id_penghuni);
        $foto = $this->request->getFile('foto');
        $namaFoto = $penghuni['foto'];

        // jika upload foto baru
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $namaFoto = $foto->getRandomName();
            $foto->move('assets/foto/penghuni', $namaFoto);

            // hapus foto lama
            if ($penghuni['foto'] && file_exists('assets/foto/penghuni/' . $penghuni['foto'])) {
                unlink('assets/foto/penghuni/' . $penghuni['foto']);
            }
        }

        $this->penghuniModel->update($id_penghuni, [
            'nama_lengkap'    => $this->request->getPost('nama_lengkap'),
            'nim'             => $this->request->getPost('nim'),
            'status_penghuni' => $this->request->getPost('status_penghuni'),
            'asal'            => $this->request->getPost('asal'),
            'kamar'           => $this->request->getPost('kamar'),
            'angkatan'        => $this->request->getPost('angkatan'),
            'foto'            => $namaFoto
        ]);

        return redirect()->to('/admin/penghuni')
            ->with('success', 'Data berhasil diperbarui');
    }

    // ======================
    // DELETE + HAPUS FOTO
    // ======================
    public function delete($id_penghuni)
    {
        $penghuni = $this->penghuniModel->find($id_penghuni);

        if (!$penghuni) {
            return redirect()->to('/admin/penghuni')
                ->with('error', 'Data tidak ditemukan');
        }

        if ($penghuni['foto'] && file_exists('assets/foto/penghuni/' . $penghuni['foto'])) {
            unlink('assets/foto/penghuni/' . $penghuni['foto']);
        }

        $this->penghuniModel->delete($id_penghuni);

        return redirect()->to('/admin/penghuni')
            ->with('success', 'Data penghuni berhasil dihapus');
    }
}
