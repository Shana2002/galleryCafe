-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2024 at 12:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `userImg` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userStates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`userName`, `userEmail`, `userType`, `userImg`, `userPassword`, `userStates`) VALUES
('admin', 'admin@gc.lk', 'admin', 'Profile-PNG-File.png', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `billorder`
--

CREATE TABLE `billorder` (
  `orderId` int(11) NOT NULL,
  `billId` int(11) NOT NULL,
  `menuId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `orderStatus` varchar(20) DEFAULT 'get order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billorder`
--

INSERT INTO `billorder` (`orderId`, `billId`, `menuId`, `qty`, `orderStatus`) VALUES
(1, 1, 1, 1, 'prepaired'),
(2, 1, 2, 1, 'prepaired'),
(3, 1, 4, 3, 'prepaired'),
(4, 2, 4, 1, 'start prepairing'),
(5, 2, 1, 1, 'start prepairing'),
(6, 2, 7, 2, 'start prepairing'),
(7, 3, 2, 1, 'prepaired'),
(8, 3, 4, 1, 'prepaired'),
(9, 3, 6, 1, 'prepaired'),
(10, 3, 5, 1, 'prepaired'),
(11, 3, 7, 2, 'prepaired');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `billId` int(11) NOT NULL,
  `cusId` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `billdate` date NOT NULL,
  `billtime` time NOT NULL,
  `billStatus` varchar(20) DEFAULT 'get order'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`billId`, `cusId`, `subTotal`, `billdate`, `billtime`, `billStatus`) VALUES
(1, 1, 9000, '2024-09-27', '17:12:02', 'dilivered'),
(2, 2, 6750, '2024-09-27', '19:26:58', 'start cooking'),
(3, 3, 10000, '2024-09-27', '21:03:26', 'dilivered');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL,
  `catImg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catId`, `catName`, `catImg`) VALUES
