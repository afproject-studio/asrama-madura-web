<?= $this->include('layouts/header') ?>

<div class="kontak-container py-5">
  <h2 class="heading-kontak">Kontak Kami</h2>

  <div class="row gx-4 gy-4 align-items-stretch">
    
    <!-- Kontak (kiri) -->
    <div class="col-md-6 d-flex">
      <div class="card shadow-sm w-100">
        <div class="card-body">
          <h5 class="subheading-kontak">Informasi Kontak</h5>
          <p><strong>Alamat:</strong><br>Jl. Tegal Panggung, Danurejan,
Kota Yogyakarta.</p>
          <p><strong>Telepon:</strong><br>+62896-8189-9443</p>
          <p><strong>Email:</strong><br><a href="mailto:Smatmip@gmail.com">asramatrunojoyo@gmail.com</a></p>

          <p><strong>Media Sosial:</strong></p>
          <p>
        
            <a href="https://www.instagram.com/asramatrunojoyomadura?igsh=MWl0eTJkYXRycDBhMQ=="class="instagram-link" target="_blank">
              <i class="fab fa-instagram fa-lg"></i> Instagram
            </a>
          </p>
        </div>
      </div>
    </div>

              <!-- Alamat + GMaps -->
              <div class="col-md-5">
                  <div class="ratio ratio-16x9">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.8319167160593!2d110.36843151430867!3d-7.794627187237735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5829e0f7a895%3A0x58e4001b9d9a8ffb!2sAsrama%20Trunojoyo!5e0!3m2!1sid!2sid!4v1757565512345!5m2!1sid!2sid"
                          width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                          referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
              </div>

  </div>
</div>

<?= $this->include('layouts/footer') ?>
