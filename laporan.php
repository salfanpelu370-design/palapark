<?php $judul = 'Laporan - Sistem Parkir Modern'; include 'header.php'; ?>
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

    /* Custom Modern Components */
    .surface-card {
      background: #ffffff;
      border-radius: 16px;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      padding: 24px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .surface-card:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.04);
    }

    .stat-icon-box {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
    }

    /* Custom Table Styling */
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

    .btn-action {
      width: 32px;
      height: 32px;
      padding: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      transition: all 0.2s;
    }

    .pill-badge {
      padding: 6px 12px;
      border-radius: 50px;
      font-size: 13px;
      font-weight: 500;
    }

    /* Modal Adjustments */
    .modal-content {
      border-radius: 16px;
      border: none;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .modal-header {
      border-bottom: 1px solid #f1f5f9;
      background: #f8fafc;
      border-top-left-radius: 16px;
      border-top-right-radius: 16px;
    }

    .modal-footer {
      border-top: 1px solid #f1f5f9;
    }

    /* Tab Navigasi Modern (sama seperti Data Parkir) */
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

    /* ============================================================
       FIX: FORMAT CETAK LAPORAN
       Sebelumnya "Cetak Laporan" hanya memanggil window.print() yang
       mencetak tampilan layar apa adanya (mirip screenshot, termasuk
       sidebar & tombol ikut kecetak). Sekarang dibuat #print-area
       tersembunyi yang diisi ulang oleh JS (cetakLaporan()) berupa
       dokumen laporan rapi: kop surat, tabel rincian per baris
       (tanggal/periode, rincian jenis kendaraan, jumlah, biaya), dan
       ringkasan total -- lalu HANYA area ini yang dicetak.
       ============================================================ */
    #print-area { display: none; }

    @media print {
      @page { size: A4 portrait; margin: 16mm; }
      body * { visibility: hidden; }
      #print-area, #print-area * { visibility: visible; }
      #print-area {
        display: block !important;
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        font-family: 'Segoe UI', Arial, sans-serif;
        color: #111;
      }
      .print-kop { text-align: center; border-bottom: 3px solid #1A1D29; padding-bottom: 10px; margin-bottom: 16px; }
      .print-kop h2 { margin: 0 0 2px; font-size: 18px; }
      .print-kop p { margin: 0; font-size: 11px; color: #444; }
      .print-meta { display: flex; justify-content: space-between; font-size: 12px; margin-bottom: 14px; }
      .print-table { width: 100%; border-collapse: collapse; font-size: 11px; }
      .print-table th, .print-table td { border: 1px solid #999; padding: 6px 8px; text-align: left; }
      .print-table th { background: #eef1f7 !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
      .print-table td.num, .print-table th.num { text-align: right; }
      .print-total-row td { font-weight: bold; background: #f5f5f5 !important; -webkit-print-color-adjust: exact; print-color-adjust: exact; }
      .print-footer { display: flex; justify-content: space-between; margin-top: 40px; font-size: 12px; }
      .print-footer .ttd-box { text-align: center; width: 200px; }
      .print-footer .ttd-line { margin-top: 55px; border-top: 1px solid #333; padding-top: 4px; }
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
        <div class="d-flex justify-content-between align-items-center mb-4">
          <div>
            <h3 class="mb-1 font-weight-bold">Laporan Penghasilan</h3>
            <p class="text-muted small mb-0">Satu tampilan terpadu untuk memantau laporan Per Hari, Per Minggu, dan Per Bulan</p>
          </div>
          <div>
            <span class="badge bg-white text-dark shadow-sm p-2 rounded-3"><i class="fa-regular fa-clock text-primary me-1"></i> Live Update</span>
          </div>
        </div>

        <!-- Tab Navigasi -->
        <div class="ringkasan-tabs">
          <button class="tab-btn active" data-tab="tab-laporan-harian">
            <i class="fas fa-calendar-day"></i> Per Hari
          </button>
          <button class="tab-btn" data-tab="tab-laporan-mingguan">
            <i class="fas fa-calendar-week"></i> Per Minggu
          </button>
          <button class="tab-btn" data-tab="tab-laporan-bulanan">
            <i class="fas fa-calendar-alt"></i> Per Bulan
          </button>
        </div>

        <!-- ===================== TAB PER HARI ===================== -->
        <div class="tab-pane-custom active" id="tab-laporan-harian">

          <!-- Summary Cards -->
          <div class="row g-4 mb-4">
            <div class="col-12 col-md-4">
              <div class="surface-card d-flex align-items-center justify-content-between">
                <div>
                  <!-- FIX: label diperjelas -> ini AKUMULASI dari baris-baris
                       di tabel bawah (bukan pendapatan hari ini). Untuk
                       angka pendapatan hari ini, lihat kartu di Dashboard. -->
                  <p class="text-muted small mb-1 fw-medium">Total Pendapatan (Periode di Tabel)</p>
                  <h4 class="mb-0 fw-bold" style="color: #10B981;">Rp 0</h4>
                </div>
                <div class="stat-icon-box" style="background: rgba(16, 185, 129, 0.1); color: #10B981;">
                  <i class="fas fa-wallet"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="surface-card d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-muted small mb-1 fw-medium">Rata-rata per Hari</p>
                  <h4 class="mb-0 fw-bold text-dark">Rp 0</h4>
                </div>
                <div class="stat-icon-box" style="background: rgba(59, 91, 252, 0.1); color: var(--gradient-primary-start);">
                  <i class="fas fa-chart-line"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="surface-card d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-muted small mb-1 fw-medium">Total Volume Kendaraan</p>
                  <h4 class="mb-0 fw-bold" style="color: var(--accent-orange);">0 Unit</h4>
                </div>
                <div class="stat-icon-box" style="background: rgba(255, 122, 48, 0.1); color: var(--accent-orange);">
                  <i class="fas fa-car-side"></i>
                </div>
              </div>
            </div>
          </div>
          <p class="text-muted small mb-4"><i class="fas fa-circle-info me-1"></i>Angka di atas adalah jumlah dari seluruh baris pada tabel "Rincian Transaksi Per Hari" di bawah ini, bukan pendapatan hari ini. Untuk pendapatan hari ini, lihat halaman Dashboard.</p>

          <!-- Tabel Data Laporan -->
          <div class="surface-card p-0 overflow-hidden">
            <div class="px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
              <h5 class="fw-bold mb-0">Rincian Transaksi Per Hari</h5>
              <button class="btn btn-sm btn-light border" onclick="cetakLaporan('tab-laporan-harian', 'Laporan Per Hari')"><i class="fas fa-print me-1"></i> Cetak Laporan</button>
            </div>
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0" id="laporanTableHarian">
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>Jumlah Kendaraan</th>
                    <th>Total Penghasilan</th>
                    <th class="text-end">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-motor="120" data-mobil="100" data-truk="50" data-pickup="40">
                    <td class="fw-semibold">Tanggal 1 (01-06)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">310 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 3.100.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailHarian(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditHarian(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisHarian(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="100" data-mobil="90" data-truk="50" data-pickup="40">
                    <td class="fw-semibold">Tanggal 2 (08-14)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">280 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 2.800.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailHarian(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditHarian(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisHarian(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="90" data-mobil="85" data-truk="30" data-pickup="25">
                    <td class="fw-semibold">Tanggal 3 (15-21)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">230 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 2.300.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailHarian(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditHarian(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisHarian(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="110" data-mobil="95" data-truk="45" data-pickup="30">
                    <td class="fw-semibold">Tanggal 4 (22-28)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">280 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 2.800.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailHarian(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditHarian(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisHarian(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="130" data-mobil="105" data-truk="55" data-pickup="45">
                    <td class="fw-semibold">Tanggal 5 (29-31)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">335 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 3.350.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailHarian(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditHarian(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisHarian(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- ===================== TAB PER MINGGU ===================== -->
        <div class="tab-pane-custom" id="tab-laporan-mingguan">

          <!-- Summary Cards -->
          <div class="row g-4 mb-4">
            <div class="col-12 col-md-4">
              <div class="surface-card d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-muted small mb-1 fw-medium">Total Pendapatan (Periode di Tabel)</p>
                  <h4 class="mb-0 fw-bold" style="color: #10B981;">Rp 0</h4>
                </div>
                <div class="stat-icon-box" style="background: rgba(16, 185, 129, 0.1); color: #10B981;">
                  <i class="fas fa-wallet"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="surface-card d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-muted small mb-1 fw-medium">Rata-rata per Minggu</p>
                  <h4 class="mb-0 fw-bold text-dark">Rp 0</h4>
                </div>
                <div class="stat-icon-box" style="background: rgba(59, 91, 252, 0.1); color: var(--gradient-primary-start);">
                  <i class="fas fa-chart-line"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="surface-card d-flex align-items-center justify-content-between">
                <div>
                  <p class="text-muted small mb-1 fw-medium">Total Volume Kendaraan</p>
                  <h4 class="mb-0 fw-bold" style="color: var(--accent-orange);">0 Unit</h4>
                </div>
                <div class="stat-icon-box" style="background: rgba(255, 122, 48, 0.1); color: var(--accent-orange);">
                  <i class="fas fa-car-side"></i>
                </div>
              </div>
            </div>
          </div>
          <p class="text-muted small mb-4"><i class="fas fa-circle-info me-1"></i>Angka di atas adalah jumlah dari seluruh baris pada tabel "Rincian Transaksi Per Minggu" di bawah ini, bukan pendapatan hari ini.</p>

          <!-- Tabel Data Laporan -->
          <div class="surface-card p-0 overflow-hidden">
            <div class="px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
              <h5 class="fw-bold mb-0">Rincian Transaksi Per Minggu</h5>
              <button class="btn btn-sm btn-light border" onclick="cetakLaporan('tab-laporan-mingguan', 'Laporan Per Minggu')"><i class="fas fa-print me-1"></i> Cetak Laporan</button>
            </div>
            <div class="table-responsive">
              <table class="table table-modern table-hover mb-0" id="laporanTableMinggu">
                <thead>
                  <tr>
                    <th>Minggu</th>
                    <th>Jumlah Kendaraan</th>
                    <th>Total Penghasilan</th>
                    <th class="text-end">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-motor="120" data-mobil="100" data-truk="50" data-pickup="40">
                    <td class="fw-semibold">Minggu 1 (01-06)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">310 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 3.100.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailMinggu(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditMinggu(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisMinggu(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="100" data-mobil="90" data-truk="50" data-pickup="40">
                    <td class="fw-semibold">Minggu 2 (08-14)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">280 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 2.800.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailMinggu(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditMinggu(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisMinggu(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="90" data-mobil="85" data-truk="30" data-pickup="25">
                    <td class="fw-semibold">Minggu 3 (15-21)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">230 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 2.300.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailMinggu(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditMinggu(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisMinggu(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="110" data-mobil="95" data-truk="45" data-pickup="30">
                    <td class="fw-semibold">Minggu 4 (22-28)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">280 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 2.800.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailMinggu(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditMinggu(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisMinggu(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="130" data-mobil="105" data-truk="55" data-pickup="45">
                    <td class="fw-semibold">Minggu 5 (29-31)</td>
                    <td><span class="badge bg-light text-dark pill-badge border">335 Unit</span></td>
                    <td class="fw-bold text-dark">Rp 3.350.000</td>
                    <td class="text-end">
                      <button class="btn btn-light btn-action text-info me-1" onclick="showDetailMinggu(this)" title="Detail"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-action text-warning me-1" onclick="showEditMinggu(this)" title="Edit"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-action text-danger" onclick="hapusBarisMinggu(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- ===================== TAB PER BULAN ===================== -->
        <div class="tab-pane-custom" id="tab-laporan-bulanan">

          <!-- Tabel Laporan Modul -->
          <div class="surface-card p-0 overflow-hidden">
            <div class="px-4 pt-4 pb-2 d-flex justify-content-between align-items-center">
              <h5 class="fw-bold mb-0">Rincian Transaksi Per Bulan</h5>
              <button class="btn btn-sm btn-light border" onclick="cetakLaporan('tab-laporan-bulanan', 'Laporan Per Bulan')"><i class="fas fa-print me-1"></i> Cetak Laporan</button>
            </div>
            <div class="table-responsive">
              <table class="table table-hover align-middle border-light mb-0" id="laporanTableBulan">
                <thead class="table-light">
                  <tr>
                    <th class="ps-3 py-3">Bulan</th>
                    <th class="py-3">Jumlah Kendaraan</th>
                    <th class="py-3">Total Penghasilan</th>
                    <th class="pe-3 py-3 text-end">Aksi Operasional</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-motor="500" data-mobil="400" data-truk="200" data-pickup="150">
                    <td class="ps-3 fw-medium">Januari 2026</td>
                    <td>1.250 Unit</td>
                    <td class="fw-semibold text-primary">Rp 12.500.000</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-light btn-sm text-info me-1" onclick="showDetailBulan(this)" title="Lihat rincian"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-sm text-warning me-1" onclick="showEditBulan(this)" title="Ubah data"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-sm text-danger" onclick="hapusBarisBulan(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="520" data-mobil="420" data-truk="210" data-pickup="150">
                    <td class="ps-3 fw-medium">Februari 2026</td>
                    <td>1.300 Unit</td>
                    <td class="fw-semibold text-primary">Rp 13.000.000</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-light btn-sm text-info me-1" onclick="showDetailBulan(this)" title="Lihat rincian"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-sm text-warning me-1" onclick="showEditBulan(this)" title="Ubah data"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-sm text-danger" onclick="hapusBarisBulan(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="480" data-mobil="370" data-truk="180" data-pickup="150">
                    <td class="ps-3 fw-medium">Maret 2026</td>
                    <td>1.180 Unit</td>
                    <td class="fw-semibold text-primary">Rp 11.800.000</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-light btn-sm text-info me-1" onclick="showDetailBulan(this)" title="Lihat rincian"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-sm text-warning me-1" onclick="showEditBulan(this)" title="Ubah data"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-sm text-danger" onclick="hapusBarisBulan(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="530" data-mobil="410" data-truk="220" data-pickup="140">
                    <td class="ps-3 fw-medium">April 2026</td>
                    <td>1.300 Unit</td>
                    <td class="fw-semibold text-primary">Rp 13.200.000</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-light btn-sm text-info me-1" onclick="showDetailBulan(this)" title="Lihat rincian"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-sm text-warning me-1" onclick="showEditBulan(this)" title="Ubah data"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-sm text-danger" onclick="hapusBarisBulan(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                  <tr data-motor="490" data-mobil="390" data-truk="190" data-pickup="130">
                    <td class="ps-3 fw-medium">Mei 2026</td>
                    <td>1.200 Unit</td>
                    <td class="fw-semibold text-primary">Rp 12.000.000</td>
                    <td class="pe-3 text-end">
                      <button class="btn btn-light btn-sm text-info me-1" onclick="showDetailBulan(this)" title="Lihat rincian"><i class="fas fa-eye"></i></button>
                      <button class="btn btn-light btn-sm text-warning me-1" onclick="showEditBulan(this)" title="Ubah data"><i class="fas fa-edit"></i></button>
                      <button class="btn btn-light btn-sm text-danger" onclick="hapusBarisBulan(this)" title="Hapus"><i class="fas fa-trash-alt"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>
    </main>
  </div>

  <!-- Modal Edit & Detail - Harian -->
  <div class="modal fade" id="editModalHarian" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form id="editFormHarian">
          <div class="modal-header">
            <h5 class="modal-title fw-bold"><i class="fas fa-edit text-warning me-2"></i>Edit Laporan Harian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body p-4">
            <input type="hidden" id="editIndexHarian">
            <div class="mb-3">
              <label class="form-label fw-medium small">Tanggal</label>
              <input type="text" class="form-control rounded-3" id="editTanggalHarian" required>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-6">
                <label class="form-label fw-medium small">Motor</label>
                <input type="number" class="form-control rounded-3" id="editMotorHarian" required>
              </div>
              <div class="col-6">
                <label class="form-label fw-medium small">Mobil</label>
                <input type="number" class="form-control rounded-3" id="editMobilHarian" required>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-6">
                <label class="form-label fw-medium small">Truk</label>
                <input type="number" class="form-control rounded-3" id="editTrukHarian" required>
              </div>
              <div class="col-6">
                <label class="form-label fw-medium small">Pick Up</label>
                <input type="number" class="form-control rounded-3" id="editPickupHarian" required>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-label fw-medium small">Total Penghasilan (Rp)</label>
              <input type="text" class="form-control rounded-3 fw-bold" id="editPenghasilanHarian" required>
            </div>
          </div>
          <div class="modal-footer bg-light border-0">
            <button type="button" class="btn btn-light border rounded-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn text-white rounded-3 px-4" style="background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="detailModalHarian" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold"><i class="fas fa-chart-pie text-info me-2"></i>Detail Laporan Harian</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <div class="text-center mb-4">
            <p class="text-muted small mb-1">Periode</p>
            <h4 class="fw-bold text-dark mb-0" id="detailTanggalHarian"></h4>
          </div>
          <div class="surface-card bg-light border-0 p-3 mb-3">
            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
              <span><i class="fas fa-motorcycle text-muted me-2"></i> Motor</span>
              <span class="fw-bold" id="detailMotorHarian"></span>
            </div>
            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
              <span><i class="fas fa-car-side text-muted me-2"></i> Mobil</span>
              <span class="fw-bold" id="detailMobilHarian"></span>
            </div>
            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
              <span><i class="fas fa-truck-moving text-muted me-2"></i> Truk</span>
              <span class="fw-bold" id="detailTrukHarian"></span>
            </div>
            <div class="d-flex justify-content-between mb-0">
              <span><i class="fas fa-truck-pickup text-muted me-2"></i> Pick Up</span>
              <span class="fw-bold" id="detailPickupHarian"></span>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center px-2 mb-2">
            <span class="text-muted small">Total Volume</span>
            <span class="badge bg-primary pill-badge" id="detailJumlahHarian"></span>
          </div>
          <div class="d-flex justify-content-between align-items-center px-2 mb-3">
            <span class="text-muted small">Total Penghasilan</span>
            <span class="fw-bold text-success fs-5">Rp <span id="detailPenghasilanHarian"></span></span>
          </div>

          <!-- FIX: Sampel plat nomor -->
          <!-- Dosen meminta jangan menampilkan ratusan unit sekaligus,
               cukup contoh beberapa plat nomor kendaraan yang masuk pada
               periode tersebut agar tetap informatif tanpa berlebihan. -->
          <div class="border-top pt-3">
            <p class="text-muted small mb-2"><i class="fas fa-id-card me-1"></i>Sampel Plat Nomor Kendaraan Masuk (3 dari <span id="detailJumlahHarianAngka"></span> unit)</p>
            <div class="d-flex flex-wrap gap-2" id="detailSamplePlatHarian"></div>
          </div>
        </div>
        <div class="modal-footer bg-light border-0">
          <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn text-white rounded-3 px-4" style="background:#2c3e50;" onclick="cetakDetailHarian()"><i class="fas fa-print me-1"></i> Cetak Slip Ini</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit & Detail - Mingguan -->
  <div class="modal fade" id="editModalMinggu" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form id="editFormMinggu">
          <div class="modal-header">
            <h5 class="modal-title fw-bold"><i class="fas fa-edit text-warning me-2"></i>Edit Laporan Mingguan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body p-4">
            <input type="hidden" id="editIndexMinggu">
            <div class="mb-3">
              <label class="form-label fw-medium small">Minggu</label>
              <input type="text" class="form-control rounded-3" id="editMingguMinggu" required>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-6">
                <label class="form-label fw-medium small">Motor</label>
                <input type="number" class="form-control rounded-3" id="editMotorMinggu" required>
              </div>
              <div class="col-6">
                <label class="form-label fw-medium small">Mobil</label>
                <input type="number" class="form-control rounded-3" id="editMobilMinggu" required>
              </div>
            </div>
            <div class="row g-3 mb-3">
              <div class="col-6">
                <label class="form-label fw-medium small">Truk</label>
                <input type="number" class="form-control rounded-3" id="editTrukMinggu" required>
              </div>
              <div class="col-6">
                <label class="form-label fw-medium small">Pick Up</label>
                <input type="number" class="form-control rounded-3" id="editPickupMinggu" required>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-label fw-medium small">Total Penghasilan (Rp)</label>
              <input type="text" class="form-control rounded-3 fw-bold" id="editPenghasilanMinggu" required>
            </div>
          </div>
          <div class="modal-footer bg-light border-0">
            <button type="button" class="btn btn-light border rounded-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn text-white rounded-3 px-4" style="background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="detailModalMinggu" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold"><i class="fas fa-chart-pie text-info me-2"></i>Detail Laporan Mingguan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4">
          <div class="text-center mb-4">
            <p class="text-muted small mb-1">Periode</p>
            <h4 class="fw-bold text-dark mb-0" id="detailMingguMinggu"></h4>
          </div>
          <div class="surface-card bg-light border-0 p-3 mb-3">
            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
              <span><i class="fas fa-motorcycle text-muted me-2"></i> Motor</span>
              <span class="fw-bold" id="detailMotorMinggu"></span>
            </div>
            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
              <span><i class="fas fa-car-side text-muted me-2"></i> Mobil</span>
              <span class="fw-bold" id="detailMobilMinggu"></span>
            </div>
            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
              <span><i class="fas fa-truck-moving text-muted me-2"></i> Truk</span>
              <span class="fw-bold" id="detailTrukMinggu"></span>
            </div>
            <div class="d-flex justify-content-between mb-0">
              <span><i class="fas fa-truck-pickup text-muted me-2"></i> Pick Up</span>
              <span class="fw-bold" id="detailPickupMinggu"></span>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center px-2 mb-2">
            <span class="text-muted small">Total Volume</span>
            <span class="badge bg-primary pill-badge" id="detailJumlahMinggu"></span>
          </div>
          <div class="d-flex justify-content-between align-items-center px-2">
            <span class="text-muted small">Total Penghasilan</span>
            <span class="fw-bold text-success fs-5">Rp <span id="detailPenghasilanMinggu"></span></span>
          </div>
        </div>
        <div class="modal-footer bg-light border-0">
          <button type="button" class="btn btn-secondary rounded-3" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit & Detail - Bulanan -->
  <div class="modal fade" id="detailModalBulan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold text-dark"><i class="fas fa-chart-pie me-2 text-primary"></i>Rincian Distribusi Kendaraan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body py-4">
          <div class="text-center mb-4 bg-light rounded-4 py-3">
            <p class="text-muted small mb-1">Periode Laporan</p>
            <h4 class="fw-bold text-dark mb-0" id="detailBulanBulan"></h4>
          </div>
          <div class="row g-3">
            <div class="col-6"><div class="p-3 bg-light rounded-3"><small class="text-muted d-block mb-1"><i class="fas fa-motorcycle text-primary me-1"></i> Motor</small><span class="fw-bold" id="detailMotorBulan"></span> Unit</div></div>
            <div class="col-6"><div class="p-3 bg-light rounded-3"><small class="text-muted d-block mb-1"><i class="fas fa-car-side text-success me-1"></i> Mobil</small><span class="fw-bold" id="detailMobilBulan"></span> Unit</div></div>
            <div class="col-6"><div class="p-3 bg-light rounded-3"><small class="text-muted d-block mb-1"><i class="fas fa-truck-moving text-warning me-1"></i> Truk</small><span class="fw-bold" id="detailTrukBulan"></span> Unit</div></div>
            <div class="col-6"><div class="p-3 bg-light rounded-3"><small class="text-muted d-block mb-1"><i class="fas fa-truck-pickup text-danger me-1"></i> Pick Up</small><span class="fw-bold" id="detailPickupBulan"></span> Unit</div></div>
          </div>
          <hr class="my-4 border-light">
          <div class="d-flex justify-content-between align-items-center">
            <span class="text-secondary small">Total Volume</span>
            <span class="fw-bold text-dark" id="detailJumlahBulan"></span>
          </div>
          <div class="d-flex justify-content-between align-items-center mt-2">
            <span class="text-secondary small">Total Omzet</span>
            <span class="fw-bold text-success h5 mb-0" id="detailPenghasilanBulan"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary w-100 rounded-3" data-bs-dismiss="modal">Tutup Pratinjau</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="editModalBulan" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <form id="editFormBulan">
          <div class="modal-header">
            <h5 class="modal-title fw-bold text-dark"><i class="fas fa-edit me-2 text-warning"></i>Modifikasi Berkas Laporan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="editIndexBulan" />
            <div class="mb-3">
              <label class="form-label">Nama Periode/Bulan</label>
              <input type="text" class="form-control" id="editBulanBulan" required />
            </div>
            <div class="row g-3 mb-3">
              <div class="col-6">
                <label class="form-label">Unit Motor</label>
                <input type="number" class="form-control" id="editMotorBulan" required />
              </div>
              <div class="col-6">
                <label class="form-label">Unit Mobil</label>
                <input type="number" class="form-control" id="editMobilBulan" required />
              </div>
              <div class="col-6">
                <label class="form-label">Unit Truk</label>
                <input type="number" class="form-control" id="editTrukBulan" required />
              </div>
              <div class="col-6">
                <label class="form-label">Unit Pick Up</label>
                <input type="number" class="form-control" id="editPickupBulan" required />
              </div>
            </div>
            <div class="mb-2">
              <label class="form-label">Total Omzet Finansial (Sertakan Rp/Format)</label>
              <input type="text" class="form-control" id="editPenghasilanBulan" required />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light border" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success px-4">Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- FIX: Area khusus hasil cetak laporan. Diisi oleh cetakLaporan() lalu
       dicetak dengan window.print(); sidebar, tab, dan tombol otomatis
       disembunyikan oleh CSS @media print sehingga hasil cetak berupa
       dokumen laporan rapi, bukan screenshot tampilan layar. -->
  <div id="print-area"></div>

  <!-- Bootstrap Lokal JS -->
  <?php include 'footer.php'; ?>

  <script>
    /* ============ Logika Tab Kustom (sama seperti Data Parkir) ============ */
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane-custom');

    tabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        tabButtons.forEach(b => b.classList.remove('active'));
        tabPanes.forEach(p => p.classList.remove('active'));

        btn.classList.add('active');
        document.getElementById(btn.dataset.tab).classList.add('active');
      });
    });

    function formatRupiah(angka) {
      return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function cleanNumber(string) {
      return parseInt(string.replace(/[^0-9]/g, '')) || 0;
    }

    /* ============================================================
       FIX: FORMAT CETAK LAPORAN (dokumen rapi, bukan screenshot layar)
       Membaca baris tabel yang sedang aktif (Harian/Mingguan/Bulanan),
       lalu menyusun ulang jadi dokumen laporan: kop surat, tabel rincian
       per baris (periode, rincian jenis kendaraan, jumlah unit, biaya),
       dan baris total keseluruhan + tempat tanda tangan.
       ============================================================ */
    const TABEL_PER_TAB = {
      'tab-laporan-harian':   { tableId: 'laporanTableHarian', labelKolom: 'Tanggal' },
      'tab-laporan-mingguan': { tableId: 'laporanTableMinggu', labelKolom: 'Minggu' },
      'tab-laporan-bulanan':  { tableId: 'laporanTableBulan',  labelKolom: 'Bulan' },
    };

    function cetakLaporan(tabId, judul) {
      const konfig = TABEL_PER_TAB[tabId];
      if (!konfig) return;

      const table = document.getElementById(konfig.tableId);
      const rows = Array.from(table.querySelectorAll('tbody tr'));

      if (rows.length === 0) {
        alert('Belum ada data untuk dicetak pada laporan ini.');
        return;
      }

      let totalMotor = 0, totalMobil = 0, totalTruk = 0, totalPickup = 0, totalUnit = 0, totalBiaya = 0;

      const barisHtml = rows.map(row => {
        const periode = row.cells[0].textContent.trim();
        const motor = parseInt(row.dataset.motor || row.getAttribute('data-motor')) || 0;
        const mobil = parseInt(row.dataset.mobil || row.getAttribute('data-mobil')) || 0;
        const truk = parseInt(row.dataset.truk || row.getAttribute('data-truk')) || 0;
        const pickup = parseInt(row.dataset.pickup || row.getAttribute('data-pickup')) || 0;
        const unit = motor + mobil + truk + pickup;
        const biaya = cleanNumber(row.cells[2].textContent);

        totalMotor += motor; totalMobil += mobil; totalTruk += truk; totalPickup += pickup;
        totalUnit += unit; totalBiaya += biaya;

        return `
          <tr>
            <td>${periode}</td>
            <td class="num">${motor}</td>
            <td class="num">${mobil}</td>
            <td class="num">${truk}</td>
            <td class="num">${pickup}</td>
            <td class="num">${unit}</td>
            <td class="num">Rp ${formatRupiah(biaya)}</td>
          </tr>`;
      }).join('');

      const sekarang = new Date();
      const namaPencetak = localStorage.getItem('namaLogin') || 'Admin';

      document.getElementById('print-area').innerHTML = `
        <div class="print-kop">
          <h2>SMARTPARK - SISTEM PARKIR DIGITAL</h2>
          <p>${judul} &bull; Dokumen Laporan Resmi</p>
        </div>
        <div class="print-meta">
          <span><b>Periode Kolom:</b> ${konfig.labelKolom}</span>
          <span><b>Dicetak oleh:</b> ${namaPencetak}</span>
          <span><b>Waktu Cetak:</b> ${sekarang.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })}, ${sekarang.toLocaleTimeString('id-ID')}</span>
        </div>
        <table class="print-table">
          <thead>
            <tr>
              <th>${konfig.labelKolom}</th>
              <th class="num">Motor</th>
              <th class="num">Mobil</th>
              <th class="num">Truk</th>
              <th class="num">Pick-up</th>
              <th class="num">Total Unit</th>
              <th class="num">Total Biaya</th>
            </tr>
          </thead>
          <tbody>
            ${barisHtml}
          </tbody>
          <tfoot>
            <tr class="print-total-row">
              <td>TOTAL KESELURUHAN</td>
              <td class="num">${totalMotor}</td>
              <td class="num">${totalMobil}</td>
              <td class="num">${totalTruk}</td>
              <td class="num">${totalPickup}</td>
              <td class="num">${totalUnit}</td>
              <td class="num">Rp ${formatRupiah(totalBiaya)}</td>
            </tr>
          </tfoot>
        </table>
        <div class="print-footer">
          <div></div>
          <div class="ttd-box">
            <div>Mengetahui,</div>
            <div class="ttd-line">${namaPencetak}</div>
          </div>
        </div>
      `;

      window.print();
    }

    /* ======================================================= */
    /* ===================== TAB PER HARI ===================== */
    /* ======================================================= */
    const editModalHarian = new bootstrap.Modal(document.getElementById('editModalHarian'));
    const detailModalHarian = new bootstrap.Modal(document.getElementById('detailModalHarian'));

    function updateSummaryCardsHarian() {
      const rows = document.querySelectorAll('#laporanTableHarian tbody tr');
      let totalPendapatan = 0, totalKendaraan = 0;
      const jumlahTanggal = rows.length;

      rows.forEach(row => {
        const motor = parseInt(row.dataset.motor) || 0;
        const mobil = parseInt(row.dataset.mobil) || 0;
        const truk = parseInt(row.dataset.truk) || 0;
        const pickup = parseInt(row.dataset.pickup) || 0;

        totalKendaraan += (motor + mobil + truk + pickup);
        totalPendapatan += cleanNumber(row.cells[2].textContent);
      });

      const rataRata = jumlahTanggal > 0 ? Math.round(totalPendapatan / jumlahTanggal) : 0;
      const summaryCards = document.querySelectorAll('#tab-laporan-harian .surface-card h4');
      if (summaryCards.length >= 3) {
        summaryCards[0].textContent = 'Rp ' + formatRupiah(totalPendapatan);
        summaryCards[1].textContent = 'Rp ' + formatRupiah(rataRata);
        summaryCards[2].textContent = totalKendaraan + ' Unit';
      }
    }

    function showEditHarian(button) {
      const row = button.closest('tr');
      const cells = row.querySelectorAll('td');

      document.getElementById('editTanggalHarian').value = cells[0].textContent;
      document.getElementById('editMotorHarian').value = row.dataset.motor;
      document.getElementById('editMobilHarian').value = row.dataset.mobil;
      document.getElementById('editTrukHarian').value = row.dataset.truk;
      document.getElementById('editPickupHarian').value = row.dataset.pickup;
      document.getElementById('editPenghasilanHarian').value = cleanNumber(cells[2].textContent);
      document.getElementById('editIndexHarian').value = row.rowIndex;

      editModalHarian.show();
    }

    document.getElementById('editFormHarian').addEventListener('submit', function(e) {
      e.preventDefault();

      const index = document.getElementById('editIndexHarian').value;
      const table = document.getElementById('laporanTableHarian');
      const row = table.rows[index];

      const tanggal = document.getElementById('editTanggalHarian').value;
      const motor = parseInt(document.getElementById('editMotorHarian').value) || 0;
      const mobil = parseInt(document.getElementById('editMobilHarian').value) || 0;
      const truk = parseInt(document.getElementById('editTrukHarian').value) || 0;
      const pickup = parseInt(document.getElementById('editPickupHarian').value) || 0;
      const totalVolume = motor + mobil + truk + pickup;
      const inputPenghasilan = cleanNumber(document.getElementById('editPenghasilanHarian').value);

      row.cells[0].textContent = tanggal;
      row.cells[1].innerHTML = `<span class="badge bg-light text-dark pill-badge border">${totalVolume} Unit</span>`;
      row.cells[2].textContent = 'Rp ' + formatRupiah(inputPenghasilan);

      row.dataset.motor = motor;
      row.dataset.mobil = mobil;
      row.dataset.truk = truk;
      row.dataset.pickup = pickup;

      editModalHarian.hide();
      updateSummaryCardsHarian();
    });

    // FIX: Generator plat nomor contoh (deterministik per periode supaya
    // konsisten tiap dibuka, bukan acak berubah-ubah tiap klik)
    let dataDetailHarianAktif = null;
    function buatSamplePlat(seedText, jumlah) {
      const kodeWilayah = ['B', 'D', 'F', 'Z', 'T'];
      let seed = 0;
      for (let i = 0; i < seedText.length; i++) seed += seedText.charCodeAt(i);
      const hasil = [];
      for (let i = 0; i < jumlah; i++) {
        const wilayah = kodeWilayah[(seed + i) % kodeWilayah.length];
        const angka = 1000 + ((seed * (i + 3)) % 9000);
        const huruf1 = String.fromCharCode(65 + ((seed + i * 7) % 26));
        const huruf2 = String.fromCharCode(65 + ((seed + i * 13) % 26));
        const huruf3 = String.fromCharCode(65 + ((seed + i * 19) % 26));
        hasil.push(`${wilayah} ${angka} ${huruf1}${huruf2}${huruf3}`);
      }
      return hasil;
    }
    // FIX: Generator daftar kendaraan detail (plat, jenis, jam masuk, jam
    // keluar) untuk slip cetak -- 4 Motor, 4 Mobil, 4 Pick-up, diacak
    // urutannya tapi deterministik (konsisten tiap dibuka ulang, tidak
    // acak berubah-ubah tiap klik cetak)
    function buatDetailKendaraanMasuk(seedText) {
      const jenisList = ['Motor','Motor','Motor','Motor','Mobil','Mobil','Mobil','Mobil','Pick-up','Pick-up','Pick-up','Pick-up'];
      let seed = 0;
      for (let i = 0; i < seedText.length; i++) seed += seedText.charCodeAt(i);

      // Acak urutan jenis kendaraan (deterministik berdasarkan seed periode)
      const arr = jenisList.slice();
      for (let i = arr.length - 1; i > 0; i--) {
        const j = (seed * (i + 7) + i) % (i + 1);
        [arr[i], arr[j]] = [arr[j], arr[i]];
      }

      const kodeWilayah = ['B', 'D', 'F', 'Z', 'T'];
      const fmt = (h, m) => `${h.toString().padStart(2,'0')}:${m.toString().padStart(2,'0')}`;

      return arr.map((jenis, i) => {
        const wilayah = kodeWilayah[(seed + i) % kodeWilayah.length];
        const angka = 1000 + ((seed * (i + 3)) % 9000);
        const h1 = String.fromCharCode(65 + ((seed + i * 7) % 26));
        const h2 = String.fromCharCode(65 + ((seed + i * 13) % 26));
        const h3 = String.fromCharCode(65 + ((seed + i * 19) % 26));
        const plat = `${wilayah} ${angka} ${h1}${h2}${h3}`;

        const jamMasukJam = 6 + ((seed + i * 5) % 12);      // rentang jam 06-17
        const jamMasukMenit = (seed + i * 11) % 60;
        const durasiJam = 1 + ((seed + i * 3) % 3);          // parkir 1-3 jam
        const jamKeluarJam = (jamMasukJam + durasiJam) % 24;

        return {
          jenis,
          plat,
          jamMasuk: fmt(jamMasukJam, jamMasukMenit),
          jamKeluar: fmt(jamKeluarJam, jamMasukMenit)
        };
      });
    }

    function showDetailHarian(button) {
      const row = button.closest('tr');
      const cells = row.querySelectorAll('td');

      const motor = row.dataset.motor, mobil = row.dataset.mobil, truk = row.dataset.truk, pickup = row.dataset.pickup;
      const total = parseInt(motor) + parseInt(mobil) + parseInt(truk) + parseInt(pickup);
      const periode = cells[0].textContent;
      const penghasilan = cells[2].textContent.replace('Rp ', '');

      document.getElementById('detailTanggalHarian').textContent = periode;
      document.getElementById('detailMotorHarian').textContent = motor + " Unit";
      document.getElementById('detailMobilHarian').textContent = mobil + " Unit";
      document.getElementById('detailTrukHarian').textContent = truk + " Unit";
      document.getElementById('detailPickupHarian').textContent = pickup + " Unit";
      document.getElementById('detailJumlahHarian').textContent = total + " Kendaraan";
      document.getElementById('detailJumlahHarianAngka').textContent = total;
      document.getElementById('detailPenghasilanHarian').textContent = penghasilan;

      const samplePlat = buatSamplePlat(periode, 3);
      document.getElementById('detailSamplePlatHarian').innerHTML = samplePlat
        .map(plat => `<span class="badge bg-light text-dark border px-3 py-2"><i class="fas fa-car me-1 text-muted"></i>${plat}</span>`)
        .join('');

      dataDetailHarianAktif = { periode, motor, mobil, truk, pickup, total, penghasilan, samplePlat };

      detailModalHarian.show();
    }

   function cetakDetailHarian() {
      if (!dataDetailHarianAktif) return;
      const d = dataDetailHarianAktif;
      const sekarang = new Date();
      const namaPencetak = localStorage.getItem('namaLogin') || 'Admin';

      // FIX: daftar detail per kendaraan (jenis, plat, jam masuk, jam
      // keluar), urutan diacak -- bukan lagi cuma total per jenis
      const detailKendaraan = buatDetailKendaraanMasuk(d.periode);

      const barisDetail = detailKendaraan.map((k, i) => `
        <tr>
          <td>${i + 1}</td>
          <td>${k.jenis}</td>
          <td>${k.plat}</td>
          <td class="num">${k.jamMasuk}</td>
          <td class="num">${k.jamKeluar}</td>
        </tr>`).join('');

      document.getElementById('print-area').innerHTML = `
        <div class="print-kop">
          <h2>SMARTPARK - SISTEM PARKIR DIGITAL</h2>
          <p>Slip Detail Statistik Harian &bull; ${d.periode}</p>
        </div>
        <div class="print-meta">
          <span><b>Dicetak oleh:</b> ${namaPencetak}</span>
          <span><b>Waktu Cetak:</b> ${sekarang.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })}, ${sekarang.toLocaleTimeString('id-ID')}</span>
        </div>
        <table class="print-table">
          <thead><tr><th>No</th><th>Jenis Kendaraan</th><th>Plat Nomor</th><th class="num">Jam Masuk</th><th class="num">Jam Keluar</th></tr></thead>
          <tbody>
            ${barisDetail}
          </tbody>
          <tfoot>
            <tr class="print-total-row"><td colspan="4">Total (${detailKendaraan.length} Unit)</td><td class="num">Rp ${d.penghasilan}</td></tr>
          </tfoot>
        </table>
      `;
      window.print();
    }

    function hapusBarisHarian(button) {
      if (confirm("Yakin ingin menghapus data ini?")) {
        button.closest('tr').remove();
        updateSummaryCardsHarian();
      }
    }

    /* ======================================================= */
    /* ==================== TAB PER MINGGU ==================== */
    /* ======================================================= */
    const editModalMinggu = new bootstrap.Modal(document.getElementById('editModalMinggu'));
    const detailModalMinggu = new bootstrap.Modal(document.getElementById('detailModalMinggu'));

    function updateSummaryCardsMinggu() {
      const rows = document.querySelectorAll('#laporanTableMinggu tbody tr');
      let totalPendapatan = 0, totalKendaraan = 0;
      const jumlahMinggu = rows.length;

      rows.forEach(row => {
        const motor = parseInt(row.dataset.motor) || 0;
        const mobil = parseInt(row.dataset.mobil) || 0;
        const truk = parseInt(row.dataset.truk) || 0;
        const pickup = parseInt(row.dataset.pickup) || 0;

        totalKendaraan += (motor + mobil + truk + pickup);
        totalPendapatan += cleanNumber(row.cells[2].textContent);
      });

      const rataRata = jumlahMinggu > 0 ? Math.round(totalPendapatan / jumlahMinggu) : 0;
      const summaryCards = document.querySelectorAll('#tab-laporan-mingguan .surface-card h4');
      if (summaryCards.length >= 3) {
        summaryCards[0].textContent = 'Rp ' + formatRupiah(totalPendapatan);
        summaryCards[1].textContent = 'Rp ' + formatRupiah(rataRata);
        summaryCards[2].textContent = totalKendaraan + ' Unit';
      }
    }

    function showEditMinggu(button) {
      const row = button.closest('tr');
      const cells = row.querySelectorAll('td');

      document.getElementById('editMingguMinggu').value = cells[0].textContent;
      document.getElementById('editMotorMinggu').value = row.dataset.motor;
      document.getElementById('editMobilMinggu').value = row.dataset.mobil;
      document.getElementById('editTrukMinggu').value = row.dataset.truk;
      document.getElementById('editPickupMinggu').value = row.dataset.pickup;
      document.getElementById('editPenghasilanMinggu').value = cleanNumber(cells[2].textContent);
      document.getElementById('editIndexMinggu').value = row.rowIndex;

      editModalMinggu.show();
    }

    document.getElementById('editFormMinggu').addEventListener('submit', function(e) {
      e.preventDefault();

      const index = document.getElementById('editIndexMinggu').value;
      const table = document.getElementById('laporanTableMinggu');
      const row = table.rows[index];

      const minggu = document.getElementById('editMingguMinggu').value;
      const motor = parseInt(document.getElementById('editMotorMinggu').value) || 0;
      const mobil = parseInt(document.getElementById('editMobilMinggu').value) || 0;
      const truk = parseInt(document.getElementById('editTrukMinggu').value) || 0;
      const pickup = parseInt(document.getElementById('editPickupMinggu').value) || 0;
      const totalVolume = motor + mobil + truk + pickup;
      const inputPenghasilan = cleanNumber(document.getElementById('editPenghasilanMinggu').value);

      row.cells[0].textContent = minggu;
      row.cells[1].innerHTML = `<span class="badge bg-light text-dark pill-badge border">${totalVolume} Unit</span>`;
      row.cells[2].textContent = 'Rp ' + formatRupiah(inputPenghasilan);

      row.dataset.motor = motor;
      row.dataset.mobil = mobil;
      row.dataset.truk = truk;
      row.dataset.pickup = pickup;

      editModalMinggu.hide();
      updateSummaryCardsMinggu();
    });

    function showDetailMinggu(button) {
      const row = button.closest('tr');
      const cells = row.querySelectorAll('td');

      const motor = row.dataset.motor, mobil = row.dataset.mobil, truk = row.dataset.truk, pickup = row.dataset.pickup;
      const total = parseInt(motor) + parseInt(mobil) + parseInt(truk) + parseInt(pickup);

      document.getElementById('detailMingguMinggu').textContent = cells[0].textContent;
      document.getElementById('detailMotorMinggu').textContent = motor + " Unit";
      document.getElementById('detailMobilMinggu').textContent = mobil + " Unit";
      document.getElementById('detailTrukMinggu').textContent = truk + " Unit";
      document.getElementById('detailPickupMinggu').textContent = pickup + " Unit";
      document.getElementById('detailJumlahMinggu').textContent = total + " Kendaraan";
      document.getElementById('detailPenghasilanMinggu').textContent = cells[2].textContent.replace('Rp ', '');

      detailModalMinggu.show();
    }

    function hapusBarisMinggu(button) {
      if (confirm("Yakin ingin menghapus data ini?")) {
        button.closest('tr').remove();
        updateSummaryCardsMinggu();
      }
    }

    /* ======================================================= */
    /* ==================== TAB PER BULAN ===================== */
    /* ======================================================= */
    const editModalBulan = new bootstrap.Modal(document.getElementById('editModalBulan'));
    const detailModalBulan = new bootstrap.Modal(document.getElementById('detailModalBulan'));

    function showDetailBulan(button) {
      const row = button.closest('tr');

      const bulan = row.cells[0].textContent;
      const penghasilan = row.cells[2].textContent;
      const motor = row.getAttribute('data-motor');
      const mobil = row.getAttribute('data-mobil');
      const truk = row.getAttribute('data-truk');
      const pickup = row.getAttribute('data-pickup');
      const total = parseInt(motor) + parseInt(mobil) + parseInt(truk) + parseInt(pickup);

      document.getElementById('detailBulanBulan').textContent = bulan;
      document.getElementById('detailMotorBulan').textContent = motor;
      document.getElementById('detailMobilBulan').textContent = mobil;
      document.getElementById('detailTrukBulan').textContent = truk;
      document.getElementById('detailPickupBulan').textContent = pickup;
      document.getElementById('detailJumlahBulan').textContent = total + " Unit";
      document.getElementById('detailPenghasilanBulan').textContent = penghasilan;

      detailModalBulan.show();
    }

    function showEditBulan(button) {
      const row = button.closest('tr');
      const index = row.rowIndex;

      document.getElementById('editIndexBulan').value = index;
      document.getElementById('editBulanBulan').value = row.cells[0].textContent;
      document.getElementById('editMotorBulan').value = row.getAttribute('data-motor');
      document.getElementById('editMobilBulan').value = row.getAttribute('data-mobil');
      document.getElementById('editTrukBulan').value = row.getAttribute('data-truk');
      document.getElementById('editPickupBulan').value = row.getAttribute('data-pickup');
      document.getElementById('editPenghasilanBulan').value = row.cells[2].textContent;

      editModalBulan.show();
    }

    document.getElementById('editFormBulan').addEventListener('submit', function(e) {
      e.preventDefault();

      const index = document.getElementById('editIndexBulan').value;
      const table = document.getElementById('laporanTableBulan');
      const row = table.rows[index];

      const bulan = document.getElementById('editBulanBulan').value;
      const motor = parseInt(document.getElementById('editMotorBulan').value);
      const mobil = parseInt(document.getElementById('editMobilBulan').value);
      const truk = parseInt(document.getElementById('editTrukBulan').value);
      const pickup = parseInt(document.getElementById('editPickupBulan').value);
      const penghasilan = document.getElementById('editPenghasilanBulan').value;

      const total = motor + mobil + truk + pickup;

      row.cells[0].textContent = bulan;
      row.cells[1].textContent = total + " Unit";
      row.cells[2].textContent = penghasilan;

      row.setAttribute('data-motor', motor);
      row.setAttribute('data-mobil', mobil);
      row.setAttribute('data-truk', truk);
      row.setAttribute('data-pickup', pickup);

      editModalBulan.hide();
    });

    function hapusBarisBulan(button) {
      if (confirm("Yakin ingin menghapus data laporan bulanan ini secara permanen?")) {
        button.closest('tr').remove();
      }
    }

    /* ============ Inisialisasi Awal ============ */
    document.addEventListener('DOMContentLoaded', function() {
      updateSummaryCardsHarian();
      updateSummaryCardsMinggu();
    });
  </script>
</body>
</html>
