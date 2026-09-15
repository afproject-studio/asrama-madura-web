<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container-form">
    <h2 class="mb-4">Tambah Penghuni Asrama</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/penghuni/save') ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text"
                   name="nama_lengkap"
                   class="form-control"
                   value="<?= old('nama_lengkap') ?>"
                   required>
        </div>

        <div class="mb-3">
                    
                    <label for="status_penghuni" class="form-label fw-semibold">status penghuni</label>
                    <input type="text" id="jenis_kegiata" name="status_penghuni" class="form-control"
                        value="<?= old('status_penghuni') ?>" placeholder="Contoh: Mahasiswa, Asal, NIM" required>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text"
                   name="nim"
                   class="form-control"
                   value="<?= old('nim') ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Asal Daerah</label>
            <input type="text"
                   name="asal"
                   class="form-control"
                   value="<?= old('asal') ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Foto Penghuni</label>
            <input type="file"
                   name="foto"
                   class="form-control"
                   accept="image/*"
                   required>
            <small class="text-muted">
                Format JPG / JPEG / PNG (Max 4MB)
            </small>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
            <a href="<?= base_url('admin/penghuni') ?>" class="btn btn-secondary">
                Kembali
            </a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
