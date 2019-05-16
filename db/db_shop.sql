-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2018 lúc 03:15 PM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Thuy Duong', 'nguyenthuyduong@gmail.com', '$2y$10$rob7dIyd3qDO.pWlMsmrHOKBfClmxuwnIoUJiKUYhmP5TqSMtZnpG', '4ULrkepvOMCBQm8qQwH79BrJvWUeyjERXULrMFlqc6h1spzoobkbyGfH4jNK', '2018-12-21 04:45:24', '0000-00-00 00:00:00'),
(3, 'Hai Son', 'nguyenhaison@gmail.com', '$2y$10$fXAG6V2yPEwpYTeovvHSFOkW2ebOcCuyMTs8Ec3bnEgPGq1WgfBtq', NULL, '2018-12-20 09:28:25', '2018-12-20 09:28:25'),
(4, 'Duc Thang', 'thangbidien@gmail.com', '$2y$10$7Y7QwsKupYRR15Ju3CxS/OjvJ4..vSTxHcaKSTdXzZpC/t0TNOWJa', NULL, '2018-12-20 09:29:45', '2018-12-20 09:29:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `BannerName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`ID`, `Image`, `BannerName`) VALUES
(1, 'banner-01.jpg', 'Women'),
(2, 'banner-02.jpg', 'Men'),
(3, 'banner-03.jpg', 'Kids');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `ID` int(11) NOT NULL,
  `BillID` int(11) NOT NULL,
  `Price` float NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Size` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`ID`, `BillID`, `Price`, `Quantity`, `ProductID`, `Size`, `updated_at`, `created_at`) VALUES
(7, 5, 499000, 1, 6, 'L', '2018-12-18 09:04:06', '2018-12-18 09:04:06'),
(8, 5, 429000, 1, 8, 'L', '2018-12-18 09:04:06', '2018-12-18 09:04:06'),
(9, 5, 1398000, 2, 7, 'L', '2018-12-18 09:04:06', '2018-12-18 09:04:06'),
(10, 6, 699000, 1, 2, 'L', '2018-12-18 10:29:49', '2018-12-18 10:29:49'),
(11, 6, 499000, 1, 1, 'L', '2018-12-18 10:29:50', '2018-12-18 10:29:50'),
(12, 7, 1699000, 1, 10, 'L', '2018-12-19 01:51:54', '2018-12-19 01:51:54'),
(13, 7, 1199000, 1, 14, 'L', '2018-12-19 01:51:54', '2018-12-19 01:51:54'),
(14, 8, 799000, 1, 11, 'L', '2018-12-19 01:53:37', '2018-12-19 01:53:37'),
(15, 8, 1699000, 1, 10, 'L', '2018-12-19 01:53:37', '2018-12-19 01:53:37'),
(18, 10, 699000, 1, 2, 'L', '2018-12-20 09:08:20', '2018-12-20 09:08:20'),
(19, 10, 799000, 1, 11, 'L', '2018-12-20 09:08:20', '2018-12-20 09:08:20'),
(20, 10, 499000, 1, 9, 'L', '2018-12-20 09:08:20', '2018-12-20 09:08:20'),
(21, 11, 499000, 1, 6, 'L', '2018-12-20 09:09:48', '2018-12-20 09:09:48'),
(22, 11, 499000, 1, 9, 'L', '2018-12-20 09:09:48', '2018-12-20 09:09:48'),
(23, 12, 1699000, 1, 4, 'L', '2018-12-20 21:42:04', '2018-12-20 21:42:04'),
(24, 12, 1497000, 3, 3, 'M', '2018-12-20 21:42:04', '2018-12-20 21:42:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `ID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `DateOrder` date DEFAULT NULL,
  `TotalPrice` float NOT NULL,
  `TotalQuantity` int(11) NOT NULL,
  `StatusID` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`ID`, `CustomerID`, `DateOrder`, `TotalPrice`, `TotalQuantity`, `StatusID`, `updated_at`, `created_at`) VALUES
