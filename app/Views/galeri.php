<?= $this->include('layouts/header') ?>

<div class="container py-5 galeri-section">
    <h1 class="text-center mb-5 galeri-title">Galeri Foto</h1>
    <div class="row g-4">
        <?php foreach ($galeri as $g): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card galeri-card shadow-sm border-0 overflow-hidden">
                    <div class="position-relative">
                        <img src="<?= base_url('assets/foto/galeri/' . $g['foto']) ?>" class="card-img-top" alt="<?= esc($g['judul']) ?>">
                        <div class="galeri-overlay d-flex flex-column justify-content-end p-3">
                            <h5 class="text-white"><?= esc($g['judul']) ?></h5>
                            <p class="text-white small mb-0"><?= esc($g['deskripsi']) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->include('layouts/footer') ?>
