-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 06:46 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_city`
--
CREATE DATABASE IF NOT EXISTS `smart_city` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `smart_city`;
-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(4) NOT NULL,
  `User` varchar(15) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(350) NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `User`, `Title`, `Description`, `Time`) VALUES
(1, 'Ganesh', 'Trade shows at CODISSIA draw crowd', 'The two-day Living Spaces and Auto Expo 2017 that were inaugurated at the CODISSIA Trade Fair Complex here on Saturday showcase a range of property projects in the city, and also luxury cars and super bikes.', '08:28:00'),
(2, 'Major', 'Rain turns city roads into a nightmare', 'The recent rain brought relief to the residents as the temperatures came down, water level rose and the city’s tanks saw some water. But the city’s roads were battered - those that saw the execution of underground drainage works and also the other roads.', '19:13:12'),
(3, 'Gokul', '‘Be prepared to face monsoon’', 'The district administration has asked the departments concerned to ensure that adequate measures were in place to face the ensuing north-east monsoon.', '05:21:36'),
(4, 'Arun', '348.85 acres of Panchami lands identified', 'The district administration has identified 348.85 acres of Panchami lands occupied by people other than those belonging to the Scheduled Castes in contravention to the conditions for allotment of such lands.', '16:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `bloods`
--

CREATE TABLE `bloods` (
  `Register_id` int(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Location` varchar(35) NOT NULL,
  `Mobile` bigint(10) NOT NULL,
  `Blood_Group` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloods`
--

INSERT INTO `bloods` (`Register_id`, `Name`, `Location`, `Mobile`, `Blood_Group`) VALUES
(1, 'Ganesh', 'Sowripalayam', 9994463572, 'B+ve'),
(2, 'Gokul', 'Selam', 9876543210, 'AB+ve'),
(3, 'Aravind', 'Saravanampatti', 9994433162, 'AB+ve');

-- --------------------------------------------------------

--
-- Table structure for table `bus_route`
--

CREATE TABLE `bus_route` (
  `Route_No` varchar(6) NOT NULL,
  `Source` text NOT NULL,
  `Destination` text NOT NULL,
  `Via` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_route`
--

