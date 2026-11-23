<?php $judul = 'Tambah Operator - Sistem Parkir Modern'; include 'header.php'; ?>
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

    .app-container { display: flex; min-height: 100vh; }

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

    .sidebar .dropdown-item { color: #a3b1cc; padding: 10px 24px 10px 48px; font-size: 14px; }
    .sidebar .dropdown-item:hover, .sidebar .dropdown-item.active { background: var(--bg-sidebar-hover); color: #fff; }

    .main-content { flex: 1; padding: 30px; transition: all 0.3s ease; }

    .surface-card {
      background: #ffffff;
      border-radius: 16px;
      border: none;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
      padding: 24px;
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
    .table-modern tbody td { padding: 14px 16px; border-bottom: 1px solid #f1f5f9; vertical-align: middle; }

    .btn-primary-custom {
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      border: none;
      color: #fff;
      font-weight: 600;
    }
    .btn-primary-custom:hover { color: #fff; opacity: 0.92; }

    .btn-action {
      width: 32px; height: 32px; padding: 0;
      display: inline-flex; align-items: center; justify-content: center;
      border-radius: 8px;
    }

    .avatar-circle {
      width: 40px; height: 40px; border-radius: 50%;
      background: rgba(59, 91, 252, 0.1); color: var(--gradient-primary-start);
      display: flex; align-items: center; justify-content: center;
      font-weight: 700; font-size: 15px;
    }

    .status-pill {
      padding: 4px 12px; border-radius: 50px; font-size: 12px; font-weight: 600;
    }
    .status-aktif { background: rgba(16,185,129,0.1); color: #10B981; }
    .status-nonaktif { background: rgba(239,68,68,0.1); color: #EF4444; }

    .sidebar .nav-link{ display:flex; align-items:center; gap:14px; padding:12px 20px; font-size:16px; font-weight:500; }
    .sidebar .nav-link i{ width:24px; min-width:24px; text-align:center; font-size:18px; }
    .sidebar .nav-link span{ flex:1; }
    .sidebar .dropdown-toggle::after{ margin-left:auto; }
    .sidebar .dropdown-menu{ position: static !important; inset: auto !important; transform: none !important; float: none; width: 100%; margin-left: 0; padding-left: 35px; box-shadow: none; border-radius: 0; }
  
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
    html, body { height: 100%; overflow: hidden; }
    .app-container { height: 100vh; }
    .sidebar { position: sticky; top: 0; align-self: flex-start; height: 100vh; overflow-y: auto; }
    .main-content { padding: 18px 26px !important; height: 100vh; overflow-y: auto; display: flex; flex-direction: column; }

    /* === FIX Revisi 3: halaman Kelola Operator digabung jadi SATU LEMBAR
       (form & tabel di dalam satu kartu, tanpa pembatas kolom kiri/kanan),
       dan dipastikan muat 1 layar penuh tanpa scroll halaman.
       Kalau daftar operator bertambah banyak, hanya ISI TABEL yang scroll
       (bukan seluruh halaman) supaya tampilan tetap terasa "satu layar". === */
    #tambahOperatorRow { flex: 1; min-height: 0; }
    #tambahOperatorRow .table-responsive { flex: 1; overflow-y: auto; }
  
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
      <div class="container-fluid p-0 d-flex flex-column" style="height:100%;">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div>
            <h3 class="mb-1 font-weight-bold">Tambah Operator</h3>
            <p class="text-muted small mb-0">Kelola akun Operator gerbang masuk &amp; keluar (Admin dapat menambah lebih dari satu operator)</p>
          </div>
        </div>

        <!-- FORM + DAFTAR OPERATOR DIGABUNG JADI SATU LEMBAR (tanpa kolom kiri/kanan) -->
        <div class="surface-card p-0 overflow-hidden d-flex flex-column" id="tambahOperatorRow">
          <div class="px-4 pt-4 pb-3">
            <h5 class="fw-bold mb-3"><i class="fas fa-user-plus me-2 text-primary"></i>Form Operator Baru</h5>
            <form id="formOperator" class="row g-3 align-items-end">
              <input type="hidden" id="editIndex" value="">

              <div class="col-6 col-lg-2">
                <label class="form-label small fw-semibold mb-1">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaOperator" placeholder="Budi Santoso" required>
              </div>

              <div class="col-6 col-lg-2">
                <label class="form-label small fw-semibold mb-1">Username</label>
                <input type="text" class="form-control" id="usernameOperator" placeholder="budi.operator" required>
              </div>

              <div class="col-6 col-lg-2">
                <label class="form-label small fw-semibold mb-1">Password</label>
                <input type="password" class="form-control" id="passwordOperator" placeholder="Min 6 karakter" required minlength="6">
              </div>

              <div class="col-6 col-lg-2">
                <label class="form-label small fw-semibold mb-1">Gerbang</label>
                <select class="form-select" id="gerbangOperator" required>
                  <option value="Masuk">Gerbang Masuk</option>
                  <option value="Keluar">Gerbang Keluar</option>
                  <option value="Masuk & Keluar">Masuk &amp; Keluar</option>
                </select>
              </div>

              <div class="col-6 col-lg-2">
                <label class="form-label small fw-semibold mb-1">Status</label>
                <select class="form-select" id="statusOperator">
                  <option value="Aktif">Aktif</option>
                  <option value="Nonaktif">Nonaktif</option>
                </select>
              </div>

              <div class="col-6 col-lg-2 d-flex gap-2">
                <button type="submit" class="btn btn-primary-custom flex-grow-1 py-2" id="btnSubmitOperator">
                  <i class="fas fa-plus me-1"></i> Tambah
                </button>
              </div>

              <div class="col-12">
                <button type="button" class="btn btn-light border btn-sm d-none" id="btnBatalEdit" onclick="batalEdit()">
                  Batal Edit
                </button>
              </div>
            </form>
          </div>

          <hr class="m-0">

          <div class="px-4 pt-3 pb-2 d-flex justify-content-between align-items-center">
            <h5 class="fw-bold mb-0">Daftar Operator (<span id="jumlahOperator">0</span>)</h5>
          </div>
          <div class="table-responsive">
            <table class="table table-modern table-hover mb-0">
              <thead>
                <tr>
                  <th>Operator</th>
                  <th>Username</th>
                  <th>Gerbang</th>
                  <th>Status</th>
                  <th class="text-end">Aksi</th>
                </tr>
              </thead>
              <tbody id="tabelOperator">
                <!-- Diisi otomatis via JS -->
              </tbody>
            </table>
          </div>
          <div id="emptyState" class="text-center text-muted py-5 d-none">
            <i class="fas fa-user-slash fa-2x mb-2"></i>
            <p class="mb-0">Belum ada operator. Tambahkan operator pertama lewat form di atas.</p>
          </div>
        </div>


      </div>
    </main>
  </div>

  <!-- Bootstrap JS Lokal -->
  <?php include 'footer.php'; ?>

  <script>
    // ============================================================
    // Data operator disimpan di localStorage agar konsisten dengan
    // pola penyimpanan data lain yang sudah dipakai di aplikasi ini
    // (namaLogin / roleLogin), dan tetap ada walau halaman di-refresh.
    // Key: "daftarOperator" -> array of { nama, username, password, gerbang, status }
    // ============================================================
    const KEY_OPERATOR = 'daftarOperator';

    // FIX Revisi 3: Tabel "Daftar Operator" harus menampilkan operator yang
    // SUDAH TERDAFTAR lebih dulu (bukan tabel kosong / hanya formulir).
    // Data contoh ini dipakai sebagai isi awal saat belum ada data tersimpan.
    // Formulir "Tambah Operator" selanjutnya hanya MENAMBAHKAN data baru ke
    // dalam daftar ini (push ke array), tidak menimpa data yang sudah ada.
    const OPERATOR_SEED = [
      { nama: 'Budi Santoso', username: 'budi.operator', password: 'budi123', gerbang: 'Masuk', status: 'Aktif' },
      { nama: 'Siti Nurhaliza', username: 'siti.operator', password: 'siti123', gerbang: 'Keluar', status: 'Aktif' },
      { nama: 'Dedi Kurniawan', username: 'dedi.operator', password: 'dedi123', gerbang: 'Masuk & Keluar', status: 'Nonaktif' }
    ];

    function ambilOperator() {
      const raw = localStorage.getItem(KEY_OPERATOR);
      if (raw === null) {
        // Belum pernah ada data tersimpan sebelumnya -> isi tabel dengan
        // data operator contoh yang sudah terdaftar, supaya modul admin
        // ini tidak menampilkan tabel kosong sejak awal.
        simpanOperator(OPERATOR_SEED);
        return OPERATOR_SEED.slice();
      }
      return JSON.parse(raw || '[]');
    }

    function simpanOperator(list) {
      localStorage.setItem(KEY_OPERATOR, JSON.stringify(list));
    }

    function inisial(nama) {
      return nama.trim().split(/\s+/).map(w => w[0]).slice(0, 2).join('').toUpperCase();
    }

    function renderTabelOperator() {
      const list = ambilOperator();
      const tbody = document.getElementById('tabelOperator');
      const emptyState = document.getElementById('emptyState');
      document.getElementById('jumlahOperator').innerText = list.length;

      if (list.length === 0) {
        tbody.innerHTML = '';
        emptyState.classList.remove('d-none');
        return;
      }
      emptyState.classList.add('d-none');

      tbody.innerHTML = list.map((op, i) => `
        <tr>
          <td>
            <div class="d-flex align-items-center gap-2">
              <div class="avatar-circle">${inisial(op.nama)}</div>
              <div>
                <div class="fw-semibold">${op.nama}</div>
                <div class="text-muted small">Password: ${'•'.repeat(Math.max(6, op.password.length))}</div>
              </div>
            </div>
          </td>
          <td>${op.username}</td>
          <td><span class="badge bg-light text-dark border">${op.gerbang}</span></td>
          <td><span class="status-pill ${op.status === 'Aktif' ? 'status-aktif' : 'status-nonaktif'}">${op.status}</span></td>
          <td class="text-end">
            <button class="btn btn-light btn-action text-warning me-1" onclick="editOperator(${i})" title="Edit"><i class="fas fa-edit"></i></button>
            <button class="btn btn-light btn-action text-danger" onclick="hapusOperator(${i})" title="Hapus"><i class="fas fa-trash-alt"></i></button>
          </td>
        </tr>
      `).join('');
    }

    document.getElementById('formOperator').addEventListener('submit', function (e) {
      e.preventDefault();

      const nama = document.getElementById('namaOperator').value.trim();
      const username = document.getElementById('usernameOperator').value.trim();
      const password = document.getElementById('passwordOperator').value;
      const gerbang = document.getElementById('gerbangOperator').value;
      const status = document.getElementById('statusOperator').value;
      const editIndex = document.getElementById('editIndex').value;

      const list = ambilOperator();

      // Cegah username kembar (kecuali sedang mengedit data itu sendiri)
      const usernameDipakai = list.some((op, i) =>
        op.username.toLowerCase() === username.toLowerCase() && String(i) !== editIndex);
      if (usernameDipakai) {
        alert('Username tersebut sudah dipakai operator lain. Silakan gunakan username lain.');
        return;
      }

      const dataOperator = { nama, username, password, gerbang, status };

      if (editIndex === '') {
        list.push(dataOperator);
      } else {
        list[parseInt(editIndex)] = dataOperator;
      }

      simpanOperator(list);
      renderTabelOperator();
      batalEdit();
      alert(editIndex === '' ? `Operator "${nama}" berhasil ditambahkan.` : `Data operator "${nama}" berhasil diperbarui.`);
    });

    function editOperator(index) {
      const list = ambilOperator();
      const op = list[index];
      if (!op) return;

      document.getElementById('editIndex').value = index;
      document.getElementById('namaOperator').value = op.nama;
      document.getElementById('usernameOperator').value = op.username;
      document.getElementById('passwordOperator').value = op.password;
      document.getElementById('gerbangOperator').value = op.gerbang;
      document.getElementById('statusOperator').value = op.status;

      document.getElementById('btnSubmitOperator').innerHTML = '<i class="fas fa-save me-1"></i> Simpan Perubahan';
      document.getElementById('btnBatalEdit').classList.remove('d-none');
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function batalEdit() {
      document.getElementById('formOperator').reset();
      document.getElementById('editIndex').value = '';
      document.getElementById('btnSubmitOperator').innerHTML = '<i class="fas fa-plus me-1"></i> Tambah Operator';
      document.getElementById('btnBatalEdit').classList.add('d-none');
    }

    function hapusOperator(index) {
      const list = ambilOperator();
      const op = list[index];
      if (!op) return;
      if (confirm(`Hapus akun operator "${op.nama}" (${op.username})?`)) {
        list.splice(index, 1);
        simpanOperator(list);
        renderTabelOperator();
      }
    }

    renderTabelOperator();
  </script>
</body>
</html>
