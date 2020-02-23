-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2020 at 09:24 PM
-- Server version: 5.7.29
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modokaa_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact_us`
--

CREATE TABLE `tblcontact_us` (
  `Contact_ID` bigint(20) NOT NULL,
  `Contact_Type` varchar(25) NOT NULL,
  `User_Name` varchar(25) NOT NULL,
  `Mobile_No` varchar(25) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Referral_Code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbldelivery`
--

CREATE TABLE `tbldelivery` (
  `PIN_ID` bigint(20) NOT NULL,
  `PIN` bigint(20) NOT NULL,
  `AREA_NAME` varchar(50) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `COUNTRY` varchar(50) DEFAULT NULL,
  `ACTIVE_STATUS` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbldelivery`
--

INSERT INTO `tbldelivery` (`PIN_ID`, `PIN`, `AREA_NAME`, `CITY`, `STATE`, `COUNTRY`, `ACTIVE_STATUS`) VALUES
(1, 751001, '', 'BHUBANESWAR', 'ODISHA', 'INDIA', b'1'),
(2, 751002, '', 'BHUBANESWAR', 'ODISHA', 'INDIA', b'1'),
(3, 752055, '', 'KHORDHA', 'ODISHA', 'INDIA', b'1'),
(4, 752056, '', 'KHORDHA', 'ODISHA', 'INDIA', b'1'),
(5, 768001, '', 'SAMBALPUR', 'ODISHA', 'INDIA', b'1'),
(6, 768006, '', 'SAMBALPUR', 'ODISHA', 'INDIA', b'1'),
(7, 769012, '', 'SUNDERGARH', 'ODISHA', 'INDIA', b'1'),
(8, 769001, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(9, 769002, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(10, 769003, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(11, 769004, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(12, 769005, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(13, 769006, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(14, 769007, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(15, 769008, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(16, 769014, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(17, 769015, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(18, 779004, '', 'ROURKELA', 'ODISHA', 'INDIA', b'1'),
(19, 768108, '', 'DEOGARH', 'ODISHA', 'INDIA', b'1'),
(20, 760001, '', 'BARHAMPUR', 'ODISHA', 'INDIA', b'1'),
(21, 755007, 'JAJAPUR TOWN', 'JAJAPUR', 'ODISHA', 'INDIA', b'1'),
(22, 751021, 'SAILASHREE VIHAR', 'BHUBANESWAR', 'Odisha', 'India', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `PRODUCT_ID` bigint(20) NOT NULL,
  `PRODUCTS_CTGRY_ID` int(11) NOT NULL,
  `PRODUCT_CODE` varchar(25) NOT NULL,
  `PRODUCT_NAME` varchar(50) NOT NULL,
  `PRODUCT_NAME_BILLING` varchar(25) NOT NULL,
  `PRODUCT_DSCPRTN` varchar(255) NOT NULL,
  `WEIGHT` int(11) NOT NULL,
  `PRICE` decimal(10,0) NOT NULL,
  `PRODUCT_IMAGES` text NOT NULL,
  `ACTIVE_STATUS` bit(1) NOT NULL DEFAULT b'1',
  `INGREDIENTS` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`PRODUCT_ID`, `PRODUCTS_CTGRY_ID`, `PRODUCT_CODE`, `PRODUCT_NAME`, `PRODUCT_NAME_BILLING`, `PRODUCT_DSCPRTN`, `WEIGHT`, `PRICE`, `PRODUCT_IMAGES`, `ACTIVE_STATUS`, `INGREDIENTS`) VALUES
(1, 1, 'MDFI00001', 'ସାଧା ( Plain / Sadha )', 'ସାଧା ବାରମଜା / Plain Mixtu', 'Manufactured By:Arati Foods Bhubaneswar', 500, '90', '2.png', b'1', ''),
(2, 1, 'MDFI00002', 'ରାଗ ଲଙ୍କା ( Spicy Chilly )', 'ରାଗ ଲଙ୍କା ବାରମଜା / Spicy ', 'Manufactured By : Arati Foods Bhuabaneswar', 500, '90', '5.png', b'1', ''),
(3, 1, 'MDFI00003', 'ରାଗ ଗୋଲ ମରିଚ ( Spicy Pepper )', '0', 'Manufactured By: Arati Foods Bhubaneswar', 500, '90', '5.png', b'1', ''),
(4, 1, 'MDFI00004', 'ଖଟା ମିଠା ( Khata Mitha )', '0', 'Manufactured By:Arati Foods Bhubaneswar', 500, '90', 'Khata_Mitha.jpg', b'1', ''),
(5, 1, 'MDFI00005', 'ସାଧା ସେଭ ( Plain Sev )', '0', 'Manufactured By:Arati Foods Bhubaneswar', 500, '90', 'Plain_Sev.jpg', b'1', ''),
(6, 1, 'MDFI00006', 'ଚୁଡା ବାରମଜା ( Chuda Mixture )', '0', 'Manufactured By:Arati Foods Bhubaneswar', 500, '90', 'chuda_mixture.jpg', b'1', ''),
(7, 1, 'MDFI00007', 'ଭଜା ଚୁଡା ବାରମଜା ( Roasted )', '0', 'Manufactured By:Arati Foods Bhubaneswar', 500, '85', 'Roasted_Chuda_Mixture.jpg', b'0', ''),
(8, 2, 'MDFI00008', 'ଫେଣି ଗଜା ( Pheni Gaja Sweet )', '0', 'Manufactured By: Mamata Sweets, Puri, Odisha', 500, '85', 'Pheni.jpg', b'1', ''),
(9, 2, 'MDFI00009', 'ଫେଣି ଗଜା ଦେଶୀ ଗୁଆଘିଅ ( Pheni Gaja Sweet Made of Pu', '0', 'Manufactured By: Mamata Sweets, Puri, Odisha', 500, '200', 'Pheni.jpg', b'1', ''),
(10, 2, 'MDFI00010', 'ଛେନା ପୋଡ଼ ( Chhena Phoda Special From Puri)', '0', 'Manufactured By: Behera Sweets, Puri, Odisha', 500, '180', 'chhenapoda.jpg', b'1', ''),
(11, 2, 'MDFI00011', 'ଫେଣି ଗଜା ସାଧା ( Pheni Gaja Sugar Less )', '0', 'Manufactured By: Mamata Sweets, Puri, Odisha', 500, '105', 'Pheni_Plain.jpg', b'1', ''),
(12, 2, 'MDFI00012', 'ସାଲେପୁର ବିକଳାନନ୍ଦ ରସଗୋଲା <br>(Salepur Bikalananda ', '0', 'Manufactured By: Bikalananda, Salepur, Odisha', 1000, '240', 'rasagola.jpg', b'1', ''),
(13, 3, 'MDFI00013', 'ମହାକାଳୀ ଛତୁଆ ( Roasted Flours Mix Of Mahakali From', '0', 'Manufactured By: Mahakali, Bhuabaneswar, Odisha', 1000, '120', 'Chhatua.jpg', b'1', '<b>Ingredients:</b>\r\n								<li> Roasted Mix Floars of (Wheat, Chana Daal, Cashew, Almonds,Cardamon, Milk Powder) and added sugar for test</li>							<b>Features:</b>\r\n								<li> Famous Breakfast dish of Odias</li>\r\n								<li> 2 to 4 table spoons wit'),
(14, 3, 'MDFI00014', 'କାଜୁ ବାଦାମ <br>(Cashew from Berhampur)', '0', 'Manufactured By: Famous Berhampur, Odisha', 500, '450', 'cashew.jpg', b'1', ''),
(15, 3, 'MDFI00015', 'ପିସ୍ତା ବାଦାମ <br>(Almond from Berhampur)', '0', 'Berhampur Product', 500, '480', 'almond.jpg', b'1', ''),
(16, 3, 'MDFI00016', 'ବିରି ବଡ଼ି <br>(Badi from Berhampur)', '0', 'From Berhampur', 500, '90', 'biribadi.jpg', b'1', ''),
(17, 3, 'MDFI00017', 'ଲିଆ ବଡ଼ି <br>(Lia Badi from Berhampur)', '0', 'From Berhampur', 200, '30', 'liabadi.jpg', b'1', ''),
(18, 3, 'MDFI00018', 'ରାଶି ପାମ୍ପଡ <br>(Raashi Pampada from Berhampur)', '0', 'From Berhampur', 250, '60', 'rashipampada.jpg', b'1', ''),
(19, 4, 'MDBI00001', 'ମନ କଥା ( Mana Kathaa )', '0', 'Published BY:', 100, '125', 'book-manakathaa.gif', b'1', '<b>Writer : Dr. Antarjita Nayak</b>\r\n								<li> PHD Scholaar from Rourkela NIIT</li>	\r\n								<b>About the Book :</b>\r\n								<li> This book is about her experiences of life in her words</li>\r\n								<li> The focus is about sensitive social issues of our daily life </li>');

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts_category`
--

CREATE TABLE `tblproducts_category` (
  `PRODUCTS_CTGRY_ID` int(11) NOT NULL,
  `PRODUCTS_CTGRY_CODE` varchar(25) NOT NULL,
  `PRODUCTS_CTGRY_NAME` varchar(50) NOT NULL,
  `PRODUCTS_CTGRY_DSCRPTN` varchar(255) NOT NULL,
  `ACTIVE_STATUS` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproducts_category`
--

INSERT INTO `tblproducts_category` (`PRODUCTS_CTGRY_ID`, `PRODUCTS_CTGRY_CODE`, `PRODUCTS_CTGRY_NAME`, `PRODUCTS_CTGRY_DSCRPTN`, `ACTIVE_STATUS`) VALUES
(1, 'cat_mixture', 'ବାରମଜା <br>(Mixture/Namkeen)', 'Famous mixtures and Namkeen Items from all over Odisha', b'1'),
(2, 'cat_sweet', 'ମିଠା <br> (Sweets) ', 'Famous Sweet dishes from all over Odisha.', b'1'),
(3, 'cat_other', 'ଅନ୍ୟାନ୍ୟ <br>(Others)', 'Other famous food items from all over Odisha', b'1'),
(4, 'cat_books', 'ବହି<br>( Books )', 'Odia books written by odia writers from all over the world', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tblservice_category`
--

CREATE TABLE `tblservice_category` (
  `SC_ID` int(11) NOT NULL,
  `SRVC_CTGRY` varchar(100) NOT NULL,
  `STATUS` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblservice_category`
--

INSERT INTO `tblservice_category` (`SC_ID`, `SRVC_CTGRY`, `STATUS`) VALUES
(1, 'ବ୍ରାହ୍ମଣ ପୂଜାରୀ <br> ( Pujaari )', b'1'),
(2, 'ଶିକ୍ଷକ <br>( Tuition Teacher )', b'1'),
(3, 'ରୋଷେଇୟା <br> ( Cook )', b'1'),
(4, 'ପାଣି ପାଇପ ମିସ୍ତ୍ରୀ <br> ( Plumber )', b'1'),
(5, 'ବାରିକ<br> ( Barber )', b'1'),
(6, 'Insuarance /<br> Investment Advisor', b'1'),
(7, 'Computer / <br> Mobile', b'1'),
(8, 'Import <br> Export', b'1'),
(9, 'ସଂଗୀତ / ନୃତ୍ୟ ଶିକ୍ଷକ <br> ( Music / Dance Teacher )', b'1'),
(10, 'ଅନ୍ୟାନ୍ୟ<br> ( Others )', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `tblservice_providers`
--

CREATE TABLE `tblservice_providers` (
  `SP_ID` bigint(20) NOT NULL,
  `SC_ID` int(11) NOT NULL,
  `SP_NAME` varchar(50) NOT NULL,
  `SERVICE_NAME` varchar(50) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `MOBILE_NO` varchar(16) NOT NULL,
  `SKILLS` text NOT NULL,
  `EXPERIENCES` text NOT NULL,
  `ADDRESS` text NOT NULL,
  `COVERING_AREA` varchar(200) NOT NULL,
  `MESSAGE` text NOT NULL,
  `PROFILE_PHOTO` varchar(255) NOT NULL,
  `PHOTO_ALBUM` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblservice_providers`
--

INSERT INTO `tblservice_providers` (`SP_ID`, `SC_ID`, `SP_NAME`, `SERVICE_NAME`, `EMAIL_ID`, `MOBILE_NO`, `SKILLS`, `EXPERIENCES`, `ADDRESS`, `COVERING_AREA`, `MESSAGE`, `PROFILE_PHOTO`, `PHOTO_ALBUM`) VALUES
(1, 6, 'Sarbeswar Patro', 'Insurance Advisory & Investment Consultant', 'sarbe_k@yahoo.com, sarbeswar.patra@gmail.com', '(+91)9818941260', 'It has been almost 10 year\'s of experience with clear vision of providing financial planning & helps to people for their wealth maximisation through various investment tools like Mutual Funds, Life & General Insurance & Other Income products services across India.', 'It has been almost 10 year\'s of experience with clear vision of providing financial planning & helps to people for their wealth maximisation through various investment tools like Mutual Funds, Life & General Insurance & Other Income products services across India.', 'DELHI', '', 'It has been almost 10 year\'s of experience with clear vision of providing financial planning & helps to people for their wealth maximisation through various investment tools like Mutual Funds, Life & General Insurance & Other Income products services across India.', '1_sarbeswar.jpg', ''),
(2, 8, 'Mrs. Nilima Patro', 'AABN IMPORT & EXPORT ENTERPRISES', 'silpipatro@gmail.com', '(+91)9560100558', 'Business Development Advisor for all Kind of Online dealing with consultancy', 'Business Development Advisor for all Kind of Online dealing with consultancy', 'MEHRAULI, NEW DELHI-110030', 'ALL OVER INDIA', '', '2_nilimapatro.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltopsale`
--

CREATE TABLE `tbltopsale` (
  `TOP_SALE_ID` int(11) NOT NULL,
  `PRODUCT_ID` bigint(20) NOT NULL,
  `RATING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `User_ID` int(11) NOT NULL,
  `Role_ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Pswd` varchar(25) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `PIN` varchar(14) NOT NULL,
  `Referral_Code` varchar(25) DEFAULT NULL,
  `Active_Status` bit(1) NOT NULL DEFAULT b'0',
  `Registration_Date` datetime NOT NULL,
  `Activation_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`User_ID`, `Role_ID`, `User_Name`, `Pswd`, `Email_Id`, `Mobile_No`, `Address`, `City`, `State`, `Country`, `PIN`, `Referral_Code`, `Active_Status`, `Registration_Date`, `Activation_Date`) VALUES
(1, 1, 'Priya Ranjan', 'priyaranjan@2020', 'priya@gmail.com', '9206255947', 'Heaven', 'BBSR', 'Odisha', 'In', '592321', NULL, b'0', '2020-02-12 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser_role`
--

CREATE TABLE `tbluser_role` (
  `Role_ID` int(11) NOT NULL,
  `Role_Name` varchar(50) NOT NULL,
  `Role_Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser_role`
--

INSERT INTO `tbluser_role` (`Role_ID`, `Role_Name`, `Role_Description`) VALUES
(1, 'Admin', 'The user is Administrator type, who will have all access to the application'),
(2, 'Business Partner', 'The people who are Business Partner of the organization.'),
(3, 'Team Member', 'The people who are part of our organization team to run the Business but not Partners'),
(4, 'Advisers', 'Advisers or consultant for our organization'),
(5, 'Customer', 'Customer of our Organization');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcontact_us`
--
ALTER TABLE `tblcontact_us`
  ADD PRIMARY KEY (`Contact_ID`);

--
-- Indexes for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  ADD PRIMARY KEY (`PIN_ID`),
  ADD UNIQUE KEY `PIN CODE` (`PIN`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`PRODUCT_ID`);

--
-- Indexes for table `tblproducts_category`
--
ALTER TABLE `tblproducts_category`
  ADD PRIMARY KEY (`PRODUCTS_CTGRY_ID`);

--
-- Indexes for table `tblservice_category`
--
ALTER TABLE `tblservice_category`
  ADD PRIMARY KEY (`SC_ID`),
  ADD UNIQUE KEY `SRVC_CTGRY_NAME_IDX` (`SRVC_CTGRY`);

--
-- Indexes for table `tblservice_providers`
--
ALTER TABLE `tblservice_providers`
  ADD PRIMARY KEY (`SP_ID`);

--
-- Indexes for table `tbltopsale`
--
ALTER TABLE `tbltopsale`
  ADD PRIMARY KEY (`TOP_SALE_ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `user_name_unique` (`User_Name`);

--
-- Indexes for table `tbluser_role`
--
ALTER TABLE `tbluser_role`
  ADD PRIMARY KEY (`Role_ID`),
  ADD UNIQUE KEY `Role_RoleName_Unique` (`Role_Name`(25));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser_role`
--
ALTER TABLE `tbluser_role`
  MODIFY `Role_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
