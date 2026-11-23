<!-- NAVBAR -->
    <table class="navbar" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td><a href="Beranda.php" <?php if ($halaman == "beranda") { echo 'class="active"'; } ?>>Beranda</a></td>
            <td class="sep">&nbsp;·&nbsp;</td>
            <td><a href="Profil.php" <?php if ($halaman == "profil") { echo 'class="active"'; } ?>>Profil</a></td>
            <td class="sep">&nbsp;·&nbsp;</td>
            <td><a href="Audio.php" <?php if ($halaman == "audio") { echo 'class="active"'; } ?>>Audio dan Video</a></td>
            <td class="sep">&nbsp;·&nbsp;</td>
            <td><a href="About.php" <?php if ($halaman == "about") { echo 'class="active"'; } ?>>About</a></td>
            <td class="sep">&nbsp;·&nbsp;</td>
            <td><a href="Hyperlink.php" <?php if ($halaman == "kembali") { echo 'class="active"'; } ?>>Kembali</a></td>
            <td class="sep">&nbsp;·&nbsp;</td>
            <td><a href="../Anggota.php">Daftar Anggota</a></td>
        </tr>
    </table>
