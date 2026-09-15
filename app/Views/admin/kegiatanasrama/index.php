<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<h3><?= esc($title) ?></h3>
<a href="<?= base_url('admin/kegiatan-asrama/create') ?>" class="btn btn-primary mb-3">Tambah Kegiatan</a>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Kegiatan</th>
            <th>Jenis</th>
            <th>Tanggal</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kegiatan as $row): ?>
        <tr>
            <td><?= esc($row['nama_kegiatan']) ?></td>
            <td><?= esc($row['jenis_kegiatan']) ?></td>
            <td><?= esc($row['tanggal']) ?></td>
            <td>
                <?php if ($row['foto']): ?>
                    <img src="<?= base_url('assets/foto/kegiatan/' . $row['foto']) ?>" width="80">
                <?php endif ?>
            </td>
            <td>
                <a href="<?= base_url('admin/kegiatan-asrama/edit/' . $row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('admin/kegiatan-asrama/delete/' . $row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
