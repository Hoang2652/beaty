-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 20, 2023 lúc 09:47 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `beauty`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`id`, `title`, `description`, `created_at`, `img`) VALUES
(1, 'Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả', 'Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả,được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục', '2023-09-19 17:00:00', 'rectangle-60.png'),
(2, 'Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả', 'Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục', '2023-09-19 22:37:59', 'rectangle-59.png'),
(3, 'Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả', 'Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục', '2023-09-19 22:38:47', 'rectangle-62.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `type`, `img`) VALUES
(1, 'Calvin Klein Beauty Eau de Parfum for Her', 1387000, 'top', 'image-2.png'),
(2, 'Chloe Roses De Chloe', 2527000, 'top', 'image-3.png'),
(3, 'Calvin Klein Euphoria Men', 1282500, 'top', 'image-4.png'),
(4, 'Anna Sui Fantasia', 1064000, 'top', 'image-5.png'),
(5, 'Azzaro Wanted Girl By Night', 2185000, 'top', 'image-6.png'),
(6, 'Azzaro Wanted Girl By Night', 2185000, 'top', 'image-7.png'),
(7, 'Calvin Klein Beauty Eau de Parfum for Her', 1287000, 'best seller', 'image-8.png'),
(8, 'Chloe Roses De Chloe', 2527000, 'best seller', 'image-9.png'),
(9, 'Calvin Klein Euphoria Men', 1387000, 'best seller', 'image-10.png'),
(10, 'Anna Sui Fantasia', 1064000, 'best seller', 'image-11.png'),
(11, 'Azzaro Wanted Girl By Night', 1282500, 'best seller', 'image-2.png'),
(12, 'Calvin Klein Beauty Eau de Parfum for Her', 1282500, 'best seller', 'image-3.png'),
(13, 'Calvin Klein Euphoria Men', 2527000, 'top', 'image-4.png'),
(14, 'Anna Sui Fantasia', 2527000, 'top', 'image-5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `min_order_amount` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id`, `type`, `min_order_amount`, `code`, `expiry_date`) VALUES
(1, 'Miễn Phí Vận Chuyển', 300, 'NUOCHOAGIFT', '2023-06-07'),
(2, 'Giảm 20%', 200, 'NUOCHOAGIFT20K', '2023-09-19'),
(3, 'Giảm 50k', 500, 'NUOCHOAGIFT50K', '2023-09-19'),
(4, 'Giảm 10% Tổng Bill', 699, 'NUOCHOAGIFT699', '2023-09-20'),
(5, 'Giảm 20% Tổng Bill', 999, 'NUOCHOAGIFT999', '2023-09-20');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
