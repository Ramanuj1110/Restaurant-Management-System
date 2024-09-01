-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 07:07 PM
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
-- Database: `restaurent_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `CART_ID` int(11) NOT NULL,
  `FOOD_ID` int(10) NOT NULL,
  `FOOD_IMAGE` varchar(500) NOT NULL,
  `FOOD` varchar(30) NOT NULL,
  `PRICE` int(10) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`CART_ID`, `FOOD_ID`, `FOOD_IMAGE`, `FOOD`, `PRICE`, `USERNAME`, `DATE`) VALUES
(22, 25, 'foodimages/image2.jpg', 'Masala Dosa', 140, 'Nk@gmail.com', '2024-07-11 01:46:14'),
(24, 26, 'foodimages/image3.jpg', 'Paneer Butter Masala', 256, 'Nk@gmail.com', '2024-07-11 02:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `ADMIN_ID` int(10) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `Email` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`ADMIN_ID`, `USERNAME`, `PASSWORD`, `Email`) VALUES
(1, 'NAVIN', 'NAVIN123', 0),
(2, 'RAMANUJ', 'Ramanuj@12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bestsaller`
--

CREATE TABLE `bestsaller` (
  `FOOD_ID` int(11) NOT NULL DEFAULT 0,
  `FOOD_IMAGE` varchar(500) NOT NULL,
  `FOOD` varchar(30) NOT NULL,
  `PRICE` int(10) NOT NULL,
  `DESCRIPTIONS` varchar(100) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestsaller`
--

INSERT INTO `bestsaller` (`FOOD_ID`, `FOOD_IMAGE`, `FOOD`, `PRICE`, `DESCRIPTIONS`, `CATEGORY`) VALUES
(23, 'foodimages/image1.jpg', 'Veg Briyani', 210, 'An aromatic Indian dish that consists of rice and vegetables flavoured with a blend of spices.', 'Rice'),
(25, 'foodimages/image2.jpg', 'Masala Dosa', 140, 'A thin crisp dosa, consumed with a spicy potato sabji.', 'Our Speciality'),
(26, 'foodimages/image3.jpg', 'Paneer Butter Masala', 256, 'Rich and creamy dish of paneer in a tomato, butter and cashew sauce.', 'Vegitable Dishes'),
(27, 'foodimages/image4.jpg', 'Litti Chokha', 90, 'A very traditional and rustic dish of spiced sattu (roasted black chickpea flour) stuffed whole whea', 'Our Speciality'),
(28, 'foodimages/image5.jpg', 'Chaole Bhature', 120, 'A spiced tangy chickpea curry and Bhatura is a soft and fluffy fried leavened bread.', 'Our Speciality'),
(29, 'foodimages/image6.jpg', 'Rasmalai', 45, 'Rasmalai consists of flattened balls of chhena soaked in malai (a type of clotted cream) flavoured w', 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FID` int(11) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `MESSAGE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_detail`
--

CREATE TABLE `food_detail` (
  `FOOD_ID` int(11) NOT NULL,
  `FOOD_IMAGE` varchar(500) NOT NULL,
  `FOOD` varchar(30) NOT NULL,
  `PRICE` int(10) NOT NULL,
  `DESCRIPTIONS` varchar(500) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_detail`
--

INSERT INTO `food_detail` (`FOOD_ID`, `FOOD_IMAGE`, `FOOD`, `PRICE`, `DESCRIPTIONS`, `CATEGORY`) VALUES
(23, 'foodimages/image1.jpg', 'Veg Briyani', 210, 'An aromatic Indian dish that consists of rice and vegetables flavoured with a blend of spices.', 'Rice'),
(25, 'foodimages/image2.jpg', 'Masala Dosa', 140, 'A thin crisp dosa, consumed with a spicy potato sabji.', 'Our Speciality'),
(26, 'foodimages/image3.jpg', 'Paneer Butter Masala', 256, 'Rich and creamy dish of paneer in a tomato, butter and cashew sauce.', 'Vegitable Dishes'),
(27, 'foodimages/image4.jpg', 'Litti Chokha', 90, 'A very traditional and rustic dish of spiced sattu (roasted black chickpea flour) stuffed whole wheat dough balls.', 'Our Speciality'),
(28, 'foodimages/image5.jpg', 'Chaole Bhature', 120, 'A spiced tangy chickpea curry and Bhatura is a soft and fluffy fried leavened bread.', 'Our Speciality'),
(29, 'foodimages/image6.jpg', 'Rasmalai', 45, 'Rasmalai consists of flattened balls of chhena soaked in malai (a type of clotted cream) flavoured with cardamom.', 'Dessert'),
(30, 'foodimages/image7.jpg', 'Mix Veg', 220, 'Mixed Vegetable curry is a dish made with a variety of fresh vegetables in an onion tomato gravy flavored with spices and herbs.', 'Vegitable Dishes'),
(31, 'foodimages/image8.jpg', 'Matar Paneer', 245, 'Matar Paneer is a popular North Indian dish of Indian cottage cheese aka Paneer and peas cooked in a spicy and flavorsome curry.', 'Vegitable Dishes'),
(32, 'foodimages/image10.jpg', 'Steamed Rice', 100, 'Steamed rice is simply plain white rice that is cooked using water and steam.', 'Rice'),
(33, 'foodimages/image11.jpg', 'Jeera Rice', 150, 'Jeera Rice is an easy and flavored rice recipe made with cumin seeds, ghee and basmati rice.', 'Rice'),
(34, 'foodimages/image12.jpg', 'Veg Fried Rice', 200, 'This classic Veg Fried Rice recipe is made with a hearty mix of fresh vegetables,green onions, seasonings and spices.', 'Rice'),
(35, 'foodimages/image13.jpg', 'Dal Makhani', 160, 'Dal makhani is a popular North Indian dish where whole black lentils & red kidney beans are slow cooked with spices, butter & cream.', 'Dal'),
(36, 'foodimages/image14.jpg', 'Dal Tadka', 150, 'Dal Tadka is a popular Indian dish where cooked spiced lentils are finished with a tempering made of ghee/ oil and spices.', 'Dal'),
(37, 'foodimages/image19.jpg', 'Gulab Jamun', 35, 'Gulab jamun is a beloved Indian dessert consisting of fried balls of a dough made from milk solids and semolina, soaked with an aromatic syrup.', 'Dessert'),
(38, 'foodimages/image20.jpg', 'Strawberry Ice Cream', 122, 'ice cream is a flavor of ice cream made with strawberry or strawberry flavoring.', 'Dessert'),
(39, 'foodimages/image17.jpg', 'Naan', 50, 'Naan is a white leavened flatbread that is traditionally cooked in a tandoor.', 'Breads'),
(41, 'foodimages/image15.jpg', 'Tawa Roti', 20, 'It is a traditional and tasty north indian flatbread recipe made with wheat flour using tawa.', 'Breads'),
(42, 'foodimages/image16.jpg', 'Butter Tandoori Roti', 55, 'It is a flatbread made with whole wheat and traditionally cooked in tandoor and brushed with butter.', 'Breads'),
(43, 'foodimages/image18.jpg', 'Butter Kulcha', 60, 'Butter kulcha is a popular and one of the most sought after north Indian flatbread.', 'Breads'),
(44, 'foodimages/image9.jpg', 'Kadhai Mashroom', 240, 'Kadai mushroom is a delicious dish of sautéed button mushrooms, onions and bell peppers in a semi-dry gravy of spiced and tangy tomato sauce.', 'Vegitable Dishes'),
(45, 'foodimages/image21.jpg', 'Chocolate Cake', 245, 'This rich, fudgy chocolate cake will melt in your mouth with every bite.', 'Dessert'),
(46, 'foodimages/image22.jpg', 'Pao Bhaji', 110, 'Pav bhaji is a spiced mixture of mashed vegetables in a thick gravy served with bread.', 'Our Speciality'),
(47, 'foodimages/image27.jpg', 'Udon', 250, 'Udon is a type of thick noodle from Japan that is typically made from wheat flour.', 'Noodles'),
(48, 'foodimages/image28.jpg', 'Soba', 275, 'Soba is a type of thin Japanese noodle. It is made from buckwheat flour. It is served either chilled with a dipping sauce.', 'Noodles'),
(49, 'foodimages/image29.jpg', 'Wonton', 270, 'The wonton noodles are the Malaysian dish that are tossed with a dark sauce and topped with boiled wontons or fried wontons.', 'Noodles'),
(50, 'foodimages/image30.jpg', 'Spaghetti', 280, 'Spaghetti, thin, straight, cylindrical pasta of Italian origin, the most popular of all pastas eaten today..', 'Noodles'),
(51, 'foodimages/image31.jpg', 'Ramen', 240, 'Ramen noodles are a type of Japanese noodle made from wheat flour and typically served in a flavorful broth.', 'Noodles'),
(52, 'foodimages/image32.jpg', 'Veg Manchurian', 150, 'Manchurian 150 Veg Manchurian is a tasty Indo Chinese dish of fried veggie balls in a spicy, sweet and tangy sauce.', 'Manchurian'),
(53, 'foodimages/image33.jpg', 'Gobi Manchurian', 120, 'Gobi Manchurian is a popular Indo Chinese dish of batter coated pan fried cauliflower florets tossed with a spicy, sweet and sour sauce.', 'Manchurian'),
(54, 'foodimages/image34.jpg', 'Mushroom Manchurian', 180, 'Mushroom Manchurian is a popular Indo Chinese dish of batter coated pan fried cauliflower florets tossed with a spicy, sweet and sour sauce.', 'Manchurian'),
(55, 'foodimages/image35.jpg', 'Paneer Manchurian', 220, 'Paneer Manchurian is a savory, satisfying dish that features (shallow or deep) fried paneer cubes.', 'Manchurian'),
(56, 'foodimages/image36.jpg', 'Tomato Soup', 110, 'Tomato Soup is a very smooth and thin to mildly thicktextured soup.', 'Soup'),
(57, 'foodimages/image37.jpg', 'Mushroom Soup', 120, 'Mushroom Soup is a creamy, spiced soup made by simmering mushroom along with garlic,onion in a milk based creamy sauce.', 'Soup'),
(58, 'foodimages/image38.jpg', 'Sweetcorn soup', 120, 'Sweet corn soup is an easy and delicious soup made from fresh American sweet corn, scallions, herbs and spices.', 'Soup'),
(59, 'foodimages/image39.jpg', 'Hot & Sour soup', 125, 'Hot and Sour soup is a spicy and hot soup made with mixed fresh vegetables, mushrooms,spices and soy sauce.', 'Soup'),
(60, 'foodimages/image40.jpg', 'Spring onion soup', 105, 'Spring onion soup or Scallion soup recipe - creamy, thick, smooth and flavorful soup recipe made from spring onions.', 'Soup'),
(61, 'foodimages/image41.jpg', 'Carrot ginger soup', 110, 'A flavoured and creamy soup recipe made with fresh carrots and a hint of ginger.', 'Soup'),
(62, 'foodimages/image42.jpg', 'Ice Tea', 60, 'Ice tea or iced tea is a drink made from tea without milk but with sugar and sometimes fruit flavorings, drunk cold.', 'Coffee & Tea'),
(63, 'foodimages/image43.jpg', 'Tea', 40, 'Tea is a fragrant beverage made from the dried or fresh leaves of the evergreen shrub Camellia sinensis.', 'Coffee & Tea'),
(64, 'foodimages/image44.jpg', 'Regular Coffee', 90, 'Coffee is a beverage prepared from roasted coffee beans.', 'Coffee & Tea'),
(65, 'foodimages/image45.jpg', 'Cappachino', 120, 'A cappuccino is a type of coffee drink. It comes from Italy and is prepared with espresso, hot milk, and steamed-milk foam.', 'Coffee & Tea'),
(66, 'foodimages/image46.jpg', 'Mix fruit juice', 140, 'A Mixed fruit juice brings together the best qualities of different fruits while retaining a unique taste of its own.', 'Juice'),
(67, 'foodimages/image47.jpg', 'Lemonade', 100, 'Lemonade is a drink made with water, lemons or lemon juice, and sugar.', 'Juice'),
(68, 'foodimages/image48.jpg', 'Black Grape Juice', 150, 'Black grapes are small, sweet fruits — famous for their intense blueish-purple color that makes them look almost black.', 'Juice'),
(69, 'foodimages/image49.jpg', 'Apple Juice', 140, 'A type of fruit juice that is made from the pulp of apples processed for their juice.', 'Juice'),
(70, 'foodimages/image50.jpg', 'Orange Juice', 90, 'Orange juice is a liquid extract of the orange tree fruit, produced by squeezing or reaming oranges.', 'Juice'),
(71, 'foodimages/image51.jpg', 'Mango Juice', 110, 'A type of fruit juice that is made from the pulp of mango processed for their juice.', 'Juice'),
(72, 'foodimages/image52.jpg', 'Strawberry milkshake', 100, 'Strawberry Milkshake is a delicious drink made with strawberries, milk, ice cream and flavoring ingredients like vanilla extract.', 'Shakes'),
(73, 'foodimages/image53.jpg', 'Chocolate shake', 120, 'A cold sweet beverage prepared from cocoa powder, full cream milk and vanilla ice cream.', 'Shakes'),
(74, 'foodimages/image54.jpg', 'Blueberry shake', 180, 'This blueberry shake is made with ice cream, milk and frozen blueberries and is perfect for a hot day.', 'Shakes'),
(75, 'foodimages/image55.jpg', 'Vanilla shake', 150, 'Vanilla Milkshake, world favorite milkshake, is a smooth and creamy concoction of vanilla ice cream, milk, vanilla extract topped up with whipped cream.', 'Shakes'),
(77, 'foodimages/image57.jpg', 'Virgin Strawberry Daiquiri', 170, 'Virgin Strawberry Daiquiri is icy cold and loaded with strawberry and lime.', 'Mocktail'),
(78, 'foodimages/image56.jpg', 'Virgin Mint Lemonade', 120, 'This ice cold mocktail is made with fresh mint leaves, freshly squeezed lemon juice, sugar and lots of ice cubes for that slushie texture.', 'Mocktail'),
(79, 'foodimages/image58.jpg', 'Bellini', 180, 'A Bellini combines peach puree with sparkling white wine to create a refreshing cocktail.', 'Mocktail'),
(80, 'foodimages/image59.jpg', 'Virgin Mary Mocktail', 150, 'A non-alcoholic savory beverage with tomato juice, worcestershire sauce, tobasco, black pepper, salt and celery.', 'Mocktail'),
(81, 'foodimages/image60.jpg', 'Apple Pie Moscow Mule', 245, 'This Moscow Mule mocktail uses apple cider and ginger beer for a seasonal, zero-proof drink..', 'Mocktail'),
(82, 'foodimages/image61.jpg', 'Sangria Mocktail', 190, 'Sangria is a mixed alcoholic drink from Spain.', 'Mocktail'),
(83, 'foodimages/Chowmein.jpg', 'Chowmein', 190, 'Chowmein is a popular Chinese dish of stir fried noodles with mix vegetables, soy sauce,aromatics and spices.', 'Noodles');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ORDER_ID` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `FOOD_DETAILS` text DEFAULT NULL,
  `TOTAL_SUBTOTAL` decimal(10,2) DEFAULT NULL,
  `ORDER_DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `SN` int(3) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `TGUEST` int(3) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `USERNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`SN`, `Name`, `TGUEST`, `DATE`, `TIME`, `USERNAME`) VALUES
(1, 'Navin kumar', 3, '2024-07-09', '15:39:00', 'Nk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `USER_ID` int(11) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `userimages` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`USER_ID`, `NAME`, `USERNAME`, `EMAIL`, `ADDRESS`, `PASSWORD`, `userimages`) VALUES
(24, 'Ramanuj kumar', 'RAM', 'ramanuj@gmail.com', 'xyz', 'RAM', 'userimages/nphoto.jpg'),
(25, 'RAMANUJ', 'rama', 'rama@gmail.com', 'xyz', 'rama', 'userimages/nphoto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`CART_ID`),
  ADD UNIQUE KEY `FOOD` (`FOOD`),
  ADD UNIQUE KEY `FOOD_ID` (`FOOD_ID`);

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `bestsaller`
--
ALTER TABLE `bestsaller`
  ADD PRIMARY KEY (`FOOD_ID`),
  ADD UNIQUE KEY `FOOD` (`FOOD`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `food_detail`
--
ALTER TABLE `food_detail`
  ADD PRIMARY KEY (`FOOD_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`USERNAME`),
  ADD UNIQUE KEY `User_ID` (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `CART_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `ADMIN_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `food_detail`
--
ALTER TABLE `food_detail`
  MODIFY `FOOD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `SN` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
