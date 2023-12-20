-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.infinityfree.com
-- Generation Time: Dec 20, 2023 at 01:53 AM
-- Server version: 10.6.15-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_34082014_loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `who` varchar(35) NOT NULL,
  `topicc` varchar(70) NOT NULL,
  `subj` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL,
  `type` int(2) NOT NULL DEFAULT 0,
  `l0` varchar(100) NOT NULL,
  `l1` varchar(100) NOT NULL,
  `l2` varchar(100) NOT NULL,
  `l3` varchar(100) NOT NULL,
  `l4` varchar(100) NOT NULL,
  `l5` varchar(100) NOT NULL,
  `l6` varchar(100) NOT NULL,
  `l7` varchar(100) NOT NULL,
  `l8` varchar(100) NOT NULL,
  `l9` varchar(100) NOT NULL,
  `udate` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `who`, `topicc`, `subj`, `date`, `type`, `l0`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `l9`, `udate`) VALUES
(8, 'Kingofking_29', 'Rahul(randi)', 'none', '27/04/23', 1, '16825712064493710546831162656610.jpg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230427),
(9, 'SkullPiratÂ£', 'Interesting Things', 'none', '27/04/23', 1, 'IMG_20230425_170443.jpg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230427),
(10, 'harshHirani', 'anshul the gpt', 'none', '27/04/23', 1, 'image.jpg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230427),
(34, '', '', '', '30/06/23', 1, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230630),
(35, 'q', 'shutterup upload test', 'none', '30/06/23', 0, 'IMG_20221127_230846.jpg', 'IMG_20221127_231004.jpg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230630),
(36, 'q', 'Pottery ajia whatsapp', 'none', '03/07/23', 0, '1_20230703_184706_0000.png', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230703),
(37, 'q', 'Pottery ajia large', 'none', '03/07/23', 0, '1_20230703_184706_0000-transformed.png', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230703),
(39, 'q', '', 'none', '13/07/23', 0, 'playerjs.js', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230713),
(40, 'JPG', 'PHP FILE WITH ICT TIME TABLE', 'none', '21/07/23', 0, 'ict_uploaded.php', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230721),
(41, 'JPG', 'PHP FILE WITH ICT TIME TABLE', 'none', '21/07/23', 0, 'TIMETABLE_ICT.php', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230721),
(42, 'JPG', 'PHP FILE WITH ICT TIME TABLE', 'none', '21/07/23', 1, 'TIMETABLE_ICT.php', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230721),
(43, '', '', '', '03/08/23', 1, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230803),
(44, 'q', '', '', '03/08/23', 1, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230803),
(45, 'q', 'cssi harsh', 'none', '03/08/23', 0, 'harsh cssi report.docx', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230803),
(46, 'q', '', 'none', '14/08/23', 0, 'B.Tech Computer Engineering-3 (1)-3.pdf', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230814),
(47, 'q', '// Online C compiler to run C program online #include <stdio.h> int ma', 'none', '17/08/23', 0, 'System.Evtx', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230817),
(48, 'q', '', 'none', '26/08/23', 0, 'DAIICT Hackathon Data.xlsx', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230826),
(49, 'q', '', 'none', '26/08/23', 0, '22BCP091_Lab Assignment 3.pdf', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230826),
(50, 'q', 'Jangle watching iconic ', 'none', '26/08/23', 1, 'IMG_20230826_194130.jpg', 'IMG_20230826_194111.jpg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230826),
(51, 'q', '', 'none', '27/08/23', 0, 'studentmodel.pickle', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230827),
(52, 'q', '', 'none', '27/08/23', 0, 'Max.ipynb', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230827),
(53, 'q', '', 'none', '09/09/23', 0, 'glassmorphism-creative-cloud-app-redesign.zip', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230909),
(54, '', '', '', '09/09/23', 1, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230909),
(55, 'q', '', 'none', '15/09/23', 1, 'ea74a020-d439-41e8-8e3c-2d1bd23aafd1.jfif', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230915),
(56, 'q', '', 'none', '18/09/23', 0, 'IMG_20230918_224648_098.png', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230918),
(57, 'q', '', 'none', '18/09/23', 0, 'IMG_20230918_224852_707.png', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230918),
(58, 'q', '', 'none', '22/09/23', 0, 'Ajia bunker interviews (4).png', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230922),
(59, 'q', '', 'none', '25/09/23', 0, '22bcp006_IA.docx', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 230925),
(60, 'q', '', 'none', '01/10/23', 0, 'IMG_0157.JPG', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231001),
(61, 'q', '', 'none', '01/10/23', 0, 'PHOTO-2022-10-27-12-50-25.jpg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231001),
(62, 'q', '', 'none', '01/10/23', 0, 'image.jpg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231001),
(63, 'q', '', 'none', '08/10/23', 0, '7592F799-E7D8-4966-8EDC-A47B01F2B61C.jpeg', 'EF16EDFE-7150-4A7C-B9BC-55AE94166D71.jpeg', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231008),
(64, 'q', '', '', '08/10/23', 1, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231008),
(65, 'q', '', 'none', '12/10/23', 0, 'Untitled-1.txt', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231012),
(66, '', '', '', '15/10/23', 1, 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231015),
(67, 'q', 'micro array', 'none', '17/10/23', 0, 'array.asm', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231017),
(68, 'nn', '4 b ram bc', 'none', '27/10/23', 0, '4h.circ', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231027),
(69, 'q', '', 'none', '29/10/23', 0, 'asm.zip', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231029),
(70, 'q', '', 'none', '30/10/23', 0, 'Companies.docx', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231030),
(71, 'q', 'rto', 'none', '03/11/23', 0, 'form1ll.pdf', 'acknoledgedll.pdf', 'll report.pdf', 'New LL Acknowledgement.pdf', 'fee ll rto.pdf', 'NONE', 'NONE', 'NONE', 'NONE', 'NONE', 231103);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(65) NOT NULL,
  `token` varchar(50) NOT NULL,
  `ipo` varchar(40) NOT NULL,
  `ldate` varchar(15) NOT NULL,
  `fdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `email`, `token`, `ipo`, `ldate`, `fdate`) VALUES
(6, 'Harsh Hirani', 'harshHirani', 'harsh.hce22@sot.pdpu.ac.in', '97dcb25e22870ee6aa90fb8071ed0cb1d84fafc67696e7f661', 'c51b57a703ba1c5869228690c93e1701', '', '26/04/23'),
(7, 'Skull Pirate', 'SkullPiratÂ£', 'marvellousanshul007@gmail.com', 'a325c9d8e53016812fcb846a0ed19614f349c6b5e1de769b4d', 'c5807b2d653509ff56b1e4c639260daf', '', '26/04/23'),
(8, 'Rahul Tanna ', 'Rahul18', 'rahultanna1894@gmail.com', '12de8ba46aac7eb6af86121feed9eae2a41833c9a9fce3d7cc', 'bfe5423fdc4988cfc991cc546572256f', '', '27/04/23'),
(9, 'King of king', 'Kingofking_29', 'nishantpatel197322@gmail.com', '0563821b3af5a5edfff6e6aa2a2c51c7080636cd1b6b05cfc3', 'fe1064fc0194c31df091b034a1820681', '', '27/04/23'),
(10, 'q', 'q', 'q', 'fed73ecd69c82ff8716cc3ca69e555896cadebfca071412f31', '7694f4a66316e53c8cdd9d9954bd611d', '', '03/05/23'),
(11, 'Rahul', 'Rahul18', 'rahultanna1894@gmail.com', '72935d516648ca52b79a9ce7f90c9a387c6ee0d7537d763d7c', 'bfe5423fdc4988cfc991cc546572256f', '', '04/05/23'),
(12, 'Jangle Parth', 'JPG', 'atplparth@gmail.com', '659b2c6056d35473e3ee7ccc9256fa707b80d7b99aae96e2ee', 'ca6e4368e197deb42cefa590b0fddfd8', '', '13/07/23'),
(13, 'q', 'q', 'q@q.q', '293c34c5771b820a8ee2ee2f213b1c9faec1ce7fe20df48677', '7694f4a66316e53c8cdd9d9954bd611d', '', '10/10/23'),
(14, 'nishant', 'nn', 'n', '94cffd925df15dd3cdf343bff567223ebcd1fc8a5e87e05030', 'c20ad4d76fe97759aa27a0c99bff6710', '', '27/10/23'),
(15, 'asdf', 'asdf', 'kalpesh@kahgsid', 'b45df6a7d1e5be29acea74b644c356560a610d9d940edfe42a', '1b19af9616e994b1fa7ee2f5267a74d4', '', '27/10/23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
