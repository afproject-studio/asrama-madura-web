<?= $this->include('layouts/header') ?>

<div class="container py-5">
    <h2 class="fw-bold text-center text-maroon mb-5">Data Penghuni Asrama</h2>

    <div class="row g-4">
        <?php foreach ($Penghuni as $row): ?>
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100 penghuni-card">
                <div class="row g-0">
                    <div class="col-4 d-flex align-items-center">
                        <img src="<?= base_url('assets/foto/penghuni/' . $row['foto']) ?>"
                             alt="Foto <?= esc($row['nama_lengkap']) ?>"
                             class="img-fluid rounded-start penghuni-img">
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-2 text-maroon">
                                <?= esc($row['nama_lengkap']) ?>
                            </h5>

                            <p class="mb-1">
                                <i class="bi bi-person-fill me-1"></i>
                                <strong>Status:</strong> <?= esc($row['status_penghuni']) ?>
                            </p>

                            <p class="mb-1">
                                <i class="bi bi-mortarboard-fill me-1"></i>
                                <strong>NIM:</strong> <?= esc($row['nim']) ?>
                            </p>

                            <p class="mb-0">
                                <i class="bi bi-geo-alt-fill me-1"></i>
                                <strong>Asal:</strong> <?= esc($row['asal']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('layouts/footer') ?>
