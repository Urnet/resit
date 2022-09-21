-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 12:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fed_nurs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'HND I'),
(2, 'HND II'),
(23, 'ND I'),
(24, 'ND II');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 68, 'Guest', 'alphasilas4@gmail.com', 'https://t.me/hymns_songs', 'approved', '2021-10-20'),
(2, 43, 'Guest', 'alphasilas4@gmail.com', 'Visit the telegram page...\r\n\r\nhttps://t.me/hymns_songs', 'approved', '2021-10-20'),
(3, 92, 'Silas', 'alphasilas4@gmail.com', 'nice course', 'approved', '2022-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `course_i`
--

CREATE TABLE `course_i` (
  `sn` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mat` varchar(25) NOT NULL,
  `gpa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_i`
--

INSERT INTO `course_i` (`sn`, `fullname`, `mat`, `gpa`) VALUES
(1, 'Silas Ogochukwu Ugwu', '20/123435ZA', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_publisher` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_pdf` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(200) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_by`, `post_title`, `post_author`, `post_publisher`, `post_date`, `post_image`, `post_pdf`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(84, 17, 'uriel', 'Soro m tobe ya', 'Dr. Jude Nnam', 'Uriel Ugwu', '0000-00-00', '', '', 'Song by Dr. Jude&nbsp;', 'Soro m Tobe,', '', 'draft', 9),
(85, 4, 'uriel', 'Gloria', 'Uriel Ugwu Silas Ogochukwu', 'Uriel', '2021-04-02', 'IMG_20210402_203032_083.JPG', '../pdf/Gloria by Uriel and arranged by Enoch.pdf', 'Gloria by Uriel Ugwu Silas and arranged by Enoch Clement&nbsp;', 'Uriel Silas, Gloria ,Enoch Clement', '', 'published', 11),
(88, 1, '', 'test', 'Lynn D', '', '2022-08-31', 'WhatsApp Image 2022-06-17 at 2.06.14 PM.jpeg', '', '', '', '', 'draft', 0),
(89, 1, '', 'test', 'test', 'test', '2022-08-31', 'WhatsApp Image 2022-06-17 at 2.06.14 PM (1).jpeg', '', 'testtttttttttttttt', 'test', '', 'draft', 0),
(90, 1, '', 'eeeeeeeee', 'Lynn D', 'hfhgtftydhhhhhhhhhh', '2022-08-31', '', '', 'cvcvbfgdjhghkjhoughcgfcgb', 'Hnd 2 final semster', '', 'published', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg_year_one`
--

CREATE TABLE `reg_year_one` (
  `sn` int(10) NOT NULL,
  `mat_no` varchar(25) NOT NULL,
  `stat` varchar(10) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date_time` varchar(25) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gpa` int(10) NOT NULL,
  `lev` varchar(10) NOT NULL,
  `fcourse` varchar(10) NOT NULL,
  `scourse` varchar(10) NOT NULL,
  `tcourse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg_year_one`
--

INSERT INTO `reg_year_one` (`sn`, `mat_no`, `stat`, `reference`, `date_time`, `fname`, `lname`, `gpa`, `lev`, `fcourse`, `scourse`, `tcourse`) VALUES
(1, '1010/138781cs', 'paid', '', '08/31/22 09:25:29 pm', 'test', 'tset', 3, 'Year 1', 'gst 114', '', ' '),
(2, '20/112212ZA', 'paid', '', '08/31/22 09:37:57 pm', 'oche', 'andrew', 3, 'Year 1', 'gst 112', '', ' '),
(3, '20/11221122ZA', 'paid ', '', '09/01/22 06:43:20 pm', 'test', 'tset', 3, '', 'gns 110', '', ' '),
(7, '20/112212Zb', 'paid ', '', '09/01/22 07:04:45 pm', 'jnjnc', 'tset', 3, 'Year 1', 'gns 110', '', ' '),
(8, '1111111', 'paid ', '', '09/01/22 08:03:49 pm', 'test', 'anthony', 3, 'Year 1', 'gns 110', '', ' '),
(15, '111111109/nm0', 'paid ', '', '09/02/22 11:13:23 pm', 'Mary', 'ncndkjcq', 3, 'Year 1', 'gst 110', '', ' '),
(43, '111/8767454', 'paid ', '', '09/03/22 12:59:35 pm', 'Mary', 'anthony', 3, 'Year 1', 'gns 110', '', ' '),
(45, '111/437467674734', 'paid ', '', '09/03/22 01:45:42 pm', 'Mary', 'anthony', 3, 'Year 1', 'gns 110', '', ' '),
(47, '111/437467f', 'paid ', '', '09/03/22 01:46:52 pm', 'Mary', 'anthony', 3, 'Year 1', 'gns 110', '', ' '),
(48, '111/43743467f', 'paid ', '', '09/03/22 01:48:57 pm', 'Mary', 'anthony', 3, 'Year 1', 'gns 110', '', ' '),
(49, '19/138781cs', 'paid ', '', '09/03/22 01:54:38 pm', 'test', 'anthony', 3, 'Year 1', 'gns 110', '', ' '),
(50, '19/1387381cs', 'paid ', '', '09/03/22 02:01:17 pm', 'test', 'anthony', 3, 'Year 1', 'gns 110', '', ' '),
(51, '20/1122113ZA', 'paid ', '', '09/03/22 02:02:22 pm', 'test', 'tset', 3, 'Year 1', 'gns 110', '', ' '),
(52, '20/11242ZA', 'paid ', '', '09/03/22 02:03:02 pm', 'test', 'tset', 3, 'Year 1', 'gns 110', '', ' '),
(67, '2020/138781cs', 'paid ', '', '09/03/22 08:02:20 pm', 'oche tony', 'enokela', 3, 'Year 2', 'gst 113', 'gst 111', 'gns 112'),
(69, '1010/1387801cs', 'paid ', '', '09/03/22 08:06:01 pm', 'oche', 'tset', 3, 'Year 1', 'gns 112', 'gst 110', 'gst 113'),
(70, '1010/1385c', 'paid ', '', '09/03/22 08:10:50 pm', 'Mary', 'Ugwu', 3, 'Year 1', 'gst 114', 'gns 110', 'gns 112'),
(71, '10/1385c', 'paid 3000', '', '09/03/22 08:16:37 pm', 'Mary peter', 'Ugwu', 3, 'Year 1', 'gst 114', 'gns 110', 'gns 112'),
(72, '20/1120212ZA', 'paid 3000', '', '09/03/22 08:20:51 pm', 'oche', 'Ugwu', 3, 'Year 3', 'gst 110', 'gns 110', 'gst 114'),
(73, '20/11122092ZA', 'paid 3000', '', '09/03/22 08:28:25 pm', 'pay', 'start', 3, 'Year 1', 'gst 114', 'gns 112', 'gns 110'),
(74, '33ueo3ue3', 'paid 2000', '', '09/03/22 08:31:03 pm', 'stop', 'test', 4, 'Year 1', 'gns 110', 'gns 112', ' '),
(76, '2020/1380781cs', 'paid 1000', '', '09/04/22 08:57:19 pm', 'annthony ochoche', 'enokela', 4, 'Year 1', 'gns 110', '', ' '),
(77, '21/00000000001', 'paid 1000', '', '09/04/22 08:59:57 pm', 'annthony', 'ochoche', 4, 'Year 1', 'gns 112', '', ' '),
(78, '21/00334f', 'paid 1000', '', '09/04/22 09:17:42 pm', 'annthony', 'enokela', 23, 'Year 1', 'gst 111', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `mat_no` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randsalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `mat_no`, `user_email`, `user_role`, `randsalt`) VALUES
(9, 'tester', '$2y$10$SZlfrT1y9yDe45TmpFIgouulYdOJtKTNrnHn.3bu9diGuoJDBmf/2', 'Test', 'test@mail.com', 'admin', ''),
(17, 'admin', '$2y$10$INDRZL/ASZSFfsyF/tl/3eWdAzha5vHRKqeRl21a91YFyWbdruEqS', 'Admin', 'admin@mail.com', 'admin', '$2y$10$iusesomecrazystrings22'),
(36, '2020/136370CS', '1234', '', '', '', '$2y$10$iusesomecrazystrings22'),
(37, '2020/136370CS', '1234', '', '', '', '$2y$10$iusesomecrazystrings22'),
(38, 'Anthony O', '$2y$10$7dVtB33AKQPkYX1Of0FuZeyXyGWNxvXQFbiSUFnW7T0neCR1S5/za', '1010/138781cs', '', 'student', '$2y$10$iusesomecrazystrings22'),
(39, 'paulsmith', '$2y$10$NiFLBibwVnxy/OSLeRyLD.O7gqmzItoLCFWdjOx2L5FyJ2AIxy4yu', '1010/1387810cs', '', 'student', '$2y$10$iusesomecrazystrings22'),
(40, 'sign', '$2y$10$WZLQyAVkgVMcat3vDJpwZuVgKeZWqyLkfHopWw618k8gjl5N/tY2q', '20/112211 2ZA', '', 'student', '$2y$10$iusesomecrazystrings22'),
(41, 'tony', '$2y$10$Hiqt4x6jRQMx3u0YbSNmVufOuk2WzkNgCf1GI4zwcFzqiT7aS83L.', '2020/138781cs', '', 'student', '$2y$10$iusesomecrazystrings22'),
(42, 'BOJ12345', '$2y$10$oNo/Fy.8Z5M41cF1.0Wl9.qIFiXB6LSyct9/gk6OqCvlls7CU2yd6', '12345', '', 'student', '$2y$10$iusesomecrazystrings22'),
(43, 'AAAAA', '$2y$10$CKXbAh5Mn.B04KR0VuUj2u7wiCyFCT6Kl7nOgCfIVmCIQKeFkjcOi', 'AAAAA', '', 'student', '$2y$10$iusesomecrazystrings22'),
(44, 'zzzzz', '$2y$10$yEZ.cCGAh/d0TRM7aqz8t.S2P/.GweNWEKHbD96z0erLODcFV9fTi', 'zzzzz', '', 'student', '$2y$10$iusesomecrazystrings22'),
(45, 'check', '$2y$10$BYBNvFeD7ENEkAM3uw200e3p3odrzmFYxFSlsvTyVQRBtV/9EmryG', '11/1111t', '', 'student', '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, 'rpco8li4s4cgecr6rqnikpthk6', 1609830427),
(2, '903b2e879aa32a83ad0203f7ccccdcba', 1612389670),
(3, '4jltqimklpro07injnmp80f7i0', 1610746418),
(4, 'erua2lmrf4fv6gdgmh0idjaf91', 1610204742),
(5, '7cukthmqdd31qe388sn665qkr0', 1612254996),
(6, 'nv4dfaagiuhfi047l88p0751h0', 1612356762),
(7, 'iau4rfargf1dvvrtlcgs4kbmu1', 1612255043),
(8, '7vdm6eo7s2n4objob34sqbhtq3', 1612541717),
(9, 'grb7ga722l4ivmmd4h9q91pcm6', 1612533273),
(10, '7126ad97b31e47efb39d367bf443dcd2', 1612360896),
(11, '4pnlk1pa27r8cbb2djl54i8fg6', 1616632761),
(12, '1m6g6095va1pd37d7ca1aoa981', 1613827073),
(13, 'i8su6hmi131ku3t1suvdqlgvf1', 1612720151),
(14, 'l2q1q45qfa26olvm6kefado0o0', 1612758790),
(15, '5a96mo5o2mr8rchlnme4j0q5j4', 1612731169),
(16, 'l6tvgfsujt5er2bnjg1jutjg72', 1612926504),
(17, 'rmovajn9kqmdmtq6toggj2o6g4', 1612958341),
(18, '4nsulctigqrbmsc8mmtmhdj7u1', 1612990503),
(19, 'f1gi1501d700kpiv6q3626kk76', 1612991449),
(20, '0vgep3liujaku1b4d8dg1lnc81', 1613004126),
(21, '8eu14pjenmmtmihsb1jbj91m37', 1613045559),
(22, 'abrdoggou3ufgc20rb0j79les3', 1613119812),
(23, 'krkr2o35v6qsqmb7rkdbbqpc17', 1613148084),
(24, 'u917s96165tcapbug5h2qat327', 1613669676),
(25, 'e7df9a5ps6ek0l0amtnok95t50', 1613769210),
(26, '0ta3a314q6o7cligia4hdvd0s2', 1614709982),
(27, '6crrm0g14mtis0srm8uifgrkd2', 1614722431),
(28, '8jcdpm34d14n164rcl9ka25ba3', 1615283334),
(29, 'u149fmi0d35fks38qtafsice87', 1615391152),
(30, 'gik47q9iepbl6e47l5mate1k47', 1615401233),
(31, 'skjgmjf66u9fvokmf1ro3vrh00', 1615404423),
(32, 'armt3kfdaih3c8adt81kmlh8d2', 1615450769),
(33, '6obsu4b08jg58g1kcibvhgjcr4', 1615499284),
(34, '1iajmegj8bhj80c065qiqr3rd0', 1616433680),
(35, '7o7925b38c05msgk0u3agpbuj7', 1616444564),
(36, 'nghn81odgtfb8fnppalp2mvbt1', 1616580055),
(37, 'g5brh4gbr69lcn5tik9p9pgid7', 1616581138),
(38, 'kah3iu1rker64nfup85thhouk1', 1616581548),
(39, 'a5sf2g467821qk60s7dgfjir12', 1616611734),
(40, 'iqhn45q3pcfdtlqkho6jjl1dt2', 1616612051),
(41, '5em8kp0kvusr1s8b678b1pg8s6', 1617135020),
(42, '07re8fp4e51jesoej0qu9255e0', 1617393012),
(43, 'uph5vbau63uqkckub50nmdgn70', 1623445228),
(44, '6c61duh10010tqs96rmkcdfti5', 1628559224),
(45, '305h2sg29gcbu3kd1jh13o5j00', 1628582721),
(46, '56avs5on5mg3usabdu29s6naa1', 1628606726),
(47, 'om2lhfu9l7mp7ph6hj58j010h5', 1628609644),
(48, 'ftpkseku5i7tosc65k0nna7oi6', 1628688366),
(49, 'tpu2a5r6behd682rb28tqghq61', 1630782608),
(50, 'l1da41la1rn0vr59u427412o55', 1632485404),
(51, 'airdjsdi3m380us24kdbgu8kt2', 1634762367),
(52, '2vsouculd5clto41bffust8o80', 1635188324),
(53, 'brr45sq7uaggmsmkco36nbrk85', 1635239431),
(54, 'lbh7ealvput30ems7hrfj0nbb7', 1658968368);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `course_i`
--
ALTER TABLE `course_i`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `reg_year_one`
--
ALTER TABLE `reg_year_one`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `mat_no_id` (`mat_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_i`
--
ALTER TABLE `course_i`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `reg_year_one`
--
ALTER TABLE `reg_year_one`
  MODIFY `sn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
