-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2014 at 10:48 AM
-- Server version: 5.5.37-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hdhlink_track`
--

-- --------------------------------------------------------

--
-- Table structure for table `tracking_table`
--

CREATE TABLE IF NOT EXISTS `tracking_table` (
  `recid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rec_use_page` varchar(220) DEFAULT NULL,
  `rec_use_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`recid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tracking_table`
--

INSERT INTO `tracking_table` (`recid`, `rec_use_page`, `rec_use_date`) VALUES
(1, 'http//harddrivehotel.com', '2014-06-30 14:45:08'),
(2, 'http//harddrivehotel.com', '2014-06-30 14:45:23'),
(3, 'http://harddrivehotel.com', '2014-06-30 14:45:47');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