(1, 'Rice', 'rice.jpg'),
(2, 'Noodles', 'noodles.jpg'),
(3, 'Kottu', 'kottu.jpg'),
(4, 'Sri Lankan', 'srilankan.jpg'),
(5, 'Soup', 'soup.jpg'),
(6, 'Salad', 'salad.jpg'),
(7, 'Chinese', 'chinese.jpg'),
(8, 'Desserts', 'desserts.jpg'),
(9, 'Beverages', 'beverages.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cusreservation`
--

CREATE TABLE `cusreservation` (
  `reservationId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `resdate` date NOT NULL,
  `restime` time NOT NULL,
  `msg` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cusId` int(11) NOT NULL,
  `cusname` varchar(100) NOT NULL,
  `cusEmail` varchar(255) NOT NULL,
  `cusAddress` varchar(500) NOT NULL,
  `cusMobile` varchar(12) NOT NULL,
  `cusUsername` varchar(50) NOT NULL,
  `cusPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cusId`, `cusname`, `cusEmail`, `cusAddress`, `cusMobile`, `cusUsername`, `cusPassword`) VALUES
(1, 'Hansaka Ravishan', 'hansakaravi02@gmail.com', 'No 1 Lotus Garden, Nugagoda , Waskaduwa', '0712875690', 'shana2002', '12345'),
(2, 'Amara Perera', 'amara.perera@example.com', 'Colombo, Sri Lanka', '0771234567', 'amara.p', 'password1'),
(3, 'Nimal Fernando', 'nimal.fernando@example.com', 'Kandy, Sri Lanka', '0772234567', 'nimal.f', 'password2'),
(4, 'Kamal Silva', 'kamal.silva@example.com', 'Galle, Sri Lanka', '0773234567', 'kamal.s', 'password3'),
(5, 'Chamara Jayasinghe', 'chamara.jayasinghe@example.com', 'Jaffna, Sri Lanka', '0774234567', 'chamara.j', 'password4'),
(6, 'Thushara Wijesinghe', 'thushara.wijesinghe@example.com', 'Kurunegala, Sri Lanka', '0775234567', 'thushara.w', 'password5'),
(7, 'Saman De Silva', 'saman.desilva@example.com', 'Gampaha, Sri Lanka', '0776234567', 'saman.d', 'password6'),
(8, 'Ruwan Wickramasinghe', 'ruwan.wickramasinghe@example.com', 'Ratnapura, Sri Lanka', '0777234567', 'ruwan.w', 'password7'),
(9, 'Upul Gunawardena', 'upul.gunawardena@example.com', 'Matara, Sri Lanka', '0778234567', 'upul.g', 'password8'),
(10, 'Dilini Ranasinghe', 'dilini.ranasinghe@example.com', 'Anuradhapura, Sri Lanka', '0779234567', 'dilini.r', 'password9'),
(11, 'Kavinda Rajapaksha', 'kavinda.rajapaksha@example.com', 'Negombo, Sri Lanka', '0770234567', 'kavinda.r', 'password10');

-- --------------------------------------------------------

--
-- Table structure for table `cus_favourite`
--

CREATE TABLE `cus_favourite` (
  `customer` int(11) NOT NULL,
  `menuID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cus_favourite`
--

INSERT INTO `cus_favourite` (`customer`, `menuID`) VALUES
(1, 2),
(2, 1),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `gc_events`
--

CREATE TABLE `gc_events` (
  `eventId` int(11) NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDescription` varchar(1000) DEFAULT NULL,
  `eventDate` date NOT NULL,
  `eventTime` time NOT NULL,
  `eventImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gc_events`
--

INSERT INTO `gc_events` (`eventId`, `eventName`, `eventDescription`, `eventDate`, `eventTime`, `eventImage`) VALUES
(1, 'Magical Evening', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quam, labore doloribus temporibus vero illo. Magni voluptatum quia autem, rem, nobis dolorem architecto neque quod ipsam sit eos vel ad.', '2024-09-30', '03:47:00', 'riceandcurry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menuId` int(11) NOT NULL,
  `menuName` varchar(255) NOT NULL,
  `menuCategory` varchar(255) NOT NULL,
  `menuDescription` varchar(1000) NOT NULL,
  `menuPrice` int(11) NOT NULL,
  `menuImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menuId`, `menuName`, `menuCategory`, `menuDescription`, `menuPrice`, `menuImage`) VALUES
(1, 'Chicken Fried Rice', 'Rice', 'Indulge in our chicken fried rice, a mouthwatering dish that promises to satisfy your cravings. Each bite features tender pieces of marinated chicken stir-fried to perfection, combined with fluffy, golden rice and vibrant vegetables. Seasoned with savory soy sauce and a hint of garlic, this dish delivers a delightful balance of flavors. Its aroma is irresistible, enticing you to take a bite. Perfect for lunch or dinner, chicken fried rice is a convenient meal option that is both filling and delicious. Treat yourself to this culinary delight—whether you’re dining in or taking out, it’s a dish you won’t want to miss!', 1350, 'chickenfriedrice.jpg'),
(2, 'Seafood Fried Rice ', 'Rice', 'Seafood fried rice is a flavorful dish combining rice with a variety of seafood such as shrimp, squid, fish, and sometimes scallops or mussels. It is typically stir-fried with vegetables like carrots, peas, and onions, and seasoned with soy sauce, garlic, and sometimes a splash of sesame oil. The dish offers a delightful balance of savory, slightly sweet, and umami flavors, with the seafood adding a fresh, oceanic taste to the mix. Often served as a standalone meal, seafood fried rice is popular in many Asian cuisines, offering a perfect blend of protein, carbs, and vegetables in one hearty dish.', 1650, 'seafood.jpg'),
(3, 'Mixed Fried Rice', 'Rice', '\r\nExperience the tantalizing flavors of our mixed fried rice, a delightful dish that combines the best of both worlds. Featuring a colorful medley of shrimp, chicken, and tender vegetables, each mouthful bursts with freshness and flavor. The fluffy rice is expertly stir-fried with savory soy sauce and aromatic spices, creating a harmonious blend that tantalizes your taste buds. Perfectly balanced and satisfying, this dish is ideal for lunch or dinner, providing a hearty meal that’s both nutritious and delicious. Don’t miss out on this culinary gem—treat yourself to our mixed fried rice and savor the delightful combination of textures and flavors!', 1800, 'mixedfr.jpg'),
(4, 'Mongolian Rice', 'Rice', '\r\nDiscover the irresistible taste of our Mongolian fried rice, a unique twist on traditional fried rice that will delight your palate. This dish features perfectly cooked rice stir-fried with tender pieces of marinated beef or chicken, vibrant vegetables, and a savory blend of Mongolian spices. The rich flavors are enhanced with soy sauce and a hint of sesame oil, creating a delectable aroma that beckons you to indulge. Perfect for those seeking something different, Mongolian fried rice is not just a meal; it’s an experience. Treat yourself today and enjoy a satisfying, flavorful dish that will keep you coming back for more!', 2000, 'mongolian.jpg'),
(5, 'Chicken Noodles', 'Noodles', 'Savor the delightful taste of our chicken noodles, a comforting dish that promises to warm your soul. Made with tender, juicy chicken and perfectly cooked noodles, this dish is a harmonious blend of flavors and textures. Each bowl is infused with aromatic spices and savory sauces, creating a rich and satisfying experience. Fresh vegetables add a crunchy contrast, enhancing the overall enjoyment. Ideal for lunch or dinner, chicken noodles are not only delicious but also a hearty meal that’s quick and convenient. Treat yourself to this delectable dish today and discover why it’s a favorite among our customers! You wont be disappointed', 1450, 'chickennoodless.jpg'),
(6, 'Ramen', 'Noodles', 'Experience the exquisite flavors of our ramen, a beloved Japanese dish that delights the senses. Each bowl features rich, flavorful broth simmered to perfection, providing a warm and comforting base. Tender noodles are expertly cooked, creating a satisfying chewiness that complements the broth beautifully. Topped with juicy slices of pork, fresh vegetables, and a perfectly soft-boiled egg, every bite offers a delightful balance of taste and texture. Ramen is not just a meal; it’s an experience that transports you to Japan with every spoonful. Treat yourself to this delicious dish today and enjoy a satisfying culinary adventure that you won’t forget.', 1500, 'ramen.webp'),
(7, 'Seafood Noodles', 'Noodles', 'Indulge in the exceptional taste of our seafood noodles, a dish that brings the ocean’s bounty right to your table. Each bowl is filled with perfectly cooked noodles, combined with an assortment of fresh seafood, including succulent shrimp, tender squid, and flaky fish. The rich, savory broth is infused with aromatic herbs and spices, enhancing the natural flavors of the seafood. Crisp vegetables add a delightful crunch, creating a harmonious blend of textures in every bite. Seafood noodles are not only delicious but also a nutritious option that satisfies your cravings. Treat yourself today and enjoy a taste of the sea that you won’t want to miss.', 1700, 'seafood-noodles.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `promId` int(11) NOT NULL,
  `prmoName` varchar(255) NOT NULL,
  `promDescription` varchar(1000) DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `promImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`promId`, `prmoName`, `promDescription`, `startDate`, `endDate`, `promImage`) VALUES
(1, 'Buy 1 Get 1 Free', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo quam, labore doloribus temporibus vero illo. Magni voluptatum quia autem, rem, nobis dolorem architecto neque quod ipsam sit eos vel ad.', '2024-09-27', '2024-10-02', 'japansese.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`userName`,`userEmail`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `billorder`
--
ALTER TABLE `billorder`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `billId` (`billId`),
  ADD KEY `menuId` (`menuId`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`billId`),
  ADD KEY `cusId` (`cusId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catId`),
  ADD UNIQUE KEY `catName` (`catName`);

--
-- Indexes for table `cusreservation`
--
ALTER TABLE `cusreservation`
  ADD PRIMARY KEY (`reservationId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cusId`,`cusUsername`,`cusEmail`),
  ADD UNIQUE KEY `cusEmail` (`cusEmail`),
  ADD UNIQUE KEY `cusMobile` (`cusMobile`),
  ADD UNIQUE KEY `cusUsername` (`cusUsername`);

--
-- Indexes for table `cus_favourite`
--
ALTER TABLE `cus_favourite`
  ADD KEY `customer` (`customer`),
  ADD KEY `menuID` (`menuID`);

--
-- Indexes for table `gc_events`
--
ALTER TABLE `gc_events`
  ADD PRIMARY KEY (`eventId`),
  ADD UNIQUE KEY `eventName` (`eventName`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menuId`),
  ADD UNIQUE KEY `menuName` (`menuName`),
  ADD KEY `menuCategory` (`menuCategory`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promId`),
  ADD UNIQUE KEY `prmoName` (`prmoName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billorder`
--
ALTER TABLE `billorder`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `billId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cusreservation`
--
ALTER TABLE `cusreservation`
  MODIFY `reservationId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gc_events`
--
ALTER TABLE `gc_events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billorder`
--
ALTER TABLE `billorder`
  ADD CONSTRAINT `billorder_ibfk_1` FOREIGN KEY (`billId`) REFERENCES `bills` (`billId`),
  ADD CONSTRAINT `billorder_ibfk_2` FOREIGN KEY (`menuId`) REFERENCES `menus` (`menuId`);

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`cusId`) REFERENCES `customers` (`cusId`);

--
-- Constraints for table `cus_favourite`
--
ALTER TABLE `cus_favourite`
  ADD CONSTRAINT `cus_favourite_ibfk_1` FOREIGN KEY (`customer`) REFERENCES `customers` (`cusId`),
  ADD CONSTRAINT `cus_favourite_ibfk_2` FOREIGN KEY (`menuID`) REFERENCES `menus` (`menuId`);

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`menuCategory`) REFERENCES `categories` (`catName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
