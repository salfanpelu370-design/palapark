<?php
if (!isset($judul))   { $judul = "Document"; }
if (!isset($halaman)) { $halaman = ""; }

$menu = [
    "content.php"     => "Beranda",
    "profil.php"      => "Profil",
    "audio-video.php" => "Audio dan Video",
    "about.php"       => "About",
    "../Anggota.php"  => "Daftar Anggota",
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?> | Website Kania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h2>Selamat datang di Website Milik Kania</h2>
    </header>

    <nav class="menu">
        <?php foreach ($menu as $file => $nama): ?>
            <a href="<?php echo $file; ?>"<?php echo ($file === $halaman) ? ' class="aktif"' : ''; ?>><?php echo $nama; ?></a>
        <?php endforeach; ?>
    </nav>

    <main class="card">
