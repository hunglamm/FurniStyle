-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2023 lúc 07:05 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1hoanchinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(50) NOT NULL,
  `hinhanhbv` varchar(50) NOT NULL,
  `noidungbaiviet` text NOT NULL,
  `tacgia` varchar(50) NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tenbaiviet`, `hinhanhbv`, `noidungbaiviet`, `tacgia`, `ngaydang`) VALUES
(1, 'Mẫu content thiết kế nội thất văn phòng', 'baiviet1.png', 'Có bao giờ bạn xem qua hình ảnh các văn phòng làm việc của Google, Facebook, Amazon mà thầm nghĩ “ước gì mình cũng được làm việc trong một môi trường như vậy”?\r\nXu hướng mới của các công ty trên thế giới hiện nay đang muốn hướng đến một không gian làm việc thật cởi mở, năng động và vui vẻ, chứ không gò bó, nhàm chán như xưa. Có như vậy thì mọi nhân viên trong công ty mới thật sự thoải mái, hứng thú và sáng tạo với công việc hằng ngày của mình. Hiệu suất và chất lượng công việc cũng từ đó nâng cao.\r\n\r\nXXXX tự hào là đơn vị thiết kế và thi công nội thất được nhiều công ty lớn, nhỏ, tin tưởng giao trọng trách thổi sinh khí vào không gian làm việc của công ty mình, nhờ sự trẻ trung, hợp thời và thực tế. Vừa đẹp mắt nhưng vẫn đảm bảo đủ công năng và tính chuyên nghiệp cho một môi trường làm việc đẳng cấp.', 'Ngọc Khoa', '2023-12-01 04:03:12'),
(2, 'Mẫu content thiết kế nội thất studio', 'baiviet2.png', 'Đối với content thiết kế nội thất studio thì bạn có thể lồng ghép mẫu content thiết kế studio vào mẫu content quảng cáo tour du lịch thông qua việc giới thiệu những địa điểm mà khách du lịch có thể nghỉ dưỡng lại. \r\nHoặc bạn cũng có thể tham khảo cách lồng ghép content thiết kế nội thất vào mẫu content khai trương ví dụ như giới thiệu studio đó vừa khai trương và chèn thông tin quảng cáo thiết kế thi công vào bài viết. \r\nCông trình studio Yoga Be Still là một công trình nhỏ nhắn dễ thương mà Tròn đã thực hiện. Tông màu Coral pastel làm điểm nhấn cho không gian trở nên ngọt ngào hơn.', 'Văn Mạnh', '2021-12-21 04:03:12'),
(3, 'Mẫu content thiết kế nội thất 2023', 'baiviet3.png', 'Khó có thể phủ nhận rằng phong cách thiết kế nội thất Tân cổ điển đã và đang làm mưa làm gió tại Việt Nam bởi vẻ đẹp sang trọng và tinh tế mà phong cách này mang lại. Nhưng liệu “sang trọng và tinh tế” đã là đủ?\r\nNEO Classic muốn tìm 1 dự án trọng điểm cho năm 2021, với tinh thần “Nâng tầm phong cách Tân cổ điển”, đưa vào Tân cổ điển những thử nghiệm mới mẻ và thú vị:\r\n1. Tân cổ điển với KHÔNG GIAN MỞ\r\nKhông gian mở là không gian không bị giới hạn bởi những vách ngăn che cứng. Chỉ giới hạn công năng một cách ước lệ bởi sàn và trần.\r\n2. Tân cổ điển mang âm hưởng tương lai FUTURISTIC\r\nMang đặc trưng của một không gian viễn tưởng trong tương lai với sự phá cách táo bạo trong đường nét thiết kế, sự bất đối xứng của những đường thẳng, đường cong ở tường và góc; gợi sự chuyển động mạnh mẽ.', 'Ẩn danh', '2023-12-07 05:43:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `mataikhoan` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybinhluan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `masanpham` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `mataikhoan`, `noidung`, `ngaybinhluan`, `masanpham`) VALUES
(1, 6, 'sản phẩm ok', '2023-12-07 15:50:34', 1),
(2, 7, 'sản phẩm tốt', '2023-12-07 15:50:34', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bosuutap`
--

