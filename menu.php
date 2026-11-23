<?php
// menu.php - sidebar menu (dipisah dari halaman). Di-include oleh setiap halaman.
// Daftar anggota untuk sub-menu diambil dari database.
require_once __DIR__ . '/koneksi.php';
$base = $base ?? '';
$namaDefault = $namaDefault ?? 'Operator';
$daftar_menu_anggota = [];
$q = mysqli_query($koneksi, "SELECT id, panggilan, halaman FROM anggota ORDER BY id");
if ($q) { while ($r = mysqli_fetch_assoc($q)) { $daftar_menu_anggota[] = $r; } }
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    // 1. Script Otomatis Menu Aktif (Bawaan kode Anda yang lama)
    const currentPage = window.location.pathname.split("/").pop();
    document.querySelectorAll(".sidebar .nav-link").forEach(link => {
        const linkPage = link.getAttribute("href");
        if (linkPage === currentPage) {
            link.classList.add("active");
        }
    });

    // ========================================================
    // TAHAP 1: KODE BARU UNTUK MENGAMBIL NAMA BROWSER
    // ========================================================
    // Kode ini bertugas mengambil nama dari memori login. 
    // Jika tidak ada nama yang tersimpan, ia akan otomatis memakai nama "Operator"
    const namaUser = localStorage.getItem("namaUser") || "<?= $namaDefault ?>";
    // Samakan sapaan dengan Dashboard: ikut berubah sesuai jam (pagi/siang/sore/malam)
    const jamSapaan = new Date().getHours();
    let sapaanWaktu = "Selamat datang";
    if (jamSapaan >= 4 && jamSapaan < 11) sapaanWaktu = "Selamat pagi";
    else if (jamSapaan >= 11 && jamSapaan < 15) sapaanWaktu = "Selamat siang";
    else if (jamSapaan >= 15 && jamSapaan < 18) sapaanWaktu = "Selamat sore";
    else sapaanWaktu = "Selamat malam";
    const welcomeContainer = document.getElementById("welcome-alert");
    if (welcomeContainer) {
        welcomeContainer.innerHTML = `
          <div class="welcome-box shadow-sm mb-4">
            <div class="icon-shape"><i class="fas fa-user"></i></div>
            <div>
              <span class="fw-bold d-block" style="font-size: 12.5px;">${sapaanWaktu}, <span class="text-primary">${namaUser}</span>!</span>
              <span class="fw-normal text-muted d-block small" style="font-size: 11px; letter-spacing: 0.5px;">Semoga aktivitas parkir hari ini lancar 🚗</span>
            </div>
          </div>
        `;
    }
});
</script>

<aside class="sidebar">
      <div class="brand">
          <span class="brand-text"><span class="brand-line1">SMARTPARK</span><span class="brand-line2">SISTEM PARKIR DIGITAL</span></span>
      </div>

      <div class="py-3 flex-grow-1">
          <ul class="nav flex-column">
              <!-- Dashboard -->
              <li class="nav-item">
                  <a class="nav-link" href="<?= $base ?>dashboard.php">
                      <i class="fas fa-gauge"></i>
                      <span>Dashboard</span>
                  </a>
              </li>

              <!-- Daftar Parkir -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                      <i class="fas fa-clipboard-list"></i>
                      <span>Daftar Parkir</span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="<?= $base ?>parkir_masuk.php"><i class="fas fa-sign-in-alt me-2"></i>Masuk</a></li>
                      <li><a class="dropdown-item" href="<?= $base ?>parkir_keluar.php"><i class="fas fa-sign-out-alt me-2"></i>Keluar</a></li>
                  </ul>
              </li>

              <!-- Transaksi -->
              <li class="nav-item">
                  <a class="nav-link" href="<?= $base ?>pembayaran.php">
                      <i class="fas fa-cash-register"></i>
                      <span>Transaksi</span>
                  </a>
              </li>

              <!-- Banyak Kendaraan -->
              <li class="nav-item">
                  <a class="nav-link" href="<?= $base ?>data_kendaraan.php">
                      <i class="fas fa-car"></i>
                      <span>Banyak Kendaraan</span>
                  </a>
              </li>

              <!-- Data Parkir -->
              <li class="nav-item">
                  <a class="nav-link" href="<?= $base ?>parkir_ringkasan.php">
                      <i class="fas fa-database"></i>
                      <span>Data Parkir</span>
                  </a>
              </li>

              <!-- Laporan -->
              <li class="nav-item">
                  <a class="nav-link" href="<?= $base ?>laporan.php">
                      <i class="fas fa-file-invoice-dollar"></i>
                      <span>Laporan</span>
                  </a>
              </li>
              <!-- Anggota (dropdown, daftar nama diambil dari database) -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle <?= ($menu_aktif ?? '') === 'anggota' ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">
                      <i class="fas fa-users"></i>
                      <span>Anggota</span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item <?= ($menu_aktif ?? '') === 'anggota' && empty($id_anggota) ? 'active' : '' ?>" href="<?= $base ?>Anggota.php"><i class="fas fa-users me-2"></i>Semua Anggota</a></li>
                      <?php foreach ($daftar_menu_anggota as $m): ?>
                      <li><a class="dropdown-item <?= (isset($id_anggota) && (int)$id_anggota === (int)$m['id']) ? 'active' : '' ?>" href="<?= $base . htmlspecialchars($m['halaman']) ?>"><i class="fas fa-user me-2"></i><?= htmlspecialchars($m['panggilan']) ?></a></li>
                      <?php endforeach; ?>
                  </ul>
              </li>


              <!-- Tambah Operator -->
              <li class="nav-item">
                  <a class="nav-link" href="<?= $base ?>tambah_operator.php">
                      <i class="fas fa-user-plus"></i>
                      <span>Tambah Operator</span>
                  </a>
              </li>

              <!-- Pengaturan -->
              <li class="nav-item">
                  <a class="nav-link" href="<?= $base ?>pengaturan.php">
                      <i class="fas fa-cogs"></i>
                      <span>Pengaturan</span>
                  </a>
              </li>

              <!-- Logout -->
              <li class="nav-item mt-auto" style="list-style:none;"><div id="welcome-alert"></div></li>
              <li class="nav-item">
                  <a class="nav-link text-danger" href="<?= $base ?>index.php" onclick="return confirm('Yakin ingin keluar?')">
                      <i class="fas fa-sign-out-alt"></i>
                      <span>Logout</span>
                  </a>
              </li>
          </ul>
      </div>
    </aside>
