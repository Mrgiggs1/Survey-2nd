-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 02:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surveydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fav_food`
--

CREATE TABLE `fav_food` (
  `phoneID` varchar(11) NOT NULL,
  `pizza` varchar(255) DEFAULT NULL,
  `pasta` varchar(255) DEFAULT NULL,
  `pap_wors` varchar(255) DEFAULT NULL,
  `chick_stir_fry` varchar(255) DEFAULT NULL,
  `beef_stir_fry` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav_food`
--

INSERT INTO `fav_food` (`phoneID`, `pizza`, `pasta`, `pap_wors`, `chick_stir_fry`, `beef_stir_fry`, `other`) VALUES
('0723234543', '', 'Pasta', '', 'Chicken stir fry', '', 'Other'),
('0723848583', 'Pizza', '', 'Pap and Wors', '', '', 'Other'),
('0794536523', '', 'Pasta', 'Pap and Wors', '', 'Beef stir fry', 'Other'),
('0824449122', '', 'Pasta', 'Pap and Wors', '', '', 'Other'),
('0824539854', 'Pizza', '', '', 'Chicken stir fry', '', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `phoneID` varchar(11) NOT NULL,
  `eat_out` int(11) DEFAULT NULL,
  `watch_movies` int(11) DEFAULT NULL,
  `watch_tv` int(11) DEFAULT NULL,
  `radio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`phoneID`, `eat_out`, `watch_movies`, `watch_tv`, `radio`) VALUES
('0723234543', 1, 3, 2, 4),
('0723848583', 1, 3, 2, 5),
('0794536523', 1, 4, 1, 5),
('0824449122', 1, 2, 3, 4),
('0824539854', 1, 3, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date_created` date NOT NULL,
  `age` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`lname`, `fname`, `phone`, `date_created`, `age`) VALUES
('Maloke', 'Thabo', '0723234543', '2021-10-29', 29),
('Lakay', 'Maria', '0723848583', '2021-10-29', 45),
('Maluleka', 'Success', '0794536523', '2021-10-29', 34),
('Nkuna', 'Thabitha', '0824449122', '2021-10-29', 23),
('Mahlangu', 'Simphiwe', '0824539854', '2021-10-28', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fav_food`
--
ALTER TABLE `fav_food`
  ADD PRIMARY KEY (`phoneID`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`phoneID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
