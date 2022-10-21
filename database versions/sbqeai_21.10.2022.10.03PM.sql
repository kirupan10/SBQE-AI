-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 06:33 PM
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
('113', 1010001, 'Kirupan Inpathas', 34, 60, 'C', 'C'),
('111', 1010001, 'Kirupan Inpathas', 23, 99, 'A', 'A'),
('112', 1010001, 'Kirupan Inpathas', 10, 68, 'B', 'B'),
('113', 1010001, 'Kirupan Inpathas', 5, 90, 'A', 'A');

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
  MODIFY `Co_curricular_Activities_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formal_curriculum_management_main`
--
ALTER TABLE `formal_curriculum_management_main`
  MODIFY `Formal_Curriculum_Management_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leadership_management_main`
--
ALTER TABLE `leadership_management_main`
  MODIFY `Leadership_Management_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learning_teaching_assessment_main`
--
ALTER TABLE `learning_teaching_assessment_main`
  MODIFY `Learning_Teaching_Assessment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `physical_resource_management_main`
--
ALTER TABLE `physical_resource_management_main`
  MODIFY `Physical_Resource_Management_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_community_main`
--
ALTER TABLE `school_community_main`
  MODIFY `School_Community_ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `Student_Welfare_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