INSERT INTO `bus_route` (`Route_No`, `Source`, `Destination`, `Via`) VALUES
('1', 'MARUTHAMALAI', 'AVARAMPALAYAM', 'VADAVALLI, RAILWAY STATION, GANDHIPURAM'),
('100', 'CHERAN MAA NAGAR', 'CHERAN MAA NAGAR', ''),
('101', 'GANDHIPURAM', 'KUMITIPATHY(HALT)', ' MARAKADAI, UKKADAM, KUNIYAMUTHUR, MADUKKARAI'),
('101B', 'GANDHIPURAM', 'KUMITIPATHY/APPACHI GOUNDENPATHY', ' MARAKADAI, UKKADAM, KUNIYAMUTHUR, MADUKKARAI\r\n'),
('102B', 'GANDHIPURAM', ' KARAMADAI/PETTATHAPURAM', ' TVS, NEW BS, KOUDAMPALAYAM, THUDIYALUR, PERIANAICKEN PALAYAM'),
('104', 'UKKADAM', ' KARAMADAI', ' TVS, NEW BS, KOUDAMPALAYAM, THUDIYALUR, PERIANAICKEN PALAYAM'),
('107', 'GANDHIPURAM', 'KUPICHIPALAYAM/GKD SCHOOL', 'SIVANANDA COLONY, NEW BS, KOUDAMPALAYAM, THUDIYALUR'),
('108A', 'SIHS COLONY', ' KOVAIPUDUR/ARIVOZHI NAGAR', ''),
('109', 'GANDHIPURAM', ' PERRIAKULI(HALT)/SINGANALLUR(CUT)', ' LAKSHMI MILLS, PEELAMEDU, ESI, SINGANALLUR, ONDIPUDUR'),
('10B', 'IRUGUR/SIHS COLONY', 'SAIBABA COLONY', 'ONDIPUDUR/SINGANALLUR, ESI, PEELAMEDU, LAKSHMI MILLS, GANDIPURAM, TVS'),
('10C', 'SAIBABA COLONY', 'KALAPATTY/SITRA', ' TVS, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU, CIT, KMCH'),
('10D', 'SAIBABA COLONY', 'CHINNIYAMPALAYAM', 'TVS, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU, CIT, KMCH\r\n1\r\n60\r\n05:30:00 AM\r\n 10 D\r\nVADAVALLI\r\n CHINNIYAMPALAYAM'),
('11', 'VADAVALLI', ' CHINNIYAMPALAYAM', ''),
('11H', 'RAILWAY STATION', 'KANUVAI', 'FLOWER MARKET, TVS, SAIBABA COLONY, VENKITAPURAM, IDAYARPALAYAM'),
('110A', 'RAILWAY STATION', ' RAILWAY STATION', 'GANDHIPURAM, ROOTS, KOUMDAMPALAYAM, IDAYARPALAYAM, SAIBABA COLONY, FLOWER MARKET'),
('110B', 'SAIBABA COLONY/RATHINAPURI\r\n', 'KURUMBAPALAYAM', ' GANDHIPURAM, MARAKADAI, UKKADAM, MADUKARAI MARKET\r\n1\r\n60\r\n06:15:00 AM\r\n 110B\r\nPSG ARTS/ESI\r\n KURUMBAPALAYAM'),
('111', 'PSG ARTS/ESI\r\n', 'KURUMBAPALAYAM', ''),
('113', 'GANDHIPURAM', 'GANDHIPURAM', 'GANAPATHY, SARAVANAMPATTI, KCT/CTS/ROBERT BOSCH, THUDIYALUR, SIVANANDHA COLONY'),
('115', 'ONDIPUDUR', ' KEERANATHAM(HALT)', 'SINGANALLUR, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM,\r\n1\r\n70\r\n05:20:00 AM\r\n115\r\nGANDHIPURAM\r\n GANDHIPURAM(EXP)'),
('115A', 'GANDHIPURAM', 'GANDHIPURAM(EXP)', ''),
('117', 'GANDHIPURAM\r\n', ' GANDHIPURAM(EXP)', ''),
('118', 'GANDHIPURAM\r\n', ' GANDHIPURAM(EXP)', ''),
('122', 'GANDHIPURAM\r\n', ' GANDHIPURAM(EXP)', ''),
('124', 'Ukkadam\r\n', ' Ukkadam \r\n', 'New Bus Stand, Gandhipuram, Singanallur'),
('26A', 'Gandhipuram\r\n ', ' Perianaickenpalayam \r\n', 'Sivananda Colony, New Bus Stand, Goundanpalayam, Thudialur, Narasimha Mills'),
('11B', 'UKKADAM\r\n ', 'ANUVAVI SUBRAMANYA TEMPLE \r\n', 'RAILWAY STATION, GANDHIPURAM, SIVANANDA COLONY, THUDIYALUR, PALANI GOUNDEN PUDUR'),
('11C', 'RAILWAY STATION\r\n\r\n', ' VERRAPANDI PUDUR \r\n', 'FLOWER MARKET, TVS'),
('11D', 'UKKADAM\r\n\r\n', ' KURUMBAPALAYAM/CHINNATHADAGAM ', 'GANDHIPURAM, GANAPATHY, SARAVANAMPATTI/TVS,'),
('11D', 'RAILWAY STATION\r\n \r\n', 'SOMAYAMPALYAM/KANUVAI ', 'REFER 11 ROUTE'),
('11E', 'RAILWAY STATION\r\n \r\n', 'CHINNA THADAGAM/KALV', ''),
('11F', 'RAILWAY STATION\r\n\r\n', ' RAILWAY STATION \r\n', 'SHOULD BE REVERSE OF 11H'),
('11K', 'RAILWAY STATION\r\n', ' THADAGAM(EXP) ', '\r\n11 ROUTE EXTENSION TO THADAGAM'),
('120', 'MARUTHAMALAI\r\n', ' PREMIER NAGAR \r\n', 'SAIBABA COLONY'),
('145', 'NEW BUS STAND\r\n ', 'SINGANALLUR \r\n', 'SIVANANDA COLONY, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU, ESI'),
('12E', 'TOWN HALL\r\n ', 'VELANDAVALAM\r\n', ' UKKADAM, ATHUPALAM, KUNIYAMUTHUR, MADUKARAI, ETTIMADAI'),
('12F', 'MYLERIPALAYAM\r\n ', 'GANDHIPURAM/NEHRU NAGAR(VIA ESI)\r\n ', 'SIDCO, EACHANRI, SUNDARAPURAM, ATHUPALAM, UKKADAM, RAILWAY STATION\r\n'),
('12H', 'GANDHI MAA NAGAR\r\n', ' SIDCO/MADUKARAI MARKET\r\n', ' GANAPATHY, GANDHIPURAM, RAILWAY STATION, UKKADAM, SUNDARAPURAM'),
('130', 'UKKADAM\r\n', ' GANDHIPURAM(SLF)\r\n ', 'PRAKASAM, TOWN HALL, RAILWAY STATION, KG, PARK GATE, MOFFUSIL BUS STAND'),
('135', 'UKKADAM\r\n', ' NEW BUS STAND\r\n ', '130 ROUTE TILL GANDHIPURAM, SIVANANDA COLONY'),
('13A', 'VEDAPATTI\r\n', ' UKKADAM/KULATHUR\r\n ', 'GANDHIPARK'),
('14', 'GANDHIPURAM\r\n ', 'NG PUDUR/KALIAMANGALAM', ''),
('140', 'SINGANALLUR\r\n', ' GANDHIPURAM ESI, \r\n', ' HOPES COLLEGE, PEELAMEDU, PSG TECH, NAVA INDIA, LAKSHMI MILLS'),
('145', 'SINGANALLUR\r\n', ' NEW BUS STAND\r\n ', '140 ROUTE TILL GANDHIPURAM, SIVANADA COLONY'),
('155', 'Singanallur\r\n ', 'New Bus Stand \r\n', ' Poo Market'),
('14A', 'GANDHIPURAM\r\n', ' SEMMEDU\r\n', ' RAILWAY STATION, SELVAPURAM, PERUR, MADAMPATTI, KOVAI KONDATTAM'),
('14B', 'RAILWAY STATION\r\n ', 'PERUMAL KOIL PATHY/MOLAPALAYAM', ''),
('14C', 'GANDHIPURAM\r\n', ' ALANDURAI/NALLUR VAYAL\r\n', ' RAILWAY STATION, SELVAPURAM, PERUR, MADAMPATTI, KOVAI KONDATTAM'),
('14D', 'GANDHIPURAM\r\n ', 'ISHA YOGA CENTER/KOVAIPUDUR\r\n', ' RAILWAY STATION, UKKADAM, KUNIYAMUTHUR, KOVAI PUDUR'),
('15', 'SIVANANDHA MILLS\r\n', ' KUNIYAMUTHUR\r\n', ' SARAVANAMPATTY, GANAPATHY, GANDHIPURAM, UKKADAM, ATHUPALAM'),
('150', 'GANDHIPURAM\r\n ', 'NEW BUS STAND \r\n', 'GP, 100 FEET ROAD, SIVANANDA COLONY, SAIBABA TEMPLE'),
('15B', 'GANDHIPURAM\r\n ', 'CHINNA VEDAMPATTI/ANJUGAM NAGAR', ''),
('15D', 'UKKADAM\r\n ', 'MANIYAKARAN PALAYAM\r\n', ' RAILWAY STATION, GANDIPURAM, GANAPATHY'),
('16', 'EDAYARPALAYAM\r\n ', 'AIR PORT(BRINDAVAN NAGAR)', ''),
('16C', 'TELUNGUPALAYAM\r\n', ' KALAPATTY/ONDIPUDUR SELVAPURAM,\r\n ', 'RAILWAY STATION, PEELAMEDU/RAMANATHAPURAM'),
('18', 'RATHINAPURI\r\n', ' VAZHUKUPARAI/PALADU ', '\r\nGANDHIPURAM, MADUKARAI, UKKADAM, MADUKARAI'),
('19', 'UKKADAM\r\n', ' NANJUNDAPURAM\r\n ', 'TOWN HALL, GH, AIR INDIA, SUNGAM, RAMANATHAPURAM'),
('19A', 'SAIBABA COLONY\r\n ', 'VELLALORE', ''),
('19B', 'UKKADAM\r\n', ' SULUR AERO\r\n', ' TOWN HALL, GH, AIR INDIA, SUNGAM, RAMANATHAPURAM, SINGANALLUR, ONDIPUDUR'),
('19C', 'GANDHIPURAM\r\n ', 'KOMBEKATTU PUDUR/COLTONPET\r\n', ' GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU, ESI, SINGANALLUR, ONDIPUDUR, PAPAMBATTI'),
('19D', 'GANDHIPURAM\r\n', ' APPANAIKEN PATTI PUDUR \r\n', 'SIMILAR TO 19C'),
('19E', 'UKKADAM\r\n APPANAIKEN PATTI PUDUR \r\nTOWN HALL, GH, AIR INDIA, SUNGAM, RAMANATHAPURAM, SINGANALLUR, ONDIPUDUR', '', ''),
('1A', 'VADAVALLI\r\n', ' ONDIPUDUR\r\n ', 'PN PUDUR, AGRI UNIVERSITY, LAWLEY ROAD, GANDHIPURAM, RAILWAY STATION, SUNGAM'),
('1D', 'MARUTHAMALAI\r\n', ' ONDIPUDUR\r\n', ' VADAVALLI, LAWLEY ROAD, GANDHIPARK, GANDHIPURAM'),
('1C', 'MARUTHAMALAI/VADAVALLI\r\n', ' ONDIPUDUR\r\n', ' PN PUDUR, LAWLEY ROAD, GANDHIPARK, RAILWAYSTATION, GH, SUNGAM, RAMANATHAPURAM, BOAT HOUSE'),
('1E', 'MARUTHAMALAI\r\n', ' ONDIPUDUR \r\n', '1C ROUTE TILL GANDHI PARK, FROM GANDHIPRAM 1A ROUTE'),
('1B', 'MARUTHAMALAI\r\n', ' ONDIPUDUR/GANDHIPUAM \r\n', '1A ROUTE TILL LAWLEY ROAD, GANDHIPARK THEN 1D ROUTE'),
('2', 'POLYTECHNIC(AIR PORT)\r\n ', 'PERUR\r\n', ' KMCH, GOLDWINS, HOPES, PEELAMEDU LAKSHMI MILLS, RAILWAY STATION, SELVAPURAM'),
('20', 'KANUVAI\r\n', ' AIR PORT(BRINDAVAN NAGAR)\r\n', ' IDAYARPALAYAM, SAIBABA COLONY, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU,CIT'),
('20B', 'SIHS COLONY(SINGANALLUR RLY STATION)\r\n', ' SAIBABA COLONY\r\n', ' SINGANALLUR, ESI, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM'),
('20C', 'SIHS COLONY(SINGANALLUR RLY STATION)\r\n\r\n', ' POOCHIUR \r\n', 'SINGANALLUR, ESI, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, THUDIYALUR'),
('21', 'GANDHIPURAM\r\n', ' KEMBANUR\r\n', ' RAILWAY STATION, GANDHIPARK, VEDAPATTI'),
('21A', 'GANDHIPURAM\r\n', ' NARASIPURAM\r\n ', 'RAILWAY STATION, GANDHIPARK, VEDAPATTI'),
('21B', 'GANDHIPURAM\r\n\r\n', ' KEMBANUR/DEVARAYAPURAM\r\n', ' RAILWAY STATION, GANDHIPARK, VEDAPATTI'),
('21C', 'GANDHIPURAM\r\n', ' DEVARAYAPURAM \r\n', 'RAILWAY STATION, GANDHIPARK, VEDAPATTI'),
('21D', 'GANDHI MAA NAGAR\r\n ', 'KURUMBAPALAYAM', ''),
('22', 'VADAVALLI /SUGARCANE INSTITUTE\r\n', ' CHINNIYAMPALAYAM', ''),
('22A', 'UKKADAM\r\n', ' KALAPATTY \r\n', 'RAILWAY STATION, GANDHIPURAM,GANAPATHY, SARAVANAMPATTY, VILANKURUCHI\r\n'),
('24', 'UKKADAM\r\n', ' KALAPATTY/CHERIAMPALAYAM \r\n', 'RAILWAY STATION, GANDHIPURAM,GANAPATHY, SARAVANAMPATTY, VILANKURUCHI'),
('24A', 'UKKADAM\r\n', ' VERRAPANDI PUDUR \r\n', 'RAILWAY STATION, GANDHIPURAM, SIVANANDA COLONY, THUDIYALUR, PALANI GOUNDEN PUDUR'),
('26', 'UKKADAM\r\n', ' VERRAPANDI PUDUR\r\n', ' RAILWAY STATION, GANDHIPURAM, SIVANANDA COLONY, THUDIYALUR, PALANI GOUNDEN PUDUR'),
('11A', 'UKKADAM\r\n', ' ANUVAVI SUBRAMANYA TEMPLE\r\n', ' RAILWAY STATION, GANDHIPURAM, SAIBABA COLONY, IDAYAR PALAYAM, CHINNA THADAGAM\r\n'),
('27A', 'UKKADAM\r\n', ' IDIGARAI/ATHIPALAYAM\r\n\r\n', ' FLOWER MARKET, NORTH COIMBATORE, TVS, SAIBABA TEMPLE, THUDIYALUR'),
('27B', 'RAILWAY STATION/GANDHIPURAM\r\n ', 'PRESS COLONY\r\n ', 'GANDHIPURAM, SIVANANDA COLONY, HOUSING UNIT, KOUNDEMPALAYAM,THUDIYALUR'),
('2B', 'TELUNGUPALAYAM\r\n', ' GANAPATHY HUDCO COLONY(RENTAL)\r\n', ' SELVAPURAM, RAILWAY STATION,GANDHIPURAM, GANAPATHY, BHARTHI NAGAR'),
('2C', 'PACHAPALAYAM\r\n\r\n', ' KANNAPA NAGAR/NALLAMPALAYAM \r\n', 'PERUR, SELVAPURAM, PRAKASM, RAILWAY STATION, GANDHIPURAM, TEXTOOL, ROOTS'),
('3', 'MADUKKARAI\r\n ', 'GANAPATHY\r\n', ' KOVAI PUDUR POST, KUNIYAMUTHUR, ATHUPALAM, UKKADAM, MARAKADI, GANDHIPURAM\r\n'),
('30', 'UKKADAM\r\n', ' KANNAMPALAYAM \r\n', 'TOWN HALL, GH, SUNGAM, RN PURAM, BOAT HOUSE/PERKS, SINGANALLUR, ONDIPUDUR, PAPAMPATTI\r\n'),
('31', 'MADUKKARAI MARKET\r\n', ' POLYTECHNIC/ELANGO NAGAR\r\n\r\n', ' KURUCHI HOUSING UNIT, SUNDARAPURAM, UKKADAM, LAKSHMI MILLS, PEELAMEDU, HOPES'),
('31B', 'SIDCO\r\n', ' NEHRU NAGAR/IDAYARPALAYAM', ''),
('31D', 'KURUMBAPALAYAM/MADUKARAI MARKET\r\n', ' KMCH/ARSIPALAYAM', ''),
('32', 'GANDHIPURAM/RAILWAY STATION\r\n', ' KOVANUR/PALAMALAI\r\n', ' SIVANANDHA COLONY/FLOWER MARKET, HOUSING UNIT, KOUNDAMPALAYAM, THUDIYALUR, GN MILLS'),
('32A', 'RAILWAY STATION\r\n', ' PRESS COLONY/ARIVOZHI NAGAR\r\n', ' FLOWER MARKET, HOUSING UNIT, KOUNDAMPALAYAM, THUDIYALUR, GN MILLS'),
('89A', 'RAILWAY STATION\r\n', ' PRESS COLONY/KARICHIPALAYAM \r\n', 'FLOWER MARKET, HOUSING UNIT, KOUNDAMPALAYAM, THUDIYALUR, GN MILLS'),
('32B', 'UKKADAM\r\n ', 'THIRUMALAINAICKEN PALAYAM', ''),
('32G', 'GANDHIPURAM\r\n', ' VELLAMADAI\r\n', ' SIVANANDHA COLONY, HOUSING UNIT, KOUNDAMPALAYAM, THUDIYALUR, GN MILLS'),
('32H', 'UKKADAM\r\n \r\n', 'KASTHURIPALAYAM', ''),
('32M', 'RAILWAY STATION\r\n', ' VEERAPANDI\r\n', ' FLOWER MARKET, HOUSING UNIT, KOUNDAMPALAYAM, THUDIYALUR, GN MILLS\r\n'),
('32K', 'GANDHIPURAM\r\n', ' KOVANUR(EXP)\r\n', ' SIVANANDHA COLONY, HOUSING UNIT, KOUNDAMPALAYAM, THUDIYALUR, GN MILLS'),
('33A', 'GANDHIPURAM\r\n', ' KINATHUKADAVU \r\n', 'RAILWAY STATION, UKKADAM, ATHUPALAM, SUNDARAPURAM, EACHANARI,SIDCO, MALUMICHAMPATTY\r\n'),
('33D', 'RAILWAY STATION\r\n', ' KINATHUKADAVU/KALLAPURAM\r\n', ' UKKADAM, ATHUPALAM, SUNDARAPURAM, EACHANARI,SIDCO, MALUMICHAMPATTY'),
('33E', 'RAILWAY STATION\r\nY', ' NALLATIPALAYAM/CHETTIKAPALAYAM \r\n', 'UKKADAM, ATHUPALAM, SUNDARAPURAM, EACHANARI,SIDCO, MALUMICHAMPATT'),
('35', 'AVARAM PALAYAM\r\n', ' KARADIMADAI \r\n\r\n', 'GANDHIPURAM, RAILWAY STATION, SELVAPURAM, PERUR'),
('56', 'GANDHIPURAM\r\n ', 'THONDMUTHUR/KARDIMADAI', ''),
('36', 'VEERAMPALAYAM\r\n ', 'PN PUDUR/GANDHIPURAM', ''),
('37', 'UKKADAM\r\n', ' KALLAPALAYAM/PONNANKANI', ''),
('38A', 'STATE BANK COLONY\r\n', ' SELVAPURAM/TELUNGUPALAYAM\r\n\r\n', ' THUDIYALUR, NEW BS, SIVANANDA COLONY, GANDHIPURAM, RAILWAY STATION'),
('39', 'UKKADAM\r\n', ' MYLAMPATTI/CHINNIYAMPALAYAM\r\n ', 'RAILWAY STATION, LAKSHMI MILLS, PEELAMEDU, HOPES'),
('39A', 'UKKADAM\r\n', ' CHINNIYAMPALAYAM\r\n ', 'RAILWAY STATION, LAKSHMI MILLS, PEELAMEDU, HOPES'),
('3A', 'GANAPATHY\r\n', ' MADUKKARAI MARKET \r\n', 'GANDHIPURAM, MARAKADAI, UKKADAM, KUNIYAMUTHUR,ACC CEMENTS'),
('3C', 'GANAPATHY\r\n', ' TIRUMALAYAM PALAYAM \r\n', 'GANDHIPURAM, MARAKADAI, UKKADAM, KUNIYAMUTHUR, MADUKARAI'),
('3D', 'KOVAIPUDUR\r\n', ' GANAPATHY\r\n', ' KUNIYAMUTHUR, UKKADAM, MARAKADAI, GANDHIPURAM'),
('3E', 'GANDHIPURAM\r\n', ' TIRUMALAYAM PALAYAM\r\n', ' MARAKADAI, UKKADAM, KUNIYAMUTHUR, MADUKKARAI\r\n'),
('3F', 'AVARAM PALAYAM\r\n', ' KOVAIPUDUR \r\n', 'GANDHIPURAM, MARAKADAI, UKKADAM, KUNIYAMUTHUR'),
('3G', 'KG CHAVADI\r\n\r\n', ' GANAPATHY POLICE QUARTERS\r\n', ' AMRITA INSTITUTE, MADUKARAI, KUNIYAMUTHUR, UKKADAM, MARAKADAI, GANDHIPURAM, GANAPATHY'),
('3H', 'CHERAN MAA NAGAR\r\n', ' KOVAIPUDUR/ARIVOZHI NAGAR', ''),
('3K', 'UKKADAM\r\n ', 'GANDHI MAA NAGAR \r\n', 'MARAKADAI, GANDHIPURAM, GANAPATHY, BHARTHI NAGAR'),
('3M', 'GANAPATHY MAA NAGAR\r\n', ' KOVAIPUDUR\r\n', ' GANAPATHY, GANDHIPURAM, RAILWAY STATION, SELVAPURAM, PERUR'),
('3N', 'NALLAMPALAYAM\r\n', ' ARIVOZHI NAGAR\r\n\r\n', ' ROOTS, TEXTOOL, GANDHIPURAM, RAILWAY STATION, SELVAPURAM, PERUR'),
('3R', 'K.PLM HU/SB COLONY\r\n', ' KOVAIPUDUR/ARIVOZHI NAGAR', ''),
('3S', 'SAIBABA COLONY\r\n', ' ROTTIGOUNDANUR\r\n', ' GANDHIPURAM, MARAKADAI, UKKADAM, KUNIYAMUTHUR'),
('4', 'THUDIYALUR\r\n', ' PODANUR RAILWAY STATION\r\n', ' GN MILLS, VELLAKINARU POST, KOUNDAMPALAYAM, TVS, NORTH COIMBATORE, FLOWER MARKET UKKADAM, ATHUPALAM'),
('40', 'GCT\r\n', ' CHERIAMPALAYAM/NEHRU NAGAR', ''),
('41A', 'GANDHIPURAM\r\n', ' SULUR/KALANGAL/SENGODA GDN\r\n', ' LAKSHMI MILLS, PEELAMEDU, ESI, SINGANALLUR, ONDIPUDUR\r\n'),
('41B', 'GANDHIPURAM\r\n ', 'VAGARAMPALAYAM/CHINNA KUILI\r\n', ' LAKSHMI MILLS, PEELAMEDU, ESI, SINGANALLUR, ONDIPUDUR\r\n'),
('41D', 'GANDHIPURAM\r\n', ' SULUR/SENGATHURAI/KUMARAPALAYAM\r\n', ' LAKSHMI MILLS, PEELAMEDU, ESI, SINGANALLUR, ONDIPUDUR'),
('41F', 'GANDHIPURAM\r\n\r\n', ' APPANAIKEN PATTI PUDUR/SOMANUR\r\n ', 'LAKSHMI MILLS, PEELAMEDU, GOLDWINS, NEELAMBUR, ARASUR, KANIYUR, KARUMATHAPATTI'),
('42A', 'UKKADAM\r\n', ' NEELAMBUR\r\n ', 'LAKSHMI MILLS, PEELAMEDU, HOPES, GOLDWINS, CHINNIYAMPALAYAM'),
('43', 'NEELAKONAMPALAYAM\r\n', ' GCT,TOWN HALL', ''),
('44', 'UKKADAM/GANDHIPARK\r\n', ' PACHAPALAYAM/CHERAYAMPALAYAM', ''),
('45', 'GANDHIPURAM\r\n', ' VARADIAMPALAYAM/KARAYAMPALAYAM\r\n', ' TEXTOOL, GANAPATHY, BHARTHI NAGAR, SIVANANDA MILLS, SARAVANAMPATTI\r\n'),
('45B', 'UKKADAM/GANDHIPURAM\r\n ', 'TELUNGUPALAYAM/GANAPATHY MAA NAGAR', ''),
('45', 'GANDHIPURAM\r\n', ' ANNUR \r\n', 'GANAPATHY, SARAVANAMPATTI, KOVILPALAYAM, KURUMBAPALAYAM, GANESHAPURAM'),
('45C', 'GANDHIPURAM\r\n', ' ANNUR/KANUMPUDUR\r\n ', 'GANAPATHY, SARAVANAMPATTI, KOVILPALAYAM, KURUMBAPALAYAM, GANESHAPURAM'),
('45D', 'GANDHIPURAM\r\n', ' ANNUR/PUTHUPALAYAM \r\n', 'GANAPATHY, SARAVANAMPATTI, KOVILPALAYAM, KURUMBAPALAYAM, GANESHAPURAM'),
('45E', 'GANDHIPURAM\r\n', ' ANNUR \r\n', 'GANAPATHY, SARAVANAMPATTI, KOVILPALAYAM, KURUMBAPALAYAM, GANESHAPURAM'),
('45G', 'UKKDAM\r\n\r\n', ' KOVILPALAYAM \r\n\r\n', 'RAILWAY STATION, GANDHIPURAM, TEXTOOL, GANAPATHY, SARAVANAMPATTI'),
('46', 'MARUTHAMALAI\r\n ', 'RAMANATHAPURAM/GANDHIPURAM', ''),
('47', 'SANKARA COLLEGE/GANDHIPURAM\r\n', ' SERANAIKENPALAYAM/NACHIPALAYAM', ''),
('47A', 'GANDHIPURAM\r\n', ' PREMIER MILLS/THOPAMPALAYAM\r\n', ' UKKADAM, ATHUPALAM, SUNDARAPURAM, EACHANARI,SIDCO'),
('48', 'GANDHIPURAM/UKKDAM\r\n ', 'VELANDAVALAM \r\n\r\n', 'RAILWAY STATION, UKKADAM, KUNIYAMUTHUR, MADUKARAI, ETTIMADAI'),
('48B', 'GANDHIPURAM\r\n', ' VELANDAVALAM/KOMANDAPARAI\r\n', ' RAILWAY STATION, UKKADAM, KUNIYAMUTHUR, MADUKARAI'),
('50B', 'GANDHIPURAM\r\n', ' MADUKKARAI MARKET/KURUCHI HB/KK NAGAR \r\n', 'RAILWAY STATION, UKKADAM, SUNDARAPURAM, KURUCHI HOUSING UNIT'),
('48A', 'GANDHIPURAM\r\n ', 'VELANDAVALAM \r\n\r\n', 'RAILWAY STATION, UKKADAM, KUNIYAMUTHUR, MADUKARAI, ETTIMADAI'),
('4C', 'SRINIVASA NAGAR\r\n\r\n', ' GANAPATHY MAANGAR', ''),
('4D', 'UKKADAM\r\n\r\n', ' PRESS COLONY/THAMBU HIGH SCHOOL ', 'FLOWERMARKET, NORTH COIMBATORE, TVS, KOUNDAMPALAYAM, THUDIYALUR'),
('4H', 'VIJAYALAKSHMI MILLS\r\n', ' KURUDAMPALAYAM', ''),
('4K', 'SELVAPURAM', '\r\n THEKKUPALAYAM/APPANAIKEN PATTI', ''),
('4M', 'THUDIYALUR\r\n', ' NANJUNDAPURAM\r\n ', 'KOUNDAMPALAYAM, TVS, NORTH COIMBATORE, FLOWER MARKET, UKKADAM, PODANUR'),
('4N', 'ANNA NAGAR\r\n', ' KURUCHI HOUSING UNIT\r\n', ' KOUNDAMPALAYAM, TVS, NORTH COIMBATORE, FLOWER MARKET, UKKADAM, SUNDARAPURAM'),
('5', 'SIVANANDHA COLONY\r\n', ' SIVANANDHA COLONY \r\n', 'GANDHIPURAM, MARAKADAI, TOWN HALL, GH, RAINBOW, SUNGAM, RAMANATHAPURAM, PULIAKULAM, LAKSHMI MILLS, GANDHIPURAM'),
('50', 'GANDIPURAM\r\n ', 'KANNAMANAICKENUR/SATTAKALPUDUR', ''),
('50A', 'KANUVAI\r\n', ' PALATHURAI/EDAYARPALAYAM\r\n', ' VELANDIPALAYAM, SAIBABA COLNY, GANDHIPURAM, RAILWAY STATION, UKKADAM, SUNDARAPURAM, KURUCHI HOUSING UNIT, MADUKARAI'),
('50C', 'NACHIPALAYAM\r\n ', 'GANAPATHY POLICE QUARTERS', ''),
('51', 'GANDIPURAM\r\n', ' KANCHIKONAMPALAYAM', ''),
('53', 'SRINIVASA NAGAR\r\n', ' AVARAMPALAYAM \r\n', 'PODANUR, UKKADAM, RILWAY STATION GANDHIPURAM'),
('55', 'GANDIPURAM\r\n', ' VELLALORE/IDAYARPALAYAM \r\n', 'RAILWAY STATION, UKKADAM, ATHUPALAM, PODANUR'),
('55B', 'GANDIPURAM\r\n ', 'IDAYARPALAYAM', ''),
('s19', 'PSG ARTS/GANDHIPURAM\r\n', ' IDAYARPALAYAM\r\n', ' RAILWAY STATION, UKKADAM, ATHUPALAM, PODANUR'),
('56', 'GANDIPURAM\r\n', ' POLUVAPATTI\r\n', ' RAILWAY STATION, SELVAPURAM, PERUR, PACHAPALAYAM, ALANDURAI'),
('57', 'UKKADAM\r\n ', 'VELLAMADI/IDIGARAI\r\n ', 'FLOWER MARKET, TVS, NEW BS, KOUDAMPALAYAM, THUDIYALUR'),
('57A', 'KURUCHI HB/UKKADAM\r\n', ' KOTTAIPALAYAM', ''),
('58', 'TOWN HALL\r\n', ' NARASIPURAM \r\n', 'GANDHIPARK, VEDAPATTI, THONDAMUTHUR'),
('59', 'GANDHIPURAM/TOWN HALL\r\n', ' SADIVAYAL/KARUNYA\r\n', ' RAILWAY STATION, SELVAPURAM, PERUR, MADAMPATTI, KOVAI KONDATTAM'),
('59A', 'TOWN HALL\r\n', ' SADIVAYAL\r\n', ' SELVAPURAM, PERUR, MADAMPATTI, KOVAI KONDATTAM,KARUNYA'),
('59B', 'AVARAM PALAYAM\r\n ', 'MOLAPALAYAM', ''),
('5C', 'SIVANANDHA COLONY\r\n', ' SIVANANDHA COLONY\r\n', ' GANDHIPURAM, LAKSHMI MILLS, PULIYAKULAM, RAMANATHAPURAM, SUNGAM, RAINBOW, GH, TOWN HALL, GANDHIPURAM'),
('62', 'UKKADAM\r\n', ' KOVILPALAYAM \r\n', 'GANDHIPURAM, GANAPATHY, SARAVANAMPATTI'),
('63', 'UKKADAM/SELVAPURAM\r\n', ' KEERANATHAM\r\n', ' GANDHIPURAM, GANAPATHY, SARAVANAMPATTI'),
('63A', 'GANDHIPURAM/SINGANALLUR\r\n ', 'GOVINDANAIKENPALAYAM', ''),
('64', 'GANDIPURAM\r\n', ' THONDMUTHUR\r\n', 'RAILWAY STATION, GANDHIPARK, VEDAPATTI'),
('64B', 'GANDIPURAM\r\n', ' VELLARUKKANPALAYAM', ''),
('64C', 'GANDIPURAM\r\n', ' POLUVAPATTI/MARUTHAMALAI\r\n ', 'RAILWAY STATION, GANDHIPARK, VEDAPATTI'),
('64D', 'GANDIPURAM\r\n ', 'KEMBANUR/NARASIPURAM\r\n ', 'RAILWAY STATION, GANDHIPARK, VEDAPATTI'),
('65A', 'GANDIPURAM\r\n', ' SULUR/KANNAMPALAYAM', ''),
('66', 'GANDIPURAM\r\n', ' PALATHURAI/PACHAPALAYAM \r\n', 'RAILWAY STATION, UKKADAM, KUNIYAMUTHUR, ACC CEMENTS, MADUKARAI MARKET'),
('66A', 'GANDIPURAM\r\n ', 'MASTHIKOUNDENPATHI/MARICHETTIPATHI\r\n', ' RAILWAY STATION, UKKADAM, KUNIYAMUTHUR, ACC CEMENTS, MADUKARAI MARKET'),
('68', 'GANDIPURAM\r\n', ' CHERAN MAA NAGAR\r\n ', 'LAKSHMI MILLS, ESSO BUNK, NAVA INDIA, PEELAMEDU'),
('68A', 'CHERAN MAA NAGAR\r\n ', 'VELLAKINARU\r\n ', 'PEELAMEDU, LAKSHMI MILLS, GANDIPURAM, SIVANANDA COLONY, HOUSING UNIT'),
('68B', 'GANDIPURAM\r\n ', 'KURMBAPALYAM/EACHANARI', ''),
('69', 'SINGANALLUR/UKKADAM\r\n ', 'PEDAMPALLI/PAPAMPATTI\r\n ', 'TOWN HALL, GH, SUNGAM, RN PURAM, BOAT HOUSE/PERKS, SINGANALLUR, ONDIPUDUR'),
('69A', 'GANDHIPURAM/UKKDAM', '\r\n PAPAMPATTI/KALLAPALAYAM', ''),
('69B', 'MANIYAKARAMPALAYAM/GANDIPURAM\r\n ', 'PEEDAMPALLI\r\n', ' LAKSHMI MILLS, PEELAMEDU, SINGANALLUR, ONDIPUDUR, PATTANAM'),
('69C', 'ONDIPUDUR/GANDHIPURAM\r\n', ' PAPAMPATTI \r\n', 'LAKSHMI MILLS, PEELAMEDU, SINGANALLUR, ONDIPUDUR, PATTANAM'),
('7', 'GANDHIPARK\r\n', ' GANDHIPARK\r\n', ' B1 POLICE STATION, TOWNHALL, GH, SUNGAM, PULIYAKULAM, RACE COURSE, KG, GANDHIPURAM, NORTH COIMBATORE, RS PURAM'),
('70', 'MARUTHAMALAI\r\n', ' GANDHIPURAM \r\n', 'VADAVALLI, PN PUDUR, AGRI UNIVERSITY, LAWLEY ROAD, GCT, SAIBABA COLONY, SIVANANDHA COLONY'),
('70A', 'MARUTHAMALAI\r\n ', 'AVARAMPALAYAM \r\n', 'VADAVALLI, PN PUDUR, AGRI UNIVERSITY, LAWLEY ROAD, GCT, SAIBABA COLONY, TVS'),
('70B', 'MARUTHAMALAI/VADAVALLI\r\n', ' SHOBA NAGAR\r\n', ' VADAVALLI, EB COLONY, ANNA NAGAR, IDAYAR PALAYAM, VELANDIPALAYAM, SAIBABA COLONY, SIVANANDA COLONY, GANDHIPURAM, AVARAMPALAYAM'),
('70D', 'MARUTHAMALAI\r\n', ' GANDHIPURAM\r\n ', 'VADAVALLI, EB COLONY, ANNA NAGAR, IDAYAR PALAYAM, KALPANA, KOUNDAMPALAYAM, NALLAM PALAYAM, ROOTS, TEXTOOL'),
('71', 'KOVILMEDU\r\n', ' MACHANAIKENPALAYAM', ''),
('71A', 'KOVILMEDU\r\n', ' KURUCHI HOUSING UNIT\r\n', ' VELANDIPALAYAM, SAIBABA COLNY, GANDHIPURAM, RAILWAY STATION, UKKADAM, SUNDARAPURAM'),
('72', 'ONDIPUDUR\r\n ', 'RAYAPALAYAM', ''),
('72A', 'UKKADAM\r\n ', 'VAKARAMPALAYAM', ''),
('73', 'GANDHIPURAM\r\n', ' CHETTIPALAYAM \r\n', 'RAILWAY STATION, UKKADAM, ATHUPALAM, PODANUR\r\n'),
('73A', 'GANDHIPURAM\r\n', ' SAMATHUVAPURAM \r\n', 'RAILWAY STATION, UKKADAM, ATHUPALAM, PODANUR'),
('73B', 'GANDHPURAM\r\n', ' MYLERIPALAYAM\r\n', ' RAILWAY STATION, UKKADAM, ATHUPALAM, SUNDARAPURAM'),
('73D', 'GANDHPURAM\r\n ', 'KALAINGAR NAGAR \r\n', 'RAILWAY STATION, UKKADAM, ATHUPALAM,PODANUR'),
('74', 'EDAYARPALAYAM\r\n', ' GANDHPURAM \r\n', 'SINGANALLUR, ESI, PEELAMEDU, LAKSHMI MILLS'),
('75', 'UKKADAM\r\n\r\n', ' IRUGUR \r\n', 'TOWN HALL, GH, SUNGAM, RN PURAM, PERKS, SINGANALLUR, ONDIPUDUR'),
('76', 'MARUDHAMALAI\r\n', ' SARAVANA NAGAR \r\n', 'VADAVALLI, EB COLONY, ANNA NAGAR, IDAYAR PALAYAM, KALPANA, KOUNDAMPALAYAM, NALLAM PALAYAM, ROOTS, TEXTOOL'),
('77', 'UKKADAM\r\n\r\n', ' EDAYARPALAYAM \r\n', 'TOWN HALL, GH, SUNGAM, RN PURAM, PERKS, SINGANALLUR'),
('77A', 'UKKADAM\r\n', ' APPANAYAKEN PALAYAM', ''),
('77B', 'UKKADAM/SINGANALLUR\r\n ', 'CHANDRAPURAM', ''),
('8', 'SINGANALLUR\r\n', ' CHETTIPALAYAM \r\n', 'RN PURAM, SUNGAM, GH, UKKADAM, ATHUPALAM,PODANUR'),
('80', 'ONDIPDUR\r\n ', 'EDAYARPALAYAM\r\n', ' SINAGANALLUR, RN PURAM, SUNGAM, GH, UKKADAM, ATHUPALAM,SUNDARAPURAM'),
('81', 'GANDHPURAM\r\n', ' PONNEGOUNDEN PUDUR', ''),
('81A', 'GANDHPURAM\r\n ', 'NALLEFOUNDANPALAYAM/ SEMSAPATTI', ''),
('82', 'UKKADAM\r\n', ' KUPPEPALAYAM\r\n ', 'FLOWER MARKET, TVS, NEW BS, THUDIYALUR'),
('83A', 'CIVIL AERO\r\n ', 'GANDHIPURAM/KEERANATHAM \r\n', 'PAPAMPATTI, ONDIPUDUR,SINGANALLUR, ESI, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, SIVANANDA COLONY, NEW BS, KOUNDAMPALAYAM, THUDIYALUR\r\n'),
('84B', 'AVARAM PALAYAM\r\n', ' OKKILIPALAYAM', ''),
('87', 'GANDHIPURAM\r\n', ' KOVILPALAYAM\r\n', 'SIVANANDA COLONY, NEW BS, KOUDAMPALAYAM, THUDIYALUR'),
('88', 'KULATHUR/IRUGUR\r\n', ' SAIBABA COLONY \r\n', 'SINGANALLUR,ESI, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, TVS'),
('89B', 'UKKADAM', '\r\n DEVAYAMPALAYAM', ''),
('8A', 'IRUGUR\r\n', ' PODANUR RAILWAY STATION\r\n', ' SINGANALLUR, RN PURAM, SUNGAM, GH, UKKADAM, ATHUPALAM'),
('90', 'UKKADAM\r\n', ' SOMANUR\r\n', ' RAILWAY STATION, LAKSHMI MILLS, PEELAMEDU, HOPES, CHINNITYAMPALAYAM, NEELAMBUR, ARASUR, KANIUR, KARUMATHAMPATTI'),
('91', 'SAIBABA COLONY\r\n', ' KOVAIPUDUR\r\n', ' TVS, GANDHIPURAM, RAILWAY STATION, SELVAPURAM, PERUR'),
('92', 'MARUDHAMALAI\r\n', ' CHERAN MAA NAGAR\r\n', ' VADAVALLI, PN PUDUR, LAWLEY ROAD, SAIBABA COLONY, TVS, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU'),
('93', 'IRUGUR\r\n ', 'PN PUDUR/GANDHIPURAM \r\n', 'SINGANALLUR, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, SAIBABA COLONY'),
('94', 'PSG ARTS\r\n', ' THONDAMUTHUR', ''),
('95', 'SINGANALLUR\r\n', ' GANDHIPURAM \r\n', 'PERKS, PEELAMEDU, LAKSHMI MILLS'),
('96', 'GANDHIPURAM\r\n', ' WALAYAR/PUDUPATHY\r\n', ' CENTRAL RTO, RAILWAY STATION, UKKADAM, ATHUPALAM, KUNIYAMUTHUR, MADUKARAI, ETTIMADAI, KG CHAVADI'),
('97', 'UKKADAM\r\n', ' CHINNA THADAGAM', ''),
('98', 'UKKADAM\r\n', ' VAGUDAPALAYAM', ''),
('98A', 'UKKADAM\r\n ', 'VAGARAMPALAYAM', ''),
('S10', 'ONDIPUDUR\r\n', ' UDAYAMPALAYAM\r\n', ' SINGANALLUR, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, GANAPATHY'),
('S11A', 'KANUVAI\r\n ', 'SINGANALLUR \r\n', 'VELANDIPALAYAM, SAIBABA COLONY, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU\r\n'),
('S12', 'MARUTHMALAI\r\n \r\n', 'MASAKALIPALAYAM\r\n', ' VADAVALLI, PN PUDUR, LAWLEY ROAD, GANDHIPURAM, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU'),
('S13', 'MARUTHMALAI\r\n ', 'NELAKONAMPALAYAM', ''),
('S15', 'SIHS COLONY\r\n ', 'MARUDHAMALAI', ''),
('S15A', 'MARUTHAMALAI/VADAVALLI\r\n ', 'SIHS COLONY', ''),
('S17', 'AVARAM PALAYAM\r\n', ' KOVAI PUDUR \r\n', 'GANDHIPURAM, RAILWAY STATION, SELVAPURAM, PERUR'),
('S18', 'NEELAKONAMPALAYAM\r\n', ' TEACHERS COLONY\r\n', ' SINGANALLUR, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, NEW BS, THUDIYALUR'),
('S19', 'VILANKURUCHI\r\n', ' VELLALORE \r\n', 'PEELAMEDU, LAKSHMI MILLS, RAILWAY STATION, UKKADAM, PODANUR'),
('S2', 'UPPILI PALYAM\r\n', ' KG CHAVADI \r\n', 'PULIAKULAM, SUNGAM, GH, UKKADAM, ATHU PALAM, KUNIYAMUTHUR, MADUKARAI, ETTIMADAI'),
('S21', 'GANAPATHY HUDCO COLONY\r\n', ' PERIA NAICKEN\r\n', ' PALAYAM PEELAMEDU, LAKSHMI MILLS, GANDIPURAM, SIVANANDA COLONY, HOUSING UNIT'),
('S21A', 'ONDIPUDUR/SITRA\r\n', ' PERIA NAICKEN PALAYAM \r\n', 'PEELAMEDU, LAKSHMI MILLS, GANDIPURAM, SIVANANDA COLONY, HOUSING UNIT'),
('S21B', 'SINGANALLUR\r\n', ' VERRAPANDI PEELAMEDU, LAKSHMI MILLS, ', 'GANDIPURAM, SIVANANDA COLONY, HOUSING UNIT'),
('S23', 'CHERAN NAGAR\r\n', ' ONDI PUDUR HOUSING UNIT, SIVANANDHA ', 'COLONY, GANDHIPURAM, LAKSHMI MILLS, PEELAMEDU, SINGANALLUR'),
('S23A', 'ONDIPUDUR\r\n', ' CHERAN COLNY SINGANALLUR, PEELAMEDU, ', 'LAKSHMI MILLS, GANDHIPURAM, SIVANADHA COLONY,NEW BS'),
('S23B', 'ONDIPUDUR\r\n', ' CHERAN COLNY/POOCHIUR SINGANALLUR, ', 'PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, SIVANADHA COLONY,NEW BS, THUDIALUR'),
('S23C', 'SINGANALLUR\r\n', ' THUDIYALUR PEELAMEDU, LAKSHMI MILLS, ', 'GANDIPURAM, SIVANANDA COLONY, HOUSING UNIT'),
('S25', 'GANDHI MAA NAGAR/GANDHIPURAM\r\n', ' ARIVOZHI NAGAR', ''),
('S26', 'MARUTHMALAI\r\n', ' NANJUNDAPURAM VADAVALLI, PN PUDUR, LWLEY ', 'ROAD, GANDHIPARK, GANDHIPURAM, LAKSHMI MILLS, RAMANATHAPURAM\r\n'),
('S3A', 'GANDHIPURAM\r\n', ' THEETHIPALAYAM RAILWAY STATION, ', 'SELVAPURAM, PERUR'),
('S4', 'PSG ARTS\r\n\r\n', ' MATTIPALAYAM ', 'A'),
('S4', 'UPPILI PALYAM\r\n', ' MATTIPALAYAM', ''),
('S8', 'PSG ARTS\r\n ', 'PERUR ', 'SAME AS ROUTE NO 2'),
('S9A', 'ONDIPUDUR\r\n', ' VEDAMPATTI/SANKARA COLLEGE ', 'SINGANALLUR, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, GANAPATHY'),
('S9B', 'ONDIPUDUR\r\n', ' UDAYAMPALAYAM ', 'SINGANALLUR, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, GANAPATHY'),
('S9D', 'ONDIPUDUR\r\n\r\n', ' NGGO COLONY', ' SINGANALLUR, PEELAMEDU, LAKSHMI MILLS, GANDHIPURAM, GANAPATHY');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `driver_name` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `name`, `driver_name`, `area`, `address`, `number`) VALUES
(1, 'FREEE LANCING', 'Mr.Renis', 'Ramanathapuram ', '# 333a, Sanmugam street, Ramanathapuram, Coimbatore - 641045.', '9566878189'),
(2, 'RAM CALL DRIVING ', 'Mr.Ram', 'Saravanampatti ', '#15/A, Revenue Nagar, Saravanampatti, Coimbatore - 641025. ', '9943688879');

