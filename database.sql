-- database.sql - Import lewat phpMyAdmin (tab Import) ke database u719107617_palapark
-- Jangan buat database baru; cukup import file ini ke database yang sudah ada.
SET NAMES utf8mb4;

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id`           INT(11)      NOT NULL AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(100) NOT NULL,
  `panggilan`    VARCHAR(30)  NOT NULL,
  `nim`          VARCHAR(20)  NOT NULL,
  `jurusan`      VARCHAR(60)  NOT NULL,
  `alamat`       VARCHAR(100) NOT NULL,
  `kontak`       VARCHAR(20)  NOT NULL,
  `foto`         VARCHAR(100) NOT NULL,
  `peran`        VARCHAR(40)  NOT NULL DEFAULT 'Tim Pengembang',
  `folder`       VARCHAR(30)  NOT NULL,
  `halaman`      VARCHAR(100) NOT NULL COMMENT 'halaman awal website profil (relatif dari folder utama)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `anggota` (`id`,`nama_lengkap`,`panggilan`,`nim`,`jurusan`,`alamat`,`kontak`,`foto`,`peran`,`folder`,`halaman`) VALUES
(1,'Kania Nurul Hidayah','Kania','16325025','Manajemen Informatika','Wagom','0812-6081-1275','asset/Kania.jpeg','Tim Pengembang','kania','kania/content.php'),
(2,'Muhammad Salfansyah Alfalaq Pelu','Salfan','16325016','Manajemen Informatika','Tanama','0853-1468-9812','asset/salfan.jpeg','Tim Pengembang','salfan','salfan/beranda.php'),
(3,'Putry Fiolita Mustary','Fiolita','16325003','Manajemen Informatika','Kapaurtutin','0812-4811-2278','asset/Fiolita.jpeg','Tim Pengembang','fiolita','fiolita/Beranda.php');
