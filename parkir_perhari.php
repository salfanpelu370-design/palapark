<?php $judul = 'Data Parkir - Per Hari'; include 'header.php'; ?>
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
          <h3 class="mb-1 font-weight-bold">Data Parkir Per Hari</h3>
          <p class="text-muted small mb-0">Audit riwayat keluar-masuk internal kendaraan operasional maupun tamu harian secara real-time</p>
        </div>

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
    </main>
  </div>

  <script>
    const dataParkir = [
      { nama: 'Andi Pratama', plat: 'PB 1234 XY', jenis: 'Mobil', masuk: '2025-07-15T08:30', keluar: '2025-07-15T12:45', foto: 'asset/mobil.jpg' },
      { nama: 'Rina Putri', plat: 'PB 9876 ZZ', jenis: 'Motor', masuk: '2025-07-15T08:30', keluar: '2025-07-16T13:30', foto: 'asset/motor.png' },
      { nama: 'Budi Santoso', plat: 'PB 5678 TR', jenis: 'Truk', masuk: '2025-07-15T08:30', keluar: '2025-08-17T09:30', foto: 'asset/truk.png' },
      { nama: 'Siti Nurhaliza', plat: 'PB 3210 AB', jenis: 'Mobil', masuk: '2025-08-04T08:30', keluar: '2025-07-18T14:00', foto: 'asset/mobil.png' },
      { nama: 'Dedi Kurniawan', plat: 'PB 2233 CD', jenis: 'Motor', masuk: '2025-08-04T08:30', keluar: '2025-07-15T11:30', foto: 'asset/motor.png' },
      { nama: 'Lina Marlina', plat: 'PB 4455 EF', jenis: 'Truk', masuk: '2025-08-04T08:30', keluar: '2025-07-17T13:00', foto: 'asset/truk.png' },
      { nama: 'Joko Supriyanto', plat: 'PB 8899 GH', jenis: 'Pick Up', masuk: '2025-08-04T08:30', keluar: '2025-07-15T12:00', foto: 'asset/pickup.png' }
    ];

    function filterData() {
      const tanggalInput = document.getElementById('tanggal').value;
      const tbody = document.getElementById('tabelParkir');
      tbody.innerHTML = '';

      if (!tanggalInput) {
        tbody.innerHTML = '<tr><td colspan="7" class="text-center py-4 text-muted small">Silakan pilih tanggal di atas untuk memuat log harian parkir.</td></tr>';
        return;
      }

      const dataFiltered = dataParkir.filter(item => item.masuk.slice(0,10) === tanggalInput);

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
  </script>

  <?php include 'footer.php'; ?>
</body>
</html>
