/*
 Navicat Premium Data Transfer

 Source Server         : Lokal
 Source Server Type    : MySQL
 Source Server Version : 100414 (10.4.14-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : laundry

 Target Server Type    : MySQL
 Target Server Version : 100414 (10.4.14-MariaDB)
 File Encoding         : 65001

 Date: 23/01/2024 08:46:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_kas
-- ----------------------------
DROP TABLE IF EXISTS `tb_kas`;
CREATE TABLE `tb_kas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_transaksi` int NULL DEFAULT NULL,
  `biaya` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uang_bayar` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uang_kembali` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_transaksi` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kas
-- ----------------------------
INSERT INTO `tb_kas` VALUES (3, 4, '35000', '35000', '0', '2024-01-23 01:22:33');
INSERT INTO `tb_kas` VALUES (4, 3, '25000', '250004', '225004', '2024-01-23 01:54:40');
INSERT INTO `tb_kas` VALUES (5, 2, '35000', '350003', '315003', '2024-01-23 01:54:54');
INSERT INTO `tb_kas` VALUES (6, 1, '25000', '45000', '20000', '2024-01-23 02:48:20');

-- ----------------------------
-- Table structure for tb_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori`;
CREATE TABLE `tb_kategori`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `harga` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kategori
-- ----------------------------
INSERT INTO `tb_kategori` VALUES (1, 'Sepatu Sneakers', 25000);
INSERT INTO `tb_kategori` VALUES (2, 'Sepatu Formal', 35000);
INSERT INTO `tb_kategori` VALUES (3, 'Sepatu Olahraga', 25000);
INSERT INTO `tb_kategori` VALUES (4, 'Sepatu Boots', 50000);

-- ----------------------------
-- Table structure for tb_pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `tb_pengeluaran`;
CREATE TABLE `tb_pengeluaran`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` int NULL DEFAULT NULL,
  `harga` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_pengeluaran` datetime NULL DEFAULT NULL,
  `catatan` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pengeluaran
-- ----------------------------

-- ----------------------------
-- Table structure for tb_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tb_transaksi`;
CREATE TABLE `tb_transaksi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kategori_sepatu` int NULL DEFAULT NULL,
  `foto_barang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jumlah` int NULL DEFAULT NULL,
  `biaya` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_konsumen` int NULL DEFAULT NULL,
  `id_toko` int NULL DEFAULT NULL,
  `finisihing` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_masuk` datetime NULL DEFAULT NULL,
  `tgl_bayar` datetime NULL DEFAULT NULL,
  `tgl_selesai` datetime NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_transaksi
-- ----------------------------
INSERT INTO `tb_transaksi` VALUES (1, 'Nike', 1, 'logo.png', 1, NULL, 2, 1, 'diambil', '2024-01-23 02:46:06', '2024-01-23 02:48:20', '2024-01-23 02:48:20', 'Lunas');
INSERT INTO `tb_transaksi` VALUES (2, 'Nike', 2, 'logo.png', 1, NULL, 3, 1, 'diambil', '2024-01-23 03:11:36', NULL, NULL, 'proses');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `kontak` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `long` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lat` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `str_usr` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'Kamus Laundry', 'Komplek Kampus 1 UMP', '085156904983', '-800', '1000', 'logo.png', 'toko', 'asdddddddddddddddddd', 'admin', 'toko');
INSERT INTO `tb_user` VALUES (2, 'Rudi Aditia', 'Kos', NULL, NULL, NULL, 'logo.png', 'konsumen', 'wsfsf', 'konsumen', 'toko');
INSERT INTO `tb_user` VALUES (3, 'Wuryanti', 'Perum Kalibagor Indah Blok G.40 Rt7 Rw5 Kalibagor Banyumas', '0851010212', NULL, NULL, 'logo.png', 'konsumen', 'b245a673-b961-11ee-9', '0851010212', 'Ump2023');

-- ----------------------------
-- View structure for vw_kas
-- ----------------------------
DROP VIEW IF EXISTS `vw_kas`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vw_kas` AS SELECT
	tb_kas.id, 
	tb_kas.id_transaksi, 
	vw_transaksi.nama_barang, 
	vw_transaksi.jumlah, 
	tb_kas.biaya, 
	tb_kas.uang_bayar, 
	tb_kas.uang_kembali, 
	tb_kas.tgl_transaksi, 
	vw_transaksi.nama__konsumen, 
	vw_transaksi.`status`
FROM
	tb_kas
	INNER JOIN
	vw_transaksi
	ON 
		tb_kas.id_transaksi = vw_transaksi.id ;

-- ----------------------------
-- View structure for vw_transaksi
-- ----------------------------
DROP VIEW IF EXISTS `vw_transaksi`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vw_transaksi` AS SELECT
	tb_transaksi.id, 
	tb_transaksi.nama_barang, 
	tb_transaksi.foto_barang, 
	tb_transaksi.jumlah, 
	tb_transaksi.biaya, 
	tb_transaksi.finisihing, 
	tb_transaksi.tgl_masuk, 
	tb_transaksi.tgl_bayar, 
	tb_transaksi.tgl_selesai, 
	tb_transaksi.`status`, 
	tb_user.nama AS nama__konsumen, 
	tb_user.alamat AS alamat__konsumen, 
	tb_user.kontak AS kontak__konsumen, 
	tb_kategori.kategori, 
	tb_kategori.harga, 
	tb_user.username
FROM
	tb_user
	INNER JOIN
	tb_transaksi
	ON 
		tb_user.id = tb_transaksi.id_konsumen
	INNER JOIN
	tb_kategori
	ON 
		tb_transaksi.kategori_sepatu = tb_kategori.id ;

SET FOREIGN_KEY_CHECKS = 1;