-- --------------------------------------------------------

--
-- Table structure for table `educational`
--

CREATE TABLE `educational` (
  `Edu_id` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Residency` varchar(30) NOT NULL,
  `Mobail` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Edu_cat` varchar(100) NOT NULL,
  `Review` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational`
--

INSERT INTO `educational` (`Edu_id`, `Name`, `Residency`, `Mobail`, `Address`, `Edu_cat`, `Review`) VALUES
(1, 'KIDS CAMP ', 'Mr. Arjun', '9443577542', '30, V.H.Road, Near Bata Shop, Town Hall, Coimbatore-641001', 'School', '4'),
(2, 'ART PLATINAA ', 'Ms. Adithya Devi S ', '978861322 ', '15, SNV Garden, Nanjundapuram Road, Coimbatore - 641036', 'School', '3.5'),
(3, 'Mr.G.Senthil Kumar', '04222638555', '8754088296', ' Valukkuparai Road, Myleripalayam, Othakkalmandapam, Coimbatore - 641032', 'Polytechnic', '3.2'),
(4, 'SRI RAMAKRISHNA MISSION', '0422 2692676', '9944941427', 'Periyanaickenpalayam, Sri Ramakrishna Vidyalaya PO, Coimbatore - 641020. ', 'Polytechnic', '4'),
(5, 'Dr.T.Santha', '04222591863', '9994455574', 'Avinashi Road, Civil Aerodrome, Coimbatore - 641014. ', 'Arts College', '4'),
(6, 'Ms. Shalu', '04222343380', '9994445362', 'Telungupalayam Pirivu, Coimbatore - 641039.', 'Nursing College', '3.7'),
(7, 'Mr.Mustaq', '04222397213', '9843974390', '178, 2nd Floor, Oppanakara Street, Coimbatore - 641001', 'Coaching Center', '3.8'),
(8, 'Mr.Suresh', '04222470648', '9500850326', 'Sri Ruthran Complex, Linganoor Road, Vadavalli, Coimbatore - 641041. ', 'Coaching Center', '3.7');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(4) NOT NULL,
  `Organisator` varchar(50) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Date` varchar(11) NOT NULL,
  `From_Time` varchar(9) NOT NULL,
  `To_Time` varchar(9) NOT NULL,
  `Event_Cat` int(3) NOT NULL,
  `Event_Type` varchar(100) NOT NULL,
  `Event_desc` varchar(600) NOT NULL,
  `Events_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `Organisator`, `Location`, `Date`, `From_Time`, `To_Time`, `Event_Cat`, `Event_Type`, `Event_desc`, `Events_pic`) VALUES
(1, 'Ajith Kumar', 'Karpagam College of Engineering', '04 Oct 2017', '09:30 A.M', '04:30 P.M', 0, 'Workshop', 'Smart Nanoparticles: Preparation, Characterization and Applications', ''),
(2, 'Gokul Siva', 'KGiSL Institute of Technology', '06 Oct 2017', '9:30 A.M', '5:00 P.M', 0, 'Technical and Cultural Fest', 'ARISTA 2K17', ''),
(3, 'Ganesh', 'Sri Krishna College of Engineering and Technology', '5th Oct 17', '10:00 A.M', '05:00 P.M', 0, 'Technical Symposium', 'RecruFest 17', ''),
(4, 'Arun', 'Kgisl institute of technology', '06 Oct 17', '09:30 A.M', '05:30 P.M', 1, 'Quiz Competitions', 'ARISTA 2K17', ''),
(5, 'Mythreyan', 'SNS College of Technology', '06 Oct 17', '09:30 A.M', '05:30 P.M', 1, 'Debate Competitions', 'AICTE', ''),
(6, 'Aravindhan', 'Sastra University', '06 Oct 17', '10:30 A.M', '05:30 P.M', 1, 'Literature Competitions ', 'RIO', ''),
(7, 'Ramakrishnan', 'Sri Ayyappan Puja Sangham', '28 Sep 17', '6.30 P.M', '', 2, 'Aadi Utsav -\r\n\r\nThippirajapuram Sri Mohanrama Dikshitar speaks on Srimad Bhagavatham Dasaskandam', 'Ayyappan Puja', ''),
(8, 'Swaminathan', 'Chaturmasya Seva Committee', '28 Sep 17', '06 A.M', '', 2, 'devotional speech', 'Swami Vidya Vijaya Thirtharu speaks', ''),
(9, 'Mohan', 'KGiSL Institute of technolgy', '28/09/2017', '09:00AM', '04:00PM', 0, 'Hackathon', '30hrs coding', ''),
(10, 'Gokul', 'Codissia', '29/09/2017', '09:00AM', '04:00PM', 1, 'Expo', 'HouseHold Expo', '');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `guide_id` int(4) NOT NULL,
  `name` varchar(11) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `languages` text NOT NULL,
  `age` int(2) NOT NULL,
  `charges` int(4) NOT NULL,
  `rating` int(1) NOT NULL,
  `proofs` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`guide_id`, `name`, `mobile`, `languages`, `age`, `charges`, `rating`, `proofs`) VALUES
(1, 'Ganesh', 9994463572, 'Tamil,English', 21, 400, 3, ''),
(2, 'At', 987654321, 'tamil', 25, 450, 0, 'IMG_20170606_164819.jpg'),
(3, 'Senthil', 9632857410, 'English,Hindi', 21, 350, 0, 'Hiremee.JPG'),
(4, 'Aravind', 9632587410, 'Tamil', 0, 350, 0, 'Screenshot (33).png');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `Hospital_id` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Hos_Cat` varchar(100) NOT NULL,
  `Review` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`Hospital_id`, `Name`, `Phone`, `Address`, `Hos_Cat`, `Review`) VALUES
