-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbankmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donorlogin`
--

CREATE TABLE `donorlogin` (
  `id` int(255) UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_full_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `user_number` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `age` varchar(3) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `blood_pressure` varchar(255) DEFAULT NULL,
  `pulse` varchar(255) DEFAULT NULL,
  `hemoglobin` varchar(255) DEFAULT NULL,
  `blood_donation` varchar(255) DEFAULT NULL,
  `pletlets_donation` varchar(255) DEFAULT NULL,
  `plasama_donation` varchar(255) DEFAULT NULL,
  `total_donation` varchar(255) DEFAULT NULL,
  `health_report` varchar(255) DEFAULT NULL,
  `attend_event` varchar(255) DEFAULT NULL,
  `last_place_donation` varchar(255) DEFAULT NULL,
  `last_donation` varchar(255) DEFAULT NULL,
  `created_date` timestamp(6) NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventlogin`
--

CREATE TABLE `eventlogin` (
  `id` int(255) UNSIGNED NOT NULL,
  `user_full_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `user_number` varchar(255) DEFAULT NULL,
  `event_address` varchar(255) DEFAULT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `need` varchar(255) DEFAULT NULL,
  `other_message` varchar(255) DEFAULT NULL,
  `event_poster` varchar(255) DEFAULT NULL,
  `created_date` timestamp(6) NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactnumber` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE `requestblood` (
  `id` int(255) UNSIGNED NOT NULL,
  `patient_name` varchar(255) DEFAULT NULL,
  `hospital_name` varchar(255) DEFAULT NULL,
  `hospital_address` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `contact_mail_id` varchar(255) DEFAULT NULL,
  `other_message` varchar(255) DEFAULT NULL,
  `required_date` varchar(255) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `donor_id` varchar(1) DEFAULT NULL,
  `created_by` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donorlogin`
--
ALTER TABLE `donorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventlogin`
--
ALTER TABLE `eventlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donorlogin`
--
ALTER TABLE `donorlogin`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `eventlogin`
--
ALTER TABLE `eventlogin`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
