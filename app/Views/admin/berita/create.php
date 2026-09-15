<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 800px;">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4 text-center">Tambah Berita</h3>

            <!-- Form tambah berita -->
            <form action="<?= base_url('admin/berita/save') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?> <!-- proteksi CSRF -->

                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul Berita</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="<?= old('judul') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="isi" class="form-label fw-semibold">Isi Berita</label>
                    <textarea id="isi" name="isi" rows="6" class="form-control" required><?= old('isi') ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-semibold">Gambar (maks. 4MB, JPG/JPEG/PNG)</label>
                    <input type="file" id="foto" name="foto" class="form-control" accept=".jpg,.jpeg,.png">
                </div>

                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button type="submit" class="btn btn-success fw-semibold px-4">Simpan</button>
                    <a href="<?= base_url('admin/berita') ?>" class="btn btn-secondary px-4">Batal<lsjjkjjdkshon/a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

