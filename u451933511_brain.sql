
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 12:21 PM
-- Server version: 5.1.67
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u451933511_brain`
--

-- --------------------------------------------------------

--
-- Table structure for table `apikey`
--

CREATE TABLE IF NOT EXISTS `apikey` (
  `api_key` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`api_key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apikey`
--

INSERT INTO `apikey` (`api_key`, `timestamp`) VALUES
('shubham', '2015-03-20 03:27:22'),
('tejpratap', '2015-03-20 03:27:11'),
('sourabh', '2015-03-20 03:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `clipboard`
--

CREATE TABLE IF NOT EXISTS `clipboard` (
  `index` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `clipboard`
--

INSERT INTO `clipboard` (`index`, `username`, `text`, `timestamp`) VALUES
(31, 'davidvessels@gmail.com', 'Mmq3BSDF', '2015-05-03 10:22:08'),
(32, 'davidvessels@gmail.com', 'Mmq3BSDF', '2015-05-03 10:22:09'),
(30, 'davidvessels@gmail.com', 'Mmq3BSDF', '2015-05-03 10:14:12'),
(29, 'davidvessels@gmail.com', 'Mmq3BSDF', '2015-05-03 10:14:12'),
(28, 'davidvessels@gmail.com', 'Mmq3BSDF', '2015-05-03 09:49:35'),
(27, 'davidvessels@gmail.com', 'Mmq3BSDF', '2015-05-03 09:49:34'),
(26, 'tpscorp@gmail.com', 'tej pratap singh', '2015-04-04 16:26:32'),
(25, 'tpscorp@gmail.com', 'Simple Plan', '2015-04-04 12:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `index` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `text` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`index`, `username`, `text`, `timestamp`) VALUES
(9, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-03-29 16:52:06'),
(8, 'tejprataps@ymail.com', '{"id":"343176302","title":"If i :: Top Formulas","text":"http://brainstrom.zz.mu/ifi/notification.php","subtext":"null","package":"com.pushbullet.android"}', '2015-03-29 16:50:56'),
(7, 'tejprataps@ymail.com', '{"id":"571802928","title":"Pushbullet - Your devices working better together","text":"https://www.pushbullet.com/","subtext":"null","package":"com.pushbullet.android"}', '2015-03-29 16:37:21'),
(45, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Ongoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:58:23'),
(44, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Ongoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:58:20'),
(43, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Ongoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:58:20'),
(42, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Outgoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:58:12'),
(41, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Outgoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:58:11'),
(40, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-01 12:58:03'),
(39, 'tejprataps@ymail.com', '{"id":"2131427358","title":"sonu","text":"Outgoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:57:31'),
(38, 'tejprataps@ymail.com', '{"id":"2131427358","title":"sonu","text":"Outgoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:57:31'),
(37, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-01 12:57:15'),
(36, 'tejprataps@ymail.com', '{"id":"7","title":"Missed call","text":"sonu","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:57:01'),
(35, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-01 12:38:33'),
(34, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-01 12:38:32'),
(33, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-01 12:38:30'),
(32, 'tejprataps@ymail.com', '{"id":"252119","title":"Searching for GPS","text":"Google Play services","subtext":"null","package":"com.android.systemui"}', '2015-04-01 08:56:30'),
(31, 'tejprataps@ymail.com', '{"id":"252119","title":"Searching for GPS","text":"Google Play services","subtext":"null","package":"com.android.systemui"}', '2015-04-01 08:44:26'),
(30, 'tejprataps@ymail.com', '{"id":"252119","title":"Searching for GPS","text":"Google Play services","subtext":"null","package":"com.android.systemui"}', '2015-04-01 08:29:20'),
(29, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-01 07:11:38'),
(46, 'tejprataps@ymail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-01 12:58:40'),
(47, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Outgoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:59:04'),
(48, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Ongoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:59:13'),
(49, 'tejprataps@ymail.com', '{"id":"2131427358","title":"mayank mit","text":"Ongoing call","subtext":"null","package":"com.whatsapp"}', '2015-04-01 12:59:15'),
(50, 'tejprataps@ymail.com', '{"id":"4","title":"Gallery is running","text":"Touch for more information or to stop the app.","subtext":"null","package":"com.miui.gallery"}', '2015-04-01 17:52:42'),
(51, 'tejprataps@ymail.com', '{"id":"4","title":"Gallery is running","text":"Touch for more information or to stop the app.","subtext":"null","package":"com.miui.gallery"}', '2015-04-01 17:52:45'),
(52, 'tejprataps@ymail.com', '{"id":"17302998","title":"Hotspot "ADYYWGlhb21p" is on","text":"0 connected","subtext":"null","package":"android"}', '2015-04-02 03:51:40'),
(53, 'tejprataps@ymail.com', '{"id":"17040506","title":"Connected as a media device","text":"Touch for other USB options.","subtext":"null","package":"android"}', '2015-04-02 04:03:55'),
(54, 'tejprataps@ymail.com', '{"id":"17040514","title":"USB debugging connected","text":"Touch to disable USB debugging.","subtext":"null","package":"android"}', '2015-04-02 04:04:26'),
(55, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:09:30'),
(56, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:09:50'),
(57, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:10:26'),
(58, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:10:30'),
(59, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:10:30'),
(60, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:17:51'),
(61, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:17:54'),
(62, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:17:55'),
(63, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:31:32'),
(64, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:31:47'),
(65, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:32:01'),
(66, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:32:07'),
(67, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:32:46'),
(68, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:32:55'),
(69, 'tpscorp@gmail.com', '{"id":"252119","title":"Searching for GPS","text":"Camera","subtext":"null","package":"com.android.systemui"}', '2015-04-06 04:46:18'),
(70, 'tpscorp@gmail.com', '{"id":"252119","title":"Searching for GPS","text":"Camera","subtext":"null","package":"com.android.systemui"}', '2015-04-06 04:47:04'),
(71, 'tpscorp@gmail.com', '{"id":"252119","title":"Searching for GPS","text":"Camera","subtext":"null","package":"com.android.systemui"}', '2015-04-06 04:48:23'),
(72, 'tpscorp@gmail.com', '{"id":"1","title":"Bai chod - TEJ","text":"Shubham jaketia: Tu kuthe h","subtext":"null","package":"com.whatsapp"}', '2015-04-06 04:56:12'),
(73, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 04:56:36'),
(74, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 04:56:37'),
(75, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:58:51'),
(76, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 04:58:58'),
(77, 'tpscorp@gmail.com', '{"id":"1","title":"Bai chod - TEJ","text":"Shubham jaketia: File checking ho rahi h kya","subtext":"null","package":"com.whatsapp"}', '2015-04-06 05:01:05'),
(78, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:05:28'),
(79, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:05:29'),
(80, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:05:30'),
(81, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:05:45'),
(82, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 05:05:59'),
(83, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:06:16'),
(84, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:06:33'),
(85, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:06:46'),
(86, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 05:06:55'),
(87, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:44:00'),
(88, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:44:01'),
(89, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:44:07'),
(90, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:44:08'),
(91, 'tpscorp@gmail.com', '{"id":"252119","title":"Searching for GPS","text":"Camera","subtext":"null","package":"com.android.systemui"}', '2015-04-06 06:44:31'),
(92, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:02'),
(93, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:06'),
(94, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:08'),
(95, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:10'),
(96, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:23'),
(97, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:25'),
(98, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:25'),
(99, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:41'),
(100, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:44'),
(101, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:45'),
(102, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:48'),
(103, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:48'),
(104, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:48'),
(105, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:48'),
(106, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:49'),
(107, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:49'),
(108, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:49'),
(109, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:53'),
(110, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:56'),
(111, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:57'),
(112, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:45:57'),
(113, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:46:12'),
(114, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:55:27'),
(115, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:55:27'),
(116, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:55:33'),
(117, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 06:55:33'),
(118, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:55:34'),
(119, 'tpscorp@gmail.com', '{"id":"17040517","title":"Choose input method","text":"Fleksy","subtext":"null","package":"android"}', '2015-04-06 06:55:57'),
(120, 'tpscorp@gmail.com', '{"id":"124","title":"DD-Etopup","text":"Transaction number MHR15040612282400008 to recharge 50 INR is under process.","subtext":"null","package":"com.android.mms"}', '2015-04-06 06:58:10'),
(121, 'tpscorp@gmail.com', '{"id":"123","title":"DD-Etopup","text":"Transaction number MHR15040612282400008 to recharge 50 INR is under process.","subtext":"null","package":"com.android.mms"}', '2015-04-06 06:58:10'),
(122, 'tpscorp@gmail.com', '{"id":"124","title":"DD-Etopup","text":"Txn No. MHR15040612282400008 to Recharge MRP 50 is successful . TT= 50 INR, New Balance 50.45 INR, P.F 0 INR, Service.Tax 5.50 INR.","subtext":"null","package":"com.android.mms"}', '2015-04-06 06:58:21'),
(123, 'tpscorp@gmail.com', '{"id":"123","title":"DD-Etopup","text":"2 unread messages","subtext":"null","package":"com.android.mms"}', '2015-04-06 06:58:21'),
(124, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 07:04:20'),
(125, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 07:31:19'),
(126, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 07:31:19'),
(127, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 07:31:22'),
(128, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 07:31:23'),
(129, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 07:31:28'),
(130, 'tpscorp@gmail.com', '{"id":"0","title":"null","text":"null","subtext":"null","package":"com.android.providers.downloads"}', '2015-04-06 07:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE IF NOT EXISTS `top` (
  `index` int(30) NOT NULL AUTO_INCREMENT,
  `total_shares` varchar(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `formula` varchar(50000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=550 ;

--
-- Dumping data for table `top`
--

INSERT INTO `top` (`index`, `total_shares`, `name`, `formula`, `timestamp`) VALUES
(495, '400', 'Notify when the battery is charge', 'Overcharging your phone battery may affect its performance in long run, therefore you use tasker to set up an ringing alert when your batter level exceed 95% while charging.', '2015-03-20 00:00:00'),
(496, '500', 'Shake your phone to turn on flash light', 'If your phone supports LED flash then you can just shake your phone to turn on the flash lights. This is useful and quicker approach as you don’t have to search for an application.', '2015-03-20 00:00:00'),
(497, '600', 'When connected to home wifi then turn off silent mode', 'When you reach home your wifi autometically connects to your home wifi, then it will disable silent mode.', '2015-03-20 00:00:00'),
(498, '700', 'Play Music Automatically when headphones are plugged in', 'When you plug-in your headphones, the phone will automatically launch your favorite music player, increase the volume to wish level and then start playing the music.', '2015-03-20 00:00:00'),
(499, '800', 'Emergency Text', 'Send an automatic SMS to your loved once (specified number) , when your battery reaches down the 5%.', '2015-03-20 00:00:00'),
(500, '900', 'Night Mode', ' Turn WiFi OFF put phone to silent mode at night and turn it back on in the morning', '2015-03-20 00:00:00'),
(501, '3', 'if proximity changed then turn on Display', 'If i wave near phone''s proximity sensor, then turn on display', '2015-03-20 00:00:00'),
(520, '1', 'if i HeadSet Connected then Toggle Music', '{"action1":"HeadSet Connected","action2":"Toggle Music","condition1":"","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-30 05:04:19'),
(519, '3', 'if i Connect to Specific Bluetooth then Toggle Music', '{"action1":"Connect to Specific Bluetooth","action2":"Toggle Music","condition1":"JVC Unit","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-26 23:03:51'),
(518, '1', 'if i Time Changed then Enable AutoRotation', '{"action1":"Time Changed","action2":"Enable AutoRotation","condition1":"","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-24 14:57:38'),
(517, '2', 'if i Shake Phone then Flashlight On', '{"action1":"Shake Phone","action2":"Flashlight On","condition1":"","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-23 18:12:17'),
(516, '1', 'if i Shake Phone then Turn On Screen', '{"action1":"Shake Phone","action2":"Turn On Screen","condition1":"","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-23 18:11:39'),
(515, '1', 'if i Camera Button Pressed then Set Brightness To', '{"action1":"Camera Button Pressed","action2":"Set Brightness To","condition1":"","condition2":"","condition3":"0","condition4":"","enabled":"true"}', '2015-03-23 18:10:11'),
(514, '2', 'if i Battery Percentage is then Turn Off Wifi', '{"action1":"Battery Percentage is","action2":"Turn Off Wifi","condition1":"90","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-21 17:28:08'),
(513, '4', 'if i Battery Percentage is then Ring Alarm', '{"action1":"Battery Percentage is","action2":"Ring Alarm","condition1":"95","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-21 17:24:24'),
(512, '2', 'if i Battery Low then Turn Off Wifi', '{"action1":"Battery Low","action2":"Turn Off Wifi","condition1":"","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-21 17:18:32'),
(521, '1', 'if i Connect to Specific Bluetooth then Open App', '{"action1":"Connect to Specific Bluetooth","action2":"Open App","condition1":"VW PHONE","condition2":"","condition3":"com.spotify.music","condition4":"","enabled":"true"}', '2015-03-31 13:44:44'),
(522, '1', 'if i Bluetooth Connected then Get GPS Location', '{"action1":"Bluetooth Connected","action2":"Get GPS Location","condition1":"","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-03-31 13:52:48'),
(523, '1', 'if i Bluetooth Connected then Turn On Silent Mode', '{"action1":"Bluetooth Connected","action2":"Turn On Silent Mode","condition1":"","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-04-05 10:41:10'),
(524, '1', 'if i Connect to Specific Bluetooth then Notify Me', '{"action1":"Connect to Specific Bluetooth","action2":"Notify Me","condition1":"TEJ-PC","condition2":"","condition3":"null","condition4":"null","enabled":"true"}', '2015-04-05 11:17:39'),
(525, '1', 'if i Bluetooth Connected then Flashlight On', '{"action1":"Bluetooth Connected","action2":"Flashlight On","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-05 15:43:40'),
(526, '1', 'if i Notification From Contains then Ring Alarm', '{"action1":"Notification From Contains","action2":"Ring Alarm","condition1":"com.usingmtech.blogspot.ifi","condition2":"Tej","condition3":"","condition4":"","enabled":"true"}', '2015-04-09 10:47:25'),
(527, '1', 'if i Copied Text then Notify Me', '{"action1":"Copied Text","action2":"Notify Me","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-09 10:51:39'),
(528, '2', 'if i Shake Phone then Notify Me', '{"action1":"Shake Phone","action2":"Notify Me","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-09 11:42:37'),
(529, '1', 'if i DisConnected from Wifi then Turn Off Wifi', '{"action1":"DisConnected from Wifi","action2":"Turn Off Wifi","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-11 19:04:13'),
(530, '1', 'if i Copied Text then Open App', '{"action1":"Copied Text","action2":"Open App","condition1":"","condition2":"","condition3":"com.musixmatch.android.lyrify","condition4":"","enabled":"true"}', '2015-04-13 17:29:57'),
(531, '5', 'if i Battery Low then Ring Alarm', '{"action1":"Battery Low","action2":"Ring Alarm","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-13 17:47:36'),
(532, '2', 'if i Push Message Containing then Vibrate', '{"action1":"Push Message Containing","action2":"Vibrate","condition1":"Simple plan","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-14 11:35:55'),
(533, '1', 'if i Shake Phone then Get GPS Location', '{"action1":"Shake Phone","action2":"Get GPS Location","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-14 12:23:02'),
(534, '1', 'if i Proximity Changed then Get GPS Location', '{"action1":"Proximity Changed","action2":"Get GPS Location","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-14 12:23:59'),
(535, '1', 'if i Proximity Changed then Notify Me', '{"action1":"Proximity Changed","action2":"Notify Me","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-21 11:00:17'),
(536, '1', 'if i DisConnected from Wifi then Ring Alarm', '{"action1":"DisConnected from Wifi","action2":"Ring Alarm","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-04-21 18:27:10'),
(537, '1', 'if i Get Sms then Open App', '{"action1":"Get Sms","action2":"Open App","condition1":"","condition2":"","condition3":"com.philips.lighting.hue","condition4":"","enabled":"true"}', '2015-05-03 08:26:36'),
(538, '1', 'if i Get Sms then Notify Me', '{"action1":"Get Sms","action2":"Notify Me","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-03 08:37:06'),
(539, '1', 'if i Get Call From then Open App', '{"action1":"Get Call From","action2":"Open App","condition1":"","condition2":"","condition3":"com.android.mms","condition4":"","enabled":"true"}', '2015-05-03 08:44:59'),
(540, '1', 'if i Get Call From then Remiend Me To', '{"action1":"Get Call From","action2":"Remiend Me To","condition1":"","condition2":"","condition3":"call Amarillo Tech net back ","condition4":"","enabled":"true"}', '2015-05-03 09:05:30'),
(541, '1', 'if i Get Sms From then Open App', '{"action1":"Get Sms From","action2":"Open App","condition1":"","condition2":"","condition3":"com.amazon.dee.app","condition4":"","enabled":"true"}', '2015-05-03 09:14:10'),
(542, '1', 'if i Get Sms From then Open Notifications', '{"action1":"Get Sms From","action2":"Open Notifications","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-03 09:21:01'),
(543, '1', 'if i Screen Turn On then Remiend Me To', '{"action1":"Screen Turn On","action2":"Remiend Me To","condition1":"","condition2":"","condition3":"Hello Dave","condition4":"","enabled":"true"}', '2015-05-04 05:23:05'),
(544, '1', 'if i Get Sms From then Vibrate', '{"action1":"Get Sms From","action2":"Vibrate","condition1":"()-","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-04 05:25:44'),
(545, '1', 'if i Connect to Specific Bluetooth then Set Brightness To', '{"action1":"Connect to Specific Bluetooth","action2":"Set Brightness To","condition1":"k","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-04 05:33:39'),
(546, '1', 'if i DisConnect from Specific Wifi then Turn On Bluetooth', '{"action1":"DisConnect from Specific Wifi","action2":"Turn On Bluetooth","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-07 06:13:55'),
(547, '1', 'if i Bluetooth Connected then Turn Off Wifi', '{"action1":"Bluetooth Connected","action2":"Turn Off Wifi","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-07 06:17:47'),
(548, '1', 'if i Bluetooth DisConnected then Turn Off Bluetooth', '{"action1":"Bluetooth DisConnected","action2":"Turn Off Bluetooth","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-07 09:12:28'),
(549, '1', 'if i Charger Connected then Turn On Bluetooth', '{"action1":"Charger Connected","action2":"Turn On Bluetooth","condition1":"","condition2":"","condition3":"","condition4":"","enabled":"true"}', '2015-05-07 09:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gcmid` text NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `gcmid`) VALUES
('tps', 'tej@ymail.com', '9860637720', ''),
('tps', 'tejpratap36@gmail.com', '789456123', ''),
('astar', 'tejpratap46@gmail.com', '789456123', ''),
('astar', 'tejpratap66@gmail.com', '789456123', ''),
('tej pratap', 'tejpratapsingh', '9860637720', ''),
('Ray A', 'radkins2631@hotmail.com', '11435s2631', ''),
('T Singh', 'tejprataps@ymail.com', '9860637720', ''),
('hung', 'hungpham_hp@hotmail.com', 'ifiaccount', ''),
('Sergio Ortiz', 'sergio.ortiz.delatorre@gmail.com', 'Stknws34', ''),
('Tpscorp', 'tpscorp@gmail.com', '9860637720', 'APA91bEH8rOzHC02x5J7NKgkDvN2IV6WWpr0XpJDlxQKKdVsy5btJJZZ8oAehuKzgfRKUcILN18s6HCFED1SM8UjapMUy61cZiT5xA0pS9-vYA7WgWR6Q7XKUYK1rklxjZq8ftHhya0v0JHCUwX5PLioUZHZ-Zn90w'),
('masanobu_manabe', 'masanobu.manabe@gmail.com', '661221', ''),
('Rose', 'rose.c.moran@live.co.uk', 'Constance', ''),
('fpocreaux ', 'fpocreaux@gmail.com', 'mind4eyes2', ''),
('aam', 'mslp72@gmail.com', 'mierda01', ''),
('lauraporch54', 'w.porch@comcast.net', '1poncho1', ''),
('Leann White', 'leannwhitesi@yahoo.com', 'kady05', ''),
('David Vessels ', 'davidvessels@gmail.com', 'fev197045', 'APA91bFxeQdWhODanT6kVO5BqoeCjL269qYdJg4wH0c95vnWM1p0AmN3TpN2x0Zl1luob3U1ujPUP14NkLb0qNthRhPwWYmQa5UdEMm9kEFZ6qzyVBSHN6tdjECQCfEgnWUrwacyrTyvOIBItZzjitALWB8h8c2kXw'),
('taylomw', 'taylorjrs@cableone.net', 'Col78kuy', ''),
('agordon16', 'gordonamrit@gmail.com', 'HippiE12!', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
