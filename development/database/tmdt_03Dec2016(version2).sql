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
INSERT INTO `danh_muc_san_pham` VALUES (1,0,'Quần',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(2,0,'Áo',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(3,0,'Giày',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(4,0,'Túi xách',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(5,0,'Khác',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(6,1,'Quần Jeans',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(7,1,'Quần Shorts',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(8,2,'Áo khoác',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(9,5,'Ví',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(10,3,'Giày búp bê',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(11,3,'Giày bít',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(12,3,'Giày Sandals',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(13,4,'Balo',1,'2016-12-03 06:23:04','2016-12-03 06:23:04'),(14,4,'Túi xách',1,'2016-12-03 06:23:04','2016-12-03 06:23:04');
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
  `thoi_gian_giao_dich` datetime NOT NULL,
  `dia_chi_giao_hang` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai_giao_hang` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ten_nguoi_nhan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ma_khuyen_mai` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tong_tien` int(11) NOT NULL,
  `id_tinh_trang` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (73,'2014_10_12_000000_create_users_table',1),(74,'2014_10_12_100000_create_password_resets_table',1),(75,'2016_09_25_055622_create_san_pham_table',1),(76,'2016_09_25_085957_create_giao_dich_table',1),(77,'2016_09_28_171104_create_quan_tri_vien_table',1),(78,'2016_09_30_031741_create_danh_muc_san_pham_table',1),(79,'2016_10_01_102018_create_chi_tiet_giao_dich_table',1),(80,'2016_10_04_020931_create_danh_gia_san_pham_table',1),(81,'2016_10_04_021530_create_thong_tin_giao_hang_table',1),(82,'2016_10_08_151323_create_tinh_trang_table',1),(83,'2016_10_24_170746_create_tai_khoan_nguoi_mua_table',1),(84,'2016_11_11_140517_create_tai_khoan_nguoi_ban_table',1);
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
  `id_tinh_trang` int(11) NOT NULL,
  `phan_quyen` tinyint(4) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `quan_tri_vien_ten_dang_nhap_unique` (`ten_dang_nhap`),
  UNIQUE KEY `quan_tri_vien_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quan_tri_vien`
--

LOCK TABLES `quan_tri_vien` WRITE;
/*!40000 ALTER TABLE `quan_tri_vien` DISABLE KEYS */;
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
INSERT INTO `san_pham` VALUES (282,6,6,'Skinny Regular Ankle Jeans','jeans_hm1.jpg','jeans_hm1.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(283,6,6,'Skinny Regular Ankle Jeans','jeans_hm2.jpg','jeans_hm2.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(284,6,6,'Skinny Regular Ankle Jeans','jeans_hm3.jpg','jeans_hm3.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(285,6,6,'Straight Cropped High Jeans','jeans_hm4.jpg','jeans_hm4.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(286,6,6,'Straight Cropped High Jeans','jeans_hm5.jpg','jeans_hm5.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(287,6,6,'Skinny Regular Ankle Jeans','jeans_hm6.jpg','jeans_hm6.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(288,6,6,'Super Skinny High Jeggings','jeans_hm7.jpg','jeans_hm7.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(289,6,6,'Super Skinny Low Jeans','jeans_hm8.jpg','jeans_hm8.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(290,6,6,'Super Skinny Low Jeans','jeans_hm9.jpg','jeans_hm9.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(291,6,6,'Super Skinny High Jeggings','jeans_hm10.jpg','jeans_hm10.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,495000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(292,6,6,'Super Skinny Low Jeans','jeans_hm11.jpg','jeans_hm11.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(293,6,6,'Super Skinny High Jeggings','jeans_hm12.jpg','jeans_hm12.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(294,6,6,'Super Skinny Low Jeans','jeans_hm13.jpg','jeans_hm13.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(295,6,6,'Super Skinny Low Jeans','jeans_hm14.jpg','jeans_hm14.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(296,6,6,'Feather Soft Low Jeggings','jeans_hm15.jpg','jeans_hm15.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(297,6,6,'Shaping Skinny Regular Jeans','jeans_hm16.jpg','jeans_hm16.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(298,6,6,'Skinny Low Ankle Jeans','jeans_hm17.jpg','jeans_hm17.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(299,6,6,'Shaping Skinny Regular Jeans','jeans_hm18.jpg','jeans_hm18.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(300,6,6,'Shaping Skinny Regular Jeans','jeans_hm19.jpg','jeans_hm19.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(301,6,6,'Feather Soft Low Jeggings','jeans_hm20.jpg','jeans_hm20.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,495000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(302,6,6,'Skinny Regular Ankle Jeans','jeans_hm21.jpg','jeans_hm21.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,475000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(303,6,6,'Skinny Regular Ankle Jeans','jeans_hm22.jpg','jeans_hm22.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(304,6,6,'Skinny Regular Ankle Jeans','jeans_hm23.jpg','jeans_hm23.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,475000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(305,6,6,'Super Skinny High Jeggings','jeans_hm24.jpg','jeans_hm24.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(306,6,6,'Super Skinny Low Jeans','jeans_hm25.jpg','jeans_hm25.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(307,6,6,'Super Skinny Low Jeans','jeans_hm26.jpg','jeans_hm26.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(308,6,6,'Super Skinny High Jeggings','jeans_hm27.jpg','jeans_hm27.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(309,6,6,'Shaping Skinny Regular Jeans','jeans_hm28.jpg','jeans_hm28.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(310,6,6,'Skinny Low Ankle Jeans','jeans_hm29.jpg','jeans_hm29.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(311,7,7,'Modal-blend Shorts','shorts_hm1.jpg','shorts_hm1.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(312,7,7,'Superstretch Twill Shorts','shorts_hm2.jpg','shorts_hm2.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(313,7,7,'Superstretch Twill Shorts','shorts_hm3.jpg','shorts_hm3.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(314,7,7,'Modal-blend Shorts','shorts_hm4.jpg','shorts_hm4.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(315,7,7,'Denim Shorts','shorts_hm5.jpg','shorts_hm5.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(316,7,7,'Twill Shorts','shorts_hm6.jpg','shorts_hm6.jpg','','','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(317,7,7,'Imitation Leather Shorts','shorts_hm7.jpg','shorts_hm7.jpg','','','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(318,7,7,'Twill Shorts','shorts_hm8.jpg','shorts_hm8.jpg','','','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(319,7,7,'Short Shorts','shorts_hm9.jpg','shorts_hm9.jpg','','','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(320,7,7,'Twill Shorts','shorts_hm10.jpg','shorts_hm10.jpg','','','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,495000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(321,7,7,'Denim Shorts','shorts_hm11.jpg','shorts_hm11.jpg','','','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(322,7,7,'Crêped Shorts','shorts_hm12.jpg','shorts_hm12.jpg','','','Màu sắc: Đen. <br/>Chiều dài:50cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(323,7,7,'Short Shorts','shorts_hm13.jpg','shorts_hm13.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(324,7,7,'Beaded Velvet Shorts','shorts_hm14.jpg','shorts_hm14.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(325,7,7,'Denim Shorts','shorts_hm15.jpg','shorts_hm15.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(326,7,7,'Embroidered Shorts','shorts_hm16.jpg','shorts_hm16.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(327,7,7,'Cotton Shorts','shorts_hm17.jpg','shorts_hm17.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(328,7,7,'Denim Shorts and Leather Chaps','shorts_hm18.jpg','shorts_hm18.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:50cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(329,8,8,'Biker Jacket','coat_hm1.jpg','coat_hm1.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(330,8,8,'Padded Parka','coat_hm2.jpg','coat_hm2.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(331,8,8,'Pile-lined Parka','coat_hm3.jpg','coat_hm3.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(332,8,8,'Long Vest','coat_hm4.jpg','coat_hm4.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(333,8,8,'Padded Parka','coat_hm5.jpg','coat_hm5.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(334,8,8,'Pile-lined Parka','coat_hm6.jpg','coat_hm6.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(335,8,8,'Bomber Jacket','coat_hm7.jpg','coat_hm7.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(336,8,8,'Padded Parka','coat_hm8.jpg','coat_hm8.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(337,8,8,'Pile-lined Parka','coat_hm9.jpg','coat_hm9.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(338,8,8,'Pile-lined Parka','coat_hm10.jpg','coat_hm10.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,495000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(339,8,8,'Bomber Jacket','coat_hm11.jpg','coat_hm11.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(340,8,8,'Double-breasted Jacket','coat_hm12.jpg','coat_hm12.jpg','','','Màu sắc: Đen. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(341,8,8,'Padded Parka','coat_hm13.jpg','coat_hm13.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(342,8,8,'Double-breasted Jacket','coat_hm14.jpg','coat_hm14.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(343,8,8,'Biker Jacket','coat_hm15.jpg','coat_hm15.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(344,8,8,'Bomber Jacket','coat_hm16.jpg','coat_hm16.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(345,8,8,'Padded Parka','coat_hm17.jpg','coat_hm17.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(346,8,8,'Padded Parka','coat_hm18.jpg','coat_hm18.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(347,8,8,'Padded Parka','coat_hm19.jpg','coat_hm19.jpg','','','Màu sắc: Xanh đậm. <br/>Chiều dài:100cm.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(348,9,5,'Ví cầm tay BOP 0358 Giá bán: 545.000 VND','18610_1476067874-small.jpg','18610_1476067874-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(349,9,5,'Ví cầm tay BOP 0357 Giá bán: 485.000 VND','18618_1476067976-small.jpg','18618_1476067976-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(350,9,5,'Ví cầm tay BOP 0356 Giá bán: 525.000 VND','18628_1476068087-small.jpg','18628_1476068087-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(351,9,5,'Ví cầm tay BOP 0355 Giá bán: 525.000 VND','18636_1476068155-small.jpg','18636_1476068155-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(352,9,5,'Ví cầm tay BOP 0354 Giá bán: 595.000 VND','18640_1476068200-small.jpg','18640_1476068200-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(353,9,5,'Ví dự tiệc BOP 0353 Giá bán: 625.000 VND','18644_1476068251-small.jpg','18644_1476068251-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(354,9,5,'Ví cầm tay nắp gập da xước BOP 0369 Giá bán: 595.000 VND','17683_1472728977-small.jpg','17683_1472728977-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(355,9,5,'Ví cầm tay trơn logo Vascara BOP 0352 Giá bán: 545.000 VND','17691_1472729081-small.jpg','17691_1472729081-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(356,9,5,'Ví cầm tay cách điệu da lộn BOP 0350 Giá bán: 645.000 VND','17699_1472729133-small.jpg','17699_1472729133-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(357,9,5,'Ví cầm tay họa tiết cách điệu BOP 0346 Giá bán: 545.000 VND','17705_1472729206-small.jpg','17705_1472729206-small.jpg','','','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(358,9,5,'Ví cầm tay BOP 0368 Giá bán: 565.000 VND','17503_1472705502-small.jpg','17503_1472705502-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(359,9,5,'Ví cầm tay BOP 0348 Giá bán: 525.000 VND','15338_1470314834-small.jpg','15338_1470314834-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(360,9,5,'Ví cầm tay BOP 0345 Giá bán: 545.000 VND','18498_1475897412-small.jpg','18498_1475897412-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(361,9,5,'Ví cầm tay BOP 0344 Giá bán: 655.000 VND','14209_1469865444-small.jpg','14209_1469865444-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(362,9,5,'Ví cầm tay BOP 0342 Giá bán: 495.000 VND','14201_1469865392-small.jpg','14201_1469865392-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(363,9,5,'Ví cầm tay BOP 0343 Giá bán: 525.000 VND','12635_1467599616-small.jpg','12635_1467599616-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(364,9,5,'Ví cầm tay BOP 0341 Giá bán: 545.000 VND','12681_1467600118-small.jpg','12681_1467600118-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(365,9,5,'Ví cầm tay BOP 0340 Giá bán: 545.000 VND','12685_1467600152-small.jpg','12685_1467600152-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(366,9,5,'Ví cầm tay BOP 0339 Giá bán: 545.000 VND','12687_1467600197-small.jpg','12687_1467600197-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(367,9,5,'Ví cầm tay BOP 0321 Giá bán: 495.000 VND','12244_1465382973-small.jpg','12244_1465382973-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(368,9,5,'Ví cầm tay BOP 0327 Giá bán: 650.000 VND','12131_1465189996-small.jpg','12131_1465189996-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(369,9,5,'Ví cầm tay BOP 0319 Giá bán: 485.000 VND','11974_1464171848-small.jpg','11974_1464171848-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(370,9,5,'Ví cầm tay BOP 0317 Giá bán: 545.000 VND','11980_1464171944-small.jpg','11980_1464171944-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(371,9,5,'Ví cầm tay BOP 0338 Giá bán: 545.000 VND','11219_1462936563-small.jpg','11219_1462936563-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(372,9,5,'Ví cầm tay BOP 0326 Giá bán: 650.000 VND','11379_1463130808-small.jpg','11379_1463130808-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(373,9,5,'Ví cầm tay BOP 0322 Giá bán: 525.000 VND','11384_1463130918-small.jpg','11384_1463130918-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(374,9,5,'Ví cầm tay BOP 0328 Giá bán: 525.000 VND','11161_1461925935-small.jpg','11161_1461925935-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(375,9,5,'Ví cầm tay BOP 0320 Giá bán: 485.000 VND','11157_1461925883-small.jpg','11157_1461925883-small.jpg','','','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(376,9,5,'Ví cầm tay BOP 0318 Giá bán: 525.000 VND','11149_1461924981-small.jpg','11149_1461924981-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(377,10,1,'Giày búp bê đính nơ GBB 0374','18704_1476095301-small.jpg','18704_1476095301-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(378,10,1,'Giày búp bê thiết kế quai mũi GBB 0371','18722_1476095392-small.jpg','18722_1476095392-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(379,10,1,'Giày mọi phong cách Brogue MOI 0076','18592_1476067711-small.jpg','18592_1476067711-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(380,10,1,'Giày búp bê mũi trang trí cách điệu GBB 0370','18435_1475138046-small.jpg','18435_1475138046-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:01','2016-12-03 01:03:22'),(381,10,1,'Giày Mọi xỏ dây MOI 0075','17938_1473481218-small.jpg','17938_1473481218-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(382,10,1,'Giày Búp bê đính nơ GBB 0369','17956_1473481277-small.jpg','17956_1473481277-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(383,10,1,'Giày Búp bê mũi nhọn màu trơn GBB 0368','17567_1472720481-small.jpg','17567_1472720481-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(384,10,1,'Giày búp bê GBB 0373','16264_1471319994-small.jpg','16264_1471319994-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(385,10,1,'Giày Búp bê GBB 0367','16260_1471319798-small.jpg','16260_1471319798-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(386,10,1,'Giày mọi MOI 0072','15326_1470314789-small.jpg','15326_1470314789-small.jpg','','','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(387,10,1,'Giày Junior JNR 0083','12808_1468554995-small.jpg','12808_1468554995-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(388,10,1,'Giày Junior JNR 0081','12605_1467359228-small.jpg','12605_1467359228-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(389,10,1,'Giày búp bê Junior JNR 0082','12496_1466736298-small.jpg','12496_1466736298-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(390,10,1,'Giày búp bê GBB 0366','12370_1466418095-small.jpg','12370_1466418095-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(391,10,1,'Giày mọi MOI 0070','12391_1466418217-small.jpg','12391_1466418217-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(392,10,1,'Giày Búp Bê MOI 0071','11956_1464171675-small.jpg','11956_1464171675-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(393,10,1,'Giày Búp Bê GBB 0363','11632_1463386702-small.jpg','11632_1463386702-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(394,10,1,'Giày Búp Bê GBB 0362','11688_1463387839-small.jpg','11688_1463387839-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(395,10,1,'Giày búp bê JNR 0078','10881_1459764514-small.jpg','10881_1459764514-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(396,10,1,'Giày Oxford MOI 0069','10905_1459764699-small.jpg','10905_1459764699-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(397,10,1,'Giày búp bê GBB 0364','10926_1459765255-small.jpg','10926_1459765255-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(398,10,1,'Giày búp bê GBB 0360','9125_1455611947-small.jpg','9125_1455611947-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(399,10,1,'Giày búp bê GBB 0358','8271_1454654761-small.jpg','8271_1454654761-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(400,10,1,'Giày búp bê đính nơ GBB 0359','7817_1452243438-small.jpg','7817_1452243438-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(401,10,1,'Giày búp bê đính nơ GBB 0357','7835_1452244185-small.jpg','7835_1452244185-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(402,10,1,'Giày búp bê đính nơ JNR 0073','7519_1450774160-small.jpg','7519_1450774160-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(403,10,1,'Giày búp bê JNR 0070','7027_1448695992-small.jpg','7027_1448695992-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(404,10,1,'Giày búp bê mũi nhọn đính nơ JNR 0069','7039_1448696288-small.jpg','7039_1448696288-small.jpg','','','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(405,10,1,'Giày búp bê JNR 0068','7051_1448696481-small.jpg','7051_1448696481-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(406,11,2,'Giày Bít mũi nhọn da lộn BMN 0176','17636_1472721239-small.jpg','17636_1472721239-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(407,11,2,'Giày bít mũi nhọn BMN 0171','16316_1471320387-small.jpg','16316_1471320387-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(408,11,2,'Giày bít mũi tròn BMT 0411','15416_1470801189-small.jpg','15416_1470801189-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(409,11,2,'Giày bít mũi tròn BMT 0410','15428_1470802124-small.jpg','15428_1470802124-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(410,11,2,'Giày bít mũi nhọn BMN 0173','15386_1470726753-small.jpg','15386_1470726753-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(411,11,2,'Giày bít mũi tròn BMT 0404','14189_1469865178-small.jpg','14189_1469865178-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(412,11,2,'Giày bít mũi nhọn BMN 0172','14169_1469864623-small.jpg','14169_1469864623-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(413,11,2,'Giày bít hở mũi BHM 0399','14149_1469864440-small.jpg','14149_1469864440-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(414,11,2,'Giày Bít mũi nhọn BMN 0170','12826_1468555129-small.jpg','12826_1468555129-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(415,11,2,'Giày Bít mũi hở BMH0398','12844_1468555205-small.jpg','12844_1468555205-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(416,11,2,'Giày Bít mũi nhọn BMN 0169','12715_1468204980-small.jpg','12715_1468204980-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(417,11,2,'Giày Bít mũi nhọn BMN 0155','12749_1468205310-small.jpg','12749_1468205310-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(418,11,2,'Giày Bít mũi tròn BMT 0400','12617_1467359318-small.jpg','12617_1467359318-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(419,11,2,'Giày bít mũi nhọn BMN 0158','12523_1466739445-small.jpg','12523_1466739445-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(420,11,2,'Giày bít mũi nhọn BMN 0168','12344_1465814342-small.jpg','12344_1465814342-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(421,11,2,'Giày bít mũi nhọn BMN 0164','12252_1465383199-small.jpg','12252_1465383199-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(422,11,2,'Giày bít mũi nhọn BMN 0162','12276_1465383340-small.jpg','12276_1465383340-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(423,11,2,'Giày bít mũi nhọn BMN 0157','12154_1465294497-small.jpg','12154_1465294497-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(424,11,2,'Giày bít mũi nhọn BMN 0118','12135_1465206681-small.jpg','12135_1465206681-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(425,11,2,'Giày Bít Mũi Nhọn BMN 0163','12113_1464924748-small.jpg','12113_1464924748-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(426,11,2,'Giày Búp Bê Junior JNR 0057','12046_1464839263-small.jpg','12046_1464839263-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(427,11,2,'Giày Bít Mũi Nhọn BMN 0159','12075_1464839673-small.jpg','12075_1464839673-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(428,11,2,'Giày Bít Mũi Nhọn BMN 0156','12093_1464839842-small.jpg','12093_1464839842-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(429,11,2,'Giày Bít mũi tròn BMT 0402','11826_1463716242-small.jpg','11826_1463716242-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(430,11,2,'Giày Bít mũi nhọn BMN 0160','11887_1463716577-small.jpg','11887_1463716577-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(431,11,2,'Giày Bít mũi nhọn BMN 0165','11653_1463387370-small.jpg','11653_1463387370-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(432,11,2,'Giày Bít mũi nhọn BMN 0167','11671_1463387542-small.jpg','11671_1463387542-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(433,11,2,'Giày Bít mũi tròn BMT 0401','11452_1463372985-small.jpg','11452_1463372985-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(434,11,2,'Giày bít hở mũi BHM 0397','11404_1463371399-small.jpg','11404_1463371399-small.jpg','','','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(435,11,2,'Giày Bít mũi nhọn BMN 0166','11434_1463371722-small.jpg','11434_1463371722-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(436,11,2,'Giày Bít mũi nhọn BMN 0161','11416_1463371554-small.jpg','11416_1463371554-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(437,11,2,'Giày bít mũi nhọn cao gót BMN 0140','11019_1459845187-small.jpg','11019_1459845187-small.jpg','','','Màu sắc: Xanh Navy. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(438,11,2,'Giày bít mũi nhọn cao gót BMN 0154','10977_1459765874-small.jpg','10977_1459765874-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(439,11,2,'Giày bít mũi tròn cao gót BMT 0399','10983_1459766018-small.jpg','10983_1459766018-small.jpg','','','Màu sắc: Đỏ bầm. <br/>Chất liệu:Da lộn tổng hợp.',30,365000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(440,11,2,'Giày bít cao gót BMN 0148','10318_1457937629-small.jpg','10318_1457937629-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,545000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(441,11,2,'Giày bít cao gót BMN 0149','9107_1455611815-small.jpg','9107_1455611815-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(442,11,2,'Giày bít cao gót mũi tròn BMT 861','4570_1443770353-small.jpg','4570_1443770353-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(443,11,2,'Giày bít cao gót mũi tròn BMT 285','9345_1455617221-small.jpg','9345_1455617221-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(444,11,2,'Giày bít cao gót mũi nhọn BMN 888','8957_1455531221-small.jpg','8957_1455531221-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,385000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(445,11,2,'Giày đế bệt mũi nhọn BMN 0117','8939_1455530921-small.jpg','8939_1455530921-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,385000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(446,11,2,'Giày bít mũi nhọn BMN 0113','8911_1455530507-small.jpg','8911_1455530507-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,385000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(447,11,2,'Giày cao gót bít mũi BMT 0388','8558_1455521407-small.jpg','8558_1455521407-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(448,11,2,'Giày cao gót mũi tròn BMT 0387','8576_1455521454-small.jpg','8576_1455521454-small.jpg','','','Màu sắc: Da beo. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(449,11,2,'Giày bít mũi tròn BMT 0386','8594_1455521829-small.jpg','8594_1455521829-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(450,11,2,'Giày cao gót mũi nhọn BMN 099','8897_1455530403-small.jpg','8897_1455530403-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(451,11,2,'Giày cao gót bít mũi BMN 0120','8879_1455529990-small.jpg','8879_1455529990-small.jpg','','','Màu sắc: Xanh Navy. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(452,11,2,'Giày bít cao gót mũi nhọn BMN 0119','8861_1455529628-small.jpg','8861_1455529628-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(453,11,2,'Giày bít mũi nhọn đính nơ BMN 0114','8843_1455528620-small.jpg','8843_1455528620-small.jpg','','','Màu sắc: Kem đậm. <br/>Chất liệu:Da lộn tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(454,12,2,'Giày Sandals kẹp SDK 0241','12669_1467600029-small.jpg','12669_1467600029-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(455,12,2,'Giày Sandals đế xuồng SDX 0365','12544_1467358624-small.jpg','12544_1467358624-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(456,12,2,'Giày Sandals mũi nhọn SDN 0495','12562_1467358889-small.jpg','12562_1467358889-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(457,12,2,'Giày Sandals kẹp SDK 0236','12587_1467359092-small.jpg','12587_1467359092-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(458,12,2,'Giày Sandals nhọn SDN 0503','12438_1466495380-small.jpg','12438_1466495380-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(459,12,2,'Giày Sandals đế xuồng SDX 0367','12329_1465814207-small.jpg','12329_1465814207-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(460,12,2,'Giày Sandals đế nhọn SDN 0502','12294_1465808963-small.jpg','12294_1465808963-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(461,12,2,'Giày Sandals đế nhọn SDN 0501','12300_1465809033-small.jpg','12300_1465809033-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(462,12,2,'Giày Sandals đế nhọn SDN 0500','11944_1464171489-small.jpg','11944_1464171489-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(463,12,2,'Giày Sandals JNR 0087','11859_1463716453-small.jpg','11859_1463716453-small.jpg','','','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(464,12,2,'Sandals Kẹp SDK 0239','11614_1463385931-small.jpg','11614_1463385931-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(465,12,2,'Giày Sandals JNR 0086','11375_1463023133-small.jpg','11375_1463023133-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(466,12,2,'Giày Sandals đế xuồng SDX 0368','11569_1463380537-small.jpg','11569_1463380537-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(467,12,2,'Giày sandals cao gót SDN 0499','11544_1463379711-small.jpg','11544_1463379711-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(468,12,2,'Giày sandals cao gót SDN 0496','11526_1463379370-small.jpg','11526_1463379370-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(469,12,2,'Giày Sandals đế xuồng SDX 0366','11557_1463380428-small.jpg','11557_1463380428-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(470,12,2,'Giày sandals đế bệt JNR 0080','11103_1460110930-small.jpg','11103_1460110930-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(471,12,2,'Giày Sandals cao gót SDN 0494','11121_1460111011-small.jpg','11121_1460111011-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(472,12,2,'Giày Sandals đế xuồng SDX 0363','11133_1460111248-small.jpg','11133_1460111248-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(473,12,2,'Giày sandals đế xuồng SDX 0364','10941_1459765598-small.jpg','10941_1459765598-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(474,12,2,'Giày sandals xỏ ngón SDK 0237','10959_1459765766-small.jpg','10959_1459765766-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(475,12,2,'Giày sandals cao gót SDN 0493','11001_1459766340-small.jpg','11001_1459766340-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(476,12,2,'Giày Sandals xỏ ngón SDK 0234','10336_1458879401-small.jpg','10336_1458879401-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(477,12,2,'Giày Sandals đế bệt JNR 0059','10286_1457602220-small.jpg','10286_1457602220-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(478,12,2,'Giày Sandals đế xuồng SDX 0354','10274_1457602038-small.jpg','10274_1457602038-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(479,12,2,'Giày Sandals cao gót SDN 888','9089_1455611708-small.jpg','9089_1455611708-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(480,12,2,'Giày Sandals đế xuồng SDX 0362','9079_1455611612-small.jpg','9079_1455611612-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(481,12,2,'Giày Sandals cao gót SDN 0468','8301_1454654988-small.jpg','8301_1454654988-small.jpg','','','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(482,12,2,'Giày Sandals cao gót quai ngang SDN 0489','10262_1457601548-small.jpg','10262_1457601548-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(483,13,4,'Balo TXL 1198','18548_1476067161-small.jpg','18548_1476067161-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(484,13,4,'Balo TXL 1197','18552_1476067214-small.jpg','18552_1476067214-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(485,13,4,'Balo khóa kéo TXL 1186','17673_1472728834-small.jpg','17673_1472728834-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(486,13,4,'Balo thời trang trơn TXL 1248','17453_1472704588-small.jpg','17453_1472704588-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(487,13,4,'Balo thời trang nắp gập họa tiết da rắn TXL 1187','17481_1472705098-small.jpg','17481_1472705098-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(488,13,4,'Balo TXL 1166','15342_1470314881-small.jpg','15342_1470314881-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(489,13,4,'Balo TXL 1176','15348_1470314925-small.jpg','15348_1470314925-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(490,13,4,'Balo TXL 1177','12739_1468205064-small.jpg','12739_1468205064-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(491,13,4,'Balo TXL 1167','12745_1468205151-small.jpg','12745_1468205151-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(492,13,4,'Balo TXL 1165','12884_1468926333-small.jpg','12884_1468926333-small.jpg','','','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(493,13,4,'Balo TXL 1094','12320_1465814083-small.jpg','12320_1465814083-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(494,13,4,'Túi xách tay TXL 1105','12180_1465381948-small.jpg','12180_1465381948-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(495,13,4,'Balo TXL 1104','11800_1463715439-small.jpg','11800_1463715439-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(496,13,4,'Balo TXL 1099','11583_1463380621-small.jpg','11583_1463380621-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(497,13,4,'Balo TXL 1093','11059_1460109872-small.jpg','11059_1460109872-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(498,13,4,'Balo TXL 1119','11067_1460110484-small.jpg','11067_1460110484-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(499,13,4,'Balo TXL 1027','11055_1459846110-small.jpg','11055_1459846110-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(500,13,4,'Balo TXL 1092','10833_1459758404-small.jpg','10833_1459758404-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(501,13,4,'Balo TXL 1121','10843_1459760128-small.jpg','10843_1459760128-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(502,13,4,'Balo TXL 1120','10849_1459763609-small.jpg','10849_1459763609-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(503,13,4,'Ba lô TXL 1026','10244_1457075809-small.jpg','10244_1457075809-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(504,13,4,'Túi xách tay TXL 1036','7751_1452240665-small.jpg','7751_1452240665-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(505,13,4,'Balo TXL 1039','7557_1450774429-small.jpg','7557_1450774429-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(506,13,4,'Túi xách TXL 1006','7439_1449546271-small.jpg','7439_1449546271-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(507,13,4,'Balo TXL 1032','6821_1448675692-small.jpg','6821_1448675692-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(508,13,4,'Balo TXL 1019','6847_1448679270-small.jpg','6847_1448679270-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(509,13,4,'Ba lô nắp gập TXL 0742','6725_1446540739-small.jpg','6725_1446540739-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(510,13,4,'Balo nắp gập TXL 0732','6223_1444718153-small.jpg','6223_1444718153-small.jpg','','','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(511,14,3,'Túi xách nắp gập đính kim loại TXL 1242','17648_1472728442-small.jpg','17648_1472728442-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(512,14,3,'Túi xách hai quai da trơn TXL 1196','17652_1472728551-small.jpg','17652_1472728551-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(513,14,3,'Túi xách cách điệu TXL 1195','17658_1472728603-small.jpg','17658_1472728603-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(514,14,3,'Túi xách nắp gập khóa gài kim loại TXL 1194','17662_1472728676-small.jpg','17662_1472728676-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(515,14,3,'Túi xách nắp hai khóa kéo TXL 1193','17669_1472728774-small.jpg','17669_1472728774-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(516,14,3,'Túi xách tay khóa cách điệu TXL 494','17677_1472728888-small.jpg','17677_1472728888-small.jpg','','','Màu sắc: Xanh da trời. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(517,14,3,'Túi xách TXL 1170','15440_1470802156-small.jpg','15440_1470802156-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(518,14,3,'Túi xách TXL 1169','15442_1470802201-small.jpg','15442_1470802201-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Vải len kim tuyến.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(519,14,3,'Túi xách TXL 1178','15352_1470314954-small.jpg','15352_1470314954-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(520,14,3,'Túi xách TXL 1180','15356_1470314998-small.jpg','15356_1470314998-small.jpg','','','Màu sắc: Xanh Navy. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(521,14,3,'Túi xách TXL 1188','14222_1469865843-small.jpg','14222_1469865843-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(522,14,3,'Túi xách TXL 1185','14228_1469865918-small.jpg','14228_1469865918-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Microfiber.',30,425000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(523,14,3,'Túi xách nắp gập đính kim loại TXL 1242','17648_1472728442-small.jpg','17648_1472728442-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:02','2016-12-03 01:03:22'),(524,14,3,'Túi xách hai quai da trơn TXL 1196','17652_1472728551-small.jpg','17652_1472728551-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da thật.',30,525000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(525,14,3,'Túi xách cách điệu TXL 1195','17658_1472728603-small.jpg','17658_1472728603-small.jpg','','','Màu sắc: Nâu. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(526,14,3,'Túi xách nắp gập khóa gài kim loại TXL 1194','17662_1472728676-small.jpg','17662_1472728676-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:da tổng hợp.',30,525000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(527,14,3,'Túi xách nắp hai khóa kéo TXL 1193','17669_1472728774-small.jpg','17669_1472728774-small.jpg','','','Màu sắc: Be. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(528,14,3,'Túi xách tay khóa cách điệu TXL 494','17677_1472728888-small.jpg','17677_1472728888-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(529,14,3,'Túi xách TXL 1170','15440_1470802156-small.jpg','15440_1470802156-small.jpg','','','Màu sắc: Kem. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(530,14,3,'Túi xách TXL 1169','15442_1470802201-small.jpg','15442_1470802201-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,495000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(531,14,3,'Túi xách TXL 1178','15352_1470314954-small.jpg','15352_1470314954-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(532,14,3,'Túi xách TXL 1180','15356_1470314998-small.jpg','15356_1470314998-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(533,14,3,'Túi xách TXL 1188','14222_1469865843-small.jpg','14222_1469865843-small.jpg','','','Màu sắc: Trắng. <br/>Chất liệu:Da tổng hợp.',30,475000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(534,14,3,'Túi xách TXL 1185','14228_1469865918-small.jpg','14228_1469865918-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(535,14,3,'Túi xách TXL 1184','14236_1469866058-small.jpg','14236_1469866058-small.jpg','','','Màu sắc: Hồng. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(536,14,3,'Túi xách TXL 1181','14218_1469865790-small.jpg','14218_1469865790-small.jpg','','','Màu sắc: Xám. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(537,14,3,'Túi xách TXL 1171','12774_1468554602-small.jpg','12774_1468554602-small.jpg','','','Màu sắc: Đen. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(538,14,3,'Túi xách TXL 1173','12784_1468554637-small.jpg','12784_1468554637-small.jpg','','','Màu sắc: Xanh dương. <br/>Chất liệu:Da tổng hợp.',30,425000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22'),(539,14,3,'Túi xách TXL 1174','12786_1468554769-small.jpg','12786_1468554769-small.jpg','','','Màu sắc: Đỏ. <br/>Chất liệu:Da tổng hợp.',30,450000,0,'MINX',1,'2016-11-01 15:43:03','2016-12-03 01:03:22');
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
  `anh_dai_dien` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no-avatar',
  `gioi_tinh` tinyint(4) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_kich_hoat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_khoi_phuc_mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tinh_trang` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tai_khoan_nguoi_ban_ten_dang_nhap_unique` (`ten_dang_nhap`),
  UNIQUE KEY `tai_khoan_nguoi_ban_email_unique` (`email`),
  UNIQUE KEY `tai_khoan_nguoi_ban_ten_shop_unique` (`ten_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tai_khoan_nguoi_ban`
--

LOCK TABLES `tai_khoan_nguoi_ban` WRITE;
/*!40000 ALTER TABLE `tai_khoan_nguoi_ban` DISABLE KEYS */;
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
  `anh_dai_dien` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no-avatar',
  `gioi_tinh` tinyint(4) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_kich_hoat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ma_khoi_phuc_mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_tinh_trang` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tai_khoan_nguoi_mua_ten_dang_nhap_unique` (`ten_dang_nhap`),
  UNIQUE KEY `tai_khoan_nguoi_mua_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tai_khoan_nguoi_mua`
--

LOCK TABLES `tai_khoan_nguoi_mua` WRITE;
/*!40000 ALTER TABLE `tai_khoan_nguoi_mua` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tinh_trang`
--

LOCK TABLES `tinh_trang` WRITE;
/*!40000 ALTER TABLE `tinh_trang` DISABLE KEYS */;
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
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-03 20:24:56
