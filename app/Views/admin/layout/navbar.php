<!-- Navbar Admin -->
<nav class="admin-navbar navbar navbar-expand-lg navbar-dark border-bottom shadow-sm">
    <div class="container-fluid">
        <button class="btn btn-outline-light" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
        <h5 class="ms-3 text-white fw-bold">Admin Panel</h5>
        <div class="ms-auto d-flex align-items-center">
            <span class="text-white me-3">Halo, <?= esc(session()->get('admin_username')) ?></span>
            <a href="<?= base_url('admin/auth/logout') ?>" class="btn btn-sm btn-danger"
               onclick="return confirm('Yakin ingin logout?')">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
</nav>
