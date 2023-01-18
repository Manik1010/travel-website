-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 07:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
-- Table structure for table `apply_job_post`
--

CREATE TABLE `apply_job_post` (
  `id_apply` int(11) NOT NULL,
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_job_post`
--

INSERT INTO `apply_job_post` (`id_apply`, `id_jobpost`, `id_company`, `id_user`, `status`) VALUES
(0, 30, 0, 1, 0),
(0, 29, 12, 1, 0),
(0, 30, 0, 4, 0),
(0, 34, 0, 4, 0),
(0, 35, 0, 4, 0),
(0, 33, 0, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `r_type` varchar(255) NOT NULL,
  `date1` date DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `number_room` int(11) NOT NULL,
  `tk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`id`, `h_id`, `h_name`, `u_id`, `name`, `phone`, `r_type`, `date1`, `date2`, `number_room`, `tk`) VALUES
(6, 1, 'Rose View ', 15, 'Manik Molla', 1616490568, 'single', '2022-08-04', '2022-08-06', 2, 1000),
(7, 1, 'Rose View ', 15, 'Mahim Molla', 170000000, 'twin', '2022-08-06', '2022-08-09', 3, 1000),
(8, 7, 'Rose View', 4, 'Manik Molla', 1616490568, 'single', '2022-08-04', '2022-08-06', 2, 1000),
(11, 7, 'Rose View', 4, 'Nayme', 1722222222, 'twin', '2022-10-26', '2022-10-28', 1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `booking_info_car`
--

CREATE TABLE `booking_info_car` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `driver` int(11) NOT NULL,
  `sets` int(5) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_number` int(12) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `day_0` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `day_00` date NOT NULL,
  `mag` varchar(255) NOT NULL,
  `nid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `CreationDate`, `UpdationDate`) VALUES
(1, 'BL ', '2022-09-08 03:41:40', '2022-09-08 03:41:40'),
(2, 'BMW', '2022-09-07 05:28:04', NULL),
(3, 'Toyata', '2022-09-07 05:28:39', NULL),
(4, 'Taxi', '2022-09-07 05:28:47', NULL),
(6, 'Alpha Sports', '2022-10-05 20:43:32', NULL),
(7, 'SIN Car', '2022-10-09 05:47:10', '2022-10-09 05:47:10'),
(8, 'Canadian Motor', '2022-10-05 20:48:50', NULL),
(9, 'Polarsun Automobile', '2022-10-05 20:51:15', '2022-10-05 20:51:15'),
(10, 'meem', '2022-10-26 08:48:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `commitee_request`
--

CREATE TABLE `commitee_request` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `createrid` int(11) NOT NULL,
  `creatername` varchar(255) NOT NULL,
  `fromevent` varchar(255) NOT NULL,
  `fromeventtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `creater` varchar(255) NOT NULL,
  `creater_name` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`id`, `name`, `creater`, `creater_name`, `event`, `title`) VALUES
(1, 'BL', '4', 'Manik Molla', '12', 'manik'),
(2, 'ICPC Program', '4', 'Manik Molla', '11', 'River Cruise on Shitalakhya River Near Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `committee_members`
--

CREATE TABLE `committee_members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee_members`
--

INSERT INTO `committee_members` (`id`, `name`, `surname`, `u_name`, `u_id`, `email`, `addres`) VALUES
(1, 'ICPC Program', 'Precedent', 'Manik Molla', 4, 'manik@gmail.com', 'Amborkhana');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `viewpermission` varchar(100) NOT NULL,
  `event` varchar(5000) NOT NULL,
  `img` varchar(255) NOT NULL,
  `day_0` varchar(255) NOT NULL,
  `day_01` varchar(255) NOT NULL,
  `day_02` varchar(255) NOT NULL,
  `day_00` varchar(255) NOT NULL,
  `ac` varchar(255) NOT NULL,
  `non_ac` varchar(255) NOT NULL,
  `air` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `user_id`, `date`, `title`, `viewpermission`, `event`, `img`, `day_0`, `day_01`, `day_02`, `day_00`, `ac`, `non_ac`, `air`) VALUES
(23, 4, '2022-06-15', 'Eid-Al-Fitr 2022 Wishes', '', '  Eid-Al-Fitr 2022 Wishes In Bengali: দেখতে দেখতে ৩০ রমজান সম্পূর্ণ করে আজ খুশির ঈদ (Eid-Al-Fitr 2022)। এক মাস রমজানের পর ঈদ-আল-ফিতর বয়ে আনল খুশির পরশ। জাকাত, ফিতরের মাধ্যমে কেটেছে রমজান। গরীব দুঃখীদের সাধ্যমতো দানধ্যান করা হয়েছে। এবার গোসল করে নতুন পোশাক প Manik ', 'uploads/event-img/10679850282Eid-Al-Fitr-2022-Wishes-in-Bengali-3.jpg', '', '', '', '', '', '', ''),
(24, 4, '2022-07-30', 'Sajek Trip 30 June', 'Sajek', '  Sajek  is an emerging tourist spot in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in the Rangamati District. Sajek Ruilui Rara  is 1,476 feet (450 m) above sea level. Sajek  is known as the Q.Sajek Is An Emerging Tourist Spot In Bangladesh Situated Among The Hills Of The Kasalong Range Of Mountains In Sajek Union, Baghaichhari Upazila In The Rangamati District. Sajek Ruilui Rara Is 1,476 Feet (450 M) Above Sea Level. Sajek Is Known As The Q. \r\n\r\n Sajek  is an emerging tourist spot in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in the Rangamati District. Sajek Ruilui Rara  is 1,476 feet (450 m) above sea level. Sajek  is known as the Q.Sajek Is An Emerging Tourist Spot In Bangladesh Situated Among The Hills Of The Kasalong Range Of Mountains In Sajek Union, Baghaichhari Upazila In The Rangamati District. Sajek Ruilui Rara Is 1,476 Feet (450 M) Above Sea Level. Sajek Is Known As The Q. \r\n Sajek  is an emerging tourist spot in Bangladesh situated among the hills of the Kasalong range of mountains in Sajek union, Baghaichhari Upazila in the Rangamati District. Sajek Ruilui Rara  is 1,476 feet (450 m) above sea level. Sajek  is known as the Q.Sajek Is An Emerging Tourist Spot In Bangladesh Situated Among The Hills Of The Kasalong Range Of Mountains In Sajek Union, Baghaichhari Upazila In The Rangamati District. Sajek Ruilui Rara Is 1,476 Feet (450 M) Above Sea Level. Sajek Is Known As The Q.  ', 'uploads/event-img/357604823991653457778_event_image1.jpg', 'Bus will start from Dhaka Rasel Square, Panthapath  at 10:30 PM ', 'Early morning, reach at Khagrachori. Breakfast at FNF Restaurant  then go to Sajek by Chader Gari. Check in  resort around 12to01 PM at Sajek. Take rest and shower then Lunch at 01:30 or 2.00 pm. After that visit Konglak para (Top view point of Sajek) aro', 'Early morning sunrise view from our Cottage or Helipad. Breakfast time 08:00 and Check out form Sajek 10:00am. After that we start journey toward Khagrachari and eat Lunch at 1:30 FNF Restaurant.  After Lunch we  visit to Alu Tila Cave, Terang view point ', 'Back to your sweet home & end the trip at 5.00 am In Sha Allah.', '1000', '2000', '4000'),
(25, 7, '2022-06-16', 'BD Tour Lovers', 'Bangladesh', 'BD Tour Lovers is a popular tour agency of Bangladesh managed by a professional team. We are specialized in organizing tours inside beautiful Bangladesh. We will arrange package tours and enable tour lovers to visit their dream destinations. Our mission i', 'uploads/event-img/50294475596BD-Tour-Lover.jpg', '', '', '', '', '', '', ''),
(28, 4, '2022-07-17', 'SUNDARBANS Trip with TGB', 'Sundarbans', '  The Sundarbans is the largest contiguous block of mangrove forest in the world. It is a playground of heavenly beauty bestowed by nature. In Bangladesh tourism, Sundarbans play the most vital role. A large number of foreigners come to Bangladesh every yea  ', 'uploads/event-img/297421101111650390229_event.jpg', 'Train will start at 07:00 PM from Komlapur Railway Station (Chitra) or Kallyanpur  Bus Stand', 'At the early morning, after reaching Khulna we will go to the ship ghat by Auto/Local transport which will take 5 minutes to reach. After checking into the ship, we will have our Special breakfast. Ship will start for Harbaria. We will visit Harbaria in t', 'In the early morning, we will visit Kotka Office par to experience big bunch of Deer from very near into the jungle and then will walk to see Tiger Tila. After breakfast we will go to Kotka Jamtola sea beach and will play football and bath together at the', 'We will visit Karamjal and after that we will have lunch. At that time we will start for Khulna by ship. At the evening, we will leave the ship after early Dinner. Train will start for Dhaka from Khulna at 10 PM', '10000', '20000', '30000'),
(29, 7, '2022-08-05', 'আমিয়াখুম, নাফাখুম, লাংলুক With Travel Geeks Bd', 'বান্দরবান', 'পাথর আর সবুজে ঘেরা পাহাড়ের মধ্য দিয়ে প্রবল বেগে নেমে আসছে জলধারা। দুধসাদা রঙের ফেনা ছড়িয়ে তা বয়ে চলেছে পাথরের গা বেয়ে। নিমেষেই ভিজিয়ে দিচ্ছে পাশের পাথুরে চাতাল। সঙ্গে অবিরাম চলছে জলধারার পতন আর প্রবাহের শব্দতরঙ্গ। লোকালয় ছেড়ে গহিন পাহাড়ের মাঝে এমন দৃশ্য—এ', 'uploads/event-img/65160230666TGBD-2.jpg.crdownload', '', '', '', '', ' ৬0০০/- (প্রতি জন)', ' ৬৮০০/- (প্রতি জন)', ' ৮৮০০/- (প্রতি জন)');

-- --------------------------------------------------------

--
-- Table structure for table `eventrequest`
--

CREATE TABLE `eventrequest` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `viewpermission` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `day_0` varchar(255) NOT NULL,
  `day_01` varchar(255) NOT NULL,
  `day_02` varchar(255) NOT NULL,
  `day_00` varchar(255) NOT NULL,
  `ac` varchar(255) NOT NULL,
  `no_ac` varchar(255) NOT NULL,
  `air` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventrequest`
--

INSERT INTO `eventrequest` (`event_id`, `user_id`, `date`, `title`, `viewpermission`, `event`, `img`, `day_0`, `day_01`, `day_02`, `day_00`, `ac`, `no_ac`, `air`) VALUES
(31, 7, '2022-08-07', 'Demo', 'Amborkhana', 'DemoDemo  Demo  Demo Demo v Demo  Demo ', 'uploads/event-img/68726259405WIN_20191028_23_52_09_Pro.jpg', 'Demo ', 'Demo ', 'Demo ', 'Demo ', '10', '20', '30');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(200) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`) VALUES
(6, 'What is the purpose of a travel website?', 'A travel website is a website that provides travel reviews, trip fares, or a combination of both. Over 1.5 billion people book travel per year, 70% of which is done online.', '0000-00-00 00:00:00'),
(7, 'How do websites help in tourism industry?', 'The website can be used as a perfect platform to reach your customers with important information. ', '0000-00-00 00:00:00'),
(8, 'HOW DO I KNOW I CAN TRUST THIS TOUR KORO website?', 'Professional Travel a Direct Travel Company is extremely cautious when it comes to choosing our business partners and vendors. This vetting of travel suppliers and support of the ‘good ones’ over the past 50+ years has given us preferred access to the wor', '0000-00-00 00:00:00'),
(9, 'Can I make a booking over the phone?', 'Yes, you can call us on +88 1234567890 ', '0000-00-00 00:00:00'),
(10, 'How can I book a multi-sector itinerary?', 'Multi-sector hotel rooms and vacations can be booked by calling us on +88 1234567890444 (standard charges apply)', '0000-00-00 00:00:00'),
(11, 'How do I know that my booking is confirmed?', 'Whether a booking is made online or over the phone, a confirmation would be sent to you via e-mail, which would include your reservation number and travel details.\r\n', '0000-00-00 00:00:00'),
(12, 'How will my hotel booking or vacation package be confirmed?', 'For all hotel bookings made on the website, you will receive a confirmation number via e-mail.\r\n\r\nFor hotel and vacation packages booked over the phone, our reservation agents would process all your travel details and check for availability with the hotel', '0000-00-00 00:00:00'),
(13, 'Can I change my hotel booking?', 'You may change your hotel reservation details. However, certain charges as per the hotel policies might be applicable.', '0000-00-00 00:00:00'),
(14, 'How can I contact Tour Koro?', 'You can call us on +88 1234567890(standard charges apply).', '0000-00-00 00:00:00'),
(15, 'Will I have to pay any charges if I cancel my hotel or package booking?', 'Cancellation policies and charges will depend on the hotel booked. Travelguru, will charge 3% of the total transaction amount as a processing charge for all cancellations above and beyond the charges by the hotel.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `h_id` int(11) NOT NULL,
  `dist_name` varchar(255) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_loaction` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discreption` varchar(255) NOT NULL,
  `facilitie1` varchar(255) NOT NULL,
  `facilitie2` varchar(255) NOT NULL,
  `facilitie3` varchar(255) NOT NULL,
  `facilitie4` varchar(255) NOT NULL,
  `facilitie5` varchar(255) NOT NULL,
  `facilitie6` varchar(255) NOT NULL,
  `facilitie7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`h_id`, `dist_name`, `h_name`, `h_loaction`, `image`, `discreption`, `facilitie1`, `facilitie2`, `facilitie3`, `facilitie4`, `facilitie5`, `facilitie6`, `facilitie7`) VALUES
