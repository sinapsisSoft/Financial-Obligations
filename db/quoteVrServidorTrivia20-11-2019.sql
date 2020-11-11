-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2019 at 01:09 PM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote`
--
CREATE DATABASE IF NOT EXISTS `quote` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `quote`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `insert_pre_quote`$$
$$

DROP PROCEDURE IF EXISTS `sp_client_active`$$
$$

DROP PROCEDURE IF EXISTS `sp_client_insert`$$
$$

DROP PROCEDURE IF EXISTS `sp_client_insert_update`$$
CREATE DEFINER=`cpses_k1d7nuq087`@`localhost` PROCEDURE `sp_client_insert_update` (IN `name` VARCHAR(100), IN `identification` VARCHAR(15), IN `address` VARCHAR(200), IN `tel` VARCHAR(10), IN `email` VARCHAR(320), IN `contactName` VARCHAR(100), IN `contactTitle` VARCHAR(100), IN `contactTel` VARCHAR(10), IN `contactCel` VARCHAR(15), IN `contactEmail` VARCHAR(320), IN `stat` INT, IN `id` INT)  BEGIN
	SET @exist = (SELECT COUNT(Client_id)FROM client WHERE Client_id = id); 
    IF @exist = 0 THEN 
		INSERT INTO client (Client_name, Client_identification, Client_address, Client_tel, Client_email, Client_contactName, Client_contactTitle, Client_contactTel, Client_contactCel, Client_contactEmail, Stat_id) VALUES (name, identification, address, tel, email, contactName, contactTitle, contactTel, contactCel, contactEmail, stat);
    ELSE
    	UPDATE client SET Client_identification = identification, Client_name = name, Client_address = address, Client_tel = tel, Client_email = email, Client_contactName = contactName, Client_contactTitle = contactTitle, Client_contactTel = contactTel, Client_contactCel = contactCel, Client_contactEmail = contactEmail, Stat_id = stat
        WHERE Client_id = id;
    END IF;
    SELECT ROW_COUNT();
END$$

DROP PROCEDURE IF EXISTS `sp_client_select_all`$$
$$

DROP PROCEDURE IF EXISTS `sp_client_select_identification`$$
$$

DROP PROCEDURE IF EXISTS `sp_client_select_one`$$
$$

DROP PROCEDURE IF EXISTS `sp_client_select_search`$$
$$

DROP PROCEDURE IF EXISTS `sp_client_update_status`$$
$$

DROP PROCEDURE IF EXISTS `sp_clone_client_quote`$$
$$

DROP PROCEDURE IF EXISTS `sp_costing_insert_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_costing_select_one`$$
$$

DROP PROCEDURE IF EXISTS `sp_costing_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_delete_client_quote`$$
$$

DROP PROCEDURE IF EXISTS `sp_element_insert`$$
$$

DROP PROCEDURE IF EXISTS `sp_element_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_get_code_quote`$$
$$

DROP PROCEDURE IF EXISTS `sp_get_pre_code_quote`$$
$$

DROP PROCEDURE IF EXISTS `sp_login`$$
$$

DROP PROCEDURE IF EXISTS `sp_login_insert`$$
$$

DROP PROCEDURE IF EXISTS `sp_login_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_pre_client_insert_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_Pre_client_select`$$
$$

DROP PROCEDURE IF EXISTS `sp_pre_quote_insert_upate`$$
$$

DROP PROCEDURE IF EXISTS `sp_pre_quote_select_all`$$
$$

DROP PROCEDURE IF EXISTS `sp_pre_quote_select_one`$$
$$

DROP PROCEDURE IF EXISTS `sp_pre_quote_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_active`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_insert`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_insert_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_select_all`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_select_identification`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_select_one`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_select_prov`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_select_search`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_provider_update_status`$$
$$

DROP PROCEDURE IF EXISTS `sp_quote_create_pdf`$$
$$

DROP PROCEDURE IF EXISTS `sp_quote_insert_upate`$$
$$

DROP PROCEDURE IF EXISTS `sp_quote_select_all`$$
$$

DROP PROCEDURE IF EXISTS `sp_quote_select_one`$$
$$

