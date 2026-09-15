<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 800px;">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4 text-center">Tambah Prestasi</h3>

            <form action="<?= base_url('admin/prestasi/save') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul Prestasi</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="<?= old('judul') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="5" class="form-control" required><?= old('deskripsi') ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label fw-semibold">Tanggal Prestasi</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= old('tanggal') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-semibold">Foto Prestasi</label>
                    <input type="file" id="foto" name="foto" class="form-control" accept=".jpg,.jpeg,.png">
                </div>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button type="submit" class="btn btn-success fw-semibold px-4">Simpan</button>
                    <a href="<?= base_url('admin/prestasi') ?>" class="btn btn-secondary px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
