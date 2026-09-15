<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class Galeri extends BaseController
{
    protected $galeriModel;

    public function __construct()
    {
        $this->galeriModel = new GaleriModel();
    }

    // Tampilkan semua galeri
    public function index()
    {
        $data = [
            'title'  => 'Data Galeri',
            'galeri' => $this->galeriModel->findAll()
        ];
        return view('admin/galeri/index', $data);
    }

    // Form tambah galeri
    public function create()
    {
        return view('admin/galeri/create', ['title' => 'Tambah Galeri']);
    }

    // Simpan galeri baru
    public function save()
    {
        $validationRule = [
            'foto' => [
                'label' => 'Foto Galeri',
                'rules' => 'uploaded[foto]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,4048]',
                'errors' => [
                    'uploaded' => 'Foto wajib diunggah.',
                    'is_image' => 'File harus berupa gambar.',
                    'mime_in'  => 'Jenis gambar tidak valid. Gunakan JPG/JPEG/PNG.',
                    'max_size' => 'Ukuran gambar maksimal 4MB.'
                ]
            ]
        ];

        if (!$this->validate($validationRule)) {
            return redirect()->back()
                ->withInput()
                ->with('error', $this->validator->getErrors()['foto']);
        }

        $fileFoto = $this->request->getFile('foto');
        $namaFile = time() . '_' . $fileFoto->getRandomName();
        $fileFoto->move(FCPATH . 'assets/foto/galeri', $namaFile);

        $this->galeriModel->save([
            'judul'          => $this->request->getPost('judul'),
            'deskripsi'      => $this->request->getPost('deskripsi'),
            'tanggal_upload' => date('Y-m-d H:i:s'),
            'foto'           => $namaFile
        ]);

        return redirect()->to('/admin/galeri')->with('success', 'Galeri berhasil ditambahkan.');
    }

    // Form edit galeri
    public function edit($id)
    {
        $galeri = $this->galeriModel->find($id);

        if (!$galeri) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Galeri tidak ditemukan');
        }

        return view('admin/galeri/edit', [
            'title'  => 'Edit Galeri',
            'galeri' => $galeri
        ]);
    }

    // Update galeri
    public function update($id)
    {
        $galeri = $this->galeriModel->find($id);
        if (!$galeri) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Galeri tidak ditemukan');
        }

        $validationRule = [
            'foto' => [
                'label' => 'Foto Galeri',
                'rules' => 'if_exist|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]|max_size[foto,4048]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar.',
                    'mime_in'  => 'Jenis gambar tidak valid. Gunakan JPG/JPEG/PNG.',
                    'max_size' => 'Ukuran gambar maksimal 4MB.'
                ]
            ]
        ];

        if (!$this->validate($validationRule)) {
            return redirect()->back()
                ->withInput()
                ->with('error', $this->validator->getErrors()['foto']);
        }

        $fileFoto = $this->request->getFile('foto');
        $namaFoto = $galeri['foto'];

        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            // Hapus foto lama
            if ($galeri['foto'] && file_exists(FCPATH . 'assets/foto/galeri/' . $galeri['foto'])) {
                unlink(FCPATH . 'assets/foto/galeri/' . $galeri['foto']);
            }

            $namaFoto = time() . '_' . $fileFoto->getRandomName();
            $fileFoto->move(FCPATH . 'assets/foto/galeri', $namaFoto);
        }

        $this->galeriModel->update($id, [
            'judul'          => $this->request->getPost('judul'),
            'deskripsi'      => $this->request->getPost('deskripsi'),
            'tanggal_upload' => date('Y-m-d H:i:s'),
            'foto'           => $namaFoto
        ]);

        return redirect()->to('/admin/galeri')->with('success', 'Galeri berhasil diperbarui.');
    }

    // Hapus galeri
    public function delete($id)
    {
        $galeri = $this->galeriModel->find($id);

        if ($galeri && $galeri['foto']) {
            $pathFoto = FCPATH . 'assets/foto/galeri/' . $galeri['foto'];
            if (file_exists($pathFoto)) {
                unlink($pathFoto);
            }
        }

        $this->galeriModel->delete($id);
        return redirect()->to('/admin/galeri')->with('success', 'Galeri berhasil dihapus.');
    }
}
