<?php
$judul = 'Anggota - Sistem Parkir Modern';
$menu_aktif = 'anggota';
$css_extra = ['asset/anggota.css'];
include 'header.php';
require_once 'koneksi.php';
$hasil = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY id");
?>
</head>
<body>
  <div class="app-container">
    <?php include 'menu.php'; ?>

<!-- Konten Utama -->
<main class="main-content">
  <div class="container-fluid p-0">

    <!-- Header (Judul Halaman Bawaan Anda) -->
    <div class="mb-4">
      <h3 class="mb-1 font-weight-bold">Daftar Anggota Sistem</h3>
      <p class="text-muted small mb-0">Tim pengembang dan manajemen administratif internal aplikasi parkir</p>
    </div>
        <!-- Grid Cards Anggota (data dari database) -->
        <div class="row g-4">
          <?php while ($a = mysqli_fetch_assoc($hasil)): ?>
          <div class="col-12 col-xl-6">
            <div class="surface-card">
              <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4">
                <img src="<?= htmlspecialchars($a['foto']) ?>" alt="<?= htmlspecialchars($a['panggilan']) ?>" class="profile-img shadow-sm">
                <div class="flex-grow-1 text-center text-sm-start">
                  <h5 class="fw-bold mb-1"><a class="text-dark text-decoration-none" href="<?= htmlspecialchars($a['halaman']) ?>"><?= htmlspecialchars($a['nama_lengkap']) ?></a></h5>
                  <span class="badge bg-light text-primary border px-2 py-1 mb-3 rounded-2 small"><?= htmlspecialchars($a['peran']) ?></span>
                  <table class="table table-borderless info-table text-start mb-0">
                    <tr><td>NIM</td><td>: <?= htmlspecialchars($a['nim']) ?></td></tr>
                    <tr><td>Jurusan</td><td>: <?= htmlspecialchars($a['jurusan']) ?></td></tr>
                    <tr><td>Alamat</td><td>: <?= htmlspecialchars($a['alamat']) ?></td></tr>
                    <tr><td>Kontak</td><td>: <?= htmlspecialchars($a['kontak']) ?></td></tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div> <!-- End Row -->

      </div>
    </main>
  </div>

  <!-- Script Bootstrap -->
  <?php include 'footer.php'; ?>
</body>
</html>
