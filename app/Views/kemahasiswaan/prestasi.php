<?= $this->include('layouts/header') ?>

<?= $this->section('content') ?>

<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">
        <?= esc($title) ?>
    </h2>

    <?php if (empty($prestasi)) : ?>
        <div class="alert alert-warning text-center">
            Belum ada data prestasi.
        </div>
    <?php else : ?>
        <div class="row g-4">
            <?php foreach ($prestasi as $row) : ?>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">

                        <?php 
                        // Path foto sama dengan admin: assets/foto/prestasi/
                        $fotoPath = FCPATH . 'assets/foto/prestasi/' . $row['foto'];
                        ?>
                        <?php if (!empty($row['foto']) && file_exists($fotoPath)) : ?>
                            <img 
                                src="<?= base_url('assets/foto/prestasi/' . $row['foto']) ?>" 
                                class="card-img-top"
                                style="height:200px; object-fit:cover;"
                                alt="<?= esc($row['judul']) ?>"
                            >
                        <?php else: ?>
                            <img 
                                src="<?= base_url('assets/foto/prestasi/default.png') ?>" 
                                class="card-img-top"
                                style="height:200px; object-fit:cover;"
                                alt="Default Prestasi"
                            >
                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                <?= esc($row['judul']) ?>
                            </h5>

                            <p class="text-muted small mb-2">
                                <i class="bi bi-calendar-event"></i>
                                <?= date('d M Y', strtotime($row['tanggal'])) ?>
                            </p>

                            <p class="card-text">
                                <?= esc(word_limiter($row['deskripsi'], 20)) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->include('layouts/footer') ?>
