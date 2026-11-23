<?php $judul = 'Transaksi - Pembayaran Parkir'; include 'header.php'; ?>
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

    h1, h2, h3, h4, h5, h6, .brand-text, .modal-title {
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
      padding: 32px;
    }

    .form-control-modern {
      border-radius: 10px;
      padding: 12px 16px;
      border: 1px solid #e2e8f0;
      font-weight: 500;
    }
    .form-control-modern:focus {
      border-color: var(--gradient-primary-start);
      box-shadow: 0 0 0 3px rgba(59, 91, 252, 0.1);
    }

    .btn-gradient {
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      border: none;
      color: white;
      padding: 12px 24px;
      border-radius: 10px;
      font-weight: 600;
      transition: all 0.2s;
    }
    .btn-gradient:hover {
      opacity: 0.9;
      color: white;
      box-shadow: 0 4px 12px rgba(59, 91, 252, 0.2);
    }

    /* Modal / Pop-up Custom Styling */
    .modal-content-modern {
      border-radius: 20px;
      border: none;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      padding: 10px;
    }
    .garis-nota {
      border: none;
      border-top: 2px dashed #e2e8f0;
      margin: 18px 0;
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
          <h3 class="mb-1 font-weight-bold">Pembayaran Parkir</h3>
          <p class="text-muted small mb-0">Kasir kalkulator digital penentu rincian nominal tarif retribusi parkir real-time</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <!-- Form Card Modern Berpusat -->
            <div class="surface-card">
              <form id="paymentForm">
                <div class="mb-4">
                  <label for="platNomor" class="form-label fw-semibold text-secondary small">Plat Nomor Kendaraan</label>
                  <input type="text" id="platNomor" class="form-control form-control-modern text-uppercase fs-5" placeholder="Contoh: PB 1234 XY" required>
                </div>
                
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <label for="jamMasuk" class="form-label fw-semibold text-secondary small">Jam Masuk</label>
                    <div class="input-group">
                      <span class="input-group-text bg-white border-end-0 text-muted"><i class="far fa-clock"></i></span>
                      <!-- REVISI: Input jamMasuk sekarang otomatis terisi waktu saat ini -->
                      <input type="time" id="jamMasuk" class="form-control form-control-modern border-start-0" required>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="jamKeluar" class="form-label fw-semibold text-secondary small">Jam Keluar</label>
                    <div class="input-group">
                      <span class="input-group-text bg-white border-end-0 text-muted"><i class="far fa-clock"></i></span>
                      <input type="time" id="jamKeluar" class="form-control form-control-modern border-start-0" required>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-gradient w-100 py-3 mt-2 fs-6">
                  <i class="fas fa-calculator me-2"></i>Hitung & Buat Invoice
                </button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

  <!-- MODAL ELEMENT (POP-UP STRUK INVOICE) -->
  <div class="modal fade" id="invoiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content modal-content-modern">
        <div class="modal-header border-0 pb-0">
          <h5 class="modal-title fw-bold text-primary" style="color: var(--gradient-primary-start) !important;">
            <i class="fas fa-receipt me-2"></i>Invoice Transaksi
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-4">
          <!-- Area Konten Dinamis dari JavaScript -->
          <div id="modalInvoiceBody"></div>
        </div>
        <div class="modal-footer border-0 pt-0">
          <!-- FIX: Tombol "Cetak Struk" dipindahkan ke halaman Operator.
               Halaman admin ini hanya menampilkan kalkulasi/invoice,
               karena struk fisik diberikan oleh operator ke pengguna parkir. -->
          <button type="button" class="btn btn-light w-100 m-0" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Lokal Bundle -->
  <?php include 'footer.php'; ?>

  <!-- Script Engine -->
  <script>
    // REVISI: Fungsi otomatis set waktu sekarang ke input Jam Masuk saat halaman di-load
    window.addEventListener("DOMContentLoaded", function() {
      const sekarang = new Date();
      const jam = String(sekarang.getHours()).padStart(2, '0');
      const menit = String(sekarang.getMinutes()).padStart(2, '0');
      document.getElementById("jamMasuk").value = `${jam}:${menit}`;
    });

    document.getElementById("paymentForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const plat = document.getElementById("platNomor").value.toUpperCase();
      const masuk = document.getElementById("jamMasuk").value;
      const keluar = document.getElementById("jamKeluar").value;

      const masukDate = new Date("1970-01-01T" + masuk + ":00");
      const keluarDate = new Date("1970-01-01T" + keluar + ":00");

      let diff = (keluarDate - masukDate) / (1000 * 60 * 60);
      if (diff < 0) diff += 24;

      const tarifPerJam = 2000;
      const total = Math.ceil(diff) * tarifPerJam;

      // Isi komponen di dalam modal secara real-time
      document.getElementById("modalInvoiceBody").innerHTML = `
        <div class="px-2">
          <div class="d-flex justify-content-between mb-3 text-dark fw-medium">
            <span><i class="fas fa-car-side me-2 opacity-50"></i>Plat Nomor:</span>
            <span class="fw-bold text-dark text-uppercase">${plat}</span>
          </div>
          <div class="d-flex justify-content-between mb-3 text-dark fw-medium">
            <span><i class="far fa-clock me-2 opacity-50"></i>Waktu Parkir:</span>
            <span class="text-muted small">${masuk} s/d ${keluar}</span>
          </div>
          <div class="d-flex justify-content-between mb-3 text-dark fw-medium">
            <span><i class="fas fa-history me-2 opacity-50"></i>Durasi Parkir:</span>
            <span class="fw-bold text-dark">${diff.toFixed(2)} Jam</span>
          </div>
          
          <hr class="garis-nota">
          
          <div class="d-flex justify-content-between align-items-center my-2">
            <span class="fw-bold text-dark fs-6">Total Tagihan:</span>
            <span class="fs-3 fw-bold" style="color: var(--gradient-primary-end);">Rp ${total.toLocaleString('id-ID')}</span>
          </div>

          <p class="text-muted small text-center mt-3 mb-0">
            <i class="fas fa-info-circle me-1"></i>Struk fisik dicetak oleh operator di halaman Operator.
          </p>
        </div>
      `;

      // Trigger memunculkan Pop-up Bootstrap Modal
      var myModal = new bootstrap.Modal(document.getElementById('invoiceModal'));
      myModal.show();
    });
  </script>
</body>
</html>