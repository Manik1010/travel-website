-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 11:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel website`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `ID` int(11) NOT NULL,
  `user_id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_number` varchar(100) NOT NULL,
  `Skillset_Name` varchar(200) NOT NULL,
  `Hobby` varchar(200) NOT NULL,
  `About_me` varchar(200) NOT NULL,
  `SchoORCollORversity` varchar(100) NOT NULL,
  `Degree_Name` varchar(100) NOT NULL,
  `Degree_From` varchar(100) NOT NULL,
  `Degree_To` varchar(100) NOT NULL,
  `GradeORScoreORCGPA` varchar(100) NOT NULL,
  `Experience_Title` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`ID`, `user_id`, `image`, `first_name`, `last_name`, `profession`, `Email`, `Phone_number`, `Skillset_Name`, `Hobby`, `About_me`, `SchoORCollORversity`, `Degree_Name`, `Degree_From`, `Degree_To`, `GradeORScoreORCGPA`, `Experience_Title`, `Description`, `address`) VALUES
(7, 3, 'uploads/49844575816Penguins.jpg', 'Abdur', 'Rahiman', 'web developer.', 'abdurrahimsgm2022@gmail.com', ' ', '         html,css,php.', ' .Mobile-First, Responsive DesignCross Browser Testing & DebuggingCross Functional TeamsAgile Development & Scrum', 'i am a student of cse at north east university..', 'North East University , sylhet  ,Bangladesh.', '       Computer Science and Engineering.', '       january - 2019', 'December - 2022', '3.60', 'junior web developer', 'doing job as a junior web developer of a company. experience about 2 years.', '         golapgonj , sylhet'),
(10, 0, 'uploads/54203178698Jellyfish.jpg', 'Abdur', 'molla', 'web developer', 'rahims@gmail.com', '7777', 'html,css,php.', ' crickets', 'fdgdfgdfg', 'North East University , sylhet  ,Bangladesh', 'Computer Science and Engineering', ' 55', '2023', '3.00', 'frg', ' golapgonj,sylhet.', 'no'),
(14, 0, 'uploads/18005216393Lighthouse.jpg', 'Tanvir ', 'Ahmad', 'student', 'tanvir@gmail.com', '01737283181', 'WEB DEVELOPER', ' cricket..', 'gfg', 'North East University , sylhet  ,Bangladeshss', 'Computer Science and Engineeringss', ' 2019', '2023', '3.38', 'no', 'no', 'golapgonj,sylhet.'),
(15, 0, 'uploads/74953503387Koala.jpg', 'manik', 'Ahmad', 'studentt', 'manik@gmail.com', '01737283181', 'html', ' crickets', 'gon', 'North East University , sylhet  ,Bangladesh', 'Computer Science and Engineering', ' 2019', '2022', '3.38', 'no', 'no', 'dha'),
(16, 0, 'uploads/34190472914WhatsApp Image 2022-06-13 at 8.18.30 PM.jpeg', 'Abdur ', 'Rakib', 'web developer', 'rakib2022@gmail.com', '017311111111', 'html,css,php.laravel.', ' travelling,cricket.', 'I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall v', 'North East University , sylhet  ,Bangladesh', 'Computer Science and Engineering', ' 2019', '2022', '3.33', 'junior web developer', 'Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely ', 'golapgonj , sylhet.'),
(19, 12, 'uploads/4030845169WhatsApp Image 2022-06-13 at 8.18.30 PM.jpeg', 'Abdur', 'Rahims', 'web developer..', 'abdurrahimmm@gmail.com', '01737283188', 'html,css,php...', ' cricket...', 'i am a student...', 'North East University , sylhet  ,Bangladesh...', 'Computer Science and Engineering...', ' 2019.', '2022.', '3.22', 'junior web developer...', 'doing job as a junior web developer of a company...', 'golapgonj,sylhet..'),
(20, 3, 'uploads/72854190035Desert.jpg', 'aisha', 'islam', 'web developer.', 'aisha@gmail.com', '0173728311', 'html,css,php.laravel', ' cricket,coding', 'i am a student of cse', 'North East Universit , sylhet ,Bangladesh.', 'Computer Science & Engineering', ' 2019', '2022', '3.00', 'junior web developer.', 'doing job as a junior web developer of a company.', 'golapgonj,sylhet , bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
