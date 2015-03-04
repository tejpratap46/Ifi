-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2015 at 05:10 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `android`
--

-- --------------------------------------------------------

--
-- Table structure for table `apikey`
--

CREATE TABLE IF NOT EXISTS `apikey` (
  `api_key` varchar(30) NOT NULL,
  PRIMARY KEY (`api_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apikey`
--

INSERT INTO `apikey` (`api_key`) VALUES
('tejpratap'),
('tp');

-- --------------------------------------------------------

--
-- Table structure for table `clipboard`
--

CREATE TABLE IF NOT EXISTS `clipboard` (
  `index` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `clipboard`
--

INSERT INTO `clipboard` (`index`, `username`, `text`) VALUES
(1, 'tejpratapsingh', 'http://localhost/phpproject/AndroidProjectFiles/ifi/clipboard.php'),
(2, 'tejpratapsingh', 'https://www.youtube.com/feed/subscriptions'),
(3, 'tejpratapsingh', '$_POST'),
(4, 'tejpratapsingh', 'http://www.indiabix.com/online-test/aptitude-test/random'),
(5, 'tejpratap36@gmail.com', 'http://www.movienr.com/discover/genre'),
(6, 'tejpratap36@gmail.com', 'http://www.movienr.com/'),
(7, 'tejpratap36@gmail.com', 'http://s310.uploadbaz.com/files/3/h9xgzpn52q2srk/300mbworld%20com%20~%20The%20Guest%202014%20HDRip%20XviD.mkv'),
(8, 'tejpratap46@gmail.com', '12356'),
(9, 'tej@ymail.com', 'tej pratap singh'),
(10, 'tej@ymail.com', 'Is'),
(11, 'tej@ymail.com', 'Great');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `index` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE IF NOT EXISTS `top` (
  `index` int(30) NOT NULL AUTO_INCREMENT,
  `total_shares` varchar(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `formula` varchar(50000) NOT NULL,
  PRIMARY KEY (`index`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=502 ;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`index`, `total_shares`, `name`, `formula`) VALUES
(495, '400', 'Notify when the battery is charge', 'Overcharging your phone battery may affect its performance in long run, therefore you use tasker to set up an ringing alert when your batter level exceed 95% while charging.'),
(496, '500', 'Shake your phone to turn on flash light', 'If your phone supports LED flash then you can just shake your phone to turn on the flash lights. This is useful and quicker approach as you don’t have to search for an application.'),
(497, '600', 'When connected to home wifi then turn off silent mode', 'When you reach home your wifi autometically connects to your home wifi, then it will disable silent mode.'),
(498, '700', 'Play Music Automatically when headphones are plugged in', 'When you plug-in your headphones, the phone will automatically launch your favorite music player, increase the volume to wish level and then start playing the music.'),
(499, '800', 'Emergency Text', 'Send an automatic SMS to your loved once (specified number) , when your battery reaches down the 5%.'),
(500, '900', 'Night Mode', ' Turn WiFi OFF put phone to silent mode at night and turn it back on in the morning'),
(501, '3', 'if proximity changed then turn on Display', 'If i wave near phone''s proximity sensor, then turn on display');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('tps', 'tej@ymail.com', '9860637720'),
('tps', 'tejpratap36@gmail.com', '789456123'),
('astar', 'tejpratap46@gmail.com', '789456123'),
('astar', 'tejpratap66@gmail.com', '789456123'),
('tej pratap', 'tejpratapsingh', '9860637720');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
