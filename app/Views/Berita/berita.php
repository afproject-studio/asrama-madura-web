<?= $this->include('layouts/header') ?>

<div class="container berita-wrapper py-5">
    <h2 class="judul-halaman mb-4">Berita Terbaru</h2>

    <div class="row g-4">
        <?php if (!empty($berita) && is_array($berita)): ?>
            <?php foreach ($berita as $item): ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm berita-card">
                        <?php if (!empty($item['foto'])): ?>
                            <img src="<?= base_url('assets/foto/berita/' . $item['foto']) ?>" 
                                 class="card-img-top berita-img" 
                                 alt="<?= esc($item['judul']) ?>">
                        <?php endif; ?>

                        <div class="card-body berita-body">
                            <span class="berita-badge"><?= ucfirst($item['jenis']) ?></span>
                            <h5 class="berita-title">
                                <a href="<?= site_url('berita/detail/' . $item['slug']) ?>" class="text-decoration-none text-dark">
                                    <?= esc($item['judul']) ?>
                                </a>
                            </h5>
                            <p class="berita-date"><?= date('d M Y', strtotime($item['tanggal_upload'])) ?></p>
                            <p class="berita-excerpt"><?= character_limiter(strip_tags($item['isi']), 100) ?></p>
                        </div>

                        <div class="card-footer berita-footer">
                            <a href="<?= site_url('berita/detail/' . $item['slug']) ?>" class="btn btn-baca">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info text-center">Belum ada berita.</div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->include('layouts/footer') ?>
