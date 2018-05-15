-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 11:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siva`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_inventory`
--

CREATE TABLE `a_inventory` (
  `id` int(11) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `prate` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_inventory`
--

INSERT INTO `a_inventory` (`id`, `barcode`, `item_name`, `qty`, `mrp`, `discount`, `prate`, `total`, `user`, `branch`, `status`) VALUES
(1, '6546546356', 'Hamam 50g 	  ', 98, 50, 5, 48, 4750, 'Siva Store', 'TS1', 'Activate'),
(2, '1', 'TURMERIC 20 GRAMS PACK OF 1 KG	  ', 1, 90, 0, 90, 90, 'Siva Store', 'TS1', 'Activate'),
(3, '10', 'CAMEL 10PCS	  ', 1, 142, 0, 140, 142, 'Siva Store', 'TS1', 'Active'),
(4, '2', 'VANASPATHI 200GRM GOLD	  ', 0, 0, 0, 0, 0, 'Siva Store', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `generate`
--

CREATE TABLE `generate` (
  `id` int(11) NOT NULL,
  `pno` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `others` int(11) NOT NULL,
  `dsno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generate`
--

INSERT INTO `generate` (`id`, `pno`, `sno`, `others`, `dsno`) VALUES
(1, 16, 2, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `hr_people_job`
--

CREATE TABLE `hr_people_job` (
  `id` int(11) NOT NULL,
  `p_id` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `dep` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `m_no` varchar(250) NOT NULL,
  `al_no` varchar(250) NOT NULL,
  `exp` varchar(250) NOT NULL,
  `per_company` varchar(250) NOT NULL,
  `date_req` date NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `sdate` date NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `net_amount` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_no`, `sdate`, `customer_name`, `mobile_no`, `net_amount`, `status`, `user`, `branch`) VALUES
(46, '1', '2018-05-08', 'Nazeer', '9566969517', '100', 'Active', 'Siva Store', 'TS1');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_product_details`
--

CREATE TABLE `invoice_product_details` (
  `id` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `mrp` varchar(250) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `qty` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_product_details`
--

INSERT INTO `invoice_product_details` (`id`, `sdate`, `invoice_no`, `barcode`, `item_name`, `mrp`, `discount`, `qty`, `total`, `status`, `user`, `branch`) VALUES
(131, '2018-05-08', '1', '6546546356', 'Hamam 50g 	  ', '50	  ', '6546546356', '2', '100', 'Active', 'Siva Store', 'TS1');

-- --------------------------------------------------------

--
-- Table structure for table `m_branch_creation`
--

