<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PrestasiModel;

class Prestasi extends BaseController
{
    protected $prestasiModel;

    public function __construct()
    {
        $this->prestasiModel = new PrestasiModel();
    }

    // ===============================
    // INDEX
    // ===============================
    public function index()
    {
        return view('admin/prestasi/index', [
            'title'    => 'Data Prestasi',
            'prestasi' => $this->prestasiModel->findAll()
        ]);
    }

    // ===============================
    // CREATE
    // ===============================
    public function create()
    {
        return view('admin/prestasi/create', [
            'title' => 'Tambah Prestasi'
        ]);
    }

    // ===============================
    // SAVE
    // ===============================
    public function save()
    {
        $rules = [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'tanggal'   => 'required',
            'foto'      => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,4048]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('error', implode(', ', $this->validator->getErrors()));
        }

        $fileFoto = $this->request->getFile('foto');
        $namaFoto = time() . '_' . $fileFoto->getRandomName();
        $fileFoto->move(FCPATH . 'assets/foto/prestasi', $namaFoto);

        $this->prestasiModel->save([
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'foto'      => $namaFoto
        ]);

        return redirect()->to('/admin/prestasi')->with('success', 'Prestasi berhasil ditambahkan');
    }

    // ===============================
    // EDIT
    // ===============================
    public function edit($id)
    {
        $prestasi = $this->prestasiModel->find($id);

        if (!$prestasi) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }

        return view('admin/prestasi/edit', [
            'title'    => 'Edit Prestasi',
            'prestasi' => $prestasi
        ]);
    }

    // ===============================
    // UPDATE
    // ===============================
    public function update($id)
    {
        $prestasi = $this->prestasiModel->find($id);

        if (!$prestasi) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data tidak ditemukan');
        }

        $rules = [
            'judul'     => 'required',
            'deskripsi' => 'required',
            'tanggal'   => 'required',
            'foto'      => 'if_exist|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,4048]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('error', implode(', ', $this->validator->getErrors()));
        }

        $fileFoto = $this->request->getFile('foto');
        $namaFoto = $prestasi['foto'];

        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            if ($prestasi['foto'] && file_exists(FCPATH . 'assets/foto/prestasi/' . $prestasi['foto'])) {
                unlink(FCPATH . 'assets/foto/prestasi/' . $prestasi['foto']);
            }

            $namaFoto = time() . '_' . $fileFoto->getRandomName();
            $fileFoto->move(FCPATH . 'assets/foto/prestasi', $namaFoto);
        }

        $data = [
            'judul'     => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'foto'      => $namaFoto
        ];

        $this->prestasiModel->update($id, $data);

        return redirect()->to('/admin/prestasi')->with('success', 'Prestasi berhasil diperbarui');
    }

    // ===============================
    // DELETE
    // ===============================
    public function delete($id)
    {
        $prestasi = $this->prestasiModel->find($id);

        if ($prestasi && $prestasi['foto']) {
            $path = FCPATH . 'assets/foto/prestasi/' . $prestasi['foto'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->prestasiModel->delete($id);

        return redirect()->to('/admin/prestasi')->with('success', 'Prestasi berhasil dihapus');
    }
}