(1, 'KALPAVIRUKSHA AYURVEDA ', '8438472273 ', '2Kms off Coimbatore to Mettupalayam HWY , Beyond Narasimanayakan palayam, Road,Thekkupalayam Village, Thekkupalayam,Coimbatore - 641 020', 'AYURVEDIC AND SIDDHA', 0),
(2, 'SIDDHA MEDICAL CENTRE ', ' 422257278 ', '#137,Balamuragan Complex ,Avinashi Rd periyar nagar, Masakalipalayam Hope College, Peelamedu,Coimbatore-641 004 ', 'AYURVEDIC AND SIDDHA', 0),
(3, 'VASAN EYE CARE HOSPITAL ', '9786200050 ', '#81/83,TV Swamy Road, Opp. Kamachi Amman Kovil RS Puram, coimbatore - 641002. ', 'EYE HOSPITALS', 0),
(4, 'ARAVIND EYE HOSPITAL ', '422-436042 ', 'Civil Aerodrom (PO), Sitra,Avanashi Road, Coimbatore 641014. ', '	\r\nEYE HOSPITALS', 0),
(5, 'ASWANTH ENT HEAD&NECK CLINIC ', ' 9600862639', 'VS Complex, G K Square, Sundarapuram,Kurichi Coimbatore-641024. ', 'ENT HOSPITALS', 0),
(6, 'YOGINE\'S I CURE ALL ', '9943301032 ', 'No. 10. C.S. Nagar Main Street Vadavalli, Coimbatore ', 'ENT HOSPITALS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(4) NOT NULL,
  `Company_name` varchar(75) NOT NULL,
  `Description` text NOT NULL,
  `profile` varchar(50) NOT NULL,
  `experience` varchar(15) NOT NULL,
  `Apply_by` date NOT NULL,
  `details` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `Company_name`, `Description`, `profile`, `experience`, `Apply_by`, `details`) VALUES