(5, 3, '2018-12-18', 2326000, 4, 4, '2018-12-20 02:45:21', '2018-12-18 09:04:06'),
(6, 1, '2018-12-18', 1198000, 2, 4, '2018-12-18 21:25:49', '2018-12-18 10:29:49'),
(7, 3, '2018-12-19', 2898000, 2, 4, '2018-12-20 21:43:15', '2018-12-19 01:51:54'),
(8, 2, '2018-12-19', 2498000, 2, 3, '2018-12-20 21:43:01', '2018-12-19 01:53:37'),
(10, 6, '2018-12-20', 1997000, 3, 2, '2018-12-20 21:42:55', '2018-12-20 09:08:20'),
(11, 6, '2018-12-20', 998000, 2, 1, '2018-12-20 09:09:47', '2018-12-20 09:09:47'),
(12, 6, '2018-12-21', 3196000, 4, 1, '2018-12-20 21:42:04', '2018-12-20 21:42:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `ID` int(11) NOT NULL,
  `ColorName` varchar(255) NOT NULL,
  `inforColor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`ID`, `ColorName`, `inforColor`) VALUES
(1, 'Black', '#222'),
(2, 'White', '#ffff'),
(3, 'Yellow', '#FFFA00'),
(4, 'Blue', '#4272d7'),
(5, 'Green', '#00ad5f'),
(6, 'Grey', '#b3b3b3'),
(7, 'Red', '#FF0040'),
(8, 'Pink', '#FF00A1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customername` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Note` text,
  `remember_token` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `customername`, `Gender`, `email`, `password`, `Address`, `Phone`, `Note`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'Nguyen Hai Son', 'Male', 'nguyenhaison@gmail.com', '$2y$10$9WP1YoHmCaMH2SvQ6Rrio.xqNG76SowQ8h8nu7YxulldJqJm6COH6', 'Yên Bái, Việt Nam', '0979836561', NULL, 'PXxZFzwROOccUqZxnF5ANCG9H4kcZgd5TeC3Vy9aXnNjI1lXfnZZTLSDt8uy', '2018-12-20 14:18:06', '2018-11-27 08:30:41'),
(2, 'Nguyen Thuy Duong', 'Female', 'nguyenthithuyduong@gmail.com', '$2y$10$axboO156uv4Uh7DhgbRhZ.fJJZveWa7jKdrZxTnwV6i17.2T0HZqi', 'Thanh Hóa, Việt Nam', '0123456789', NULL, 'IoUfdH7sKH3olwBVatnT6ClSVpba9oITrdESiL9S8dqoFImSoWqfOAVZ53YF', '2018-12-18 22:21:16', '2018-12-17 08:28:43'),
(3, 'Người Dùng 1', 'Male', 'nguoidung1@gmail.com', '$2y$10$12jWO8H58TB/Drmb/.V73e77Ns/A87vqfWWUpY/BfULym78eIoDTS', 'Hà Nôi, Việt Nam', '0123456789', NULL, 'MnIyunazVTzAOmwpeFenpUlsCxfPldSmfMaMQFrIZdekXWViezJak8C5OdmF', '2018-12-19 08:52:38', '2018-12-18 09:02:42'),
(5, 'Người Dùng 2', 'Male', 'nguoidung2@gmail.com', '$2y$10$K7pl8Z4bEFfy.Iz3rz3Mxu8oqUsmAWPqbqX9hRaen5mWkWUpaYuM6', 'Hai bà trưng , Hà nội', '0979836561', NULL, NULL, '2018-12-20 02:46:55', '2018-12-20 02:46:55'),
(6, 'Người Dùng 3', 'Female', 'nguoidung3@gmail.com', '$2y$10$LkZArJAeIVufVWQmunutLOb5V.wdFeGZiOA1RoB3tqO9cTQCrjf9u', 'Đống Đa , Hà Nội', '0123456789', NULL, 'EtN046Yp50uhX7ArWfRiAykZH0A3zw73Z0keOXH1dJDZt9jB5WXc8yYdrApa', '2018-12-21 04:38:27', '2018-12-20 09:06:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `input`
--

CREATE TABLE `input` (
  `ID` int(11) NOT NULL,
  `DateIn` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `input`
--

INSERT INTO `input` (`ID`, `DateIn`, `Quantity`, `ProductID`, `updated_at`, `created_at`) VALUES
(1, '2018-12-19', 4, 3, '2018-12-18 20:53:44', '2018-12-18 20:53:44'),
(2, '2018-12-19', 3, 12, '2018-12-18 21:39:09', '2018-12-18 21:39:09'),
(3, '2018-12-19', 3, 13, '2018-12-18 21:58:39', '2018-12-18 21:58:39'),
(4, '2018-12-19', 3, 14, '2018-12-18 22:06:06', '2018-12-18 22:06:06'),
(5, '2018-12-19', 8, 14, '2018-12-18 22:27:32', '2018-12-18 22:27:32'),
(6, '2018-12-20', 10, 1, '2018-12-20 09:25:06', '2018-12-20 09:25:06'),
(7, '2018-12-21', 4, 7, '2018-12-20 21:44:58', '2018-12-20 21:44:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `output`
--

CREATE TABLE `output` (
  `ID` int(11) NOT NULL,
  `DateOut` date DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `BillID` int(11) DEFAULT NULL,
  `TotalPrice` float DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `output`
--

INSERT INTO `output` (`ID`, `DateOut`, `Quantity`, `BillID`, `TotalPrice`, `updated_at`, `created_at`) VALUES
(1, '2018-12-19', 2, 6, 1198000, '2018-12-18 21:25:49', '2018-12-18 21:25:49'),
(2, '2018-12-20', 4, 5, 2326000, '2018-12-20 02:45:21', '2018-12-20 02:45:21'),
(3, '2018-12-21', 2, 7, 2898000, '2018-12-20 21:43:15', '2018-12-20 21:43:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `TypeID` int(11) NOT NULL,
  `Description` text,
  `Price` float NOT NULL,
  `ColorID` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Image3` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `Name`, `TypeID`, `Description`, `Price`, `ColorID`, `Quantity`, `Image1`, `Image2`, `Image3`, `updated_at`, `created_at`) VALUES
