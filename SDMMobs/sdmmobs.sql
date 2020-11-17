-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 10:11 AM
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
-- Table structure for table `bugreport`
--

CREATE TABLE `bugreport` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `assignee` int(5) NOT NULL,
  `createDate` datetime(6) NOT NULL,
  `closeDate` datetime(6) DEFAULT NULL,
  `severityLevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bugreport`
--

INSERT INTO `bugreport` (`id`, `title`, `description`, `status`, `assignee`, `createDate`, `closeDate`, `severityLevel`) VALUES
(1, 'test title', 'test description. dfgjdkjkdkj', 'pending', 1, '2020-11-16 13:57:06.000000', '2020-11-24 13:57:06.000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userRole` varchar(30) NOT NULL,
  `userStatus` varchar(30) NOT NULL,
  `areaOfExpertise` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Dumping data for table `user`
--


insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (1, 'bugreporter', 'bugreporter1', 'mcunningham0@twitter.com', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (2, 'triager', 'triager2', 'jtooley1@bluehost.com', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (3, 'developer', 'developer3', 'gduncan2@webeden.co.uk', 'developer', 'Available', 'area 2');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (4, 'reviewer', 'reviewer4', 'pfurneaux3@blogs.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (5, 'bugreporter', 'bugreporter5', 'udinapoli4@wp.com', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (6, 'triager', 'triager6', 'rkharchinski5@behance.net', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (7, 'developer', 'developer7', 'qstarcks6@springer.com', 'developer', 'Available', 'area 1');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (8, 'reviewer', 'reviewer8', 'akeems7@paypal.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (9, 'bugreporter', 'bugreporter9', 'igayler8@google.com', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (10, 'triager', 'triager10', 'dchurm9@ibm.com', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (11, 'developer', 'developer11', 'ucofaxa@friendfeed.com', 'developer', 'NotAvailable', 'area 1');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (12, 'reviewer', 'reviewer12', 'mhelianb@mapquest.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (13, 'bugreporter', 'bugreporter13', 'rbartalinc@google.com.hk', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (14, 'triager', 'triager14', 'ifinnd@abc.net.au', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (15, 'developer', 'developer15', 'kgrigsone@merriam-webster.com', 'developer', 'NotAvailable', 'area 2');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (16, 'reviewer', 'reviewer16', 'mcoopef@microsoft.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (17, 'bugreporter', 'bugreporter17', 'veccottg@earthlink.net', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (18, 'triager', 'triager18', 'hwindebankh@msu.edu', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (19, 'developer', 'developer19', 'ppietruszkai@sakura.ne.jp', 'developer', 'Available', 'area 1');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (20, 'reviewer', 'reviewer20', 'tstigellj@mtv.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (21, 'bugreporter', 'bugreporter21', 'erowlinsonk@google.co.jp', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (22, 'triager', 'triager22', 'eredmondl@wikispaces.com', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (23, 'developer', 'developer23', 'noldenm@google.com', 'developer', 'NotAvailable', 'area 2');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (24, 'reviewer', 'reviewer24', 'mbricklebankn@nationalgeographic.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (25, 'bugreporter', 'bugreporter25', 'lleahairo@mtv.com', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (26, 'triager', 'triager26', 'mbrettonerp@ask.com', 'triager', 'NotAvailable', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (27, 'developer', 'developer27', 'ekennonq@dagondesign.com', 'developer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (28, 'reviewer', 'reviewer28', 'aroundsr@webmd.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (29, 'bugreporter', 'bugreporter29', 'aogeaneys@amazon.co.uk', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (30, 'triager', 'triager30', 'ctoquett@scientificamerican.com', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (31, 'developer', 'developer31', 'fdemogeotu@merriam-webster.com', 'developer', 'Available', 'area 1');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (32, 'reviewer', 'reviewer32', 'hjolleyv@wordpress.org', 'reviewer', 'Available', 'frontend');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (33, 'bugreporter', 'bugreporter33', 'rmariyushkinw@cam.ac.uk', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (34, 'triager', 'triager34', 'skurtisx@plala.or.jp', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (35, 'developer', 'developer35', 'wkuberay@si.edu', 'developer', 'NotAvailable', 'backend');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (36, 'reviewer', 'reviewer36', 'dricciardiz@homestead.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (37, 'bugreporter', 'bugreporter37', 'ghayhoe10@moonfruit.com', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (38, 'triager', 'triager38', 'tallabarton11@4shared.com', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (39, 'developer', 'developer39', 'idowner12@economist.com', 'developer', 'Available', 'area 2');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (40, 'reviewer', 'reviewer40', 'rrobbel13@etsy.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (41, 'bugreporter', 'bugreporter41', 'xmatysik14@t.co', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (42, 'triager', 'triager42', 'rbellefant15@squidoo.com', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (43, 'developer', 'developer43', 'mmarciek16@webnode.com', 'developer', 'Available', 'backend');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (44, 'reviewer', 'reviewer44', 'hbuckwell17@yahoo.com', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (45, 'bugreporter', 'bugreporter45', 'sraden18@mapy.cz', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (46, 'triager', 'triager46', 'hdangerfield19@abc.net.au', 'triager', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (47, 'developer', 'developer47', 'csperwell1a@xrea.com', 'developer', 'Available', 'area 1');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (48, 'reviewer', 'reviewer48', 'bwhalley1b@jugem.jp', 'reviewer', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (49, 'bugreporter', 'bugreporter49', 'tbeetles1c@skype.com', 'bugreporter', 'Available', 'NA');
insert into user (userID, userRole, userName, email, password, userStatus, areaOfExpertise) values (50, 'triager', 'triager50', 'bgymlett1d@nba.com', 'triager', 'Available', 'NA');

-- --------------------------------------------------------





--
-- Indexes for dumped tables
--

--
-- Indexes for table `bugreport`
--
ALTER TABLE `bugreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bugreport`
--
ALTER TABLE `bugreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
