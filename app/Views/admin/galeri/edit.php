<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>


<div class="container py-5">
    <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 800px;">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4 text-center">Edit Galeri</h3>

            <!-- Form edit galeri -->
            <form action="<?= base_url('admin/galeri/update/' . $galeri['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?> <!-- proteksi CSRF -->

                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul Galeri</label>
                    <input type="text" id="judul" name="judul" class="form-control" value="<?= esc(old('judul', $galeri['judul'])) ?>" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="6" class="form-control"><?= esc(old('deskripsi', $galeri['deskripsi'])) ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label fw-semibold">Foto</label><br>
                    <?php if ($galeri['foto']): ?>
                        <img src="<?= base_url('assets/foto/galeri/' . $galeri['foto']) ?>" width="150" class="mb-2 rounded shadow-sm" alt="Foto Galeri"><br>
                    <?php else: ?>
                        <em>Tidak ada gambar</em><br>
                    <?php endif ?>
                    <input type="file" id="foto" name="foto" class="form-control" accept=".jpg,.jpeg,.png">
                    <small class="text-muted">Max ukuran file 4MB. Format: JPG, JPEG, PNG.</small>
                </div>

                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button type="submit" class="btn btn-primary fw-semibold px-4">Update</button>
                    <a href="<?= base_url('admin/galeri') ?>" class="btn btn-secondary px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

