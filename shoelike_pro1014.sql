-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2022 lúc 08:38 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoelike_pro1014`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `cate_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `cate_name`) VALUES
(1, 'Sản phẩm mới'),
(2, 'Giày thời trang'),
(3, 'Giày chạy bộ'),
(4, 'Giày luyện tập'),
(5, 'Giày bóng rổ'),
(6, 'Giày bóng đá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `rate` tinyint(5) DEFAULT NULL,
  `id_pro` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_bill` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total_order` int(11) NOT NULL DEFAULT 0,
  `payment` tinyint(1) NOT NULL DEFAULT 1,
  `id_user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `order_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `order_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_order`, `id_bill`, `total_order`, `payment`, `id_user`, `date`, `status`, `order_name`, `order_address`, `order_email`, `order_phone`) VALUES
(70, 'SHOELIKE56369', 3196000, 1, 'admin2', '28/11/2022', 0, 'Lê Công', 'qưer', 'congldqn888@gmail.com', '0965973668'),
(73, 'SHOELIKE47225', 3000000, 1, 'conglt', '28/11/2022', 0, 'Công Lê', 'Thành Phố Cẩm Phả, Tỉnh Quảng Ninh', 'lethanhcong2003@gmail.com', '0965973667'),
(74, 'SHOELIKE81027', 3000000, 1, 'conglt', '28/11/2022', 0, 'Công Lê', 'Thành Phố Cẩm Phả, Tỉnh Quảng Ninh', 'lethanhcong2003@gmail.com', '0965973667'),
(78, 'SHOELIKE50', 4598000, 1, 'admin2', '29/11/2022', 0, 'Lê Công', 'V3 Victoria Văn Phú, Hà Đông, Hà Nội', 'congldqn888@gmail.com', '0965973667');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_total`
--

CREATE TABLE `order_total` (
  `id_order_total` int(11) NOT NULL,
  `id_order` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL DEFAULT 0,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_total`
--

INSERT INTO `order_total` (`id_order_total`, `id_order`, `id_pro`, `quantity`, `price`, `name`, `image`, `size`, `color`) VALUES
(130, '70', 15, 1, 1598000, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'product-11.webp', 37, 'CP2'),
(131, '70', 15, 1, 1598000, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'product-11.webp', 40, 'CP2'),
(136, '73', 17, 1, 1500000, 'Giày Thể Thao Unisex Adidas Stan Smith', 'product-13.webp', 35, 'CLOUD WHITE / CLOUD WHITE / SEMI SOLAR YELLOW'),
(137, '73', 17, 1, 1500000, 'Giày Thể Thao Unisex Adidas Stan Smith', 'product-13.webp', 37, 'CLOUD WHITE / CLOUD WHITE / SEMI SOLAR YELLOW'),
(138, '74', 17, 1, 1500000, 'Giày Thể Thao Unisex Adidas Stan Smith', 'product-13.webp', 35, 'CLOUD WHITE / CLOUD WHITE / SEMI SOLAR YELLOW'),
(139, '74', 17, 1, 1500000, 'Giày Thể Thao Unisex Adidas Stan Smith', 'product-13.webp', 37, 'CLOUD WHITE / CLOUD WHITE / SEMI SOLAR YELLOW'),
(146, '78', 17, 1, 1500000, 'Giày Thể Thao Unisex Adidas Stan Smith', 'product-13.webp', 35, 'CLOUD WHITE / CLOUD WHITE / SEMI SOLAR YELLOW'),
(147, '78', 17, 1, 1500000, 'Giày Thể Thao Unisex Adidas Stan Smith', 'product-13.webp', 36, 'CLOUD WHITE / CLOUD WHITE / SEMI SOLAR YELLOW'),
(148, '78', 15, 1, 1598000, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'product-11.webp', 37, 'CP2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_pro` int(11) NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) DEFAULT 0,
  `special` int(1) NOT NULL DEFAULT 0,
  `views` int(11) DEFAULT 0,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cate` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_pro`, `pro_name`, `image`, `price`, `price_sale`, `special`, `views`, `gender`, `description`, `id_cate`, `id_brand`) VALUES
