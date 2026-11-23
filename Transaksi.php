<?php $judul = 'Invoice - Sistem Parkir Modern'; include 'header.php'; ?>
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
      --accent-orange-hover: #E66925;
      --bg-content: #F6F8FD;
      --text-dark: #1A1D29;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-content);
      color: var(--text-dark);
      overflow-x: hidden;
    }

    h3, h4, h5, h6, .brand-text {
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

    /* Modern Card Styles */
    .surface-card {
      background: #ffffff;
      border-radius: 16px;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      padding: 24px;
    }

    /* Desain Lembaran Cetak Invoice */
    .invoice-paper {
      background: #ffffff;
      border: 1px dashed #cbd5e1;
      border-radius: 16px;
      padding: 40px;
      max-width: 760px;
      margin: 0 auto;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .vehicle-photo {
      max-width: 220px;
      height: auto;
      border-radius: 12px;
      border: 1px solid #e2e8f0;
      padding: 4px;
      background: #f8fafc;
    }

    .form-label {
      font-size: 13px;
      font-weight: 500;
      color: #64748b;
    }

    .form-control, .form-select {
      border-radius: 10px;
      padding: 10px 14px;
      font-size: 14px;
      border: 1px solid #cbd5e1;
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--gradient-primary-start);
      box-shadow: 0 0 0 3px rgba(59, 91, 252, 0.15);
    }

    .btn-orange {
      background: var(--accent-orange);
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 500;
      transition: all 0.2s;
    }

    .btn-orange:hover {
      background: var(--accent-orange-hover);
      color: white;
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
          <h3 class="mb-1 fw-bold">Buat Invoice Baru</h3>
          <p class="text-muted small">Input data transaksi untuk menerbitkan lembaran tagihan resmi pelanggan</p>
        </div>

        <!-- Form Input -->
        <div class="surface-card mb-5">
          <form id="invoiceForm">
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama" placeholder="Contoh: Budi Santoso" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Plat Nomor</label>
                <input type="text" class="form-control" id="plat" placeholder="Contoh: B 1234 ABC" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">Jenis Kendaraan</label>
                <select class="form-select" id="jenis" required>
                  <option value="motor">Motor</option>
                  <option value="mobil">Mobil</option>
                  <option value="truk">Truk</option>
                  <option value="pickup">Pick Up</option> 
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Tanggal & Jam Masuk</label>
                <input type="datetime-local" class="form-control" id="masuk" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Tanggal & Jam Keluar</label>
                <input type="datetime-local" class="form-control" id="keluar" required>
              </div>
            </div>
            <div class="text-end mt-4">
              <button type="submit" class="btn btn-orange px-4"><i class="fas fa-receipt me-2"></i>Tampilkan Invoice</button>
            </div>
          </form>
        </div>

        <!-- Box Print Lembar Invoice (Awalnya Sembunyi) -->
        <div class="invoice-paper" id="invoice" style="display:none">
          <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
            <div>
              <h5 class="fw-bold mb-1 text-primary">INVOICE PEMBAYARAN</h5>
              <small class="text-muted">Sistem Manajemen Parkir Digital</small>
            </div>
            <div class="text-end">
              <span class="badge bg-success-subtle text-success border border-success-subtle rounded-3 px-3 py-2">LUNAS</span>
            </div>
          </div>

          <div class="row g-4 mb-4">
            <div class="col-md-6">
              <p class="mb-1 text-muted small">Detail Pelanggan:</p>
              <h6 class="fw-bold mb-1" id="outNama"></h6>
              <p class="mb-0 text-secondary small">No. Plat: <span class="fw-medium text-dark" id="outPlat"></span></p>
              <p class="mb-0 text-secondary small">Tipe Unit: <span class="fw-medium text-dark" id="outJenis"></span></p>
            </div>
            <div class="col-md-6 text-md-end">
              <p class="mb-1 text-muted small">Waktu Transaksi:</p>
              <p class="mb-0 text-secondary small">Masuk: <span class="text-dark" id="outMasuk"></span></p>
              <p class="mb-0 text-secondary small">Keluar: <span class="text-dark" id="outKeluar"></span></p>
              <p class="mb-0 text-secondary small fw-medium text-primary">Durasi: <span id="outDurasi"></span></p>
            </div>
          </div>

          <!-- Preview Gambar Visual Kendaraan -->
          <div class="text-center bg-light rounded-4 py-3 mb-4">
            <img id="vehicleImage" src="" alt="Foto Kendaraan" class="vehicle-photo" />
          </div>

          <!-- Rincian Biaya -->
          <div class="table-responsive">
            <table class="table table-borderless align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th class="ps-3 py-2 small fw-semibold text-muted">Deskripsi Layanan</th>
                  <th class="pe-3 py-2 small fw-semibold text-muted text-end">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-bottom">
                  <td class="ps-3 py-3">
                    <h6 class="mb-0 fw-medium">Tarif Parkir Rutin</h6>
                    <small class="text-muted">Dihitung berdasarkan durasi tinggal unit</small>
                  </td>
                  <td class="pe-3 py-3 text-end fw-medium" id="outBiaya">Rp 0</td>
                </tr>
                <tr class="border-bottom">
                  <td class="ps-3 py-3">
                    <h6 class="mb-0 fw-medium">Denda Keterlambatan / Kehilangan</h6>
                    <small class="text-muted">Tidak ada pelanggaran berkas</small>
                  </td>
                  <td class="pe-3 py-3 text-end fw-medium text-secondary">Rp 0</td>
                </tr>
                <tr>
                  <td class="ps-3 py-3 font-weight-bold text-dark h6 fw-bold">Total Pembayaran</td>
                  <td class="pe-3 py-3 text-end text-primary h5 fw-bold" id="outTotal">Rp 0</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="text-center mt-5 pt-3 border-top">
            <p class="text-muted small mb-1"><em>Terima kasih telah mempercayakan kendaraan Anda pada layanan kami.</em></p>
            <p class="fw-semibold small mb-0 text-secondary">Manajemen Korporat Parkir Master</p>
          </div>
        </div>

        <!-- Tombol Aksi Cetak PDF -->
        <div class="text-center mt-4 mb-5">
          <button class="btn btn-primary px-4 py-2 rounded-3 shadow-sm" onclick="downloadPDF()" style="display:none" id="downloadBtn">
            <i class="fas fa-download me-2"></i>Unduh Berkas PDF
          </button>
        </div>

      </div>
    </main>
  </div>

  <!-- JavaScript Libraries & Core Engine -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <?php include 'footer.php'; ?>
  <script>
    document.getElementById('invoiceForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const nama = document.getElementById('nama').value;
      const plat = document.getElementById('plat').value;
      const jenis = document.getElementById('jenis').value;
      const masuk = new Date(document.getElementById('masuk').value);
      const keluar = new Date(document.getElementById('keluar').value);

      const durasiMs = keluar - masuk;
      const durasiJam = Math.max(Math.floor(durasiMs / (1000 * 60 * 60)), 1); 
      const durasiMenit = Math.floor((durasiMs % (1000 * 60 * 60)) / (1000 * 60));
      const durasiText = `${durasiJam} Jam ${durasiMenit} Menit`;

      let biaya = 0;
      if (jenis === 'motor') biaya = durasiJam * 2000;
      else if (jenis === 'mobil') biaya = durasiJam * 5000;
      else if (jenis === 'truk') biaya = durasiJam * 10000;
      else if (jenis === 'pickup') biaya = durasiJam * 8000;

      document.getElementById('outNama').textContent = nama;
      document.getElementById('outPlat').textContent = plat;
      document.getElementById('outJenis').textContent = jenis.charAt(0).toUpperCase() + jenis.slice(1);
      document.getElementById('outMasuk').textContent = masuk.toLocaleString('id-ID', { dateStyle: 'medium', timeStyle: 'short' });
      document.getElementById('outKeluar').textContent = keluar.toLocaleString('id-ID', { dateStyle: 'medium', timeStyle: 'short' });
      document.getElementById('outDurasi').textContent = durasiText;
      document.getElementById('outBiaya').textContent = `Rp ${biaya.toLocaleString('id-ID')}`;
      document.getElementById('outTotal').textContent = `Rp ${biaya.toLocaleString('id-ID')}`;

      document.getElementById('vehicleImage').src = `asset/${jenis}.png`;

      document.getElementById('invoice').style.display = 'block';
      document.getElementById('downloadBtn').style.display = 'inline-block';
      
      // Auto-scroll halus ke area struk invoice
      document.getElementById('invoice').scrollIntoView({ behavior: 'smooth' });
    });

    function downloadPDF() {
      const element = document.getElementById('invoice');
      const options = {
        margin: [0.3, 0.3, 0.3, 0.3],
        filename: 'invoice_parkir_digital.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2.5, useCORS: true },
        jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
      };
      html2pdf().set(options).from(element).save();
    }
  </script>
</body>
</html>