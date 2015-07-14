-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2015 at 09:19 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_information`
--

CREATE TABLE IF NOT EXISTS `tb_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `text_user` varchar(10000) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_information`
--

INSERT INTO `tb_information` (`id`, `title`, `text_user`, `category`) VALUES
(3, 'about me post', '<p>This editor has it&#39;s tabIndex set to <strong>3</strong></p>\r\n\r\n<p><span style="color:#FF8C00">This editor has it&#39;s tabIndex set to <strong>3</strong></span></p>\r\n\r\n<p>This editor has it&#39;s tabIndex set to <strong>3</strong></p>\r\n\r\n<p><span style="color:#FF8C00">This editor has it&#39;s tabIndex set to <strong>3</strong></span></p>\r\n\r\n<p>This editor has it&#39;s tabIndex set to <strong>3</strong></p>\r\n\r\n<p><span style="color:#FF8C00">This editor has it&#39;s tabIndex set to <strong>3</strong></span></p>\r\n\r\n<p>This editor has it&#39;s tabIndex set to <strong>3</strong></p>\r\n\r\n<p><span style="color:#FF8C00">This editor has it&#39;s tabIndex set to <strong>3</strong></span></p>\r\n', 'About me'),
(6, '&#6040;&#6078;&#6043;&#6040;&#6075;&#6017;&#6031;&#6077;&#6050;&#6020;&#6098;&#6018; &#6016;&#6098;&', '<p><strong>&#6040;&#6078;&#6043;&#6040;&#6075;&#6017;&#6031;&#6077;&#6050;&#6020;&#6098;&#6018; &#6016;&#6098;&#6035;&#6075;&#6020;&#6042;&#6079;&#6020; Harry Potter &#6038;&#6081;&#6043;&#6021;&#6070;&#6047;&#6091;&#6049;&#6078;&#6020; &#6040;&#6075;&#6017;&#6040;&#6070;&#6031;&#6091; &#6041;&#6089;&#6070;&#6020;&#6040;&#6089;&#6081;&#6021;&#6044;&#6071;&#6025;?</strong></p>\r\n\r\n<p><strong>&#6050;&#6070;&#6040;&#6081;&#6042;&#6071;&#6016;</strong>&#6102; &#6042;&#6079;&#6020; Harry Potter &#6023;&#6070;&#6017;&#6098;&#6047;&#6082;&#6039;&#6070;&#6038;&#6041;&#6035;&#6098;&#6031; &#6036;&#6082;&#6036;&#6040;&#6035;&#6098;&#6031;&#6050;&#6070;&#6018;&#6040;&#6035;&#6093; &#6026;&#6095;&#6043;&#6098;&#6036;&#6072;&#6043;&#6098;&#6036;&#6070;&#6025; &#6040;&#6070;&#6035;&#6021;&#6098;&#6042;&#6078;&#6035;&#6044;&#6018;&#6098;&#6018; &#6026;&#6082;&#6043;&#6042;&#6016;&#6021;&#6086;&#6030;&#6076;&#6043;&#6036;&#6070;&#6035; &#6041;&#6089;&#6070;&#6020;&#6047;&#6035;&#6098;&#6034;&#6073;&#6016;&#6047;&#6035;&#6098;&#6034;&#6070;&#6036;&#6091; &#6042;&#6041;&#6088;&#6038;&#6081;&#6043;&#6023;&#6071;&#6031; &#6113;&#6117;&#6022;&#6098;&#6035;&#6070;&#6086; &#6040;&#6016;&#6048;&#6078;&#6041;&#6100; &#6018;&#6098;&#6042;&#6036;&#6091;&#6044;&#6018;&#6098;&#6018;&#6035;&#6071;&#6040;&#6077;&#6041;&#6103; &#6042;&#6036;&#6047;&#6091; Harry Potter &#6036;&#6070;&#6035;&#6033;&#6070;&#6016;&#6091;&#6033;&#6070;&#6025;&#6021;&#6071;&#6031;&#6098;&#6031; &#6033;&#6047;&#6098;&#6047;&#6035;&#6071;&#6016;&#6023;&#6035; &#6066;&#6098;&#6041;&#6021;&#6020;&#6091;&#6031;&#6070;&#6040;&#6026;&#6070;&#6035; &#6026;&#6084;&#6041;&#6040;&#6071;&#6035;&#6050;&#6070;&#6021;&#6042;&#6086;&#6043;&#6020;&#6036;&#6070;&#6035;&#6049;&#6078;&#6041;&#6100;</p>\r\n\r\n<p>&#6036;&#6089;&#6075;&#6035;&#6098;&#6031;&#6082;&#6036;&#6021;&#6098;&#6021;&#6075;&#6036;&#6098;&#6036;&#6035;&#6098;&#6035;&#6035;&#6081;&#6087; &#6047;&#6070;&#6021;&#6091;&#6042;&#6079;&#6020; Harry Potter &#6031;&#6098;&#6042;&#6076;&#6044;&#6036;&#6070;&#6035;&#6036;&#6025;&#6098;&#6021;&#6036;&#6091; &#6033;&#6085;&#6048;&#6078;&#6041; &#6021;&#6086;&#6030;&#6082;&#6016;&#6063;&#6031;&#6077;&#6047;&#6040;&#6098;&#6031;&#6082;&#6020; &#6035;&#6071;&#6040;&#6077;&#6041;&#6103; &#6016;&#6098;&#6035;&#6075;&#6020;&#6042;&#6079;&#6020;&#6035;&#6081;&#6087;&#6040;&#6098;&#6035;&#6070;&#6016;&#6091;&#6103; &#6016;&#6095;&#6047;&#6075;&#6033;&#6098;&#6034;&#6047;&#6073;&#6020;&#6031;&#6082; &#6016;&#6098;&#6043;&#6070;&#6041;&#6023;&#6070;&#6047;&#6081;&#6026;&#6098;&#6027;&#6072; &#6033;&#6070;&#6086;&#6020;&#6044;&#6096;&#6041;&#6016;&#6098;&#6040;&#6081;&#6020; &#6033;&#6085;&#6048;&#6078;&#6041;&#6026;&#6082;&#6042;&#6100;</p>\r\n\r\n<p>&#6021;&#6020;&#6091;&#6026;&#6073;&#6020;&#6032;&#6070;&#6031;&#6078; &#6031;&#6077;&#6050;&#6020;&#6098;&#6018;&#6033;&#6070;&#6086;&#6020;&#6035;&#6084;&#6087; &#6038;&#6077;&#6016;&#6018;&#6081;&#6040;&#6070;&#6035;&#6016;&#6070;&#6042; &#6037;&#6098;&#6043;&#6070;&#6047;&#6091;&#6036;&#6098;&#6031;&#6076;&#6042;&#6040;&#6075;&#6017;&#6040;&#6070;&#6031;&#6091; &#6035;&#6071;&#6020;&#6042;&#6076;&#6036;&#6042;&#6070;&#6020;&#6041;&#6089;&#6070;&#6020;&#6026;&#6076;&#6021;&#6040;&#6098;&#6031;&#6081;&#6021;&#6017;&#6098;&#6043;&#6087;? &#6047;&#6076;&#6040;&#6033;&#6047;&#6098;&#6047;&#6035;&#6070;&#6042;&#6076;&#6036;&#6032;&#6031; &#6042;&#6036;&#6047;&#6091;&#6038;&#6077;&#6016;&#6018;&#6081; &#6017;&#6070;&#6020;&#6016;&#6098;&#6042;&#6084;&#6040;&#6102;</p>\r\n', 'New'),
(7, 'how to test new', '<p>how to test&nbsp;how to test&nbsp;how to test&nbsp;how to test&nbsp;how to test&nbsp;</p>\r\n', 'New'),
(8, 'down vote Keep in mind that Javascript runs on the client,', '<p><span style="color:rgb(34, 34, 34); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:15px">after the page has been downloaded. Session data exists only on the server. As such, Javascript (on the client) cannot touch session data (on the server). You&#39;ll have to communicate with a server-side PHP script to handle session-data. You can make asynchronous calls via Javascript to the PHP scripts. This would be the only route.</span></p>\r\n', 'Working on');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(1, 'visaldara', 'son', 'sonvisaldara', 'sonvisaldara10@gmail.com', '123'),
(2, 'darapisey', 'darapisey', 'darapisey', 'darapisey@gmail.com', '123'),
(3, 'pisey', 'vann', 'pisey', 'piseyvann@gmail.com', '123'),
(4, 'pisey', 'vann', 'pisey', 'piseyvann@gmail.com', '123'),
(6, 'pisey', 'lala', 'piseylala', 'piseyvann@gmail.com', '12345'),
(7, 'visal', 'visal', 'visalson', 'piseyvann@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
