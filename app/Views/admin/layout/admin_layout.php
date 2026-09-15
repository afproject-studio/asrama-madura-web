<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Admin CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/Penghuni.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/berita.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/galeri.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>"> <!-- CSS header khusus -->
    <link rel="stylesheet" href="<?= base_url('assets/css/ppts.css') ?>">

</head>

<body>
    <!-- Navbar -->
    <nav class="admin-navbar navbar navbar-dark">
        <div class="container-fluid">
            <!-- Toggle untuk mobile -->
            <button class="btn btn-outline-light me-2 d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                <i class="fas fa-bars"></i>
            </button>
            <h5 class="text-white fw-bold mb-0"><?= esc($title ?? 'Dashboard') ?></h5>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar (Desktop) -->
        <div id="sidebar-wrapper" class="d-none d-lg-block">
            <div class="sidebar-heading text-white fw-bold">Admin Panel</div>
            <div class="list-group list-group-flush">
                <a href="<?= base_url('admin/dashboard') ?>" class="list-group-item"><i
                        class="fas fa-home me-2"></i>Dashboard</a>
                <a href="<?= base_url('admin/penghuni') ?>" class="list-group-item"><i
                        class="fas fa-chalkboard-teacher me-2"></i>Penghuni</a>
                <a href="<?= base_url('admin/berita') ?>" class="list-group-item"><i
                        class="fas fa-newspaper me-2"></i>Berita</a>
                <a href="<?= base_url('admin/galeri') ?>" class="list-group-item"><i
                        class="fas fa-image me-2"></i>Galeri</a>
                <a href="<?= base_url('admin/prestasi') ?>" class="list-group-item"><i
                        class="fas fa-trophy me-2"></i>Prestasi</a>
                        <a href="<?= base_url('admin/kegiatan-asrama') ?>" class="list-group-item">
    <i class="fas fa-calendar-check me-2"></i> Kegiatan Asrama
</a>

                <a href="<?= base_url('admin/auth/logout') ?>" class="list-group-item text-danger"
                    onclick="return confirm('Yakin ingin logout?')"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
            </div>
        </div>

        <!-- Sidebar Offcanvas (Mobile) -->
        <div class="offcanvas offcanvas-start sidebar-dark" tabindex="-1" id="offcanvasSidebar">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white">Admin Panel</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body p-0">
                <div class="list-group list-group-flush">
                    <a href="<?= base_url('admin/dashboard') ?>" class="list-group-item"><i
                            class="fas fa-home me-2"></i>Dashboard</a>
                    <a href="<?= base_url('admin/penghuni') ?>" class="list-group-item"><i
                            class="fas fa-chalkboard-teacher me-2"></i>Data Penghuni</a>
                    <a href="<?= base_url('admin/berita') ?>" class="list-group-item"><i
                            class="fas fa-newspaper me-2"></i>Berita</a>
                    <a href="<?= base_url('admin/galeri') ?>" class="list-group-item"><i
                            class="fas fa-image me-2"></i>Galeri</a>
                    <a href="<?= base_url('admin/prestasi') ?>" class="list-group-item"><i
                            class="fas fa-trophy me-2"></i>Prestasi</a>
                     <a href="<?= base_url('admin/kegiatan-asrama') ?>" class="list-group-item"><i
                            class="fas fa-trophy me-2"></i>Kegiatan asrama</a>
                    <a href="<?= base_url('admin/auth/logout') ?>" class="list-group-item text-danger"
                        onclick="return confirm('Yakin ingin logout?')"><i
                            class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="flex-grow-1 p-3">
            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>