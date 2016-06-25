-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 09:55 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `quantity`) VALUES
(2, '::1', 0),
(5, '::1', 0),
(6, '::1', 0),
(7, '::1', 0),
(10, '::1', 0),
(11, '::1', 0),
(12, '::1', 0),
(13, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'ELECTRONICS'),
(2, 'COSMETICS'),
(3, 'FASHION'),
(4, 'FOODSTUFFS'),
(5, 'COMPUTER SERVICES'),
(6, 'OTHERS'),
(7, 'alex'),
(8, 'collo');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `subcat_id`, `product_name`, `price`, `product_desc`, `product_image`) VALUES
(1, 1, 2, 'stephen ondieki', 23000, 'This is a 3 in one printer with the capability of scanning, printing and even photocopying. It has a long life span with a very high printing speed						\r\n  						', 'pr.jpg'),
(2, 1, 1, 'Toshiba Laptop', 30000, 'Toshiba L58 latop with 500GB and 4GB RAM. It has a 64bit operating system and it is a brandy new product please contact me		', 'lp17.jpg'),
(3, 3, 3, 'Shoes', 2000, 'A well fashioned shoes for cute ladies. Mostly matched with a red dress or even a black official skirt						\r\n  						', '2011_designer_fashion_ladies_shoes.jpg'),
(4, 3, 3, 'Campus Quuen shoes', 23000, 'An air conditioned shoes just weared during functions such as afternoon dinners and when going out with your sponsor					\r\n  						', 'High-Heel-Fall-Winter-Shoes-Design-Bakra-Eid-Footwear-Collection1.jpg'),
(5, 1, 1, 'Hp ', 45000, 'It has 500GB HDD and 2GB RAM. It is a second hand computer but full featured and working under good condition						\r\n  						', 'lp4.jpg'),
(6, 1, 9, 'Dell Desktops', 24, 'This is a 21 inch Desktop with a full functioning cpu. It has a processor of 64bit. 500GB HDD and $GB RAM.						\r\n  						', '57753.jpeg'),
(7, 3, 3, 'Sandols', 650, 'Different color sandols which are brandy new and are long lasting please give me a call						\r\n  						', '425911306_268.jpg'),
(8, 1, 1, 'Samsung Laptop', 3400, 'A samsung icore 7 laptop with 500GB HDD and 4GB RAM	 with everything under good functionality. I have used it for only a month so its still new		\r\n  						', 'lp20.jpg'),
(9, 1, 1, 'Dell Laptop', 45000, 'Dell laptop with 500GB HDD and RAM 2GB. i have used it for only 1 month so it is still brandy new						\r\n  						', 'lp33.gif'),
(10, 3, 8, 'long dress', 3200, 'This is long dinner dress that should be matched with red cutex						\r\n  						', '54ee4182e5ae0_-_pink-dresses-angelaandalison-21037_s2.jpg'),
(11, 2, 7, 'Nigerian weave', 230, 'Nigerian weave is a soft and easy to maintain weave that is sold at a very cheaper price. It makes a lady look prettier and more beautiful			', 'new_york_remi_curl.jpg'),
(12, 2, 7, 'African weave', 500, 'This is a black weave that makes a lady beautiful people my confuse it with original hair						\r\n  						', 'Virgin-Peruvian-Loose-Wave-Human-Hair-font-b-Weave-b-font-Bundles-Bele-Virgin-Hair-Products.jpg'),
(13, 1, 1, 'Toshiba Laptop', 56000, 'I core 7 toshiba laptop with 600GB HHD and 6GB RAM. it is a brandy new product from USA. I has cool graphics and good processor						\r\n  						', 'lp8.jpg'),
(14, 2, 7, 'Braids ', 760, ' A browny and shyney hair from Nigeria that will make a lady look glamorous. 						\r\n  						', 'wb47.jpg'),
(17, 1, 10, 'Hard Disk', 800, 'A 1TB Hard Disk which is brandy new it is virus free and it has never malfunctioned before						\r\n  						', 'acc4.jpg'),
(18, 2, 12, 'High Class Handbag', 3000, 'Well designed handbag for ladies to use when going out for a party or dinner. It has a nice color and can be matched with a red dress and high heel shoes				\r\n  						', 'Handbags-Designs-2016-for-Girls-and-Women-20.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `subcat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `subcat_title` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcat_id`, `cat_id`, `subcat_title`) VALUES
(1, 1, 'Laptops'),
(2, 1, 'Printers'),
(3, 3, 'Shoes'),
(4, 3, 'Dresses'),
(5, 4, 'Cakes'),
(6, 4, 'Chapati'),
(7, 4, 'weaves'),
(9, 1, 'Desktops'),
(10, 1, 'Computer Accessories'),
(11, 0, 'Others'),
(12, 0, 'Handbags'),
(13, 0, 'eating'),
(14, 0, 'steve'),
(15, 0, 'steve');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcat_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