CREATE TABLE `bosuutap` (
  `id` int(11) NOT NULL,
  `hinhanhsuutap` varchar(30) DEFAULT NULL,
  `gioithieubst` text DEFAULT NULL,
  `tenbosuutap` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bosuutap`
--

INSERT INTO `bosuutap` (`id`, `hinhanhsuutap`, `gioithieubst`, `tenbosuutap`) VALUES
(1, 'spbst.png', 'Lấy cảm hứng từ những chiếc ghế bằng gốm sứ trong các khu vườn tại Trung Quốc, bộ bàn ghế Jin Ming được thiết kế với nhiều màu sắc thu hút.', 'Bộ sưu tập bàn ghế bằng gốm'),
(2, 'bst2rm (1).png', ' Thiết kế hiện đại thường tập trung vào sự thoải mái và tính thực tế, đồng thời không quên vẻ ngoại hình đẹp mắt để tạo nên không gian sống hiện đại và sang trọng.', 'Bộ sưu tập bàn ghế hiện đại'),
(3, 'bst31.png', 'Bàn ghế sang trọng thường được thiết kế và làm từ những vật liệu cao cấp như gỗ chất lượng, kim loại quý phái. Điều này tạo nên không gian lịch lãm và đẳng cấp.', 'Bộ sưu tập bàn ghế thanh lịch'),
(4, NULL, NULL, 'Không');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `madonhang` int(10) NOT NULL,
  `masanpham` int(10) NOT NULL,
  `gia` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `tongtientatca` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `madonhang`, `masanpham`, `gia`, `soluong`, `tongtientatca`) VALUES
(12, 14, 1, 320000, 1, 320000),
(13, 14, 3, 200000, 1, 200000),
(14, 15, 6, 650000, 1, 650000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) NOT NULL,
  `hinhanh` varchar(20) NOT NULL,
  `tinhtrangdm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `hinhanh`, `tinhtrangdm`) VALUES
