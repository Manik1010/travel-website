-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 09:43 AM
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
-- Database: `test`
--

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
(3, 'what is this?', 'this is a travel website', '0000-00-00 00:00:00'),
(6, 'What is the purpose of a travel website?', 'A travel website is a website that provides travel reviews, trip fares, or a combination of both. Over 1.5 billion people book travel per year, 70% of which is done online.', '0000-00-00 00:00:00'),
(7, 'How do websites help in tourism industry?', 'The website can be used as a perfect platform to reach your customers with important information. ', '0000-00-00 00:00:00'),
(8, 'HOW DO I KNOW I CAN TRUST THIS TOUR KORO website?', 'Professional Travel a Direct Travel Company is extremely cautious when it comes to choosing our business partners and vendors. This vetting of travel suppliers and support of the ‘good ones’ over the past 50+ years has given us preferred access to the wor', '0000-00-00 00:00:00'),
(9, 'Can I make a booking over the phone?', 'Yes, you can call us on +88 1234567890 ', '0000-00-00 00:00:00'),
(10, 'How can I book a multi-sector itinerary?', 'Multi-sector hotel rooms and vacations can be booked by calling us on +88 1234567890444 (standard charges apply)', '0000-00-00 00:00:00'),
(11, 'How do I know that my booking is confirmed?', 'Whether a booking is made online or over the phone, a confirmation would be sent to you via e-mail, which would include your reservation number and travel details.\r\n', '0000-00-00 00:00:00'),
(12, 'How will my hotel booking or vacation package be confirmed?', 'For all hotel bookings made on the website, you will receive a confirmation number via e-mail.\r\n\r\nFor hotel and vacation packages booked over the phone, our reservation agents would process all your travel details and check for availability with the hotel', '0000-00-00 00:00:00'),
(13, 'Can I change my hotel booking?', 'You may change your hotel reservation details. However, certain charges as per the hotel policies might be applicable.', '0000-00-00 00:00:00'),
(14, 'How can I contact Tour Koro?', 'You can call us on +88 1234567890(standard charges apply).', '0000-00-00 00:00:00'),
(15, 'Will I have to pay any charges if I cancel my hotel or package booking?', 'Cancellation policies and charges will depend on the hotel booked. Travelguru, will charge 3% of the total transaction amount as a processing charge for all cancellations above and beyond the charges by the hotel.', '0000-00-00 00:00:00'),
(16, 'Is tour koro.com a safe site to make online bookings?', 'Yes, we are committed to protecting our customer’s information. ', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
