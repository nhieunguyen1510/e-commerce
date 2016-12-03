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
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_tinh_trang` int(11) NOT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danh_muc_san_pham`
--

LOCK TABLES `danh_muc_san_pham` WRITE;
/*!40000 ALTER TABLE `danh_muc_san_pham` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (61,'2014_10_12_000000_create_users_table',1),(62,'2014_10_12_100000_create_password_resets_table',1),(63,'2016_09_25_055622_create_san_pham_table',1),(64,'2016_09_25_085957_create_giao_dich_table',1),(65,'2016_09_28_171104_create_quan_tri_vien_table',1),(66,'2016_09_30_031741_create_danh_muc_san_pham_table',1),(67,'2016_10_01_102018_create_chi_tiet_giao_dich_table',1),(68,'2016_10_04_020931_create_danh_gia_san_pham_table',1),(69,'2016_10_04_021530_create_thong_tin_giao_hang_table',1),(70,'2016_10_08_151323_create_tinh_trang_table',1),(71,'2016_10_24_170746_create_tai_khoan_nguoi_mua_table',1),(72,'2016_11_11_140517_create_tai_khoan_nguoi_ban_table',1);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham`
--

LOCK TABLES `san_pham` WRITE;
/*!40000 ALTER TABLE `san_pham` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tinh_trang`
--

LOCK TABLES `tinh_trang` WRITE;
/*!40000 ALTER TABLE `tinh_trang` DISABLE KEYS */;
INSERT INTO `tinh_trang` VALUES (1,'Còn hàng','san_pham','id_tinh_trang'),(2,'Hết hàng','san_pham','id_tinh_trang');
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

-- Dump completed on 2016-12-03 19:37:55
