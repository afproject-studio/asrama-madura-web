<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asrama Trunojoyo Madura Yogyakarta</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/kegiatan_asrama.css') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/berita.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/galeri.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/js/header.js') ?>"></script>
</head>

<body>

    <!-- HEADER TOP -->
    <header class="header-top py-2 border-bottom">
        <div class="container d-flex align-items-center">
            <img src="<?= base_url('assets/foto/logo.png') ?>" alt="Logo Asrama" class="logo me-3" id="mainLogo">
            <div class="school-name">
                <h1 class="fs-4 mb-0 fw-bold">
                    <a class="nav-link p-0" href="<?= base_url('/') ?>">
                        Asrama Trunojoyo Madura Yogyakarta
                    </a>
                </h1>
                <p class="mb-0 small">Website Resmi Asrama Trunojoyo Madura Yogyakarta</p>
            </div>
        </div>
    </header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-light sticky-navbar" id="mainNavbar">
        <div class="container">

            <!-- Logo Navbar -->
            <a class="navbar-brand d-none" id="navbarLogo" href="<?= base_url('/') ?>">
                <img src="<?= base_url('assets/foto/logo.png') ?>" alt="Logo Asrama" height="40">
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item <?= url_is('/') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                    </li>

                    <!-- PROFIL -->
                    <li class="nav-item dropdown <?= url_is('profil*') ? 'active' : '' ?>">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">Sejarah</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('profil/visi-misi') ?>">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('profil/penghuni') ?>">Penghuni</a></li>
                        </ul>
                    </li>

                    <!-- KEMAHASISWAAN -->
                    <li class="nav-item dropdown <?= url_is('kemahasiswaan*') ? 'active' : '' ?>">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kemahasiswaan</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('kemahasiswaan/kegiatan-asrama') ?>">
                                    Kegiatan Asrama
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('kemahasiswaan/prestasi') ?>">
                                    Prestasi
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- BERITA -->
                    <li class="nav-item <?= url_is('berita*') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('berita') ?>">Berita</a>
                    </li>

                    <!-- GALERI -->
                    <li class="nav-item <?= url_is('galeri*') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('galeri') ?>">Galeri</a>
                    </li>

                    <!-- KONTAK -->
                    <li class="nav-item <?= url_is('kontak*') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('kontak') ?>">Kontak</a>
                    </li>
                </ul>

                <!-- AUTH -->
                <div class="d-flex align-items-center">
                    <?php if (session()->get('isLoggedIn')): ?>
                        <span class="me-2 fw-semibold"><?= session()->get('username') ?></span>
                        <a href="<?= base_url('admin/dashboard') ?>" title="Dashboard Admin">
                            <i class="bi bi-person-circle fs-3"></i>
                        </a>
                    <?php else: ?>
                        <a href="<?= base_url('admin') ?>" class="btn btn-primary rounded-pill px-3">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </nav>

    <!-- KONTEN -->
    <div class="container-utama">
        <main class="main-content">
