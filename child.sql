-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 02:09 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child`
--

-- --------------------------------------------------------

--
-- Table structure for table `abuse_case`
--

CREATE TABLE `abuse_case` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `abusetype_id` int(11) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `age_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) DEFAULT NULL,
  `kebele` varchar(255) NOT NULL,
  `operator` varchar(200) NOT NULL,
  `woreda` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abuse_case`
--

INSERT INTO `abuse_case` (`id`, `date`, `abusetype_id`, `sex`, `age_id`, `zone_id`, `region_id`, `town_id`, `kebele`, `operator`, `woreda`, `created_by`) VALUES
(27, '2020-08-11', 6, '2', 3, 4, 1, NULL, 'lllll llll', 'Admin Admin Admin', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `abuse_type`
--

CREATE TABLE `abuse_type` (
  `ab_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abuse_type`
--

INSERT INTO `abuse_type` (`ab_id`, `name`) VALUES
(1, 'HTP'),
(2, 'Physical Abuse'),
(3, 'Rape'),
(4, 'Attempt of Rape'),
(5, 'Trafficking'),
(6, 'Labor Abuse'),
(7, 'Abduction'),
(8, 'Attempt of Abduction'),
(9, 'Early Marriage'),
(10, 'Maltreatment'),
(11, 'Attempt of Children Killing'),
(12, 'Killed Children Male'),
(13, 'Female Gaintel Matulation(FGM)'),
(14, '	\r\nOther Abuse\r\n');

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
-- Table structure for table `careandsupport`
--

CREATE TABLE `careandsupport` (
  `id` int(11) NOT NULL,
  `careandsupporttype_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careandsupport`
--

INSERT INTO `careandsupport` (`id`, `careandsupporttype_id`, `age_id`, `sex`, `zone_id`, `region_id`, `town_id`, `kebele`, `operator`) VALUES
(1, 4, 4, 'Female', 1, 2, 2, 3, 'sami sama');

-- --------------------------------------------------------

--
-- Table structure for table `careandsupporttype`
--

CREATE TABLE `careandsupporttype` (
  `css_id` int(11) NOT NULL,
  `css_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careandsupporttype`
--

INSERT INTO `careandsupporttype` (`css_id`, `css_name`) VALUES
(1, 'Food and Nutritional'),
(2, 'Shelter and Care'),
(3, 'Educational '),
(4, 'Health Care'),
(5, 'Psycho social'),
(6, 'Legal'),
(7, 'Economic Strengthening ');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_services`
--

