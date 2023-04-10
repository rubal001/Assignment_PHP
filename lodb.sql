-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2023 at 08:41 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `ccategory`
--

DROP TABLE IF EXISTS `ccategory`;
CREATE TABLE IF NOT EXISTS `ccategory` (
  `ccid` int(11) NOT NULL AUTO_INCREMENT,
  `ccategory` varchar(30) NOT NULL,
  PRIMARY KEY (`ccid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ccategory`
--

INSERT INTO `ccategory` (`ccid`, `ccategory`) VALUES
(2, 'SCIENCE'),
(3, 'LANGUAGE'),
(4, 'HEALTH'),
(5, 'HUMANITIES'),
(6, 'BUSINESS'),
(7, 'MATHS'),
(8, 'MARKETING '),
(9, 'LIFESTYLE');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `cid` int(14) NOT NULL AUTO_INCREMENT,
  `cname` varchar(200) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `ccat` varchar(100) NOT NULL,
  `tcat` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `img`, `ccat`, `tcat`, `description`, `addedon`) VALUES
(1, 'Cloud Computing Practitioner with AWS Academy Cloud Foundations', 'upload/b5.jpg', 'TECHNOLOGY', 'CERTIFICATE COURSES', '<p>Start your cloud computing career today</p>\r\n\r\n<p>On this microcredential, you&rsquo;ll develop the cloud skills you need to add value on the job and break into the cloud computing sector whilst earning academic credit from Coventry University, an Amazon Web Services (AWS) Academy member institution.</p>\r\n\r\n<p>Over 12 weeks, this introductory course provides a detailed overview of cloud concepts, AWS core services, security, architecture, pricing, and support.</p>\r\n', '2021-01-27 05:00:35'),
(4, 'Cyber Security Foundations: Start Building Your Career in Cyber Defense', 'upload/b3.jpg', 'TECHNOLOGY', 'MASTER DEGREE', '<p>Discover how to build cyber resilience in your organization</p>\r\n\r\n<p>Cyber security is one of the key challenges faced by organizations in the digital age. The estimated global cost of cyber attacks is predicted to rise as high as $10.5 trillion by 2025.</p>\r\n\r\n<p>Cyber resilience &mdash; the capacity to anticipate, respond, and recover from cyber attacks &mdash; is essential for modern organizations.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-01-27 05:14:34'),
(2, 'Decision Making: How to Choose the Right Problem to Solve', 'upload/b1.jpg', 'TECHNOLOGY', 'DIPLOMA COURSES', '<p>Learn how to get others on board with your decision-making and minimise risk</p>\r\n\r\n<p>On this course, you&rsquo;ll learn how to better solve simple problems and sharpen your decision-making process.</p>\r\n\r\n<p>You&rsquo;ll evaluate your existing problem-solving technique and build the skills to improve it.</p>\r\n\r\n<p>As you learn what transferable skills are required, you&rsquo;ll discover how to identify a problem, how to understand it and how to analyse the associated risks and benefits of various solutions.</p>\r\n\r\n<p>You&rsquo;ll also spend time producing a detailed plan to persuade others that your own solution is workable.</p>\r\n', '2021-01-27 05:03:10'),
(3, 'Data Visualisation with Python: Bokeh and Advanced Layouts', 'upload/b2.jpg', 'TECHNOLOGY', 'BACHULAR DEGREE', '<p>Learn how to use Bokeh in Python</p>\r\n\r\n<p>On the first week of the course, you&rsquo;ll explore the key functions of Bokeh and how it can be used to create interactive visualisations and dashboards.</p>\r\n\r\n<p>You&rsquo;ll weigh up the benefits of Bokeh compared to other data visualisation packages, and explore the concept of Glyphs within Python and how they can be customised.</p>\r\n', '2021-01-27 05:06:10'),
(5, 'Causes of Human Disease: Exploring Cancer and Genetic Disease', 'upload/b4.jpg', 'SCIENCE', 'CERTIFICATE COURSES', '<p>Understand the role of genes in cancer and genetic disease</p>\r\n\r\n<p>It&rsquo;s widely known that some diseases run in families. The discovery of the structure of DNA and the unravelling of the genetic code has led to a deeper understanding of such diseases. We now know more about the genetic basis of cancer and how cancer cells are formed and reproduce. On this course you&rsquo;ll explore the structure of DNA, its processes and learn how genetic disease results from DNA alterations. You&rsquo;ll look closely at the nature of these changes, causes and risk factors &ndash; this is vital in the case of cancer, as prevention has proved to be an effective way of managing this disease.</p>\r\n', '2021-01-27 05:19:09'),
(6, 'Introduction to Intercultural Studies: Defining the Concept of Culture', 'upload/b3.jpg', 'LANGUAGE', 'DIPLOMA COURSES', '<p>Expand your understanding of the concepts of &lsquo;culture&rsquo; and &lsquo;interculturality&rsquo;</p>\r\n\r\n<p>On this course, you&rsquo;ll explore some of the meanings associated with the term &lsquo;culture&rsquo; and examine their problematic nature. You&rsquo;ll understand the effects of the interaction between cultures, explore the notion of interculturality and problematise the way in which social interaction between people from different backgrounds has been considered.</p>\r\n\r\n<p>Through videos and articles, you&rsquo;ll also examine the theories that underpin intercultural interactions and broaden your understanding of culture and intercultural communication.</p>\r\n', '2021-01-27 05:20:40'),
(7, 'Causes of Human Disease: Understanding Cardiovascular Disease', 'upload/b3.jpg', 'HEALTH', 'BACHULAR DEGREE', '<p>Understand the causes and management of cardiovascular disease</p>\r\n\r\n<p>Cardiovascular diseases are the leading global cause of death. On this course, you&rsquo;ll learn how the cardiovascular system functions and understand common cardiovascular diseases like heart attack and stroke, as well as the risk factors associated with them. You&rsquo;ll also learn about blood pressure, blood sugar control and imbalances, and the role of these in diabetes and cardiovascular disease. You&rsquo;ll investigate socio-economic factors in the development of cardiovascular diseases, and current management and prevention strategies.</p>\r\n', '2021-01-27 05:23:22'),
(8, 'Understand Global Studies: International Relations and World Politics', 'upload/b5.jpg', 'HUMANITIES', 'MASTER DEGREE', '<p>Gain an understanding of foreign affairs, globalisation, and politics</p>\r\n\r\n<p>Globalisation has made the world a smaller place &ndash; offering huge business opportunities, but also causing instability and increased competition in both developed and developing nations.</p>\r\n\r\n<p>This ExpertTrack offers a look at demography, geography, international affairs, and foreign policy as you build a clear picture of the risk and threats within today&rsquo;s interconnected world. You&rsquo;ll learn about key concepts in international relations, and how organisations and cultures can work together.</p>\r\n\r\n<p>The 3 courses included as part of this ExpertTrack are designed for professionals working in a global network, students of foreign affairs, or learners with a strong interest in world politics.</p>\r\n', '2021-01-27 05:25:04'),
(9, 'Business Ethics : Learn and Exploring Big Data and Tax Avoidance', 'upload/b5.jpg', 'BUSINESS', 'CERTIFICATE COURSES', '<p>Explore the ethical complexities of big data and tax avoidance</p>\r\n\r\n<p>Ethical behaviour brings significant benefits to businesses such as attracting employees, customers and investors. But failure to manage it properly can create huge challenges.</p>\r\n\r\n<p>On this course, you&rsquo;ll discover big data and tax avoidance.</p>\r\n\r\n<p>You&rsquo;ll examine the benefits and ethical challenges inherent to big data, including the issues of privacy and data security.</p>\r\n\r\n<p>You&rsquo;ll learn what tax avoidance is and discover how globalisation is increasing the likelihood of its occurrence.</p>\r\n', '2021-01-27 05:26:40'),
(10, 'Maths Subject Knowledge: Fractions, Decimals, and Percentages', 'upload/b1.jpg', 'MATHS', 'BACHULAR DEGREE', '<p>Make learning fractions, decimals and percentages easier for your students</p>\r\n\r\n<p>Often, when teachers are asked which maths topic they find the most difficult to teach and for their students to learn, teachers say fractions.</p>\r\n\r\n<p>On this course, you will explore why they find fractions difficult and consider new approaches and methodologies for teaching them that are easier to grasp for your students.</p>\r\n\r\n<p>You will learn how to avoid teaching the subject in isolation as you approach fractions, decimals and percentages as three interconnected topics. This will help to give your students context and give them a deeper understanding of the maths structure behind fractions.</p>\r\n', '2021-01-27 05:29:33'),
(11, 'Learn Content Marketing Strategy with Advertising Week ', 'upload/b3.jpg', 'MARKETING ', 'MASTER DEGREE', '<p>Create a strategic content marketing plan that gets your brand noticed</p>\r\n\r\n<p>Using case studies from some of the world&rsquo;s biggest brands, this two-week course will equip you with the content marketing skills and know-how to create engaging, targeted marketing content that works.</p>\r\n', '2021-01-27 05:31:04'),
(12, 'Food Safety Training : Learn Safe Practices and Precedures in easy way', 'upload/b1.png', 'LIFESTYLE', 'DIPLOMA COURSES', '<p>Online learning is likely to be important for you in the future, either at university or in the workplace. Learning online is different to learning in the classroom as it requires different skills. This course will help you to develop those skills, showing you how to learn and communicate effectively in an online environment.</p>\r\n\r\n<p>This course is just one of a series about &lsquo;learning online&rsquo;, which introduces you to the essential skills and tools you need to study effectively online.</p>\r\n', '2021-01-27 05:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `ctype`
--

DROP TABLE IF EXISTS `ctype`;
CREATE TABLE IF NOT EXISTS `ctype` (
  `ctid` int(11) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(50) NOT NULL,
  PRIMARY KEY (`ctid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctype`
--

INSERT INTO `ctype` (`ctid`, `ctype`) VALUES
(1, 'CERTIFICATE COURSES'),
(3, 'BACHULAR DEGREE'),
(4, 'MASTER DEGREE'),
(2, 'DIPLOMA COURSES');

-- --------------------------------------------------------

--
-- Table structure for table `cvideos`
--

DROP TABLE IF EXISTS `cvideos`;
CREATE TABLE IF NOT EXISTS `cvideos` (
  `vdoid` int(14) NOT NULL AUTO_INCREMENT,
  `video` varchar(5000) NOT NULL,
  `courseid` int(14) NOT NULL,
  `addedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`vdoid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cvideos`
--

INSERT INTO `cvideos` (`vdoid`, `video`, `courseid`, `addedon`) VALUES
(1, 'upload/a1 (1).mp4', 5, '2021-01-24 08:39:13'),
(2, 'upload/a1 (2).mp4', 5, '2021-01-24 08:39:13'),
(3, 'upload/a1 (3).mp4', 5, '2021-01-24 08:39:13'),
(4, 'upload/a1 (1).mp4', 4, '2021-01-24 08:48:58'),
(5, 'upload/a1 (2).mp4', 4, '2021-01-24 08:48:58'),
(6, 'upload/a1 (3).mp4', 4, '2021-01-24 08:48:58'),
(7, 'upload/a1 (1).mp4', 3, '2021-01-24 09:00:40'),
(8, 'upload/a1 (2).mp4', 3, '2021-01-24 09:00:40'),
(9, 'upload/a1 (3).mp4', 3, '2021-01-24 09:00:40'),
(10, 'upload/a1 (1).mp4', 12, '2021-01-29 23:16:41'),
(11, 'upload/a1 (2).mp4', 12, '2021-01-29 23:16:41'),
(12, 'upload/a1 (3).mp4', 12, '2021-01-29 23:16:41'),
(13, 'upload/a1 (1).mp4', 11, '2021-01-29 23:17:12'),
(14, 'upload/a1 (3).mp4', 11, '2021-01-29 23:17:12'),
(15, 'upload/a1 (2).mp4', 10, '2021-01-29 23:17:37'),
(16, 'upload/a1 (3).mp4', 10, '2021-01-29 23:17:37'),
(17, 'upload/a1 (2).mp4', 10, '2021-01-29 23:18:04'),
(18, 'upload/a1 (3).mp4', 10, '2021-01-29 23:18:04'),
(19, 'upload/a1 (1).mp4', 9, '2021-01-29 23:18:24'),
(20, 'upload/a1 (2).mp4', 9, '2021-01-29 23:18:24'),
(21, 'upload/a1 (1).mp4', 1, '2021-01-29 23:18:52'),
(22, 'upload/a1 (2).mp4', 1, '2021-01-29 23:18:52'),
(23, 'upload/a1 (3).mp4', 1, '2021-01-29 23:18:52'),
(24, 'upload/a1 (1).mp4', 2, '2021-01-29 23:19:20'),
(25, 'upload/a1 (3).mp4', 2, '2021-01-29 23:19:20'),
(27, 'upload/a1 (1).mp4', 7, '2021-01-29 23:23:33'),
(29, 'upload/a1 (3).mp4', 8, '2021-01-29 23:27:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
