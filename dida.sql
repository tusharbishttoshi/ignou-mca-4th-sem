-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 08:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dida`
--

-- --------------------------------------------------------

--
-- Table structure for table `dida_admin`
--

CREATE TABLE `dida_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_mobile` varchar(10) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(150) NOT NULL,
  `admin_reset_link` varchar(150) DEFAULT NULL,
  `admin_reset_time` datetime DEFAULT NULL,
  `admin_dp` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dida_admin`
--

INSERT INTO `dida_admin` (`admin_id`, `admin_name`, `admin_mobile`, `admin_email`, `admin_password`, `admin_reset_link`, `admin_reset_time`, `admin_dp`, `status`) VALUES
(1, 'Tushar Bisht', '9760373544', 'tusharbisht@test.com', 'admin@123', '66702a93af9c5eae0c14ab797a3c5ae5', '2019-09-05 11:53:06', 'follower-avatar.jpg', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dida_events`
--

CREATE TABLE `dida_events` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `position` int(11) NOT NULL,
  `event_date` datetime NOT NULL,
  `image` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `create_date` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dida_events`
--

INSERT INTO `dida_events` (`id`, `title`, `position`, `event_date`, `image`, `details`, `create_date`, `status`) VALUES
(3, 'Flood Relief Program', 1, '1980-03-19 05:30:00', 'kerela_relief.jpg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet. Atque ego: Scis me, inquam, istud idem sentire, Piso, sed a te opportune facta mentio est. Ut non sine causa ex iis memoriae ducta sit disciplina.<br> ', '2021-03-31', 'ACTIVE'),
(4, 'Covid Testing At Delhi & Maharastra', 2, '1970-01-01 07:30:00', 'covid_testing.jpg', ' Omnia contraria, quos etiam insanos esse vultis. Quis est enim, qui hoc cadere in sapientem dicere audeat, ut, si fieri possit, virtutem in perpetuum abiciat, ut dolore omni liberetur? Quae tamen a te agetur non melior, quam illae sunt, quas interdum optines. Duo Reges: constructio interrete. Quis tibi ergo istud dabit praeter Pyrrhonem, Aristonem eorumve similes, quos tu non probas? Ne amores quidem sanctos a sapiente alienos esse arbitrantur.<br> ', '2021-03-31', 'ACTIVE'),
(5, 'Accomodating Migrants', 3, '1980-04-05 04:30:00', 'lockdown_workers.jpg', ' <br>Nam, ut saepe iam dixi, in infirma aetate inbecillaque mente vis naturae quasi per caliginem cernitur; Vidit Homerus probari fabulam non posse, si cantiunculis tantus irretitus vir teneretur; Nam si dicent ab illis has res esse tractatas, ne ipsos quidem Graecos est cur tam multos legant, quam legendi sunt. Paria sunt igitur. Sed ad haec, nisi molestum est, habeo quae velim. Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum memoria. <br> ', '2021-03-31', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dida_images_gallery`
--

CREATE TABLE `dida_images_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dida_images_gallery`
--

INSERT INTO `dida_images_gallery` (`id`, `title`, `img_path`, `create_date`) VALUES
(3, 'Children ', 'childhappy.jpg', '2021-03-31'),
(4, 'plantation', 'environment.jpg', '2021-03-31'),
(5, 'extra_curricular', 'extra.jpg', '2021-03-31'),
(6, 'education', 'education.jpg', '2021-03-31'),
(7, 'girl_child', 'girlchild.jpg', '2021-03-31'),
(8, 'women_empowerment', 'women-empowerment.jpg', '2021-03-31'),
(9, 'art_and_craft', 'craft.jpg', '2021-03-31'),
(10, 'rural_women_enterprenureship', 'villagervendors.jpg', '2021-03-31'),
(11, 'entrepreneurs', 'entrepreneurs.jpg', '2021-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `dida_inquiry`
--

CREATE TABLE `dida_inquiry` (
  `inquiry_id` int(11) NOT NULL,
  `inquiry_date` datetime NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `inquiry_subject` tinytext NOT NULL,
  `inquiry_message` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dida_inquiry`
--

INSERT INTO `dida_inquiry` (`inquiry_id`, `inquiry_date`, `name`, `email`, `inquiry_subject`, `inquiry_message`, `mobile`, `status`, `remarks`) VALUES
(45, '2019-08-29 18:49:10', 'Tarun Chaudhary', 'tarun.comsoft@gmail.com', 'Enquiry for deals', 'Flight deals Landon to Sri Lanka ,sssss', '1111111111', 'NEW', ''),
(46, '2019-08-29 18:49:22', 'Tarun Chaudhary', 'tarun.comsoft@gmail.com', 'Enquiry for deals', 'Flight deals London To Paris ,ff', '1111111111', 'NEW', ''),
(47, '2019-08-29 18:52:25', 'Tarun Chaudhary', 'tarun.comsoft@gmail.com', 'Enquiry for deals', 'Flight deals London To Rome ,', '1111111111', 'NEW', ''),
(48, '2019-08-29 18:54:30', 'Tarun Chaudhary', 'tarun.comsoft@gmail.com', 'Enquiry for deals', 'Flight deals London To frankfurt ,s', '1111111111', 'NEW', ''),
(49, '2019-08-29 19:06:28', 'Tarun Chaudhary', 'tarun.comsoft@gmail.com', 'Enquiry from Contact us page', 'Message : ', '1112223334', 'NEW', '');

-- --------------------------------------------------------

--
-- Table structure for table `dida_members`
--

CREATE TABLE `dida_members` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gaurdian_name` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `remarks` tinytext NOT NULL,
  `status` enum('NEW','ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dida_members`
--

INSERT INTO `dida_members` (`id`, `name`, `gaurdian_name`, `mobile`, `email`, `gender`, `id_number`, `dob`, `qualification`, `occupation`, `address`, `create_date`, `remarks`, `status`) VALUES
(1, 'Tushar Bisht', 'Jagdish Singh Bisht', '9760373544', 'tusharbisht276@gmail.com', 'MALE', '6532 1896 4445 1226', '2021-03-18', 'MCA (IGNOU)', 'Full Stack Web Developer', 'Jagdish Singh Bisht\r\nNear Hanuman Mandir\r\nMoholla Bambagher\r\nRamnagar (Nainital)\r\nUttarakhand', '2021-04-01 15:16:00', 'Admin', 'ACTIVE'),
(3, 'TUSHAR BISHT', 'snlk', '99859985588', 'tussh@test.com', 'MALE', '123655555884', '1998-03-18', 'skskk', 'dmmdej', 'ranmdn', '2021-04-05 10:38:00', '', 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `dida_programs`
--

CREATE TABLE `dida_programs` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `create_date` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dida_programs`
--

INSERT INTO `dida_programs` (`id`, `title`, `images`, `details`, `create_date`, `status`) VALUES
(1, 'Mega Nutrition Program', 'nutprog1.jpg', '<b>Mega Nutrition Program , </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tamen aberramus a proposito, et, ne longius, prorsus, inquam, Piso, si ista mala sunt, placet. Atque ego: Scis me, inquam, istud idem sentire, Piso, sed a te opportune facta mentio est.<br><div><br></div> ', '2019-09-29', 'ACTIVE'),
(2, 'Health Care Program', 'healthcare-mast.jpg', '<b>Health Care Program&nbsp;</b> Atque ego: Scis me, inquam, istud idem sentire, Piso, sed a te opportune facta mentio est. Ut non sine causa ex iis memoriae ducta sit disciplina. Omnia contraria, quos etiam insanos esse vultis.<br>', '2021-03-31', 'ACTIVE'),
(3, 'Sports for All', 'sports_prog.jpg', '<b>Sports keep You healthy. </b>Nam, ut saepe iam dixi, in infirma aetate inbecillaque mente vis naturae quasi per caliginem cernitur; Vidit Homerus probari fabulam non posse, si cantiunculis tantus irretitus vir teneretur; Nam si dicent ab illis has res esse tractatas, ne ipsos quidem Graecos est cur tam multos legant, quam legendi sunt.<br>', '2021-03-31', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dida_video_gallery`
--

CREATE TABLE `dida_video_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `video_type` int(1) NOT NULL,
  `video_path` varchar(200) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dida_admin`
--
ALTER TABLE `dida_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dida_events`
--
ALTER TABLE `dida_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dida_images_gallery`
--
ALTER TABLE `dida_images_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dida_inquiry`
--
ALTER TABLE `dida_inquiry`
  ADD PRIMARY KEY (`inquiry_id`);

--
-- Indexes for table `dida_members`
--
ALTER TABLE `dida_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dida_programs`
--
ALTER TABLE `dida_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dida_video_gallery`
--
ALTER TABLE `dida_video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dida_admin`
--
ALTER TABLE `dida_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dida_events`
--
ALTER TABLE `dida_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dida_images_gallery`
--
ALTER TABLE `dida_images_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dida_inquiry`
--
ALTER TABLE `dida_inquiry`
  MODIFY `inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `dida_members`
--
ALTER TABLE `dida_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dida_programs`
--
ALTER TABLE `dida_programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dida_video_gallery`
--
ALTER TABLE `dida_video_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
