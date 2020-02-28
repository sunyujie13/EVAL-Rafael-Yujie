-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-02-28 15:18:44
-- 服务器版本： 10.4.8-MariaDB
-- PHP 版本： 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `sh-auto`
--

-- --------------------------------------------------------

--
-- 表的结构 `invoices`
--

CREATE TABLE `invoices` (
  `id_invoice` int(11) NOT NULL,
  `invoice_number` int(3) NOT NULL,
  `first_name` varchar(70) NOT NULL,
  `last_name` varchar(70) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `city` varchar(70) NOT NULL,
  `telephone` int(11) NOT NULL,
  `siret` varchar(15) NOT NULL,
  `city_invoice` varchar(70) NOT NULL,
  `date_invoice` datetime NOT NULL,
  `police_number` int(6) NOT NULL,
  `car_brand` varchar(70) NOT NULL,
  `car_model` varchar(70) NOT NULL,
  `car_type` varchar(70) NOT NULL,
  `car_serial_number` varchar(45) NOT NULL,
  `car_cv` int(2) NOT NULL,
  `price_letters` varchar(70) NOT NULL,
  `number_key` int(1) NOT NULL,
  `total` decimal(18,2) NOT NULL,
  `reprise` varchar(4) NOT NULL,
  `reprise_number` int(6) NOT NULL,
  `ttc_total` int(6) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `type` enum('0','1') NOT NULL,
  `warranty` int(2) NOT NULL,
  `plate_number` varchar(10) NOT NULL,
  `km` int(6) NOT NULL,
  `car_first_registration` datetime NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `invoices`
--

INSERT INTO `invoices` (`id_invoice`, `invoice_number`, `first_name`, `last_name`, `address`, `postal_code`, `city`, `telephone`, `siret`, `city_invoice`, `date_invoice`, `police_number`, `car_brand`, `car_model`, `car_type`, `car_serial_number`, `car_cv`, `price_letters`, `number_key`, `total`, `reprise`, `reprise_number`, `ttc_total`, `payment_method`, `type`, `warranty`, `plate_number`, `km`, `car_first_registration`, `id_client`) VALUES
(1, 1, 'yujie', 'sun', '3 BUTTE A LA REINE', 91120, 'PALAISEAU', 781794088, '8', 'PALAISEAU', '2020-02-16 00:00:00', 2, 'HONTA', 'civic', '1', '5', 6, '8000', 2, '10000.00', 'non', 0, 120000, 'CB', '1', 3, 'te-898-wy', 8000, '2020-02-25 00:00:00', 0),
(2, 2, 'DEMIS', 'dif', '3 rue de pris', 75050, 'paris', 781794088, '5', 'PALAISEAU', '2020-02-13 00:00:00', 2, 'TOYOTA', 'civic', '1', '5', 6, '8000', 2, '10000.00', 'non', 0, 120000, 'CB', '1', 3, 'ww-898-wy', 92363, '2020-02-14 00:00:00', 0),
(3, 3, 'Karla', 'PEREZ', 'rue de caroline', 75050, 'paris', 781794088, '5', 'ville', '2020-02-07 00:00:00', 2, 'JEEP', 'civic', '1', '5', 8, '6200', 2, '12000.00', 'non', 0, 50000, 'CB', '1', 3, 'te-119-wy', 8000, '2020-02-21 00:00:00', 0),
(4, 4, 'Rafael', 'Fortin', 'rue de renaut', 75050, 'paris', 781794088, 'w', 'paris', '2020-02-18 00:00:00', 2, 'SUZUKI', 'civic', '1', '5', 6, '8000', 2, '12000.00', 'non', 0, 120000, 'CB', '', 3, 'te-119-wy', 8956, '2020-02-21 00:00:00', 0),
(5, 5, 'NICO', 'dif', '3 rue de pris', 75050, 'paris', 781794088, '8', 'PALAISEAU', '2020-02-19 00:00:00', 2, 'RENAULT', 'civic', '2', '5', 4, '8000', 2, '10000.00', 'non', 0, 120000, 'CB', '1', 3, 'ww-898-wy', 92363, '2020-02-20 00:00:00', 0);

--
-- 转储表的索引
--

--
-- 表的索引 `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id_invoice`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
