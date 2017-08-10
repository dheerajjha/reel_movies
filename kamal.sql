-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 18, 2017 at 04:36 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamal`
--

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `descreption_id` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `actor1` varchar(50) NOT NULL,
  `actor2` varchar(50) NOT NULL,
  `actor3` varchar(50) NOT NULL,
  `actor4` varchar(50) NOT NULL,
  `duration` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`descreption_id`, `description`, `actor1`, `actor2`, `actor3`, `actor4`, `duration`) VALUES
(1, ' P. K. is a comedy of ideas about a stranger in the city, who asks questions that no one has asked before. They are innocent, child-like questions, but they bring about catastrophic answers. People who are set in their ways for generations, are forced to reappraise their world when they see it from PK''s innocent eyes. In the process PK makes loyal friends and powerful foes. Mends broken lives and angers the establishment. P. K.''s childlike curiosity transforms into a spiritual odyssey for him and millions of others. The film is an ambitious and uniquely original exploration of complex philosophies. It is also a simple and humane tale of love, laughter and letting-go. Finally, it is a moving saga about a friendship between strangers from worlds apart. ', 'Aamir Khan', 'Anushka Sharma', 'Sanjay Dutt', 'ShushantSingh rajput', '03:00:00'),
(2, ' Sairat is a love story, as advertised. Aarchi , a rich upper class girl falls for her classmate Parshya , a poor but smart boy from the lower social strata. The magic happens, and they start seeing each other. Secretly at first, but they get bolder with passing time. The problem is that Aarchi is not just from the upper class, her father is a powerful politician, and her brother Prince is following in on his footsteps. The entire affair is a recipe for trouble, and as expected, trouble arrives. With the help of Parshya''s friends, Baalya and Salya, they decide to make a run for it, but fate has other plans. ', 'Rinku Rajgaru', 'Akash Thosar', '', '', '02:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(10) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

CREATE TABLE `movies` (
  `movie_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `descrip_id` int(10) NOT NULL,
  `language` varchar(10) NOT NULL,
  `certificate` varchar(5) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `name`, `descrip_id`, `language`, `certificate`, `images`) VALUES
