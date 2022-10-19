-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 10:44 PM
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
-- Table structure for table `pimary_section_111`
--

CREATE TABLE `pimary_section_111` (
  `Activity_Number` varchar(255) NOT NULL,
  `School_ID` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `totalNumbersOfTheStudents` int(255) NOT NULL,
  `totalPercentageOfTheStudents` int(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimary_section_111`
--

INSERT INTO `pimary_section_111` (`Activity_Number`, `School_ID`, `Name`, `totalNumbersOfTheStudents`, `totalPercentageOfTheStudents`, `marks`, `status`) VALUES
('', 1010001, 'Kirupan Inpathas<br>', 12, 80, 'A', 'A'),
('', 1010001, 'Kirupan Inpathas<br>', 45, 68, 'B', 'B'),
('', 1010001, 'Kirupan Inpathas<br>', 3, 50, 'S', 'S'),
('111', 1010001, 'Kirupan Inpathas<br>', 23, 59, 'C', 'C'),
('112', 1010001, 'Kirupan Inpathas<br>', 10, 68, 'B', 'B'),
('113', 1010001, 'Kirupan Inpathas<br>', 5, 90, 'A', 'A'),
('113', 1010001, 'Kirupan Inpathas', 34, 60, 'C', 'C');

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
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimary_section_112`
--

INSERT INTO `pimary_section_112` (`Activity_Number`, `School_ID`, `Name`, `totalNumbersOfTheStudents`, `totalPercentageOfTheStudents`, `marks`, `status`) VALUES
('113', 1010001, 'Kirupan Inpathas', 17, 80, 'A', 'A'),
('112', 1010001, 'Kirupan Inpathas', 47, 99, 'A', 'A'),
('112', 1010001, 'Kirupan Inpathas', 47, 56, 'C', 'C');

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
(304, 9170, 1010003, 'ERLALAI MAHA VIDYALAYAM', 'Erlalai Centre', 775350662, 'VALIKAM AM', 'Uduvil', 'Provincial', 'F', '1 to 13', '1C', 'Tamil', 'Tamil', 'Mixed');

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
(6, 1010001, 2, '1.2.2.2 Subject Stream (Grade 12-13)', 1);

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
(1, 'Kirupan Inpathas', 'ikirupan@gmail.com', '123456', 1010001, '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_selection`
--
ALTER TABLE `form_selection`
  ADD PRIMARY KEY (`Form_Selection_ID`);

--
-- Indexes for table `schools_details`
--
ALTER TABLE `schools_details`
  ADD PRIMARY KEY (`School_ID`),
  ADD UNIQUE KEY `School_Number` (`School_Number`);

--
-- Indexes for table `select_activity`
--
ALTER TABLE `select_activity`
  ADD PRIMARY KEY (`Select_Activity_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
