<?php $judul = 'Data Parkir - Per Minggu'; include 'header.php'; ?>
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

    .app-container {
      display: flex;
      min-height: 100vh;
    }

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

    .main-content {
      flex: 1;
      padding: 30px;
      transition: all 0.3s ease;
    }

    .surface-card {
      background: #ffffff;
      border-radius: 16px;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      padding: 24px;
    }

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

    .vehicle-inline-item {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-weight: 500;
    }

    .pill-badge {
      padding: 6px 12px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 500;
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

    <main class="main-content">
      <div class="container-fluid p-0">
        <div class="mb-4">
          <h3 class="mb-1 font-weight-bold">Data Parkir Per Minggu</h3>
          <p class="text-muted small mb-0">Rangkuman komparasi total volume unit kendaraan berdasarkan pembagian rentang pekan mingguan</p>
        </div>

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
    </main>
  </div>

  <?php include 'footer.php'; ?>
</body>
</html>
