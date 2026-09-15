<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<h3><?= esc($title) ?></h3>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<form action="<?= base_url('admin/kegiatan-asrama/update/' . $kegiatan['id']) ?>" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label class="form-label">Nama Kegiatan</label>
        <input type="text" name="nama_kegiatan" class="form-control" value="<?= esc($kegiatan['nama_kegiatan']) ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kegiatan</label>
        <input type="text" name="jenis_kegiatan" class="form-control" value="<?= esc($kegiatan['jenis_kegiatan']) ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="<?= esc($kegiatan['tanggal']) ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="4"><?= esc($kegiatan['deskripsi']) ?></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto Kegiatan</label>
        <?php if ($kegiatan['foto']) : ?>
            <div class="mb-2">
                <img src="<?= base_url('assets/foto/kegiatan/' . $kegiatan['foto']) ?>" width="120">
            </div>
        <?php endif ?>
        <input type="file" name="foto" class="form-control">
        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto</small>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= base_url('admin/kegiatan-asrama') ?>" class="btn btn-secondary">Kembali</a>
</form>

<?= $this->endSection() ?>
