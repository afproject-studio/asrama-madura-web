<?= $this->include('layouts/header') ?>

<section class="sejarah">
  <div class="sejah">
    <h2>Sejarah Asrama Mahasiswa Madura Yogyakarta</h2>

    <!-- Slideshow Gambar -->
    <div class="slideshow-sejah">
      <img id="slideImage" src="<?= base_url('assets/img/3.jpg') ?>" alt="Slideshow Sejarah" />
    </div>

    <!-- Deskripsi Sejarah -->
    <p>Asrama Mahasiswa Madura Yogyakarta didirikan sebagai bentuk kepedulian terhadap mahasiswa asal Madura yang menempuh pendidikan di Yogyakarta. Keberadaan asrama ini berawal dari kebutuhan akan tempat tinggal yang layak sekaligus ruang pembinaan bagi mahasiswa perantauan agar dapat beradaptasi dengan lingkungan akademik dan sosial di Yogyakarta.

Seiring berjalannya waktu, asrama tidak hanya berfungsi sebagai hunian, tetapi juga berkembang menjadi pusat kegiatan mahasiswa Madura dalam bidang akademik, sosial, dan kebudayaan. Asrama ini menjadi wadah untuk mempererat persaudaraan, menumbuhkan semangat kebersamaan, serta menjaga nilai-nilai budaya Madura di tengah keberagaman masyarakat Yogyakarta.

Dalam perjalanannya, Asrama Mahasiswa Madura Yogyakarta turut melahirkan generasi mahasiswa yang berkontribusi di berbagai bidang, baik di tingkat daerah maupun nasional. Hingga saat ini, asrama terus berupaya mempertahankan perannya sebagai rumah bersama yang mendukung pembentukan karakter, intelektualitas, dan tanggung jawab sosial mahasiswa Madura.</p>
    
    <p>
Seiring dengan meningkatnya jumlah mahasiswa Madura yang melanjutkan pendidikan di Yogyakarta, peran Asrama Mahasiswa Madura Yogyakarta semakin strategis sebagai pusat pembinaan dan penguatan solidaritas mahasiswa daerah. Asrama menjadi tempat pembentukan sikap disiplin, tanggung jawab, serta semangat gotong royong dalam kehidupan bersama.

Dalam perjalanannya, asrama juga menghadapi berbagai tantangan, baik dari segi pengelolaan, fasilitas, maupun dinamika sosial penghuninya. Namun, melalui kebersamaan dan komitmen seluruh penghuni serta pengurus, asrama mampu bertahan dan terus beradaptasi dengan perkembangan zaman. Hal ini menjadikan asrama tidak hanya sebagai tempat tinggal, tetapi juga sebagai ruang pembelajaran kehidupan bermasyarakat.

Asrama Mahasiswa Madura Yogyakarta turut berperan sebagai jembatan antara mahasiswa Madura dengan masyarakat sekitar. Hubungan yang harmonis dengan lingkungan setempat dibangun melalui kegiatan sosial, keagamaan, dan kemasyarakatan, sehingga keberadaan asrama dapat diterima dan memberikan manfaat bagi masyarakat sekitar.

Hingga saat ini, Asrama Mahasiswa Madura Yogyakarta tetap berkomitmen menjaga nilai-nilai kebersamaan, kekeluargaan, dan budaya Madura, sekaligus mendorong penghuninya untuk berpikir kritis, berwawasan luas, dan berkontribusi nyata dalam dunia akademik maupun sosial. Dengan semangat tersebut, asrama diharapkan terus menjadi rumah bersama yang melahirkan generasi mahasiswa Madura yang berintegritas, berintelektual, dan berdaya saing.
    </p>
    <p>
     Dalam upaya menjaga keberlangsungan fungsi dan tujuan asrama, pengelolaan Asrama Mahasiswa Madura Yogyakarta dilakukan secara kolektif melalui kepengurusan yang melibatkan mahasiswa sebagai pengurus harian. Sistem ini bertujuan untuk melatih jiwa kepemimpinan, manajemen organisasi, serta tanggung jawab sosial para penghuni asrama.

Asrama juga menjadi ruang tumbuhnya tradisi intelektual melalui kegiatan diskusi rutin, kajian keilmuan, dan forum tukar gagasan antar mahasiswa dari berbagai disiplin ilmu. Aktivitas tersebut mendorong terciptanya iklim akademik yang sehat dan dinamis, sekaligus memperkuat peran asrama sebagai pendukung keberhasilan studi mahasiswa.

Selain kegiatan akademik, Asrama Mahasiswa Madura Yogyakarta aktif menyelenggarakan kegiatan keagamaan dan kebudayaan yang bertujuan memperkuat nilai moral, etika, serta pelestarian tradisi Madura. Kegiatan ini menjadi sarana pembentukan karakter dan identitas mahasiswa di tengah kehidupan perantauan.

Dengan berjalannya waktu, asrama telah menjadi bagian penting dari sejarah perjalanan mahasiswa Madura di Yogyakarta. Berbagai generasi telah lahir dan berkembang dari lingkungan asrama ini, membawa pengalaman, nilai, dan semangat kebersamaan untuk diterapkan di masyarakat setelah menyelesaikan pendidikan.</p>
  </div>
</section>

<script>
  const images = [
    "<?= base_url('assets/img/foto1.jpg') ?>",
    "<?= base_url('assets/img/foto2.jpg') ?>",
    "<?= base_url('assets/img/foto3.jpg') ?>",
    "<?= base_url('assets/img/foto2.jpg') ?>"
  ];

  let current = 0;
  const imgElement = document.getElementById("slideImage");

  function showSlide(index) {
    current = (index + images.length) % images.length;
    imgElement.style.opacity = 0;

    setTimeout(() => {
      imgElement.src = images[current];
      imgElement.style.opacity = 1;
    }, 300);
  }

  // Auto slide
  setInterval(() => {
    showSlide(current + 1);
  }, 4000);

  // Tampilkan slide pertama saat halaman dimuat
  showSlide(current);
</script>

<?= $this->include('layouts/footer') ?>
