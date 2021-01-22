-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2021 at 10:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preciousmemoriesandevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_lists`
--

DROP TABLE IF EXISTS `contact_lists`;
CREATE TABLE IF NOT EXISTS `contact_lists` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contents` text NOT NULL,
  `sent_from` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_lists`
--

INSERT INTO `contact_lists` (`id`, `name`, `contents`, `sent_from`) VALUES
(1, 'main', 'martin.r.donk@gmail.com, jiggzson@gmail.com', 'request@preciouosmemoriesandevents.com');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

DROP TABLE IF EXISTS `keywords`;
CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contents` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `name`, `contents`) VALUES
(1, 'main', 'miami, events, precious, memories, parties, catering, children, fort, lauderdale, pembroke, pines, cake, and, stuff');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `section1` text NOT NULL,
  `section2` text,
  `section3` text,
  `section4` text,
  `section5` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `heading`, `name`, `section1`, `section2`, `section3`, `section4`, `section5`) VALUES
(1, 'Home', 'home', '<p><span style=\"color: rgb(0, 0, 0);\">With our incredibly high standards and creativity, Precious Memories and Events Inc. will exceed your expectations and create the most memorable experience for your event. We will translate your goals and objectives into a stunning and one of a kind soiree. We work with our clients as a partner to create a unique event that will meet their expectations. Precious Memories and Events Inc. offers a wide variety of event planning services, and we are dedicated to providing our clients with a seamless and enjoyable experience from start to finish. Our event planning services are available to all clients needing guidance throughout their event planning process. Whether you are planning a small family gathering, a baby shower, or a more elaborate event, Precious Memories and Events Inc. will work with you to create a unique, personalized, and stylish affair. We look forward to learning more about you and your vision for your next event!</span></p>', '', '', '', ''),
(2, 'About Us', 'about', '<p>My love for event planning started when my son was born, and I started planning his birthday parties. I then branched out to planning events for friends and families. I always loved a great party and wanted to ensure that every detail was planned meticulously. I really loved planning everyone’s special day and enjoyed it when I saw the smile on their face. I take great pride in every detail of my work, from the moment I meet with the client to beyond the event completion. As an events planner, I can hone in on my passion for helping clients create truly fantastic experiences for their guests. It makes me happy knowing that my services made my clients’ day better.</p>', '<p>My love for event planning started in high school, being apart of my schools student government meant that I was in charge of planning events like Homecoming, pep rallies, proms, and tons of others, I was always the go to person when something needed a creative touch, and on the other hand no matter what the problem may have been, I would fix it with a smile. I am passionate about building relationships and connecting with people, making clients happy is always going to be the goal. I currently own and operate a customization business and I am looking forward to expanding my portfolio. Working alongside Cheryl will be a pleasure as I know she has the knowledge and the passion to enjoy event planning and making clients happy.</p>', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `site_configs`
--

DROP TABLE IF EXISTS `site_configs`;
CREATE TABLE IF NOT EXISTS `site_configs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_configs`
--

INSERT INTO `site_configs` (`id`, `name`, `site_title`) VALUES
(1, 'main', 'Precious Memories & Events');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'cheryl', '5498ef75009110279116823aba29d3529cd51897863fca8443231185107a2143'),
(2, 'alexis', '0e07cf830957701d43c183f1515f63e6b68027e528f43ef52b1527a520ddec82'),
(6, 't', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
