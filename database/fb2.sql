-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 09:15 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fb2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `tb` (IN `tname` TEXT)  NO SQL
BEGIN
SET @sqlstmt = 'insert into msglist (sender,msg) values ("342","sdfd")';
PREPARE st FROM @stlstmT;
EXECUTE st;
DEALLOCATE PREPARE st;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `1_101`
--

CREATE TABLE `1_101` (
  `no` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `receiver_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `1_101`
--
DELIMITER $$
CREATE TRIGGER `update_to_incoming` AFTER INSERT ON `1_101` FOR EACH ROW BEGIN
        IF NEW.receiver_id=1 THEN
        INSERT INTO 1_incoming_message (sender_id,message,time) VALUES
        (NEW.sender_id,NEW.message,NEW.time,'101'); END IF;END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `1_chatlist`
--

CREATE TABLE `1_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `1_groups`
--

CREATE TABLE `1_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `1_incoming_message`
--

CREATE TABLE `1_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `2_1101`
--

CREATE TABLE `2_1101` (
  `no` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `receiver_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `2_chatlist`
--

CREATE TABLE `2_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `2_groups`
--

CREATE TABLE `2_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `2_incoming_message`
--

CREATE TABLE `2_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `3_111101`
--

CREATE TABLE `3_111101` (
  `no` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `receiver_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `3_chatlist`
--

CREATE TABLE `3_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `3_groups`
--

CREATE TABLE `3_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `3_incoming_message`
--

CREATE TABLE `3_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `4_111101`
--

CREATE TABLE `4_111101` (
  `no` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `receiver_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Triggers `4_111101`
--
DELIMITER $$
CREATE TRIGGER `update_to_4` AFTER INSERT ON `4_111101` FOR EACH ROW BEGIN
        IF NEW.receiver_id=4 THEN
        INSERT INTO 4_incoming_message (sender_id,message,time) VALUES
        (NEW.sender_id,NEW.message,NEW.time,'101'); END IF;END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `4_chatlist`
--

CREATE TABLE `4_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `4_groups`
--

CREATE TABLE `4_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `4_incoming_message`
--

CREATE TABLE `4_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `5_1110000001`
--

CREATE TABLE `5_1110000001` (
  `no` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `receiver_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `5_chatlist`
--

CREATE TABLE `5_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `5_groups`
--

CREATE TABLE `5_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `5_incoming_message`
--

CREATE TABLE `5_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `6_1111111100001`
--

CREATE TABLE `6_1111111100001` (
  `no` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `receiver_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `6_1111111100001`
--

INSERT INTO `6_1111111100001` (`no`, `sender_id`, `receiver_id`, `message`, `time`, `status`) VALUES
(56, '767', '545', 'hi', '2017-08-16 18:59:22', 1),
(57, '767', '545', 'hi', '2017-08-16 19:00:25', 1),
(58, '767', '545', 'hi', '2017-08-16 19:00:39', 1),
(59, '767', '545', 'hi ddf fgdrf', '2017-08-16 19:00:50', 1),
(60, '273', '545', 'hi ddf fgdrf', '2017-08-16 19:01:20', 1),
(61, '273', '545', 'hi ddf fgdrf', '2017-08-16 19:01:29', 1),
(62, '273', '545', 'hi ddf fgdrf', '2017-08-16 19:02:21', 1),
(71, '5', '5', 'jhjkhjv', '2017-08-16 19:03:56', 1),
(83, '1', '1', '1', '0000-00-00 00:00:00', 1),
(84, NULL, NULL, NULL, '2017-08-16 19:07:10', NULL),
(85, '2', NULL, NULL, '2017-08-16 19:07:19', NULL),
(86, '2', '3', NULL, '2017-08-16 19:07:27', NULL),
(87, '2', '3', 'sdrglnser gew kgjeg', '2017-08-16 19:07:37', NULL),
(88, '2', '3', 'sdrglnser gew kgjeg', '2017-08-16 19:07:45', 3),
(90, '223454', '6', 'jhjkhjv fhfhfgj', '2017-08-16 19:09:47', 1);

--
-- Triggers `6_1111111100001`
--
DELIMITER $$
CREATE TRIGGER `update_to_6` AFTER INSERT ON `6_1111111100001` FOR EACH ROW BEGIN
        IF NEW.receiver_id=6 THEN
        INSERT INTO 6_incoming_message (sender_id,message,time,status) VALUES
        (NEW.sender_id,NEW.message,NEW.time,'101'); END IF;END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `6_chatlist`
--

CREATE TABLE `6_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `6_groups`
--

CREATE TABLE `6_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `6_incoming_message`
--

CREATE TABLE `6_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `6_incoming_message`
--

INSERT INTO `6_incoming_message` (`sender_id`, `group_id`, `message`, `time`, `status`) VALUES
(223454, NULL, 'jhjkhjv fhfhfgj', '2017-08-16 19:09:47', 101);

-- --------------------------------------------------------

--
-- Table structure for table `16_groups`
--

CREATE TABLE `16_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `16_incoming_message`
--

CREATE TABLE `16_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `17_chatlist`
--

CREATE TABLE `17_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `17_groups`
--

CREATE TABLE `17_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `17_incoming_message`
--

CREATE TABLE `17_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `18_10101`
--

CREATE TABLE `18_10101` (
  `no` int(10) UNSIGNED NOT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `receiver_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `18_chatlist`
--

CREATE TABLE `18_chatlist` (
  `no` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `18_groups`
--

CREATE TABLE `18_groups` (
  `group_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `18_incoming_message`
--

CREATE TABLE `18_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `213_210`
--

CREATE TABLE `213_210` (
  `no` int(11) DEFAULT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `321_6777`
--

CREATE TABLE `321_6777` (
  `no` int(11) DEFAULT NULL,
  `sender_id` varchar(10) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `incoming`
--

CREATE TABLE `incoming` (
  `sender_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `msglist`
--

CREATE TABLE `msglist` (
  `no` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `msglist`
--

INSERT INTO `msglist` (`no`, `sender`, `msg`) VALUES
(1, 234, 'hi hello viking'),
(3, 444, 'fkdfjkd');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(3) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `value`) VALUES
(1, '-281.11111'),
(2, '-120.54443'),
(3, '-43.945312'),
(4, '-281.11111'),
(5, '-281.11111'),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, '0'),
(18, ''),
(19, ''),
(20, '0'),
(21, '71.5662650'),
(22, '6.66666666'),
(23, ''),
(24, ''),
(25, ''),
(26, '');

-- --------------------------------------------------------

--
-- Table structure for table `usermsg`
--

CREATE TABLE `usermsg` (
  `id` int(11) NOT NULL,
  `sender` int(5) NOT NULL,
  `receive` int(5) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usermsg`
--

INSERT INTO `usermsg` (`id`, `sender`, `receive`, `msg`) VALUES
(1, 234, 0, 'hi hello viking'),
(3, 444, 321, 'fkdfjkd');

--
-- Triggers `usermsg`
--
DELIMITER $$
CREATE TRIGGER `listing_msg` AFTER INSERT ON `usermsg` FOR EACH ROW INSERT INTO msglist (sender,msg) VALUES (NEW.sender,NEW.msg)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `mobile_no`, `pass`, `name`) VALUES
(1, '8526528935', '55e24065bec12914d091b5ffa461a547', 'arul'),
(2, '4564564534', '9c0190de3cb259496313a83aeb747676', 'aruldon'),
(3, '5451545786', '9c0190de3cb259496313a83aeb747676', 'ghgjhgj'),
(4, '7899554215', '0116529a748535a6b73554da96a8e2c3', 'ghfhfh'),
(5, '9863245454', '9c0190de3cb259496313a83aeb747676', 'ghngnvbnvnb'),
(6, '2355372412', '9c0190de3cb259496313a83aeb747676', 'hgjghhg');

-- --------------------------------------------------------

--
-- Table structure for table `user_incoming_message`
--

CREATE TABLE `user_incoming_message` (
  `sender_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `message` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1_101`
--
ALTER TABLE `1_101`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `1_chatlist`
--
ALTER TABLE `1_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `2_1101`
--
ALTER TABLE `2_1101`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `2_chatlist`
--
ALTER TABLE `2_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `3_111101`
--
ALTER TABLE `3_111101`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `3_chatlist`
--
ALTER TABLE `3_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `4_111101`
--
ALTER TABLE `4_111101`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `4_chatlist`
--
ALTER TABLE `4_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `5_1110000001`
--
ALTER TABLE `5_1110000001`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `5_chatlist`
--
ALTER TABLE `5_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `6_1111111100001`
--
ALTER TABLE `6_1111111100001`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `6_chatlist`
--
ALTER TABLE `6_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `17_chatlist`
--
ALTER TABLE `17_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `18_10101`
--
ALTER TABLE `18_10101`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `18_chatlist`
--
ALTER TABLE `18_chatlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `msglist`
--
ALTER TABLE `msglist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermsg`
--
ALTER TABLE `usermsg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1_101`
--
ALTER TABLE `1_101`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `1_chatlist`
--
ALTER TABLE `1_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2_1101`
--
ALTER TABLE `2_1101`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2_chatlist`
--
ALTER TABLE `2_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `3_111101`
--
ALTER TABLE `3_111101`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `3_chatlist`
--
ALTER TABLE `3_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `4_111101`
--
ALTER TABLE `4_111101`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `4_chatlist`
--
ALTER TABLE `4_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `5_1110000001`
--
ALTER TABLE `5_1110000001`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `5_chatlist`
--
ALTER TABLE `5_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `6_1111111100001`
--
ALTER TABLE `6_1111111100001`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `6_chatlist`
--
ALTER TABLE `6_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `17_chatlist`
--
ALTER TABLE `17_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `18_10101`
--
ALTER TABLE `18_10101`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `18_chatlist`
--
ALTER TABLE `18_chatlist`
  MODIFY `no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `msglist`
--
ALTER TABLE `msglist`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `usermsg`
--
ALTER TABLE `usermsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
