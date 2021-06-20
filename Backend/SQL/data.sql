-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2021 lúc 11:15 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Vòng Tay Phong Thủy'),
(2, 'Vòng Tay Thời Trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `prd_id` int(100) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaSP` varchar(20000) COLLATE utf8_unicode_ci NOT NULL,
  `images` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `descriptions` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `brand_id` int(100) NOT NULL,
  `Menh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `MaSP`, `images`, `price`, `quantity`, `descriptions`, `brand_id`, `Menh`) VALUES
(1, 'VÒNG GARNET SAO', 'SP001048-TCCB-2', 'images/1.jpg', 2470000, 10, 'Đá Garnet hay Granat là 1 loại đá quý có lịch sử lâu đời trong khoáng sản học, thường được biết đến với cái tên Ngọc hồng lựu bởi màu đỏ của nó giống như quả lựu. Có khoảng 20 loại khác nhau như: Almandine, Rhodolite, Spessartine, Hessonite, Tsavorite, Demantoid,…mà ở Việt Nam người ta hay gọi dân dã là đá Garnet đỏ, Garnet nâu, Garnet xanh, Garnet vàng, Garnet đen hay Garnet sao. Garnet từng là biểu tượng đại diện cho mặt trời.', 1, ' Hỏa  - Thổ'),
(2, 'VÒNG MẮT HỔ TAM TÀI', 'SP000662-MHT3', 'images//30.jpg', 1315000, 21, 'Đá mắt hổ (Tiger Eye) là 1 biến thể thuộc đá thạch anh, có hiệu ứng mắt mèo và ánh lụa rất đẹp, được sử dụng từ thời La Mã cổ đại. Các chiến binh khi thường đeo bùa hộ mệnh được khắc từ đá mắt hổ, giúp thân chủ bình tĩnh, can đảm, tập trung và kiên trì.\r\n\r\n ', 1, 'DÙNG CHO TẤT CẢ CÁC MẠNG'),
(3, 'VÒNG THẠCH ANH DÂU TÂY XANH', 'SP000616-DTX4', 'images//4.jpg', 1803000, 20, 'Xanh ngọc luôn là màu sáng được ưa thích đối với hầu hết người dùng hiện nay, đặc biệt là những món đồ trang sức. Thạch anh dâu xanh được ví như một hòn ngọc xanh mượt giữa vô vàn món đồ trang sức mang hơi hướng phong thủy, là một món đồ trang sức phong thủy rất được lòng các chị em phụ nữ, đặc biệt là các bạn nữ yêu thích sự trẻ trung, dịu dàng.', 1, 'HỎA - MỘC'),
(4, 'VÒNG THẠCH ANH DÂU TÂY XANH', 'SP000616-DTX7', 'images//5.jpg', 1423000, 21, 'Xanh ngọc luôn là màu sáng được ưa thích đối với hầu hết người dùng hiện nay, đặc biệt là những món đồ trang sức. Thạch anh dâu xanh được ví như một hòn ngọc xanh mượt giữa vô vàn món đồ trang sức mang hơi hướng phong thủy, là một món đồ trang sức phong thủy rất được lòng các chị em phụ nữ, đặc biệt là các bạn nữ yêu thích sự trẻ trung, dịu dàng.', 1, 'HỎA - MỘC'),
(5, 'VÒNG MOONSTONE', ' TL00092-DMT3', 'images//8.jpg', 2650000, 12, 'Đá mặt trăng hay Moonstone, là 1 loại đá quý thuộc nhóm Fenspat Kali. Moonstone phát ánh sáng trắng xanh mờ ảo giống như vầng trăng. Hiện tượng quang học lung linh của đá mặt trăng được các nhà khoa học đặt tên là “Adulares Age” – Ánh xà cừ\r\n\r\nMoonstone là viên đá thiêng liêng của người Ấn Độ\r\n\r\nNgười La Mã cổ đại thì tin mỗi viên đá Moonstone tượng trưng cho 1 hình ảnh của Nữ thần mặt trăng – Diana.', 1, ' KIM - THỦY'),
(6, 'VÒNG MOONSTONE', 'TL00092-DMT2', 'images//12.jpg', 2760000, 12, 'Đá mặt trăng hay Moonstone, là 1 loại đá quý thuộc nhóm Fenspat Kali. Moonstone phát ánh sáng trắng xanh mờ ảo giống như vầng trăng. Hiện tượng quang học lung linh của đá mặt trăng được các nhà khoa học đặt tên là “Adulares Age” – Ánh xà cừ\r\n\r\nMoonstone là viên đá thiêng liêng của người Ấn Độ\r\n\r\nNgười La Mã cổ đại thì tin mỗi viên đá Moonstone tượng trưng cho 1 hình ảnh của Nữ thần mặt trăng – Diana.', 1, 'KIM - THỦY'),
(7, 'VÒNG MẮT HỔ VÀNG NÂU', 'TL00085-MHV9', 'images//19.jpg', 2278000, 31, 'Đá mắt hổ (Tiger Eye) là 1 biến thể thuộc đá thạch anh, có hiệu ứng mắt mèo và ánh lụa rất đẹp, được sử dụng từ thời La Mã cổ đại. Các chiến binh thường đeo bùa hộ mệnh được khắc từ đá mắt hổ, giúp thân chủ bình tĩnh, can đảm, tập trung và kiên trì.', 1, 'KIM - THỔ'),
(8, 'VÒNG MẮT HỔ VÀNG TÂM', 'TL00085-MHV7', 'images//21.jpg', 1650000, 12, 'Đá mắt hổ (Tiger Eye) là 1 biến thể thuộc đá thạch anh, có hiệu ứng mắt mèo và ánh lụa rất đẹp, được sử dụng từ thời La Mã cổ đại. Các chiến binh thường đeo bùa hộ mệnh được khắc từ đá mắt hổ, giúp thân chủ bình tĩnh, can đảm, tập trung và kiên trì.', 2, 'KIM - THỦY');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
