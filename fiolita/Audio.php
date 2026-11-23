<?php
$judul = "Audio dan Video";
$halaman = "audio";
$hero = "linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%)";
$warna_judul = "#c9a84c";
include 'header.php';
include 'menu.php';
?>

    <!-- HERO -->
    <table class="hero-wrap" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <h1 class="judul">Audio dan Video</h1>
                <p class="subtitle">Selamat datang di halaman audio dan video saya</p>
            </td>
        </tr>
    </table>

    <!-- VIDEO SECTION -->
    <br>
    <p class="section-label">Tonton</p>
    <h2 class="section-title">My Video</h2>
    <hr class="gold">

    <center>
        <table class="video-card" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>
                    <video controls width="700" height="480">
                        <source src="Video.mp4" type="video/mp4">
                    </video>
                </td>
            </tr>
            <tr>
                <td class="video-body">
                    <p class="video-quote">
                        <span>"</span>
                        Lost in the beauty of nature, found in the peace of my mind.
                        <span>"</span>
                    </p>
                </td>
            </tr>
        </table>
    </center>

    <hr class="divider">

    <!-- AUDIO SECTION -->
    <p class="section-label">Dengarkan</p>
    <h3 class="section-title">My Favorite Audio</h3>
    <hr class="gold">

    <center>
        <table class="zigzag-wrap" border="0" cellspacing="0" cellpadding="0">

            <!-- LAGU 1 - KIRI -->
            <tr>
                <td>
                    <table class="audio-card left" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="audio-body">
                                <p class="audio-label">🎵 Lagu 1</p>
                                <p class="audio-title">Dewa — Aku Milikmu</p>
                                <audio controls>
                                    <source src="Aku milikmu.mp3" type="audio/mpeg">
                                </audio>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- LAGU 2 - KANAN -->
            <tr>
                <td align="right">
                    <table class="audio-card right" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="audio-body">
                                <p class="audio-label">🎵 Lagu 2</p>
                                <p class="audio-title">Dewa — Risalah Hati</p>
                                <audio controls>
                                    <source src="Risalah Hati.mp3" type="audio/mpeg">
                                </audio>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- LAGU 3 - KIRI -->
            <tr>
                <td>
                    <table class="audio-card left" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td class="audio-body">
                                <p class="audio-label">🎵 Lagu 3</p>
                                <p class="audio-title">Dewa — Kangen</p>
                                <audio controls>
                                    <source src="Kangen.mp3" type="audio/mpeg">
                                </audio>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
    </center>

    <br>

    

<?php include 'footer.php'; ?>