(2, 'Dhaka', 'InterContinental Dhaka, an IHG Hotel', 'Dhaka', 'uploads/hotels-img/26829815275328510660.jpg', 'Get the celebrity treatment with world-class service at InterContinental Dhaka, an IHG Hotel\r\nInterContinental Dhaka, an IHG Hotel has a restaurant, outdoor swimming pool, a fitness centre and bar in Dhaka. This 5-star hotel features free WiFi and a garde', 'Airport shuttle', 'Free WiF', 'Fitness centre', 'Non-smoking rooms', 'Room service', 'Tea/Coffee', 'Breakfast'),
(5, 'Shylet', 'Nazimgarh Garden Resort', 'Nazimgarh Garden Resort Nazimghar, Khadimnagar, 3100 Sylhet, Bangladesh –', 'uploads/hotels-img/34549208573160411870.jpg', 'Set in Sylhet, Nazimgarh Garden Resort has a garden. Boasting room service, this property also provides guests with a restaurant. The resort features family rooms.\r\n\r\nAt the resort, all rooms have a desk. The rooms are equipped with a private bathroom. Al', 'Airport shuttle', 'Free WiF', 'Fitness centre', 'Non-smoking rooms', 'Room service', 'Tea/Coffee', 'Non-smoking rooms'),
(6, 'Brashal', 'Hotel Graver Inn International ', ' Sabirul Way, Kuakāta, Bangladesh', 'uploads/hotels-img/21990147304expediav2-22175707-4e04051d_z-318959.jpg', 'Hotel Graver Inn International provides 3-star accommodation, plus meeting rooms, a 24-hour reception and free Wi-Fi. It also offers a business centre, a car rental desk and a laundry service.\r\n\r\nRooms at the hotel are comfortable and feature a mini bar.\r', 'Airport shuttle', 'Free WiF', 'Fitness centre', 'Non-smoking rooms', 'Room service', 'Tea/Coffee', 'Non-smoking rooms'),
(7, 'Shylet', 'Rose View', 'Shahjalal Uposhohor, 3100 Sylhet, Bangladesh', 'uploads/hotels-img/13704068302265937732.jpg', 'Offering an indoor swimming pool, 3 dining options and a fitness centre, Rose View Hotel is located in Sylhet. Activities like table tennis can be enjoyed. Free WiFi access is available.\r\n\r\nEach room here will provide you with air conditioning and a minib', 'Airport shuttle', 'Free WiF', 'Fitness centre', 'Non-smoking rooms', 'Room service', 'Tea/Coffee', 'Non-smoking rooms');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_categories`
--

CREATE TABLE `hotel_categories` (
  `categories_id` int(11) NOT NULL,
  `dist_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_categories`
--

INSERT INTO `hotel_categories` (`categories_id`, `dist_name`) VALUES
(4, 'Shylet'),
(5, 'Dhaka'),
(6, 'Brashal'),
(12, 'Mymensingh'),
(11, 'Khulna'),
(10, 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_categories_request`
--

