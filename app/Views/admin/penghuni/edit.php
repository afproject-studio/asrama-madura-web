<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container py-5">
    <div class="card shadow border-0 rounded-4 mx-auto" style="max-width: 700px;">
        <div class="card-body p-4">
            <h3 class="fw-bold mb-4 text-center">Edit Data Penghuni Asrama</h3>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('admin/penghuni/update/' . $penghuni['id_penghuni']) ?>"
                  method="post" enctype="multipart/form-data">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text"
                           name="nama_lengkap"
                           class="form-control"
                           value="<?= esc($penghuni['nama_lengkap']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Status Penghuni</label>
                    <select name="status_penghuni" class="form-select" required>
                        <option value="Mahasiswa" <?= $penghuni['status_penghuni']=='Mahasiswa'?'selected':'' ?>>Mahasiswa</option>
                        <option value="Pengurus" <?= $penghuni['status_penghuni']=='Pengurus'?'selected':'' ?>>Pengurus</option>
                        <option value="Alumni" <?= $penghuni['status_penghuni']=='Alumni'?'selected':'' ?>>Alumni</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">NIM</label>
                    <input type="text"
                           name="nim"
                           class="form-control"
                           value="<?= esc($penghuni['nim']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Asal Daerah</label>
                    <input type="text"
                           name="asal"
                           class="form-control"
                           value="<?= esc($penghuni['asal']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Ganti Foto (Opsional)</label>
                    <input type="file"
                           name="foto"
                           class="form-control"
                           accept=".jpg,.jpeg,.png">

                    <?php if (!empty($penghuni['foto'])): ?>
                        <div class="mt-3">
                            <strong>Foto Saat Ini:</strong><br>
                            <img src="<?= base_url('assets/foto/penghuni/' . $penghuni['foto']) ?>"
                                 class="img-thumbnail mt-2"
                                 style="max-width:150px;">
                        </div>
                    <?php endif; ?>
                </div>

                <div class="d-flex justify-content-center gap-3 mt-4">
                    <button type="submit" class="btn btn-primary px-4">
                        Update
                    </button>
                    <a href="<?= base_url('admin/penghuni') ?>" class="btn btn-secondary px-4">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
