-- Database untuk CRUD user Modul 10 (koneksi default CI4 -> db_web)
CREATE DATABASE IF NOT EXISTS db_web CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE db_web;

CREATE TABLE IF NOT EXISTS `user` (
  `id_user`  VARCHAR(20)  NOT NULL,
  `username` VARCHAR(50)  NULL,
  `password` VARCHAR(100) NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO `user` (`id_user`, `username`, `password`) VALUES
  ('1', 'admin', '12345');
