USE `tmdt`;
DROP procedure IF EXISTS `Giao_Dich_GetYear`;

DELIMITER $$
USE `tmdt`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Giao_Dich_GetYear`()
BEGIN
SELECT DISTINCT YEAR(ngay_tao) AS sort_year FROM giao_dich;
END$$

DELIMITER ;
USE `tmdt`;
DROP procedure IF EXISTS `Giao_Dich_NguoiBan_GetYear`;

DELIMITER $$
USE `tmdt`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Giao_Dich_NguoiBan_GetYear`()
BEGIN
SELECT DISTINCT YEAR(thoi_gian_giao_dich) AS sort_year FROM giao_dich_nguoi_ban;
END$$

DELIMITER ;
USE `tmdt`;
DROP procedure IF EXISTS `GiaoDich_TaiKhoan_GetYear`;

DELIMITER $$
USE `tmdt`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GiaoDich_TaiKhoan_GetYear`()
BEGIN
	SELECT DISTINCT YEAR(ngay_tao) AS sort_year FROM hoa_don_tai_khoan;
END$$

DELIMITER ;
USE `tmdt`;
DROP procedure IF EXISTS `ThongKe_LoiNhuan_Nam`;

DELIMITER $$
USE `tmdt`$$
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


END$$

DELIMITER ;