(1, 'Skinny Fit Jeans', 3, 'Slim-fit jeans in washed stretch denim with hard-worn details with patches on the inside and an adjustable elasticated waist. Zip fly with a press-stud, fake front pockets, real back pockets and narrow hems.', 499000, 4, 19, 'kids-01 (1).jpg', 'kids-01 (2).jpg', 'kids-01 (3).jpg', '2018-12-20 09:25:07', '2018-11-18 08:49:27'),
(2, 'Dungarees', 3, 'Slim-fit dungarees in washed stretch denim with adjustable straps and a pocket at the top. Buttons at the sides, side and back pockets and straight-cut hems.', 699000, 4, 2, 'kids-02 (1).jpg', 'kids-02 (2).jpg', 'kids-02 (3).jpg', '2018-12-18 21:25:49', '2018-11-20 00:54:23'),
(3, 'Hooded jacket Regular fit', 2, 'Jacket in sweatshirt fabric with a lined drawstring hood, zip down the front, side pockets and ribbing at the cuffs and hem. Soft brushed inside. Regular fit.', 499000, 4, 3, 'men-02 (1).jpg', 'men-02 (2).jpg', 'men-02 (3).jpg', '2018-12-18 21:17:18', '0000-00-00 00:00:00'),
(4, 'Cotton jacket Slim fit', 2, 'Two-button jacket in a cotton weave with a decorative buttonhole on one lapel, a chest pocket, flap front pockets and two inner pockets. Imitation suede elbow patches, decorative buttons at the cuffs and a single back vent. Half lined. The jacket is of a lightweight construction which gives it a natural, relaxed look over the shoulders and chest. Slim fit to create a fitted silhouette.', 1699000, 6, 2, 'men-04 (1).jpg', 'men-04 (2).jpg', 'men-04 (3).jpg', '2018-11-20 08:20:26', '0000-00-00 00:00:00'),
(5, 'Long-sleeved dress', 1, 'Fitted dress in stretch jersey with a V-neck, long sleeves and a decorative knot at the front.', 429000, 1, 2, 'women-10 (1).jpg', 'women-10 (2).jpg', 'women-10 (3).jpg', '2018-11-20 08:28:38', '0000-00-00 00:00:00'),
(6, 'Denim jacket', 1, 'Slim-fit dungarees in washed stretch denim with adjustable straps and a pocket at the top. Buttons at the sides, side and back pockets and straight-cut hems.', 499000, 4, 2, 'women-02 (1).jpg', 'women-02 (2).jpg', 'women-02 (3).jpg', '2018-12-20 02:45:21', '2018-11-20 00:57:32'),
(7, 'Patent skirt', 1, 'Short skirt in imitation patent leather with a tab and press-studs and a visible zip at the front. Lined.', 699000, 1, 4, 'women-04 (1).jpg', 'women-04 (2).jpg', 'women-04 (3).jpg', '2018-12-20 21:44:58', '2018-11-20 01:01:22'),
(8, 'Twill shorts High Waist', 1, 'Short skirt in imitation patent leather with a tab and press-studs and a visible zip at the front. Lined.High-waisted shorts in superstretch twill with back pockets and sewn-in turn-ups at the hems.', 429000, 1, 0, 'women-07 (1).jpg', 'women-07 (2).jpg', 'women-07 (3).jpg', '2018-12-20 02:45:21', '2018-11-20 01:04:22'),
(9, 'Hooded top', 2, 'Top in sweatshirt fabric with a lined drawstring hood with a wrapover front. Long sleeves, a kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.', 499000, 3, 3, 'men-01 (1).jpg', 'men-01 (2).jpg', 'men-01 (3).jpg', '2018-11-20 03:53:55', '2018-11-20 01:10:01'),
(10, 'Biker jacket', 2, 'Jacket in imitation leather with quilted sections, a small stand-up collar with an adjustable tab with press-studs and a zip down the front. Zipped chest pockets, pockets in the side seams and an inner pocket with a press-stud, adjustable tabs with press-studs at the sides and press-studs at the cuffs. Lined.', 1699000, 1, 1, 'men-10 (1).jpg', 'men-10 (2).jpg', 'men-10 (3).jpg', '2018-12-20 21:43:15', '2018-11-20 01:13:07'),
(11, 'Suit trousers Slim fit', 2, 'Suit trousers in woven fabric with a concealed hook-and-eye fastening and zip fly. Side pockets, jetted back pockets with a button and legs with creases. Slim fit that is close-fitting at the thighs, knees and ankles to create a fitted silhouette.', 799000, 1, 2, 'men-03 (1).jpg', 'men-03 (2).jpg', 'men-03 (3).jpg', '2018-11-20 03:55:08', '2018-11-20 03:55:08'),
(12, 'Jacquard-weave dress', 3, 'Dress in a patterned jacquard weave containing glittery threads. Short cap sleeves, buttons at the back, a gathered seam at the waist and a flared skirt. Lined.', 899000, 2, 3, 'kids-03 (1).jpg', 'kids-03 (2).jpg', 'kids-03 (3).jpg', '2018-12-18 21:39:09', '2018-12-18 21:37:47'),
(13, 'Warm-lined Chelsea boots', 4, 'Lining and sock: Imitation Fur 100%\r\nUpper: Imitation Leather 100%\r\nOuter sole: Thermoplastic rubber 100%', 1000000, 1, 3, 'hmgoepprod.jpg', 'hmgoepprod (1).jpg', 'hmgoepprod (2).jpg', '2018-12-18 21:58:39', '2018-12-18 21:57:56'),
(14, 'Biker boots', 4, 'Outer sole: Thermoplastic rubber 100%\r\nUpper: Imitation Leather 100%\r\nLining and sock: Imitation Fur 100%', 1199000, 1, 10, 'Bikerboots.jpg', 'Bikerboots2.jpg', 'Bikerboots3.jpg', '2018-12-20 21:43:15', '2018-12-18 22:05:21'),
(16, 'Ankle boots', 4, 'Upper: Polyester 100%\r\nOuter sole: Thermoplastic rubber 100%\r\nLining and sock: Polyester 100%', 1299000, 7, 0, 'Ankleboots.jpg', 'Ankleboots2.jpg', 'Ankleboots3.jpg', '2018-12-20 08:59:37', '2018-12-20 08:59:37'),
(17, 'Pile-lined boots', 4, 'Imitation fur: Polyester 100%\r\nUpper: Imitation Leather 100%\r\nOuter sole: Thermoplastic rubber 100%', 1999000, 2, 0, 'Pile-lined boots-1.jpg', 'Pile-lined boots-2.jpg', 'Pile-lined boots-3.jpg', '2018-12-20 09:04:57', '2018-12-20 09:04:25'),
(18, 'Dungaree dress', 1, 'Coating: Polyurethane 100%\r\nViscose 79%; Polyester 18%; Elastane 3%', 999000, 1, 0, 'Dungaree dress-1.jpg', 'Dungaree dress-2.jpg', 'Dungaree dress-3.jpg', '2018-12-20 09:14:20', '2018-12-20 09:14:20'),
(21, 'Padded jacket', 1, 'aa', 1299000, 1, 0, 'Padded jacket-1.jpg', 'Padded jacket-2.jpg', 'Padded jacket-3.jpg', '2018-12-20 20:56:46', '2018-12-20 20:56:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `ID` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `SlideName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`ID`, `Image`, `SlideName`) VALUES
(11, 'slide-01.jpg', 'Women Collection 2018'),
(12, 'slide-02.jpg', 'Men Collection 2018'),
(13, 'slide-03.jpg', 'Men Collection 2018'),
(14, 'slide-04.jpg', 'Women Collection 2018'),
(15, 'slide-05.jpg', 'Women Collection 2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`ID`, `Name`) VALUES
(1, 'To Confirm - Chờ xác nhận'),
(2, 'To Shop - Chờ đóng gói '),
(3, 'To Receive - Đang giao '),
(4, 'Completed - Đã giao'),
(5, 'Cancelled - Đã hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typeproduct`
--

CREATE TABLE `typeproduct` (
  `ID` int(11) NOT NULL,
  `TypeName` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `typeproduct`
--

INSERT INTO `typeproduct` (`ID`, `TypeName`, `updated_at`, `created_at`) VALUES
(1, 'Women', '2018-11-18 15:13:30', '0000-00-00 00:00:00'),
(2, 'Men', '2018-11-22 21:06:54', '0000-00-00 00:00:00'),
(3, 'Kids', '2018-11-18 15:15:00', '0000-00-00 00:00:00'),
(4, 'Shoes', '2018-12-18 21:54:34', '2018-12-18 21:47:05');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BillID` (`BillID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `StatusID` (`StatusID`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Chỉ mục cho bảng `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BillID` (`BillID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ColorID` (`ColorID`),
  ADD KEY `TypeID` (`TypeID`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `typeproduct`
--
ALTER TABLE `typeproduct`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `input`
--
ALTER TABLE `input`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `output`
--
ALTER TABLE `output`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `typeproduct`
--
ALTER TABLE `typeproduct`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_ibfk_1` FOREIGN KEY (`BillID`) REFERENCES `bills` (`ID`),
  ADD CONSTRAINT `billdetail_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ID`);

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`ID`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`StatusID`) REFERENCES `status` (`ID`);

--
-- Các ràng buộc cho bảng `input`
--
ALTER TABLE `input`
  ADD CONSTRAINT `input_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ID`);

--
-- Các ràng buộc cho bảng `output`
--
ALTER TABLE `output`
  ADD CONSTRAINT `output_ibfk_1` FOREIGN KEY (`BillID`) REFERENCES `bills` (`ID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`TypeID`) REFERENCES `typeproduct` (`ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`ColorID`) REFERENCES `color` (`ID`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`TypeID`) REFERENCES `typeproduct` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
