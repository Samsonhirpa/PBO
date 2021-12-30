-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabine2`
--

CREATE TABLE `cabine2` (
  `c_id` int(11) NOT NULL,
  `maqa_id` int(11) NOT NULL,
  `mudama_amma` varchar(222) NOT NULL,
  `muxannoowan` varchar(255) NOT NULL,
  `muxannoo` int(11) NOT NULL,
  `sadarkaB` varchar(222) NOT NULL,
  `gosaB` varchar(222) NOT NULL,
  `university_id` int(11) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `carrabarumsa` varchar(222) NOT NULL,
  `baraqabso` varchar(222) NOT NULL,
  `barabadhasa` varchar(222) NOT NULL,
  `hojibadhasa` varchar(222) NOT NULL,
  `qamabadhase` varchar(222) NOT NULL,
  `barakafama` varchar(222) NOT NULL,
  `dhimakahef` varchar(222) NOT NULL,
  `ciminaijo` varchar(222) NOT NULL,
  `hanqinaijo` varchar(222) NOT NULL,
  `cv` varchar(222) NOT NULL,
  `sector` varchar(222) NOT NULL,
  `zone_id` varchar(222) NOT NULL,
  `woreda` varchar(222) NOT NULL,
  `operator` varchar(222) NOT NULL,
  `created_by` varchar(222) NOT NULL,
  `requst_status` int(11) NOT NULL,
  `request_status2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabine2`
--

INSERT INTO `cabine2` (`c_id`, `maqa_id`, `mudama_amma`, `muxannoowan`, `muxannoo`, `sadarkaB`, `gosaB`, `university_id`, `gpa`, `carrabarumsa`, `baraqabso`, `barabadhasa`, `hojibadhasa`, `qamabadhase`, `barakafama`, `dhimakahef`, `ciminaijo`, `hanqinaijo`, `cv`, `sector`, `zone_id`, `woreda`, `operator`, `created_by`, `requst_status`, `request_status2`) VALUES
(6, 27, '88', '', 12, '1', '', 3, '', '', '', '', '', '', '', '', '', '', 'ss4.jpg', '12', '20', '81', 'shumi garbiche tsegaye', 'shumii', 2, 0),
(7, 28, '3', '', 7, '2', 'software', 4, '4.0', 'ostica', '', '', '', '', '', '', '', '', 'WIN_20191016_01_40_04_Pro1.jpg', '1', '20', '1', 'caala gezahegn tsegaye', 'cala', 2, 0),
(8, 29, '4', '2000-2003 =kantibaa magaalaa burayuu\r\n2004-2006= kantibaa magaalaa adaamaa\r\n2007-haamma ammatti= gargaaraa addaa itti gaafatama waajjiraa partii', 10, '2', 'Management', 3, '3.8', '-', '2000', '2010', 'hoggantumaa', 'wajjira partii badhadhinaa', '-', '-', 'yeroo hundaa yaadoota haaraa fiduun', 'fagagasds', 'Oromia_IP_Management_System_(1)5.pdf', '1', '20', '81', 'shumi garbiche tsegaye', 'shumii', 2, 0),
(9, 30, '10', 'degrtfhgyjkl;', 6, '1', 'software', 4, '4', 'ostica', '2010', '2010', 'software', '', '--', '-', 'kaka\'umsaaf muuxannooo cimaa qabaachuu', 'ghjkl', 'Oromia_IP_Management_System_(2)1.pdf', '2', '20', '1', 'caala gezahegn tsegaye', 'cala', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabine2`
--
ALTER TABLE `cabine2`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `maqa_id` (`maqa_id`),
  ADD KEY `muxannoo` (`muxannoo`),
  ADD KEY `university_id` (`university_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabine2`
--
ALTER TABLE `cabine2`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cabine2`
--
ALTER TABLE `cabine2`
  ADD CONSTRAINT `cabine2_ibfk_1` FOREIGN KEY (`maqa_id`) REFERENCES `cabine` (`cab_id`),
  ADD CONSTRAINT `cabine2_ibfk_2` FOREIGN KEY (`muxannoo`) REFERENCES `years` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
