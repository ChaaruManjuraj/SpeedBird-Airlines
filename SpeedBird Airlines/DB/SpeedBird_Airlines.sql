-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 06:13 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SpeedBird Airlines`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--
-- Error reading structure for table SpeedBird Airlines.ADMIN: #1932 - Table 'speedbird airlines.admin' doesn't exist in engine
-- Error reading data for table SpeedBird Airlines.ADMIN: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `SpeedBird Airlines`.`ADMIN`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `CANCELLED_TICKETS`
--
-- Error reading structure for table SpeedBird Airlines.CANCELLED_TICKETS: #1932 - Table 'speedbird airlines.cancelled_tickets' doesn't exist in engine
-- Error reading data for table SpeedBird Airlines.CANCELLED_TICKETS: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `SpeedBird Airlines`.`CANCELLED_TICKETS`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `FLIGHTS`
--
-- Error reading structure for table SpeedBird Airlines.FLIGHTS: #1932 - Table 'speedbird airlines.flights' doesn't exist in engine
-- Error reading data for table SpeedBird Airlines.FLIGHTS: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `SpeedBird Airlines`.`FLIGHTS`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `PASSENGERS`
--
-- Error reading structure for table SpeedBird Airlines.PASSENGERS: #1932 - Table 'speedbird airlines.passengers' doesn't exist in engine
-- Error reading data for table SpeedBird Airlines.PASSENGERS: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `SpeedBird Airlines`.`PASSENGERS`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `REFUND_DETAILS`
--
-- Error reading structure for table SpeedBird Airlines.REFUND_DETAILS: #1932 - Table 'speedbird airlines.refund_details' doesn't exist in engine
-- Error reading data for table SpeedBird Airlines.REFUND_DETAILS: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `SpeedBird Airlines`.`REFUND_DETAILS`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `TICKETS`
--
-- Error reading structure for table SpeedBird Airlines.TICKETS: #1932 - Table 'speedbird airlines.tickets' doesn't exist in engine
-- Error reading data for table SpeedBird Airlines.TICKETS: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `SpeedBird Airlines`.`TICKETS`' at line 1

--
-- Triggers `TICKETS`
--
DELIMITER $$
CREATE TRIGGER `CANCELLED_TICKETS` AFTER DELETE ON `TICKETS` FOR EACH ROW INSERT INTO `CANCELLED_TICKETS`(`flight_no`, `bookingemail`, `nooftickets`, `totalprice`) VALUES (old.flight_no,old.bookingemail,old.nooftickets,old.pricePLUSgst)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--
-- Error reading structure for table SpeedBird Airlines.USERS: #1932 - Table 'speedbird airlines.users' doesn't exist in engine
-- Error reading data for table SpeedBird Airlines.USERS: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `SpeedBird Airlines`.`USERS`' at line 1
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
