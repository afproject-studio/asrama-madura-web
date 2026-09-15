<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Berita extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    // Menampilkan daftar semua berita
    public function index()
    {
        $data = [
            'title'  => 'Data Berita',
            'berita' => $this->beritaModel->findAll()
        ];
        return view('admin/berita/index', $data);
    }

    // Form tambah berita
    public function create()
    {
        return view('admin/berita/create', ['title' => 'Tambah Berita']);
    }

    // Simpan berita baru
    public function save()
    {
        $validationRule = [
            'foto' => [
                'label' => 'Foto Berita',
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
        $fileFoto->move(FCPATH . 'assets/foto/berita', $namaFile);

        $judul = $this->request->getPost('judul');
        $slug = url_title($judul, '-', true); // membuat slug dari judul

        $this->beritaModel->save([
            'judul'          => $judul,
            'slug'           => $slug,
            'isi'            => $this->request->getPost('isi'),
            'tanggal_upload' => date('Y-m-d H:i:s'),
            'jenis'          => 'berita',
            'foto'           => $namaFile
        ]);

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Form edit berita
    public function edit($id)
    {
        $berita = $this->beritaModel->find($id);

        if (!$berita) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
        }

        return view('admin/berita/edit', [
            'title'  => 'Edit Berita',
            'berita' => $berita
        ]);
    }

    // Update berita
    public function update($id)
    {
        $berita = $this->beritaModel->find($id);
        if (!$berita) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
        }

        $validationRule = [
            'foto' => [
                'label' => 'Foto Berita',
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
        $namaFoto = $berita['foto'];

        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            if ($berita['foto'] && file_exists(FCPATH . 'assets/foto/berita/' . $berita['foto'])) {
                unlink(FCPATH . 'assets/foto/berita/' . $berita['foto']);
            }

            $namaFoto = time() . '_' . $fileFoto->getRandomName();
            $fileFoto->move(FCPATH . 'assets/foto/berita', $namaFoto);
        }

        $judul = $this->request->getPost('judul');
        $slug = url_title($judul, '-', true);

        $this->beritaModel->update($id, [
            'judul' => $judul,
            'slug'  => $slug,
            'isi'   => $this->request->getPost('isi'),
            'foto'  => $namaFoto
        ]);

        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil diperbarui.');
    }

    // Hapus berita
    public function delete($id)
    {
        $berita = $this->beritaModel->find($id);

        if ($berita && $berita['foto']) {
            $pathFoto = FCPATH . 'assets/foto/berita/' . $berita['foto'];
            if (file_exists($pathFoto)) {
                unlink($pathFoto);
            }
        }

        $this->beritaModel->delete($id);
        return redirect()->to('/admin/berita')->with('success', 'Berita berhasil dihapus.');
    }
}
