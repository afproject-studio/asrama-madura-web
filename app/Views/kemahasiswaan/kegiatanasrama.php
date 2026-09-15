<?= $this->include('layouts/header') ?>

<div class="container py-5">
    <h3 class="mb-4 text-center"><?= esc($title ?? 'Kegiatan Asrama') ?></h3>

    <?php if (empty($kegiatan)) : ?>
        <div class="alert alert-info text-center">
            Belum ada kegiatan asrama.
        </div>
    <?php else : ?>
        <div class="row">
            <?php foreach ($kegiatan as $row) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">

                        <?php
                        $foto = !empty($row['foto']) && file_exists(FCPATH . 'assets/foto/kegiatan/' . $row['foto'])
                            ? base_url('assets/foto/kegiatan/' . $row['foto'])
                            : base_url('assets/foto/kegiatan/default.png');
                        ?>

                        <img src="<?= $foto ?>"
                             class="card-img-top"
                             alt="<?= esc($row['nama_kegiatan']) ?>"
                             style="height:200px; object-fit:cover;">

                        <div class="card-body">
                            <h5 class="card-title"><?= esc($row['nama_kegiatan']) ?></h5>

                            <p class="text-muted mb-2">
                                <?= esc($row['jenis_kegiatan']) ?> • 
                                <?= date('d M Y', strtotime($row['tanggal'])) ?>
                            </p>

                            <p class="card-text">
                                <?= esc(substr($row['deskripsi'], 0, 100)) ?>...
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
</div>

<?= $this->include('layouts/footer') ?>
