<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 800px;">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4 text-center">Tambah Kegiatan Asrama</h3>

            <form action="<?= base_url('admin/kegiatan-asrama/save') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <!-- Nama Kegiatan -->
                <div class="mb-3">
                    <label for="nama_kegiatan" class="form-label fw-semibold">Nama Kegiatan</label>
                    <input type="text" id="nama_kegiatan" name="nama_kegiatan" class="form-control"
                        value="<?= old('nama_kegiatan') ?>" placeholder="Nama Kegiatan" required>
                </div>

                <!-- Jenis Kegiatan (BEBAS) -->
                <div class="mb-3">
                    <label for="jenis_kegiatan" class="form-label fw-semibold">Jenis Kegiatan</label>
                    <input type="text" id="jenis_kegiatan" name="jenis_kegiatan" class="form-control"
                        value="<?= old('jenis_kegiatan') ?>" placeholder="Contoh: Seminar, Lomba, Rapat" required>
                </div>

                <!-- Tanggal -->
                <div class="mb-3">
                    <label for="tanggal" class="form-label fw-semibold">Tanggal Kegiatan</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control"
                        value="<?= old('tanggal') ?>" required>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="5" class="form-control"
                        placeholder="Deskripsi Kegiatan" required><?= old('deskripsi') ?></textarea>
                </div>

                <!-- Foto -->
                <div class="mb-3">
                    <label for="foto" class="form-label fw-semibold">Foto Kegiatan</label>
                    <input type="file" id="foto" name="foto" class="form-control" accept=".jpg,.jpeg,.png">
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button type="submit" class="btn btn-success fw-semibold px-4">Simpan</button>
                    <a href="<?= base_url('admin/kegiatan-asrama') ?>" class="btn btn-secondary px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
