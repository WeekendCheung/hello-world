-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-01-04 10:07:35
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `fashionweb`
--

DROP TABLE IF EXISTS `fashionweb`;
CREATE TABLE IF NOT EXISTS `fashionweb` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Thing` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Name`),
  UNIQUE KEY `Name` (`Name`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `fashionweb`
--

INSERT INTO `fashionweb` (`Name`, `Password`, `Email`, `Thing`) VALUES
('weekend', '123456', '123@qq.com', NULL),
('Jack', 'abcdef', 'abc@qq.com', NULL),
('mary', '789abc', 'qqq@126.com', NULL),
('184', '168', '1548@qq.com', NULL),
('mike', 'qwer', '987@qq.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
