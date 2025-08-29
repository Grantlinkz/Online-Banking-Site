-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 10:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountname`
--

CREATE TABLE `accountname` (
  `id` int(11) NOT NULL,
  `account` varchar(50) NOT NULL,
  `accountname` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `cardnum` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `ccv` varchar(50) NOT NULL,
  `dated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `check_deposit`
--

CREATE TABLE `check_deposit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(50) NOT NULL,
  `front` varchar(150) NOT NULL,
  `back` varchar(150) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '0',
  `check_number` varchar(50) NOT NULL,
  `ref` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cryptos`
--

CREATE TABLE `cryptos` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `datecreated` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `crypto_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cryptos`
--

INSERT INTO `cryptos` (`id`, `status`, `symbol`, `code`, `datecreated`, `address`, `crypto_name`) VALUES
(1, 1, '<em class=\"icon ni ni-sign-steller\"></em>', 'XLM', '', '5dXkCgbm9KDJviBv8mppNHauMaRDobjXA1', 'Stellar'),
(2, 1, '<em class=\"icon ni ni-sign-usdt\"></em>', 'USDT', '', '5dXkCgbm9KDJviBv8mppNHauMaRDobjXA1', 'tether'),
(3, 1, '<em class=\"icon ni ni-sign-btc\"></em>', 'BTC', '', '5dXkCgbm9KDJviBv8mppNHauMaRDobjXA1', 'Bitcoin'),
(4, 1, '<em class=\"icon ni ni-sign-bch\"></em>', 'BCH', '', '5dXkCgbm9KDJviBv8mppNHauMaRDobjXA1', 'Bitcoin Cash'),
(5, 0, '<em class=\"icon ni ni-sign-bnb\"></em>', 'BNB', '', '5K4AGuGwJjzvTNXNTLMrXkfQqepWSc3yNAiEHhRAZTcpKcKesDt', 'Binance'),
(6, 0, '<em class=\"icon ni ni-sign-eth\"></em>', 'ETH', '', 'wallet6', 'Ethereum'),
(7, 1, '<em class=\"icon ni ni-sign-ltc-alt\"></em>', 'LTC', '', '5dXkCgbm9KDJviBv8mppNHauMaRDobjXA1', 'Litecoin'),
(8, 1, '<em class=\"icon ni ni-sign-xrp-new-alt\"></em>', 'XRP', '', 'Wallet7', 'Ripple'),
(9, 1, '<em class=\"icon ni ni-sign-trx-alt\"></em>', 'TRX', '', 'Wallet8', 'Tron');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_deposits`
--

CREATE TABLE `crypto_deposits` (
  `id` int(11) NOT NULL,
  `coin` varchar(20) NOT NULL,
  `address` varchar(120) NOT NULL,
  `datecreated` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crypto_deposits`
--

INSERT INTO `crypto_deposits` (`id`, `coin`, `address`, `datecreated`, `userid`, `status`, `amount`, `fullname`) VALUES
(69, 'XLM', 'No Address Provided', '17 Oct 2022, 21:02 PM', 81, 'rejected', '', 'Morganna Dragon Penn'),
(70, 'USDT', 'No Address Provided', '17 Oct 2022, 21:03 PM', 81, 'rejected', '200', 'Morganna Dragon Penn'),
(71, 'USDT', 'No Address Provided', '17 Oct 2022, 21:05 PM', 33, 'rejected', '300', 'Morganna Dragon Penn'),
(72, 'XLM', 'No Address Provided', '17 Oct 2022, 21:07 PM', 33, 'rejected', '300', 'Morganna Dragon Penn'),
(74, 'XLM', 'No Address Provided', '17 Oct 2022, 21:11 PM', 33, 'rejected', '200000', 'Morganna Dragon Penn'),
(76, 'USDT', 'No Address Provided', '17 Oct 2022, 21:13 PM', 33, 'success', '120', 'Morganna Dragon Penn'),
(79, 'USDT', 'No Address Provided', '17 Oct 2022, 21:16 PM', 33, 'success', '100', 'Morganna Dragon Penn'),
(82, 'XLM', 'No Address Provided', '17 Oct 2022, 21:20 PM', 33, 'success', '130', 'Morganna Dragon Penn'),
(83, 'XLM', 'No Address Provided', '17 Oct 2022, 21:20 PM', 81, 'success', '130', 'Sandra Oseji Emeke'),
(85, 'BTC', 'No Address Provided', '17 Oct 2022, 21:24 PM', 33, 'rejected', '200000', 'Morganna Dragon Penn'),
(86, 'BTC', 'No Address Provided', '17 Oct 2022, 21:24 PM', 33, 'rejected', '200000', 'Morganna Dragon Penn'),
(87, 'BTC', 'No Address Provided', '17 Oct 2022, 21:25 PM', 33, 'rejected', '200000', 'Morganna Dragon Penn'),
(91, 'BTC', 'No Address Provided', '17 Oct 2022, 21:28 PM', 33, 'success', '200000', 'Grant Oseji Emeke'),
(95, 'USDT', 'No Address Provided', '17 Oct 2022, 21:35 PM', 33, 'rejected', '200000', 'Grant Oseji Emeke'),
(96, 'USDT', 'No Address Provided', '17 Oct 2022, 21:38 PM', 33, 'success', '300', 'Grant Oseji Emeke'),
(97, 'BTC', 'No Address Provided', '17 Oct 2022, 21:38 PM', 81, 'rejected', '300', 'Morganna Dragon Penn'),
(98, 'USDT', 'No Address Provided', '18 Oct 2022, 05:02 AM', 81, 'success', '150', 'Morganna Dragon Penn'),
(99, 'USDT', 'No Address Provided', '18 Oct 2022, 05:03 AM', 81, 'success', '150', 'Morganna Dragon Penn'),
(100, 'BCH', 'No Address Provided', '18 Oct 2022, 05:04 AM', 81, 'success', '120', 'Morganna Dragon Penn'),
(101, 'BTC', 'No Address Provided', '18 Oct 2022, 05:07 AM', 33, 'success', '300', 'Grant Oseji Emeke'),
(102, 'USDT', 'No Address Provided', '18 Oct 2022, 05:14 AM', 33, 'success', '200', 'Grant Oseji Emeke'),
(103, 'XLM', 'No Address Provided', '22 Oct 2022, 18:02 PM', 33, 'rejected', '200000', 'Grant Oseji Emeke'),
(104, 'USDT', 'No Address Provided', '24 Oct 2022, 09:39 AM', 85, 'success', '100', 'Kelvin Brown Jerry'),
(105, 'USDT', 'No Address Provided', '24 Oct 2022, 09:41 AM', 85, 'success', '100', 'Kelvin Brown Jerry'),
(106, 'USDT', 'No Address Provided', '24 Oct 2022, 09:42 AM', 85, 'success', '100', 'Kelvin Brown Jerry'),
(107, 'USDT', 'No Address Provided', '24 Oct 2022, 09:47 AM', 85, 'success', '100', 'Kelvin Brown Jerry'),
(108, 'USDT', 'No Address Provided', '24 Oct 2022, 09:48 AM', 85, 'success', '100', 'Kelvin Brown Jerry');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_withdrawals`
--

CREATE TABLE `crypto_withdrawals` (
  `id` int(11) NOT NULL,
  `userid` int(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `coin` varchar(11) NOT NULL,
  `wallet` varchar(200) NOT NULL,
  `datecreated` varchar(40) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `getbank`
--

CREATE TABLE `getbank` (
  `id` int(11) NOT NULL,
  `accountnumber` varchar(50) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `accountname` varchar(100) NOT NULL,
  `bankbranch` varchar(100) NOT NULL,
  `accounttype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intltransfer`
--

CREATE TABLE `intltransfer` (
  `id` int(100) NOT NULL,
  `rbname` varchar(255) NOT NULL,
  `accno` int(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bemailadd` varchar(255) NOT NULL,
  `swift` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `routing` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(255) NOT NULL,
  `rstate` varchar(255) NOT NULL,
  `rcity` varchar(255) NOT NULL,
  `rzip` int(255) NOT NULL,
  `amt` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intltransfer`
--

INSERT INTO `intltransfer` (`id`, `rbname`, `accno`, `bname`, `bemailadd`, `swift`, `iban`, `routing`, `country`, `state`, `city`, `zip`, `rstate`, `rcity`, `rzip`, `amt`, `des`) VALUES
(68, 'FCMB', 2147483647, 'Sandra Oseji', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(69, 'FCMB', 2147483647, 'Sandra Oseji', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(70, 'FCMB', 2147483647, 'Sandra Oseji', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(71, 'First Bank', 2147483647, 'Sandra Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(72, 'First Bank', 2147483647, 'Sandra Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(73, 'First Bank', 2147483647, 'Sandra Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(74, 'First Bank', 2147483647, 'Sandra Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(75, 'First Bank', 2147483647, 'Sandra Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(76, 'First Bank', 2147483647, 'Sandra Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(77, 'First Bank', 2147483647, 'Sandra Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(78, 'Nigeria', 0, 'Oseji Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(79, 'Nigeria', 0, 'Oseji Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(80, 'Nigeria', 0, 'Oseji Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(81, 'FCMB', 1478596324, 'Oseji Emeke', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(82, 'FCMB', 1478596324, 'Oseji Emeke', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(83, 'FCMB', 1478596324, 'Oseji Emeke', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(84, 'FCMB', 1478596324, 'Oseji Emeke', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(85, 'FCMB', 1478596324, 'Oseji Emeke', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(86, 'FCMB', 1245789632, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 234, '1000', 'For Feees'),
(87, 'FCMB', 1245789632, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 234, '1000', 'For Feees'),
(88, 'FCMB', 1245789632, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 234, '1000', 'For Feees'),
(89, 'FCMB', 1245789632, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 234, '1000', 'For Feees'),
(90, 'FCMB', 1245789632, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 234, '1000', 'For Feees'),
(91, 'FCMB', 1245789632, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 234, '1000', 'For Feees'),
(92, 'Nigeria', 0, 'Emeke', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '200', 'For Feees'),
(93, 'Nigeria', 0, 'Emeke', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '200', 'For Feees'),
(94, 'FCMB', 1478596324, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '200', 'For Feees'),
(95, 'FCMB', 2147483647, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(96, 'FCMB', 112285596, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '200', 'For Feees'),
(97, 'FCMB', 224585888, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(98, 'FCMB', 224585888, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(99, 'FCMB', 224585888, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(100, 'FCMB', 224585888, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(101, 'FCMB', 224585888, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(102, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(103, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(104, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(105, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(106, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(107, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(108, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(109, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(110, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(111, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(112, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(113, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(114, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(115, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(116, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(117, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(118, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(119, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(120, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(121, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(122, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(123, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(124, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(125, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(126, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(127, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(128, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(129, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(130, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(131, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(132, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(133, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(134, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(135, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(136, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(137, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(138, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(139, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(140, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(141, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(142, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(143, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(144, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(145, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(146, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(147, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(148, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(149, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(150, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(151, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(152, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(153, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(154, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(155, 'Nigeria', 320321, 'Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(156, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(157, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 320001, '100', 'For Feees'),
(158, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 320321, 'Delta', 'Asaba', 234, '100', 'For Feees'),
(159, 'Nigeria', 234, 'Oseji Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320001, '100', 'For Feees'),
(160, 'Nigeria', 234, 'Oseji Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(161, 'Nigeria', 234, 'Oseji Emeke', 'Osejigrant@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 320321, '100', 'For Feees'),
(162, 'Nigeria', 320321, 'Grant Emeke Oseji', 'grantlinkz@gmail.com', '11111111111111', 'IE82BOFI90135145925023', '11111111111111111', 'Nigeria', 'Delta', 'Asaba', 234, 'Delta', 'Asaba', 234, '100', 'For Feees');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(255) NOT NULL,
  `amount` int(100) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `narration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `amount`, `duration`, `narration`) VALUES
