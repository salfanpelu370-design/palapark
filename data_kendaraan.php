<?php $judul = 'Data Kendaraan - Parkir'; include 'header.php'; ?>
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

    /* Foto & Badge Custom */
    .vehicle-img {
      width: 80px;
      height: 48px;
      object-fit: cover;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .vehicle-img-container {
      width: 70px;
      height: 44px;
      overflow: hidden;
      border-radius: 8px;
      border: 1px solid #e2e8f0;
      background: #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .pill-badge, .badge-status-parkir {
      padding: 6px 12px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 500;
    }

    .badge-status-parkir {
      background-color: #ecfdf5;
      color: #059669;
      font-weight: 600;
      font-size: 12px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
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
      padding: 16px;
      border-bottom: 2px solid #e2e8f0;
    }

    .table-modern tbody td {
      padding: 16px;
      border-bottom: 1px solid #f1f5f9;
      color: #334155;
    }

    .table-modern tbody tr:hover {
      background-color: #f8fafc;
    }

    .search-control {
      border-radius: 10px;
      padding-left: 40px;
      border: 1px solid #e2e8f0;
    }

    .search-container {
      position: relative;
    }

    .search-container i {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #94a3b8;
    }

    /* Grid Ikon Navigasi Kendaraan (sekarang berfungsi sebagai TAB) */
    .vehicle-nav-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
      margin-bottom: 24px;
    }

    @media (max-width: 1200px) {
      .vehicle-nav-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 768px) {
      .vehicle-nav-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 480px) {
      .vehicle-nav-grid { grid-template-columns: 1fr; }
    }

    .vehicle-nav-card {
      display: flex;
      align-items: center;
      gap: 14px;
      text-decoration: none;
      background: #ffffff;
      border-radius: 16px;
      padding: 18px 20px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      border: 1px solid #eef1f8;
      transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
      position: relative;
      overflow: hidden;
      cursor: pointer;
      width: 100%;
      text-align: left;
    }

    .vehicle-nav-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      opacity: 0;
      transition: opacity 0.2s ease;
      z-index: 0;
    }

    .vehicle-nav-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 24px rgba(59, 91, 252, 0.2);
      border-color: transparent;
    }

    .vehicle-nav-card:hover::before {
      opacity: 1;
    }

    .vehicle-nav-card.current {
      border-color: transparent;
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
    }

    .vehicle-nav-card .icon-circle {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      position: relative;
      z-index: 1;
      flex-shrink: 0;
      transition: background 0.2s ease, color 0.2s ease;
    }

    .vehicle-nav-card .vehicle-text {
      position: relative;
      z-index: 1;
    }

    .vehicle-nav-card .vehicle-label {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-size: 15px;
      color: var(--text-dark);
      transition: color 0.2s ease;
    }

    .vehicle-nav-card .vehicle-sub {
      font-size: 12px;
      color: #94a3b8;
      transition: color 0.2s ease;
    }

    .vehicle-nav-card:hover .vehicle-label,
    .vehicle-nav-card:hover .vehicle-sub,
    .vehicle-nav-card.current .vehicle-label,
    .vehicle-nav-card.current .vehicle-sub {
      color: #ffffff;
    }

    .vehicle-nav-card:hover .icon-circle,
    .vehicle-nav-card.current .icon-circle {
      background: rgba(255,255,255,0.2) !important;
      color: #ffffff !important;
    }

    .icon-motor     { background: rgba(59, 91, 252, 0.1); color: #3B5BFC; }
    .icon-mobil     { background: rgba(255, 122, 48, 0.1); color: #FF7A30; }
    .icon-truk      { background: rgba(16, 185, 129, 0.1); color: #10B981; }
    .icon-pickup    { background: rgba(108, 60, 233, 0.1); color: #6C3CE9; }
    .icon-statistik { background: rgba(236, 72, 153, 0.1); color: #EC4899; }

    /* Panel tab kendaraan */
    .vehicle-panel { display: none; }
    .vehicle-panel.show { display: block; }

    .chart-container {
      position: relative;
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
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
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
          <div>
            <h3 class="mb-1 font-weight-bold">Data Kendaraan Parkir</h3>
            <p class="text-muted small mb-0">Manajemen seluruh jenis kendaraan yang sedang aktif di area parkir</p>
          </div>
          <div class="search-container" id="searchContainer" style="width: 250px;">
            <i class="fas fa-search"></i>
            <input type="text" id="searchInput" class="form-control search-control" placeholder="Cari plat nomor...">
          </div>
        </div>

        <!-- Grid Ikon Tab Kendaraan -->
        <div class="vehicle-nav-grid" id="vehicleTabs">
          <button type="button" class="vehicle-nav-card current" data-tab="motor">
            <div class="icon-circle icon-motor"><i class="fas fa-motorcycle"></i></div>
            <div class="vehicle-text">
              <div class="vehicle-label">Motor</div>
              <div class="vehicle-sub">Kendaraan roda 2</div>
            </div>
          </button>
          <button type="button" class="vehicle-nav-card" data-tab="mobil">
            <div class="icon-circle icon-mobil"><i class="fas fa-car-side"></i></div>
            <div class="vehicle-text">
              <div class="vehicle-label">Mobil</div>
              <div class="vehicle-sub">Kendaraan roda 4</div>
            </div>
          </button>
          <button type="button" class="vehicle-nav-card" data-tab="truk">
            <div class="icon-circle icon-truk"><i class="fas fa-truck-moving"></i></div>
            <div class="vehicle-text">
              <div class="vehicle-label">Truk</div>
              <div class="vehicle-sub">Armada logistik</div>
            </div>
          </button>
          <button type="button" class="vehicle-nav-card" data-tab="pickup">
            <div class="icon-circle icon-pickup"><i class="fas fa-truck-pickup"></i></div>
            <div class="vehicle-text">
              <div class="vehicle-label">Pick Up</div>
              <div class="vehicle-sub">Kendaraan angkut</div>
            </div>
          </button>
          <button type="button" class="vehicle-nav-card" data-tab="statistik">
            <div class="icon-circle icon-statistik"><i class="fas fa-chart-bar"></i></div>
            <div class="vehicle-text">
              <div class="vehicle-label">Statistik</div>
              <div class="vehicle-sub">Komparasi volume</div>
            </div>
          </button>
        </div>

        <!-- Panel Motor -->
        <div class="vehicle-panel show" id="panel-motor">
          <div class="surface-card p-0 overflow-hidden">
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0">
                <thead>
                  <tr>
                    <th style="width: 80px;">No</th>
                    <th style="width: 150px;">Visual</th>
                    <th>Plat Nomor</th>
                    <th>Waktu Masuk</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody id="motorTableBody"></tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Panel Mobil -->
        <div class="vehicle-panel" id="panel-mobil">
          <div class="surface-card p-0 overflow-hidden">
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0">
                <thead>
                  <tr>
                    <th style="width: 80px;">No</th>
                    <th style="width: 150px;">Visual</th>
                    <th>Plat Nomor</th>
                    <th>Waktu Masuk</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody id="mobilTableBody"></tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Panel Truk -->
        <div class="vehicle-panel" id="panel-truk">
          <div class="surface-card p-0 overflow-hidden">
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0">
                <thead>
                  <tr>
                    <th style="width: 80px;">No</th>
                    <th style="width: 120px;">Visual</th>
                    <th>Plat Nomor</th>
                    <th>Waktu Masuk</th>
                    <th>Status Operasional</th>
                  </tr>
                </thead>
                <tbody id="trukTableBody"></tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Panel Pick Up -->
        <div class="vehicle-panel" id="panel-pickup">
          <div class="surface-card p-0 overflow-hidden">
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0">
                <thead>
                  <tr>
                    <th style="width: 80px;">No</th>
                    <th style="width: 120px;">Visual</th>
                    <th>Plat Nomor</th>
                    <th>Waktu Masuk</th>
                    <th>Status Operasional</th>
                  </tr>
                </thead>
                <tbody id="pickupTableBody"></tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Panel Statistik -->
        <div class="vehicle-panel" id="panel-statistik">
          <div class="surface-card">
            <div class="d-flex align-items-center gap-2 mb-4 pb-2 border-bottom">
              <i class="fas fa-chart-bar text-primary fs-5"></i>
              <h5 class="fw-bold mb-0">Komparasi Volume Kendaraan</h5>
            </div>

            <div class="chart-container">
              <canvas id="statistikChart"></canvas>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

  <!-- Bootstrap Lokal JS -->
  <?php include 'footer.php'; ?>
  <!-- Chart.js CDN (untuk panel Statistik) -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Data & Logika Interaktif Gabungan -->
  <script>
    // ================== DATA ==================
    const motorData = [
      { plat: "PA 1234 AB", waktu: "2025-07-17 08:15", status: "Parkir", foto: "asset/motor.webp" },
      { plat: "PA 5678 CD", waktu: "2025-07-17 09:30", status: "Parkir", foto: "asset/motor.webp" },
      { plat: "PB 9012 EF", waktu: "2025-07-17 10:10", status: "Parkir", foto: "asset/motor.webp" },
    ];

    const mobilData = [
      { plat: "PA 2345 ZX", waktu: "2025-07-17 07:50", status: "Parkir", foto: "asset/mobil.webp" },
      { plat: "PB 6789 YT", waktu: "2025-07-17 08:45", status: "Parkir", foto: "asset/mobil.webp" },
      { plat: "PB 1234 QW", waktu: "2025-07-17 10:00", status: "Parkir", foto: "asset/mobil.webp" }
    ];

    const trukData = [
      { plat: "PA 9999 TK", waktu: "2025-07-17 06:30", status: "Parkir", foto: "asset/truck.webp" },
      { plat: "PB 8888 LK", waktu: "2025-07-17 09:15", status: "Parkir", foto: "asset/truck.webp" },
      { plat: "PB 7777 TR", waktu: "2025-07-17 11:00", status: "Parkir", foto: "asset/truck.webp" }
    ];

    const pickupData = [
      { plat: "PA 1122 XY", waktu: "2026-04-17 07:45", status: "Parkir", foto: "asset/pickup.webp" },
      { plat: "PB 3344 ZW", waktu: "2026-04-17 09:10", status: "Parkir", foto: "asset/pickup.webp" },
      { plat: "PA 5566 AB", waktu: "2026-04-17 10:30", status: "Parkir", foto: "asset/pickup.webp" }
    ];

    // ================== RENDER FUNCTIONS ==================
    function renderMotor(data) {
      const body = document.getElementById("motorTableBody");
      body.innerHTML = "";
      if (data.length === 0) {
        body.innerHTML = `<tr><td colspan="5" class="text-center py-4 text-muted">Data motor tidak ditemukan</td></tr>`;
        return;
      }
      data.forEach((motor, index) => {
        body.innerHTML += `
          <tr>
            <td class="fw-medium text-secondary">${index + 1}</td>
            <td><img src="${motor.foto}" class="vehicle-img" alt="Foto Motor" onerror="this.src='https://via.placeholder.com/80x48?text=Motor'"></td>
            <td class="fw-semibold text-dark">${motor.plat}</td>
            <td class="text-secondary small">${motor.waktu}</td>
            <td><span class="badge bg-success-subtle text-success pill-badge"><i class="fas fa-circle-check me-1 small"></i>${motor.status}</span></td>
          </tr>`;
      });
    }

    function renderMobil(data) {
      const body = document.getElementById("mobilTableBody");
      body.innerHTML = "";
      if (data.length === 0) {
        body.innerHTML = `<tr><td colspan="5" class="text-center py-4 text-muted">Data mobil tidak ditemukan</td></tr>`;
        return;
      }
      data.forEach((mobil, index) => {
        body.innerHTML += `
          <tr>
            <td class="fw-medium text-secondary">${index + 1}</td>
            <td><img src="${mobil.foto}" class="vehicle-img" alt="Foto Mobil" onerror="this.src='https://via.placeholder.com/80x48?text=Mobil'"></td>
            <td class="fw-semibold text-dark">${mobil.plat}</td>
            <td class="text-secondary small">${mobil.waktu}</td>
            <td><span class="badge bg-success-subtle text-success pill-badge"><i class="fas fa-circle-check me-1 small"></i>${mobil.status}</span></td>
          </tr>`;
      });
    }

    function renderTruk(data) {
      const body = document.getElementById("trukTableBody");
      body.innerHTML = "";
      if (data.length === 0) {
        body.innerHTML = `<tr><td colspan="5" class="text-center py-4 text-muted">Data truk tidak ditemukan</td></tr>`;
        return;
      }
      data.forEach((truk, index) => {
        body.innerHTML += `
          <tr>
            <td class="text-secondary fw-medium">${index + 1}</td>
            <td>
              <div class="vehicle-img-container">
                <img src="${truk.foto}" class="vehicle-img" alt="Foto Truk" onerror="this.onerror=null; this.src='https://placehold.co/70x44/e2e8f0/64748b?text=Truk';">
              </div>
            </td>
            <td><span class="fw-bold text-dark text-uppercase font-monospace" style="letter-spacing: 0.5px;">${truk.plat}</span></td>
            <td><span class="badge bg-light text-dark border border-secondary-subtle px-2 py-1.5 font-monospace fw-normal">${truk.waktu}</span></td>
            <td>
              <span class="badge-status-parkir">
                <i class="fas fa-circle-check fs-6"></i>${truk.status}
              </span>
            </td>
          </tr>`;
      });
    }

    function renderPickup(data) {
      const body = document.getElementById("pickupTableBody");
      body.innerHTML = "";
      if (data.length === 0) {
        body.innerHTML = `<tr><td colspan="5" class="text-center py-4 text-muted">Data pick up tidak ditemukan</td></tr>`;
        return;
      }
      data.forEach((pickup, index) => {
        body.innerHTML += `
          <tr>
            <td class="text-secondary fw-medium">${index + 1}</td>
            <td>
              <div class="vehicle-img-container">
                <img src="${pickup.foto}" class="vehicle-img" alt="Foto Pick Up" onerror="this.onerror=null; this.src='https://placehold.co/70x44/e2e8f0/64748b?text=PickUp';">
              </div>
            </td>
            <td><span class="fw-bold text-dark text-uppercase font-monospace" style="letter-spacing: 0.5px;">${pickup.plat}</span></td>
            <td><span class="badge bg-light text-dark border border-secondary-subtle px-2 py-1.5 font-monospace fw-normal">${pickup.waktu}</span></td>
            <td>
              <span class="badge-status-parkir">
                <i class="fas fa-circle-check fs-6"></i>${pickup.status}
              </span>
            </td>
          </tr>`;
      });
    }

    // ================== TAB SWITCH ==================
    const tabButtons = document.querySelectorAll("#vehicleTabs .vehicle-nav-card");
    const panels = document.querySelectorAll(".vehicle-panel");
    const searchContainer = document.getElementById("searchContainer");
    const searchInput = document.getElementById("searchInput");

    function activateTab(tabName) {
      tabButtons.forEach(btn => btn.classList.toggle("current", btn.dataset.tab === tabName));
      panels.forEach(panel => panel.classList.toggle("show", panel.id === `panel-${tabName}`));

      // Sembunyikan pencarian di tab Statistik (tidak relevan untuk chart)
      searchContainer.style.display = (tabName === "statistik") ? "none" : "block";
      searchInput.value = "";

      // Pastikan chart digambar ulang dengan ukuran yang benar saat tab statistik ditampilkan
      if (tabName === "statistik" && window.statistikChart) {
        requestAnimationFrame(() => window.statistikChart.resize());
      }
    }

    tabButtons.forEach(btn => {
      btn.addEventListener("click", () => activateTab(btn.dataset.tab));
    });

    // ================== SEARCH (berlaku sesuai tab aktif) ==================
    searchInput.addEventListener("input", function (e) {
      const keyword = e.target.value.toLowerCase();
      const activeTab = document.querySelector("#vehicleTabs .vehicle-nav-card.current").dataset.tab;

      if (activeTab === "motor") {
        renderMotor(motorData.filter(d => d.plat.toLowerCase().includes(keyword)));
      } else if (activeTab === "mobil") {
        renderMobil(mobilData.filter(d => d.plat.toLowerCase().includes(keyword)));
      } else if (activeTab === "truk") {
        renderTruk(trukData.filter(d => d.plat.toLowerCase().includes(keyword)));
      } else if (activeTab === "pickup") {
        renderPickup(pickupData.filter(d => d.plat.toLowerCase().includes(keyword)));
      }
    });

    // ================== CHART STATISTIK ==================
    function initStatistikChart() {
      const ctx = document.getElementById('statistikChart').getContext('2d');

      window.statistikChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Motor', 'Mobil', 'Truk', 'Pick Up'],
          datasets: [{
            label: 'Jumlah Kendaraan Aktif',
            data: [
              motorData.length,
              mobilData.length,
              trukData.length,
              pickupData.length
            ],
            backgroundColor: [
              'rgba(59, 91, 252, 0.85)',  // Motor - Primary Blue
              'rgba(108, 60, 233, 0.85)', // Mobil - Purple Accent
              'rgba(255, 122, 48, 0.85)', // Truk - Orange Accent
              'rgba(16, 185, 129, 0.85)'  // Pick Up - Success Teal
            ],
            borderColor: [
              '#3B5BFC',
              '#6C3CE9',
              '#FF7A30',
              '#10B981'
            ],
            borderWidth: 1.5,
            borderRadius: 8,
            borderSkipped: false
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: true,
              labels: {
                font: {
                  family: "'Inter', sans-serif",
                  size: 12,
                  weight: 500
                },
                color: '#64748b'
              }
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              grid: {
                color: '#f1f5f9'
              },
              ticks: {
                color: '#64748b',
                font: {
                  family: "'Inter', sans-serif"
                }
              },
              title: {
                display: true,
                text: 'Unit Kendaraan',
                color: '#475569',
                font: {
                  family: "'Inter', sans-serif",
                  weight: 600
                }
              }
            },
            x: {
              grid: {
                display: false
              },
              ticks: {
                color: '#1a1d29',
                font: {
                  family: "'Poppins', sans-serif",
                  weight: 500
                }
              }
            }
          }
        }
      });
    }

    

    // ================== INISIALISASI ==================
    document.addEventListener("DOMContentLoaded", () => {
      renderMotor(motorData);
      renderMobil(mobilData);
      renderTruk(trukData);
      renderPickup(pickupData);
      initStatistikChart();
    });
  </script>
</body>
</html>