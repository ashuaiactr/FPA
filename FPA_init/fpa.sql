-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2014 at 12:14 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `assumption`
--

CREATE TABLE IF NOT EXISTS `assumption` (
`AssumptionId` int(11) NOT NULL,
  `Code` text NOT NULL,
  `Description` text NOT NULL,
  `MeasurementUnit` text NOT NULL,
  `Formula` text NOT NULL,
  `DefaultValue` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `assumption`
--

INSERT INTO `assumption` (`AssumptionId`, `Code`, `Description`, `MeasurementUnit`, `Formula`, `DefaultValue`) VALUES
(1, 'A1', 'Working', 'Hour', '', 2),
(2, 'A2', 'Days per calender month', 'Day', '', 30),
(3, 'A3', 'Productivity', '%age', '', 75),
(4, 'B1', 'Saturdays/Sundays Per Year', 'Day', '', 104),
(5, 'B2', 'Holidays/CL', 'Day', '', 23),
(6, 'B3', 'EL/PL', 'Day', '', 30),
(7, 'B4', 'Total', 'Day', 'B1+B2+B3', 157),
(8, 'C1', 'Effective Working Days In A Year', 'Day', '365-B4', 208),
(9, 'C2', 'Effective Hours per Day', 'Hour', 'A1*A3', 6),
(10, 'C3', 'Working Days Per Month', 'Day', 'C1/12', 17.33),
(11, 'F1', 'Productivity per FP (8-15person hours)', 'Hour', '', 11),
(12, 'F2', 'Productivity per FP (1.33-2.5 person days)', 'Day', 'F1/C2', 1.83),
(13, 'F3', 'Productivity per FP (0.07-0.14 person months)', 'Month', 'F2/C3', 0.11),
(14, 'F4', 'Productivity per FP (2.22 - 4.17 calender days)', 'Calender Days', 'F3*A2', 3.17),
(15, 'T1', 'Number of Test Cycles ', 'Nos ', '', 3),
(16, 'T2', 'Hours per Test Cases ', 'Hour', '', 0.5),
(17, 'T3', 'Days per Test Case', 'Day', 'T1*T2/C2', 0.25),
(18, 'T4', 'Months per Test Case', 'Month', 'T3/A2', 0.01),
(19, 'T5', 'Calender Days per Test Case ', 'Calender Days', 'T4*A2', 0.43),
(20, 'U1', 'Productivity per UCP (20-28 person hours)', 'Hour', '', 24),
(21, 'W1', 'Warranty Support per person year', 'FP', '', 500),
(22, 'W2', 'Warranty Support per FP', 'Persons Months', 'W1/12', 41.67),
(25, 'ka', 'sjdkfsj', 'alkdlf', 'ksldfls', 1241);

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE IF NOT EXISTS `function` (
  `ProjectId` int(11) NOT NULL,
  `UFP` int(11) NOT NULL,
  `VAF` int(11) NOT NULL,
  `FP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `functioncomplexity`
--

CREATE TABLE IF NOT EXISTS `functioncomplexity` (
`FunctionComplexityId` int(11) NOT NULL,
  `FunctionType` char(3) NOT NULL,
  `Complexity` char(7) NOT NULL,
  `ComplexityValue` int(11) NOT NULL,
  `DETLowerLimit` int(11) NOT NULL,
  `DETUpperLimit` int(11) NOT NULL,
  `RETLowerLimit` int(11) NOT NULL,
  `RETUpperLimit` int(11) NOT NULL,
  `FTRLowerLimit` int(11) NOT NULL,
  `FTRUpperLimit` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `functioncomplexity`
--

INSERT INTO `functioncomplexity` (`FunctionComplexityId`, `FunctionType`, `Complexity`, `ComplexityValue`, `DETLowerLimit`, `DETUpperLimit`, `RETLowerLimit`, `RETUpperLimit`, `FTRLowerLimit`, `FTRUpperLimit`) VALUES
(1, 'EI', 'Low', 3, 1, 15, 0, 0, 0, 1),
(3, 'EI', 'Low', 3, 1, 4, 0, 0, 1, 2),
(4, 'EI', 'Average', 4, 16, 100, 0, 0, 0, 1),
(5, 'EI', 'Average', 4, 5, 15, 0, 0, 1, 2),
(6, 'EI', 'Average', 4, 1, 4, 0, 0, 3, 100),
(7, 'EI', 'High', 6, 16, 100, 0, 0, 1, 2),
(8, 'EI', 'High', 6, 5, 15, 0, 0, 3, 100),
(11, 'EO', 'Low', 4, 1, 19, 0, 0, 0, 1),
(13, 'EO', 'Low', 4, 1, 5, 0, 0, 2, 3),
(14, 'EO', 'Average', 5, 20, 0, 0, 0, 0, 1),
(15, 'EO', 'Average', 5, 6, 19, 0, 0, 2, 3),
(16, 'EO', 'Average', 5, 1, 5, 0, 0, 4, 100),
(17, 'EO', 'High', 7, 20, 100, 0, 0, 1, 3),
(18, 'EO', 'High', 7, 6, 19, 0, 0, 4, 100),
(21, 'EQ', 'Low', 3, 1, 19, 0, 0, 0, 1),
(23, 'EQ', 'Low', 3, 1, 5, 0, 0, 2, 3),
(24, 'EQ', 'Average', 4, 20, 100, 0, 0, 0, 1),
(25, 'EQ', 'Average', 4, 6, 19, 0, 0, 2, 3),
(26, 'EQ', 'Average', 4, 1, 5, 0, 0, 4, 100),
(27, 'EQ', 'High', 6, 20, 100, 0, 0, 1, 3),
(28, 'EQ', 'High', 6, 6, 19, 0, 0, 4, 100),
(31, 'ILF', 'Low', 7, 1, 50, 1, 1, 0, 0),
(33, 'ILF', 'Low', 7, 1, 19, 2, 5, 0, 0),
(34, 'ILF', 'Average', 10, 51, 100, 1, 1, 0, 0),
(35, 'ILF', 'Average', 10, 20, 50, 2, 5, 0, 0),
(36, 'ILF', 'Average', 10, 1, 19, 6, 100, 0, 0),
(37, 'ILF', 'High', 15, 51, 100, 6, 100, 0, 0),
(38, 'ILF', 'High', 15, 20, 50, 6, 100, 0, 0),
(41, 'EIF', 'Low', 5, 1, 50, 1, 1, 0, 0),
(43, 'EIF', 'Low', 5, 1, 19, 2, 5, 0, 0),
(44, 'EIF', 'Average', 7, 51, 0, 1, 1, 0, 0),
(45, 'EIF', 'Average', 7, 20, 50, 2, 5, 0, 0),
(46, 'EIF', 'Average', 7, 1, 19, 6, 100, 0, 0),
(47, 'EIF', 'High', 10, 51, 100, 6, 100, 0, 0),
(48, 'EIF', 'High', 10, 20, 50, 6, 100, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gsc`
--

CREATE TABLE IF NOT EXISTS `gsc` (
`GSCId` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gsc`
--

INSERT INTO `gsc` (`GSCId`, `Title`, `Description`) VALUES
(1, 'Data communications', 'How many communication facilities are there to aid in the transfer or exchange of information with the application or system?'),
(2, 'Distributed data processing\r\n', 'How are distributed data and processing functions handled?'),
(3, 'Performance', 'Did the user require response time or throughput?\r\n'),
(4, 'Heavily used configuration', 'How heavily used is the current hardware platform where the application will be executed?'),
(5, 'Transaction rate', 'How frequently are transactions executed daily, weekly, monthly, etc.?'),
(6, 'On-Line data entry', 'What percentage of the information is entered On-Line?\r\n'),
(7, 'End-user efficiency', 'Was the application designed for end-user efficiency?\r\n'),
(8, 'On-Line update\r\n', 'How many ILFâ€™s are updated by On-Line transaction?'),
(9, 'Complex processing', 'Does the application have extensive logical or mathematical processing?\r\n'),
(10, 'Reusability\r\n', 'Was the application developed to meet one or many users needs?'),
(11, 'Installation ease\r\n', 'How difficult is conversion and installation?'),
(12, 'Operational ease', 'How effective and/or automated are start-up, back up, and recovery procedures?\r\n'),
(13, 'Multiple sites', 'Was the application specifically designed, developed, and supported to be installed at multiple sites for multiple organizations?\r\n'),
(14, 'Facilitate change', 'Was the application specifically designed, developed, and supported to facilitate change?');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `password`, `Email`) VALUES
(1, 'ashu', 'ashupassword', ''),
(2, 'ankit', 'ankit123', ''),
(3, 'honey singh', 'honey123', ''),
(4, 'asdfg', 'asdfg123', ''),
(5, 'yoyoyo', 'asdf', ''),
(6, 'shiv ', 'shiv123', ''),
(51, 'root', 'ghhjkkl', 'lw;asdla;'),
(52, 'gffhjhkk', 'tgdhgjhj', 'fgfhjkkut'),
(53, 'daljeet singh', 'dj123', 'jdrock@hotmail.com'),
(54, 'b', 'b', 'b'),
(56, 'asdf', 'asdf', 'addfgg'),
(59, 'loasdk', 'askdls', 'jsdkfkdkk'),
(88, 'msdfsd', 'kdlfkdsl', 'klsdas'),
(89, 'jsakdjak', 'jsdkfjdkj', 'jdkfjdskjkjsd'),
(90, 'dfsdjk', 'jsdkfjsdk', 'jkafjasfjsk'),
(91, 'this', 'is', 'it');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `ProjectId` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `FunctionPoints` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectId`, `Title`, `Description`, `FunctionPoints`) VALUES
(1, 'matlab ', 'matlab is a research software ', 17),
(2, 'adlabs', 'adlabs software used to create the animated films', 20),
(3, 'autocad ', 'autocad is used for designing other stuff', 28),
(4, 'matlab 4.0.1', 'matlab is a research tool', 0),
(5, 'adlabs 1.1.10', 'used to create the animated films', 0),
(6, 'vlc', 'vlc is a music player', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projectassumption`
--

CREATE TABLE IF NOT EXISTS `projectassumption` (
  `ProjectAssumptionId` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `AssumptionId` int(11) NOT NULL,
  `AssumptionValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectassumption`
--

INSERT INTO `projectassumption` (`ProjectAssumptionId`, `ProjectId`, `AssumptionId`, `AssumptionValue`) VALUES
(1, 1, 2, 4),
(2, 2, 1, 1),
(3, 3, 4, 2),
(4, 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `projectfunction`
--

CREATE TABLE IF NOT EXISTS `projectfunction` (
  `ProjectFunctionId` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `Function` varchar(25) NOT NULL,
  `FunctionType` char(3) NOT NULL,
  `DET` int(11) NOT NULL,
  `RET` int(11) NOT NULL,
  `FTR` int(11) NOT NULL,
  `UFP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectfunction`
--

INSERT INTO `projectfunction` (`ProjectFunctionId`, `ProjectId`, `Function`, `FunctionType`, `DET`, `RET`, `FTR`, `UFP`) VALUES
(1, 1, 'Function1', 'EI', 2, 3, 3, 23),
(2, 2, 'Function2', 'EQ', 3, 4, 4, 25),
(3, 3, 'Function3', 'EIQ', 6, 8, 7, 36);

-- --------------------------------------------------------

--
-- Table structure for table `projectgsc`
--

CREATE TABLE IF NOT EXISTS `projectgsc` (
`ProjectGSCId` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `GSCId` int(11) NOT NULL,
  `GSCValue` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `projectgsc`
--

INSERT INTO `projectgsc` (`ProjectGSCId`, `ProjectId`, `GSCId`, `GSCValue`) VALUES
(1, 1, 2, 3),
(2, 2, 3, 4),
(3, 2, 5, 5),
(4, 2, 6, 2),
(5, 3, 3, 2),
(6, 2, 3, 4),
(7, 1, 4, 4),
(8, 1, 2, 4),
(9, 3, 6, 5),
(10, 3, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `projectsdlc`
--

CREATE TABLE IF NOT EXISTS `projectsdlc` (
  `ProjectSDLCId` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `SDLCId` int(11) NOT NULL,
  `SDLCValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sdlc`
--

CREATE TABLE IF NOT EXISTS `sdlc` (
`SDLCId` int(11) NOT NULL,
  `Code` text NOT NULL,
  `Activity` text NOT NULL,
  `MeasurementUnit` varchar(15) NOT NULL DEFAULT 'Percentage',
  `IndustryStandardValue` double NOT NULL,
  `OrganisationStandard` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sdlc`
--

INSERT INTO `sdlc` (`SDLCId`, `Code`, `Activity`, `MeasurementUnit`, `IndustryStandardValue`, `OrganisationStandard`) VALUES
(1, 'A', 'project management', '', 5, 7),
(2, 'A', 'Project Management', '', 5, 0),
(3, 'A1', 'Coordination', '', 3, 0),
(4, 'A2', 'Configuration Management', '', 3, 0),
(5, 'A3', 'Quality Assurance ', '', 2, 0),
(6, 'B', 'Analysis', '', 15, 15),
(7, 'C', 'Design', '', 15, 15),
(8, 'D', 'Programming and Unit Testing ', '', 0, 0),
(9, 'D1', 'Development ', '', 15, 37),
(10, 'D2', 'Unit Testing', '', 20, 0),
(11, 'E', 'Verification and Validation ', '', 0, 0),
(12, 'E1', 'Integration Testing ', '', 17.5, 10),
(13, 'E2', 'System Testing ', '', 17.5, 10),
(14, 'E3', 'Acceptance Testing', '', 0, 0),
(15, 'E4', 'Security Audit', '', 0, 5),
(16, 'F', 'Training and Installation', '', 0, 0),
(17, 'F', 'Installation', '', 0, 5),
(18, 'F2', 'One Week Training ', '', 7.5, 3),
(19, 'G', '6 Months Warranty', '', 0, 0),
(20, 'G1', 'Level I', '', 0, 5),
(21, 'G2', 'Level II', '', 0, 2),
(22, 'G3', 'Level III', '', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assumption`
--
ALTER TABLE `assumption`
 ADD PRIMARY KEY (`AssumptionId`);

--
-- Indexes for table `function`
--
ALTER TABLE `function`
 ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `functioncomplexity`
--
ALTER TABLE `functioncomplexity`
 ADD PRIMARY KEY (`FunctionComplexityId`);

--
-- Indexes for table `gsc`
--
ALTER TABLE `gsc`
 ADD PRIMARY KEY (`GSCId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `projectassumption`
--
ALTER TABLE `projectassumption`
 ADD PRIMARY KEY (`ProjectAssumptionId`), ADD KEY `ProjectId` (`ProjectId`), ADD KEY `AssumptionId` (`AssumptionId`);

--
-- Indexes for table `projectfunction`
--
ALTER TABLE `projectfunction`
 ADD PRIMARY KEY (`ProjectFunctionId`), ADD KEY `ProjectId` (`ProjectId`);

--
-- Indexes for table `projectgsc`
--
ALTER TABLE `projectgsc`
 ADD PRIMARY KEY (`ProjectGSCId`), ADD KEY `ProjectId` (`ProjectId`), ADD KEY `GSCId` (`GSCId`);

--
-- Indexes for table `projectsdlc`
--
ALTER TABLE `projectsdlc`
 ADD PRIMARY KEY (`ProjectSDLCId`), ADD KEY `ProjectId` (`ProjectId`), ADD KEY `SDLCId` (`SDLCId`);

--
-- Indexes for table `sdlc`
--
ALTER TABLE `sdlc`
 ADD PRIMARY KEY (`SDLCId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assumption`
--
ALTER TABLE `assumption`
MODIFY `AssumptionId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `functioncomplexity`
--
ALTER TABLE `functioncomplexity`
MODIFY `FunctionComplexityId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `gsc`
--
ALTER TABLE `gsc`
MODIFY `GSCId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `projectgsc`
--
ALTER TABLE `projectgsc`
MODIFY `ProjectGSCId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sdlc`
--
ALTER TABLE `sdlc`
MODIFY `SDLCId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `projectassumption`
--
ALTER TABLE `projectassumption`
ADD CONSTRAINT `projectassumption_ibfk_1` FOREIGN KEY (`ProjectId`) REFERENCES `project` (`ProjectId`),
ADD CONSTRAINT `projectassumption_ibfk_2` FOREIGN KEY (`AssumptionId`) REFERENCES `assumption` (`AssumptionId`);

--
-- Constraints for table `projectfunction`
--
ALTER TABLE `projectfunction`
ADD CONSTRAINT `projectfunction_ibfk_1` FOREIGN KEY (`ProjectId`) REFERENCES `project` (`ProjectId`);

--
-- Constraints for table `projectgsc`
--
ALTER TABLE `projectgsc`
ADD CONSTRAINT `projectgsc_ibfk_1` FOREIGN KEY (`ProjectId`) REFERENCES `project` (`ProjectId`),
ADD CONSTRAINT `projectgsc_ibfk_2` FOREIGN KEY (`GSCId`) REFERENCES `gsc` (`GSCId`);

--
-- Constraints for table `projectsdlc`
--
ALTER TABLE `projectsdlc`
ADD CONSTRAINT `projectsdlc_ibfk_1` FOREIGN KEY (`ProjectId`) REFERENCES `project` (`ProjectId`),
ADD CONSTRAINT `projectsdlc_ibfk_2` FOREIGN KEY (`SDLCId`) REFERENCES `sdlc` (`SDLCId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
