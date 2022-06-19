-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 12:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `p_sl_no` varchar(30) NOT NULL,
  `p_date` date NOT NULL,
  `p_time` varchar(20) NOT NULL,
  `p_id_proof` varchar(50) DEFAULT NULL,
  `p_id_no` varchar(50) DEFAULT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_gender` varchar(30) NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_mobile` varchar(20) NOT NULL,
  `p_email` varchar(100) DEFAULT NULL,
  `p_address` varchar(300) NOT NULL,
  `p_city` varchar(20) NOT NULL,
  `p_zip` int(11) NOT NULL,
  `p_height` varchar(20) NOT NULL,
  `p_weight` varchar(20) NOT NULL,
  `p_bmi` varchar(20) NOT NULL,
  `p_bp` varchar(20) DEFAULT NULL,
  `p_pulse` varchar(20) DEFAULT NULL,
  `p_spo` varchar(20) DEFAULT NULL,
  `p_check_list` varchar(200) DEFAULT NULL,
  `p_source` varchar(50) NOT NULL,
  `p_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `p_sl_no`, `p_date`, `p_time`, `p_id_proof`, `p_id_no`, `p_name`, `p_gender`, `p_age`, `p_mobile`, `p_email`, `p_address`, `p_city`, `p_zip`, `p_height`, `p_weight`, `p_bmi`, `p_bp`, `p_pulse`, `p_spo`, `p_check_list`, `p_source`, `p_status`) VALUES
(1, 'TVR20220619004103', '2022-06-19', '00:41', 'Voter', 'JMD-4568-8962', 'Anupam Bayen', 'Male', 37, '8335050957', 'anupam.bayen2@gmail.com', 'Flat No-F1, First Floor, 40A/41, P.R. Layout, Murugeshpaliya', 'Kolkata', 500016, '1.65', '78', '28.65', '89', '45', '80', 'FBS,RBS', 'Google', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
