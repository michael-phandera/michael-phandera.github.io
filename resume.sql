-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 03:08 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(2) NOT NULL,
  `qulification` varchar(250) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `institution` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `qulification`, `duration`, `institution`) VALUES
(1, 'BSC. ICT', '2012 - 2016', 'Mzuzu University');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(3) NOT NULL,
  `company` varchar(250) NOT NULL,
  `period` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `role1` text NOT NULL,
  `role2` text NOT NULL,
  `role3` text NOT NULL,
  `role4` text NOT NULL,
  `role5` text NOT NULL,
  `role6` text NOT NULL,
  `role7` text NOT NULL,
  `role8` text NOT NULL,
  `role9` text NOT NULL,
  `role10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `company`, `period`, `position`, `role1`, `role2`, `role3`, `role4`, `role5`, `role6`, `role7`, `role8`, `role9`, `role10`) VALUES
(1, 'United Nations Development Programme (UNDP)', '2yrs 4mos', 'Software Developer - Infographics and Visuals (IC)', ' Application integrations', 'Developing Dashboards   - Power bi , Metabase, dc.js, d3js, Highchartjs & Chart js, leafletjs, etc.', ' Designing Databases', ' Software development', 'Software Documentation', ' User support', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `id` int(2) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`id`, `content`) VALUES
(1, 'I am a Professional Software Engineer with BSc in ICT and 6+ years of experience in the Software \r\nEngineering, Data Visualization, Database Management & Machine Learning. I have worked in a \r\nnumber of Software projects for example: development of Malawi Disaster Management Information \r\nSystem, Malawi Humanitarian Response System (5Ws) [link], integration of e-wallet providers systems\r\n(Airtel Money, Mpamba, MO626) to service providers systems (Water board, Escom), development of \r\nAgrijobs Malawi [link], Integration of Lilongwe Waterboard website to their prepaid subsystem [link],\r\ncontributed to development of CorparateSMS system, to mention a few. I am currently working with \r\nUNDP as Software Developer â€“ Visuals & Infographics where I am responsible for software \r\ndevelopment and all data visualizations (Building web Dashboards, charts, maps and infographics) \r\nhappening under DRM4R project (UNDP IM Unit) which focuses on disaster management.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'michaelphandera@gmail.com', '2345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
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
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
