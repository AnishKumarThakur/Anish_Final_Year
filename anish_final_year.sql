-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 02:51 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anish_final_year`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_contact` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_username`, `a_password`, `a_email`, `a_contact`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 9818389984),
(2, 'saugat', 'saugat', 'saugat@gmail.com', 9876565435);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_subject` varchar(50) NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(1, 'Deepak Maharjan', 'deepakmaharjan10@gmail.com', 'About Installation of Bed', 'Do you guys provide fitting and maintenance facilities?\r\nPlease reply soon. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_comment`
--

CREATE TABLE `tbl_forum_comment` (
  `fc_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `fq_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum_comment`
--

INSERT INTO `tbl_forum_comment` (`fc_id`, `u_name`, `fq_id`, `comment`, `date`) VALUES
(1, 'Saugat', 1, 'Yes, It is beyond expectation.', '2019-06-24'),
(2, 'Saugat', 2, 'Yes, they are pretty fast and careful.', '2019-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forum_question`
--

CREATE TABLE `tbl_forum_question` (
  `fq_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `question` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_forum_question`
--

INSERT INTO `tbl_forum_question` (`fq_id`, `u_name`, `question`, `date`) VALUES
(1, 'Anish', 'Is product from this website good???', '2019-06-24'),
(2, 'Devish', 'Is delivery on time??? ', '2019-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`o_id`, `u_id`, `p_id`, `date`) VALUES
(1, 3, 2, '2019-07-12'),
(2, 1, 1, '2019-07-12'),
(3, 1, 3, '2019-07-12'),
(4, 1, 6, '2019-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_description` text NOT NULL,
  `p_price` double NOT NULL,
  `p_disprice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `p_image`, `p_description`, `p_price`, `p_disprice`) VALUES
(1, 'Bed', '67785991.jpg', 'It is a luxurious bed of six feet with wooden color. It is a classic design which is a great fit to your beautiful room.', 40000, 35000),
(2, 'Tea Table', '24481296.jpg', 'It is a traditionally designed tea table, It is carved by local Newars. It is a Nepali Classic product. It is a perfect piece for central view for your living room.', 25000, 20000),
(3, 'Cupboard', '79805106.jpg', 'It is a multi section cupboard, it is designed to fit all your necessary items. It has a modern design with popular in the present market. It will give you an additional luxury to your house.', 25000, 20000),
(4, 'Chair', '23733822.jpg', 'It is a classic design chair made for comfortableness of the customer. It is a modern design chair. ', 10000, 9000),
(5, 'Dining Table', '38059765.jpg', 'It is a modern design dining table. It is made for a small family with six members. It is a royal brown colored dining table with four cornered top. It is a perfectly suiting product for a middle class family.', 50000, 45000),
(6, 'Sofa Set', '5668963.jpg', 'It is a large sized sofa set made for the luxury of the customer. It is designed to fill the required needs of the customer for their comfort. It is made with high quality cloth with a classic design.', 80000, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register_user`
--

CREATE TABLE `tbl_register_user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `telephone` bigint(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `gender` enum('Male','Female','Other','') NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register_user`
--

INSERT INTO `tbl_register_user` (`u_id`, `fname`, `lname`, `e_mail`, `telephone`, `address`, `city`, `country`, `region`, `gender`, `password`, `confirm_password`) VALUES
(1, 'Anish', 'Kumar Thakur', 'anish@gmail.com', 9818389984, 'Bhaisepati', 'Lalitpur', 'Nepal', 'Bagmati', 'Male', 'anish123', 'anish123'),
(2, 'Saugat', 'Subedi', 'saugat@gmail.com', 9824086794, 'Mahalaxmisthan', 'Lalitpur', 'Nepal', 'Bagmati', 'Male', 'saugat123', 'saugat123'),
(3, 'Devish', 'Baidawar Chhetri', 'devish@gmail.com', 9843324096, 'Sunakothi', 'Lalitpur', 'Nepal', 'Bagmati', 'Male', 'devish123', 'devish123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `s_id` int(11) NOT NULL,
  `s_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_username` (`a_username`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_forum_comment`
--
ALTER TABLE `tbl_forum_comment`
  ADD PRIMARY KEY (`fc_id`);

--
-- Indexes for table `tbl_forum_question`
--
ALTER TABLE `tbl_forum_question`
  ADD PRIMARY KEY (`fq_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `e_mail` (`e_mail`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_forum_comment`
--
ALTER TABLE `tbl_forum_comment`
  MODIFY `fc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_forum_question`
--
ALTER TABLE `tbl_forum_question`
  MODIFY `fq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_product` (`p_id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `tbl_register_user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
