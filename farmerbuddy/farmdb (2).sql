-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 05:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shopname` varchar(400) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` bigint(255) NOT NULL,
  `category` text NOT NULL,
  `units` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `user_id`, `shopname`, `productname`, `productprice`, `category`, `units`, `image`) VALUES
(69, 2, 'fresh products', 'Dheepam lamp oil', 100, 'oils', '500ml', 'dheepam lamp oil.jpg'),
(70, 2, 'fresh products', 'Elaichi', 50, 'seeds', '100g', 'elaichi.jpg'),
(71, 2, 'fresh products', 'Fortune Refined Oil', 180, 'oils', '1 L', 'fortune refined.jpg'),
(72, 2, 'fresh products', 'Idhayam Sesame oil', 350, 'oils', '1 L', 'idhayam sesame oil.webp'),
(73, 2, 'fresh products', 'Idly Rice', 35, 'rice', '1 kg', 'idly rice.jpg'),
(74, 2, 'fresh products', 'Idly Kurunai Rice', 28, 'rice', '1kg', 'idly kurunai rice.jpg'),
(75, 2, 'fresh products', 'Jaggery Powder', 35, 'others', '500g', 'jaggery powder.jpg'),
(76, 2, 'fresh products', 'Jeerega Samba Rice', 100, 'rice', '1kg', 'jeeraga samba rice.jpg'),
(77, 2, 'fresh products', 'Karnataka Ponni Rice', 50, 'rice', '1kg', 'karnataka ponni rice.jpeg'),
(78, 2, 'fresh products', 'kismis', 40, 'seeds', '100g', 'kismis.jpg'),
(79, 2, 'fresh products', 'mantra groundnut oil', 100, 'oils', '500 ml', 'mantra groundnut oil.jpg'),
(80, 2, 'fresh products', 'moong dhal', 25, 'pulses', '250gm', 'moong dhal.jpeg'),
(81, 3, 'M store', 'sakthi chilli chicken masala', 9, 'spices', '50gm', '50-chilli-chicken-65-masala-pouch-sakthi-powder.webp'),
(82, 3, 'M store', 'aachi idly chilli powder ', 18, 'spices', '100g', '100-box-idly-chilli-powder-aachi-powder-original-imaevag6f5vtvb8g.webp'),
(83, 3, 'M store', 'aachi garam masala powder', 9, 'spices', '50gm', 'aachi-garam-masala-powder-50-g-product.jpg'),
(84, 3, 'M store', 'aashirwad salt ', 18, 'others', '500g', 'aashirvaad.jpg'),
(85, 3, 'M store', 'kadalai paruppu', 24, 'pulses', '250gm', 'bengal-gram(kadalaparupu).jpg'),
(86, 3, 'M store', 'biriyani rice', 103, 'rice', '1kg', 'biryani-rice.jpg'),
(87, 3, 'M store', 'Black Kismis', 28, 'seeds', '100g', 'black kismis.jpg'),
(88, 3, 'M store', 'everest biriyani masala', 12, 'spices', '50gm', 'briyanimasala.jpg'),
(89, 3, 'M store', 'Chick peas green', 24, 'seeds', '250gm', 'chickpeas(green).jpg'),
(90, 3, 'M store', 'Coconut oil', 150, 'oils', '500ml', 'coconut oil 3.png'),
(91, 3, 'M store', 'Dheepam lamp oil', 110, 'oils', '500ml', 'dheepam lamp oil.jpg'),
(92, 3, 'M store', 'Elaichi', 56, 'seeds', '100g', 'elaichi.jpg'),
(93, 3, 'M store', 'Fortune Refined Oil', 190, 'oils', '1 l', 'fortune refined.jpg'),
(94, 3, 'M store', 'groundnut oil', 200, 'oils', '1 l', 'groundnut oil.jpg'),
(95, 3, 'M store', 'Idhayam Sesame oil', 340, 'oils', '1 l', 'idhayam sesame oil.webp'),
(96, 3, 'M store', 'Idly Rice', 34, 'rice', '1kg', 'idlirice.jpg'),
(97, 3, 'M store', 'kalsar rice', 52, 'rice', '1kg', 'kalsar rice.webp'),
(98, 3, 'M store', 'mr.gold groundnut oil', 210, 'oils', '1 l', 'mr.gold groundnut oil.webp'),
(99, 3, 'M store', 'kalyanaponni', 52, 'rice', '1kg', 'kalyanaponni.jpg'),
(100, 3, 'M store', 'kismis', 26, 'seeds', '50gm', 'kismis.jpg'),
(101, 3, 'M store', 'pepper', 68, 'pulses', '100g', 'pepper.jpg'),
(102, 3, 'M store', 'jaggery powder', 34, 'others', '500g', 'jaggery powder.jpg'),
(103, 3, 'M store', 'pachari rice', 70, 'rice', '1kg', 'pachari rice.jpg'),
(104, 3, 'M store', 'mantra groundnut oil', 210, 'oils', '1 l', 'mantra groundnut oil.jpg'),
(105, 3, 'M store', 'moong dhal', 28, 'pulses', '250gm', 'moong dhal.jpeg'),
(107, 2, 'fresh products', 'pepper', 77, 'spices', '100g', 'pepper.jpg'),
(108, 3, 'M store', 'basmati', 110, 'rice', '1kg', 'basmati.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `Mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `image`, `Mobile`) VALUES
('Firthous', 'Fasi', '', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(100) NOT NULL,
  `farmer_id` int(100) NOT NULL,
  `area` varchar(10) NOT NULL,
  `plotnumber` int(150) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Soiltype` varchar(100) NOT NULL,
  `Amount` int(5) NOT NULL,
  `description` varchar(259) NOT NULL,
  `document` varchar(259) NOT NULL,
  `plot_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_admin`
--

CREATE TABLE `contact_admin` (
  `Mobile` int(10) NOT NULL,
  `Message` varchar(250) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ToNum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_admin`
--

INSERT INTO `contact_admin` (`Mobile`, `Message`, `Email`, `ToNum`) VALUES
(1234567891, 'hi admin', 'fasi@gmail.com', 1234567890),
(0, 'hello', 'fasi@gmail.com', 1234567893),
(1234567891, 'hello', 'fasi@gmail.com', 1234567893),
(2147483647, 'loosu payaley ....sathish', 'maddy@gmail.com', 1234567893);

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `Customername` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`id`, `customer_id`, `Customername`, `Mail`, `Mobile`, `age`, `sex`, `date`) VALUES
(1, 6, '0', '0', 1234567891, 0, '', '2006-11-22'),
(2, 6, 'fasila', 'fasi@gmail.com', 1234567891, 19, 'f', '2007-11-22'),
(3, 6, 'fasila', 'fasi@gmail.com', 1234567891, 21, 'f', '2007-11-22'),
(4, 6, 'fasila', 'fasi@gmail.com', 1234567891, 22, 'f', '2007-11-22'),
(5, 6, 'fasila', 'fasi@gmail.com', 1234567891, 22, 'f', '2007-11-22'),
(6, 6, 'fasila', 'fasi@gmail.com', 1234567891, 22, 'f', '2008-11-22'),
(7, 6, 'fasila', 'fasi@gmail.com', 1234567891, 21, 'f', '2008-11-22'),
(8, 6, 'fasi', 'fasi@gmail.com', 1234567891, 18, 'f', '2012-11-22'),
(9, 6, 'fasi', 'fasi@gmail.com', 1234567891, 22, 'f', '2012-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `orderid` int(100) NOT NULL,
  `farmerid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `area` varchar(25) NOT NULL,
  `plotnumber` int(100) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Soiltype` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`orderid`, `farmerid`, `name`, `contact`, `area`, `plotnumber`, `Location`, `Soiltype`, `description`, `Amount`) VALUES
(12, 6, 'fasila', 1234567891, '1600sq.ft ', 7, 'trichy', 'blacksoil', '1sklnvkds', 3000),
(12, 6, 'fasila', 1234567891, '1600sq.ft ', 7, 'trichy', 'blacksoil', '1sklnvkds', 3000),
(12, 6, 'fasila', 1234567891, '1600sq.ft ', 7, 'trichy', 'blacksoil', '1sklnvkds', 3000),
(13, 6, 'fasila', 1234567891, '1600sq.ft ', 7, 'trichy', 'blacksoil', '1sklnvkds', 3000),
(14, 6, 'fasila', 1234567891, '1500sq.ft ', 9, 'chennai', 'blacksoil', 'hjuedhiwe', 300),
(15, 6, 'fasi', 1234567891, '1500sq.ft ', 9, 'chennai', 'blacksoil', 'hjuedhiwe', 300),
(16, 6, 'fasi', 1234567891, '1500sq.ft ', 12, 'madurai', 'humidty', 'gvjh', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(30) NOT NULL,
  `U_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `U_Password`) VALUES
('abc@gmail.com', 'e456'),
('sdfsadfd@gmail.com', '778798nk'),
('xyz@gmail.com', '1234'),
('cve@gmail.com', '9087'),
('ZD@gmail.com', '678'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `myorders`
--

CREATE TABLE `myorders` (
  `orderid` int(100) NOT NULL,
  `farmerid` int(100) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `plotnumber` int(100) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Amount` int(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myorders`
--

INSERT INTO `myorders` (`orderid`, `farmerid`, `Area`, `plotnumber`, `Location`, `Amount`, `status`) VALUES
(12, 6, '1600sq.ft ', 7, 'trichy', 3000, 'Booked'),
(13, 6, '1600sq.ft ', 7, 'trichy', 3000, 'Booked'),
(14, 6, '1500sq.ft ', 9, 'chennai', 300, 'Booked'),
(15, 6, '1500sq.ft ', 9, 'chennai', 300, 'Booked'),
(16, 6, '1500sq.ft ', 12, 'madurai', 4000, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `plot_id` int(100) NOT NULL,
  `area` varchar(30) NOT NULL,
  `plotnumber` int(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Soiltype` varchar(50) NOT NULL,
  `Amount` int(5) NOT NULL,
  `description` varchar(250) NOT NULL,
  `document` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `Mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Category` int(3) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `Mobile`, `Category`, `Image`) VALUES
(5, 'firthous', 'firthous@gmail.com', '3e733d48b4c9ce96f8b3b619a07721f7', 1234567895, 1, ''),
(6, 'fasi', 'fasi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1234567891, 1, ''),
(7, 'fasila', 'fasifirthous@gmail.com', '393b77f40a48687810583782e278aa2e', 1234567895, 2, ''),
(8, 'fasila', 'fasi2@gmail.com', '393b77f40a48687810583782e278aa2e', 1234567893, 2, ''),
(9, 'maddy', 'maddy@gmail.com', 'd7265d02b941b1f9ed412ec89de2059a', 2147483647, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`plot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `plot_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
