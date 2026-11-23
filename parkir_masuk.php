<?php $judul = 'Daftar Parkir - Masuk'; include 'header.php'; ?>
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

    .form-control-modern {
      border-radius: 10px;
      padding: 10px 14px;
      border: 1px solid #e2e8f0;
    }
    .form-control-modern:focus {
      border-color: var(--gradient-primary-start);
      box-shadow: 0 0 0 3px rgba(59, 91, 252, 0.1);
    }
    
    .btn-gradient {
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      color: white;
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-weight: 500;
      transition: opacity 0.2s;
    }
    .btn-gradient:hover {
      color: white;
      opacity: 0.9;
    }

    .qr-inline-box {
      border: 1px dashed #cbd5e1;
      border-radius: 8px;
      background: #f8fafc;
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      padding: 6px;
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
          <h3 class="mb-1 font-weight-bold">Parkir Masuk</h3>
          <p class="text-muted small mb-0">Registrasi tanda masuk armada logistik dan kendaraan pengunjung komplek area parkir</p>
        </div>

        <!-- Form Card Input -->
        <div class="surface-card mb-4">
          <form id="formParkir" class="row g-3 align-items-end">
            <div class="col-md-3">
              <label class="form-label fw-medium text-secondary small">Plat Nomor</label>
              <input type="text" class="form-control form-control-modern" id="platNomor" placeholder="Contoh: PB 1234 AB" required />
            </div>
            <div class="col-md-3">
              <label class="form-label fw-medium text-secondary small">Jenis Kendaraan</label>
              <select class="form-select form-control-modern" id="jenisKendaraan" required>
                <option selected disabled value="">Pilih...</option>
                <option>Mobil</option>
                <option>Motor</option>
                <option>Truk</option>
                <option>Pick Up</option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label fw-medium text-secondary small">Foto Kendaraan</label>
              <input type="file" class="form-control form-control-modern" id="fotoKendaraan" accept="image/*" required />
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-gradient w-100"><i class="fas fa-save me-2"></i>Simpan</button>
            </div>
          </form>
        </div>

        <!-- Tabel Log Data Masuk -->
        <div class="surface-card p-0 overflow-hidden">
          <div class="px-4 pt-4 pb-2">
            <h5 class="fw-bold mb-0 text-dark">Daftar Kendaraan Masuk</h5>
          </div>
          <div class="table-responsive">
            <table class="table table-modern table-hover mb-0" id="tabelKendaraan">
              <thead>
                <tr>
                  <th style="width:60px;">No</th>
                  <th style="width:110px;">Foto</th>
                  <th>Plat Nomor</th>
                  <th>Jenis</th>
                  <th>Waktu Masuk</th>
                  <th style="width:200px;">Sistem QR Token</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-secondary fw-medium">1</td>
                  <td><img src="asset/mobil.webp" alt="Mobil" class="vehicle-photo" onerror="this.src='https://via.placeholder.com/70x44?text=Mobil'" /></td>
                  <td class="fw-semibold text-dark">B 1234 XYZ</td>
                  <td><span class="badge bg-primary-subtle text-primary pill-badge">Mobil</span></td>
                  <td class="text-secondary small">2025-07-18 08:30</td>
                  <td><span class="text-muted small italic">Sistem Bawaan</span></td>
                </tr>
                <tr>
                  <td class="text-secondary fw-medium">2</td>
                  <td><img src="asset/motor.webp" alt="Motor" class="vehicle-photo" onerror="this.src='https://via.placeholder.com/70x44?text=Motor'" /></td>
                  <td class="fw-semibold text-dark">PB 5678 KK</td>
                  <td><span class="badge bg-warning-subtle text-warning pill-badge">Motor</span></td>
                  <td class="text-secondary small">2025-07-18 09:00</td>
                  <td><span class="text-muted small italic">Sistem Bawaan</span></td>
                </tr>
                <tr>
                  <td class="text-secondary fw-medium">3</td>
                  <td><img src="asset/truck.webp" alt="Truk" class="vehicle-photo" onerror="this.src='https://via.placeholder.com/70x44?text=Truk'" /></td>
                  <td class="fw-semibold text-dark">PC 9012 ZZ</td>
                  <td><span class="badge bg-danger-subtle text-danger pill-badge">Truk</span></td>
                  <td class="text-secondary small">2025-07-18 09:15</td>
                  <td><span class="text-muted small italic">Sistem Bawaan</span></td>
                </tr>
                <tr>
                  <td class="text-secondary fw-medium">4</td>
                  <td><img src="asset/pickup.webp" alt="Pick Up" class="vehicle-photo" onerror="this.src='https://via.placeholder.com/70x44?text=PickUp'" /></td>
                  <td class="fw-semibold text-dark">PD 3456 TT</td>
                  <td><span class="badge bg-info-subtle text-info pill-badge">Pick Up</span></td>
                  <td class="text-secondary small">2025-07-18 09:40</td>
                  <td><span class="text-muted small italic">Sistem Bawaan</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </main>
  </div>

  <!-- JS Lokal -->
  <?php include 'footer.php'; ?>

  <!-- QR Generator Engine CDN -->
  <script src="https://cdn.jsdelivr.net/npm/qrcode@1.5.4/build/qrcode.min.js"></script>

  <script>
    let counter = 5;

    document.getElementById("formParkir").addEventListener("submit", function(e) {
      e.preventDefault();

      const plat = document.getElementById("platNomor").value.trim().toUpperCase();
      const jenis = document.getElementById("jenisKendaraan").value;
      const waktuMasukDate = new Date();
      
      const waktuMasukStr = waktuMasukDate.toLocaleString("id-ID", {
        year: "numeric", month: "2-digit", day: "2-digit",
        hour: "2-digit", minute: "2-digit"
      });

      const token = `PARKIR|${waktuMasukDate.getTime()}|${counter}|${plat.replace(/\s+/g,'')}`;
      const fotoFile = document.getElementById("fotoKendaraan").files[0];

      if (!fotoFile) {
        alert("Silakan unggah foto kendaraan!");
        return;
      }

      const reader = new FileReader();
      reader.onload = function(event) {
        const table = document.querySelector("#tabelKendaraan tbody");
        const newRow = document.createElement("tr");
        
        const badgeClass = jenis === "Truk" ? "bg-danger-subtle text-danger" : 
                           jenis === "Motor" ? "bg-warning-subtle text-warning" : 
                           jenis === "Pick Up" ? "bg-info-subtle text-info" : "bg-primary-subtle text-primary";

        newRow.innerHTML = `
          <td class="text-secondary fw-medium">${counter}</td>
          <td><img src="${event.target.result}" alt="Foto Kendaraan" class="vehicle-photo" /></td>
          <td class="fw-semibold text-dark">${plat}</td>
          <td><span class="badge ${badgeClass} pill-badge">${jenis}</span></td>
          <td class="text-secondary small">${waktuMasukStr}</td>
          <td>
            <div class="qr-inline-box">
              <span class="text-muted mb-1" style="font-size:10px; font-weight:600;">TOKEN GENERATED</span>
              <canvas id="canvas-${counter}" style="width:85px; height:85px; background:#fff; border-radius:4px;"></canvas>
            </div>
          </td>
        `;
        table.appendChild(newRow);

        // Render QR Code pada Canvas yang baru dipasang
        const canvasEl = document.getElementById(`canvas-${counter}`);
        if (canvasEl && window.QRCode) {
          window.QRCode.toCanvas(
            canvasEl,
            token,
            { width: 85, margin: 1, errorCorrectionLevel: 'M' },
            function(err) {
              if (err) console.error('QR render error:', err);
            }
          );
        }

        counter++;
        alert("Data berhasil disimpan!");
        document.getElementById("formParkir").reset();
      };
      reader.readAsDataURL(fotoFile);
    });
  </script>
</body>
</html>