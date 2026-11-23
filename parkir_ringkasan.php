<?php $judul = 'Data Parkir - Ringkasan'; include 'header.php'; ?>
  <style>
    .welcome-box {
  background: linear-gradient(135deg, #e0e7ff, #f0fdf4);
  border-left: 5px solid var(--gradient-primary-start);
  border-radius: 12px;
  padding: 16px 20px;
  font-weight: 600;
  color: var(--bg-sidebar);
  display: flex;
  align-items: center;
  gap: 12px;
}
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
      border-radius: 0;
    }

    .sidebar .nav-link:hover {
      color: #fff;
      background-color: var(--bg-sidebar-hover);
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
      border-radius: 0;
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

    /* Modern UI Components */
    .surface-card {
      background: #ffffff;
      border-radius: 16px;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      padding: 24px;
    }

    .form-control-modern {
      border-radius: 10px;
      padding: 10px 14px;
      border: 1px solid #e2e8f0;
      max-width: 300px;
    }
    .form-control-modern:focus {
      border-color: var(--gradient-primary-start);
      box-shadow: 0 0 0 3px rgba(59, 91, 252, 0.1);
    }

    .vehicle-photo {
      width: 70px;
      height: 44px;
      object-fit: cover;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .pill-badge {
      padding: 6px 12px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 500;
    }

    .vehicle-inline-item {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-weight: 500;
    }

    /* Custom Modern Table */
    .table-modern {
      vertical-align: middle;
    }
    
    .table-modern thead th {
      background-color: #f8fafc;
      color: #64748b;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 11px;
      letter-spacing: 0.5px;
      padding: 14px 16px;
      border-bottom: 2px solid #e2e8f0;
    }

    .table-modern tbody td {
      padding: 14px 16px;
      border-bottom: 1px solid #f1f5f9;
      color: #334155;
    }

    .table-modern tbody tr:hover {
      background-color: #f8fafc;
    }

    /* Tab Navigasi Modern */
    .ringkasan-tabs {
      display: flex;
      gap: 8px;
      background: #ffffff;
      border-radius: 14px;
      padding: 8px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      margin-bottom: 24px;
      flex-wrap: wrap;
    }

    .ringkasan-tabs .tab-btn {
      border: none;
      background: transparent;
      color: #64748b;
      font-weight: 600;
      font-size: 14px;
      padding: 10px 20px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: all 0.2s ease;
      cursor: pointer;
    }

    .ringkasan-tabs .tab-btn:hover {
      background: #f1f5f9;
      color: var(--text-dark);
    }

    .ringkasan-tabs .tab-btn.active {
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      color: #fff;
      box-shadow: 0 4px 12px rgba(59, 91, 252, 0.25);
    }

    .tab-pane-custom {
      display: none;
    }

    .tab-pane-custom.active {
      display: block;
      animation: fadeIn 0.25s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(6px); }
      to { opacity: 1; transform: translateY(0); }
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
  
    /* === FIX Revisi: kotak sapaan dipindah ke bawah sidebar (di atas Logout) === */
    .sidebar #welcome-alert { padding: 0 16px; }
    .sidebar .welcome-box {
      background: rgba(255,255,255,0.06) !important;
      border-left: 3px solid var(--gradient-primary-start) !important;
      border-radius: 10px;
      padding: 10px 12px !important;
      margin: 0 0 14px 0 !important;
      font-size: 12.5px;
      color: #c3cbe6;
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

    /* === FIX Revisi: brand header dibuat 2 baris & lebih ringkas === */
    .sidebar .brand {
      padding: 16px 20px !important;
      font-size: 15px !important;
      line-height: 1.35;
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    .sidebar .brand .brand-line1 { display:block; font-size:17px; font-weight:700; letter-spacing:0.5px; }
    .sidebar .brand .brand-line2 { display:block; font-size:10.5px; font-weight:500; letter-spacing:1px; opacity:.65; margin-top:2px; }

    /* === FIX Revisi: agar tampilan pas satu halaman (fit to page) === */
    html, body { height: 100%; }
    .sidebar { position: sticky; top: 0; align-self: flex-start; height: 100vh; overflow-y: auto; }
    .main-content { padding: 20px 26px !important; }
  
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
        <div class="mb-4">
          <h3 class="mb-1 font-weight-bold">Ringkasan Data Parkir</h3>
          <p class="text-muted small mb-0">Satu tampilan terpadu untuk memantau data parkir berdasarkan Per Hari, Per Minggu, dan Per Bulan</p>
        </div>

        <!-- Tab Navigasi -->
        <div class="ringkasan-tabs">
          <button class="tab-btn active" data-tab="tab-harian">
            <i class="fas fa-calendar-day"></i> Per Hari
          </button>
          <button class="tab-btn" data-tab="tab-mingguan">
            <i class="fas fa-calendar-week"></i> Per Minggu
          </button>
          <button class="tab-btn" data-tab="tab-bulanan">
            <i class="fas fa-calendar-alt"></i> Per Bulan
          </button>
        </div>

        <!-- ===================== TAB PER HARI ===================== -->
        <div class="tab-pane-custom active" id="tab-harian">

          <!-- Filter Card Modern -->
          <div class="surface-card mb-4">
            <div class="row align-items-center">
              <div class="col-auto">
                <label for="tanggal" class="form-label fw-medium text-secondary small mb-1 mb-md-0 d-block">Pilih Tanggal Audit:</label>
              </div>
              <div class="col-md-4">
                <input type="date" class="form-control form-control-modern" id="tanggal" onchange="filterData()">
              </div>
            </div>
          </div>

          <!-- Tabel Card Modern -->
          <div class="surface-card p-0 overflow-hidden">
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0">
                <thead>
                  <tr>
                    <th style="width:60px;">No</th>
                    <th style="width:110px;">Foto</th>
                    <th>Nama Pengendara</th>
                    <th>Plat Nomor</th>
                    <th>Jenis Kendaraan</th>
                    <th>Waktu Masuk</th>
                    <th>Waktu Keluar</th>
                  </tr>
                </thead>
                <tbody id="tabelParkir">
                  <tr>
                    <td colspan="7" class="text-center py-4 text-muted small">
                      <i class="fas fa-calendar-day me-2 fs-5 d-block mb-2 text-secondary opacity-50"></i>
                      Silakan pilih tanggal di atas untuk memuat log harian parkir.
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- ===================== TAB PER MINGGU ===================== -->
        <div class="tab-pane-custom" id="tab-mingguan">

          <div class="surface-card p-0 overflow-hidden">
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0">
                <thead>
                  <tr>
                    <th style="width: 100px;">Minggu Ke-</th>
                    <th>Rentang Tanggal</th>
                    <th>Total Motor</th>
                    <th>Total Mobil</th>
                    <th>Total Truk</th>
                    <th>Total Pick Up</th>
                    <th>Akumulasi Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-secondary fw-medium">1</td>
                    <td class="fw-semibold text-dark">1 - 7 Juli 2025</td>
                    <td>
                      <div class="vehicle-inline-item text-warning">
                        <i class="fas fa-motorcycle fs-5"></i><span>45 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-primary">
                        <i class="fas fa-car-side fs-5"></i><span>30 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-danger">
                        <i class="fas fa-truck-moving fs-5"></i><span>8 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-info">
                        <i class="fas fa-truck-pickup fs-5"></i><span>5 Unit</span>
                      </div>
                    </td>
                    <td><span class="badge bg-dark-subtle text-dark fw-bold pill-badge">88 Unit</span></td>
                  </tr>
                  <tr>
                    <td class="text-secondary fw-medium">2</td>
                    <td class="fw-semibold text-dark">8 - 14 Juli 2025</td>
                    <td>
                      <div class="vehicle-inline-item text-warning">
                        <i class="fas fa-motorcycle fs-5"></i><span>50 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-primary">
                        <i class="fas fa-car-side fs-5"></i><span>32 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-danger">
                        <i class="fas fa-truck-moving fs-5"></i><span>9 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-info">
                        <i class="fas fa-truck-pickup fs-5"></i><span>6 Unit</span>
                      </div>
                    </td>
                    <td><span class="badge bg-dark-subtle text-dark fw-bold pill-badge">97 Unit</span></td>
                  </tr>
                  <tr>
                    <td class="text-secondary fw-medium">3</td>
                    <td class="fw-semibold text-dark">15 - 21 Juli 2025</td>
                    <td>
                      <div class="vehicle-inline-item text-warning">
                        <i class="fas fa-motorcycle fs-5"></i><span>42 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-primary">
                        <i class="fas fa-car-side fs-5"></i><span>28 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-danger">
                        <i class="fas fa-truck-moving fs-5"></i><span>6 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-info">
                        <i class="fas fa-truck-pickup fs-5"></i><span>4 Unit</span>
                      </div>
                    </td>
                    <td><span class="badge bg-dark-subtle text-dark fw-bold pill-badge">80 Unit</span></td>
                  </tr>
                  <tr>
                    <td class="text-secondary fw-medium">4</td>
                    <td class="fw-semibold text-dark">22 - 28 Juli 2025</td>
                    <td>
                      <div class="vehicle-inline-item text-warning">
                        <i class="fas fa-motorcycle fs-5"></i><span>47 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-primary">
                        <i class="fas fa-car-side fs-5"></i><span>35 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-danger">
                        <i class="fas fa-truck-moving fs-5"></i><span>10 Unit</span>
                      </div>
                    </td>
                    <td>
                      <div class="vehicle-inline-item text-info">
                        <i class="fas fa-truck-pickup fs-5"></i><span>7 Unit</span>
                      </div>
                    </td>
                    <td><span class="badge bg-primary-subtle text-primary fw-bold pill-badge">99 Unit</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- ===================== TAB PER BULAN ===================== -->
        <div class="tab-pane-custom" id="tab-bulanan">

          <!-- Chart Card Modern -->
          <div class="surface-card mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-dark mb-0">Grafik Distribusi Bulanan</h5>
              <span class="badge bg-primary-subtle text-primary pill-badge">Tahun Berjalan</span>
            </div>
            <div style="position: relative; height:280px; width:100%;">
              <canvas id="bulanChart"></canvas>
            </div>
          </div>

          <!-- Tabel Card Modern -->
          <div class="surface-card p-0 overflow-hidden">
            <div class="px-4 pt-4 pb-2">
              <h5 class="fw-bold mb-0 text-dark">Rincian Total Kendaraan</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0">
                <thead>
                  <tr>
                    <th>Bulan</th>
                    <th>Jumlah Kendaraan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr><td class="fw-semibold text-dark">Januari</td><td><span class="badge bg-secondary-subtle text-dark pill-badge">120 Unit</span></td></tr>
                  <tr><td class="fw-semibold text-dark">Februari</td><td><span class="badge bg-secondary-subtle text-dark pill-badge">98 Unit</span></td></tr>
                  <tr><td class="fw-semibold text-dark">Maret</td><td><span class="badge bg-secondary-subtle text-dark pill-badge">135 Unit</span></td></tr>
                  <tr><td class="fw-semibold text-dark">April</td><td><span class="badge bg-secondary-subtle text-dark pill-badge">150 Unit</span></td></tr>
                  <tr><td class="fw-semibold text-dark">Mei</td><td><span class="badge bg-secondary-subtle text-dark pill-badge">160 Unit</span></td></tr>
                  <tr><td class="fw-semibold text-dark">Juni</td><td><span class="badge bg-secondary-subtle text-dark pill-badge">142 Unit</span></td></tr>
                  <tr><td class="fw-semibold text-dark">Juli</td><td><span class="badge bg-primary-subtle text-primary pill-badge fw-bold">170 Unit</span></td></tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>
    </main>
  </div>

  <!-- Bootstrap Lokal JS & Chart.js -->
  <?php include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    /* ============ Logika Tab Kustom ============ */
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane-custom');
    let bulanChartInstance = null;

    tabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        tabButtons.forEach(b => b.classList.remove('active'));
        tabPanes.forEach(p => p.classList.remove('active'));

        btn.classList.add('active');
        const target = document.getElementById(btn.dataset.tab);
        target.classList.add('active');

        // Render chart hanya saat tab "Per Bulan" pertama kali dibuka
        if (btn.dataset.tab === 'tab-bulanan' && !bulanChartInstance) {
          renderBulanChart();
        }
      });
    });

    /* ============ Logika Filter Per Hari ============ */
    // FIX Revisi: data dibuat kronologis (urut waktu) dan jenis kendaraan
    // dibuat berselang-seling (Mobil, Motor, Truk, Pick Up, ...) sesuai
    // urutan waktu keluar, supaya mencerminkan kondisi lapangan yang riil.
    const dataParkir = [
      { nama: 'Andi Pratama',     plat: 'PB 1234 XY', jenis: 'Mobil',   masuk: '2025-07-15T06:15', keluar: '2025-07-15T08:20', foto: 'asset/mobil.webp' },
      { nama: 'Rina Putri',       plat: 'PB 9876 ZZ', jenis: 'Motor',   masuk: '2025-07-15T07:00', keluar: '2025-07-15T09:10', foto: 'asset/motor.webp' },
      { nama: 'Budi Santoso',     plat: 'PB 5678 TR', jenis: 'Truk',    masuk: '2025-07-15T07:30', keluar: '2025-07-15T10:45', foto: 'asset/truck.webp' },
      { nama: 'Joko Supriyanto',  plat: 'PB 8899 GH', jenis: 'Pick Up', masuk: '2025-07-15T08:00', keluar: '2025-07-15T11:30', foto: 'asset/pickup.webp' },
      { nama: 'Siti Nurhaliza',   plat: 'PB 3210 AB', jenis: 'Mobil',   masuk: '2025-07-15T09:15', keluar: '2025-07-15T12:40', foto: 'asset/mobil.webp' },
      { nama: 'Dedi Kurniawan',   plat: 'PB 2233 CD', jenis: 'Motor',   masuk: '2025-07-15T10:00', keluar: '2025-07-15T13:25', foto: 'asset/motor.webp' },
      { nama: 'Lina Marlina',     plat: 'PB 4455 EF', jenis: 'Truk',    masuk: '2025-07-15T10:30', keluar: '2025-07-15T14:50', foto: 'asset/truck.webp' },
      { nama: 'Farhan Maulana',   plat: 'PB 7788 UV', jenis: 'Pick Up', masuk: '2025-07-15T11:20', keluar: '2025-07-15T15:35', foto: 'asset/pickup.webp' },
      { nama: 'Putri Ayu',        plat: 'PB 6612 MN', jenis: 'Mobil',   masuk: '2025-07-15T12:45', keluar: '2025-07-15T16:15', foto: 'asset/mobil.webp' },
      { nama: 'Rizky Ramadhan',   plat: 'PB 3345 OP', jenis: 'Motor',   masuk: '2025-07-15T13:30', keluar: '2025-07-15T17:05', foto: 'asset/motor.webp' },
      { nama: 'Kania Salsabila',  plat: 'PB 9921 QR', jenis: 'Truk',    masuk: '2025-07-15T14:10', keluar: '2025-07-15T18:20', foto: 'asset/truck.webp' },
      { nama: 'Fiolita Wijaya',   plat: 'PB 5567 ST', jenis: 'Pick Up', masuk: '2025-07-15T15:00', keluar: '2025-07-15T19:10', foto: 'asset/pickup.webp' }
    ];

    function filterData() {
      const tanggalInput = document.getElementById('tanggal').value;
      const tbody = document.getElementById('tabelParkir');
      tbody.innerHTML = '';

      if (!tanggalInput) {
        tbody.innerHTML = '<tr><td colspan="7" class="text-center py-4 text-muted small">Silakan pilih tanggal di atas untuk memuat log harian parkir.</td></tr>';
        return;
      }

      // FIX Revisi: tampilkan berdasarkan tanggal keluar & urutkan kronologis
      // (dari waktu keluar paling awal ke paling akhir), bukan urutan input.
      const dataFiltered = dataParkir
        .filter(item => item.keluar.slice(0, 10) === tanggalInput)
        .sort((a, b) => new Date(a.keluar) - new Date(b.keluar));

      if (dataFiltered.length === 0) {
        tbody.innerHTML = '<tr><td colspan="7" class="text-center py-4 text-danger small fw-medium"><i class="fas fa-exclamation-circle me-1"></i> Tidak ada data transaksi kendaraan ditemukan untuk tanggal ini.</td></tr>';
        return;
      }


      dataFiltered.forEach((item, index) => {
        const badgeClass = item.jenis === "Truk" ? "bg-danger-subtle text-danger" :
                           item.jenis === "Motor" ? "bg-warning-subtle text-warning" :
                           item.jenis === "Pick Up" ? "bg-info-subtle text-info" : "bg-primary-subtle text-primary";

        const row = `<tr>
          <td class="text-secondary fw-medium">${index + 1}</td>
          <td><img src="${item.foto}" class="vehicle-photo" alt="foto" onerror="this.src='https://via.placeholder.com/70x44?text=${item.jenis}'"></td>
          <td class="fw-semibold text-dark">${item.nama}</td>
          <td class="fw-bold text-dark">${item.plat}</td>
          <td><span class="badge ${badgeClass} pill-badge">${item.jenis}</span></td>
          <td class="text-secondary small"><i class="far fa-clock me-1 opacity-50"></i>${new Date(item.masuk).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })} WIB</td>
          <td class="text-secondary small"><i class="far fa-clock me-1 opacity-50"></i>${new Date(item.keluar).toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })} WIB</td>
        </tr>`;
        tbody.innerHTML += row;
      });
    }

    /* ============ Logika Chart Per Bulan ============ */
    function renderBulanChart() {
      const ctx = document.getElementById('bulanChart').getContext('2d');

      const primaryGradient = ctx.createLinearGradient(0, 0, 0, 250);
      primaryGradient.addColorStop(0, '#3B5BFC');
      primaryGradient.addColorStop(1, '#6C3CE9');

      bulanChartInstance = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
          datasets: [{
            label: 'Jumlah Kendaraan',
            data: [120, 98, 135, 150, 160, 142, 170],
            backgroundColor: primaryGradient,
            borderRadius: 6,
            borderSkipped: false,
            barThickness: 28
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: '#0B1437',
              titleFont: { family: 'Inter', size: 13 },
              bodyFont: { family: 'Inter', size: 13 },
              padding: 12,
              cornerRadius: 8,
              displayColors: false
            }
          },
          scales: {
            x: {
              grid: { display: false },
              ticks: { font: { family: 'Inter', size: 12 }, color: '#64748b' }
            },
            y: {
              beginAtZero: true,
              grid: { color: '#f1f5f9' },
              ticks: { font: { family: 'Inter', size: 12 }, color: '#64748b' }
            }
          }
        }
      });
    }
  </script>
</body>
</html>
