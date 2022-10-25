-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 09:49 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbqeai`
--

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular_activities`
--

CREATE TABLE `co_curricular_activities` (
  `Criteria_ID` int(255) NOT NULL,
  `Criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_curricular_activities`
--

INSERT INTO `co_curricular_activities` (`Criteria_ID`, `Criteria`) VALUES
(1, '4.1 Implementation of a \r\nproper co-curricular plan'),
(2, '4.2 Productive implementation of co – curricular activities in the primary section'),
(3, '4.3 Provision of opportunities for physical development of students'),
(4, '4.4 Development of students’ potentialities, creativity and personality'),
(5, '4.5 Taking steps to inculcate \r\nethics and values');

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular_activities_main`
--

CREATE TABLE `co_curricular_activities_main` (
  `Co_curricular_Activities_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_curricular_activities_main`
--

INSERT INTO `co_curricular_activities_main` (`Co_curricular_Activities_ID`, `School_ID`, `Activity_Number`, `Marks`, `Status`, `Session_Name`) VALUES
(1, 1010001, '4.3.1', '45', '', 'Kirupan Inpathas'),
(2, 1010001, '4.3.2', '45', '', 'Kirupan Inpathas'),
(3, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(4, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(5, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(6, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(7, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(8, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(9, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(10, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(11, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(12, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(13, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(14, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(15, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(16, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(17, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(18, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(19, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(20, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(21, 1010001, '4.5.1', '34', '', 'Kirupan Inpathas'),
(22, 1010001, '4.5.2', '13', '', 'Kirupan Inpathas'),
(23, 1010001, '4.1.1', '56', '', 'Kirupan Inpathas'),
(24, 1010001, '4.1.2', '43', '', 'Kirupan Inpathas'),
(25, 1010001, '4.1.1', '56', '', 'Kirupan Inpathas'),
(26, 1010001, '4.1.2', '90', '', 'Kirupan Inpathas');

-- --------------------------------------------------------

--
-- Table structure for table `evaluator`
--

CREATE TABLE `evaluator` (
  `email` varchar(255) NOT NULL,
  `School_ID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `UserInputName` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Time_submit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluator`
--

INSERT INTO `evaluator` (`email`, `School_ID`, `name`, `UserInputName`, `Section`, `Time_submit`) VALUES
('email', 0, 'username', 'Kirupan', 'username', '0000-00-00'),
('email', 100110, 'username', 'Kirupan', 'username', '2022-10-19'),
('email', 100110, 'username', 'Kirupan', 'username', '2022-10-19'),
('email', 1010001, 'username', 'Kirupan', 'username', '2022-10-19'),
('email', 1010001, 'Kirupan Inpathas', 'Kirupan', 'username', '2022-10-19'),
('ikirupan@gmail.com', 1010001, 'Kirupan Inpathas', 'Kirupan Pilot', 'username', '2022-10-19'),
('ikirupan@gmail.com', 1010001, 'Kirupan Inpathas', 'DR Kirupan', 'Primary Section 111', '2022-10-19');

-- --------------------------------------------------------

--
-- Table structure for table `formal_curriculum_management`
--

CREATE TABLE `formal_curriculum_management` (
  `Criteria_ID` int(255) NOT NULL,
  `Criteria_Number` varchar(255) NOT NULL,
  `Criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formal_curriculum_management`
--

INSERT INTO `formal_curriculum_management` (`Criteria_ID`, `Criteria_Number`, `Criteria`) VALUES
(1, '1', '3.1. Preparation of plans to implement the curriculum to achieve national educational goals and basic competencies'),
(2, '2', '3.2 Implementation of the teaching-learning process in the primary section'),
(3, '3', '3.3 Systematic implementation of the assessment process for acquiring learning competencies'),
(4, '4', '3.4 Using Physical resources productively to create a positive learning environment'),
(5, '5', '3.5 Provision of maximum facilities to students who require special attention / support'),
(6, '6', '3.6 Productive use of systematic distribution of textbooks, syllabi and teacher instructional manuals'),
(7, '7', '3.7 Maintaining class record books'),
(8, '8', '3.8 Implementation of Projects related to the development of student competencies');

-- --------------------------------------------------------

--
-- Table structure for table `formal_curriculum_management_main`
--

CREATE TABLE `formal_curriculum_management_main` (
  `Formal_Curriculum_Management_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formal_curriculum_management_main`
--

INSERT INTO `formal_curriculum_management_main` (`Formal_Curriculum_Management_ID`, `School_ID`, `Activity_Number`, `Marks`, `Status`, `Session_Name`) VALUES
(1, 1010001, '5.3.1', '5', '', 'Kirupan Inpathas'),
(2, 1010001, '5.3.2', '8', '', 'Kirupan Inpathas'),
(3, 1010001, '5.3.1', '56', '', 'Kirupan Inpathas'),
(4, 1010001, '5.3.2', '7', '', 'Kirupan Inpathas'),
(5, 1010001, '5.3.1', '76', '', 'Kirupan Inpathas'),
(6, 1010001, '5.3.2', '89', '', 'Kirupan Inpathas'),
(7, 1010001, '5.3.1', '1', '', 'Kirupan Inpathas'),
(8, 1010001, '5.3.2', '2', '', 'Kirupan Inpathas'),
(9, 1010001, '3.1.1', '12', '', 'Kirupan Inpathas'),
(10, 1010001, '3.1.2', '23', '', 'Kirupan Inpathas'),
(11, 1010001, '4.2.1', '12', '', 'Kirupan Inpathas'),
(12, 1010001, '4.2.2', '34', '', 'Kirupan Inpathas'),
(13, 1010001, '4.2.3', '64', '', 'Kirupan Inpathas'),
(14, 1010001, '4.2.4', '54', '', 'Kirupan Inpathas'),
(15, 1010001, '4.2.1', '12', '', 'Kirupan Inpathas'),
(16, 1010001, '4.2.2', '34', '', 'Kirupan Inpathas'),
(17, 1010001, '4.2.3', '64', '', 'Kirupan Inpathas'),
(18, 1010001, '4.2.4', '54', '', 'Kirupan Inpathas'),
(19, 1010001, '4.2.1', '12', '', 'Kirupan Inpathas'),
(20, 1010001, '4.2.2', '34', '', 'Kirupan Inpathas'),
(21, 1010001, '4.2.3', '64', '', 'Kirupan Inpathas'),
(22, 1010001, '4.2.4', '54', '', 'Kirupan Inpathas'),
(23, 1010001, '4.4.1', '45', '', 'Kirupan Inpathas'),
(24, 1010001, '4.4.2', '34', '', 'Kirupan Inpathas'),
(25, 1010001, '4.4.3', '89', '', 'Kirupan Inpathas'),
(26, 1010001, '4.4.4', '56', '', 'Kirupan Inpathas'),
(27, 1010001, '3.2.1', '23', '', 'Kirupan Inpathas'),
(28, 1010001, '3.2.2', '56', '', 'Kirupan Inpathas'),
(29, 1010001, '3.2.3', '65', '', 'Kirupan Inpathas'),
(30, 1010001, '3.3.1', '67', '', 'Kirupan Inpathas'),
(31, 1010001, '3.3.2', '56', '', 'Kirupan Inpathas'),
(32, 1010001, '3.3.3', '45', '', 'Kirupan Inpathas'),
(33, 1010001, '3.3.4', '34', '', 'Kirupan Inpathas'),
(34, 1010001, '3.4.1', '47', '', 'Kirupan Inpathas'),
(35, 1010001, '3.4.2', '89', '', 'Kirupan Inpathas'),
(36, 1010001, '3.4.3', '96', '', 'Kirupan Inpathas'),
(37, 1010001, '3.5.1', '46', '', 'Kirupan Inpathas'),
(38, 1010001, '3.5.2', '45', '', 'Kirupan Inpathas'),
(39, 1010001, '3.5.3', '45', '', 'Kirupan Inpathas'),
(40, 1010001, '3.6.1', '90', '', 'Kirupan Inpathas'),
(41, 1010001, '3.6.2', '98', '', 'Kirupan Inpathas'),
(42, 1010001, '3.7.1', '98', '', 'Kirupan Inpathas'),
(43, 1010001, '3.7.2', '86', '', 'Kirupan Inpathas'),
(44, 1010001, '3.7.3', '93', '', 'Kirupan Inpathas'),
(45, 1010001, '3.7.4', '86', '', 'Kirupan Inpathas'),
(46, 1010001, '3.1.1', '17', '', 'Kirupan Inpathas'),
(47, 1010001, '3.1.2', '23', '', 'Kirupan Inpathas'),
(48, 1010001, '3.1.1', '17', '', 'Kirupan Inpathas'),
(49, 1010001, '3.1.2', '23', '', 'Kirupan Inpathas'),
(50, 1010001, '3.1.1', '12', '', 'Kirupan Inpathas'),
(51, 1010001, '3.1.2', '90', '', 'Kirupan Inpathas'),
(52, 1010001, '3.2.1', '23', '', 'Kirupan Inpathas'),
(53, 1010001, '3.2.2', '90', '', 'Kirupan Inpathas'),
(54, 1010001, '3.2.3', '65', '', 'Kirupan Inpathas');

-- --------------------------------------------------------

--
-- Table structure for table `form_selection`
--

CREATE TABLE `form_selection` (
  `Form_Selection_ID` int(255) NOT NULL,
  `School_ID` int(255) NOT NULL,
  `Section` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_selection`
--

INSERT INTO `form_selection` (`Form_Selection_ID`, `School_ID`, `Section`) VALUES
(1, 1010001, '1.1. Primary Section'),
(2, 1010001, '1.2 Secondary Section'),
(3, 1010002, '1.2 Secondary Section'),
(4, 1010003, '1.1. Primary Section'),
(5, 1010003, '1.2 Secondary Section');

-- --------------------------------------------------------

--
-- Table structure for table `leadership_and_management`
--

CREATE TABLE `leadership_and_management` (
  `Criteria_ID` int(255) NOT NULL,
  `Criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leadership_and_management`
--

INSERT INTO `leadership_and_management` (`Criteria_ID`, `Criteria`) VALUES
(1, '6.1 Implementation of vision and mission in the school'),
(2, '6.2 Preparation of the five year and annual implementation plan'),
(3, '6.3 Providing effective leadership'),
(4, '6.4 Implementing School productive development programmes'),
(5, '6.5 Productive implementation of the time table'),
(6, '6.6 The starting and the ending of the school day is conducted methodically'),
(7, '6.7 Proper Managment of financial administration in the school'),
(8, '6.8 Quality development of school through accurate internal and external evaluation'),
(9, '6.9 Effective maintenance of students’ registers'),
(10, '6.10 Effective maintenance of staff attendance registers and leave records'),
(11, '6.11 Fulfillment of human resources and its systematic monitoring'),
(12, '6.12 Make Arrangements for the professional development of staff'),
(13, '6.13 Maintain a productive System of education management'),
(14, '6.14 Maintain a high standard of discipline in the school (Academic and non - academic)'),
(15, '6.15 Performance of academic and non - academic staff'),
(16, '6.16 Systematic maintenance of files and documents');

-- --------------------------------------------------------

--
-- Table structure for table `leadership_management_main`
--

CREATE TABLE `leadership_management_main` (
  `Leadership_Management_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leadership_management_main`
--

INSERT INTO `leadership_management_main` (`Leadership_Management_ID`, `School_ID`, `Activity_Number`, `Marks`, `Status`, `Session_Name`) VALUES
(1, 1010001, '6.16.1', '23', '', 'Kirupan Inpathas'),
(2, 1010001, '6.16.2', '34', '', 'Kirupan Inpathas'),
(3, 1010001, '6.16.3', '45', '', 'Kirupan Inpathas'),
(4, 1010001, '6.15.1', '2', '', 'Kirupan Inpathas'),
(5, 1010001, '6.15.2', '3', '', 'Kirupan Inpathas'),
(6, 1010001, '6.4.1', '45', '', 'Kirupan Inpathas'),
(7, 1010001, '6.4.2', '34', '', 'Kirupan Inpathas'),
(8, 1010001, '6.4.3', '11', '', 'Kirupan Inpathas'),
(9, 1010001, '6.5.1', '31', '', 'Kirupan Inpathas'),
(10, 1010001, '6.5.2', '23', '', 'Kirupan Inpathas'),
(11, 1010001, '6.6.1', '12', '', 'Kirupan Inpathas'),
(12, 1010001, '6.6.2', '44', '', 'Kirupan Inpathas'),
(13, 1010001, '6.7.1', '4', '', 'Kirupan Inpathas'),
(14, 1010001, '6.7.2', '3', '', 'Kirupan Inpathas'),
(15, 1010001, '6.7.3', '2', '', 'Kirupan Inpathas'),
(16, 1010001, '6.7.4', '1', '', 'Kirupan Inpathas'),
(17, 1010001, '6.8.1', '5', '', 'Kirupan Inpathas'),
(18, 1010001, '6.8.2', '6', '', 'Kirupan Inpathas'),
(19, 1010001, '6.8.3', '7', '', 'Kirupan Inpathas'),
(20, 1010001, '6.8.4', '8', '', 'Kirupan Inpathas'),
(21, 1010001, '6.14.1', '5', '', 'Kirupan Inpathas'),
(22, 1010001, '6.14.2', '3', '', 'Kirupan Inpathas'),
(23, 1010001, '6.13.1', '34', '', 'Kirupan Inpathas'),
(24, 1010001, '6.13.2', '32', '', 'Kirupan Inpathas'),
(25, 1010001, '6.13.3', '13', '', 'Kirupan Inpathas'),
(26, 1010001, '6.12.1', '1', '', 'Kirupan Inpathas'),
(27, 1010001, '6.12.2', '1', '', 'Kirupan Inpathas'),
(28, 1010001, '6.12.3', '1', '', 'Kirupan Inpathas'),
(29, 1010001, '6.11.1', '12', '', 'Kirupan Inpathas'),
(30, 1010001, '6.11.2', '34', '', 'Kirupan Inpathas'),
(31, 1010001, '6.10.1', '54', '', 'Kirupan Inpathas'),
(32, 1010001, '6.10.2', '33', '', 'Kirupan Inpathas'),
(33, 1010001, '6.10.3', '21', '', 'Kirupan Inpathas'),
(34, 1010001, '6.10.4', '56', '', 'Kirupan Inpathas'),
(35, 1010001, '6.1.1', '12', '', 'Kirupan Inpathas'),
(36, 1010001, '6.1.2', '13', '', 'Kirupan Inpathas'),
(37, 1010001, '6.10.1', '54', '', 'Kirupan Inpathas'),
(38, 1010001, '6.10.2', '33', '', 'Kirupan Inpathas'),
(39, 1010001, '6.10.3', '21', '', 'Kirupan Inpathas'),
(40, 1010001, '6.10.4', '56', '', 'Kirupan Inpathas'),
(41, 1010001, '6.16.1', '23', '', 'Kirupan Inpathas'),
(42, 1010001, '6.16.2', '34', '', 'Kirupan Inpathas'),
(43, 1010001, '6.16.3', '45', '', 'Kirupan Inpathas'),
(44, 1010001, '6.15.1', '2', '', 'Kirupan Inpathas'),
(45, 1010001, '6.15.2', '2', '', 'Kirupan Inpathas'),
(46, 1010001, '6.15.1', '2', '', 'Kirupan Inpathas'),
(47, 1010001, '6.15.2', '2', '', 'Kirupan Inpathas'),
(48, 1010001, '6.14.1', '5', '', 'Kirupan Inpathas'),
(49, 1010001, '6.14.2', '3', '', 'Kirupan Inpathas'),
(50, 1010001, '6.14.1', '5', '', 'Kirupan Inpathas'),
(51, 1010001, '6.14.2', '3', '', 'Kirupan Inpathas'),
(52, 1010001, '6.13.1', '34', '', 'Kirupan Inpathas'),
(53, 1010001, '6.13.2', '32', '', 'Kirupan Inpathas'),
(54, 1010001, '6.13.3', '13', '', 'Kirupan Inpathas'),
(55, 1010001, '6.12.1', '1', '', 'Kirupan Inpathas'),
(56, 1010001, '6.12.2', '1', '', 'Kirupan Inpathas'),
(57, 1010001, '6.12.3', '1', '', 'Kirupan Inpathas'),
(58, 1010001, '6.11.1', '12', '', 'Kirupan Inpathas'),
(59, 1010001, '6.11.2', '34', '', 'Kirupan Inpathas'),
(60, 1010001, '6.11.1', '12', '', 'Kirupan Inpathas'),
(61, 1010001, '6.11.2', '34', '', 'Kirupan Inpathas'),
(62, 1010001, '6.10.1', '54', '', 'Kirupan Inpathas'),
(63, 1010001, '6.10.2', '33', '', 'Kirupan Inpathas'),
(64, 1010001, '6.10.3', '21', '', 'Kirupan Inpathas'),
(65, 1010001, '6.10.4', '56', '', 'Kirupan Inpathas'),
(66, 1010001, '6.1.1', '12', '', 'Kirupan Inpathas'),
(67, 1010001, '6.1.2', '13', '', 'Kirupan Inpathas'),
(68, 1010001, '6.10.1', '54', '', 'Kirupan Inpathas'),
(69, 1010001, '6.10.2', '33', '', 'Kirupan Inpathas'),
(70, 1010001, '6.10.3', '21', '', 'Kirupan Inpathas'),
(71, 1010001, '6.10.4', '56', '', 'Kirupan Inpathas'),
(72, 1010001, '6.2.1', '12', '', 'Kirupan Inpathas'),
(73, 1010001, '6.2.2', '12', '', 'Kirupan Inpathas'),
(74, 1010001, '6.2.3', '32', '', 'Kirupan Inpathas'),
(75, 1010001, '6.2.4', '13', '', 'Kirupan Inpathas'),
(76, 1010001, '6.2.4', '34', '', 'Kirupan Inpathas'),
(77, 1010001, '6.3.1', '2', '', 'Kirupan Inpathas'),
(78, 1010001, '6.3.2', '2', '', 'Kirupan Inpathas'),
(79, 1010001, '6.1.1', '12', '', 'Kirupan Inpathas'),
(80, 1010001, '6.1.2', '90', '', 'Kirupan Inpathas');

-- --------------------------------------------------------

--
-- Table structure for table `learning_teaching_and_assessment`
--

CREATE TABLE `learning_teaching_and_assessment` (
  `Criteria_ID` int(255) NOT NULL,
  `Criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learning_teaching_and_assessment`
--

INSERT INTO `learning_teaching_and_assessment` (`Criteria_ID`, `Criteria`) VALUES
(1, '2.1 Planning and approach to the lesson'),
(2, '2.2 High quality lesson development'),
(3, '2.3 Assessment'),
(4, '2.4Exhibiting properly the individual responsibilities and personality'),
(5, '2.5 Planning Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `learning_teaching_assessment_main`
--

CREATE TABLE `learning_teaching_assessment_main` (
  `Learning_Teaching_Assessment_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `T_1_Marks` varchar(255) NOT NULL,
  `T_2_Marks` varchar(255) NOT NULL,
  `T_3_Marks` varchar(255) NOT NULL,
  `T_4_Marks` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `physical_resource_management`
--

CREATE TABLE `physical_resource_management` (
  `Criteria_ID` int(255) NOT NULL,
  `Criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physical_resource_management`
--

INSERT INTO `physical_resource_management` (`Criteria_ID`, `Criteria`) VALUES
(1, '7.1 Maintenance of school premises and map'),
(2, '7.2 Proper use of buildings and infrastructure'),
(3, '7.3 Effective use and maintenance of furniture and learning aids'),
(4, '7.4 Maintenance of Inventories'),
(5, '7.5 Effective use of laboratory facilities'),
(6, '7.6 Productive use and development of library'),
(7, '7.7 Productive use and maintenance of computer facilities'),
(8, '7.8 Use and Maintenance of resources for practical subjects and special units');

-- --------------------------------------------------------

--
-- Table structure for table `physical_resource_management_main`
--

CREATE TABLE `physical_resource_management_main` (
  `Physical_Resource_Management_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physical_resource_management_main`
--

INSERT INTO `physical_resource_management_main` (`Physical_Resource_Management_ID`, `School_ID`, `Activity_Number`, `Marks`, `Status`, `Session_Name`) VALUES
(1, 1010001, '7.1.1', '45', '', 'Kirupan Inpathas'),
(2, 1010001, '7.1.2', '89', '', 'Kirupan Inpathas'),
(3, 1010001, '7.1.3', '90', '', 'Kirupan Inpathas'),
(4, 1010001, '7.2.1', '56', '', 'Kirupan Inpathas'),
(5, 1010001, '7.2.2', '78', '', 'Kirupan Inpathas'),
(6, 1010001, '7.2.3', '65', '', 'Kirupan Inpathas'),
(7, 1010001, '7.2.4', '34', '', 'Kirupan Inpathas'),
(8, 1010001, '7.3.1', '65', '', 'Kirupan Inpathas'),
(9, 1010001, '7.3.2', '56', '', 'Kirupan Inpathas'),
(10, 1010001, '7.4.1', '6', '', 'Kirupan Inpathas'),
(11, 1010001, '7.4.2', '88', '', 'Kirupan Inpathas'),
(12, 1010001, '7.5.1', '34', '', 'Kirupan Inpathas'),
(13, 1010001, '7.5.2', '45', '', 'Kirupan Inpathas'),
(14, 1010001, '7.5.3', '43', '', 'Kirupan Inpathas'),
(15, 1010001, '7.6.1', '43', '', 'Kirupan Inpathas'),
(16, 1010001, '7.6.2', '32', '', 'Kirupan Inpathas'),
(17, 1010001, '7.6.3', '23', '', 'Kirupan Inpathas'),
(18, 1010001, '7.6.4', '55', '', 'Kirupan Inpathas'),
(19, 1010001, '7.7.1', '55', '', 'Kirupan Inpathas'),
(20, 1010001, '7.7.2', '32', '', 'Kirupan Inpathas'),
(21, 1010001, '7.7.3', '45', '', 'Kirupan Inpathas'),
(22, 1010001, '7.7.4', '55', '', 'Kirupan Inpathas'),
(23, 1010001, '7.8.1', '78', '', 'Kirupan Inpathas'),
(24, 1010001, '7.8.2', '66', '', 'Kirupan Inpathas'),
(25, 1010001, '7.8.3', '45', '', 'Kirupan Inpathas'),
(26, 1010001, '7.8.4', '54', '', 'Kirupan Inpathas'),
(27, 1010001, '7.8.1', '78', '', 'Kirupan Inpathas'),
(28, 1010001, '7.8.2', '66', '', 'Kirupan Inpathas'),
(29, 1010001, '7.8.3', '45', '', 'Kirupan Inpathas'),
(30, 1010001, '7.8.4', '54', '', 'Kirupan Inpathas'),
(31, 1010001, '7.8.1', '78', '', 'Kirupan Inpathas'),
(32, 1010001, '7.8.2', '66', '', 'Kirupan Inpathas'),
(33, 1010001, '7.8.3', '45', '', 'Kirupan Inpathas'),
(34, 1010001, '7.8.4', '54', '', 'Kirupan Inpathas'),
(35, 1010001, '7.2.1', '56', '', 'Kirupan Inpathas'),
(36, 1010001, '7.2.2', '78', '', 'Kirupan Inpathas'),
(37, 1010001, '7.2.3', '100', '', 'Kirupan Inpathas'),
(38, 1010001, '7.2.4', '34', '', 'Kirupan Inpathas');

-- --------------------------------------------------------

--
-- Table structure for table `pimary_section_111`
--

CREATE TABLE `pimary_section_111` (
  `Activity_Number` varchar(255) NOT NULL,
  `School_ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `totalNumbersOfTheStudents` int(255) NOT NULL,
  `totalPercentageOfTheStudents` int(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimary_section_111`
--

INSERT INTO `pimary_section_111` (`Activity_Number`, `School_ID`, `Name`, `totalNumbersOfTheStudents`, `totalPercentageOfTheStudents`, `marks`, `status`, `id`) VALUES
('', 1010001, 'Kirupan Inpathas<br>', 12, 80, 'A', 'A', 1),
('', 1010001, 'Kirupan Inpathas<br>', 45, 68, 'B', 'B', 2),
('', 1010001, 'Kirupan Inpathas<br>', 3, 50, 'S', 'S', 3),
('111', 1010001, 'Kirupan Inpathas<br>', 23, 59, 'C', 'C', 4),
('112', 1010001, 'Kirupan Inpathas<br>', 10, 68, 'B', 'B', 5),
('113', 1010001, 'Kirupan Inpathas<br>', 5, 90, 'A', 'A', 6),
('113', 1010001, 'Kirupan Inpathas', 34, 60, 'C', 'C', 7),
('111', 1010001, 'Kirupan Inpathas', 23, 99, 'A', 'A', 8),
('112', 1010001, 'Kirupan Inpathas', 10, 68, 'B', 'B', 9),
('113', 1010001, 'Kirupan Inpathas', 5, 90, 'A', 'A', 10),
('111', 1010001, 'Kirupan Inpathas', 23, 99, '6', 'Excellent', 11),
('112', 1010001, 'Kirupan Inpathas', 10, 68, '4', 'Good', 12),
('113', 1010001, 'Kirupan Inpathas', 5, 90, '6', 'Excellent', 13),
('111', 1010001, 'Kirupan Inpathas', 23, 99, '6', 'Excellent', 14),
('112', 1010001, 'Kirupan Inpathas', 10, 68, '4', 'Good', 15),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 16),
('111', 1010001, 'Kirupan Inpathas', 23, 99, '6', 'Excellent', 17),
('112', 1010001, 'Kirupan Inpathas', 10, 98, '6', 'Excellent', 18),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 19),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 20),
('112', 1010001, 'Kirupan Inpathas', 10, 98, '6', 'Excellent', 21),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 22),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 23),
('112', 1010001, 'Kirupan Inpathas', 10, 67, '4', 'Good', 24),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 25),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 26),
('112', 1010001, 'Kirupan Inpathas', 10, 97, '6', 'Excellent', 27),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 28),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 29),
('112', 1010001, 'Kirupan Inpathas', 10, 53, '3', 'Satisfactory', 30),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 31),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 32),
('112', 1010001, 'Kirupan Inpathas', 10, 20, '1', 'Immediate development required', 33),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 34),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 35),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 36),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 37),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 38),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 39),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 40),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 41),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 42),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 43),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 44),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 45),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 46),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 47),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 48),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 49),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 50),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 51),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 52),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 53),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 54),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 55),
('111', 1010001, 'Kirupan Inpathas', 23, 56, '3', 'Satisfactory', 56),
('112', 1010001, 'Kirupan Inpathas', 10, 19, '1', 'Immediate development required', 57),
('113', 1010001, 'Kirupan Inpathas', 78, 78, '5', 'Very Good', 58);

-- --------------------------------------------------------

--
-- Table structure for table `pimary_section_112`
--

CREATE TABLE `pimary_section_112` (
  `Activity_Number` varchar(255) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `totalNumbersOfTheStudents` int(255) NOT NULL,
  `totalPercentageOfTheStudents` int(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimary_section_112`
--

INSERT INTO `pimary_section_112` (`Activity_Number`, `School_ID`, `Name`, `totalNumbersOfTheStudents`, `totalPercentageOfTheStudents`, `marks`, `status`, `id`) VALUES
('113', 1010001, 'Kirupan Inpathas', 17, 80, 'A', 'A', 1),
('112', 1010001, 'Kirupan Inpathas', 47, 99, 'A', 'A', 2),
('112', 1010001, 'Kirupan Inpathas', 47, 56, 'C', 'C', 3),
('112', 1010001, 'Kirupan Inpathas', 47, 67, '4', 'Good', 4),
('112', 1010001, 'Kirupan Inpathas', 47, 21, '1', 'Immediate development required', 5),
('112', 1010001, 'Kirupan Inpathas', 47, 21, '1', 'Immediate development required', 6),
('112', 1010001, 'Kirupan Inpathas', 47, 21, '1', 'Immediate development required', 7),
('112', 1010001, 'Kirupan Inpathas', 47, 21, '1', 'Immediate development required', 8),
('112', 1010001, 'Kirupan Inpathas', 47, 21, '1', 'Immediate development required', 9);

-- --------------------------------------------------------

--
-- Table structure for table `schools_details`
--

CREATE TABLE `schools_details` (
  `School_Number` int(255) NOT NULL,
  `Census_ID` int(255) NOT NULL,
  `School_ID` int(255) NOT NULL,
  `School_Name` varchar(255) NOT NULL,
  `School_Address` varchar(255) NOT NULL,
  `Telephone` int(255) NOT NULL,
  `Zone` varchar(255) NOT NULL,
  `Division` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Function` varchar(255) NOT NULL,
  `Grade_Span` varchar(255) NOT NULL,
  `School_Type` varchar(255) NOT NULL,
  `School_Medium` varchar(255) NOT NULL,
  `Race` varchar(255) NOT NULL,
  `Gender_Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools_details`
--

INSERT INTO `schools_details` (`School_Number`, `Census_ID`, `School_ID`, `School_Name`, `School_Address`, `Telephone`, `Zone`, `Division`, `Category`, `Function`, `Grade_Span`, `School_Type`, `School_Medium`, `Race`, `Gender_Type`) VALUES
(302, 9167, 1010001, 'RAMANATHAN COLLEGE', 'Maruthanarmadam Chunnakam', 212241762, 'VALIKAM AM', 'Uduvil', 'Provincial', 'F', '1 to 13', '1AB', 'Tamil', 'Tamil', 'BinGS'),
(303, 9168, 1010002, 'SKANDAVARODAYA COLLEGE', 'Kandarodai, Chunnakam.', 212240230, 'VALIKAM AM', 'Uduvil', 'Provincial', 'F', '6 to 13', '1AB', 'Tamil', 'Tamil', 'Mixed'),
(304, 9170, 1010003, 'ERLALAI MAHA VIDYALAYAM', 'Erlalai Centre', 775350662, 'VALIKAM AM', 'Uduvil', 'Provincial', 'F', '1 to 13', '1C', 'Tamil', 'Tamil', 'Mixed'),
(305, 9172, 1010004, 'MYLANI SAIVA MAHA\r\nVIDYALAYAM', 'Chunnakam', 212240593, 'VALIKAM AM', 'Uduvil', 'Provincial', 'F', '1 to 11', 'II', 'Tamil', 'Tamil', 'Mixed'),
(306, 9173, 1010005, 'INUVIL HINDU COLLEGE', 'Inuvil south, chunnakam', 212241708, 'VALIKAM AM', 'Uduvil', 'Provincial', 'F', '1 to 13', 'IC', 'Tamil', 'Tamil', 'Mixed');

-- --------------------------------------------------------

--
-- Table structure for table `school_and_community`
--

CREATE TABLE `school_and_community` (
  `Criteria_ID` int(255) NOT NULL,
  `Criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_and_community`
--

INSERT INTO `school_and_community` (`Criteria_ID`, `Criteria`) VALUES
(1, '8.1 Getting the participation of parents for educational development'),
(2, '8.2 Getting the support from the community for different activities in the school.'),
(3, '8.3 Productive activation of the School Development Society'),
(4, '8.4 Effective communication of day-today information about the school'),
(5, '8.5 Providing assistance for community development activities');

-- --------------------------------------------------------

--
-- Table structure for table `school_community_main`
--

CREATE TABLE `school_community_main` (
  `School_Community_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_community_main`
--

INSERT INTO `school_community_main` (`School_Community_ID`, `School_ID`, `Activity_Number`, `Marks`, `Status`, `Session_Name`) VALUES
(1, 1010001, '8.1.1', '45', '', 'Kirupan Inpathas'),
(2, 1010001, '8.1.2', '46', '', 'Kirupan Inpathas'),
(3, 1010001, '8.1.3', '12', '', 'Kirupan Inpathas'),
(4, 1010001, '8.2.1', '12', '', 'Kirupan Inpathas'),
(5, 1010001, '8.2.2', '12', '', 'Kirupan Inpathas'),
(6, 1010001, '8.3.1', '34', '', 'Kirupan Inpathas'),
(7, 1010001, '8.3.2', '42', '', 'Kirupan Inpathas'),
(8, 1010001, '8.3.3', '13', '', 'Kirupan Inpathas'),
(9, 1010001, '8.4.1', '34', '', 'Kirupan Inpathas'),
(10, 1010001, '8.4.2', '89', '', 'Kirupan Inpathas'),
(11, 1010001, '8.4.3', '94', '', 'Kirupan Inpathas'),
(12, 1010001, '8.5.1', '12', '', 'Kirupan Inpathas'),
(13, 1010001, '8.5.2', '12', '', 'Kirupan Inpathas'),
(14, 1010001, '8.5.1', '12', '', 'Kirupan Inpathas'),
(15, 1010001, '8.5.2', '12', '', 'Kirupan Inpathas'),
(16, 1010001, '8.2.1', '12', '', 'Kirupan Inpathas'),
(17, 1010001, '8.2.2', '67', '', 'Kirupan Inpathas');

-- --------------------------------------------------------

--
-- Table structure for table `secondary_form_1_2_1`
--

CREATE TABLE `secondary_form_1_2_1` (
  `id` int(11) NOT NULL,
  `Activity_Number` varchar(255) DEFAULT NULL,
  `School_ID` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `marks` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secondary_form_1_2_1`
--

INSERT INTO `secondary_form_1_2_1` (`id`, `Activity_Number`, `School_ID`, `Name`, `percentage`, `marks`, `status`) VALUES
(1, '121', '1010001', 'Kirupan Inpathas', '12', '1', 'Immediate development required'),
(2, '122', '1010001', 'Kirupan Inpathas', '13', '1', 'Immediate development required'),
(3, '123', '1010001', 'Kirupan Inpathas', '14', '1', 'Immediate development required'),
(4, '124', '1010001', 'Kirupan Inpathas', '15', '1', 'Immediate development required'),
(5, '125', '1010001', 'Kirupan Inpathas', '16', '1', 'Immediate development required'),
(6, '126', '1010001', 'Kirupan Inpathas', '17', '1', 'Immediate development required'),
(7, '121', '1010001', 'Kirupan Inpathas', '12', '1', 'Immediate development required'),
(8, '122', '1010001', 'Kirupan Inpathas', '13', '1', 'Immediate development required'),
(9, '123', '1010001', 'Kirupan Inpathas', '56', '3', 'Satisfactory'),
(10, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(11, '125', '1010001', 'Kirupan Inpathas', '32', '2', 'Development Required'),
(12, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(13, '121', '1010001', 'Kirupan Inpathas', '12', '1', 'Immediate development required'),
(14, '122', '1010001', 'Kirupan Inpathas', '13', '1', 'Immediate development required'),
(15, '123', '1010001', 'Kirupan Inpathas', '56', '3', 'Satisfactory'),
(16, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(17, '125', '1010001', 'Kirupan Inpathas', '32', '2', 'Development Required'),
(18, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(19, '121', '1010001', 'Kirupan Inpathas', '12', '1', 'Immediate development required'),
(20, '122', '1010001', 'Kirupan Inpathas', '13', '1', 'Immediate development required'),
(21, '123', '1010001', 'Kirupan Inpathas', '56', '3', 'Satisfactory'),
(22, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(23, '125', '1010001', 'Kirupan Inpathas', '32', '2', 'Development Required'),
(24, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(25, '121', '1010001', 'Kirupan Inpathas', '12', '1', 'Immediate development required'),
(26, '122', '1010001', 'Kirupan Inpathas', '13', '1', 'Immediate development required'),
(27, '123', '1010001', 'Kirupan Inpathas', '56', '3', 'Satisfactory'),
(28, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(29, '125', '1010001', 'Kirupan Inpathas', '32', '2', 'Development Required'),
(30, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(31, '121', '1010001', 'Kirupan Inpathas', '12', '1', 'Immediate development required'),
(32, '122', '1010001', 'Kirupan Inpathas', '13', '1', 'Immediate development required'),
(33, '123', '1010001', 'Kirupan Inpathas', '56', '3', 'Satisfactory'),
(34, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(35, '125', '1010001', 'Kirupan Inpathas', '32', '2', 'Development Required'),
(36, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(37, '121', '1010001', 'Kirupan Inpathas', '90', '6', 'Excellent'),
(38, '122', '1010001', 'Kirupan Inpathas', '67', '4', 'Good'),
(39, '123', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(40, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(41, '125', '1010001', 'Kirupan Inpathas', '46', '3', 'Satisfactory'),
(42, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(43, '121', '1010001', 'Kirupan Inpathas', '90', '6', 'Excellent'),
(44, '122', '1010001', 'Kirupan Inpathas', '67', '4', 'Good'),
(45, '123', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(46, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(47, '125', '1010001', 'Kirupan Inpathas', '46', '3', 'Satisfactory'),
(48, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(49, '121', '1010001', 'Kirupan Inpathas', '90', '6', 'Excellent'),
(50, '122', '1010001', 'Kirupan Inpathas', '67', '4', 'Good'),
(51, '123', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(52, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(53, '125', '1010001', 'Kirupan Inpathas', '46', '3', 'Satisfactory'),
(54, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(55, '121', '1010001', 'Kirupan Inpathas', '90', '6', 'Excellent'),
(56, '122', '1010001', 'Kirupan Inpathas', '67', '4', 'Good'),
(57, '123', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(58, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(59, '125', '1010001', 'Kirupan Inpathas', '46', '3', 'Satisfactory'),
(60, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(61, '121', '1010001', 'Kirupan Inpathas', '90', '6', 'Excellent'),
(62, '122', '1010001', 'Kirupan Inpathas', '67', '4', 'Good'),
(63, '123', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(64, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(65, '125', '1010001', 'Kirupan Inpathas', '46', '3', 'Satisfactory'),
(66, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(67, '121', '1010001', 'Kirupan Inpathas', '90', '6', 'Excellent'),
(68, '122', '1010001', 'Kirupan Inpathas', '67', '4', 'Good'),
(69, '123', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(70, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(71, '125', '1010001', 'Kirupan Inpathas', '46', '3', 'Satisfactory'),
(72, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required'),
(73, '121', '1010001', 'Kirupan Inpathas', '90', '6', 'Excellent'),
(74, '122', '1010001', 'Kirupan Inpathas', '67', '4', 'Good'),
(75, '123', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(76, '124', '1010001', 'Kirupan Inpathas', '78', '5', 'Very Good'),
(77, '125', '1010001', 'Kirupan Inpathas', '46', '3', 'Satisfactory'),
(78, '126', '1010001', 'Kirupan Inpathas', '34', '2', 'Development Required');

-- --------------------------------------------------------

--
-- Table structure for table `select_activity`
--

CREATE TABLE `select_activity` (
  `Select_Activity_ID` int(255) NOT NULL,
  `School_ID` int(255) NOT NULL,
  `Section_Number` int(255) NOT NULL,
  `Activity` varchar(255) NOT NULL,
  `Form` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `select_activity`
--

INSERT INTO `select_activity` (`Select_Activity_ID`, `School_ID`, `Section_Number`, `Activity`, `Form`) VALUES
(1, 1010001, 1, '1.1. Primary Section', 1),
(2, 1010001, 2, '1.2.1 National level examination results', 1),
(3, 1010001, 2, '1.2.2 Progress of term test marks ', 1),
(4, 1010001, 2, '1.2.3 Progress of the School-Based Assessment', 1),
(5, 1010001, 2, '1.2.4. Analyzing the achievement level', 1),
(6, 1010001, 2, '1.2.2.2 Subject Stream (Grade 12-13)', 1),
(7, 1010001, 2, '2. Learning, Teaching and Assessment', 2),
(8, 1010001, 2, '3. Formal Curriculum Management', 3),
(9, 1010001, 2, '4. Co - curricular Activities', 4),
(11, 1010001, 2, '5. Student Welfare', 5),
(12, 1010001, 2, '6. Leadership and Management', 6),
(13, 1010001, 2, '7. Physical Resource Management', 7),
(14, 1010001, 2, '8. School and Community', 8);

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_1`
--

CREATE TABLE `studentachievement_1_2_1` (
  `StudentAchievement_1_2_1_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Percentage_Students` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_2_main`
--

CREATE TABLE `studentachievement_1_2_2_main` (
  `StudentAchievement_1_2_2_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Grade_6` varchar(255) NOT NULL,
  `Grade_7` varchar(255) NOT NULL,
  `Grade_8` varchar(255) NOT NULL,
  `Grade_9` varchar(255) NOT NULL,
  `Grade_10` varchar(255) NOT NULL,
  `Grade_11` varchar(255) NOT NULL,
  `Percentage_Avarage` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_2_optional`
--

CREATE TABLE `studentachievement_1_2_2_optional` (
  `StudentAchievement_1_2_2_optional_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Grade_10` varchar(255) NOT NULL,
  `Grade_11` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Percentage_Students` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_3`
--

CREATE TABLE `studentachievement_1_2_3` (
  `StudentAchievement_1_2_3_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Grade` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Number_classes_completed` varchar(255) NOT NULL,
  `Total_number_classes` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_3_other`
--

CREATE TABLE `studentachievement_1_2_3_other` (
  `StudentAchievement_1_2_3_Other_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Total_Students` varchar(255) NOT NULL,
  `Grade_6` varchar(255) NOT NULL,
  `Grade_7` varchar(255) NOT NULL,
  `Grade_8` varchar(255) NOT NULL,
  `Grade_9` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Percentage_Students` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_4`
--

CREATE TABLE `studentachievement_1_2_4` (
  `StudentAchievement_1_2_4_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_4_aesthetic`
--

CREATE TABLE `studentachievement_1_2_4_aesthetic` (
  `StudentAchievement_1_2_4_Aesthetic_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Total_Students` varchar(255) NOT NULL,
  `Grade_6` varchar(255) NOT NULL,
  `Grade_7` varchar(255) NOT NULL,
  `Grade_8` varchar(255) NOT NULL,
  `Grade_9` varchar(255) NOT NULL,
  `Grade_10` varchar(255) NOT NULL,
  `Grade_11` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Percentage_Students` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentachievement_1_2_5`
--

CREATE TABLE `studentachievement_1_2_5` (
  `StudentAchievement_1_2_5_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Subject_name` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Percentage_Grade_10` varchar(255) NOT NULL,
  `Percentage_Grade_11` varchar(255) NOT NULL,
  `Percentage_Average` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_achievement_secondary_subjects`
--

CREATE TABLE `student_achievement_secondary_subjects` (
  `form_number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `activity_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_achievement_secondary_subjects`
--

INSERT INTO `student_achievement_secondary_subjects` (`form_number`, `subject`, `activity_number`) VALUES
('1.2.2', 'Sinhala/Tamil (First Language)', '1.2.2.1'),
('1.2.2', 'Mathematics', '1.2.2.2'),
('1.2.2', 'Science', '1.2.2.3'),
('1.2.2', 'English', '1.2.2.4'),
('1.2.2', 'History', '1.2.2.5'),
('1.2.2', 'Religion', '1.2.2.6'),
('1.2.2', 'Geography', '1.2.2.7.1'),
('1.2.2', 'Life Competencies and \r\nCitizenship Education', '1.2.2.7.2'),
('1.2.2', 'Second Language (Sinhala/ Tamil)', '1.2.2.7.3'),
('1.2.2', 'Health and Physical Education', '1.2.2.7.4'),
('1.2.2', 'Practical and technical skills', '1.2.2.7.5'),
('1.2.2', 'Aesthetic Subjects', '1.2.2.8.1'),
('1.2.2', 'Arts', '1.2.2.8.2'),
('1.2.2', 'Dancing', '1.2.2.8.3'),
('1.2.2', 'Music', '1.2.2.8.4'),
('1.2.2', 'Drama and Theatre', '1.2.2.8.5'),
('1.2.2', 'Sinhala/ English Literature', '1.2.2.8.6'),
('1.2.2', 'Optional Subjects (Category 1-1 )', '1.2.2.9.1'),
('1.2.2', 'Optional Subjects (Category 1-2)', '1.2.2.9.2'),
('1.2.2', 'Optional Subjects (Category 1-3)', '1.2.2.9.3'),
('1.2.2', 'Optional Subjects (Category  111-1)', '1.2.2.10.1'),
('1.2.2', 'Optional Subjects (Category  111-2)', '1.2.2.10.2');

-- --------------------------------------------------------

--
-- Table structure for table `student_welfare`
--

CREATE TABLE `student_welfare` (
  `Criteria_ID` int(255) NOT NULL,
  `Criteria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_welfare`
--

INSERT INTO `student_welfare` (`Criteria_ID`, `Criteria`) VALUES
(1, '5.1 Availability of systematic counseling process'),
(2, '5.2 Attendance of students'),
(3, '5.3 Implementation of a systematic guidance and counselling process'),
(4, '5.4 Providing necessary assistance to students with socio economic problems'),
(5, '5.5 Identification of students’ health and nutritional levels'),
(6, '5.6 Ensuring students’ sanitation'),
(7, '5.7 Ensuring child protection'),
(8, '5.8 Proper maintenance of the canteen'),
(9, '5.9 Systematic implementation of disaster management');

-- --------------------------------------------------------

--
-- Table structure for table `student_welfare_main`
--

CREATE TABLE `student_welfare_main` (
  `Student_Welfare_ID` int(11) NOT NULL,
  `School_ID` int(11) NOT NULL,
  `Activity_Number` varchar(255) NOT NULL,
  `Marks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Session_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_welfare_main`
--

INSERT INTO `student_welfare_main` (`Student_Welfare_ID`, `School_ID`, `Activity_Number`, `Marks`, `Status`, `Session_Name`) VALUES
(1, 1010001, '5.3.1', '34', '', 'Kirupan Inpathas'),
(2, 1010001, '5.3.2', '45', '', 'Kirupan Inpathas'),
(3, 1010001, '5.3.1', '34', '', 'Kirupan Inpathas'),
(4, 1010001, '5.3.2', '35', '', 'Kirupan Inpathas'),
(5, 1010001, '5.3.1', '34', '', 'Kirupan Inpathas'),
(6, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(7, 1010001, '5.3.1', '34', '', 'Kirupan Inpathas'),
(8, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(9, 1010001, '5.3.1', '34', '', 'Kirupan Inpathas'),
(10, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(11, 1010001, '5.3.1', '67', '', 'Kirupan Inpathas'),
(12, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(13, 1010001, '5.3.1', '69', '', 'Kirupan Inpathas'),
(14, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(15, 1010001, '5.3.1', '69', '', 'Kirupan Inpathas'),
(16, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(17, 1010001, '5.3.1', '69', '', 'Kirupan Inpathas'),
(18, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(19, 1010001, '5.3.1', '45', '', 'Kirupan Inpathas'),
(20, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(21, 1010001, '5.3.1', '45', '', 'Kirupan Inpathas'),
(22, 1010001, '5.3.2', '67', '', 'Kirupan Inpathas'),
(23, 1010001, '5.3.1', '45', '', 'Kirupan Inpathas'),
(24, 1010001, '5.3.2', '45', '', 'Kirupan Inpathas'),
(25, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(26, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(27, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(28, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(29, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(30, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(31, 1010001, '5.1.1', '13', '', 'Kirupan Inpathas'),
(32, 1010001, '5.1.2', '12', '', 'Kirupan Inpathas'),
(33, 1010001, '5.1.3', '12', '', 'Kirupan Inpathas'),
(34, 1010001, '5.2.1', '2', '', 'Kirupan Inpathas'),
(35, 1010001, '5.2.2', '1', '', 'Kirupan Inpathas'),
(36, 1010001, '5.2.1', '2', '', 'Kirupan Inpathas'),
(37, 1010001, '5.2.2', '1', '', 'Kirupan Inpathas'),
(38, 1010001, '5.2.1', '2', '', 'Kirupan Inpathas'),
(39, 1010001, '5.2.2', '1', '', 'Kirupan Inpathas'),
(40, 1010001, '5.4.1', '4', '', 'Kirupan Inpathas'),
(41, 1010001, '5.4.2', '5', '', 'Kirupan Inpathas'),
(42, 1010001, '5.5.1', '67', '', 'Kirupan Inpathas'),
(43, 1010001, '5.5.2', '78', '', 'Kirupan Inpathas'),
(44, 1010001, '5.5.3', '234', '', 'Kirupan Inpathas'),
(45, 1010001, '5.8.1', '13', '', 'Kirupan Inpathas'),
(46, 1010001, '5.8.2', '12', '', 'Kirupan Inpathas'),
(47, 1010001, '5.8.1', '13', '', 'Kirupan Inpathas'),
(48, 1010001, '5.8.2', '12', '', 'Kirupan Inpathas'),
(49, 1010001, '5.8.1', '13', '', 'Kirupan Inpathas'),
(50, 1010001, '5.8.2', '12', '', 'Kirupan Inpathas'),
(51, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(52, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(53, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(54, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(55, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(56, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(57, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(58, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(59, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(60, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(61, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(62, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(63, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(64, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(65, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(66, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(67, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(68, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(69, 1010001, '5.7.1', '5', '', 'Kirupan Inpathas'),
(70, 1010001, '5.7.2', '5', '', 'Kirupan Inpathas'),
(71, 1010001, '5.7.3', '5', '', 'Kirupan Inpathas'),
(72, 1010001, '5.7.1', '5', '', 'Kirupan Inpathas'),
(73, 1010001, '5.7.2', '5', '', 'Kirupan Inpathas'),
(74, 1010001, '5.7.3', '5', '', 'Kirupan Inpathas'),
(75, 1010001, '5.6.1', '3', '', 'Kirupan Inpathas'),
(76, 1010001, '5.6.2', '3', '', 'Kirupan Inpathas'),
(77, 1010001, '5.6.3', '3', '', 'Kirupan Inpathas'),
(78, 1010001, '5.6.1', '3', '', 'Kirupan Inpathas'),
(79, 1010001, '5.6.2', '3', '', 'Kirupan Inpathas'),
(80, 1010001, '5.6.3', '3', '', 'Kirupan Inpathas'),
(81, 1010001, '5.6.1', '3', '', 'Kirupan Inpathas'),
(82, 1010001, '5.6.2', '3', '', 'Kirupan Inpathas'),
(83, 1010001, '5.6.3', '3', '', 'Kirupan Inpathas'),
(84, 1010001, '5.1.1', '13', '', 'Kirupan Inpathas'),
(85, 1010001, '5.1.2', '12', '', 'Kirupan Inpathas'),
(86, 1010001, '5.1.3', '12', '', 'Kirupan Inpathas'),
(87, 1010001, '5.6.1', '3', '', 'Kirupan Inpathas'),
(88, 1010001, '5.6.2', '3', '', 'Kirupan Inpathas'),
(89, 1010001, '5.6.3', '3', '', 'Kirupan Inpathas'),
(90, 1010001, '5.9.1', '34', '', 'Kirupan Inpathas'),
(91, 1010001, '5.9.2', '1', '', 'Kirupan Inpathas'),
(92, 1010001, '5.2.1', '2', '', 'Kirupan Inpathas'),
(93, 1010001, '5.2.2', '9', '', 'Kirupan Inpathas');

-- --------------------------------------------------------

--
-- Table structure for table `total_evaluation`
--

CREATE TABLE `total_evaluation` (
  `School_ID` int(255) NOT NULL,
  `Total_Evaluation` int(11) NOT NULL,
  `Total_Indicators` varchar(255) DEFAULT NULL,
  `Max_Obtained` varchar(255) DEFAULT NULL,
  `Evaluated_Indicators` varchar(255) DEFAULT NULL,
  `Max_Marks` varchar(255) DEFAULT NULL,
  `Percentage` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `form` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `total_evaluation`
--

INSERT INTO `total_evaluation` (`School_ID`, `Total_Evaluation`, `Total_Indicators`, `Max_Obtained`, `Evaluated_Indicators`, `Max_Marks`, `Percentage`, `Status`, `form`) VALUES
(1010001, 1, '35', '210', '32', '2', '10', 'ok', 1),
(1001101, 2, '$indication2', '$Max_marks2', '$indication_elavuated2', '$data2', '$n2', '$status2', 2),
(1010001, 3, '35', '210', '32', '2', '10', 'ok', 1),
(1010001, 4, '35', '210', '32', '2', '10', 'ok', 1),
(1010001, 5, '35', '210', '32', '2', '10', 'ok', 1),
(1010001, 6, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 7, '25', '150', '23', '5', '10', 'ok', 3),
(1010001, 8, '14', '84', '14', '78', '10', 'ok', 4),
(1010001, 9, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 10, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 11, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 12, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 13, '35', '210', '32', '2', '10', 'ok', 1),
(1010001, 14, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 15, '25', '150', '23', '5', '10', 'ok', 3),
(1010001, 16, '14', '84', '14', '78', '10', 'ok', 4),
(1010001, 17, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 18, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 19, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 20, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 21, '35', '210', '32', '20', '10', 'ok', 1),
(1010001, 22, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 23, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 24, '14', '84', '14', '78', '10', 'ok', 4),
(1010001, 25, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 26, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 27, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 28, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 29, '35', '210', '32', '20', '10', 'ok', 1),
(1010001, 30, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 31, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 32, '14', '84', '14', '78', '10', 'ok', 4),
(1010001, 33, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 34, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 35, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 36, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 37, '35', '210', '32', '20', '10', 'ok', 1),
(1010001, 38, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 39, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 40, '14', '84', '14', '78', '10', 'ok', 4),
(1010001, 41, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 42, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 43, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 44, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 45, '35', '210', '32', '20', '10', 'ok', 1),
(1010001, 46, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 47, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 48, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 49, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 50, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 51, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 52, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 53, '35', '210', '32', '20', '10', 'ok', 1),
(1010001, 54, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 55, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 56, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 57, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 58, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 59, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 60, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 61, '35', '210', '32', '20', '10', 'ok', 1),
(1010001, 62, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 63, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 64, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 65, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 66, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 67, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 68, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 69, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 70, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 71, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 72, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 73, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 74, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 75, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 76, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 77, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 78, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 79, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 80, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 81, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 82, '45', '270', '45', '64', '10', 'ok', 6),
(1010001, 83, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 84, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 85, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 86, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 87, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 88, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 89, '22', '132', '20', '89', '10', 'ok', 5),
(1010001, 90, '45', '270', '45', '300', '10', 'ok', 6),
(1010001, 91, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 92, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 93, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 94, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 95, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 96, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 97, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 98, '45', '270', '45', '300', '10', 'ok', 6),
(1010001, 99, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 100, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 101, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 102, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 103, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 104, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 105, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 106, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 107, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 108, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 109, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 110, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 111, '25', '150', '23', '49', '10', 'ok', 3),
(1010001, 112, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 113, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 114, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 115, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 116, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 117, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 118, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 119, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 120, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 121, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 122, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 123, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 124, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 125, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 126, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 127, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 128, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 129, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 130, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 131, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 132, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 133, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 134, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 135, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 136, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 137, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 138, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 139, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 140, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 141, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 142, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 143, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 144, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 145, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 146, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 147, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 148, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 149, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 150, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 151, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 152, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 153, '22', '132', '20', '78', '10', 'ok', 5),
(1010001, 154, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 155, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 156, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 157, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 158, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 159, '25', '150', '23', '58', '10', 'ok', 3),
(1010001, 160, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 161, '22', '132', '20', '120', '10', 'ok', 5),
(1010001, 162, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 163, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 164, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 165, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 166, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 167, '25', '150', '23', '138', '10', 'ok', 3),
(1010001, 168, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 169, '22', '132', '20', '120', '10', 'ok', 5),
(1010001, 170, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 171, '26', '156', '25', '54', '10', 'ok', 7),
(1010001, 172, '13', '78', '12', '67', '10', 'ok', 8),
(1010001, 173, '35', '210', '32', '90', '10', 'ok', 1),
(1010001, 174, '30', '210', '32', '60', '10', 'ok', 2),
(1010001, 175, '25', '150', '23', '138', '10', 'ok', 3),
(1010001, 176, '14', '84', '14', '66', '10', 'ok', 4),
(1010001, 177, '22', '132', '20', '120', '10', 'ok', 5),
(1010001, 178, '45', '270', '45', '270', '10', 'ok', 6),
(1010001, 179, '26', '156', '25', '150', '10', 'ok', 7),
(1010001, 180, '13', '78', '12', '67', '10', 'ok', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `School_ID` int(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `School_ID`, `grade`) VALUES
(1, 'Kirupan Inpathas', 'ikirupan@gmail.com', '123456', 1010001, '8'),
(2, 'Nixsala N', 'nixsala@gmail.com', '123456', 1010010, 'Grade 10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `co_curricular_activities`
--
ALTER TABLE `co_curricular_activities`
  ADD PRIMARY KEY (`Criteria_ID`);

--
-- Indexes for table `co_curricular_activities_main`
--
ALTER TABLE `co_curricular_activities_main`
  ADD PRIMARY KEY (`Co_curricular_Activities_ID`);

--
-- Indexes for table `formal_curriculum_management`
--
ALTER TABLE `formal_curriculum_management`
  ADD PRIMARY KEY (`Criteria_ID`);

--
-- Indexes for table `formal_curriculum_management_main`
--
ALTER TABLE `formal_curriculum_management_main`
  ADD PRIMARY KEY (`Formal_Curriculum_Management_ID`);

--
-- Indexes for table `form_selection`
--
ALTER TABLE `form_selection`
  ADD PRIMARY KEY (`Form_Selection_ID`);

--
-- Indexes for table `leadership_and_management`
--
ALTER TABLE `leadership_and_management`
  ADD PRIMARY KEY (`Criteria_ID`);

--
-- Indexes for table `leadership_management_main`
--
ALTER TABLE `leadership_management_main`
  ADD PRIMARY KEY (`Leadership_Management_ID`);

--
-- Indexes for table `learning_teaching_and_assessment`
--
ALTER TABLE `learning_teaching_and_assessment`
  ADD PRIMARY KEY (`Criteria_ID`);

--
-- Indexes for table `learning_teaching_assessment_main`
--
ALTER TABLE `learning_teaching_assessment_main`
  ADD PRIMARY KEY (`Learning_Teaching_Assessment_ID`);

--
-- Indexes for table `physical_resource_management`
--
ALTER TABLE `physical_resource_management`
  ADD PRIMARY KEY (`Criteria_ID`);

--
-- Indexes for table `physical_resource_management_main`
--
ALTER TABLE `physical_resource_management_main`
  ADD PRIMARY KEY (`Physical_Resource_Management_ID`);

--
-- Indexes for table `pimary_section_111`
--
ALTER TABLE `pimary_section_111`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pimary_section_112`
--
ALTER TABLE `pimary_section_112`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools_details`
--
ALTER TABLE `schools_details`
  ADD PRIMARY KEY (`School_ID`),
  ADD UNIQUE KEY `School_Number` (`School_Number`);

--
-- Indexes for table `school_and_community`
--
ALTER TABLE `school_and_community`
  ADD PRIMARY KEY (`Criteria_ID`);

--
-- Indexes for table `school_community_main`
--
ALTER TABLE `school_community_main`
  ADD PRIMARY KEY (`School_Community_ID`);

--
-- Indexes for table `secondary_form_1_2_1`
--
ALTER TABLE `secondary_form_1_2_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `select_activity`
--
ALTER TABLE `select_activity`
  ADD PRIMARY KEY (`Select_Activity_ID`);

--
-- Indexes for table `studentachievement_1_2_1`
--
ALTER TABLE `studentachievement_1_2_1`
  ADD PRIMARY KEY (`StudentAchievement_1_2_1_ID`);

--
-- Indexes for table `studentachievement_1_2_2_main`
--
ALTER TABLE `studentachievement_1_2_2_main`
  ADD PRIMARY KEY (`StudentAchievement_1_2_2_ID`);

--
-- Indexes for table `studentachievement_1_2_2_optional`
--
ALTER TABLE `studentachievement_1_2_2_optional`
  ADD PRIMARY KEY (`StudentAchievement_1_2_2_optional_ID`);

--
-- Indexes for table `studentachievement_1_2_3`
--
ALTER TABLE `studentachievement_1_2_3`
  ADD PRIMARY KEY (`StudentAchievement_1_2_3_ID`);

--
-- Indexes for table `studentachievement_1_2_3_other`
--
ALTER TABLE `studentachievement_1_2_3_other`
  ADD PRIMARY KEY (`StudentAchievement_1_2_3_Other_ID`);

--
-- Indexes for table `studentachievement_1_2_4`
--
ALTER TABLE `studentachievement_1_2_4`
  ADD PRIMARY KEY (`StudentAchievement_1_2_4_ID`);

--
-- Indexes for table `studentachievement_1_2_4_aesthetic`
--
ALTER TABLE `studentachievement_1_2_4_aesthetic`
  ADD PRIMARY KEY (`StudentAchievement_1_2_4_Aesthetic_ID`);

--
-- Indexes for table `studentachievement_1_2_5`
--
ALTER TABLE `studentachievement_1_2_5`
  ADD PRIMARY KEY (`StudentAchievement_1_2_5_ID`);

--
-- Indexes for table `student_welfare`
--
ALTER TABLE `student_welfare`
  ADD PRIMARY KEY (`Criteria_ID`);

--
-- Indexes for table `student_welfare_main`
--
ALTER TABLE `student_welfare_main`
  ADD PRIMARY KEY (`Student_Welfare_ID`);

--
-- Indexes for table `total_evaluation`
--
ALTER TABLE `total_evaluation`
  ADD PRIMARY KEY (`Total_Evaluation`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `co_curricular_activities_main`
--
ALTER TABLE `co_curricular_activities_main`
  MODIFY `Co_curricular_Activities_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `formal_curriculum_management_main`
--
ALTER TABLE `formal_curriculum_management_main`
  MODIFY `Formal_Curriculum_Management_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `leadership_management_main`
--
ALTER TABLE `leadership_management_main`
  MODIFY `Leadership_Management_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `learning_teaching_assessment_main`
--
ALTER TABLE `learning_teaching_assessment_main`
  MODIFY `Learning_Teaching_Assessment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physical_resource_management_main`
--
ALTER TABLE `physical_resource_management_main`
  MODIFY `Physical_Resource_Management_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pimary_section_111`
--
ALTER TABLE `pimary_section_111`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `pimary_section_112`
--
ALTER TABLE `pimary_section_112`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school_community_main`
--
ALTER TABLE `school_community_main`
  MODIFY `School_Community_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `secondary_form_1_2_1`
--
ALTER TABLE `secondary_form_1_2_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_1`
--
ALTER TABLE `studentachievement_1_2_1`
  MODIFY `StudentAchievement_1_2_1_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_2_main`
--
ALTER TABLE `studentachievement_1_2_2_main`
  MODIFY `StudentAchievement_1_2_2_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_2_optional`
--
ALTER TABLE `studentachievement_1_2_2_optional`
  MODIFY `StudentAchievement_1_2_2_optional_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_3`
--
ALTER TABLE `studentachievement_1_2_3`
  MODIFY `StudentAchievement_1_2_3_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_3_other`
--
ALTER TABLE `studentachievement_1_2_3_other`
  MODIFY `StudentAchievement_1_2_3_Other_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_4`
--
ALTER TABLE `studentachievement_1_2_4`
  MODIFY `StudentAchievement_1_2_4_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_4_aesthetic`
--
ALTER TABLE `studentachievement_1_2_4_aesthetic`
  MODIFY `StudentAchievement_1_2_4_Aesthetic_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentachievement_1_2_5`
--
ALTER TABLE `studentachievement_1_2_5`
  MODIFY `StudentAchievement_1_2_5_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_welfare_main`
--
ALTER TABLE `student_welfare_main`
  MODIFY `Student_Welfare_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `total_evaluation`
--
ALTER TABLE `total_evaluation`
  MODIFY `Total_Evaluation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