(1, 'Ghế sopha', 'product-3.png', 'Đang hoạt đông'),
(2, 'Ghế gỗ', 'product-2.png', 'Đang hoạt động'),
(3, 'Bàn Tròn', 'bantron4.png', 'Đang hoạt động'),
(4, 'Bàn Vuông', 'banvuong2.png', 'Đang hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `mataikhoan` int(11) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tongtien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `mataikhoan`, `ngaydathang`, `tongtien`) VALUES
(14, 2, '2023-12-07 05:33:14', 520000),
(15, 2, '2023-12-07 16:09:39', 650000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `anhsanpham` varchar(20) NOT NULL,
  `gia` int(10) NOT NULL,
  `madanhmuc` int(10) NOT NULL,
  `mabosuutap` int(11) DEFAULT NULL,
  `giakhuyenmai` int(10) DEFAULT NULL,
  `tinhtrang` varchar(30) NOT NULL,
  `chitiet` text NOT NULL,
  `soluong` int(10) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `sanphammoi` varchar(50) NOT NULL,
  `sanphamnoibat` varchar(30) NOT NULL,
  `giohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `anhsanpham`, `gia`, `madanhmuc`, `mabosuutap`, `giakhuyenmai`, `tinhtrang`, `chitiet`, `soluong`, `luotxem`, `sanphammoi`, `sanphamnoibat`, `giohang`) VALUES
(1, 'Nordic Chair', 'product-3.png', 320000, 1, NULL, NULL, 'Đang hoạt động', 'Là một sản phẩm nội thất phổ biến và phổ biến trong thiết kế nội thất hiện đại. Ghế Nordic được thiết kế với sự tối giản, chức năng và thường mang trong mình những đặc điểm độc đáo của phong cách thiết kế Scandinavia, đặc biệt là đối với các yếu tố thiết kế và vật liệu sử dụng.', 10, 4, 'new', 'no', 0),
(2, 'Kruzo Aero Chair', 'product-2.png', 290000, 1, 4, NULL, 'Đang hoạt động', 'Là một sản phẩm ghế thương hiệu mới, nó có thể có thiết kế hiện đại và phong cách, có thể lấy cảm hứng từ các xu hướng thiết kế nội thất đương đại.', 10, 4, 'new', 'no', 0),
(3, 'Ghế ăn gỗ tự nhiên LXS cao cấp', 'Ghego1.png', 200000, 2, NULL, NULL, 'Đang hoạt động', 'Ghế ăn gỗ tự nhiên LXS cao cấp là một sản phẩm nội thất dành cho phòng ăn với sự tập trung vào sự cao cấp, thiết kế tự nhiên và chất lượng. Dưới đây là một số thông tin chi tiết về ghế ăn gỗ tự nhiên LXS cao cấp', 15, 99, 'no', 'yes', 0),
(4, 'Ghế chủ (bọc da)', 'Ghego2.png', 500000, 2, NULL, NULL, 'Đang hoạt động', 'Là một loại ghế cao cấp thường được sử dụng trong môi trường lãnh đạo hoặc quản lý. Đây là một sản phẩm nội thất chất lượng, được thiết kế với sự tập trung vào tính thẩm mỹ, thoải mái và đẳng cấp. ', 25, 70, 'no', 'yes', 0),
(5, 'Ghế sofa giường tiện nghi', 'sopha1.png', 700000, 1, NULL, NULL, 'Đang hoạt động', 'Là một sản phẩm nội thất đa năng, có khả năng biến đổi giữa ghế sofa và giường để phục vụ nhu cầu sử dụng khác nhau. Đây là một lựa chọn thông minh cho các không gian nhỏ hoặc nơi bạn muốn sử dụng một món đồ nội thất đa công dụng.', 23, 24, 'no', 'no', 0),
(6, 'Ghế sofa đôi bọc nệm', 'sọpha2.png', 650000, 1, NULL, NULL, 'Đang hoạt động', 'Là một món đồ nội thất phổ biến và thoải mái trong phòng khách hoặc phòng gia đình. Đây là một phiên bản của ghế sofa có kích thước lớn hơn và thiết kế để dành cho ít nhất hai người sử dụng. ', 19, 12, 'new', 'no', 0),
(7, 'Ghế sofa beb', 'sopha3.png', 500000, 1, NULL, NULL, 'Đang hoạt động', 'Là một dạng ghế sofa hoặc sofa giường, được thiết kế đặc biệt cho trẻ em. Đây là một sản phẩm nội thất dành riêng cho phòng của trẻ em, với thiết kế và kích thước phù hợp với độ tuổi của họ.', 19, 42, 'no', 'no', 0),
(8, 'Bàn trà sofa GAPI mặt tròn', 'bantron0.png', 200000, 3, NULL, NULL, 'Đang hoạt động', 'Là một sản phẩm nội thất được thiết kế để đặt ở gần ghế sofa trong phòng khách hoặc phòng sinh hoạt chung. Một bàn trà mặt tròn có thể mang đến tính linh hoạt và tính thẩm mỹ cho không gian nội thất của bạn.', 17, 72, 'no', 'no', 0),
(9, 'Bàn Nhôm Vuông Đúc', 'banvuong1.png', 250000, 4, NULL, NULL, 'Đang hoạt động', 'Là một món đồ nội thất hoặc ngoại trời được làm từ chất liệu nhôm và thiết kế với hình dáng vuông. Những bàn nhôm vuông đúc thường được ưa chuộng trong nhiều môi trường khác nhau, từ không gian nội thất trong nhà đến ngoại trời.', 34, 43, 'no', 'no', 0),
(10, 'Bàn sofa chân V mặt đá Oval', 'banvuong2.png', 500000, 4, NULL, NULL, 'Đang hoạt động', 'Là một sản phẩm nội thất thiết kế đặc biệt với một mặt bàn hình bầu dục (oval) và chân bàn có hình dạng chữ \\\"V.\\\" Đây là một lựa chọn phổ biến cho việc trang trí phòng khách hoặc phòng gia đình, mang lại sự sang trọng và tính thẩm mỹ.', 35, 53, 'no', 'no', 0),
(11, 'Bàn sofa đôi vuông sọc mặt đá', 'banvuong3.png', 600000, 4, NULL, NULL, 'Đang hoạt động', 'Là một sản phẩm nội thất có thiết kế đặc biệt với một mặt bàn hình vuông và chân bàn được thiết kế theo kiểu sọc hoặc các đường nét nghệ thuật khác. Đây là một lựa chọn phổ biến để trang trí phòng khách hoặc phòng gia đình, mang lại sự hiện đại và tính thẩm mỹ.', 74, 54, 'no', 'no', 0),
(12, 'BÀN CAFE TRÒN HIỆN ĐẠI BẰNG GỖ SỒI', 'bantron1.jpg', 300000, 3, NULL, NULL, 'Đang hoạt động', 'Là một món đồ nội thất phù hợp cho quán cà phê hoặc không gian sống có phong cách đương đại. Gỗ sồi thường được ưa chuộng trong thiết kế nội thất vì tính thẩm mỹ và độ bền của nó. ', 13, 21, 'no', 'no', 0),
(13, 'Bàn tròn PREMIUM 4U', 'bantron2.png', 320000, 3, NULL, NULL, 'Đang hoạt động', 'Bề mặt hoàn thiện	Nhám\\r\\nKích thước	D155xH75 cm\\r\\nSơn bề mặt	Sơn tĩnh điện\\r\\nChất liệu	Nhôm\\r\\nPhong cách thiết kế	Cổ điển', 17, 45, 'no', 'no', 0),
(14, 'Bàn Nhôm Tròn CNC 1546', 'bantron3.png', 430000, 3, NULL, NULL, 'Đang hoạt động', 'Bề mặt hoàn thiện	Nhám\\r\\nKích thước	D155xH75 cm\\r\\nSơn bề mặt	Sơn tĩnh điện\\r\\nChất liệu	Nhôm\\r\\nPhong cách thiết kế	Cổ điển', 25, 72, 'no', 'no', 0),
(15, 'BÀN ĂN TRÒN BẰNG GỖ TỰ NHIÊN', 'bantron4.png', 290000, 3, NULL, NULL, 'Đang hoạt động', 'Là một món đồ nội thất phổ biến trong phòng ăn hoặc không gian bếp. Bàn ăn này thường được làm từ gỗ tự nhiên, tạo ra một không gian ấm cúng và thiên nhiên trong không gian ăn uống của bạn.', 82, 99, 'no', 'yes', 0),
(16, 'Bộ bàn ghế gốm xứ hiện đại', 'spbst.png', 250000, 3, 1, NULL, 'Đang hoạt động', 'Bộ bàn ghế gốm xứ nghe thì đã thấy sang chảnh rồi đó. Gốm xứ thường là sản phẩm thủ công, có độ bền cao và mang đến vẻ đẹp tự nhiên. Bạn có thể tận hưởng không gian ấm cúng và sang trọng với bộ bàn ghế này. Nhất là nếu bạn thích sự độc đáo, vì mỗi sản phẩm thường có đặc điểm riêng biệt do sự tinh tế của nghệ nhân. ', 10, 10, 'Mới', 'Có', 0),
(17, 'Bộ bàn ghế gốm xứ cao cấp', 'spbst2.jpg', 450000, 3, 1, NULL, 'Đang hoạt động', 'Bộ bàn ghế gốm xứ nghe thì đã thấy sang chảnh rồi đó. Gốm xứ thường là sản phẩm thủ công, có độ bền cao và mang đến vẻ đẹp tự nhiên. Bạn có thể tận hưởng không gian ấm cúng và sang trọng với bộ bàn ghế này. Nhất là nếu bạn thích sự độc đáo, vì mỗi sản phẩm thường có đặc điểm riêng biệt do sự tinh tế của nghệ nhân. ', 10, 10, 'no', 'no', 0),
(18, 'Bộ bàn ghế gốm xứ tỷ mỹ', 'spbst3.png', 3500000, 3, 1, NULL, 'Đang hoạt động', 'Bộ bàn ghế gốm xứ nghe thì đã thấy sang chảnh rồi đó. Gốm xứ thường là sản phẩm thủ công, có độ bền cao và mang đến vẻ đẹp tự nhiên. Bạn có thể tận hưởng không gian ấm cúng và sang trọng với bộ bàn ghế này. Nhất là nếu bạn thích sự độc đáo, vì mỗi sản phẩm thường có đặc điểm riêng biệt do sự tinh tế của nghệ nhân. ', 10, 10, 'no', 'no', 0),
(19, 'Bộ bàn ghế gốm xứ phong cách', 'spbst4.png', 3500000, 3, 1, NULL, '', 'Bộ bàn ghế gốm xứ nghe thì đã thấy sang chảnh rồi đó. Gốm xứ thường là sản phẩm thủ công, có độ bền cao và mang đến vẻ đẹp tự nhiên. Bạn có thể tận hưởng không gian ấm cúng và sang trọng với bộ bàn ghế này. Nhất là nếu bạn thích sự độc đáo, vì mỗi sản phẩm thường có đặc điểm riêng biệt do sự tinh tế của nghệ nhân. ', 10, 10, 'no', 'no', 0),
(20, 'Bộ bàn ghế gốm xứ cổ điển', 'spbst5.png', 4300000, 3, 1, NULL, 'Đang hoạt động', 'Bộ bàn ghế gốm xứ nghe thì đã thấy sang chảnh rồi đó. Gốm xứ thường là sản phẩm thủ công, có độ bền cao và mang đến vẻ đẹp tự nhiên. Bạn có thể tận hưởng không gian ấm cúng và sang trọng với bộ bàn ghế này. Nhất là nếu bạn thích sự độc đáo, vì mỗi sản phẩm thường có đặc điểm riêng biệt do sự tinh tế của nghệ nhân. ', 10, 10, 'no', 'no', 0),
(21, 'TRỌN BỘ BĂNG GHẾ ĂN HANURI - GỖ ASH ', 'bst2n.png', 3000000, 4, 2, NULL, '', 'Gỗ công nghiệp MFC, MDF Laminates, Veneers: 12 tháng', 9, 100, 'no', 'no', 0),
(22, 'Bàn ghế ăn gỗ sồi', 'bst2rm (3).png', 3520000, 2, 2, NULL, 'Đang hoạt động', 'Chất liệu gỗ sồi tự nhiên (không phải gỗ MDF của 1 số đơn vị cung cấp trên thị trường)\r\nMàu sắc: màu cải, màu trắng, màu tự nhiên, màu óc chó', 9, 92, 'no', 'no', 0),
(23, 'Bàn ăn gấp, Nội thất nhà bếp', 'bst2rm (4).png', 5200000, 4, 2, NULL, 'Đang hoạt động', ' Bàn gỗ nguyên khối: Cấu trúc bằng gỗ sồi/cao su/gỗ tần bì nguyên khối, phù hợp với ghế ăn gấp.Nội thất tiết kiệm không gian 3 chế độ:Gấp thành bàn góc, mở rộng cho việc học tập, gia đình và bạn bè!', 15, 101, 'no', 'no', 0),
(24, 'Bộ bàn ghế ăn thông minh ', 'bst2rm (5).png', 3900000, 4, 2, NULL, 'Đang hoạt động', 'CHẤT LIỆU : - Gỗi sồi', 23, 15, 'no', 'no', 0),
(25, 'Bàn Trà Tân Cổ Điển', 'bst31.png', 25000000, 4, 3, NULL, 'Đang hoạt động', 'Bàn trà tân cổ điển đẹp khi nó được đi kèm với bộ sofa cùng phong cách tân cổ điển để làm nên sự tinh tế và đẳng cấp cho không gian phòng khách sang trọng.', 2, 1000, 'no', 'no', 0),
(26, 'Bàn ăn: Vintage, thiết kế riêng', 'bst3 (1).png', 4500000, 3, 3, NULL, 'Đang hoạt động', 'Màu bạc và tông màu nhẹ nhàng làm nền cho những bữa tối kéo dài dưới ánh nến với bạn bè.', 5, 1010, 'no', 'no', 0),
(27, 'Bộ bàn ghế sofa bằng gỗ nguyên khối', 'bst3 (2).png', 28000000, 1, 3, NULL, 'Đang hoạt động', 'Top bò thật da thật, PVC, da ngoại quan,', 5, 1500, 'no', 'no', 0),
(28, 'Bộ bàn ghế ăn cổ điển', 'bst3 (3).png', 32000000, 4, 3, NULL, 'Đang hoạt động', 'Các chất liệu cao cấp trên đều đã qua quy trình xử lí nghiêm ngặt mang đến dòng sản phẩm bàn ăn cổ điển châu âu có chất lượng tuyệt hảo, độ bền cùng tuổi thọ cao. Và đặc biệt phù hợp với điều kiện khí hậu nhiệt đới gió mùa ở nước ta.', 10, 90, 'no', 'no', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tentaikhoan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `diachi` varchar(20) NOT NULL,
  `anhtaikhoan` varchar(30) NOT NULL,
  `quyen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tentaikhoan`, `email`, `matkhau`, `sdt`, `diachi`, `anhtaikhoan`, `quyen`) VALUES
(1, 'thaitu28', 'nguyenthaitu28092004@gmail.com', '123', '12356789', 'HCM', 'person_1.jpg', 'admin'),
(2, 'tenten', 'duong123@gmail.com', '123', '123456789', 'hcm', 'person_3.jpg', 'user'),
(6, 'manh123', 'manhshpro321@gmail.com', '123', '123456789', 'hcm', 'avata_admin.png', 'admin'),
(7, 'khoa123', 'khoa123@gmail.com', '123', '123456789', 'hcm', 'avata_admin.png', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mataikhoan` (`mataikhoan`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Chỉ mục cho bảng `bosuutap`
--
ALTER TABLE `bosuutap`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masanpham` (`masanpham`),
  ADD KEY `chitietdonhang_ibfk_2` (`madonhang`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mataikhoan` (`mataikhoan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `madanhmuc` (`madanhmuc`),
  ADD KEY `sp_bst` (`mabosuutap`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `bosuutap`
--
ALTER TABLE `bosuutap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`mataikhoan`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`mataikhoan`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `sp_bst` FOREIGN KEY (`mabosuutap`) REFERENCES `bosuutap` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
