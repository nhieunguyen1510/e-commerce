-- MySQL dump 10.13  Distrib 5.7.15, for Win64 (x86_64)
--
-- Host: localhost    Database: tmdt
-- ------------------------------------------------------
-- Server version	5.7.15-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `chi_tiet_giao_dich`
--

DROP TABLE IF EXISTS `chi_tiet_giao_dich`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chi_tiet_giao_dich` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_giao_dich` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia_san_pham` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `id_tinh_trang` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chi_tiet_giao_dich`
--

LOCK TABLES `chi_tiet_giao_dich` WRITE;
/*!40000 ALTER TABLE `chi_tiet_giao_dich` DISABLE KEYS */;
/*!40000 ALTER TABLE `chi_tiet_giao_dich` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chi_tiet_giao_dich_nguoi_ban`
--

DROP TABLE IF EXISTS `chi_tiet_giao_dich_nguoi_ban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chi_tiet_giao_dich_nguoi_ban` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_giao_dich_nguoi_ban` int(11) DEFAULT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia_san_pham` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chi_tiet_giao_dich_nguoi_ban`
--

LOCK TABLES `chi_tiet_giao_dich_nguoi_ban` WRITE;
/*!40000 ALTER TABLE `chi_tiet_giao_dich_nguoi_ban` DISABLE KEYS */;
/*!40000 ALTER TABLE `chi_tiet_giao_dich_nguoi_ban` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danh_gia_san_pham`
--

DROP TABLE IF EXISTS `danh_gia_san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `danh_gia_san_pham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tai_khoan` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `diem_so` int(11) NOT NULL,
  `binh_luan` text COLLATE utf8_unicode_ci NOT NULL,
  `id_tinh_trang` int(11) NOT NULL DEFAULT '0',
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danh_gia_san_pham`
--

LOCK TABLES `danh_gia_san_pham` WRITE;
/*!40000 ALTER TABLE `danh_gia_san_pham` DISABLE KEYS */;
/*!40000 ALTER TABLE `danh_gia_san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `danh_muc_san_pham`
--

DROP TABLE IF EXISTS `danh_muc_san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `danh_muc_san_pham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_danh_muc_san_pham_cha` int(11) DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tinh_trang` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danh_muc_san_pham`
--

LOCK TABLES `danh_muc_san_pham` WRITE;
/*!40000 ALTER TABLE `danh_muc_san_pham` DISABLE KEYS */;
INSERT INTO `danh_muc_san_pham` VALUES (1,0,'Quần',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(2,0,'Áo',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(3,0,'Giày',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(4,0,'Túi xách',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(5,0,'Khác',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(6,1,'Quần Jeans',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(7,1,'Quần Shorts',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(8,2,'Áo khoác',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(9,5,'Ví',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(10,3,'Giày búp bê',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(11,3,'Giày bít',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(12,3,'Giày Sandals',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(13,4,'Balo',1,'2016-12-12 14:36:44','2016-12-12 14:36:44'),(14,4,'Túi xách',1,'2016-12-12 14:36:44','2016-12-12 14:36:44');
/*!40000 ALTER TABLE `danh_muc_san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giao_dich`
--

DROP TABLE IF EXISTS `giao_dich`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giao_dich` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tai_khoan` int(11) NOT NULL,
  `giao_dich_cod` tinyint(4) NOT NULL,
  `giao_dich_truc_tuyen` tinyint(4) NOT NULL,
  `id_giao_dich_truc_tuyen` tinyint(4) DEFAULT NULL,
  `id_tai_khoan_giao_dich_truc_tuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoi_gian_giao_dich` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_giao_hang` datetime DEFAULT NULL,
  `dia_chi_giao_hang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai_giao_hang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_nhan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ma_khuyen_mai` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tong_tien` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giao_dich`
--

LOCK TABLES `giao_dich` WRITE;
/*!40000 ALTER TABLE `giao_dich` DISABLE KEYS */;
/*!40000 ALTER TABLE `giao_dich` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giao_dich_nguoi_ban`
--

DROP TABLE IF EXISTS `giao_dich_nguoi_ban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giao_dich_nguoi_ban` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tai_khoan_mua` int(11) NOT NULL,
  `id_tai_khoan_ban` int(11) NOT NULL,
  `giao_dich_cod` tinyint(4) DEFAULT NULL,
  `giao_dich_truc_tuyen` tinyint(4) DEFAULT NULL,
  `id_giao_dich_truc_tuyen` tinyint(4) DEFAULT NULL,
  `id_tai_khoan_giao_dich_truc_tuyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoi_gian_giao_dich` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_giao_hang` datetime DEFAULT NULL,
  `dia_chi_giao_hang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai_giao_hang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_nhan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ma_khuyen_mai` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tong_tien` int(11) NOT NULL,
  `id_tinh_trang` int(11) DEFAULT NULL,
  `id_giao_dich` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giao_dich_nguoi_ban`
--

LOCK TABLES `giao_dich_nguoi_ban` WRITE;
/*!40000 ALTER TABLE `giao_dich_nguoi_ban` DISABLE KEYS */;
/*!40000 ALTER TABLE `giao_dich_nguoi_ban` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoa_don_tai_khoan`
--

DROP TABLE IF EXISTS `hoa_don_tai_khoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoa_don_tai_khoan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tai_khoan_ban` int(11) NOT NULL,
  `id_tinh_trang` int(11) NOT NULL DEFAULT '0',
  `so_tien_chuyen_khoan` double(8,2) NOT NULL,
  `hinh_thuc_thanh_toan` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoa_don_tai_khoan`
--

LOCK TABLES `hoa_don_tai_khoan` WRITE;
/*!40000 ALTER TABLE `hoa_don_tai_khoan` DISABLE KEYS */;
/*!40000 ALTER TABLE `hoa_don_tai_khoan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=319 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (304,'2014_10_12_000000_create_users_table',1),(305,'2014_10_12_100000_create_password_resets_table',1),(306,'2016_09_25_055622_create_san_pham_table',1),(307,'2016_09_25_085957_create_giao_dich_table',1),(308,'2016_09_28_171104_create_quan_tri_vien_table',1),(309,'2016_09_30_031741_create_danh_muc_san_pham_table',1),(310,'2016_10_01_102018_create_chi_tiet_giao_dich_table',1),(311,'2016_10_04_020931_create_danh_gia_san_pham_table',1),(312,'2016_10_04_021530_create_thong_tin_giao_hang_table',1),(313,'2016_10_08_151323_create_tinh_trang_table',1),(314,'2016_10_24_170746_create_tai_khoan_nguoi_mua_table',1),(315,'2016_11_11_140517_create_tai_khoan_nguoi_ban_table',1),(316,'2016_12_06_015452_create_hoa_don_tai_khoan',1),(317,'2016_12_06_020222_create_giao_dich_nguoi_ban',1),(318,'2016_12_06_020640_create_chi_tiet_giao_dich_nguoi_ban',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quan_tri_vien`
--

DROP TABLE IF EXISTS `quan_tri_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quan_tri_vien` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no-avatar',
  `id_tinh_trang` int(11) NOT NULL,
  `phan_quyen` tinyint(4) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quan_tri_vien_ten_dang_nhap_unique` (`ten_dang_nhap`),
  UNIQUE KEY `quan_tri_vien_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quan_tri_vien`
--

LOCK TABLES `quan_tri_vien` WRITE;
/*!40000 ALTER TABLE `quan_tri_vien` DISABLE KEYS */;
INSERT INTO `quan_tri_vien` VALUES (1,'admin','$2y$10$QtSWt1AVZPptxwbyn.dK.OBbWy.WLcubU/qo1vGH8j1OADoHpYGbm','quynhnhu@gmail.com','Phạm Lê','Quỳnh Như','no-avatar',11,0,'2016-12-12 21:36:45','2016-12-12 21:36:45');
/*!40000 ALTER TABLE `quan_tri_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `san_pham` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_danh_muc_san_pham` int(11) NOT NULL,
  `id_nguoi_ban` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_chi_tiet_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_chi_tiet_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_chi_tiet_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `so_luong_ton_kho` int(11) NOT NULL,
  `don_gia_goc` int(11) NOT NULL,
  `phan_tram_khuyen_mai` int(11) NOT NULL DEFAULT '0',
  `gia_ban_hien_tai` int(11) DEFAULT NULL,
  `nha_san_xuat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tinh_trang` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=540 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham`
--

LOCK TABLES `san_pham` WRITE;
/*!40000 ALTER TABLE `san_pham` DISABLE KEYS */;
INSERT INTO `san_pham` VALUES (282,6,1,'Skinny Regular Ankle Jeans','img/san_pham/jeans_hm1.jpg','img/san_pham/jeans_hm1.jpg','img/san_pham/img/san_pham/jeans_hm1.jpg','img/san_pham/img/san_pham/jeans_hm1.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,50,225000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(283,6,1,'Skinny Regular Ankle Jeans','img/san_pham/jeans_hm2.jpg','img/san_pham/jeans_hm2.jpg','img/san_pham/img/san_pham/jeans_hm2.jpg','img/san_pham/img/san_pham/jeans_hm2.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,10,405000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(284,6,1,'Skinny Regular Ankle Jeans','img/san_pham/jeans_hm3.jpg','img/san_pham/jeans_hm3.jpg','img/san_pham/img/san_pham/jeans_hm3.jpg','img/san_pham/img/san_pham/jeans_hm3.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(285,6,1,'Straight Cropped High Jeans','img/san_pham/jeans_hm4.jpg','img/san_pham/jeans_hm4.jpg','img/san_pham/img/san_pham/jeans_hm4.jpg','img/san_pham/img/san_pham/jeans_hm4.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(286,6,1,'Straight Cropped High Jeans','img/san_pham/jeans_hm5.jpg','img/san_pham/jeans_hm5.jpg','img/san_pham/img/san_pham/jeans_hm5.jpg','img/san_pham/img/san_pham/jeans_hm5.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(287,6,1,'Skinny Regular Ankle Jeans','img/san_pham/jeans_hm6.jpg','img/san_pham/jeans_hm6.jpg','img/san_pham/img/san_pham/jeans_hm6.jpg','img/san_pham/img/san_pham/jeans_hm6.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(288,6,1,'Super Skinny High Jeggings','img/san_pham/jeans_hm7.jpg','img/san_pham/jeans_hm7.jpg','img/san_pham/img/san_pham/jeans_hm7.jpg','img/san_pham/img/san_pham/jeans_hm7.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(289,6,1,'Super Skinny Low Jeans','img/san_pham/jeans_hm8.jpg','img/san_pham/jeans_hm8.jpg','img/san_pham/img/san_pham/jeans_hm8.jpg','img/san_pham/img/san_pham/jeans_hm8.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(290,6,1,'Super Skinny Low Jeans','img/san_pham/jeans_hm9.jpg','img/san_pham/jeans_hm9.jpg','img/san_pham/img/san_pham/jeans_hm9.jpg','img/san_pham/img/san_pham/jeans_hm9.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(291,6,1,'Super Skinny High Jeggings','img/san_pham/jeans_hm10.jpg','img/san_pham/jeans_hm10.jpg','img/san_pham/img/san_pham/jeans_hm10.jpg','img/san_pham/img/san_pham/jeans_hm10.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(292,6,1,'Super Skinny Low Jeans','img/san_pham/jeans_hm11.jpg','img/san_pham/jeans_hm11.jpg','img/san_pham/img/san_pham/jeans_hm11.jpg','img/san_pham/img/san_pham/jeans_hm11.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(293,6,1,'Super Skinny High Jeggings','img/san_pham/jeans_hm12.jpg','img/san_pham/jeans_hm12.jpg','img/san_pham/img/san_pham/jeans_hm12.jpg','img/san_pham/img/san_pham/jeans_hm12.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(294,6,1,'Super Skinny Low Jeans','img/san_pham/jeans_hm13.jpg','img/san_pham/jeans_hm13.jpg','img/san_pham/img/san_pham/jeans_hm13.jpg','img/san_pham/img/san_pham/jeans_hm13.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(295,6,1,'Super Skinny Low Jeans','img/san_pham/jeans_hm14.jpg','img/san_pham/jeans_hm14.jpg','img/san_pham/img/san_pham/jeans_hm14.jpg','img/san_pham/img/san_pham/jeans_hm14.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(296,6,1,'Feather Soft Low Jeggings','img/san_pham/jeans_hm15.jpg','img/san_pham/jeans_hm15.jpg','img/san_pham/img/san_pham/jeans_hm15.jpg','img/san_pham/img/san_pham/jeans_hm15.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(297,6,1,'Shaping Skinny Regular Jeans','img/san_pham/jeans_hm16.jpg','img/san_pham/jeans_hm16.jpg','img/san_pham/img/san_pham/jeans_hm16.jpg','img/san_pham/img/san_pham/jeans_hm16.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(298,6,1,'Skinny Low Ankle Jeans','img/san_pham/jeans_hm17.jpg','img/san_pham/jeans_hm17.jpg','img/san_pham/img/san_pham/jeans_hm17.jpg','img/san_pham/img/san_pham/jeans_hm17.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(299,6,1,'Shaping Skinny Regular Jeans','img/san_pham/jeans_hm18.jpg','img/san_pham/jeans_hm18.jpg','img/san_pham/img/san_pham/jeans_hm18.jpg','img/san_pham/img/san_pham/jeans_hm18.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(300,6,2,'Shaping Skinny Regular Jeans','img/san_pham/jeans_hm19.jpg','img/san_pham/jeans_hm19.jpg','img/san_pham/img/san_pham/jeans_hm19.jpg','img/san_pham/img/san_pham/jeans_hm19.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(301,6,2,'Feather Soft Low Jeggings','img/san_pham/jeans_hm20.jpg','img/san_pham/jeans_hm20.jpg','img/san_pham/img/san_pham/jeans_hm20.jpg','img/san_pham/img/san_pham/jeans_hm20.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(302,6,2,'Skinny Regular Ankle Jeans','img/san_pham/jeans_hm21.jpg','img/san_pham/jeans_hm21.jpg','img/san_pham/img/san_pham/jeans_hm21.jpg','img/san_pham/img/san_pham/jeans_hm21.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(303,6,2,'Skinny Regular Ankle Jeans','img/san_pham/jeans_hm22.jpg','img/san_pham/jeans_hm22.jpg','img/san_pham/img/san_pham/jeans_hm22.jpg','img/san_pham/img/san_pham/jeans_hm22.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(304,6,2,'Skinny Regular Ankle Jeans','img/san_pham/jeans_hm23.jpg','img/san_pham/jeans_hm23.jpg','img/san_pham/img/san_pham/jeans_hm23.jpg','img/san_pham/img/san_pham/jeans_hm23.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(305,6,2,'Super Skinny High Jeggings','img/san_pham/jeans_hm24.jpg','img/san_pham/jeans_hm24.jpg','img/san_pham/img/san_pham/jeans_hm24.jpg','img/san_pham/img/san_pham/jeans_hm24.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(306,6,2,'Super Skinny Low Jeans','img/san_pham/jeans_hm25.jpg','img/san_pham/jeans_hm25.jpg','img/san_pham/img/san_pham/jeans_hm25.jpg','img/san_pham/img/san_pham/jeans_hm25.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(307,6,2,'Super Skinny Low Jeans','img/san_pham/jeans_hm26.jpg','img/san_pham/jeans_hm26.jpg','img/san_pham/img/san_pham/jeans_hm26.jpg','img/san_pham/img/san_pham/jeans_hm26.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(308,6,2,'Super Skinny High Jeggings','img/san_pham/jeans_hm27.jpg','img/san_pham/jeans_hm27.jpg','img/san_pham/img/san_pham/jeans_hm27.jpg','img/san_pham/img/san_pham/jeans_hm27.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(309,6,2,'Shaping Skinny Regular Jeans','img/san_pham/jeans_hm28.jpg','img/san_pham/jeans_hm28.jpg','img/san_pham/img/san_pham/jeans_hm28.jpg','img/san_pham/img/san_pham/jeans_hm28.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(310,6,2,'Skinny Low Ankle Jeans','img/san_pham/jeans_hm29.jpg','img/san_pham/jeans_hm29.jpg','img/san_pham/img/san_pham/jeans_hm29.jpg','img/san_pham/img/san_pham/jeans_hm29.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(311,7,2,'Modal-blend Shorts','img/san_pham/shorts_hm1.jpg','img/san_pham/shorts_hm1.jpg','img/san_pham/img/san_pham/shorts_hm1.jpg','img/san_pham/img/san_pham/shorts_hm1.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(312,7,2,'Superstretch Twill Shorts','img/san_pham/shorts_hm2.jpg','img/san_pham/shorts_hm2.jpg','img/san_pham/img/san_pham/shorts_hm2.jpg','img/san_pham/img/san_pham/shorts_hm2.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(313,7,2,'Superstretch Twill Shorts','img/san_pham/shorts_hm3.jpg','img/san_pham/shorts_hm3.jpg','img/san_pham/img/san_pham/shorts_hm3.jpg','img/san_pham/img/san_pham/shorts_hm3.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(314,7,2,'Modal-blend Shorts','img/san_pham/shorts_hm4.jpg','img/san_pham/shorts_hm4.jpg','img/san_pham/img/san_pham/shorts_hm4.jpg','img/san_pham/img/san_pham/shorts_hm4.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(315,7,2,'Denim Shorts','img/san_pham/shorts_hm5.jpg','img/san_pham/shorts_hm5.jpg','img/san_pham/img/san_pham/shorts_hm5.jpg','img/san_pham/img/san_pham/shorts_hm5.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(316,7,2,'Twill Shorts','img/san_pham/shorts_hm6.jpg','img/san_pham/shorts_hm6.jpg','img/san_pham/img/san_pham/shorts_hm6.jpg','img/san_pham/img/san_pham/shorts_hm6.jpg','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(317,7,2,'Imitation Leather Shorts','img/san_pham/shorts_hm7.jpg','img/san_pham/shorts_hm7.jpg','img/san_pham/img/san_pham/shorts_hm7.jpg','img/san_pham/img/san_pham/shorts_hm7.jpg','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(318,7,2,'Twill Shorts','img/san_pham/shorts_hm8.jpg','img/san_pham/shorts_hm8.jpg','img/san_pham/img/san_pham/shorts_hm8.jpg','img/san_pham/img/san_pham/shorts_hm8.jpg','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(319,7,2,'Short Shorts','img/san_pham/shorts_hm9.jpg','img/san_pham/shorts_hm9.jpg','img/san_pham/img/san_pham/shorts_hm9.jpg','img/san_pham/img/san_pham/shorts_hm9.jpg','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(320,7,2,'Twill Shorts','img/san_pham/shorts_hm10.jpg','img/san_pham/shorts_hm10.jpg','img/san_pham/img/san_pham/shorts_hm10.jpg','img/san_pham/img/san_pham/shorts_hm10.jpg','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(321,7,2,'Denim Shorts','img/san_pham/shorts_hm11.jpg','img/san_pham/shorts_hm11.jpg','img/san_pham/img/san_pham/shorts_hm11.jpg','img/san_pham/img/san_pham/shorts_hm11.jpg','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(322,7,2,'Crêped Shorts','img/san_pham/shorts_hm12.jpg','img/san_pham/shorts_hm12.jpg','img/san_pham/img/san_pham/shorts_hm12.jpg','img/san_pham/img/san_pham/shorts_hm12.jpg','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(323,7,2,'Short Shorts','img/san_pham/shorts_hm13.jpg','img/san_pham/shorts_hm13.jpg','img/san_pham/img/san_pham/shorts_hm13.jpg','img/san_pham/img/san_pham/shorts_hm13.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(324,7,2,'Beaded Velvet Shorts','img/san_pham/shorts_hm14.jpg','img/san_pham/shorts_hm14.jpg','img/san_pham/img/san_pham/shorts_hm14.jpg','img/san_pham/img/san_pham/shorts_hm14.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(325,7,2,'Denim Shorts','img/san_pham/shorts_hm15.jpg','img/san_pham/shorts_hm15.jpg','img/san_pham/img/san_pham/shorts_hm15.jpg','img/san_pham/img/san_pham/shorts_hm15.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(326,7,2,'Embroidered Shorts','img/san_pham/shorts_hm16.jpg','img/san_pham/shorts_hm16.jpg','img/san_pham/img/san_pham/shorts_hm16.jpg','img/san_pham/img/san_pham/shorts_hm16.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(327,7,2,'Cotton Shorts','img/san_pham/shorts_hm17.jpg','img/san_pham/shorts_hm17.jpg','img/san_pham/img/san_pham/shorts_hm17.jpg','img/san_pham/img/san_pham/shorts_hm17.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(328,7,2,'Denim Shorts and Leather Chaps','img/san_pham/shorts_hm18.jpg','img/san_pham/shorts_hm18.jpg','img/san_pham/img/san_pham/shorts_hm18.jpg','img/san_pham/img/san_pham/shorts_hm18.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(329,8,2,'Biker Jacket','img/san_pham/coat_hm1.jpg','img/san_pham/coat_hm1.jpg','img/san_pham/img/san_pham/coat_hm1.jpg','img/san_pham/img/san_pham/coat_hm1.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(330,8,2,'Padded Parka','img/san_pham/coat_hm2.jpg','img/san_pham/coat_hm2.jpg','img/san_pham/img/san_pham/coat_hm2.jpg','img/san_pham/img/san_pham/coat_hm2.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(331,8,2,'Pile-lined Parka','img/san_pham/coat_hm3.jpg','img/san_pham/coat_hm3.jpg','img/san_pham/img/san_pham/coat_hm3.jpg','img/san_pham/img/san_pham/coat_hm3.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(332,8,2,'Long Vest','img/san_pham/coat_hm4.jpg','img/san_pham/coat_hm4.jpg','img/san_pham/img/san_pham/coat_hm4.jpg','img/san_pham/img/san_pham/coat_hm4.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(333,8,2,'Padded Parka','img/san_pham/coat_hm5.jpg','img/san_pham/coat_hm5.jpg','img/san_pham/img/san_pham/coat_hm5.jpg','img/san_pham/img/san_pham/coat_hm5.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(334,8,2,'Pile-lined Parka','img/san_pham/coat_hm6.jpg','img/san_pham/coat_hm6.jpg','img/san_pham/img/san_pham/coat_hm6.jpg','img/san_pham/img/san_pham/coat_hm6.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(335,8,2,'Bomber Jacket','img/san_pham/coat_hm7.jpg','img/san_pham/coat_hm7.jpg','img/san_pham/img/san_pham/coat_hm7.jpg','img/san_pham/img/san_pham/coat_hm7.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(336,8,2,'Padded Parka','img/san_pham/coat_hm8.jpg','img/san_pham/coat_hm8.jpg','img/san_pham/img/san_pham/coat_hm8.jpg','img/san_pham/img/san_pham/coat_hm8.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(337,8,2,'Pile-lined Parka','img/san_pham/coat_hm9.jpg','img/san_pham/coat_hm9.jpg','img/san_pham/img/san_pham/coat_hm9.jpg','img/san_pham/img/san_pham/coat_hm9.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(338,8,2,'Pile-lined Parka','img/san_pham/coat_hm10.jpg','img/san_pham/coat_hm10.jpg','img/san_pham/img/san_pham/coat_hm10.jpg','img/san_pham/img/san_pham/coat_hm10.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(339,8,2,'Bomber Jacket','img/san_pham/coat_hm11.jpg','img/san_pham/coat_hm11.jpg','img/san_pham/img/san_pham/coat_hm11.jpg','img/san_pham/img/san_pham/coat_hm11.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(340,8,2,'Double-breasted Jacket','img/san_pham/coat_hm12.jpg','img/san_pham/coat_hm12.jpg','img/san_pham/img/san_pham/coat_hm12.jpg','img/san_pham/img/san_pham/coat_hm12.jpg','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(341,8,2,'Padded Parka','img/san_pham/coat_hm13.jpg','img/san_pham/coat_hm13.jpg','img/san_pham/img/san_pham/coat_hm13.jpg','img/san_pham/img/san_pham/coat_hm13.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(342,8,2,'Double-breasted Jacket','img/san_pham/coat_hm14.jpg','img/san_pham/coat_hm14.jpg','img/san_pham/img/san_pham/coat_hm14.jpg','img/san_pham/img/san_pham/coat_hm14.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(343,8,2,'Biker Jacket','img/san_pham/coat_hm15.jpg','img/san_pham/coat_hm15.jpg','img/san_pham/img/san_pham/coat_hm15.jpg','img/san_pham/img/san_pham/coat_hm15.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(344,8,2,'Bomber Jacket','img/san_pham/coat_hm16.jpg','img/san_pham/coat_hm16.jpg','img/san_pham/img/san_pham/coat_hm16.jpg','img/san_pham/img/san_pham/coat_hm16.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(345,8,2,'Padded Parka','img/san_pham/coat_hm17.jpg','img/san_pham/coat_hm17.jpg','img/san_pham/img/san_pham/coat_hm17.jpg','img/san_pham/img/san_pham/coat_hm17.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(346,8,2,'Padded Parka','img/san_pham/coat_hm18.jpg','img/san_pham/coat_hm18.jpg','img/san_pham/img/san_pham/coat_hm18.jpg','img/san_pham/img/san_pham/coat_hm18.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(347,8,2,'Padded Parka','img/san_pham/coat_hm19.jpg','img/san_pham/coat_hm19.jpg','img/san_pham/img/san_pham/coat_hm19.jpg','img/san_pham/img/san_pham/coat_hm19.jpg','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(348,9,2,'Ví cầm tay BOP 0358 Giá bán: 545.000 VND','img/san_pham/18610_1476067874-small.jpg','img/san_pham/18610_1476067874-small.jpg','img/san_pham/img/san_pham/18610_1476067874-small.jpg','img/san_pham/img/san_pham/18610_1476067874-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(349,9,2,'Ví cầm tay BOP 0357 Giá bán: 485.000 VND','img/san_pham/18618_1476067976-small.jpg','img/san_pham/18618_1476067976-small.jpg','img/san_pham/img/san_pham/18618_1476067976-small.jpg','img/san_pham/img/san_pham/18618_1476067976-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(350,9,2,'Ví cầm tay BOP 0356 Giá bán: 525.000 VND','img/san_pham/18628_1476068087-small.jpg','img/san_pham/18628_1476068087-small.jpg','img/san_pham/img/san_pham/18628_1476068087-small.jpg','img/san_pham/img/san_pham/18628_1476068087-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(351,9,2,'Ví cầm tay BOP 0355 Giá bán: 525.000 VND','img/san_pham/18636_1476068155-small.jpg','img/san_pham/18636_1476068155-small.jpg','img/san_pham/img/san_pham/18636_1476068155-small.jpg','img/san_pham/img/san_pham/18636_1476068155-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(352,9,2,'Ví cầm tay BOP 0354 Giá bán: 595.000 VND','img/san_pham/18640_1476068200-small.jpg','img/san_pham/18640_1476068200-small.jpg','img/san_pham/img/san_pham/18640_1476068200-small.jpg','img/san_pham/img/san_pham/18640_1476068200-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(353,9,2,'Ví dự tiệc BOP 0353 Giá bán: 625.000 VND','img/san_pham/18644_1476068251-small.jpg','img/san_pham/18644_1476068251-small.jpg','img/san_pham/img/san_pham/18644_1476068251-small.jpg','img/san_pham/img/san_pham/18644_1476068251-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(354,9,2,'Ví cầm tay nắp gập da xước BOP 0369 Giá bán: 595.000 VND','img/san_pham/17683_1472728977-small.jpg','img/san_pham/17683_1472728977-small.jpg','img/san_pham/img/san_pham/17683_1472728977-small.jpg','img/san_pham/img/san_pham/17683_1472728977-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(355,9,2,'Ví cầm tay trơn logo Vascara BOP 0352 Giá bán: 545.000 VND','img/san_pham/17691_1472729081-small.jpg','img/san_pham/17691_1472729081-small.jpg','img/san_pham/img/san_pham/17691_1472729081-small.jpg','img/san_pham/img/san_pham/17691_1472729081-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(356,9,2,'Ví cầm tay cách điệu da lộn BOP 0350 Giá bán: 645.000 VND','img/san_pham/17699_1472729133-small.jpg','img/san_pham/17699_1472729133-small.jpg','img/san_pham/img/san_pham/17699_1472729133-small.jpg','img/san_pham/img/san_pham/17699_1472729133-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(357,9,2,'Ví cầm tay họa tiết cách điệu BOP 0346 Giá bán: 545.000 VND','img/san_pham/17705_1472729206-small.jpg','img/san_pham/17705_1472729206-small.jpg','img/san_pham/img/san_pham/17705_1472729206-small.jpg','img/san_pham/img/san_pham/17705_1472729206-small.jpg','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(358,9,2,'Ví cầm tay BOP 0368 Giá bán: 565.000 VND','img/san_pham/17503_1472705502-small.jpg','img/san_pham/17503_1472705502-small.jpg','img/san_pham/img/san_pham/17503_1472705502-small.jpg','img/san_pham/img/san_pham/17503_1472705502-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(359,9,2,'Ví cầm tay BOP 0348 Giá bán: 525.000 VND','img/san_pham/15338_1470314834-small.jpg','img/san_pham/15338_1470314834-small.jpg','img/san_pham/img/san_pham/15338_1470314834-small.jpg','img/san_pham/img/san_pham/15338_1470314834-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(360,9,2,'Ví cầm tay BOP 0345 Giá bán: 545.000 VND','img/san_pham/18498_1475897412-small.jpg','img/san_pham/18498_1475897412-small.jpg','img/san_pham/img/san_pham/18498_1475897412-small.jpg','img/san_pham/img/san_pham/18498_1475897412-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(361,9,2,'Ví cầm tay BOP 0344 Giá bán: 655.000 VND','img/san_pham/14209_1469865444-small.jpg','img/san_pham/14209_1469865444-small.jpg','img/san_pham/img/san_pham/14209_1469865444-small.jpg','img/san_pham/img/san_pham/14209_1469865444-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(362,9,2,'Ví cầm tay BOP 0342 Giá bán: 495.000 VND','img/san_pham/14201_1469865392-small.jpg','img/san_pham/14201_1469865392-small.jpg','img/san_pham/img/san_pham/14201_1469865392-small.jpg','img/san_pham/img/san_pham/14201_1469865392-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(363,9,2,'Ví cầm tay BOP 0343 Giá bán: 525.000 VND','img/san_pham/12635_1467599616-small.jpg','img/san_pham/12635_1467599616-small.jpg','img/san_pham/img/san_pham/12635_1467599616-small.jpg','img/san_pham/img/san_pham/12635_1467599616-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(364,9,2,'Ví cầm tay BOP 0341 Giá bán: 545.000 VND','img/san_pham/12681_1467600118-small.jpg','img/san_pham/12681_1467600118-small.jpg','img/san_pham/img/san_pham/12681_1467600118-small.jpg','img/san_pham/img/san_pham/12681_1467600118-small.jpg','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(365,9,2,'Ví cầm tay BOP 0340 Giá bán: 545.000 VND','img/san_pham/12685_1467600152-small.jpg','img/san_pham/12685_1467600152-small.jpg','img/san_pham/img/san_pham/12685_1467600152-small.jpg','img/san_pham/img/san_pham/12685_1467600152-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(366,9,2,'Ví cầm tay BOP 0339 Giá bán: 545.000 VND','img/san_pham/12687_1467600197-small.jpg','img/san_pham/12687_1467600197-small.jpg','img/san_pham/img/san_pham/12687_1467600197-small.jpg','img/san_pham/img/san_pham/12687_1467600197-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(367,9,2,'Ví cầm tay BOP 0321 Giá bán: 495.000 VND','img/san_pham/12244_1465382973-small.jpg','img/san_pham/12244_1465382973-small.jpg','img/san_pham/img/san_pham/12244_1465382973-small.jpg','img/san_pham/img/san_pham/12244_1465382973-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(368,9,2,'Ví cầm tay BOP 0327 Giá bán: 650.000 VND','img/san_pham/12131_1465189996-small.jpg','img/san_pham/12131_1465189996-small.jpg','img/san_pham/img/san_pham/12131_1465189996-small.jpg','img/san_pham/img/san_pham/12131_1465189996-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(369,9,2,'Ví cầm tay BOP 0319 Giá bán: 485.000 VND','img/san_pham/11974_1464171848-small.jpg','img/san_pham/11974_1464171848-small.jpg','img/san_pham/img/san_pham/11974_1464171848-small.jpg','img/san_pham/img/san_pham/11974_1464171848-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(370,9,2,'Ví cầm tay BOP 0317 Giá bán: 545.000 VND','img/san_pham/11980_1464171944-small.jpg','img/san_pham/11980_1464171944-small.jpg','img/san_pham/img/san_pham/11980_1464171944-small.jpg','img/san_pham/img/san_pham/11980_1464171944-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,15,403750,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(371,9,2,'Ví cầm tay BOP 0338 Giá bán: 545.000 VND','img/san_pham/11219_1462936563-small.jpg','img/san_pham/11219_1462936563-small.jpg','img/san_pham/img/san_pham/11219_1462936563-small.jpg','img/san_pham/img/san_pham/11219_1462936563-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(372,9,2,'Ví cầm tay BOP 0326 Giá bán: 650.000 VND','img/san_pham/11379_1463130808-small.jpg','img/san_pham/11379_1463130808-small.jpg','img/san_pham/img/san_pham/11379_1463130808-small.jpg','img/san_pham/img/san_pham/11379_1463130808-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(373,9,2,'Ví cầm tay BOP 0322 Giá bán: 525.000 VND','img/san_pham/11384_1463130918-small.jpg','img/san_pham/11384_1463130918-small.jpg','img/san_pham/img/san_pham/11384_1463130918-small.jpg','img/san_pham/img/san_pham/11384_1463130918-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(374,9,2,'Ví cầm tay BOP 0328 Giá bán: 525.000 VND','img/san_pham/11161_1461925935-small.jpg','img/san_pham/11161_1461925935-small.jpg','img/san_pham/img/san_pham/11161_1461925935-small.jpg','img/san_pham/img/san_pham/11161_1461925935-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(375,9,2,'Ví cầm tay BOP 0320 Giá bán: 485.000 VND','img/san_pham/11157_1461925883-small.jpg','img/san_pham/11157_1461925883-small.jpg','img/san_pham/img/san_pham/11157_1461925883-small.jpg','img/san_pham/img/san_pham/11157_1461925883-small.jpg','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(376,9,2,'Ví cầm tay BOP 0318 Giá bán: 525.000 VND','img/san_pham/11149_1461924981-small.jpg','img/san_pham/11149_1461924981-small.jpg','img/san_pham/img/san_pham/11149_1461924981-small.jpg','img/san_pham/img/san_pham/11149_1461924981-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(377,10,2,'Giày búp bê đính nơ GBB 0374','img/san_pham/18704_1476095301-small.jpg','img/san_pham/18704_1476095301-small.jpg','img/san_pham/img/san_pham/18704_1476095301-small.jpg','img/san_pham/img/san_pham/18704_1476095301-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(378,10,2,'Giày búp bê thiết kế quai mũi GBB 0371','img/san_pham/18722_1476095392-small.jpg','img/san_pham/18722_1476095392-small.jpg','img/san_pham/img/san_pham/18722_1476095392-small.jpg','img/san_pham/img/san_pham/18722_1476095392-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(379,10,2,'Giày mọi phong cách Brogue MOI 0076','img/san_pham/18592_1476067711-small.jpg','img/san_pham/18592_1476067711-small.jpg','img/san_pham/img/san_pham/18592_1476067711-small.jpg','img/san_pham/img/san_pham/18592_1476067711-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(380,10,2,'Giày búp bê mũi trang trí cách điệu GBB 0370','img/san_pham/18435_1475138046-small.jpg','img/san_pham/18435_1475138046-small.jpg','img/san_pham/img/san_pham/18435_1475138046-small.jpg','img/san_pham/img/san_pham/18435_1475138046-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:01','2016-12-12 21:37:01'),(381,10,2,'Giày Mọi xỏ dây MOI 0075','img/san_pham/17938_1473481218-small.jpg','img/san_pham/17938_1473481218-small.jpg','img/san_pham/img/san_pham/17938_1473481218-small.jpg','img/san_pham/img/san_pham/17938_1473481218-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(382,10,2,'Giày Búp bê đính nơ GBB 0369','img/san_pham/17956_1473481277-small.jpg','img/san_pham/17956_1473481277-small.jpg','img/san_pham/img/san_pham/17956_1473481277-small.jpg','img/san_pham/img/san_pham/17956_1473481277-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(383,10,2,'Giày Búp bê mũi nhọn màu trơn GBB 0368','img/san_pham/17567_1472720481-small.jpg','img/san_pham/17567_1472720481-small.jpg','img/san_pham/img/san_pham/17567_1472720481-small.jpg','img/san_pham/img/san_pham/17567_1472720481-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(384,10,2,'Giày búp bê GBB 0373','img/san_pham/16264_1471319994-small.jpg','img/san_pham/16264_1471319994-small.jpg','img/san_pham/img/san_pham/16264_1471319994-small.jpg','img/san_pham/img/san_pham/16264_1471319994-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(385,10,2,'Giày Búp bê GBB 0367','img/san_pham/16260_1471319798-small.jpg','img/san_pham/16260_1471319798-small.jpg','img/san_pham/img/san_pham/16260_1471319798-small.jpg','img/san_pham/img/san_pham/16260_1471319798-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(386,10,2,'Giày mọi MOI 0072','img/san_pham/15326_1470314789-small.jpg','img/san_pham/15326_1470314789-small.jpg','img/san_pham/img/san_pham/15326_1470314789-small.jpg','img/san_pham/img/san_pham/15326_1470314789-small.jpg','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(387,10,2,'Giày Junior JNR 0083','img/san_pham/12808_1468554995-small.jpg','img/san_pham/12808_1468554995-small.jpg','img/san_pham/img/san_pham/12808_1468554995-small.jpg','img/san_pham/img/san_pham/12808_1468554995-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(388,10,2,'Giày Junior JNR 0081','img/san_pham/12605_1467359228-small.jpg','img/san_pham/12605_1467359228-small.jpg','img/san_pham/img/san_pham/12605_1467359228-small.jpg','img/san_pham/img/san_pham/12605_1467359228-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(389,10,2,'Giày búp bê Junior JNR 0082','img/san_pham/12496_1466736298-small.jpg','img/san_pham/12496_1466736298-small.jpg','img/san_pham/img/san_pham/12496_1466736298-small.jpg','img/san_pham/img/san_pham/12496_1466736298-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(390,10,2,'Giày búp bê GBB 0366','img/san_pham/12370_1466418095-small.jpg','img/san_pham/12370_1466418095-small.jpg','img/san_pham/img/san_pham/12370_1466418095-small.jpg','img/san_pham/img/san_pham/12370_1466418095-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(391,10,2,'Giày mọi MOI 0070','img/san_pham/12391_1466418217-small.jpg','img/san_pham/12391_1466418217-small.jpg','img/san_pham/img/san_pham/12391_1466418217-small.jpg','img/san_pham/img/san_pham/12391_1466418217-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(392,10,2,'Giày Búp Bê MOI 0071','img/san_pham/11956_1464171675-small.jpg','img/san_pham/11956_1464171675-small.jpg','img/san_pham/img/san_pham/11956_1464171675-small.jpg','img/san_pham/img/san_pham/11956_1464171675-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(393,10,2,'Giày Búp Bê GBB 0363','img/san_pham/11632_1463386702-small.jpg','img/san_pham/11632_1463386702-small.jpg','img/san_pham/img/san_pham/11632_1463386702-small.jpg','img/san_pham/img/san_pham/11632_1463386702-small.jpg','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(394,10,2,'Giày Búp Bê GBB 0362','img/san_pham/11688_1463387839-small.jpg','img/san_pham/11688_1463387839-small.jpg','img/san_pham/img/san_pham/11688_1463387839-small.jpg','img/san_pham/img/san_pham/11688_1463387839-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(395,10,2,'Giày búp bê JNR 0078','img/san_pham/10881_1459764514-small.jpg','img/san_pham/10881_1459764514-small.jpg','img/san_pham/img/san_pham/10881_1459764514-small.jpg','img/san_pham/img/san_pham/10881_1459764514-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(396,10,2,'Giày Oxford MOI 0069','img/san_pham/10905_1459764699-small.jpg','img/san_pham/10905_1459764699-small.jpg','img/san_pham/img/san_pham/10905_1459764699-small.jpg','img/san_pham/img/san_pham/10905_1459764699-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(397,10,2,'Giày búp bê GBB 0364','img/san_pham/10926_1459765255-small.jpg','img/san_pham/10926_1459765255-small.jpg','img/san_pham/img/san_pham/10926_1459765255-small.jpg','img/san_pham/img/san_pham/10926_1459765255-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(398,10,2,'Giày búp bê GBB 0360','img/san_pham/9125_1455611947-small.jpg','img/san_pham/9125_1455611947-small.jpg','img/san_pham/img/san_pham/9125_1455611947-small.jpg','img/san_pham/img/san_pham/9125_1455611947-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(399,10,2,'Giày búp bê GBB 0358','img/san_pham/8271_1454654761-small.jpg','img/san_pham/8271_1454654761-small.jpg','img/san_pham/img/san_pham/8271_1454654761-small.jpg','img/san_pham/img/san_pham/8271_1454654761-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(400,10,3,'Giày búp bê đính nơ GBB 0359','img/san_pham/7817_1452243438-small.jpg','img/san_pham/7817_1452243438-small.jpg','img/san_pham/img/san_pham/7817_1452243438-small.jpg','img/san_pham/img/san_pham/7817_1452243438-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(401,10,3,'Giày búp bê đính nơ GBB 0357','img/san_pham/7835_1452244185-small.jpg','img/san_pham/7835_1452244185-small.jpg','img/san_pham/img/san_pham/7835_1452244185-small.jpg','img/san_pham/img/san_pham/7835_1452244185-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(402,10,3,'Giày búp bê đính nơ JNR 0073','img/san_pham/7519_1450774160-small.jpg','img/san_pham/7519_1450774160-small.jpg','img/san_pham/img/san_pham/7519_1450774160-small.jpg','img/san_pham/img/san_pham/7519_1450774160-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,20,360000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(403,10,3,'Giày búp bê JNR 0070','img/san_pham/7027_1448695992-small.jpg','img/san_pham/7027_1448695992-small.jpg','img/san_pham/img/san_pham/7027_1448695992-small.jpg','img/san_pham/img/san_pham/7027_1448695992-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(404,10,3,'Giày búp bê mũi nhọn đính nơ JNR 0069','img/san_pham/7039_1448696288-small.jpg','img/san_pham/7039_1448696288-small.jpg','img/san_pham/img/san_pham/7039_1448696288-small.jpg','img/san_pham/img/san_pham/7039_1448696288-small.jpg','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(405,10,3,'Giày búp bê JNR 0068','img/san_pham/7051_1448696481-small.jpg','img/san_pham/7051_1448696481-small.jpg','img/san_pham/img/san_pham/7051_1448696481-small.jpg','img/san_pham/img/san_pham/7051_1448696481-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(406,11,3,'Giày Bít mũi nhọn da lộn BMN 0176','img/san_pham/17636_1472721239-small.jpg','img/san_pham/17636_1472721239-small.jpg','img/san_pham/img/san_pham/17636_1472721239-small.jpg','img/san_pham/img/san_pham/17636_1472721239-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(407,11,3,'Giày bít mũi nhọn BMN 0171','img/san_pham/16316_1471320387-small.jpg','img/san_pham/16316_1471320387-small.jpg','img/san_pham/img/san_pham/16316_1471320387-small.jpg','img/san_pham/img/san_pham/16316_1471320387-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(408,11,3,'Giày bít mũi tròn BMT 0411','img/san_pham/15416_1470801189-small.jpg','img/san_pham/15416_1470801189-small.jpg','img/san_pham/img/san_pham/15416_1470801189-small.jpg','img/san_pham/img/san_pham/15416_1470801189-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(409,11,3,'Giày bít mũi tròn BMT 0410','img/san_pham/15428_1470802124-small.jpg','img/san_pham/15428_1470802124-small.jpg','img/san_pham/img/san_pham/15428_1470802124-small.jpg','img/san_pham/img/san_pham/15428_1470802124-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(410,11,3,'Giày bít mũi nhọn BMN 0173','img/san_pham/15386_1470726753-small.jpg','img/san_pham/15386_1470726753-small.jpg','img/san_pham/img/san_pham/15386_1470726753-small.jpg','img/san_pham/img/san_pham/15386_1470726753-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(411,11,3,'Giày bít mũi tròn BMT 0404','img/san_pham/14189_1469865178-small.jpg','img/san_pham/14189_1469865178-small.jpg','img/san_pham/img/san_pham/14189_1469865178-small.jpg','img/san_pham/img/san_pham/14189_1469865178-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(412,11,3,'Giày bít mũi nhọn BMN 0172','img/san_pham/14169_1469864623-small.jpg','img/san_pham/14169_1469864623-small.jpg','img/san_pham/img/san_pham/14169_1469864623-small.jpg','img/san_pham/img/san_pham/14169_1469864623-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(413,11,3,'Giày bít hở mũi BHM 0399','img/san_pham/14149_1469864440-small.jpg','img/san_pham/14149_1469864440-small.jpg','img/san_pham/img/san_pham/14149_1469864440-small.jpg','img/san_pham/img/san_pham/14149_1469864440-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(414,11,3,'Giày Bít mũi nhọn BMN 0170','img/san_pham/12826_1468555129-small.jpg','img/san_pham/12826_1468555129-small.jpg','img/san_pham/img/san_pham/12826_1468555129-small.jpg','img/san_pham/img/san_pham/12826_1468555129-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(415,11,3,'Giày Bít mũi hở BMH0398','img/san_pham/12844_1468555205-small.jpg','img/san_pham/12844_1468555205-small.jpg','img/san_pham/img/san_pham/12844_1468555205-small.jpg','img/san_pham/img/san_pham/12844_1468555205-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(416,11,3,'Giày Bít mũi nhọn BMN 0169','img/san_pham/12715_1468204980-small.jpg','img/san_pham/12715_1468204980-small.jpg','img/san_pham/img/san_pham/12715_1468204980-small.jpg','img/san_pham/img/san_pham/12715_1468204980-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(417,11,3,'Giày Bít mũi nhọn BMN 0155','img/san_pham/12749_1468205310-small.jpg','img/san_pham/12749_1468205310-small.jpg','img/san_pham/img/san_pham/12749_1468205310-small.jpg','img/san_pham/img/san_pham/12749_1468205310-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(418,11,3,'Giày Bít mũi tròn BMT 0400','img/san_pham/12617_1467359318-small.jpg','img/san_pham/12617_1467359318-small.jpg','img/san_pham/img/san_pham/12617_1467359318-small.jpg','img/san_pham/img/san_pham/12617_1467359318-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(419,11,3,'Giày bít mũi nhọn BMN 0158','img/san_pham/12523_1466739445-small.jpg','img/san_pham/12523_1466739445-small.jpg','img/san_pham/img/san_pham/12523_1466739445-small.jpg','img/san_pham/img/san_pham/12523_1466739445-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(420,11,3,'Giày bít mũi nhọn BMN 0168','img/san_pham/12344_1465814342-small.jpg','img/san_pham/12344_1465814342-small.jpg','img/san_pham/img/san_pham/12344_1465814342-small.jpg','img/san_pham/img/san_pham/12344_1465814342-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(421,11,3,'Giày bít mũi nhọn BMN 0164','img/san_pham/12252_1465383199-small.jpg','img/san_pham/12252_1465383199-small.jpg','img/san_pham/img/san_pham/12252_1465383199-small.jpg','img/san_pham/img/san_pham/12252_1465383199-small.jpg','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(422,11,3,'Giày bít mũi nhọn BMN 0162','img/san_pham/12276_1465383340-small.jpg','img/san_pham/12276_1465383340-small.jpg','img/san_pham/img/san_pham/12276_1465383340-small.jpg','img/san_pham/img/san_pham/12276_1465383340-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(423,11,3,'Giày bít mũi nhọn BMN 0157','img/san_pham/12154_1465294497-small.jpg','img/san_pham/12154_1465294497-small.jpg','img/san_pham/img/san_pham/12154_1465294497-small.jpg','img/san_pham/img/san_pham/12154_1465294497-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(424,11,3,'Giày bít mũi nhọn BMN 0118','img/san_pham/12135_1465206681-small.jpg','img/san_pham/12135_1465206681-small.jpg','img/san_pham/img/san_pham/12135_1465206681-small.jpg','img/san_pham/img/san_pham/12135_1465206681-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(425,11,3,'Giày Bít Mũi Nhọn BMN 0163','img/san_pham/12113_1464924748-small.jpg','img/san_pham/12113_1464924748-small.jpg','img/san_pham/img/san_pham/12113_1464924748-small.jpg','img/san_pham/img/san_pham/12113_1464924748-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(426,11,3,'Giày Búp Bê Junior JNR 0057','img/san_pham/12046_1464839263-small.jpg','img/san_pham/12046_1464839263-small.jpg','img/san_pham/img/san_pham/12046_1464839263-small.jpg','img/san_pham/img/san_pham/12046_1464839263-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(427,11,3,'Giày Bít Mũi Nhọn BMN 0159','img/san_pham/12075_1464839673-small.jpg','img/san_pham/12075_1464839673-small.jpg','img/san_pham/img/san_pham/12075_1464839673-small.jpg','img/san_pham/img/san_pham/12075_1464839673-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(428,11,3,'Giày Bít Mũi Nhọn BMN 0156','img/san_pham/12093_1464839842-small.jpg','img/san_pham/12093_1464839842-small.jpg','img/san_pham/img/san_pham/12093_1464839842-small.jpg','img/san_pham/img/san_pham/12093_1464839842-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(429,11,3,'Giày Bít mũi tròn BMT 0402','img/san_pham/11826_1463716242-small.jpg','img/san_pham/11826_1463716242-small.jpg','img/san_pham/img/san_pham/11826_1463716242-small.jpg','img/san_pham/img/san_pham/11826_1463716242-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(430,11,3,'Giày Bít mũi nhọn BMN 0160','img/san_pham/11887_1463716577-small.jpg','img/san_pham/11887_1463716577-small.jpg','img/san_pham/img/san_pham/11887_1463716577-small.jpg','img/san_pham/img/san_pham/11887_1463716577-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(431,11,3,'Giày Bít mũi nhọn BMN 0165','img/san_pham/11653_1463387370-small.jpg','img/san_pham/11653_1463387370-small.jpg','img/san_pham/img/san_pham/11653_1463387370-small.jpg','img/san_pham/img/san_pham/11653_1463387370-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(432,11,3,'Giày Bít mũi nhọn BMN 0167','img/san_pham/11671_1463387542-small.jpg','img/san_pham/11671_1463387542-small.jpg','img/san_pham/img/san_pham/11671_1463387542-small.jpg','img/san_pham/img/san_pham/11671_1463387542-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(433,11,3,'Giày Bít mũi tròn BMT 0401','img/san_pham/11452_1463372985-small.jpg','img/san_pham/11452_1463372985-small.jpg','img/san_pham/img/san_pham/11452_1463372985-small.jpg','img/san_pham/img/san_pham/11452_1463372985-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(434,11,3,'Giày bít hở mũi BHM 0397','img/san_pham/11404_1463371399-small.jpg','img/san_pham/11404_1463371399-small.jpg','img/san_pham/img/san_pham/11404_1463371399-small.jpg','img/san_pham/img/san_pham/11404_1463371399-small.jpg','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(435,11,3,'Giày Bít mũi nhọn BMN 0166','img/san_pham/11434_1463371722-small.jpg','img/san_pham/11434_1463371722-small.jpg','img/san_pham/img/san_pham/11434_1463371722-small.jpg','img/san_pham/img/san_pham/11434_1463371722-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(436,11,3,'Giày Bít mũi nhọn BMN 0161','img/san_pham/11416_1463371554-small.jpg','img/san_pham/11416_1463371554-small.jpg','img/san_pham/img/san_pham/11416_1463371554-small.jpg','img/san_pham/img/san_pham/11416_1463371554-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(437,11,3,'Giày bít mũi nhọn cao gót BMN 0140','img/san_pham/11019_1459845187-small.jpg','img/san_pham/11019_1459845187-small.jpg','img/san_pham/img/san_pham/11019_1459845187-small.jpg','img/san_pham/img/san_pham/11019_1459845187-small.jpg','Màu sắc: Xanh Navy. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(438,11,3,'Giày bít mũi nhọn cao gót BMN 0154','img/san_pham/10977_1459765874-small.jpg','img/san_pham/10977_1459765874-small.jpg','img/san_pham/img/san_pham/10977_1459765874-small.jpg','img/san_pham/img/san_pham/10977_1459765874-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(439,11,3,'Giày bít mũi tròn cao gót BMT 0399','img/san_pham/10983_1459766018-small.jpg','img/san_pham/10983_1459766018-small.jpg','img/san_pham/img/san_pham/10983_1459766018-small.jpg','img/san_pham/img/san_pham/10983_1459766018-small.jpg','Màu sắc: Đỏ bầm. <br/>Chất liệu:Da lộn tổng hợp.',30,365000,0,365000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(440,11,3,'Giày bít cao gót BMN 0148','img/san_pham/10318_1457937629-small.jpg','img/san_pham/10318_1457937629-small.jpg','img/san_pham/img/san_pham/10318_1457937629-small.jpg','img/san_pham/img/san_pham/10318_1457937629-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,545000,0,545000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(441,11,3,'Giày bít cao gót BMN 0149','img/san_pham/9107_1455611815-small.jpg','img/san_pham/9107_1455611815-small.jpg','img/san_pham/img/san_pham/9107_1455611815-small.jpg','img/san_pham/img/san_pham/9107_1455611815-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(442,11,3,'Giày bít cao gót mũi tròn BMT 861','img/san_pham/4570_1443770353-small.jpg','img/san_pham/4570_1443770353-small.jpg','img/san_pham/img/san_pham/4570_1443770353-small.jpg','img/san_pham/img/san_pham/4570_1443770353-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(443,11,3,'Giày bít cao gót mũi tròn BMT 285','img/san_pham/9345_1455617221-small.jpg','img/san_pham/9345_1455617221-small.jpg','img/san_pham/img/san_pham/9345_1455617221-small.jpg','img/san_pham/img/san_pham/9345_1455617221-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(444,11,3,'Giày bít cao gót mũi nhọn BMN 888','img/san_pham/8957_1455531221-small.jpg','img/san_pham/8957_1455531221-small.jpg','img/san_pham/img/san_pham/8957_1455531221-small.jpg','img/san_pham/img/san_pham/8957_1455531221-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,385000,0,385000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(445,11,3,'Giày đế bệt mũi nhọn BMN 0117','img/san_pham/8939_1455530921-small.jpg','img/san_pham/8939_1455530921-small.jpg','img/san_pham/img/san_pham/8939_1455530921-small.jpg','img/san_pham/img/san_pham/8939_1455530921-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,385000,0,385000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(446,11,3,'Giày bít mũi nhọn BMN 0113','img/san_pham/8911_1455530507-small.jpg','img/san_pham/8911_1455530507-small.jpg','img/san_pham/img/san_pham/8911_1455530507-small.jpg','img/san_pham/img/san_pham/8911_1455530507-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,385000,0,385000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(447,11,3,'Giày cao gót bít mũi BMT 0388','img/san_pham/8558_1455521407-small.jpg','img/san_pham/8558_1455521407-small.jpg','img/san_pham/img/san_pham/8558_1455521407-small.jpg','img/san_pham/img/san_pham/8558_1455521407-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(448,11,3,'Giày cao gót mũi tròn BMT 0387','img/san_pham/8576_1455521454-small.jpg','img/san_pham/8576_1455521454-small.jpg','img/san_pham/img/san_pham/8576_1455521454-small.jpg','img/san_pham/img/san_pham/8576_1455521454-small.jpg','Màu sắc: Da beo. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(449,11,3,'Giày bít mũi tròn BMT 0386','img/san_pham/8594_1455521829-small.jpg','img/san_pham/8594_1455521829-small.jpg','img/san_pham/img/san_pham/8594_1455521829-small.jpg','img/san_pham/img/san_pham/8594_1455521829-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(450,11,3,'Giày cao gót mũi nhọn BMN 099','img/san_pham/8897_1455530403-small.jpg','img/san_pham/8897_1455530403-small.jpg','img/san_pham/img/san_pham/8897_1455530403-small.jpg','img/san_pham/img/san_pham/8897_1455530403-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(451,11,3,'Giày cao gót bít mũi BMN 0120','img/san_pham/8879_1455529990-small.jpg','img/san_pham/8879_1455529990-small.jpg','img/san_pham/img/san_pham/8879_1455529990-small.jpg','img/san_pham/img/san_pham/8879_1455529990-small.jpg','Màu sắc: Xanh Navy. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(452,11,3,'Giày bít cao gót mũi nhọn BMN 0119','img/san_pham/8861_1455529628-small.jpg','img/san_pham/8861_1455529628-small.jpg','img/san_pham/img/san_pham/8861_1455529628-small.jpg','img/san_pham/img/san_pham/8861_1455529628-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(453,11,3,'Giày bít mũi nhọn đính nơ BMN 0114','img/san_pham/8843_1455528620-small.jpg','img/san_pham/8843_1455528620-small.jpg','img/san_pham/img/san_pham/8843_1455528620-small.jpg','img/san_pham/img/san_pham/8843_1455528620-small.jpg','Màu sắc: Kem đậm. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(454,12,3,'Giày Sandals kẹp SDK 0241','img/san_pham/12669_1467600029-small.jpg','img/san_pham/12669_1467600029-small.jpg','img/san_pham/img/san_pham/12669_1467600029-small.jpg','img/san_pham/img/san_pham/12669_1467600029-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(455,12,3,'Giày Sandals đế xuồng SDX 0365','img/san_pham/12544_1467358624-small.jpg','img/san_pham/12544_1467358624-small.jpg','img/san_pham/img/san_pham/12544_1467358624-small.jpg','img/san_pham/img/san_pham/12544_1467358624-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(456,12,3,'Giày Sandals mũi nhọn SDN 0495','img/san_pham/12562_1467358889-small.jpg','img/san_pham/12562_1467358889-small.jpg','img/san_pham/img/san_pham/12562_1467358889-small.jpg','img/san_pham/img/san_pham/12562_1467358889-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(457,12,3,'Giày Sandals kẹp SDK 0236','img/san_pham/12587_1467359092-small.jpg','img/san_pham/12587_1467359092-small.jpg','img/san_pham/img/san_pham/12587_1467359092-small.jpg','img/san_pham/img/san_pham/12587_1467359092-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(458,12,3,'Giày Sandals nhọn SDN 0503','img/san_pham/12438_1466495380-small.jpg','img/san_pham/12438_1466495380-small.jpg','img/san_pham/img/san_pham/12438_1466495380-small.jpg','img/san_pham/img/san_pham/12438_1466495380-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(459,12,3,'Giày Sandals đế xuồng SDX 0367','img/san_pham/12329_1465814207-small.jpg','img/san_pham/12329_1465814207-small.jpg','img/san_pham/img/san_pham/12329_1465814207-small.jpg','img/san_pham/img/san_pham/12329_1465814207-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(460,12,3,'Giày Sandals đế nhọn SDN 0502','img/san_pham/12294_1465808963-small.jpg','img/san_pham/12294_1465808963-small.jpg','img/san_pham/img/san_pham/12294_1465808963-small.jpg','img/san_pham/img/san_pham/12294_1465808963-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(461,12,3,'Giày Sandals đế nhọn SDN 0501','img/san_pham/12300_1465809033-small.jpg','img/san_pham/12300_1465809033-small.jpg','img/san_pham/img/san_pham/12300_1465809033-small.jpg','img/san_pham/img/san_pham/12300_1465809033-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(462,12,3,'Giày Sandals đế nhọn SDN 0500','img/san_pham/11944_1464171489-small.jpg','img/san_pham/11944_1464171489-small.jpg','img/san_pham/img/san_pham/11944_1464171489-small.jpg','img/san_pham/img/san_pham/11944_1464171489-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(463,12,3,'Giày Sandals JNR 0087','img/san_pham/11859_1463716453-small.jpg','img/san_pham/11859_1463716453-small.jpg','img/san_pham/img/san_pham/11859_1463716453-small.jpg','img/san_pham/img/san_pham/11859_1463716453-small.jpg','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(464,12,3,'Sandals Kẹp SDK 0239','img/san_pham/11614_1463385931-small.jpg','img/san_pham/11614_1463385931-small.jpg','img/san_pham/img/san_pham/11614_1463385931-small.jpg','img/san_pham/img/san_pham/11614_1463385931-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(465,12,3,'Giày Sandals JNR 0086','img/san_pham/11375_1463023133-small.jpg','img/san_pham/11375_1463023133-small.jpg','img/san_pham/img/san_pham/11375_1463023133-small.jpg','img/san_pham/img/san_pham/11375_1463023133-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(466,12,3,'Giày Sandals đế xuồng SDX 0368','img/san_pham/11569_1463380537-small.jpg','img/san_pham/11569_1463380537-small.jpg','img/san_pham/img/san_pham/11569_1463380537-small.jpg','img/san_pham/img/san_pham/11569_1463380537-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(467,12,3,'Giày sandals cao gót SDN 0499','img/san_pham/11544_1463379711-small.jpg','img/san_pham/11544_1463379711-small.jpg','img/san_pham/img/san_pham/11544_1463379711-small.jpg','img/san_pham/img/san_pham/11544_1463379711-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(468,12,3,'Giày sandals cao gót SDN 0496','img/san_pham/11526_1463379370-small.jpg','img/san_pham/11526_1463379370-small.jpg','img/san_pham/img/san_pham/11526_1463379370-small.jpg','img/san_pham/img/san_pham/11526_1463379370-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(469,12,3,'Giày Sandals đế xuồng SDX 0366','img/san_pham/11557_1463380428-small.jpg','img/san_pham/11557_1463380428-small.jpg','img/san_pham/img/san_pham/11557_1463380428-small.jpg','img/san_pham/img/san_pham/11557_1463380428-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(470,12,3,'Giày sandals đế bệt JNR 0080','img/san_pham/11103_1460110930-small.jpg','img/san_pham/11103_1460110930-small.jpg','img/san_pham/img/san_pham/11103_1460110930-small.jpg','img/san_pham/img/san_pham/11103_1460110930-small.jpg','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(471,12,3,'Giày Sandals cao gót SDN 0494','img/san_pham/11121_1460111011-small.jpg','img/san_pham/11121_1460111011-small.jpg','img/san_pham/img/san_pham/11121_1460111011-small.jpg','img/san_pham/img/san_pham/11121_1460111011-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(472,12,3,'Giày Sandals đế xuồng SDX 0363','img/san_pham/11133_1460111248-small.jpg','img/san_pham/11133_1460111248-small.jpg','img/san_pham/img/san_pham/11133_1460111248-small.jpg','img/san_pham/img/san_pham/11133_1460111248-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(473,12,3,'Giày sandals đế xuồng SDX 0364','img/san_pham/10941_1459765598-small.jpg','img/san_pham/10941_1459765598-small.jpg','img/san_pham/img/san_pham/10941_1459765598-small.jpg','img/san_pham/img/san_pham/10941_1459765598-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(474,12,3,'Giày sandals xỏ ngón SDK 0237','img/san_pham/10959_1459765766-small.jpg','img/san_pham/10959_1459765766-small.jpg','img/san_pham/img/san_pham/10959_1459765766-small.jpg','img/san_pham/img/san_pham/10959_1459765766-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(475,12,3,'Giày sandals cao gót SDN 0493','img/san_pham/11001_1459766340-small.jpg','img/san_pham/11001_1459766340-small.jpg','img/san_pham/img/san_pham/11001_1459766340-small.jpg','img/san_pham/img/san_pham/11001_1459766340-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(476,12,3,'Giày Sandals xỏ ngón SDK 0234','img/san_pham/10336_1458879401-small.jpg','img/san_pham/10336_1458879401-small.jpg','img/san_pham/img/san_pham/10336_1458879401-small.jpg','img/san_pham/img/san_pham/10336_1458879401-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(477,12,3,'Giày Sandals đế bệt JNR 0059','img/san_pham/10286_1457602220-small.jpg','img/san_pham/10286_1457602220-small.jpg','img/san_pham/img/san_pham/10286_1457602220-small.jpg','img/san_pham/img/san_pham/10286_1457602220-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(478,12,3,'Giày Sandals đế xuồng SDX 0354','img/san_pham/10274_1457602038-small.jpg','img/san_pham/10274_1457602038-small.jpg','img/san_pham/img/san_pham/10274_1457602038-small.jpg','img/san_pham/img/san_pham/10274_1457602038-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(479,12,3,'Giày Sandals cao gót SDN 888','img/san_pham/9089_1455611708-small.jpg','img/san_pham/9089_1455611708-small.jpg','img/san_pham/img/san_pham/9089_1455611708-small.jpg','img/san_pham/img/san_pham/9089_1455611708-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(480,12,3,'Giày Sandals đế xuồng SDX 0362','img/san_pham/9079_1455611612-small.jpg','img/san_pham/9079_1455611612-small.jpg','img/san_pham/img/san_pham/9079_1455611612-small.jpg','img/san_pham/img/san_pham/9079_1455611612-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(481,12,3,'Giày Sandals cao gót SDN 0468','img/san_pham/8301_1454654988-small.jpg','img/san_pham/8301_1454654988-small.jpg','img/san_pham/img/san_pham/8301_1454654988-small.jpg','img/san_pham/img/san_pham/8301_1454654988-small.jpg','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(482,12,3,'Giày Sandals cao gót quai ngang SDN 0489','img/san_pham/10262_1457601548-small.jpg','img/san_pham/10262_1457601548-small.jpg','img/san_pham/img/san_pham/10262_1457601548-small.jpg','img/san_pham/img/san_pham/10262_1457601548-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(483,13,3,'Balo TXL 1198','img/san_pham/18548_1476067161-small.jpg','img/san_pham/18548_1476067161-small.jpg','img/san_pham/img/san_pham/18548_1476067161-small.jpg','img/san_pham/img/san_pham/18548_1476067161-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(484,13,3,'Balo TXL 1197','img/san_pham/18552_1476067214-small.jpg','img/san_pham/18552_1476067214-small.jpg','img/san_pham/img/san_pham/18552_1476067214-small.jpg','img/san_pham/img/san_pham/18552_1476067214-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(485,13,3,'Balo khóa kéo TXL 1186','img/san_pham/17673_1472728834-small.jpg','img/san_pham/17673_1472728834-small.jpg','img/san_pham/img/san_pham/17673_1472728834-small.jpg','img/san_pham/img/san_pham/17673_1472728834-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(486,13,3,'Balo thời trang trơn TXL 1248','img/san_pham/17453_1472704588-small.jpg','img/san_pham/17453_1472704588-small.jpg','img/san_pham/img/san_pham/17453_1472704588-small.jpg','img/san_pham/img/san_pham/17453_1472704588-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(487,13,3,'Balo thời trang nắp gập họa tiết da rắn TXL 1187','img/san_pham/17481_1472705098-small.jpg','img/san_pham/17481_1472705098-small.jpg','img/san_pham/img/san_pham/17481_1472705098-small.jpg','img/san_pham/img/san_pham/17481_1472705098-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(488,13,3,'Balo TXL 1166','img/san_pham/15342_1470314881-small.jpg','img/san_pham/15342_1470314881-small.jpg','img/san_pham/img/san_pham/15342_1470314881-small.jpg','img/san_pham/img/san_pham/15342_1470314881-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(489,13,3,'Balo TXL 1176','img/san_pham/15348_1470314925-small.jpg','img/san_pham/15348_1470314925-small.jpg','img/san_pham/img/san_pham/15348_1470314925-small.jpg','img/san_pham/img/san_pham/15348_1470314925-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(490,13,3,'Balo TXL 1177','img/san_pham/12739_1468205064-small.jpg','img/san_pham/12739_1468205064-small.jpg','img/san_pham/img/san_pham/12739_1468205064-small.jpg','img/san_pham/img/san_pham/12739_1468205064-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(491,13,3,'Balo TXL 1167','img/san_pham/12745_1468205151-small.jpg','img/san_pham/12745_1468205151-small.jpg','img/san_pham/img/san_pham/12745_1468205151-small.jpg','img/san_pham/img/san_pham/12745_1468205151-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(492,13,3,'Balo TXL 1165','img/san_pham/12884_1468926333-small.jpg','img/san_pham/12884_1468926333-small.jpg','img/san_pham/img/san_pham/12884_1468926333-small.jpg','img/san_pham/img/san_pham/12884_1468926333-small.jpg','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(493,13,3,'Balo TXL 1094','img/san_pham/12320_1465814083-small.jpg','img/san_pham/12320_1465814083-small.jpg','img/san_pham/img/san_pham/12320_1465814083-small.jpg','img/san_pham/img/san_pham/12320_1465814083-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(494,13,3,'Túi xách tay TXL 1105','img/san_pham/12180_1465381948-small.jpg','img/san_pham/12180_1465381948-small.jpg','img/san_pham/img/san_pham/12180_1465381948-small.jpg','img/san_pham/img/san_pham/12180_1465381948-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(495,13,3,'Balo TXL 1104','img/san_pham/11800_1463715439-small.jpg','img/san_pham/11800_1463715439-small.jpg','img/san_pham/img/san_pham/11800_1463715439-small.jpg','img/san_pham/img/san_pham/11800_1463715439-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(496,13,3,'Balo TXL 1099','img/san_pham/11583_1463380621-small.jpg','img/san_pham/11583_1463380621-small.jpg','img/san_pham/img/san_pham/11583_1463380621-small.jpg','img/san_pham/img/san_pham/11583_1463380621-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(497,13,3,'Balo TXL 1093','img/san_pham/11059_1460109872-small.jpg','img/san_pham/11059_1460109872-small.jpg','img/san_pham/img/san_pham/11059_1460109872-small.jpg','img/san_pham/img/san_pham/11059_1460109872-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(498,13,3,'Balo TXL 1119','img/san_pham/11067_1460110484-small.jpg','img/san_pham/11067_1460110484-small.jpg','img/san_pham/img/san_pham/11067_1460110484-small.jpg','img/san_pham/img/san_pham/11067_1460110484-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(499,13,3,'Balo TXL 1027','img/san_pham/11055_1459846110-small.jpg','img/san_pham/11055_1459846110-small.jpg','img/san_pham/img/san_pham/11055_1459846110-small.jpg','img/san_pham/img/san_pham/11055_1459846110-small.jpg','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(500,13,4,'Balo TXL 1092','img/san_pham/10833_1459758404-small.jpg','img/san_pham/10833_1459758404-small.jpg','img/san_pham/img/san_pham/10833_1459758404-small.jpg','img/san_pham/img/san_pham/10833_1459758404-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,40,270000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(501,13,4,'Balo TXL 1121','img/san_pham/10843_1459760128-small.jpg','img/san_pham/10843_1459760128-small.jpg','img/san_pham/img/san_pham/10843_1459760128-small.jpg','img/san_pham/img/san_pham/10843_1459760128-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(502,13,4,'Balo TXL 1120','img/san_pham/10849_1459763609-small.jpg','img/san_pham/10849_1459763609-small.jpg','img/san_pham/img/san_pham/10849_1459763609-small.jpg','img/san_pham/img/san_pham/10849_1459763609-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(503,13,4,'Ba lô TXL 1026','img/san_pham/10244_1457075809-small.jpg','img/san_pham/10244_1457075809-small.jpg','img/san_pham/img/san_pham/10244_1457075809-small.jpg','img/san_pham/img/san_pham/10244_1457075809-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(504,13,4,'Túi xách tay TXL 1036','img/san_pham/7751_1452240665-small.jpg','img/san_pham/7751_1452240665-small.jpg','img/san_pham/img/san_pham/7751_1452240665-small.jpg','img/san_pham/img/san_pham/7751_1452240665-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(505,13,4,'Balo TXL 1039','img/san_pham/7557_1450774429-small.jpg','img/san_pham/7557_1450774429-small.jpg','img/san_pham/img/san_pham/7557_1450774429-small.jpg','img/san_pham/img/san_pham/7557_1450774429-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(506,13,4,'Túi xách TXL 1006','img/san_pham/7439_1449546271-small.jpg','img/san_pham/7439_1449546271-small.jpg','img/san_pham/img/san_pham/7439_1449546271-small.jpg','img/san_pham/img/san_pham/7439_1449546271-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(507,13,4,'Balo TXL 1032','img/san_pham/6821_1448675692-small.jpg','img/san_pham/6821_1448675692-small.jpg','img/san_pham/img/san_pham/6821_1448675692-small.jpg','img/san_pham/img/san_pham/6821_1448675692-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(508,13,4,'Balo TXL 1019','img/san_pham/6847_1448679270-small.jpg','img/san_pham/6847_1448679270-small.jpg','img/san_pham/img/san_pham/6847_1448679270-small.jpg','img/san_pham/img/san_pham/6847_1448679270-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(509,13,4,'Ba lô nắp gập TXL 0742','img/san_pham/6725_1446540739-small.jpg','img/san_pham/6725_1446540739-small.jpg','img/san_pham/img/san_pham/6725_1446540739-small.jpg','img/san_pham/img/san_pham/6725_1446540739-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(510,13,4,'Balo nắp gập TXL 0732','img/san_pham/6223_1444718153-small.jpg','img/san_pham/6223_1444718153-small.jpg','img/san_pham/img/san_pham/6223_1444718153-small.jpg','img/san_pham/img/san_pham/6223_1444718153-small.jpg','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:00'),(511,14,4,'Túi xách nắp gập đính kim loại TXL 1242','img/san_pham/17648_1472728442-small.jpg','img/san_pham/17648_1472728442-small.jpg','img/san_pham/img/san_pham/17648_1472728442-small.jpg','img/san_pham/img/san_pham/17648_1472728442-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(512,14,4,'Túi xách hai quai da trơn TXL 1196','img/san_pham/17652_1472728551-small.jpg','img/san_pham/17652_1472728551-small.jpg','img/san_pham/img/san_pham/17652_1472728551-small.jpg','img/san_pham/img/san_pham/17652_1472728551-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(513,14,4,'Túi xách cách điệu TXL 1195','img/san_pham/17658_1472728603-small.jpg','img/san_pham/17658_1472728603-small.jpg','img/san_pham/img/san_pham/17658_1472728603-small.jpg','img/san_pham/img/san_pham/17658_1472728603-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(514,14,4,'Túi xách nắp gập khóa gài kim loại TXL 1194','img/san_pham/17662_1472728676-small.jpg','img/san_pham/17662_1472728676-small.jpg','img/san_pham/img/san_pham/17662_1472728676-small.jpg','img/san_pham/img/san_pham/17662_1472728676-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(515,14,4,'Túi xách nắp hai khóa kéo TXL 1193','img/san_pham/17669_1472728774-small.jpg','img/san_pham/17669_1472728774-small.jpg','img/san_pham/img/san_pham/17669_1472728774-small.jpg','img/san_pham/img/san_pham/17669_1472728774-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(516,14,4,'Túi xách tay khóa cách điệu TXL 494','img/san_pham/17677_1472728888-small.jpg','img/san_pham/17677_1472728888-small.jpg','img/san_pham/img/san_pham/17677_1472728888-small.jpg','img/san_pham/img/san_pham/17677_1472728888-small.jpg','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(517,14,4,'Túi xách TXL 1170','img/san_pham/15440_1470802156-small.jpg','img/san_pham/15440_1470802156-small.jpg','img/san_pham/img/san_pham/15440_1470802156-small.jpg','img/san_pham/img/san_pham/15440_1470802156-small.jpg','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(518,14,4,'Túi xách TXL 1169','img/san_pham/15442_1470802201-small.jpg','img/san_pham/15442_1470802201-small.jpg','img/san_pham/img/san_pham/15442_1470802201-small.jpg','img/san_pham/img/san_pham/15442_1470802201-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(519,14,4,'Túi xách TXL 1178','img/san_pham/15352_1470314954-small.jpg','img/san_pham/15352_1470314954-small.jpg','img/san_pham/img/san_pham/15352_1470314954-small.jpg','img/san_pham/img/san_pham/15352_1470314954-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(520,14,4,'Túi xách TXL 1180','img/san_pham/15356_1470314998-small.jpg','img/san_pham/15356_1470314998-small.jpg','img/san_pham/img/san_pham/15356_1470314998-small.jpg','img/san_pham/img/san_pham/15356_1470314998-small.jpg','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(521,14,4,'Túi xách TXL 1188','img/san_pham/14222_1469865843-small.jpg','img/san_pham/14222_1469865843-small.jpg','img/san_pham/img/san_pham/14222_1469865843-small.jpg','img/san_pham/img/san_pham/14222_1469865843-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(522,14,4,'Túi xách TXL 1185','img/san_pham/14228_1469865918-small.jpg','img/san_pham/14228_1469865918-small.jpg','img/san_pham/img/san_pham/14228_1469865918-small.jpg','img/san_pham/img/san_pham/14228_1469865918-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(523,14,4,'Túi xách nắp gập đính kim loại TXL 1242','img/san_pham/17648_1472728442-small.jpg','img/san_pham/17648_1472728442-small.jpg','img/san_pham/img/san_pham/17648_1472728442-small.jpg','img/san_pham/img/san_pham/17648_1472728442-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:02','2016-12-12 21:37:01'),(524,14,4,'Túi xách hai quai da trơn TXL 1196','img/san_pham/17652_1472728551-small.jpg','img/san_pham/17652_1472728551-small.jpg','img/san_pham/img/san_pham/17652_1472728551-small.jpg','img/san_pham/img/san_pham/17652_1472728551-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(525,14,4,'Túi xách cách điệu TXL 1195','img/san_pham/17658_1472728603-small.jpg','img/san_pham/17658_1472728603-small.jpg','img/san_pham/img/san_pham/17658_1472728603-small.jpg','img/san_pham/img/san_pham/17658_1472728603-small.jpg','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(526,14,4,'Túi xách nắp gập khóa gài kim loại TXL 1194','img/san_pham/17662_1472728676-small.jpg','img/san_pham/17662_1472728676-small.jpg','img/san_pham/img/san_pham/17662_1472728676-small.jpg','img/san_pham/img/san_pham/17662_1472728676-small.jpg','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,525000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(527,14,4,'Túi xách nắp hai khóa kéo TXL 1193','img/san_pham/17669_1472728774-small.jpg','img/san_pham/17669_1472728774-small.jpg','img/san_pham/img/san_pham/17669_1472728774-small.jpg','img/san_pham/img/san_pham/17669_1472728774-small.jpg','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(528,14,4,'Túi xách tay khóa cách điệu TXL 494','img/san_pham/17677_1472728888-small.jpg','img/san_pham/17677_1472728888-small.jpg','img/san_pham/img/san_pham/17677_1472728888-small.jpg','img/san_pham/img/san_pham/17677_1472728888-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(529,14,4,'Túi xách TXL 1170','img/san_pham/15440_1470802156-small.jpg','img/san_pham/15440_1470802156-small.jpg','img/san_pham/img/san_pham/15440_1470802156-small.jpg','img/san_pham/img/san_pham/15440_1470802156-small.jpg','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(530,14,4,'Túi xách TXL 1169','img/san_pham/15442_1470802201-small.jpg','img/san_pham/15442_1470802201-small.jpg','img/san_pham/img/san_pham/15442_1470802201-small.jpg','img/san_pham/img/san_pham/15442_1470802201-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,495000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(531,14,4,'Túi xách TXL 1178','img/san_pham/15352_1470314954-small.jpg','img/san_pham/15352_1470314954-small.jpg','img/san_pham/img/san_pham/15352_1470314954-small.jpg','img/san_pham/img/san_pham/15352_1470314954-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(532,14,4,'Túi xách TXL 1180','img/san_pham/15356_1470314998-small.jpg','img/san_pham/15356_1470314998-small.jpg','img/san_pham/img/san_pham/15356_1470314998-small.jpg','img/san_pham/img/san_pham/15356_1470314998-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(533,14,4,'Túi xách TXL 1188','img/san_pham/14222_1469865843-small.jpg','img/san_pham/14222_1469865843-small.jpg','img/san_pham/img/san_pham/14222_1469865843-small.jpg','img/san_pham/img/san_pham/14222_1469865843-small.jpg','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,475000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(534,14,4,'Túi xách TXL 1185','img/san_pham/14228_1469865918-small.jpg','img/san_pham/14228_1469865918-small.jpg','img/san_pham/img/san_pham/14228_1469865918-small.jpg','img/san_pham/img/san_pham/14228_1469865918-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(535,14,4,'Túi xách TXL 1184','img/san_pham/14236_1469866058-small.jpg','img/san_pham/14236_1469866058-small.jpg','img/san_pham/img/san_pham/14236_1469866058-small.jpg','img/san_pham/img/san_pham/14236_1469866058-small.jpg','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(536,14,4,'Túi xách TXL 1181','img/san_pham/14218_1469865790-small.jpg','img/san_pham/14218_1469865790-small.jpg','img/san_pham/img/san_pham/14218_1469865790-small.jpg','img/san_pham/img/san_pham/14218_1469865790-small.jpg','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(537,14,4,'Túi xách TXL 1171','img/san_pham/12774_1468554602-small.jpg','img/san_pham/12774_1468554602-small.jpg','img/san_pham/img/san_pham/12774_1468554602-small.jpg','img/san_pham/img/san_pham/12774_1468554602-small.jpg','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(538,14,4,'Túi xách TXL 1173','img/san_pham/12784_1468554637-small.jpg','img/san_pham/12784_1468554637-small.jpg','img/san_pham/img/san_pham/12784_1468554637-small.jpg','img/san_pham/img/san_pham/12784_1468554637-small.jpg','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,425000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01'),(539,14,4,'Túi xách TXL 1174','img/san_pham/12786_1468554769-small.jpg','img/san_pham/12786_1468554769-small.jpg','img/san_pham/img/san_pham/12786_1468554769-small.jpg','img/san_pham/img/san_pham/12786_1468554769-small.jpg','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,450000,'MINX',1,'2016-11-01 15:43:03','2016-12-12 21:37:01');
/*!40000 ALTER TABLE `san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tai_khoan_nguoi_ban`
--

DROP TABLE IF EXISTS `tai_khoan_nguoi_ban`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tai_khoan_nguoi_ban` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_shop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public/img/tai_khoan_nguoi_mua/no-avatar.png',
  `gioi_tinh` tinyint(4) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_kich_hoat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_tai_khoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_khoi_phuc_mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tinh_trang` int(11) NOT NULL DEFAULT '12',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tai_khoan_nguoi_ban_ten_dang_nhap_unique` (`ten_dang_nhap`),
  UNIQUE KEY `tai_khoan_nguoi_ban_email_unique` (`email`),
  UNIQUE KEY `tai_khoan_nguoi_ban_ten_shop_unique` (`ten_shop`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tai_khoan_nguoi_ban`
--

LOCK TABLES `tai_khoan_nguoi_ban` WRITE;
/*!40000 ALTER TABLE `tai_khoan_nguoi_ban` DISABLE KEYS */;
INSERT INTO `tai_khoan_nguoi_ban` VALUES (1,'merchantA','$2y$10$RRIjPEK9OfZobaAwYsddFuuXdFhFlNmaQ8qTEa1zmsysaGhhLQvVi','kimxuanhuynh21@gmail.com','Shop xiaomi','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Huỳnh','Xuân','0121218563','231 Phan Văn Khỏe p5 q2','c9iF6MSqbx9ovE4a1tFP',NULL,NULL,9,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(2,'merchantB','$2y$10$39AH5LJr8B2O9S33j1iXKOZsx.2xwhAP0q9zO.MZrPRCLH/./SVju','nhieu@gmail.com','Shop oppo','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Nguyễn','Nhiều','0121218565','3 Hậu Giang p6 q2','',NULL,NULL,9,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(3,'merchantC','$2y$10$bvlfAI1UWXWvWiyA24PwVesxVNtu2rBVkIW992pGbTuNxCNPgSlPG','hieu@gmail.com','Son handmade','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Nguyễn','Hiếu','0909218565','42 Lũy Bán Bích quận Bình Tân','gQgAAqlvJSyln8CWv0iA',NULL,NULL,10,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(4,'merchantD','$2y$10$ky.4GR0.3UhNpDNbh72BUuG5PA7M67yk0qLmdJhhhY1kcW1bioVxK','quynhnhucheer@gmail.com','Shop đồ cũ','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Tran','Nhu','0909218323','1 An Dương Vương q5','JaNqF7siVTijMvtl2Sk0',NULL,NULL,9,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(5,'merchantE','$2y$10$UtdIpCyGdxxOCjYOtmE4T.99/cskMX0s5ld6s1V5mbO5BVtn6o1Ja','quan@gmail.com','Shop dầu dừa','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Ha','Quan','0121218323','32 Bình Tiên q5','',NULL,NULL,8,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(6,'merchantF','$2y$10$8XTboKpeYzURiIG29AYi5.KBz2dXD34ayUsxJ/0kukvHan6ITcXim','duyanh@gmail.com','Shop miu miu','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Duy','Anh','0909213456','87 Bình Thới q5','P2Z5yb1InYD4uVAj03em',NULL,NULL,9,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(7,'merchantG','$2y$10$DYeLM.4lZTp1ucewi6IiDeuSOdE0LczBOq8FUatqgV5N5ov3QewvW','baobinh@gmail.com','Shop Tinh Tinh','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Bảo','Bình','0908546565','87 Lạc Long Quân q5','GYGaTwsQyDZOBsHjRuRD',NULL,NULL,10,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(8,'merchantH','$2y$10$FBgyLks28GGPak37V4emG.xmRL6ZDbZHn/WufPuJBbd8Ofv4ItApO','chung@gmail.com','Shop Hanna','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Quốc','Chung','0121212223','32 Cao Đạt q5','',NULL,NULL,8,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(9,'merchantI','$2y$10$A2sZhtjJdhJW37K.2unH6Of//KZROgJU.JMPfCN1dEX9aJIUoKY8m','quocdat@gmail.com','Shop beiu','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Quốc','Đạt','0909211236','23 Cô Giang q1','0Lz0zDh4oCXCvpxTRMtW',NULL,NULL,9,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36'),(10,'merchantJ','$2y$10$18xKFYb8WPnLS5e6UoHvf.8F6nsqR0MSWc5EjRbs8lu8PO8Pm2rZS','xuyen@gmail.com','Shop Ba Ba','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Kim','Xuyến','0121254656','87 Lạc Long Quân q5','UfKZcpgfSdqjuQjfBEnp',NULL,NULL,10,NULL,'2010-03-02 15:19:36','2010-03-02 15:19:36');
/*!40000 ALTER TABLE `tai_khoan_nguoi_ban` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tai_khoan_nguoi_mua`
--

DROP TABLE IF EXISTS `tai_khoan_nguoi_mua`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tai_khoan_nguoi_mua` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh_dai_dien` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public/img/tai_khoan_nguoi_mua/no-avatar.png',
  `gioi_tinh` tinyint(4) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_kich_hoat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_khoi_phuc_mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tinh_trang` int(11) NOT NULL DEFAULT '12',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tai_khoan_nguoi_mua_ten_dang_nhap_unique` (`ten_dang_nhap`),
  UNIQUE KEY `tai_khoan_nguoi_mua_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tai_khoan_nguoi_mua`
--

LOCK TABLES `tai_khoan_nguoi_mua` WRITE;
/*!40000 ALTER TABLE `tai_khoan_nguoi_mua` DISABLE KEYS */;
INSERT INTO `tai_khoan_nguoi_mua` VALUES (1,'customerX','$2y$10$0KR.FFg92K53rDyQIekGnev8LA6A8rb1IYQ6pC.6g/X1gG4hPsa0K','kimxuanhuynh21@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Huỳnh','Xuân','0121218563','231 Phan Văn Khỏe p5 q2','1ZqQQcEMcEvu0lZ890nh',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(2,'customerY','$2y$10$a.ZVuuLbzzt/APWd0UqCbOO.5BuHVwTZQ70jc4CIHLy/RYmquAg6a','nhung@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Phạm','Tín','0121218565','3 Hậu Giang p6 q2','TDeyVL6II6TwYEy1EkUo',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(3,'customerA','$2y$10$c.PxlvdpUYMmO0gUo.A.nuB47G447OFxMAu5kOyK8JpiCi6KtITBy','nhan@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Nguyễn','Nhân','0909218565','42 Lũy Bán Bích quận Bình Tân','4hzTJlPgkvSvNmCCStOh',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(4,'customerB','$2y$10$NpxdHov5jXMyDs490udhQeLkvwqy7Sn81vMzW.SGv7gqHvmqifLRi','hung@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Lê','Hùng','0909218323','1 An Dương Vương q5','g5xMNwWNkln6y9CG21TL',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(5,'customerC','$2y$10$T5jOhxcTACSa7CMMV0u0ae2J1OxofCxKH6v3Sk4slbCDwxTTIXNde','tram@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Phạm','Trâm','0121218323','32 Bình Tiên q5','axzXBpWzL22a30KyUE76',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(6,'customerD','$2y$10$0BqtW.L8Rv/eUviT/derTeqQqfP0k76BqnWoGa9o51.Z2UrFRHSqK','anhtuan@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Anh','Tuấn','0909219898','98 An Dương Vương q5','7BW1QMMsIHPUcaR2p2Fr',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(7,'customerE','$2y$10$K5gdo6e4N9YCCUXde.7rfeMU4pRlH1NQa3S0OSfb3TOICfPnrL89e','xuyen@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Phạm','Xuyến','0909218323','32 An Lạc q5','DmY6M28xMS1wg2t4gfWZ',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(8,'customerF','$2y$10$0uURJOHuQ0FRwfh.ZEaIfuXtDQFAqZfteoqVQfQoKZTazIAWkrQAa','phucluong@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',0,'Phúc','Lương','0121219820','98 Nguyễn Trãi q5','xM2O1LFvdPfihvKxEJia',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(9,'customerG','$2y$10$d0SHC/PhOUr12pnXd0DuK.HNoNovNoJu8GG6g34Xf1RY18gncYIHe','yen@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Phạm','Yến','0909212323','32 Âu Cơ q5','l40OZzMyHIF2ijlCNAi5',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51'),(10,'customerH','$2y$10$nWTs1uhb.cJe5kkdCUY9iO49SimPIjv.0iw6tPPfNxtflZPgyalTC','truc@gmail.com','public/img/tai_khoan_nguoi_mua/no-avatar.png',1,'Phạm','Trúc','0909223456','90 Âu Cơ q5','TwmwzWKdFiJxLdRT9e7k',NULL,12,NULL,'2013-02-12 18:09:51','2013-02-12 18:09:51');
/*!40000 ALTER TABLE `tai_khoan_nguoi_mua` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thong_tin_giao_hang`
--

DROP TABLE IF EXISTS `thong_tin_giao_hang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thong_tin_giao_hang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_tai_khoan` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_nhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thong_tin_giao_hang`
--

LOCK TABLES `thong_tin_giao_hang` WRITE;
/*!40000 ALTER TABLE `thong_tin_giao_hang` DISABLE KEYS */;
/*!40000 ALTER TABLE `thong_tin_giao_hang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tinh_trang`
--

DROP TABLE IF EXISTS `tinh_trang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tinh_trang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tinh_trang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thuoc_tinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tinh_trang`
--

LOCK TABLES `tinh_trang` WRITE;
/*!40000 ALTER TABLE `tinh_trang` DISABLE KEYS */;
INSERT INTO `tinh_trang` VALUES (1,'Còn hàng','san_pham','id_tinh_trang'),(2,'Hết hàng','san_pham','id_tinh_trang'),(3,'Chưa liên lạc','chi_tiet_giao_dich','id_tinh_trang'),(4,'Chưa giao','chi_tiet_giao_dich','id_tinh_trang'),(5,'Giao thành công','chi_tiet_giao_dich','id_tinh_trang'),(6,'Giao không thành công','chi_tiet_giao_dich','id_tinh_trang'),(7,'Hủy','chi_tiet_giao_dich','id_tinh_trang'),(8,'Chưa kích hoạt','tai_khoan_nguoi_ban','id_tinh_trang'),(9,'Đã kích hoạt','tai_khoan_nguoi_ban','id_tinh_trang'),(10,'Bị khóa','tai_khoan_nguoi_ban','id_tinh_trang'),(11,'Chưa kích hoạt','tai_khoan_nguoi_mua','id_tinh_trang'),(12,'Đã kích hoạt','tai_khoan_nguoi_mua','id_tinh_trang'),(13,'Bị khóa','tai_khoan_nguoi_mua','id_tinh_trang'),(14,'Chuyển khoản','hoa_don_tai_khoan','hinh_thuc_thanh_toan'),(15,'Chưa liên lạc','giao_dich_nguoi_ban','id_tinh_trang'),(16,'Chưa giao','giao_dich_nguoi_ban','id_tinh_trang'),(17,'Giao thành công','giao_dich_nguoi_ban','id_tinh_trang'),(18,'Giao không thành công','giao_dich_nguoi_ban','id_tinh_trang'),(19,'Hủy','giao_dich_nguoi_ban','id_tinh_trang');
/*!40000 ALTER TABLE `tinh_trang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'tmdt'
--
/*!50003 DROP PROCEDURE IF EXISTS `GiaoDich_TaiKhoan_GetYear` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GiaoDich_TaiKhoan_GetYear`()
BEGIN
	SELECT DISTINCT YEAR(ngay_tao) AS sort_year FROM hoa_don_tai_khoan;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Giao_Dich_GetYear` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Giao_Dich_GetYear`()
BEGIN
SELECT DISTINCT YEAR(ngay_tao) AS sort_year FROM giao_dich;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `Giao_Dich_NguoiBan_GetYear` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `Giao_Dich_NguoiBan_GetYear`()
BEGIN
SELECT DISTINCT YEAR(thoi_gian_giao_dich) AS sort_year FROM giao_dich_nguoi_ban;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ThongKe_LoiNhuan_Nam` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ThongKe_LoiNhuan_Nam`(in s_year int, in s_month int)
BEGIN

declare count_item int default 0;
declare tmp int default 0;
declare ThanhTien int default 0;
declare TongTien int default 0;
set count_item = (SELECT count(*) from hoa_don_tai_khoan 
where year(ngay_tao) = s_year and month(ngay_tao) = s_month);
WHILE(count_item > 0)
DO
SET tmp = count_item -1;
SET ThanhTien = (SELECT so_tien_chuyen_khoan FROM hoa_don_tai_khoan
WHERE year(ngay_tao) = s_year and month(ngay_tao) = s_month limit tmp, 1);
SET TongTien = TongTien + ThanhTien;
SET count_item = count_item - 1;

end while;
SELECT TongTien as TongTien;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-13  4:51:12
