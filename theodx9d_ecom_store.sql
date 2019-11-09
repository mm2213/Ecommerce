-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2019 at 02:05 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theodx9d_ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(7, 'Sahil Mehta', 'contact.sahil.mehta@gmail.com', '@1TesT2@', 'sahil_mehta.png', 'India', ' CEO and Founder at www.theodorefashion.com ', '9896098660', 'CEO and Founder at www.theodorefashion.com');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(2, 'GENUINE PRODUCTS', 'We believe in our products.\r\nWe believe in our customers.\r\nBelieve us once. You will never regret.'),
(3, 'BEST CUSTOMER SUPPORT', 'We treat our customers like our families.'),
(4, ' BEST PRICES ', 'We believe in giving value for money. Our prices are best and as per current market standards.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `p_price`) VALUES
(27, '150.242.174.36', 17, '22.48'),
(28, '150.242.60.72', 5, '10'),
(32, '150.242.175.85', 1, '22.48'),
(33, '150.242.174.36', 1, '18.6'),
(42, '150.242.60.72', 3, '29'),
(43, '117.224.19.0', 2, '29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(1, 'Men', 'yes', 'men.jpg'),
(2, 'Women', 'yes', 'women.jpg'),
(3, 'Kids', 'no', 'kids.jpg'),
(4, 'Other', 'no', 'others.jpg'),
(5, 'Couple', 'yes', 'couple.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(9, 33, 'offer50%', '10', 'Nitin', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(10, 'Mohit', 'Mohitkumar95870@gmail.com ', 'mohit95870', 'India', 'Sirsa', '9729837552 ', 'Satluj school wali gali, sirsa', 'Video_10_27_2019_06_35.mp4', '150.242.60.72'),
(11, 'Nitin kataria', 'katariasirsa@gmail.com', '1234', 'india', 'Sirsa', '9466870020', 'H. No. 6 bank colony hisar road', '1200px-Blank_button.svg.png', '157.36.207.16');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`) VALUES
(16, 9, 19, 482521736, 1, '2019-11-02', 'Complete'),
(17, 10, 45, 1278466411, 2, '2019-11-03', 'pending'),
(18, 10, 93, 1327766258, 5, '2019-11-03', 'pending'),
(19, 11, 37, 1181555173, 2, '2019-11-03', 'Complete'),
(20, 11, 87, 1554642090, 3, '2019-11-03', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(6, 'Smart Enterprises', 'yes', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(9, 66, 4, 'Western Union', 555, 77, '777'),
(10, 0, 0, 'Back Code', 7, 7, '7');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(15, 10, 1278466411, '24', 2, 'pending'),
(16, 10, 1327766258, '33', 5, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_img4` text NOT NULL,
  `product_img5` text NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_img4`, `product_img5`, `product_price`, `product_keywords`, `product_desc`, `product_label`, `product_sale`) VALUES
(21, 1, 1, 0, '2019-10-30 19:22:24', ' Premium Blue Leather Strap Wrist Watch ', '1.1.jpg', '1.2.jpg', '1.3.jpg', '1.4.jpg', '1.5.jpg', 22.48, 'THEODORE TDM16001 Premium Blue Leather Strap Wrist Watch ', '<p><strong>THEODORE TDM16001 Premium Blue Leather Strap Wrist Watch&nbsp;</strong></p>', '.', 0),
(22, 1, 1, 0, '2019-10-30 19:52:02', 'Premium Tan Leather Strap Wrist Watch ', '2.1.jpg', '2.2.jpg', '2.3.jpg', '2.4.jpg', '2.5.jpg', 22.48, 'THEODORE TDM16002 Premium Tan Leather Strap Wrist Watch ', '<p><strong>THEODORE TDM16002 Premium Tan Leather Strap Wrist Watch&nbsp;</strong></p>', '.', 0),
(23, 1, 1, 0, '2019-10-30 19:56:40', 'Premium Brown Leather Strap Wrist Watch ', '3.1.jpg', '3.2.jpg', '3.3.jpg', '3.4.jpg', '3.5.jpg', 22.48, 'THEODORE TDM16003 Premium Brown Leather Strap Wrist Watch ', '<p><strong>THEODORE TDM16003 Premium Brown Leather Strap Wrist Watch&nbsp;</strong></p>', '.', 0),
(24, 1, 1, 0, '2019-10-30 20:06:54', 'Premium Black Leather Strap Wrist Watch ', '4.1.jpg', '4.2.jpg', '4.3.jpg', '4.4.jpg', '4.5.jpg', 22.48, 'THEODORE TDM16004 Premium Black Leather Strap Wrist Watch ', '<p><strong>THEODORE TDM16004 Premium Black Leather Strap Wrist Watch&nbsp;</strong></p>', '.', 0),
(25, 1, 1, 0, '2019-10-30 20:08:09', 'Blue Premium Stainless Steel Wrist Watch', '5.1.jpg', '5.2.jpg', '5.3.jpg', '5.4.jpg', '5.5.jpg', 22.48, 'THEODORE TDM16005 Blue Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16005 Blue Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(26, 1, 1, 0, '2019-10-30 20:09:34', 'Black Premium Stainless Steel Wrist Watch', '6.1.jpg', '6.2.jpg', '6.3.jpg', '6.4.jpg', '6.5.jpg', 22.48, 'THEODORE TDM16006 Black Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16006 Black Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(27, 1, 1, 0, '2019-10-30 20:10:58', 'White Premium Stainless Steel Wrist Watch', '7.1.jpg', '7.2.jpg', '7.3.jpg', '7.4.jpg', '7.5.jpg', 22.48, 'THEODORE TDM16007 White Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16007 White Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(28, 1, 1, 0, '2019-10-30 20:20:15', 'THEODORE TDM16008 Blue Premium Stainless Steel Wrist Watch', '8.1.jpg', '8.2.jpg', '8.3.jpg', '8.4.jpg', '8.5.jpg', 22.48, 'THEODORE TDM16008 Blue Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16008 Blue Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(29, 1, 1, 0, '2019-10-30 20:21:20', 'Blue Premium Stainless Steel Wrist Watch', '9.1.jpg', '9.2.jpg', '9.3.jpg', '9.4.jpg', '9.5.jpg', 22.48, 'THEODORE TDM16009 Blue Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16009 Blue Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(30, 1, 1, 0, '2019-10-30 20:22:33', 'Black Premium Stainless Steel Wrist Watch', '10.1.jpg', '10.2.jpg', '10.3.jpg', '10.4.jpg', '10.5.jpg', 22.48, 'THEODORE TDM16010 Black Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16010 Black Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(31, 1, 1, 0, '2019-10-30 20:23:41', 'White Premium Stainless Steel Wrist Watch', '11.1.jpg', '11.2.jpg', '11.3.jpg', '11.4.jpg', '11.5.jpg', 22.48, 'THEODORE TDM16011 White Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16011 White Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(32, 1, 1, 0, '2019-10-30 20:24:41', 'Blue Premium Stainless Steel Wrist Watch', '12.1.jpg', '12.2.jpg', '12.3.jpg', '12.4.jpg', '12.5.jpg', 22.48, 'THEODORE TDM16012 Blue Premium Stainless Steel Wrist Watch', '<p><strong>THEODORE TDM16012 Blue Premium Stainless Steel Wrist Watch</strong></p>', '.', 0),
(33, 1, 2, 0, '2019-10-30 20:33:15', 'Pink Premium Leather Strap Wrist Watch', '16.1.jpg', '16.2.jpg', '16.3.jpg', '16.4.jpg', '16.5.jpg', 18.6, 'THEODORE TDF16016 Pink Premium Leather Strap Wrist Watch', '<p><strong>THEODORE TDF16016 Pink Premium Leather Strap Wrist Watch</strong></p>', '.', 0),
(42, 1, 5, 0, '2019-11-05 13:49:47', 'THEODORE WRIST WATCH COMBO 1', '113-16.jpg', '', '', '', '', 29, 'New watch 1', '', 'new', 0),
(43, 1, 5, 0, '2019-11-05 13:48:23', 'THEODORE WRIST WATCH COMBO', '121-16B.jpg', '', '', '', '', 29, 'New watch', '', 'sale', 20);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(1, 'Watch', 'yes', 'watches.jpg'),
(5, ' Wallet', 'no', 'product_category_wallet.jpg'),
(6, 'Belts (Coming soon)', 'no', 'product_category_belts.jpg'),
(7, ' Corporate Gifts', 'yes', 'product_category_corporate_gifts.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(15, 'slide12', '4.jpg', ''),
(16, 'slide7', '5.jpg', ''),
(17, 'slide3', '2A.jpg', ''),
(19, 'slide2', '3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(9, 'Rules & Regulations', 'link_1', '<h1 style=\"text-align: center;\"><strong>UPDATING SOON...</strong></h1>'),
(10, 'Promo & Regulations', 'link_2', '<h1 style=\"text-align: center;\"><strong>UPDATING SOON...</strong></h1>'),
(11, 'Refund Condition Policy', 'link_3', '<h1 style=\"text-align: center;\"><strong>UPDATING SOON...</strong></h1>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

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
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
