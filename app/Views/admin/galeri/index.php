<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container-tabel py-5">
    <h2 class="mb-3">Data Galeri Foto</h2>

    <a href="<?= base_url('admin/galeri/create') ?>" class="btn btn-dashboard mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Foto
    </a>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($galeri as $g): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="text-center">
                            <?php if (!empty($g['foto'])): ?>
                                <img src="<?= base_url('assets/foto/galeri/' . $g['foto']) ?>" class="rounded admin-thumb" alt="<?= esc($g['judul']) ?>">
                            <?php else: ?>
                                <em>Tidak ada</em>
                            <?php endif; ?>
                        </td>
                        <td><?= esc($g['judul']) ?></td>
                        <td><?= esc($g['deskripsi']) ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('admin/galeri/edit/' . $g['id']) ?>" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="<?= base_url('admin/galeri/delete/' . $g['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus foto ini?')">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php if (empty($galeri)): ?>
                    <tr>
                        <td colspan="5" class="text-center">Data galeri belum tersedia.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
