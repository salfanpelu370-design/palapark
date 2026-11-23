<?php
// header.php - bagian <head> yang sama di semua halaman.
// Variabel opsional: $judul (judul tab), $base (awalan path, '../' bila di subfolder), $css_extra (array css tambahan)
$base = $base ?? '';
$judul = $judul ?? 'Sistem Parkir Modern';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($judul) ?></title>
  <link rel="icon" href="<?= $base ?>asset/logoParkir.png" type="image/png">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- Google Fonts (Poppins & Inter) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= $base ?>bootstrap-5.3.7-dist/css/bootstrap.min.css" />
  <!-- Font Awesome Public CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<?php foreach (($css_extra ?? []) as $css): ?>
  <link rel="stylesheet" href="<?= $base . $css ?>" />
<?php endforeach; ?>
