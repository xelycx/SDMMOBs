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

-- dump comments

insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (1, 1, 'in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget', '2020-03-30 17:33:24', 'user8');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (2, 2, 'aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio', '2020-02-12 02:49:09', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (3, 3, 'morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis', '2020-07-15 00:36:29', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (4, 4, 'mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh', '2020-10-18 15:10:35', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (5, 5, 'tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in', '2020-08-06 05:59:30', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (6, 6, 'orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt', '2020-08-16 21:09:17', 'user1');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (7, 7, 'phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu mi', '2020-02-12 03:48:36', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (8, 8, 'enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus', '2019-11-19 18:06:20', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (9, 9, 'pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris', '2020-02-01 22:59:28', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (10, 10, 'aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper', '2020-01-13 11:41:55', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (11, 11, 'ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis', '2020-04-13 00:37:42', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (12, 12, 'donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et', '2020-04-13 02:48:35', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (13, 13, 'ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin', '2020-08-09 08:20:13', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (14, 14, 'non mi integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus', '2020-04-17 19:28:46', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (15, 15, 'curabitur at ipsum ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero', '2020-03-28 01:01:13', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (16, 16, 'justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum', '2019-11-27 19:29:58', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (17, 17, 'in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum nullam', '2020-06-28 16:29:47', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (18, 18, 'blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit', '2020-09-02 09:15:29', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (19, 19, 'pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum', '2020-10-16 14:52:42', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (20, 20, 'suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis', '2020-09-16 20:20:32', 'user1');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (21, 21, 'dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus', '2020-04-22 03:48:17', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (22, 22, 'pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum', '2019-11-30 07:59:46', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (23, 23, 'sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget', '2020-10-06 03:21:20', 'user1');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (24, 24, 'fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa', '2020-01-21 18:36:59', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (25, 25, 'ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed', '2019-12-04 14:33:59', 'user1');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (26, 26, 'diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non', '2020-09-23 08:45:48', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (27, 27, 'nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique tortor eu pede', '2020-02-11 13:18:19', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (28, 28, 'phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis', '2020-11-03 05:12:28', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (29, 29, 'in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a', '2019-11-17 14:43:08', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (30, 30, 'ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu', '2019-12-27 23:04:00', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (31, 31, 'sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris', '2020-03-14 13:43:11', 'user8');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (32, 32, 'praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo', '2020-02-16 09:32:09', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (33, 33, 'leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus vivamus in felis eu sapien cursus vestibulum proin eu', '2020-04-30 03:17:44', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (34, 34, 'habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum', '2020-02-26 21:08:05', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (35, 35, 'ac tellus semper interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique', '2020-04-22 02:20:19', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (36, 36, 'non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis', '2020-07-09 17:10:15', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (37, 37, 'nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut', '2020-09-09 05:01:53', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (38, 38, 'luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique', '2020-05-23 01:33:46', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (39, 39, 'erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio', '2020-07-24 08:59:47', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (40, 40, 'magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida', '2020-10-13 15:19:17', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (41, 41, 'sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae quam', '2020-06-24 06:41:45', 'user0');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (42, 42, 'ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed', '2020-09-05 21:16:13', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (43, 43, 'eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis', '2020-02-16 12:28:35', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (44, 44, 'in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis', '2020-10-14 03:36:14', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (45, 45, 'ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget', '2020-01-10 21:14:57', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (46, 46, 'venenatis turpis enim blandit mi in porttitor pede justo eu massa donec dapibus duis at velit eu est congue elementum in hac habitasse', '2020-03-06 23:51:38', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (47, 47, 'in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis', '2020-05-22 20:01:51', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (48, 48, 'purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus', '2020-11-08 11:02:15', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (49, 49, 'aliquam convallis nunc proin at turpis a pede posuere nonummy integer non velit donec diam neque vestibulum eget vulputate ut ultrices vel', '2020-06-17 15:28:40', 'user0');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (50, 50, 'adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum primis', '2019-11-23 08:12:05', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (51, 51, 'in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat', '2020-10-15 10:06:24', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (52, 52, 'a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor', '2020-08-16 23:50:50', 'user8');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (53, 53, 'vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non', '2020-07-10 03:14:47', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (54, 54, 'in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque', '2020-10-24 01:31:44', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (55, 55, 'nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac', '2020-07-18 20:10:19', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (56, 56, 'quis turpis sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor convallis nulla neque libero', '2019-12-09 14:12:50', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (57, 57, 'enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper', '2020-07-15 12:04:47', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (58, 58, 'duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce', '2019-12-11 01:36:46', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (59, 59, 'integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id', '2020-03-16 21:55:22', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (60, 60, 'vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus', '2020-05-17 05:47:22', 'user8');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (61, 61, 'eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu', '2020-10-15 13:23:20', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (62, 62, 'quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo', '2020-03-16 13:29:21', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (63, 63, 'nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis', '2020-05-29 08:33:57', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (64, 64, 'donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est lacinia nisi venenatis tristique fusce congue diam', '2020-03-02 11:57:46', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (65, 65, 'velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc', '2020-03-18 20:36:11', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (66, 66, 'nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti', '2020-03-18 10:55:48', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (67, 67, 'erat vestibulum sed magna at nunc commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel', '2020-01-08 10:16:54', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (68, 68, 'eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat', '2020-07-16 06:25:57', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (69, 69, 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin', '2020-06-25 16:40:19', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (70, 70, 'lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non sodales', '2020-11-11 01:00:02', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (71, 71, 'at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget', '2020-06-11 15:57:31', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (72, 72, 'dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus', '2020-06-05 03:20:31', 'user0');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (73, 73, 'sit amet justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate justo in', '2020-05-17 02:09:49', 'user8');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (74, 74, 'felis eu sapien cursus vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam', '2020-03-09 15:54:17', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (75, 75, 'nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a', '2020-10-17 23:23:18', 'user1');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (76, 76, 'consequat lectus in est risus auctor sed tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl', '2020-08-30 20:59:13', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (77, 77, 'nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam fringilla rhoncus mauris', '2020-08-12 04:58:08', 'user0');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (78, 78, 'non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque', '2020-05-04 07:09:50', 'user5');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (79, 79, 'lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis', '2020-04-20 21:30:52', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (80, 80, 'ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie', '2020-06-24 05:50:33', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (81, 81, 'vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non', '2020-08-09 11:27:04', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (82, 82, 'nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id nulla ultrices aliquet maecenas', '2020-03-04 01:39:59', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (83, 83, 'nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis', '2020-06-08 01:04:29', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (84, 84, 'interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit at vulputate vitae', '2020-03-30 04:33:21', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (85, 85, 'dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia', '2020-01-27 15:07:46', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (86, 86, 'dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id', '2020-08-05 21:38:48', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (87, 87, 'augue vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin', '2020-08-12 06:29:46', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (88, 88, 'praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras', '2020-05-14 00:33:12', 'user2');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (89, 89, 'vitae nisi nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue a suscipit nulla', '2020-10-25 07:02:26', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (90, 90, 'eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis', '2020-09-09 06:47:52', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (91, 91, 'orci nullam molestie nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum', '2020-06-11 00:01:21', 'user8');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (92, 92, 'gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras mi', '2020-09-15 08:55:35', 'user1');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (93, 93, 'mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in', '2020-08-20 23:39:37', 'user7');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (94, 94, 'sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl', '2020-10-13 19:59:25', 'user3');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (95, 95, 'ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet eros suspendisse accumsan tortor quis turpis sed ante vivamus tortor', '2019-12-14 21:40:09', 'user1');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (96, 96, 'erat curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum', '2020-03-17 11:27:48', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (97, 97, 'non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum', '2020-05-18 12:33:09', 'user4');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (98, 98, 'morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede', '2020-04-09 00:49:25', 'user9');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (99, 99, 'viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero', '2020-02-19 06:17:38', 'user6');
insert into comments (comment_id, bug_id, comment, comment_datetime, user_id) values (100, 100, 'dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis', '2020-06-27 18:43:00', 'user7');










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
