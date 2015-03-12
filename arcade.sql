-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2015 at 05:30 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arcade`
--

-- --------------------------------------------------------

--
-- Table structure for table `arcade_things`
--

CREATE TABLE IF NOT EXISTS `arcade_things` (
  `id` int(10) NOT NULL,
  `thing_to_do` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arcade_things`
--

INSERT INTO `arcade_things` (`id`, `thing_to_do`) VALUES
(1, 'Empty ticket stations and sweep them out.'),
(2, 'Wipe down counters and glass, get rid of any clutter.'),
(3, 'Restock redemption counter.'),
(4, 'Make sure every type of item has a visible ticket amount.'),
(5, 'Replace ALL stuffed animals on the walls.'),
(6, 'Make sure nothing is behind the white cabinet.'),
(7, 'Wipe down arcade tables and chairs.'),
(8, 'Sweep floors.'),
(9, 'Make sure all laser tag vests and remote are plugged in.'),
(10, 'Shut down Laser Tag and XD Theater.'),
(11, 'Vacuum Laser Tag and XD Theater.'),
(12, 'Declutter all counters and cabinets (including Laser Tag).'),
(13, 'Empty Wizard of Oz drop trays.'),
(14, 'Stock all games with tickets.'),
(15, 'Make sure all games listed under your day have been cleaned.'),
(16, 'Record all game issues on the Arcade Error Reporting page.'),
(17, 'Turn off all breakers marked with an "A".'),
(18, 'Turn off lights by XD and merchandise closet.'),
(19, 'Return promo card and key to cabinet.'),
(20, 'Return walkie to manager.'),
(21, 'Count Wizard of Oz coins and return to game.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arcade_things`
--
ALTER TABLE `arcade_things`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