(1, 'Giày Chạy Bộ Nữ Nike Air Zoom Pegasus 39', 'pro-1.webp', 3719000, 0, 1, 68, 'Nữ', 'Let the Nike Pegasus 39, a balanced and energised ride for any run, help you ascend to new heights. More lightweight up top than the Pegasus 38 and ideal to wear in any season, it has a supportive sensation to help keep your feet contained, while underfoot cushioning and double Zoom Air units (1 more than the Peg 38) give you an extra pop to your step. Your trusted workhorse with wings is back. Time to fly.', 1, 7),
(2, 'Giày Chạy Bộ Nam Nike Flex Experience Rn 11 Nn', 'pro-2.webp', 2019000, 0, 1, 42, 'Nam', 'Comfortably zen, just like every run should be. With the Nike Experience Run 11 Next Nature, we created a lightweight, clean design that feels as good as it looks. The shoes are supportive in all the right ways with movement so natural, you\'ll swear you\'ve been wearing them for years. Plus, they\'re made from at least 20% recycled content by weight, keeping us on our sustainability journey.', 1, 7),
(4, 'Giày Thời Trang Unisex Fila Rockblunt', 'pro-4.webp', 2395000, 0, 1, 35, 'Unisex', 'Sản phẩm thuộc Bộ Sưu Tập Fila Explorer. Phần thân giày được thiết kế với chất liệu tối ưu hóa độ nhạy với đường mòn khi di chuyển với logo EXPL, đồng thời cung cấp sự bền bỉ khi hoạt động.\r\n\r\nTHÔNG SỐ\r\n\r\nThân trên: 56.2% tổng hợp / 43.8% dệt may\r\nĐế giày: EVA / cao su \r\nMã sản phẩm: 1JM01763E-924', 1, 4),
(5, 'Giày Thời Trang Unisex Fila Webseeker', 'pro-5.webp', 2395000, 0, 1, 76, 'Unisex', 'Upper：SYN 70.81%+TEX 29.19%\r\nBottom：EVA+RB', 1, 4),
(6, 'Giày Thời Trang Nam Nike Waffle One', 'pro-6.webp', 3099000, 0, 1, 42, 'Nam', 'The company Nike, using innovative technical solutions in its footwear, meets the needs of all those who enjoy running. for men shoes have been designed for runners who appreciate the quality of workmanship, interesting appearance and good running properties. Thanks to the construction systems used , the shoes adhere perfectly to the foot and absorb shocks well. A strong, flexible sole is made of a blend of the highest quality. The tread profile provides good grip and minimizes the risk of skidding. The material of the upper (fabric) is responsible for the effective transport of moisture to the outside of the shoe. This model is for all year. Running shoes Nike Waffle One SE fit perfectly to the foot, insulate well and perform very well both on short and long distances.', 1, 7),
(7, 'Giày Chạy Bộ Nữ Nike Air Zoom Vomero 16', 'pro-7.webp', 4659000, 0, 1, 45, 'Nữ', 'PREMIUM CUSHIONING, RESPONSIVE TRAINING, BUILT FOR THE LONG RUN.\r\nA trusted favorite for your daily training runs, the Nike Air Zoom Vomero 16 provides the intuitive design and durability you expect from this iconic shoe. Midfoot containment combines with a supportive heel for a secure fit. Cushioned, yet responsive foam delivers comfort built for high mileage to help keep you pushing to break your personal goals.', 1, 7),
(8, 'Giày Chạy Bộ Nam Hoka Mach Supersonic', 'product-5.webp', 3599000, 0, 0, 67, 'Nam', 'GIÀY CHẠY BỘ NAM HOKA MACH SUPERSONIC\r\n\r\nHoka Mach Supersonic là đôi giày phong cách với thiết kế đơn giản, mang lại sự thoải mái tối ưu cho người sử dụng. Thân giày được làm từ chất liệu vải đan dệt họa tiết jacquard với phối màu bắt mắt tạo điểm nhấn cho trang phục thường ngày. Hoka Mach Supersonic còn chiếm ưu thế hơn so với các phiên bản tiền nhiệm với lớp đệm EVA và cấu trúc đế giữa PROFLY+™ được tích hợp bên trong tạo sự nâng đỡ hoàn hảo, mang lại cảm giác êm ái cho bàn chân. Nói cách khác, Hoka Mach Supersonic là sự kết hợp hoàn hảo giữa sức mạnh và hiệu năng, giúp bạn dễ dàng chinh phục mọi cự li.\r\n\r\nTHÔNG SỐ\r\n\r\nCấu trúc đế giữa PROFLY+™ mang lại sự cân bằng hoàn hảo giữa hiệu suất và sự thoải mái\r\nThân giày được thiết kế từ lớp lưới đặc chế thoáng khí, cho phép người chạy có cảm giác ôm chân an toàn và thoải mái mà còn giúp chân luôn khô ráo.\r\nĐệm bọt nhẹ mang lại sự ổn định và hỗ trợ cân bằng dễ dàng\r\nĐộ ổn định: trung bình\r\nĐệm đáp ứng tạo sự nâng đỡ nhẹ nhàng, hấp thụ va đập và mang lại cảm giác thoải mái tối đa cho từng bước chân\r\nChiều cao chân trước: 22mm\r\nChiều cao gót chân: 27mm\r\nHeeldrop: dưới 5mm\r\nSản phẩm cam kết không sử dụng các chất liệu từ động vật.\r\nMã sản phẩm: 1130250-RYCM', 3, 6),
(9, 'Giày Thời Trang Unisex Converse Chuck 70 Canvas', 'product-6.webp', 1900000, 1710000, 0, 94, 'Unisex', 'GIÀY THỜI TRANG UNISEX CONVERSE CHUCK 70 CANVAS \r\n\r\nĐến năm 1970, Chuck Taylor All Star đã phát triển thành một trong những đôi giày thể thao bóng rổ tốt nhất từ trước đến nay. Chuck 70 tôn vinh di sản đó bằng cách kết hợp các chi tiết lấy cảm hứng từ kho lưu trữ với các cập nhật tiện nghi hiện đại. Đệm đế Ortholite và đường khâu lưỡi có cánh nâng mức độ thoải mái lên một bậc. Đế giữa bằng da trơn bóng loáng và tab sau cổ điển làm nổi bật các chi tiết được chế tạo thủ công của đôi giày. \r\n\r\nTHÔNG SỐ \r\n\r\nGiày cổ thấp với phần trên bằng vải cao cấp \r\nĐường khâu lưỡi có cánh giúp khóa nó vào đúng vị trí\r\nĐệm đế Ortholite\r\nMã sản phẩm: 162058C', 2, 3),
(10, 'Giày Thời Trang Unisex Fila Disruptor 2', 'product-7.webp', 1995000, 0, 0, 76, 'Unisex', 'GIÀY THỜI TRANG UNISEX FILA DISRUPTOR 2\r\n\r\nLà đôi giày với kiểu dáng hợp thời trang mang phong cách Hàn Quốc. Fila Disruptor 2 được làm bằng chất liệu cao cấp, những đường cắt sắc sảo và đường uốn lượn, thiết kế mạnh mẽ với phần đế răng cưa đầy táo bạo.\r\n\r\nThông số:\r\n\r\nChất liệu: synthetic: 100%\r\nĐế cao su răng cưa\r\nMã sản phẩm: 1FM00864D-121', 2, 4),
(11, 'Giày Thể Thao Nam New Balance 574 Classic', 'product-8.webp', 2795000, 2236000, 0, 113, 'Nam', 'GIÀY THỂ THAO NAM NEW BALANCE 574 CLASSIC\r\n\r\nNew Balance 574 mẫu giày biểu tượng lấy cảm hứng từ phong cách những năm 80 làm nên phong cách old-school đầy sức hút cho outfit của bạn. Mang đến những đường nét gọn gàng với sự kết hợp của những gam màu rực rỡ và đế ngoài chắc chắn, cùng chất liệu da lộn kinh điển sẽ tạo nên sự nổi bật cho trang phục của bạn nhưng vẫn giữ những nét đẹp thời mang hơi thở cổ điển của thập niên 80.\r\n\r\nTHÔNG SỐ\r\n\r\nĐế ngoài được cải tiến mang lại sự bền bỉ khi di chuyển trong mọi hành trình\r\nKết cấu dây buộc chắc chắn điều chỉnh linh hoạt\r\nSử dụng chất liệu da lộn cao cấp\r\nPhần lưới trên thoáng khí mang lại cảm giác êm, nhẹ và chắc chắn trong từng bước chạy\r\nMã sản phẩm: U574LGBB', 4, 8),
(12, 'Giày Chạy Bộ Nam Hoka Clifton 8', 'product-9.webp', 3199000, 2559000, 0, 127, 'Nam', 'GIÀY CHẠY BỘ NAM HOKA CLIFTON 8 \r\n\r\nHãy sải bước nhẹ nhàng trên đường cùng Hoka Clifton 8. Là sản phẩm mới nhất trong bộ sưu tập Clifton từng đoạt giải thưởng, Clifton 8 tiếp tục mang đến sự kết hợp hoàn hảo giữa những đường nét mềm mại và màu sắc hài hòa. Được thiết kế với đế giữa nhẹ hơn, nhạy hơn, đôi giày có kiểu dáng thời trang cùng phần trên cải tiến thiết kế dạng lưới thông thoáng, mang đến sự thoải mái cần thiết cho bạn.\r\n\r\nTHÔNG SỐ\r\n\r\nPhù hợp với các môn thể dục, chạy bộ, đi bộ\r\nLưới thiết kế phía trên\r\nThoáng khí, kéo dài gót chân để dễ dàng nhập cảnh\r\nĐế giữa CMEVA, Meta-Rocker giai đoạn đầu, Hình học ổn định vốn có\r\nLưỡi lưới được thiết kế\r\nĐúc EVA sockliner\r\nChiều cao bàn chân trước 24mm\r\nChiều cao gót 29mm\r\nĐộ giảm từ gót chân đến ngón chân 5mm\r\nTrọng lượng: 8,8 oz\r\nMã sản phẩm: 1119393-GBMS', 3, 6),
(13, 'Giày Thời Trang Nam Nike Court Vision Lo Nn', 'pro-8.webp', 2019000, 0, 0, 85, 'Nam', 'GIÀY THỜI TRANG NAM NIKE COURT VISION LO NN \r\n\r\nYêu thích kiểu dáng cổ điển của bóng rổ thập niên 80 nhưng bạn có thích văn hóa nhịp độ nhanh của trò chơi ngày nay không? Nike Court Vision Low. Các lớp phủ trên và đường khâu sắc nét của nó giữ nguyên linh hồn của kiểu dáng ban đầu. Cổ giày được đệm chắc chắn, với kiểu dáng cắt thấp giúp bạn luôn cảm thấy thoải mái khi sử dụng chúng.\r\n\r\nƯu điểm sản phẩm\r\n\r\nĐược làm bằng vật liệu tái chế ít nhất 20% tính theo trọng lượng.\r\n\r\nSử dụng chất liệu tổng hợp, thiết kế có chất liệu giống giày bóng rổ giữa những năm 1980.\r\n\r\nCổ giày có đệm, kiểu dáng cắt thấp trông bóng bẩy và tạo cảm giác tuyệt vời trong khi các lỗ đục ở mũi giày và hai bên tạo thêm sự thoải mái và dễ thở.\r\n\r\nTHÔNG SỐ \r\n\r\nThiết kế nhiều lỗ ở phần bàn chân trước \r\nĐế giày bằng cao su\r\nMã sản phẩm: DH2987-001', 2, 7),
(14, 'Giày Chạy Bộ Nam New Balance Fuelcell Racer', 'product-10.webp', 4495000, 2248000, 0, 52, 'Nam', 'GIÀY CHẠY BỘ NAM NEW BALANCE FUELCELL RACER\r\n\r\nĐược thiết kế để đáp ứng nhu cầu tập luyện và thi đấu của các vận động viên ưu tú, giày chạy bộ New Balance FuelCell Racer được trang bị lớp đế giữa công nghệ FuelCell có các lớp đệm để mang lại khả năng phục hồi cao hơn. Bên cạnh đó, giày còn được cải tiến bởi các sợi carbon bên trong mang lại sự ổn định chắc chắn. Thân giày được làm bằng da tổng hợp / lưới tạo nên một thiết kế hoàn hảo và thoáng khí.\r\n\r\nTHÔNG SỐ\r\n\r\nĐế giữa FuelCell\r\nChất liệu tổng hợp / lưới\r\nCổ giày bằng da lộn\r\nLogo NB\r\nThiết kế giày thể thao thắt dây\r\nThiết kế đa năng có thể mang khi tập luyện hoặc thi đấu\r\nMã sản phẩm: MRCXVH1', 3, 8),
(15, 'Giày Chạy Bộ Nam New Balance Fuelcell Rebel V2', 'product-11.webp', 3195000, 1598000, 0, 61, 'Nam', 'GIÀY CHẠY BỘ NAM NEW BALANCE FUELCELL REBEL V2\r\n\r\nFuelCell Rebel V2 phù hợp với các hoạt động thể thao cũng như các bài tập luyện với cường độ cao. Đôi giày chạy bộ này được trang bị lớp đế giữa hiệu suất FuelCell có khả năng hoàn trả năng lượng cao nhất hiện nay trên thị trường, giúp năng lượng bùng nổ trở lại trong mỗi bước chạy. Thiết kế phối lưới ở upper tăng thêm sự thoải mái và thoáng khí, trong khi logo và màu sắc nổi bật là điểm cộng cho phong cách thời trang của bạn.\r\n\r\nTHÔNG SỐ\r\n\r\nLớp đệm đế giữa FuelCell\r\nThiết kế giày thể thao có dây thắt\r\nCông nghệ đế ngoài bằng cao su NDurance mang lại độ bền vượt trội ở những khu vực có độ mòn cao giúp mang lại hiệu quả tốt hơn cho đôi giày\r\nChất liệu tổng hợp / lưới\r\nMã sản phẩm: MFCXCP2', 3, 8),
(16, 'Giày Chạy Bộ Nam New Balance Fuelcell Propel Rmx V2', 'product-12.webp', 2695000, 1752000, 0, 118, 'Nam', 'GIÀY CHẠY BỘ NAM NEW BALANCE FUELCELL PROPEL RMX V2\r\n\r\nFuelCell Propel RMX v2 là một đôi giày chạy bộ mang đến phong cách thời trang và mới mẻ. Phần trên được cải tiến trở nên phá cách hơn, kết hợp với đế giữa FuelCell mang lại mức hoàn trả năng lượng cao nhất giúp thúc đẩy bạn tiến về phía trước một cách mạnh mẽ. \r\n\r\nTHÔNG SỐ \r\n\r\nPhần trên nhẹ với thiết kế lưới thoáng khí\r\nBọt FuelCell mang lại cảm giác đẩy để giúp bạn tiến về phía trước dễ dàng\r\nKẹp gót chân TPU cố định bàn chân của bạn ở đúng vị trí đồng thời mang lại phong cách đầy tự tin trong mỗi sải chân \r\nMã sản phẩm: MPRMXLW2', 3, 8),
(17, 'Giày Thể Thao Unisex Adidas Stan Smith', 'product-13.webp', 2500000, 1500000, 0, 53, 'Unisex', 'GIÀY THỂ THAO UNISEX ADIDAS STAN SMITH\r\n\r\nĐôi giày trainer Stan Smith giờ đây vẫn thật mới mẻ y như lúc vừa ra mắt từ hơn 50 năm trước. Bí quyết là gì? Sự đơn giản. Những đường nét gọn gàng, sắc sảo phù hợp với mọi trang phục, đơn giản mà cực cool. Phiên bản này giữ nguyên chất low-key nhưng thêm vào các chi tiết mới để nâng tầm phong cách vốn đầy tính biểu tượng, như chất vải CORDURA® bền chắc và chất liệu tái chế. Là một phần cam kết của adidas hướng tới chấm dứt rác thải nhựa, đôi giày này có thiết kế hướng tới tương lai. Sản phẩm này may bằng vải công nghệ Primegreen, thuộc dòng chất liệu tái chế hiệu năng cao. Thân giày chứa 50% thành phần tái chế. Không sử dụng polyester nguyên sinh.\r\n\r\nTHÔNG SỐ\r\n\r\nCó dây giày\r\nThân giày bằng vải nylon CORDURA®\r\nÔm chân\r\nLớp lót bằng da tổng hợp\r\nĐế ngoài bằng cao su\r\nPrimegreen\r\nMã sản phẩm: H00327', 4, 1),
(18, 'Giày Thể Thao Nam New Balance Xc-72 Lifestyle', 'pro-9.webp', 2495000, 1248000, 0, 24, 'Nam', 'GIÀY THỂ THAO NAM NEW BALANCE XC-72 LIFESTYLE \r\n\r\nXC-72 mang đến nguồn cảm hứng khám phá bất tận, với thiết kế bẻ cong thời gian được lấy ý tưởng từ bộ sưu tập xe hơi những năm 1970. Thiết kế đế ngoài đặc biệt hỗ trợ lực kéo tối đa và các đặc điểm góc cạnh được sử dụng tạo nên kiểu dáng độc đáo, thu hút ngay từ ánh nhìn đầu tiên. XC-72 là tương lai mà quá khứ mơ ước và đã được hiện thực hóa thành công. \r\n\r\nTHÔNG SỐ\r\n\r\nĐế ngoài được chia theo chiều dọc có hai thiết kế lực kéo trên mặt đất cứng, thiết kế ‘bộ kẹp’ của XC15 và kiểu đính đá của 375\r\nMặt trên bằng da lộn có lông với chất liệu tái chế ở logo N, phần vamp có tính năng dệt bằng sợi TENCEL ™ Lyocell có nguồn gốc từ nguồn gỗ tái tạo\r\nHình dáng ngón chân vuông lấy cảm hứng từ thiết kế xe ý tưởng những năm 1970\r\nMã sản phẩm: UXC72EA\r\n', 4, 8),
(19, 'Giày Thời Trang Nam New Balance CT302 Court', 'pro-3-01-full.webp', 2595000, 0, 0, 22, 'Nam', 'Men&#039;s New Balance CT302 Court Sneakers', 1, 8),
(21, 'Giày Chạy Bộ Nữ Adidas Duramo 10', 'pro-4-01-full.webp', 1800000, 0, 0, 18, 'Nữ', '<h3 class=\"heading-medium product-info-title\">\r\n            ĐÔI GIÀY CHẠY BỘ ĐI HÀNG NGÀY, CÓ SỬ DỤNG CHẤT LIỆU TÁI CHẾ.\r\n          </h3>\r\n          <p>\r\n            Khi tập yoga buổi sáng, làm việc vặt trong ngày hay đi chơi tối cùng bạn bè, hãy giữ cho đôi chân bạn luôn thoải mái và đảm bảo phong cách chuẩn chỉnh với đôi giày adidas này. Kết hợp cùng chiếc quần bó ưa thích, bạn sẽ có được phong cách thể thao mà casual. Thân giày bằng vải lưới giúp bạn luôn mát mẻ, cùng lớp đệm siêu nhẹ nâng niu từng sải bước.\r\n\r\nLàm từ một nhóm chất liệu tái chế, thân giày có chứa ít nhất 50% thành phần tái chế. Sản phẩm này đại diện cho một trong số rất nhiều các giải pháp của chúng tôi hướng tới chấm dứt rác thải nhựa.\r\n          </p>\r\n          <h3 class=\"heading-medium product-info-title-left\">Thông số</h3>\r\n          <ul>\r\n            <li>Dáng regular fit</li>\r\n            <li>Có dây giày</li>\r\n<li>Thân giày bằng vải lưới ba lớp</li>\r\n<li>Các chi tiết phủ ngoài không đường may tạo độ nâng đỡ</li>\r\n<li>Gót giày mềm mại</li>\r\n<li>Lớp đệm LIGHTMOTION</li>\r\n<li>Đế ngoài bằng cao su</li>\r\n<li>Thân giày có chứa tối thiểu 50% thành phần tái chế</li>\r\n<li>Màu sản phẩm: Bliss Orange / Pulse Lilac / Almost Blue</li>\r\n<li>Mã sản phẩm: GW4117</li>\r\n          </ul>', 1, 1),
(22, 'Giày Thời Trang Nữ Puma City Rider', 'pro-10.webp', 2799000, 1679400, 0, 8, 'Nữ', '<h3 class=\"heading-medium product-info-title-left\">\r\n         GIÀY THỜI TRANG NỮ PUMA CITY RIDER\r\n          </h3>\r\n          <p>\r\n           Thiết kế đường phố trên dòng giày Rider đặc trưng của PUMA, phiên bản City này đã sẵn sàng cho những bước tiến hiện đại. Với lớp lưới thoáng khí phía trên kết hợp với chất liệu da lộn cổ điển và màu sắc tươi sáng bắt mắt, những đôi giày này còn được trang bị lớp đệm êm ái cho bạn tận hưởng cảm giác thoải mái suốt cả ngày dài. Thiết kế cổ điển, phù hợp với mọi giới tính, bạn đã sẵn sàng thể hiện phong cách trên mọi nẻo đường?\r\n          </p>\r\n          <h3 class=\"heading-medium product-info-title-left\">CÁC TÍNH NĂNG KHÁC</h3>\r\n          <p>\r\n          IMEVA: Một loại chất liệu của PUMA cho cảm giác nhẹ và thoải mái\r\n          </p>\r\n          <h3 class=\"heading-medium product-info-title-left\">THÔNG SỐ</h3>\r\n          <ul>\r\n            <li>Lycra, phối lưới, da lộn và lớp phủ tổng hợp</li>\r\n            <li>Đế giữa IMEVA</li>\r\n            <li>Đế giày cao su</li>\r\n            <li>Giày có dây thắt</li>\r\n            <li>PUMA Wordmark ở lưỡi gà</li>\r\n          </ul>', 2, 9),
(23, 'Giày Thời Trang Unisex Converse Chuck 70 Heritage', 'pro-11.webp', 2000000, 1600000, 0, 6, 'Unisex', '&lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;\r\n       GI&Agrave;Y THỜI TRANG UNISEX CONVERSE CHUCK 70 HERITAGE \r\n          &lt;/h3&gt;\r\n          &lt;p&gt;\r\n        Converse Chuck 70 Heritage c&oacute; họa tiết mới lạ bắt mắt, phi&ecirc;n bản cổ thấp được giới trẻ nhiệt t&igrave;nh ưu &aacute;i bởi sự hiện đại, tiện dụng. Chất vải d&agrave;y, nhẹ, bền chắc gi&uacute;p người d&ugrave;ng c&oacute; được sự thoải m&aacute;i. Đường chỉ chạy dọc th&acirc;n gi&agrave;y được chăm ch&uacute;t tỉ mỉ hơn rất nhiều.\r\n          &lt;/p&gt;\r\n          &lt;h3 class=&quot;heading-medium product-info-title-left&quot;&gt;TH&Ocirc;NG SỐ &lt;/h3&gt;\r\n          &lt;ul&gt;\r\n            &lt;li&gt;Chất liệu: canvas&lt;/li&gt;\r\n          &lt;/ul&gt;', 2, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_brand`
--

CREATE TABLE `product_brand` (
  `id_brand` int(11) NOT NULL,
  `brand_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_brand`
--

INSERT INTO `product_brand` (`id_brand`, `brand_name`, `logo`) VALUES
(1, 'ADIDAS', 'adidas-brand.png'),
(2, 'COLUMBIA', 'columbia-brand.webp'),
(3, 'CONVERSE', 'converse-brand.avif'),
(4, 'FILA', 'file-brand.avif'),
(5, 'JORDAN', ''),
(6, 'HOKA', 'hoka-brand.png'),
(7, 'NIKE', 'nike-brand.png'),
(8, 'NEW BALANCE', 'new-balance-brand.png'),
(9, 'PUMA', 'puma-brand.avif'),
(10, 'UNDER ARMOR', 'under-armor-brand.avif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_color`
--

CREATE TABLE `product_color` (
  `id_pro_color` int(11) NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_color`
--

INSERT INTO `product_color` (`id_pro_color`, `color`, `id_pro`) VALUES
(1, 'Phantom', 1),
(2, 'FLATPEWTER', 2),
(3, 'BURGUNDY', 3),
(4, '924', 4),
(5, '466', 5),
(6, 'GREY', 6),
(7, 'BLACK', 7),
(8, 'rycm', 8),
(9, 'BLACK/BLAC', 9),
(10, '121', 10),
(11, 'lgb', 11),
(12, 'GBMS', 12),
(13, 'BLACK/WHIT', 13),
(14, 'VH1', 14),
(15, 'CP2', 15),
(16, 'LW2', 16),
(17, 'CLOUD WHITE / CLOUD WHITE / SEMI SOLAR YELLOW', 17),
(18, 'EA', 18),
(19, 'BLISS ORAN', 21),
(20, 'WHITE', 19),
(21, 'VAPOROUS G', 22),
(22, 'MINERAL CL', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail_img`
--

CREATE TABLE `product_detail_img` (
  `id_pro_detail_img` int(11) NOT NULL,
  `pro_detail_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_detail_img`
--

INSERT INTO `product_detail_img` (`id_pro_detail_img`, `pro_detail_image`, `id_pro`) VALUES
(4, 'pro-1-02-full.webp', 1),
(6, 'pro-1-03-full.webp', 1),
(8, 'pro-1-04-full.webp', 1),
(10, 'pro-2-02-full.webp', 7),
(11, 'pro-2-03-full.webp', 7),
(12, 'pro-2-04-full.webp', 7),
(17, 'pro-4-03-full.webp', 21),
(18, 'pro-4-04-full.webp', 21),
(23, 'pro-5-01-full.webp', 19),
(29, 'pro-5-03-full.webp', 19),
(30, 'pro-5-04-full.webp', 19),
(31, 'pro-4-02-full.webp', 21),
(33, 'pro-4-05-full.webp', 21),
(34, 'pro-4-01-full.webp', 21),
(35, 'pro-2-01-full.webp', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_size`
--

CREATE TABLE `product_size` (
  `id_pro_size` int(11) NOT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_size`
--

INSERT INTO `product_size` (`id_pro_size`, `size`, `id_pro`) VALUES
(1, '35', 1),
(2, '36', 1),
(3, '37', 1),
(4, '36', 2),
(5, '37', 2),
(6, '38', 2),
(7, '39', 2),
(8, '36', 3),
(9, '37', 3),
(10, '38', 3),
(11, '35', 4),
(12, '36', 4),
(13, '37', 4),
(14, '38', 4),
(15, '39', 4),
(16, '40', 4),
(17, '36', 5),
(18, '37', 5),
(19, '38', 5),
(20, '39', 5),
(21, '40', 5),
(22, '37', 6),
(23, '38', 6),
(24, '39', 6),
(25, '40', 6),
(26, '35', 7),
(27, '36', 7),
(28, '37', 7),
(29, '38', 7),
(30, '37', 11),
(32, '37', 8),
(33, '38', 8),
(34, '39', 8),
(35, '35', 9),
(36, '36', 9),
(37, '37', 9),
(38, '38', 9),
(39, '39', 9),
(40, '40', 9),
(41, '36', 10),
(42, '37', 10),
(43, '38', 10),
(44, '39', 10),
(45, '40', 10),
(46, '38', 11),
(47, '39', 11),
(48, '40', 11),
(49, '41', 11),
(50, '37', 12),
(51, '38', 12),
(52, '39', 12),
(53, '40', 12),
(55, '39', 13),
(56, '40', 13),
(57, '41', 13),
(58, '36', 13),
(59, '37', 13),
(60, '38', 13),
(63, '37', 14),
(64, '38', 14),
(65, '39', 14),
(66, '40', 14),
(67, '37', 15),
(68, '38', 15),
(69, '39', 15),
(70, '40', 15),
(71, '39', 16),
(72, '40', 16),
(73, '35', 17),
(74, '36', 17),
(75, '37', 17),
(76, '38', 17),
(77, '39', 17),
(78, '38', 18),
(79, '39', 18),
(80, '40', 18),
(81, '36', 21),
(82, '37', 21),
(83, '38', 21),
(84, '39', 21),
(85, '36', 19),
(86, '38', 19),
(88, '40', 19),
(89, '35', 22),
(90, '35.5', 22),
(92, '36.5', 22),
(94, '37', 22),
(95, '38', 22),
(96, '39', 22),
(97, '35', 23),
(98, '36', 23),
(99, '36.5', 23),
(100, '37', 23),
(101, '37.5', 23),
(102, '38', 23),
(103, '39', 23),
(104, '40', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `password`, `image`, `name`, `phone`, `email`, `address`, `role`) VALUES
('admin', '123456', 'z3348074479647_20ecdbdbce649b9bad78bbab45eff34e.jpg', 'Admin Công Lê', '0965973668', 'congltph27602@fpt.edu.vn', 'V3 Văn Phú, Hà Đông, Hà Nội', 1),
('admin2', '123456', 'z3348074449352_3a574f6714a66f306b8f6ebf5f90bfc2.jpg', 'Lê Công', '', 'congldqn888@gmail.com', '', 0),
('conglt', '123456', 'yoru_smile.jpg', 'Công Lê', '0965973667', 'lethanhcong2003@gmail.com', 'Thành Phố Cẩm Phả, Tỉnh Quảng Ninh', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `order_total`
--
ALTER TABLE `order_total`
  ADD PRIMARY KEY (`id_order_total`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`);

--
-- Chỉ mục cho bảng `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id_pro_color`);

--
-- Chỉ mục cho bảng `product_detail_img`
--
ALTER TABLE `product_detail_img`
  ADD PRIMARY KEY (`id_pro_detail_img`);

--
-- Chỉ mục cho bảng `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id_pro_size`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `order_total`
--
ALTER TABLE `order_total`
  MODIFY `id_order_total` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id_pro_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `product_detail_img`
--
ALTER TABLE `product_detail_img`
  MODIFY `id_pro_detail_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id_pro_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
