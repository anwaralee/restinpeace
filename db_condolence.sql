-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2014 at 07:33 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_condolence`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fbid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `fbid`) VALUES
(1, 1434974712);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_people`
--

CREATE TABLE IF NOT EXISTS `tbl_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `dod` date NOT NULL,
  `description` text NOT NULL,
  `condolence` text NOT NULL,
  `addedBy` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_people`
--

INSERT INTO `tbl_people` (`id`, `name`, `image`, `country`, `city`, `dob`, `dod`, `description`, `condolence`, `addedBy`, `is_featured`) VALUES
(1, 'Nelson Mandela', 'pic01.jpg', 'South Africa', 'Johannesburg ', '1918-07-18', '2013-12-05', 'Nelson Rolihlahla Mandela (18 July 1918 – 5 December 2013) was a South African anti-apartheid revolutionary, politician, and philanthropist who served as President of South Africa from 1994 to 1999. He was South Africa''s first black chief executive, and the first elected in a fully representative democratic election. His government focused on dismantling the legacy of apartheid through tackling institutionalised racism, poverty and inequality, and fostering racial reconciliation. Politically an African nationalist and democratic socialist, he served as President of the African National Congress (ANC) from 1991 to 1997. Internationally, Mandela was Secretary General of the Non-Aligned Movement from 1998 to 1999.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 1),
(2, 'Albert Einstein', 'pic02.jpg', 'Germany', 'Ulm, Kingdom of Wurttemberg', '1879-03-18', '1955-04-18', 'Albert Einstein (14 March 1879 – 18 April 1955) was a German-born theoretical physicist who developed the general theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). While best known for his mass–energy equivalence formula E = mc2 (which has been dubbed "the world''s most famous equation"), he received the 1921 Nobel Prize in Physics "for his services to theoretical physics, and especially for his discovery of the law of the photoelectric effect". The latter was pivotal in establishing quantum theory.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 1),
(3, 'Martin Luther King', 'pic03.jpg', 'US', 'Atlanta', '1929-01-15', '1968-01-04', 'Martin Luther King, Jr. (January 15, 1929 – April 4, 1968) was an American clergyman, activist, humanitarian, and leader in the African-American Civil Rights Movement. He is best known for his role in the advancement of civil rights using nonviolent civil disobedience. King has become a national icon in the history of American progressivism.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 1),
(4, 'Nelson Mandela', 'pic01.jpg', 'South Africa', 'Johannesburg ', '1918-07-18', '2013-12-05', 'Nelson Rolihlahla Mandela (18 July 1918 – 5 December 2013) was a South African anti-apartheid revolutionary, politician, and philanthropist who served as President of South Africa from 1994 to 1999. He was South Africa''s first black chief executive, and the first elected in a fully representative democratic election. His government focused on dismantling the legacy of apartheid through tackling institutionalised racism, poverty and inequality, and fostering racial reconciliation. Politically an African nationalist and democratic socialist, he served as President of the African National Congress (ANC) from 1991 to 1997. Internationally, Mandela was Secretary General of the Non-Aligned Movement from 1998 to 1999.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 0),
(5, 'Albert Einstein', 'pic02.jpg', 'Germany', 'Ulm, Kingdom of Wurttemberg', '1879-03-18', '1955-04-18', 'Albert Einstein (14 March 1879 – 18 April 1955) was a German-born theoretical physicist who developed the general theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). While best known for his mass–energy equivalence formula E = mc2 (which has been dubbed "the world''s most famous equation"), he received the 1921 Nobel Prize in Physics "for his services to theoretical physics, and especially for his discovery of the law of the photoelectric effect". The latter was pivotal in establishing quantum theory.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 0),
(6, 'Martin Luther King', 'pic03.jpg', 'US', 'Atlanta', '1929-01-15', '1968-01-04', 'Martin Luther King, Jr. (January 15, 1929 – April 4, 1968) was an American clergyman, activist, humanitarian, and leader in the African-American Civil Rights Movement. He is best known for his role in the advancement of civil rights using nonviolent civil disobedience. King has become a national icon in the history of American progressivism.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 0),
(7, 'Nelson Mandela', 'pic01.jpg', 'South Africa', 'Johannesburg ', '1918-07-18', '2013-12-05', 'Nelson Rolihlahla Mandela (18 July 1918 – 5 December 2013) was a South African anti-apartheid revolutionary, politician, and philanthropist who served as President of South Africa from 1994 to 1999. He was South Africa''s first black chief executive, and the first elected in a fully representative democratic election. His government focused on dismantling the legacy of apartheid through tackling institutionalised racism, poverty and inequality, and fostering racial reconciliation. Politically an African nationalist and democratic socialist, he served as President of the African National Congress (ANC) from 1991 to 1997. Internationally, Mandela was Secretary General of the Non-Aligned Movement from 1998 to 1999.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 0),
(8, 'Albert Einstein', 'pic02.jpg', 'Germany', 'Ulm, Kingdom of Wurttemberg', '1879-03-18', '1955-04-18', 'Albert Einstein (14 March 1879 – 18 April 1955) was a German-born theoretical physicist who developed the general theory of relativity, one of the two pillars of modern physics (alongside quantum mechanics). While best known for his mass–energy equivalence formula E = mc2 (which has been dubbed "the world''s most famous equation"), he received the 1921 Nobel Prize in Physics "for his services to theoretical physics, and especially for his discovery of the law of the photoelectric effect". The latter was pivotal in establishing quantum theory.', 'Our nation has lost its greatest son, our people have lost a father. although we knew that this day would come, nothing can diminish our sense of a profound and enduring loss.', 1434974712, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
