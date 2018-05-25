-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2018 lúc 10:28 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lms`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `admin_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `confirm_password`, `image`, `type`, `admin_added`) VALUES
(1, 'thoi', '', 'thoi', 'thoi', 'e7fa247e6c6f772b9bc2e93da1550c64', 'thoi', '1.jpg', 'Admin', '2018-04-29 10:10:19'),
(2, 'thoi', '', 'thoi', 'thoi1', 'e7fa247e6c6f772b9bc2e93da1550c64', 'e7fa247e6c6f772b9bc2e93da1550c64', '1-s2.0-S0921818116305562-gr1.jpg', 'Admin', '2018-04-29 10:11:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `category_id` int(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `author_2` varchar(100) NOT NULL,
  `author_3` varchar(100) NOT NULL,
  `author_4` varchar(100) NOT NULL,
  `author_5` varchar(100) NOT NULL,
  `point_download` int(11) NOT NULL,
  `book_pub` varchar(100) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `copyright_year` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_file` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `category_id`, `author`, `author_2`, `author_3`, `author_4`, `author_5`, `point_download`, `book_pub`, `publisher_id`, `copyright_year`, `status`, `book_image`, `book_file`, `date_added`, `remarks`) VALUES
(1, 'English Expressways : Second Year', 1, 'Virginia F. Bermudez', 'Remedios F. Nery', 'Josephine M. Cruz', 'Milagrosa A. San Juan', '', 15, '2010', 0, 2010, 'Old', 'IMG_0019.JPG', '', '2015-12-14 01:06:46', 'Available'),
(2, 'DAYBOOK of Critical Reading and Writing', 8, 'Fran Claggett', 'Louann Reid', 'Ruth Vinz', '', '', 20, '1978', 0, 1978, 'Old', 'IMG_0006 - Copy.JPG', '', '2015-12-14 01:11:06', 'Available'),
(3, 'Getting to Know-Puerto Rico', 2, 'Frances Robins', '', '', '', '', 1, 'Coward-McCann', 1967, 0, 'Old', '', '', '2015-12-14 01:21:47', 'Available'),
(4, 'Lotta on Troublemaker Street', 2, 'Astrid Lindgren', '', '', '', '', 0, 'Aladdin Paperbacks', 2001, 1962, 'Replacement', '', '', '2015-12-14 01:43:06', 'Not Available'),
(5, 'Great Days of Whailing', 8, 'Henry Beetle Hough', '', '', '', '', 1, '', 0, 0, 'Damaged', '', '', '2015-12-14 02:05:16', 'Not Available'),
(6, 'Even Big Guys Cry', 2, 'Alex Karras', '', '', '', '', 1, '', 0, 0, 'Lost', '', '', '2015-12-14 02:05:47', 'Not Available'),
(7, 'Gintong Pamana Wika at Panitikan - Ikalawang Taon', 6, 'Lolita R. Nakpil', 'Leticia F. Dominguez', '', '', '', 12, '2000', 0, 2000, 'Old', 'IMG_0029 - Copy.JPG', '', '2015-12-14 02:20:36', 'Available'),
(30, 'aaaa', 1, 'aaaa', '', '', '', '', 11, '', 59, 0, 'New', '', '', '2018-05-24 16:46:23', 'Available'),
(31, 'aaaaaa', 1, 'aaaaa', '', '', '', '', 11, '', 59, 0, 'New', 'Bandovung(Tomau).png', '', '2018-05-24 16:46:47', 'Available'),
(32, 'awdawdawd', 1, 'awdawdawd', '', '', '', '', 11, '', 59, 0, 'New', 'Business-Team.jpg', '', '2018-05-24 16:47:30', 'Available'),
(33, 'Ã¡efasef', 1, 'Ã¡efasefasfe', '', '', '', '', 11, '', 60, 0, 'New', '', '', '2018-05-24 17:06:38', 'Available'),
(34, 'asefasef', 1, 'asefasefsef', '', '', '', '', 11, '', 60, 0, 'New', '1.jpg', 'vietnam.pdf', '2018-05-24 22:55:47', 'Available'),
(35, 'math', 2, 'thoi', 'thoi', 'thoi', '', '', 11, '', 59, 2017, 'Old', 'box250x250.png', 'vietnam.pdf', '2018-05-25 13:46:14', 'Available');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `classname`) VALUES
(1, 'Textbook'),
(2, 'English'),
(3, 'Math'),
(4, 'Science'),
(5, 'Encyclopedia'),
(6, 'Filipiniana'),
(7, 'Novel'),
(8, 'General'),
(9, 'References');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `detail_action` varchar(100) NOT NULL,
  `date_transaction` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `report`
--

INSERT INTO `report` (`report_id`, `book_id`, `user_id`, `admin_name`, `detail_action`, `date_transaction`) VALUES
(1, 7, 2, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 02:50:30'),
(2, 7, 1, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 02:51:00'),
(3, 7, 4, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 02:52:01'),
(4, 3, 4, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 02:53:16'),
(5, 7, 2, 'Jane M. Doe', 'Returned Book', '2015-12-14 02:57:34'),
(6, 7, 1, 'Jane M. Doe', 'Returned Book', '2015-12-14 02:57:37'),
(7, 7, 4, 'Jane M. Doe', 'Returned Book', '2015-12-14 02:57:45'),
(8, 3, 4, 'Jane M. Doe', 'Returned Book', '2015-12-14 02:57:48'),
(9, 7, 17, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 03:08:51'),
(10, 7, 4, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 03:09:01'),
(11, 7, 20, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 03:09:08'),
(12, 4, 14, 'Jane M. Doe', 'Borrowed Book', '2015-12-14 08:32:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `point` int(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `user_added` datetime NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass_word` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `middlename`, `lastname`, `contact`, `gender`, `address`, `image`, `point`, `type`, `user_added`, `user_name`, `pass_word`) VALUES
(49, 'Nghia', '', 'Phan', '', 'Male', '', '', 0, 'user', '0000-00-00 00:00:00', 'meantea', '202cb962ac59075b964b07152d234b70'),
(59, 'thoi123', 'xuan', 'thoi', 'asefasef', 'Male', 'asefasefsf', '2.jpg', 12, 'user', '0000-00-00 00:00:00', 'thoi123', 'e7fa247e6c6f772b9bc2e93da1550c64'),
(60, 'thoi12', '', 'thoi', '', 'Male', '', '3557a0b425d3917.jpg', 56, 'user', '0000-00-00 00:00:00', 'thoi12', 'e7fa247e6c6f772b9bc2e93da1550c64'),
(61, 'thoiqn123', '', 'thoi', '', 'Male', '', '', 0, 'user', '0000-00-00 00:00:00', 'thoiqn123', 'e7fa247e6c6f772b9bc2e93da1550c64');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_log`
--

CREATE TABLE `user_log` (
  `user_log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `date_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `user_id`, `user_name`, `date_log`) VALUES
(1, 19, 'MARY BERYL TULMO LUMAPAN', '2015-12-14 08:33:56'),
(2, 40, 'CRISTALLY MALAPITAN ANIAN', '2015-12-14 08:39:11'),
(3, 1, 'KERVIN KARL OSORIO CABUS', '2015-12-14 10:35:20'),
(4, 7, 'ANDRIA CASIANO PIT', '2015-12-14 10:36:12'),
(5, 10, 'REGINE DOMINGUEZ SALANATIN', '2015-12-14 10:36:29'),
(6, 18, 'ROZEL CHILES PALMA JANDOG', '2015-12-14 10:37:03'),
(7, 3, 'GERALD MANOSO PELINGON', '2015-12-14 10:37:23'),
(8, 8, 'ANGELA CASTILLO REJAS', '2015-12-14 10:37:26'),
(9, 17, 'CRISTY GAYLE CADAYDAY GOSIAOCO', '2015-12-14 10:37:38'),
(10, 9, 'ROWELA UNTAL ROGERO', '2015-12-14 10:38:05'),
(11, 17, 'CRISTY GAYLE CADAYDAY GOSIAOCO', '2015-12-14 10:38:29'),
(12, 16, 'RATCHEL YANOS GALVAN', '2015-12-14 10:38:29'),
(13, 15, 'REYNAN DATULAYTA GABALES', '2015-12-14 10:38:34'),
(14, 12, 'SUNDAY HECHANOVA FELIPE', '2015-12-14 10:38:37'),
(15, 12, 'SUNDAY HECHANOVA FELIPE', '2015-12-14 10:38:48'),
(16, 9, 'ROWELA UNTAL ROGERO', '2015-12-14 10:38:56'),
(17, 7, 'ANDRIA CASIANO PIT', '2015-12-14 10:39:01'),
(18, 5, 'JAN MICHAEL ALABE PORCEL', '2015-12-14 10:39:04'),
(19, 5, 'JAN MICHAEL ALABE PORCEL', '2015-12-14 10:39:06'),
(20, 17, 'CRISTY GAYLE CADAYDAY GOSIAOCO', '2015-12-14 10:40:34'),
(21, 16, 'RATCHEL YANOS GALVAN', '2015-12-14 10:40:39'),
(22, 15, 'REYNAN DATULAYTA GABALES', '2015-12-14 10:40:45'),
(23, 14, 'CHRISTOPHER ARGUELLES FRIAS', '2015-12-14 10:40:51'),
(24, 14, 'CHRISTOPHER ARGUELLES FRIAS', '2015-12-14 10:41:01'),
(25, 25, 'JOEZER COLENE LEGIRO GALIMBA', '2015-12-14 10:41:08'),
(26, 18, 'ROZEL CHILES PALMA JANDOG', '2015-12-14 10:41:16'),
(27, 20, 'REGINA MARIE DELAPER MACHAN', '2015-12-14 10:41:20'),
(28, 19, 'MARY BERYL TULMO LUMAPAN', '2015-12-14 10:41:21'),
(29, 20, 'REGINA MARIE DELAPER MACHAN', '2015-12-14 10:41:22'),
(30, 23, 'MARK ANGELO BOJOS CAMACHO', '2015-12-14 10:41:28'),
(31, 23, 'MARK ANGELO BOJOS CAMACHO', '2015-12-14 10:41:29'),
(32, 24, 'RGEE LOUIZE ESTARES DELIMA', '2015-12-14 10:41:29'),
(33, 22, 'KENNETH JUANEZA BENIT', '2015-12-14 10:41:31'),
(34, 19, 'MARY BERYL TULMO LUMAPAN', '2015-12-14 10:41:32'),
(35, 18, 'ROZEL CHILES PALMA JANDOG', '2015-12-14 10:41:32'),
(36, 13, 'JOEMAR MENDOZA FRANCISCO', '2015-12-14 10:41:37'),
(37, 11, 'JOHN MARK PAMPLIEGA CASTEN', '2015-12-14 10:41:41'),
(38, 10, 'REGINE DOMINGUEZ SALANATIN', '2015-12-14 10:41:45'),
(39, 10, 'REGINE DOMINGUEZ SALANATIN', '2015-12-14 10:41:48'),
(40, 10, 'REGINE DOMINGUEZ SALANATIN', '2015-12-14 10:41:50'),
(41, 25, 'JOEZER COLENE LEGIRO GALIMBA', '2015-12-14 10:42:06'),
(42, 26, 'JULIAH ARANGOTE ABEDONG', '2015-12-14 10:42:07'),
(43, 19, 'MARY BERYL TULMO LUMAPAN', '2015-12-14 10:42:11'),
(44, 19, 'MARY BERYL TULMO LUMAPAN', '2015-12-14 10:42:16'),
(45, 23, 'MARK ANGELO BOJOS CAMACHO', '2015-12-14 10:42:22'),
(46, 21, 'MARLON GAJO BALANGAO', '2015-12-14 10:43:00'),
(47, 18, 'ROZEL CHILES PALMA JANDOG', '2015-12-14 10:43:48'),
(48, 18, 'ROZEL CHILES PALMA JANDOG', '2015-12-14 10:43:55'),
(49, 20, 'REGINA MARIE DELAPER MACHAN', '2015-12-14 10:44:01'),
(50, 25, 'JOEZER COLENE LEGIRO GALIMBA', '2015-12-14 10:44:07'),
(51, 23, 'MARK ANGELO BOJOS CAMACHO', '2015-12-14 10:44:25'),
(52, 23, 'MARK ANGELO BOJOS CAMACHO', '2015-12-14 10:44:27'),
(53, 23, 'MARK ANGELO BOJOS CAMACHO', '2015-12-14 10:44:32'),
(54, 28, 'NICOLE ANN PAGSUBERON ABILGOS', '2015-12-14 11:05:19'),
(55, 35, 'RALPH JERO CENTINO DEMERIN', '2015-12-14 11:05:22'),
(56, 28, 'NICOLE ANN PAGSUBERON ABILGOS', '2015-12-14 11:05:28'),
(57, 28, 'NICOLE ANN PAGSUBERON ABILGOS', '2015-12-14 11:09:11'),
(58, 32, 'JOSHUA SUICO CARPENTERO', '2015-12-14 11:09:18'),
(59, 36, 'TRESHIA SALVANTE ABENIR', '2015-12-14 11:16:09'),
(60, 38, 'ELLA MARIE MARTENECIO ALVAREZ', '2015-12-14 11:16:13'),
(61, 38, 'ELLA MARIE MARTENECIO ALVAREZ', '2015-12-14 11:16:15'),
(62, 37, 'MA THERESA MAE CORDOVA ALLES', '2015-12-14 11:16:19'),
(63, 36, 'TRESHIA SALVANTE ABENIR', '2015-12-14 11:16:48'),
(64, 38, 'ELLA MARIE MARTENECIO ALVAREZ', '2015-12-14 11:16:50'),
(65, 39, 'LOVELY ANN YUBARA AMAR', '2015-12-14 11:16:55'),
(66, 38, 'ELLA MARIE MARTENECIO ALVAREZ', '2015-12-14 11:32:50'),
(67, 33, 'JERSON PIDO DAMPOG', '2015-12-14 11:33:15'),
(68, 19, 'MARY BERYL TULMO LUMAPAN', '2015-12-14 11:33:16'),
(69, 27, 'CHRISTINE MAE SALAZAR ABETO', '2015-12-14 11:33:18'),
(70, 28, 'NICOLE ANN PAGSUBERON ABILGOS', '2015-12-14 11:33:19'),
(71, 19, 'MARY BERYL TULMO LUMAPAN', '2015-12-14 11:34:29'),
(72, 18, 'ROZEL CHILES PALMA JANDOG', '2015-12-14 11:34:39'),
(73, 24, 'RGEE LOUIZE ESTARES DELIMA', '2015-12-14 11:34:42'),
(74, 33, 'JERSON PIDO DAMPOG', '2015-12-14 11:35:04'),
(75, 9, 'ROWELA UNTAL ROGERO', '2015-12-14 11:35:21'),
(76, 5, 'JAN MICHAEL ALABE PORCEL', '2015-12-14 11:35:24'),
(77, 33, 'JERSON PIDO DAMPOG', '2015-12-14 11:38:01'),
(78, 33, 'JERSON PIDO DAMPOG', '2015-12-14 11:40:11'),
(79, 30, 'MARNYL DUNLAO BACOLINA', '2015-12-14 11:40:17'),
(80, 31, 'REXXER ANDREI DE LOS SANTOS BELEBER', '2015-12-14 11:49:45'),
(81, 30, 'MARNYL DUNLAO BACOLINA', '2015-12-14 11:49:50'),
(82, 33, 'JERSON PIDO DAMPOG', '2015-12-14 11:50:45'),
(83, 28, 'NICOLE ANN PAGSUBERON ABILGOS', '2015-12-14 11:50:56'),
(84, 29, 'JANESSA DOROTEO ARGUELLES', '2015-12-14 11:53:03'),
(85, 20, 'REGINA MARIE DELAPER MACHAN', '2015-12-14 13:52:30'),
(86, 34, 'JESS LORD ARROYO DE LA CRUZ', '2015-12-14 14:11:26'),
(87, 30, 'MARNYL DUNLAO BACOLINA', '2015-12-14 14:12:05'),
(88, 33, 'JERSON PIDO DAMPOG', '2015-12-14 14:24:28'),
(89, 33, 'JERSON PIDO DAMPOG', '2015-12-14 14:25:03'),
(90, 33, 'JERSON PIDO DAMPOG', '2015-12-14 14:25:06'),
(91, 33, 'JERSON PIDO DAMPOG', '2015-12-14 14:25:12'),
(92, 28, 'NICOLE ANN PAGSUBERON ABILGOS', '2015-12-14 14:25:56'),
(93, 34, 'JESS LORD ARROYO DE LA CRUZ', '2015-12-14 14:26:46'),
(94, 30, 'MARNYL DUNLAO BACOLINA', '2015-12-14 14:26:52'),
(95, 30, 'MARNYL DUNLAO BACOLINA', '2015-12-14 14:27:44'),
(96, 34, 'JESS LORD ARROYO DE LA CRUZ', '2015-12-14 14:28:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `classid` (`category_id`);

--
-- Chỉ mục cho bảng `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=801;

--
-- AUTO_INCREMENT cho bảng `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
