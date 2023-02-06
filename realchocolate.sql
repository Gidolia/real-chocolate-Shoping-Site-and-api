-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2023 at 11:07 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realchocolate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_password`
--

CREATE TABLE `admin_password` (
  `ap_id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_password`
--

INSERT INTO `admin_password` (`ap_id`, `password`) VALUES
(1, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `all_call`
--

CREATE TABLE `all_call` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `second` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_call`
--

INSERT INTO `all_call` (`id`, `name`, `mobile`, `type`, `date`, `second`) VALUES
(1, 'Jr Jitendra Jio', '+916263606071', 'INCOMING', 'Sun Apr 10 14:33:53 ', '1391'),
(55665, '', '+917935075206', 'INCOMING', 'Thu Feb 24 08:48:53 ', '74');

-- --------------------------------------------------------

--
-- Table structure for table `all_contact`
--

CREATE TABLE `all_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_contact`
--

INSERT INTO `all_contact` (`id`, `name`, `mobile`) VALUES
(1, '+91 94254 98125', '+919425498125'),
(27876, 'ð•¸ð–—s ð•¾ð–†ð–™ð–Žð–˜', '+919770989514');

-- --------------------------------------------------------

--
-- Table structure for table `all_message`
--

CREATE TABLE `all_message` (
  `id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `state` varchar(20) NOT NULL,
  `time` varchar(50) NOT NULL,
  `sms_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_message`
--

INSERT INTO `all_message` (`id`, `address`, `message`, `state`, `time`, `sms_id`) VALUES
(1, 'VK-MYCRCL', 'Congrats 88190531XX,\nRs.1500 Welcome Bonus. KOL vs DEL, T20 Match on My11Circle. Prize Pool - 5,61,00,000(5.61Crores). Join -   http://1kx.in/OI8z3aUVSQx', '1', 'Sun Apr 10 14:40:29 GMT+05:30 2022', '1342'),
(19083, 'BP-SELNOW', 'Dear Customer,\nSell your car instantly for the best price at CARS24!\nGive a missed call to\n9319283992\nor\nbook an inspection at\nhttps://bit.ly/3iX1iKV', '0', 'Mon May 09 10:58:42 GMT+05:30 2022', '2090'),
(19084, 'VK-KOTAKB', 'Dear Customer, get up to Rs. 10 Lakh instantly to invest in the on-going IPO with Kotak IPO Funding. Apply Now 2.kmbl.in/XlBYld3sob5. T&C apply', '0', 'Mon May 09 10:06:33 GMT+05:30 2022', '2089');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `unq_id` varchar(10) NOT NULL,
  `c_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `unq_id`, `c_id`) VALUES