(1, 'Amazon', 'Amazon.com, Inc. offers a range of products and services through its Websites. The Company operates through three segments: North America, International and Amazon Web Services (AWS). The Company\'s products include merchandise and content that it purchases for resale from vendors and those offered by third-party sellers', 'BPO', '0-3', '2017-12-30', 'https://www.amazon.in/'),
(2, 'Capgemini', 'With more than 180,000 people in over 40 countries, Capgemini is one of the world\'s foremost providers of consulting, technology and outsourcing services. ... Together with its clients, Capgemini creates and delivers business and technology solutions that fit their needs and drive the results they want.', 'Software Solutions', '0-2', '2017-12-30', 'https://www.capgemini.com/'),
(3, 'Campus Images', 'Campus Images is a Media Solutions Company started by Mr. C. Seetharaman who is the Founder and CEO of this organization. Mr. C. Seetharaman has a very vast experience in the Engineering, Software, Media and Production Industries. His vast experience is inclusive of all aspects of his entrepreneurial skills set both in Real Time Media Production.', 'Multimedia', '0', '2017-12-25', 'http://www.campusimages.us/about.html'),
(4, 'KGFSL', 'India\'s leading software company offering solutions to Investment Banks, Banking, Insurance and other Financial and Capital Market companies.', 'Software Developer', '0-1', '2017-12-15', 'https://www.glassdoor.co.in/Reviews/KGFSL-Reviews-E519479.htm'),
(5, 'Vernalis', 'One of the UK’s leading commercial stage pharmaceutical companies, Vernalis takes promising product candidates along a commercially-focused path to market. We derive pipeline candidates both from successful collaborations with a number of global pharmaceutical businesses and our own research activities. ', 'Software Solutions', '0-3', '2017-12-12', 'http://www.vernalis.com/about-us'),
(6, 'Ugam Solutions', 'Ugam is a global leader in data and analytics, and our clients trust us for our deep domain expertise, end-to-end service, innovation, and high quality insights.\r\nWe recognize that at the heart of every successful company is an outstanding team of people, and that is why our team is made up of experienced, passionate professionals who understand the market and technology, and know how to provide industry-leading service for our clients.', 'Data Analytics', '0-1', '2017-12-07', 'http://www.ugamsolutions.com/careers'),
(7, 'Dell BPO', 'Our comprehensive portfolio delivers industry specific and technology enabled BPO solutions -- solutions that have measurable impact on your core business.', 'Business process outsourcing', '0-3', '2017-12-05', 'http://www.dell.com/en-in/work/learn/by-service-type-business-process-outsourcing'),
(8, 'Skava', 'Networking Manager', 'Networking', '0-3', '0000-00-00', 'www.skava.com/');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `News_ID` int(4) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `Description` varchar(700) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `News_Pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`News_ID`, `TITLE`, `Description`, `Date`, `News_Pic`) VALUES
(1, 'We were \'briefed\' about Jayalalithaa\'s health', 'COIMBATORE: Amid conflicting claims by AIADMK leaders over access to party supremo Jayalalithaa during her hospitalisation, Tamil Nadu Minister O S Manian on Wednesday said the state Health Minister and the Apollo Hospitals Chairman had briefed them about her health status.\r\n\"We were given updates on her health status by (Health Minister C) Vijayabaskar and Apollo Hospitals\' (Pratap C) Reddy,\" he told reporters here.\r\nManian, the handlooms and textile minister, was replying to a specific question on who were the ministers who had seen Jayalalithaa during her 75 days of hospitalisation from September 22 last year.\r\nShe had died on December 5, 2016.', '28-sept-2017', ''),
(2, 'Coimbatore athletes make India proud', 'How often do you see all athletes participating from a city win medals at an international event? These six young lads M Elango Bheeman (23), P Bharath (21), M Venkatesh Prabhu (22), Vignesh Kumar (26), T Manikandan (22), P Ravi Shankar (22) from Coimbatore have made the country proud by bagging gold, silver and bronze medals in the recently concluded seven th Commonwealth Championships at Potchefstroom, South Africa. Coimbatore Times caught up with the medal winners and their coach S Nagarajan for a chat.\r\nAn excited Nagarajan begins, \"A total of 66 players from India took part in the tournament, out of which 58 of them won medals. ', '28-sept-2017', ''),
(3, 'Oviya not part of Kalakalappu 2', 'We recently reported that before beginning his fantasy project sangamithra,director sundar c will be doing kalakalappu 2, a sequel to his earlier comedy superhit film. While the cast finalized for this project included names like jiiva,jai,nikki galrani,mirchi siva and catherine tresa, speculations were rife that actress and Bigg Boss fame Oviya too would be a part of this project. However, Kushboo Sundar, has refuted these rumours saying :', '25-sept-2017', ''),
(4, '493 tribals gets title deeds in Nilgiris', 'The Nilgiris district administration distributed title deeds to 493 tribal people on Tuesday, paving way to implement the Forest Rights Act of 2006.\r\n\r\nAt an event organised here, District Collector, Innocent Divya, said that the tribal people in Chembakolli, Chokkanalli, Ebbanad, Anaikatty, Siriyur, Kengarai, Burliyar, and Kallampalayam got the title deeds.\r\n\r\nShe added that shared spaces will be announced in due course. Ms. Divya said that she planned on visiting all the villages inhabited by indigenous communities to redress their grievances, if any. She asked them to start farm collectives which will help them get benefits from government schemes.\r\n\r\n', '27-sept-2017', ''),
(5, ' Coimbatore gets good rainfall', 'Data from the Tamil Nadu Agricultural University’s Agro Climatic Research Centre shows that as against the South West Monsoon season’s 30-year average of 210 mm, Coimbatore this year had got 288 mm. This was spread over 16 rainy days.\r\n\r\nAccording to the centre’s classification, a day that receives more than 2.50 mm rain is counted as rainy day.\r\n\r\nThe centre said that of the 288 mm the district received, most of it was in September, as it had always been the case. The district received 17 mm spread over two rainy days in June, 28 mm spread over three rainy days in July, 38 mm spread over four rainy days in August and 205 mm spread over seven rainy days in September thus far.\r\n\r\n', '29-sept-2017', ''),
(6, 'Government Asks 1,222 NGOs to Validate Bank', 'Among others, the list includes Sri Ramakrishna Math, Ramakrishna Mission, Indore Cancer Foundation Charitable Trust, Coimbatore Christian Charitable Trust, Delhi School Of Social Work Society, Hindu Anath Ashram and Madani Darut Tarbiyat.', '28-09-2017', '');

-- --------------------------------------------------------

--
-- Table structure for table `orphanage`
--

CREATE TABLE `orphanage` (
  `Orphanage_ID` int(4) NOT NULL,
  `Orphanage_Name` varchar(50) NOT NULL,
  `Address` varchar(650) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `Open_Hours` varchar(20) NOT NULL,
  `Orphanage_Pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orphanage`
--

INSERT INTO `orphanage` (`Orphanage_ID`, `Orphanage_Name`, `Address`, `Phone_no`, `Open_Hours`, `Orphanage_Pic`) VALUES
(1, 'The United Orphanage For The Disabled', '96A, Sathy Main Road, (Via S.S.Kulam), Kurumbapalayam, Coimbatore, Tamil Nadu 641107', 4222667424, '09:00AM-06:00PM', ''),
(2, 'Gologa Brindhavanam Trust', 'Vilankurichi Rd, Aranga Nagar, Renga Nagar, Bharathi Nagar, Coimbatore, Tamil Nadu 641004', 9363006267, '09:00AM-07:00PM', ''),
(3, 'Nizhal Charitable Trust', 'No.5-1, Saravana Nagar, Near Krishna Matric School, Near Krishna Matric School,, TVS Nager to Koundampalayam Rd, Coimbatore, Tamil Nadu 641025', 9842430307, '7:00AM–8:30PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `phone_book`
--

CREATE TABLE `phone_book` (
  `PB_id` int(4) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Address` varchar(650) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `cat_type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_book`
