<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container-tabel">
    <h2 class="mb-3">Data Berita & Pengumuman</h2>

    <a href="<?= base_url('admin/berita/create') ?>" class="btn btn-dashboard mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Berita
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
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($berita as $b): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td class="text-center">
                            <?php if (!empty($b['foto'])): ?>
                                <img src="<?= base_url('assets/foto/berita/' . $b['foto']) ?>" width="60" class="rounded">
                            <?php else: ?>
                                <em>Tidak ada</em>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?= base_url('berita/detail/' . $b['slug']) ?>" target="_blank" rel="noopener noreferrer">
                                <?= esc($b['judul']) ?>
                            </a>
                        </td>
                        <td><?= word_limiter(strip_tags($b['isi']), 10) ?></td>
                        <td><?= date('d M Y', strtotime($b['tanggal_upload'])) ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('admin/berita/edit/' . $b['id']) ?>" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="<?= base_url('admin/berita/delete/' . $b['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus berita ini?')">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php if (empty($berita)): ?>
                    <tr>
                        <td colspan="6" class="text-center">Data berita belum tersedia.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>