CREATE TABLE `m_branch_creation` (
  `id` int(11) NOT NULL,
  `branch_id` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `branch_address` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `gstin` varchar(250) NOT NULL,
  `c_person` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `l_number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_branch_creation`
--

INSERT INTO `m_branch_creation` (`id`, `branch_id`, `company_name`, `branch_address`, `description`, `gstin`, `c_person`, `mobile`, `l_number`, `email`, `user`, `branch`, `status`) VALUES
(5, 'TS1', 'Vertex Solution', 'nerhu street ram nager', 'Software and webside develping ', '125OKJIU142525', 'PRABHAKARAN', '8012039867', '9786005454', 'PRABHAKARAN.VERTEX@GMAIL.COM', '', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `m_category`
--

CREATE TABLE `m_category` (
  `id` int(11) NOT NULL,
  `c_id` varchar(250) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `c_description` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_category`
--

INSERT INTO `m_category` (`id`, `c_id`, `c_name`, `c_description`, `user`, `branch`, `status`) VALUES
(4, 'TC1', 'GROCERIES', 'OTHERS', 'Siva Store', 'TS1', 'Active'),
(5, 'TC2', 'DHALLS', 'ALL DHALLS ', 'Siva Store', 'TS1', 'Active'),
(6, 'TC3', 'OIL', 'ALL OILS ', 'Siva Store', 'TS1', 'Active'),
(7, 'TC4', 'BISCUITS', ' ALL BISCUITS', 'Siva Store', 'TS1', 'Active'),
(8, 'TC5', 'WASHING SOAP AND DETERGENTS', ' ALL WASHING SOAP AND DETERGENTS', 'Siva Store', 'TS1', 'Active'),
(9, 'TC6', 'POOJA ITEMS', 'ALL POOJA ITEMS ', 'Siva Store', 'TS1', 'Active'),
(10, 'TC7', 'PEES ITEMS', 'ALL PEES ITEMS ', 'Siva Store', 'TS1', 'Active'),
(11, 'TC8', 'DISH WASH ', ' ALL DISH WASHINGS', 'Siva Store', 'TS1', 'Active'),
(12, 'TC9', 'TOILETIES', 'BATH SOAPS, SHAMPOOS , TOOTH PASTE , ETC.,', 'Siva Store', 'TS1', 'Active'),
(13, 'TC10', 'FLOURS', 'ALL FLOUR ITEMS ', 'Siva Store', 'TS1', 'Inactive'),
(14, 'TC11', 'SHAMPOOS', ' ALL SHAMPOOS', 'Siva Store', 'TS1', 'Inactive'),
(15, 'TC12', 'BATH SOAP ', ' ALL BATH SOAPS', 'Siva Store', 'TS1', 'Inactive'),
(16, 'TC13', 'NUTS & DRY FRUITS', 'ALL NUTS AND DRY FRUITS', 'Siva Store', 'TS1', 'Active'),
(17, 'TC14', 'PERFUMES AND POWDER', ' ALL POWDERS AND PERFUMES', 'Siva Store', 'TS1', 'Active'),
(18, 'TC15', 'CLEANERS', ' ALL HOUSE CLEANERS', 'Siva Store', 'TS1', 'Active'),
(19, 'TC16', 'MASALAS', ' ALL MASALA ITEMS', 'Siva Store', 'TS1', 'Active'),
(20, 'TC17', 'DATES', ' ALL DATES', 'Siva Store', 'TS1', 'Active'),
(21, 'TC18', 'SOOJI', 'ALL SOOJI ', 'Siva Store', 'TS1', 'Inactive'),
(22, 'TC19', 'TAMRIND', ' ALL TAMRINDS', 'Siva Store', 'TS1', 'Active'),
(23, 'TC20', 'CHILLIE', 'ALL CHILLES', 'Siva Store', 'TS1', 'Active'),
(24, 'TC21', 'DHANIYA', ' ALL DHANIYAS', 'Siva Store', 'TS1', 'Active'),
(25, 'TC22', 'GRAMS', 'ALL GRAMS ', 'Siva Store', 'TS1', 'Active'),
(26, 'TC23', 'HERBS', 'PATTAI ,CLOVE ,KASTURIMETHI ,ETC., ', 'Siva Store', 'TS1', 'Active'),
(27, 'TC24', 'FOOD COLORS', 'ALL FOOD COLORS ', 'Siva Store', 'TS1', 'Active'),
(28, 'TC25', 'RAGI  ITEMS', 'ALL RAGI ITEMS ', 'Siva Store', 'TS1', 'Active'),
(29, 'TC26', 'AJINO MOTO ', 'ALL AJINO PRODUCTS ', 'Siva Store', 'TS1', 'Active'),
(30, 'TC27', 'AVAL', 'ALL AVAL PRODUCTS ', 'Siva Store', 'TS1', 'Active'),
(31, 'TC28', 'SOOJI', 'ALL SOOJI PRODUCTS ', 'Siva Store', 'TS1', 'Active'),
(32, 'TC29', 'CHERRY', ' ALL TUTTY FRUITY,PLUMS,CHERRYS PRODUCTS ', 'Siva Store', 'TS1', 'Active'),
(33, 'TC30', 'MILK MAID', 'ALL MILK MAID PRODUCTS ', 'Siva Store', 'TS1', 'Active'),
(34, 'TC31', 'ASAFOETIDA', ' ALL ASAFOETIDA PRODUCTS', 'Siva Store', 'TS1', 'Active'),
(35, 'TC32', 'BADHAM', 'ALL BADHAM ITEMS ', 'Siva Store', 'TS1', 'Active'),
(36, 'TC33', 'FACE TURMERIC', 'ALL FACE USED TURMERIC PRODUCT ', 'Siva Store', 'TS1', 'Inactive'),
(37, 'TC34', 'CASHUE NUTS', 'ALL CASHUENUTS ', 'Siva Store', 'TS1', 'Active'),
(38, 'TC35', 'PISTHA', 'ALL PISTHA ITEMS ', 'Siva Store', 'TS1', 'Active'),
(39, 'TC36', 'GROUND NUT', 'ALL GROUND NUTS ', 'Siva Store', 'TS1', 'Active'),
(40, 'TC37', 'HONEY', 'ALL HONEY ', 'Siva Store', 'TS1', 'Active'),
(41, 'TC38', 'TURMARIC', ' ALL TURMARICS', 'Siva Store', 'TS1', 'Active'),
(42, 'TC39', 'GINGERLY OIL', ' ', 'Siva Store', 'TS1', 'Active'),
(43, 'TC40', 'VILLAKU ATRUM OIL', 'ALL  POOJA OILS ', 'Siva Store', 'TS1', 'Inactive'),
(44, 'TC41', 'GHEE', 'ALL GHEE ITEMS ', 'Siva Store', 'TS1', 'Active'),
(45, 'TC42', 'VANASPATHI', ' ALL VANASPATHI', 'Siva Store', 'TS1', 'Active'),
(46, 'TC43', 'THOOR DHALL', ' ALL THOOR', 'Siva Store', 'TS1', 'Active'),
(47, 'TC44', 'GRAM DHALL ', 'ALL GRAM DHALLS ', 'Siva Store', 'TS1', 'Active'),
(48, 'TC45', 'MOONG DHALL', ' ALL MOONG DHALLS', 'Siva Store', 'TS1', 'Active'),
(49, 'TC46', 'ORID DHALL', 'ALL ORID DHALLS ', 'Siva Store', 'TS1', 'Active'),
(50, 'TC47', 'ATTA', 'ALL ATTAS ', 'Siva Store', 'TS1', 'Active'),
(51, 'TC48', 'MAIDA', 'ALL MAIDA ', 'Siva Store', 'TS1', 'Active'),
(52, 'TC49', 'CORN FLOUR', ' ALL CORN FLOUR', 'Siva Store', 'TS1', 'Active'),
(53, 'TC50', 'WASHING SODA', ' WASHING', 'Siva Store', 'TS1', 'Active'),
(54, 'TC51', 'RB SODA', ' RB ', 'Siva Store', 'TS1', 'Active'),
(55, 'TC52', 'GRAM FLOUR', 'ALL GRAM FLOUR ', 'Siva Store', 'TS1', 'Active'),
(56, 'TC53', 'RICE FLOUR', ' ALL RICE FLOUR', 'Siva Store', 'TS1', 'Active'),
(57, 'TC54', 'APPALAM', ' ALL APPALAM', 'Siva Store', 'TS1', 'Active'),
(58, 'TC55', 'CHIPS', 'ALL CHIPS ', 'Siva Store', 'TS1', 'Active'),
(59, 'TC56', 'PICKLES', ' ALL PICKLES', 'Siva Store', 'TS1', 'Active'),
(60, 'TC57', 'APPALAM KUDAL', ' ALL BOTTI', 'Siva Store', 'TS1', 'Active'),
(61, 'TC58', 'MEAL MAKER', ' ALL MEAL MAKERS', 'Siva Store', 'TS1', 'Active'),
(62, 'TC59', 'VERMICEL', ' ALL VERMICEL', 'Siva Store', 'TS1', 'Active'),
(63, 'TC60', 'JEERA', ' ALL JEERA', 'Siva Store', 'TS1', 'Active'),
(64, 'TC61', 'SNOUF', ' ALL SNOUF', 'Siva Store', 'TS1', 'Active'),
(65, 'TC62', 'PEPPER', ' ALL PEPPER', 'Siva Store', 'TS1', 'Active'),
(66, 'TC63', 'MUSTARD', ' ALL MUSTARD', 'Siva Store', 'TS1', 'Active'),
(67, 'TC64', 'GINGER GARLIC PAST', ' ALL GINGER GARLIC PASTE', 'Siva Store', 'TS1', 'Active'),
(68, 'TC65', 'PATTAI', 'PATTAI ', 'Siva Store', 'TS1', 'Active'),
(69, 'TC66', 'CLOVE', ' ALL CLOVE', 'Siva Store', 'TS1', 'Active'),
(70, 'TC67', 'CARDAMOM', ' ALL CARDAMOM', 'Siva Store', 'TS1', 'Active'),
(71, 'TC68', 'GASAGASA', ' GASAGASA', 'Siva Store', 'TS1', 'Active'),
(72, 'TC69', 'KISSMISS', ' ALL KISSMISS', 'Siva Store', 'TS1', 'Active'),
(73, 'TC70', 'RAJMA', ' RAJMA', 'Siva Store', 'TS1', 'Active'),
(74, 'TC71', 'MASOOR DHALL', ' ALL MASOOR DHALL', 'Siva Store', 'TS1', 'Active'),
(75, 'TC72', 'KARAMANI', ' ALL KARAMANI  ITEM ', 'Siva Store', 'TS1', 'Active'),
(76, 'TC73', 'JAGGERY', ' ALL JAGGERY PRODUCT', 'Siva Store', 'TS1', 'Active'),
(77, 'TC74', 'SUN OIL', 'ALL REFINED SUN OIL ', 'Siva Store', 'TS1', 'Active'),
(78, 'TC75', 'CHILLI POWDER', 'ALL CHILLI POWDER PRODUCTS ', 'Siva Store', 'TS1', 'Inactive'),
(79, 'TC76', 'CORIANDER ', 'ALL CORIANDER ITEM ', 'Siva Store', 'TS1', 'Active'),
(80, 'TC77', 'OMAM ', 'ALL OMAM ITEMS ', 'Siva Store', 'TS1', 'Active'),
(81, 'TC78', 'GATHAM PODI', ' ALL GATHAM ITEMS', 'Siva Store', 'TS1', 'Active'),
(82, 'TC79', 'SANDAL ', 'ALL SANDAL ITEM ', 'Siva Store', 'TS1', 'Active'),
(83, 'TC80', 'PANNER', 'ALL PANNER ITEM ', 'Siva Store', 'TS1', 'Active'),
(84, 'TC81', 'IDLY PODI', 'ALL IDLY PODI ', 'Siva Store', 'TS1', 'Active'),
(85, 'TC82', 'pepper powder', ' all pepper powder', 'Siva Store', 'TS1', 'Active'),
(86, 'TC83', 'RASAM PODI', ' ALL RASAM ', 'Siva Store', 'TS1', 'Active'),
(87, 'TC84', 'SAMBAR MASALA', ' ALL SAMBAR MASALA', 'Siva Store', 'TS1', 'Active'),
(88, 'TC85', 'MEEN KUZAMBU', ' ALL MEEN ', 'Siva Store', 'TS1', 'Active'),
(89, 'TC86', 'CHICKEN MASALA', ' ALL CHICKEN', 'Siva Store', 'TS1', 'Active'),
(90, 'TC87', 'MUTTON MASALA', ' ALL MUTTON', 'Siva Store', 'TS1', 'Active'),
(91, 'TC88', 'CHANNA MASALA', ' ALL CHENNA MASALA', 'Siva Store', 'TS1', 'Active'),
(92, 'TC89', 'SAGO', 'ALL SAGO ', 'Siva Store', 'TS1', 'Active'),
(93, 'TC90', 'GARLIC', 'GARLIC ', 'Siva Store', 'TS1', 'Active'),
(94, 'TC91', 'ONION', 'ALL ONION ', 'Siva Store', 'TS1', 'Active'),
(95, 'TC92', 'BAJJI MASALA', 'ALL BAJJI MASALA ', 'Siva Store', 'TS1', 'Active'),
(96, 'TC93', 'PULIYOTHARAI', 'ALL PULIYOTHARAI ITEMS ', 'Siva Store', 'TS1', 'Active'),
(97, 'TC94', 'BENZON', ' ALL BENZON', 'Siva Store', 'TS1', 'Active'),
(98, 'TC95', 'AGARVATHI', ' ALL AGARVATHI', 'Siva Store', 'TS1', 'Active'),
(99, 'TC96', 'GARAM MASALA', 'ALL  ', 'Siva Store', 'TS1', 'Active'),
(100, 'TC97', 'CHAT MASALAS', 'ALL CHAT MASALAS ITEMS ', 'Siva Store', 'TS1', 'Active'),
(101, 'TC98', 'THIRI', ' ALL THIRI', 'Siva Store', 'TS1', 'Active'),
(102, 'TC99', 'KUNKUMAM', ' ALL KUNKUMAM', 'Siva Store', 'TS1', 'Active'),
(103, 'TC100', 'POOJA OIL', 'ALL POOJA OIL', 'Siva Store', 'TS1', 'Active'),
(104, 'TC101', 'PEES', ' ALL PEES', 'Siva Store', 'TS1', 'Active'),
(105, 'TC102', 'TURMARIC POWDER', ' ALL TURMARIC POWDER', 'Siva Store', 'TS1', 'Active'),
(106, 'TC103', 'DHANIYA POWDER', ' ALL DHANIYA POWDER', 'Siva Store', 'TS1', 'Active'),
(107, 'TC104', 'FISH MASALA', ' ALL FISH MASALA', 'Siva Store', 'TS1', 'Active'),
(108, 'TC105', 'BRIYANI MASALA', ' ALL BRIYANI MASALA', 'Siva Store', 'TS1', 'Active'),
(109, 'TC106', 'PEPPER POWDER', ' ALL PEPPER POWDER', 'Siva Store', 'TS1', 'Active'),
(110, 'TC107', 'PEPPER POWDER', 'ALL PEPPER POWDERS ', 'Siva Store', 'TS1', 'Active'),
(111, 'TC108', 'SUGAR CANDY', 'ALL SUGAR CANDY ITEMS ', 'Siva Store', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `m_company_creation`
--

CREATE TABLE `m_company_creation` (
  `id` int(11) NOT NULL,
  `company_id` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gstin` varchar(250) NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `al_number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_company_creation`
--

INSERT INTO `m_company_creation` (`id`, `company_id`, `company_name`, `address`, `gstin`, `contact_person`, `mobile`, `al_number`, `email`, `website`, `logo`, `user`, `branch`, `status`) VALUES
(4, 'TS1', 'Vertex Solution', 'Nehru street ram nager', '1452asdf524152', '8012039867', '8012039867', '9786005454', 'PRABHAKARAN.VERTEX@GMAIL.COM', 'www.vertexsolution.in.co', 'Desert.jpg', 'prabha', 'TS2', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `m_customer_master`
--

CREATE TABLE `m_customer_master` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(250) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `customer_type` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `al_no` varchar(250) NOT NULL,
  `d_o_b` varchar(250) NOT NULL,
  `m_d` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_customer_master`
--

INSERT INTO `m_customer_master` (`id`, `customer_id`, `customer_name`, `customer_type`, `address`, `contact_no`, `al_no`, `d_o_b`, `m_d`, `user`, `branch`, `status`) VALUES
(4, 'TD1', 'Kala stores', '', 'VELLORE', '9566969517', '9442212518', '', '', 'Siva Store', 'TS1', 'Deactive'),
(5, 'TD2', 'Mohan Stores', '', '1, Main Road, Vellore', '9566969517', '9442212518', '2018-05-09', '2017-08-10', 'Siva Store', 'TS1', 'Deactive'),
(6, 'TD3', 'hg', '', 'hgfh', 'hgfh', 'hgfh', '2018-05-09', '2018-05-09', 'Siva Store', 'TS1', 'Inactive'),
(7, 'TD4', 'hkjh', '', 'kjhj', 'kjhk', 'kjhk', '2018-05-09', '2018-05-09', 'Siva Store', 'TS1', 'Inactive'),
(8, 'TD5', 'fg', '', 'gfd', 'gfdgg', 'gf', '2018-05-09', '2018-05-09', 'Siva Store', 'TS1', 'Inactive'),
(9, 'TD6', 'jkhk', 'Retail', 'jh', '789', '78979', '2018-05-09', '2018-05-09', 'Siva Store', 'TS1', 'Inactive'),
(10, 'TD7', 'VENKATESAN', 'Retail', '', '+919345706123', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(11, 'TD8', 'JAI SHANKAR', 'Retail', '', '+919976859478', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(12, 'TD9', 'PAZHANI', 'Retail', '', '+919487228289', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(13, 'TD10', 'MOHAMED NAMEL', 'Retail', '', '+919626789379', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(14, 'TD11', 'LAKSHMI', 'Retail', '', '+918056892565', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(15, 'TD12', 'DURAI RAJ', 'Retail', '', '+918147772008', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(16, 'TD13', 'AFSAR', 'Retail', '', '+919486725140', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(17, 'TD14', 'SEKAR', 'Retail', '', '+919791322939', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(18, 'TD15', 'AMMU', 'Retail', '', '+919944778062', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(19, 'TD16', 'DINAKARAN', 'Retail', '', '+919092399462', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(20, 'TD17', 'VADIVEL', 'Retail', '', '+919827979556', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(21, 'TD18', 'ARUL', 'Retail', '', '+919787338249', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(22, 'TD19', 'VASANTHA', 'Retail', '', '+919364497779', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(23, 'TD20', 'MADHAN', 'Retail', '', '+91903311126', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(24, 'TD21', 'BALU', 'Retail', '', '+919787410401', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(25, 'TD22', 'SADDAM HUSSAIN', 'Retail', '', '+919171801599', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(26, 'TD23', 'IFRAN AHMED', 'Retail', '', '+919003393769', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(27, 'TD24', 'SELVAM', 'Retail', '', '+919043253176', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(28, 'TD25', 'ZIAUDDEEN', 'Retail', '', '+919952890302', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(29, 'TD26', 'SHANKAR', 'Retail', 'SAIDAPET', '+918428716139', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(30, 'TD27', 'SARA', 'Retail', '', '+919994990961', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(31, 'TD28', 'MANI', 'Retail', '', '+919894266729', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(32, 'TD29', 'SARAVANAN', 'Retail', '', '+919994336005', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(33, 'TD30', 'KADHAR', 'Retail', '', '+919994046916', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(34, 'TD31', 'BAVANI', 'Retail', '', '+919994086007', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(35, 'TD32', 'BABU', 'Retail', '', '+919994949166', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(36, 'TD33', 'KUMAR', 'Retail', '', '+919585033693', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(37, 'TD34', 'JAVEER', 'Retail', '', '+919629938198', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(38, 'TD35', 'SYED HUSSAIN', 'Retail', '', '+919791322085', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(39, 'TD36', 'MUSTHAFA', 'Wholesale', 'SENPAKKAM', '+919500535384', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(40, 'TD37', 'KAMAL', 'Retail', '', '+919865678131', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(41, 'TD38', 'PONDURANGAM', 'Retail', '', '+919894096123', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(42, 'TD39', 'ABBDUULLAH', 'Retail', '', '+919688009035', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(43, 'TD40', 'BILAL', 'Retail', '', '+919894216990', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(44, 'TD41', 'GOVINDARAJ', 'Retail', '', '+919442730798', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(45, 'TD42', 'KADHAR SHARIFF', 'Retail', '', '+919994046916', '+91', '', '', 'Siva Store', 'TS1', 'Inactive'),
(46, 'TD42', 'KADHAR SHARIFF', 'Retail', '', '+919994046916', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(47, 'TD44', 'MUITHIN', 'Retail', '', '+919043497095', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(48, 'TD45', 'ZAHIR KHAN', 'Retail', '', '+918124867379', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(49, 'TD46', 'SANDEEP', 'Retail', '', '+918098909551', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(50, 'TD47', 'MADHAN', 'Retail', '', '+919003311126', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(51, 'TD48', 'SONTHOSH', 'Retail', '', '+919944180583', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(52, 'TD49', 'USMAN KHAN', 'Retail', '', '+918870408808', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(53, 'TD50', 'DEVA PRASAD', 'Retail', '', '+919965959666', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(54, 'TD51', 'KUMAR', 'Retail', '', '+919994307893', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(55, 'TD52', 'MURUGAN', 'Retail', '', '+917760244813', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(56, 'TD53', 'MANOJ', 'Retail', '', '+919629235946', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(57, 'TD54', 'MUNISAMY', 'Retail', '', '+919843274760', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(58, 'TD55', 'KARUNAKARAN', 'Retail', '', '+919025080481', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(59, 'TD56', 'ASHOK', 'Retail', '', '+91995228268', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(60, 'TD57', 'VIJAY', 'Retail', '', '+919787472844', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(61, 'TD58', 'MURALI', 'Retail', '', '+919994515975', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(62, 'TD59', 'SEKAR', 'Retail', '', '+919025853035', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(63, 'TD60', 'DASS', 'Retail', '', '+919443453285', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(64, 'TD61', 'GAYATHRI', 'Retail', '', '+919514745155', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(65, 'TD62', 'GANESAN', 'Retail', '', '+918870361673', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(66, 'TD63', 'MURALI', 'Retail', 'SAIDAPET', '+9199945', '+91', '', '', 'Siva Store', 'TS1', 'Inactive'),
(67, 'TD64', 'BALU', 'Retail', '', '+91978741', '+91', '', '', 'Siva Store', 'TS1', 'Inactive'),
(68, 'TD65', 'VASUDEVAN', 'Retail', '', '+919444481960', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(69, 'TD66', 'MAYILVANAN', 'Retail', '', '+919790518344', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(70, 'TD67', 'JAYASUDHA', 'Retail', '', '+918124012409', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(71, 'TD68', 'OM PRAKASH', 'Retail', '', '+919790020062', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(72, 'TD69', 'SUDHA', 'Retail', '', '+919487729345', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(73, 'TD70', 'NASIR (MADHINA)STORE', 'Wholesale', '', '+919043945662', '+919655914677', '', '', 'Siva Store', 'TS1', 'Active'),
(74, 'TD71', 'SYED', 'Retail', 'KATPADI', '+919894773354', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(75, 'TD72', 'SAVITHRI AMMAL', 'Retail', 'KATPADI', '+919159655831', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(76, 'TD73', 'GOPAL ', 'Retail', 'RM PALLAYAM ..KOSAPET', '+919443261173', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(77, 'TD74', 'VENKATESAN', 'Wholesale', 'VIRINJIPURAM', '+919487162164', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(78, 'TD75', 'KAMATSHI', 'Wholesale', '', '+919789334593', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(79, 'TD76', 'JAI KUMAR', 'Wholesale', 'BABURAO STREET', '+917418244606', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(80, 'TD77', 'SEKAR', 'Wholesale', '', '+919994312921', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(81, 'TD78', 'BALA STORES', 'Wholesale', 'THIRUVALAM', '+919994922790', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(82, 'TD79', 'VENKATESAN FRIENDS MOBILE', 'Retail', '', '+919791236661', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(83, 'TD80', 'BATSHA BHAI', 'Retail', '', '+919677767270', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(84, 'TD81', 'JAY KUMAR.', 'Wholesale', 'VELLORE', '+918098960571', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(85, 'TD82', 'ASLAM', 'Retail', '', '+919894449201', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(86, 'TD83', 'KUMAR', 'Retail', '', '+919791323078', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(87, 'TD84', 'SASI', 'Retail', 'GUPTHA JEWELLERY', '+919245346778', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(88, 'TD85', 'RANGANADHAN', 'Retail', '', '+919362679065', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(89, 'TD86', 'AMARNATH', 'Retail', 'SATHUVACHARI', '+919786012867', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(90, 'TD87', 'ABDUL.M', 'Retail', '', '+919894150787', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(91, 'TD88', 'DHARANI', 'Retail', '', '+919994613815', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(92, 'TD89', 'RAJA SEKAR', 'Retail', '', '+919585698820', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(93, 'TD90', 'RAMESH.R', 'Retail', '', '+919688776325', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(94, 'TD91', 'MIHIR', 'Retail', '', '+919159479228', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(95, 'TD92', 'IBRAHIM', 'Retail', '', '+919943780116', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(96, 'TD93', 'CHITRA', 'Retail', '', '+919789602199', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(97, 'TD94', 'DEEPA', 'Retail', '', '+917373231525', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(98, 'TD95', 'SETU', 'Retail', '', '+918098147728', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(99, 'TD96', '', 'Retail', '', '+91', '+91', '', '', 'Siva Store', 'TS1', 'Inactive'),
(100, 'TD97', 'MURALI', 'Retail', '', '+919962030470', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(101, 'TD98', 'HARI ', 'Retail', 'SAIDAPET', '+917845662727', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(102, 'TD99', 'GOPAL ', 'Retail', '', '+919443107767', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(103, 'TD100', 'VASANTHA PRIYA', 'Retail', '', '+919994308222', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(104, 'TD101', 'SURESH', 'Retail', '', '+918015875457', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(105, 'TD102', 'PRASAD', 'Retail', '', '+919842091251', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(106, 'TD103', 'AATHAM', 'Retail', '', '+919894785777', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(107, 'TD104', 'RAMA KRISHNAN', 'Retail', '', '+918110019771', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(108, 'TD105', 'SAKTHIVEL', 'Retail', '', '+919360204549', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(109, 'TD106', 'LAKSHMI', 'Retail', '', '+918056', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(110, 'TD107', 'HARI SHIVAM STORES', 'Wholesale', '', '+919600689601', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(111, 'TD108', 'SRIMATHI', 'Retail', '', '+919943504065', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(112, 'TD109', 'PANDIAN', 'Retail', '', '+919566689178', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(113, 'TD110', 'MCR VALLAR', 'Retail', '', '+919443964703', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(114, 'TD111', 'MOHIUDDIL', 'Retail', '', '+919043571030', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(115, 'TD112', 'MOHAMED', 'Retail', '', '+918807603343', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(116, 'TD113', 'HARI ', 'Retail', '', '+919843770459', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(117, 'TD114', 'PRINCE STORE', 'Wholesale', '', '+919443542556', '+918248637773', '', '', 'Siva Store', 'TS1', 'Active'),
(118, 'TD115', 'VINU', 'Retail', '', '+919447572757', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(119, 'TD116', 'SADIQ', 'Retail', '', '+917667614632', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(120, 'TD117', 'NAZAAR.M', 'Retail', '', '+9198007796808', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(121, 'TD118', 'MANI', 'Retail', '', '+919444669077', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(122, 'TD119', 'GULZAR', 'Retail', '', '+917708177820', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(123, 'TD120', 'VIGNESH', 'Retail', '', '+919585609710', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(124, 'TD121', 'PRAVEEN', 'Retail', '', '+919087283395', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(125, 'TD122', 'PRABAKARAN', 'Retail', '', '+919042899517', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(126, 'TD123', 'SARAVANAN', 'Retail', '', '+917305265880', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(127, 'TD124', 'RAJENDRAN', 'Retail', '', '+918825203245', '+91', '', '', 'Siva Store', 'TS1', 'Active'),
(128, 'TD125', '', 'Retail', '', '+91999', '+91', '', '', 'Siva Store', 'TS1', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `m_department`
--

CREATE TABLE `m_department` (
  `id` int(11) NOT NULL,
  `d_id` varchar(250) NOT NULL,
  `d_name` varchar(250) NOT NULL,
  `d_description` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_department`
--

INSERT INTO `m_department` (`id`, `d_id`, `d_name`, `d_description`, `user`, `branch`, `status`) VALUES
(7, 'TD1', 'Sales', ' Sales', 'Siva Store', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `m_item_master`
--

CREATE TABLE `m_item_master` (
  `id` int(11) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `c_name` varchar(250) NOT NULL,
  `item_name_1` varchar(200) NOT NULL,
  `item_name` text NOT NULL,
  `tax` varchar(250) NOT NULL,
  `hsn_code` varchar(250) NOT NULL,
  `unit` varchar(250) NOT NULL,
  `mrp` int(11) NOT NULL,
  `p_rate` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_item_master`
--

INSERT INTO `m_item_master` (`id`, `barcode`, `c_name`, `item_name_1`, `item_name`, `tax`, `hsn_code`, `unit`, `mrp`, `p_rate`, `user`, `branch`, `status`) VALUES
(20, '6546546356', 'Groceries', '', 'Hamam 50g ', '5', '543543', 'Nos', 50, '50', 'Siva Store', 'TS1', 'Inactive'),
(21, '1', 'TURMARIC', '', 'TURMERIC 20 GRAMS PACK OF 1 KG', '5', '432423', '', 90, '90', 'Siva Store', 'TS1', 'Inactive'),
(22, '2', 'DHALLS', 'fg', 'g', 'gfd', 'gfd', 'Nos', 0, '0', 'Siva Store', 'TS1', 'Inactive'),
(23, '2', 'DHALLS', 'T', 'THOOR DHALL -BEST', '', '', 'Nos', 0, '123', 'Siva Store', 'TS1', 'Inactive'),
(24, '1', 'OIL', '1', 'THOOR DHALL -BEST', '5', '5434', '', 50, '40', 'Siva Store', 'TS1', 'Inactive'),
(25, '1', 'GROCERIES', 'fg', 'Thoor Dhall', '5', '6545', 'Nos', 50, '65', 'Siva Store', 'TS1', 'Inactive'),
(26, '1', 'VANASPATHI', '', 'VANASPATHI 100GRM SAR', '', '', 'Nos', 0, '8.70', 'Siva Store', 'TS1', 'Active'),
(27, '2', 'VANASPATHI', '', 'VANASPATHI 200GRM GOLD', '', '', 'Nos', 0, '20.00', 'Siva Store', 'TS1', 'Active'),
(28, '3', 'VANASPATHI', '', 'VANASPATHI 500GRM SAR', '', '', 'Nos', 0, '42.00', 'Siva Store', 'TS1', 'Active'),
(29, '4', 'VANASPATHI', '', 'VANASPATHI 50GRM ', '', '', 'Nos', 0, '4.70', 'Siva Store', 'TS1', 'Active'),
(30, '5', 'GINGERLY OIL', '', ' GOPAL 500GRMS', '', '', 'Nos', 0, '88.00', 'Siva Store', 'TS1', 'Active'),
(31, '6', 'GINGERLY OIL', '', 'IDAYAM  100 ML', '', '', 'Nos', 0, '22.50', 'Siva Store', 'TS1', 'Active'),
(32, '7', 'GINGERLY OIL', '', 'IDAYAM  50 ML', '', '', 'Nos', 0, '10.00', 'Siva Store', 'TS1', 'Active'),
(33, '8', 'THOOR DHALL', '', 'THOOR DHALL -BEST', '', '', 'Nos', 0, '62.50', 'Siva Store', 'TS1', 'Active'),
(34, '9', 'BENZON', '', 'CAMEL BOX', '', '', 'Nos', 0, '118.00', 'Siva Store', 'TS1', 'Active'),
(35, '10', 'BENZON', '', 'CAMEL 10PCS', '', '', 'Nos', 0, '140.00', 'Siva Store', 'TS1', 'Active'),
(36, '11', 'BENZON', '', 'SUGANTHI COM', '', '', 'Nos', 0, '96.00', 'Siva Store', 'TS1', 'Active'),
(37, '12', 'AGARVATHI', '', 'CYCLE 100GRM', '', '', 'Nos', 0, '43.00', 'Siva Store', 'TS1', 'Active'),
(38, '13', 'AGARVATHI', '', 'CYCLE 12RS', '', '', 'Nos', 0, '120.00', 'Siva Store', 'TS1', 'Active'),
(39, '14', 'AGARVATHI', '', 'CYCLE 5RS', '', '', 'Nos', 0, '53.00', 'Siva Store', 'TS1', 'Active'),
(40, '15', 'FOOD COLORS', '', 'ORANGE-BOX', '', '', 'Nos', 0, '21.00', 'Siva Store', 'TS1', 'Active'),
(41, '16', 'FOOD COLORS', '', 'KESARI-BOX', '', '', 'Nos', 0, '21.00', 'Siva Store', 'TS1', 'Active'),
(42, '17', 'FOOD COLORS', '', 'LEMON-BOX', '', '', 'Nos', 0, '21.00', 'Siva Store', 'TS1', 'Active'),
(43, '18', 'PEES ITEMS', '', 'GREEN PEAS BOLD', '', '', 'Nos', 0, '82.00', 'Siva Store', 'TS1', 'Active'),
(44, '19', 'RAGI  ITEMS', '', 'SAKTHI 500GRMS', '', '', 'Nos', 0, '26.00', 'Siva Store', 'TS1', 'Active'),
(45, '20', 'RICE FLOUR', '', ' ANIL 500 GRMS', '', '', 'Nos', 0, '21.00', 'Siva Store', 'TS1', 'Active'),
(46, '21', 'AJINO MOTO ', '', 'CHINA', '', '', 'Nos', 0, '96.00', 'Siva Store', 'TS1', 'Active'),
(47, '22', 'AVAL', '', 'KG KITTY', '', '', 'Nos', 0, '36.00', 'Siva Store', 'TS1', 'Active'),
(48, '140', 'AVAL', '', 'KG KATTY', '', '', 'Nos', 0, '36.00', 'Siva Store', 'TS1', 'Active'),
(49, '23', 'CHERRY', '', 'RED CHERRY', '', '', 'Nos', 0, '145.00', 'Siva Store', 'TS1', 'Active'),
(50, '24', 'CHERRY', '', 'TUTTY FRUITY  KGBRAND', '', '', 'Nos', 0, '85.00', 'Siva Store', 'TS1', 'Active'),
(51, '25', 'ASAFOETIDA', '', 'LG POWDER', '', '', 'Nos', 0, '48.00', 'Siva Store', 'TS1', 'Active'),
(52, '26', 'ASAFOETIDA', '', 'LG-KATTI', '', '', 'Nos', 0, '46.50', 'Siva Store', 'TS1', 'Active'),
(53, '27', 'FACE TURMERIC', '', '20 GRAMS PACK OF 1 KG', '', '', 'Nos', 0, '90.00', 'Siva Store', 'TS1', 'Active'),
(54, '28', 'FACE TURMERIC', '', ' 50 GRAMS PACK OF 1 KG', '', '', 'Nos', 0, '170.00', 'Siva Store', 'TS1', 'Active'),
(55, '29', 'FACE TURMERIC', '', 'GOPURAM -FULL TURMERIC', '', '', 'Nos', 0, '162.00', 'Siva Store', 'TS1', 'Active'),
(56, '30', 'THIRI', '', 'KRISHNA -VILAKU THIRI', '', '', 'Nos', 0, '63.00', 'Siva Store', 'TS1', 'Active'),
(57, '31', 'THIRI', '', 'COTTON THIRI', '', '', 'Nos', 0, '55.00', 'Siva Store', 'TS1', 'Active'),
(58, '32', 'KUNKUMAM', '', 'MEENAKCHI 50GRMS (MERRUN)', '', '', 'Nos', 0, '82.00', 'Siva Store', 'TS1', 'Active'),
(59, '33', 'KUNKUMAM', '', 'MEENATSHI 100GRMS (MERRUN)', '', '', 'Nos', 0, '81.00', 'Siva Store', 'TS1', 'Active'),
(60, '34', 'POOJA OIL', '', 'DEEPAM 1 LTR', '', '', 'Nos', 0, '84.00', 'Siva Store', 'TS1', 'Active'),
(61, '35', 'POOJA OIL', '', 'DEEPAM  500 ML', '', '', 'Nos', 0, '44.00', 'Siva Store', 'TS1', 'Active'),
(62, '36', 'GINGERLY OIL', '', 'IDAYAM 500ML', '', '', 'Nos', 0, '115.50', 'Siva Store', 'TS1', 'Active'),
(63, '37', 'GINGERLY OIL', '', 'IDAYAM  1LTR', '', '', 'Nos', 0, '216.00', 'Siva Store', 'TS1', 'Active'),
(64, '40', 'GHEE', '', 'UDAYA KRISHNA  100GRMS', '', '', 'Nos', 0, '52.50', 'Siva Store', 'TS1', 'Active'),
(65, '41', 'GHEE', '', 'UDAYA KRISHNA  50GRMS', '', '', 'Nos', 0, '28.00', 'Siva Store', 'TS1', 'Active'),
(66, '42', 'GHEE', '', 'RKG 200GRMS', '', '', 'Nos', 0, '106.00', 'Siva Store', 'TS1', 'Active'),
(67, '43', 'GHEE', '', 'UDAYA KRISHNA  200GRMS', '', '', 'Nos', 0, '106.00', 'Siva Store', 'TS1', 'Active'),
(68, '44', 'GHEE', '', 'RKG 500GRMS', '', '', 'Nos', 0, '259.00', 'Siva Store', 'TS1', 'Active'),
(69, '45', 'GHEE', '', 'UDAYA KRISHNA  500GRMS', '', '', 'Nos', 0, '255.00', 'Siva Store', 'TS1', 'Active'),
(70, '46', 'TURMARIC', '', 'SALEM NEETU', '', '', 'Nos', 10, '120.00', 'Siva Store', 'TS1', 'Active'),
(71, '47', 'ORID DHALL', '', '2ND ALL', '', '', 'Nos', 0, '61', 'Siva Store', 'TS1', 'Active'),
(72, '113', 'GRAM DHALL ', '', ' 2ND BEST', '', '', 'Nos', 0, '48.00', 'Siva Store', 'TS1', 'Active'),
(73, '49', 'ATTA', '', 'ASIRWATH 1 KG', '', '', 'Nos', 0, '43.25', 'Siva Store', 'TS1', 'Active'),
(74, '50', 'ATTA', '', 'ASIRWATH 500GMS', '', '', 'Nos', 0, '21.60', 'Siva Store', 'TS1', 'Active'),
(75, '51', 'MAIDA', '', 'NAGA 500GMS ', '', '', 'Nos', 0, '22.50', 'Siva Store', 'TS1', 'Active'),
(76, '52', 'MAIDA', '', 'NAGA 1 KG', '', '', 'Select Unit', 0, '44.50', 'Siva Store', 'TS1', 'Active'),
(77, '53', 'SOOJI', '', 'NAGA 500GMS ', '', '', 'Nos', 0, '25.50', 'Siva Store', 'TS1', 'Active'),
(78, '54', 'SOOJI', '', 'SWASTHIK 500 GMS', '', '', 'Nos', 0, '26.00', 'Siva Store', 'TS1', 'Active'),
(79, '55', 'TAMRIND', '', 'DOSA NEW', '', '', 'Nos', 0, '138', 'Siva Store', 'TS1', 'Active'),
(80, '56', 'CHILLIE', '', 'NEETU ENDO 5', '', '', 'Nos', 0, '107', 'Siva Store', 'TS1', 'Active'),
(81, '57', 'DHANIYA', '', 'GREEN AC', '', '', 'Select Unit', 0, '71', 'Siva Store', 'TS1', 'Active'),
(82, '58', 'GRAMS', '', 'WHITE SPL', '', '', 'Nos', 0, '83', 'Siva Store', 'TS1', 'Active'),
(83, '59', 'GRAMS', '', 'RED ', '', '', 'Nos', 0, '50', 'Siva Store', 'TS1', 'Active'),
(84, '60', 'BADHAM', '', 'IRAN', '', '', 'Nos', 0, '680', 'Siva Store', 'TS1', 'Active'),
(85, '61', 'CASHUE NUTS', '', 'FULL', '', '', 'Nos', 0, '760', 'Siva Store', 'TS1', 'Active'),
(86, '62', 'CASHUE NUTS', '', 'BROKEN', '', '', 'Nos', 0, '750', 'Siva Store', 'TS1', 'Active'),
(87, '63', 'PISTHA', '', 'SPL', '', '', 'Nos', 0, '1330', 'Siva Store', 'TS1', 'Active'),
(88, '64', 'DATES', '', 'LION 200', '', '', 'Nos', 0, '34', 'Siva Store', 'TS1', 'Active'),
(89, '65', 'DATES', '', 'LION 500 GMS 1 +1', '', '', 'Nos', 0, '124', 'Siva Store', 'TS1', 'Active'),
(90, '66', 'DATES', '', 'ARABIAN 500 GMS 1+1', '', '', 'Nos', 0, '156', 'Siva Store', 'TS1', 'Active'),
(91, '67', 'GROUND NUT', '', 'JL NEW', '', '', 'Nos', 0, '63.00', 'Siva Store', 'TS1', 'Active'),
(92, '48', 'CORN FLOUR', '', 'LOSS ', '', '', 'Nos', 0, '29', 'Siva Store', 'TS1', 'Active'),
(93, '69', 'HONEY', '', 'LION 250 GMS 1+1', '', '', 'Nos', 0, '123', 'Siva Store', 'TS1', 'Active'),
(94, '70', 'HONEY', '', 'LION 100 ML', '', '', 'Nos', 0, '41', 'Siva Store', 'TS1', 'Active'),
(95, '71', 'WASHING SODA', '', 'WHITE SPL', '', '', 'Nos', 0, '30', 'Siva Store', 'TS1', 'Active'),
(96, '72', 'APPALAM', '', 'PAPULAR NO 1', '', '', 'Nos', 0, '28.00', 'Siva Store', 'TS1', 'Active'),
(97, '73', 'VERMICEL', '', 'ANIL 180 BOX', '', '', 'Nos', 0, '195', 'Siva Store', 'TS1', 'Active'),
(98, '74', 'VERMICEL', '', 'ANIL 500 GRMS', '', '', 'Nos', 0, '195', 'Siva Store', 'TS1', 'Active'),
(99, '75', 'VERMICEL', '', 'SEVARET 150', '', '', 'Nos', 0, '10.25', 'Siva Store', 'TS1', 'Active'),
(100, '76', 'VERMICEL', '', 'SEVARET 900 GMS', '', '', 'Nos', 0, '46', 'Siva Store', 'TS1', 'Active'),
(101, '77', 'VERMICEL', '', 'SEVARET 400 GMS', '', '', 'Nos', 0, '26.50', 'Siva Store', 'TS1', 'Active'),
(102, '78', 'JEERA', '', '50GRM', '', '', 'Nos', 0, '235', 'Siva Store', 'TS1', 'Active'),
(103, '79', 'JEERA', '', '100GRM', '', '', 'Nos', 0, '235', 'Siva Store', 'TS1', 'Active'),
(104, '80', 'PEPPER', '', '50GRMS', '', '', 'Nos', 0, '525', 'Siva Store', 'TS1', 'Active'),
(105, '81', 'PEPPER', '', '100GRMS', '', '', 'Nos', 0, '525.00', 'Siva Store', 'TS1', 'Active'),
(106, '82', 'JEERA', '', 'NEW', '', '', 'Nos', 0, '212.00', 'Siva Store', 'TS1', 'Active'),
(107, '83', 'SNOUF', '', '50GRMS', '', '', 'Nos', 0, '166.00', 'Siva Store', 'TS1', 'Active'),
(108, '84', 'SNOUF', '', '100GRMS', '', '', 'Nos', 0, '166.00', 'Siva Store', 'TS1', 'Active'),
(109, '85', 'MUSTARD', '', '100GRMS', '', '', 'Nos', 0, '84.00', 'Siva Store', 'TS1', 'Active'),
(110, '86', 'MUSTARD', '', '50GRMS', '', '', 'Nos', 0, '84.00', 'Siva Store', 'TS1', 'Active'),
(111, '87', 'MUSTARD', '', '1ST', '', '', 'Nos', 0, '64.00', 'Siva Store', 'TS1', 'Active'),
(112, '88', 'JEERA', '', 'BOLD ', '', '', 'Nos', 0, '470.00', 'Siva Store', 'TS1', 'Active'),
(113, '89', 'GINGER GARLIC PAST', '', '5RS', '', '', 'Nos', 0, '4.10', 'Siva Store', 'TS1', 'Active'),
(114, '90', 'PATTAI', '', '1ST', '', '', 'Nos', 0, '190.00', 'Siva Store', 'TS1', 'Active'),
(115, '91', 'CLOVE', '', 'BEST', '', '', 'Nos', 0, '670.00', 'Siva Store', 'TS1', 'Active'),
(116, '92', 'GASAGASA', '', '1ST', '', '', 'Nos', 0, '440.00', 'Siva Store', 'TS1', 'Active'),
(117, '93', 'KISSMISS', '', 'SPL ', '', '', 'Nos', 0, '235.00', 'Siva Store', 'TS1', 'Active'),
(118, '94', 'KARAMANI', '', 'RED KARAMANI', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(119, '95', 'KARAMANI', '', 'WHITE KARAMANI', '', '', 'Nos', 0, '55.00', 'Siva Store', 'TS1', 'Active'),
(120, '96', 'MASOOR DHALL', '', ' RED', '', '', 'Nos', 0, '54.00', 'Siva Store', 'TS1', 'Active'),
(121, '97', 'PEES ITEMS', '', 'WHITE', '', '', 'Nos', 0, '41.00', 'Siva Store', 'TS1', 'Active'),
(122, '98', 'RB SODA', '', 'KG', '', '', 'Nos', 0, '30.00', 'Siva Store', 'TS1', 'Active'),
(123, '100', 'JAGGERY', '', 'NADU', '', '', 'Nos', 0, '52.00', 'Siva Store', 'TS1', 'Active'),
(124, '101', 'SUGAR CANDY', '', 'DIAMOND KALKANDU', '', '', 'Nos', 0, '50.00', 'Siva Store', 'TS1', 'Active'),
(125, '102', 'OMAM ', '', 'SWASTHI OMAM', '', '', 'Nos', 0, '115.00', 'Siva Store', 'TS1', 'Active'),
(126, '103', 'SUN OIL', '', 'GOLD WINNER 200GRMS', '', '', 'Nos', 0, '91.00', 'Siva Store', 'TS1', 'Active'),
(127, '104', 'SUN OIL', '', 'GOLD WINNER 100GRMS', '', '', 'Nos', 0, '92.00', 'Siva Store', 'TS1', 'Active'),
(128, '105', 'RASAM PODI', '', 'SHAKTHI 50 GRMS', '', '', 'Nos', 0, '351.00', 'Siva Store', 'TS1', 'Active'),
(129, '106', 'SAMBAR MASALA', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '255.00', 'Siva Store', 'TS1', 'Active'),
(130, '107', 'CHICKEN MASALA', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '290.00', 'Siva Store', 'TS1', 'Active'),
(131, '108', 'MUTTON MASALA', '', 'SHAKTHI 50GRM', '', '', 'Nos', 0, '320.00', 'Siva Store', 'TS1', 'Active'),
(132, '109', 'CHILLI POWDER', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '165.00', 'Siva Store', 'TS1', 'Active'),
(133, '110', 'CHILLI POWDER', '', 'SHAKTHI 100GRMS', '', '', 'Nos', 0, '130.00', 'Siva Store', 'TS1', 'Active'),
(134, '111', 'TURMARIC POWDER', '', 'SHAKTHI 100GRMS', '', '', 'Nos', 0, '130.00', 'Siva Store', 'TS1', 'Active'),
(135, '112', 'TURMARIC POWDER', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '130.00', 'Siva Store', 'TS1', 'Active'),
(136, '114', 'DHANIYA POWDER', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '150.00', 'Siva Store', 'TS1', 'Active'),
(137, '115', 'DHANIYA POWDER', '', 'SHAKTHI 100GRM', '', '', 'Nos', 0, '150.00', 'Siva Store', 'TS1', 'Active'),
(138, '117', 'GATHAM PODI', '', 'FINE', '', '', 'Nos', 0, '28.00', 'Siva Store', 'TS1', 'Active'),
(139, '119', 'SANDAL ', '', 'JAR SANTHANAM', '', '', 'Nos', 0, '8.00', 'Siva Store', 'TS1', 'Active'),
(140, '121', 'PANNER', '', 'SWASTHI 150ML', '', '', 'Nos', 0, '6.50', 'Siva Store', 'TS1', 'Active'),
(141, '122', 'APPALAM KUDAL', '', 'MACRONI', '', '', 'Nos', 0, '40.00', 'Siva Store', 'TS1', 'Active'),
(142, '123', 'MEAL MAKER', '', 'KG', '', '', 'Nos', 0, '66.00', 'Siva Store', 'TS1', 'Active'),
(143, '124', 'APPALAM KUDAL', '', 'KG COLOR BOTI', '', '', 'Nos', 0, '33.50', 'Siva Store', 'TS1', 'Active'),
(144, '125', 'CHIPS', '', 'WHEEL CHIPS', '', '', 'Nos', 0, '56.00', 'Siva Store', 'TS1', 'Active'),
(145, '126', 'RICE FLOUR', '', 'ANIL 500GRM', '', '', 'Nos', 0, '21.00', 'Siva Store', 'TS1', 'Active'),
(146, '127', 'CHILLI POWDER', '', 'AACHI KUZH.CHILLIPOWDER 100GRM ', '', '', 'Nos', 0, '165.00', 'Siva Store', 'TS1', 'Active'),
(147, '128', 'CHILLI POWDER', '', 'AACHI KUZH.CHILLI 50GRMS', '', '', 'Nos', 0, '165.00', 'Siva Store', 'TS1', 'Active'),
(148, '129', 'BRIYANI MASALA', '', 'AACHI BRIYANI 20GRMS', '', '', 'Nos', 0, '81.00', 'Siva Store', 'TS1', 'Active'),
(149, '130', 'CHICKEN MASALA', '', 'AACHI CHICKEN 65 20GRMS', '', '', 'Nos', 0, '80.00', 'Siva Store', 'TS1', 'Active'),
(150, '131', 'CHICKEN MASALA', '', 'AACHI CHICKEN 20GRMS', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(151, '132', 'FISH MASALA', '', 'AACHI FISHFRY', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(152, '134', 'IDLY PODI', '', 'AACHI 20GRMS', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(153, '135', 'RASAM PODI', '', 'AACHI 20GRM', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(154, '136', 'SAMBAR MASALA', '', 'AACHI 20GRMS', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(155, '137', 'MUTTON MASALA', '', 'AACHI 20GRMS', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(156, '138', 'pepper powder', '', 'AACHI 20GRMS', '', '', 'Nos', 0, '78.00', 'Siva Store', 'TS1', 'Active'),
(157, '139', 'PULIYOTHARAI', '', 'AACHI 20GRMS', '', '', 'Nos', 0, '60.00', 'Siva Store', 'TS1', 'Active'),
(158, '38', 'GARAM MASALA', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '421.00', 'Siva Store', 'TS1', 'Active'),
(159, '39', 'CHANNA MASALA', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '330.00', 'Siva Store', 'TS1', 'Active'),
(160, '68', 'CHAT MASALAS', '', 'SHAKTHI 50GRMS', '', '', 'Nos', 0, '280.00', 'Siva Store', 'TS1', 'Active'),
(161, '99', 'SAGO', '', 'SMALL', '', '', 'Nos', 0, '53.00', 'Siva Store', 'TS1', 'Active'),
(162, '116', 'SAGO', '', 'MILK KG', '', '', 'Nos', 0, '45.00', 'Siva Store', 'TS1', 'Active'),
(163, '118', 'SAGO', '', 'BIG KG', '', '', 'Nos', 0, '58.00', 'Siva Store', 'TS1', 'Active'),
(164, '120', 'GARLIC', '', 'S KUMAR', '', '', 'Nos', 0, '45.00', 'Siva Store', 'TS1', 'Active'),
(165, '141', 'APPALAM', '', 'POPULAR', '', '', 'Nos', 0, '82.50', 'Siva Store', 'TS1', 'Active'),
(166, '133', 'BAJJI MASALA', '', 'SHAKTHI 200GRMS', '', '', 'Nos', 0, '23.50', 'Siva Store', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `m_role`
--

CREATE TABLE `m_role` (
  `id` int(11) NOT NULL,
  `role_id` varchar(250) NOT NULL,
  `role_name` varchar(250) NOT NULL,
  `r_description` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_role`
--

INSERT INTO `m_role` (`id`, `role_id`, `role_name`, `r_description`, `user`, `branch`, `status`) VALUES
(11, 'TD1', 'Billing', ' Counter-1', 'Siva Store', 'TS1', 'Active'),
(12, 'TD2', 'Purchase', 'Purchase ', 'suresh', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `m_staff`
--

CREATE TABLE `m_staff` (
  `id` int(11) NOT NULL,
  `s_id` varchar(250) NOT NULL,
  `s_name` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `al_mobile` varchar(250) NOT NULL,
  `doj` date NOT NULL,
  `salary` varchar(250) NOT NULL,
  `work_time` varchar(250) NOT NULL,
  `blood_grp` varchar(250) NOT NULL,
  `md` varchar(250) NOT NULL,
  `pg` varchar(250) NOT NULL,
  `p_mobile` varchar(250) NOT NULL,
  `p_al_mobile` varchar(250) NOT NULL,
  `orignal_id` varchar(250) NOT NULL,
  `aadhar_no` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `cp` varchar(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL,
  `branch_id` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_staff`
--

INSERT INTO `m_staff` (`id`, `s_id`, `s_name`, `dob`, `age`, `department`, `address`, `mobile`, `al_mobile`, `doj`, `salary`, `work_time`, `blood_grp`, `md`, `pg`, `p_mobile`, `p_al_mobile`, `orignal_id`, `aadhar_no`, `image`, `cp`, `company`, `role`, `branch_id`, `user_name`, `password`, `user`, `branch`, `status`) VALUES
(2, 'TS1', 'SURESH', '1995-10-08', '23', '', '6/44 THENANAMANALLUR(PO) THOUNDAMUTHUR(VIA) COIMBATORE-641109', '8012039867', '9786005454', '2017-11-08', '8000', '10 AM  - 7 PM', 'B+', 'NULL', 'M.MURUGAN', '7708294018', '9894429644', '415152', '121415141', 'Koala.jpg', '1 year', 'VERTEX SOLUTION', 'PURCHASE', 'TS1', 'SIVA STORE', 'SIVA', 'SIVA STORE', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `m_supplier_master`
--

CREATE TABLE `m_supplier_master` (
  `id` int(11) NOT NULL,
  `supplier_id` varchar(250) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gstin` varchar(250) NOT NULL,
  `c_person` varchar(250) NOT NULL,
  `c_no` varchar(250) NOT NULL,
  `al_no` varchar(250) NOT NULL,
  `pan_no` varchar(250) NOT NULL,
  `holder_1` varchar(250) NOT NULL,
  `bank_1` varchar(250) NOT NULL,
  `ac_no_1` varchar(250) NOT NULL,
  `branch_1` varchar(250) NOT NULL,
  `ifsc_1` varchar(250) NOT NULL,
  `holder_2` varchar(250) NOT NULL,
  `bank_2` varchar(250) NOT NULL,
  `ac_no_2` varchar(250) NOT NULL,
  `branch_2` varchar(250) NOT NULL,
  `ifsc_2` varchar(250) NOT NULL,
  `holder_3` varchar(250) NOT NULL,
  `bank_3` varchar(250) NOT NULL,
  `ac_no_3` varchar(250) NOT NULL,
  `branch_3` varchar(250) NOT NULL,
  `ifsc_3` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `discount` int(11) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_supplier_master`
--

INSERT INTO `m_supplier_master` (`id`, `supplier_id`, `supplier_name`, `address`, `email`, `gstin`, `c_person`, `c_no`, `al_no`, `pan_no`, `holder_1`, `bank_1`, `ac_no_1`, `branch_1`, `ifsc_1`, `holder_2`, `bank_2`, `ac_no_2`, `branch_2`, `ifsc_2`, `holder_3`, `bank_3`, `ac_no_3`, `branch_3`, `ifsc_3`, `user`, `branch`, `discount`, `status`) VALUES
(3, 'TS1', 'KAK Traders', 'VELLORE', 'kaktraders@gmail.com', '33AAGDFGDFGFDG', 'Rajesh', '9566969517', '9442212518', 'AIKPN91D', 'KAK TRADERS', 'HDFC', '50200003224674', 'VELLORE', 'HDFC0001971', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Activate'),
(4, 'TS2', 'SATHEESH AND CO', 'VELLORE', 'sathees@gmail.com', '33gfgfdgdf', 'Satheesh', '9566969517', '9442212518', 'AIKPN7195D', 'SATHEESH AND CO', 'HDFC BANK', '50200003224674', 'OPPANAKKARA STREET', 'HDFC0001971', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Activate'),
(5, 'TS3', 'SS TRADERS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Inactive'),
(6, 'TS4', 'SS TRADERS', '107 MUNDY STREET,VELLORE-632004', '', '33ABFFS1605PIZ2', 'SATHEESH KUMAR AND JAYACHANDERAN', '+919442233875', '+919442247875', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Active'),
(7, 'TS5', 'K.KOTEESWARAN&CO', 'NO.63,MUNDY STREET ,VELLORE', '', '33AADFK6485G1Z9', 'K.KOTEESWARAN', '+919843087161', '', '', 'K.KOTEESWARAN &CO', 'INDIAN BANK', '852305322', 'SATHUVACHARI', 'IDIB000S012', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Active'),
(8, 'TS6', 'KAK Traders', 'NO.3,BIG SENGUNTHAR STREET,KALAVAI', '', '33ASBPG0224H1ZI', '', '+919894113821', '+919894113821', '', 'KAK TRADERS', 'INDIAN BANK', '771281845', 'KALAVAI', 'IDIB000K005', 'KAK Traders', 'sbi', '868585686', 'erode', 'fi77577', 'kak traders', 'kvb', '46346546545', 'cbe', 'iu88488', 'Siva Store', 'TS1', 0, 'Active'),
(9, 'TS7', 'DVSRINIVASAN', 'MUNDY STREET, VELLORE', '', '', 'PERUMAL', '+919994709779', '', '', 'D.V.SRINIVASAN', 'STATE BANK OF INDIA', '37131551933', 'VELLORE', 'SBIN0001618', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Active'),
(10, 'TS8', 'DVSRINIVASAN TRADE', 'MUNDY STREET, VELLORE', '', '', 'PERUMAL', '+919994709779', '', '', 'D V SRINIVASAN TRADE', 'CANARA BANK ', '1129214000010', 'VELLORE', 'CNRB0001129', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Active'),
(11, 'TS9', 'S L SELVARAJ', 'BSS KOIL STREET, VELLORE', '', '', 'SELVARAJ', '', '', '', 'S.L.SELVARAJ', 'ANDHRA BANK ', '061611100002087', 'VELLORE', 'ANDB0000616', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Active'),
(12, 'TS10', 'SRINIVASA SYNDICATE', 'MUNDY STREET, VELLORE', '', '', 'BASKAR', '+919443161488', '', '', 'ANNAPOORNA SYNDICATE', 'INDIAN OVERSEAS BANK', '010302000002968', 'VELLORE', 'IOBA0000103', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Active'),
(13, 'TS11', 'Ramu', 'cbe', 'ram@gmail', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 100, 'Active'),
(14, 'TS12', 'sankar', 'cbe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 300, 'Active'),
(15, 'TS13', 'GANESH', 'ERODE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 0, 'Inactive'),
(16, 'TS14', 'RANJITH', 'ERODE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Siva Store', 'TS1', 200, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `m_unit_master`
--

CREATE TABLE `m_unit_master` (
  `id` int(11) NOT NULL,
  `u_id` varchar(250) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `us_name` varchar(250) NOT NULL,
  `u_description` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_unit_master`
--

INSERT INTO `m_unit_master` (`id`, `u_id`, `u_name`, `us_name`, `u_description`, `user`, `branch`, `status`) VALUES
(3, 'TC1', 'Nos', 'Nos', ' Numbers', 'Siva Store', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `p_purchase`
--

CREATE TABLE `p_purchase` (
  `id` int(11) NOT NULL,
  `p_invoice` varchar(250) NOT NULL,
  `pdate` date NOT NULL,
  `edate` date NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `prate` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `supplier` varchar(5) NOT NULL,
  `free` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_purchase`
--

INSERT INTO `p_purchase` (`id`, `p_invoice`, `pdate`, `edate`, `barcode`, `item_name`, `qty`, `mrp`, `discount`, `prate`, `total`, `user`, `branch`, `status`, `supplier`, `free`) VALUES
(131, '1', '2018-05-08', '0000-00-00', '6546546356', 'Hamam 50g 	  ', 100, 50, 5, 48, 4750, 'Siva Store', 'TS1', 'Activate', '3', ''),
(132, '2', '2018-05-10', '0000-00-00', '1', 'TURMERIC 20 GRAMS PACK OF 1 KG	  ', 1, 90, 0, 90, 90, 'Siva Store', 'TS1', 'Activate', '4', ''),
(133, '7', '0000-00-00', '0000-00-00', '', '	  ', 0, 0, 0, 0, 0, 'Siva Store', 'TS1', 'Active', '', ''),
(134, '9', '0000-00-00', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', 'Active', '', '100g Hamam soap'),
(135, '10', '2018-05-12', '0000-00-00', '10', 'CAMEL 10PCS	  ', 1, 142, 0, 140, 142, 'Siva Store', 'TS1', 'Active', '6', ''),
(136, '10', '0000-00-00', '0000-00-00', '2', 'VANASPATHI 200GRM GOLD	  ', 0, 0, 0, 0, 0, 'Siva Store', 'TS1', 'Active', '', ''),
(137, '14', '0000-00-00', '2018-05-15', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', 'Active', '', ''),
(138, '15', '0000-00-00', '2018-05-30', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', 'Active', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_purchase_temp`
--

CREATE TABLE `p_purchase_temp` (
  `id` int(11) NOT NULL,
  `p_invoice` varchar(250) NOT NULL,
  `supplier_name` varchar(250) NOT NULL,
  `pdate` date NOT NULL,
  `exp_date` date NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `prate` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `supplier` varchar(5) NOT NULL,
  `free` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_purchase_temp`
--

INSERT INTO `p_purchase_temp` (`id`, `p_invoice`, `supplier_name`, `pdate`, `exp_date`, `barcode`, `item_name`, `qty`, `mrp`, `discount`, `prate`, `total`, `user`, `branch`, `supplier`, `free`) VALUES
(10, '3', '', '2018-05-12', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 10, 10, 0, 9, 97, 'Siva Store', 'TS1', '6', ''),
(11, '3', '', '2018-05-12', '0000-00-00', '2', 'VANASPATHI 200GRM GOLD	  ', 5, 22, 0, 20, 110, 'Siva Store', 'TS1', '6', ''),
(12, '3', '', '2018-05-12', '0000-00-00', '3', 'VANASPATHI 500GRM SAR	  ', 5, 45, 0, 42, 223, 'Siva Store', 'TS1', '6', ''),
(13, '3', '', '2018-05-12', '0000-00-00', '4', 'VANASPATHI 50GRM 	  ', 20, 6, 0, 5, 120, 'Siva Store', 'TS1', '6', ''),
(14, '3', '', '2018-05-12', '0000-00-00', '5', ' GOPAL 500GRMS	  ', 2, 90, 0, 88, 180, 'Siva Store', 'TS1', '6', ''),
(15, '3', '', '2018-05-12', '0000-00-00', '6', 'IDAYAM  100 ML	  ', 10, 25, 0, 23, 250, 'Siva Store', 'TS1', '6', ''),
(16, '3', '', '2018-05-12', '0000-00-00', '7', 'IDAYAM  50 ML	  ', 20, 12, 0, 10, 240, 'Siva Store', 'TS1', '6', ''),
(17, '3', '', '2018-05-12', '0000-00-00', '8', 'THOOR DHALL -BEST	  ', 25, 85, 0, 83, 2125, 'Siva Store', 'TS1', '6', ''),
(18, '3', '', '2018-05-12', '0000-00-00', '9', 'CAMEL BOX	  ', 1, 120, 0, 118, 120, 'Siva Store', 'TS1', '6', ''),
(20, '3', '', '2018-05-12', '0000-00-00', '11', 'SUGANTHI COM	  ', 2, 98, 0, 96, 196, 'Siva Store', 'TS1', '6', ''),
(21, '3', '', '2018-05-12', '0000-00-00', '12', 'CYCLE 100GRM	  ', 6, 45, 0, 43, 270, 'Siva Store', 'TS1', '6', ''),
(23, '3', '', '2018-05-12', '0000-00-00', '13', 'CYCLE 12RS	  ', 2, 122, 0, 120, 244, 'Siva Store', 'TS1', '6', ''),
(24, '3', '', '2018-05-12', '0000-00-00', '14', 'CYCLE 5RS	  ', 2, 55, 0, 53, 110, 'Siva Store', 'TS1', '6', ''),
(25, '3', '', '2018-05-12', '0000-00-00', '15', 'ORANGE-BOX	  ', 2, 22, 0, 21, 44, 'Siva Store', 'TS1', '6', ''),
(26, '3', '', '2018-05-12', '0000-00-00', '16', 'KESARI-BOX	  ', 2, 23, 0, 21, 46, 'Siva Store', 'TS1', '6', ''),
(27, '3', '', '2018-05-12', '0000-00-00', '17', 'LEMON-BOX	  ', 2, 23, 0, 21, 46, 'Siva Store', 'TS1', '6', ''),
(28, '3', '', '2018-05-12', '0000-00-00', '18', 'GREEN PEAS BOLD	  ', 2, 85, 0, 82, 170, 'Siva Store', 'TS1', '6', ''),
(29, '3', '', '2018-05-12', '0000-00-00', '19', 'SAKTHI 500GRMS	  ', 10, 28, 0, 26, 280, 'Siva Store', 'TS1', '6', ''),
(30, '3', '', '2018-05-12', '0000-00-00', '20', ' ANIL 500 GRMS	  ', 10, 23, 0, 21, 230, 'Siva Store', 'TS1', '6', ''),
(31, '3', '', '2018-05-12', '0000-00-00', '21', 'CHINA	  ', 1, 98, 0, 96, 98, 'Siva Store', 'TS1', '6', ''),
(32, '3', '', '2018-05-12', '0000-00-00', '22', 'KG KITTY	  ', 3, 38, 0, 36, 114, 'Siva Store', 'TS1', '6', ''),
(33, '3', '', '2018-05-12', '0000-00-00', '23', 'RED CHERRY	  ', 1, 147, 0, 145, 74, 'Siva Store', 'TS1', '6', ''),
(34, '3', '', '0000-00-00', '0000-00-00', '24', 'TUTTY FRUITY  KGBRAND	  ', 1, 87, 0, 85, 44, 'Siva Store', 'TS1', '6', ''),
(35, '3', '', '2018-05-12', '0000-00-00', '25', 'LG POWDER	  ', 10, 50, 0, 48, 500, 'Siva Store', 'TS1', '6', ''),
(36, '3', '', '2018-05-12', '0000-00-00', '26', 'LG-KATTI	  ', 10, 48, 0, 47, 480, 'Siva Store', 'TS1', '6', ''),
(37, '3', '', '2018-05-12', '0000-00-00', '27', '20 GRAMS PACK OF 1 KG	  ', 1, 92, 0, 90, 92, 'Siva Store', 'TS1', '6', ''),
(38, '3', '', '2018-05-12', '0000-00-00', '28', ' 50 GRAMS PACK OF 1 KG	  ', 1, 172, 0, 170, 172, 'Siva Store', 'TS1', '6', ''),
(39, '3', '', '2018-05-12', '0000-00-00', '29', 'GOPURAM -FULL TURMERIC	  ', 1, 165, 0, 162, 165, 'Siva Store', 'TS1', '6', ''),
(40, '3', '', '2018-05-12', '0000-00-00', '30', 'KRISHNA -VILAKU THIRI	  ', 1, 65, 0, 63, 65, 'Siva Store', 'TS1', '6', ''),
(41, '3', '', '2018-05-12', '0000-00-00', '31', 'COTTON THIRI	  ', 1, 57, 0, 55, 57, 'Siva Store', 'TS1', '6', ''),
(42, '3', '', '2018-05-12', '0000-00-00', '32', 'MEENAKCHI 50GRMS (MERRUN)	  ', 2, 85, 0, 82, 170, 'Siva Store', 'TS1', '6', ''),
(43, '3', '', '2018-05-12', '0000-00-00', '33', 'MEENATSHI 100GRMS (MERRUN)	  ', 2, 83, 0, 81, 166, 'Siva Store', 'TS1', '6', ''),
(44, '3', '', '2018-05-12', '0000-00-00', '34', 'DEEPAM 1 LTR	  ', 10, 87, 0, 84, 870, 'Siva Store', 'TS1', '6', ''),
(45, '3', '', '2018-05-12', '0000-00-00', '35', 'DEEPAM  500 ML	  ', 10, 46, 0, 44, 460, 'Siva Store', 'TS1', '6', ''),
(46, '3', '', '2018-05-12', '0000-00-00', '36', 'IDAYAM 500ML	  ', 4, 118, 0, 115, 472, 'Siva Store', 'TS1', '6', ''),
(47, '3', '', '2018-05-12', '0000-00-00', '37', 'IDAYAM  1LTR	  ', 2, 218, 0, 216, 436, 'Siva Store', 'TS1', '6', ''),
(50, '3', '', '0000-00-00', '0000-00-00', '38', 'SHAKTHI 50GRMS	  ', 1, 424, 0, 421, 424, 'Siva Store', 'TS1', '6', ''),
(51, '3', '', '2018-05-12', '0000-00-00', '39', 'SHAKTHI 50GRMS	  ', 1, 332, 0, 330, 166, 'Siva Store', 'TS1', '6', ''),
(52, '3', '', '2018-05-12', '0000-00-00', '40', 'UDAYA KRISHNA  100GRMS	  ', 10, 55, 0, 53, 550, 'Siva Store', 'TS1', '6', ''),
(53, '3', '', '2018-05-12', '0000-00-00', '41', 'UDAYA KRISHNA  50GRMS	  ', 20, 30, 0, 28, 600, 'Siva Store', 'TS1', '6', ''),
(54, '3', '', '2018-05-12', '0000-00-00', '42', 'RKG 200GRMS	  ', 5, 109, 0, 106, 545, 'Siva Store', 'TS1', '6', ''),
(55, '3', '', '2018-05-12', '0000-00-00', '43', 'UDAYA KRISHNA  200GRMS	  ', 5, 109, 0, 106, 545, 'Siva Store', 'TS1', '6', ''),
(56, '3', '', '2018-05-12', '0000-00-00', '44', 'RKG 500GRMS	  ', 2, 262, 0, 259, 524, 'Siva Store', 'TS1', '6', ''),
(57, '3', '', '2018-05-12', '0000-00-00', '45', 'UDAYA KRISHNA  500GRMS	  ', 2, 258, 0, 255, 516, 'Siva Store', 'TS1', '6', ''),
(58, '3', '', '2018-05-12', '0000-00-00', '46', 'SALEM NEETU	  ', 3, 125, 0, 120, 375, 'Siva Store', 'TS1', '6', ''),
(59, '3', '', '2018-05-12', '0000-00-00', '47', '2ND ALL	  ', 25, 63, 0, 61, 1575, 'Siva Store', 'TS1', '6', ''),
(60, '3', '', '0000-00-00', '0000-00-00', '48', 'LOSS 	  ', 25, 50, 0, 48, 1250, 'Siva Store', 'TS1', '6', ''),
(61, '3', '', '2018-05-12', '0000-00-00', '49', 'ASIRWATH 1 KG	  ', 30, 46, 0, 43, 1380, 'Siva Store', 'TS1', '6', ''),
(62, '3', '', '2018-05-12', '0000-00-00', '50', 'ASIRWATH 500GMS	  ', 60, 25, 0, 22, 1500, 'Siva Store', 'TS1', '6', ''),
(63, '3', '', '2018-05-12', '0000-00-00', '51', 'NAGA 500GMS 	  ', 30, 25, 0, 23, 750, 'Siva Store', 'TS1', '6', ''),
(64, '3', '', '2018-05-12', '0000-00-00', '52', 'NAGA 1 KG	  ', 15, 46, 0, 45, 690, 'Siva Store', 'TS1', '6', ''),
(65, '3', '', '2018-05-12', '0000-00-00', '53', 'NAGA 500GMS 	  ', 30, 27, 0, 26, 810, 'Siva Store', 'TS1', '6', ''),
(66, '3', '', '2018-05-12', '0000-00-00', '54', 'SWASTHIK 500 GMS	  ', 10, 28, 0, 26, 280, 'Siva Store', 'TS1', '6', ''),
(67, '3', '', '2018-05-12', '0000-00-00', '55', 'DOSA NEW	  ', 20, 140, 0, 138, 2800, 'Siva Store', 'TS1', '6', ''),
(68, '3', '', '2018-05-12', '0000-00-00', '56', 'NEETU ENDO 5	  ', 20, 110, 0, 107, 2200, 'Siva Store', 'TS1', '6', ''),
(69, '3', '', '2018-05-12', '0000-00-00', '57', 'GREEN AC	  ', 20, 75, 0, 71, 1500, 'Siva Store', 'TS1', '6', ''),
(70, '3', '', '2018-05-12', '0000-00-00', '58', 'WHITE SPL	  ', 10, 85, 0, 83, 850, 'Siva Store', 'TS1', '6', ''),
(71, '3', '', '2018-05-12', '0000-00-00', '59', 'RED 	  ', 10, 55, 0, 50, 550, 'Siva Store', 'TS1', '6', ''),
(72, '3', '', '2018-05-12', '0000-00-00', '60', 'IRAN	  ', 3, 685, 0, 680, 2055, 'Siva Store', 'TS1', '6', ''),
(73, '3', '', '2018-05-12', '0000-00-00', '61', 'FULL	  ', 3, 765, 0, 760, 2295, 'Siva Store', 'TS1', '6', ''),
(74, '3', '', '2018-05-12', '0000-00-00', '62', 'BROKEN	  ', 1, 755, 0, 750, 755, 'Siva Store', 'TS1', '6', ''),
(75, '3', '', '2018-05-12', '0000-00-00', '63', 'SPL	  ', 1, 1335, 0, 1330, 668, 'Siva Store', 'TS1', '6', ''),
(76, '3', '', '2018-05-12', '0000-00-00', '64', 'LION 200	  ', 10, 36, 0, 34, 360, 'Siva Store', 'TS1', '6', ''),
(77, '3', '', '2018-05-12', '0000-00-00', '65', 'LION 500 GMS 1 +1	  ', 2, 126, 0, 124, 252, 'Siva Store', 'TS1', '6', ''),
(78, '3', '', '2018-05-12', '0000-00-00', '66', 'ARABIAN 500 GMS 1+1	  ', 2, 158, 0, 156, 316, 'Siva Store', 'TS1', '6', ''),
(79, '3', '', '2018-05-12', '0000-00-00', '67', 'JL NEW	  ', 15, 65, 0, 63, 975, 'Siva Store', 'TS1', '6', ''),
(80, '3', '6', '0000-00-00', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', '', ''),
(81, '3', '6', '2018-05-12', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', '', ''),
(82, '3', '7', '2018-05-12', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', '', ''),
(83, '4', '7', '0000-00-00', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', '', ''),
(84, '4', '8', '0000-00-00', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', '', ''),
(85, '5', '9', '0000-00-00', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', '', ''),
(86, '5', 'DVSRINIVASAN', '2018-05-12', '0000-00-00', '22', 'KG KITTY	  ', 0, 0, 0, 0, 0, 'Siva Store', 'TS1', '', ''),
(87, '5', 'DVSRINIVASAN', '2018-05-12', '0000-00-00', '33', 'MEENATSHI 100GRMS (MERRUN)	  ', 0, 0, 0, 0, 0, 'Siva Store', 'TS1', '', ''),
(88, '5', '11', '2018-05-12', '0000-00-00', '1', 'VANASPATHI 100GRM SAR	  ', 0, 0, 0, 90, 0, 'Siva Store', 'TS1', '', '100g Hamam soap'),
(95, '16', '11', '0000-00-00', '2018-05-15', '88', 'BOLD 	  ', 0, 0, 0, 0, 0, 'Siva Store', 'TS1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `s_door_invoice`
--

CREATE TABLE `s_door_invoice` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(250) NOT NULL,
  `sdate` date NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `net_amount` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_door_invoice`
--

INSERT INTO `s_door_invoice` (`id`, `invoice_no`, `sdate`, `customer_name`, `mobile_no`, `net_amount`, `status`, `user`, `branch`) VALUES
(52, '14', '0000-00-00', 'LINCHU	  ', '9940707374', '1368', 'Active', 'Siva Store', 'TS1'),
(53, '15', '2018-05-10', 'test', '9940707374', '90.5', 'Active', 'Siva Store', 'TS1');

-- --------------------------------------------------------

--
-- Table structure for table `s_door_purchase`
--

CREATE TABLE `s_door_purchase` (
  `id` int(11) NOT NULL,
  `ino` varchar(250) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `cmobile` varchar(250) NOT NULL,
  `sdate` date NOT NULL,
  `iname` varchar(250) NOT NULL,
  `mrp` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_door_purchase`
--

INSERT INTO `s_door_purchase` (`id`, `ino`, `cname`, `cmobile`, `sdate`, `iname`, `mrp`, `quantity`, `discount`, `total`, `user`, `branch`, `status`) VALUES
(28, '14', 'LINCHU	  ', '9940707374', '0000-00-00', 'UDAYA KRISHNA  50GRM', '28', '1', '0', '28', 'Siva Store', 'TS1', 'Active'),
(29, '14', 'LINCHU	  ', '9940707374', '0000-00-00', 'BEST', '670', '2', '0', '1340', 'Siva Store', 'TS1', 'Active'),
(30, '15', 'test', '9940707374', '2018-05-10', 'THOOR DHALL -BEST', '62.5', '1', '0', '62.5', 'Siva Store', 'TS1', 'Active'),
(31, '15', 'test', '9940707374', '2018-05-10', 'UDAYA KRISHNA  50GRM', '28', '1', '0', '28', 'Siva Store', 'TS1', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `s_door_temp`
--

CREATE TABLE `s_door_temp` (
  `id` int(11) NOT NULL,
  `ino` varchar(20) NOT NULL,
  `cname` varchar(35) NOT NULL,
  `cmobile` varchar(20) NOT NULL,
  `sdate` date NOT NULL,
  `iname` varchar(20) NOT NULL,
  `mrp` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_door_temp`
--

INSERT INTO `s_door_temp` (`id`, `ino`, `cname`, `cmobile`, `sdate`, `iname`, `mrp`, `quantity`, `discount`, `total`, `user`, `branch`) VALUES
(50, '15', 'test', '9940707374', '2018-05-10', 'RKG 200GRMS', '106', '1', '0', '106', 'Siva Store', 'TS1'),
(51, '15', 'test', '9940707374', '2018-05-10', 'THOOR DHALL -BEST', '62.5', '1', '0', '62.5', 'Siva Store', 'TS1'),
(52, '15', 'test', '9940707374', '2018-05-10', 'UDAYA KRISHNA  50GRM', '28', '1', '0', '28', 'Siva Store', 'TS1');

-- --------------------------------------------------------

--
-- Table structure for table `ws_invoice`
--

CREATE TABLE `ws_invoice` (
  `id` int(11) NOT NULL,
  `ws_ino` varchar(250) NOT NULL,
  `ws_cname` varchar(250) NOT NULL,
  `ws_cmobile` varchar(250) NOT NULL,
  `ws_sdate` varchar(250) NOT NULL,
  `ws_iname` varchar(250) NOT NULL,
  `ws_mrp` varchar(250) NOT NULL,
  `ws_qty` varchar(250) NOT NULL,
  `ws_discount` varchar(250) NOT NULL,
  `ws_total` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ws_invoice_temp`
--

CREATE TABLE `ws_invoice_temp` (
  `id` int(11) NOT NULL,
  `ws_ino` varchar(250) NOT NULL,
  `ws_cname` varchar(250) NOT NULL,
  `ws_cmobile` varchar(250) NOT NULL,
  `ws_sdate` date NOT NULL,
  `ws_iname` varchar(250) NOT NULL,
  `ws_mrp` varchar(250) NOT NULL,
  `ws_qty` varchar(250) NOT NULL,
  `ws_discount` varchar(250) NOT NULL,
  `ws_total` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `branch` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_inventory`
--
ALTER TABLE `a_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generate`
--
ALTER TABLE `generate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_people_job`
--
ALTER TABLE `hr_people_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_product_details`
--
ALTER TABLE `invoice_product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_branch_creation`
--
ALTER TABLE `m_branch_creation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_category`
--
ALTER TABLE `m_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_company_creation`
--
ALTER TABLE `m_company_creation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_customer_master`
--
ALTER TABLE `m_customer_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_department`
--
ALTER TABLE `m_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_item_master`
--
ALTER TABLE `m_item_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_role`
--
ALTER TABLE `m_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_staff`
--
ALTER TABLE `m_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_supplier_master`
--
ALTER TABLE `m_supplier_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_unit_master`
--
ALTER TABLE `m_unit_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_purchase`
--
ALTER TABLE `p_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_purchase_temp`
--
ALTER TABLE `p_purchase_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_door_invoice`
--
ALTER TABLE `s_door_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_door_purchase`
--
ALTER TABLE `s_door_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_door_temp`
--
ALTER TABLE `s_door_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ws_invoice`
--
ALTER TABLE `ws_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ws_invoice_temp`
--
ALTER TABLE `ws_invoice_temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_inventory`
--
ALTER TABLE `a_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `generate`
--
ALTER TABLE `generate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hr_people_job`
--
ALTER TABLE `hr_people_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `invoice_product_details`
--
ALTER TABLE `invoice_product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `m_branch_creation`
--
ALTER TABLE `m_branch_creation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `m_category`
--
ALTER TABLE `m_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `m_company_creation`
--
ALTER TABLE `m_company_creation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_customer_master`
--
ALTER TABLE `m_customer_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `m_department`
--
ALTER TABLE `m_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `m_item_master`
--
ALTER TABLE `m_item_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `m_role`
--
ALTER TABLE `m_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `m_staff`
--
ALTER TABLE `m_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `m_supplier_master`
--
ALTER TABLE `m_supplier_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `m_unit_master`
--
ALTER TABLE `m_unit_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `p_purchase`
--
ALTER TABLE `p_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- AUTO_INCREMENT for table `p_purchase_temp`
--
ALTER TABLE `p_purchase_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `s_door_invoice`
--
ALTER TABLE `s_door_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `s_door_purchase`
--
ALTER TABLE `s_door_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `s_door_temp`
--
ALTER TABLE `s_door_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `ws_invoice`
--
ALTER TABLE `ws_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ws_invoice_temp`
--
ALTER TABLE `ws_invoice_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
