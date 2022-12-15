-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2022 at 02:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `admin_id` varchar(10) NOT NULL,
  `Aname` varchar(50) DEFAULT NULL,
  `Aemail` varchar(50) DEFAULT NULL,
  `Apassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `author_id` varchar(10) NOT NULL,
  `Wname` varchar(50) DEFAULT NULL,
  `Wemail` varchar(50) DEFAULT NULL,
  `Wpassword` varchar(50) NOT NULL,
  `admin_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Author_Books`
--

CREATE TABLE `Author_Books` (
  `writer_id` varchar(10) NOT NULL,
  `books` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `book_id` varchar(10) NOT NULL,
  `Bname` varchar(100) DEFAULT NULL,
  `Bpub_year` varchar(10) DEFAULT NULL,
  `Bprice` int(11) DEFAULT NULL,
  `admin_id` varchar(10) NOT NULL,
  `pub_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Book_Author`
--

CREATE TABLE `Book_Author` (
  `book_id` varchar(10) NOT NULL,
  `author_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Buy_book`
--

CREATE TABLE `Buy_book` (
  `TrX_ID` varchar(10) DEFAULT NULL,
  `book_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `user_id` varchar(10) NOT NULL,
  `Cname` varchar(50) DEFAULT NULL,
  `Cemail` varchar(50) DEFAULT NULL,
  `Cpassword` varchar(50) NOT NULL,
  `Contact_no` char(11) DEFAULT NULL,
  `admin_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Customer_history`
--

CREATE TABLE `Customer_history` (
  `user_id` varchar(10) NOT NULL,
  `history` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Local_Vendor`
--

CREATE TABLE `Local_Vendor` (
  `vendor_id` varchar(10) NOT NULL,
  `Vname` varchar(50) DEFAULT NULL,
  `Vemail` varchar(50) DEFAULT NULL,
  `Vcontact_no` varchar(11) DEFAULT NULL,
  `Vbank_ac_no` varchar(50) DEFAULT NULL,
  `Vlocations` varchar(50) DEFAULT NULL,
  `admin_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

CREATE TABLE `Publisher` (
  `pub_id` varchar(10) NOT NULL,
  `Pname` varchar(50) DEFAULT NULL,
  `Pemail` varchar(50) DEFAULT NULL,
  `Ppassword` varchar(50) NOT NULL,
  `Plicense_no` varchar(50) DEFAULT NULL,
  `Pbank_ac_no` varchar(50) DEFAULT NULL,
  `author_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Request_Books`
--

CREATE TABLE `Request_Books` (
  `Bname` varchar(100) DEFAULT NULL,
  `request_cnt` int(11) DEFAULT NULL,
  `user_id` varchar(10) NOT NULL,
  `book_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Send_Manuscript`
--

CREATE TABLE `Send_Manuscript` (
  `pub_id` varchar(10) NOT NULL,
  `author_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Supply_Book`
--

CREATE TABLE `Supply_Book` (
  `book_id` varchar(10) NOT NULL,
  `vendor_id` varchar(10) NOT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `payment_amt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`author_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `Author_Books`
--
ALTER TABLE `Author_Books`
  ADD PRIMARY KEY (`writer_id`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `pub_id` (`pub_id`);

--
-- Indexes for table `Book_Author`
--
ALTER TABLE `Book_Author`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `Buy_book`
--
ALTER TABLE `Buy_book`
  ADD PRIMARY KEY (`book_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `Customer_history`
--
ALTER TABLE `Customer_history`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `Local_Vendor`
--
ALTER TABLE `Local_Vendor`
  ADD PRIMARY KEY (`vendor_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `Publisher`
--
ALTER TABLE `Publisher`
  ADD PRIMARY KEY (`pub_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `Request_Books`
--
ALTER TABLE `Request_Books`
  ADD PRIMARY KEY (`user_id`,`book_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `Send_Manuscript`
--
ALTER TABLE `Send_Manuscript`
  ADD PRIMARY KEY (`pub_id`,`author_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `Supply_Book`
--
ALTER TABLE `Supply_Book`
  ADD PRIMARY KEY (`book_id`,`vendor_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Author`
--
ALTER TABLE `Author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `Author_Books`
--
ALTER TABLE `Author_Books`
  ADD CONSTRAINT `author_books_ibfk_1` FOREIGN KEY (`writer_id`) REFERENCES `Author` (`author_id`);

--
-- Constraints for table `Book`
--
ALTER TABLE `Book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `Admin` (`admin_id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`pub_id`) REFERENCES `Publisher` (`pub_id`);

--
-- Constraints for table `Book_Author`
--
ALTER TABLE `Book_Author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Book` (`book_id`);

--
-- Constraints for table `Buy_book`
--
ALTER TABLE `Buy_book`
  ADD CONSTRAINT `buy_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Book` (`book_id`),
  ADD CONSTRAINT `buy_book_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `Customer` (`user_id`);

--
-- Constraints for table `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `Admin` (`admin_id`);

--
-- Constraints for table `Customer_history`
--
ALTER TABLE `Customer_history`
  ADD CONSTRAINT `customer_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Customer` (`user_id`);

--
-- Constraints for table `Local_Vendor`
--
ALTER TABLE `Local_Vendor`
  ADD CONSTRAINT `local_vendor_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `Admin` (`admin_id`);

--
-- Constraints for table `Publisher`
--
ALTER TABLE `Publisher`
  ADD CONSTRAINT `publisher_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `Author` (`author_id`);

--
-- Constraints for table `Request_Books`
--
ALTER TABLE `Request_Books`
  ADD CONSTRAINT `request_books_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Customer` (`user_id`),
  ADD CONSTRAINT `request_books_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `Book` (`book_id`);

--
-- Constraints for table `Send_Manuscript`
--
ALTER TABLE `Send_Manuscript`
  ADD CONSTRAINT `send_manuscript_ibfk_1` FOREIGN KEY (`pub_id`) REFERENCES `Publisher` (`pub_id`),
  ADD CONSTRAINT `send_manuscript_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `Author` (`author_id`);

--
-- Constraints for table `Supply_Book`
--
ALTER TABLE `Supply_Book`
  ADD CONSTRAINT `supply_book_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Book` (`book_id`),
  ADD CONSTRAINT `supply_book_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `Local_Vendor` (`vendor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
