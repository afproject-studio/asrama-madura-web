<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">



<div class="container login-container">
    <div class="login-box">
        <div class="text-center mb-4">
            <img src="<?= base_url('assets/foto/logo.png') ?>" alt="Logo Sekolah" width="80">
            <h3>LOGIN ADMIN</h3>
        </div>

        <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('admin/auth/login') ?>" method="post">
            <div class="form-group mb-3">
                <i class="fas fa-user"></i>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>

            <div class="form-group mb-4">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-block w-100">Login</button>
        </form>
    </div>
</div>


