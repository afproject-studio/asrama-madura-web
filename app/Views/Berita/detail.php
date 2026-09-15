<?= $this->include('layouts/header') ?>

<div class="container detail-wrapper py-5">
    <?php if (!empty($berita)): ?>
        <a href="<?= site_url('berita') ?>" class="btn btn-kembali mb-3">← Kembali</a>

        <h1 class="detail-title"><?= esc($berita['judul']) ?></h1>
        <p class="detail-date">
            <?= date('d M Y', strtotime($berita['tanggal_upload'])) ?> 
            | <span class="badge bg-primary"><?= ucfirst(esc($berita['jenis'])) ?></span>
        </p>

        <?php if (!empty($berita['foto'])): ?>
            <img src="<?= base_url('assets/foto/berita/' . esc($berita['foto'])) ?>" 
                 alt="<?= esc($berita['judul']) ?>" 
                 class="detail-img shadow-sm">
        <?php endif; ?>

        <div class="detail-content"><?= $berita['isi'] ?></div>
    <?php else: ?>
        <div class="alert alert-warning">Berita tidak ditemukan.</div>
    <?php endif; ?>
</div>

<?= $this->include('layouts/footer') ?>
