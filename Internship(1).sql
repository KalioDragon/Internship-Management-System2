-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2017 at 10:51 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Internship`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `counts`()
begin
select * from Student;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `internship`()
    NO SQL
begin
select * from Allocation;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `internshipcount`()
    NO SQL
begin
select count(*) from Allocation;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `totalcount`()
begin
select count(*) from Student;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Allocation`
--

CREATE TABLE IF NOT EXISTS `Allocation` (
  `Stud_email` varchar(255) NOT NULL,
  `A_id` int(10) NOT NULL,
  `Allo_id` int(11) NOT NULL AUTO_INCREMENT,
  `C_name` varchar(10000) NOT NULL,
  PRIMARY KEY (`Allo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Allocation`
--

INSERT INTO `Allocation` (`Stud_email`, `A_id`, `Allo_id`, `C_name`) VALUES
('ganeshn81@gmail.com', 9, 1, 'TCS'),
('pratik@gmail.com', 2, 2, 'Studio Ghibli');

-- --------------------------------------------------------

--
-- Table structure for table `AreaOI`
--

CREATE TABLE IF NOT EXISTS `AreaOI` (
  `A_id` int(10) NOT NULL AUTO_INCREMENT,
  `Field_name` varchar(30) NOT NULL,
  PRIMARY KEY (`A_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `AreaOI`
--

INSERT INTO `AreaOI` (`A_id`, `Field_name`) VALUES
(1, 'Internet of things'),
(2, 'Animation'),
(3, 'Game Developement'),
(4, 'Digital Music Production'),
(5, 'Graphic Design'),
(6, 'Mobile And Web User Experience'),
(7, 'Accounting'),
(8, 'Advertising and Marketting'),
(9, 'Business Marketting');

-- --------------------------------------------------------

--
-- Table structure for table `College`
--

CREATE TABLE IF NOT EXISTS `College` (
  `Clge_id` int(11) NOT NULL AUTO_INCREMENT,
  `Clge_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Clge_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `College`
--

INSERT INTO `College` (`Clge_id`, `Clge_name`) VALUES
(1, 'PICT Pune'),
(2, 'Sinhgad College of Engineering'),
(3, 'Zeal College of Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `Company`
--

CREATE TABLE IF NOT EXISTS `Company` (
  `C_id` int(10) NOT NULL AUTO_INCREMENT,
  `C_name` varchar(30) NOT NULL,
  `location` varchar(254) NOT NULL,
  `A_id` int(30) NOT NULL,
  `c_info` varchar(1000) NOT NULL,
  `c_criteria` int(100) NOT NULL,
  `Total` int(255) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `Company`
--

INSERT INTO `Company` (`C_id`, `C_name`, `location`, `A_id`, `c_info`, `c_criteria`, `Total`) VALUES
(3, 'TCS', 'Pune', 9, 'Tata Consultancy Services Limited (TCS) is an Indian multinational information technology (IT) service, consulting and business solutions company Headquartered in Mumbai, Maharashtra.[3][4] It is a subsidiary of the Tata Group and operates in 46 countries.', 83, 22),
(4, 'IBM', 'Mumbai', 9, 'IBM (International Business Machines Corporation) is an American multinational technology company headquartered in Armonk, New York, United States, with operations in over 170 countries. The company originated in 1911 as the Computing-Tabulating-Recording Company (CTR) and was renamed "International Business Machines" in 1924.', 69, 23),
(5, 'BluCursor Technologies', 'Banglore', 9, 'BluCursor Technologies consists of technology evangelists, full stack consumer and web solution experts. Our offerings include SOA-based applications, big data solutions & mobile applications. We have a well-established track record and our services have always met with great customer satisfaction. We not only provide great services but also provide them at a very competent price.', 65, 23),
(6, 'Algo Engines', 'Pune', 1, 'They help provide operating intelligence for the met masts, wind turbines, solar plants and other IoT systems. They have developed cloud based SaaS platform for Internet of Things Analystics. The other solutions are based on SCADA systems, sensors and smart meters.', 75, 12),
(7, 'Lively', 'Hyderabad', 1, 'Emergency solutions for elders. The product in the form of Smart watch is connected with lively Hub. The product stays with the users and inform them regularly about medicines and alert them or concerned people when required. ', 68, 12),
(8, 'RainMachine ', 'Delhi', 1, 'The solution forecast sprinkler is developed by the company. It is a wifi enabled touch screen device. This device is placed in the open field. It provides 6 hour weather forecast. This helps manage watering for the garden and also for the crops in the farm. It connects with national oceanic and atmospheric administration. In the case of non availability of internet it makes use of historic data which can be used for maintenance. ', 71, 30),
(9, 'Walt Disney Animation Studios', 'Delhi', 2, 'Disney’s acclaimed studio has been making feature films since 1937 with the release of the critically successful Snow White and the Seven Dwarfs. Since then, they have been behind some of the highest grossing animated films of all time, including The Lion King and Aladdin.', 72, 21),
(10, ' DreamWorks Animation', 'Mumbai', 2, 'DreamWorks Animation films have been distributed all over the world, earning them 22 Emmys, several Annie Awards, 3 Academy Awards, and many BAFTA and Golden Globe nominations.', 58, 75),
(11, 'Studio Ghibli', 'Ahemdabad', 2, 'Arguably one of the top Japanese film animation studios in the entire country, if not the world. Out of the 15 top grossing anime films made in Japan, eight of them have been their work.\r\n\r\nAmong their numerous awards are four Japan Academy Prize for Animation of the Year, an Animage Anime Grand Prix, countless Academy Award nominations in the U.S., and an Academy Award for Best Animated Feature Film.', 75, 30),
(12, 'Apar Gmes', 'Mumbai', 3, 'Apar Games launched in 2007 and is the gaming development arm of Apar Global Pvt. Ltd. They develop games for consoles, PCs, iOS, and Android. They’ve won 6 awards for their tremendous contributions.', 56, 5),
(13, 'Creatiosoft', 'Noida', 3, 'CreatioSoft is an Indian gaming company that makes games for iPhone, iPad, Android, Windows Mobile, BlackBerry Mobile App. They were founded in 2012 and have developed 100+ apps and games till date.', 79, 11),
(14, 'Games2win', 'Bangalore', 3, 'Games2win is one of the largest casual gaming companies in the world. They own 700+ online games and have over 45 million downloads worldwide on the iOS, Android & Kindle app stores.', 70, 12),
(15, 'ZealousWEb Technology', 'Ahmedabad', 5, 'ZealousWeb Technologies was conceptualized by two zealous entrepreneurs in the year 2002. There were very few firms serving ''Total Solutions'' right from the concept to completion of web-based projects.', 50, 25),
(16, 'Reality Premedia Services', 'Pune', 5, 'Reality Premedia Services Pvt Ltd is a reliable media outsourcing partner for clients from across the globe. Headquartered in Pune, India, our core focus has been in Premedia Services, eBooks, Design and Digitization Services. Along with our core competencies in premedia and graphic production, we are also committing ourselves in three major domains:- Enhanced eBooks, ePublishing Apps and ePapers for news-agencies.\r\nMindMade', 76, 25),
(17, 'MindMade Technologies', 'New Delhi', 5, 'MindMade Technologies are an India primarily based Website Design & SEO Company in Coimbatore with a global presence specialized in website design, logo design, branding solutions, seo, website development.', 67, 20),
(18, 'Singh Agarwal Associates', 'lucknow', 7, 'This is a premier chartered accountancy company in India. The chartered accountants of this accountancy firm offer services like the consultancy, advice, planning tax, audits and company law matters. The company has its office in Lucknow. ', 59, 35),
(19, 'Ernest &Young', 'Chennai', 7, 'This is a member firm of Ernest &Young Global Limited,a UK private Company. This leading accounting company of India provides services in Assurance, Advisory, Transactions, Tax & Regulatory services.It has offices in about 8 Indian cities like New Delhi, Bangalore, Kolkata, Chennai, Pune, Ahmedabad etc. ', 80, 10),
(20, 'JIya and Associates', 'Vijaywada', 7, 'This company is one among the top accounting companies in India. It was incepted in the year 1998 with a team of corporate and legal law experts. They offer services like the Intellectual Property Rights,Amalgamation and Takeover,Litigation Services,Taxation Services and many others. Their forte is to offer clients customized strategies and innovative solutions for financial and legal problems.\r\n', 72, 8),
(21, 'Hyperlink Infosystem', 'Varanasi', 6, 'Hyperlink Infosystem is one of the best top mobile app development companies in india across the globe. The company is headquartered in India and have served almost every country in the world. Having 5+ years of experience in the same industry, The company is able to craft every type of apps for various platforms such as iOS, Android & Windows. The company has a bunch of super talented programmers, designers, testers, team leaders who as a teamwork just to make sure that you experience the ultimate success.', 62, 5),
(22, 'Softway', 'Secandrabad', 6, 'Another best company in Mobile app development is Softway. The company founded in the year 2003. The experience of the company is vast than any other company. The company has its own development studio in Bangalore, India. The strong process & highly talented programmers are two things which are unbeatable. Softway also works on web design & development.', 64, 5),
(23, 'iMobdev', 'Mangalore', 6, 'iMobdev is one of the good app development companies in the industry. The company''s inception happened seven years ago and since then it is one of the leading providers of some amazing mobile applications across the globe. The company has successfully finished 500+ mobile apps with the unbeatable efforts of 100+ masterminds working as a team. ', 81, 100),
(24, 'Saregama India Limited', 'Kolkata', 4, 'Saregama India Limited is an Indian Music company founded in the year 1946. Earlier the company was known as The Gramophone Company of India. Saregama is one of the best labels of this company.', 65, 30),
(25, 'Universal Music India', 'Ameerpeth', 4, 'Universal Music is an American based company but it operates in India also. It’s worldwide revenue is over $6 billion and in India artist like Mohit Chauhan, Bombay Rockers, Josh, Panjabi MC, Bombay Vikings, Ali Zafar, Mehsopuria, and Asha Bhosle have signed to Universal Music.', 60, 55),
(26, 'Blue Frog Productions', 'Mumbai', 4, 'Blue Frog is an integrated music project company based in Mumbai. It has 4 clubs which allows you to play Gigs, club services and music. It an independent record label and artist management service', 62, 23),
(27, 'Hakuhodo Percept', 'Shimla', 8, 'Hakuhodo Percept, one of the best advertising agencies, offers a unique 360-degree brand management system for their clients that result in creating power brands. Their key services include advertising, marketing, and media buying. ', 77, 2),
(28, 'Lowe Lintas', 'Kerala', 8, 'Lowe Lintas is credited as the agency that gave India its first television commercial. They offer services like brand communication strategy, concept creation, creating and managing brand campaigns, and multimedia production.', 62, 50),
(29, 'GREY INDIA', 'Bhopal', 8, 'Grey India is part of the Grey group that’s among the world’s top advertising agencies. They steer ‘Famously Effective’ work for some of India’s most prestigious clients.', 55, 15);

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE IF NOT EXISTS `Manager` (
  `Man_id` int(10) NOT NULL AUTO_INCREMENT,
  `Man_name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mob` int(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`Man_id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`Man_id`, `Man_name`, `Email`, `Mob`, `pass`) VALUES
(1, 'Pranay Chandale', 'pranaychandale@gmail.com', 2147483647, 'pranay@123'),
(2, 'suraj patel', 'suraj12@gmail.com', 2147483647, 'suraj@123'),
(3, 'kiran biradar', 'kiran56@gmail.com', 2147483647, 'kiran@123');

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `Stud_id` int(10) NOT NULL AUTO_INCREMENT,
  `Stud_name` varchar(20) NOT NULL,
  `qualification` varchar(254) NOT NULL,
  `percentage` int(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mob` bigint(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`Stud_id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`Stud_id`, `Stud_name`, `qualification`, `percentage`, `Email`, `Mob`, `pass`) VALUES
(1, 'Mahesh Jadhav', 'Engineering in Comp', 78, 'maheshjadhav108@gmail.com', 8796817143, 'mahesh@123'),
(2, 'Bhumi Kamble', 'MBBS ', 70, 'bhumikamble@gmail.com', 8796827155, 'bhumi@123'),
(3, 'ganesh patil', 'Law', 90, 'ganeshn81@gmail.com', 9564567865, 'ganesh@123'),
(4, 'pratik jaiswal', 'pharmacy', 80, 'pratik@gmail.com', 9564567865, 'pratik@123'),
(5, 'suraj biradar', 'phd', 85, 'suraj@gmail.com', 9876567876, 'suraj@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
