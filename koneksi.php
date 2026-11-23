<?php
// koneksi.php - koneksi database Palapark (Kelompok 5)
// Otomatis memilih pengaturan: lokal (XAMPP) atau hosting online.
$server = $_SERVER['SERVER_NAME'] ?? 'localhost';
$lokal  = in_array($server, ['localhost', '127.0.0.1', '::1']);

if ($lokal) {
    // --- LOKAL (XAMPP) ---
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "palapark";
} else {
    // --- ONLINE (hosting) ---
    $host = "localhost";
    $user = "u719107617_pala";
    $pass = "kania_KEL5palapark";
    $db   = "u719107617_palapark";
}

mysqli_report(MYSQLI_REPORT_OFF); // supaya pesan error di bawah yang tampil
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
mysqli_set_charset($koneksi, "utf8mb4");
?>
