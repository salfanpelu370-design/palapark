<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Taruh link ini di dalam bagian <head> file HTML-mu -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Operator Portal Portal</title>
    <style>
        * { box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; }
        html, body { height: 100%; }
      body { background-color: #f4f6f9; color: #333; padding: 12px; overflow-y: auto; overflow-x: hidden; }
     .container {
    max-width: 100%;
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 12px;
    overflow-x: hidden;
}
       .layar-utama {
    height: calc(100vh - 24px);
    display: flex;
    flex-direction: column;
    gap: 12px;
    overflow: hidden;
}
        header { background: #2c3e50; color: white; padding: 10px 15px; border-radius: 8px; text-align: center; flex-shrink: 0; }
        header h1 { font-size: 18px; }
        header p { font-size: 12px; }
        .card { background: white; padding: 14px 16px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
      .card-pilar-gabungan {
    flex: 1;
    display: flex;
    flex-direction: row;
    gap: 20px;
    min-height: 0;
    min-width: 0;
}
.col-masuk {
    border-right: 1px solid #e3e7ec;
    border-bottom: none;
    padding-right: 20px;
    padding-bottom: 0;
}
/* FIX: sebelumnya overflow:hidden -> konten yang lebih tinggi dari kolom
   (misalnya struk SMARTPARK di pintu keluar) jadi TERPOTONG karena
   .layar-utama & kolom ini dikunci pas 1 layar. Sekarang tiap kolom boleh
   scroll SENDIRI secara vertikal (overflow-y:auto) kalau isinya melebihi
   tinggi kolom, tanpa membuat halaman utama ikut menambah tinggi/scroll. */
.col-masuk, .col-keluar {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    overflow-x: hidden;
    min-height: 0;
    min-width: 0;
    padding-right: 4px;
}
       
        .card-db { display: flex; flex-direction: column; overflow: hidden; min-height: 260px; }
        h2 { font-size: 16px; border-bottom: 2px solid #34495e; padding-bottom: 6px; margin-bottom: 10px; color: #2c3e50; }
       .form-group { margin-bottom: 14px; }
        label { display: block; font-weight: bold; margin-bottom: 3px; font-size: 13px; }
        input, select { width: 100%; padding: 7px 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 14px; }
        button { background: #3498db; color: white; border: none; padding: 9px 16px; border-radius: 4px; cursor: pointer; font-size: 14px; font-weight: bold; width: 100%; }
        button:hover { background: #2980b9; }
        .btn-success { background: #2ecc71; }
        .btn-success:hover { background: #27ae60; }
     #video, #canvas { width: 100%; flex: 1; min-height: 60px; max-height: 200px; background: #000; border-radius: 4px; margin-bottom: 8px; object-fit: cover; }
        #canvas { display: none; border: 2px solid #2ecc71; }
        .log-table { width: 100%; border-collapse: collapse; margin-top: 4px; font-size: 12px; table-layout: fixed; }
        .log-table th, .log-table td { border: 1px solid #ddd; padding: 6px 8px; text-align: left; }
        .log-table th { background-color: #f2f2f2; }
        .status-gate { font-size: 14px; font-weight: bold; text-align: center; padding: 7px; margin-top: 8px; border-radius: 4px; background: #e74c3c; color: white; }
        .gate-open { background: #2ecc71; }

        .card-db h2 { flex-shrink: 0; }
        .table-scroll-wrap { flex: 1; overflow-y: auto; min-height: 0; border: 1px solid #eee; border-radius: 6px; }
        .table-scroll-wrap .log-table { margin-top: 0; }
        .table-scroll-wrap .log-table thead th {
            position: sticky; top: 0; z-index: 1;
        }

     .lost-ticket-panel {
            margin-top: 6px;
            padding: 0;
            border: none;
            border-radius: 6px;
            background: transparent;
            flex-shrink: 0;
            max-height: 40px;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        .lost-ticket-panel:has(.lost-ticket-body.show) {
            max-height: 500px;
            overflow-y: auto;
            padding: 10px;
            border: 2px dashed #e74c3c;
            background: #fff8f6;
        }
        .lost-ticket-panel h3 {
            color: #c0392b;
            font-size: 16px;
            margin-bottom: 10px;
        }
      .lost-ticket-panel .btn-toggle-lost {
            background: #e74c3c;
            border: none;
            color: white;
            width: 100%;
            padding: 6px 16px;
            border-radius: 4px;
            font-size: 13px;
            font-weight: bold;
        }
        .lost-ticket-panel .btn-toggle-lost:hover {
            background: #e74c3c;
            color: white;
        }
        .lost-ticket-body { display: none; margin-top: 12px; }
        .lost-ticket-body.show { display: block; }
        .lost-ticket-body select { margin-bottom: 12px; }
        .lost-ticket-body .btn-danger-proses { background: #e74c3c; }
        .lost-ticket-body .btn-danger-proses:hover { background: #c0392b; }
        .lost-ticket-body label small { font-weight: normal; color: #7f8c8d; display: block; margin-top: -3px; margin-bottom: 6px; }
        .badge-lost { display: inline-block; background: #e74c3c; color: white; font-size: 11px; font-weight: bold; padding: 3px 8px; border-radius: 10px; margin-left: 6px; }

        .struk-box {
            margin: 15px auto 0;
            padding: 10px 12px;
            border: 1px dashed #2c3e50;
            border-radius: 4px;
            background: #fbfbfb;
            max-width: 260px;
            font-family: 'Courier New', Courier, monospace;
        }
        .struk-box h3 { text-align: center; color: #2c3e50; margin-bottom: 4px; font-size: 13px; letter-spacing: 0.5px; }
        .struk-box .struk-alamat { text-align: center; font-size: 10px; color: #7f8c8d; margin-bottom: 6px; }
        .struk-box p { display: flex; justify-content: space-between; gap: 6px; margin: 3px 0; font-size: 11.5px; }
        .struk-box p span { color: #555; }
        .struk-box p b { text-align: right; }
        .struk-box hr { border: none; border-top: 1px dashed #bbb; margin: 6px 0; }
        .struk-box .struk-footer { text-align: center; font-size: 10px; color: #7f8c8d; margin: 6px 0 10px; }
        .struk-box .btn-cetak { background: #2c3e50; margin-top: 4px; font-size: 12px; padding: 8px; }
        .struk-box .btn-cetak:hover { background: #1a252f; }

        @media print {
            @page { size: 3.5in 5in; margin: 0mm; }

            html, body {
                width: 100% !important;
                height: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                overflow: hidden !important;
            }
            body * { visibility: hidden; }
            .struk-box, .struk-box * { visibility: visible; }

            .struk-box {
                visibility: visible;
                position: fixed;
                top: 0; left: 0;
                width: 100vw;
                height: 100vh;
                max-width: none;
                margin: 0;
                border: none;
                padding: 7mm 6mm;
                box-sizing: border-box;
                background: white;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .struk-box h3 { font-size: 16px; margin-bottom: 3px; }
            .struk-box .struk-alamat { font-size: 11px; margin-bottom: 5px; line-height: 1.3; }
            .struk-box p { font-size: 12px; margin: 6px 0; }
            .struk-box hr { margin: 5px 0; }
            .struk-box .struk-footer { font-size: 10px; margin: 5px 0; line-height: 1.3; }
            .struk-box .btn-cetak { display: none; }
        }

        .info-panel {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-top: 12px;
        }
        .info-box {
            background: #f4f6f9;
            border: 1px solid #e3e7ec;
            border-radius: 6px;
            padding: 12px;
            text-align: center;
        }
        .info-box .info-label {
            display: block;
            font-size: 12px;
            color: #7f8c8d;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 4px;
        }
        .info-box .info-value {
            display: block;
            font-size: 22px;
            font-weight: bold;
            color: #2c3e50;
        }
        .info-box.info-ticket .info-value {
            font-size: 16px;
            color: #3498db;
        }

.btn-keluar {
    display: block;
    text-align: center;
    text-decoration: none;
    margin-top: 15px;
    padding: 12px 20px;
    background-color: #dc3545;
    color: white;
    border-radius: 5px;
    font-weight: bold;
    font-size: 14px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
.btn-keluar:hover {
    background-color: #c82333;
    color: white;
}
.welcome-text {
    margin: 0 0 6px 0;
    font-size: 14px;
    color: #dcdde1;
}
.welcome-text b {
    color: #ffffff;
}

@media (max-width: 900px) {
    .layar-utama { min-height: auto; }
}

@media (max-width: 576px) {
    header {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding-top: 60px;
    }
    
@media (max-width: 576px) {
    header {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
}

    .btn-keluar {
        position: absolute;
        top: 10px;
        right: 50%;
        transform: translateX(50%);
    }
}
@media (max-width: 900px) {
    .layar-utama {
        height: auto;
        overflow: visible;
    }
    .card-pilar-gabungan {
        flex-direction: column;
    }
    .col-masuk {
        border-right: none;
        border-bottom: 1px solid #e3e7ec;
        padding-right: 0;
        padding-bottom: 20px;
    }
    .col-masuk, .col-keluar {
        overflow-y: visible;
    }
}
    </style>
</head>
<body>

<div class="container">
    <div class="layar-utama">
    <header>
        <p class="welcome-text">Selamat datang, <b id="nama-operator">Operator</b></p>

        <h1 style="margin-top: 0; margin-bottom: 5px;">PANEL OPERATOR PORTAL OTOMATIS</h1>
        <p style="margin: 0;">Sistem Pengambilan Karcis, Kamera Plat, dan Pembayaran</p>
    </header>

    <div class="card card-pilar-gabungan">
    <div class="col-masuk">
        <h2>1. Pintu Masuk (Kamera & Karcis)</h2>
        <video id="video" autoplay playsinline></video>
        <canvas id="canvas"></canvas>
        
        <div class="form-group">
            <label for="vehicle-type">Jenis Kendaraan</label>
            <select id="vehicle-type">
                <option value="Mobil">Mobil (Rp 5.000/jam)</option>
                <option value="Motor">Motor (Rp 2.000/jam)</option>
                <option value="Truk">Truk (Rp 10.000/jam)</option>
                <option value="pickup">Pick-up (Rp 7.000/jam)</option>
                <optgroup label="Lainnya">
                    <option value="Bus">Bus (Rp 15.000/jam)</option>
                    <option value="Sepeda">Sepeda (Gratis)</option>
                </optgroup>
            </select>
        </div>
        
        <button onclick="simulasiTekanKarcis()" class="btn-success">AMBIL KARCIS (SIMULASI)</button>
        <div id="gate-in-status" class="status-gate">PALANG MASUK TERTUTUP</div>

        <div class="lost-ticket-panel">
            <button type="button" class="btn-toggle-lost" onclick="toggleLostTicketPanel()">
                ⚠️ KARCIS HILANG? KLIK DI SINI
            </button>

            <div id="lost-ticket-body" class="lost-ticket-body">
                <h3>Verifikasi Kendaraan dengan Karcis Hilang</h3>

                <div class="form-group">
                    <label>Pilih Kendaraan yang Ada di Dalam Area</label>
                    <select id="lost-vehicle-select">
                        <option value="">-- Pilih kendaraan (karena no. karcis tidak ada) --</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Pemilik Kendaraan</label>
                    <input type="text" id="lost-nama-pemilik" placeholder="Sesuai identitas">
                </div>

                <div class="form-group">
                    <label>No. Identitas (KTP/SIM)</label>
                    <input type="text" id="lost-no-identitas" placeholder="Contoh: 3271xxxxxxxxxxxx">
                </div>

                <div class="form-group">
                    <label>Nama Petugas Pemeriksa
                        <small>Operator yang memverifikasi kehilangan karcis</small>
                    </label>
                    <input type="text" id="lost-petugas" placeholder="Nama operator">
                </div>

                <div class="form-group" style="display:flex; align-items:flex-start; gap:8px;">
                    <input type="checkbox" id="lost-surat-pernyataan" style="width:auto; margin-top:4px;">
                    <label style="font-weight:normal; font-size:14px;">
                        Pemilik kendaraan telah mengisi &amp; menandatangani <b>Surat Pernyataan Kehilangan Karcis</b>, serta setuju dikenakan denda kehilangan karcis.
                    </label>
                </div>

                <p style="font-size:13px; color:#7f8c8d; margin-bottom:12px;">
                    ℹ️ Karena waktu masuk tidak bisa dipastikan tanpa karcis fisik, biaya dihitung dari <b>tarif parkir maksimal harian + denda administrasi kehilangan karcis (Rp 25.000)</b>, bukan dari durasi aktual.
                </p>

               <button class="btn-danger-proses" onclick="prosesKarcisHilang()">
                    PROSES KENDARAAN (KARCIS HILANG)
                </button>
            </div>
        </div>

        <h2 style="margin-top: 10px;">Data Kendaraan di Dalam Area</h2>
        <div class="table-scroll-wrap" style="flex: 1;">
            <table class="log-table" id="db-table">
                <thead>
                    <tr>
                        <th>No. Karcis</th>
                        <th>Jenis</th>
                        <th>Waktu Masuk</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-keluar">
       <h2>2. Pintu Keluar (Operator)</h2>

        <div class="form-group">
            <label>Masukkan Nomor Karcis</label>
            <input type="text" id="search-ticket" placeholder="Contoh : TKT-1234">
        </div>

        <button onclick="prosesPintuKeluar()">Cari Kendaraan</button>

        <hr style="margin:20px 0;">

       <h3>Detail Kendaraan</h3>

        <div>
        <table class="log-table">
            <tr>
                <th>No Karcis</th>
                <td id="res-ticket">TKT-1234</td>
            </tr>
            <tr>
                <th>Jenis</th>
                <td id="res-type">Mobil</td>
            </tr>
            <tr>
                <th>Jam Masuk</th>
                <td id="res-in">13:21</td>
            </tr>
            <tr>
                <th>Jam Keluar</th>
                <td id="res-out">14:00</td>
            </tr>
            <tr>
                <th>Total Bayar</th>
                <td id="res-cost">5.000</td>
            </tr>
            <tr>
                <th>Status</th>
                <td id="res-status">
                    <span style="color:red;font-weight:bold;">
                        <p class="text-danger fw-bold m-0">Belum Dibayar</p>
                    </span>
                </td>
            </tr>
            <tr>
                <th>No PLat</th> 
                <td>
                    <div class="text-center mt-2">
                       <img src="asset/plat-nomer.jpg"
                             class="img-fluid rounded border shadow"
                             style="width:100%; max-width:130px; height:65px; object-fit:cover;"
                             alt="Foto Kendaraan">
                    </div>
                </td>
            </tr>
       </table>
        </div>

        <button id="btn-bayar" onclick="bayarParkir()" disabled>
            PEMBAYARAN SELESAI
        </button>

        <br><br>

        <button id="btn-buka-keluar" onclick="bukaPalangKeluar()" class="btn-success" disabled>
            BUKA PALANG
        </button>

       <div id="gate-out-status" class="status-gate">
    PALANG KELUAR TERTUTUP
</div>

<a href="index.php" class="btn-keluar" onclick="return confirm('Yakin ingin keluar?')">
    <i class="bi bi-box-arrow-right"></i> KELUAR
</a>

        <!-- FIX tampilan terpotong: .col-keluar sekarang overflow-y:auto,
             jadi kalau struk ini membuat konten kolom lebih tinggi dari
             area yang tersedia, kolom Pintu Keluar bisa discroll sendiri
             untuk melihat & mencetak struk secara utuh -->
        <div id="struk-box" class="struk-box" style="display:none;">
            <h3>SMARTPARK</h3>
            <p class="struk-alamat">Sistem Parkir Digital<br>========================</p>
            <p><span>No. Karcis</span> <b id="struk-ticket">-</b></p>
            <p><span>Jenis</span> <b id="struk-type">-</b></p>
            <p><span>Jam Masuk</span> <b id="struk-in">-</b></p>
            <p><span>Jam Keluar</span> <b id="struk-out">-</b></p>
            <hr>
            <p><span>TOTAL BAYAR</span> <b id="struk-cost">-</b></p>
            <hr>
            <p class="struk-footer">Terima kasih<br>Simpan struk sebagai bukti bayar yang sah</p>
            <button class="btn-cetak" onclick="window.print()">🖨️ CETAK STRUK</button>
        </div>
    </div>
    </div>
    </div>
   
</div>
<script>
    document.getElementById('nama-operator').innerText = localStorage.getItem('namaLogin') || 'Operator';

    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');
    let databaseParkir = [];

    navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => { video.srcObject = stream; })
        .catch(err => { console.log("Kamera tidak diizinkan atau tidak ditemukan: ", err); });

    function simulasiTekanKarcis() {
        canvas.width = video.videoWidth || 320;
        canvas.height = video.videoHeight || 240;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        const fotoDataUrl = canvas.toDataURL('image/png');

        video.style.display = 'none';
        canvas.style.display = 'block';
        setTimeout(() => {
            video.style.display = 'block';
            canvas.style.display = 'none';
        }, 1500);

        const idKarcis = 'TKT-' + Math.floor(1000 + Math.random() * 9000);
        const tipe = document.getElementById('vehicle-type').value;
        const waktuMasuk = new Date();

        const dataBaru = {
            id: idKarcis,
            tipe: tipe,
            masuk: waktuMasuk,
            foto: fotoDataUrl,
            status: 'Di Dalam'
        };

        databaseParkir.push(dataBaru);
        perbaruiTabelDatabase();

        const gateIn = document.getElementById('gate-in-status');
        gateIn.innerText = "PALANG MASUK TERBUKA (Silakan Masuk)";
        gateIn.classList.add('gate-open');

        alert(`Karcis Dicetak!\nNomor: ${idKarcis}\nFoto kendaraan berhasil diambil.`);

       setTimeout(() => {
    gateIn.innerText = "PALANG MASUK TERTUTUP";
    gateIn.classList.remove('gate-open');
}, 4000);
}
    function perbaruiTabelDatabase() {
        const tbody = document.querySelector('#db-table tbody');
        tbody.innerHTML = '';
        databaseParkir.forEach(item => {
            const keteranganCell = item.keterangan === 'Karcis Hilang'
                ? `<span class="badge-lost">KARCIS HILANG</span><br><small style="color:#7f8c8d;">${item.namaPemilik || '-'}</small>`
                : '-';
          tbody.innerHTML += `
                <tr>
                    <td><b>${item.id}</b></td>
                    <td>${item.tipe}</td>
                    <td>${item.masuk.toLocaleTimeString()}</td>
                    <td><span style="color:${item.status === 'Di Dalam' ? 'green':'red'}">${item.status}</span></td>
                </tr>
            `;
        });

        perbaruiInfoPanel();
    }

    function perbaruiInfoPanel() {
        perbaruiDropdownKarcisHilang();
    }

    const TARIF_MAKSIMAL_HARIAN = { "Mobil": 30000, "Motor": 15000, "Truk": 50000, "pickup": 35000, "Bus": 60000, "Sepeda": 0 };
    const DENDA_KARCIS_HILANG = 25000;

    function toggleLostTicketPanel() {
        const body = document.getElementById('lost-ticket-body');
        body.classList.toggle('show');
        if (body.classList.contains('show')) {
            perbaruiDropdownKarcisHilang();
        }
    }

    function perbaruiDropdownKarcisHilang() {
        const select = document.getElementById('lost-vehicle-select');
        if (!select) return;
        const currentVal = select.value;
        select.innerHTML = '<option value="">-- Pilih kendaraan (karena no. karcis tidak ada) --</option>';

        databaseParkir.forEach((item, index) => {
            if (item.status === 'Di Dalam') {
                const opt = document.createElement('option');
                opt.value = index;
                opt.text = `${item.id} - ${item.tipe} - Masuk ${item.masuk.toLocaleTimeString()}`;
                select.appendChild(opt);
            }
        });

        select.value = currentVal;
    }

    function prosesKarcisHilang() {
        const select = document.getElementById('lost-vehicle-select');
        const nama = document.getElementById('lost-nama-pemilik').value.trim();
        const noIdentitas = document.getElementById('lost-no-identitas').value.trim();
        const petugas = document.getElementById('lost-petugas').value.trim();
        const suratOk = document.getElementById('lost-surat-pernyataan').checked;

        if (select.value === "") {
            alert("Silakan pilih kendaraan yang sesuai dari daftar kendaraan yang ada di dalam area.");
            return;
        }
        if (!nama || !noIdentitas || !petugas) {
            alert("Mohon lengkapi Nama Pemilik, No. Identitas, dan Nama Petugas Pemeriksa terlebih dahulu.");
            return;
        }
        if (!suratOk) {
            alert("Pemilik kendaraan harus mengisi Surat Pernyataan Kehilangan Karcis dan menyetujui denda sebelum kendaraan dapat keluar.");
            return;
        }

        const data = databaseParkir[parseInt(select.value)];
        if (!data || data.status !== 'Di Dalam') {
            alert("Kendaraan tidak valid atau sudah keluar. Coba pilih ulang.");
            return;
        }

        document.getElementById('struk-box').style.display = 'none';

        dataAktifKeluar = data;
        const waktuKeluar = new Date();

        const tarifMaks = TARIF_MAKSIMAL_HARIAN[data.tipe] ?? 30000;
        const totalBayar = tarifMaks + DENDA_KARCIS_HILANG;

        data.keterangan = 'Karcis Hilang';
        data.namaPemilik = nama;
        data.noIdentitas = noIdentitas;
        data.petugas = petugas;

        document.getElementById('res-ticket').innerText = data.id + ' (Karcis Hilang)';
        document.getElementById('res-type').innerText = data.tipe;
        document.getElementById('res-in').innerText = 'Tidak terverifikasi';
        document.getElementById('res-out').innerText = waktuKeluar.toLocaleTimeString();
        document.getElementById('res-cost').innerText = 'Rp ' + totalBayar.toLocaleString('id-ID');
        document.getElementById('res-status').innerHTML =
            "<span style='color:red;font-weight:bold;'>Belum Dibayar <span class='badge-lost'>KARCIS HILANG</span></span>";

        document.getElementById("btn-bayar").disabled = false;

        perbaruiTabelDatabase();
        alert(`Kendaraan ${data.id} diproses sebagai KARCIS HILANG.\nTotal tagihan (tarif maksimal + denda): Rp ${totalBayar.toLocaleString('id-ID')}`);
    }

    let dataAktifKeluar = null;

    function bayarParkir(){
        document.getElementById("res-status").innerHTML =
            "<span style='color:green;font-weight:bold;'>SUDAH DIBAYAR</span>";

        document.getElementById("btn-bayar").disabled = true;
        document.getElementById("btn-buka-keluar").disabled = false;

        document.getElementById('struk-ticket').innerText = document.getElementById('res-ticket').innerText;
        document.getElementById('struk-type').innerText = document.getElementById('res-type').innerText;
        document.getElementById('struk-in').innerText = document.getElementById('res-in').innerText;
        document.getElementById('struk-out').innerText = document.getElementById('res-out').innerText;
        document.getElementById('struk-cost').innerText = document.getElementById('res-cost').innerText;
        document.getElementById('struk-box').style.display = 'block';

        // FIX: setelah struk muncul (menambah tinggi konten kolom Pintu
        // Keluar), langsung scroll kolom tersebut ke bawah supaya struk
        // yang baru saja tampil langsung terlihat penuh, bukan terpotong.
        const kolomKeluar = document.querySelector('.col-keluar');
        if (kolomKeluar) {
            setTimeout(() => {
                kolomKeluar.scrollTo({ top: kolomKeluar.scrollHeight, behavior: 'smooth' });
            }, 50);
        }

        alert("Pembayaran berhasil.");
    }

    function prosesPintuKeluar() {
        const inputTicket = document.getElementById('search-ticket').value.trim();
        const data = databaseParkir.find(item => item.id === inputTicket && item.status === 'Di Dalam');

        if (!data) {
            alert("Nomor karcis tidak ditemukan atau sudah keluar!");
            return;
        }

        document.getElementById('struk-box').style.display = 'none';

        dataAktifKeluar = data;
        const waktuKeluar = new Date();
        
        const selisihDetik = Math.ceil((waktuKeluar - data.masuk) / 1000); 
        const tarifPerJam = data.tipe === 'Mobil' ? 5000 : 2000;
        const totalBayar = selisihDetik * tarifPerJam;

        document.getElementById('res-ticket').innerText = data.id;
        document.getElementById('res-type').innerText = data.tipe;
        document.getElementById('res-in').innerText = data.masuk.toLocaleTimeString();
        document.getElementById('res-out').innerText = waktuKeluar.toLocaleTimeString();
        document.getElementById('res-cost').innerText = 'Rp ' + totalBayar.toLocaleString('id-ID');

        document.getElementById("btn-bayar").disabled=false;
    }

    function bukaPalangKeluar() {
        if (!dataAktifKeluar) return;

        dataAktifKeluar.status = 'Sudah Keluar';
        perbaruiTabelDatabase();

        const gateOut = document.getElementById('gate-out-status');
        gateOut.innerText = "PALANG KELUAR TERBUKA (Silakan Keluar)";
        gateOut.classList.add('gate-open');

        document.getElementById('btn-bayar').disabled = false;
        document.getElementById('search-ticket').value = '';

       setTimeout(() => {
    gateOut.innerText = "PALANG KELUAR TERTUTUP";
    gateOut.classList.remove('gate-open');

    document.getElementById('res-ticket').innerText='-';
    document.getElementById('res-type').innerText='-';
    document.getElementById('res-in').innerText='-';
    document.getElementById('res-out').innerText='-';
    document.getElementById('res-cost').innerText='-';

        document.getElementById("res-status").innerHTML =
"<span style='color:red;font-weight:bold;'>BELUM DIBAYAR</span>";

document.getElementById('struk-box').style.display = 'none';

dataAktifKeluar=null;

},4000);
}
</script>

</body>
</html>