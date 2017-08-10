-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 11:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `descreption_id` int(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) DEFAULT NULL,
  `actor1` varchar(50) DEFAULT NULL,
  `actor2` varchar(50) DEFAULT NULL,
  `actor3` varchar(50) DEFAULT NULL,
  `actor4` varchar(50) DEFAULT NULL,
  `duration` time DEFAULT NULL,
  PRIMARY KEY (`descreption_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`descreption_id`, `description`, `actor1`, `actor2`, `actor3`, `actor4`, `duration`) VALUES
(1, ' P. K. is a comedy of ideas about a stranger in the city, who asks questions that no one has asked before. They are innocent, child-like questions, but they bring about catastrophic answers. People who are set in their ways for generations, are forced to reappraise their world when they see it from PK''s innocent eyes. In the process PK makes loyal friends and powerful foes. Mends broken lives and angers the establishment. P. K.''s childlike curiosity transforms into a spiritual odyssey for him and millions of others. The film is an ambitious and uniquely original exploration of complex philosophies. It is also a simple and humane tale of love, laughter and letting-go. Finally, it is a moving saga about a friendship between strangers from worlds apart. ', 'Aamir Khan', 'Anushka Sharma', 'Sanjay Dutt', 'ShushantSingh rajput', '03:00:00'),
(2, ' Sairat is a love story, as advertised. Aarchi , a rich upper class girl falls for her classmate Parshya , a poor but smart boy from the lower social strata. The magic happens, and they start seeing each other. Secretly at first, but they get bolder with passing time. The problem is that Aarchi is not just from the upper class, her father is a powerful politician, and her brother Prince is following in on his footsteps. The entire affair is a recipe for trouble, and as expected, trouble arrives. With the help of Parshya''s friends, Baalya and Salya, they decide to make a run for it, but fate has other plans. ', 'Rinku Rajgaru', 'Akash Thosar', 'NULL', 'NULL', '02:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `name`) VALUES
(1, 'Western'),
(2, 'South & Central'),
(3, 'Harbour');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `descrip_id` int(10) NOT NULL,
  `language` varchar(10) NOT NULL,
  `certificate` varchar(5) NOT NULL,
  `images` varchar(200) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `name`, `descrip_id`, `language`, `certificate`, `images`) VALUES
(1, 'PK', 1, 'Hindi', 'U/A', 'http://lawnn.com/wp-content/uploads/2015/05/Pk-Movie-HD-wallpapers-hd.jpg'),
(2, 'Sairat', 2, 'Marathi', 'U/A', 'http://www.countercurrents.org/Sairat-Movie.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies_theatre_time_available`
--

CREATE TABLE IF NOT EXISTS `movies_theatre_time_available` (
  `movies_id` int(10) NOT NULL,
  `theatre_id` int(10) NOT NULL,
  `time_id` int(10) NOT NULL,
  `total_seats` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies_theatre_time_available`
--

INSERT INTO `movies_theatre_time_available` (`movies_id`, `theatre_id`, `time_id`, `total_seats`, `available_seats`) VALUES
(1, 1, 1, 60, 30),
(1, 1, 2, 60, 0),
(1, 1, 3, 60, 60),
(1, 1, 4, 60, 60),
(1, 1, 5, 60, 56),
(1, 2, 1, 60, 60),
(1, 2, 2, 60, 40),
(1, 2, 3, 60, 50),
(2, 1, 3, 60, 60),
(2, 1, 1, 60, 56);

-- --------------------------------------------------------

--
-- Table structure for table `movies_theatre_time_seats_ass`
--

CREATE TABLE IF NOT EXISTS `movies_theatre_time_seats_ass` (
  `movies_id` int(10) NOT NULL,
  `theatre_id` int(10) NOT NULL,
  `time_id` int(10) NOT NULL,
  `seats_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movie_theatre_time_assoc`
--

CREATE TABLE IF NOT EXISTS `movie_theatre_time_assoc` (
  `movie_id` int(10) NOT NULL,
  `theatre_id` int(10) NOT NULL,
  `time_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_theatre_time_assoc`
--

INSERT INTO `movie_theatre_time_assoc` (`movie_id`, `theatre_id`, `time_id`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 1, 3),
(1, 1, 4),
(1, 1, 5),
(1, 2, 1),
(1, 2, 2),
(1, 2, 3),
(2, 1, 3),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `theatre_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `seat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE IF NOT EXISTS `seats` (
  `seat_id` int(10) NOT NULL AUTO_INCREMENT,
  `row` varchar(1) NOT NULL,
  `column` int(1) NOT NULL,
  PRIMARY KEY (`seat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE IF NOT EXISTS `theatres` (
  `theatre_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `location_id` int(10) NOT NULL,
  PRIMARY KEY (`theatre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `theatres`
--

INSERT INTO `theatres` (`theatre_id`, `name`, `address`, `location_id`) VALUES
(1, 'Cinepolis', 'Cinepolis Andheri, Level 4, Plot No 844/4, Shah Indl. Estate, Opp New Link Road, Andheri (W), Mumbai, Maharashtra 400053', 1),
(2, 'Fun Cinemas', 'Rd Number 5, Basant Garden, Chembur East, Mumbai, Maharashtra 400071', 3);

-- --------------------------------------------------------

--
-- Table structure for table `theatre_movie_ass`
--

CREATE TABLE IF NOT EXISTS `theatre_movie_ass` (
  `theatre_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `screen_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre_movie_ass`
--

INSERT INTO `theatre_movie_ass` (`theatre_id`, `movie_id`, `screen_id`) VALUES
(1, 1, 1),
(1, 2, 2),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `time_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` time NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `name`) VALUES
(1, '09:30:00'),
(2, '12:30:00'),
(3, '15:30:00'),
(4, '18:30:00'),
(5, '21:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(20) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `username`, `userpassword`) VALUES
(1, 'Omkar', 'Parikh', 'omkarkadu3@gmail.com', 'omkar12345'),
(2, 'Deep', 'Mehta', 'deep.mehta174@gmail.com', 'deep12345'),
(3, 'Baba', 'Jha', 'iamdheerajjha@gmail.com', 'dheeraj12345'),
(4, 'John', 'Britto', 'johnbritto@gmail.com', 'john12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