(12, 'Chocolate', 'cat82370.jpg', '82370', 'f'),
(13, 'Other products', 'cat14312.jpg', '28721', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `cu_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`cu_id`, `name`, `mobile`, `email`, `subject`, `message`, `date`, `time`) VALUES
(2, 'Rohit Gidolia', '', 'gidolia3@gmail.com', 'D-551 New Suresh nagar thatipur Gwalior', 'dscfdsc', '2021-11-27', '08:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `copartner`
--

CREATE TABLE `copartner` (
  `p_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `certificate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `copartner`
--

INSERT INTO `copartner` (`p_id`, `name`, `mobile`, `email`, `address`, `state`, `city`, `certificate`) VALUES
(73, 'Abhay kumar dixit', '18001232348', 'info@realchocolate.co.in', 'Allahabad', 'UP', 'Allahabad', 'cp5543.jpg'),
(74, 'Mohmmad abbas', '18001232348', 'info@realchocolate.co.in', 'shrinagar', 'Jammu kashmir', 'shrinagar', 'cp2638.jpg'),
(75, 'Arogya herbal centre', '18001232348', 'info@realchocolate.co.in', 'Bhopal', 'Mp', 'Bhopal', 'cp1470.jpg'),
(77, 'Maa interprises', '18001232348', 'info@realchocolate.co.in', 'Hazaribagh', 'Jharkhand', 'Hazaribagh', 'cp7066.jpg'),
(78, 'Prospace enternational', '18001232348', 'info@realchocolate.co.in', 'Hyderabad', 'Telangana', 'Hyderabad', 'cp8261.jpg'),
(79, 'Ashok kumar sharma', '18001232348', 'info@realchocolate.co.in', 'Giridih', 'Jharkhand', 'Giridih', 'cp1292.jpg'),
(80, 'Radhika ji', '18001232348', 'info@realchocolate.co.in', 'Delhi', 'India', 'Delhi', 'cp6500.jpg'),
(81, 'VDJ water treatmant solution', '18001232348', 'info@realchocolate.co.in', 'Gwalior', 'Mp', 'Gwalior', 'cp9303.jpg'),
(82, 'Rajendra kumar sharma', '18001232348', 'info@realchocolate.co.in', 'Kota', 'Rajesthan', 'Kota', 'cp4977.jpg'),
(83, 'Harsh chocolate ', '18001232348', 'info@realchocolate.co.in', 'Ranchi', 'Jharkhand', 'Ranchi', 'cp9997.jpg'),
(84, 'Ramchandra singh', '18001232348', 'info@realchocolate.co.in', 'Sonbhadra', 'UP', 'Sonbhadra', 'cp1101.jpg'),
(85, 'Neeraj singh ', '18001232348', 'info@realchocolate.co.in', 'Satna', 'Mp', 'Satna', 'cp1463.jpg'),
(86, 'Suresh jargid', '18001232348', 'info@realchocolate.co.in', 'Jodhpur', 'Rajesthan', 'Jodhpur', 'cp9486.jpg'),
(87, 'Ram swaroop rajak', '18001232348', 'info@realchocolate.co.in', 'Rewa', 'Mp', 'Rewa', 'cp9804.jpg'),
(88, 'Ramchandra singh', '18001232348', 'info@realchocolate.co.in', 'Varanashi', 'UP', 'Varanashi', 'cp2284.jpg'),
(89, 'Suman sharma', '18001232348', 'info@realchocolate.co.in', 'Amaritsar', 'Panjab', 'Amaritsar', 'cp4224.jpg'),
(90, 'Hariom singh', '18001232348', 'info@realchocolate.co.in', 'Kanpur', 'UP', 'Kanpur', 'cp2813.jpg'),
(91, 'Satish kumar gupta', '18001232348', 'info@realchocolate.co.in', 'Sidhi', 'MP', 'Sadhi', 'cp6476.jpg'),
(92, 'Ashok kumar ', '18001232348', 'info@realchocolate.co.in', 'Barmer', 'Rajesthan', 'Barmer', 'cp3569.jpg'),
(93, 'Dileep kumar verma', '18001232348', 'info@realchocolate.co.in', 'Lucknow', 'UP', 'Lucknow', 'cp4765.jpg'),
(94, 'Subhash chand yadav', '18001232348', 'info@realchocolate.co.in', 'Jaipur', 'Rajesthan', 'Jaipur', 'cp8658.jpg'),
(95, 'Anand kumar chaurasiya', '18001232348', 'info@realchocolate.co.in', 'Singrauli', 'MP', 'Singrauli', 'cp6182.jpg'),
(96, 'Hans raj bisnoi', '18001232348', 'info@realchocolate.co.in', 'Bikaner', 'Rajesthan', 'Bikaner', 'cp4737.jpg'),
(97, 'Sushama ji kumari', '18001232348', 'info@realchocolate.co.in', 'Kathua', 'Jammu kashmir', 'Kathua', 'cp9236.jpg'),
(98, 'Amit kumar saini', '18001232348', 'info@realchocolate.co.in', 'Unnao', 'UP', 'Unnao', 'cp6307.jpg'),
(99, 'Pushplata bhoopesh sukla', '18001232348', 'info@realchocolate.co.in', 'Jaunpur', 'UP', 'Jaunpur', 'cp6761.jpg'),
(100, 'SMT rekha devi', '18001232348', 'info@realchocolate.co.in', 'Mirzapur', 'UP', 'Mirzapur', 'cp7031.jpg'),
(101, 'VANSH UPPAL', '18001232348', 'info@realchocolate.co.in', 'Shivpuri', 'MP', 'Shivpuri', 'cp3438.jpg'),
(102, 'Shri mati sita devi pal', '18001232348', 'info@realchocolate.co.in', 'Bhadohi', 'UP', 'Bhadohi', 'cp7547.jpg'),
(103, 'awadhesh raman', '18001232348', 'info@realchocolate.co.in', 'Gorkhpur', 'UP', 'Gorkhpur', 'cp2730.jpg'),
(104, 'Awadhesh raman', '18001232348', 'info@realchocolate.co.in', 'Lucknow', 'up', 'Lucknow', 'cp4166.jpg'),
(105, 'vinod kumar chaubey', '18001232348', 'info@realchocolate.co.in', 'shonbhadra', 'up', 'shonbhadra', 'cp6704.jpg'),
(106, 'Munna panday', '18001232348', 'info@realchocolate.co.in', 'Prayagraj', 'up', 'Prayagraj', 'cp6128.jpg'),
(107, 'Vandna vedi', '18001232348', 'info@realchocolate.co.in', 'Jalaun', 'UP', 'Jalaun', 'cp1615.jpg'),
(108, 'Sona enterpises', '18001232348', 'info@realchocolate.co.in', 'Deoria', 'up', 'Deoria', 'cp4254.jpg'),
(109, 'Sanjeev kumar dwivedi', '18001232348', 'info@realchocolate.co.in', 'Chattarpur', 'up', 'Chattarpur', 'cp5135.jpg'),
(110, 'Namrta singh ', '18001232348', 'info@realchocolate.co.in', 'Sidhi', 'Mp', 'Sadhi', 'cp4092.jpg'),
(111, 'Uttapal', '18001232348', 'info@realchocolate.co.in', 'Jamnagar', 'Gujrat', 'jam', 'cp2365.jpg'),
(112, 'Soni kumari', '18001232348', 'info@realchocolate.co.in', 'Patna', 'up', 'Patna', 'cp5542.jpg'),
(113, 'Yasharaj enterpises', '18001232348', 'info@realchocolate.co.in', 'Deoria', 'UP', 'Deoria', 'cp2160.jpg'),
(114, 'khushi enterpises ', '18001232348', 'info@realchocolate.co.in', 'Mau', 'UP', 'Mau', 'cp3659.jpg'),
(115, 'Sanjay sharma', '18001232348', 'info@realchocolate.co.in', 'Mau', 'UP', 'Mau', 'cp7007.jpg'),
(116, 'Vikash enterpises ', '18001232348', 'info@realchocolate.co.in', 'Raxol', 'Bihar', 'Raxol', 'cp9817.jpg'),
(117, 'Akhand pratap singh', '18001232348', 'info@realchocolate.co.in', 'Chanduli', 'up', 'Chanduali', 'cp8768.jpg'),
(118, 'Kanhaiya lal gupta', '18001232348', 'info@realchocolate.co.in', 'Satna', 'UP', 'Satna', 'cp4699.jpg'),
(119, 'Gopi Lal Sharma', '18001232348', 'info@realchocolate.co.in', 'Rajesthan', 'Rajesthan', 'Rajesthan', 'cp8769.jpg'),
(120, 'nitin monan sarin', '18001232348', 'info@realchocolate.co.in', 'Najibabad', 'UP', 'Najibabad', 'cp6001.jpg'),
(121, 'Maa interprises', '18001232348', 'info@realchocolate.co.in', 'Hazaribagh', 'Jharkhand', 'Hazaribagh', 'cp1070.jpg'),
(122, 'Rohit rajesh manjre', '18001232384', 'inf@realchocolate.co.in', 'Nagpur', 'Maharastra', 'Nagpur', 'cp9040.jpg'),
(123, 'Kanhaiya lal gupta', '18001232384', 'inf@realchocolate.co.in', 'Satna', 'MP', 'Satna', 'cp3662.jpg'),
(124, 'Sangeetan Pachauri/Seema Sharma', '18001232348', 'info@realchocolate.co.in', 'Awadh ', 'UP', 'Awadh', 'cp3678.jpg'),
(125, 'Rajeev kumar', '18001232348', 'info@realchocolate.co.in', 'Jhansi', 'up', 'Jhansi', 'cp5898.jpg'),
(129, 'Sombir', '18001232348', 'info@realchocolate.co.in', 'Fatehgarh', 'Haryana', 'Fategarh', 'cp9257.jpg'),
(130, 'Kirpal singh', '18001232348', 'info@realchocolate.co.in', 'uttarakhand', 'uttarakhand', 'uttarakhand', 'cp1993.jpg'),
(131, 'Namrta singh sindhi', '18001232348', 'info@realchocolate.co.in', 'Sindhi', 'mp', 'Sindhi', 'cp3536.jpg'),
(132, 'Akhand Pratap Singh', '18001232348', 'info@realchocolate.co.in', 'Chandauli', 'up', 'Chandauli', 'cp5745.jpg'),
(133, 'Rohit Rajesh Manjre', '18001232348', 'info@realchocolate.co.in', 'Nagpur ', 'Maharastra', 'Nagpur', 'cp2217.jpg'),
(134, 'Santram Chaudhary', '18001232348', 'info@realchocolate.co.in', 'Jansi', 'up', 'Jansi', 'cp4598.jpg'),
(135, 'Devicharan Chinddalal Sharma', '18001232348', 'info@realchocolate.co.in', 'Agra', 'up', 'Agra', 'cp9516.jpg'),
(136, 'Jagdish', '18001232348', 'info@realchocolate.co.in', 'Dholpur', 'Rejesthan', 'Dholpur', 'cp2576.jpg'),
(137, 'Jagdish', '18001232348', 'info@realchocolate.co.in', 'Bharatpur', 'Rejesthan', 'Bharatpur', 'cp5594.jpg'),
(138, 'Govinda', '18001232348', 'info@realchocolate.co.in', 'Praygraj', 'up', 'Prayagraj', 'cp5816.jpg'),
(139, 'Mohd Rafiq Magray', '18001232348', 'info@realchocolate.co.in', 'Kashmir', 'Kashmir', 'Kashmir', 'cp3419.jpg'),
(140, 'Ritu Shukla', '18001232348', 'info@realchocolate.co.in', 'Badshahpur ', 'u.p', 'jaunpur', 'cp7102.jpg'),
(141, 'Pratima Mishra', '18001232348', 'info@realchocolate.co.in', 'Shahganj', 'up', 'Jaunpur', 'cp8164.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `c_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addreass` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `r_date` varchar(20) NOT NULL,
  `r_time` varchar(25) NOT NULL,
  `check` int(11) NOT NULL,
  `coin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costumer`
--

INSERT INTO `costumer` (`c_id`, `name`, `mobile`, `password`, `email`, `addreass`, `city`, `state`, `dob`, `status`, `r_date`, `r_time`, `check`, `coin`) VALUES
(1, 'Deepak Rajauriya', '8819053148', '123', 'Deepakrajauriya786@gmail.com', 'Gwalior Home', '', '', '', '', '2021-12-04', '02:59:52', 1, '4999520'),
(3, 'Rohit Gidolia', '7869470415', '123', '1', '', '', '', '', '', '2021-12-04', '14:15:21', 1, '500'),
(17, 'room', '7723850822', 'reee123', 'rohmsinghrajauriya@gmail.com', 'sas', '', '', '', '', '2021-12-20', '00:33:04', 1, '485'),
(18, 'shailendra lahari', '9009853539', '7810', 'lahariprinters.gwl@gmail.com', 'gautam nagar thatipur gwalior', '', '', '', '', '2021-12-20', '13:21:39', 1, '499790'),
(19, 'RK Dhanelay', '9074714065', '123', 'dhanelay83@gmail.com', 'Morar', '', '', '', '', '2021-12-20', '17:01:09', 1, '455'),
(20, 'rohit', '7723850822', 'reee', '7723850822', 'rohit', '', '', '', '', '2022-03-07', '16:14:57', 1, ''),
(21, 'Vijay patil', '7828987239', '12345', 'vj@gmail.com', 'AnnaNagar BHEL', 'Indore', 'Madhya Pradesh', '1999-06-24', '', '', '', 0, ''),
(22, 'Seeta devi', '7408132205', '123456', 'palramchandra80@gmail.com', 'Pratap Singh patti matethu', 'Bhadohi', 'Uttar Pradesh', '1980-08-02', '', '', '', 0, ''),
(23, 'Vishal Kumar shaw', '8981331577', '1712', 'vishalkumarshaw1997@gmail.com', 'H/no 16/1 bl no 19 jagatdal mominpara para 24pgs north pin cord 743125', 'Kolkata', 'West Bengal', '1989-12-17', '', '', '', 0, ''),
(24, 'HANS RAJ BISHNOI', '8872592127', 'Hans@1976', 'hrbishnoi76@gmail.com', 'S/O,Sampat Ram Bishnoi,,Ward23,M.D.V.Colony,NearMobileTower,JambheshwarNagar,Bikaner,', 'Bikaner', 'Rajasthan', '1976-08-20', '', '', '', 0, ''),
(25, 'Pradeep shukla', '8810245244', '8810245244pradeep', 'pradeepshukla2452@gmail.com', 'Unchdih ', 'Jaunpur', 'Up', '1982-01-01', '', '', '', 0, ''),
(26, '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(27, 'Rohit Singh', '9111406352', '123', 'vijay4patil12@gmail.com', '1047 C SECTOR ANNANAGAR SECURITY LINE', 'GOVINDPURA BHEL BHOPAL', 'M.P', '1999-05-12', '', '', '', 0, ''),
(28, 'Vishnu Sharma', '+91790626445', '141019', 'vishnusharma.sharma1997@gmail.com', 'Singrawali', 'Singrawali basai jagner', 'Uttar Pradesh', '', '', '', '', 0, ''),
(29, 'Ravi Singh', '08429933977', 'ravisungh445', 'ravisinghrajput4455@gmail.com', 'Dalki no I post.. Murlichapra-', 'Ballia', 'Uttar Pradesh', '2023-02-04', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `h_id` int(11) NOT NULL,
  `obd_id` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `h_desc` varchar(500) NOT NULL,
  `c_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`h_id`, `obd_id`, `mobile`, `h_desc`, `c_mobile`) VALUES