CREATE TABLE `hotel_categories_request` (
  `categories_id` int(11) NOT NULL,
  `dist_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_categories_request`
--

INSERT INTO `hotel_categories_request` (`categories_id`, `dist_name`) VALUES
(9, 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_request`
--

CREATE TABLE `hotel_request` (
  `id` int(11) NOT NULL,
  `dist_name` varchar(255) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_loaction` varchar(255) NOT NULL,
  `discreption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facilitie1` varchar(255) NOT NULL,
  `facilitie2` varchar(255) NOT NULL,
  `facilitie3` varchar(255) NOT NULL,
  `facilitie4` varchar(255) NOT NULL,
  `facilitie5` varchar(255) NOT NULL,
  `facilitie6` varchar(255) NOT NULL,
  `facilitie7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `jobtitle` varchar(1000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `minimumsalary` int(11) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobtitle`, `description`, `minimumsalary`, `experience`) VALUES
(1, '', '', 20000, 2),
(2, '', '', 20000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `jobtitle` varchar(1000) NOT NULL,
  `minimumsalary` int(11) NOT NULL,
  `maximumsalary` int(11) NOT NULL,
  `experience` int(11) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` varchar(5000) NOT NULL,
  `qualification` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id_jobpost`, `id_company`, `jobtitle`, `minimumsalary`, `maximumsalary`, `experience`, `createdat`, `description`, `qualification`) VALUES
(1, 0, '', 1003, 5000, 2, '2022-08-02 04:34:16', '', ''),
(23, 6, '', 21222, 2222, 1, '2017-08-28 20:12:53', '', ''),
(24, 8, '', 10032, 324343, 4, '2022-05-10 18:47:24', '', ''),
(25, 9, '', 3324, 434343, 4, '2022-05-11 03:30:03', '', ''),
(26, 10, '', 68888, 5555555, 5, '2022-05-11 03:59:03', '', ''),
(27, 12, '', 10000, 20000, 3, '2022-05-13 20:56:38', '', ''),
(28, 12, '', 3000, 5000, 1, '2022-05-13 20:57:20', '', ''),
(29, 12, '', 4000, 5000, 4, '2022-05-13 20:58:54', '', ''),
(30, 0, '', 1002, 4000, 1, '2022-08-01 21:51:03', '', ''),
(31, 0, '', 20000, 0, 2, '2022-08-03 03:15:59', '', ''),
(32, 0, 'Demo', 2000, 4000, 1, '2022-08-03 03:22:46', 'job opprotunity in bd', 'bsc in cse'),
(33, 0, 'senior software developer', 10000, 20000, 1, '2022-08-03 03:26:10', 'BRAC is an international development organisation founded in Bangladesh that partners with over 100 million people living with inequality and poverty globally to create sustainable opportunities to realise potential.\r\nSocial Innovation Lab (SIL) is a cross-disciplinary platform for BRAC staff to learn about best practices in development, generate ideas, experiment and share knowledge with the global development community. We look for colleagues who value the importance of collaboration, embody curiosity, situational adaptability, sincere enthusiasm and a commitment to social good. Come join us, to experiment with innovation at scale and know that your work will have a lasting positive impact. Working at brac is not like any other job. It is a platform where you can bring about real change for people who need it the most. We are not just dreaming of a better world, we are building it. Join us to find the way.', 'bsc in cse'),
(34, 0, 'Senior Manager, Business Innovation, Social Innovation Lab (SIL)', 20000, 30000, 2, '2022-08-03 03:29:46', 'BRAC is an international development organisation founded in Bangladesh that partners with over 100 million people living with inequality and poverty globally to create sustainable opportunities to realise potential.\r\n\r\n\r\nSocial Innovation Lab (SIL) is a cross-disciplinary platform for BRAC staff to learn about best practices in development, generate ideas, experiment and share knowledge with the global development community. We look for colleagues who value the importance of collaboration, embody curiosity, situational adaptability, sincere enthusiasm and a commitment to social good. Come join us, to experiment with innovation at scale and know that your work will have a lasting positive impact. Working at brac is not like any other job. It is a platform where you can bring about real change for people who need it the most. We are not just dreaming of a better world, we are building it. Join us to find the way.', 'Masters/MBA in any business discipline from reputed public/private university'),
(35, 0, 'Senior Manager, Business Innovation, Social Innovation Lab (SIL)', 30000, 40000, 0, '2022-08-03 03:33:14', 'BRAC is an international development organisation founded in Bangladesh that partners with over 100 million people living with inequality and poverty globally to create sustainable opportunities to realise potential.\r\nBRAC Urban Development Programme (UDP) envisions cities and human settlements which are safe, resilient, inclusive and sustainable. We implement tailored interventions to reach this goal, such as building low-cost climate-resilient housing, empowering workers in the ready-made garment sector, raising community fire prevention awareness and advocating with the local and national governments for inclusive, pro-poor, urban planning and governance. Join the UDP team to create models for better urban spaces across Bangladesh and be part of a team making cities into places where everyone living in them can thrive. Working at brac is not like any other job. It is a platform where you can bring about real change for people who need it the most. We are not just dreaming of a better world, we are building it. Join us to find the way.', 'Masters/MBA in any business discipline from reputed public/private university');

-- --------------------------------------------------------

--
-- Table structure for table `manage_pages_car`
--

CREATE TABLE `manage_pages_car` (
  `id` int(11) NOT NULL,
  `PageName` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_pages_car`
--

INSERT INTO `manage_pages_car` (`id`, `PageName`, `type`, `detail`) VALUES
(1, 'Terms and Conditions', 'terms', '																										<p align=\"justify\"><font size=\"2\"><strong><font color=\"#990000\">(1) ACCEPTANCE OF TERMS</font><br><br></strong>Welcome to Yahoo! India. 1Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: <a href=\"http://in.docs.yahoo.com/info/terms/\">http://in.docs.yahoo.com/info/terms/</a>. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p>\r\n<p align=\"justify\"><font size=\"2\">Welcome to Yahoo! India. Yahoo Web Services India Private Limited Yahoo\", \"we\" or \"us\" as the case may be) provides the Service (defined below) to you, subject to the following Terms of Service (\"TOS\"), which may be updated by us from time to time without notice to you. You can review the most current version of the TOS at any time at: </font><a href=\"http://in.docs.yahoo.com/info/terms/\"><font size=\"2\">http://in.docs.yahoo.com/info/terms/</font></a><font size=\"2\">. In addition, when using particular Yahoo services or third party services, you and Yahoo shall be subject to any posted guidelines or rules applicable to such services which may be posted from time to time. All such guidelines or rules, which maybe subject to change, are hereby incorporated by reference into the TOS. In most cases the guides and rules are specific to a particular part of the Service and will assist you in applying the TOS to that part, but to the extent of any inconsistency between the TOS and any guide or rule, the TOS will prevail. We may also offer other services from time to time that are governed by different Terms of Services, in which case the TOS do not apply to such other services if and to the extent expressly excluded by such different Terms of Services. Yahoo also may offer other services from time to time that are governed by different Terms of Services. These TOS do not apply to such other services that are governed by different Terms of Service. </font></p><p align=\"justify\"><font size=\"2\"><br></font></p><p align=\"justify\"><font size=\"2\">Manik Molla</font></p>\r\n										\r\n														'),
(2, 'Privacy Policy', 'privacy', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span>');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_images`
--

CREATE TABLE `multiple_images` (
  `image_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `image_createtime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple_images`
--

INSERT INTO `multiple_images` (`image_id`, `r_id`, `h_name`, `image_name`, `image_createtime`) VALUES
(1, 1, 'Rose View', '66.jpg', '2022-07-11 08:02:21'),
(2, 1, 'Rose View', '5.jpg', '2022-07-11 08:02:21'),
(3, 1, 'Rose View', '6.jpg', '2022-07-11 08:02:21'),
(4, 1, 'Rose View', '2.jpg', '2022-07-11 08:02:21'),
(5, 1, 'Rose View', '1.jpg', '2022-07-11 08:02:21'),
(6, 0, '', '53203636-1659216194.jpg', '2022-07-30 11:23:14'),
(7, 0, '', 'WhatsApp Image 2022-07-20 at 8-08-27 PM-1659216194.jpeg', '2022-07-30 11:23:14'),
(8, 0, '', 'WhatsApp Image 2022-07-20 at 8-08-24 PM (1)-1659216194.jpeg', '2022-07-30 11:23:14'),
(9, 0, '', 'WhatsApp Image 2022-07-20 at 8-08-22 PM (1)-1659216194.jpeg', '2022-07-30 11:23:14'),
(10, 0, '', 'expediav2-22175707-fc822788_z-808677-1659442671.jpg', '2022-08-02 02:17:51'),
(11, 0, '', 'ostrovok-9061088-bb1e7a7e8ee76e6353480318fa0f68c827543548-856523-1659442671.jpg', '2022-08-02 02:17:51'),
(12, 0, '', 'expediav2-22175707-10f2c2d5_z-120732-1659442671.jpg', '2022-08-02 02:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `new_places`
--

CREATE TABLE `new_places` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(150) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_places`
--

INSERT INTO `new_places` (`id`, `user_id`, `category_id`, `title`, `date`, `description`, `image`, `view`) VALUES
(1, 0, 1, 'চাঁন মিয়ার আনারস বাগান', '2022-04-01', 'প্রকৃতি মানুষকে সবসময়ই কাছে টানে। আদিকাল থেকেই প্রকৃতির সঙ্গে সহাবস্থান। কারো কাছে প্রিয় পাহাড়ের সবুজ মিতালি। কারো ভালো লাগে ঝর্ণার অপূর্ব সৌন্দর্য কিংবা সাগরের কলতান। যার কাছে যেটিই প্রিয় হোক না কেন ভ্রমণ পিপাসুদের জন্য পছন্দের তালিকায় প্রথমেই ওঠে আসে সিলেটের নাম। তাই পূণ্যভূমি সিলেটকে বলা হয় প্রাকৃতিক সৌন্দর্যের রাজধানী। এবার সৌন্দর্য হাতছানি দিয়ে ডাকছে সিলেটের গোলাপগঞ্জ উপজেলায় অবস্থিত দত্তরাইল গ্রামের চাঁন মিয়ার আনারস বাগান। এটি সিলেটের নতুন পর্যটন স্পট। \r\n\r\nযেদিকে চোখ যাবে শুধু সবুজ আর সবুজ। এ যেন এক সবুজের সমারোহ। নীল আকাশের নিচে যেন সবুজ গালিচা পেতে সারিবদ্ধ ভাবে আছে হাজার হাজার আনারস গাছ। আছে উঁচু-নিচু টিলা আর টিলার মাঝে সুশৃঙ্খল ভাবে করা হয়েছে আনারস চাষাবাদ। সুউচ্চ টিলা গুলোর উপরে উঠার সরু সিড়ি পথ আর ছোট বড় কয়েকটি টিলাবেষ্টিত আনারস বাগান, এক টিলা থেকে অন্য টিলায় ছুটে চলার আঁকাবাঁকা মেঠোপথ আপনাকে অন্যরকম অনুভূতি দেবে।\r\n\r\nআপনার যদি শহরের কোলাহল ছেড়ে নিরিবিলি দূরে কোথাও যাওয়ার ইচ্ছে করে, যান্ত্রিক কোলাহলমুক্ত পরিবেশে একান্ত সময় কাটাতে চান তাহলে এই বাগানটি পছন্দের তালিকায় শীর্ষে রাখতে পারেন। কারণ প্রকৃতির সব সৌন্দর্যের সম্মিলন যেন এখানে ঘটেছে। দিগন্তজোড়া সবুজ টিলা গুলোতে আনারস গাছ, নীল আকাশের নিচে অপরূপ মায়াবি আভা এমন সব অন্তহীন সৌন্দর্য একাকার হয়ে আছে গোলাপগঞ্জের চাঁন মিয়ার আনারস বাগানে।\r\n\r\nঅল্পদিনের মধ্যে চাঁন মিয়ার আনারস বাগানের খ্যাতি অনেক। বাগান করার পূর্বেও টিলার এলাকার জন্য এই জনপদ প্রাকৃতিক ভাবে সুন্দর ও সমৃদ্ধ। বাগানটি করার পর তা আরও বেশি সমৃদ্ধ হয়। বিশেষ করে এবছর বাগানটিতে সৌন্দর্য বর্ধনের জন্য ব্যাপক কাজ করেছে বাগান মালিক কর্তৃপক্ষ।\r\n\r\n২০২২ সালের শুরু থেকে বাগানে সাধারণ দর্শনার্থী প্রবেশ বন্ধ রেখে নতুন রূপে সাজিয়ে পবিত্র ঈদুল ফিতরের দিন থেকে আবারও দর্শনার্থীদের জন্য খুলে দেওয়া হয়েছে। বাগানে এবছর দর্শনার্থীদের জন্য নতুন ভাবে যুক্ত হয়েছে দৃষ্টিনন্দন বাসার স্থান, দর্শনার্থী বসার  ছাউনি, সুউচ্চ টিলার চুড়ায় ক্যান্টিন, ছবি তোলার জন্য নিদিষ্ট স্থান ইত্যাদি। ', 'uploads/new-places-img/61406506196garden.jpg', 1),
(2, 0, 1, 'Tangoar Haor', '2021-11-04', 'উত্তর পশ্চিম সিলেটে, মেঘালয় পাহাড়ের পাদদেশে সুনামগঞ্জ জেলার তাহিরপুর ও ধর্মপাশা উপজেলার মধ্যবর্তী স্থানে প্রায় ১০০ বর্গকিমি এলাকা জুড়ে টাঙ্গুয়ার হাওরের অবস্থিতি। মেঘালয় পাহাড় থেকে ৩০ টির মতো ঝর্না/ ছড়া এসে মিশেছে এই হাওরে। ২০০০ সালে এটি ‘রামসার সাইট’ হিসাবে আন্তর্জাতিক স্বীকৃতি লাভ করে। সুন্দরবনের পর এটি বাংলাদেশের দ্বিতীয় রামসার সাইট। এর আগে ১৯৯৯ সালে বাংলাদেশ সরকার টাঙ্গুয়ার হাওরকে ‘পরিবেশগত সংকটাপন্ন এলাকা’ হিসেবে ঘোষনা করে।\r\n\r\nটাঙ্গুয়ার হাওর জীববৈচিত্রের এক অনন্য আঁধার। শীতকালে এখানে স্থানীয় পাখীদের সাথে হাজার হাজার পরিযায়ী পাখী এসে ভীড় জমায়। এ হাওরে প্রায় ৫১ প্রজাতির পাখি বিচরণ করে। পরিযায়ী পাখিদের মধ্যে বিরল প্রজাতির প্যালাসেস ঈগল, বড় আকারের গ্রে কিংস্টর্ক রয়েছে এই হাওড়ে। স্থানীয় জাতের মধ্যে শকুন, পানকৌড়ি, বেগুনি কালেম, ডাহুক, বালিহাঁস, গাঙচিল, বক, সারস[২], কাক, শঙ্খ চিল, পাতি ইত্যাদি পাখির নিয়মিত বিচরণ এই হাওরে। এছাড়াও ৬ প্রজাতির স্তন্যপায়ী প্রাণী, ৪ প্রজাতির সাপ, বিরল প্রজাতির উভচর, ৬ প্রজাতির কচ্ছপ, ৭ প্রজাতির গিরগিটিসহ নানাবিধ প্রাণীর বাস, এই হাওরের জীববৈচিত্র্যকে করেছে ভরপুর।\r\n\r\nঅধ্যাপক আলী রেজা খান-এর বর্ণনানুযায়ী এই হাওরে সব মিলিয়ে প্রায় ২৫০ প্রজাতির পাখি, ১৪০ প্রজাতির মাছ, ১২\'র বেশি প্রজাতির ব্যাঙ, ১৫০-এর বেশি প্রজাতির সরিসৃপ এবং ১০০০-এরও বেশি প্রজাতির অমেরুদণ্ডী প্রাণীর আবাস রয়েছে।\r\n\r\nপর্যটকদের জন্য অন্ততঃ দুবার টাঙ্গুয়া হাওর ভ্রমন করা অবশ্যক। একবার প্রবল বর্ষায় ( মধ্য জুলাই থেকে মধ্য আগষ্টের মধ্যে) আরেকবার তীব্র শীতে ( মধ্য ডিসেম্বর থেকে মধ্যে জানুয়ারীর মধ্যে)। শীতে হাজার হাজার পাখী এসে স্বাগতঃ জানাবে পর্যটকদের। আর বর্ষায় সমুদ্রের মতো উত্তাল জলরাশি, প্রবল বৃষ্টি আর মেঘালয় পাহাড় জুড়ে থোকা থোকা মেঘের বিচরন- এক অনন্য অভিজ্ঞতা।', 'uploads/new-places-img/13485455572tang04.jpg', 0),
(3, 0, 1, 'Panthumai ', '2022-02-12', 'পাংথুমাই সিলেট জেলার গোয়াইনঘাট উপজেলার পশ্চিমজাফলং ইউনিয়নের একটি গ্রাম। গ্রামটি মেঘালয় পর্বত শ্রেনীর পূর্ব খাসিয়া হিলসের কোলে। ছিমছাম, ছবির মতো সুন্দর এই গ্রামটির অন্যতম আকর্ষন হচ্ছে বিশাল ‘বড়হিল’ ঝর্ণা। যদিও ঝর্ণাটি ভৌগলিকভাবে ভারতের অন্তর্ভুক্ত কিন্তু একেবারে সামনাসামনি দাঁড়িয়েই এর উপচে পড়া সৌন্দর্য্য উপভোগ করা যায়। ঝর্নার নীচ থেকে বয়ে চলা পিয়াইন এর একটি শাখা নদী পশ্চিম দিকে প্রবাহমান। এই নদী ধরে আরেকটি পর্যটক গন্তব্য বিছনাকান্দি যাওয়া যায়।\r\n\r\nপাংথুমাই যেতে হলে প্রথমে আসতে হবে গোয়াইনঘাট উপজেলা সদরে। সিলেট থেকে জাফলং রোড ধরে সারীঘাট( ৪২ কিমি) পৌঁছে হাতের বামদিকে ১৬ কিমি গেলেই গোয়াইনঘাট পয়েন্ট থেকে ডানে রাস্তা চলে গেছে উপজেলা অফিসে, বামের রাস্তা সিলেট এয়ারপোর্টের দিকে। বামের রাস্তায় এক কিমির মতো এগুলে গোয়াইনঘাট কলেজ। কলেজের পাশ দিয়ে পূর্বদিকে সরু রাস্তা ধরে ১২ কিমি এর মতো এগিয়ে গেলেই পাংথুমাই গ্রাম। এর আগে মাতুরতল বাজার। গ্রামের ভেতর পর্যন্ত পাকা রাস্তা। গাড়ী থেকে নেমে হাতের বামে গেলেই দৃশ্যমান- অপূর্ব সেই জলপ্রপাত।\r\n\r\nঝর্না ছাড়াও গোয়াইনঘাট-পাংথুমাই পথটি ও আকর্ষনীয়। পূর্ব দিকে এগুতে এগুতে বিশাল পাহাড় ক্রমশঃ কাছে এগিয়ে আসতে থাকে। নীল থেকে ক্রমশঃ সবুজ হয়ে উঠে, এর মধ্যে মাঝেমাঝেই মেঘ ও ঝর্ণার লুকোচুরি।', 'uploads/new-places-img/855682978171.jpg', 0),
(5, 0, 1, 'Dolura', '2022-07-02', 'ডলুরা সুনামগঞ্জ শহরের কাছাকাছিই একটি দর্শনীয় স্থান। শহরের বালুর মাঠ থেকে থেকে খেয়া নৌকায় সুরমা নদী পাড় হয়ে হালুয়ারঘাট। সেখানে সিএনজি, ব্যাটারী চলাইত অটোরিক্সা পাওয়া যায়। ৩০ থেকে ৪৫ মিনিট সময় লাগে, আদিবাসীদের গ্রাম নারায়নতলা পাড় হয়েই মেঘালয় পাহাড়ের কোলে ছোট্ট সুন্দর গ্রাম। এখানে পাহাড় বেশ উঁচু আর একপাশে প্রবাহমান নদী চলতি, চলিত নদীর দীর্ঘ বালিয়াড়ি আর স্বচ্ছ পানির ধারা। পাহাড়ের একেবারেই কোলঘেঁষে একটি স্মৃতিসৌধ ও কবরস্থান। ১৯৭১ সালের মুক্তিযুদ্ধে শহীদ ৪৮ জন মুক্তিযোদ্ধার কবর এখানে।', 'uploads/new-places-img/593134487621 (1).jpg', 0),
(6, 0, 1, 'Lalakhal', '2022-01-01', 'মেঘালয় পর্বত শ্রেনীর সবচেয়ে পুর্বের অংশ জৈন্তিয়া হিলসের ঠিক নীচে পাহাড়, প্রাকৃতিক বন, চা বাগান ও নদীঘেরা একটি গ্রাম লালাখাল, সিলেট জেলার জৈন্তিয়াপুর উপজেলায়। জৈন্তিয়া হিলসের ভারতীয় অংশ থেকে মাইন্ডু ( Myntdu) নদী লালাখালের সীমান্তের কাছেই সারী নদী নামে প্রবেশ করেছে এবং ভাটির দিকে সারীঘাট পেরিয়ে গোয়াইন নদীর সাথে মিশেছে। লালাখাল থেকে সারীঘাট পর্যন্ত নদীর বারো কিমি পানির রঙ পান্না সবুজ- পুরো শীতকাল এবং অন্যান্য সময় বৃষ্টি না হলে এই রঙ থাকে। মুলতঃ জৈন্তিয়া পাহাড় থেকে আসা প্রবাহমান পানির সাথে মিশে থাকা খনিজ এবং কাদার পরিবর্তে নদীর বালুময় তলদেশের কারনেই এই নদীর পানির রঙ এরকম দেখায়।\r\n\r\nসিলেট জাফলং মহাসড়কে শহর থেকে প্রায় ৪২ কিমি দূরে সারীঘাট। সারীঘাট থেকে সাধারনতঃ নৌকা নিয়ে পর্যটকরা লালাখাল যান। স্থানীয় ইঞ্জিনচালিত নৌকায় একঘন্টা পনেরো মিনিটের মতো সময় লাগে সারী নদীর উৎসমুখ পর্যন্ত যেতে। নদীর পানির পান্না সবুজ রঙ আর দুইপাশের পাহাড় সারির ছায়া- পর্যটকদের মুগ্ধ করে। উৎসমুখের কাছাকাছিই রয়েছে লালাখাল চা বাগান।\r\n\r\nসারীঘাটে নাজিমগড় রিসোর্টসের একটি বোট স্টেশন আছে। এখান থেকে ও বিভিন্ন ধরনের ইঞ্জিন চালিত নৌকা নিয়ে লালাখাল যাওয়া যায়। লালাখালে সারী নদীর তীরে নাজিমগড়ের একটি মনোরম রেস্টুরেন্ট রয়েছে- ‘রিভার কুইন’ । সব অতিথিদের জন্যই এটি উন্মুক্ত। রিভারকুইন রেস্টুরেন্টের পাশেই রয়েছে ‘এডভেঞ্চার টেন্ট ক্যাম্প ‘ । এডভেঞ্চার প্রিয় পর্যটকরা এখানে রাত্রিযাপন করতে পারেন। নদীপেরিয়ে লালাখাল চা বাগানের ভেতর দিয়ে রয়েছে প্রাকৃতিকভাবে গড়ে উঠা হাঁটার পথ ( ট্রেকিং ট্রেইল)\r\n\r\nএ ছাড়া পেছনে পাহাড়ের ঢাল ও চুঁড়োয় গড়ে উঠেছে নাজিমগড়ের বিলাসবহুল নতুন রিসোর্ট ‘ওয়াইল্ডারনেস’। আবাসিক অতিথি ছাড়া এখানে প্রবেশাধিকার সংরক্ষিত।\r\n', 'uploads/new-places-img/343236727564.jpg', 0),
(7, 1, 2, 'Lalbagh Fort', '2021-11-06', 'Lalbagh Fort is an incomplete 17th-century Mughal fort complex that stands before the Buriganga River in the southwestern part of Dhaka, Bangladesh. The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah, who was the son of Emperor Aurangzeb and later emperor himself. His successor, Shaista Khan, did not continue the work, though he stayed in Dhaka up to 1688. The fort was never completed, and was unoccupied for a long period of time. Much of the complex was built over and now sits across from modern buildings.', 'uploads/new-places-img/25034529447licensed-image.jpg', 0),
(8, 1, 2, 'Ahsan Manzil', '2022-03-05', 'Ahsan Manzil is the erstwhile official residential palace and seat of the Nawab of Dhaka. The building is situated at Kumartoli along the banks of the Buriganga River in Dhaka, Bangladesh. Construction was started in 1859 and was completed in 1872. It was constructed in the Indo-Saracenic Revival architecture. It has been designated as a national museum.', 'uploads/new-places-img/75535920720licensed-image (1).jpg', 0),
(9, 1, 2, 'Star Mosque', '2022-09-03', 'Star Mosque, is a mosque located in Armanitola area, Dhaka, Bangladesh. The mosque has ornate designs and is decorated with motifs of blue stars. It was built in the first half of the 19th century by Mirza Golam Pir.', 'uploads/new-places-img/76096068967licensed-image (2).jpg', 0),
(10, 1, 2, 'Bangladesh National Museum', '2022-10-01', 'The Bangladesh National Museum, is the national museum of Bangladesh. The museum is well organized and displays have been housed chronologically in several departments like department of ethnography and decorative art, department of history and classical art, department of natural history, and department of contemporary and world civilization. The museum also has a rich conservation laboratory. Nalini Kanta Bhattasali served as the first curator of the museum during 1914–1947.', 'uploads/new-places-img/1565099303licensed-image (3).jpg', 0),
(0, 4, 8, 'demo', '2022-08-16', 'কুমিল্লা বাংলাদেশের দক্ষিণ-পূর্ব প্রান্তে গোমতী নদীর তীরে অবস্থিত চট্টগ্রাম বিভাগের অন্তর্ভুক্ত একটি মহানগরী। কুমিল্লা মেট্রোপলিটন শহরের আয়তন ৫৩.০৪ বর্গ কিলোমিটার এবং জনসংখ্যা ১২ লক্ষ। কুমিল্লা শহর হলো একটি বিস্তৃত শহর। কুুমিল্লা শহরটি প্রস্তাবিত কুমিল্লা বিভাগীয় সদরদপ্তর হবে।', 'uploads/new-places-img/54518654141WhatsApp Image 2022-08-09 at 12.41.44 AM.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_place_categories`
--

CREATE TABLE `new_place_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_place_categories`
--

INSERT INTO `new_place_categories` (`id`, `name`, `description`) VALUES
(1, 'Sylhet', 'Sylhet is a city in eastern Bangladesh, on the Surma River. It’s known for its Sufi shrines, like the ornate tomb and mosque of 14th-century saint Hazrat Shah Jalal, now a major pilgrimage site near Dargah Gate. The tiny Museum of Rajas contains belongings of the local folk poet Hasan Raja. A 3-domed gateway stands at the 17th-century Shahi Eidgah, a huge open-air hilltop mosque built by Emperor Aurangzeb.'),
(2, 'Dhaka ', 'Dhaka is the capital city of Bangladesh, in southern Asia. Set beside the Buriganga River, it’s at the center of national government, trade and culture. The 17th-century old city was the Mughal capital of Bengal, and many palaces and mosques remain. American architect Louis Khan’s National Parliament House complex typifies the huge, fast-growing modern metropolis'),
(3, 'Chattogram', 'Chittagong is large port city on the southeastern coast of Bangladesh. The Ethnological Museum has exhibits about the many different ethnic tribes across the country. Zia Memorial Museum, inside the former Old Circuit House, displays items belonging to former president Ziaur Rahman, who was assassinated on the site in 1981. The landmark Chandanpura Mosque has many onion-shaped domes and brightly painted minarets. '),
(8, 'Comilla', 'Comilla, officially spelled Cumilla from April 2018, is a city in the Chittagong Division of Bangladesh, located along the Dhaka-Chittagong Highway. It is the administrative centre of the Comilla District, part of the Chittagong Division. The name Comilla was derived from Komolangko, meaning the pond of lotus.'),
(9, 'Rajshahi', 'Rajshahi is a metropolitan city and a major urban, commercial and educational centre of Bangladesh. It is also the administrative seat of the eponymous division and district. Located on the north bank of the Padma River, near the Bangladesh-India border, the city has a population of over 1630966 residents.'),
(10, 'Rangpur', 'ddddd');

-- --------------------------------------------------------

--
-- Table structure for table `new_place_category_requests`
--

CREATE TABLE `new_place_category_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(15) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_place_category_requests`
--

INSERT INTO `new_place_category_requests` (`id`, `user_id`, `category_name`, `description`, `status`, `view`) VALUES
(3, 1, 'Comilla', 'Comilla, officially spelled Cumilla from April 2018, is a city in the Chittagong Division of Bangladesh, located along the Dhaka-Chittagong Highway. It is the administrative centre of the Comilla District, part of the Chittagong Division. The name Comilla was derived from Komolangko, meaning the pond of lotus.', 'success', 0),
(7, 1, 'Rajshahi', 'Rajshahi is a metropolitan city and a major urban, commercial and educational centre of Bangladesh. It is also the administrative seat of the eponymous division and district. Located on the north bank of the Padma River, near the Bangladesh-India border, the city has a population of over 1630966 residents.', 'success', 0),
(8, 1, 'Rangpur', 'ddddd', 'success', 0);

-- --------------------------------------------------------

--
-- Table structure for table `new_place_comments`
--

CREATE TABLE `new_place_comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_place_comments`
--

INSERT INTO `new_place_comments` (`id`, `user_id`, `post_id`, `comment`, `createdOn`) VALUES
(2, 1, 10, 'good', '2022-07-01 21:14:18'),
(3, 1, 10, 'so nice', '2022-07-01 21:51:12'),
(4, 1, 9, 'nice place', '2022-07-01 21:52:33'),
(5, 1, 9, 'not a bad place', '2022-07-01 21:53:00'),
(31, 1, 9, 'Wow so nice', '2022-07-03 10:14:29'),
(39, 1, 9, 'a', '2022-07-03 10:21:18'),
(60, 3, 10, 'so good', '2022-07-07 07:44:48'),
(64, 3, 9, 'yes it is awesome place', '2022-07-07 09:19:20'),
(65, 3, 10, 'nice place', '2022-07-07 09:19:52'),
(71, 1, 10, 'So nice\n', '2022-07-10 10:12:23'),
(73, 4, 1, 'nice Place', '2022-07-20 13:56:50'),
(74, 4, 6, 'Not Bad', '2022-08-01 22:57:34'),
(75, 1, 10, 'nice de', '2022-08-02 13:44:01'),
(77, 4, 9, 'Nice Manik\n', '2022-10-30 00:14:19'),
(78, 4, 9, 'sss', '2022-10-30 13:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `new_place_complains`
--

CREATE TABLE `new_place_complains` (
  `id` int(11) NOT NULL,
  `new_place_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(20) NOT NULL,
  `action` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_place_complains`
--

INSERT INTO `new_place_complains` (`id`, `new_place_id`, `user_id`, `title`, `message`, `status`, `action`, `view`) VALUES
(1, 1, 1, 'চাঁন মিয়ার আনারস বাগান', 'fake ', 'success', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `location` text NOT NULL,
  `duration` text NOT NULL,
  `tour_type` text NOT NULL,
  `max_size` int(11) NOT NULL,
  `general_info` text NOT NULL,
  `breakfast` text NOT NULL,
  `lunch` text NOT NULL,
  `snacks` text NOT NULL,
  `dinner` text NOT NULL,
  `included` text NOT NULL,
  `exclude` text NOT NULL,
  `title2` text NOT NULL,
  `persons` int(11) NOT NULL,
  `weekend_cost` int(11) NOT NULL,
  `weekdays_cost` int(11) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `itinerary` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `location`, `duration`, `tour_type`, `max_size`, `general_info`, `breakfast`, `lunch`, `snacks`, `dinner`, `included`, `exclude`, `title2`, `persons`, `weekend_cost`, `weekdays_cost`, `image1`, `image2`, `image3`, `itinerary`) VALUES
(3, 'Tanguar Haor Premium Trip', 'Niladri lake,Shimul Bagan,Lakmachara,Tanguar Haor Watch Tower', '2 Day & 3 Night', 'standard', 18, 'This is our premium Tanguar Haor trip  Boat- Joljatra/ Ba-Boat/ Haor King', 'স্থানীয় হোটেলে নাস্তা (যেকোনো একটা)\r\nরুটি/পরোটা + ডাল/ভাজি + ডিম ভাজি + চা / কোল্ড ড্রিঙ্কস + মিনারেল ওয়াটার\r\nআখনী বিরিয়ানি + চা / কোল্ড ড্রিঙ্কস + মিনারেল ওয়াটার\r\nচিকেন খিচুড়ি+ চা / কোল্ড ড্রিঙ্কস + মিনারেল ওয়াটার', 'ভাত ,হাওড়ের তাজা রুই-কাতলা মাছ / মুরগী ভুনা মাছ ভর্তা / আলু ভর্তা ডাল মিনারেল ওয়াটার সালাদ ', 'ঝাল মুড়ি মাখানো চা', 'ভাত, দেশী হাঁস ভুনা / দেশী মুরগী ভুনা মাছ ভর্তা / আলু ভর্তা ডাল মিনারেল ওয়াটার সালাদ', 'Premium sleeping quality\r\nAll meals (Lunch, Snacks, Breakfast on arrival day, Dinner on departure day\r\nEvening snacks\r\nWelcome hot towel\r\nSight seeing\r\n', 'No Medicines\r\nNo Personal cost', 'For 15-18 People', 15, 4500, 4500, 'uploads/packages-img/42364306365ke.png', 'uploads/packages-img/39580931712HZNBoP4B8Bve.png', 'uploads/packages-img/9657844845ses.png', '<figure class=\"table\"><table><tbody><tr><td><h3>Day-1</h3></td><td><h3>Day-2</h3></td></tr><tr><td><ul><li>06:00 : Reach Sunamganj</li><li>06:00-7:30 : Freshen up and Breakfast</li><li>7:30 : Departs for Tahirpur Bazar</li><li>9:00 : Reach Tahirpur Bazar and buy necessary things</li><li>10:00: Boat engine starts</li><li>12:00: Reach Watch tower and shower</li><li>14:00: Lunch</li><li>15:00: Departs for Takerghat</li><li>17:00: Reach Takerghat and roaming around Niladri Lake &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</li><li>19:00: Snacks</li><li>21:00: Dinner</li></ul></td><td><ul><li>8:00: Breakfast</li><li>9:00: Departs for roam spots</li><li>10:00: Reach Shimul Bagan and roam around</li><li>11:00: Reach Barikka Tila and roam around</li><li>12:00: Reach Lakmachara and roam around</li><li>13:00: Lunch in Joljatra</li><li>15:00: Departs for Takerghat</li><li>18:00: Reach Takerghat and departs for sunamganj</li><li>20:00: Reach sunamganj</li></ul><p>&nbsp;</p></td></tr></tbody></table></figure>'),
(6, 'Sajek Premium Package Trip', ' Rui lui para,Konglak Pahar,Alutila Cave,Risang Waterfall,Sajek Helipad,Sajek Stone Garden', '2 Day & 3 Night', 'standard', 24, 'This Is Rui lui para,Konglak Pahar,Alutila Cave,and Sajek Tour Package', '১. পরটা/রুটি + ডাল/ভাজি + ডিম ওমলেট + চা + পানি\r\n\r\nঅথবা,\r\n\r\n২. ভুনা খিচুড়ি + ডিম + পানি + চা।', 'N/A', 'ট্র্যাডিশনাল ব্যাম্বু চিকেন + সবজি+ ভাত + ডাল +ভর্তা + পানি (১ঃ৪) একটা ৪জনের জন্য ', '১. ব্যাম্বু বিরিয়ানি (চিকেন) -> ১ঃ২, একটা ২জনের জন্য  অথবা,    ২. BBQ চিকেন + ২ পিস পরটা+ সালাদ + কোক', 'ননএসি বাসের টিকেট \r\n\r\nচান্দের গাড়ির ভাড়া \r\n\r\nহোটেল ভাড়া \r\n\r\nখাওয়া দাওয়া', 'নিজস্ব খরচ \r\n\r\nযাওয়ার রাতের খাবার', 'Double bed Sharing', 4, 6000, 6000, 'uploads/packages-img/55019833199d.jpg', 'uploads/packages-img/55019833199BOdH.jpg', 'uploads/packages-img/5501983319925hDe2id.jpg', '<h3>Day-1:</h3><ul><li><strong>১ম রাতঃ</strong> রাত ১১ টার বাসে রওনা খাগড়াছড়ির উদ্দেশ্যে।</li><li><strong>১ম দিনঃ&nbsp;</strong><ul><li>সকাল ৭টাঃ পৌঁছে ফ্রেশ হয়ে নাশতা করবো।</li><li>সকাল ৯টাঃ চাঁন্দের গাড়ী ঠিক করে রওনা বাঘাইহাটে ১০ টার আর্মি স্কর্টের জন্য।</li><li>সকাল ১০.৩০ঃ স্কর্ট ছেড়ে দিলে সাজেকের পথে রওনা।&nbsp;</li><li>বেলা ১১.৩০ঃ সাজেক পৌছে হোটেলে চেক-ইন।&nbsp;</li><li>দুপুর ১.৩০ঃ ফ্রেশ হয়ে, একটু রেস্ট নিয়ে দুপুরের&nbsp;খাবার খেতে চলে আসবো সাজেকের সেরা হোটেলে।&nbsp;খাবার ১০০% হালাল।</li><li>দুপুর ২টাঃ হোটেলে ফিরে রিলাক্স&nbsp;</li><li>দুপুর ৩.৩০ঃ চাঁন্দের গাড়ীতে বের হবো ঘুরতে। হ্যালিপেড এবং কংলাক পাহাড়।</li><li>৬টাঃ শেষ বিকেলে সুর্যাস্ত দেখবো কংলাকের চূড়ায়।&nbsp;</li><li>৭টাঃ রাতের সাজেক আরো সুন্দর।&nbsp;আশেপাশে ঘুরাঘুরি অথবা রিসোর্টে চিল আড্ডা।&nbsp;</li></ul></li></ul><h3>Day-2:</h3><ul><li><strong>২য় রাতঃ</strong>&nbsp;<ul><li>রাত ৯টাঃ BBQ পার্টি মনটানা রেস্টুরেন্টে। রাতের খাবার এখানেই।&nbsp;</li><li>এরপর রিসোর্টে চিল আবারো। চাইলে রাতের সাজেক ঘুরতে&nbsp;পারেন নিজের মত করে। সাজেক একদমই সেফ, কারন আর্মি কন্ট্রোল করে সাজেক।</li></ul></li><li><strong>২য় দিনঃ&nbsp;</strong><ul><li>ভোর ৫টাঃ ভোরে আমাদের রিসোর্টের ছাঁদ থেকে সুর্যোদয় দেখবেন।</li><li>সকাল ৭টাঃ সেনাবাহিনীর তৈরী স্টোন গার্ডেন ঘুরবো।</li><li>সকাল ৮টাঃ সকালের নাশতা।</li><li>সকাল ১০টাঃ হোটেল চেক আউট।&nbsp;&nbsp;</li><li>আবার আর্মির স্কর্ট ধরে ১০.৩০ এ বের হয়া।&nbsp;</li><li>দুপুর ১টাঃ দুপুরের খাবার খাবো&nbsp;Eat &amp; Treat Restaurant এ। একটু রিলাক্স করে&nbsp;</li><li>দুপুর ৩টাঃ বাকি স্পট গুলা ঘুরতে বেরিয়ে যাবো।</li><li>সন্ধ্যা ৭টাঃ সব ঘুরে চলে আসবো বাস স্ট্যান্ড।&nbsp;</li></ul></li></ul><h3>Day-3:</h3><ul><li><strong>৩য় রাতঃ&nbsp;</strong><ul><li>রাত ৯টাঃ রাতের খাবার একই রেস্টুরেন্টে।&nbsp;</li><li>রাত ১০টাঃ রাতের বাসে রওনা ঢাকার উদ্দেশ্যে।</li></ul></li></ul>'),
(8, 'Debotakhum Day Trip_02', 'Debotakhum', '1 Day & 1 Night', 'standard', 24, 'This is Debotakhum Day tour package', 'রুটি/পরোটা + সবজি/ডাল +ডিম +মিনারেল ওয়াটার +চা\r\n\r\n', 'হাঁস/ মুরগী + ভাত + ডাল + ভর্তা + মিনারেল ওয়াটার + সালাদ। ', 'N/A', '১. চিকেন ঝাল ফ্রাই /গরু + ভাত + ডাল + ভর্তা + মিনারেল ওয়াটার   অথবা,        ২. চিকেন বিরিয়ানি + কোল্ড ড্রিংক   অথবা,         ৩. গ্রীল চিকেন + বাটার নান + কোল্ড ড্রিংক ', 'Non - AC Bus service\r\n\r\nBoat Service For Roaming\r\n\r\nAll meals (Breakfast , Lunch, Dinner)', 'No Medicines\r\n\r\nNo Beverage items', 'Debotakhum', 4, 3200, 3200, 'uploads/packages-img/80882995101d1.jpg', 'uploads/packages-img/80882995101d2.jpg', 'uploads/packages-img/80882995101d3.jpg', '<h2><a href=\"https://tourhobe.com/package/13/details#day-1\"><strong>Day-1</strong></a></h2><p>রাত ১১ টার বাসে বান্দরবান রওনা&nbsp;</p><p><strong>পরদিনঃ&nbsp;</strong></p><ul><li>সকাল ৬ টাঃ বান্দরবান বাস স্ট্যান্ডে পৌঁছবো।</li><li>সকাল ৭টাঃ&nbsp;সকালের নাশতা সেরে নিবো।&nbsp;</li><li>সকাল ৯ টাঃ রিসার্ভ গাড়ীতে চলে যাবো রোয়াংছড়ি। যাওয়ায় সময় পাহাড়ি রাস্তার অপরূপ সৌন্দর্য&nbsp;চোখে পড়বে।&nbsp;</li><li>সকাল ১১টাঃ রোয়াংছড়ি থানায় সবার নাম এন্ট্রি করে চলে যাবো কচ্ছপতলি বাজার। সেখানে আমাদের লোকাল গাইড থাকবে। কচ্ছপতলী আর্মি ক্যাম্পে অনুমতি নিয়েই মুলত&nbsp;আমাদের ট্র্যাকিং শুরু হবে ।&nbsp;</li><li>বেলা ১২টায়ঃ&nbsp;শীলবান্ধা পাড়া হয়ে ২০-৩০মিনিটের ট্র্যাকিংয়ের পর পৌঁছে যাবো কাঙ্খিত দেবতাখুমে।&nbsp;</li><li>ভেলায়/নৌকায় ঘুরবো খুমে। লাইফ জ্যাকেট থাকবে সবার জন্য,&nbsp;সো প্যারা নাই।&nbsp;</li><li>দুপুর ২টাঃ দেবতাখুম থেকে ফিরবো শীলবান্ধা পাড়াতে। দুপুরের খাবার খাবো।&nbsp;</li><li>দুপুর ৩টাঃ আমাদের রিসার্ভ গাড়ীতে চলে যাবো বান্দরবান।&nbsp;</li><li>রাত ৯টাঃ রাতের খাবার বান্দরবান শহরে। এরপর রাতের বাসে ঢাকার উদ্দেশ্যে রওনা।&nbsp;&nbsp;</li></ul>');

-- --------------------------------------------------------

--
-- Table structure for table `package_booking_details`
--

CREATE TABLE `package_booking_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `num_of_guests` int(11) NOT NULL,
  `tour_guide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_booking_details`
--

INSERT INTO `package_booking_details` (`id`, `user_id`, `package_id`, `date`, `num_of_guests`, `tour_guide`) VALUES
(1, 1, 5, '2022-07-09', 11, 0),
(2, 1, 5, '2022-07-14', 12, 0),
(3, 1, 7, '2022-07-22', 16, 0),
(4, 1, 3, '2022-07-29', 6, 200),
(5, 1, 6, '2022-08-01', 6, 200),
(6, 1, 3, '2022-08-16', 7, 200),
(8, 1, 8, '2022-08-31', 11, 200),
(18, 4, 3, '2022-09-01', 6, 200),
(19, 4, 3, '2022-09-03', 6, 200),
(20, 4, 6, '0000-00-00', 0, 0),
(21, 4, 6, '2022-10-03', 6, 0),
(22, 0, 6, '2022-10-21', 9, 200);

-- --------------------------------------------------------

--
-- Table structure for table `package_payment_details`
--

CREATE TABLE `package_payment_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `bikash_number` text NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `screenshot` varchar(200) NOT NULL,
  `status` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_payment_details`
--

INSERT INTO `package_payment_details` (`id`, `user_id`, `book_id`, `package_id`, `bikash_number`, `transaction_id`, `screenshot`, `status`, `view`) VALUES
(4, 1, 6, 3, '01732328171', 'bwaec12e5gab2e58bt', 'uploads/package-payment-sc-img/70811IMG_4224.jpg', 'success', 1),
(5, 4, 7, 3, '01648736464', '1925dd4', 'uploads/package-payment-sc-img/18026IMG_4212.jpg', 'success', 0),
(6, 1, 5, 6, '01732328171', 'aceseac12e5gab2e58bt', 'uploads/package-payment-sc-img/107292.PNG', 'success', 0),
(7, 1, 4, 3, '01732328171', 'wwxasceseac12e5gab2e58bt', 'uploads/package-payment-sc-img/2956914.PNG', 'rejected', 0),
(8, 1, 8, 8, '01732328171', 'dweeseac12e5gab2e58bt', 'uploads/package-payment-sc-img/551496.PNG', 'success', 0),
(9, 4, 0, 3, '01616490568', 'aeetta', 'uploads/package-payment-sc-img/836401bl.jpeg', 'success', 0),
(14, 4, 19, 3, '01616490568', 'hewl3453jjfjfj', 'uploads/package-payment-sc-img/27626Capture.JPG', 'success', 0),
(15, 0, 22, 6, '01616490568', 'hewl3453jjfjfj', 'uploads/package-payment-sc-img/69628Capture.JPG', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_terms_conditions`
--

CREATE TABLE `package_terms_conditions` (
  `id` int(11) NOT NULL,
  `payment_method` text NOT NULL,
  `terms_conditions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_terms_conditions`
--

INSERT INTO `package_terms_conditions` (`id`, `payment_method`, `terms_conditions`) VALUES
(3, 'Bikash', '<ul><li><strong>Payment Rules</strong></li></ul><ol><li>Our Bikash Number: <strong>01648736464</strong></li><li>First you need to send money to our above given number</li><li>Then screenshot the send money transaction message sent from Bikash</li><li>Then click the payment documents button below to provide the required information</li></ol><p>&nbsp;</p><p>&nbsp;</p><ul><li><strong>Confirmed your booking? verify</strong></li></ul><ol><li>After submitting payment documents your booking status will be Pending from confirmed.</li><li>If the information in the payment document is correct, your booking status will change from Pending to Success (within 1 to 2 hours).</li><li>Message will send on your phone number.</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `participateors`
--

CREATE TABLE `participateors` (
  `id` int(11) NOT NULL,
  `p_event` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemant`
--

CREATE TABLE `pemant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `tk` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `tranjation_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemant`
--

INSERT INTO `pemant` (`id`, `name`, `u_id`, `h_name`, `phone`, `tk`, `payment_type`, `tranjation_id`) VALUES
(1, 'Manik Molla', 0, 'Rose View ', 1616490568, 1, 'BKASH-BKash', 'SSLCZ_TEST_62eabd64da34f'),
(2, 'Manik Molla', 0, 'Rose View ', 1616490568, 1000, 'ABBANKIB-AB Bank', 'SSLCZ_TEST_62eabf8f1cbd2'),
(3, 'Manik Molla', 0, 'Rose View ', 1616040568, 100, 'DBBLMOBILEB-Dbbl Mobile Banking', 'SSLCZ_TEST_62eac2e93e18d'),
(4, 'MEEM', 0, 'Rose View', 170000000, 20, 'BKASH-BKash', 'SSLCZ_TEST_62eb68f324919'),
(5, '', 0, '', 0, 20, 'BKASH-BKash', 'SSLCZ_TEST_62eb68f324919'),
(6, 'MD. BELAL MIAH', 0, 'Rose View', 170000000, 2000, 'BKASH-BKash', 'SSLCZ_TEST_62ed6c3857f28'),
(7, '', 0, '', 0, 2000, 'BKASH-BKash', 'SSLCZ_TEST_62ed6c3857f28'),
(8, 'Manik Molla', 0, '', 1616490568, 10000, 'BKASH-BKash', 'SSLCZ_TEST_633b25136f550');

-- --------------------------------------------------------

--
-- Table structure for table `pemant_car`
--

CREATE TABLE `pemant_car` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `tk` int(8) NOT NULL,
  `date1` date NOT NULL,
  `date2` date NOT NULL,
  `card_type` varchar(50) NOT NULL,
  `tran_date` date NOT NULL,
  `tran_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemant_car`
--

INSERT INTO `pemant_car` (`id`, `name`, `brand`, `phone`, `tk`, `date1`, `date2`, `card_type`, `tran_date`, `tran_id`) VALUES
(5, 'Manik Molla', 'Toyata', 1600000000, 3000, '2022-11-07', '2022-11-09', 'DBBLMOBILEB-Dbbl Mobile Banking', '2022-11-07', 'SSLCZ_TEST_63679124db9c2'),
(6, 'Manik Molla', 'Taxi', 1616490568, 2000, '2022-11-07', '2022-11-09', 'BKASH-BKash', '2022-11-07', 'SSLCZ_TEST_636803b5eddbd');

-- --------------------------------------------------------

--
-- Table structure for table `ratingsystem_hotel`
--

CREATE TABLE `ratingsystem_hotel` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `h_id` int(11) NOT NULL,
  `stars` tinyint(5) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratingsystem_hotel`
--

INSERT INTO `ratingsystem_hotel` (`id`, `u_id`, `u_name`, `u_email`, `u_address`, `h_id`, `stars`, `comments`) VALUES
(9, 4, 'Manik Molla', 'manik@gmail.com', 'Amborkhana', 7, 4, 'this was nice in buy this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy'),
(11, 12, 'Rima', 'rima@gmail.com', '', 7, 2, 'Wanderfull'),
(14, 4, 'Manik Molla', 'manik@gmail.com', 'Amborkhana', 7, 5, 'AllhaVorosa'),
(16, 4, 'Manik Molla', 'manik@gmail.com', 'Amborkhana', 5, 5, 'this was nice in buy this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy'),
(32, 1, 'Tanvir', 'tanvirah@gmail.com', 'ask', 7, 4, 'Nice facility here....Nice Facility Here....Nice Facility Here.... Nice Facility Here....'),
(33, 4, 'Manik Molla', 'manik@gmail.com', 'Amborkhana', 7, 5, 'memm'),
(34, 15, 'Hotel Manager', 'hotel@gmail.com', 'Amborkhana, Sylhet', 6, 4, 'Nice'),
(35, 1, 'Tanvir', 'tanvirahmadstudent@gmail.com', 'ask', 7, 3, 'Nice Tanvir');

-- --------------------------------------------------------

--
-- Table structure for table `rating_info`
--

CREATE TABLE `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(1, 2, 'like'),
(1, 6, 'like'),
(1, 8, 'dislike'),
(1, 9, 'like'),
(1, 10, 'dislike'),
(4, 6, 'dislike');

-- --------------------------------------------------------

--
-- Table structure for table `restaurents`
--

CREATE TABLE `restaurents` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `food_name` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `number` text NOT NULL,
  `location` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurents`
--

INSERT INTO `restaurents` (`id`, `name`, `food_name`, `category_id`, `number`, `location`, `image`) VALUES
(21, 'Panshi Restaurant', '1	Rice\r\n1.1	Akhni\r\n1.2	Biroin Bhat\r\n1.3	Khichuri\r\n2	Meat\r\n2.1	Sylheti Beef Hatkora\r\n2.2	Chicken tikka masala\r\n2.3	Aash Bash\r\n2.4	Phall\r\n3	Fish\r\n3.1	Hutki Shira\r\n3.2	Thoikor Tenga\r\n4	Delicacy and savory\r\n4.1	Bakarkhani\r\n4.2	Biscuits\r\n4.3	Handesh\r\n4.4	Nunor Bora\r\n4.5	Sunga Pitha\r\n4.6	Tusha Shinni\r\n', 1, '0178565656', ' East Zindabazar, Sylhet', 'uploads/restaurents-img/29524785712download.jpg'),
(22, 'Panch Bhai Restaurant ', 'Pach Bhai Restaurant serve good food quality also good but little Spicy and price is very cheap there also serve Deserts. We take tea and it\'s defarent others.\r\n\r\n1	Rice\r\n  1.1	Akhni\r\n  1.2	Biroin Bhat\r\n  1.3	Khichuri\r\n2	Meat\r\n  2.1	Sylheti Beef Hatkora\r\n  2.2	Chicken tikka masala\r\n  2.3	Aash Bash\r\n  2.4	Phall\r\n3	Fish\r\n  3.1	Hutki Shira\r\n  3.2	Thoikor Tenga\r\n4	Delicacy and savory\r\n  4.1	Bakarkhani\r\n  4.2	Biscuits\r\n  4.3	Handesh\r\n  4.4	Nunor Bora\r\n  4.5	Sunga Pitha\r\n  4.6	Tusha Shinni\r\n', 1, '01710459607', ' East Zindabazar, Sylhet', 'uploads/restaurents-img/2606794124photo0jpg.jpg'),
(24, 'Woondaal King Kabab East Zindabazar, Sylhet', 'Woondaal King Kabab Restaurant serve good food quality also good but little Spicy and price is very cheap there also serve Deserts. We take tea and it\'s defarent others.\r\n\r\n1	Rice\r\n1.1	Akhni\r\n1.2	Biroin Bhat\r\n1.3	Khichuri\r\n2	Meat\r\n2.1	Sylheti Beef Hatkora\r\n2.2	Chicken tikka masala\r\n2.3	Aash Bash\r\n2.4	Phall\r\n3	Fish\r\n3.1	Hutki Shira\r\n3.2	Thoikor Tenga\r\n4	Delicacy and savory\r\n4.1	Bakarkhani\r\n4.2	Biscuits\r\n4.3	Handesh\r\n4.4	Nunor Bora\r\n4.5	Sunga Pitha\r\n4.6	Tusha Shinni\r\n', 1, '01710459633', 'https://www.facebook.com/woondaal/', 'uploads/restaurents-img/23613390395kububn.png'),
(25, 'Kutum Bari Restaurant, Sylhet ', 'Kutum Bari Restaurant serve good food quality also good but little Spicy and price is very cheap there also serve Deserts. We take tea and it\'s defarent others.\r\n\r\n1	Rice\r\n1.1	Akhni\r\n1.2	Biroin Bhat\r\n1.3	Khichuri\r\n2	Meat\r\n2.1	Sylheti Beef Hatkora\r\n2.2	Chicken tikka masala\r\n2.3	Aash Bash\r\n2.4	Phall\r\n3	Fish\r\n3.1	Hutki Shira\r\n3.2	Thoikor Tenga\r\n4	Delicacy and savory\r\n4.1	Bakarkhani\r\n4.2	Biscuits\r\n4.3	Handesh\r\n4.4	Nunor Bora\r\n4.5	Sunga Pitha\r\n4.6	Tusha Shinni\r\n', 1, '01789907444', ' East Zindabazar, Sylhet', 'uploads/restaurents-img/30517677070kutum.jpg'),
(26, 'Lucknow Dhaka Restaurant', 'Lucknow Dhaka Restaurant serve good food quality also good but little Spicy and price is very cheap there also serve Deserts. We take tea and it\'s defarent others.\r\n\r\n1	Rice\r\n1.1	Akhni\r\n1.2	Biroin Bhat\r\n1.3	Khichuri\r\n2	Meat\r\n2.1	Sylheti Beef Hatkora\r\n2.2	Chicken tikka masala\r\n2.3	Aash Bash\r\n2.4	Phall\r\n3	Fish\r\n3.1	Hutki Shira\r\n3.2	Thoikor Tenga\r\n4	Delicacy and savory\r\n4.1	Bakarkhani\r\n4.2	Biscuits\r\n4.3	Handesh\r\n4.4	Nunor Bora\r\n4.5	Sunga Pitha\r\n4.6	Tusha Shinni', 3, '01710459655', '# 17 Plot #27 Road Hotel Sarina, Banani C/A, Dhaka City 1213 Bangladesh', 'uploads/restaurents-img/6931795845mutton-boti.jpg'),
(27, 'Chef’s Table Courtside', 'Chef’s Table Courtside is a food court located in Dhaka. It is famous for its quiet environment. There is a mini-park, football court, playing zone for children, and seating area at the site. \r\n\r\nAround 35 popular food chains like Pizza Guy, CRISP, El Dorado, Chittagong bulls etc., serve food here. The food quality is great, but the cost is a bit high. But overall, it’s a great place to visit because of its calm surroundings. You can visit this place with your friends and family, arrange parties, and click some good pictures.\r\n\r\n', 3, '01710459677', 'United City, Madani Avenue (Near United International University) 1212 Dhaka,', 'uploads/restaurents-img/62807213636download (1).jpg'),
(28, 'Kabab Factory', 'Kabab Factory, popular for its Barbeque dishes, serves one of the best kebabs. For starters, they have different types of soups and salads on their menu. But the main attraction on their menu is their Reshmi Kabab, Bihari Kabab and Afghan Kabab. This restaurant also has a beautiful ambience and a comfortable seating area.\r\n\r\n      Bakarkhani\r\n	Biscuits\r\n	Handesh\r\n	Nunor Bora\r\n	Sunga Pitha\r\n', 0, '01789907333', 'House 14, Lake Drive Road Sector 7 Uttara, Dhaka.', 'uploads/restaurents-img/88190782504download (2).jpg'),
(29, 'Baton Rouge Restaurants', 'Baton Rouge is a buffet-style restaurant that serves 101 dishes and can accommodate around 450 people. So, you can definitely assume that it has a large seating area. It has both local and international cuisines on its menu. You can make reservations for a seminar, workshops, private/corporate meetings and conferences.\r\n\r\n1	Rice\r\n1.1	Akhni\r\n1.2	Biroin Bhat\r\n1.3	Khichuri\r\n2	Meat\r\n2.1   Beef Hatkora\r\n2.2	Chicken tikka masala\r\n2.3	Aash Bash\r\n2.4	Phall\r\n3	Fish\r\n3.1	Hutki Shira\r\n3.2	Thoikor Tenga\r\n4	Delicacy and savory\r\n4.1	Bakarkhani\r\n4.2	Biscuits\r\n4.3	Handesh\r\n4.4	Nunor Bora\r\n4.5	Sunga Pitha\r\n', 3, '01710459888', '# 17 Plot #27 Road Hotel Sarina, Banani C/A, Dhaka City 1213 Bangladesh', 'uploads/restaurents-img/4556712659download (3).jpg'),
(30, ' Herfy Bangladesh', 'Herfy is a major fast-food restaurant chain in Saudi Arabia that has many branches throughout the world. It also has its branches in Bangladesh. So, Herfy Bangladesh is a famous fast food restaurant in Comilla. \r\n\r\nIt has around 17 types of burgers, wraps, salads, chicken wings, rice meals, ice creams, shakes, drinks and mocktails on the menu. They have four signature burgers- Angus Burger, Super Angus, Turkish Burger, and Super Fish Fillet that you won’t find in any other restaurant in Bangladesh. There are five branches of Herfy Bangladesh in  Comilla', 4, '01710459655', 'United City, Madani Avenue (Near United International University) 1212  Comilla', 'uploads/restaurents-img/57391051012download (4).jpg'),
(31, 'Pan Tao Thai Cuisine', 'Pan Tao is a Thai culinary delight that serves the best authentic Thai cuisine in all of Bangladesh. The restaurant has a distinctive atmosphere and offers mouth-watering food. \r\n\r\nIt is also open to private parties and corporate functions. Even though their food items are a bit costly, the quality of the food and ambience of the restaurant suffice it.', 4, '01710456555', 'United City, Madani Avenue (Near United International University) 1212 comilla.', 'uploads/restaurents-img/50268840936download (5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent_categories`
--

CREATE TABLE `restaurent_categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurent_categories`
--

INSERT INTO `restaurent_categories` (`id`, `name`) VALUES
(1, 'Sylhet'),
(3, 'Dhaka'),
(4, 'Comilla'),
(6, 'Chittagong'),
(7, 'Khulna'),
(8, 'Rajshahi'),
(9, 'Mymensingh'),
(10, 'Barisal');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `r_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `h_id` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `discreption` varchar(255) NOT NULL,
  `b1` varchar(255) NOT NULL,
  `b2` varchar(255) NOT NULL,
  `b3` varchar(255) NOT NULL,
  `b4` varchar(255) NOT NULL,
  `b5` varchar(255) NOT NULL,
  `b6` varchar(255) NOT NULL,
  `b7` varchar(255) NOT NULL,
  `r1` varchar(255) NOT NULL,
  `r2` varchar(255) NOT NULL,
  `r3` varchar(255) NOT NULL,
  `r4` varchar(255) NOT NULL,
  `r5` varchar(255) NOT NULL,
  `r6` varchar(255) NOT NULL,
  `r7` varchar(255) NOT NULL,
  `r8` varchar(255) NOT NULL,
  `r9` varchar(255) NOT NULL,
  `r10` varchar(255) NOT NULL,
  `r11` varchar(255) NOT NULL,
  `r12` varchar(255) NOT NULL,
  `r13` varchar(255) NOT NULL,
  `r14` varchar(255) NOT NULL,
  `r15` varchar(255) NOT NULL,
  `r16` varchar(255) NOT NULL,
  `r17` varchar(255) NOT NULL,
  `r18` varchar(255) NOT NULL,
  `r19` varchar(255) NOT NULL,
  `r20` varchar(255) NOT NULL,
  `r21` varchar(255) NOT NULL,
  `r22` varchar(255) NOT NULL,
  `r23` varchar(255) NOT NULL,
  `r24` varchar(255) NOT NULL,
  `r25` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`r_id`, `type`, `location`, `h_name`, `h_id`, `bed`, `price`, `discreption`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `r11`, `r12`, `r13`, `r14`, `r15`, `r16`, `r17`, `r18`, `r19`, `r20`, `r21`, `r22`, `r23`, `r24`, `r25`) VALUES
(1, 'single', 'Amborkhana', 'Rose View ', 7, 4, 1000, 'Manik Comfy beds, 6.7 – Based on 3 reviews\nEach room he...', 'Toiletries', 'Shower', 'Toilet', 'Towels', 'Slippers', 'Hairdryer', 'Toilet paper', 'Dressing', 'Wardrobe', 'Sanitiser', 'Tea', 'Minibar', 'Air', 'Safety', 'Hypoallergenic', 'Marble', 'Soundproofing', 'Fan', 'Carpeted', 'Kettle', 'Cleaning shuttle', 'Sofa', 'Desk', 'Area', 'TV', 'Telephone', 'Flat-screen', 'Cable', 'Terrace', 'Socket', 'Clothes', 'Wake-up'),
(2, 'twin', 'Amborkhana', 'Rose View ', 7, 1, 1000, 'Comfy beds, 6.7 – Based on 3 reviews\r\nEach room here will provide you with air conditioning and a minibar. Featuring a shower, private bathroom also comes with a hairdryer and free toiletries. You can enjoy city view from the room.', 'Toiletries', 'Shower', 'Toilet', 'Towels', 'Slippers', 'Hairdryer', 'Toilet paper', 'Dressing', 'Wardrobe', 'Sanitiser', 'Tea', 'Minibar', 'Air', 'Safety', 'Hypoallergenic', 'Marble', 'Soundproofing', 'Fan', 'Carpeted', 'Kettle', 'Cleaning shuttle', 'Sofa', 'Desk', 'Area', 'TV', 'Telephone', 'Flat-screen', 'Cable', 'Terrace', 'Socket', 'Clothes', 'Wake-up');

-- --------------------------------------------------------

--
-- Table structure for table `shop_cart`
--

CREATE TABLE `shop_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_cart`
--

INSERT INTO `shop_cart` (`id`, `user_id`, `product_id`, `status`) VALUES
(36, 1, 15, 0),
(37, 1, 3, 0),
(39, 1, 7, 0),
(0, 0, 0, 0),
(0, 4, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `title`, `description`, `image`, `status`) VALUES
(1, 'others', 'this is others for all', 'uploads/category-img/21634907721o6.jpg', 1),
(2, 'Mens', 'this is men category', 'uploads/category-img/33875692038shopping9.webp', 1),
(3, 'Women', 'this is women  category', 'uploads/category-img/7307508210istockpho.jpg', 1),
(4, 'Child', 'this is child category', 'uploads/category-img/86949170759istockd.jpg', 0),
(0, 'abc', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_products`
--

CREATE TABLE `shop_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `productTitle` text NOT NULL,
  `stock` int(11) NOT NULL,
  `productDescription` text NOT NULL,
  `actualPrice` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `salesPrice` int(11) NOT NULL,
  `image` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_products`
--

INSERT INTO `shop_products` (`id`, `category_id`, `subcategory_id`, `productTitle`, `stock`, `productDescription`, `actualPrice`, `discount`, `salesPrice`, `image`, `image2`, `image3`, `status`) VALUES
(1, 3, 8, 'Black Stone Brass Earrings', 93, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Black stone studded brass earrings.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Back Type</th><td>Bullet Clutch Back</td></tr><tr><th>Care</th><td>Clean With Soft Dry Brush And Keep It Dry Place</td></tr><tr><th>Material</th><td>Brass</td></tr><tr><th>Stone/Beads</th><td>Simulated Black Stone</td></tr><tr><th>Length</th><td>8.9</td></tr><tr><th>Measurment Unit</th><td>CM</td></tr><tr><th>Unit</th><td>Single</td></tr><tr><th>Value Addition</th><td>Stone-Setting</td></tr><tr><th>Width</th><td>3.5</td></tr></tbody></table></figure>', 1000, 35, 650, 'uploads/product-img/51135491787s.webp', 'uploads/product-img/67674086789b2.webp', '', 1),
(3, 3, 8, 'Antique Brass Earrings', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Engraved antique brass earrings.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Back Type</th><td>Shepherd Crook</td></tr><tr><th>Care</th><td>Clean With Soft Dry Brush And Keep It Dry Place</td></tr><tr><th>Material</th><td>Brass</td></tr><tr><th>Diameter</th><td>3.5</td></tr><tr><th>Length</th><td>6.5</td></tr><tr><th>Measurment Unit</th><td>CM</td></tr><tr><th>Unit</th><td>Single</td></tr></tbody></table></figure>', 1000, 15, 850, 'uploads/product-img/49025153036e2.webp', '', '', 1),
(4, 2, 9, 'Black Mixed Cotton Executive Shirt', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Black mixed cotton full sleeve executive shirt with black prints. Features standard placket and pocket.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Care</th><td>Hand Wash With Mild Detergent In Cold Water</td></tr><tr><th>Collar/Neck</th><td>Semi Spread Collar</td></tr><tr><th>Cut /Fit</th><td>Regular Fit</td></tr><tr><th>Fabric</th><td>Mixed Cotton</td></tr><tr><th>Pocket</th><td>Chest Pocket</td></tr><tr><th>Sleeve</th><td>Full Sleeve</td></tr></tbody></table></figure>', 3000, 30, 2100, 'uploads/product-img/12470925288p1.webp', 'uploads/product-img/42770296183p2.webp', 'uploads/product-img/32391773204p3.webp', 1),
(5, 2, 9, 'Men\'s Premium Casual Band Collar Shirt Maroon', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>White and blue striped mixed cotton executive shirt. Features spread collar, standard placket and chest pocket.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Care</th><td>Hand Wash With Mild Detergent In Cold Water</td></tr><tr><th>Collar/Neck</th><td>Semi Spread Collar</td></tr><tr><th>Cut /Fit</th><td>Regular Fit</td></tr><tr><th>Fabric</th><td>Mixed Cotton</td></tr><tr><th>Pocket</th><td>Chest Pocket</td></tr><tr><th>Sleeve</th><td>Full Sleeve</td></tr></tbody></table></figure>', 2000, 12, 1760, 'uploads/product-img/43257403596s.webp', 'uploads/product-img/50601222440s2.webp', '', 1),
(7, 3, 8, 'Beads Earrings', 9, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Multicolour beads studded earrings.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Back Type</th><td>Shepherd Crook</td></tr><tr><th>Care</th><td>Clean With Soft Dry Brush And Keep It Dry Place</td></tr><tr><th>Material</th><td>Metal</td></tr><tr><th>Stone/Beads</th><td>Fibre Beads</td></tr><tr><th>Length</th><td>12</td></tr><tr><th>Measurment Unit</th><td>CM</td></tr><tr><th>Unit</th><td>Single</td></tr><tr><th>Value Addition</th><td>Beads Work</td></tr><tr><th>Width</th><td>4</td></tr></tbody></table></figure>', 900, 25, 675, 'uploads/product-img/6419918166e3.webp', '', '', 1),
(8, 3, 12, 'Jute Printed Bag', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Black jute bag with prints. Comes with zippered main compartment.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Care</th><td>Clean With Soft Dry Brush And Keep It Dry Place</td></tr><tr><th>Closure</th><td>Zipper</td></tr><tr><th>Material</th><td>Jute Cotton</td></tr><tr><th>Handle</th><td>With Jute Handle</td></tr><tr><th>Height</th><td>34</td></tr><tr><th>Interior type</th><td>Inner Zipped Pocket</td></tr><tr><th>Length</th><td>43.5</td></tr><tr><th>Lining</th><td>Cotton Fabric Lining</td></tr><tr><th>Measurment Unit</th><td>CM</td></tr><tr><th>Type</th><td>Tote Bag</td></tr><tr><th>Unit</th><td>Single</td></tr><tr><th>Value Addition</th><td>Screen Print</td></tr><tr><th>Width</th><td>10.5</td></tr></tbody></table></figure>', 750, 15, 638, 'uploads/product-img/16250424244b.webp', 'uploads/product-img/23160526723b2.webp', 'uploads/product-img/14538663290b3.webp', 1),
(9, 2, 2, 'Brown Leather Shoe', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Brown punched leather shoe with and crepe sole.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Colour</th><td>Deep Brown</td></tr><tr><th>Style</th><td>Sandal Shoe</td></tr><tr><th>Sole</th><td>Crepe Sole</td></tr><tr><th>Toe</th><td>Close Toed</td></tr><tr><th>Heel</th><td>0.5 Inch</td></tr><tr><th>Care</th><td>Wipe with soft, dry cloth and apply polish</td></tr></tbody></table></figure>', 2100, 5, 1995, 'uploads/product-img/56231956282j.webp', 'uploads/product-img/20744031377j2.webp', 'uploads/product-img/24721319033j3.webp', 1),
(10, 2, 11, 'White Check Mixed Cotton Executive Shirt', 10, '<h2><strong>PRODUCT DESCRIPTION:</strong></h2><p>Blue and white check textured mixed cotton full sleeve executive shirt with black prints. Features standard placket and pocket.</p><h2><strong>Specifications:</strong></h2><figure class=\"table\"><table><tbody><tr><th><strong>Care</strong></th><td>Hand Wash With Mild</td></tr><tr><th><strong>Collar/Neck</strong></th><td>Semi Spread Collar</td></tr><tr><th><strong>Cut /Fit</strong></th><td>Regular Fit</td></tr><tr><th><strong>Fabric</strong></th><td>Mixed Cotton</td></tr><tr><th><strong>Pocket</strong></th><td>Chest Pocket</td></tr><tr><th><strong>Sleeve</strong></th><td>Full Sleeve</td></tr></tbody></table></figure><p>&nbsp;</p><p>&nbsp;</p>', 1300, 5, 1235, 'uploads/product-img/4537965482dw.webp', '', '', 1),
(12, 2, 9, 'Purple Striped Mixed Cotton Executive Shirt', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Purple and white striped mixed cotton executive shirt. Features spread collar, standard placket and chest pocket.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Care</th><td>Hand Wash With Mild Detergent In Cold Water</td></tr><tr><th>Collar/Neck</th><td>Semi Spread Collar</td></tr><tr><th>Cut /Fit</th><td>Regular Fit</td></tr><tr><th>Fabric</th><td>Mixed Cotton</td></tr><tr><th>Pocket</th><td>Chest Pocket</td></tr><tr><th>Sleeve</th><td>Full Sleeve</td></tr></tbody></table></figure>', 1200, 20, 960, 'uploads/product-img/77949105524sh1.webp', 'uploads/product-img/38831717200sh2.webp', 'uploads/product-img/38831717200sh3.webp', 1),
(13, 3, 12, 'Red Leather Bag', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Red leather bag. Features with magnetic closure flap.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Care</th><td>Clean With Soft Dry Brush And Keep It Dry Place</td></tr><tr><th>Closure</th><td>Magnetic Snap Flap</td></tr><tr><th>Material</th><td>Genuine Leather</td></tr><tr><th>Height</th><td>19.9</td></tr><tr><th>Interior type</th><td>Card Holders</td></tr><tr><th>Length</th><td>19</td></tr><tr><th>Lining</th><td>Gabardine Fabric</td></tr><tr><th>Measurment Unit</th><td>CM</td></tr><tr><th>Type</th><td>Shoulder Bag</td></tr><tr><th>Strap</th><td>Adjustable Strap</td></tr><tr><th>Strap Material</th><td>Genuine Leather</td></tr><tr><th>Unit</th><td>Single</td></tr><tr><th>Value Addition</th><td>Ostrich Texture</td></tr><tr><th>Width</th><td>6</td></tr></tbody></table></figure>', 2300, 22, 1794, 'uploads/product-img/51313314700b.webp', 'uploads/product-img/51313314700b2.webp', 'uploads/product-img/51313314700b3.webp', 1),
(14, 3, 12, 'Golden Erri Embroidered Silk Chosha Purse', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Golden silk chosha purse with black, brown and golden erri embroidery. Features with magnetic closure flap and slip pocket for carrying essentials.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Care</th><td>Clean With Soft Dry Brush And Keep It Dry Place</td></tr><tr><th>Closure</th><td>Magnetic Snap Flap</td></tr><tr><th>Material</th><td>Silk</td></tr><tr><th>Height</th><td>18</td></tr><tr><th>Interior type</th><td>Inner Zipped Pocket</td></tr><tr><th>Length</th><td>23.5</td></tr><tr><th>Lining</th><td>Gabardine Fabric</td></tr><tr><th>Measurment Unit</th><td>CM</td></tr><tr><th>Unit</th><td>Single</td></tr><tr><th>Value Addition</th><td>Glass Fitting</td></tr><tr><th>Width</th><td>5</td></tr></tbody></table></figure>', 1620, 12, 1426, 'uploads/product-img/31373109377c.webp', 'uploads/product-img/31373109377c2.webp', 'uploads/product-img/31373109377c3.webp', 1),
(15, 2, 2, 'Black Leather Loafer', 10, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Black leather loafer. Features comfortable footbed, leather lining and rubber sole.</p><p><strong>Specifications</strong></p><figure class=\"table\"><table><tbody><tr><th>Colour</th><td>Black</td></tr><tr><th>Style</th><td>Loafer</td></tr><tr><th>Upper</th><td>Genuine Leather</td></tr><tr><th>Lining</th><td>Genuine Leather Lining</td></tr><tr><th>Sole</th><td>TPR Sole</td></tr><tr><th>Heel</th><td>Flat</td></tr><tr><th>Care</th><td>Wipe with soft, dry cloth and apply polish</td></tr></tbody></table></figure>', 2450, 8, 2254, 'uploads/product-img/82498107014d.webp', 'uploads/product-img/82498107014d2.webp', 'uploads/product-img/82498107014d3.webp', 1),
(16, 1, 10, 'Grey Fabric Travelling Bag', 3, '<h3><strong>PRODUCT DESCRIPTION</strong></h3><p>Grey and black herringbone textured fabric traveling bag with faux leather handles and fabric shoulder strap.</p><figure class=\"table\"><table><tbody><tr><th>Colour</th><td>Grey</td></tr><tr><th>Material</th><td>Jute Cotton</td></tr><tr><th>Value Addition</th><td>Contrast Piping</td></tr><tr><th>Length</th><td>18.5</td></tr><tr><th>Width</th><td>11</td></tr><tr><th>Height</th><td>10.75</td></tr><tr><th>Strap Length</th><td>53</td></tr><tr><th>Pocket</th><td>Inner Zipped Pocket</td></tr><tr><th>Closure</th><td>Zipper</td></tr><tr><th>Handle</th><td>With Handle</td></tr><tr><th>Strap Material</th><td>Thread</td></tr><tr><th>Measurement Unit</th><td>Inch</td></tr><tr><th>Care</th><td>Wipe With Soft Brush After Using</td></tr></tbody></table></figure>', 2300, 15, 1955, 'uploads/product-img/341224495560940000095857.webp', 'uploads/product-img/167739411790940000095857.webp', 'uploads/product-img/767860742340940000095857.webp', 1),
(17, 2, 9, 'demo sgkade', 5, '<p>this is demo</p>', 900, 25, 675, 'uploads/product-img/55520078244img2.PNG', 'uploads/product-img/55520078244img1.PNG', 'uploads/product-img/55520078244', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_order`
--

CREATE TABLE `shop_product_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_product_order`
--

INSERT INTO `shop_product_order` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 1, 3, 3),
(2, 1, 8, 1),
(3, 1, 3, 6),
(4, 1, 9, 1),
(5, 1, 10, 1),
(6, 1, 1, 4),
(7, 1, 12, 2),
(8, 1, 14, 3),
(9, 1, 15, 1),
(10, 1, 15, 1),
(11, 1, 12, 1),
(12, 1, 7, 1),
(13, 1, 7, 1),
(14, 1, 7, 1),
(15, 1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_product_payments`
--

CREATE TABLE `shop_product_payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `bikash_number` text NOT NULL,
  `transaction_id` text NOT NULL,
  `screenshot` varchar(200) NOT NULL,
  `status` text NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_product_payments`
--

INSERT INTO `shop_product_payments` (`id`, `order_id`, `address`, `bikash_number`, `transaction_id`, `screenshot`, `status`, `view`) VALUES
(2, 5, 'Bhadeshwar, Golapgonj, Sylhet', '01732328171', 'ghse354oww26450', 'uploads/shop-product-payment-sc-img/73509img1.PNG', 'success', 1),
(3, 6, 'hd hg w', '45098766', 'g5sssrs33gsgggg', 'uploads/shop-product-payment-sc-img/6943build.jpg', 'rejected', 0),
(4, 7, 'kismoth maijbagh, Golapgonj,Sylhet', '01716100540', 'jgoa4fi444', 'uploads/shop-product-payment-sc-img/83409c1.PNG', 'success', 0),
(5, 8, 'kismoth maijbagh, Golapgonj,Sylhet', '01732328171', 'e2hg2hg666', 'uploads/shop-product-payment-sc-img/55286th.jpg', 'pending', 0),
(6, 9, 'kismoth maijbagh, Golapgonj,Sylhet', '01732328171', 'j2fh4j5', 'uploads/shop-product-payment-sc-img/19764gp.PNG', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_subcategories`
--

CREATE TABLE `shop_subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_subcategories`
--

INSERT INTO `shop_subcategories` (`id`, `category_id`, `title`, `description`, `image`) VALUES
(2, 2, 'shoes', 'this  is shoe ', 'uploads/subcategory-img/4440582002images.jpg'),
(3, 2, 'bag', 'travel bag', 'uploads/subcategory-img/39158509198d6a3aa22.jpg'),
(6, 4, 'Cap', 'this is men cap', 'uploads/subcategory-img/342038193560.webp'),
(7, 3, 'sun glass', 'this is women  sun glass', 'uploads/subcategory-img/55300051035la.jpg'),
(8, 3, 'Jewellery', 'this is Jewellery', 'uploads/subcategory-img/10309968954j.webp'),
(9, 2, 'clothing', 'this is men clothing', 'uploads/subcategory-img/71360469657cl.png'),
(10, 1, 'Travel Bag', 'This is traveling bag', 'uploads/subcategory-img/55181218460tr.jpg'),
(11, 2, 'Shirt', 'this is shirt sub-category', 'uploads/subcategory-img/44032808676ser.webp'),
(12, 3, 'Bag', 'this is bag category', 'uploads/subcategory-img/51386510036b.webp'),
(0, 0, 'hello', 'this is hello', 'uploads/subcategory-img/33171793069'),
(0, 2, 'demo', '', ''),
(0, 0, 'efg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stars` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `name`, `stars`) VALUES
(7, 'Rose View', '4'),
(7, 'Rose View', '2'),
(7, 'Rose View', '5'),
(5, 'Nazimgarh Garden Resort', '5'),
(7, 'Rose View', '4'),
(7, 'Rose View', '5'),
(7, 'Rose View', '4'),
(7, 'Rose View', '2'),
(7, 'Rose View', '5'),
(5, 'Nazimgarh Garden Resort', '5'),
(7, 'Rose View', '4'),
(7, 'Rose View', '5'),
(7, 'Rose View', '4'),
(7, 'Rose View', '2'),
(7, 'Rose View', '5'),
(5, 'Nazimgarh Garden Resort', '5'),
(7, 'Rose View', '4'),
(7, 'Rose View', '5'),
(7, 'Rose View', '4'),
(7, 'Rose View', '2'),
(7, 'Rose View', '5'),
(5, 'Nazimgarh Garden Resort', '5'),
(7, 'Rose View', '4'),
(7, 'Rose View', '5');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `picture`, `name`, `designation`, `comment`, `created_at`) VALUES
(1, 'rghtr', 'rahim', 'afsdasd safhsafh ', 'defhegf ihihf uishf s uisfyh sfuisyhf siu fsdufy sdfsduify ', '2022-10-08 17:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`id`, `title`, `description`, `image`, `date`) VALUES
(2, 'Jaflong', 'Jaflong is situated right on the border between Bangladesh and the Indian Meghalaya States. A river by the name of Mari, which directly comes from the Himalayas, flows beside Jaflong. Jalong is arguably one of the most renowned tourist spots in Bangladesh.\r\nIn Jaflong, a tribe name Kashai has been living for many generations, and tourist can have an up close and personal experience with the Kashai people visiting Jaflong. Every year hundreds of tourists, from Bangladesh as well as from all over the world, visit Jaflong.\r\n\r\nName: Jaflong \r\nLocation: Jaflong, Sylhet ,Bangladesh\r\nDestination: Dhaka to Sylhet\r\nTransport: Hanif Enterprise, Ena Transport (Pvt) Ltd etc bus services from Shamoly, \r\nRajarbag, Saidabad etc.Train and airplane service are also available.\r\nFair: BDT 400 to 1100 (Bus), BDT 2300 – 8500 (Air),BDT 150 – 1020(Train)\r\nTime: 6-7 hours (Bus), Air 45min (Air), 8 hours (Train).\r\nExplore: Jaflong, Sylhet, Bangladesh\r\nDistance: 60 kilometers from Sylhet Sadar.\r\nCost: Depend to', 'uploads/tour-guide-img/21621369617image017.jpg', '2022-08-04'),
(3, 'Sreemangal', '\r\nSreemangal (Bengali: শ্রীমঙ্গল, Romanized: Srimongol) Is An Upazila Of Moulvibazar District[1] In The Sylhet Division Of Bangladesh. It Is Located At The Southwest Of The District, And Borders The Habiganj District To The West And The Indian State Of Tripura To The South. Sreemangal Is Often Referred To As The \'Tea Capital\' Of Bangladesh, And Is Most Famous For Its Tea Fields. Other Than Tea, The Rubber, Pineapple, Wood, Betel, And Lemon Industries Also Exist In The Upazila', 'uploads/tour-guide-img/60901286383srimangal.jpg', '2022-08-04'),
(4, 'Ratargul Swamp Forest', 'Located in Gowainghat, Sylhet, Ratargul is freshwater swamp forest. It is 26 kilometers away from the central town of Sylhet. Ratargul forest is economically and culturally very significant for Bangladesh as Ratargul is an area which consists of freshwater, and in the whole of Asian sub continent only two places, out of which one is Ratargul, are there which have been classified as freshwater swamp forest.\r\n\r\nName: Ratargul\r\nLocation: Ratargul ,Sylhet ,Bangladesh\r\nDestination: Dhaka to  SylhetTransport: Hanif Enterprise,Ena Transport (Pvt) Ltd, \r\netc bus services from Shamoly, Rajarbag, Saidabad etc.Train and  airplane service \r\nare also available.\r\nFair:  BDT 400 to 1100 (Bus), BDT 2300 – 8500 (Air),BDT 150 – 1020(Train)\r\nTime: 6-7 hours (Bus), Air 45min (Air), 8 hours (Train).\r\nExplore: Ratargul , Sylhet , Bangladesh.\r\nDistance: 26 kilometers from  Sylhet Sadar.\r\nCost: Depend to coverage tourists spots.\r\nAccommodation: Hotels ,Cottages etc available in  Sylhet sadar.\r\nFood: Food is n', 'uploads/tour-guide-img/3419632429image021-1024x683.jpg', '2022-08-20'),
(5, 'Lalakhal', 'Lalakhal is one of the most visited places in Sylhet. It is a fact that tourists and travelers adore Lalakhal as each year so many tourists visit Lalakhal.A land covered with hills of various size and shapes which is an absolute treat for the eyes, the rivers under the Jainta Hill which flows from India and enters into Bangladesh travels along the way as it take turn, the breeze of the Riverside wind as it touches one’s face are things which will surely touch a tourist’s heart and will leave an impact at the core of his/her travelling experience.\r\nName: Lalakhal \r\nLocation: Lalakhal,Sylhet ,Bangladesh\r\nDestination: Dhaka to SylhetTransport: Hanif Enterprise, Ena Transport (Pvt) Ltd, \r\netc. bus services from Shamoly, Rajarbag, Saidabad etc.Train and airplane service \r\nare also available.\r\nFair: BDT 400 to 1100 (Bus), BDT 2300 – 8500 (Air),BDT 150 – 1020(Train)\r\nTime: 6-7 hours (Bus), Air 45min (Air), 8 hours (Train).\r\nExplore: Lalakhal, Sylhet, Bangladesh\r\nDistance: 400 km from Dhaka.\r\n', 'uploads/tour-guide-img/65522827972Lalakhal-Sylhet-696x464.jpg', '2022-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `profileImage` varchar(120) NOT NULL,
  `fatherName` varchar(50) NOT NULL,
  `motherName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `number` varchar(12) NOT NULL,
  `currentAddress` varchar(200) NOT NULL,
  `skills` text NOT NULL,
  `education` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `profileImage`, `fatherName`, `motherName`, `dob`, `number`, `currentAddress`, `skills`, `education`) VALUES
(1, 'Tanvir Ahmad', 'tanvirahmadstudent@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'uploads/28627644936WhatsApp Image 2021-12-12 at 3.59.27 PM.jpeg', 'Abdun Nur', 'Asma Begum', '1999-12-01', '01732328171', 'kismoth Maijbag, Golapgonj, Sylhet', '', ''),
(2, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '', '', '', '0000-00-00', '', '', '', ''),
(3, 'Arisha Jannat', 'arisha@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '', '', '', '0000-00-00', '', '', '', ''),
(4, 'Manik Molla', 'manik@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'uploads/55557061406IMG-20201021-WA0032.jpg', 'MD Badsha Molla', 'Ayesha Begom Lovley', '1998-02-02', '', 'Sylhet', '', ''),
(5, 'Salman Ahmad', 'salman@gmail.com', '202cb962ac59075b964b07152d234b70', 'shop manager', 'uploads/profile-img/7525862178fsn.jpg', '', '', '0000-00-00', '', 'Bhadeshwar, Golapgonj, Sylhet', 'MS word, MS exel, Powerpoint', 'BBA '),
(7, 'Car Ranter ', 'carrant@gmail.com', '202cb962ac59075b964b07152d234b70', 'car rant', 'uploads/30802461513IMG-20201021-WA0032.jpg', 'MD Badsha Molla', 'Ayesha Begom Lovley', '1998-02-02', '0170000000', 'Amborkhana', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `model_year` int(11) NOT NULL,
  `set_capacity` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `air_conditioner` varchar(255) NOT NULL,
  `power_doorlocks` varchar(255) NOT NULL,
  `antilock_system` varchar(255) NOT NULL,
  `brake_assist` varchar(255) NOT NULL,
  `power_steering` varchar(255) NOT NULL,
  `driver_airbag` varchar(255) NOT NULL,
  `passenger_airbag` varchar(255) NOT NULL,
  `power_windows` varchar(255) NOT NULL,
  `cd_player` varchar(255) NOT NULL,
  `central_locking` varchar(255) NOT NULL,
  `crash_sensor` varchar(255) NOT NULL,
  `leather_seats` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `title`, `brand`, `overview`, `price`, `fuel_type`, `model_year`, `set_capacity`, `image1`, `image2`, `image3`, `image4`, `image5`, `air_conditioner`, `power_doorlocks`, `antilock_system`, `brake_assist`, `power_steering`, `driver_airbag`, `passenger_airbag`, `power_windows`, `cd_player`, `central_locking`, `crash_sensor`, `leather_seats`, `status`) VALUES
(16, 'BMW X7', 'BMW', 'A car brand which prioritizes longevity over anything. This is considered to be the most reliable brands in between the customers. An automobile company which well-versed its prices. A Japanese car manufacture company which has paved its way through the g', 10000, 'Petrol', 2000, '4', 'img/vehicleimages/82763321.JPG', 'img/vehicleimages/29898317.JPG', 'img/vehicleimages/70814591.JPG', 'img/vehicleimages/30093370.JPG', 'img/vehicleimages/53409246.JPG', 'Air Conditioner', 'Power Door Locks', 'AntiLock Braking System', 'Brake Assist', 'Power Steering', 'Driver Airbag', 'Passenger Airbag', 'Power Windows', 'CD Player', 'Central Locking', 'Crash Sensor', 'Leather Seats', 0),
(17, 'NOREV - MERCEDES BENZ - 200 SEDAN (W115) TAXI 1968', 'Taxi', 'With the W114 and W115 series, Mercedes confirmed its ambition to enter the mid-size car market. Introduced in 1968, the two series, better known as 200, were characterized by sober lines and reliable mechanics, with 2000, 2200 and 2300cc petrol engines a', 500, 'Diesel', 1990, '6', 'img/vehicleimages/8629369.jpg', 'img/vehicleimages/29000695.jpg', 'img/vehicleimages/55210412.jpg', 'img/vehicleimages/2441332.jpg', 'img/vehicleimages/60210571.jpg', 'Air Conditioner', 'Power Door Locks', 'AntiLock Braking System', 'Brake Assist', 'Power Steering', 'Driver Airbag', 'Passenger Airbag', 'Power Windows', 'CD Player', 'Central Locking', 'Crash Sensor', 'Leather Seats', 0),
(18, 'NOREV - MERCEDES BENZ - 200 SEDAN (W115) 1968', 'Taxi', 'With the W114 and W115 series, Mercedes confirmed its ambition to enter the mid-size car market. Introduced in 1968, the two series, better known as 200, were characterized by sober lines and reliable mechanics, with 2000, 2200 and 2300cc petrol engines a', 500, 'Petrol', 2000, '6', 'img/vehicleimages/89334133.jpg', 'img/vehicleimages/37581140.jpg', 'img/vehicleimages/81272721.jpg', 'img/vehicleimages/87708442.jpg', 'img/vehicleimages/13987912.jpg', 'Air Conditioner', 'Power Door Locks', 'AntiLock Braking System', 'Brake Assist', 'Power Steering', 'Driver Airbag', 'Passenger Airbag', 'Power Windows', 'CD Player', 'Central Locking', 'Crash Sensor', 'Leather Seats', 1),
(19, 'C+pod', 'Toyata', 'Toyota Expands C+pod Sales to All Customers in Japan\r\nToyota Motor Corporation (Toyota) announced today that it will expand sales of the \"C+pod\" ultra-compact battery electric vehicle (BEV) to all corporate and municipal customers, and now the general pub', 1000, 'Diesel', 2000, '6', 'img/vehicleimages/2191163.jpg', 'img/vehicleimages/87254644.jpg', 'img/vehicleimages/96842497.jpg', 'img/vehicleimages/32296020.jpg', 'img/vehicleimages/31554574.jpg', 'Air Conditioner', 'Power Door Locks', 'AntiLock Braking System', 'Brake Assist', 'Power Steering', 'Driver Airbag', 'Passenger Airbag', 'Power Windows', 'CD Player', 'Central Locking', 'Crash Sensor', 'Leather Seats', 1),
(20, 'Alphard', 'Toyata', 'Toyota City, Japan, January 26, 2015―Toyota Motor Corporation today launched the redesigned \"Alphard\" and \"Vellfire\" minivans through dealers across Japan.\r\n\r\nThe vehicles were developed to incorporate the idea of a roomy and luxurious saloon space with a', 11000, 'Petrol', 2000, '8', 'img/vehicleimages/81558555.jpg', 'img/vehicleimages/80885888.jpg', 'img/vehicleimages/27502217.jpg', 'img/vehicleimages/75181441.jpg', 'img/vehicleimages/76122203.jpg', 'Air Conditioner', 'Power Door Locks', 'AntiLock Braking System', 'Brake Assist', 'Power Steering', 'Driver Airbag', 'Passenger Airbag', 'Power Windows', 'CD Player', 'Central Locking', 'Crash Sensor', 'Leather Seats', 0),
(21, 'NOREV - MERCEDES BENZ - 200/8 (W115) 1968', 'Taxi', 'With the W114 and W115 series, Mercedes confirmed its ambition to enter the mid-size car market. Introduced in 1968, the two series, better known as 200, were characterized by sober lines and reliable mechanics, with 2000, 2200 and 2300cc petrol engines a', 10000, 'Diesel', 1990, '4', 'img/vehicleimages/77610606.jpg', 'img/vehicleimages/41316474.jpg', 'img/vehicleimages/47492612.jpg', 'img/vehicleimages/59727797.jpg', 'img/vehicleimages/28621757.jpg', 'Air Conditioner', 'Power Door Locks', 'AntiLock Braking System', 'Brake Assist', 'Power Steering', 'Driver Airbag', 'Passenger Airbag', 'Power Windows', 'CD Player', 'Central Locking', 'Crash Sensor', 'Leather Seats', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles_terms`
--

CREATE TABLE `vehicles_terms` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_info_car`
--
ALTER TABLE `booking_info_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commitee_request`
--
ALTER TABLE `commitee_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `committee_members`
--
ALTER TABLE `committee_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `eventrequest`
--
ALTER TABLE `eventrequest`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `hotel_categories_request`
--
ALTER TABLE `hotel_categories_request`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `hotel_request`
--
ALTER TABLE `hotel_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_pages_car`
--
ALTER TABLE `manage_pages_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_images`
--
ALTER TABLE `multiple_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `new_place_categories`
--
ALTER TABLE `new_place_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_place_category_requests`
--
ALTER TABLE `new_place_category_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_place_comments`
--
ALTER TABLE `new_place_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_place_complains`
--
ALTER TABLE `new_place_complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_booking_details`
--
ALTER TABLE `package_booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_payment_details`
--
ALTER TABLE `package_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_terms_conditions`
--
ALTER TABLE `package_terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participateors`
--
ALTER TABLE `participateors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemant`
--
ALTER TABLE `pemant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemant_car`
--
ALTER TABLE `pemant_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratingsystem_hotel`
--
ALTER TABLE `ratingsystem_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_info`
--
ALTER TABLE `rating_info`
  ADD UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `shop_products`
--
ALTER TABLE `shop_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles_terms`
--
ALTER TABLE `vehicles_terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booking_info_car`
--
ALTER TABLE `booking_info_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commitee_request`
--
ALTER TABLE `commitee_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `committee_members`
--
ALTER TABLE `committee_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `eventrequest`
--
ALTER TABLE `eventrequest`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hotel_categories_request`
--
ALTER TABLE `hotel_categories_request`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel_request`
--
ALTER TABLE `hotel_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_pages_car`
--
ALTER TABLE `manage_pages_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `multiple_images`
--
ALTER TABLE `multiple_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `new_place_categories`
--
ALTER TABLE `new_place_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `new_place_category_requests`
--
ALTER TABLE `new_place_category_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_place_comments`
--
ALTER TABLE `new_place_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `new_place_complains`
--
ALTER TABLE `new_place_complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `package_booking_details`
--
ALTER TABLE `package_booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `package_payment_details`
--
ALTER TABLE `package_payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `package_terms_conditions`
--
ALTER TABLE `package_terms_conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `participateors`
--
ALTER TABLE `participateors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemant`
--
ALTER TABLE `pemant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pemant_car`
--
ALTER TABLE `pemant_car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ratingsystem_hotel`
--
ALTER TABLE `ratingsystem_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_products`
--
ALTER TABLE `shop_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vehicles_terms`
--
ALTER TABLE `vehicles_terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
