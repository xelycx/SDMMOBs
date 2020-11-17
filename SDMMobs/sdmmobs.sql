-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 06:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdmmobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bugreports`
--

CREATE TABLE `bugreports` (
  `bug_id` int(11) NOT NULL,
  `bug_reporter` varchar(50) DEFAULT NULL,
  `bug_triager` varchar(50) DEFAULT NULL,
  `bug_developer` varchar(50) DEFAULT NULL,
  `bug_reviewer` varchar(50) DEFAULT NULL,
  `bug_title` varchar(100) NOT NULL,
  `bug_description` varchar(500) NOT NULL,
  `bug_status` varchar(50) NOT NULL,
  `bug_open_date` datetime NOT NULL,
  `bug_close_date` datetime DEFAULT NULL,
  `bug_severity_lvl` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bugreports`
--

INSERT INTO `bugreports` (`bug_id`, `bug_reporter`, `bug_triager`, `bug_developer`, `bug_reviewer`, `bug_title`, `bug_description`, `bug_status`, `bug_open_date`, `bug_close_date`, `bug_severity_lvl`) VALUES
(1, 'BR1', 'T1', 'D1', 'R1', 'IOS error', 'ios error, cant display the home page', 'open', '2020-11-26 00:54:49', '2020-11-27 02:14:00', 3);




-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `bug_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `comment_datetime` datetime DEFAULT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `user_status` varchar(100) DEFAULT NULL,
  `area_of_expertise` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--


INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `user_role`, `user_status`, `area_of_expertise`) VALUES
(1, 'bugreporter1', 'mcunningham0@twitter.com', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(2, 'triager2', 'jtooley1@bluehost.com', 'triager', 'triager', 'Available', 'NA'),
(3, 'developer3', 'gduncan2@webeden.co.uk', 'developer', 'developer', 'Available', 'area 2'),
(4, 'reviewer4', 'pfurneaux3@blogs.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(5, 'bugreporter5', 'udinapoli4@wp.com', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(6, 'triager6', 'rkharchinski5@behance.net', 'triager', 'triager', 'Available', 'NA'),
(7, 'developer7', 'qstarcks6@springer.com', 'developer', 'developer', 'Available', 'area 1'),
(8, 'reviewer8', 'akeems7@paypal.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(9, 'bugreporter9', 'igayler8@google.com', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(10, 'triager10', 'dchurm9@ibm.com', 'triager', 'triager', 'Available', 'NA'),
(11, 'developer11', 'ucofaxa@friendfeed.com', 'developer', 'developer', 'NotAvailable', 'area 1'),
(12, 'reviewer12', 'mhelianb@mapquest.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(13, 'bugreporter13', 'rbartalinc@google.com.hk', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(14, 'triager14', 'ifinnd@abc.net.au', 'triager', 'triager', 'Available', 'NA'),
(15, 'developer15', 'kgrigsone@merriam-webster.com', 'developer', 'developer', 'NotAvailable', 'area 2'),
(16, 'reviewer16', 'mcoopef@microsoft.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(17, 'bugreporter17', 'veccottg@earthlink.net', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(18, 'triager18', 'hwindebankh@msu.edu', 'triager', 'triager', 'Available', 'NA'),
(19, 'developer19', 'ppietruszkai@sakura.ne.jp', 'developer', 'developer', 'Available', 'area 1'),
(20, 'reviewer20', 'tstigellj@mtv.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(21, 'bugreporter21', 'erowlinsonk@google.co.jp', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(22, 'triager22', 'eredmondl@wikispaces.com', 'triager', 'triager', 'Available', 'NA'),
(23, 'developer23', 'noldenm@google.com', 'developer', 'developer', 'NotAvailable', 'area 2'),
(24, 'reviewer24', 'mbricklebankn@nationalgeographic.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(25, 'bugreporter25', 'lleahairo@mtv.com', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(26, 'triager26', 'mbrettonerp@ask.com', 'triager', 'triager', 'NotAvailable', 'NA'),
(27, 'developer27', 'ekennonq@dagondesign.com', 'developer', 'developer', 'Available', 'NA'),
(28, 'reviewer28', 'aroundsr@webmd.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(29, 'bugreporter29', 'aogeaneys@amazon.co.uk', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(30, 'triager30', 'ctoquett@scientificamerican.com', 'triager', 'triager', 'Available', 'NA'),
(31, 'developer31', 'fdemogeotu@merriam-webster.com', 'developer', 'developer', 'Available', 'area 1'),
(32, 'reviewer32', 'hjolleyv@wordpress.org', 'reviewer', 'reviewer', 'Available', 'frontend'),
(33, 'bugreporter33', 'rmariyushkinw@cam.ac.uk', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(34, 'triager34', 'skurtisx@plala.or.jp', 'triager', 'triager', 'Available', 'NA'),
(35, 'developer35', 'wkuberay@si.edu', 'developer', 'developer', 'NotAvailable', 'backend'),
(36, 'reviewer36', 'dricciardiz@homestead.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(37, 'bugreporter37', 'ghayhoe10@moonfruit.com', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(38, 'triager38', 'tallabarton11@4shared.com', 'triager', 'triager', 'Available', 'NA'),
(39, 'developer39', 'idowner12@economist.com', 'developer', 'developer', 'Available', 'area 2'),
(40, 'reviewer40', 'rrobbel13@etsy.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(41, 'bugreporter41', 'xmatysik14@t.co', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(42, 'triager42', 'rbellefant15@squidoo.com', 'triager', 'triager', 'Available', 'NA'),
(43, 'developer43', 'mmarciek16@webnode.com', 'developer', 'developer', 'Available', 'backend'),
(44, 'reviewer44', 'hbuckwell17@yahoo.com', 'reviewer', 'reviewer', 'Available', 'NA'),
(45, 'bugreporter45', 'sraden18@mapy.cz', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(46, 'triager46', 'hdangerfield19@abc.net.au', 'triager', 'triager', 'Available', 'NA'),
(47, 'developer47', 'csperwell1a@xrea.com', 'developer', 'developer', 'Available', 'area 1'),
(48, 'reviewer48', 'bwhalley1b@jugem.jp', 'reviewer', 'reviewer', 'Available', 'NA'),
(49, 'bugreporter49', 'tbeetles1c@skype.com', 'bugreporter', 'bugreporter', 'Available', 'NA'),
(50, 'triager50', 'bgymlett1d@nba.com', 'triager', 'triager', 'Available', 'NA');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugreports`
--
ALTER TABLE `bugreports`
  ADD PRIMARY KEY (`bug_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugreports`
--
ALTER TABLE `bugreports`
  MODIFY `bug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
