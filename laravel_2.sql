-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 10, 2022 lúc 12:04 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_ct_don_hang`
--

DROP TABLE IF EXISTS `sb_ct_don_hang`;
CREATE TABLE IF NOT EXISTS `sb_ct_don_hang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_don_hang` int(11) DEFAULT NULL,
  `don_gia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thanh_tien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_luong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sp` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_ct_don_hang`
--

INSERT INTO `sb_ct_don_hang` (`ID`, `ID_don_hang`, `don_gia`, `thanh_tien`, `so_luong`, `id_sp`) VALUES
(1, 1, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL),
(3, 2, NULL, NULL, NULL, NULL),
(4, 3, NULL, NULL, NULL, NULL),
(5, 4, NULL, NULL, NULL, NULL),
(6, 4, NULL, NULL, NULL, NULL),
(7, 4, NULL, NULL, NULL, NULL),
(8, 5, NULL, NULL, NULL, NULL),
(9, 5, NULL, NULL, NULL, NULL),
(10, 5, NULL, NULL, NULL, NULL),
(11, 5, NULL, NULL, NULL, NULL),
(12, 5, NULL, NULL, NULL, NULL),
(14, 13, NULL, NULL, NULL, NULL),
(15, 13, NULL, NULL, NULL, NULL),
(16, 14, NULL, NULL, NULL, NULL),
(17, 14, NULL, NULL, NULL, NULL),
(18, 14, NULL, NULL, NULL, NULL),
(31, 19, NULL, NULL, NULL, NULL),
(32, 19, NULL, NULL, NULL, NULL),
(33, 19, NULL, NULL, NULL, NULL),
(34, 20, NULL, NULL, NULL, NULL),
(35, 20, NULL, NULL, NULL, NULL),
(36, 20, NULL, NULL, NULL, NULL),
(37, 21, NULL, NULL, NULL, NULL),
(38, 21, NULL, NULL, NULL, NULL),
(39, 21, NULL, NULL, NULL, NULL),
(40, 22, NULL, NULL, NULL, NULL),
(41, 22, NULL, NULL, NULL, NULL),
(42, 22, NULL, NULL, NULL, NULL),
(43, 28, '6500000', '13000000', '2', 15),
(44, 28, '4400000', '8800000', '2', 14),
(45, 29, '6500000', '13000000', '2', 15),
(46, 29, '4400000', '8800000', '2', 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_don_hang`
--

DROP TABLE IF EXISTS `sb_don_hang`;
CREATE TABLE IF NOT EXISTS `sb_don_hang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ma_don_hang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tong_tien` int(11) DEFAULT NULL,
  `ngay_dat` datetime DEFAULT NULL,
  `id_nguoi_dung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ho_ten_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt_nguoi_nhan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_don_hang`
--

INSERT INTO `sb_don_hang` (`ID`, `ma_don_hang`, `tong_tien`, `ngay_dat`, `id_nguoi_dung`, `ho_ten_nguoi_nhan`, `email_nguoi_nhan`, `dia_chi_nguoi_nhan`, `sdt_nguoi_nhan`, `trang_thai`) VALUES
(2, 'S240220162', 85000, '2016-02-24 14:20:10', NULL, 'Nguyễn Thy Mỹ Linh', 'linhnguyenthymy136@gmail.com', NULL, '0980808080', 1),
(3, 'S240220163', 720000, '2016-02-24 13:57:59', NULL, 'Lê Văn Việt', 'lvviet@gmail.com', NULL, '0908236548', 1),
(4, 'S250220164', 658000, '2016-02-25 02:04:35', NULL, 'Huỳnh Bảo', 'huynhbao@gmail.com', NULL, '0908848484', 1),
(5, 'S250220165', 838000, '2016-02-25 14:10:40', NULL, 'Võ Thị Mỹ Dung', 'vothimydung@gmail.com', NULL, '0908084865', 1),
(13, NULL, 95000, '2016-03-08 07:24:48', '2', 'Hùng Nguyễn', 'botautomail@gmail.com', '357 LHP P2 Q10', '0909090909', 0),
(14, NULL, 410000, '2016-03-09 10:43:23', '3', 'Hùng Nguyễn Xuân', 'nxhung118@gmail.com', '357 LHP P2 Q10', '09090909', 2),
(19, NULL, 1329000, '2016-03-15 09:35:43', '1', 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(20, NULL, 1329000, '2016-03-15 09:38:52', '6', 'Nguyễn Thy Mỹ Linh', 'ntmlinh@gmail.com', '357 LHP P2 Q10', '0912345678', 2),
(21, NULL, 529000, '2016-03-15 09:41:19', '1', 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(22, NULL, 462000, '2016-03-15 09:42:32', '1', 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(23, NULL, 560000, '2016-03-15 09:44:53', '1', 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(24, NULL, 560000, '2016-03-15 10:00:16', '1', 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(25, NULL, 1229000, '2016-03-15 10:17:05', '1', 'Hùng Nguyễn', 'hungnguyenxuan118@gmail.com', 'asd asdas asd asdas das', '0909090909', 2),
(26, NULL, 208000, '2016-03-15 10:35:50', '3', 'Hùng Nguyễn Xuân', 'nxhung118@gmail.com', '357 LHP P2 Q10', '09090909', 2),
(27, NULL, 21800000, '2022-09-23 06:07:29', NULL, 'Minh Phuc', 'tung35099@gmail.com', 'phphphph', '0898139808', 2),
(28, NULL, 21800000, '2022-09-23 06:20:23', NULL, 'Minh Phuc', 'tung35099@gmail.com', 'phphphph', '0898139808', 2),
(29, NULL, 21800000, '2022-09-23 06:43:59', NULL, 'Minh Phuc', 'tung35099@gmail.com', 'phphphph', '0898139808', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_hinh_san_pham`
--

DROP TABLE IF EXISTS `sb_hinh_san_pham`;
CREATE TABLE IF NOT EXISTS `sb_hinh_san_pham` (
  `id_hinh` int(11) NOT NULL AUTO_INCREMENT,
  `id_sp` int(11) NOT NULL,
  `ten_hinh` varchar(255) NOT NULL,
  PRIMARY KEY (`id_hinh`),
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sb_hinh_san_pham`
--

INSERT INTO `sb_hinh_san_pham` (`id_hinh`, `id_sp`, `ten_hinh`) VALUES
(1, 19, 'NIKE AIR MAX IMPACT 3 2.png'),
(2, 19, 'NIKE AIR MAX IMPACT 3 3.png'),
(3, 19, 'NIKE AIR MAX IMPACT 3 4.png'),
(22, 20, 'NIKE FREAK 4 UNBELIEVABLE 2.png'),
(23, 20, 'NIKE FREAK 4 UNBELIEVABLE 3.png'),
(24, 20, 'NIKE FREAK 4 UNBELIEVABLE 4.png'),
(25, 21, 'NIKE KD 15 PRODUCER PACK 2.png'),
(26, 21, 'NIKE KD 15 PRODUCER PACK 3.png'),
(27, 22, 'NIKE KD TREY 5 XIII 2.png'),
(28, 22, 'NIKE KD TREY 5 XIII 3.png'),
(29, 21, 'NIKE KD TREY 5 XIII 4.png'),
(30, 23, 'NIKE KOBE 6 PROTRO ALL-STAR 2.png'),
(31, 23, 'NIKE KOBE 6 PROTRO ALL-STAR 3.png'),
(32, 23, 'NIKE KOBE 6 PROTRO ALL-STAR 4.png'),
(33, 24, 'NIKE KYRIE 8 AK SIREN RED 2.png'),
(34, 24, 'NIKE KYRIE 8 AK SIREN RED 3.png'),
(35, 24, 'NIKE KYRIE 8 AK SIREN RED 4.png'),
(36, 25, 'NIKE KYRIE LOW 5 CHAMPIONS 2.png'),
(37, 25, 'NIKE KYRIE LOW 5 CHAMPIONS 3.png'),
(38, 25, 'NIKE KYRIE LOW 5 CHAMPIONS 4.png'),
(75, 26, 'QXL HOODIE HOME 2.png'),
(76, 30, 'ÁO KHOÁC NIKE BIG SWOOSH 2.png'),
(77, 33, 'QUAN SHORT CHAMPION 2.png'),
(78, 34, 'QUAN NIKE SPORTWEAR WOVEN FLOW 2.png'),
(79, 35, 'QUAN JORDAN FLIGHT 2.png'),
(80, 36, 'QUAN DAU CHAMPION 2.png'),
(81, 37, 'LAKERS KOBE BRYANT SHORT 2.png'),
(82, 38, 'LAKERS ICON EDITION SHORT 2.png'),
(83, 39, 'ALL STAR NBA SHORT 2.png'),
(84, 42, 'ÁO THUN JORDAN PSG LOGO 2.png'),
(85, 43, 'ÁO THUN NIKE FARROW & BALL 2.png'),
(86, 44, 'ÁO THUN NIKE ICON 2.png'),
(87, 45, 'ÁO THUN NIKE JUST DO IT - GRAPHIC 2.png'),
(88, 86, 'ÁO THUN DERRICK CLUB 2.png'),
(89, 86, 'ÁO THUN DERRICK CLUB 3.png'),
(90, 86, 'ÁO THUN DERRICK CLUB 4.png'),
(91, 88, 'NIKE WMNS ZOOM WINFLO 8 2.png'),
(92, 89, 'NIKE AIR ZOOM PEGASUS 38 2.png'),
(93, 90, 'ADIDAS YEEZY BOOST 350 V2 BONE 2.png'),
(94, 90, 'ADIDAS YEEZY BOOST 350 V2 BONE 3.png'),
(95, 90, 'ADIDAS YEEZY BOOST 350 V2 BONE 4.png'),
(96, 91, 'ADIDAS SUPERSTAR ARIZONA 2.png'),
(97, 91, 'ADIDAS SUPERSTAR ARIZONA 3.png'),
(98, 91, 'ADIDAS SUPERSTAR ARIZONA 4.png'),
(99, 92, 'ADIDAS STAN SMITH GREEN 2.png'),
(100, 92, 'ADIDAS STAN SMITH GREEN 3.png'),
(101, 92, 'ADIDAS STAN SMITH GREEN 4.png'),
(102, 93, 'ADIDAS STAN SMITH DIAMOND 2.png'),
(103, 93, 'ADIDAS STAN SMITH DIAMOND 3.png'),
(104, 93, 'ADIDAS STAN SMITH DIAMOND 4.png'),
(105, 96, 'ADIDAS CONTINENTAL VULC J 2.png'),
(106, 96, 'ADIDAS CONTINENTAL VULC J 3.png'),
(107, 96, 'ADIDAS CONTINENTAL VULC J 4.png'),
(108, 97, 'ADIDAS ADIFOM Q OFF-WHITE 2.png'),
(109, 97, 'ADIDAS ADIFOM Q OFF-WHITE 3.png'),
(110, 97, 'ADIDAS ADIFOM Q OFF-WHITE 4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_loai_san_pham`
--

DROP TABLE IF EXISTS `sb_loai_san_pham`;
CREATE TABLE IF NOT EXISTS `sb_loai_san_pham` (
  `ID_loai_sp` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai_sp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_xep` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loai_cha` int(11) DEFAULT NULL,
  `trang_thai` int(11) NOT NULL,
  PRIMARY KEY (`ID_loai_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_loai_san_pham`
--

INSERT INTO `sb_loai_san_pham` (`ID_loai_sp`, `ten_loai_sp`, `sap_xep`, `id_loai_cha`, `trang_thai`) VALUES
(20, 'Giày', NULL, 0, 1),
(21, 'Trang phục', NULL, 0, 1),
(22, 'Phụ kiện', NULL, 0, 1),
(23, 'Thương hiệu', NULL, 0, 1),
(24, 'Bóng rổ', NULL, 20, 1),
(25, 'Chạy bộ', NULL, 20, 1),
(26, 'Sneakers', NULL, 20, 1),
(27, 'Áo thun', NULL, 21, 1),
(28, 'Quần', NULL, 21, 1),
(29, 'Áo khoác', NULL, 21, 1),
(30, 'Vớ', NULL, 22, 1),
(31, 'Banh', NULL, 22, 1),
(32, 'Balo', NULL, 22, 1),
(33, 'Nike', NULL, 23, 1),
(34, 'Adidas', NULL, 23, 1),
(35, 'Peak sports', NULL, 23, 1),
(36, 'Shoes Care', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_loai_tin_tuc`
--

DROP TABLE IF EXISTS `sb_loai_tin_tuc`;
CREATE TABLE IF NOT EXISTS `sb_loai_tin_tuc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai_tin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_loai_user`
--

DROP TABLE IF EXISTS `sb_loai_user`;
CREATE TABLE IF NOT EXISTS `sb_loai_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_loai_user`
--

INSERT INTO `sb_loai_user` (`ID`, `ten_loai_user`) VALUES
(1, 'Thành Viên'),
(2, 'Hạng Bạc'),
(3, 'Hạng Vàng'),
(4, 'Hạng Kim Cương'),
(5, 'ADMIN'),
(6, 'Quản trị bán hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_nha_cung_cap`
--

DROP TABLE IF EXISTS `sb_nha_cung_cap`;
CREATE TABLE IF NOT EXISTS `sb_nha_cung_cap` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nha_cung_cap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_nha_cung_cap`
--

INSERT INTO `sb_nha_cung_cap` (`ID`, `ten_nha_cung_cap`, `dia_chi`, `dien_thoai`, `email`) VALUES
(1, 'Vsport', '21/16 Trần đình xu', '0873330787', 'vsport@gmail.com'),
(2, 'Vstation', '23 Trần Hưng Đạo', '0778336787', 'Vstation@gmail.com'),
(3, 'Rainbu Shop', '2314 Phạm Thế hiển', '7793330756', 'Rb@gmail.com'),
(4, 'AKpro Sport', '773 hùng vương', '0987456321', 'AKpro@gmail.com'),
(5, 'Minh Phúc', '61 Hoài Thanh', '0898139808', 'phngminhphuc0932@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_nha_san_xuat`
--

DROP TABLE IF EXISTS `sb_nha_san_xuat`;
CREATE TABLE IF NOT EXISTS `sb_nha_san_xuat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ten_nha_san_xuat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_nha_san_xuat`
--

INSERT INTO `sb_nha_san_xuat` (`ID`, `ten_nha_san_xuat`, `dia_chi`, `email`, `sdt`) VALUES
(1, 'Nike', 'Hà nội', 'nike@gmail.com', '0145678945'),
(2, 'Peak', 'Đà nẵng', 'peak@gmail.com', '0876589354'),
(3, 'Adidas', 'Hà nam', 'adidas@gmail.com', '0876453355'),
(4, 'Sicula', 'Huế', 'sicula@gmail.com', '7645883457');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_san_pham`
--

DROP TABLE IF EXISTS `sb_san_pham`;
CREATE TABLE IF NOT EXISTS `sb_san_pham` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_loai_sp` int(11) NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioi_thieu` text COLLATE utf8_unicode_ci,
  `don_gia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_giam` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_bat` tinyint(4) DEFAULT NULL,
  `trang_thai` tinyint(4) DEFAULT NULL,
  `id_nha_cung_cap` int(11) DEFAULT NULL,
  `id_nha_san_xuat` int(11) DEFAULT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_san_xuat` date DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `Fkey_id_nha_cung_cap` (`id_nha_cung_cap`),
  KEY `Fkey_id_nha_san_xuat` (`id_nha_san_xuat`),
  KEY `id_loai_sp` (`id_loai_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_san_pham`
--

INSERT INTO `sb_san_pham` (`ID`, `id_loai_sp`, `ten_san_pham`, `gioi_thieu`, `don_gia`, `gia_giam`, `sku`, `noi_bat`, `trang_thai`, `id_nha_cung_cap`, `id_nha_san_xuat`, `hinh`, `ngay_san_xuat`) VALUES
(19, 24, 'NIKE AIR MAX IMPACT 3', 'NIKE AIR MAX IMPACT 3 \r\nCode: DC3725-101\r\nPhối màu: White/Doll/Black.\r\nCông nghệ: Đệm Air Max ở gót, còn lại là đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor.\r\nVị trí: SF, PF, C.', '2850000', '2750000', 'DC3725-101', 1, 1, 1, 1, 'NIKE AIR MAX IMPACT 3 1.png', NULL),
(20, 24, 'NIKE FREAK 4 UNBELIEVABLE', 'NIKE FREAK 4 \"UNBELIEVABLE\"\r\nCode: DO9680-400\r\nPhối màu: Dark Marina Blue/Barely Volt-Pink Gaze.\r\nCông nghệ: 2 miếng Zoom Air được sử dụng ở bàn chân trước, còn lại được bọc bằng đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (Mặt sân đẹp).\r\nVị trí: Đa vị trí.', '3490000', '3349000', 'DO9680-400', 1, 1, 1, 1, 'NIKE FREAK 4 UNBELIEVABLE 1.png', NULL),
(21, 24, 'NIKE KD 15 PRODUCER PACK', 'NIKE KD 15 \"PRODUCER PACK\"\r\nCode: DO9827-900\r\nPhối màu: Multi-Color/Multi-Color.\r\nCông nghệ: Full-length Air Zoom Strobel.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (mặt sân không quá xấu).\r\nVị trí: PG, SG, SF.', '3990000', '2980000', 'DO9827-900', 1, 1, 1, 1, 'NIKE KD 15 PRODUCER PACK 1.png', NULL),
(22, 24, 'NIKE KD TREY 5 XIII', 'NIKE KD TREY 5 XIII\r\nCode: CK2090-003\r\nPhối màu: Black/White/Sea Blue.\r\nCông nghệ: Đệm Renew.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor.\r\nVị trí: PG, SG, SF.\r\n', '2050000', '1990000', 'CK2090-003', 1, 1, 1, 1, 'NIKE KD TREY 5 XIII 1.png', NULL),
(23, 24, 'NIKE KOBE 6 PROTRO ALL-STAR', 'NIKE KOBE 6 PROTRO \"ALL-STAR\" - COND: 9.8\r\nCode: DH9888-600\r\nPhối màu: Challenge Red/Black/White.\r\nCông nghệ: Đệm Air Zoom Turbo được đặt ở bàn chân trước, còn lai được bọc bằng đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor.\r\nVị trí: PG, SG.\r\nGiày kí gửi; Cond: 9.8 (Full box).', '7000000', '6500000', 'DH9888-600', 1, 1, 1, 1, 'NIKE KOBE 6 PROTRO ALL-STAR 1.png', NULL),
(24, 24, 'NIKE KYRIE 8 AK  SIREN RED', 'NIKE KYRIE 8 \"AK - SIREN RED\"\r\nCode: DM0856-600\r\nPhối màu: Siren Red/Light Blue/White.\r\nCông nghệ: Đệm Zoom Strobel ở bàn chân trước và túi Zoom ở phần gót.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (mặt sân không quá xấu).\r\nVị trí: PG, SG, SF.', '3790000', '2350000', 'DM0856-600', 1, 1, 1, 1, 'NIKE KYRIE 8 AK SIREN RED 1.png', NULL),
(25, 24, 'NIKE KYRIE LOW 5 CHAMPIONS', 'NIKE KYRIE LOW 5 \"CHAMPIONS\"\r\nCode: DJ6014-101\r\nPhối màu: White/Metallic Gold/Black.\r\nCông nghệ: Đệm Zoom Air được sử dụng ở phần bàn chân trước, còn lại được bọc bằng đệm Phylon.\r\nFit: True to size hoặc lên 0.5 size.\r\nĐề xuất: Indoor / Outdoor (Mặt sân không quá xấu).\r\nVị trí: PG, SG, SF.', '2700000', '2350000', 'DJ6014-101', 1, 1, 1, 1, 'NIKE KYRIE LOW 5 CHAMPIONS 1.png', NULL),
(26, 29, 'QXL HOODIE \"HOME\"\r\nForm: Oversize', 'Form: Oversize', '420000', '150000', 'qxlhoodie', 0, 1, 1, 1, 'QXL HOODIE HOME 1.png\r\n', NULL),
(27, 29, 'JORDAN JUMPMAN AIR FULL-ZIP', 'JORDAN JUMPMAN AIR FULL-ZIP\r\n\r\nMàu: Red.\r\nCode: AR2248-687.', '990000', '790000', 'AR2248-687', 0, 1, 1, 1, 'JORDAN JUMPMAN AIR FULL-ZIP 1.png', NULL),
(28, 29, 'ÁO KHOÁC NIKE THERMA PULLOVER', 'ÁO KHOÁC NIKE THERMA PULLOVER\r\n\r\nCode: BV2740-681\r\nPhối màu: Red / Orange Camo.\r\nChất liệu: Thun, vải nỉ.\r\nChính hãng.', '950000', '760000', 'BV2740-681', 0, 1, 1, 1, 'ÁO KHOÁC NIKE THERMA PULLOVER 1', NULL),
(29, 29, 'ÁO KHOÁC NIKE NSW TRACK SUIT BASIC', 'ÁO KHOÁC NIKE NSW TRACK SUIT BASIC\r\nCode: 861780-010\r\nPhối màu: Black.\r\nChất liệu: Nỉ thun.\r\nChính hãng.', '790000', '150000', '861780-010', 0, 1, 1, 1, 'ÁO KHOÁC NIKE NSW TRACK SUIT BASIC 1.png', NULL),
(30, 29, 'ÁO KHOÁC NIKE BIG SWOOSH', 'ÁO KHOÁC NIKE \"BIG SWOOSH\"\r\nChất liệu: Vải dù (2 lớp).', '500000', '350000', 'nikebigswoosh', 0, 1, 1, 1, 'ÁO KHOÁC NIKE BIG SWOOSH 1.png', NULL),
(31, 29, 'ADIDAS TECH CREWNECK SWEATSHIRT', 'ADIDAS TECH CREWNECK SWEATSHIRT\r\nCode: ED6121\r\nPhối màu: Black/White.', '800000', '650000', 'ED6121', 0, 1, 1, 1, 'ADIDAS TECH CREWNECK SWEATSHIRT 1.png', NULL),
(32, 29, 'ADIDAS CAMO LINEAR HOODIE', 'ADIDAS CAMO LINEAR HOODIE\r\nCode: EI9728\r\nPhối màu: Grey/Black.\r\nChính hãng.', '950000', '650000', 'EI9728', 0, 1, 1, 1, 'ADIDAS CAMO LINEAR HOODIE 1.png', NULL),
(33, 28, 'QUẦN SHORT CHAMPION', 'QUẦN SHORT CHAMPION \r\nPhối màu: Đỏ/Xanh.\r\nChính hãng.', '400000', '350000', 'quanchampion', 0, 1, 1, 1, 'QUẦN SHORT CHAMPION 1.png', NULL),
(34, 28, 'QUẦN NIKE SPORTWEAR WOVEN FLOW', 'QUẦN NIKE SPORTWEAR WOVEN FLOW\r\nCode: DR5678-010 / DR5678-403 / DR5678-700 / DR5678-657\r\nPhối màu: Black / Blue / Yellow / Red.\r\nChính hãng.\r\nForm Âu.', '550000', '500000', 'DR5678-010 / DR5678-403 / DR5678-700 / DR5678-657', 0, 1, 1, 1, 'QUẦN NIKE SPORTWEAR WOVEN FLOW 1.png', NULL),
(35, 28, 'QUẦN JORDAN FLIGHT', 'QUẦN JORDAN FLIGHT\r\nPhối màu: Black.', '350000', '300000', 'quanjordan', 0, 1, 1, 1, 'QUẦN JORDAN FLIGHT 1.png', NULL),
(36, 28, 'QUẦN ĐẤU CHAMPION', 'QUẦN ĐẤU CHAMPION\r\nPhối màu: Xanh/Trắng.\r\nChính hãng.', '400000', '350000', 'quandauchampion', 0, 1, 1, 1, 'QUẦN ĐẤU CHAMPION 1.png', NULL),
(37, 28, 'LAKERS KOBE BRYANT SHORT', 'LAKERS KOBE BRYANT SHORT\r\nPhối màu: Yellow/Purple.\r\nMặc chơi thể thao hoặc mặc hàng ngày.\r\nForm Âu.', '350000', '300000', 'lakersshort', 0, 1, 1, 1, 'LAKERS KOBE BRYANT SHORT 1.png', NULL),
(38, 28, 'LAKERS ICON EDITION SHORT', 'LAKERS ICON EDITION SHORT\r\nPhối màu: Gold/White.\r\nMặc chơi thẻ thao hoặc mặc hàng ngày.\r\nForm Âu', '350000', '300000', 'quandaunba', 0, 1, 1, 1, 'LAKERS ICON EDITION SHORT 1.png', NULL),
(39, 28, 'ALL STAR NBA SHORT', 'ALL STAR NBA SHORT\r\nPhối màu: Multi Color.\r\nQuần nằm trong đồng phục thi đấu cho sự kiện NBA All Star.\r\nMặc chơi thể thao hoặc mặc hàng ngày.', '350000', '300000', 'allstarshort', 0, 1, 1, 1, 'ALL STAR NBA SHORT 1.png', NULL),
(40, 27, 'ÁO THUN NIKE NSW SWOOSH', 'ÁO THUN NIKE NSW SWOOSH\r\nCode: DJ1388-100\r\nPhối màu: White/Red/Black.\r\nChính hãng.', '650000', '550000', 'DJ1388-100', 0, 1, 1, 1, 'ÁO THUN NIKE NSW SWOOSH 1.png', NULL),
(41, 27, 'ÁO THUN NIKE FC', 'ÁO THUN NIKE FC\r\nCode: DH7445-010\r\nPhối màu: Black.\r\nChính hãng.', '850000', '750000', 'DH7445-010', 0, 1, 1, 1, 'ÁO THUN NIKE FC 1.png', NULL),
(42, 27, '', 'ÁO THUN JORDAN PSG LOGO\r\nCode: DJ0402-100\r\nPhối màu: White\r\nChính hãng.\r\n', '850000', '750000', '', 0, 1, 1, 1, 'ÁO THUN JORDAN PSG LOGO 1.png', NULL),
(43, 27, 'ÁO THUN NIKE FARROW & BALL', 'ÁO THUN NIKE FARROW & BALL\r\nCode: DR1280-010 / DR1280-063\r\nPhối màu: Grey / Black.\r\nChính hãng.\r\n', '790000', '690000', 'DR1280-010 / DR1280-063', 0, 1, 1, 1, 'ÁO THUN NIKE FARROW & BALL 1.png', NULL),
(44, 27, 'ÁO THUN NIKE ICON', 'ÁO THUN NIKE ICON\r\nCode: BV0629-382\r\nPhối màu: Mint/White.\r\nChính hãng.\r\n', '790000', '690000', 'BV0629-382', 0, 1, 1, 1, 'ÁO THUN NIKE ICON 1.png', NULL),
(45, 27, 'ÁO THUN NIKE JUST DO IT - GRAPHIC', 'ÁO THUN NIKE \"JUST DO IT\" - GRAPHIC\r\nCode: DR1222-800\r\nPhối màu: Multi Color/Multi Color.\r\nChính hãng.\r\n', '850000', '550000', 'DR1222-800', 0, 1, 1, 1, 'ÁO THUN NIKE JUST DO IT - GRAPHIC 1.png', NULL),
(86, 27, 'ÁO THUN DERRICK CLUB', 'ÁO THUN DERRICK CLUB', '480000', '218000', 'aothun', 0, 1, 1, 1, 'ÁO THUN DERRICK CLUB 1.png', NULL),
(87, 27, 'SWEATER NIKE JUST DO IT', 'SWEATER NIKE \"JUST DO IT\"\r\nCode: DO2904-010\r\nPhối màu: Black/Multi Color.\r\nChất áo không quá dày nên có thể mặc hàng ngày.\r\nLưu ý: Áo sẽ đổ lông nhẹ thời gian đầu, nên giặt riêng cho đến khi hết tình trạng trên; không nên giặt mặt trái.\r\nChính hãng.', '890000', '790000', 'DO2904-010', 0, 1, 1, 1, 'SWEATER NIKE JUST DO IT.png', NULL),
(88, 25, 'NIKE WMNS ZOOM WINFLO 8', 'NIKE WMNS ZOOM WINFLO 8\r\nCode: CW3421-100\r\nPhối màu: White/Bright Crimson/Total Orange/Black.\r\nCông nghệ: Zoom Air kết hợp cùng đệm Phylon.\r\nFit: True to size.\r\nĐề xuất: Mang chạy bộ hoặc đi hàng ngày.\r\n', '1850000', '1650000', 'CW3421-100', 0, 1, 1, 1, 'NIKE WMNS ZOOM WINFLO 8 1.png', NULL),
(89, 25, 'NIKE AIR ZOOM PEGASUS 38', 'NIKE AIR ZOOM PEGASUS 38\r\nCode: CZ1815-002\r\nPhối màu: Black/Anthracite/Volt/White.\r\nCông nghệ: Air Zoom kết hợp cùng đệm Phylon.\r\nFit: True to size.\r\nĐề xuất: Mang chạy bộ hoặc đi lại hàng ngày.', '2450000', '1350000', 'CZ1815-002', 0, 1, 1, 1, 'NIKE AIR ZOOM PEGASUS 38 1.png', NULL),
(90, 26, 'ADIDAS YEEZY BOOST 350 V2 BONE', 'ADIDAS YEEZY BOOST 350 V2 \"BONE\"\r\nCode: HQ6316\r\nPhối màu: Bone/Bone-Bone.\r\nCông nghệ: Đệm Boost.\r\nFit: True to size.\r\nĐề xuất: Mang hàng ngày, sưu tầm.', '7200000', '5200000', 'HQ6316', 0, 1, 1, 1, 'ADIDAS YEEZY BOOST 350 V2 BONE 1.png', NULL),
(91, 26, 'ADIDAS SUPERSTAR ARIZONA', 'ADIDAS SUPERSTAR ARIZONA\r\nCode: GZ2871\r\nPhối màu: Chalk White / Chalk White / Chalk White.\r\nFit: True to size hoặc lên từ 0.5-1 size.\r\nĐề xuất: Sử dụng đi lại hằng ngày, đi chơi.', '2200000', '1780000', 'GZ2871', 0, 1, 1, 1, 'ADIDAS SUPERSTAR ARIZONA 1.png', NULL),
(92, 26, 'ADIDAS STAN SMITH GREEN', 'ADIDAS STAN SMITH \"GREEN\"\r\nCode: M20324.\r\nPhối màu: Cloud White/Core White/Green.\r\nFit: True to size hoặc lên từ 0.5 - 1 size.\r\nĐề xuất: Sử dụng đi lại hằng ngày, đi chơi.\r\n', '1800000', '1350000', 'M20324', 0, 1, 1, 1, 'ADIDAS STAN SMITH GREEN 1.png', NULL),
(93, 26, 'ADIDAS STAN SMITH DIAMOND', 'ADIDAS STAN SMITH \"DIAMOND\"\r\nCode: EE8483.\r\nPhối màu: Cloud White/Cloud White/Core Black.\r\nFit: True to size hoặc lên 0.5 - 1 size.\r\nĐề xuất: Sử dụng đi lại hằng ngày, đi chơi.\r\n', '1800000', '1350000', 'EE8483', 0, 1, 1, 1, 'ADIDAS STAN SMITH DIAMOND 1.png', NULL),
(96, 26, 'ADIDAS CONTINENTAL VULC J', 'ADIDAS CONTINENTAL VULC J\r\nCode: EF9074\r\nPhối màu: Cream White / Cream White / Supplier Colour.\r\nFit: True to size.\r\nĐề xuất: Sử dụng đi lại hằng ngày, đi chơi.', '1800000', '1650000', 'EF9074', 0, 1, 1, 1, 'ADIDAS CONTINENTAL VULC J 1.png', NULL),
(97, 26, 'ADIDAS ADIFOM Q OFF-WHITE', 'ADIDAS ADIFOM Q \"OFF-WHITE\"\r\nCode: FY4455\r\nPhối màu: Off-White/Aluminium/Wonder White.\r\nFit: True to size.\r\nĐề xuất: Mang hàng ngày.\r\nGiày gồm 2 phần, lớp vải bên trong có thể tách ra khỏi khung foam bên ngoài.', '3800000', '3500000', 'FY4455', 0, 1, 1, 1, 'ADIDAS ADIFOM Q OFF-WHITE 1.png', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_tin_tuc`
--

DROP TABLE IF EXISTS `sb_tin_tuc`;
CREATE TABLE IF NOT EXISTS `sb_tin_tuc` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tom_tat` text COLLATE utf8mb4_unicode_ci,
  `chi_tiet` text COLLATE utf8mb4_unicode_ci,
  `id_loai_tin_tuc` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_ton_kho`
--

DROP TABLE IF EXISTS `sb_ton_kho`;
CREATE TABLE IF NOT EXISTS `sb_ton_kho` (
  `id_sp` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sb_ton_kho`
--

INSERT INTO `sb_ton_kho` (`id_sp`, `size`, `so_luong`) VALUES
(19, 43, 12),
(19, 42, 14),
(19, 44, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sb_user`
--

DROP TABLE IF EXISTS `sb_user`;
CREATE TABLE IF NOT EXISTS `sb_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ho` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tai_khoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem_tich_luy` int(11) DEFAULT NULL,
  `ngay_dang_ky` date DEFAULT NULL,
  `active_code` int(11) DEFAULT NULL,
  `thoi_gian_dang_nhap` datetime DEFAULT NULL,
  `dien_thoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_phan_quyen` int(11) DEFAULT NULL,
  `id_loai_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_loai_user` (`id_loai_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sb_user`
--

INSERT INTO `sb_user` (`ID`, `ho`, `ten`, `tai_khoan`, `mat_khau`, `email`, `diem_tich_luy`, `ngay_dang_ky`, `active_code`, `thoi_gian_dang_nhap`, `dien_thoai`, `id_phan_quyen`, `id_loai_user`) VALUES
(2, 'Phạm', 'Nam', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'hainam011201@gmail.com', 100000, NULL, NULL, '2022-10-09 16:42:28', '0919999968', NULL, 7),
(3, 'Nguyễn', 'Linh', 'linhnguyen', '670b14728ad9902aecba32e22fa4f6bd', 'linhnguyen@gmail.com', 50000, NULL, NULL, '2022-10-11 17:10:04', NULL, NULL, 1),
(4, 'Nguyễn', 'Hà', 'hanguyen', '670b14728ad9902aecba32e22fa4f6bd', 'hanguyen@gmail.com', 50000, NULL, NULL, '2022-10-11 17:10:04', NULL, NULL, 1),
(6, 'Phạm', 'Minh Phúc', 'minhphuc', '202cb962ac59075b964b07152d234b70', 'phucpham0000@gmail.com', 5000, NULL, NULL, NULL, '0988793979', NULL, 1),
(7, 'Vương Đỗ', 'Anh Thy', 'anthea', 'e10adc3949ba59abbe56e057f20f883e', 'anthea03102000@gmail.com', 200000, '2016-03-09', NULL, NULL, '0907056235', NULL, 1),
(8, NULL, NULL, 'MinhPhuc2', '123456789', 'phng@gmail.com', NULL, '2022-11-10', NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, 'coolheart78', 'fe417c9bf74775ba414ebdf7fa1d88e9', 'tung35099@gmail.com', NULL, '2022-11-10', NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, 'babarita', 'e0af19eb822d7a0e834f6d4b9cef596b', 'baba@gmail.com', NULL, '2022-11-10', NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, 'babahaha', '4cf1b1efa0d3634efdf8719c280db912', 'tung35099@gmail.com', NULL, '2022-11-10', NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, 'phucpham0000@gmail.com', '01f00836d59def3830c532bfe74aa63f', 'tung35099@gmail.com', NULL, '2022-11-10', NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'Alan Wong', 'phucpham0000@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'tung35099@gmail.com', NULL, '2022-11-10', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sb_hinh_san_pham`
--
ALTER TABLE `sb_hinh_san_pham`
  ADD CONSTRAINT `sb_hinh_san_pham_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sb_san_pham` (`ID`);

--
-- Các ràng buộc cho bảng `sb_san_pham`
--
ALTER TABLE `sb_san_pham`
  ADD CONSTRAINT `sb_san_pham_ibfk_1` FOREIGN KEY (`id_loai_sp`) REFERENCES `sb_loai_san_pham` (`ID_loai_sp`);

--
-- Các ràng buộc cho bảng `sb_ton_kho`
--
ALTER TABLE `sb_ton_kho`
  ADD CONSTRAINT `sb_ton_kho_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sb_san_pham` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