DROP PROCEDURE IF EXISTS `sp_quote_select_status`$$
$$

DROP PROCEDURE IF EXISTS `sp_quote_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_quote_update_status`$$
$$

DROP PROCEDURE IF EXISTS `sp_user_insert_update`$$
$$

DROP PROCEDURE IF EXISTS `sp_user_select_active`$$
$$

DROP PROCEDURE IF EXISTS `sp_user_select_one`$$
$$

DROP PROCEDURE IF EXISTS `sp_user_validation`$$
$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `Client_id` int(11) NOT NULL,
  `Client_name` varchar(100) NOT NULL,
  `Client_identification` varchar(15) NOT NULL,
  `Client_address` varchar(200) NOT NULL,
  `Client_tel` varchar(10) NOT NULL,
  `Client_email` varchar(320) NOT NULL,
  `Client_contactName` varchar(100) NOT NULL,
  `Client_contactTitle` varchar(100) NOT NULL,
  `Client_contactTel` varchar(10) NOT NULL,
  `Client_contactCel` varchar(15) NOT NULL,
  `Client_contactEmail` varchar(320) NOT NULL,
  `Stat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client_id`, `Client_name`, `Client_identification`, `Client_address`, `Client_tel`, `Client_email`, `Client_contactName`, `Client_contactTitle`, `Client_contactTel`, `Client_contactCel`, `Client_contactEmail`, `Stat_id`) VALUES
(12, 'LICEO DE COLOMBIA', '830.081.422-2', 'Cl. 219 #50-30', '6760585', 'comunicaciones@lcb.edu.co', 'Jennifer Vásquez', 'Coordinadora de Comunicaciones', '112', '3014260307', 'comunicaciones@lcb.edu.co', 8);

-- --------------------------------------------------------

--
-- Table structure for table `costing`
--

