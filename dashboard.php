<?php $judul = 'Dashboard - Sistem Parkir Modern'; $namaDefault = 'Pengguna'; include 'header.php'; ?>
  <style>
    :root {
      --bg-sidebar: #0B1437;
      --bg-sidebar-hover: #1B2559;
      --gradient-primary-start: #3B5BFC;
      --gradient-primary-end: #6C3CE9;
      --accent-orange: #FF7A30;
      --bg-content: #F6F8FD;
      --text-dark: #1A1D29;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-content);
      color: var(--text-dark);
      overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6, .brand-text {
      font-family: 'Poppins', sans-serif;
    }

    /* Layout App Shell */
    .app-container {
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar Styles */
    .sidebar {
      width: 260px;
      background: var(--bg-sidebar);
      color: #fff;
      transition: all 0.3s ease;
      z-index: 1030;
      display: flex;
      flex-direction: column;
    }

    .sidebar .brand {
      padding: 24px;
      font-size: 20px;
      font-weight: 700;
      letter-spacing: 1px;
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }

    .sidebar .nav-link {
      color: #a3b1cc;
      padding: 12px 24px;
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 500;
      transition: all 0.2s;
    }

    
    .sidebar .nav-link.active {
      color: #fff;
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      box-shadow: 0 4px 12px rgba(59, 91, 252, 0.3);
    }

    .sidebar .dropdown-menu {
      background: #111c44;
      border: none;
      padding: 0;
      margin: 0;
    }

    .sidebar .dropdown-item {
      color: #a3b1cc;
      padding: 10px 24px 10px 48px;
      font-size: 14px;
    }

    .sidebar .dropdown-item:hover, .sidebar .dropdown-item.active {
      background: var(--bg-sidebar-hover);
      color: #fff;
    }

    /* Main Content Area */
    .main-content {
      flex: 1;
      padding: 30px;
      transition: all 0.3s ease;
    }

    /* Modern Card Component */
    .surface-card {
      background: #ffffff;
      border-radius: 16px;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      padding: 24px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .surface-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
    }

    /* Stat Box Icons Custom Colors */
    .icon-shape {
      width: 54px;
      height: 54px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
    }

    .icon-in { background: rgba(59, 91, 252, 0.1); color: var(--gradient-primary-start); }
    .icon-out { background: rgba(16, 185, 129, 0.1); color: #10B981; }
    .icon-type { background: rgba(255, 122, 48, 0.1); color: var(--accent-orange); }

    .vehicle-pill {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 12px;
      padding: 10px 14px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 10px;
      height: 100%;
      min-height: 52px;
    }

    /* FIX: Ratakan tinggi & posisi setiap kartu indikator jenis kendaraan
       supaya sejajar rapi walau lebar kontennya berbeda-beda */
    .vehicle-pill span.small {
      display: flex;
      align-items: center;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .vehicle-pill .badge {
      flex-shrink: 0;
    }

    /* ========================= */
/* Sidebar Menu Rapi */
/* ========================= */

.sidebar .nav-link{
    display:flex;
    align-items:center;
    gap:14px;
    padding:12px 20px;
    font-size:16px;
    font-weight:500;
}

.sidebar .nav-link i{
    width:24px;
    min-width:24px;
    text-align:center;
    font-size:18px;
}

.sidebar .nav-link span{
    flex:1;
}

.sidebar .dropdown-toggle::after{
    margin-left:auto;
}

.sidebar .dropdown-menu{
    /* FIX: dropdown submenu ditampilkan statis mengikuti alur sidebar,
       bukan mengambang (absolute) di luar kolomnya, supaya saat menu
       diklik kontennya presisi muncul tepat di bawah menu terkait */
    position: static !important;
    inset: auto !important;
    transform: none !important;
    float: none;
    width: 100%;
    margin-left: 0;
    padding-left: 35px;
    box-shadow: none;
    border-radius: 0;
}

/* === FIX Revisi: header dibuat 2 baris & lebih ringkas === */
.sidebar .brand {
  padding: 16px 20px !important;
  font-size: 15px !important;
  line-height: 1.35;
}
.sidebar .brand .brand-line1 { display:block; font-size:17px; font-weight:700; letter-spacing:0.5px; }
.sidebar .brand .brand-line2 { display:block; font-size:10.5px; font-weight:500; letter-spacing:1px; opacity:.65; margin-top:2px; }

/* === FIX Revisi: kotak sapaan disamakan persis dengan Anggota.php === */
.sidebar #welcome-alert { padding: 0 16px; }
.sidebar .welcome-box {
  background: rgba(255,255,255,0.06) !important;
  border-left: 3px solid var(--gradient-primary-start) !important;
  border-radius: 10px;
  padding: 10px 12px !important;
  margin: 0 0 14px 0 !important;
  font-size: 12.5px;
  color: #c3cbe6;
  display: flex;
  align-items: center;
  gap: 8px !important;
}
.sidebar .welcome-box i { color: #8fa5ff !important; font-size: 15px !important; }
.sidebar .welcome-box .icon-shape {
  width: 34px; height: 34px; border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  background: rgba(255,255,255,0.12) !important; flex-shrink: 0;
}
.sidebar .welcome-box .icon-shape i { color: #9db4ff !important; font-size: 14px !important; }
.sidebar .welcome-box .text-muted { color: #7d8bb0 !important; }
.sidebar .welcome-box .text-primary { color: #9db4ff !important; }

/* === FIX Revisi: tampilan pas satu halaman (fit to page), kurangi scroll berlebih === */
html, body { height: 100%; }
.sidebar { position: sticky; top: 0; align-self: flex-start; height: 100vh; overflow-y: auto; }
.main-content { padding: 18px 26px !important; }
.surface-card { padding: 18px !important; }
  
    /* === FIX Revisi 2: Logout & kotak sapaan didorong mentok ke bawah sidebar === */
    .sidebar .py-3.flex-grow-1 { display: flex; flex-direction: column; }
    .sidebar .py-3.flex-grow-1 > ul.nav { flex: 1 1 auto; }
  </style>
</head>
<body>
  <div class="app-container">
    <?php include 'menu.php'; ?>

    <!-- Konten Utama -->
    <main class="main-content">
      <div class="container-fluid p-0">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h3 class="mb-1 font-weight-bold">Dashboard Ringkasan</h3>
            <p class="text-muted small mb-0">Status real-time pergerakan kendaraan dan kapasitas area parkir</p>
          </div>
          <div>
            <span class="badge bg-white text-dark shadow-sm p-2 rounded-3"><i class="fa-solid fa-circle text-success me-1 animate-pulse"></i> Sistem Aktif</span>
          </div>
        </div>

        <!-- FIX: Kartu Total Pendapatan Hari Ini -->
        <!-- Sebelumnya angka pendapatan yang ditampilkan di halaman Laporan
             membingungkan karena merupakan akumulasi beberapa periode
             sekaligus (mis. Rp14 juta ternyata jumlah 2 bulan). Di halaman
             utama ini HANYA ditampilkan pendapatan HARI INI saja, dengan
             label & tanggal yang jelas supaya tidak ambigu. Untuk melihat
             akumulasi per minggu/bulan, buka menu Laporan. -->
        <div class="surface-card mb-3" style="background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end)); color: #fff;">
          <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
              <p class="small mb-1 fw-medium" style="opacity:0.85;">Total Pendapatan Hari Ini</p>
              <h2 class="mb-1 fw-bold" id="pendapatanHariIni">Rp 0</h2>
              <p class="small mb-0" style="opacity:0.75;" id="tanggalHariIni">-</p>
            </div>
            <div class="icon-shape" style="width:64px;height:64px;font-size:26px;background:rgba(255,255,255,0.15);color:#fff;">
              <i class="fas fa-wallet"></i>
            </div>
          </div>
        </div>

        <!-- 3 Utama Stat Cards -->
        <div class="row g-3 mb-3">
          <div class="col-12 col-md-4">
            <div class="surface-card d-flex align-items-center justify-content-between">
              <div>
                <p class="text-muted small mb-1 fw-medium">Kendaraan Masuk</p>
                <h2 class="mb-0 fw-bold text-dark">42 <span class="fs-6 text-muted fw-normal">Unit</span></h2>
              </div>
              <div class="icon-shape icon-in">
                <i class="fas fa-sign-in-alt"></i>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-md-4">
            <div class="surface-card d-flex align-items-center justify-content-between">
              <div>
                <p class="text-muted small mb-1 fw-medium">Kendaraan Keluar</p>
                <h2 class="mb-0 fw-bold text-dark">38 <span class="fs-6 text-muted fw-normal">Unit</span></h2>
              </div>
              <div class="icon-shape icon-out">
                <i class="fas fa-sign-out-alt"></i>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="surface-card d-flex align-items-center justify-content-between">
              <div>
                <p class="text-muted small mb-1 fw-medium">Kendaraan Terparkir</p>
                <h2 class="mb-0 fw-bold" style="color: var(--accent-orange);">4 <span class="fs-6 text-muted fw-normal">Sisa</span></h2>
              </div>
              <div class="icon-shape icon-type">
                <i class="fas fa-square-parking"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Section Detail Jenis Kendaraan Aktif (Gak Polos) -->
        <div class="surface-card mb-3">
          <div class="mb-3">
            <h5 class="fw-bold mb-1">Kategori Kendaraan Saat Ini</h5>
            <p class="text-muted small mb-0">Rincian pembagian tipe unit yang mengisi slot parkir malam ini</p>
          </div>

          <div class="row g-3 align-items-stretch">
            <div class="col-6 col-md-3 d-flex">
              <div class="vehicle-pill w-100">
                <span class="small fw-medium"><i class="fas fa-motorcycle text-primary me-2"></i>Motor</span>
                <span class="badge bg-primary rounded-pill">2 Unit</span>
              </div>
            </div>
            <div class="col-6 col-md-3 d-flex">
              <div class="vehicle-pill w-100">
                <span class="small fw-medium"><i class="fas fa-car-side text-success me-2"></i>Mobil</span>
                <span class="badge bg-success rounded-pill">1 Unit</span>
              </div>
            </div>
            <div class="col-6 col-md-3 d-flex">
              <div class="vehicle-pill w-100">
                <span class="small fw-medium"><i class="fas fa-truck-moving text-warning me-2"></i>Truk</span>
                <span class="badge bg-warning text-dark rounded-pill">1 Unit</span>
              </div>
            </div>
            <div class="col-6 col-md-3 d-flex">
              <div class="vehicle-pill w-100">
                <span class="small fw-medium"><i class="fas fa-truck-pickup text-danger me-2"></i>Pick Up</span>
                <span class="badge bg-danger rounded-pill">0 Unit</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

  <!-- Bootstrap JS Lokal -->
  <?php include 'footer.php'; ?>

  <script>
    // FIX: Tanggal & nilai "Pendapatan Hari Ini" ditampilkan secara eksplisit
    // (bukan angka akumulasi banyak periode) supaya operator/admin langsung
    // paham angka ini adalah pemasukan HARI INI saja.
    (function () {
      const today = new Date();
      const opsi = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
      document.getElementById('tanggalHariIni').innerText = today.toLocaleDateString('id-ID', opsi);

      // Contoh data pendapatan hari ini (sumber: transaksi yang sudah lunas hari ini).
      // Di aplikasi nyata angka ini diambil dari database transaksi, bukan
      // dijumlah dari beberapa bulan sekaligus.
      const pendapatanHariIniContoh = 725000;
      document.getElementById('pendapatanHariIni').innerText =
        'Rp ' + pendapatanHariIniContoh.toLocaleString('id-ID');
    })();
  </script>

</body>
</html>