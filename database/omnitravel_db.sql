-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 02:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omnitravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `content_name` varchar(25) NOT NULL,
  `content_desc` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `content_name`, `content_desc`, `created_at`, `updated_at`) VALUES
(1, 'contactus', '<p style="text-align: center; padding-left: 30px;"><strong>52 g a bonifacio avenue barangka marikina city</strong></p>\r\n<p style="text-align: center;"><strong>Tel No. 888-88-88</strong></p>\r\n<p style="text-align: center;"><strong>Email : test@test.com</strong></p>', '2018-02-05', 2018),
(2, 'aboutus', '<p style="text-align: center;"><strong>`I am Danielicious"</strong></p>', '2018-02-05', 2018),
(3, 'companyname', 'I am Danielicious', '0000-00-00', 2018),
(4, 'companylogo', '22497014_10210636402568976_2025695838_o (1).jpg', '0000-00-00', 2018),
(5, 'slider', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `pack_name` varchar(50) NOT NULL,
  `pack_desc` text NOT NULL,
  `pack_price` float NOT NULL,
  `pack_inclusion` varchar(50) NOT NULL,
  `pack_status` int(11) NOT NULL,
  `pack_test` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `pack_name`, `pack_desc`, `pack_price`, `pack_inclusion`, `pack_status`, `pack_test`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious"</strong></p>\r\n<p style="text-align: center;"><strong>Test 1234</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '2018-02-07'),
(2, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious 2"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(3, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious 3"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(4, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious 4"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(5, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious 5"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(6, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious 6"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(7, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious 7"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(8, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious 8"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(10, '', '', 0, '', 0, '<p style="text-align: center;"><strong>`I am Danielicious"</strong></p>', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00'),
(11, '', '', 0, '', 0, '<h1 style="text-align: center;"><strong>This is only a test</strong></h1>', '0000-00-00', '0000-00-00', '2018-02-07', '2018-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_img` varchar(100) NOT NULL,
  `slider_desc` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_img`, `slider_desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Capture1.PNG', 'Test 11', 0, '2018-02-06', '2018-02-06'),
(2, 'noimg.jpg', 'Test 2', 1, '2018-02-06', '0000-00-00'),
(3, '22217892_10210508665616110_1530795718_o.jpg', 'Test 33', 0, '2018-02-06', '2018-02-06'),
(4, 'noimg.jpg', 'Test 1', 0, '2018-02-06', '2018-02-06'),
(5, 'noimg.jpg', 'Test 1', 0, '2018-02-06', '2018-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usertype_id` int(11) NOT NULL COMMENT 'User Type Primary ID',
  `user_email` varchar(25) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date_created` date NOT NULL,
  `user_status` int(11) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `usertype_id`, `user_email`, `password`, `date_created`, `user_status`, `remember_token`, `updated_at`) VALUES
(1, 1, 'admin@admin.com', '$2y$10$7ektvUffxKgZT9yWIOvOOuxDCtneQJqbkIk6UJet9roJTHXyKcOf2', '2018-02-01', 1, 'r5atHNTU31WdwnyWOa5v0osE8gq3pLl91OJ3M9kOn6d0i1FRXMjDaffo7VNa', '2018-02-07 03:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `usertype_id` int(11) NOT NULL,
  `usertype_desc` varchar(50) NOT NULL,
  `usertype_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`usertype_id`, `usertype_desc`, `usertype_status`) VALUES
(1, 'Admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`usertype_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
