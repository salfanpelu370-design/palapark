<?php
$judul = "Landing Page";
$halaman = "landing";
$hero = "linear-gradient(135deg, #6b0f1a 0%, #3a0a0f 60%, #0a2342 100%)";
$warna_judul = "white";
include 'header.php';
?>

    <!-- HERO -->
    <table class="hero-wrap" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <h1 class="judul">Selamat Datang di Halaman Landing</h1>
                <p class="subtitle">Ini adalah halaman landing yang sederhana.</p>
            </td>
        </tr>
    </table>

    <!-- CTA -->
    <table class="cta-wrap" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <p class="cta-text">Sudah siap? Masuk ke halaman utama sekarang.</p>
                <a href="Beranda.php" class="cta-btn">Masuk ke Halaman Utama</a>
            </td>
        </tr>
    </table>

    <hr class="gold">

    <!-- VIDEO SECTION -->
    <p class="video-label">Tonton</p>
    <h2 class="video-title">Video (YouTube)</h2>
    <hr class="gold">

    <center>
        <table class="video-card" style="width: 620px;" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <iframe width="620" height="348"
                        src="https://www.youtube.com/embed/hQWyfwJwcbU?si=s1049D6f57DOMPeT"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>
                </td>
            </tr>
            <tr>
                <td class="video-body">
                    <p class="video-caption">📺 &nbsp; YouTube &nbsp;·&nbsp; Tonton selengkapnya di atas</p>
                </td>
            </tr>
        </table>
    </center>

    

<?php include 'footer.php'; ?>
