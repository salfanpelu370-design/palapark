<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Sistem Parkir Modern</title>
  <link rel="icon" href="asset/logoParkir.png" type="image/png">
  
  <!-- Taruh link ini di dalam bagian <head> file HTML-mu -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Fonts (Poppins & Inter) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  
  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  
  <style>
    :root {
      --bg-gradient-start: #0B1437;
      --bg-gradient-end: #1B2559;
      --gradient-primary-start: #3B5BFC;
      --gradient-primary-end: #6C3CE9;
      --accent-orange: #FF7A30;
      --accent-orange-hover: #E66925;
    }

    body {
      background: linear-gradient(135deg, var(--bg-gradient-start), var(--bg-gradient-end));
      font-family: 'Inter', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 20px;
    }

    h4, .brand-text {
      font-family: 'Poppins', sans-serif;
    }

    /* Card Login Bergaya Glassmorphism & Tidak Kaku */
    .login-box {
      width: 100%;
      max-width: 420px;
      background: rgba(255, 255, 255, 0.06);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 24px;
      padding: 40px 32px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
      color: #ffffff;
    }

    .brand-wrapper {
      text-align: center;
      margin-bottom: 32px;
    }

    .logo-icon-box {
      width: 64px;
      height: 64px;
      background: linear-gradient(135deg, var(--gradient-primary-start), var(--gradient-primary-end));
      color: white;
      font-size: 28px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      margin-bottom: 16px;
      box-shadow: 0 8px 20px rgba(59, 91, 252, 0.3);
    }

    .brand-text {
      font-size: 22px;
      font-weight: 700;
      letter-spacing: 0.5px;
      margin-bottom: 4px;
    }

    .brand-subtitle {
      font-size: 13px;
      color: #a3b1cc;
    }

    /* Form Input Controls Modern */
    .form-label {
      font-size: 13px;
      font-weight: 500;
      color: #cbd5e1;
      margin-bottom: 8px;
    }

    .input-group-custom {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: #a3b1cc;
      z-index: 10;
      font-size: 15px;
    }

    .form-control-custom {
      background: rgba(255, 255, 255, 0.08) !important;
      border: 1px solid rgba(255, 255, 255, 0.15) !important;
      border-radius: 14px !important;
      padding: 12px 16px 12px 46px !important;
      color: #ffffff !important;
      font-size: 14px;
      transition: all 0.2s ease;
    }

    .form-control-custom::placeholder {
      color: rgba(163, 177, 204, 0.6);
    }

    .form-control-custom:focus {
      border-color: var(--gradient-primary-start) !important;
      box-shadow: 0 0 0 4px rgba(59, 91, 252, 0.25) !important;
      background: rgba(255, 255, 255, 0.12) !important;
    }

    /* Tombol Orange Aksen Pantai */
    .btn-login-modern {
      width: 100%;
      background: var(--accent-orange);
      color: #ffffff;
      border: none;
      border-radius: 14px;
      padding: 12px;
      font-size: 15px;
      font-weight: 600;
      transition: all 0.2s;
      margin-top: 10px;
      box-shadow: 0 6px 15px rgba(255, 122, 48, 0.25);
    }

    .btn-login-modern:hover {
      background: var(--accent-orange-hover);
      transform: translateY(-1px);
      box-shadow: 0 8px 20px rgba(255, 122, 48, 0.35);
      color: #ffffff;
    }

    .btn-login-modern:active {
      transform: translateY(0);
    }

   
/* Menangkal warna putih bawaan browser pada elemen select & option */
select.form-control-custom {
  background-color: transparent;
  color: #fff;
  border: none;
  cursor: pointer;
  width: 100%;
  padding-right: 25px; /* Beri ruang untuk panah bawaan */
  color-scheme: dark; /* Trik utama: Memaksa browser render dropdown dengan tema gelap */
}

/* Memastikan teks dan latar belakang di dalam dropdown berwarna gelap */
.input-group-custom select option {
  background-color: #151521 !important; /* Warna gelap yang senada dengan background-mu */
  color: #ffffff !important;
}

/* Opsional: Jika ingin menghilangkan tanda panah bawaan browser yang kaku */
select.form-control-custom {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='white' class='bi bi-chevron-down' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/></svg>");
  background-repeat: no-repeat;
  background-position: right 12px center;
}

  </style>
</head>
<body>

<div class="login-box">
  <!-- Header Brand -->
  <div class="brand-wrapper">
    <div class="logo-icon-box">
      <i class="fas fa-parking"></i>
    </div>
    <div class="brand-text">SMARTPARK-SISTEM PARKIR DIGITAL</div>
    <div class="brand-subtitle">Silakan masuk ke panel manajemen sistem</div>
  </div>

  <!-- Form Login -->
  <form id="loginForm">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <div class="input-group-custom">
        <i class="fas fa-user input-icon"></i>
        <input type="text" id="username" class="form-control form-control-custom" required placeholder="Masukkan username">
      </div>
    </div>
    
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <div class="input-group-custom">
        <i class="fas fa-lock input-icon"></i>
        <input type="password" id="password" class="form-control form-control-custom" required placeholder="Masukkan password">
      </div>
    </div>

    <!-- OPSI PILIHAN ROLE (TAMBAHAN BARU) -->
    <div class="mb-4">
      <label for="role" class="form-label">Pilih Role</label>
      <div class="input-group-custom">
        <i class="fas fa-user-shield input-icon"></i>
        <select id="role" class="form-control form-control-custom" style="appearance: auto; background-color: #ffffff;" required>
          <option value="" disabled selected>-- Pilih Hak Akses --</option>
          <option value="Operator">Operator</option>
          <option value="Admin">Admin</option>
        </select>
      </div>
    </div>

    <button type="submit" class="btn btn-login-modern">
      <i class="fas fa-sign-in-alt me-2"></i>Masuk Aplikasi
    </button>
  </form>
</div>

<script>
  document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    // Mengambil pilihan role dari select option
    const selectedRole = document.getElementById("role").value;
    const namaUser = document.getElementById("username").value.trim();

    // FIX: Simpan nama pengguna yang login supaya bisa ditampilkan
    // di teks "Selamat datang" pada halaman Operator/Admin
    localStorage.setItem("namaUser", namaUser);
    localStorage.setItem("roleLogin", selectedRole);

    if (selectedRole === "Operator") {
      alert("Login berhasil sebagai Operator!");
      window.location.href = "operator.php"; // Berpindah ke halaman operator
    } else if (selectedRole === "Admin") {
      alert("Login berhasil sebagai Admin!");
      window.location.href = "dashboard.php"; // Berpindah ke halaman admin
    } else {
      alert("Silakan pilih role terlebih dahulu!");
    }
  });
</script>

</body>
</html>