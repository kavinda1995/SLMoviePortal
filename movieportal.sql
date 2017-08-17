-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 03:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl`
--

CREATE TABLE `acl` (
  `username` varchar(20) NOT NULL,
  `movie_name` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acl`
--

INSERT INTO `acl` (`username`, `movie_name`) VALUES
('goiya', 'Star Wars'),
('riti', 'Avengers'),
('riti', 'Star Wars');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `contactNo` int(11) NOT NULL,
  `NIC` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `name`, `email`, `contactNo`, `NIC`) VALUES
('saliya', 'xyz', 'saliyadagenius@gmail.com', 3536656, '4764646'),
('goiya', 'kavinda', 'saliyadagenius@gmail.com', 3453, '12143345'),
('riti', 'sandali', 'sandali@gmail.com', 4564356, '941233333V'),
('xxx', 'xxx', 'xxx@gmail.com', 54633456, '321343'),
('baka', 'baka', 'baka@gmail.com', 23424234, '2425254'),
('admin', 'admin', 'admin@slmovieportal.lk', 712142329, '953423472V');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(10) NOT NULL,
  `movie_name` varchar(40) NOT NULL,
  `movie_year` int(4) NOT NULL,
  `movie_genre` varchar(10) NOT NULL,
  `movie_director` varchar(40) NOT NULL,
  `movie_desc` text NOT NULL,
  `movie_image` varchar(500) NOT NULL,
  `browse_image` varchar(500) NOT NULL,
  `embed_link` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_year`, `movie_genre`, `movie_director`, `movie_desc`, `movie_image`, `browse_image`, `embed_link`) VALUES
(1, 'Star Wars', 1999, 'Fiction', 'Mr. Bleh', 'kbgoebg ioegn ioeng ike ngiengio enig eign eikogn kosng ioesngiesbug hseignsoei gnseiogh nseiogn seoig nelsgnesl gmselk gseg seg seg esg esg seg aehgrsh arh rzhg ers.\r\n\r\njkebgjsebhjkg neighoisejk ngjkieshg jksebgui bsekjgbh eskg hbsejkghb sekgh nseklgn elg we', 'images/movie_thumb/starwars.jpg', 'images/browseimg/starwars.jpg', '<iframe width=\'480\' height=\'320\' src=\'https://www.youtube.com/embed/Wji-BZ0oCwg\' frameborder=\'0\'></iframe>'),
(2, 'Avengers', 2011, 'Action', 'Mr. Stark', 'jgfjeg ibehgjk ebjghebjgesjkg hesiog esk geksgh bsejhg biehg nesjkhgn esjkgh nbsejkhbg ejk,dgh bjwekbgvksd', 'images/movie_thumb/avengers.jpg', 'images/browseimg/avengers.jpg', ''),
(12, 'Big Hero 6', 2014, 'Animation', ' Don Hall, Chris Williams', ' bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', 'images/movie_thumb/bighero.jpg', 'images/browseimg/bighero.jpg', '<iframe width=\'480\' height=\'320\' src=\'https://www.youtube.com/embed/z3biFxZIJOQ\' frameborder=\'0\'></iframe>'),
(11, 'Fast and Furious 8', 2017, 'Action', 'F. Gary Gray', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '', '', ''),
(13, 'Spider Man', 2002, 'Action', 'Sam Raimi', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla  ', '', '', ''),
(14, 'Hobbit', 2010, 'Action', 'hsehseh', 'bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla ', '', '', ''),
(15, 'Batman', 2010, 'Action', 'xxxxxx', 'assfafafdsf', '', '', ''),
(16, 'Superman', 2015, 'Romance', 'adfsadfsaf', 'sadafdadsfsfdSF', '', '', ''),
(20, 'Desert New', 2015, 'Action', 'shzedh', 'hzsrh', 'images/movie_thumb/Chrysanthemum.jpg', 'images/browseimg/Desert.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('goiya', '202cb962ac59075b964b07152d234b70'),
('riti', '202cb962ac59075b964b07152d234b70'),
('saliya', '81dc9bdb52d04dc20036dbd8313ed055'),
('xxx', '202cb962ac59075b964b07152d234b70'),
('admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acl`
--
ALTER TABLE `acl`
  ADD PRIMARY KEY (`username`,`movie_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