CREATE TABLE `ccc_services` (
  `id` int(11) NOT NULL,
  `ccc_services_type_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ccc_services`
--

INSERT INTO `ccc_services` (`id`, `ccc_services_type_id`, `age_id`, `sex`, `zone_id`, `region_id`, `town_id`, `kebele`, `operator`) VALUES
(1, 3, 3, 'Female', 1, 2, 2, 4, 'naga mamo');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_servicestype`
--

CREATE TABLE `ccc_servicestype` (
  `ccc_id` int(11) NOT NULL,
  `ccc_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ccc_servicestype`
--

INSERT INTO `ccc_servicestype` (`ccc_id`, `ccc_name`) VALUES
(1, 'Reintegration '),
(2, 'Reunification'),
(3, 'Foster Care'),
(4, 'Domestic Adoption'),
(5, 'Institutional Care');

-- --------------------------------------------------------

--
-- Table structure for table `childcare_type`
--

CREATE TABLE `childcare_type` (
  `chc_id` int(11) NOT NULL,
  `chcname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childcare_type`
--

INSERT INTO `childcare_type` (`chc_id`, `chcname`) VALUES
(1, 'Foster Families Care'),
(2, 'Child House headed Families '),
(3, 'Sponsorship '),
(4, 'Kinship'),
(5, 'Group Home');

-- --------------------------------------------------------

--
-- Table structure for table `childfriendly_type`
--

CREATE TABLE `childfriendly_type` (
  `cf_id` int(11) NOT NULL,
  `cf_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childfriendly_type`
--

INSERT INTO `childfriendly_type` (`cf_id`, `cf_name`) VALUES
(1, 'Re-unified children'),
(2, 'Economical Strengthening'),
(3, 'Life Skill Training'),
(4, 'Vocational Training');

-- --------------------------------------------------------

--
-- Table structure for table `child_care`
--

CREATE TABLE `child_care` (
  `id` int(11) NOT NULL,
  `childcare_type_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_care`
--

INSERT INTO `child_care` (`id`, `childcare_type_id`, `age_id`, `sex`, `zone_id`, `region_id`, `town_id`, `kebele`, `operator`) VALUES
(1, 2, 4, 'Male', 1, 2, 2, 4, 'samson hitpa');

-- --------------------------------------------------------

--
-- Table structure for table `child_friendly`
--

CREATE TABLE `child_friendly` (
  `id` int(11) NOT NULL,
  `childfriendlytype_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_friendly`
--

INSERT INTO `child_friendly` (`id`, `childfriendlytype_id`, `age_id`, `sex`, `zone_id`, `region_id`, `town_id`, `kebele`, `operator`) VALUES
(1, 3, 3, 'Female', 1, 2, 2, 3, 'naga gashe');

-- --------------------------------------------------------

--
-- Table structure for table `disbled_type`
--

CREATE TABLE `disbled_type` (
  `d_id` int(11) NOT NULL,
  `dname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disbled_type`
--

INSERT INTO `disbled_type` (`d_id`, `dname`) VALUES
(1, 'Blind or Visually Impairment'),
(2, 'Deaf or Hearing Impairment'),
(3, 'Speech Communication Disability'),
(4, 'Mental Emotional or Cognitive Health Disability '),
(5, 'Mobility Physical Disability '),
(6, 'Short Stature Little Person'),
(7, 'Other ');

-- --------------------------------------------------------

--
-- Table structure for table `disnled_children`
--

CREATE TABLE `disnled_children` (
  `id` int(11) NOT NULL,
  `disbledtype_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disnled_children`
--

INSERT INTO `disnled_children` (`id`, `disbledtype_id`, `age_id`, `sex`, `zone_id`, `region_id`, `town_id`, `kebele`, `operator`) VALUES
(1, 6, 2, 'Female', 1, 2, 2, 3, 'naga'),
(2, 2, 4, 'Female', 1, 2, 2, 3, 'samson hitpa'),
(3, 1, 1, 'Male', 2, 2, 21, 24, 'samson'),
(4, 1, 1, 'Female', 2, 2, 21, 24, 'samson');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `typeofevent` varchar(255) NOT NULL,
  `event_organizingbody` varchar(200) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `slongofevent` varchar(200) NOT NULL,
  `activie_event` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `male`, `female`, `typeofevent`, `event_organizingbody`, `region_id`, `town_id`, `kebele`, `zone_id`, `slongofevent`, `activie_event`) VALUES
(1, '15', '6', 'child event', 'child', 2, 2, 3, 1, 'slong', 'activity');

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
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` longtext NOT NULL,
  `description` varchar(255) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `role`, `description`, `permission_id`) VALUES
