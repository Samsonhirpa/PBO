-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 11:23 AM
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
-- Table structure for table `age`
--

CREATE TABLE `age` (
  `ag_id` int(11) NOT NULL,
  `age` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`ag_id`, `age`) VALUES
(1, '<5'),
(2, '6-10'),
(3, '11-15'),
(4, '16-18');

-- --------------------------------------------------------

--
-- Table structure for table `all_year`
--

CREATE TABLE `all_year` (
  `yr_id` int(11) NOT NULL,
  `yr_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_year`
--

INSERT INTO `all_year` (`yr_id`, `yr_name`) VALUES
(1, '2010 EC'),
(2, '2011 EC'),
(3, '2012 EC'),
(4, '2013 EC'),
(5, '2014 EC');

-- --------------------------------------------------------

--
-- Table structure for table `cabine`
--

CREATE TABLE `cabine` (
  `cab_id` int(11) NOT NULL,
  `maqa` varchar(222) NOT NULL,
  `sala_id` varchar(255) NOT NULL,
  `umuri` varchar(222) NOT NULL,
  `bilbila` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `dhalotaG_id` varchar(222) NOT NULL,
  `dhalotaA_id` varchar(222) NOT NULL,
  `haalamaati` varchar(222) NOT NULL,
  `bayinaM` varchar(222) NOT NULL,
  `bayinaF` varchar(222) NOT NULL,
  `file_name` varchar(222) NOT NULL,
  `zon_id` varchar(222) NOT NULL,
  `woreda_id` varchar(222) NOT NULL,
  `operator` varchar(222) NOT NULL,
  `created_by1` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabine`
--

INSERT INTO `cabine` (`cab_id`, `maqa`, `sala_id`, `umuri`, `bilbila`, `email`, `dhalotaG_id`, `dhalotaA_id`, `haalamaati`, `bayinaM`, `bayinaF`, `file_name`, `zon_id`, `woreda_id`, `operator`, `created_by1`) VALUES
(27, 'Shuumii Garbiche', '1', '66', '0987654321', 'shuiinhirpa@gmail.com', '38', '349', '1', '1', '0', 'ss3.jpg', '20', '81', 'shumi garbiche tsegaye', 'shumii'),
(28, 'tamiru kabada', '1', '26', '0922222524', 'smartallsoftware@gmail.com', '30', '231', '1', '0', '0', 'WIN_20190913_05_02_21_Pro1.jpg', '20', '1', 'caala gezahegn tsegaye', 'cala'),
(29, 'Tolasa Bacha', '1', '30', '0987654321', 'Samsonhirpa@gmail.com', '35', '165', '1', '1', '1', 'abiy11.jpg', '20', '81', 'shumi garbiche tsegaye', 'shumii'),
(30, 'Samson Hirpa Tola', '1', '27', '0922222524', 'smartallsoftware@gmail.com', '36', '100', '1', '0', '0', 'a.jpg', '20', '1', 'caala gezahegn tsegaye', 'cala');

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

-- --------------------------------------------------------

--
-- Table structure for table `carboncopy`
--

CREATE TABLE `carboncopy` (
  `id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `ipid` varchar(220) NOT NULL,
  `lanip` varchar(200) NOT NULL,
  `wanip` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `servicenumber` varchar(200) NOT NULL,
  `ethiocontact` varchar(200) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `zone_id` varchar(255) NOT NULL,
  `region_id` varchar(255) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `speed` varchar(220) NOT NULL,
  `servicetype` varchar(220) NOT NULL,
  `media` varchar(220) NOT NULL,
  `kebele` varchar(200) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `post_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carboncopy`
--

INSERT INTO `carboncopy` (`id`, `orgname`, `ipid`, `lanip`, `wanip`, `date`, `servicenumber`, `ethiocontact`, `file_name`, `zone_id`, `region_id`, `woreda`, `speed`, `servicetype`, `media`, `kebele`, `operator`, `created_by`, `post_status`) VALUES
(280, 'Ali Didu woreda office', 'OIP280', '86', '', '', '9990013394', '', '', '20', '2', '249', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(281, 'Ameya_Gindo woreda office', 'OIP281', '87', '', '', '9990013645', '', '', '17', '2', '258', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(282, 'Borecha woreda office', 'OIP282', '88', '', '', '9990009784', '', '', '19', '2', '405', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(283, 'Chawaka Wereda Administration Office', 'OIP283', '89', '', '', '9990021586', '', '', '19', '2', '404', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(284, 'Chorra Bottor Wereda office', 'OIP284', '10.73.33.0/24', '', '', '9990030382', '', '', '18', '2', '202', '0.5', 'VSAT', 'VSAT', '', 'Abdi', '', 1),
(285, 'Chora woreda office', 'OIP285', '90', '', '', '9990009805', '', '', '19', '2', '403', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(286, 'Darimu woreda office', 'OIP286', '91', '', '', '9990009813', '', '', '20', '2', '244', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(287, 'Dedesa woreda office', 'OIP287', '92', '', '', '9990009826', '', '', '19', '2', '402', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(288, 'Dedo woreda office', 'OIP288', '93', '', '', '9990009827', '', '', '18', '2', '209', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(289, 'Dega Meko woreda office', 'OIP289', '94', '', '', '9990009808', '', '', '19', '2', '401', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(290, 'Diddu Wereda office', 'OIP290', '95', '', '', '9990024261', '', '', '20', '2', '249', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(291, 'Ilu woreda office', 'OIP291', '96', '', '', '9990024326', '', '', '17', '2', '265', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(292, 'Jimma Woreda office', 'OIP292', '97', '', '', '9990026690', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(293, 'Jimma Town administration office', 'OIP293', '98', '', '', '9990026987', '', '', '18', '2', '276', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(294, 'Jimma Zone Police office', 'OIP294', '99', '', '', '9990040416', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(295, 'Jimma Zone Transport office', 'OIP295', '100', '', '', '9990040418', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(296, 'Jimma Zone health office', 'OIP296', '101', '', '', '9990040417', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(297, 'Limu Kosa_Genet woreda office', 'OIP297', '102', '', '', '9990009792', '', '', '18', '2', '223', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(298, 'Limu Seka_Atenago woreda office', 'OIP298', '103', '', '', '9990009793', '', '', '18', '2', '204', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(299, 'Mana woreda office', 'OIP299', '104', '', '', '9990009801', '', '', '18', '2', '210', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(300, 'Ilu aba bora Zonal Transport offcie', 'OIP300', '105', '', '', '9990040422', '', '', '20', '2', '68', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(301, 'Ilu aba bora Zonal Fiance office', 'OIP301', '106', '', '', '9990040424', '', '', '20', '2', '68', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(302, 'ilu aba bora Zonal Adminstrative office', 'OIP302', '107', '', '', '9990040426', '', '', '20', '2', '68', '15', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(303, 'Ill aba bora Zone police offcie', 'OIP303', '108', '', '', '9990040419', '', '', '20', '2', '68', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(304, 'Omonada woreda office', 'OIP304', '109', '', '', '9990009842', '', '', '18', '2', '218', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(305, 'Sekoru Wereda office', 'OIP305', '110', '', '', '9990013154', '', '', '18', '2', '220', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(306, 'Sentema_Gatira woreda office', 'OIP306', '111', '', '', '9990009851', '', '', '18', '2', '203', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(307, 'Sigmo Wereda office', 'OIP307', '112', '', '', '9990013146', '', '', '18', '2', '205', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(308, 'Teltele woreda office', 'OIP308', '10.76.129.0/24', '', '', '9990024315', '', '', '16', '2', '96', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(309, 'Tiro Afeta_Dembi Wereda office', 'OIP309', '113', '', '', '9990013134', '', '', '18', '2', '206', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(310, 'South West Showa Zone Police office', 'OIP310', '10.67.217.0/24', '', '', '9990048966', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(311, 'South West Showa Zone Technic and vocational office', 'OIP311', '10.67.219.0/24', '', '', '9990048965', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(312, 'South West Showa Zone roads office', 'OIP312', '10.67.223.0/24', '', '', '9990048968', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(313, 'South West Showa Zone Agriculture office', 'OIP313', '10.67.221.0/24', '', '', '9990048967', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(314, 'Wonchi woreda office', 'OIP314', '114', '', '', '9990021540', '', '', '17', '2', '259', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(315, 'Ilu aba bora zone higher court', 'OIP315', '10.1275.0/24', '', '', '9990088600', '', '', '20', '2', '68', '25', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(316, 'IluAba Bora zone Prison house administration office ', 'OIP316', '10.72.27.0/24', '', '', '9990103603', '', '', '20', '2', '68', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(317, 'IluAba Bora Zone Investment office ', 'OIP317', '10.72.31.0/24', '', '', '9990103605', '', '', '20', '2', '68', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(318, 'Borena zone Water & energy office ', 'OIP318', '10.73.15.0/24', '', '', '9990103588', '', '', '16', '2', '66', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(319, 'Borena zone Health Office ', 'OIP319', '10.72.249.0/24', '', '', '9990103583', '', '', '16', '2', '66', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(320, 'South west shoa zone serategna & mehiberawi guday office ', 'OIP320', '10.74.187.0/24', '', '', '9990103591', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(321, 'South west shoa zone Zone administration office ', 'OIP321', '10.74.203.0/24', '', '', '9990103590', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(322, 'South west shoa zone Health Office ', 'OIP322', '10.74.181.0/24', '', '', '9990103589', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(323, 'South west shoa zone Industry & town development office', 'OIP323', '10.74.201.0/24', '', '', '9990103586', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(324, 'Jimma Zone Irrigation water work authority office', 'OIP324', '10.75.131.0/24', '', '', '9990103517', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(325, 'Jimma Zone Investment office ', 'OIP325', '10.75.119.0', '', '', '9990103515', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(326, 'Jimma Zone serategna & mehiberawi guday office ', 'OIP326', '10.75.101.0/24', '', '', '9990103514', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(327, 'Jimma Zone Culture and tourism office  ', 'OIP327', '10.75.127.0/24', '', '', '9990103510', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(328, 'Jimma Zone Government communication affair office ', 'OIP328', '10.75.125.0', '', '', '9990103508', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(329, 'Jimma Zone Justice office ', 'OIP329', '10.75.99.0/24', '', '', '9990103507', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(330, 'Jimma Zone Water & energy office ', 'OIP330', '10.75.129.0/24', '', '', '9990103506', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(331, 'Jimma Zone Prison house administration office ', 'OIP331', '10.75.115.0/24', '', '', '9990103505', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(332, 'Jimma Town Driving license training center', 'OIP332', '10.68.73.0 /24', '', '', '9990088615', '', '', '18', '2', '276', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(333, 'Jimma zone Driving license training center', 'OIP333', '10.68.29.0 /24', '', '', '9990088605', '', '', '18', '2', '65', '25', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(334, 'I/A/Bora zoneDriving license training center', 'OIP334', '10.68.31.0 /24', '', '', '9990088618', '', '', '20', '2', '68', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(335, 'Woliso Driving license training center', 'OIP335', '10.68.53.0 /24', '', '', '9990088621', '', '', '17', '2', '279', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(336, 'Borana zone Driving license training center', 'OIP336', '10.68.41.0 /24', '', '', '9990089495', '', '', '16', '2', '66', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(337, 'Buno Bedele zone civil service and good governance office', 'OIP337', '10.76.53.0/24', '', '', '84100059504', '', '', '19', '2', '271', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(338, 'Jimma Zone trade and Market development office ', 'OIP338', '10.76.21.0/24', '', '', '45100052445', '', '', '18', '2', '65', '25', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(339, 'Woliso town civil service and good governance office', 'OIP339', '10.76.23.0/24', '', '', '98100052588', '', '', '17', '2', '261', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(340, 'Metu woreda public service and Human Resource Development office', 'OIP340', '10.76.55.0/24', '', '', '29100061969', '', '', '20', '2', '253', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(342, 'Borena Zone trade and Market development office ', 'OIP342', '10.72.179.0/24', '', '', '79100062919', '', '', '16', '2', '66', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(343, 'Bedela Town public service and Human Resource Development office', 'OIP343', '10.75.209.0/24', '', '', '50100084230', '', '', '19', '2', '278', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(344, 'Sedin sodo Woreda public service and Human Resource Development office', 'OIP344', '10.75.117.0/24', '', '', '67100084247', '', '', '17', '2', '264', '1', 'VPN', 'Copper', '', 'Abdi', '', 1),
(346, 'Iluaba bora Zone trade and Market development office ', 'OIP346', '10.73.43.0/24', '', '', '76100062916', '', '', '20', '2', '68', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(347, 'Buno bedele Zone trade and Market development office ', 'OIP347', '10.73.35.0/24', '', '', '75100062915', '', '', '19', '2', '271', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(348, 'Buno Bedele Zone Transport authority', 'OIP348', '10.65.49.0/24', '', '', '10100103610', '', '', '19', '2', '271', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(349, 'Wolisa Town Transport authority', 'OIP349', '10.65.53.0/24', '', '', '12100103612', '', '', '17', '2', '279', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(350, 'Kersa Malima woredapublic service and Human Resource Development office', 'OIP350', '10.73.51.0/24', '', '', '444444528961', '', '', '17', '2', '267', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(351, 'Agaro town civil service and good governance office ', 'OIP351', '10.76.14.0/24', '', '', '88100127568', '', '', '18', '2', '215', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(352, 'Bedele woreda public service and Human Resource Development office', 'OIP352', '10.64.207.0/24', '', '', '37100095567', '', '', '19', '2', '396', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(353, 'Bedele woreda communication office ', 'OIP353', '10.64.208.0/24', '', '', '38100095568', '', '', '19', '2', '396', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(354, 'Seka Chekorsa woreda communication office ', 'OIP354', '10.64.221.0/24', '', '', '46100095576', '', '', '18', '2', '212', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(355, 'Gumay Woreda cooprative union office ', 'OIP355', '10.64.222.0/24', '', '', '47100095577', '', '', '18', '2', '211', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(356, 'Gumay Woreda justice office ', 'OIP356', '10.64.223.0/24', '', '', '48100095578', '', '', '18', '2', '211', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(357, 'Becho woreda public service and Human Resource Development office', 'OIP357', '10.64.244.0/24', '', '', '60100095590', '', '', '17', '2', '262', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(358, 'Becho woreda Agriculture & natural resource development office', 'OIP358', '10.64.245.0/24', '', '', '61100095591', '', '', '17', '2', '262', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(359, 'Wonchi woreda public service and Human Resource Development office', 'OIP359', '10.64.247.0/24', '', '', '62100095592', '', '', '17', '2', '259', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(360, 'Wonchi woreda Agriculture & natural resource development office', 'OIP360', '10.64.249.0/24', '', '', '63100095593', '', '', '17', '2', '259', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(361, 'Ole Woreda addministration office', 'OIP361', '10.65.32.0/24', '', '', '46100095666', '', '', '20', '2', '251', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(362, 'Moyale Woreda addministration office', 'OIP362', '10.65.30.0/24', '', '', '47100095667', '', '', '16', '2', '89', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(363, 'Alge Sachi Woreda office', 'OIP363', '115', '', '', '9990013098', '', '', '20', '2', '245', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(364, 'Becho Wereda office', 'OIP364', '116', '', '', '9990014543', '', '', '17', '2', '262', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(365, 'Billo Nopha Wereda', 'OIP365', '117', '', '', '9990104035', '', '', '20', '2', '254', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(366, 'Dabo Hanna woreda office', 'OIP366', '118', '', '', '9990014545', '', '', '19', '2', '400', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(368, 'Dillo Wereda office', 'OIP368', '10.67.161.0/24', '', '', '9990030380', '', '', '16', '2', '95', '0.5', 'VSAT', 'VSAT', '', 'Abdi', '', 1),
(369, 'Dire Wereda office', 'OIP369', '10.75.193.0/24', '', '', '9990013155', '', '', '16', '2', '88', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(370, 'Dorani Woreda office', 'OIP370', '119', '', '', '9990014546', '', '', '20', '2', '246', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(371, 'Gechi woreda office', 'OIP371', '120', '', '', '9990009863', '', '', '19', '2', '399', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(372, 'Gera woreda office', 'OIP372', '121', '', '', '9990013177', '', '', '18', '2', '217', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(373, 'Goma_Agaro woreda office', 'OIP373', '122', '', '', '9990013195', '', '', '18', '2', '200', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(374, 'gumay wereda office', 'OIP374', '123', '', '', '9990038927', '', '', '18', '2', '211', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(375, 'Hallu Woreda office', 'OIP375', '124', '', '', ' 9990014547 ', '', '', '20', '2', '248', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(376, 'Halu Bure woreda iffice', 'OIP376', '125', '', '', '9990009876', '', '', '20', '2', '247', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(377, 'Kersa Woreda office', 'OIP377', '126', '', '', '9990009937', '', '', '18', '2', '208', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(378, 'Kersa_Serbo woreda office', 'OIP378', '127', '', '', '9990009908', '', '', '18', '2', '208', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(379, 'Meko Wereda office', 'OIP379', '128', '', '', '9990014548', '', '', '19', '2', '398', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(380, 'Ilu Aba Bora Zone civil service office', 'OIP380', '129', '', '', '9990018411', '', '', '20', '2', '68', '25', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(381, 'Miyo Wereda office', 'OIP381', '10.67.97.0/24', '', '', '9990030368', '', '', '16', '2', '93', '0.5', 'VSAT', 'VSAT', '', 'Abdi', '', 1),
(382, 'Moyale woreda office', 'OIP382', '10.76.65.0/24', '', '', '9990013173', '', '', '16', '2', '89', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(383, 'Nonno Benja Wereda office', 'OIP383', '10.105.', '', '', '9990014549', '', '', '18', '1', '207', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(384, 'Shebe Wereda office', 'OIP384', '131', '', '', '9990016111', '', '', '18', '2', '201', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(385, 'Soddo Dachi Wereda', 'OIP385', '132', '', '', '9990030373', '', '', '17', '2', '268', '0.5', 'VSAT', 'VSAT', '', 'Abdi', '', 1),
(386, 'Tole Wereda office', 'OIP386', '133', '', '', '9990013116', '', '', '17', '2', '266', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(387, 'Tulu Bolo_Becho Wereda office', 'OIP387', '134', '', '', '9990009944', '', '', '17', '2', '262', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(388, 'South West Showa Zone Tranasport office ', 'OIP388', '135', '', '', '9990032035', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(389, 'Yabello Woreda office', 'OIP389', '10.76.193.0/24', '', '', '9990009895', '', '', '16', '2', '86', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(390, 'Borena Zone civil sevice office', 'OIP390', '136', '', '', '9990018414', '', '', '16', '2', '66', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(391, 'Yayu Hurumu Woreda office', 'OIP391', '137', '', '', '9990009896', '', '', '20', '2', '256', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(392, 'South west shoa zone Prison house administration office ', 'OIP392', '10.74.223.0/24', '', '', '9990103481', '', '', '17', '2', '64', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(393, 'hurumu woreda civil service and good governance office', 'OIP393', '10.72.7.0/24', '', '', '18100017868', '', '', '20', '2', '255', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(394, 'nono sale woreda civil service and good governance office', 'OIP394', '10.72.5.0/24', '', '', '19100017869', '', '', '20', '2', '257', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(395, 'Bedele woreda civil service and good', 'OIP395', '10.72.235.0/24', '', '', '49100032059', '', '', '19', '2', '396', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(396, 'South west Showa Zone civel service office', 'OIP396', '10.71.150.2', '', '', '990046862', '', '', '17', '2', '64', '0.5', 'VSAT', 'VSAT', '', 'Abdi', '', 1),
(398, 'jimma zone civil service and good governance office', 'OIP398', ' 10.73.35.0/24', '', '', '70100038430', '', '', '18', '2', '65', '25', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(399, 'Dewo woreda public service and Human Resource Development office', 'OIP399', '10.75.105.0/24', '', '', '68100084248', '', '', '17', '2', '263', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(400, 'Metu Town  public service and Human Resource Development office', 'OIP400', '10.75.73.0/24', '', '', '18100084558', '', '', '20', '2', '252', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(401, 'Woliso Town administration office ', 'OIP401', '10.64.157.0/24', '', '', '99100090589', '', '', '17', '2', '261', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(402, 'Jimma Town public service office ', 'OIP402', '10.64.158.0/24', '', '', '10100090590', '', '', '18', '2', '276', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(403, 'Buno Bedele Zone higher court ', 'OIP403', '10.64.189.0/24', '', '', '68100091008', '', '', '19', '2', '271', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(404, 'Jimma Zone higher court ', 'OIP404', '10.64.185.0/24', '', '', '70100091010', '', '', '18', '2', '65', '15', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(405, 'Borena Zone higher court ', 'OIP405', '10.64.186.0/24', '', '', '71100091011', '', '', '16', '2', '66', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(406, 'South-West Shewa Zone Administrative office', 'OIP406', '10.68.58.0/24', '10.129.202.248', '', '18100168778', '', '', '17', '2', '64', '25', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(407, 'Jimma Zone Administration Office', 'OIP407', '10.67.74.0/24', '', '', '29100152499', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(408, 'Borecha woreda Administration office ', 'OIP408', '10.67.112.0/24', '', '', '14100252874', '', '', '19', '2', '405', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(409, 'Tiro Afeta woreda Agriculture office ', 'OIP409', '10.67.124.0/24', '', '', '19100252879', '', '', '18', '2', '206', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(410, 'Kersa woreda Administration office ', 'OIP410', '10.67.126.0/24', '', '', '20100252880', '', '', '18', '2', '208', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(411, 'Darimu woreda Administration office ', 'OIP411', '10.67.127.0/24', '', '', '21100252881', '', '', '20', '2', '244', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(412, 'Alige Sachi woreda Administration office ', 'OIP412', '10.67.129.0/24', '', '', '22100252882', '', '', '20', '2', '245', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(413, 'Dire woreda Administration office ', 'OIP413', '10.67.136.0/24', '', '', '26100252886', '', '', '16', '2', '88', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(414, 'Kersa Malima woreda Public service human resource development office', 'OIP414', '10.67.162.0/24', '', '', '39100252899', '', '', '17', '2', '267', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(415, 'Sodo Dachi woreda Public service human resource development office', 'OIP415', '10.67.164.0/24', '', '', '10100253050', '', '', '17', '2', '268', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(416, 'Kersa Malima Woreda Trade office', 'OIP416', '10.80.3.0/24', '10.130.252.236', '', '76100280496', '', '', '17', '2', '267', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(417, 'Sodo dacha Woreda Trade office', 'OIP417', '10.80.4.0/24', '10.130.252.220', '', '77100280497', '', '', '17', '2', '268', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(418, 'Metu Town Trade office', 'OIP418', '10.85.53.0/24', '10.145.244.156/29', '', '76100280856', '', '', '20', '2', '252', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(419, 'Nono Benja Woreda Trade office', 'OIP419', '10.85.55.0/24', '10.145.245.228/29', '', '77100280857', '', '', '18', '2', '207', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(420, 'Limu Seka Woreda Trade office', 'OIP420', '10.85.56.0/24', '10.145.244.180/29', '', '78100280858', '', '', '18', '2', '204', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(421, 'Shabe Sonbo Woreda Trade office', 'OIP421', '10.85.58.0/24', '10.145.244.92/29', '', '79100280859', '', '', '18', '2', '201', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(422, 'Sokoru Woreda Trade office', 'OIP422', '10.85.59.0/24', '10.145.244.84/29', '', '80100280860', '', '', '18', '2', '220', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(423, 'Teltele Woreda Trade office', 'OIP423', '10.85.79.0/24', '10.147.213.68', '', '82100280862', '', '', '16', '2', '96', '4', 'VPN', 'Copper', '', 'Abdi', '', 1),
(424, 'Jimma Polly Technical and vocational college  ', 'OIP424', '10.75.145.0/24', '10.145.245.212/29', '', '97100282317', '', '', '18', '2', '276', '15', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(425, 'Jimma Technical and vocational college  ', 'OIP425', '10.75.146.0/24', '10.145.245.164/29', '', '59100282099', '', '', '18', '2', '276', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(426, 'Wolliso Polly Technical and vocational college  ', 'OIP426', '10.75.168.0/24', '10.133.241.220', '', '56100282816', '', '', '17', '2', '279', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(427, 'Yabelo polly Technical and vocational college  ', 'OIP427', '10.75.217.0/24', '10.147.213.124', '', '84100282844', '', '', '16', '2', '86', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(428, 'Yabelo Pastoralist Technical and vocational college  ', 'OIP428', '10.75.218.0/24', '10.147.213.188', '', '85100282845', '', '', '16', '2', '86', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(429, 'Tulu Bolo Technical and vocational college  ', 'OIP429', '10.76.18.0/24', '10.130.253.60', '', '16100282416', '', '', '17', '2', '262', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(430, 'Lemen Technical and vocational college  ', 'OIP430', '10.76.19.0/24', '10.130.253.68', '', '17100282417', '', '', '17', '2', '267', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(431, 'Ameya Technical and vocational college  ', 'OIP431', '10.76.20.0/24', '10.130.253.84', '', '19100282419', '', '', '17', '2', '258', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(432, 'Chitu Technical and vocational college  ', 'OIP432', '10.76.22.0/24', '10.130.253.196', '', '98100282318', '', '', '17', '2', '259', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(433, 'Seden Sodo Technical and vocational college  ', 'OIP433', '10.76.24.0/24', '10.130.253.188', '', '20100282420', '', '', '17', '2', '264', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(434, 'Agaro Technical and vocational college  ', 'OIP434', '10.76.26.0/24', '10.145.244.212/29', '', '21100282421', '', '', '18', '2', '215', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(435, 'Setema Technical and vocational college  ', 'OIP435', '10.76.30.0/24', '10.145.244.228/29', '', '22100282422', '', '', '18', '2', '203', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(436, 'Asindabo Technical and vocational college  ', 'OIP436', '10.76.32.0/24', '10.145.246.36/29', '', '23100282423', '', '', '18', '2', '218', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(437, 'Sheki Technical and vocational college  ', 'OIP437', '10.76.33.0/24', '10.145.246.4/29', '', '24100282424', '', '', '18', '2', '209', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(438, 'Seka Technical and vocational college  ', 'OIP438', '10.76.34.0/24', '10.145.244.204/29', '', '25100282425', '', '', '18', '2', '212', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(439, 'Sigmo Technical and vocational college  ', 'OIP439', '10.76.36.0/24', '10.145.244.252/29', '', '26100282426', '', '', '18', '2', '205', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(440, 'Kersa Technical and vocational college  ', 'OIP440', '10.76.38.0/24', '10.145.245.252/29', '', '27100282427', '', '', '18', '2', '208', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(441, 'Metu polly Technical and vocational college  ', 'OIP441', '10.76.44.0/24', '10.145.245.236/29', '', '28100282428', '', '', '20', '2', '252', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(442, 'Metu Technical and vocational college  ', 'OIP442', '10.76.46.0/24', '10.145.245.244/29', '', '29100282429', '', '', '20', '2', '252', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(443, 'Metu Health science college  ', 'OIP443', '10.76.47.0/24', '10.145.246.44/29', '', '30100282430', '', '', '20', '2', '252', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(444, 'Darmu Technical and vocational college  ', 'OIP444', '10.76.48.0/24', '10.145.245.204/29', '', '31100282431', '', '', '20', '2', '244', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(445, 'Gore Technical and vocational college  ', 'OIP445', '10.76.52.0/24', '10.145.245.180/29', '', '33100282433', '', '', '20', '2', '251', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(446, 'Alege Technical and vocational college  ', 'OIP446', '10.76.54.0/24', '10.145.245.196/29', '', '34100282434', '', '', '20', '2', '245', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(447, 'Dabena Polly Technical and vocational college  ', 'OIP447', '10.78.78.0/24', '10.145.245.148/29', '', '23100282963', '', '', '19', '2', '278', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(448, 'Chora Technical and vocational college  ', 'OIP448', '10.78.81.0/24', '10.145.244.236/29', '', '25100282965', '', '', '19', '2', '403', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(449, 'Limu Kossa Woreda Court', 'OIP449', '10.75.75.0/24', '10.145.244.220/29', '', '21100282331', '', '', '18', '2', '223', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(450, 'Kerssa Woreda Court', 'OIP450', '10.75.77.0/24', '10.145.246.12/29', '', '22100282332', '', '', '18', '2', '208', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(451, 'Bedele Woreda Court', 'OIP451', '10.75.78.0/24', '10.145.245.124/29', '', '24100282334', '', '', '19', '2', '369', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(452, 'Dega Woreda Court', 'OIP452', '10.75.79.0/24', '10.145.245.140/29', '', '25100282335', '', '', '19', '2', '401', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(453, 'Chewaka Woreda Court', 'OIP453', '10.75.80.0/24', '10.145.245.4/29', '', '26100282336', '', '', '19', '2', '404', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(454, 'Yayo Woreda Court', 'OIP454', '10.75.81.0/24', '10.145.247.4/29', '', '27100282337', '', '', '20', '2', '256', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(455, 'Darimu Woreda Court', 'OIP455', '10.75.82.0/24', '10.145.245.188/29', '', '28100282338', '', '', '20', '2', '244', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(456, 'Bure Woreda Court', 'OIP456', '10.75.83.0/24', '10.145.245.156/29', '', '29100282339', '', '', '20', '2', '247', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(457, 'Elu Woreda Court', 'OIP457', '10.75.84.0/24', '10.130.253.92', '', '30100282340', '', '', '17', '2', '265', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(459, 'Becho Woreda Court', 'OIP459', '10.75.86.0/24', '10.130.253.172', '', '32100282342', '', '', '17', '2', '262', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(460, 'Moyale Woreda Court', 'OIP460', '10.75.112.0/24', '10.147.213.172', '', '77100282297', '', '', '16', '2', '89', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(461, 'Dere Woreda Court', 'OIP461', '10.75.113.0/24', '10.147.213.156', '', '39100282079', '', '', '16', '2', '88', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(462, 'Teltele Woreda Court', 'OIP462', '10.75.114.0/24', '10.147.213.100', '', '40100282080', '', '', '16', '2', '96', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(463, 'Ale Woreda court', 'OIP463', '10.75.106.0/24', '10.145.245.220/29', '', '87100280057', '', '', '20', '2', '251', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(464, 'Oromia Labour & Social Affiars Jimma Town Branche office ', 'OIP464', '10.67.224.0/24', '10.145.247.132', '', '26100301886', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(465, 'Oromia Labour & Social Affiars Bunno Bedele zone Branche office ', 'OIP465', '10.67.238.0/24', '10.145.247.140', '', '41100302351', '', '', '19', '2', '271', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(466, 'Oromia Labour & Social Affiars Borena zone Branche office ', 'OIP466', '10.67.240.0/24', '10.147.214.36', '', '43100302353', '', '', '16', '2', '66', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(467, 'Oromia Ethics & Anti Corruption Commission Jimma Branch', 'OIP467', '10.67.176.0/24', '10.145.247.124', '', '52100302362', '', '', '18', '2', '65', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(468, 'Ilu Aba Bora Zone Office', 'OIP468', '10.71.139.0/24', '10.71.138.2/29', '', '999900888196', '', '', '20', '2', '68', '0.5', 'VSAT', 'VSAT', '', 'Abdi', '', 1),
(469, 'Sebeta Town administration office', 'OIP469', '138', '', '', '662034590', '', '', '29', '2', '67', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(470, 'Modjo town civil service and good governance office', 'OIP470', '10.69.5.0/24', '', '', '662034590', '', '', '32', '2', '73', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(471, 'sebeta (Sebeta basis staiton)', 'OIP471', '10.105.1.184', '125.126.0.1', '', '662034590', '', '', '29', '1', '68', '25', 'VPN', 'Fiber', '', 'Abdi', '', 1),
(472, 'Sebeta Town public service office ', 'OIP472', '10.64.177.0/24', '', '', '662034590', '', '', '29', '2', '69', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(473, 'Mojo Town public service office ', 'OIP473', '10.64.183.0/24', '', '', '662034590', '', '', '32', '2', '74', '15', 'VPN', 'Copper', '', 'Abdi', '', 1),
(474, 'Sebeta Polly Technical and vocational college  ', 'OIP474', '10.75.157.0/24', '10.129.225.68', '', '662034590', '', '', '29', '2', '70', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(475, 'Modjo Technical and vocational college  ', 'OIP475', '10.75.164.0/24', '10.141.248.244/29', '', '662034590', '', '', '32', '2', '75', '9', 'VPN', 'Copper', '', 'Abdi', '', 1),
(476, 'Sebata City Woreda Court', 'OIP476', '10.75.104.0/24', '10.129.225.76', '', '662034590', '', '', '29', '2', '71', '15', 'VPN', 'copper', '', 'Abdi', '', 1),
(478, 'Oromia Vital registration Agency Modjo Town Kebele 01', 'OIP478', '10.68.103.0/24', '', '', '662034590', '', '', '32', '2', '76', '2', 'VPN', 'Copper', '', 'Abdi', '', 1),
(479, 'Oromia Vital registration Agency modjo Town Kebele 02', 'OIP479', '10.68.104.0/24', '', '', '662034590', '', '', '32', '2', '77', '2', 'VPN', 'Copper', '', 'Abdi', '', 1),
(485, 'editor working', '654', '45.21.15.38', '125.126.0.1', '2021-07-27', '65432', 'dg', '', '20', '1', '80', '', '', '', 'bhj', 'Imiru Deresa Feyisa', 'ebentu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `edu_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `edu_level`) VALUES
(1, 'PHD'),
(2, 'Masters'),
(3, 'Degree'),
(4, 'Depiloma'),
(5, 'Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `education2`
--

CREATE TABLE `education2` (
  `id` int(11) NOT NULL,
  `edu_level2` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `year`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30');

-- --------------------------------------------------------

--
-- Table structure for table `freeip`
--

CREATE TABLE `freeip` (
  `id` int(11) NOT NULL,
  `ipid` varchar(220) NOT NULL,
  `lanip` varchar(222) NOT NULL,
  `wanip` varchar(200) NOT NULL,
  `servicenumber` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `woreda` varchar(200) NOT NULL,
  `region_id` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `free_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freeip`
--

INSERT INTO `freeip` (`id`, `ipid`, `lanip`, `wanip`, `servicenumber`, `date`, `zone_id`, `woreda`, `region_id`, `operator`, `created_by`, `free_status`) VALUES
(1, '654', '192.168.0.1', '', '', '2021-07-07', 46, '41', 1, 'Abdi Fikadu Etana', 'admin2', ''),
(2, '567', '45.21.15.36', '', '', '2021-07-08', 46, '41', 1, 'Abdi Fikadu Etana', 'admin2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `haalamaati`
--

CREATE TABLE `haalamaati` (
  `id` int(11) NOT NULL,
  `haala` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haalamaati`
--

INSERT INTO `haalamaati` (`id`, `haala`) VALUES
(1, 'kan fuudhe/heerumte'),
(2, 'kan hinfuudhin/hinheerumne');

-- --------------------------------------------------------

--
-- Table structure for table `ipcomment`
--

CREATE TABLE `ipcomment` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `woreda` varchar(200) NOT NULL,
  `region_id` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipcomment`
--

INSERT INTO `ipcomment` (`id`, `fname`, `email`, `date`, `subject`, `text`, `zone_id`, `woreda`, `region_id`, `operator`, `created_by`) VALUES
(1, 'Gutu', 'negaligngezahegn@gmail.com', '2020-12-24', 'net', 'jhvjdbnvdjh', 4, '1', 1, 'basho mamed wallagaa', 'basho'),
(2, 'Ruta', 'negaligngezahegn@gmail.com', '2020-12-24', 'net', 'dgvcbhdcncmkckncnjvdcvnm', 4, '1', 1, 'basho mamed wallagaa', 'basho'),
(4, 'Samson Hirpa', 'smartallsoftware@gmail.com', '2021-03-10', 'need help', 'sdfghnjkl', 14, '4', 1, 'Gutu Blocketi Company', 'admin'),
(5, 's', 'samsonhirpa@gmail.com', '2021-06-10', 's', 'sssssssssssssssssssss', 46, '41', 1, 'Abdi Fikadu Etana', 'admin2'),
(6, 'f', 'samsonhirpa@gmail.com', '2021-06-11', 'g', 'ggg', 46, '41', 1, 'Abdi Fikadu Etana', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `kebele`
--

CREATE TABLE `kebele` (
  `kid` int(11) NOT NULL,
  `kname` varchar(222) NOT NULL,
  `town_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebele`
--

INSERT INTO `kebele` (`kid`, `kname`, `town_id`) VALUES
(1, '01', 1),
(2, '02', 1),
(3, '01', 2),
(4, '02', 2),
(5, '01', 3),
(6, '02', 4),
(7, '03', 5),
(8, '05', 6),
(9, '10', 7),
(10, '07', 8),
(11, '03', 9),
(12, '01', 10),
(13, '04', 11),
(14, '01', 12),
(15, '02', 8),
(16, '06', 13),
(17, '11', 14),
(18, '06', 15),
(19, 'jamo', 16),
(20, '15', 17),
(21, 'Dukam', 18),
(22, '04', 19),
(23, '05', 20),
(24, '09', 21);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`l_id`, `l_name`) VALUES
(1, 'Aanaa'),
(2, 'Godina'),
(3, 'Naanno');

-- --------------------------------------------------------

--
-- Table structure for table `migrate_letter`
--

CREATE TABLE `migrate_letter` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `refno` varchar(100) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `ipid` varchar(220) NOT NULL,
  `lanip` varchar(200) NOT NULL,
  `sitecurrent` varchar(200) NOT NULL,
  `sitetomove` varchar(200) NOT NULL,
  `servicenumber` varchar(200) NOT NULL,
  `site_ict` varchar(200) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `woreda` varchar(200) NOT NULL,
  `region_id` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `post_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrate_lshow`
--

CREATE TABLE `migrate_lshow` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `refno` varchar(100) NOT NULL,
  `oldservice_type` varchar(255) NOT NULL,
  `lanip` varchar(200) NOT NULL,
  `ipid` varchar(200) NOT NULL,
  `servicenumber` varchar(220) NOT NULL,
  `newservice_type` varchar(255) NOT NULL,
  `band_width` varchar(200) NOT NULL,
  `site_ict` varchar(200) CHARACTER SET utf8 NOT NULL,
  `sitephone` varchar(222) NOT NULL,
  `osticafinance` varchar(200) CHARACTER SET utf8 NOT NULL,
  `osticaphone` varchar(222) NOT NULL,
  `zname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `wname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `kebele` varchar(200) CHARACTER SET utf8 NOT NULL,
  `organization` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_employee`
--

CREATE TABLE `new_employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `position` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_employee`
--

INSERT INTO `new_employee` (`id`, `fname`, `lname`, `sex`, `zone_id`, `region_id`, `town_id`, `kebele`, `position`, `phoneno`, `email`, `dob`) VALUES
(1, 'fayo', 'cala', 'Male', 1, 2, 2, 3, 'Admin', '0923445', 'negaligngezaheg@gmail.com', '0000-00-00'),
(2, 'fayo', 'cala', 'Female', 1, 2, 2, 3, 'Admin', '0923445', 'negaligngezaheg@gmail.com', '2020-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `no_ofngo`
--

CREATE TABLE `no_ofngo` (
  `id` int(11) NOT NULL,
  `levelof_agreement` varchar(200) NOT NULL,
  `ngoname` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `Duration_project` varchar(255) NOT NULL,
  `dirmale` varchar(200) NOT NULL,
  `dirfemale` varchar(200) NOT NULL,
  `inmale` varchar(200) NOT NULL,
  `infemale` varchar(200) NOT NULL,
  `promale` varchar(200) NOT NULL,
  `profemale` varchar(200) NOT NULL,
  `profmtotal` varchar(200) NOT NULL,
  `susmale` varchar(200) NOT NULL,
  `susfemale` varchar(200) NOT NULL,
  `susfmtotal` varchar(200) NOT NULL,
  `age_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_ofngo`
--

INSERT INTO `no_ofngo` (`id`, `levelof_agreement`, `ngoname`, `budget`, `Duration_project`, `dirmale`, `dirfemale`, `inmale`, `infemale`, `promale`, `profemale`, `profmtotal`, `susmale`, `susfemale`, `susfmtotal`, `age_id`) VALUES
(7, 'Zone', '', '200', '10', '200', '300', '20', '30', '100', '200', '300', '3000', '300', '3300', 2),
(8, 'Region', 'save the children', '40000', '3', '10', '20', '30', '20', '10', '20', '30', '30', '40', '70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `osticaletters`
--

CREATE TABLE `osticaletters` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `refno` varchar(100) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `lanip` int(11) NOT NULL,
  `band_width` varchar(200) NOT NULL,
  `site_ict` varchar(200) CHARACTER SET utf8 NOT NULL,
  `sitephone` varchar(222) NOT NULL,
  `osticafinance` varchar(200) CHARACTER SET utf8 NOT NULL,
  `osticaphone` varchar(222) NOT NULL,
  `zname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `wname` varchar(200) CHARACTER SET utf8 NOT NULL,
  `kebele` varchar(200) CHARACTER SET utf8 NOT NULL,
  `organization` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `osticaletters`
--

INSERT INTO `osticaletters` (`id`, `date`, `refno`, `service_type`, `lanip`, `band_width`, `site_ict`, `sitephone`, `osticafinance`, `osticaphone`, `zname`, `wname`, `kebele`, `organization`) VALUES
(14, '2021-07-06', '', 'ADSL', 2356, '5mb', 'dfds', 'fdfdf', 'dfdf', 'dfdf', 'khgb', 'dfuihd', 'dfdgf', 'sdfdg');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Add User', 'Description', 1, '2019-03-10 15:49:31', '2019-03-09 20:42:05', 'deju', 'deju');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `r_id` int(11) NOT NULL,
  `r_name` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`r_id`, `r_name`) VALUES
(1, '-- select --'),
(2, 'Oromia');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `password`) VALUES
(1, 'samsonhirpa@gmail.com', 'sami'),
(2, 'negalign@gmail.com', 'nega');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `title` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `file_name`, `created_at`, `title`, `subject`, `detail`, `created_by`) VALUES
(1, 'durgo_user_maul.docx', '2020-08-09 14:03:48', 'STOCK MANAGEMENT SYSTEM', 'Payment Process( Paypal only work )', ' fwdszgghfhf', ''),
(2, 'Stack_Overflow.docx', '2020-08-09 14:59:03', 'Logo Design', 'Payment Process', ' sdfsdfsdfsdf', ''),
(3, '95272274_2975243962702265_3572212527301394432_o.jpg', '2020-08-11 08:08:00', 'STOCK MANAGEMENT SYSTEM', 'Payment Process( Paypal only work )', ' eiohr\'o; agj;qkm', ''),
(4, '2nd_Final_proposal.docx', '2020-08-11 15:31:34', 'market info', 'bddddo', ' bddddo', ''),
(5, '2nd_Final_proposal1.docx', '2020-08-12 08:28:00', 'market info', 'bddddo', ' HBJVDHJDNVK', ''),
(6, '2nd_Final_proposal2.docx', '2020-08-21 09:21:12', 'market info', 'bddddo', ' uijokp', ''),
(7, 'Ask_Question.docx', '2020-08-24 15:51:03', 'market info', 'bddddo', ' ghfkjl', ''),
(8, 'Api_design.docx', '2020-08-24 16:23:09', 'market info', 'bddddo', ' vbnmnncnmcxn', 'shime'),
(9, '2nd_Final_proposal3.docx', '2020-08-24 16:29:07', 'market info', 'bddddo', ' fghjkml', 'nege');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `description`) VALUES
(1, 'Admini Naannoo', 'Admin Can Do any thing '),
(2, 'Admini Hundaa', 'Manager can do add user,role...'),
(3, 'Admini Aanaa', 'Data Collectors /Data Encoding '),
(4, 'Adminii Godiinaa', 'zone level admin ');

-- --------------------------------------------------------

--
-- Table structure for table `sadarka`
--

CREATE TABLE `sadarka` (
  `sd_id` int(11) NOT NULL,
  `sd_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sadarka`
--

INSERT INTO `sadarka` (`sd_id`, `sd_name`) VALUES
(1, 'Degree'),
(2, 'Masters');

-- --------------------------------------------------------

--
-- Table structure for table `sektera`
--

CREATE TABLE `sektera` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sektera`
--

INSERT INTO `sektera` (`s_id`, `s_name`) VALUES
(1, 'Paartii Badhaadhinaa'),
(2, 'Waajjira Pirezdaantii '),
(3, 'B/Maallaqaa '),
(4, 'FQO'),
(5, 'B / Abbaa Alaangaa '),
(6, 'KNFMM'),
(7, 'Komiishinii Maneen sirreessaa'),
(8, 'E /Galmeessa Sivilii '),
(9, 'B/Bishaaniifi inarjii '),
(10, 'B/Kominikeeshini'),
(11, 'K K M '),
(12, 'B B N O '),
(13, 'W/Milishaa '),
(14, 'BATO'),
(15, 'GGAO'),
(16, 'Inistiitutii qorannoofi qo’annoo oromoo'),
(17, 'Komishinii Turiizimii'),
(18, 'A T  Albuudaa '),
(19, 'B /PSQMN'),
(20, 'ATSTO'),
(21, 'W/OPP'),
(22, 'B/Qonnaa '),
(23, 'B/Fayyaa '),
(24, 'B B O '),
(25, 'B/Dh D Daa’imanii '),
(26, 'B/Lafaa '),
(27, 'B/ Galiiwwaanii '),
(28, 'B/ Carraa hojii uumu fi ogummaa'),
(29, 'B/ Daldalaafi m/ gabaa '),
(30, 'E/Geejjibaa '),
(31, 'B/investmeentiif industrii'),
(32, 'Korp.misooma paarkii '),
(33, 'B/Daandii fi Loojestiksii'),
(34, 'A T E naannoo '),
(35, 'EBWHG'),
(36, 'W/ Caffee'),
(37, 'B/ Jalliisiifi horsiise Bulaa '),
(38, 'KHSB fi kaafamtoota misoomaa'),
(39, 'IQQ'),
(40, 'ISFO'),
(41, 'B/H/Hawwasummaa '),
(42, 'E B DH Q '),
(43, 'DH B B B '),
(44, 'B/ M M M '),
(45, 'A T Konistrakshinii '),
(46, 'A T Galtee qonnaa '),
(47, 'B/ Dargaggoo fi ispoortii '),
(48, 'Korp. Ijaarsaa '),
(49, 'KUSO '),
(50, 'OPF'),
(51, 'Korpo. Injinariingii '),
(52, 'B/ Dh/ misooma mootummaa'),
(53, 'Tumsaa '),
(54, 'WMO'),
(55, 'OSHO'),
(56, 'Abbaa Gadaa '),
(57, 'AHNO'),
(58, 'EMO       /COC/'),
(59, 'ILQSO'),
(60, 'Gadaa special zone '),
(61, 'OBN'),
(62, 'WALQO '),
(63, 'Liizii '),
(64, 'YMNO'),
(65, 'M H O M '),
(66, 'IPMO'),
(67, 'Komishinii Pooliisii '),
(68, 'Mana murtii waligala oromiyaa ');

-- --------------------------------------------------------

--
-- Table structure for table `terminate_letter`
--

CREATE TABLE `terminate_letter` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `refno` varchar(100) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `servicenumber` varchar(200) NOT NULL,
  `site_ict` varchar(200) NOT NULL,
  `woreda` varchar(200) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `kebele` varchar(255) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `terminate_status` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminate_letter`
--

INSERT INTO `terminate_letter` (`id`, `date`, `refno`, `service_type`, `servicenumber`, `site_ict`, `woreda`, `zone_id`, `region_id`, `kebele`, `operator`, `created_by`, `terminate_status`, `reason`, `file_name`) VALUES
(1, '2021-03-18', 'gh', 'ADSL', '34567890-', '4567890', '1', 1, 1, '456', 'chala oromo wallagaa', 'chala', 2, '', ''),
(2, '2021-05-19', 'wpsmqngb/12/35', 'VSAT', '9990031488', 'galma', '21', 18, 1, 'miyo', 'gg gg gg', 'woreda', 2, '', ''),
(3, '2021-06-10', '123', '', '54321567', 'sam', '37', 24, 1, 'nunu', 'Tofiq Bakri Abdule', 'tof', 0, 'hnfdgnb', 'Docs1.docx'),
(10, '2021-06-16', '3211', '', '0987654321', 'samsonhipa', '21', 18, 1, ' market agency', 'a a a', 'a', 2, 'not working', 's1.PNG'),
(11, '2021-07-08', '[POKIJHUG', '', '662034590', 'hbx', '80', 20, 1, 'gsd', 'Imiru Deresa Feyisa', 'ebentu', 0, 'ghfd', 'logo_miki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `terminate_show`
--

CREATE TABLE `terminate_show` (
  `id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `service_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminate_show`
--

INSERT INTO `terminate_show` (`id`, `date`, `service_no`) VALUES
(1, '2021-02-10', '1234567890'),
(2, '2021-04-27', '09991234567890');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `sector_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`t_id`, `t_name`, `sector_id`) VALUES
(1, 'Kantiibaa', 1),
(2, 'Itti Aanaa Kantiibaa', 1),
(3, 'Itti Gaafatamaa Waajjira Paartii', 1),
(4, 'Gargaaraa addaa itti gaafatamaa waajjiraa Paartii', 1),
(5, 'Itti gaafatamaa daamee siyaasa', 1),
(6, 'Itti gaafatamaa damee ijaarsaa', 1),
(7, 'Itti gaafatamaa sab-quunnamtii', 1),
(8, 'Itti gaafatamaa damee hordoffii fi deeggersaa', 1),
(9, 'Itti gaafatamaa damee qo\'annoo fi qorannoo', 1),
(10, 'Hoogganaa', 2),
(11, 'Hoogganaa', 3),
(12, 'Hoogganaa', 4),
(13, 'Hoogganaa', 5),
(14, 'Hoogganaa', 6),
(15, 'Hoogganaa', 7),
(16, 'Hoogganaa', 8),
(17, 'Hoogganaa', 9),
(18, 'Hoogganaa', 10),
(19, 'Hoogganaa', 11),
(20, 'Hoogganaa', 12),
(21, 'Hoogganaa', 13),
(22, 'Hoogganaa', 14),
(23, 'Hoogganaa', 15),
(24, 'Hoogganaa', 16),
(25, 'Hoogganaa', 17),
(26, 'Hoogganaa', 18),
(27, 'Hoogganaa', 19),
(28, 'Hoogganaa', 20),
(29, 'Hoogganaa', 21),
(30, 'Hoogganaa', 22),
(31, 'Hoogganaa', 23),
(32, 'Hoogganaa', 24),
(33, 'Hoogganaa', 25),
(34, 'Hoogganaa', 26),
(35, 'Hoogganaa', 27),
(36, 'Hoogganaa', 28),
(37, 'Hoogganaa', 29),
(38, 'Hoogganaa', 30),
(39, 'Hoogganaa', 31),
(40, 'Hoogganaa', 32),
(41, 'Hoogganaa', 33),
(42, 'Hoogganaa', 34),
(43, 'Hoogganaa', 35),
(44, 'Hoogganaa', 36),
(45, 'Hoogganaa', 37),
(46, 'Hoogganaa', 38),
(47, 'Hoogganaa', 39),
(48, 'Hoogganaa', 40),
(49, 'Hoogganaa', 41),
(50, 'Hoogganaa', 42),
(51, 'Hoogganaa', 43),
(52, 'Hoogganaa', 44),
(53, 'Hoogganaa', 45),
(54, 'Hoogganaa', 46),
(55, 'Hoogganaa', 47),
(56, 'Hoogganaa', 48),
(57, 'Hoogganaa', 49),
(58, 'Hoogganaa', 50),
(59, 'Hoogganaa', 51),
(60, 'Hoogganaa', 52),
(61, 'Hoogganaa', 53),
(62, 'Hoogganaa', 54),
(63, 'Hoogganaa', 55),
(64, 'Hoogganaa', 56),
(65, 'Hoogganaa', 57),
(66, 'Hoogganaa', 58),
(67, 'Hoogganaa', 59),
(68, 'Hoogganaa', 60),
(69, 'Hoogganaa', 61),
(70, 'Hoogganaa', 62),
(71, 'Hoogganaa', 63),
(72, 'Hoogganaa', 64),
(73, 'Hoogganaa', 65),
(74, 'Hoogganaa', 66),
(75, 'Hoogganaa', 67),
(76, 'Hoogganaa', 68),
(77, 'Itti Aanaa', 1),
(78, 'Itti Aanaa', 2),
(79, 'Itti Aanaa', 3),
(80, 'Itti Aanaa', 4),
(81, 'Itti Aanaa', 5),
(82, 'Itti Aanaa', 6),
(83, 'Itti Aanaa', 7),
(84, 'Itti Aanaa', 8),
(85, 'Itti Aanaa', 9),
(86, 'Itti Aanaa', 10),
(87, 'Itti Aanaa', 11),
(88, 'Itti Aanaa', 12),
(89, 'Itti Aanaa', 13),
(90, 'Itti Aanaa', 14),
(91, 'Itti Aanaa', 15),
(92, 'Itti Aanaa', 16),
(93, 'Itti Aanaa', 17),
(94, 'Itti Aanaa', 18),
(95, 'Itti Aanaa', 19),
(96, 'Itti Aanaa', 20),
(97, 'Itti Aanaa', 21),
(98, 'Itti Aanaa', 22),
(99, 'Itti Aanaa', 23),
(100, 'Itti Aanaa', 24),
(101, 'Itti Aanaa', 25),
(102, 'Itti Aanaa', 26),
(103, 'Itti Aanaa', 27),
(104, 'Itti Aanaa', 28),
(105, 'Itti Aanaa', 29),
(106, 'Itti Aanaa', 30),
(107, 'Itti Aanaa', 31),
(108, 'Itti Aanaa', 32),
(109, 'Itti Aanaa', 33),
(110, 'Itti Aanaa', 34),
(111, 'Itti Aanaa', 35),
(112, 'Itti Aanaa', 36),
(113, 'Itti Aanaa', 37),
(114, 'Itti Aanaa', 38),
(115, 'Itti Aanaa', 39),
(116, 'Itti Aanaa', 40),
(117, 'Itti Aanaa', 41),
(118, 'Itti Aanaa', 42),
(119, 'Itti Aanaa', 43),
(120, 'Itti Aanaa', 44),
(121, 'Itti Aanaa', 45),
(122, 'Itti Aanaa', 46),
(123, 'Itti Aanaa', 47),
(124, 'Itti Aanaa', 48),
(125, 'Itti Aanaa', 49),
(126, 'Itti Aanaa', 50),
(127, 'Itti Aanaa', 51),
(128, 'Itti Aanaa', 52),
(129, 'Itti Aanaa', 53),
(130, 'Itti Aanaa', 54),
(131, 'Itti Aanaa', 55),
(132, 'Itti Aanaa', 56),
(133, 'Itti Aanaa', 57),
(134, 'Itti Aanaa', 58),
(135, 'Itti Aanaa', 59),
(136, 'Itti Aanaa', 60),
(137, 'Itti Aanaa', 61),
(138, 'Itti Aanaa', 62),
(139, 'Itti Aanaa', 63),
(140, 'Itti Aanaa', 64),
(141, 'Itti Aanaa', 65),
(142, 'Itti Aanaa', 66),
(143, 'Itti Aanaa', 67),
(144, 'Itti Aanaa', 68),
(145, 'Gorsaa', 1),
(146, 'Gorsaa', 2),
(147, 'Gorsaa', 3),
(148, 'Gorsaa', 4),
(149, 'Gorsaa', 5),
(150, 'Gorsaa', 6),
(151, 'Gorsaa', 7),
(152, 'Gorsaa', 8),
(153, 'Gorsaa', 9),
(154, 'Gorsaa', 10),
(155, 'Gorsaa', 11),
(156, 'Gorsaa', 12),
(157, 'Gorsaa', 13),
(158, 'Gorsaa', 14),
(159, 'Gorsaa', 15),
(160, 'Gorsaa', 16),
(161, 'Gorsaa', 17),
(162, 'Gorsaa', 18),
(163, 'Gorsaa', 19),
(164, 'Gorsaa', 20),
(165, 'Gorsaa', 21),
(166, 'Gorsaa', 22),
(167, 'Gorsaa', 23),
(168, 'Gorsaa', 24),
(169, 'Gorsaa', 25),
(170, 'Gorsaa', 26),
(171, 'Gorsaa', 27),
(172, 'Gorsaa', 28),
(173, 'Gorsaa', 29),
(174, 'Gorsaa', 30),
(175, 'Gorsaa', 31),
(176, 'Gorsaa', 32),
(177, 'Gorsaa', 33),
(178, 'Gorsaa', 34),
(179, 'Gorsaa', 35),
(180, 'Gorsaa', 36),
(181, 'Gorsaa', 37),
(182, 'Gorsaa', 38),
(183, 'Gorsaa', 39),
(184, 'Gorsaa', 40),
(185, 'Gorsaa', 41),
(186, 'Gorsaa', 42),
(187, 'Gorsaa', 43),
(188, 'Gorsaa', 44),
(189, 'Gorsaa', 45),
(190, 'Gorsaa', 46),
(191, 'Gorsaa', 47),
(192, 'Gorsaa', 48),
(193, 'Gorsaa', 49),
(194, 'Gorsaa', 50),
(195, 'Gorsaa', 51),
(196, 'Gorsaa', 52),
(197, 'Gorsaa', 53),
(198, 'Gorsaa', 54),
(199, 'Gorsaa', 55),
(200, 'Gorsaa', 56),
(201, 'Gorsaa', 57),
(202, 'Gorsaa', 58),
(203, 'Gorsaa', 59),
(204, 'Gorsaa', 60),
(205, 'Gorsaa', 61),
(206, 'Gorsaa', 62),
(207, 'Gorsaa', 63),
(208, 'Gorsaa', 64),
(209, 'Gorsaa', 65),
(210, 'Gorsaa', 66),
(211, 'Gorsaa', 67),
(212, 'Gorsaa', 68);

-- --------------------------------------------------------

--
-- Table structure for table `town`
--

CREATE TABLE `town` (
  `tid` int(11) NOT NULL,
  `tname` varchar(200) NOT NULL,
  `zone_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `town`
--

INSERT INTO `town` (`tid`, `tname`, `zone_id`) VALUES
(1, 'nekemte', 1),
(2, 'siree', 1),
(3, 'Shaashamanee', 3),
(4, 'Dodolaa', 3),
(5, 'Negeelee', 3),
(6, 'Asallaa ', 4),
(7, 'Boqojjii', 4),
(8, 'Itayyaa', 4),
(9, 'Walisoo', 5),
(10, 'Aggaaroo', 6),
(11, 'Jimmaa', 6),
(12, 'Amboo', 7),
(13, 'Shaambuu', 8),
(14, 'Gobbaa', 9),
(15, 'Baddallee', 10),
(16, 'Sabbataa Awaas', 11),
(17, 'Sendafaa', 11),
(18, 'Aqaaqii', 11),
(19, 'Dambi Doolloo', 12),
(20, 'Adaamaa ', 2),
(21, 'Maqii', 2);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`u_id`, `u_name`) VALUES
(1, 'Yuuniversiitii Finfinnee'),
(2, 'Yuuniversiitii Adaamaa'),
(3, 'Yuuniversiitii Haramaayaa'),
(4, 'Yuuniversiitii Jimmaa'),
(5, 'Yuuniversiitii Wallaggaa');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `region_id` int(11) NOT NULL DEFAULT 1,
  `zone_id` int(11) DEFAULT NULL,
  `woreda_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `level`, `employee_id`, `site_id`, `region_id`, `zone_id`, `woreda_id`, `role_id`, `dob`, `email`, `phoneno`, `gender_id`, `status`, `created_by`) VALUES
(1, 'samosn', 'Hirpa', 'Tola', 'samii1234', '1234', NULL, NULL, NULL, 1, 20, 380, 1, '2021-12-15', 'Samsonhirpa@gmail.com', '0935738252', 1, 0, ''),
(2, 'caala', 'gezahegn', 'tsegaye', 'cala', '123', NULL, NULL, NULL, 1, 20, 1, 4, '2021-12-09', 'kedirilka@gmail.com', '0935738252', 1, 0, ''),
(4, 'shumi', 'garbiche', 'tsegaye', 'shumii', '123', NULL, NULL, NULL, 1, 20, 81, 3, '2021-12-07', 'hanahirpa@gmail.com', '0935738252', 2, 0, ''),
(5, 'Namara', 'Ararso', 'bb', 'Namara', '123', NULL, NULL, NULL, 1, 26, 123, 1, '2021-12-15', 'namaraararso@gmail.com', '0935738252', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$jqrfA1P8TFs6CmoImIuk6u5hJV6l5RvMztSeQme.1p6mFiMMa4INu', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1595256724, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'negegashe@gmail.com', '$2y$12$ZPDa.lP7B56qPrb80hMvJ.lDCdolx7eZcM2bZVkp2DjIZvcHS564.', 'negegashe@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1567370265, 1567406976, 1, 'samson', 'hirpa', 'tolla', '0923445426'),
(3, '::1', 'ng@gmail.com', '$2y$10$T1fPL0cTE2duYlnvR/eGQOPyT5Z.5csoiRO3CDS70e4vLwCJT1tMW', 'ng@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1567408112, 1595017169, 1, 'tame', 'hirpa', 'ost', '0923445426'),
(4, '::1', 'fayo@gmail.com', '$2y$10$7yVIg4..CxuJv5/FFX/wtOuBOrJVkcaIgwyjI1SBF8RDsJP9wh5Py', 'fayo@gmail.com', NULL, NULL, NULL, NULL, NULL, 'b227c959baebadaba33759e5602657f00cc4aabe', '$2y$10$strctHuylD1OgqSqQ2Lrs.hC.loea6YvIdleLjl3GTwwIYjuHzkWO', 1567540296, 1595056853, 1, 'fayo', 'mamo', 'mugi', '0935364120'),
(5, '::1', 'negaligngezaheg@gmail.com', '$2y$10$wTG8z6lMdJvNkOifSpMT2eF6leltNhClsGHKXLBnZ5X1qsOlxMrri', 'negaligngezaheg@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1595020525, NULL, 1, 'samson', 'hirpa', 'ostica', '0923445426');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `picture`, `created`, `modified`, `status`) VALUES
(1, 'd/dollo', 'negaligngezaheng@gmail.com', '', '2019-03-20 11:02:05', '2019-03-20 11:02:05', 1),
(2, 'd/dollo', 'samsonhirpa@gmail.com', '', '2019-03-20 11:02:22', '2019-03-20 11:02:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` int(11) NOT NULL,
  `orgname` varchar(255) NOT NULL,
  `torequest` varchar(200) NOT NULL,
  `reqdesc` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `woreda` int(11) NOT NULL,
  `kebele` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `requst_status` int(11) NOT NULL,
  `requst_status1` int(11) NOT NULL,
  `requst_status3` int(11) NOT NULL,
  `directorcom` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `orgname`, `torequest`, `reqdesc`, `date`, `file_name`, `zone_id`, `region_id`, `woreda`, `kebele`, `created_by`, `operator`, `requst_status`, `requst_status1`, `requst_status3`, `directorcom`) VALUES
(28, 'PSQMN', 'Disconnection', '25 MG fiber', '20/05/2021', '', 26, 1, 32, 'Nifas', 'Abdi', 'Abdi Dereje Wakesa', 0, 0, 0, ''),
(29, 'Fayyaa', 'Disconnection', '25 MG fiber', '20/05/2021', '', 26, 1, 32, 'Nifas', 'Abdi', 'Abdi Dereje Wakesa', 0, 0, 0, ''),
(30, 'PSMQN', 'New Order', 'woredanet', '2021-05-20', '', 24, 1, 37, 'anchar', 'nur', 'Nuredin Jula Safayo', 0, 0, 0, ''),
(31, 'PSMQN', 'New Order', 'dgfd', '2021-05-11', '', 23, 1, 28, 'HAramaya', 'ambaw', 'Ambaw Kifle Tegegn', 0, 0, 0, ''),
(32, 'Waajjira Fayyaa', 'ADSL', 'OffLine', '2021-05-20', '', 25, 1, 31, 'Adama', 'Milkiisaa', 'Milkisa Umnie Dumesso', 0, 0, 2, ''),
(33, 'Galaan ict', 'gabaasa', 'hhh', '2021-05-14', '', 26, 1, 32, 'galaan', 'Abdi', 'Abdi Dereje Wakesa', 0, 0, 0, ''),
(34, '', '', '', '', '', 26, 1, 32, '', 'Abdi', 'Abdi Dereje Wakesa', 0, 0, 0, ''),
(35, 'Magaalaa Awadaay', 'New ADSL order', 'They Have no Any Woredanet Network befor', '2021-05-24', '', 23, 1, 28, 'PSMQN', 'ambaw', 'Ambaw Kifle Tegegn', 0, 0, 0, ''),
(36, 'Magalaa Babbilee', 'New ADSL order', 'They Have no Any Woredanet Network befor', '2021-05-24', '', 23, 1, 28, 'PSMQN', 'ambaw', 'Ambaw Kifle Tegegn', 0, 0, 2, ''),
(37, 'Oromiya  Supreme Court', 'Network ', 'nnnn', '2021-06-02', 'kirubel.docx', 18, 1, 20, 'adama', 'sami', 'samson hirpa tola', 0, 0, 0, ''),
(38, 'OSTICA', 'Network serv', 'nnnn', '2021-06-02', 'Preterm_Labor.docx', 18, 1, 20, 'Nekemte', 'sami', 'samson hirpa tola', 0, 0, 0, ''),
(39, 'OSTICA', 'woreda net', 'we need woreda net immidiately', '2021-06-18', 'xalayaa_VSAT_gujii.pdf', 18, 1, 20, 'sebata Town', 'sami', 'samson hirpa tola', 0, 0, 0, ''),
(40, 'Oromiya  Supreme Court', 'Network serv', 'nnnn', '2021-06-02', '', 18, 1, 20, 'laaloo qilee', 'chalaa', 'Chala Alemitu Gezahegn', 0, 0, 2, ''),
(41, 'OVERA', 'New Request', 'Sarrara hara\'aa gafachu ta\'aa', '2021-06-08', 'Sivil_servic.pdf', 18, 1, 20, 'Bosat', 'sami', 'samson hirpa tola', 0, 0, 0, ''),
(42, 'Oromiya  Supreme Court', 'Network ', 'nnnn', '2021-06-02', 'em.PNG', 18, 1, 20, 'laaloo qilee', 'sami', 'samson hirpa tola', 0, 0, 0, ''),
(43, '', '', '', '', 'walagaa_bahaa.jpg', 18, 1, 20, '', 'sami', 'samson hirpa tola', 0, 0, 0, ''),
(44, 'Ostica', 'New woreda net line', 'Woreda net', '2021-06-02', 'walagaa_bahaa1.jpg', 18, 1, 20, 'Sarbet', 'sami', 'samson hirpa tola', 0, 0, 0, ''),
(45, 'nbxn', 'bxbv', 'xzbxz', '2021-06-10', 'baye_sam.docx', 24, 1, 37, 'nxcvcx', 'tof', 'Tofiq Bakri Abdule', 0, 0, 0, ''),
(46, 'MWD', 'Addsl', 'Asking a new Adsl service', '2021-06-16', 'Gabaasa_Raawwii_Hojii_kurmaan_2ffaa_kaliid__docx.docx', 23, 1, 30, 'haromaya', '123', 'qasim abdela` temam', 0, 0, 2, ''),
(47, 'gaba', 'woreda', 'woreda', '2021-06-07', 'd6.PNG', 22, 1, 63, 'investiment', 'xiyo', 'ali hussen kemalo', 2, 2, 2, 'Barbachisumaan isaa ilaalamee haa rawwatuuf'),
(51, 'ff', 'fg', 'hh', '2021-06-20', 'Docs2.docx', 37, 1, 45, 'jj', 'Bale', 'Minyahl zelalem bekele', 0, 0, 0, ''),
(52, 'WPSMQN', 'WoredaNet Service', 'Borana Zone Yabelo Town is still didn\'t have  WoredaNet service.', '2021-07-01', 'Bittaa_Meesha_2014_TQO.docx', 40, 1, 97, 'Yabelo Town', 'myabalo', 'Aschalew Getachew Mulat', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `woreda`
--

CREATE TABLE `woreda` (
  `woreda_id` int(11) NOT NULL,
  `woreda_name` varchar(255) NOT NULL,
  `woreda_code` varchar(255) DEFAULT NULL,
  `woreda_description` varchar(255) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `zone_id_woreda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woreda`
--

INSERT INTO `woreda` (`woreda_id`, `woreda_name`, `woreda_code`, `woreda_description`, `region_id`, `zone_id_woreda`) VALUES
(1, 'Zone Admin', '04', 'Gujii', 1, 36),
(68, 'Zone Admin', '02', '', 1, 44),
(69, 'Zone Admin', '01', '', 1, 45),
(71, 'Zone Admin', '04', 'Walagaa Lixaa', 1, 30),
(72, 'Guto gida', '04', 'W/Bahaa Aanaa Guutoo Gidaa', 1, 20),
(73, 'Goro Dola', '04', 'Gooroo Dolaa', 1, 36),
(74, 'Bore', '04', 'Booree', 1, 36),
(75, 'Saba Boru', '04', 'Sabaa Booruu', 1, 36),
(76, 'Gumii Eldalo', '04', 'Gumii Eeldalloo', 1, 36),
(77, 'Gida Ayana', '04', 'Giddaa Ayyaanaa', 1, 20),
(78, 'Haro Limmu', '04', 'Haro limmuu', 1, 20),
(79, 'Leqa Dulacha', '04', 'Leeqaa Dullachaa ', 1, 20),
(80, 'Ebentu', '04', 'Eebantuu', 1, 20),
(81, 'sibu sire', '04', 'Sibuu Siree', 1, 20),
(82, 'Wayu tuka', '04', 'Waayyuu Tuqaa', 1, 20),
(83, 'Gobu Seyo', '04', 'Gobbu  Sayyoo', 1, 20),
(84, 'Limmu', '04', 'Limmuu', 1, 20),
(85, 'zone admin', '03', '', 1, 23),
(86, 'Yabelo Woreda', '02', 'Aana Yaaballoo', 1, 40),
(87, 'Arero', '02', 'Areeroo', 1, 40),
(88, 'Dire', '02', 'Dirree', 1, 40),
(89, 'Moyale', '02', 'Mooyallee', 1, 40),
(90, 'Liban', '04', 'Liiban', 1, 36),
(91, 'Girja', '04', 'Giirjaa', 1, 36),
(92, 'Das', '02', 'Dhaas', 1, 40),
(93, 'Miyo', '02', 'Miyoo', 1, 40),
(94, 'Wadara', '04', 'Waadara', 1, 36),
(95, 'Dilo', '02', 'Dilloo', 1, 40),
(96, 'Teltele', '02', 'Taltallee', 1, 40),
(97, 'Yabelo Town', '02', 'Mag/Yaaballoo', 1, 40),
(98, 'Adola Reede', '04', 'Adoolaa Reeddee', 1, 36),
(99, 'Uragaa', '04', 'Uraagaa', 1, 36),
(100, 'Damaa', '04', 'Daamaa', 1, 36),
(101, 'Anaa Sorra', '04', 'Annaa Sorraa', 1, 36),
(102, 'Aga Wayu', '04', 'Aagaa Waayyuu', 1, 36),
(103, 'Arda Jila', '04', 'ArdaaJilaa', 1, 36),
(104, 'Dubluk', '02', 'Dubluqii', 1, 40),
(105, 'Elwaye', '02', 'Eel-Wayyee', 1, 40),
(106, 'Gomole', '02', 'Goomolee', 1, 40),
(107, 'Wachile', '02', 'Waacillee', 1, 40),
(108, 'Adoolaa Wayyu Town', '04', 'Bul.Mag. Adoolaa Wayyuu', 1, 36),
(110, 'Guchi', '02', 'Guchii', 1, 40),
(111, 'Addo Shakiso', '04', 'Oddoo Shaakkisoo', 1, 36),
(113, 'Haro Walabu', '04', 'Haroo Walabuu', 1, 36),
(114, 'Adama', '01', 'Adaamaa', 1, 25),
(115, 'Fantale', '01', 'Fantallee', 1, 25),
(116, 'Lume', '01', 'Lumee', 1, 25),
(117, 'Adea', '01', 'Ada\'aa', 1, 25),
(118, 'Liban', '01', 'Libaan', 1, 25),
(119, 'Gimbichu', '01', 'Gimbichuu', 1, 25),
(120, 'Bora', '01', 'Booraa', 1, 25),
(121, 'Dugda', '01', 'Dugdaa', 1, 25),
(122, 'Methara', '01', 'Matahaaraa', 1, 25),
(123, 'Sabata Awas', '01', 'Sabbataa Awaas', 1, 26),
(124, 'Mulo', '01', 'Muloo', 1, 26),
(125, 'Sululta', '01', 'Sulultaa', 1, 26),
(126, 'Sandafa Town', '01', 'Magaala Sandaaffaa', 1, 26),
(127, 'Walmara', '01', 'Walmaraa', 1, 26),
(128, 'Adami Tulu Gildo Kombolcha', '01', 'Addami Tullu Jildoo Kombolchaa', 1, 25),
(129, 'Negele Town', '04', 'Magalaa Nagelee', 1, 36),
(130, 'Dano', '01', 'Daannoo', 1, 45),
(131, 'Ejere', '01', 'Ejeree', 1, 45),
(132, 'Nono', '01', 'Noonnoo', 1, 45),
(133, 'Dandi', '01', 'Dandii', 1, 45),
(134, 'Bako Tibe', '01', 'Baakko Tibe', 1, 45),
(135, 'Jimmaa Arjoo', '04', 'Jima Arjo', 1, 20),
(136, 'Meda Kegn', '01', 'Midaa Qanyii', 1, 45),
(137, 'Nuunnuu Qumba', '04', 'Nunu Qumba', 1, 20),
(138, 'Jaldu', '01', 'Jalduu', 1, 45),
(139, 'Jibat', '01', 'Jibaat', 1, 45),
(140, 'Adea Berga', '01', 'Ada’aa Bargaa', 1, 45),
(141, 'Gudayyaa Biilaa', '04', 'Guya bila', 1, 20),
(142, 'Gindeberet', '01', 'Gindabarat', 1, 45),
(143, 'Kiiramuu', '04', 'Kiramu', 1, 20),
(144, 'Liban Jawi', '01', 'Liban Jaawwi  ', 1, 45),
(145, 'Ambo', '01', 'Amboo', 1, 45),
(146, 'Saasiggaa', '04', 'Sasiga', 1, 20),
(147, 'Ilu Galan', '01', 'Ilu Galaan', 1, 45),
(148, 'Diggaa', '04', 'Digga', 1, 20),
(149, 'Chaliya', '01', 'Calliyaa', 1, 45),
(150, 'Dire Inchini', '01', 'Dirree Incinni', 1, 45),
(151, 'Meta Wolkite', '01', 'Metta Walqixxe', 1, 45),
(152, 'Bonaya Boshe', '04', 'Bonayya Boshe', 1, 20),
(153, 'Meta Robi', '01', 'Metta Robii', 1, 45),
(154, 'Chobi', '01', 'Cobii', 1, 45),
(155, 'Wama Hagalo', '', 'Wama Hagalo', 1, 20),
(156, 'Ejersa Lafo', '01', 'Ejersa Lafoo', 1, 45),
(157, 'Toke Kutaye', '01', 'Tokke Kuttaye', 1, 45),
(158, 'Elfata', '01', 'Ilfaata', 1, 45),
(159, 'Abune Gindeberet', '01', 'Abuna Gindabarat', 1, 45),
(160, 'Abaya', '01', 'A/Abbaayaa', 1, 35),
(161, 'Kercha', '01', 'A/Qarca', 1, 35),
(162, 'Hambala Wamana', '01', 'A/Hamballaa Wammaanna ', 1, 35),
(163, 'Dugda Dawa', '01', 'A/Dugda Dawwaa ', 1, 35),
(164, 'Melka Soda', '01', 'A/Malkaa Sooddaa ', 1, 35),
(165, 'Bule Hora Town', '01', 'Bul Mag Bule Horaa ', 1, 35),
(166, 'Galana', '01', 'A/Galaana ', 1, 35),
(167, 'Bule Hora', '01', 'A/Bulee Horaa ', 1, 35),
(168, 'Birbirsa Kojowa', '01', 'A/Birbirsa Kojowaa ', 1, 35),
(169, 'Suro Barguda', '01', 'A/Surroo Barguddaa', 1, 35),
(170, 'Kuyu', '01', 'Kuyyuu', 1, 18),
(171, 'Degem', '01', 'Dagaam', 1, 18),
(172, 'Alaltu', '01', 'Alaltuu', 1, 18),
(173, 'abe Dangoro', '04', 'Abee Dangoroo', 1, 28),
(174, 'Jimma Ganati', '04', 'Jimmaa Gannatii', 1, 28),
(175, 'Hidabu Abote', '01', 'Hidaabu Abootee', 1, 18),
(176, 'Abbay coman', '04', 'Abbay Coomman', 1, 28),
(177, 'Wara Jarso', '01', 'Warraa Jarsoo', 1, 18),
(178, 'Wuchale', '01', 'Wucaalee', 1, 18),
(179, 'Jida', '01', 'Jiddaa', 1, 18),
(180, 'Jimma Rare', '04', 'Jimmaa Raaree', 1, 28),
(181, 'Dara', '01', 'Darraa', 1, 18),
(182, 'Guduru', '04', 'Guduruu', 1, 28),
(183, 'Debre Libanos', '01', 'Dabree Libaanos', 1, 18),
(184, 'Girar Jarso', '01', 'Giraar Jaarso', 1, 18),
(185, 'Shambu Town', '04', 'Bul.Mag.Shaambuu', 1, 28),
(186, 'Fitche Town', '01', 'Bul/Mag/ Fichee', 1, 18),
(187, 'Jardaga Jarte', '04', 'Jaardagaa Jaartee', 1, 28),
(188, 'Yaya Gulale', '01', 'Yaayyaa Gulalee', 1, 18),
(189, 'Amuru', '04', 'Amuruu', 1, 28),
(190, 'Abichu Nya\'a', '01', 'Abichuu Nyaa\'a', 1, 18),
(191, 'Horo', '04', 'Horrroo', 1, 28),
(192, 'Coman Guduru', '04', 'Coomman Guduruu', 1, 28),
(193, 'Hababo Guduru', '04', 'Habaaboo Guduruu', 1, 28),
(194, 'Horo Buluqa', '04', 'Horroo Bulluqa', 1, 28),
(195, 'Zone Admin', '01', 'Bul/Mag/Amboo', 1, 47),
(196, 'Zone Admin', '01', 'Bul/Mag/Adaama', 1, 48),
(197, 'Zone Admin', '01', 'Bul/Mag/Bishooftu', 1, 49),
(198, 'Zone Admin', '01', 'Bul/Mag/Sulultaa', 1, 50),
(199, 'Zone Admin', '01', 'Bul/Mag/Baatu', 1, 51),
(200, 'Goma', '02', 'Gommaa', 1, 42),
(201, 'Shabe Sombo', '02', 'Shabee Somboo ', 1, 42),
(202, 'Chora Botor', '02', 'Cooraa Botor', 1, 42),
(203, 'Satama', '02', 'Saxxammaa', 1, 42),
(204, 'Limu Saka', '02', 'Limmuu Saqqaa', 1, 42),
(205, 'Sigimo', '02', 'Sigimoo', 1, 42),
(206, 'Tiro Afata', '02', 'Xiroo Afaata', 1, 42),
(207, 'Nono Benja', '02', 'Noonnoo Beenjaa', 1, 42),
(208, 'Karsa', '02', 'Qarsaa', 1, 42),
(209, 'Dedo', '02', 'Deedoo', 1, 42),
(210, 'Mana', '02', 'Manna', 1, 42),
(211, 'Gumay', '02', 'Gumaay', 1, 42),
(212, 'Saka Chokorsa', '02', 'Saqqaa Coqorsa', 1, 42),
(213, 'Begi', '04', 'Begii', 1, 30),
(214, 'Qondala', '04', 'Qondaalaa', 1, 30),
(215, 'Agaro Town', '02', 'Magaala Aggaaroo', 1, 42),
(216, 'Mana Sibu', '04', 'Mana Sibu', 1, 30),
(217, 'Gera', '02', 'Geeraa', 1, 42),
(218, 'Omo Nada', '02', 'Oomo Naaddaa', 1, 42),
(219, 'Mandi Town', '04', 'Mag.Mandii', 1, 30),
(220, 'Sokoru', '02', 'Sokorruu', 1, 42),
(221, 'Qilxu Kara', '04', 'Qilxu Kaarraa', 1, 30),
(222, 'Lata Sibu', '04', 'Lataa Sibuu', 1, 30),
(223, 'Limu Kosa', '02', 'Limmuu Kossa', 1, 42),
(224, 'Botor Tolay', '02', 'Botor Xollay', 1, 42),
(225, 'Mancho', '02', 'Manchoo', 1, 42),
(226, 'Babo Gambel', '04', 'Baabboo Gambeel', 1, 30),
(227, 'Omo Beyam', '02', 'Omo Beeyyaam', 1, 42),
(228, 'Jarso', '04', 'Jaarsoo', 1, 30),
(229, 'Aana Najo', '04', 'Aanaa Najjoo', 1, 30),
(230, 'Najo Town', '04', 'Najjoo Town', 1, 30),
(231, 'Boji Dirmaji', '04', 'Bojji Dirmajjii', 1, 30),
(232, 'Boji Coqorsa', '04', 'Bojji Coqorsaa', 1, 30),
(233, 'Yubdo', '04', 'Yubdoo', 1, 30),
(234, 'Aayira', '04', 'Aayiraa', 1, 30),
(235, 'Guliso', '04', 'Gullisoo', 1, 30),
(236, 'Lalo Assabii', '04', 'Laloo Assabii', 1, 30),
(237, 'Sayyoo Noolee', '04', 'Sayyoo Noolee', 1, 30),
(238, 'Nole Kaba', '04', 'Noolee Kaabbaa', 1, 30),
(239, 'Haru', '04', 'Haaruu', 1, 30),
(240, 'Ganji', '04', 'Ganjii', 1, 30),
(241, 'Homa', '04', 'Hoomaa', 1, 30),
(242, 'Aana Gimbi', '04', 'Aanaa Gimbii', 1, 30),
(243, 'Gimbi town', '04', 'Gimbii Town', 1, 30),
(244, 'Darimu', '02', 'Daarimuu', 1, 44),
(245, 'Alge Sachi', '02', 'Algee Sachii', 1, 44),
(246, 'Dorani', '02', 'Doorannii', 1, 44),
(247, 'Bure', '02', 'Buree', 1, 44),
(248, 'Halu', '02', 'Haluu', 1, 44),
(249, 'Didu', '02', 'Diiduu', 1, 44),
(250, 'Bacho', '02', 'Bachoo', 1, 44),
(251, 'Ale', '02', 'Aallee', 1, 44),
(252, 'Matu Town', '02', 'Magaala Mattuu', 1, 44),
(253, 'Matu Woreda', '02', 'Aana Mattuu', 1, 44),
(254, 'Bilo Nopa', '02', 'Biloo Nophaa', 1, 44),
(255, 'Hurumu', '02', 'Hurrumuu', 1, 44),
(256, 'Yayo', '02', 'Yaayyoo', 1, 44),
(257, 'N/Sal\'e', '02', 'N/Sal\'ee', 1, 44),
(258, 'Amaya', '02', 'Ammayyaa', 1, 41),
(259, 'Wanchi', '02', 'Wancii', 1, 41),
(260, 'Goro', '02', 'Gooroo', 1, 41),
(261, 'Waliso', '02', 'Walisoo', 1, 41),
(262, 'Bacho', '02', 'Bachoo', 1, 41),
(263, 'Dawo', '02', 'Daawoo', 1, 41),
(264, 'Saden Sodo', '02', 'Sadeen Sooddoo', 1, 41),
(265, 'Ilu', '02', 'Iluu', 1, 41),
(266, 'Tole', '02', 'Tolee', 1, 41),
(267, 'Karsa Malima', '02', 'Qarsaa Maallimaaa', 1, 41),
(268, 'Sodo Dachi', '02', 'Sooddoo Daaccii', 1, 41),
(270, 'Xuulloo', '03', 'Xuulloo', 1, 23),
(271, 'Zone Admin', '02', 'Bunnoo Badallee', 1, 43),
(272, 'Ancaar', '03', 'Ancaar', 1, 23),
(273, 'Anaa Ciro', '03', 'Aanaa Ciroo', 1, 23),
(274, 'Burqa Dhintuu', '03', 'Burqa dhintuu', 1, 23),
(275, 'Gammachis', '03', 'Gammachiis', 1, 23),
(276, 'Zone Admin', '02', 'Bul/Mag/Jimma', 1, 52),
(277, 'Zone Admin', '02', 'Bul/Mag/Sabbataa', 1, 53),
(278, 'Zone Admin', '02', 'Bul/Mag/Badallee', 1, 54),
(279, 'Zone Admin', '02', 'Bul/Mag/Walisoo', 1, 55),
(280, 'Ciro Town', '03', 'Ciroo Town', 1, 23),
(281, 'Zone Admin', '02', 'Bul/Mag/Moojoo', 1, 56),
(282, 'Badesa Town', '03', 'Badeessaa Town', 1, 23),
(283, 'Bookee', '03', 'Bookee', 1, 23),
(284, 'Shanan Dhuggoo', '03', 'Shanan Dhuggoo', 1, 23),
(285, 'Habro', '03', 'Habroo', 1, 23),
(286, 'Haawi Guddina', '03', 'Haawwii Guddinaa', 1, 23),
(287, 'Guba Qoricha', '03', 'Gubbaa Qorichaa', 1, 23),
(288, 'Daro Labu', '03', 'Daaro Labuu', 1, 23),
(289, 'Gumbi Bordode', '03', 'Gumbii Bordoddee', 1, 23),
(290, 'Doba', '03', 'Doobbaa', 1, 23),
(291, 'Oda Bultum', '03', 'Odaa Bultum', 1, 23),
(292, 'Mi\'eso', '03', 'Mi\'eessoo', 1, 23),
(293, 'Babile', '03', 'Baabbilee', 1, 24),
(294, 'Badano', '03', 'Badannoo', 1, 24),
(295, 'Dadar', '03', 'Daddar', 1, 24),
(296, 'Fadis', '03', 'Faadis', 1, 24),
(297, 'Girawa', '03', 'Girawwaa', 1, 24),
(298, 'Gola Oda', '03', 'Golaa Odaa', 1, 24),
(299, 'Goro Gutu', '03', 'Gooro Guutu', 1, 24),
(300, 'Gursum', '03', 'Gursumi', 1, 24),
(301, 'Haramaya', '03', 'Haramaaya', 1, 24),
(302, 'Jarso', '03', 'Jaarso', 1, 24),
(303, 'Kombolcha', '03', 'Kombolchaa', 1, 24),
(304, 'Kurfa Chale', '03', 'Kurfaa Calee', 1, 24),
(305, 'Mayu Muluke', '03', 'Mayu Muluke', 1, 24),
(306, 'Malka Bal\'o', '03', 'Malkaa Bal\'oo', 1, 24),
(307, 'Meta', '03', 'Mettaa', 1, 24),
(308, 'Karsa', '03', 'Qarsaa', 1, 24),
(309, 'Chinaksan', '03', 'Cinaaksan', 1, 24),
(310, 'Midaga', '03', 'Midhaaga', 1, 24),
(311, 'Haramaya Town', '03', 'Mag/Haramaaya', 1, 24),
(312, 'Awaday', '03', 'Awadaay', 1, 24),
(313, 'Dadar Town', '03', 'Mag/Dadar', 1, 24),
(314, 'Babile  Town', '03', 'Mag/Babbilee', 1, 24),
(315, 'Kumbi', '03', 'Qumbii', 1, 24),
(316, 'Goba', '03', 'Goobbaa', 1, 37),
(317, 'Goro', '03', 'Gooroo', 1, 37),
(318, 'Agarfa', '03', 'Agarfaa', 1, 37),
(319, 'Gasara', '03', 'Gaasaraa', 1, 37),
(320, 'Guradamole', '03', 'Guraadhamolee', 1, 37),
(321, 'Mana', '03', 'Mannaa', 1, 37),
(322, 'Madawalabu', '03', 'Maddawaalabuu', 1, 37),
(323, 'Sinana', '03', 'Sinaanaa', 1, 37),
(324, 'Dinsho', '03', 'Diinshoo', 1, 37),
(325, 'Harana Buluq', '03', 'Harannaa Bulluq', 1, 37),
(326, 'Goba Town', '03', 'Goobbaa Town', 1, 37),
(327, 'Sadi Canqa', '04', 'Sadii Canqaa', 1, 21),
(328, 'Lalo Qile', '04', 'Laaloo Qilee', 1, 21),
(329, 'Hawa Galan', '04', 'Hawwaa Galaan', 1, 21),
(330, 'Dale Wabara', '04', 'Daalle Waabaraa', 1, 21),
(331, 'Anfilo', '04', 'Anfilloo', 1, 21),
(332, 'Yamalagi Walal', '04', 'Yamaalagii Walal', 1, 21),
(333, 'jimma Horo', '04', 'Jimmaa Horroo', 1, 21),
(334, 'Gawo Qebe', '04', 'Gawoo Qeebbee', 1, 21),
(335, 'Sayo', '04', 'Sayyoo', 1, 21),
(336, 'Dale Sadi', '04', 'Daallee Sadii', 1, 21),
(337, 'Dodola', '03', 'Doddola', 1, 39),
(338, 'Nagele Arsi', '03', 'Nagellee Arsi', 1, 39),
(339, 'Shasamene', '03', 'Shashamannee', 1, 39),
(340, 'Heaban Arsi', '03', 'Heaban Arsi', 1, 39),
(341, 'Heaban Arsi', '03', 'Heaban Arsi', 1, 39),
(342, 'Siraro', '03', 'Siraroo', 1, 39),
(343, 'Wondo', '03', 'Wando', 1, 39),
(344, 'Gedeb Hasasa', '03', 'Gedeb Hassasa', 1, 39),
(345, 'Kofele', '03', 'Kofele', 1, 39),
(346, 'Adabaa', '03', 'Adabaa', 1, 39),
(347, 'Qore', '03', 'Qoree', 1, 39),
(348, 'Nensebo', '03', 'Nenseboo', 1, 39),
(349, 'Kokosa', '03', 'Kokkossaa', 1, 38),
(350, 'Shala', '03', 'Shaalla', 1, 39),
(351, 'Negele Arsi Town', '03', 'Nagelle Arsii Town', 1, 39),
(352, 'Dodola Town', '03', 'Dodolaa Town', 1, 39),
(353, 'Amigna', '03', 'Amiinyaa', 1, 22),
(354, 'Asako', '03', 'Asakoo', 1, 22),
(355, 'Bale', '03', 'Balee', 1, 22),
(356, 'Bokoji Town', '03', 'B/M/Boqojji', 1, 22),
(357, 'Chole', '03', 'Collee', 1, 22),
(358, 'Digalu & Tijo', '03', 'Digalu fi Xiijoo', 1, 22),
(359, 'Diksis', '03', 'Diksiis', 1, 22),
(360, 'Dodota', '03', 'Doddotaa', 1, 22),
(361, 'Gololcha', '03', 'Gololchaa', 1, 22),
(362, 'Guna', '03', 'Gunaa', 1, 22),
(363, 'Hetosa', '03', 'Heexosaa', 1, 22),
(364, 'Honkolo Wabe', '03', 'Honkolo Waabee', 1, 22),
(365, 'Jaju', '03', 'Jajuu', 1, 22),
(366, 'Lemu fi Bilbilo', '03', 'Lemu fi Bilbiloo', 1, 22),
(367, 'Lode Hetosa', '03', 'Loodee Heexosaa', 1, 22),
(368, 'Marti', '03', 'Martii', 1, 22),
(369, 'Munesa', '03', 'Muunessaa', 1, 22),
(370, 'Robe', '03', 'Roobee', 1, 22),
(371, 'Seru', '03', 'Seeruu', 1, 22),
(372, 'Sire', '03', 'Siree', 1, 22),
(373, 'Shirka', '03', 'Shirkaa', 1, 22),
(374, 'Sude', '03', 'Suudee', 1, 22),
(375, 'Tana', '03', 'Xannaa', 1, 22),
(376, 'Tiyo', '03', 'Xiyoo', 1, 22),
(377, 'Zuway Dugda', '03', 'Zuwaay Dugda', 1, 22),
(378, 'Shanan Kolu', '03', 'Shanan Koolu', 1, 22),
(379, 'Kokosa', '03', 'Kokkossaa', 1, 39),
(380, 'Zone Admin', '0011', 'east wallega zone admin', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `years_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `years_name`) VALUES
(1, '1 Year'),
(2, '2 Years'),
(3, '3 Years'),
(4, '4 Years'),
(5, '5 Years'),
(6, '6 Years'),
(7, '7 Years'),
(8, '8 Years'),
(9, '9 Years'),
(10, '10 Years'),
(11, '11 Years'),
(12, '12 Years'),
(13, '13 Years'),
(14, '14 Years'),
(15, '15 Years'),
(16, '16 Years'),
(17, '17 Years'),
(18, '18 Years'),
(19, '19 Years'),
(20, '20 Years'),
(21, '21 Years'),
(22, '22 Years'),
(23, '23 Years'),
(24, '24 Years'),
(25, '25 Years'),
(26, '26 Years'),
(27, '27 Years'),
(28, '28 Years'),
(29, '29 Years'),
(30, '30 Years'),
(31, '31 Years'),
(32, '32 Years'),
(33, '33 Years'),
(34, '34 Years'),
(35, '35 Years'),
(36, '36 Years'),
(37, '37 Years'),
(38, '38 Years'),
(39, '39 Years'),
(40, '40 Years');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `zid` int(11) NOT NULL,
  `zname` varchar(200) NOT NULL,
  `zone_code` varchar(255) DEFAULT NULL,
  `zone_description` varchar(255) DEFAULT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`zid`, `zname`, `zone_code`, `zone_description`, `region_id`) VALUES
(18, 'North Showa', '01', 'Shawaa Kaabaa', 1),
(20, 'East Wolega', '04', 'Walaggaa Bahaa', 1),
(21, 'Kelem Wolega', '04', 'Qeelam Walaggaa', 1),
(22, 'Arsi', '03', 'Arsii ', 1),
(23, 'West Harerge', '03', 'Harargee Lixa', 1),
(24, 'East Harerge', '03', 'Haarargee Bahaa', 1),
(25, 'East Showa', '01', 'Shawaa Bahaa', 1),
(26, 'Special Zone', '01', 'Godina Addaa Oromiyaa Naannawaa Finfinnee', 1),
(28, 'Horo guduru wolega', '04', 'Horoo guduuru walagaa', 1),
(30, 'West wolega', '04', 'Walaga lixaa', 1),
(35, 'West Guji ', '01', 'Gujii Lixaa', 1),
(36, 'Guji', '04', 'Gujii ', 1),
(37, 'Bale ', '03', 'Baalee', 1),
(38, 'East Bale', '03', 'Baalee bahaa', 1),
(39, 'West Arsi', '03', 'Arsii Lixaa', 1),
(40, 'Borena', '02', 'Booranaa ', 1),
(41, 'South West Showa', '02', 'shawaa kibba lixaa', 1),
(42, 'Jimma', '02', 'Jimmaa', 1),
(43, 'Buno Bedele', '02', 'Bunnoo Badallee', 1),
(44, 'Ilu Aba Bora', '02', 'Iluu Abaa Borraa', 1),
(45, 'West Showa', '01', 'Shawaa Lixaa', 1),
(46, 'Finfinne', '08', 'Finfinnee', 1),
(47, 'Ambo Town', '01', 'Bul/Mag/Amboo', 1),
(48, 'Adama Town', '01', 'Bul/Mag/Adaama', 1),
(49, 'Bishoftu Town', '01', 'Bul/Mag/Bishooftu', 1),
(50, 'Sululta Town', '01', 'Bul/Mag/Sulultaa', 1),
(51, 'Batu Town', '01', 'Bul/Mag/Baatu', 1),
(52, 'Jimma Town', '02', 'Bul/Mag/Jimma', 1),
(53, 'Sebeta Town', '02', 'Bul/Mag/Sabbataa', 1),
(54, 'Bedele Town', '02', 'Bul/Mag/Badallee', 1),
(55, 'Waliso Town', '02', 'Bul/Mag/Walisoo', 1),
(56, 'Modjo Town', '02', 'Bul/Mag/Moojoo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`ag_id`);

--
-- Indexes for table `all_year`
--
ALTER TABLE `all_year`
  ADD PRIMARY KEY (`yr_id`);

--
-- Indexes for table `cabine`
--
ALTER TABLE `cabine`
  ADD PRIMARY KEY (`cab_id`);

--
-- Indexes for table `cabine2`
--
ALTER TABLE `cabine2`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `maqa_id` (`maqa_id`),
  ADD KEY `muxannoo` (`muxannoo`),
  ADD KEY `university_id` (`university_id`);

--
-- Indexes for table `carboncopy`
--
ALTER TABLE `carboncopy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ipid` (`ipid`),
  ADD UNIQUE KEY `lanip` (`lanip`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education2`
--
ALTER TABLE `education2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freeip`
--
ALTER TABLE `freeip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lanip` (`lanip`),
  ADD UNIQUE KEY `ipid` (`ipid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `haalamaati`
--
ALTER TABLE `haalamaati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipcomment`
--
ALTER TABLE `ipcomment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `kebele`
--
ALTER TABLE `kebele`
  ADD PRIMARY KEY (`kid`),
  ADD KEY `town_id` (`town_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `migrate_letter`
--
ALTER TABLE `migrate_letter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ipid` (`ipid`),
  ADD UNIQUE KEY `lanip` (`lanip`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `migrate_lshow`
--
ALTER TABLE `migrate_lshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_employee`
--
ALTER TABLE `new_employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `no_ofngo`
--
ALTER TABLE `no_ofngo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `age_id` (`age_id`);

--
-- Indexes for table `osticaletters`
--
ALTER TABLE `osticaletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lanip` (`lanip`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `sadarka`
--
ALTER TABLE `sadarka`
  ADD PRIMARY KEY (`sd_id`);

--
-- Indexes for table `sektera`
--
ALTER TABLE `sektera`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `terminate_letter`
--
ALTER TABLE `terminate_letter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `terminate_show`
--
ALTER TABLE `terminate_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `sector_id` (`sector_id`);

--
-- Indexes for table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `woreda_id` (`woreda_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `woreda`
--
ALTER TABLE `woreda`
  ADD PRIMARY KEY (`woreda_id`),
  ADD KEY `zone_id` (`zone_id_woreda`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`zid`),
  ADD KEY `region_id` (`region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `ag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `all_year`
--
ALTER TABLE `all_year`
  MODIFY `yr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cabine`
--
ALTER TABLE `cabine`
  MODIFY `cab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cabine2`
--
ALTER TABLE `cabine2`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carboncopy`
--
ALTER TABLE `carboncopy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=486;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education2`
--
ALTER TABLE `education2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `freeip`
--
ALTER TABLE `freeip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `haalamaati`
--
ALTER TABLE `haalamaati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ipcomment`
--
ALTER TABLE `ipcomment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kebele`
--
ALTER TABLE `kebele`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrate_letter`
--
ALTER TABLE `migrate_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrate_lshow`
--
ALTER TABLE `migrate_lshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_employee`
--
ALTER TABLE `new_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `no_ofngo`
--
ALTER TABLE `no_ofngo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `osticaletters`
--
ALTER TABLE `osticaletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sadarka`
--
ALTER TABLE `sadarka`
  MODIFY `sd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sektera`
--
ALTER TABLE `sektera`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `terminate_letter`
--
ALTER TABLE `terminate_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `terminate_show`
--
ALTER TABLE `terminate_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `woreda`
--
ALTER TABLE `woreda`
  MODIFY `woreda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `zid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cabine2`
--
ALTER TABLE `cabine2`
  ADD CONSTRAINT `cabine2_ibfk_1` FOREIGN KEY (`maqa_id`) REFERENCES `cabine` (`cab_id`),
  ADD CONSTRAINT `cabine2_ibfk_2` FOREIGN KEY (`muxannoo`) REFERENCES `years` (`id`);

--
-- Constraints for table `kebele`
--
ALTER TABLE `kebele`
  ADD CONSTRAINT `kebele_ibfk_1` FOREIGN KEY (`town_id`) REFERENCES `town` (`tid`);

--
-- Constraints for table `title`
--
ALTER TABLE `title`
  ADD CONSTRAINT `title_ibfk_1` FOREIGN KEY (`sector_id`) REFERENCES `sektera` (`s_id`);

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`zid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useraccount_ibfk_3` FOREIGN KEY (`woreda_id`) REFERENCES `woreda` (`woreda_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useraccount_ibfk_4` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useraccount_ibfk_5` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `woreda`
--
ALTER TABLE `woreda`
  ADD CONSTRAINT `woreda_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `woreda_ibfk_2` FOREIGN KEY (`zone_id_woreda`) REFERENCES `zone` (`zid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
