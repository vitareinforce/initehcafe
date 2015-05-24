-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2015 at 06:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `initehcafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `maps` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `desc`, `maps`) VALUES
(1, 'About Us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit quam. Aenean mi velit, malesuada quis quam ut, laoreet pulvinar dui. Nulla sed interdum mauris. Aenean vel lorem et enim dignissim ornare. Fusce feugiat ultrices erat eget commodo. Aliquam non ultrices erat, in condimentum erat. Nulla hendrerit magna a sapien fermentum, a viverra lorem tincidunt. Morbi aliquam nibh vitae semper mollis. Integer sed tempor elit, sed molestie diam. Proin blandit quam sed erat ultricies, non suscipit lectus eleifend. Nulla tincidunt eros nec laoreet blandit. Integer eleifend massa sed velit mollis, a porttitor odio maximus. Nullam eget lacus mattis, aliquet magna vitae, sagittis sapien. Sed urna enim, laoreet ac suscipit nec, viverra in nulla. Sed consequat dolor nisi, id placerat eros aliquet quis.</p>\r\n<p>Pellentesque pellentesque felis urna, eget pulvinar orci condimentum sit amet. Fusce cursus dui rhoncus, venenatis ligula sed, porttitor tortor. Duis laoreet tincidunt ex at aliquam. Nam eleifend, tellus in faucibus ultricies, dolor lacus tristique libero, vitae semper tortor magna sit amet nunc. Vivamus posuere, lectus et semper dapibus, risus leo aliquet enim, at maximus ante justo et tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce sem metus, dignissim eu erat vitae, sodales dapibus dolor. Maecenas gravida, dolor vel imperdiet aliquet, erat quam sagittis neque, et pellentesque arcu mauris ac tortor. Morbi tristique non justo ut vehicula. Suspendisse sed ligula id lacus pharetra placerat sit amet ac mi. Etiam lacus orci, viverra gravida lorem feugiat, cursus tincidunt risus. Nullam augue leo, vehicula non volutpat quis, varius sed orci. Aenean volutpat sapien est, a bibendum augue lobortis non. Ut eu urna nisi. Proin ac lectus scelerisque, tempus purus venenatis, varius nisl. Aenean posuere ipsum at velit dapibus ornare.</p>', '<iframe src="https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d63370.1438372331!2d107.60534797843756!3d-6.934274367184128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!1i0!3e6!4m3!3m2!1d-6.9285657!2d107.6350454!4m3!3m2!1d-6.9312206!2d107.64111299999999!5e0!3m2!1sen!2s!4v1430066801502" width="600" height="450" frameborder="0" style="border:0"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `frontpage`
--

CREATE TABLE IF NOT EXISTS `frontpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foodThumbnail` varchar(100) NOT NULL,
  `foodDesc` text NOT NULL,
  `cakesThumbnail` varchar(100) NOT NULL,
  `cakesDesc` text NOT NULL,
  `dessertThumbnail` varchar(100) NOT NULL,
  `dessertDesc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `frontpage`
--

