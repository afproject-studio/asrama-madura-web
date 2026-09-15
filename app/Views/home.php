<?= $this->include('layouts/header') ?>

<!-- Hero Section -->
<section class="hero position-relative text-center">
    <img src="<?= base_url('assets/foto/home1.jpg') ?>" alt="Foto Sekolah" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;">
    <div class="hero-text position-absolute top-50 start-50 translate-middle text-white bg-dark bg-opacity-50 p-4 rounded">
        <h2>Asrama Trunojoyo Madura Yogyakarta<br>Persaudaraan, Identitas Madura, dan Intelektualitas.<br></h2>
        <p class="mb-0">Asrama Mahasiswa Madura di Yogyakarta atau Asrama Trunojoyo merupakan tempat tinggal bagi mahasiswa asal Madura yang menempuh pendidikan di berbagai perguruan tinggi di Yogyakarta, 
            sekaligus menjadi wadah pembinaan kebersamaan, akademik, dan budaya.</p>
    </div>
</section>

<!-- Tentang Sekolah -->
<section class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">TENTANG ASRAMA</h3>
<div class="row justify-content-center align-items-center">
    <div class="col-md-6 mb-3 mb-md-0">
        <img src="<?= base_url('assets/foto/brigade.jpg') ?>" alt="Tentang Sekolah" class="img-fluid rounded shadow" loading="lazy">
    </div>
    <div class="col-md-6 text-center"> <!-- text-center biar rata tengah -->
        <p style="text-align: justify; text-indent: 2em;">
            Asrama Mahasiswa Madura di Yogyakarta merupakan sarana hunian yang berlandaskan nilai kebersamaan, kemandirian, dan kekeluargaan. Asrama ini berkomitmen menciptakan lingkungan yang tertib, nyaman, dan kondusif untuk mendukung perkembangan akademik serta non-akademik mahasiswa. Selain sebagai tempat tinggal, asrama berperan sebagai wadah pembinaan karakter, penguatan solidaritas, dan pelestarian nilai budaya Madura. Dengan pengelolaan yang terarah serta fasilitas penunjang yang memadai, 
            asrama ini diharapkan mampu membentuk mahasiswa yang berintegritas, bertanggung jawab, dan siap menghadapi tantangan masa depan. Lebih jauh, Asrama Mahasiswa Madura di Yogyakarta dikelola dengan prinsip kebersamaan dan tanggung jawab bersama melalui struktur kepengurusan yang melibatkan mahasiswa secara aktif. Sistem ini bertujuan untuk melatih kepemimpinan, kedisiplinan, serta kemampuan organisasi penghuni asrama dalam kehidupan kolektif. Setiap penghuni didorong untuk berperan aktif menjaga ketertiban, keamanan, dan kenyamanan lingkungan asrama.
            Asrama juga berfungsi sebagai pusat penguatan identitas dan jati diri mahasiswa Madura. Melalui berbagai program pembinaan budaya, nilai-nilai luhur Madura seperti etika, sopan santun, dan semangat gotong royong terus ditanamkan agar tetap hidup di tengah arus modernisasi. Nilai-nilai tersebut dipadukan dengan semangat akademik dan pemikiran kritis sebagai bekal menghadapi tantangan zaman.
            Dalam mendukung keberhasilan studi mahasiswa, asrama menciptakan iklim yang mendorong semangat belajar, berbagi pengetahuan, serta saling mendukung antar penghuni. Kehidupan bersama di asrama menjadi sarana pembelajaran sosial yang membentuk sikap toleransi, kemandirian, dan kemampuan menyelesaikan masalah secara bijaksana.
        </p>
    </div>
</div>

<!-- Visi dan Misi Sekolah -->
<section class="bg-light py-5 text-center">
    <div class="container">
   <!-- Visi dan Misi Sekolah -->
<section class="bg-light py-5 text-center">
    <div class="container">
       <!-- Visi dan Misi Sekolah -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <!-- Visi -->
        <h3 class="mb-3" style="color:#800000; font-weight:bold;">Visi Asrama</h3>
        <p class="fst-italic" style="color:#555; font-size:1.1rem; line-height:1.6;">
            “Mewujudkan asrama mahasiswa yang berwawasan kebangsaan, unggul dalam pengembangan intelektual, serta berlandaskan nilai religius
            guna membentuk pribadi yang berkarakter, mandiri, dan berbudi pekerti luhur.”
        </p>

        <!-- Misi -->
       <h3 class="mb-3" style="color:#800000; font-weight:bold;">Misi Asrama</h3>
        <ol style="list-style-position: inside; text-align:center; padding-left:0; display:inline-block; text-align:left;">
            <li style="margin-bottom:0.8rem; color:#555; font-size:1.1rem; line-height:1.6;">
                Menumbuhkan kesadaran berbangsa dan cinta tanah air di kalangan penghuni asrama.
            </li>
            <li style="margin-bottom:0.8rem; color:#555; font-size:1.1rem; line-height:1.6;">
                Mendorong pengembangan intelektual dan kemampuan akademik mahasiswa.
            </li>
            <li style="margin-bottom:0.8rem; color:#555; font-size:1.1rem; line-height:1.6;">
                Menanamkan nilai-nilai religius dan moral yang kuat pada setiap penghuni.
            </li>
            <li style="margin-bottom:0.8rem; color:#555; font-size:1.1rem; line-height:1.6;">
                Membentuk penghuni yang mandiri, disiplin, dan berkarakter.
            </li>
            <li style="margin-bottom:0.8rem; color:#555; font-size:1.1rem; line-height:1.6;">
                Menciptakan lingkungan asrama yang nyaman, aman, dan mendukung aktivitas positif mahasiswa.
            </li>
        </ol>
    </div>
</section>




<!-- Berita Terbaru -->
<section class="py-5">
    <div class="container mt-5">
        <h2 class="mb-4">Berita Terbaru</h2>
        <div class="row g-4">
            <?php if (!empty($berita) && is_array($berita)): ?>
                <?php foreach ($berita as $item): ?>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <?php if (!empty($item['foto'])): ?>
                                <img src="<?= base_url('assets/foto/berita/' . $item['foto']); ?>" 
                                     class="card-img-top" 
                                     alt="<?= esc($item['judul']); ?>"
                                     loading="lazy">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($item['judul']); ?></h5>
                                <p class="card-text">
                                    <?= character_limiter(strip_tags($item['isi']), 100); ?>
                                </p>
                                <a href="<?= base_url('berita/detail/' . $item['slug']); ?>" class="btn btn-primary" rel="noopener noreferrer">Baca Selengkapnya</a>
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
</section>

<!-- Quotes -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <blockquote class="blockquote">
            <p>“Melalui ngerti, ngrasa, lan nglakoni (menyadari, menginsyafi, dan melakukan), budi pekerti yang dibentuk
                untuk merdeka dan mandiri akan hadir adab.”</p>
            <footer class="blockquote-footer text-white">Ki Hajar Dewantara</footer>
        </blockquote>
    </div>
</section>

<?= $this->include('layouts/footer') ?>
