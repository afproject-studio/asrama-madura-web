<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container-tabel">
    <h2 class="mb-3">Data Penghuni Asrama</h2>

    <a href="<?= base_url('admin/penghuni/create') ?>" class="btn btn-dashboard mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Penghuni
    </a>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Lengkap</th>
                    <th>Status</th>
                    <th>NIM</th>
                    <th>Asal</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($penghuni)): ?>
                    <?php $no = 1; foreach ($penghuni as $p): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text-center">
                                <?php if (!empty($p['foto'])): ?>
                                    <img src="<?= base_url('assets/foto/penghuni/' . $p['foto']) ?>"
                                         width="60" class="rounded">
                                <?php else: ?>
                                    <em>Tidak ada</em>
                                <?php endif ?>
                            </td>
                            <td><?= esc($p['nama_lengkap']) ?></td>
                            <td><?= esc($p['status_penghuni']) ?></td>
                            <td><?= esc($p['nim']) ?></td>
                            <td><?= esc($p['asal']) ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/penghuni/edit/' . $p['id_penghuni']) ?>"
                                   class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="<?= base_url('admin/penghuni/delete/' . $p['id_penghuni']) ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin hapus data ini?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center text-muted">
                            Belum ada data penghuni.
                        </td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
