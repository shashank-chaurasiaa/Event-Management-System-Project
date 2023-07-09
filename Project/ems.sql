-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 06:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_details`
--

CREATE TABLE `booked_details` (
  `City_name` varchar(20) NOT NULL,
  `Event_name` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Ticket_no` int(10) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked_details`
--

INSERT INTO `booked_details` (`City_name`, `Event_name`, `Date`, `Time`, `User_name`, `Ticket_no`, `Status`, `Event_id`) VALUES
('', '', '0000-00-00', '00:00:00.000000', '', 0, 'Conform', 1),
('', '', '0000-00-00', '00:00:00.000000', '', 1, 'Conform', 1),
('Ara', 'Comedy Show', '2022-11-05', '11:00:00.000000', 'DRCA1A039', 2, 'Conform', 1),
('Ara', 'Motivational Talk', '2022-11-05', '11:00:00.000000', 'Shweta Singh', 3, 'Conform', 1),
('Patna', 'Exhibitions', '2022-11-05', '11:00:00.000000', 'shaweta', 4, 'Conform', 1),
('hyderabad', 'Exhibitions', '2022-11-05', '11:00:00.000000', 'Shweta Singh', 5, 'Conform', 1),
('hyderabad', 'Exhibitions', '2022-11-05', '11:00:00.000000', 'Shweta Singh', 5, 'Conform', 1),
('abc', 'Motivational Talk', '2022-11-05', '11:00:00.000000', 'DRCA1A039', 6, 'Conform', 1),
('abc', 'Motivational Talk', '2022-11-05', '11:00:00.000000', 'DRCA1A039', 6, 'Conform', 1),
('hyderabad', 'Blood Donation Camps', '2022-11-07', '02:30:00.000000', 'vijeta', 7, 'Conform', 1),
('Ara', 'Comedy Show', '2022-11-05', '11:00:00.000000', '10', 8, 'Confirm', 1),
('Ara', 'Comedy Show', '2022-11-05', '11:00:00.000000', 'Shweta Singh', 9, 'Confirm', 1),
('Patna', 'Motivational Talk', '2022-11-05', '11:00:00.000000', 'Gourav', 9, 'Confirm', 1),
('Ashta', 'Motivational Talk', '2022-12-01', '11:00:00.000000', 'shaweta', 10, 'Confirm', 1),
('hyderabad', 'Blood Donation Camps', '2022-12-01', '20:00:00.000000', 'Gourav', 10, 'Confirm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `City_name` varchar(20) NOT NULL,
  `Event_category` varchar(50) NOT NULL,
  `Event_date` date NOT NULL,
  `Event_time` time(6) NOT NULL,
  `Total_seats` int(10) NOT NULL,
  `Available_seats` int(10) NOT NULL,
  `Ticket_price` int(10) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`City_name`, `Event_category`, `Event_date`, `Event_time`, `Total_seats`, `Available_seats`, `Ticket_price`, `event_id`) VALUES
('Ara', 'Comedy Show', '2022-11-05', '11:00:00.000000', 110, 94, 20000, 1),
('Ara', 'comedy', '2022-11-05', '11:00:00.000000', 0, 1000, 0, 2),
('Patna', 'Motivational Talk', '2022-11-05', '11:00:00.000000', 200, 84, 30000, 3),
('Ashta', 'Motivational Talk', '2022-12-01', '11:00:00.000000', 200, 84, 30000, 4),
('hyderabad', 'Blood Donation Camps', '2022-11-07', '02:30:00.000000', 500, 84, 6578, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_credentials`
--

CREATE TABLE `user_credentials` (
  `User_Name` varchar(25) NOT NULL,
  `User_Id` int(10) NOT NULL,
  `User_Type` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Phone_no` varchar(15) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_credentials`
--

INSERT INTO `user_credentials` (`User_Name`, `User_Id`, `User_Type`, `Gender`, `Phone_no`, `Address`, `Email`, `Password`) VALUES
('101', 0, '', 'Female', '7480925041', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7389@gmail.com', ''),
('Shweta Singh', 101, '', 'Female', '8889562709', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7389@gmail.com', 'Shweta99@'),
('Shweta Singh', 102, 'Array', 'Female', '7389227135', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7135@gmail.com', 'Shweta99@'),
('Shweta Singh', 103, 'Admin', 'Female', '7566545206', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7389@gmail.com', 'Shweta99@'),
('shaweta', 104, 'Admin', 'Female', '7480925041', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7389@gmail.com', '12345678'),
('Singh', 108, 'User', 'Female', '8889562709', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7135@gmail.com', '123'),
('Gourav Arya', 110, 'Admin', 'Male', '7389227135', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7135@gmail.com', 'Gourav123@'),
('Gourav', 111, 'User', 'Male', '7389227135', 'Village Post Maina\r\nBlock  Ash', 'gouravarya7135@gmail.com', 'Gourav123@'),
('vijeta', 112, 'User', 'Female', '7566545206', '  \r\nAra', 'imvikas0404@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_details`
--
ALTER TABLE `booked_details`
  ADD KEY `Event_id` (`Event_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `user_credentials`
--
ALTER TABLE `user_credentials`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_details`
--
ALTER TABLE `booked_details`
  ADD CONSTRAINT `booked_details_ibfk_1` FOREIGN KEY (`Event_id`) REFERENCES `event_details` (`event_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
