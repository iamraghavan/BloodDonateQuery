-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 03:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurudhidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddonartable`
--

CREATE TABLE `blooddonartable` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `age` int(20) NOT NULL,
  `contactNum` varchar(25) DEFAULT NULL,
  `altContactNum` varchar(25) DEFAULT NULL,
  `bloodType` varchar(225) NOT NULL,
  `dateofBloodDate` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddonartable`
--

INSERT INTO `blooddonartable` (`name`, `email`, `gender`, `age`, `contactNum`, `altContactNum`, `bloodType`, `dateofBloodDate`, `address`, `country`, `state`, `city`, `area`, `status`) VALUES
('Anbu Raghavan', 'raghavanofficials@gmail.com', 'Male', 20, '2147483647', '2147483647', 'B+', '0000-00-00', 'Dheremer Street Collector Office (Po), Thethi', 'India', 'Tamil Nadu', 'Nagapattinam', 'Nagapattinam', 'Available'),
('Raghul', 'raghulram@gmail.com', 'Male', 23, '750296404', '2147483647', 'B+', '2022-02-23', 'North Street Chennai', 'India', 'Tamil Nadu', 'Chennai', 'Chennai', 'Available'),
('Anbu', 'developer.raghavan@gmail.com', 'Male', 17, '2147483647', '2147483647', 'A2B+', '0000-00-00', 'Dhermer Street Collector office post', 'India', 'Uttar Pradesh', 'Amethi', 'Nagapattinam', 'Unavailable'),
('Anbu', 'developer.raghavan@gmail.com', 'Male', 17, '09344223822', '09344223822', 'A2B+', '0000-00-00', 'Dhermer Street Collector office post', 'India', 'Uttar Pradesh', 'Amethi', 'Nagapattinam', 'Unavailable'),
('Anbu Raghavan', 'raghavanofficials@gmail.com', 'Male', 23, '09344223822', '09344223822', 'AB+', '2022-10-18', 'Dhermer Street Collector office post', 'India', 'Delhi', 'South Delhi', 'NAGAPATTINAM', 'Available'),
('Jayakannan Gowtham', 'jgowtham3222@gmail.com', 'Male', 26, '6127903394', '7285131539', 'A1B+', '2018-01-31', '3/2, Indira Nagar 4th Main Rd, Indira Nagar', 'India', 'Tamil Nadu', 'Chennai', 'Adyar', 'Available'),
('Kumaravel Kathirasan', 'kumarvel33102@gmail.com', 'Male', 54, '995433223', '872312221', 'A2-', '2004-05-23', 'YCK Apartment, Kullikarai Street ', 'India', 'Tamil Nadu', 'Ramanathapuram', 'Ramanathapuram', 'Unavailable'),
('Kumaravel Kathirasan', 'kumarvel33102@gmail.com', 'Male', 54, '995433223', '872312221', 'A2-', '2004-05-23', 'YCK Apartment, Kullikarai Street ', 'India', 'Tamil Nadu', 'Ramanathapuram', 'Ramanathapuram', 'Unavailable'),
('Kumaravel Kathirasan', 'kumarvel33102@gmail.com', 'Male', 54, '995433223', '872312221', 'A2-', '2004-05-23', 'YCK Apartment, Kullikarai Street ', 'India', 'Tamil Nadu', 'Ramanathapuram', 'Ramanathapuram', 'Unavailable'),
('Kumaravel Kathirasan', 'kumarvel33102@gmail.com', 'Male', 54, '995433223', '872312221', 'A2-', '2004-05-23', 'YCK Apartment, Kullikarai Street ', 'India', 'Tamil Nadu', 'Ramanathapuram', 'Ramanathapuram', 'Unavailable'),
('Anbu Saravanan', 'raghavanofficials@gmail.com', 'Male', 34, '235', '34', 'A1-', '0000-00-00', 'test', 'Austria', 'Styria', 'Arzberg', 'test', 'Available');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