(1, 'Admin Group', 'Perform all opertsion', 'wewewewe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `iga`
--

CREATE TABLE `iga` (
  `id` int(11) NOT NULL,
  `type_iga` varchar(200) NOT NULL,
  `Skill_Training` varchar(255) NOT NULL,
  `Financial_Support` varchar(255) NOT NULL,
  `Material_Support` varchar(200) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `Technical_Support` varchar(200) NOT NULL,
  `working_site` varchar(200) NOT NULL,
  `others` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iga`
--

INSERT INTO `iga` (`id`, `type_iga`, `Skill_Training`, `Financial_Support`, `Material_Support`, `region_id`, `town_id`, `kebele`, `zone_id`, `Technical_Support`, `working_site`, `others`) VALUES
(1, 'iga type', 'skill', 'support', 'material', 2, 2, 3, 1, 'technical', 'site', 'other iga');

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
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(4, '::1', 'sama', 1595178773),
(5, '::1', 'sama', 1595256710);

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
-- Table structure for table `ovcs`
--

CREATE TABLE `ovcs` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ovcs`
--

INSERT INTO `ovcs` (`ID`, `name`, `detail`) VALUES
(0, '--select--', ''),
(1, 'Double Orphan', 'Double Orphan'),
(2, 'Single Orphan', ''),
(3, 'Street Children', ''),
(4, 'Abandoned Children', ''),
(5, 'Trafficked Children', ''),
(6, 'Children Exposed to the Worst form of Child labor', ''),
(7, 'Children Affected by HIV/AIDS', ''),
(8, 'Children Victims of Sexual Abuse and Explotation', ''),
(9, 'Children Displaced', ''),
(10, 'Non Orphan Children whose parents can not support child due to poverty or illness or injury', ''),
(11, 'Child Mothers', ''),
(12, 'Children in conflict with law', ''),
(13, 'Children living with mothers in the prison', ''),
(14, 'Child headed households', ''),
(15, 'Separated Children', ''),
(16, 'Refugee Children', ''),
(17, 'Others', '');

-- --------------------------------------------------------

--
-- Table structure for table `ovcs1`
--

CREATE TABLE `ovcs1` (
  `id` int(11) NOT NULL,
  `ovcs_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `zone` varchar(110) NOT NULL,
  `town` varchar(110) NOT NULL,
  `district` varchar(110) NOT NULL,
  `kebele` varchar(110) NOT NULL,
  `operator` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ovcs1`
--

INSERT INTO `ovcs1` (`id`, `ovcs_id`, `age_id`, `sex`, `zone`, `town`, `district`, `kebele`, `operator`) VALUES
(1, 1, 2, 'female', 'showa', 'ambo', 'oromia', '04', 'negalign'),
(2, 1, 4, 'male', 'wolega', 'nekemte', 'Oromia', '01', 'Samson'),
(4, 2, 3, 'Male', 'showa', 'ambo', 'oromia', '03', 'shula'),
(5, 1, 2, 'Female', 'gfdgvfc', 'gfd', 'nbhg', 'hgfd', 'gvcx'),
(6, 2, 4, 'Male', 'bgfvdcs', 'ghfds', 'gvfvdcsda', 'gfds', 'nbhg'),
(7, 1, 2, 'Male', 'hgtfdrdgf', 'vbcf', 'jh', 'xfv', 'fgn'),
(8, 1, 1, 'Male', 'n', 'kl', 'bn', 'njkm', 'km'),
(9, 1, 1, 'Male', 'nm', 'n,kml', 'bn mk,l', 'bn,mk.l', 'bnm'),
(10, 1, 2, 'Male', 'b m,', 'bhjkl', 'nm,nm', ',m./', 'bnm,'),
(11, 1, 1, 'Male', ' nm, n', 'b nm', 'bmn,', ' bnm', 'l;/\'j,k.l'),
(12, 1, 1, 'Male', 'bnm,', 'bnm,', 'nm,.', 'nm,', 'bnmk,'),
(0, 5, 2, 'Male', 'wollega', 'Nekemte', 'oromia', '03', 'sami'),
(0, 8, 2, 'Male', '1', '2', '2', '3\"', 'sami'),
(0, 1, 2, 'Female', '2', '2', '2', '3\"', 'naga');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
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
-- Table structure for table `population`
--

CREATE TABLE `population` (
  `id` int(11) NOT NULL,
  `male` varchar(200) NOT NULL,
  `female` varchar(255) NOT NULL,
  `tot` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`id`, `male`, `female`, `tot`, `zone_id`, `region_id`, `town_id`, `kebele`) VALUES
(1, '100', '100', '200', 1, 2, 2, 3),
(2, '20', '60', '80', 1, 2, 2, 3),
(3, '500', '600', '1100', 1, 2, 2, 3),
(4, '044', '055', '99', 1, 2, 2, 4),
(5, '2000', '1500', '3500', 1, 2, 2, 3),
(6, '2000', '6000', '8000', 11, 2, 16, 19),
(7, '6000', '8000', '14000', 6, 2, 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `post_placement`
--

CREATE TABLE `post_placement` (
  `id` int(11) NOT NULL,
  `post_placementtype_id` int(11) NOT NULL,
  `age_id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `operator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_placement`
--

INSERT INTO `post_placement` (`id`, `post_placementtype_id`, `age_id`, `sex`, `zone_id`, `region_id`, `town_id`, `kebele`, `operator`) VALUES
(1, 3, 3, 'Male', 1, 2, 2, 3, 'naga ostica');

-- --------------------------------------------------------

--
-- Table structure for table `post_placementtype`
--

CREATE TABLE `post_placementtype` (
  `pp_id` int(11) NOT NULL,
  `pp_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_placementtype`
--

INSERT INTO `post_placementtype` (`pp_id`, `pp_name`) VALUES
(1, 'Reunification'),
(2, 'Foster Care'),
(3, 'Domestic Adoption'),
(4, 'Institutional Care');

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
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` text,
  `subject` text,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `file_name`, `created_at`, `title`, `subject`, `detail`) VALUES
(1, 'durgo_user_maul.docx', '2020-08-09 14:03:48', 'STOCK MANAGEMENT SYSTEM', 'Payment Process( Paypal only work )', ' fwdszgghfhf'),
(2, 'Stack_Overflow.docx', '2020-08-09 14:59:03', 'Logo Design', 'Payment Process', ' sdfsdfsdfsdf'),
(3, '95272274_2975243962702265_3572212527301394432_o.jpg', '2020-08-11 08:08:00', 'STOCK MANAGEMENT SYSTEM', 'Payment Process( Paypal only work )', ' eiohr\'o; agj;qkm');

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
(1, 'Admin', 'Admin Can Do any thing '),
(2, 'Manager', 'Manager can do add user,role...'),
(3, 'Employee', 'Data Collectors /Data Encoding ');

-- --------------------------------------------------------

--
-- Table structure for table `totchildren`
--

CREATE TABLE `totchildren` (
  `id` int(11) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `tot` varchar(255) NOT NULL,
  `age_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `kebele` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totchildren`
--

INSERT INTO `totchildren` (`id`, `male`, `female`, `tot`, `age_id`, `region_id`, `town_id`, `kebele`, `zone_id`) VALUES
(1, '7000', '9000', '16000', 1, 2, 2, 3, 1),
(2, '200', '300', '500', 4, 2, 2, 3, 1),
(3, '6000', '12000', '18000', 1, 2, 3, 5, 3),
(4, '2000', '3000', '5000', 4, 2, 21, 24, 2);

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
  `region_id` int(11) NOT NULL DEFAULT '1',
  `zone_id` int(11) DEFAULT NULL,
  `woreda_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneno` varchar(255) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `level`, `employee_id`, `site_id`, `region_id`, `zone_id`, `woreda_id`, `role_id`, `dob`, `email`, `phoneno`, `gender_id`, `status`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'admin', '1122', NULL, NULL, NULL, 1, 4, 1, 1, '2015-09-02', 'demo@demo.dom', '0927256724', 1, 1),
(22, 'Dejene', 'Kasa', 'Alemu', 'admin1', '1122', NULL, NULL, NULL, 1, 1, 2, 2, '2019-11-22', 'demo@demo.dom', '0927256724', 2, 1);

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
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `picture`, `created`, `modified`, `status`) VALUES
(1, 'd/dollo', 'negaligngezaheng@gmail.com', '', '2019-03-20 11:02:05', '2019-03-20 11:02:05', 1),
(2, 'd/dollo', 'samsonhirpa@gmail.com', '', '2019-03-20 11:02:22', '2019-03-20 11:02:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(5, 1, 1),
(4, 2, 1),
(6, 3, 2),
(11, 4, 2),
(12, 5, 2);

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
(1, 'Digaluu fi Xijoo', '0012', 'Digaluu fi Xijoo', 1, 4),
(2, 'Giddaa Ayyaanaa', '001245', 'Giddaa', 1, 1),
(3, 'Shaallaa', '456', '1234545222222', 1, 4);

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
(1, 'Wollega baha', '001', 'Wollega Baha', 0),
(2, 'shawa baha', '002', 'shawa baha', 0),
(3, 'Arsii Lixaa', '003', 'Arsii Lixaa', 0),
(4, 'Arsii', '004', 'Arsii', 0),
(5, 'Sh/K/Lixaa', '005', 'Sh/K/Lixaa', 0),
(7, 'Sh/Lixaa', '007', 'Sh/Lixaa', 0),
(8, 'H/Guduruu', '008', 'H/Guduruu', 0),
(9, 'Baalee', '009', 'Baalee', 0),
(10, 'B/Bedellee', '010', 'Godina Bunnoo Bedellee', 1),
(11, 'Godina Addaa Naannoo Finfinnee', '011', 'Godina Addaa Naannoo Finfinnee', 0),
(12, 'Q/Wallaggaa', '012', 'Q/Wallaggaa', 0),
(13, 'Illuu Abbaa Booraa', '013', 'Illuu Abbaa Booraa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abuse_case`
--
ALTER TABLE `abuse_case`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abusetype_id` (`abusetype_id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `abuse_type`
--
ALTER TABLE `abuse_type`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`ag_id`);

--
-- Indexes for table `careandsupport`
--
ALTER TABLE `careandsupport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `careandsupporttype_id` (`careandsupporttype_id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `careandsupporttype`
--
ALTER TABLE `careandsupporttype`
  ADD PRIMARY KEY (`css_id`);

--
-- Indexes for table `ccc_services`
--
ALTER TABLE `ccc_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ccc_services_type_id` (`ccc_services_type_id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `ccc_servicestype`
--
ALTER TABLE `ccc_servicestype`
  ADD PRIMARY KEY (`ccc_id`);

--
-- Indexes for table `childcare_type`
--
ALTER TABLE `childcare_type`
  ADD PRIMARY KEY (`chc_id`);

--
-- Indexes for table `childfriendly_type`
--
ALTER TABLE `childfriendly_type`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `child_care`
--
ALTER TABLE `child_care`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disbled_type_id` (`childcare_type_id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `child_friendly`
--
ALTER TABLE `child_friendly`
  ADD PRIMARY KEY (`id`),
  ADD KEY `childfriendlytype_id` (`childfriendlytype_id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `disbled_type`
--
ALTER TABLE `disbled_type`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `disnled_children`
--
ALTER TABLE `disnled_children`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disbledtype_id` (`disbledtype_id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iga`
--
ALTER TABLE `iga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `kebele`
--
ALTER TABLE `kebele`
  ADD PRIMARY KEY (`kid`),
  ADD KEY `town_id` (`town_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
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
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population`
--
ALTER TABLE `population`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `post_placement`
--
ALTER TABLE `post_placement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_placementtype_id` (`post_placementtype_id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`);

--
-- Indexes for table `post_placementtype`
--
ALTER TABLE `post_placementtype`
  ADD PRIMARY KEY (`pp_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`r_id`);

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
-- Indexes for table `totchildren`
--
ALTER TABLE `totchildren`
  ADD PRIMARY KEY (`id`),
  ADD KEY `age_id` (`age_id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `town_id` (`town_id`),
  ADD KEY `kebele` (`kebele`),
  ADD KEY `zone_id` (`zone_id`);

--
-- Indexes for table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `zone_id` (`zone_id`);

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
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `woreda`
--
ALTER TABLE `woreda`
  ADD PRIMARY KEY (`woreda_id`),
  ADD KEY `zone_id` (`zone_id_woreda`),
  ADD KEY `region_id` (`region_id`);

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
-- AUTO_INCREMENT for table `abuse_case`
--
ALTER TABLE `abuse_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `abuse_type`
--
ALTER TABLE `abuse_type`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `ag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `careandsupport`
--
ALTER TABLE `careandsupport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careandsupporttype`
--
ALTER TABLE `careandsupporttype`
  MODIFY `css_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ccc_services`
--
ALTER TABLE `ccc_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ccc_servicestype`
--
ALTER TABLE `ccc_servicestype`
  MODIFY `ccc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `childcare_type`
--
ALTER TABLE `childcare_type`
  MODIFY `chc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `childfriendly_type`
--
ALTER TABLE `childfriendly_type`
  MODIFY `cf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `child_care`
--
ALTER TABLE `child_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `child_friendly`
--
ALTER TABLE `child_friendly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disbled_type`
--
ALTER TABLE `disbled_type`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `disnled_children`
--
ALTER TABLE `disnled_children`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iga`
--
ALTER TABLE `iga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kebele`
--
ALTER TABLE `kebele`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_employee`
--
ALTER TABLE `new_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `population`
--
ALTER TABLE `population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_placement`
--
ALTER TABLE `post_placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_placementtype`
--
ALTER TABLE `post_placementtype`
  MODIFY `pp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `totchildren`
--
ALTER TABLE `totchildren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `town`
--
ALTER TABLE `town`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `woreda`
--
ALTER TABLE `woreda`
  MODIFY `woreda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `zid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kebele`
--
ALTER TABLE `kebele`
  ADD CONSTRAINT `kebele_ibfk_1` FOREIGN KEY (`town_id`) REFERENCES `town` (`tid`);

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