(1, 200000, '12 months', 'no wahala'),
(2, 200000, '12 months', 'no wahala');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ip` varchar(150) NOT NULL,
  `browser` varchar(150) NOT NULL,
  `dated` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ip`, `browser`, `dated`, `token`, `id`, `userid`) VALUES
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '16 Oct 22, 10:15 am', 'LOMZ5bwBytcKzNkeLD17x7cO4SEVvAdN3cB8kL8x7GiOK9EBgLn33mgaaz9jopaN7pedqZ64jh5dH8K9hg', 1, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '30 Jun 22, 05:23 am', '4Fnn9VgbsOnYlrrMNjHMdkmhPkh4v5g5dcPywyWlm2uLYGliuV3zhpgiQQVoRYizYLFg', 300, '22'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '30 Jun 22, 05:59 am', 'yGnelsR3KwmaZJnVt46emObmcBhNcrmwWpuS043u3CFaEdKw8kJUDyJRXd4BBigb', 301, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '30 Jun 22, 06:09 am', 'RVPw2v78iKtmAD95S2JZvszVZr7pSG37HlvFckuF5R6cXFgay4KJkAPx32lBqhiPpsmi', 302, '2'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '12 Jul 22, 03:02 am', 'e3kB9l7VHaKq9MfPDsAC4r4R31VW7XKVsJ04qoZJJp3YlafAplbhi9GTWQPHEoSbR6uH', 303, '2'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '12 Jul 22, 16:15 pm', '5kHeESacx9dqIc1dUdGLPVXuMTRg2KFaxUSaLzl9D2BaZdzklE1R0PrAIXb85Wv08Gaf', 304, '2'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '12 Jul 22, 17:14 pm', 'z1d14enoCJyIvYEKlPqrWy1M70qwAuGqkExTJCzeafnrGnupE1QaplVii9ZItWBw', 305, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36 OPR/88.0.4412.74', '15 Jul 22, 16:13 pm', 'mn2c7iiy8FQWeSpXI2ulbQLU7vGgiKpCILUzerwi5hqK0waN5LNFZFTNPI3orrEj', 306, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36 OPR/88.0.4412.74', '15 Jul 22, 16:14 pm', 'h9JreIrN3tDzPuC6F7d9uJNjLRjZ2mxJojmUsq6MpygzjNudzyes3PiItbh0xwFWqcOm', 307, '2'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '16 Jul 22, 20:54 pm', 'wqcFYnpZtErQohK5jbkHVl6gFGidjRzziWc4fRQKLqhltb60tGGRyFWkMY8DQ8Ob', 308, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '16 Jul 22, 20:56 pm', 'y1r0hErmMX9YYnVfSY66zCO4cVmO6Gl6TGr94R2Ufio5IhPhDpE5o01VGpKF6mnKihul', 309, '2'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '16 Jul 22, 21:37 pm', 'ojimyNSR0qLYh0uiSHl923BrnBXqeYZI9eYfPaCHZkXa2yhAz6cNwY6IUcXFl8Gha4gJ', 310, '2'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '16 Jul 22, 21:38 pm', 'vCGMScKe7Ph0CfRbZ2xsNN5h5ahUHR91ExNxKHr5TlgX3fPVFvO3GU5QqmhLNiKa9kes', 311, '2'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '19 Jul 22, 05:33 am', 'ljQNIlRf0wgYqVw5biaC7wA5tp5I7NudNgtG2XPBXt5YlJnn6Gu0uozkdPCksMtT', 312, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '16 Oct 22, 10:16 am', 'UlfrOpv1shADzFL5vxzU5BUEQo6mQ4EFCSnsfb4V2UjgHo191nyMQijolQwxETuygr0eVvnOvlIqgm3hd2', 313, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '16 Oct 22, 10:17 am', '07K5uPCKWJgQmWcwJUyIVdkaiwGpBk0SPoMQMau6cNMliZCtQyuH0dDvh3exb2HByHNLxTISdhEEmWcJMd', 314, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '16 Oct 22, 10:17 am', '0j5fbxJUqgIdZjT3mhTCE88yuemd99KBwFAVqfDsnRmaMUSBe0E90LRD5EN72dGF', 315, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '16 Oct 22, 15:20 pm', '9dC7tGOy5eEqSPvDmIWfaI1WF3lyR7pHGOBzCYHpWg46tACr0OE52YncVsZ36QlahNmuZYjjornlWoitUv', 316, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '16 Oct 22, 15:21 pm', 'ZE5R65yYF06Cb0NQJCn22uZ44aa6H81ohGa8g40IyvdAiav42e0CzCuK0KjLniBE', 317, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '16 Oct 22, 19:05 pm', 'HlaMui0mRAxgOt9JekIa4TJU4wakhkTjne3jJRkt0s6jMTIV4TgFwVptltIWSR5RlVPxf7vj8qIjSgcNx2', 318, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:00 pm', 'vyjKFCuFFkF1Giuk6oVUzZMUyk1Wm2qOotKj6cMTQNwWOfgtSxE7i1aN19qW2GFBRw1KnVdJ7kYdGVuybN', 319, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:06 pm', 'c2oFAq539SiACv2nfsmaOUPt6u4uV7RlsjGkWZTQ6bqeqriVTfLSYUbLhb2fQnTVFrelDH10ahgwic3fN9', 320, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:08 pm', 'QezAGHCYt6t3rbcUw8ope1VZ4xPnbJuKlyVHtm5BM3wDDiOT9HIgmA7K0pkyqAft', 321, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:17 pm', 'GYZEbkzliVi7SJPQBr5Dsqx2T5tRJC8IcfqZeTHVmwzhpGpLYd8fWYT6jPjKs8jkF5Du4ArhGAUyCBonxA', 322, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:17 pm', 'tVIRKrzyGhxWn1YW9iyPoePqmvWUN8nBec719OlTbiufZpFIirBO0mjZdaMHrjfwDoIYP009n5nNmBG1hn', 323, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:18 pm', 'kg3QaQLcvmz8VjT47ziyaNvSb0ZUUHb5Ydhux5aUyllguuRRp530wVlnUJ6shzRtc5wll3DdN8CpysKoZN', 324, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:25 pm', '2G04Co6tdP19eKuReWhkUQfrOudS0O4rrUM88DDIwqvswExfJfKtUrzWAirK4BOi42dOiV922MrduDhVKg', 325, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:25 pm', 'uQbckyuzRa6RMM2GAKySVYfS87qYCgI3JpJ3Y8WuaebQENs8db52BQIzo8LEZAl6P8bPzBvJ8xEPR7Kh0T', 326, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:27 pm', 'WoL4BINhAW6K4uZAMOq0jM94vvUMfFtcsWI0qUkVDHqDuj9KvI1BIy7mixfLmSf5e0HO1DxT1x9eZqtZZ4', 327, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:27 pm', 'eWroFgMSyBDdjF8LapF3VtSfyRfAWVMaZjK3gs7VYPg5mGqAxclNi3zDJ4lgZtHfWLRcv8v9FfPcn6zboy', 328, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:28 pm', 'MDGa97jdAmFIkDJiSa6fOOHU9VNSJWRJkF5NIj7nVoTeJqBOI4Z2cubtpyj2MuRrBJj23CWRY40IWihjKa', 329, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:28 pm', 'IulWikc30NYxhl6vFBf8JUO3KtPZgaVFW2nrLx8eGDxteHDnLOiiqGc7eQOWVI9xeok1QiPel526UcFNYV', 330, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:28 pm', 'OcO8UwC3s2rQO2VCyLLfKvZYMKjWF0Uy8bOytR0TmromaOs9sTzi5uRz1iGZwwVka58y7tDgi62tU0VU9l', 331, '79'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:31 pm', 'wGUbkNqKNGh8r7VDa6qpyisV7hsQR3TKn6rDD1NOjGWbyKaaSMiJlIgWpy9rK7Qs', 332, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:41 pm', 'VTLlAmQVLDbN6tCz82MK9A4heE7VnCb5cgDDrE2xrttBwZcywVOzW8dbyF8E5L9iTFcI3CAV2SqBSv4wW1', 333, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:42 pm', '0DawoCnOlYxakCK1BFXqWKU0spQxnuLnPo1udQKx146FdImbyHvYfiQp788yBvJz', 334, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:43 pm', '84sr1VEYnNVHrQ2nh0bqdlS6HFo1b0parHq0ozR63Cjqs79aJLch7Vzz3eCvBnJP', 335, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:43 pm', 'nA4AbKd2wUK4N3dKTJvMbEp3cZwMVNOzZNfhWjvJzZ04fRqI4QQK0Zo3pXkZ1Vr5', 336, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:43 pm', 'bWD0EMPWUzDlipk9366nxxxHP6DvjKLit4IgR9lQmNCVQDb3Xr03fV2ileqG5JQR', 337, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:45 pm', 'eFlq8eQHjxKayQFM2gd0NsVUhI52mWUGiEmA8fe67hGkjhT1mBsia00VB3IdCJ7HKAYKf7RItt1dYqWSLm', 338, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:46 pm', 'oW1HLExdaLITIdVdBJnzOVhJ9SkRLxhO9oUk7z7GvUzgCB88LSBleTZsxDkedUxHhSPPLmJxHnoaDYqxqB', 339, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:47 pm', 'Wrwsgs1MUNaJC9RtEk4Weca9GcNGWvAnMNq5qj1pEECfiR2jZvYA0pDC6Xu6wjJw', 340, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:53 pm', 'spCb507xjKTPopsH9tE47m9HpO5VFQ7td4dFZo995C2dkCgfJF8DHIZarbsIKeATz0BTCtYLBC9B4NTCB0', 341, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 15:58 pm', 'B2qjDPYxTZ2HxuQiAUNgZm30AmxDO9KQAPlnykp9vTOTsRW7lirLnspfkOqOzwsOVmGMpoxPj0zjtDG2i5', 342, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 16:40 pm', 'TFfbnZCRIOKvEy1jTGvOy8Q6Gf2b79IvDIYZWLhPYwc5fWiihXgTC87076AOPPNE', 343, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 16:41 pm', 'EGJfQLoefpIsb0h3Oil9I2xjWrdKwqIK5OM0qplJUIZGtvC7ohG3T3HnuEXRweEk', 344, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 16:42 pm', 'yTgczPStbomsLiHe4MnQagIxkf61xf4mlvFADFi4HYKgiMKWiUchsozxTbiFlWVEELuyxpa5upVxbpbEih', 345, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 16:43 pm', 'aEt640h1yZDVfxUPK3MzhQ3aSyBABVyn6Oe5VTWNgnhnHzWtuBXnVJWLkSMA4Pwj', 346, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 16:58 pm', 'OkmtEeffVwS74BWXMzxWkEQPclskkbjtpji3uyWiVVbSgSceL2aWRAAgI0w2vEud', 347, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 19:27 pm', 'asc2ARkMsHyaLnENleVmyyugCgnDpeHkVSKv6lWk0AT2hHnxa6iEJPOd2SR4wJUrHfexweBWzVQjmdffDD', 348, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 19:35 pm', '2kpfA60ErDeVOcl7750UJIsQfAnaNuw11UV9bgmDqeT0SNK8zzxJNcV9bLSQA1UAT9yL9GfHJDNfLHVuic', 349, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 19:36 pm', 'S6o0RovYhU7P33k2wegH9slEYhcOyl21McHzw0PBT7mpmxcVEL0pFjvP6cezcg8M', 350, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:04 pm', 'oARcCSOi2vyTstMQZmNZAaGYqizZg44b1iaVLtzIUoKcBkMBtfpym4OGEhDx9kCiu3IssIDAQ3D8llrZsP', 351, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:12 pm', '3sbAGDljrFszcae6VkjwiI7kSt2i4hBjQRZYLeKs8L91q8r2uuSdRL89Br1tGTalYnWOgwYykyxvPWPp5v', 352, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:29 pm', 'ybcmNYALQYtwGYpsqh7NFGax5hqn8WIQKWFQz5mOsk3HCn5SLM3fPnZPvraJeJ7CmkO5oLWhnFfeJdW45z', 353, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:32 pm', 'ywogcfTgrY3qogbpSTHlaN6naibigikdhd4JPDDzon0Gh0JZ9SMrjlixwHnIuYqno5h21zsRf3N1JukvuP', 354, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:33 pm', 'LCTNhZpoJFvbd5ETLSgSt57gu2ZySknAjnMUVGpi5x6RrhCgbRsCtGoyYx4PqlmOzGY3PNLcuh6MOihGx2', 355, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:34 pm', 'cLbV8zCyjYDvkDFfuSpsu2RS1PD1P1O9laEnjE75KaSa9uk1vtoTEu9DnM8VK2lPBwzl4Wn8gWmxeBrzHH', 356, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:37 pm', '8D0MZNTVtxuRj3SotRv0iKine8aJfMfudAi2G3LgozYBEDJ6S2vNglC2gpPYtJjFHE8bkUFjVH2lzfHsTA', 357, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:37 pm', 'GaaxlYM1sWEyC8p1UiVpozMWMDgTLV94duBn2hCzn24VRG8uCdFdCsvVWsqxHlYjnJuyBWU5ofTSpAA9V9', 358, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:37 pm', 'GuK150dVd5Dkh1BpudYqEUhnRKAapNEVQ480mGoxjhqP4N9H3PYkmJF7S4Wf1OiaNRqT4KsqCS2678sxQ9', 359, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:37 pm', 'N9CFsrWuzenHpygyZK9BdS3Lfk9PeNHE5fkaQSzJq00Id83Ecj2PLN0Jmjd62UNfahFip1y92HGZp5ZglJ', 360, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '17 Oct 22, 21:38 pm', 'hygdDDt0yLiBguVA2Hvq1oFIblYxblMgPgIWal1jyq4BuHYyL4Lpr052QFEAAq9p94hAOFInQZrjfsAnuq', 361, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '18 Oct 22, 04:56 am', 'vC6VIkB7MJwWpfsw6SzDoQG1isEwHR0BqonGKDVDuM1IdiXi6o405K4xVk6VHCgz', 362, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '18 Oct 22, 05:01 am', 'TOIolfJtst982VYc1UNUesqUAJ0miqkpiWte5oA0sOj0NUVAodvY6zcMkk8kpZaEu2upeUhVLurEEOL4mx', 363, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '18 Oct 22, 05:05 am', 'nCQOOhZbgsj7l8NwOCUalWHtYvB1IzfGfemsghlMKAxW2uG2gOFgK5whN0FdjDi1MlpGn0YYsG52uCeqgQ', 364, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '18 Oct 22, 05:08 am', 'vyCr4SzxFQFlEsDAX2IEAuDd0qM2BrDUABn6eNunCcKjAkBYhvyuE0rtdzTlO5jB', 365, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '18 Oct 22, 05:13 am', 'zeimILU1ukalyRJYILdOeEBq5nZWvQ7FxxWlQ0ENghQ3CTBdQ2zMNMOBDxxO0beJCCOIaSUamb4pbwjZCw', 366, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '18 Oct 22, 06:09 am', 'vwvshVnQ3IAefKYEPn1z523j3uQshSnPVOIer4Y6E3dHz9eyfL1e2qRhC2cv2u07P7zCBFIFVSnGKu07iw', 367, '81'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '18 Oct 22, 11:23 am', 'uDd9KJ0ITfxjvpyITt6MzxUuhGhnWGG9ehJlO8Ufzj0SwyDwzuQMCL3rl7OR6k6vA42ZA93SExIfsZq2g7', 368, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '19 Oct 22, 11:18 am', 'KG90wmrlHC6ZefNxgnbsYINSp6e6N08B7LQCWYr6tcqYkcps6sELawKqHD3qLCrB7IztTCfBpUnYby3pVG', 369, '82'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '19 Oct 22, 11:20 am', 'eALlbdghq8BaJgc4kcvkravocJKzEi45Vvoc98Um99mFZLH9gywqok7yIIWA8NjhRpty7quFAjFlUjuLPg', 370, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '19 Oct 22, 18:11 pm', 'JKpMpKKfpYR6dAMz8M4bQ2NjAzqD3OovqMrq9C1hlLsJUKMKjSump2qHCeFcaoUwrMNKNB2MqqcU51wQp5', 371, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 05:19 am', 'mqGdXodaJrXeAi8NSvZG3eIRmmNtxVJw3clka3A651LbMtKwKtET1Z3kf97gawUr', 372, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 05:21 am', 'PA9rpgi31vxwm68YlmNsmglVf23q7JY69N9AWmSAS4ogKZ2Cz95sjyQi2GBaBGuaMyvlYJzInwRsF8qPn7', 373, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 05:58 am', 'M7Q52mfeubzE3reJKqhi7ULpn0ERpUbQyOVVOlnwvuRlQrLoUzdRSs9AiBHQTtsJ70fYAN9NZfeiShvSHA', 374, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 06:06 am', 'SrgYfs0NkkuG0lENYGoW2WcUDF3iqRLqefNKUACfhbY1bSH4kIcfkpS2pKs770K93td8mpYM88aTodkJlz', 375, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 07:42 am', 'cAJOMTvtkprijqOjgCYaeslIae6ujMx6ePW4Qnr5WBrpMq6lnRaAFelPGDcSBO3jp9fQ0cvHqNTDvvpovK', 376, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 09:59 am', '3a5avZUFGP8Xuo0sBYn8UECm4RLR7UFpjT6CmVH63obEAALXFJamhfrvPUg1ruvC', 377, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 13:59 pm', 'KFlQm2Qm2myDvaIMjXgNpOa6kZrwhJlfdBV4TIbJg8GMCTg1Qm8oyLmDwx1dHt2o', 378, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 15:50 pm', 'E9AGaRdsm7kIj3UFBb0pbZHx4bL6DZNvVg69ceLlV6iMWhmNsBc2mErkaNedYii3BRlKDb8UonuctiVWUp', 379, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 16:04 pm', 'iR5FzJZDtYwqTWADl7AGDZvFzKaz03uNNgcJUel7BYRr8fccnrqGy1nz1adeRso1nfw2iTHMWK4zEm84Br', 380, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 16:55 pm', 'DnOzROpKyFvpHFkNrTAjiATA4ShnlTy6Cc8LxrCzz3okGUJjNHdBgnN4Qwa1t5IOwoMqi6TxvbOMnfhUyL', 381, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 16:57 pm', 'BZ2Lfakh346jbWKZSotFk2l9oWsFL1zPJpZUbWYBy8UEaAEfuVMj2FQ1vJIIyCua0MrJi1wojrqSwq42MD', 382, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 21:32 pm', 'TUg5GQy3DprD2HqmcmPfIyg9L10EXY65mVwuSbtJImgLSiIhZmInmLiSqPwXAC4o', 383, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '20 Oct 22, 23:14 pm', 'yAN8Kbk8NuqfYqMhrNIW84OICWDA1Os7VZm5bPsmKEbZVFALYQhOyIQjmjQc1oaRSho3KmwZHf5FFoqpi9', 384, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 04:58 am', 'OJmJ514OJ57OJkcx5rgnXR6zKGHYbV70q878jsY9Ll0bd0D34PEseBmPgajahTUf', 385, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 06:18 am', 'PMseW1e4MHBmOQL26UyZm0uorkgM1gHz54EGV6SYLtKtcKB04HOfkjBVORDZ71iX', 386, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 06:45 am', 'Gsa88JiW6uKzS1RDQ6TBvFrRwPxls0IPqM8J0zLTxOwBI2R1SqCh2oLDrZMnVylNv0ZSAWt58izItoThRb', 387, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:00 am', '6ii2jB5aPWuTVieHwpStAB7vSsCwAERNRK6N7RbwwRiq65F3UmuvBHs6C3PKedgarO1xueGEUuSaMmiRu1', 388, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:04 am', 'wvTI67GVMdgMqiwSvlZesSMuG2FMH8C4u84qSafxCdxwEPr0K585fVjcoBf0lzG79u7ZFy949EN9RBkvEq', 389, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:31 am', 'V2PKJlCQkR1x6gCMQGvanB4d4OnGNrz2wGy4i4OV5zquIjsbNvKb9sswxhLNbjZytxh0RRqjeitmVeDpn3', 390, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:32 am', 'CgVr3qoKGWdDQJzYYsyli6I8ljYGtoOyNcMKolPt6mBFgYnV2RsrjVP9z4pM9748sQy9VL3RdAJ08MLlnS', 391, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:33 am', 'fUg7ypoxH5ZWZz7ReZNzKq1EyhEIE5RzKIPm3U4gGl3RpSmucsZoQ5fLJIVvyh2tRIrkKxEhvNrDRaT9Y3', 392, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:41 am', 'G6cqFJLKhlAQYhLQxK3HSaGWhTtDYICvmb8wHNE3Pu8bRp1xg5tU68T8SmzB78SwqC3H18BMpFUvJG3ZSO', 393, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:42 am', 'sCbhGyahznymvanpBpklEpgUFzFxDTS2DBYPOuIIJyYJbONGpdloA1NpkDw6TnWoIxbriwu29TlrnPniuW', 394, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:46 am', 'lZOFufCa6TDDP1N8Z3sYar23HaoZ1iq97PBFQ0fusZcMFkkrNQWUOsLDAlWr53apcsg1fvft8p69QqMj7N', 395, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 08:48 am', 'mzQ7NGH66hYJiU0JM41AjnIMz3ynVd1yCJqaAhqvhB9adMpGN8arZe6FFAIEaj7Vkqr5OZKQKEM1GxsQ2i', 396, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 09:09 am', 'x9FeiRKpj9NCQrt9jrUDNVBG06pGKKZqjTiy2sS3SO86622bqoNJTUdlRCQYjo0dL9QKeYyUDuCbI4bGvH', 397, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 09:12 am', 'xMoWxWej15PTPNCjtbRCqBatVrxznAJQkCuyDkfThPh6PHND8xhOC0P69Mk8OHPP1B3tmrZtHZ8gNV5RGY', 398, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:00 am', 'WvidwVUugOxQarvb2DcgIbxqHTxEF2m7zV75yaBZwFerkF2MGBBL1K6TzltgK5qujHIQLQJ174NSwl90Mu', 399, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:01 am', 'lCTlqCY3inShhLtydYe6RsiItJHtTzlYNnWhbcUxK2EPA2QGpFVZ8Dy9b4kOgfgEkyAJne5R9Jd5vBF9WS', 400, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:02 am', 'A1NJk6mg9M1RHN9iExvlQPw8Lb1Sk2hdtc7QaBljxDE0ciF43yUAGShfUCg7PReYuOgfPIOTpeMvC0pzvg', 401, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:08 am', 'YEvoi0WywujYvEs8l7FMdfPAFOENUNRenIQy4YDej8eDyFWB373sq29mwhZaU602mjg8wnGWVLv0bJSqgT', 402, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:17 am', '0MOMyVFzGpDr3pm1fW0mmcaD0qH7M0iqVlyoRw4M8W80baJgRQ4Stbsxj3rNkUu2CskVOStfBqoRbFYEgA', 403, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:19 am', 'lW44l2L2oBN6Y0U9DwC66cqTFfxmAFafF4yGQ7tN4nQFSdF7EsI3s57f4rBEZ5ZMyJ1YRdbkmSz9tm2Ft1', 404, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:19 am', 'ITFNmf5TxN5t4eEdCuKZxt9KF4Da1F0cDQ0Nb5wqZVTYPrKpzZzAr0eMlhzqSRbe9gx4TBO3xhdriCkfiV', 405, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:19 am', 'RQGftANnwl9tZzMLR0NO1TpOzPJDxTYrTKj7Ec8nNSExWGzbW5qjuzKJNEUoQxZgjVoKym0vzVBNEnnSbl', 406, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:19 am', 'F3gxAZGQ49mFqJS7Drel8tEufhqqFuL7roOMZCV7oAwt5sRmDK80ErH22wjzwBYTjt1PnGRyVJoKcBdMrw', 407, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:19 am', 'J7Yz5a3gKE3kBntyMAkaBpIk0Dzr2Oq791kq6G2Tz7qMvDihhYkE7k3gdafggbGeSIbgxEjzKSHDbpQYc6', 408, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:19 am', 'vofS592jIrSUAbFy4rizPdwL210MrwIB2kSa5NNWb5nu07NR1WWdn9Gwbj94jHWIGOPxHMpq8enHWaEwqa', 409, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:20 am', 'foCHjHiGMs7anrq3wcpaOZeI2OpHGGGzeqkMBULp3MTONZrnYHcKNzGkyrGFCIkz3agb1CQh63m5FrxOJO', 410, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:20 am', 'T1xvslI1YZkQEgavpQhCSJoVM2Vm3G3cL8ox97zoNxS7kd2ISEqlmamKrE4YuzJs1i0rSN2bgscus1bCnd', 411, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:24 am', 'jBd7jjUBEgJGSEEiY3M1w9W3iaAnxVGMoq4DxfRQx28hLUGsgpYBYPzZlyWWZRL446t5ZiaCoEtA8hWml5', 412, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:40 am', '45KOiHp8srl9IiNsNjUCKHfcVyehy34Mug2c4IqaWnAilmqsIin9b1ISdi7IaSsqInvPKD5f3UAasdTCbk', 413, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 10:56 am', 'bz8A413h7sm0JmF8cMlJRx0JoDvLPWFxxNu1CWelqjZ0UoL0Lf9zQkUQ2OFOMnDw0jOZlnALrouPcrxm9c', 414, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 11:02 am', 'DlxS9wZzYoF4UY2G4KHSpYPcEvNQnjTdKuLgbZvAsjFskvNW8EsY0umWhOyqOOY4vMPJmSUPqU6h7E4kFF', 415, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 11:03 am', 'QbhwGk9zCKJ0QCBL9NVryoLgeZniJULqNwZx9zBbqnwoLrdV6ww2s6BlWcPP8pYrfqUmriDHe5BFs5jWPI', 416, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 11:07 am', 'af0uKubV0yQwE5FfKv7RS8oMnZYCepP2TYvaySugcZNs3mHeKct43ZdtVOU7bUzzVhMyHG4WJKh4aoyRxO', 417, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 16:41 pm', 'id0VgQOPL1tcigKNu0fAvizGrGE9csdAwHt1x29I4RCR98aPbQYuxGd4AcMrVsAa2n5vqMweUJyxPDQrI5', 418, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 16:53 pm', 'YZoNEhL2pH2ASoU9NRvjIUnvGFwJRmQaP0YKs1mqIYNyWSbtcM4DK8yhKKZWzyV5an2S2LQ21bzwtpziJl', 419, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 16:54 pm', 'AGiY4sMqcN9yxLs5o8txmRTiOYjjs48sDevyNZnMxDRytWrElsqhoK4sFFVNzAViosTw3VvxpmIz3fEjOD', 420, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 16:56 pm', 'Tbt9HJJCakEIv8Yo1EmJ7OuVi08FlV1qwPjaosMwnbtaJNwxoQj2NKfCN0kbhdeQ0JAF7SCVWnOvgPzhLb', 421, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 16:59 pm', '44xzhgAMl5GRqlenaZ5rl5v1eQOs7ty3uzmqIuF6RyKA2NNAISkWkEwqdl4n9kxh06FIzZKQnWLa7iTSfI', 422, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 17:07 pm', '4bOrnxFT9grKYS7AkLTg2n39cfb5v3xj3KvEpgSF1VHR2Oi5Q239dCi37uZfHudcyWqpwQk9Gn5HgH1wb4', 423, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 17:13 pm', 'WY0GdzDywUvuJKzltOq2RmQcScMCFSIhfjhE4AkDApxibmYa0S60IfrUJNHwmeNyNRQeOU4y7A4PHrfHZp', 424, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 17:15 pm', 'COyk2qtzuGx7ydCstGd1ypI6KCxqRFWKCAw8LSkHHcGrTfDz4PH8gy7zS69c6hcLUNZmOqUyLvokmYj8cJ', 425, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 17:21 pm', 'eRu1kMeU0zV9Lyh0kcgtkm1f9oOs3TEGwf36qUvEoDTRMvDDNem2dOye7TSTNtRe6kSws6089HEOn1AKVU', 426, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '21 Oct 22, 17:23 pm', 'my8hDzLOJHtUeNSD4USIEOd7bgd1iBVTyE98j74W4Obd170r9haLkGkHoE5k71ejyysb3eLzROAzMf7aBR', 427, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '22 Oct 22, 04:30 am', 'fYcA1RjuTzGoqjm3ovJhgUHs2FeOl14jIUnOfructGPpZxpWFV3xW7aJrYNqrusA', 428, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '22 Oct 22, 12:47 pm', 'vxBztP9qS2AYNwmksvlbRbyUQ79FcMQ2DnJxRwzRaofkf7uKTmIGxj1zliGkJUMSyHb5Va83PxIecAJZF5', 429, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '22 Oct 22, 18:01 pm', 'FaLvSmlaO9ePzOpB7K8VlGT6qv0NveQfcrd8rgLnUNlGjyMtS1LoJOMKzTKByrLZG6zazUdyuzoMV1y8tB', 430, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 04:55 am', 'Ty914zWOiCmy4Wd1z00BeA5YxQVefR5N6FZD05ILGamQAtpiqAK45MzNMqLvW7VzhHG4QxHkFo94ifkwjq', 431, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 04:56 am', 'EcG8zGNLOu4qg0u5YUz3crPFjj2iaR9GpNzkwRrVEL6qfy7Ois7D7IYeQdGWg2Ixm9w4sattZ7hYauhvCN', 432, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 05:16 am', '7ngan32TZGUxQg8xRofmp2Y5QeB2H5ciFdzNBWtLtCCMTBR9b0xvuTQeeSpFRzOoa5xFwOx35PR5LJJUYB', 433, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 05:17 am', 'EmnBMGIlt8JWIWHZpAw7Bod3AuIkHEJ6cbob4rD1C4tKZs3HJbN1mOVay2YHvGNbaoBztfuzvllGViJGm5', 434, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:20 am', 'HBNp6NbcGx2GO0Uxpagn3rkZrJipWab6d3oQ7vDb40Z6OzJC6MuTDr3MBiKZQTvP4xFzqpz4rZu1viJTRU', 435, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:20 am', '1rvG3EQfKR8beg4HYBLBrqrbUJPQRUC7sVaFIFhUQNEuJ9ngDuCRdqhHxaiMEhoqejtC4CfDkVIOcSxDln', 436, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:22 am', 'CQmsdxNciOigb6fehFh0FRxpjkndTkfUcygMxeSUt19V8RH0IBF8HmWPR7xUREP9IdkOc2lNz281Ql4R8Z', 437, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:22 am', 'ESqVrPuRAGPbmjtUbCJFYL3mrr0UQ6JifJjla8v5iKSlzrc3RWkNHO1sETJyjrspgM8ZYjPixFR1hsjIxc', 438, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:25 am', 'aCTpNVhH86814TTNIjFzExpjsMyuYaVifndjtKipOPVV2nF3wxJRBKGmK14NLvetPPN8VxDjbF9n4Q4jtl', 439, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:25 am', 'Ko4KUwrpVjIcjzirNlQVl4mv7SlCYxUVUzxTncZBKHYIrDmTEHvgNyuCmSrtKsB27qZppQmmlizcYVzGHN', 440, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:38 am', 'nYrdSfEOaqzK6ghqzdN8lwnuLKNQtWkPhOiB5mK70q1UJCx4Ne1d45hr8CpydwCdyrQTA682ufYG2EQ5cP', 441, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:38 am', 'CjVtR9kvTS87hcTM16VDpBNwdilGLwluxqfsh0o4xsS6578GCfh0z9N58BCylnGL9vFzYcMijHiWU53Hnz', 442, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:45 am', 'RbKl4TxZEC0OHIAll5SF3oxAJdGrhvZHo70T0yH7MwL05Ecf2cLAvmMmD7l6MzyZMLoR7r7SHGLpQ91oic', 443, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:46 am', '7Vg4jU2wyhc1oITgzwsibgFd6QqLwoQsf9ItjKBIAMOo5lCqrClPnzw2nVEQ3ysqF7vd12o1GqBW1cTYxr', 444, '33'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 07:49 am', 'BqyamZ6Ng5DyRFFEosi4rxJTQaGgDZ4fq50g5z3sbZxbocre7Ph5U1oKJ9b5VEzpHF7VFyBdCBGRlNRZpE', 445, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 17:59 pm', '9G2xOBfzRVKxIDmgbGbeZhBQSpGuERYtrp3s57jvq1X1QA1V6Xp6n6ONhXXQmSej', 446, '1'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '23 Oct 22, 18:00 pm', 'JvQxJaTf7xTYcJEVa3k3DPyj0I7FDQjsMLw5rElB2mixTO38shyiYOV3wcgEnLvlNIGEg2zhF0u0VdDvco', 447, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '24 Oct 22, 05:34 am', 'tnFDjjbI5qz4ZZRKhgM1knbMUOhe05OFJTTVM0u14Io5ix87zAGqBJCbHK3fL2UWepfrnaVd6Di0sqYlVn', 448, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '24 Oct 22, 05:42 am', 'JdKtdc6OLJfqYOznKyQkZTwB3QzmBFisjUoldVyfV4vhG4AW75UVyWCYFekrEcESCPtYD9I7uSvF64mYNy', 449, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '24 Oct 22, 05:48 am', 'rnDQz3b14dyHfICPjLGowqOoLQgsAc4dvpB10T0l67b7IzcloaPIBVdulNecfokeGSN89g1hmk1Et9C7fB', 450, '85'),
('::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '24 Oct 22, 06:38 am', 'TdfDcUsPAmwSvwny7WHYvbICqCfTLbBoUXgRtnDkUnCGlTKuk1fJR0yaKJnc7zd0', 451, '1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `dated` varchar(150) NOT NULL,
  `expiry_date` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paybill`
--

CREATE TABLE `paybill` (
  `id` int(11) NOT NULL,
  `payee` varchar(100) NOT NULL,
  `dated` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `memo` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `payeeid` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `ref` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payee`
--

CREATE TABLE `payee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `account` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `next_payment` varchar(100) NOT NULL,
  `ref` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified` varchar(255) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `acctype` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `apartment` varchar(100) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `emptype` text NOT NULL,
  `salary` varchar(100) NOT NULL,
  `empname` text NOT NULL,
  `bname` text NOT NULL,
  `boccu` varchar(100) NOT NULL,
  `badd` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(255) DEFAULT NULL,
  `pin` int(100) NOT NULL,
  `cpin` int(100) DEFAULT NULL,
  `acctno` int(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `tfa` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `q1` varchar(255) DEFAULT NULL,
  `ans1` varchar(255) DEFAULT NULL,
  `q2` varchar(255) DEFAULT NULL,
  `ans2` varchar(255) DEFAULT NULL,
  `accountbalance` int(255) NOT NULL,
  `allowtransfer` int(100) NOT NULL DEFAULT 0,
  `blocktransfer` int(100) NOT NULL DEFAULT 0,
  `cot` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `imf` varchar(255) NOT NULL,
  `atc` varchar(255) NOT NULL,
  `telex_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `middlename`, `lastname`, `email`, `email_verified`, `phone`, `gender`, `dob`, `acctype`, `currency`, `address`, `apartment`, `zipcode`, `country`, `state`, `city`, `emptype`, `salary`, `empname`, `bname`, `boccu`, `badd`, `password`, `cpassword`, `pin`, `cpin`, `acctno`, `image`, `tfa`, `status`, `q1`, `ans1`, `q2`, `ans2`, `accountbalance`, `allowtransfer`, `blocktransfer`, `cot`, `tax`, `imf`, `atc`, `telex_code`) VALUES
(33, 'Grant', 'Oseji', 'Emeke', 'grantlinkz@gmail.com', 'grantlinkz@gmail.com', '+08130653507', 'male', '2022-09-25', 'savings', 'CLP', 'No 5, Nwanze ozie street', '205', 320321, 'Nigeria', 'Delta', 'Asaba', 'Self Employed', '$2,000.00 - $5,000.00', 'Grant', 'Grant Emeke Oseji', 'Student', 'No 5, Nwanze ozie street', '1111', NULL, 1111, NULL, 1749860081, 'aston-martin-victor-front-3-4.jpg', '', '0', 'What is your nick name?', 'Avatar', 'What is your pet name?', 'Zico', 195000, 0, 0, '', '', '', '', ''),
(79, 'Sandra', 'Oseji', 'Emeke', 'Osejigrant@gmail.com', 'Osejigrant@gmail.com', '08060796529', 'male', '2022-09-28', 'savings', 'XOF', 'No 5, Nwanze ozie street', '205', 234, 'Nigeria', 'Delta', 'Asaba', 'Business/Sales', '$15,000.00 - $20,000.00', 'Grant', 'Grant Emeke Oseji', 'Student', 'No 5, Nwanze ozie street', '7777', NULL, 1111, NULL, 684346263, 'image_2.jpg', '', '0', 'What is your pet name?', 'Avatar', 'What is the name of your first car?', 'Zico', 280, 0, 0, '', '', '', '', ''),
(81, 'Morganna', 'Dragon', 'Penn', 'Osejigrant2@gmail.com', 'Osejigrant2@gmail.com', '+08060796529', 'male', '2022-10-27', 'checking', 'CAD', 'No 5, Nwanze ozie street', '205', 234, 'Nigeria', 'Delta', 'Asaba', 'Private/Partnership Office', '$700.00 - $1,000.00', 'Grant', 'Grant Emeke Oseji', 'Student', 'No 5, Nwanze ozie street', '2222', NULL, 2222, NULL, 1639159792, 'image_2.jpg', '', '0', 'What is your pet name?', 'Avatar', 'What is your pet name?', 'Zico', 200000, 0, 0, '', '', '', '', ''),
(82, 'Sandra', 'Oseji', 'Emeke', 'Osejigrant3@gmail.com', 'Osejigrant3@gmail.com', '+08084942972', 'female', '2022-09-29', 'checking', 'DZD', 'No 5, Nwanze ozie street', '205', 320321, 'Nigeria', 'Delta', 'Asaba', 'Private/Partnership Office', '$15,000.00 - $20,000.00', 'Grant', 'Grant Emeke Oseji', 'Student', 'No 5, Nwanze ozie street', '1111', NULL, 1111, NULL, 1063846346, 'image_2.jpg', '', '', '', 'Avatar', '', 'Zico', 0, 0, 0, '', '', '', '', ''),
(85, 'Kelvin', 'Brown', 'Jerry', 'tylerfred66@gmail.com', 'tylerfred66@gmail.com', '+5184145530', 'male', '2022-09-29', 'checking', 'BGN', '301 East Water Street, Charlottesville, VA 2290 Virginia.', '206', 10001, 'US', 'New York', 'Texas', 'Private/Partnership Office', '$2,000.00 - $5,000.00', 'yuvuyuy', 'uygiugi', 'yuvuiy', 'yvvuiyui', '1111', NULL, 1111, NULL, 1161254670, 'image_2.jpg', '', '', 'What is the name of your first car?', 'uiftu', 'What is your nick name?', '8i7fg6ti', 2900, 1, 0, 'CT22579692', 'TX96194248', 'IM36909682', 'AT41340498', 'TLX13463914');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `ticketid` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `datecreated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `emaillogo` varchar(255) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `favicon` varchar(150) NOT NULL,
  `tagline` varchar(150) NOT NULL,
  `register` varchar(150) NOT NULL,
  `darklogo` varchar(150) NOT NULL,
  `description` varchar(700) NOT NULL DEFAULT 'This Credit Union is federally-insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.',
  `seo` varchar(150) NOT NULL,
  `footerlogo` varchar(150) NOT NULL DEFAULT 'footlogo.png',
  `securityalert` varchar(150) NOT NULL,
  `stockrate` varchar(5505) NOT NULL DEFAULT '<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async="">                                                                         {                                                                             "symbols"                                                                         :                                                                             [                                                                                 {                                                                                     "title": "S&P 500",                                                                                     "proName": "OANDA:SPX500USD"                                                                                 },                                                                                 {                                                                                     "title": "Nasdaq 100",                                                                                     "proName": "OANDA:NAS100USD"                                                                                 },                                                                                 {                                                                                     "title": "EUR/USD",                                                                                     "proName": "FX_IDC:EURUSD"                                                                                 },                                                                                 {                                                                                     "title": "BTC/USD",                                                                                     "proName": "BITSTAMP:BTCUSD"                                                                                 },                                                                                 {                                                                                     "title": "ETH/USD",                                                                                     "proName": "BITSTAMP:ETHUSD"                                                                                 },                                                                                 {                                                                                     "description": "AAPL",                                                                                     "proName": "NASDAQ:AAPL"                                                                                 },                                                                                 {                                                                                     "description": "MICROSOFT",                                                                                     "proName": "NASDAQ:MSFT"                                                                                 }                                                                             ],                                                                                 "colorTheme"                                                                         :                                                                             "dark",                                                                                 "isTransparent"                                                                         :                                                                             false,                                                                                 "displayMode"                                                                         :                                                                             "compact",                                                                                 "locale"                                                                         :                                                                             "en"                                                                         }                                                                     </script>',
  `stockrate2` varchar(1000) NOT NULL DEFAULT '    <iframe             src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1400&amp;s=1&amp;mc=GBP&amp;mbg=F0F0F0&amp;bs=yes&amp;bc=000044&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=000044&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;"             width="1400" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>',
  `stock` int(11) NOT NULL DEFAULT 1,
  `money` varchar(50) NOT NULL DEFAULT 'USD',
  `country` varchar(50) NOT NULL DEFAULT 'United States',
  `visa_picture` varchar(150) NOT NULL,
  `tawk` varchar(500) NOT NULL,
  `shortname` varchar(150) NOT NULL DEFAULT 'Rednerbank',
  `blocked_msg` varchar(500) NOT NULL DEFAULT 'Dear Customer, we have discovered suspicious activities on your account. An unauthorized IP address attempted to carry out a transaction on your account. Consequently, your account has been flagged by our risk assessment department. kindly visit our nearest branch with your identification card and utility bill to confirm your identity before it can be reactivated. For more information, kindly contact our online customer care representatives.',
  `crypto` int(11) NOT NULL DEFAULT 1,
  `blocked_title` varchar(150) NOT NULL DEFAULT 'Account Suspended',
  `imfmsg` varchar(1000) NOT NULL DEFAULT 'You need to provide your IMF code before you can continue with this transaction.<br>                                                 You visit any of our nearest branch or contact our online customer care representative, they will help you with the appropriate IMF code for this transaction.',
  `cotmsg` varchar(1000) NOT NULL DEFAULT 'You need to provide your COT code before you can continue with this transaction. You can visit any of our nearest branch or contact our online customer care representative, they will help you with the appropriate COT code for this transaction.',
  `icmsg` text DEFAULT NULL,
  `tinmsg` text DEFAULT NULL,
  `tacmsg` text DEFAULT NULL,
  `charges` varchar(11) NOT NULL DEFAULT '0.3',
  `wiremsg` varchar(500) NOT NULL,
  `localmsg` varchar(500) NOT NULL,
  `cot_imf_counter` int(11) NOT NULL DEFAULT 5,
  `cot_error` varchar(500) NOT NULL DEFAULT 'Your account have been temporarily suspended for providing the wrong COT code, We are always committed to safe guarding your funds and therefore this is the right decision we can take for now. For more information, kindly contact our live customer care representatives.',
  `imf_error` varchar(500) NOT NULL DEFAULT 'Your account have been temporarily suspended for providing the wrong IMF code, We are always committed to safe guarding your funds and therefore this is the right decision we can take for now. For more information, kindly contact our live customer care representatives.',
  `enable_cot_imf` varchar(20) NOT NULL DEFAULT 'Yes',
  `rest_msg` varchar(1000) NOT NULL DEFAULT 'Your  account was temporary restricted from carrying out transaction via our online banking channel, Kindly visit any of our nearest branch to resolve this issue. For more information, kindly contact our online customer care representative.',
  `userstac` varchar(50) NOT NULL DEFAULT '1999',
  `usersic` varchar(50) NOT NULL DEFAULT '1999',
  `userstin` varchar(50) NOT NULL DEFAULT '1999',
  `enable_tin_ic_tac` varchar(20) NOT NULL DEFAULT 'Yes',
  `enable_tac` varchar(20) NOT NULL DEFAULT 'Yes',
  `enable_ic` varchar(20) NOT NULL DEFAULT 'Yes',
  `enable_tin` varchar(20) NOT NULL DEFAULT 'Yes',
  `bots` int(10) NOT NULL DEFAULT 1,
  `site_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `logo`, `address`, `email`, `emaillogo`, `phone`, `favicon`, `tagline`, `register`, `darklogo`, `description`, `seo`, `footerlogo`, `securityalert`, `stockrate`, `stockrate2`, `stock`, `money`, `country`, `visa_picture`, `tawk`, `shortname`, `blocked_msg`, `crypto`, `blocked_title`, `imfmsg`, `cotmsg`, `icmsg`, `tinmsg`, `tacmsg`, `charges`, `wiremsg`, `localmsg`, `cot_imf_counter`, `cot_error`, `imf_error`, `enable_cot_imf`, `rest_msg`, `userstac`, `usersic`, `userstin`, `enable_tin_ic_tac`, `enable_tac`, `enable_ic`, `enable_tin`, `bots`, `site_url`) VALUES
(1, 'Potentnc Bank', 'The Face Place Embedded.png', '301 East Water Street, Charlottesville, VA 22904 Virginia.', 'info@potentnc.com', 'The Face Place Logo.png', '+1234567890', 'The Face Place Embedded.png', '', '', '', 'This Credit Union is federally insured by the National Credit Union Administration. We do business in accordance with the Fair Housing Law and Equal opportunity Credit Act.', '', 'The Face Place Embedded.png', '', '<script type=\"text/javascript\" src=\"https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js\" async=\"\">                                                                         {                                                                             \"symbols\"                                                                         :                                                                             [                                                                                 {                                                                                     \"title\": \"S&P 500\",                                                                                     \"proName\": \"OANDA:SPX500USD\"                                                                                 },                                                                                 {                                                                                     \"title\": \"Nasdaq 100\",                                                                                     \"proName\": \"OANDA:NAS100USD\"                                                                                 },                                                                                 {                                                                                     \"title\": \"EUR/USD\",                                                                                     \"proName\": \"FX_IDC:EURUSD\"                                                                                 },                                                                                 {                                                                                     \"title\": \"BTC/USD\",                                                                                     \"proName\": \"BITSTAMP:BTCUSD\"                                                                                 },                                                                                 {                                                                                     \"title\": \"ETH/USD\",                                                                                     \"proName\": \"BITSTAMP:ETHUSD\"                                                                                 },                                                                                 {                                                                                     \"description\": \"AAPL\",                                                                                     \"proName\": \"NASDAQ:AAPL\"                                                                                 },                                                                                 {                                                                                     \"description\": \"MICROSOFT\",                                                                                     \"proName\": \"NASDAQ:MSFT\"                                                                                 }                                                                             ],                                                                                 \"colorTheme\"                                                                         :                                                                             \"dark\",                                                                                 \"isTransparent\"                                                                         :                                                                             false,                                                                                 \"displayMode\"                                                                         :                                                                             \"compact\",                                                                                 \"locale\"                                                                         :                                                                             \"en\"                                                                         }                                                                     </script>', '    <iframe             src=\"//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1400&amp;s=1&amp;mc=GBP&amp;mbg=F0F0F0&amp;bs=yes&amp;bc=000044&amp;f=verdana&amp;fs=10px&amp;fc=000044&amp;lc=000044&amp;lhc=FE9A00&amp;vc=FE9A00&amp;vcu=008000&amp;vcd=FF0000&amp;\"             height=\"30\" width=\"100%\" frameborder=\"0\" scrolling=\"no\" marginwidth=\"0\" marginheight=\"0\"></iframe>', 2, 'USD', 'United States', 'images\\visa.png', '615784c8d326717cb684536a/1fguttcga', 'PNC', 'Dear Customer, we have discovered suspicious activities on your account. An unauthorized IP address attempted to carry out a transaction on your account. Consequently, your account has been flagged by our risk assessment department. kindly visit our nearest branch with your identification card and utility bill to confirm your identity before it can be reactivated. For more information, kindly contact our online customer care representative.', 1, 'Account Suspended', 'The IMF code is required to enable you to continue with this transaction. Please contact any of our nearest branches or our online customer care representative with: they will help you with the appropriate IMF code for this transaction.', 'The Federal COT code is required for this transaction can be completed successfully. You can visit any of our nearest branches or contact our online customer care representative with: for more details of the for this transaction.', 'The Federal Insurance code is required for this transaction can be completed successfully. You can visit any of our nearest branches or contact our online customer care representative with:  for more details of the Insurance code for this transaction.\nUSE:3690NH', 'The Federal TIN code is required for this transaction can be completed successfully. You can visit any of our nearest branches or contact our online customer care representative with:  for more details of the TIN code for this transaction.\nUSE:3690NH', 'The Federal TAC code is required for this transaction can be completed successfully. You can visit any of our nearest branches or contact our online customer care representative with:  for more details of the TAC code for this transaction.\nUSE:3690NH', '0.3', '', '', 15, 'Your account has been temporarily suspended for providing the wrong COT code, We are always committed to safeguarding your funds and therefore this is the right decision we can take for now. For more information, kindly contact our live customer care representative.', 'Your account has been temporarily suspended for providing the wrong IMF code, We are always committed to safeguarding your funds and therefore this is the right decision we can take for now. For more information, kindly contact our live customer care representative.', 'Yes', 'Your account was temporarily restricted from carrying out transactions via our online banking channel, Kindly visit any of our nearest branches to resolve this issue. For more information, kindly contact our online customer care representatives.', '3690NH', '3690NH', '3690NH', 'Yes', 'Yes', 'Yes', 'Yes', 0, 'https://www.potentnc.com');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `picture` varchar(300) NOT NULL,
  `heading` varchar(600) NOT NULL,
  `content` varchar(600) NOT NULL,
  `link` varchar(600) NOT NULL,
  `text` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `status`, `picture`, `heading`, `content`, `link`, `text`) VALUES
(1, 1, 'images/visa1 (2).png', 'Discover our new 82% mortgages', 'This Credit Union is federally insured by the National Credit Union Administration.', '#', 'Find out more'),
(2, 1, 'images/visa.png', 'Investment Banking ', 'Investment Banking provides comprehensive financial advisory, capital raising, financing and risk management services to corporations.', '#', 'Find out more'),
(3, 1, 'images\\visa2.png', 'Global Finance', 'Our M&A team works in partnership with coverage bankers in providing solutions, using a highly analytical approach, providing unique insights.', '##', 'Find out more');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_setting`
--

CREATE TABLE `smtp_setting` (
  `id` int(11) NOT NULL,
  `host` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `port` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `smtp_auth` varchar(50) NOT NULL,
  `emaillogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smtp_setting`
--

INSERT INTO `smtp_setting` (`id`, `host`, `username`, `password`, `port`, `display_name`, `smtp_auth`, `emaillogo`) VALUES
(1, 'smtp.wintersbank.com', 'support@winstersbank.com', 'winster@2022', '587', 'GrantLinkz', 'tls', 'The Face Place Logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `userid` int(150) NOT NULL,
  `ticketid` varchar(150) NOT NULL,
  `department` varchar(150) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `datecreated` varchar(50) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `scope` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `rbname` varchar(50) NOT NULL,
  `routing` varchar(50) NOT NULL,
  `swiftcode` varchar(50) NOT NULL,
  `accno` varchar(50) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `refNumber` varchar(50) NOT NULL,
  `dated` varchar(50) NOT NULL,
  `amt` varchar(50) NOT NULL,
  `accountbalance` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `des` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `iban` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `scope`, `type`, `rbname`, `routing`, `swiftcode`, `accno`, `bname`, `otp`, `refNumber`, `dated`, `amt`, `accountbalance`, `userid`, `des`, `token`, `country`, `state`, `city`, `iban`, `status`) VALUES
(0, 'Local Transfer', 'Debit', 'Nigeria', '11111111111111111', '', '234', 'Oseji Emeke', '309812', 'POT/IOONGVSJL-1022', '24 Oct 2022, 7:43 am', '100', '-100', '85', 'For Feees', '', '', '', '', '', 1),
(0, 'Local Transfer', 'Debit', 'Nigeria', '11111111111111111', '', '234', 'Oseji Emeke', '584752', 'POT/N5MDYXPLR-1022', '24 Oct 2022, 7:51 am', '100', '-200', '85', 'For Feees', '', '', '', '', '', 1),
(0, 'Local Transfer', 'Debit', '', '', '', '', '', '921169', 'POT/RQRCQT2BJ-1022', '24 Oct 2022, 7:57 am', '200', '2800', '85', 'International Transfer', 'lEIGFAMxEXqvc9UFknXlxEjMX1HIlwO5pjBwEIagJdaTI9HpGgZGQ4B4n2t06eNE', '', '', '', '', 1),
(0, 'Check Deposit', 'Credit', '', '', '', '', '', '632714', 'POT/SDNV0CCWN-1022', '24 Oct 2022, 8:00 am', '100', '2900', '85', 'nn', 'DPKJKwXTWKzc4hsW5sN7svTRNZrCi93UG8Ov5r7gmBiZDOpMUidQqO3k4rDze68K', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ukbanks`
--

CREATE TABLE `ukbanks` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ukbanks`
--

INSERT INTO `ukbanks` (`id`, `name`) VALUES
(1, 'ABC International Bank Plc'),
(2, 'Access Bank UK Limited'),
(3, 'The ADIB (UK) Ltd '),
(4, 'Ahli United Bank (UK) PLC'),
(5, 'AIB Group (UK) Plc'),
(6, 'Al Rayan Bank PLC'),
(7, 'Aldermore Bank Plc'),
(8, 'Alliance Trust Savings Limited'),
(9, 'Allica Bank Ltd'),
(10, 'Alpha Bank London Limited'),
(11, 'Arbuthnot Latham & Co Limited'),
(12, 'Atom Bank PLC'),
(13, 'Axis Bank UK Limited'),
(14, 'Bank and Clients PLC'),
(15, 'Bank Leumi (UK) plc'),
(16, 'Bank Mandiri (Europe) Limited'),
(17, 'Bank Of Baroda (UK) Limited'),
(18, 'Bank of Beirut (UK) Ltd'),
(19, 'Bank of Ceylon (UK) Ltd'),
(20, 'Bank of China (UK) Ltd'),
(21, 'Bank of Ireland (UK) Plc'),
(22, 'Bank of London and The Middle East plc'),
(23, 'Bank of New York Mellon (International) Limited'),
(24, 'The HSBC Private Bank (UK) Limited Bank of Scotlan'),
(25, 'Bank of the Philippine Islands (Europe) PLC'),
(26, 'Bank Saderat Plc'),
(27, 'Bank Sepah International Plc'),
(28, 'Barclays Bank Plc'),
(29, 'Barclays Bank UK PLC'),
(30, 'Barclays Bank UK PLC'),
(31, 'BFC Bank Limited'),
(32, 'Bira Bank LimitedBMCE Bank International plc'),
(33, 'BMCE Bank International plc'),
(34, 'British Arab Commercial Bank Plc'),
(35, 'Brown Shipley & Co Limited'),
(36, 'C Hoare & Co'),
(37, 'CAF Bank Ltd'),
(38, 'Cambridge & Counties Bank Limited'),
(39, 'Castle Trust Capital PLC'),
(40, 'Cater Allen Limited'),
(41, 'Charity Bank Limited'),
(42, 'The Charter Court Financial Services Limited'),
(43, 'Chetwood Financial Limited'),
(44, 'China Construction Bank (London) Limited'),
(45, 'CIBC World Markets Plc'),
(46, 'Citibank UK Limited'),
(47, 'ClearBank Limited'),
(48, 'Close Brothers Limited'),
(49, 'Clydesdale Bank Plc'),
(50, 'Commonwealth Trade Bank Plc'),
(51, 'Co-operative Bank Plc'),
(52, 'The Coutts & Company'),
(53, 'Credit Suisse (UK) Limited'),
(54, 'Credit Suisse International'),
(55, 'Crown Agents Bank Limited'),
(56, 'Cynergy Bank Limited'),
(57, 'DB UK Bank Limited'),
(58, 'EFG Private Bank Limited'),
(59, 'Europe Arab Bank plc'),
(60, 'FBN Bank (UK) Ltd'),
(61, 'FCE Bank Plc'),
(62, 'FCMB Bank (UK) Limited'),
(63, 'Gatehouse Bank Plc'),
(64, 'Ghana International Bank Plc'),
(65, 'GKBK Limited'),
(66, 'Goldman Sachs International Bank'),
(67, 'Guaranty Trust Bank (UK) Limited'),
(68, 'Gulf International Bank (UK) Limited'),
(69, 'Habib Bank Zurich Plc'),
(70, 'Hampden & Co Plc'),
(71, 'Hampshire Trust Bank Plc'),
(72, 'Handelsbanken PLC'),
(73, 'Havin Bank Ltd'),
(74, 'HBL Bank UK Limited'),
(75, 'HSBC Bank Plc'),
(76, 'HSBC Private Bank (UK) Limited'),
(77, 'HSBC Trust Company (UK) Ltd'),
(78, 'HSBC UK Bank Plc'),
(79, 'ICBC (London) plc'),
(80, 'ICBC Standard Bank Plc'),
(81, 'ICICI Bank UK Plc'),
(82, 'Investec Bank PLC'),
(83, 'Itau BBA International PLC'),
(84, 'JN Bank UK Ltd'),
(85, 'J.P. Morgan Europe Limited'),
(86, 'J.P. Morgan Securities plc'),
(87, 'Jordan International Bank Plc'),
(88, 'Julian Hodge Bank Limited'),
(89, 'Kexim Bank (UK) Ltd'),
(90, 'Kingdom Bank Ltd'),
(91, 'Lloyds Bank Plc'),
(92, 'Lloyds Bank Corporate Markets Plc'),
(93, 'Macquarie Bank International Ltd'),
(94, 'Marks & Spencer Financial Services Plc'),
(95, 'Masthaven Bank Limited'),
(96, 'Melli Bank plc'),
(97, 'Methodist Chapel Aid Limited'),
(98, 'Metro Bank PLC'),
(99, 'Mizuho International Plc'),
(100, 'Monzo Bank Ltd'),
(101, 'Morgan Stanley Bank International Limited'),
(102, 'National Bank of Egypt (UK) Limited'),
(103, 'National Bank of Kuwait (International) Plc'),
(104, 'National Westminster Bank Plc'),
(105, 'NatWest Markets Plc'),
(106, 'Nomura Bank International Plc'),
(107, 'Northern Bank Limited'),
(108, 'OakNorth Bank plc'),
(109, 'OneSavings Bank Plc'),
(110, 'Oxbury FS Plc'),
(111, 'Paragon Bank Plc'),
(112, 'PCF Bank Limited'),
(113, 'Persia International Bank Plc'),
(114, 'Philippine National Bank (Europe) Plc'),
(115, 'Punjab National Bank (International) Limited '),
(116, 'QIB (UK) Plc'),
(117, 'R. Raphael & Sons Plc'),
(118, 'Rathbone Investment Management Limited'),
(119, 'RBC Europe Limited'),
(120, 'RCI Bank UK Limited'),
(121, 'Redwood Bank Ltd'),
(122, 'Reliance Bank Ltd'),
(123, 'Revver Limited'),
(124, 'Royal Bank of Scotland Plc'),
(125, ' The Sainsbury’s Bank Plc'),
(126, 'Santander Financial Services plc'),
(127, 'Santander UK Plc'),
(128, 'State Bank Of India (UK) Limited'),
(129, 'Schroder & Co Ltd'),
(130, 'Scotiabank Europe Plc'),
(131, 'Secure Trust Bank Plc'),
(132, 'SG Kleinwort Hambros Bank Limited'),
(133, 'Shawbrook Bank Limited'),
(134, 'Sonali Bank (UK) Limited'),
(135, 'Standard Chartered Bank'),
(136, 'Starling Bank Limited'),
(137, 'Sumitomo Mitsui Banking Corporation Europe Limited'),
(138, 'Tandem Bank Limited'),
(139, 'TD Bank Europe Limited'),
(140, 'Tesco Personal Finance Plc'),
(141, 'Triodos UK Ltd'),
(142, ''),
(143, 'ABC International Bank Plc'),
(144, 'Access Bank UK Limited'),
(145, 'The ADIB (UK) Ltd '),
(146, 'Ahli United Bank (UK) PLC'),
(147, 'AIB Group (UK) Plc'),
(148, 'Al Rayan Bank PLC'),
(149, 'Aldermore Bank Plc'),
(150, 'Alliance Trust Savings Limited'),
(151, 'Allica Bank Ltd'),
(152, 'Alpha Bank London Limited'),
(153, 'Arbuthnot Latham & Co Limited'),
(154, 'Atom Bank PLC'),
(155, 'Axis Bank UK Limited'),
(156, 'Bank and Clients PLC'),
(157, 'Bank Leumi (UK) plc'),
(158, 'Bank Mandiri (Europe) Limited'),
(159, 'Bank Of Baroda (UK) Limited'),
(160, 'Bank of Beirut (UK) Ltd'),
(161, 'Bank of Ceylon (UK) Ltd'),
(162, 'Bank of China (UK) Ltd'),
(163, 'Bank of Ireland (UK) Plc'),
(164, 'Bank of London and The Middle East plc'),
(165, 'Bank of New York Mellon (International) Limited'),
(166, 'The HSBC Private Bank (UK) Limited Bank of Scotlan'),
(167, 'Bank of the Philippine Islands (Europe) PLC'),
(168, 'Bank Saderat Plc'),
(169, 'Bank Sepah International Plc'),
(170, 'Barclays Bank Plc'),
(171, 'Barclays Bank UK PLC'),
(172, 'Barclays Bank UK PLC'),
(173, 'BFC Bank Limited'),
(174, 'Bira Bank LimitedBMCE Bank International plc'),
(175, 'BMCE Bank International plc'),
(176, 'British Arab Commercial Bank Plc'),
(177, 'Brown Shipley & Co Limited'),
(178, 'C Hoare & Co'),
(179, 'CAF Bank Ltd'),
(180, 'Cambridge & Counties Bank Limited'),
(181, 'Castle Trust Capital PLC'),
(182, 'Cater Allen Limited'),
(183, 'Charity Bank Limited'),
(184, 'The Charter Court Financial Services Limited'),
(185, 'Chetwood Financial Limited'),
(186, 'China Construction Bank (London) Limited'),
(187, 'CIBC World Markets Plc'),
(188, 'Citibank UK Limited'),
(189, 'ClearBank Limited'),
(190, 'Close Brothers Limited'),
(191, 'Clydesdale Bank Plc'),
(192, 'Commonwealth Trade Bank Plc'),
(193, 'Co-operative Bank Plc'),
(194, 'The Coutts & Company'),
(195, 'Credit Suisse (UK) Limited'),
(196, 'Credit Suisse International'),
(197, 'Crown Agents Bank Limited'),
(198, 'Cynergy Bank Limited'),
(199, 'DB UK Bank Limited'),
(200, 'EFG Private Bank Limited'),
(201, 'Europe Arab Bank plc'),
(202, 'FBN Bank (UK) Ltd'),
(203, 'FCE Bank Plc'),
(204, 'FCMB Bank (UK) Limited'),
(205, 'Gatehouse Bank Plc'),
(206, 'Ghana International Bank Plc'),
(207, 'GKBK Limited'),
(208, 'Goldman Sachs International Bank'),
(209, 'Guaranty Trust Bank (UK) Limited'),
(210, 'Gulf International Bank (UK) Limited'),
(211, 'Habib Bank Zurich Plc'),
(212, 'Hampden & Co Plc'),
(213, 'Hampshire Trust Bank Plc'),
(214, 'Handelsbanken PLC'),
(215, 'Havin Bank Ltd'),
(216, 'HBL Bank UK Limited'),
(217, 'HSBC Bank Plc'),
(218, 'HSBC Private Bank (UK) Limited'),
(219, 'HSBC Trust Company (UK) Ltd'),
(220, 'HSBC UK Bank Plc'),
(221, 'ICBC (London) plc'),
(222, 'ICBC Standard Bank Plc'),
(223, 'ICICI Bank UK Plc'),
(224, 'Investec Bank PLC'),
(225, 'Itau BBA International PLC'),
(226, 'JN Bank UK Ltd'),
(227, 'J.P. Morgan Europe Limited'),
(228, 'J.P. Morgan Securities plc'),
(229, 'Jordan International Bank Plc'),
(230, 'Julian Hodge Bank Limited'),
(231, 'Kexim Bank (UK) Ltd'),
(232, 'Kingdom Bank Ltd'),
(233, 'Lloyds Bank Plc'),
(234, 'Lloyds Bank Corporate Markets Plc'),
(235, 'Macquarie Bank International Ltd'),
(236, 'Marks & Spencer Financial Services Plc'),
(237, 'Masthaven Bank Limited'),
(238, 'Melli Bank plc'),
(239, 'Methodist Chapel Aid Limited'),
(240, 'Metro Bank PLC'),
(241, 'Mizuho International Plc'),
(242, 'Monzo Bank Ltd'),
(243, 'Morgan Stanley Bank International Limited'),
(244, 'National Bank of Egypt (UK) Limited'),
(245, 'National Bank of Kuwait (International) Plc'),
(246, 'National Westminster Bank Plc'),
(247, 'NatWest Markets Plc'),
(248, 'Nomura Bank International Plc'),
(249, 'Northern Bank Limited'),
(250, 'OakNorth Bank plc'),
(251, 'OneSavings Bank Plc'),
(252, 'Oxbury FS Plc'),
(253, 'Paragon Bank Plc'),
(254, 'PCF Bank Limited'),
(255, 'Persia International Bank Plc'),
(256, 'Philippine National Bank (Europe) Plc'),
(257, 'Punjab National Bank (International) Limited '),
(258, 'QIB (UK) Plc'),
(259, 'R. Raphael & Sons Plc'),
(260, 'Rathbone Investment Management Limited'),
(261, 'RBC Europe Limited'),
(262, 'RCI Bank UK Limited'),
(263, 'Redwood Bank Ltd'),
(264, 'Reliance Bank Ltd'),
(265, 'Revver Limited'),
(266, 'Royal Bank of Scotland Plc'),
(267, ' The Sainsbury’s Bank Plc'),
(268, 'Santander Financial Services plc'),
(269, 'Santander UK Plc'),
(270, 'State Bank Of India (UK) Limited'),
(271, 'Schroder & Co Ltd'),
(272, 'Scotiabank Europe Plc'),
(273, 'Secure Trust Bank Plc'),
(274, 'SG Kleinwort Hambros Bank Limited'),
(275, 'Shawbrook Bank Limited'),
(276, 'Sonali Bank (UK) Limited'),
(277, 'Standard Chartered Bank'),
(278, 'Starling Bank Limited'),
(279, 'Sumitomo Mitsui Banking Corporation Europe Limited'),
(280, 'Tandem Bank Limited'),
(281, 'TD Bank Europe Limited'),
(282, 'Tesco Personal Finance Plc'),
(283, 'Triodos UK Ltd'),
(284, 'TSB Bank plc'),
(285, 'Turkish Bank (UK) Ltd'),
(286, 'Ulster Bank Ltd'),
(287, 'Union Bank of India (UK) Limited'),
(288, 'Union Bank UK Plc'),
(289, 'United Bank for Africa (UK) Limited'),
(290, 'United National Bank Limited'),
(291, 'United Trust Bank Limited'),
(292, 'Unity Trust Bank Plc'),
(293, 'Vanquis Bank Limited'),
(294, 'Virgin Money plc'),
(295, 'VTB Capital plc'),
(296, 'Weatherbys Bank Limited'),
(297, 'Wesleyan Bank Limited'),
(298, 'Westpac Europe Ltd'),
(299, 'Wyelands Bank Plc'),
(300, 'Zenith Bank (UK) Limited'),
(301, 'Zopa Bank Limited'),
(302, 'Turkish Bank (UK) Ltd'),
(303, 'Ulster Bank Ltd'),
(304, 'Union Bank of India (UK) Limited'),
(305, 'Union Bank UK Plc'),
(306, 'United Bank for Africa (UK) Limited'),
(307, 'United National Bank Limited'),
(308, 'United Trust Bank Limited'),
(309, 'Unity Trust Bank Plc'),
(310, 'Vanquis Bank Limited'),
(311, 'Virgin Money plc'),
(312, 'VTB Capital plc'),
(313, 'Weatherbys Bank Limited'),
(314, 'Wesleyan Bank Limited'),
(315, 'Westpac Europe Ltd'),
(316, 'Wyelands Bank Plc'),
(317, 'Zenith Bank (UK) Limited'),
(318, 'Zopa Bank Limited');

-- --------------------------------------------------------

--
-- Table structure for table `usbank`
--

CREATE TABLE `usbank` (
  `id` int(11) NOT NULL,
  `name` varchar(69) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usbank`
--

INSERT INTO `usbank` (`id`, `name`) VALUES
(1, 'Abacus Federal Savings Bank'),
(2, 'Abbeville Building & Loan'),
(3, 'Abbeville First Bank, SSB'),
(4, 'AbbyBank'),
(5, 'ABINGTON BANK'),
(6, 'Academy Bank'),
(7, 'ACB Bank'),
(8, 'Access Bank'),
(9, 'AccessBank Texas'),
(10, 'ACNB Bank'),
(11, 'Adams Bank & Trust'),
(12, 'Adams Community Bank'),
(13, 'Adams County Bank'),
(14, 'Adams State Bank'),
(15, '1st National Bank'),
(16, 'Academy Bank'),
(17, 'ADP Trust Company'),
(18, 'Albany Bank and Trust Company'),
(19, 'Alerus Financial'),
(20, 'Amarillo National Bank'),
(21, 'Amerant Bank'),
(22, 'Amerant Trust'),
(23, 'American Bank and Trust Company'),
(24, 'American Bank'),
(25, 'American Commerce Bank'),
(26, 'American Express National Bank'),
(27, 'American First National Bank'),
(28, 'American Heritage National Bank'),
(29, 'American National Bank'),
(30, 'Adirondack Bank Utica'),
(31, 'Adrian Bank Adrian'),
(32, 'Adrian State Bank Adrian'),
(33, 'Affinity Bank Covington'),
(34, 'AIG Federal Savings Bank'),
(35, 'Alamerica Bank Birmingham'),
(36, 'Alamosa State Bank'),
(37, 'Albany Bank and Trust Company'),
(38, 'Alden State Bank'),
(39, 'Alerus Financial'),
(40, 'Algonquin State Bank'),
(41, 'All America Bank'),
(42, 'Allegiance Bank Houston'),
(43, 'Alliance Bank'),
(44, 'American Plus Bank'),
(45, 'AMG National Trust Bank'),
(46, 'Anahuac National Bank'),
(47, 'Anchorage Digital Bank'),
(48, 'Anna-Jonesboro National Bank'),
(49, 'Armed Forces Bank'),
(50, 'Asian Pacific National Bank'),
(51, 'Associated Bank'),
(52, 'Associated Trust Company'),
(53, 'Atlantic Capital Bank'),
(54, 'Austin Bank'),
(55, 'Axiom Bank'),
(56, 'Alliance Bank Topeka'),
(57, 'Alliance Bank & Trust Company'),
(58, 'Alliance Bank Central Texas'),
(59, 'Alliance Community Bank Petersburg'),
(60, 'Alliant Bank Madison'),
(61, 'Allied First Bank'),
(62, 'AllNations Bank Calumet'),
(63, 'Ally Bank'),
(64, 'Alma Bank'),
(65, 'Alpine Bank'),
(66, 'Alpine Capital Bank'),
(67, 'Altabank American Fork'),
(68, 'Altamaha Bank & Trust Company Vidalia'),
(69, 'Alton Bank Alton'),
(70, 'Altoona First Savings Bank Altoona'),
(71, 'Alva State Bank & Trust Company Alva'),
(72, 'Amalgamated Bank New York'),
(73, 'Amalgamated Bank of Chicago Chicago'),
(74, 'Amarillo National Bank Amarillo'),
(75, 'Ambler Savings Bank'),
(76, 'Amboy Bank Old Bridge'),
(77, 'Amerant Bank'),
(78, 'Amerasia Bank Flushing'),
(79, 'America\'s Community Bank'),
(80, 'American Bank'),
(81, 'American Bank & Trust Wessington Springs'),
(82, 'American Bank & Trust Company Opelousas'),
(83, 'American Bank & Trust Company Covington'),
(84, 'American Bank & Trust Company'),
(85, 'American Bank & Trust of the Cumberlands Livingston'),
(86, 'American Bank and Trust Company Tulsa'),
(87, 'American Bank and Trust Company'),
(88, 'American Bank Center Dickinson'),
(89, 'American Bank of Baxter Springs Baxter Springs'),
(90, 'American Bank of Beaver Dam Beaver Dam'),
(91, 'American Bank of Commerce Wolfforth'),
(92, 'American Bank of Missouri Wellsville'),
(93, 'American Bank of Oklahoma Collinsville'),
(94, 'American Bank of the Carolinas Monroe'),
(95, 'American Bank of the North'),
(96, 'American Business Bank Los Angeles'),
(97, 'American Commerce Bank'),
(98, 'American Community Bank Glen Cove'),
(99, 'American Community Bank & Trust Woodstock'),
(100, 'American Community Bank of Indiana'),
(101, 'American Continental Bank'),
(102, 'American Eagle Bank South Elgin'),
(103, 'American Equity Bank Minnetonka'),
(104, 'American Exchange Bank'),
(105, 'American Express National Bank Sandy'),
(106, 'American Federal Bank Fargo'),
(107, 'American First National Bank Houston'),
(108, 'American Heritage Bank Sapulpa'),
(109, 'American Heritage Bank Clovis'),
(110, 'American Heritage National Bank Long Prairie'),
(111, 'American Interstate Bank Elkhorn'),
(112, 'American Investors Bank and Mortgage Eden Prairie'),
(113, 'American Metro Bank Chicago'),
(114, 'American Momentum Bank'),
(115, 'Axos Bank'),
(116, 'Baker Boyer National Bank'),
(117, 'Ballston Spa National Bank'),
(118, 'Banc of California'),
(119, '12152 BancCentral'),
(120, '4975 Bank First'),
(121, '24077 Bank of America California'),
(122, 'Bank of Brenham'),
(123, 'Bank of Bridger'),
(124, 'Bank of Brookfield-Purdin'),
(125, 'Bank of Desoto'),
(126, 'Bank of Hillsboro'),
(127, 'Bank of Houston'),
(128, 'Bank of Southern California'),
(129, 'Bank of Whittier'),
(130, 'BankChampaign'),
(131, 'BankFinancial'),
(132, 'BankUnited'),
(133, 'Barrington Bank & Trust Company'),
(134, 'Beacon Business Bank'),
(135, 'Bessemer Trust Company of California'),
(136, 'Bessemer Trust Company of Delaware'),
(137, 'Bessemer Trust Company'),
(138, 'Beverly Bank & Trust Company'),
(139, 'Big Bend Banks'),
(140, 'Black Hills Community Bank'),
(141, 'Blackrock Institutional Trust Company'),
(142, 'Blue Ridge Bank'),
(143, 'BMO Harris Bank'),
(144, 'BMO Harris Central National Association'),
(145, 'b1BANK Baton Rouge'),
(146, 'BAC Community Bank Stockton'),
(147, 'Badger Bank Fort Atkinson'),
(148, 'Baker-Boyer National Bank'),
(149, 'Balboa Thrift and Loan Association Chula Vista'),
(150, 'Ballston Spa National Bank Ballston Spa'),
(151, 'Banc of California'),
(152, 'BancCentral'),
(153, 'BancFirst Oklahoma City'),
(154, 'Banco do Brasil Americas Miami'),
(155, 'Banco Popular de Puerto Rico San Juan'),
(156, 'BancorpSouth Bank Tupelo'),
(157, 'Bandera Bank Bandera'),
(158, 'Banesco USA Coral Gables'),
(159, 'Bangor Savings Bank'),
(160, 'Bank Northwest Hamilton'),
(161, 'Bank of Abbeville & Trust Company Abbeville'),
(162, 'Bank of Alapaha Alapaha'),
(163, 'Bank of Alma Alma'),
(164, 'Bank of America California'),
(165, 'Bank of America Charlotte'),
(166, 'Bank of Anguilla Anguilla'),
(167, 'Bank of Ann Arbor Ann Arbor'),
(168, 'Bank of Baroda New York'),
(169, 'Bank of Bartlett Bartlett'),
(170, 'Bank of Bearden Bearden'),
(171, 'Bank of Belle Glade Belle Glade'),
(172, 'Bank of Belleville Belleville'),
(173, 'Bank of Bennington Bennington'),
(174, 'Bank of Billings'),
(175, 'Bank of Bird-in-Hand'),
(176, 'Bank of Blue Valley'),
(177, 'Bank of Bluffs'),
(178, 'Bank of Botetourt'),
(179, 'Bank of Bozeman'),
(180, 'Bank of Brenham'),
(181, 'Bank of Brewton'),
(182, 'Bank of Bridger'),
(183, 'Bank of Brookfield'),
(184, 'Bank of Brookhaven'),
(185, 'Bank of Buffalo'),
(186, 'Bank of Cadiz and Trust Company Cadiz'),
(187, 'Bank of Calhoun County Hardin'),
(188, 'Bank of Camilla Camilla'),
(189, 'Bank of Cashton'),
(190, 'Bank of Cattaraugus'),
(191, 'Bank of Cave City'),
(192, 'Bank of Central Florida Lakeland'),
(193, 'Bank of Charles Town'),
(194, 'Bank of Cherokee County Hulbert'),
(195, 'Bank of Chestnut'),
(196, 'Bank of China'),
(197, 'Bank of Clarke County'),
(198, 'Bank of Clarks'),
(199, 'Bank of Clarkson'),
(200, 'Bank of Clevelan'),
(201, 'Bank of Colorado'),
(202, 'Bank of Columbia'),
(203, 'Bank of Commerce'),
(204, 'Bank of Cordell Cordell'),
(205, 'Bank of Coushatta Coushatta'),
(206, 'Bank of Crocker Waynesville'),
(207, 'Bank of Crockett Bells'),
(208, 'Bank of Dade Trenton'),
(209, 'Bank of Dawson'),
(210, 'Bank of Deerfield'),
(211, 'Bank of Delight'),
(212, 'BNC National Bank'),
(213, 'BNY Mellon'),
(214, 'BOKF'),
(215, 'Brazos National Bank'),
(216, 'Bremer Bank'),
(217, 'Broadway National Bank 1177 N.E. Loop 410 San Antonio TX 15797 474254'),
(218, 'Brown Brothers Harriman Trust Company'),
(219, 'BTH Bank'),
(220, 'Buena Vista National Bank'),
(221, 'Business Bank of Texas'),
(222, 'Bank of Denton Denton'),
(223, 'Bank of DeSoto'),
(224, 'Bank of Dickson Dickson'),
(225, 'Bank of Dixon County Ponca'),
(226, 'Bank of Doniphan Doniphan'),
(227, 'Bank of Dudley Dudley'),
(228, 'Bank of Eastern Oregon Heppner'),
(229, 'Bank of Easton North Easton'),
(230, 'Bank of Edmonson County Brownsville'),
(231, 'Bank of Elgin'),
(232, 'Bank of England'),
(233, 'Bank of Erath'),
(234, 'Bank of Estes Park'),
(235, 'Bank of Eufaula Eufaula'),
(236, 'Bank of Evergreen'),
(237, 'Bank of Farmington'),
(238, 'Bank of Feather River Yuba City'),
(239, 'Bank of Frankewing'),
(240, 'Bank of Franklin Meadville'),
(241, 'Bank of Franklin County Washington'),
(242, 'Bank of George Las Vegas'),
(243, 'Bank of Gibson City'),
(244, 'Bank of Gleason'),
(245, 'Bank of Grand Lake'),
(246, 'Bank of Grandin'),
(247, 'Bank of Gravette'),
(248, 'Bank of Greeley'),
(249, 'Bank of Greeleyville'),
(250, 'Bank of Guam'),
(251, 'Bank of Gueydan'),
(252, 'Bank of Halls'),
(253, 'Bank of Hancock County Sparta'),
(254, 'Bank of Hartington'),
(255, 'Bank of Hawaii Honolulu'),
(256, 'Bank of Hays'),
(257, 'Bank of Hazelton'),
(258, 'Bank of Hazlehurst'),
(259, 'Bank of Hillsboro'),
(260, 'Bank of Hindman'),
(261, 'Bank of Holland'),
(262, 'Bank of Holly Springs'),
(263, 'Bank of Holyrood'),
(264, 'Bank of Hope'),
(265, 'Bank of Houston'),
(266, 'Bank of Hydro'),
(267, 'Bank of Iberia'),
(268, 'Bank of Idaho Idaho Falls'),
(269, 'Bank of India New York'),
(270, 'Bank of Jackson Hole'),
(271, 'Bank of Jamestown'),
(272, 'Bank of Kampsville'),
(273, 'Bank of Kilmichael'),
(274, 'Bank of Kirksville'),
(275, 'Bank of Labor Kansas City'),
(276, 'Bank of Lake Mills'),
(277, 'Bank of Lake Village'),
(278, 'Bank of Lewellen'),
(279, 'Bank of Lexington'),
(280, 'Bank of Lincoln County Fayetteville'),
(281, 'Bank of Lindsay'),
(282, 'Bank of Montana Missoula'),
(283, 'Bank of Montgomery'),
(284, 'Bank of Monticello'),
(285, 'Bank of Morton'),
(286, 'Bank of Moundville'),
(287, 'Bank of New Cambria'),
(288, 'Bank of New Hampshire'),
(289, 'Bank of New Madrid'),
(290, 'Bank of Newington'),
(291, 'Bank of Newman Grove'),
(292, 'Bank of O\'Fallon'),
(293, 'Bank of Oak Ridge'),
(294, 'Bank of Little Rock'),
(295, 'Bank of Locust Grove'),
(296, 'Bank of Louisiana'),
(297, 'Bank of Lumber City'),
(298, 'Bank of Luxemburg'),
(299, 'Bank of Madison'),
(300, 'Bank of Maple'),
(301, 'Bank of Marin'),
(302, 'Bank of Mauston'),
(303, 'Bank of Maysville'),
(304, 'Bank of Mead'),
(305, 'Bank of Millbrook'),
(306, 'Bank of Milton'),
(307, 'Bank of Mingo'),
(308, 'C3bank'),
(309, 'Cadence Bank'),
(310, 'California First National Bank'),
(311, 'California International Bank, A National Banking Association'),
(312, 'Canandaigua National Trust Company of Florida'),
(313, 'Canyon Community Bank'),
(314, 'Capital Bank'),
(315, 'Capital One Bank (USA)'),
(316, 'Capital One'),
(317, 'Capitol National Bank'),
(318, 'Cayuga Lake National Bank'),
(319, 'Cedar Hill National Bank'),
(320, 'Cendera Bank'),
(321, 'Center National Bank'),
(322, 'Central National Bank'),
(323, 'Central National Bank'),
(324, 'CenTrust Bank'),
(325, 'CFBank'),
(326, 'Chain Bridge Bank'),
(327, 'Champlain National Bank'),
(328, 'Chester National Bank'),
(329, 'Chilton Trust Company'),
(330, 'Chino Commercial Bank'),
(331, 'CIBC National Trust Company'),
(332, 'CIT Bank'),
(333, 'Citibank, N.A.'),
(334, 'Citicorp Trust Delaware'),
(335, 'Citizens Bank'),
(336, 'Citizens Bank'),
(337, 'Citizens Community Federal National Association'),
(338, 'Citizens National Bank'),
(339, 'Citizens National Bank'),
(340, 'Citizens National Bank'),
(341, 'Citizens National Bank at Brownwood'),
(342, 'Citizens National Bank of Albion'),
(343, 'Citizens National Bank of Cheboygan'),
(344, 'Citizens National Bank of Crosbyton'),
(345, 'Citizens National Bank of Texas'),
(346, 'Citizens National Bank'),
(347, 'City First Bank of D.C.'),
(348, 'City National Bank'),
(349, 'City National Bank'),
(350, 'City National Bank of Florida'),
(351, 'City National Bank of West Virginia'),
(352, 'Clare Bank'),
(353, 'Classic Bank'),
(354, 'CNB Bank & Trust'),
(355, 'Coastal Carolina National Bank'),
(356, 'Comerica Bank & Trust'),
(357, 'Commerce National Bank & Trust'),
(358, 'Commercial Bank of Texas'),
(359, 'Commercial National Bank of Texarkana'),
(360, 'Commonwealth National Bank'),
(361, 'Community Bank'),
(362, 'Community First Bank'),
(363, 'Community First National Bank'),
(364, 'Community National Bank'),
(365, 'Community National Bank'),
(366, 'Community National Bank'),
(367, 'Community National Bank'),
(368, 'Community National Bank & Trust'),
(369, 'Community National Bank & Trust of Texas'),
(370, 'Community National Bank in Monmouth'),
(371, 'Community National Bank of Okarche'),
(372, 'Community West Bank'),
(373, 'CommunityBank of Texas'),
(374, 'Computershare Trust Company'),
(375, 'Connecticut Community Bank'),
(376, 'Consumers National Bank'),
(377, 'Cornerstone Bank'),
(378, 'Cornerstone National Bank & Trust Company'),
(379, 'Cortrust Bank National Association'),
(380, 'Country Club Trust Company'),
(381, 'County National Bank'),
(382, 'Credit First National Association'),
(383, 'Credit One Bank'),
(384, 'Crockett National Bank'),
(385, 'Crystal Lake Bank & Trust Company'),
(386, 'Cumberland Valley National Bank & Trust Company'),
(387, 'Dakota Community Bank & Trust'),
(388, 'Dallas Capital Bank'),
(389, 'Delta National Bank and Trust Company'),
(390, 'Department Stores National Bank'),
(391, 'Desjardins Bank'),
(392, 'Deutsche Bank National Trust Company'),
(393, 'Deutsche Bank Trust Company'),
(394, 'DNB National Bank'),
(395, 'Douglas National Bank'),
(396, 'DSRM National Bank'),
(397, 'Eastbank'),
(398, 'Eastern National Bank'),
(399, 'Edison National Bank'),
(400, 'EH National Bank'),
(401, 'Embassy National Bank'),
(402, 'Esquire Bank'),
(403, 'Evans Bank'),
(404, 'Evercore Trust Company'),
(405, 'Evergreen National Bank'),
(406, 'Extraco Banks'),
(407, 'F&M Community Bank'),
(408, 'Falcon National Bank'),
(409, 'Farmers National Bank'),
(410, 'Farmers National Bank'),
(411, 'Farmers National Bank of Griggsville'),
(412, 'FCN Bank'),
(413, 'Fidelity Bank'),
(414, 'Fifth Third Bank'),
(415, 'Finemark National Bank & Trust'),
(416, 'First & Farmers National Bank, Inc.'),
(417, 'First American National Bank'),
(418, 'First Bankers Trust Company'),
(419, 'First Century Bank'),
(420, 'First Citizens National Bank'),
(421, 'First Colorado National Bank'),
(422, 'First Commercial Bank'),
(423, 'First Community National Bank'),
(424, 'First Community Trust'),
(425, 'First Dakota National Bank'),
(426, 'First Farmers & Merchants National Bank'),
(427, 'First Farmers & Merchants National Bank'),
(428, 'First Federal Community Bank'),
(429, 'First Financial Bank'),
(430, 'First Financial Bank'),
(431, 'First Financial Trust & Asset Management Company'),
(432, 'First Financial Trust'),
(433, 'First Hope Bank, A National Banking Association'),
(434, 'First Mid Bank & Trust'),
(435, 'First National Bank & Trust'),
(436, 'First National Bank & Trust Company'),
(437, 'First National Bank & Trust Company of McAlester'),
(438, 'First National Bank Alaska'),
(439, 'First National Bank Albany/Breckenridge'),
(440, 'First National Bank and Trust'),
(441, 'First National Bank and Trust'),
(442, 'First National Bank and Trust Co. of Bottineau'),
(443, 'First National Bank and Trust Company'),
(444, 'First National Bank and Trust Company of Ardmore'),
(445, 'First National Bank and Trust Company of Weatherford'),
(446, 'First National Bank at Darlington'),
(447, 'First National Bank in Cimarron'),
(448, 'First National Bank in DeRidder'),
(449, 'First National Bank in Fairfield'),
(450, 'First National Bank in Frankfort'),
(451, 'First National Bank in Fredonia'),
(452, 'First National Bank in Howell'),
(453, 'First National Bank in New Bremen'),
(454, 'First National Bank in Okeene'),
(455, 'First National Bank in Olney'),
(456, 'First National Bank in Ord'),
(457, 'First National Bank in Philip'),
(458, 'First National Bank in Pinckneyville'),
(459, 'First National Bank in Port Lavaca'),
(460, 'First National Bank in Taylorville'),
(461, 'First National Bank in Tigerton'),
(462, 'First National Bank Minnesota'),
(463, 'First National Bank North'),
(464, 'First National Bank Northwest Florida'),
(465, 'First National Bank of Alvin'),
(466, 'First National Bank of America'),
(467, 'First National Bank of Anderson'),
(468, 'First National Bank of Beardstown'),
(469, 'First National Bank of Benton'),
(470, 'First National Bank of Bosque County'),
(471, 'First National Bank of Brookfield'),
(472, 'First National Bank of Burleson'),
(473, 'First National Bank of Central Texas'),
(474, 'First National Bank of Chadron'),
(475, 'First National Bank of Clarksdale'),
(476, 'First National Bank of Coffee County'),
(477, 'First National Bank of Decatur County'),
(478, 'First National Bank of Dublin'),
(479, 'First National Bank of Eastern Arkansas'),
(480, 'First National Bank of Fort Stockton'),
(481, 'First National Bank of Giddings'),
(482, 'First National Bank of Gillette'),
(483, 'First National Bank of Griffin'),
(484, 'First National Bank of Hereford'),
(485, 'First National Bank of Huntsville'),
(486, 'First National Bank of Kansas'),
(487, 'First National Bank of Kentucky'),
(488, 'First National Bank of Lake Jackson'),
(489, 'First National Bank of Las Animas'),
(490, 'First National Bank of Louisiana'),
(491, 'First National Bank of McGregor'),
(492, 'First National Bank of Michigan'),
(493, 'First National Bank of Muscatine'),
(494, 'First National Bank of Nokomis'),
(495, 'First National Bank of North Arkansas'),
(496, 'First National Bank of Oklahoma'),
(497, 'First National Bank of Omaha'),
(498, 'First National Bank of Pana'),
(499, 'First National Bank of Pasco'),
(500, 'First National Bank of Pennsylvania'),
(501, 'First National Bank of Picayune'),
(502, 'First National Bank of Pulaski'),
(503, 'First National Bank of River Falls'),
(504, 'First National Bank of Scotia'),
(505, 'First National Bank of South Carolina'),
(506, 'First National Bank of South Padre Island'),
(507, 'First National Bank of Steeleville'),
(508, 'First National Bank of Tennessee'),
(509, 'First National Bank of Wauchula'),
(510, 'First National Bank of Winnsboro'),
(511, 'First National Bank Texas'),
(512, 'First National Bank USA'),
(513, 'First National Bank, Ames, Iowa'),
(514, 'First National Bank, Cortez'),
(515, 'First National Bankers Bank'),
(516, 'First National Community Bank'),
(517, 'First National Community Bank'),
(518, 'First National Trust Company'),
(519, 'First Neighbor Bank'),
(520, 'First Pioneer National Bank'),
(521, 'First Robinson Savings Bank'),
(522, 'First Southern National Bank'),
(523, 'First Texoma National Bank'),
(524, 'First United National Bank'),
(525, 'FirstCapital Bank of Texas'),
(526, 'First-Lockhart National Bank'),
(527, 'Florida Capital Bank'),
(528, 'Forcht Bank'),
(529, 'Forest Park National Bank and Trust Company'),
(530, 'FSNB'),
(531, 'Fulton Bank'),
(532, 'Gilmer National Bank'),
(533, 'Glens Falls National Bank and Trust Company'),
(534, 'GNBank'),
(535, 'Golden Bank'),
(536, 'Golden Pacific Bank'),
(537, 'Goldwater Bank'),
(538, 'Grand Ridge National Bank'),
(539, 'Grasshopper Bank'),
(540, 'Great Plains National Bank'),
(541, 'Greenville National Bank'),
(542, 'Guaranty Bank & Trust'),
(543, 'Haskell National Bank'),
(544, 'Hawaii National Bank'),
(545, 'Heartland National Bank'),
(546, 'Heritage Bank'),
(547, 'Hiawatha National Bank'),
(548, 'Hilltop National Bank'),
(549, 'Hinsdale Bank & Trust Company'),
(550, 'HNB National Bank'),
(551, 'Home Bank'),
(552, 'Home National Bank'),
(553, 'Home State Bank / National Association'),
(554, 'Hometown Bank'),
(555, 'Hometown National Bank'),
(556, 'HSBC Bank USA'),
(557, 'HSBC Trust Company (Delaware)'),
(558, 'INB'),
(559, 'Incommons Bank'),
(560, 'Industrial and Commercial Bank of China (USA)'),
(561, 'Intercredit Bank'),
(562, 'Intrust Bank'),
(563, 'Investar Bank'),
(564, 'Inwood National Bank'),
(565, 'JPMorgan Chase Bank'),
(566, 'Junction National Bank'),
(567, 'KEB Hana Bank USA'),
(568, 'Key National Trust Company of Delaware'),
(569, 'KeyBank National Association'),
(570, 'Keystone Bank'),
(571, 'Kingston National Bank'),
(572, 'Kleberg Bank'),
(573, 'Kress National Bank'),
(574, 'Lake Forest Bank & Trust Company'),
(575, 'Lamar National Bank'),
(576, 'Landmark National Bank'),
(577, 'LCNB National Bank'),
(578, 'Leader Bank'),
(579, 'Ledyard National Bank'),
(580, 'Legacy National Bank'),
(581, 'Legacy Trust Company'),
(582, 'Legend Bank'),
(583, 'LendingClub Bank'),
(584, 'Liberty National Bank'),
(585, 'Liberty National Bank'),
(586, 'Liberty National Bank'),
(587, 'Libertyville Bank & Trust Company'),
(588, 'Llano National Bank'),
(589, 'Lone Star Capital Bank'),
(590, 'Lone Star National Bank'),
(591, 'Malvern Bank'),
(592, 'Mason City National Bank'),
(593, 'Mccurtain County National Bank'),
(594, 'Merchants Bank'),
(595, 'MetaBank'),
(596, 'Midamerica National Bank'),
(597, 'Mid-Central National Bank'),
(598, 'Midstates Bank'),
(599, 'Midwest Bank'),
(600, 'Millbury National Bank'),
(601, 'Minnesota National Bank'),
(602, 'Minnstar Bank National Association'),
(603, 'Mission National Bank'),
(604, 'Modern Bank'),
(605, 'Moody National Bank'),
(606, 'Morgan Stanley Bank, N.A.'),
(607, 'Morgan Stanley Private Bank'),
(608, 'Mountain Valley Bank'),
(609, 'MUFG Union Bank'),
(610, 'Natbank'),
(611, 'National Advisors Trust Company'),
(612, 'National Bank & Trust'),
(613, 'National Bank of Commerce'),
(614, 'National Bank of New York City'),
(615, 'National Bank of St. Anne'),
(616, 'National Cooperative Bank, N.A.'),
(617, 'National Exchange Bank and Trust'),
(618, 'National United'),
(619, 'Native American Bank'),
(620, 'NBT Bank'),
(621, 'Nebraskaland National Bank'),
(622, 'Neighborhood National Bank'),
(623, 'Neighborhood National Bank'),
(624, 'Neuberger Berman Trust Company National Association'),
(625, 'Neuberger Berman Trust Company of Delaware National Association'),
(626, 'New Covenant Trust Company'),
(627, 'New Horizon Bank'),
(628, 'New Omni Bank'),
(629, 'Newfield National Bank'),
(630, 'Newfirst National Bank'),
(631, 'NexTier Bank'),
(632, 'Nicolet National Bank'),
(633, 'North Georgia National Bank'),
(634, 'Northbrook Bank & Trust Company'),
(635, 'Northern California National Bank'),
(636, 'Northern Interstate Bank'),
(637, 'Northwestern Bank'),
(638, 'Natbank'),
(639, 'National Advisors Trust Company'),
(640, 'National Bank & Trust'),
(641, 'National Bank of Commerce'),
(642, 'National Bank of New York City'),
(643, 'National Bank of St. Anne'),
(644, 'National Cooperative Bank, N.A.'),
(645, 'National Exchange Bank and Trust'),
(646, 'National United'),
(647, 'Native American Bank'),
(648, 'NBT Bank'),
(649, 'Nebraskaland National Bank'),
(650, 'Neighborhood National Bank'),
(651, 'Neighborhood National Bank'),
(652, 'Neuberger Berman Trust Company National Association'),
(653, 'Neuberger Berman Trust Company of Delaware National Association'),
(654, 'New Covenant Trust Company'),
(655, 'New Horizon Bank'),
(656, 'New Omni Bank'),
(657, 'Newfield National Bank'),
(658, 'Newfirst National Bank'),
(659, 'NexTier Bank'),
(660, 'Nicolet National Bank'),
(661, 'North Georgia National Bank'),
(662, 'Northbrook Bank & Trust Company'),
(663, 'Northern California National Bank'),
(664, 'Northern Interstate Bank'),
(665, 'Northwestern Bank'),
(666, 'Pacific National Bank'),
(667, 'Panola National Bank'),
(668, 'Patriot Bank'),
(669, 'Peoples National Bank of Kewanee'),
(670, 'Peoples National Bank, N.A.'),
(671, 'People\'s United Bank'),
(672, 'Pike National Bank'),
(673, 'Pikes Peak National Bank'),
(674, 'Pioneer Trust Bank'),
(675, 'PNC Bank'),
(676, 'Powell Valley National Bank'),
(677, 'Progressive National Bank'),
(678, 'Quail Creek Bank'),
(679, 'Quantum National Bank'),
(680, 'Queensborough National Bank & Trust Company'),
(681, 'Ramsey National Bank'),
(682, 'Range Bank'),
(683, 'Raymond James Bank'),
(684, 'Raymond James Trust'),
(685, 'RBC Bank (Georgia)'),
(686, 'Relyance Bank'),
(687, 'Resource Bank'),
(688, 'Rockefeller Trust Company'),
(689, 'RockPoint Bank'),
(690, 'Safra National Bank of New York'),
(691, 'Santander Bank'),
(692, 'Saratoga National Bank and Trust Company'),
(693, 'Savannah Bank National Association'),
(694, 'Schaumburg Bank & Trust Company'),
(695, 'Seacoast National Bank'),
(696, 'Securian Trust Company'),
(697, 'Security First National Bank of Hugo'),
(698, 'Security National Bank'),
(699, 'Security National Bank of Omaha'),
(700, 'Security National Bank of South Dakota'),
(701, 'Security National Trust Co.'),
(702, 'Shamrock Bank'),
(703, 'Signature Bank'),
(704, 'Skyline National Bank'),
(705, 'SNB Bank'),
(706, 'Solera National Bank'),
(707, 'South State Bank'),
(708, 'SouthCrest Bank'),
(709, 'Southeast First National Bank'),
(710, 'Southtrust Bank'),
(711, 'Southwest National Bank'),
(712, 'Southwestern National Bank'),
(713, 'St. Charles Bank & Trust Company'),
(714, 'St. Martin National Bank'),
(715, 'State Bank of the Lakes'),
(716, 'State Street Bank and Trust Company National Association'),
(717, 'State Street Bank and Trust Company of California'),
(718, 'Stearns Bank Holdingford National Association'),
(719, 'Stearns Bank National Association'),
(720, 'Stearns Bank Upsala National Association'),
(721, 'Sterling National Bank'),
(722, 'Stifel Trust Company Delaware'),
(723, 'Stifel Trust Company'),
(724, 'Stillman Banccorp National Association'),
(725, 'Stockmens National Bank in Cotulla'),
(726, 'Stride Bank'),
(727, 'Stroud National Bank'),
(728, 'Summit National Bank'),
(729, 'Sunflower Bank'),
(730, 'Sunrise Banks'),
(731, 'Superior National Bank'),
(732, 'Synovus Trust Company'),
(733, 'T Bank'),
(734, 'TCF National Bank'),
(735, 'TCM Bank'),
(736, 'TD Bank USA'),
(737, 'TD Bank'),
(738, 'Terrabank National Association'),
(739, 'Texan Bank'),
(740, 'Texana Bank'),
(741, 'Texas Advantage Community Bank'),
(742, 'Texas Capital Bank'),
(743, 'Texas Citizens Bank'),
(744, 'Texas Gulf Bank'),
(745, 'Texas Heritage National Bank'),
(746, 'Texas National Bank'),
(747, 'Texas National Bank'),
(748, 'Texas National Bank of Jacksonville'),
(749, 'Texas Republic Bank'),
(750, 'TexStar National Bank'),
(751, 'The American National Bank of Mount Pleasant'),
(752, 'The American National Bank of Texas'),
(753, 'The Atlanta National Bank'),
(754, 'The Bank National Association'),
(755, 'The Bank of New York Mellon Trust Company'),
(756, 'The Bradford National Bank of Greenville'),
(757, 'The Brady National Bank'),
(758, 'The Brenham National Bank'),
(759, 'The Camden National Bank'),
(760, 'The Canandaigua National Bank and Trust Company'),
(761, 'The Central National Bank of Poteau'),
(762, 'The Chicago Trust Company'),
(763, 'The Citizens First National Bank of Storm Lake'),
(764, 'The Citizens National Bank'),
(765, 'The Citizens National Bank of Bluffton'),
(766, 'The Citizens National Bank of Hammond'),
(767, 'The Citizens National Bank of Hillsboro'),
(768, 'The Citizens National Bank of Lebanon'),
(769, 'The Citizens National Bank of McConnelsville'),
(770, 'The Citizens National Bank of Meridian'),
(771, 'The Citizens National Bank of Park Rapids'),
(772, 'The Citizens National Bank of Quitman'),
(773, 'The Citizens National Bank of Somerset'),
(774, 'The Citizens National Bank of Woodsfield'),
(775, 'The City National Bank and Trust Company of Lawton, Oklahoma'),
(776, 'The City National Bank of Colorado City'),
(777, 'The City National Bank of Metropolis'),
(778, 'The City National Bank of San Saba'),
(779, 'The City National Bank of Sulphur Springs'),
(780, 'The City National Bank of Taylor'),
(781, 'The Clinton National Bank'),
(782, 'The Commercial National Bank of Brady'),
(783, 'The Conway National Bank'),
(784, 'The Delaware National Bank of Delhi'),
(785, 'The Ephrata National Bank'),
(786, 'The Fairfield National Bank'),
(787, 'The Falls City National Bank'),
(788, 'The Farmers and Merchants National Bank of Fairview'),
(789, 'The Farmers and Merchants National Bank of Nashville'),
(790, 'The Farmers\' National Bank of Canfield'),
(791, 'The Farmers National Bank of Danville'),
(792, 'The Farmers National Bank of Emlenton'),
(793, 'The Farmers National Bank of Lebanon'),
(794, 'The Fayette County National Bank of Fayetteville'),
(795, 'The First Central National Bank of St. Paris'),
(796, 'The First Citizens National Bank of Upper Sandusky'),
(797, 'The First Farmers National Bank of Waurika'),
(798, 'The First Liberty National Bank'),
(799, 'The First National Bank'),
(800, 'The First National Bank & Trust Co. of Iron Mountain'),
(801, 'The First National Bank and Trust Co.'),
(802, 'The First National Bank and Trust Company'),
(803, 'The First National Bank and Trust Company of Broken Arrow'),
(804, 'The First National Bank and Trust Company of Miami'),
(805, 'The First National Bank and Trust Company of Newtown'),
(806, 'The First National Bank and Trust Company of Okmulgee'),
(807, 'The First National Bank and Trust Company of Vinita'),
(808, 'The First National Bank at Paris'),
(809, 'The First National Bank at St. James'),
(810, 'The First National Bank in Amboy'),
(811, 'The First National Bank in Carlyle'),
(812, 'The First National Bank in Cooper'),
(813, 'The First National Bank in Creston'),
(814, 'The First National Bank in Falfurrias'),
(815, 'The First National Bank in Marlow'),
(816, 'The First National Bank in Sioux Falls'),
(817, 'The First National Bank in Tremont'),
(818, 'The First National Bank in Trinidad'),
(819, 'The First National Bank of Absecon'),
(820, 'The First National Bank of Allendale'),
(821, 'The First National Bank of Anson'),
(822, 'The First National Bank of Arenzville'),
(823, 'The First National Bank of Aspermont'),
(824, 'The First National Bank of Assumption'),
(825, 'The First National Bank of Ava'),
(826, 'The First National Bank of Ballinger'),
(827, 'The First National Bank of Bangor'),
(828, 'The First National Bank of Bastrop'),
(829, 'The First National Bank of Bellevue'),
(830, 'The First National Bank of Bellville'),
(831, 'The First National Bank of Bemidji'),
(832, 'The First National Bank of Blanchester'),
(833, 'The First National Bank of Brooksville'),
(834, 'The First National Bank of Brownstown'),
(835, 'The First National Bank of Buhl'),
(836, 'The First National Bank of Carmi'),
(837, 'The First National Bank of Cokato'),
(838, 'The First National Bank of Coleraine'),
(839, 'The First National Bank of Dennison'),
(840, 'The First National Bank of Dighton'),
(841, 'The First National Bank of Dozier'),
(842, 'The First National Bank of Dryden'),
(843, 'The First National Bank of Eagle Lake'),
(844, 'The First National Bank of East Texas'),
(845, 'The First National Bank of Eldorado'),
(846, 'The First National Bank of Elmer'),
(847, 'The First National Bank of Ely'),
(848, 'The First National Bank of Evant'),
(849, 'The First National Bank of Fairfax'),
(850, 'The First National Bank of Fleming'),
(851, 'The First National Bank of Fletcher'),
(852, 'The First National Bank of Floydada'),
(853, 'The First National Bank of Fort Smith'),
(854, 'The First National Bank of Frederick'),
(855, 'The First National Bank of Germantown'),
(856, 'The First National Bank of Gilbert'),
(857, 'The First National Bank of Gordon'),
(858, 'The First National Bank of Granbury'),
(859, 'The First National Bank of Grayson'),
(860, 'The First National Bank of Groton'),
(861, 'The First National Bank of Hartford'),
(862, 'The First National Bank of Harveyville'),
(863, 'The First National Bank of Hebbronville'),
(864, 'The First National Bank of Henning'),
(865, 'The First National Bank of Hooker'),
(866, 'The First National Bank of Hope'),
(867, 'The First National Bank of Hughes Springs'),
(868, 'The First National Bank of Hugo'),
(869, 'The First National Bank of Hutchinson'),
(870, 'The First National Bank of Izard County'),
(871, 'The First National Bank of Jeanerette'),
(872, 'The First National Bank of Johnson'),
(873, 'The First National Bank of Kemp'),
(874, 'The First National Bank of Lacon'),
(875, 'The First National Bank of Lawrence County at Walnut Ridge'),
(876, 'The First National Bank of Le Center'),
(877, 'The First National Bank of Lindsay'),
(878, 'The First National Bank of Lipan'),
(879, 'The First National Bank of Litchfield'),
(880, 'The First National Bank of Livingston'),
(881, 'The First National Bank of Long Island'),
(882, 'The First National Bank of Louisburg'),
(883, 'The First National Bank of Manchester'),
(884, 'The First National Bank of Manning'),
(885, 'The First National Bank of McConnelsville'),
(886, 'The First National Bank of McIntosh'),
(887, 'The First National Bank of Mertzon'),
(888, 'The First National Bank of Middle Tennessee'),
(889, 'The First National Bank of Milaca'),
(890, 'The First National Bank of Monterey'),
(891, 'The First National Bank of Moody'),
(892, 'The First National Bank of Moose Lake'),
(893, 'The First National Bank of Mount Dora'),
(894, 'The First National Bank of Nevada, Missouri'),
(895, 'The First National Bank of Okawville'),
(896, 'The First National Bank of Oneida'),
(897, 'The First National Bank of Orwell'),
(898, 'The First National Bank of Osakis'),
(899, 'The First National Bank of Ottawa'),
(900, 'The First National Bank of Pandora'),
(901, 'The First National Bank of Peterstown'),
(902, 'The First National Bank of Primghar'),
(903, 'The First National Bank of Proctor'),
(904, 'The First National Bank of Quitaque'),
(905, 'The First National Bank of Raymond'),
(906, 'The First National Bank of Russell Springs'),
(907, 'The First National Bank of Sandoval'),
(908, 'The First National Bank of Scott City'),
(909, 'The First National Bank of Sedan'),
(910, 'The First National Bank of Shiner'),
(911, 'The First National Bank of Sonora'),
(912, 'The First National Bank of South Miami'),
(913, 'The First National Bank of Sparta'),
(914, 'The First National Bank of Spearville'),
(915, 'The First National Bank of St. Ignace'),
(916, 'The First National Bank of Stanton'),
(917, 'The First National Bank of Sterling City'),
(918, 'The First National Bank of Stigler'),
(919, 'The First National Bank of Sycamore'),
(920, 'The First National Bank of Syracuse'),
(921, 'The First National Bank of Tahoka'),
(922, 'The First National Bank of Tom Bean'),
(923, 'The First National Bank of Trinity'),
(924, 'The First National Bank of Wakefield'),
(925, 'The First National Bank of Waseca'),
(926, 'The First National Bank of Waterloo'),
(927, 'The First National Bank of Waverly'),
(928, 'The First National Bank of Waynesboro'),
(929, 'The First National Bank of Weatherford'),
(930, 'The First National Bank of Williamson'),
(931, 'The First, A National Banking Association'),
(932, 'The Fisher National Bank'),
(933, 'The Glenmede Trust Company'),
(934, 'The Goldman Sachs Trust Company'),
(935, 'The Granger National Bank'),
(936, 'The Granville National Bank'),
(937, 'The Havana National Bank'),
(938, 'The Home National Bank of Thorntown'),
(939, 'The Hondo National Bank'),
(940, 'The Honesdale National Bank'),
(941, 'The Huntington National Bank'),
(942, 'The Idabel National Bank'),
(943, 'The Jacksboro National Bank'),
(944, 'The Karnes County National Bank of Karnes City'),
(945, 'The Lamesa National Bank'),
(946, 'The Lemont National Bank'),
(947, 'The Liberty National Bank in Paris'),
(948, 'The Lincoln National Bank of Hodgenville'),
(949, 'The Litchfield National Bank'),
(950, 'The Lyons National Bank'),
(951, 'The Malvern National Bank'),
(952, 'The Marion National Bank'),
(953, 'The Merchants National Bank'),
(954, 'The Miners National Bank of Eveleth'),
(955, 'The Mint National Bank'),
(956, 'The National Bank of Adams County of West Union'),
(957, 'The National Bank of Andrews'),
(958, 'The National Bank of Blacksburg'),
(959, 'The National Bank of Coxsackie'),
(960, 'The National Bank of Indianapolis'),
(961, 'The National Bank of Malvern'),
(962, 'The National Bank of Middlebury'),
(963, 'The National Bank of Texas at Fort Worth'),
(964, 'The National Capital Bank of Washington'),
(965, 'The National Grand Bank of Marblehead'),
(966, 'The National Iron Bank'),
(967, 'The Neffs National Bank'),
(968, 'The Northumberland National Bank'),
(969, 'The Old Exchange National Bank of Okawville'),
(970, 'The Old Point National Bank of Phoebus'),
(971, 'The Park National Bank'),
(972, 'The Pauls Valley National Bank'),
(973, 'The Pennsville National Bank'),
(974, 'The Peoples National Bank of Checotah'),
(975, 'The Perryton National Bank'),
(976, 'The Peshtigo National Bank'),
(977, 'The Private Trust Company'),
(978, 'The Putnam County National Bank of Carmel'),
(979, 'The Riddell National Bank'),
(980, 'The Salyersville National Bank'),
(981, 'The Santa Anna National Bank'),
(982, 'The Security National Bank of Enid'),
(983, 'The Security National Bank of Sioux City, Iowa'),
(984, 'The State National Bank of Big Spring'),
(985, 'The State National Bank of Groom'),
(986, 'The Stephenson National Bank and Trust'),
(987, 'The Tipton Latham Bank'),
(988, 'The Trust Company of Toledo'),
(989, 'The Turbotville National Bank'),
(990, 'The University National Bank of Lawrence'),
(991, 'The Upstate National Bank'),
(992, 'The Vinton County National Bank'),
(993, 'The Waggoner National Bank of Vernon'),
(994, 'The Yoakum National Bank'),
(995, 'Thomasville National Bank'),
(996, 'TIB The Independent BankersBank'),
(997, 'Tioga State Bank'),
(998, 'Titan Bank'),
(999, 'Touchmark National Bank'),
(1000, 'Town Bank'),
(1001, 'Town-Country National Bank'),
(1002, 'Transact Bank'),
(1003, 'Tri City National Bank'),
(1004, 'Triad Bank'),
(1005, 'Trinity Bank'),
(1006, 'Trustmark National Bank'),
(1007, 'U.S. Bank National Association'),
(1008, 'U.S. Bank Trust Company'),
(1009, 'U.S. Bank Trust National Association'),
(1010, 'U.S. Bank Trust National Association SD'),
(1011, 'UMB Bank & Trust'),
(1012, 'UMB Bank'),
(1013, 'Union National Bank'),
(1014, 'United Bank & Trust National Association'),
(1015, 'United Midwest Savings Bank'),
(1016, 'United National Bank'),
(1017, 'Unity National Bank of Houston'),
(1018, 'Valley National Bank'),
(1019, 'Vanguard National Trust Company'),
(1020, 'Varo Bank'),
(1021, 'Vast Bank'),
(1022, 'VeraBank'),
(1023, 'Viking Bank'),
(1024, 'Village Bank & Trust'),
(1025, 'Virginia National Bank'),
(1026, 'Vision Bank'),
(1027, 'Washington Federal Bank'),
(1028, 'Waterford Bank'),
(1029, 'Webster Bank'),
(1030, 'Wellington Trust Company'),
(1031, 'Wells Fargo Bank South Central'),
(1032, 'Wells Fargo Bank'),
(1033, 'Wells Fargo Delaware Trust Company'),
(1034, 'Wells Fargo National Bank West'),
(1035, 'Wells Fargo Trust Company'),
(1036, 'West Texas National Bank'),
(1037, 'West Valley National Bank'),
(1038, 'Western National Bank'),
(1039, 'Western National Bank'),
(1040, 'Western National Bank'),
(1041, 'Wheaton Bank & Trust Company'),
(1042, 'Wheaton College Trust Company'),
(1043, 'Wilmington Trust'),
(1044, 'Winter Park National Bank'),
(1045, 'Wintrust Bank'),
(1046, 'WNB Financial'),
(1047, 'Woodforest National Bank'),
(1048, 'Woodlands National Bank'),
(1049, 'Worthington National Bank'),
(1050, 'Zapata National Bank'),
(1051, 'Zions Bancorporation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `middlename` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `passport` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `accountnumber` varchar(150) NOT NULL,
  `accountbalance` double NOT NULL,
  `accounttype` varchar(150) NOT NULL,
  `securityquestion` varchar(150) NOT NULL,
  `answer` varchar(150) NOT NULL,
  `ssn` int(150) NOT NULL,
  `maidensname` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `datecreated` varchar(150) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) NOT NULL,
  `dayOFBirth` varchar(50) NOT NULL,
  `monthOfBirth` varchar(50) NOT NULL,
  `yearOfBirth` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `income` varchar(50) NOT NULL,
  `nextOfKIn` varchar(50) NOT NULL,
  `secretCode` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `tfa` varchar(20) NOT NULL,
  `usercurrency` varchar(50) NOT NULL DEFAULT 'USD',
  `next_address` varchar(150) NOT NULL,
  `next_relationship` varchar(150) NOT NULL,
  `next_age` varchar(150) NOT NULL,
  `securityquestion2` varchar(150) NOT NULL,
  `answer2` varchar(150) NOT NULL,
  `email_verify` int(20) NOT NULL DEFAULT 0,
  `email_code` varchar(200) NOT NULL,
  `cot` varchar(50) NOT NULL DEFAULT '00',
  `imf` varchar(50) NOT NULL DEFAULT '00',
  `blocktransfer` int(11) NOT NULL DEFAULT 1,
  `allowtransfer` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `firstname`, `middlename`, `lastname`, `dob`, `gender`, `passport`, `address`, `state`, `city`, `country`, `accountnumber`, `accountbalance`, `accounttype`, `securityquestion`, `answer`, `ssn`, `maidensname`, `status`, `datecreated`, `approve`, `title`, `dayOFBirth`, `monthOfBirth`, `yearOfBirth`, `zipcode`, `occupation`, `income`, `nextOfKIn`, `secretCode`, `nickname`, `tfa`, `usercurrency`, `next_address`, `next_relationship`, `next_age`, `securityquestion2`, `answer2`, `email_verify`, `email_code`, `cot`, `imf`, `blocktransfer`, `allowtransfer`) VALUES
(1, '', 'potentnc', 'potentnc@gmail.com', '+167899865', 'Grant', 'Linkz', 'Oseji', '06/30/2022', '', 'ZIRIMG202207121710-PEXYP.jpg', '14 arizona', 'Barisal', 'Bhandaria', 'Bangladesh', '6818741813', 0, 'Fixed Deposit Account', '', '', 0, '', 'active', ' 12 Jul 2022 17:10 pm', 0, '', '', '', '', '21098000', 'Self Employed', '$700.00 - $1,000.00', '', '1234', '', '', 'USD', '', '', '', '', '', 1, '7f9P7BOGC9oX7DwXYadyxJymGksdyYGsGv0DwLHi5Jwlc7YPNgJULxLp', '32451389', '61899053', 1, 1),
(2, '', 'king', 'mictyler007@gmail.com', '+16789986599', 'John', 'morgan', 'more', '07/15/2022', '', 'ZIRIMG202207151137-PN2I2.jpg', '14 arizona', 'Durres', 'Cudhi Zall', 'Albania', '2034184810', 6000, 'Checking Account', '', '', 0, '', 'active', ' 15 Jul 2022 11:37 am', 1, '', '', '', '', '21098000', 'Self Employed', '$1,000.00 - $2,000.00', '', '9087', '', '', 'DZD', '', '', '', '', '', 1, '12v1mhAXazAZ0pYcsQf1xnlmVa9rePZJV7qXaOMDjsOWLo4OL8ELqbhR', '71381384', '90808566', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `verify`
--

CREATE TABLE `verify` (
  `id` int(255) NOT NULL,
  `code` int(10) NOT NULL,
  `expires` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verify`
--

INSERT INTO `verify` (`id`, `code`, `expires`, `email`) VALUES
(687, 94796, 1666338758, 'grantlinkz@gmail.com'),
(688, 41430, 1666338781, 'grantlinkz@gmail.com'),
(689, 93593, 1666338939, 'grantlinkz@gmail.com'),
(690, 75189, 1666339192, 'grantlinkz@gmail.com'),
(691, 72463, 1666339350, 'grantlinkz@gmail.com'),
(692, 62649, 1666339479, 'grantlinkz@gmail.com'),
(693, 73690, 1666339647, 'grantlinkz@gmail.com'),
(694, 18127, 1666341277, 'grantlinkz@gmail.com'),
(695, 22643, 1666342286, 'grantlinkz@gmail.com'),
(696, 60031, 1666342337, 'grantlinkz@gmail.com'),
(697, 96635, 1666342451, 'grantlinkz@gmail.com'),
(698, 25027, 1666343343, 'grantlinkz@gmail.com'),
(699, 34707, 1666343420, 'grantlinkz@gmail.com'),
(700, 23202, 1666343498, 'grantlinkz@gmail.com'),
(701, 11811, 1666343549, 'grantlinkz@gmail.com'),
(702, 68721, 1666343690, 'grantlinkz@gmail.com'),
(703, 79900, 1666343730, 'grantlinkz@gmail.com'),
(704, 94890, 1666343824, 'grantlinkz@gmail.com'),
(705, 41552, 1666343848, 'grantlinkz@gmail.com'),
(706, 40781, 1666344124, 'grantlinkz@gmail.com'),
(707, 58770, 1666344144, 'grantlinkz@gmail.com'),
(708, 64172, 1666344173, 'grantlinkz@gmail.com'),
(709, 99988, 1666344202, 'grantlinkz@gmail.com'),
(710, 62052, 1666344210, 'grantlinkz@gmail.com'),
(711, 69339, 1666344237, 'grantlinkz@gmail.com'),
(712, 36961, 1666344250, 'grantlinkz@gmail.com'),
(713, 79278, 1666344283, 'grantlinkz@gmail.com'),
(714, 65582, 1666344313, 'grantlinkz@gmail.com'),
(715, 93251, 1666344333, 'grantlinkz@gmail.com'),
(716, 70728, 1666344363, 'grantlinkz@gmail.com'),
(717, 87050, 1666344390, 'grantlinkz@gmail.com'),
(718, 95263, 1666344418, 'grantlinkz@gmail.com'),
(719, 60699, 1666344432, 'grantlinkz@gmail.com'),
(720, 70449, 1666363904, 'grantlinkz@gmail.com'),
(721, 20247, 1666364024, 'grantlinkz@gmail.com'),
(722, 65706, 1666364078, 'grantlinkz@gmail.com'),
(723, 27906, 1666364219, 'grantlinkz@gmail.com'),
(724, 13700, 1666364231, 'grantlinkz@gmail.com'),
(725, 43771, 1666364475, 'grantlinkz@gmail.com'),
(726, 67144, 1666364488, 'grantlinkz@gmail.com'),
(727, 63365, 1666364689, 'grantlinkz@gmail.com'),
(728, 12142, 1666364780, 'grantlinkz@gmail.com'),
(729, 60875, 1666364991, 'grantlinkz@gmail.com'),
(730, 99437, 1666365076, 'grantlinkz@gmail.com'),
(731, 67580, 1666365362, 'grantlinkz@gmail.com'),
(732, 97375, 1666365467, 'grantlinkz@gmail.com'),
(733, 28412, 1666365811, 'grantlinkz@gmail.com'),
(734, 56253, 1666365913, 'grantlinkz@gmail.com'),
(735, 86169, 1666366275, 'grantlinkz@gmail.com'),
(736, 97751, 1666366288, 'grantlinkz@gmail.com'),
(737, 34611, 1666366412, 'grantlinkz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `coin` varchar(150) NOT NULL,
  `datecreated` varchar(50) NOT NULL,
  `lastdeposit` text NOT NULL,
  `userid` int(20) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `coin`, `datecreated`, `lastdeposit`, `userid`, `balance`) VALUES
(11, 'USDT', '16 Oct 2022, 17:05 PM', '16 Oct 2022, 17:05 PM', 2, '200000.50000125'),
(12, 'XLM', '16 Oct 2022, 17:12 PM', '16 Oct 2022, 17:09 PM', 0, '1683437.9169139'),
(13, 'LTC', '16 Oct 2022, 17:10 PM', '16 Oct 2022, 17:10 PM', 2, ''),
(14, 'BTC', '17 Oct 2022, 15:44 PM', '16 Oct 2022, 17:10 PM', 2, ''),
(15, 'BCH', '17 Oct 2022, 15:10 PM', '17 Oct 2022, 15:10 PM', 2, '1806.43995845'),
(16, 'USDT', '18 Oct 2022, 05:57 AM', '18 Oct 2022, 05:31 AM', 81, '150150'),
(17, 'XLM', '18 Oct 2022, 05:37 AM', '18 Oct 2022, 05:37 AM', 33, '130'),
(18, 'USDT', '18 Oct 2022, 05:56 AM', '18 Oct 2022, 05:38 AM', 33, '100120300200'),
(19, 'XLM', '18 Oct 2022, 05:39 AM', '18 Oct 2022, 05:39 AM', 81, '130'),
(20, 'BTC', '18 Oct 2022, 05:57 AM', '18 Oct 2022, 05:39 AM', 33, '200000300'),
(21, 'BCH', '18 Oct 2022, 05:57 AM', '18 Oct 2022, 05:57 AM', 81, '120'),
(22, 'USDT', '24 Oct 2022, 10:23 AM', '24 Oct 2022, 10:05 AM', 85, '100100100100100');

-- --------------------------------------------------------

--
-- Table structure for table `wire`
--

CREATE TABLE `wire` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `iban` varchar(50) NOT NULL,
  `swiftcode` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `accountholder` varchar(50) NOT NULL,
  `accounttype` varchar(50) NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `datecreated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wire_transfer`
--

CREATE TABLE `wire_transfer` (
  `id` int(11) NOT NULL,
  `userid` varchar(150) NOT NULL,
  `recipientid` varchar(150) NOT NULL,
  `ref` varchar(150) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `accountname` varchar(150) NOT NULL,
  `bankname` varchar(150) NOT NULL,
  `accountnumber` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `amount` varchar(150) NOT NULL,
  `dated` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountname`
--
ALTER TABLE `accountname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_deposit`
--
ALTER TABLE `check_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cryptos`
--
ALTER TABLE `cryptos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_deposits`
--
ALTER TABLE `crypto_deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amount` (`amount`);

--
-- Indexes for table `crypto_withdrawals`
--
ALTER TABLE `crypto_withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `getbank`
--
ALTER TABLE `getbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intltransfer`
--
ALTER TABLE `intltransfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paybill`
--
ALTER TABLE `paybill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payee`
--
ALTER TABLE `payee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`,`lastname`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ukbanks`
--
ALTER TABLE `ukbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usbank`
--
ALTER TABLE `usbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify`
--
ALTER TABLE `verify`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `expires` (`expires`,`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cryptos`
--
ALTER TABLE `cryptos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `crypto_deposits`
--
ALTER TABLE `crypto_deposits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `intltransfer`
--
ALTER TABLE `intltransfer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ukbanks`
--
ALTER TABLE `ukbanks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `usbank`
--
ALTER TABLE `usbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1052;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verify`
--
ALTER TABLE `verify`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=738;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