(1, 'PK', 1, 'Hindi', 'U/A', 'http://lawnn.com/wp-content/uploads/2015/05/Pk-Movie-HD-wallpapers-hd.jpg'),
(2, 'Sairat', 2, 'Marathi', 'U/A', 'http://www.countercurrents.org/Sairat-Movie.jpg'),
(3, 'Ms Dhoni', 3, 'Hindi', 'U/A', 'http://topmovietalks.in/wp-content/uploads/2016/09/M-S-Dhoni-The-Untold-Story-Review-and-Rating-Story-Public-Talk-1st-Day-Collections.jpg'),
(4, 'Raaz Reboot', 4, 'Hindi', 'A', 'http://downloadming.tv/uploads/Raaz-Reboot-2016-1-300x300.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `movies_theatre_time_available`
--

CREATE TABLE `movies_theatre_time_available` (
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
(1, 1, 1, 60, 60),
(1, 1, 2, 60, 60),
(1, 1, 3, 60, 60),
(1, 1, 4, 60, 60),
(1, 1, 5, 60, 60),
(1, 2, 1, 60, 60),
(1, 2, 2, 60, 60),
(1, 2, 3, 60, 60),
(2, 1, 3, 60, 60),
(2, 1, 1, 60, 60),
(2, 2, 1, 60, 60),
(2, 3, 2, 60, 60),
(2, 3, 3, 60, 60),
(2, 5, 1, 60, 60),
(2, 5, 4, 60, 60),
(3, 1, 1, 60, 60),
(3, 1, 2, 60, 60),
(3, 2, 1, 60, 60),
(3, 2, 4, 60, 60),
(4, 1, 4, 60, 60),
(4, 1, 3, 60, 60),
(4, 2, 2, 60, 60),
(4, 2, 3, 60, 60),
(4, 6, 1, 60, 60),
(4, 6, 2, 60, 60),
(4, 6, 3, 60, 60),
(2, 1, 1, 60, 60),
(1, 3, 1, 60, 60),
(1, 3, 2, 60, 60),
(1, 3, 3, 60, 60),
(1, 3, 5, 60, 60),
(1, 6, 3, 60, 60),
(1, 6, 4, 60, 60),
(1, 6, 5, 60, 60),
(2, 4, 2, 60, 60),
(2, 4, 4, 60, 60),
(3, 3, 1, 60, 60),
(3, 3, 5, 60, 60),
(3, 4, 2, 60, 60),
(3, 4, 4, 60, 60),
(3, 4, 5, 60, 60),
(3, 5, 3, 60, 60),
(3, 5, 5, 60, 60),
(3, 6, 1, 60, 60),
(3, 6, 3, 60, 60),
(3, 6, 5, 60, 60),
(1, 4, 1, 60, 60),
(1, 4, 2, 60, 60),
(1, 4, 3, 60, 60),
(1, 4, 4, 60, 60),
(1, 4, 5, 60, 60);

-- --------------------------------------------------------

--
-- Table structure for table `movies_theatre_time_seats_ass`
--

CREATE TABLE `movies_theatre_time_seats_ass` (
  `movies_id` int(10) NOT NULL,
  `theatre_id` int(10) NOT NULL,
  `time_id` int(10) NOT NULL,
  `seats_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movie_theatre_time_assoc`
--

CREATE TABLE `movie_theatre_time_assoc` (
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
(2, 2, 1),
(2, 3, 2),
(2, 3, 3),
(2, 5, 1),
(2, 5, 4),
(3, 1, 1),
(3, 1, 2),
(4, 1, 4),
(4, 1, 3),
(4, 2, 2),
(4, 2, 3),
(4, 6, 1),
(4, 6, 2),
(4, 6, 3),
(2, 1, 1),
(1, 3, 1),
(1, 3, 2),
(1, 3, 3),
(1, 3, 5),
(1, 6, 3),
(1, 6, 4),
(1, 6, 5),
(2, 4, 2),
(2, 4, 4),
(3, 3, 1),
(3, 3, 5),
(3, 4, 2),
(3, 4, 4),
(3, 4, 5),
(3, 5, 3),
(3, 5, 5),
(3, 6, 1),
(3, 6, 3),
(3, 6, 5),
(1, 4, 1),
(1, 4, 2),
(1, 4, 3),
(1, 4, 4),
(1, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `theatre_id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `seat_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theatres`
--

CREATE TABLE `theatres` (
  `theatre_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `location_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatres`
--

INSERT INTO `theatres` (`theatre_id`, `name`, `address`, `location_id`) VALUES
(1, 'Cinepolis', 'Cinepolis Andheri, Level 4, Plot No 844/4, Shah Indl. Estate, Opp New Link Road, Andheri (W), Mumbai, Maharashtra 400053', 1),
(2, 'Fun Cinemas', 'Rd Number 5, Basant Garden, Chembur East, Mumbai, Maharashtra 400071', 3),
(3, 'Big Cinemas', 'Bhakti Park, Anik Wadala Link Road, Mumbai, Maharashtra 400037', 3),
(4, 'Gaiety Galaxy', ' Road No.30, TPS (3), Opposite Western Railway Colony, Bandra West, Mumbai, Maharashtra 400050', 1),
(5, 'Chitra Cinema', '198, Dr Baba Saheb Ambedkar Road, Opposite Dadar Gurudwara, Dadar East, Mumbai, Maharashtra 400014', 2),
(6, 'Metro Big cinema', ' M.G.Road, Dhobitalao Junction, Mumbai, Maharashtra 400020', 2);

-- --------------------------------------------------------

--
-- Table structure for table `theatre_movie_ass`
--

CREATE TABLE `theatre_movie_ass` (
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
(2, 1, 1),
(2, 2, 2),
(1, 3, 3),
(1, 4, 4),
(2, 4, 4),
(3, 3, 3),
(4, 1, 1),
(4, 2, 2),
(4, 3, 3),
(5, 2, 2),
(5, 3, 3),
(6, 1, 1),
(6, 4, 4),
(6, 3, 3),
(3, 2, 2),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(10) NOT NULL,
  `name` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `form_firstname` varchar(255) NOT NULL,
  `form_lastname` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `form_firstname`, `form_lastname`, `username`, `userpassword`) VALUES
(1, '', '', 'omkar', 'omkar12345'),
(2, '', '', 'deep', 'deep12345'),
(3, '', '', 'dheeraj', 'dheeraj12345'),
(4, '', '', 'john', 'john12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`descreption_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `theatres`
--
ALTER TABLE `theatres`
  ADD PRIMARY KEY (`theatre_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `descreption_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `theatres`
--
ALTER TABLE `theatres`
  MODIFY `theatre_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
