<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container-tabel py-5">
    <h2 class="mb-3">Data Prestasi</h2>

    <a href="<?= base_url('admin/prestasi/create') ?>" class="btn btn-dashboard mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Prestasi
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
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($prestasi as $p): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="text-center">
                            <?php if (!empty($p['foto'])): ?>
                                <img src="<?= base_url('assets/foto/prestasi/' . $p['foto']) ?>" class="rounded admin-thumb" alt="<?= esc($p['judul']) ?>">
                            <?php else: ?>
                                <em>Tidak ada</em>
                            <?php endif; ?>
                        </td>
                        <td><?= esc($p['judul']) ?></td>
                        <td><?= esc($p['deskripsi']) ?></td>
                        <td><?= date('d-m-Y', strtotime($p['tanggal'])) ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('admin/prestasi/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="<?= base_url('admin/prestasi/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data prestasi ini?')">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php if (empty($prestasi)): ?>
                    <tr>
                        <td colspan="6" class="text-center">Data prestasi belum tersedia.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