DROP TABLE IF EXISTS `costing`;
CREATE TABLE `costing` (
  `Cost_id` int(11) NOT NULL,
  `Quo_id` int(11) NOT NULL,
  `Cost_totalValue` decimal(14,2) NOT NULL,
  `Cost_pagValue` decimal(14,2) NOT NULL,
  `Cost_impQuantity` int(5) NOT NULL,
  `Cost_impValue` decimal(14,2) NOT NULL,
  `Cost_phoQuantity` int(5) NOT NULL,
  `Cost_phoValue` decimal(14,2) NOT NULL,
  `Cost_issnQuantity` int(5) NOT NULL,
  `Cost_issnValue` decimal(14,2) NOT NULL,
  `Cost_sendQuantity` int(5) NOT NULL,
  `Cost_sendValue` decimal(14,2) NOT NULL,
  `Cost_stuQuantity` decimal(5,2) NOT NULL,
  `Cost_stuValue` decimal(14,2) NOT NULL,
  `Cost_perQuantity` int(5) NOT NULL,
  `Cost_perValue` decimal(14,2) NOT NULL,
  `Cost_daysQuantity` decimal(5,2) NOT NULL,
  `Cost_daysValue` decimal(14,2) NOT NULL,
  `Cost_admin` int(5) NOT NULL,
  `Cost_incid` int(5) NOT NULL,
  `Cost_utili` int(5) NOT NULL,
  `Cost_finalValue` decimal(14,2) NOT NULL,
  `Cost_attach` varchar(400) NOT NULL,
  `Cost_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costing`
--

INSERT INTO `costing` (`Cost_id`, `Quo_id`, `Cost_totalValue`, `Cost_pagValue`, `Cost_impQuantity`, `Cost_impValue`, `Cost_phoQuantity`, `Cost_phoValue`, `Cost_issnQuantity`, `Cost_issnValue`, `Cost_sendQuantity`, `Cost_sendValue`, `Cost_stuQuantity`, `Cost_stuValue`, `Cost_perQuantity`, `Cost_perValue`, `Cost_daysQuantity`, `Cost_daysValue`, `Cost_admin`, `Cost_incid`, `Cost_utili`, `Cost_finalValue`, `Cost_attach`, `Cost_description`) VALUES
(13, 14, '13600000.00', '32000.00', 3, '260.00', 0, '250000.00', 0, '72800.00', 0, '20000.00', '0.00', '31200.00', 0, '42000.00', '0.00', '0.00', 10, 10, 10, '21707706.00', 'COT_14.pdf', ''),
(14, 15, '10000000.00', '32000.00', 3, '260.00', 0, '250000.00', 0, '72800.00', 0, '20000.00', '0.00', '31200.00', 0, '42000.00', '0.00', '0.00', 10, 10, 10, '18107706.00', 'COT_15.pdf', ''),
(15, 16, '450000.00', '50000.00', 3, '260.00', 0, '250000.00', 0, '72800.00', 0, '20000.00', '0.00', '31200.00', 0, '42000.00', '0.00', '0.00', 10, 10, 10, '2717708.00', 'COT_16.pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

DROP TABLE IF EXISTS `element`;
CREATE TABLE `element` (
  `Elem_id` int(11) NOT NULL,
  `Elem_name` varchar(100) NOT NULL,
  `Elem_cost` decimal(14,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `element`
--

INSERT INTO `element` (`Elem_id`, `Elem_name`, `Elem_cost`) VALUES
(1, 'Páginas', '42000.0000'),
(2, 'Impresiones', '260.0000'),
(3, 'Fotografía', '250000.0000'),
(4, 'ISSN', '72800.0000'),
(5, 'Envío', '20000.0000'),
(6, 'Fotografía Estudios', '31200.0000'),
(7, 'Viáticos', '42000.0000'),
(8, 'Estudios de once', '31200.0000'),
(9, 'Días fotografía', '120500.0000');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `Login_id` int(11) NOT NULL,
  `Login_password` varchar(30) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_id`, `Login_password`, `User_id`) VALUES
(1, 'lina123', 1),
(4, 'Michel123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pre_client`
--

DROP TABLE IF EXISTS `pre_client`;
CREATE TABLE `pre_client` (
  `Pre_client_id` int(11) NOT NULL,
  `Pre_client_name` varchar(100) NOT NULL,
  `Pre_client_identification` varchar(15) NOT NULL,
  `Pre_client_address` varchar(200) NOT NULL,
  `Pre_client_tel` varchar(10) NOT NULL,
  `Pre_client_email` varchar(320) NOT NULL,
  `Pre_client_contactName` varchar(100) NOT NULL,
  `Pre_client_contactTitle` varchar(100) NOT NULL,
  `Pre_client_contactTel` varchar(10) NOT NULL,
  `Pre_client_contactCel` varchar(15) NOT NULL,
  `Pre_client_contactEmail` varchar(320) NOT NULL,
  `Stat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pre_quote`
--

DROP TABLE IF EXISTS `pre_quote`;
CREATE TABLE `pre_quote` (
  `Pre_quo_id` int(11) NOT NULL,
  `Pre_client_id` int(11) NOT NULL,
  `Pre_quo_consec` varchar(15) DEFAULT NULL,
  `Pre_quo_calendar` varchar(1) NOT NULL DEFAULT 'A',
  `Pre_quo_date` date NOT NULL,
  `Pre_quo_project` varchar(100) NOT NULL,
  `Pre_quo_year` varchar(20) NOT NULL,
  `Pre_quo_version` varchar(11) NOT NULL,
  `Pre_quo_students` varchar(11) NOT NULL DEFAULT '0',
  `Pre_quo_quantity` varchar(11) NOT NULL,
  `Pre_quo_width` varchar(20) NOT NULL,
  `Pre_quo_height` varchar(20) NOT NULL,
  `Pre_quo_format` varchar(40) NOT NULL,
  `Pre_quo_color` varchar(100) NOT NULL,
  `Pre_quo_colorPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Pre_quo_colorWeight` varchar(100) NOT NULL DEFAULT '115',
  `Pre_quo_bw` varchar(100) NOT NULL,
  `Pre_quo_bwPaper` varchar(100) DEFAULT 'Propalcote',
  `Pre_quo_bwWeight` varchar(100) NOT NULL DEFAULT '115',
  `Pre_quo_inserts` varchar(40) NOT NULL,
  `Pre_quo_guards` varchar(100) NOT NULL DEFAULT '2',
  `Pre_quo_guardsPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Pre_quo_guardsWeight` varchar(100) NOT NULL DEFAULT '150',
  `Pre_quo_cover` varchar(100) NOT NULL DEFAULT '2',
  `Pre_quo_coverPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Pre_quo_coverWeight` varchar(100) NOT NULL DEFAULT '150',
  `Pre_quo_top` varchar(40) NOT NULL,
  `Pre_quo_coverFinish` varchar(40) NOT NULL,
  `Pre_quo_plast` varchar(40) NOT NULL,
  `Pre_quo_correction` varchar(40) NOT NULL DEFAULT 'No',
  `Pre_quo_issn` varchar(40) NOT NULL DEFAULT 'No',
  `Pre_quo_observ` varchar(400) NOT NULL,
  `Pre_quo_delivDate` date NOT NULL,
  `Pre_quo_delivPlace` varchar(200) NOT NULL,
  `Stat_id` int(11) NOT NULL,
  `Pre_quo_pageTotal` varchar(100) NOT NULL,
  `Pre_quo_inser` varchar(100) NOT NULL,
  `Pre_quo_inserPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Pre_quo_inserWeight` varchar(100) NOT NULL DEFAULT '90'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

DROP TABLE IF EXISTS `provider`;
CREATE TABLE `provider` (
  `Pro_id` int(11) NOT NULL,
  `Pro_name` varchar(100) NOT NULL,
  `Pro_identification` varchar(15) NOT NULL,
  `Pro_tel` varchar(10) NOT NULL,
  `Pro_address` varchar(200) NOT NULL,
  `Pro_contactName` varchar(100) NOT NULL,
  `Pro_contactEmail` varchar(320) NOT NULL,
  `Pro_attach` varchar(300) DEFAULT NULL,
  `Stat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`Pro_id`, `Pro_name`, `Pro_identification`, `Pro_tel`, `Pro_address`, `Pro_contactName`, `Pro_contactEmail`, `Pro_attach`, `Stat_id`) VALUES
(1, 'Proveedor Administrador', '1', '1111112', '', 'Grupo Trivia', 'diseno@grupotrivia.co', '1.pdf', 8),
(2, 'Panamericana Formas e Impresos', '800175457-5', '4302110', 'Calle 65 # 95-28 ', 'Claudia Moreno ', 'diseno@grupotrivia.co', '800175457-5.pdf', 8);

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

DROP TABLE IF EXISTS `quote`;
CREATE TABLE `quote` (
  `Quo_id` int(11) NOT NULL,
  `Client_id` int(11) NOT NULL,
  `Quo_consec` varchar(15) DEFAULT NULL,
  `Quo_calendar` varchar(1) NOT NULL DEFAULT 'A',
  `Quo_date` date NOT NULL,
  `Quo_project` varchar(100) NOT NULL,
  `Quo_year` varchar(20) NOT NULL,
  `Quo_version` varchar(11) NOT NULL,
  `Quo_students` varchar(11) NOT NULL DEFAULT '0',
  `Quo_quantity` varchar(11) NOT NULL,
  `Quo_width` varchar(20) NOT NULL,
  `Quo_height` varchar(20) NOT NULL,
  `Quo_format` varchar(40) NOT NULL,
  `Quo_color` varchar(100) NOT NULL,
  `Quo_colorPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Quo_colorWeight` varchar(100) NOT NULL DEFAULT '115',
  `Quo_bw` varchar(100) NOT NULL,
  `Quo_bwPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Quo_bwWeight` varchar(100) NOT NULL DEFAULT '115',
  `Quo_inserts` varchar(40) NOT NULL,
  `Quo_guards` varchar(100) NOT NULL DEFAULT '2',
  `Quo_guardsPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Quo_guardsWeight` varchar(100) NOT NULL DEFAULT '150',
  `Quo_cover` varchar(100) NOT NULL DEFAULT '2',
  `Quo_coverPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Quo_coverWeight` varchar(100) NOT NULL DEFAULT '150',
  `Quo_top` varchar(40) NOT NULL,
  `Quo_coverFinish` varchar(40) NOT NULL,
  `Quo_plast` varchar(40) NOT NULL,
  `Quo_correction` varchar(40) NOT NULL DEFAULT 'No',
  `Quo_issn` varchar(40) NOT NULL DEFAULT 'No',
  `Quo_observ` varchar(400) NOT NULL,
  `Quo_delivDate` date NOT NULL,
  `Quo_delivPlace` varchar(200) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Pro_id` int(11) NOT NULL,
  `Stat_id` int(11) NOT NULL,
  `Quo_pageTotal` varchar(100) NOT NULL,
  `Quo_inser` varchar(100) NOT NULL,
  `Quo_inserPaper` varchar(100) NOT NULL DEFAULT 'Propalcote',
  `Quo_inserWeight` varchar(100) NOT NULL DEFAULT '90'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`Quo_id`, `Client_id`, `Quo_consec`, `Quo_calendar`, `Quo_date`, `Quo_project`, `Quo_year`, `Quo_version`, `Quo_students`, `Quo_quantity`, `Quo_width`, `Quo_height`, `Quo_format`, `Quo_color`, `Quo_colorPaper`, `Quo_colorWeight`, `Quo_bw`, `Quo_bwPaper`, `Quo_bwWeight`, `Quo_inserts`, `Quo_guards`, `Quo_guardsPaper`, `Quo_guardsWeight`, `Quo_cover`, `Quo_coverPaper`, `Quo_coverWeight`, `Quo_top`, `Quo_coverFinish`, `Quo_plast`, `Quo_correction`, `Quo_issn`, `Quo_observ`, `Quo_delivDate`, `Quo_delivPlace`, `User_id`, `Pro_id`, `Stat_id`, `Quo_pageTotal`, `Quo_inser`, `Quo_inserPaper`, `Quo_inserWeight`) VALUES
(14, 12, 'COT_14', 'A', '2019-11-13', 'Agenda', '2019', '1', '0', '800', '', '', 'Cuadrado', '8', 'Propalcote', '150', '160', 'Bond', '90', 'Si', '2', 'Propalcote', '150', '2', 'Propalcote', '220', 'Dura', 'Brillo uv', 'Mate', 'No', 'Si', 'Portada troquelada con dobles e imán ', '2020-02-08', 'Calle 219 No. 50 - 30', 1, 2, 3, '190', '9', 'Propalcote', '150'),
(15, 12, 'COT_15', 'A', '2019-11-14', 'Agenda', '2019', '2', '0', '800', '21', '24', 'Horizontal', '8', 'Propalcote', '150', '160', 'Bond', '90', 'Si', '2', 'Propalcote', '150', '2', 'Propalcote', '90', 'Dura', 'Brillo uv', 'Mate', 'No', 'Si', '', '2020-01-08', 'Calle 219 No. 50 - 30', 1, 2, 3, '190', '9', 'Propalcote', '150'),
(16, 12, 'COT_16', 'A', '2019-11-14', 'Libro', '2019', '1', '0', '150', '21', '24', 'Vertical', '0', 'Bond', '90', '32', 'Bond', '90', 'No', '0', 'Propalcote', '150', '2', 'Propalcote', '90', 'Rústica', 'Brillo uv', 'Mate', 'No', 'No', 'Planeador', '2020-01-08', 'Calle 219 No. 50 - 30', 1, 2, 3, '34', '0', 'Bond', '90');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `Stat_id` int(11) NOT NULL,
  `Stat_name` varchar(30) NOT NULL,
  `Type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Stat_id`, `Stat_name`, `Type_id`) VALUES
(1, 'Precotizado', 2),
(2, 'Iniciado', 2),
(3, 'Tránsito', 2),
(4, 'Aprobado', 2),
(5, 'Anulado', 2),
(6, 'Activo', 1),
(7, 'Inactivo', 1),
(8, 'Activo', 3),
(9, 'Inactivo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `status_type`
--

DROP TABLE IF EXISTS `status_type`;
CREATE TABLE `status_type` (
  `Type_id` int(11) NOT NULL,
  `Type_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_type`
--

INSERT INTO `status_type` (`Type_id`, `Type_name`) VALUES
(1, 'Usuario'),
(2, 'Cotización'),
(3, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `User_name` varchar(80) NOT NULL,
  `User_identification` varchar(15) NOT NULL,
  `User_email` varchar(320) NOT NULL,
  `User_title` varchar(30) NOT NULL,
  `User_telephone` varchar(15) NOT NULL,
  `Stat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_name`, `User_identification`, `User_email`, `User_title`, `User_telephone`, `Stat_id`) VALUES
(1, 'Lina Cortés', '1000000000', 'diseno@grupotrivia.co', 'Grupo Trivia', '1111112', 6),
(3, 'Michel van Hissenhoven', '80414718', 'gerencia@grupotrivia.co', 'Gerencia General', '3108749179', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client_id`),
  ADD KEY `status_client` (`Stat_id`);

--
-- Indexes for table `costing`
--
ALTER TABLE `costing`
  ADD PRIMARY KEY (`Cost_id`),
  ADD KEY `quote_costing` (`Quo_id`);

--
-- Indexes for table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`Elem_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_id`),
  ADD KEY `user_login` (`User_id`);

--
-- Indexes for table `pre_client`
--
ALTER TABLE `pre_client`
  ADD PRIMARY KEY (`Pre_client_id`),
  ADD KEY `status_Pre_client` (`Stat_id`);

--
-- Indexes for table `pre_quote`
--
ALTER TABLE `pre_quote`
  ADD PRIMARY KEY (`Pre_quo_id`),
  ADD KEY `client_Pre_quote` (`Pre_client_id`),
  ADD KEY `status_Pre_quote` (`Stat_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`Pro_id`),
  ADD KEY `status_provider` (`Stat_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`Quo_id`),
  ADD KEY `client_quote` (`Client_id`),
  ADD KEY `status_quote` (`Stat_id`),
  ADD KEY `user_quote` (`User_id`),
  ADD KEY `provider_quote` (`Pro_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Stat_id`),
  ADD KEY `type_status` (`Type_id`);

--
-- Indexes for table `status_type`
--
ALTER TABLE `status_type`
  ADD PRIMARY KEY (`Type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `unique_identification` (`User_identification`),
  ADD KEY `user_status` (`Stat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `costing`
--
ALTER TABLE `costing`
  MODIFY `Cost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `element`
--
ALTER TABLE `element`
  MODIFY `Elem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pre_client`
--
ALTER TABLE `pre_client`
  MODIFY `Pre_client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pre_quote`
--
ALTER TABLE `pre_quote`
  MODIFY `Pre_quo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `Pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `Quo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status_type`
--
ALTER TABLE `status_type`
  MODIFY `Type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `status_client` FOREIGN KEY (`Stat_id`) REFERENCES `status` (`Stat_id`);

--
-- Constraints for table `costing`
--
ALTER TABLE `costing`
  ADD CONSTRAINT `quote_costing` FOREIGN KEY (`Quo_id`) REFERENCES `quote` (`Quo_id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `user_login` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `pre_quote`
--
ALTER TABLE `pre_quote`
  ADD CONSTRAINT `pre_quote_client` FOREIGN KEY (`Pre_client_id`) REFERENCES `pre_client` (`Pre_client_id`),
  ADD CONSTRAINT `pre_quote_status` FOREIGN KEY (`Stat_id`) REFERENCES `status` (`Stat_id`);

--
-- Constraints for table `provider`
--
ALTER TABLE `provider`
  ADD CONSTRAINT `status_provider` FOREIGN KEY (`Stat_id`) REFERENCES `status` (`Stat_id`);

--
-- Constraints for table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `quote_ibfk_1` FOREIGN KEY (`Client_id`) REFERENCES `client` (`Client_id`),
  ADD CONSTRAINT `quote_ibfk_2` FOREIGN KEY (`Pro_id`) REFERENCES `provider` (`Pro_id`),
  ADD CONSTRAINT `quote_ibfk_3` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `type_status` FOREIGN KEY (`Type_id`) REFERENCES `status_type` (`Type_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_status` FOREIGN KEY (`Stat_id`) REFERENCES `status` (`Stat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