(1, '1', '', '', ''),
(102, '1', 'VZ-ViCARE', 'Last-Call:00:02:12, Charge:Rs0.00, Main-Bal:Rs0.00, ULPack-Exp:May 30 2022', '8819053148');

-- --------------------------------------------------------

--
-- Table structure for table `order_bill`
--

CREATE TABLE `order_bill` (
  `ob_id` int(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `calling_no` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `addreass` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_bill`
--

INSERT INTO `order_bill` (`ob_id`, `mobile`, `calling_no`, `name`, `email`, `addreass`, `city`, `state`, `pin_code`, `price`, `status`, `date`, `time`) VALUES
(0, '7408132205', '7408132205', 'Seeta devi', 'palramchandra80@gmail.com', 'Pratap Singh patti matethu', 'Bhadohi', 'Uttar Pradesh', '221404', '0', 'order conf', '', ''),
(0, '7828987239', '+917828987', 'VIJAY PATIL', 'vijay4patil12@gmail.com', '1047 C SECTOR ANNANAGAR SECURITY LINE ', 'GOVINDPURA BHEL BHOPAL', 'M.P', '462023', '3000', 'order conf', '', ''),
(0, '9111406352', '+917828987', 'VIJAY PATIL', 'vijay4patil12@gmail.com', '1047 C SECTOR ANNANAGAR SECURITY LINE ', 'GOVINDPURA BHEL BHOPAL', '9111406352', '462023', '2000', 'order conf', '', ''),
(0, '9111406352', '+917828987', 'VIJAY PATIL', 'vijay4patil12@gmail.com', '1047 C SECTOR ANNANAGAR SECURITY LINE ', 'GOVINDPURA BHEL BHOPAL', 'MADHYA  PRADESH', '462023', '1000', 'order conf', '', ''),
(0, '9111406352', '+917828987', 'VIJAY PATIL', 'vijay4patil12@gmail.com', '1047 C SECTOR ANNANAGAR SECURITY LINE ', 'GOVINDPURA BHEL BHOPAL', 'MADHYA  PRADESH', '462023', '500', 'order conf', '', ''),
(0, '9111406352', '+917828987', 'VIJAY PATIL', 'vijay4patil12@gmail.com', '1047 C SECTOR ANNANAGAR SECURITY LINE ', 'GOVINDPURA BHEL BHOPAL', 'M.P', '462023', '700', 'order conf', '2023-01-20', '20:38:28'),
(0, '7828987239', '+917828987', 'VIJAY PATIL', 'vijay4patil12@gmail.com', '1047 C SECTOR ANNANAGAR SECURITY LINE ', 'GOVINDPURA BHEL BHOPAL', 'M.P', '462023', '100', 'order conf', '2023-01-21', '12:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `order_bill_detail`
--

CREATE TABLE `order_bill_detail` (
  `obd_id` int(20) NOT NULL,
  `ob_id` varchar(10) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `mrp` varchar(10) NOT NULL,
  `dp` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty_price` varchar(30) NOT NULL,
  `discount` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_bill_detail`
--

INSERT INTO `order_bill_detail` (`obd_id`, `ob_id`, `p_id`, `mrp`, `dp`, `price`, `qty_price`, `discount`, `qty`, `mobile`, `status`) VALUES
(0, '0', '62', '600', '500', '500', '0', '', '2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `unq_id` varchar(2) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `mrp` varchar(50) NOT NULL,
  `dp` varchar(50) NOT NULL,
  `qty` varchar(20) NOT NULL,
  `note` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `short_description` varchar(250) NOT NULL,
  `long_description` varchar(500) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `unq_id`, `c_id`, `name`, `date`, `time`, `mrp`, `dp`, `qty`, `note`, `status`, `short_description`, `long_description`, `img1`, `img2`, `discount`, `weight`) VALUES
(93, '28', 'g', 'Rc31', '2022-07-05', '12:32:18', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro192.jpg', 'pro292.jpg', '0%%', ''),
(94, '28', 'g', 'Rc32', '2022-07-05', '12:33:31', '900', '800', 'in stock', '', '', 'real cake', 'real cake', 'pro193.jpg', 'pro293.jpg', '0%%', ''),
(97, '28', 'g', 'Rc35', '2022-07-05', '12:37:38', '700', '600', 'in stock', '', '', 'real cake', 'real cake', 'pro196.jpg', 'pro296.jpg', '0%%', ''),
(98, '28', 'g', 'Rc36', '2022-07-05', '12:38:24', '800', '700', 'in stock', '', '', 'real cake', 'real cake', 'pro197.jpg', 'pro297.jpg', '0%%', ''),
(99, '28', 'g', 'Rc37', '2022-07-05', '12:40:02', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro198.jpg', 'pro298.jpg', '0%%', ''),
(100, '28', 'g', 'Rc38', '2022-07-05', '12:40:49', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro199.jpg', 'pro299.jpg', '0%%', ''),
(101, '28', 'g', 'Rc39', '2022-07-05', '12:42:15', '600', '500', 'in stock', '', '', 'real cake', 'real cake', 'pro1100.jpg', 'pro2100.jpg', '0%%', ''),
(102, '28', 'g', 'Rc40', '2022-07-05', '12:44:15', '500', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1101.jpg', 'pro2101.jpg', '0%%', ''),
(103, '28', 'g', 'Rc41', '2022-07-05', '12:45:54', '500', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1102.jpg', 'pro2102.jpg', '0%%', ''),
(104, '28', 'g', 'Rc43', '2022-07-05', '13:02:06', '550', '450', 'in stock', '', '', 'real cake', 'real cake', 'pro1103.jpg', 'pro2103.jpg', '0%%', ''),
(105, '28', 'g', 'Rc43', '2022-07-05', '13:04:23', '550', '450', 'in stock', '', '', 'real cake', 'real cake', 'pro1104.jpg', 'pro2104.jpg', '0%%', ''),
(106, '28', 'g', 'Rc44', '2022-07-05', '13:05:46', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1105.jpg', 'pro2105.jpg', '0%%', ''),
(107, '28', 'g', 'Rc45', '2022-07-05', '13:06:54', '450', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1106.jpg', 'pro2106.jpg', '0%%', ''),
(108, '28', 'g', 'Rc46', '2022-07-05', '13:07:55', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1107.jpg', 'pro2107.jpg', '0%%', ''),
(109, '28', 'g', 'Rc47', '2022-07-05', '13:09:08', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1108.jpg', 'pro2108.jpg', '0%%', ''),
(111, '28', 'g', 'Rc49', '2022-07-05', '13:11:38', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1110.jpg', 'pro2110.jpg', '0%%', ''),
(112, '28', 'g', 'Rc50', '2022-07-05', '13:12:43', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1111.jpg', 'pro2111.jpg', '0%%', ''),
(113, '28', 'g', 'Rc51', '2022-07-05', '13:14:52', '550', '450', 'in stock', '', '', 'real cake', 'real cake', 'pro1112.jpg', 'pro2112.jpg', '0%%', ''),
(114, '28', 'g', 'Rc52', '2022-07-05', '13:16:43', '450', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1113.jpg', 'pro2113.jpg', '0%%', ''),
(115, '28', 'g', 'Rc53', '2022-07-05', '13:18:02', '550', '450', 'in stock', '', '', 'real cake', 'real cake', 'pro1114.jpg', 'pro2114.jpg', '0%%', ''),
(116, '28', 'g', 'Rc54', '2022-07-05', '13:19:27', '450', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1115.jpg', 'pro2115.jpg', '0%%', ''),
(117, '28', 'g', 'Rc54', '2022-07-05', '13:20:48', '750', '700', 'in stock', '', '', 'real cake', 'real cake', 'pro1116.jpg', 'pro2116.jpg', '0%%', ''),
(118, '28', 'g', 'Rc55', '2022-07-05', '13:21:46', '450', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1117.jpg', 'pro2117.jpg', '0%%', ''),
(119, '28', 'g', 'Rc56', '2022-07-05', '13:23:06', '1250', '1200', 'in stock', '', '', 'real cake', 'real cake', 'pro1118.jpg', 'pro2118.jpg', '0%%', ''),
(120, '28', 'g', 'Rc56', '2022-07-05', '13:30:11', '800', '700', 'in stock', '', '', 'real cake', 'real cake', 'pro1119.jpg', 'pro2119.jpg', '0%%', ''),
(121, '28', 'g', 'Rc57', '2022-07-05', '13:32:24', '550', '500', 'in stock', '', '', 'real cake', 'real cake', 'pro1120.jpg', 'pro2120.jpg', '0%%', ''),
(122, '28', 'g', 'Rc58', '2022-07-05', '13:33:41', '800', '700', 'in stock', '', '', 'real cake', 'real cake', 'pro1121.jpg', 'pro2121.jpg', '0%%', ''),
(123, '28', 'g', 'Rc59', '2022-07-05', '13:35:00', '1050', '1000', 'in stock', '', '', 'real cake', 'real cake', 'pro1122.jpg', 'pro2122.jpg', '0%%', ''),
(124, '28', 'g', 'Rc61', '2022-07-05', '13:42:26', '3500', '3000', 'in stock', '', '', 'real cake', 'real cake', 'pro1123.jpg', 'pro2123.jpg', '0%%', ''),
(125, '28', 'g', 'Rc63', '2022-07-05', '13:44:03', '600', '550', 'in stock', '', '', 'real cake', 'real cake', 'pro1124.jpg', 'pro2124.jpg', '0%%', ''),
(126, '28', 'g', 'Rc64', '2022-07-05', '13:45:16', '450', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1125.jpg', 'pro2125.jpg', '0%%', ''),
(127, '28', 'g', 'Rc65', '2022-07-05', '13:47:37', '450', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1126.jpg', 'pro2126.jpg', '0%%', ''),
(128, '28', 'g', 'Rc6', '2022-07-05', '14:39:59', '1050', '1000', 'in stock', '', '', 'real cake', 'real cake', 'pro1127.jpg', 'pro2127.jpg', '0%%', ''),
(129, '28', 'g', 'Rc67', '2022-07-05', '14:41:20', '450', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1128.jpg', 'pro2128.jpg', '0%%', ''),
(130, '28', 'g', 'Rc68', '2022-07-05', '14:42:31', '1250', '1200', 'in stock', '', '', 'real cake', 'real cake', 'pro1129.jpg', 'pro2129.jpg', '0%%', ''),
(131, '28', 'g', 'Rc68', '2022-07-05', '14:43:38', '1500', '1350', 'in stock', '', '', 'real cake', 'real cake', 'pro1130.jpg', 'pro2130.jpg', '0%%', ''),
(132, '28', 'g', 'Rc69', '2022-07-05', '14:54:53', '1550', '1500', 'in stock', '', '', 'real cake', 'real cake', 'pro1131.jpg', 'pro2131.jpg', '0%%', ''),
(133, '28', 'g', 'Rc70', '2022-07-05', '14:55:54', '450', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1132.jpg', 'pro2132.jpg', '0%%', ''),
(134, '28', 'g', 'Rc71', '2022-07-05', '14:57:44', '450', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1133.jpg', 'pro2133.jpg', '0%%', ''),
(135, '28', 'g', 'Rc72', '2022-07-05', '14:58:56', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1134.jpg', 'pro2134.jpg', '0%%', ''),
(136, '28', 'g', 'Rc73', '2022-07-05', '14:59:58', '2250', '2200', 'in stock', '', '', 'real cake', 'real cake', 'pro1135.jpg', 'pro2135.jpg', '0%%', ''),
(137, '28', 'g', 'Rc74', '2022-07-05', '15:00:57', '1050', '1000', 'in stock', '', '', 'real cake', 'real cake', 'pro1136.jpg', 'pro2136.jpg', '0%%', ''),
(138, '28', 'g', 'Rc74', '2022-07-05', '15:01:49', '1250', '1200', 'in stock', '', '', 'real cake', 'real cake', 'pro1137.jpg', 'pro2137.jpg', '0%%', ''),
(139, '28', 'g', 'Rc75', '2022-07-05', '15:03:42', '1350', '1300', 'in stock', '', '', 'real cake', 'real cake', 'pro1138.jpg', 'pro2138.jpg', '0%%', ''),
(140, '28', 'g', 'Rc76', '2022-07-05', '15:04:46', '400', '350', 'in stock', '', '', 'real cake', 'real cake', 'pro1139.jpg', 'pro2139.jpg', '0%%', ''),
(141, '28', 'g', 'Rc77', '2022-07-05', '15:05:45', '450', '400', 'in stock', '', '', 'real cake', 'real cake', 'pro1140.jpg', 'pro2140.jpg', '0%%', ''),
(142, '28', 'g', 'Rc78', '2022-07-05', '15:06:41', '500', '450', 'in stock', '', '', 'real cake', 'real cake', 'pro1141.jpg', 'pro2141.jpg', '0%%', ''),
(143, '28', 'g', 'Rc79', '2022-07-05', '15:07:31', '500', '450', 'in stock', '', '', 'real cake', 'real cake', 'pro1142.jpg', 'pro2142.jpg', '0%%', ''),
(144, '28', 'g', 'Rc80', '2022-07-05', '15:09:12', '500', '450', 'in stock', '', '', 'real cake', 'real cake', 'pro1143.jpg', 'pro2143.jpg', '0%%', ''),
(145, '28', 'g', 'Rc81', '2022-07-05', '15:10:15', '550', '500', 'in stock', '', '', 'real cake', 'real cake', 'pro1144.jpg', 'pro2144.jpg', '0%%', ''),
(146, '28', 'g', 'Rc82', '2022-07-05', '15:11:16', '750', '700', 'in stock', '', '', 'real cake', 'real cake', 'pro1145.jpg', 'pro2145.jpg', '0%%', ''),
(147, '28', 'g', 'Rc83', '2022-07-05', '15:12:38', '550', '500', 'in stock', '', '', 'real cake', 'real cake', 'pro1146.jpg', 'pro2146.jpg', '0%%', ''),
(148, '28', 'g', 'Rc84', '2022-07-05', '15:15:44', '750', '700', 'in stock', '', '', 'real cake', 'real cake', 'pro1147.jpg', 'pro2147.jpg', '0%%', ''),
(149, '28', 'g', 'Rc85', '2022-07-05', '15:16:38', '1250', '1200', 'in stock', '', '', 'real cake', 'real cake', 'pro1148.jpg', 'pro2148.jpg', '0%%', ''),
(150, '82', 'f', 'Real chocolate', '2022-07-14', '10:30:15', '65', '65', 'in stock', '', '', 'Real chocolate', 'Real chocolate', 'pro1149.jpg', 'pro2149.jpg', '0%%', ''),
(151, '82', 'f', 'Chocolate', '2023-01-20', '13:02:49', '200', '180', '100', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1150.jpg', 'pro2150.jpg', '20%', ''),
(152, '82', 'f', 'Chocolate', '2023-01-20', '13:06:36', '450', '400', '200', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1151.jpg', 'pro2151.jpg', '50%', ''),
(153, '82', 'f', 'Chocolate', '2023-01-20', '13:08:03', '100', '95', '50', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1152.jpg', 'pro2152.jpg', '5%', ''),
(155, '82', 'f', 'Chocolate', '2023-01-21', '12:03:08', '125', '100', '100', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1154.jpg', 'pro2154.jpg', '25%', ''),
(156, '82', 'f', 'Chocolate', '2023-01-21', '12:08:01', '120', '100', '50', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1155.jpg', 'pro2155.jpg', '20%', ''),
(157, '82', 'f', 'Chocolate', '2023-01-21', '12:27:24', '450', '400', '100', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1156.jpg', 'pro2156.jpg', '123%', ''),
(158, '82', 'f', 'Chocolate', '2023-01-21', '12:28:37', '200', '180', '200', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1157.jpg', 'pro2157.jpg', '50%', ''),
(159, '82', 'f', 'Chocolate', '2023-01-21', '12:33:56', '100', '80', '200', '', '', 'Tasty Chocolate', 'Tasty Chocolate', 'pro1158.jpg', 'pro2158.jpg', '20%', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `pc_id` int(20) NOT NULL,
  `c_mob` varchar(13) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `mrp` varchar(10) NOT NULL,
  `dp` varchar(10) NOT NULL,
  `a_d_dp_id` varchar(10) NOT NULL,
  `spin_discount` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE `product_supplier` (
  `ps_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `business` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `addreass` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_open_info`
--

CREATE TABLE `site_open_info` (
  `soi_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(25) NOT NULL,
  `ip_addreass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_open_info`
--

INSERT INTO `site_open_info` (`soi_id`, `url`, `date`, `time`, `ip_addreass`) VALUES
(1, 'localhost/EIBO/login.php', '2022-06-15', '18:31:00', '::1'),
(2782, 'localhost/EIBO/contact.php', '2022-06-23', '15:08:15', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `gender`, `subject`) VALUES
(1, '+918819053148', '', ''),
(423, 'JY-JIOINF', '', ''),
(424, 'JM-620016', '', ''),
(425, 'VY-ViCARE', '', ''),
(2520, 'vani', 'Female', 'Software engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_password`
--
ALTER TABLE `admin_password`
  ADD PRIMARY KEY (`ap_id`);

--
-- Indexes for table `all_call`
--
ALTER TABLE `all_call`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_contact`
--
ALTER TABLE `all_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_message`
--
ALTER TABLE `all_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`cu_id`);

--
-- Indexes for table `copartner`
--
ALTER TABLE `copartner`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `order_bill_detail`
--
ALTER TABLE `order_bill_detail`
  ADD PRIMARY KEY (`obd_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `site_open_info`
--
ALTER TABLE `site_open_info`
  ADD PRIMARY KEY (`soi_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_password`
--
ALTER TABLE `admin_password`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_call`
--
ALTER TABLE `all_call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55666;

--
-- AUTO_INCREMENT for table `all_contact`
--
ALTER TABLE `all_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27877;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `copartner`
--
ALTER TABLE `copartner`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
