-- Database praktikum koneksi MySQL Modul 10 (halaman /modul10/kampus/*)
-- Alternatif: buka /modul10/kampus/buat-database lalu /modul10/kampus/buat-tabel
CREATE DATABASE IF NOT EXISTS db_kampus CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE db_kampus;

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` VARCHAR(20) NOT NULL,
  `nama`    VARCHAR(50) NULL,
  `alamat`  VARCHAR(50) NULL,
  `telp`    VARCHAR(15) NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO `user` (`id_user`, `nama`, `alamat`, `telp`) VALUES
  ('202457201010', 'Alia Masrukhatur Rizkiyah', 'Ngepeh', '083812344321');