--

INSERT INTO `phone_book` (`PB_id`, `Title`, `Address`, `Phone`, `Category`, `cat_type`) VALUES
(1, 'inexpensivecoders', '3rd Floor,First Street,Raju Naidu Layout, ,100 Ft Road,\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India , 641 012', 4224355066, 'COMPUTER, SOFTWARE, IT, BPO SERVICES', 0),
(2, '123Coimbatore', '\r\nNo 79, Aiswarya Complex Nethaji Road\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India ,', 8220000100, 'COMPUTER, SOFTWARE, IT, BPO SERVICES', 0),
(3, 'Accura Networking', 'Easwaran Layout\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India', 9894146628, 'COMPUTER, SOFTWARE, IT, BPO SERVICES', 0),
(4, 'Ace Infotech', '207\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India', 9842266776, 'COMPUTER, SOFTWARE, IT, BPO SERVICES', 0),
(5, 'Aerie Media', '1A 5th Cross Street Viswanathapuram, Thudiyalur\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India', 9500190637, 'COMPUTER, SOFTWARE, IT, BPO SERVICES', 0),
(6, 'Krishi Industries', '20, Jagruti Estate, Nr Revabhai Estate, Opp Ishvarkrupa Weigh Bridge, Ctm Cross Road, N H No 8, Ctm , Ahmedabad,\r\nCoimbatore , Tamil Nadu , India', 8866022022, 'SERVICES', 0),
(7, 'The Bakery Shop', '1 Moti Park, Shivranjani Cross Road, B/s Maruti Tower, Satellite\r\nAhmedabad , Gujarat , India', 9227547205, 'SERVICES', 0),
(8, ' Swantech, Llc', '6682 N W 16th Terrace\r\nFORT LAUDERDALE , Florida , UNITED STATES 7048694602', 7048694602, 'SERVICES', 0),
(9, 'ScanMaestro Inc', '3796 Avera Lane\r\nNORCROSS , Georgia , United States , 30092', 7702425878, 'SERVICES', 0),
(10, '1-800-Radiator', '4401 Park Road\r\nBENICIA , California , United States , 94510', 8002488720, 'SERVICES', 0),
(11, 'Mahindra Electricals', 'Door No 1 No 834/2, K K Lane.\r\nCoimbatore , Tamil Nadu , India , 641018', 4222387780, 'ELECTRONICS, ELECTRICALS & MOBILES', 0),
(12, 'Aadhi Visuals', '121, Sastri Road, Ramnagar\r\nCoimbatore , Tamil Nadu , India', 9843259944, 'ELECTRONICS, ELECTRICALS & MOBILES', 0),
(13, '5 P Ottathycal', '61/1 A Bypass Road,ukkadam\r\nCoimbatore , Tamil Nadu , India', 4223093369, 'ELECTRONICS, ELECTRICALS & MOBILES', 0),
(14, 'MOBILE CARE', '4/487, Opp. Kamalam Clinic, Veerapandi Pirivu, Pal...\r\nTirupur , Tamil Nadu , India', 4222470684, 'ELECTRONICS, ELECTRICALS & MOBILES', 0),
(15, ' A.B.C MOBILE CARE', '22, Binny Compound Road, Tirupur-1\r\nTirupur , Tamil Nadu , India', 422247068, 'ELECTRONICS, ELECTRICALS & MOBILES', 0),
(16, 'Annai Illam', '17/12 Saibaba Colony, 17/12 Saibaba Colony\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India , 641011', 9842214394, 'FINANCE, INSURANCE & REAL ESTATE', 0),
(17, ' Apr Homes', '164, Maruthachala Puram Road, Kumaranantha Puram, Tirupur-2\r\nTirupur , Tamil Nadu , India', 8754088296, 'FINANCE, INSURANCE & REAL ESTATE', 0),
(18, 'A S R Bricks', '16 Ponamani Illam,\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India', 9865258684, 'FINANCE, INSURANCE & REAL ESTATE', 0),
(19, ' A M Real Estate', '244 Selvakumar Complex Kamaraj Road,\r\nTirupur\r\nTirupur , Tamil Nadu , India', 4214325242, 'FINANCE, INSURANCE & REAL ESTATE', 0),
(20, 'A J Constructions', '6/3, Vivekanadar Street, Netaji Puram,\r\nCoimbatore\r\nCoimbatore , Tamil Nadu , India', 9994598862, 'FINANCE, INSURANCE & REAL ESTATE', 0),
(21, 'A.B.C. TAPES', '1, Senthil Rice Mill Compound, K. Chetti Palayam, Dharapuram Road, Tirupur-8\r\nTirupur , Tamil Nadu , India', 8883430055, 'INDUSTRIES & MANUFACTURERS', 0),
(22, 'ABHINAV COLOURS', '63 N.S.R Road, Saibaba Colony\r\nCoimbatore , Tamil Nadu , India , 641011', 4226561024, 'INDUSTRIES & MANUFACTURERS', 0),
(23, 'ARCHANA INDUSTRIES', '707, AVANASHI ROAD\r\nCoimbatore , Tamil Nadu , India', 4222215512, 'INDUSTRIES & MANUFACTURERS', 0),
(24, 'Balaji machinery', '153,ThaagamRd,Velandipalayam PO\r\nCoimbatore , Tamil Nadu , India , 641025', 4222431256, 'INDUSTRIES & MANUFACTURERS', 0),
(25, 'BALAJI TRADERS & CO', '50, NEW SCHEME ROAD, PAPANAICKENPALAYAM\r\nCoimbatore , Tamil Nadu , India', 4222211519, 'INDUSTRIES & MANUFACTURERS', 0),
(26, 'A M Garments', '46 Pathmavathi Puram, 2nd Street\r\nTirupur , Tamil Nadu , India', 4222425125, 'MANUFACTURING', 0),
(27, ' CANPLY INDIA ', 'Edayarpalayam manal market,\r\nCoimbatore , Tamil Nadu , India , 641008', 9442001175, 'MANUFACTURING', 0),
(28, 'CANPLY INDIA', '153/3,Salem-Kochi by-pass road,\r\nCoimbatore , Tamil Nadu , India , 641103', 9442001175, 'MANUFACTURING', 0),
(29, 'ORIMART', 'P.O. Box No.3795, #264, Dr.Nanjappa Road\r\nCoimbatore , Tamil Nadu , India , 641018', 9894038014, 'MANUFACTURING', 0),
(30, 'ROSINA TRADERS', '176,Palakkad main road,\r\nCoimbatore , Tamil Nadu , India , 641008', 9003442913, 'MANUFACTURING', 0),
(31, 'Aditya Auto Store', 'Kattoor\r\nCoimbatore , Tamil Nadu , India , 641018', 4222232911, 'SHOPS, DEPARTMENTAL STORES, MALIGAI, TRADERS', 0),
(32, 'Annalakshmi Store', 'Podanur\r\nCoimbatore , Tamil Nadu , India , 641023', 4222677532, 'SHOPS, DEPARTMENTAL STORES, MALIGAI, TRADERS', 0),
(33, ' Baby Store', 'Sundarapuram\r\nCoimbatore , Tamil Nadu , India , 641024', 4222676639, 'SHOPS, DEPARTMENTAL STORES, MALIGAI, TRADERS', 0),
(34, ' Jayapaul Store', 'Echanari\r\nCoimbatore , Tamil Nadu , India , 641021', 4222677648, 'SHOPS, DEPARTMENTAL STORES, MALIGAI, TRADERS', 0),
(35, 'Mekala Store', 'Rathinapuri PO\r\nCoimbatore , Tamil Nadu , India , 641027', 4225547464, 'SHOPS, DEPARTMENTAL STORES, MALIGAI, TRADERS', 0),
(36, 'Cabs & Travels India', '249/13 Trichy Road\r\nCoimbatore , Tamil Nadu , India ', 9894233555, 'TRAVELS & TOURISM', 0),
(37, 'A 1 Travels', '249/13 Trichy Road\r\nCoimbatore , Tamil Nadu , India', 9894233555, 'TRAVELS & TOURISM', 0),
(38, 'A R travels', 'Gandhipuram\r\nCoimbatore , Tamil Nadu , India , 641012', 9843011879, 'TRAVELS & TOURISM', 0),
(39, 'Annamalai Travels', '22 A Collector Sivakumar Street\r\nCoimbatore , Tamil Nadu , India', 4222447777, 'TRAVELS & TOURISM', 0),
(40, 'A.V.S. TRAVELS', '87, 1/3, Union Road, Kavundampalayam\r\nCoimbatore , Tamil Nadu , India , 641030', 9360184040, 'TRAVELS & TOURISM', 0),
(41, 'A L T College', '515 Avenue Road\r\nTirupur , Tamil Nadu , India', 4222241092, 'COLLEGES', 0),
(42, 'GLOBAL NETWORK', '12, Sai Tower, Yasothara Ramalingam Layout, Udumalpet\r\nTirupur , Tamil Nadu , India', 4225532508, 'COLLEGES', 0),
(43, 'AIMS EDUCATION', '33, Sabari Road, Binny Compound, Tirupur-1\r\nTirupur , Tamil Nadu , India', 4228695421, 'COLLEGES', 0),
(44, 'Akshara Fun School', '104, Ponnurangam Road (west)\r\nCoimbatore , Tamil Nadu , India', 4222544146, 'COLLEGES', 0),
(45, 'AKSHAYAA ACADEMY', 'Excellent Tutorial Centre, Near Shanthi Theatre,\r\nCoimbatore , Tamil Nadu , India , 641002', 8508473900, 'COLLEGES', 0),
(46, 'B3 Police Station', 'Saravanampatti - Kalapatti Rd, Thiruvannamail Nagar, Ramanandha Nagar, Saravanampatty, Coimbatore, Tamil Nadu 641035', 4222666445, 'Police Station', 1),
(47, 'B6 Police Station', '274, Perundurai-Coimbatore Rd, Peelamedu, Coimbatore, Tamil Nadu 641004', 4222510804, 'Police Station', 1),
(48, 'B11 Police Station', 'Mettuppalayam Rd, Saibaba Koil, Coimbatore, Tamil Nadu 641043', 42227586912, 'Police Station', 1),
(49, 'KMCH', 'Avinashi Road, Coimbatore, Tamil Nadu 641014', 4224323800, 'Hospital', 1),
(50, 'Ramakrishna Hospital', '395, Sarojini Naidu Road, Sidhapudur, Coimbatore, Tamil Nadu 641044', 4224500000, 'Hospital', 1),
(51, 'PSG Hospitals', ' Peelamedu, Coimbatore, Tamil Nadu 641004', 4222570170, 'Hospitals', 1),
(52, 'Ganga Hospital', '313, Mettupalayam Road, Saibaba Koil, Coimbatore, Tamil Nadu 641043', 4222485000, 'Hospital', 1),
(53, 'City Ambulance', '496-A, Cross Cut Rd, Near Ganga Hospital Corner, Ram Nagar, CBE, Gandipuram, Coimbatore, Tamil Nadu 641009', 9943812345, 'Ambulance', 1),
(54, 'KOVAI AMBULANCE ', '4/452, near ganga hospital, Mettupalayam Road, Saibaba Colony, Coimbatore, Tamil Nadu 641034', 9943912345, 'Ambulance', 1),
(55, 'City Ambulance', '496-A, Cross Cut Rd, Near Ganga Hospital Corner, Ram Nagar, CBE, Gandipuram, Coimbatore, Tamil Nadu 641009', 9943812345, 'Ambulance', 1),
(56, 'Thulasi Pharmacy', '270-271, GPK Building, Sathy Road, Ganapathy, Coimbatore, Tamil Nadu 641006', 9843876000, 'Pharmacy', 1),
(57, 'Kovai Medicals', '905, Raja Street, Raja Street, Near Five Corner, Town Hall, Coimbatore, Tamil Nadu 641001', 4222392128, 'Pharmacy', 1),
(58, 'Pasumai Pharmacy', '856, Raja Street, Raja Street, Near Five Corner, Town Hall, Coimbatore, Tamil Nadu 641001', 4222827390, 'Pharmacy', 1),
(59, 'Tamilnadu', ' Mettuppalayam Rd, Themaiyan Street, Koundampalayam, Coimbatore, Tamil Nadu 641030', 4222450101, 'Fire Station', 1),
(60, 'Peelamedu Station', ' periyar nagar, Masakalipalayam, Kalluri Nagar, Peelamedu, Coimbatore, Tamil Nadu 641015', 4222452101, 'Fire Station', 1),
(61, 'SHAKTHI FIRE CONTROL', ' 25,Sri Lakshmi Illam,Nehru Nagar,1st Street, Coimbatore, Tamil Nadu 641006', 9488450011, 'Fire Station', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `Renta_id` int(4) NOT NULL,
  `House_owner` varchar(20) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `House_type` varchar(10) NOT NULL,
  `Rent` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`Renta_id`, `House_owner`, `Area`, `Phone`, `House_type`, `Rent`) VALUES
