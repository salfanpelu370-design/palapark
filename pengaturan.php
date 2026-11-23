<?php $judul = 'Pengaturan Sistem - Aplikasi Parkir Modern'; include 'header.php'; ?>
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

    /* Modern Card Component */
    .surface-card {
      background: #ffffff;
      border-radius: 16px;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      padding: 28px;
    }

    /* Live Preview Struk (Fitur Biar Gak Polos) */
    .ticket-preview {
      background: #fff;
      border: 1px dashed #cbd5e1;
      border-radius: 8px;
      padding: 20px;
      font-family: 'Courier New', Courier, monospace;
      font-size: 13px;
      color: #334155;
      box-shadow: inset 0 0 10px rgba(0,0,0,0.02);
    }

    .form-control:focus, .form-select:focus {
      border-color: var(--gradient-primary-start);
      box-shadow: 0 0 0 0.25rem rgba(59, 91, 252, 0.15);
    }

    .btn-gradient {
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      color: white;
      border: none;
      font-weight: 500;
      transition: opacity 0.2s;
    }

    .btn-gradient:hover {
      color: white;
      opacity: 0.9;
    }

    /* Container QR Code agar presisi di tengah */
    #qrcode img {
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
        <div class="mb-4">
          <h3 class="mb-1 font-weight-bold">Pengaturan Sistem</h3>
          <p class="text-muted small mb-0">Konfigurasi parameter operasional, tarif, dan template karcis digital</p>
        </div>

        <div class="row g-4">
          <!-- Kolom Form Pengaturan -->
          <div class="col-12 col-lg-7">
            <div class="surface-card">
              <div class="d-flex align-items-center gap-2 mb-4 pb-2 border-bottom">
                <i class="fas fa-sliders text-primary fs-5"></i>
                <h5 class="fw-bold mb-0">Konfigurasi Parameter</h5>
              </div>
              
              <form id="settingsForm">
                <div class="row g-3 mb-3">
                  <div class="col-md-6">
                    <label class="form-label fw-medium small text-muted">Tarif Dasar Motor / Jam</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-end-0">Rp</span>
                      <input type="number" id="inputTarifMotor" class="form-control rounded-end-3" value="2000" placeholder="2000">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label fw-medium small text-muted">Tarif Dasar Mobil / Jam</label>
                    <div class="input-group">
                      <span class="input-group-text bg-light border-end-0">Rp</span>
                      <input type="number" id="inputTarifMobil" class="form-control rounded-end-3" value="5000" placeholder="5000">
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label fw-medium small text-muted">Durasi Maksimal Parkir (Jam)</label>
                  <input type="number" class="form-control rounded-3" value="24" placeholder="Contoh: 24">
                </div>

                <div class="mb-4">
                  <label class="form-label fw-medium small text-muted">Pesan Footer Struk Otomatis</label>
                  <textarea id="inputPesan" class="form-control rounded-3" rows="3" placeholder="Tulis pesan kaki nota tiket di sini...">Terima kasih telah menggunakan layanan parkir kami. Drive safely!</textarea>
                </div>

                <button type="submit" class="btn btn-gradient rounded-3 px-4 py-2"><i class="fas fa-save me-2"></i>Simpan Pengaturan</button>
              </form>
            </div>
          </div>

          <!-- Kolom Live Preview -->
          <div class="col-12 col-lg-5">
            <div class="surface-card">
              <div class="d-flex align-items-center gap-2 mb-3">
                <i class="fas fa-eye text-warning"></i>
                <h5 class="fw-bold mb-0">Live Preview Karcis</h5>
              </div>
              <p class="text-muted small mb-4">Pratinjau langsung bagaimana struk digital dicetak sistem</p>

              <div class="ticket-preview text-center">
                <div class="fw-bold fs-6 mb-1">=== TIKET PARKIR ===</div>
                <div class="mb-3 text-muted" style="font-size: 11px;">PARKIR MASTER STATION</div>
                <div class="text-start mb-3" style="line-height: 1.6;">
                  Kode  : <span class="fw-bold" id="ticketCode">PKR-9821-A</span><br>
                  Masuk : 29-06-2026 10:15<br>
                  Motor : Rp <span id="prevMotor">2000</span>/jam<br>
                  Mobil : Rp <span id="prevMobil">5000</span>/jam
                </div>
                
                <!-- QR Code Hasil Perbaikan -->
                <div class="my-3 py-2 bg-light d-inline-block p-3 border rounded text-center" style="min-width: 150px;">
                  <div id="qrcode" class="d-flex justify-content-center"></div>
                  <div class="small mt-2 text-muted" style="font-size: 10px; font-family: sans-serif;">SCAN TO CHECKOUT</div>
                </div>
                
                <div class="mt-2 border-top pt-3 text-center text-uppercase" id="prevPesan" style="font-size: 11px; white-space: pre-wrap;">Terima kasih telah menggunakan layanan parkir kami. Drive safely!</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

  <!-- Bootstrap JS (lokal) -->
  <?php include 'footer.php'; ?>
  
  <!-- CDN QRCode.js Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
  
  <!-- Script Sinkronisasi Live Preview & QR Generator -->
  <script>
    const inputMotor = document.getElementById('inputTarifMotor');
    const inputMobil = document.getElementById('inputTarifMobil');
    const inputPesan = document.getElementById('inputPesan');

    const prevMotor = document.getElementById('prevMotor');
    const prevMobil = document.getElementById('prevMobil');
    const prevPesan = document.getElementById('prevPesan');
    const ticketCode = document.getElementById('ticketCode').innerText;

    // Listener realtime update preview
    inputMotor.addEventListener('input', () => prevMotor.textContent = inputMotor.value || '0');
    inputMobil.addEventListener('input', () => prevMobil.textContent = inputMobil.value || '0');
    inputPesan.addEventListener('input', () => prevPesan.textContent = inputPesan.value || '...');

    // Inisialisasi QR Code asli menggunakan library QRCode.js
    const qrcodeContainer = document.getElementById("qrcode");
    const qrcode = new QRCode(qrcodeContainer, {
      text: ticketCode,
      width: 110,
      height: 110,
      colorDark : "#000000",
      colorLight : "#ffffff",
      correctLevel : QRCode.CorrectLevel.H
    });

    document.getElementById('settingsForm').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Konfigurasi sistem berhasil diperbarui!');
    });
  </script>
</body>
</html>