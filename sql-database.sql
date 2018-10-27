-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 08:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wad_categories`
--

CREATE TABLE `wad_categories` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wad_categories`
--

INSERT INTO `wad_categories` (`cat_id`, `name`) VALUES
(1, 'Men\'s Shirts'),
(2, 'Men\'s T-Shirts'),
(3, 'Men\'s Trousers'),
(4, 'Women\'s Dresses'),
(5, 'Women\'s Blouses'),
(6, 'Women\'s Skirts'),
(7, 'Accessories Shoes'),
(8, 'Accessories Jewelry\r\n'),
(9, 'Accessories Watches'),
(10, 'Accessories Handbags & Wallets');

-- --------------------------------------------------------

--
-- Table structure for table `wad_login`
--

CREATE TABLE `wad_login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wad_login`
--

INSERT INTO `wad_login` (`login_id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'Asd123456'),
(2, 'ad@ad.com', 'Asd123456');

-- --------------------------------------------------------

--
-- Table structure for table `wad_product`
--

CREATE TABLE `wad_product` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` float NOT NULL,
  `picture_1` varchar(200) NOT NULL,
  `picture_2` varchar(200) DEFAULT NULL,
  `picture_3` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wad_product`
--

INSERT INTO `wad_product` (`pro_id`, `cat_id`, `pro_name`, `description`, `price`, `picture_1`, `picture_2`, `picture_3`, `created_at`, `updated_at`) VALUES
(1000, 1, 'Legendary Whitetails Men\'s Buck Camp Flannel Shirt', 'A hunter’s wardrobe is not complete without a great flannel. Our exclusive plaids are made from 100% cotton soft brushed flannel. Featuring double pleat back for ease of movement and contrasting corduroy lined collar and cuffs for a great look and lasting durability. Left chest pocket with pencil slot and button closure, and adjustable cuffs.', 29.99, '.\\images\\Products\\Mens_Shirt\\1000_1.jpg', '.\\images\\Products\\Mens_Shirt\\1000_2.jpg', '.\\images\\Products\\Mens_Shirt\\1000_3.jpg', '2018-10-23 11:57:03', '2018-10-23 11:58:06'),
(1001, 1, 'Jerzees Men\'s Long-Sleeve T-Shirt', '5.6 oz., pre-shrunk 50/50 cotton/polyester. Advanced moisture-management performance. Noticeably softer hand & excellent printability. Double-needle stitched bottom hem and front collar. Shoulder-to-shoulder taping. Rib cuffs with concealed seams. Quarter turned. Tearaway label.', 24.99, '.\\images\\Products\\Mens_Shirt\\1001_1.jpg', '.\\images\\Products\\Mens_Shirt\\1001_2.jpg', NULL, '2018-10-23 11:57:03', '2018-10-23 11:58:06'),
(1002, 1, 'Carhartt Men\'s Big & Tall Workwear Pocket Short-Sleeve T-Shirt Original Fit K87', 'Carhartt Men\'s Size Chart Some days are longer than others. When that work day turns into a work night, you\'ll be glad the Workwear Pocket Tee is the partner you\'re doing it with. Original Fit is designed for the working man and provides the most room to move. 6.75-ounce heavyweight cotton jersey. Rib knit crew is tagless for increased comfort. Short-sleeve coverage. Five-point patch pocket with woven brand tag. Side-seamed construction minimizes twisting. Straight hemline. 100% cotton.• Heather Grey: 90% cotton, 10% polyester.• Ash: 99% cotton, 1% polyester. Machine wash cold, tumble dry low. Imported. Measurements: Length: 36 in Product measurements were taken using size XLT. Please note that measurements may vary by size.', 34.99, '	\r\n.\\images\\Products\\Mens_Shirt\\1002_1.jpg', NULL, NULL, '2018-10-23 11:57:03', '2018-10-23 11:58:06'),
(1003, 2, 'Colortone Youth & Adult Tie Dye T-Shirt', 'Colortone tie dye apparel is all hand dyed for a superior look and feel. No two garments are exactly alike. Enjoy each for it\'s own uniqueness. Great Birthday Gift, Holiday Present or Party Favor', 14.99, '.\\images\\Products\\Mens_Tshirt\\1003_1.jpg', NULL, NULL, '2018-10-23 13:55:11', '2018-10-23 13:55:11'),
(1004, 2, 'Gildan Men\'s Classic Ultra Cotton Short Sleeve T-Shirt', 'Gildan is a leading provider of everyday quality family apparel, including t-shirts, fleece, sport shirts, underwear, socks, hosiery, and shape wear.', 19.99, '.\\images\\Products\\Mens_Tshirt\\1004_1.jpg', NULL, NULL, '2018-10-23 13:59:55', '2018-10-23 13:59:55'),
(1005, 2, 'Gildan Men\'s Ultra Cotton Tee Extended Sizes', 'Gildan is a leading provider of everyday quality family apparel, including t-shirts, fleece, sport shirts, underwear, socks, hosiery, and shape wear.', 39.99, '.\\images\\Products\\Mens_Tshirt\\1005_1.jpg', NULL, NULL, '2018-10-23 14:47:18', '2018-10-23 14:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `wad_users`
--

CREATE TABLE `wad_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nike_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tp` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wad_categories`
--
ALTER TABLE `wad_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `wad_login`
--
ALTER TABLE `wad_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `wad_product`
--
ALTER TABLE `wad_product`
  ADD PRIMARY KEY (`pro_id`,`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `wad_users`
--
ALTER TABLE `wad_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wad_categories`
--
ALTER TABLE `wad_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wad_login`
--
ALTER TABLE `wad_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wad_product`
--
ALTER TABLE `wad_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `wad_users`
--
ALTER TABLE `wad_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wad_product`
--
ALTER TABLE `wad_product`
  ADD CONSTRAINT `wad_product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `wad_categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
