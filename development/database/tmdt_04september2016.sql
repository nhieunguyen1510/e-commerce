-- MySQL dump 10.13  Distrib 5.7.13, for Win32 (AMD64)
--
-- Host: localhost    Database: tmdt
-- ------------------------------------------------------
-- Server version	5.7.13-log

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_giao_dich` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia_san_pham` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tai_khoan` int(11) NOT NULL,
  `id_san_pham` int(11) NOT NULL,
  `diem_so` tinyint(4) NOT NULL,
  `binh_luan` text COLLATE utf8_bin NOT NULL,
  `tinh_trang` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_danh_muc_san_pham_cha` int(11) DEFAULT NULL,
  `ten` varchar(100) COLLATE utf8_bin NOT NULL,
  `tinh_trang` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danh_muc_san_pham`
--

LOCK TABLES `danh_muc_san_pham` WRITE;
/*!40000 ALTER TABLE `danh_muc_san_pham` DISABLE KEYS */;
INSERT INTO `danh_muc_san_pham` VALUES (5,NULL,'Giày',1),(6,NULL,'Thắt lưng',1),(7,NULL,'Balo, túi xách',1),(8,5,'Giày bata',1),(9,5,'Giày búp bê',1),(10,5,'Giày cao gót',0),(11,6,'Thắt lưng da cá sấu',1),(12,6,'Thắt lưng da bò',1);
/*!40000 ALTER TABLE `danh_muc_san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giao_dich`
--

DROP TABLE IF EXISTS `giao_dich`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giao_dich` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tai_khoan` int(11) NOT NULL,
  `giao_dich_cod` tinyint(4) NOT NULL,
  `giao_dich_truc_tuyen` tinyint(4) NOT NULL,
  `id_dich_vu_truc_tuyen` tinyint(4) DEFAULT NULL,
  `id_tai_khoan_dich_vu_truc_tuyen` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `thoi_gian_giao_dich` datetime NOT NULL,
  `dia_chi_giao_hang` varchar(200) COLLATE utf8_bin NOT NULL,
  `so_dien_thoai_giao_hang` varchar(15) COLLATE utf8_bin NOT NULL,
  `ten_nguoi_nhan` varchar(200) COLLATE utf8_bin NOT NULL,
  `ma_khuyen_mai` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tong_tien` int(11) NOT NULL,
  `tinh_trang` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giao_dich`
--

LOCK TABLES `giao_dich` WRITE;
/*!40000 ALTER TABLE `giao_dich` DISABLE KEYS */;
/*!40000 ALTER TABLE `giao_dich` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khuyen_mai`
--

DROP TABLE IF EXISTS `khuyen_mai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khuyen_mai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thoi_gian_bat_dau` datetime DEFAULT NULL,
  `thoi_gian_ket_thuc` datetime DEFAULT NULL,
  `so_luong_con_lai` int(11) DEFAULT NULL,
  `giao_dich_toi_thieu` int(11) DEFAULT NULL,
  `giao_dich_toi_da` int(11) DEFAULT NULL,
  `gia_tri_tien_mat` int(11) NOT NULL,
  `gia_tri_phan_tram` float NOT NULL,
  `tinh_trang` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khuyen_mai`
--

LOCK TABLES `khuyen_mai` WRITE;
/*!40000 ALTER TABLE `khuyen_mai` DISABLE KEYS */;
/*!40000 ALTER TABLE `khuyen_mai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quan_tri_vien`
--

DROP TABLE IF EXISTS `quan_tri_vien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quan_tri_vien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(200) COLLATE utf8_bin NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `tinh_trang` tinyint(4) NOT NULL,
  `phan_quyen` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quan_tri_vien`
--

LOCK TABLES `quan_tri_vien` WRITE;
/*!40000 ALTER TABLE `quan_tri_vien` DISABLE KEYS */;
INSERT INTO `quan_tri_vien` VALUES (1,'admin','Admin@123','vannhieunguyen1994@gmail.com',1,1);
/*!40000 ALTER TABLE `quan_tri_vien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `san_pham`
--

DROP TABLE IF EXISTS `san_pham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_danh_muc_san_pham` int(11) NOT NULL,
  `ten` varchar(200) COLLATE utf8_bin NOT NULL,
  `anh_dai_dien` varchar(200) CHARACTER SET utf8 NOT NULL,
  `anh_chi_tiet_1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `anh_chi_tiet_2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `anh_chi_tiet_3` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mo_ta` text COLLATE utf8_bin,
  `so_luong_ton_kho` int(11) NOT NULL,
  `don_gia_ban` int(11) NOT NULL,
  `nha_san_xuat` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tinh_trang` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `san_pham`
--

LOCK TABLES `san_pham` WRITE;
/*!40000 ALTER TABLE `san_pham` DISABLE KEYS */;
/*!40000 ALTER TABLE `san_pham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tai_khoan`
--

DROP TABLE IF EXISTS `tai_khoan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_dang_nhap` varchar(100) COLLATE utf8_bin NOT NULL,
  `mat_khau` varchar(200) COLLATE utf8_bin NOT NULL,
  `anh_dai_dien` varchar(200) COLLATE utf8_bin NOT NULL,
  `gioi_tinh` tinyint(4) NOT NULL,
  `ho` varchar(100) COLLATE utf8_bin NOT NULL,
  `ten` varchar(100) COLLATE utf8_bin NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `dia_chi` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `ma_kich_hoat` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `tinh_trang` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tai_khoan`
--

LOCK TABLES `tai_khoan` WRITE;
/*!40000 ALTER TABLE `tai_khoan` DISABLE KEYS */;
INSERT INTO `tai_khoan` VALUES (4,'nguyenvanlang','123','no-avatar',1,'Nguyễn','Lang','01212187923','238 Nguyễn Kim ','rf789',0),(5,'hugo','456','no-avatar',0,'Bùi','Lan','0909329768','345 Đinh Tiên Hoàng','ed123',1),(6,'thien_12','a789 ','no-avatar',1,'Huỳnh','Thiện','0126338931','số 2 Tên Lửa','hi568',2);
/*!40000 ALTER TABLE `tai_khoan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thong_tin_giao_hang`
--

DROP TABLE IF EXISTS `thong_tin_giao_hang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `thong_tin_giao_hang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tai_khoan` int(11) NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_bin NOT NULL,
  `so_dien_thoai` varchar(15) COLLATE utf8_bin NOT NULL,
  `ten_nguoi_nhan` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `thong_tin_giao_hang`
--

LOCK TABLES `thong_tin_giao_hang` WRITE;
/*!40000 ALTER TABLE `thong_tin_giao_hang` DISABLE KEYS */;
/*!40000 ALTER TABLE `thong_tin_giao_hang` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-04 20:06:09
