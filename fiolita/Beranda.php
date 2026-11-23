<?php
$judul = "Beranda";
$halaman = "beranda";
$hero = "linear-gradient(135deg, #6b0f1a 0%, #3a0a0f 60%, #0a2342 100%)";
$warna_judul = "white";
include 'header.php';
include 'menu.php';
?>

    <!-- HERO -->
    <table class="hero-wrap" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <h1 class="judul">Beranda</h1>
                <p class="subtitle">Halaman utama informasi dan berita terkini untuk Anda.</p>
            </td>
        </tr>
    </table>

    <!-- BERITA -->
    <br><br>
    <p class="berita-label">Terkini</p>
    <h2 class="berita-title">Berita</h2>
    <hr class="gold">

    <center>
        <table class="card" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <img src="Sampah.jpeg" alt="Sampah Plastik di Fakfak">
                </td>
            </tr>
            <tr>
                <td style="padding: 32px 36px 36px;">
                    <span class="news-tag">Lingkungan</span>
                    <h3 class="news-headline">Kesadaran Minim, Penggunaan Kantong Plastik di Fakfak Masih Tinggi</h3>
                    <hr class="gold-sm">
                    <p class="news-text">
                        Penerapan pembatasan kantong plastik sekali pakai di wilayah Kabupaten Fakfak 
                        dinilai masih sangat minim. Di sejumlah pasar tradisional dan pusat perbelanjaan, 
                        para pedagang maupun pembeli terpantau masih ketergantungan menggunakan plastik. 
                        Kurangnya sosialisasi yang masif dan ketersediaan alternatif kantong ramah lingkungan 
                        menjadi faktor utama sulitnya menekan angka sampah plastik di Kota Pala ini.
                    </p>
                    <p class="news-meta">📍 Fakfak, Papua Barat &nbsp;·&nbsp; Lingkungan Hidup</p>
                </td>
            </tr>
        </table>
    </center>

    <br><br>

<?php include 'footer.php'; ?>