(1, 'Appu ', '63,Gopal Layout,Ponniya Rajapuram,CBE-641001', '9787552210', '2BHK', 1500),
(2, 'Dhanush', '79,R.S Puram,D.B Road,CBE-641001', '8754088296', '3BHK', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(4) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Blood` varchar(6) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Name`, `DOB`, `Phone`, `email`, `Location`, `Blood`, `Password`) VALUES
(1, 'Aravind', '0000-00-00', 9994433162, 'aravind@gmail.com', 'Saravanampatti', 'AB+ve', 'Aravind');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloods`
--
ALTER TABLE `bloods`
  ADD PRIMARY KEY (`Register_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `educational`
--
ALTER TABLE `educational`
  ADD PRIMARY KEY (`Edu_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`guide_id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`Hospital_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`News_ID`);

--
-- Indexes for table `orphanage`
--
ALTER TABLE `orphanage`
  ADD PRIMARY KEY (`Orphanage_ID`);

--
-- Indexes for table `phone_book`
--
ALTER TABLE `phone_book`
  ADD PRIMARY KEY (`PB_id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`Renta_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bloods`
--
ALTER TABLE `bloods`
  MODIFY `Register_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `educational`
--
ALTER TABLE `educational`
  MODIFY `Edu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `guide_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `Hospital_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `News_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orphanage`
--
ALTER TABLE `orphanage`
  MODIFY `Orphanage_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `phone_book`
--
ALTER TABLE `phone_book`
  MODIFY `PB_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `Renta_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