INSERT INTO `frontpage` (`id`, `foodThumbnail`, `foodDesc`, `cakesThumbnail`, `cakesDesc`, `dessertThumbnail`, `dessertDesc`) VALUES
(1, 'food.jpg', '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>', 'cakes.jpg', '<p style="text-align: justify;"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</span></p>', 'dessert.jpg', '<p style="text-align: justify;"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `category`, `name`, `desc`, `price`) VALUES
(1, 1, 'Test', '<p><img src="http://localhost:81/initehcafe/images/uploads/6347_aaaawww.jpg" alt="" width="460" height="480" /></p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit quam.&nbsp;</p>', 123123),
(2, 2, 'Kue Bakar', '<p style="text-align: justify;"><img src="http://localhost:81/initehcafe/images/uploads/927_picture023.jpg" alt="" width="320" height="240" /></p>\r\n<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit quam. Aenean mi velit, malesuada quis quam ut, laoreet pulvinar dui. Nulla sed interdum mauris. Aenean vel lorem et enim dignissim ornare. Fusce feugiat ultrices erat eget commodo. Aliquam non ultrices erat, in condimentum erat. Nulla hendrerit magna a sapien fermentum, a viverra lorem tincidunt. Morbi aliquam nibh vitae semper mollis. Integer sed tempor elit, sed molestie diam. Proin blandit quam sed erat ultricies, non suscipit lectus eleifend. Nulla tincidunt eros nec laoreet blandit. Integer eleifend massa sed velit mollis, a porttitor odio maximus. Nullam eget lacus mattis, aliquet magna vitae, sagittis sapien. Sed urna enim, laoreet ac suscipit nec, viverra in nulla. Sed consequat dolor nisi, id placerat eros aliquet quis.</p>', 1212),
(3, 3, 'Kopi', '<p><img src="http://localhost:81/initehcafe/images/uploads/927_picture023.jpg" alt="" width="320" height="240" /></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit quam. Aenean mi velit, malesuada quis quam ut, laoreet pulvinar dui. Nulla sed interdum mauris. Aenean vel lorem et enim dignissim ornare. Fusce feugiat ultrices erat eget commodo. Aliquam non ultrices erat, in condimentum erat. Nulla hendrerit magna a sapien fermentum, a viverra lorem tincidunt. Morbi aliquam nibh vitae semper mollis. Integer sed tempor elit, sed molestie diam. Proin blandit quam sed erat ultricies, non suscipit lectus eleifend. Nulla tincidunt eros nec laoreet blandit. Integer eleifend massa sed velit mollis, a porttitor odio maximus. Nullam eget lacus mattis, aliquet magna vitae, sagittis sapien. Sed urna enim, laoreet ac suscipit nec, viverra in nulla. Sed consequat dolor nisi, id placerat eros aliquet quis.</p>', 1341231),
(4, 1, 'adasdsad', '<p><img src="http://localhost:81/initehcafe/images/uploads/8524_ava.jpg" alt="" width="320" height="320" /></p>\r\n<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit quam. Aenean mi velit, malesuada quis quam ut, laoreet pulvinar dui. Nulla sed interdum mauris. Aenean vel lorem et enim dignissim ornare. Fusce feugiat ultrices erat eget commodo. Aliquam non ultrices erat, in condimentum erat. Nulla hendrerit magna a sapien fermentum, a viverra lorem tincidunt. Morbi aliquam nibh vitae semper mollis. Integer sed tempor elit, sed molestie diam. Proin blandit quam sed erat ultricies, non suscipit lectus eleifend. Nulla tincidunt eros nec laoreet blandit. Integer eleifend massa sed velit mollis, a porttitor odio maximus. Nullam eget lacus mattis, aliquet magna vitae, sagittis sapien. Sed urna enim, laoreet ac suscipit nec, viverra in nulla. Sed consequat dolor nisi, id placerat eros aliquet quis.</span></p>', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(256) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `image`, `desc`) VALUES
(2, '1307_focus_s_03.jpg', 'ntahlahaaa'),
(3, '4150_focus_s_01.jpg', 'sdasdaaa'),
(4, '3298_focus04.jpg', 'asdasdasd'),
(5, '7519_focus03.jpg', 'asdasdasd'),
(6, '7276_focus_s_03.jpg', 'asdasdasdasd'),
(7, '6822_focus01.jpg', 'asda'),
(8, '9295_focus_s_03.jpg', 'asdasd'),
(9, '203_focus.jpg', 'asdad'),
(10, '9122_281915_359069227594360_28638044140993444_n.jpg', 'aaassss'),
(12, '927_picture023.jpg', 'adadadada'),
(13, '9320_aaaawww.jpg', 'asdasd'),
(14, '8524_ava.jpg', 'asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `roles_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `roles_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 0),
(3, 'ganteng', '2bcc45c8f3791c2461cd80f72988f6fa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `webconfig`
--

CREATE TABLE IF NOT EXISTS `webconfig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Facebook` varchar(1000) NOT NULL,
  `Twitter` varchar(1000) NOT NULL,
  `Youtube` varchar(1000) NOT NULL,
  `adminMail` varchar(1000) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webconfig`
--

INSERT INTO `webconfig` (`id`, `Title`, `Facebook`, `Twitter`, `Youtube`, `adminMail`, `Phone`) VALUES
(1, 'Ini Teh Cafe', 'http://fb.me/initehcafe', 'http://twitter.com/initehcafe', 'http://youtube.com', 'admin@initeh.cafe', '+6281222222222');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
