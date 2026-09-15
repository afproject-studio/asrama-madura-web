<?= $this->extend('admin/layout/admin_layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid px-4 py-4">
    <div class="row g-4">
        <!-- Card Penghuni -->
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card bg-gradient-primary text-white shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-user-tie fa-2x mb-2"></i>
                    <h4><?= esc($totalpenghuni ?? 0) ?></h4>
                    <p>Penghuni</p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('admin/penghuni') ?>" class="stretched-link text-white">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card Berita -->
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card bg-gradient-warning text-white shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-newspaper fa-2x mb-2"></i>
                    <h4><?= esc($totalBerita ?? 0) ?></h4>
                    <p>Berita</p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('admin/berita') ?>" class="stretched-link text-white">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card Galeri -->
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card bg-gradient-success text-white shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-image fa-2x mb-2"></i>
                    <h4><?= esc($totalGaleri ?? 0) ?></h4>
                    <p>Galeri</p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('admin/galeri') ?>" class="stretched-link text-white">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Card Prestasi -->
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card bg-gradient-danger text-white shadow-sm">
                <div class="card-body text-center">
                    <i class="fas fa-trophy fa-2x mb-2"></i>
                    <h4><?= esc($totalPrestasi ?? 0) ?></h4>
                    <p>Prestasi</p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('admin/prestasi') ?>" class="stretched-link text-white">Lihat Detail</a>
                </div>
            </div>
        </div>
        <!-- Card Kegiatan Asrama -->
<div class="col-xl-3 col-md-6">
    <div class="card dashboard-card bg-gradient-primary text-white shadow-sm">
        <div class="card-body text-center">
            <i class="fas fa-calendar-check fa-2x mb-2"></i>
            <h4><?= esc($totalKegiatanAsrama  ?? 0) ?></h4>
            <p>Kegiatan Asrama</p>
        </div>
        <div class="card-footer text-center">
            <a href="<?= base_url('admin/kegiatan-asrama') ?>" class="stretched-link text-white">
                Lihat Detail
            </a>
        </div>
    </div>
</div>

    </div>

    <!-- Prestasi Terbaru -->
    <div class="card mt-4 shadow-sm">
        <div class="card-header bg-dark text-white">
            <i class="fas fa-trophy me-2"></i>Prestasi Terbaru
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($prestasiTerbaru)): ?>
                        <?php foreach ($prestasiTerbaru as $p): ?>
                            <tr>
                                <td><?= esc($p['judul']) ?></td>
                                <td><?= date('d M Y', strtotime($p['tanggal'])) ?></td>
                            </tr>
                        <?php endforeach ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center text-muted">Belum ada data.</td>
                        </tr>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
