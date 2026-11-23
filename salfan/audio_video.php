<?php include 'komponen/header.php'; ?>
<?php include 'komponen/menu.php'; ?>

<main>
    <h1 class="judul" align="center">AUDIO & VIDEO</h1>
<p class="subjudul" align="center">Selamat datang di halaman audio dan video</p>

<br>

<table class="kotak">
<tr>
<td>

<!-- PLAYLIST -->
<table class="playlist" cellpadding="10" align="center" style="width: 100%;">
        <tr>
            <td class="media" align="center" style="vertical-align: top; width: 33%;">
                <img src="assets/Lady Gaga-bad romance.png" width="200" style="border-radius: 8px;">
                <p><b>1. Lady Gaga - Bad Romance</b><br><br>
                Lagu ikonik dari album The Fame Monster (2009).</p>
                <audio controls src="assets/Lady Gaga - Bad Romance (Official Music Video).mp3"></audio>
            </td>

            <td class="media" align="center" style="vertical-align: top; width: 33%;">
                <img src="assets/whitney.jpg" width="200" style="border-radius: 8px;">
                <p><b>2. Whitney Houston - Greatest Love of All</b><br><br>
                Lagu klasik R&B legendaris.</p>
                <audio controls src="assets/Whitney Houston - Greatest Love Of All (Official 4K Video).mp3"></audio>
            </td>

            <td class="media" align="center" style="vertical-align: top; width: 33%;">
                <img src="assets/CORTIS.jpeg" width="200" style="border-radius: 8px;">
                <p><b>3. CORTIS - GO!</b><br><br>
                Lagu debut grup K-pop CORTIS (2025).</p>
                <audio controls src="assets/CORTIS-GO-Official-MV.mp3"></audio>
            </td>
        </tr>
    </table>

<br><br>

<!-- VIDEO -->
<div align="center" style="margin-top: 30px;">
        <table class="video" align="center">
            <tr>
                <td align="center">
                    <video width="500" controls style="border-radius: 8px;">
                        <source src="assets/Die-With-A-Smile.mp4" type="video/mp4">
                        Browser Anda tidak mendukung elemen video.
                    </video>

                    <p style="text-align: center; margin-top: 15px;">
                        <b>4. Lady Gaga ft. Bruno Mars - Die With A Smile</b><br><br>
                        Lagu kolaborasi pop-soul dengan nuansa emosional dan retro.
                    </p>
                </td>
            </tr>
        </table>
    </div>
</td>
</tr>
</table>

<br><br><br>

</main>

<?php include 'komponen/footer.php'; ?>