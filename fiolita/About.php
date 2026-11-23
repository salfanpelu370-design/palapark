<?php
$judul = "About";
$halaman = "about";
$hero = "linear-gradient(135deg, #0d7377 0%, #0a4d52 50%, #0a2342 100%)";
$warna_judul = "white";
include 'header.php';
include 'menu.php';
?>

    <!-- HERO -->
    <table class="hero-wrap" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <h1 class="judul">About Me</h1>
                <p class="subtitle">Selamat datang di halaman about me</p>
            </td>
        </tr>
    </table>

    

    <br>
    <p class="section-label">Kenalan Yuk</p>
    <h2 class="section-title">About Me Video</h2>
    <hr class="gold">

    <center>
        <table class="about-card" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <video controls width="800" height="480">
                        <source src="About.mp4" type="video/mp4">
                    </video>
                </td>
            </tr>
            <tr>
                <td class="about-body">
                    <p class="about-nim">Putry Fiolita Mustary &nbsp;·&nbsp; NIM 16325003 &nbsp;·&nbsp; Kelas 1A</p>
                    <p class="about-quote">
                        <span class="big-quote">"</span>
                        Assalamu'alaikum warahmatullahi wabarakatuh. Perkenalkan, nama saya Putry Fiolita Mustary 
                        dengan NIM 16325003 dari kelas 1A. Saya berasal dari SMA Negeri 1 Fakfak, lahir di Kota Makassar, 
                        besar di Kota Fakfak, dan saya sedang mengerjakan tugas, yaitu tugas desain web. 
                        Sekian dari perkenalan saya, terima kasih.
                        <span class="big-quote">"</span>
                    </p>
                </td>
            </tr>
        </table>
    </center>

    <br>

<?php include 'footer.php'; ?>
