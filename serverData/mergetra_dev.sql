-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2017 at 01:37 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mergetra_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_details`
--

CREATE TABLE IF NOT EXISTS `dispatch_details` (
  `RN` varchar(255) DEFAULT NULL,
  `Driver_ID` int(255) NOT NULL,
  `Company` varchar(255) DEFAULT NULL,
  `Contact` varchar(255) DEFAULT NULL,
  `PO` varchar(255) DEFAULT NULL,
  `Origin` varchar(255) DEFAULT NULL,
  `Destination` varchar(255) DEFAULT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Revenue` varchar(255) DEFAULT NULL,
  `Miles` int(255) DEFAULT NULL,
  `DHO` varchar(255) DEFAULT NULL,
  `RPM` varchar(255) DEFAULT NULL,
  `DH_RPM` varchar(255) DEFAULT NULL,
  `Pdate` date DEFAULT NULL,
  `Deldate` date DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `dispatch_details`
--

INSERT INTO `dispatch_details` (`RN`, `Driver_ID`, `Company`, `Contact`, `PO`, `Origin`, `Destination`, `Weight`, `Revenue`, `Miles`, `DHO`, `RPM`, `DH_RPM`, `Pdate`, `Deldate`, `email`) VALUES
('2', 1, 'XPO1', '7048370531', '2811693', 'Brownsville, TX', 'Arlington, TX', '7,680', '500', 12, '14', '41.67', '19.23', '2017-04-03', '2017-04-04', 'charlievansickle262@gmail.com'),
('3', 1, 'TQL', '(513) 831-2600 (51052)', '840-0153', 'STREETSBORO,OH', 'Easton, PA', '40 000 lb', '900', 443, NULL, '2.03', '2.03', '2017-04-04', '0000-00-00', 'charlievansickle262@gmail.com'),
('4', 1, 'TQL', '(800) 580-3101(51185)', '() 840-2874', 'Breinigsville, PA', 'Springfield, VA', '43 506 lb', '500', 220, NULL, '2.27', '2.27', '2017-04-05', '0000-00-00', 'charlievansickle262@gmail.com'),
('5', 1, 'TQL', '(800) 580-3101(51185)', '() 838-0177', 'Baltimore,MD', 'Salem , OH', '43 000 lb', '650', 445, NULL, '1.46', '1.46', '2017-04-06', '0000-00-00', 'charlievansickle262@gmail.com'),
('6', 1, 'TQL', '(800) 580-3101(50678)', '8467064', 'Martel, OH', 'Reading, PA', '41 000 lb', '1,000', 446, '41', '2.24', '2.05', '2017-04-19', '0000-00-00', 'charlievansickle262@gmail.com'),
('7', 1, 'Mode Transportation', 'Derek Lowe 9045925421', 'P124464', 'Camden NJ', 'Springfield VA', '42 650 lb', '550', 219, '67', '2.51', '1.92', '2017-04-20', '0000-00-00', 'charlievansickle262@gmail.com'),
('8', 1, 'GT Worldwide Logistics', 'Nick 8002238973 EXT 1301', '628-167-0417', 'Baltimore MD', 'Middlefield OH', '40 000 lb', '750', 349, '59', '2.15', '1.84', '2017-04-21', '0000-00-00', 'charlievansickle262@gmail.com'),
('9', 3, 'XPO', '(704) 837-0531', '2811693', 'Brownsville, TX', 'Arlington, TX', '7 680 lb', '800', 552, '0', '1.45', '1.45', '2017-04-03', '0000-00-00', 'overdrivellc1@gmail.com'),
('10', 3, 'Coyote Logistics', '(847) 235-7524', '9529886', 'Ft. Worth, TX', 'Sealy, TX', '() 3-6898', '500', 245, '14', '2.04', '1.93', '2017-04-04', '0000-00-00', 'overdrivellc1@gmail.com'),
('11', 3, 'BirdDog Logistics LLC', '(828) 485-5280', 'CL519652', 'Houston, TX', 'San Antonio, TX', '40 000 lb', '500', 249, '0', '2.01', '2.01', '2017-04-05', '0000-00-00', 'overdrivellc1@gmail.com'),
('12', 3, 'Sheer Trans Solutions', '866-200-5884', 'ST29479', 'Marble Falls, TX', 'Houston, TX', '43 lb', '500', 296, '0', '1.69', '1.69', '2017-04-06', '0000-00-00', 'overdrivellc1@gmail.com'),
('13', 3, 'TTS', NULL, '4438755', 'Houston, TX', 'Laredo, TX', '14 400 lb', '550', 331, '0', '1.66', '1.66', '2017-04-07', '0000-00-00', 'overdrivellc1@gmail.com'),
('14', 3, 'Chariot Logistics Inc', '(615) 206-7080', '51773', 'Edinburg, TX', 'San Antonio, TX', '24 000 lb', '500', 229, '21', '2.18', '2.00', '2017-04-10', '0000-00-00', 'overdrivellc1@gmail.com'),
('15', 3, 'Tandem Logistics', '(512) 388-9433', '347784', 'Seguin, TX', 'Houston TX', '35 000 lb', '425', 197, '36', '2.16', '1.82', '2017-04-11', '0000-00-00', 'overdrivellc1@gmail.com'),
('16', 3, 'Bieri Trucking', '(319) 726-3791 (106)', '99341', 'Houston TX', 'San Antonio, TX', '45 000 lb', '450', 197, '20', '2.28', '2.07', '2017-04-12', '0000-00-00', 'overdrivellc1@gmail.com'),
('17', 3, 'Blue Grace', '(813) 906-5798', 'BG234321411', 'San Antonio, TX', 'Dallas TX', '10 000 lb', '475', 275, '6', '1.73', '1.69', '2017-04-13', '0000-00-00', 'overdrivellc1@gmail.com'),
('18', 3, 'TTS', '(210) 551-0737', '4446209', 'Houston, TX', 'Laredo, TX', '9 012 lb', '550', 311, '239', '1.77', '1.00', '2017-04-14', '0000-00-00', 'overdrivellc1@gmail.com'),
('19', 3, 'Celadon Logistics', '(866) 653-1549', '618238LD', 'Laredo, TX', 'Houston, TX', '44 000 lb', '700', 313, '5', '2.24', '2.20', '2017-04-18', '0000-00-00', 'overdrivellc1@gmail.com'),
('20', 3, 'NFI Logistics/NFI Transportation', '(469) 383-3619 Jim', '634459', 'Clute, TX 14.00', 'La Porte TX 15.30', '43 500 lb', '400', 69, '57', '5.80', '3.17', '2017-04-19', '0000-00-00', 'overdrivellc1@gmail.com'),
('21', 3, 'AFN Llc', '877) 236-3734 Marrial', '1264502', 'Missoury City TX 23.00', 'The Woodlands TX 04.30', '44 460 lb', '250', 48, '35', '5.21', '3.01', '2017-04-20', '0000-00-00', 'overdrivellc1@gmail.com'),
('22', 3, 'Coyote Logistics Llc', '773) 799-2118 Chris', '9638089', 'Chanelview, TX 14.00', 'Selma TX 05.00', '36 670 lb', '400', 202, '43', '1.98', '1.63', '2017-04-21', '0000-00-00', 'overdrivellc1@gmail.com'),
('23', 3, 'American National Diversified Inc', '(903) 213-4247', '768575', 'Seguin TX 8-10', 'Weslaco TX', '45 460 lb', '375', 260, '28', '1.44', '1.30', '2017-04-22', '0000-00-00', 'overdrivellc1@gmail.com'),
('24', 3, 'Transworth Logistics', '706-221-4200', '65611', 'Brownsville, TX', 'Ft Worth, TX 2:00', '44 000 lb', '900', 552, '0', '1.63', '1.63', '2017-04-25', '0000-00-00', 'overdrivellc1@gmail.com'),
('25', 3, 'Axle Logistics', '888-500-1699 ex. 140', '67764', 'Ft Worth, TX 15:30', 'Houston, TX 6', '40 000 lb', '500', 287, NULL, '1.74', '1.74', '2017-04-26', '0000-00-00', 'overdrivellc1@gmail.com'),
('26', 3, 'TQL', '800-580-3101 ex52220', '84-8488', 'Seabrook TX 7:30 -15', 'San Antonio TX 7', '44 000 lb', '500', 231, '32', '2.16', '1.90', '2017-04-27', '0000-00-00', 'overdrivellc1@gmail.com'),
('27', 3, 'American National Diversified Inc', '(903) 213-4247', '769366', 'Seguin TX 9', 'Weslaco TX 19', '45 460 lb', '375', 260, '36', '1.44', '1.27', '2017-04-28', '0000-00-00', 'overdrivellc1@gmail.com'),
('28', 3, 'Direct Traffic Solutions', NULL, 'Cancelled', 'Pharr, TX', 'Houston, TX 6', '44 000 lb', '200', 40, '0', '5.00', '5.00', '2017-04-29', '0000-00-00', 'overdrivellc1@gmail.com'),
('29', 7, 'Schneider National', '(214) 887-4427', 'SL202252053', 'Hawthorn, PA', 'Double Spgs, AL', '43 500 lb', '1,250', 785, '57', '1.59', '1.48', '2017-04-04', '0000-00-00', 'goldsealtransport@yahoo.com'),
('30', 7, 'Coyote Logistics', '(877) 626-9683', '$9,582,718.00', 'Tuscumbia, AL', 'Hardinsburgh, KY', '44 000 lb', '900', 301, '15', '2.99', '2.85', '2017-04-05', '0000-00-00', 'goldsealtransport@yahoo.com'),
('31', 7, 'Sureway Transportation', '(803) 720-5359', '3560686', 'Cave Cy, KY', 'Indianapolis, IN', '45 000 lb', '500', 158, '80', '3.16', '2.10', '2017-04-06', '0000-00-00', 'goldsealtransport@yahoo.com'),
('32', 7, 'CH Robinson Company', '(616) 940-1283', '229488564', 'Greenwood,IN', 'Temple,TX', '45 472 lb', '1,600', 1, '11', '1.54', '1.53', '2017-04-07', '0000-00-00', 'goldsealtransport@yahoo.com'),
('33', 7, 'TRAFFIC TECH INC', '877) 517-1119 x1135', 'LDS12302431', 'Bruceville, TX', 'Harrison, AR', '44 000 lb', '850', 517, '17', '1.64', '1.59', '2017-04-13', '0000-00-00', 'goldsealtransport@yahoo.com'),
('34', 7, 'AFN Llc', '(877) 236-3734 Marrial', '1259332', 'Joplin, MO', 'Rosenberg, TX', '36 000 lb', '1,250', 617, '140', '2.03', '1.65', '2017-04-13', '0000-00-00', 'goldsealtransport@yahoo.com'),
('35', 2, 'J & R Schugel Trucking Inc', '(614) 705-0052', '$63,330.00', 'Decatur IL', 'Hinckley OH', '41 000 lb', '900', 472, '88', '1.91', '1.61', '2017-05-01', '2017-05-02', 'overdrivellc1@gmail.com'),
('36', 2, 'Excel Freight Connect', '(855) 393-5378', '03-963071', 'Glenwillow OH ', 'MT Crawford  VA ', '10 200 lb', '950', 372, '25', '2.55', '2.39', '2017-05-02', '2017-05-03', 'overdrivellc1@gmail.com'),
('37', 2, 'XPO Logistics', '(678) 971-0640', '4899436', 'Covington VA ', 'Claremont NC ', '44 000 lb', '500', 248, '18', '2.02', '1.88', '2017-05-03', '2017-05-04', 'overdrivellc1@gmail.com'),
('38', 2, 'Armstrong Transort Group', '(336) 992-0370', '495527', 'Haw River NC ', 'Houston TX ', '15 000 lb', '1,600', 1, '112', '1.39', '1.27', '2017-05-04', '2017-05-05', 'overdrivellc1@gmail.com'),
('39', 2, 'CH Robinson', '(952) 937-2914', '231960731', 'Houston TX ', 'Mission TX ', '37 000 lb', '500', 353, '0', '1.42', '1.42', '2017-05-06', '2017-05-08', 'overdrivellc1@gmail.com'),
('40', 2, 'Cornerstone Systems', '(844) 610-9048', '734289', 'Harlingen TX ', 'Houston TX ', '13,000', '630', 348, '20', '1.81', '1.71', '2017-05-08', '2017-05-08', 'overdrivellc1@gmail.com'),
('41', 4, 'Helix Logistics Llc', '(708) 246-7000', '2017211', 'Birmingham AL ', 'Steelton PA ', '17 455 lb', '1,150', 797, '72', '1.44', '1.32', '2017-05-02', '2017-05-04', 'MichaelB47@aol.com'),
('42', 4, 'Volta Logistcs', '(844) 565-8290', '110421', 'Ronceverte, WV', 'Simpsonville, SC', '11 000 lb', '1,150', 325, '260', '3.54', '1.97', '2017-05-05', '2017-05-06', 'MichaelB47@aol.com'),
('43', 4, 'Psalms Freight', '770-794-7159', '2162', 'Newport TN', 'Tullahoma TN', '20 000 lb', '625', 209, '135', '2.99', '1.82', '2017-05-08', '2017-05-08', 'MichaelB47@aol.com'),
('44', 3, 'Sunset Transportation', '(314) 756-8529', '4382198', 'McAllen TX ', 'Houston, TX', '14,000', '600', 363, '0', '1.65', '1.65', '2017-05-01', '0207-05-01', 'overdrivellc1@gmail.com'),
('45', 3, 'Nolan Transportation', '(843) 518-5924', '1083776', 'Houston TX ', 'Dallas TX  ', '43,500', '545', 239, '0', '2.28', '2.28', '2017-05-02', '2017-05-03', 'overdrivellc1@gmail.com'),
('46', 3, 'JB Hunt', '(844)407-0546', 'JW86470', 'Ft Worth ', 'Houston TX ', '42,600', '450', 261, '33', '1.72', '1.53', '2017-05-03', '2017-05-04', 'overdrivellc1@gmail.com'),
('47', 3, 'Dart Advantage Logistics', '(866) 730-8106', '926425', 'Houston TX ', 'New Braunfels ', '43,800', '475', 177, '0', '2.68', '2.68', '2017-05-04', '2017-05-05', 'overdrivellc1@gmail.com'),
('48', 3, 'American National Diversified Inc', '(903) 213-4247', '770018', 'Seguin TX ', 'Weslaco TX ', '45,460', '375', 260, '22', '1.44', '1.33', '2017-05-05', '2017-05-05', 'overdrivellc1@gmail.com'),
('49', 3, 'CH Robinson', '(800) 428-5377', '232047988', 'Brownsville TX 9 -1630', 'Big Springs TX 8-15', '44,000', '1,150', 580, '44', '1.98', '1.84', '2017-05-08', '2017-05-09', 'overdrivellc1@gmail.com'),
('50', 3, 'Yusen Logistics', '972-244-2461', '9407794', 'Lamesa TX 8-15:30', 'Dallas TX 8 17:30', '43,000', '550', 341, '44', '1.61', '1.43', '2017-05-09', '2017-05-10', 'overdrivellc1@gmail.com'),
('51', 4, 'Bulldog National', '330-686-1106 x 303', '12/067/602507', 'Ellijay GA', 'Reading PA', '10,000', '1800', 730, '140', '2.47', '2.06', '2017-05-09', '2017-05-10', 'MichaelB47@aol.com'),
('52', 2, 'JB Hunt', '(855)337-7879', 'JX79789', 'Houston TX', 'Kennedy TX', '40,000', '450', 180, '0', '2.50', '2.50', '2017-05-09', '2017-05-10', 'overdrivellc1@gmail.com'),
('53', 2, 'American National Diversified Inc', '(903) 213-4247', '770795', 'Seguin TX', 'Weslaco TX', '45,000', '375', 260, '54', '1.44', '1.19', '2017-05-10', '2017-05-10', 'overdrivellc1@gmail.com'),
('54', 1, 'CH Robinson', '8008885624', '232179810', 'Barberton OH', 'Uhrichsville, OH', '44,500', '450', 71, '44', '6.34', '3.91', '2017-05-10', '2017-05-10', 'charlievansickle262@gmail.com'),
('55', 5, 'BNSF Logistics', 'Tyler 336-423-0405', 'LID2366277', 'Gregory TX', 'Brenham TX', '29,000', '450', 193, '39', '2.33', '1.94', '2017-05-09', '2017-05-11', 'toledotransport2012@gmail.com'),
('56', 3, 'American National Diversified Inc', '(903) 213-4247', '770883', 'Seguin TX', 'Weslaco TX', '40,000', '375', 260, '0', '1.44', '1.44', '2017-05-13', '2017-05-13', 'overdrivellc1@gmail.com'),
('57', 5, 'New Concept', '(615) 246-0096', '21212', 'Corpus Christi TX', 'Houston TX', '30,000', '475', 211, '0', '2.25', '2.25', '2017-05-10', '2017-05-11', 'toledotransport2012@gmail.com'),
('58', 3, 'Yusen Logistics', 'Jose (888) 881-1133', '9435007', 'Houston TX 1500', 'San Antonio, TX 0800', '44,000', '425', 197, '0', '2.16', '2.16', '2017-05-12', '2017-05-13', 'overdrivellc1@gmail.com'),
('59', 1, 'Red Classic Transportation', '1-866-768-8809', '1328201', 'Macedonia OH', 'Youngstown OH', '34,500', '300', 53, '57', '5.66', '2.73', '2017-05-11', '2017-05-11', 'charlievansickle262@gmail.com'),
('60', 3, 'TQL', '800-580-3101 x53312', '8581353', 'Arlington TX', 'Galen Park TX', '40,000', '475', 266, '20', '1.79', '1.66', '2017-05-11', '2017-05-11', 'overdrivellc1@gmail.com'),
('61', 1, 'Epes Logistics', '(800) 888-9604', '1149491', 'Willard OH 14', 'Waverly OH 9:30', '26,500', '400', 143, '116', '2.80', '1.54', '2017-05-12', '2017-05-12', 'charlievansickle262@gmail.com'),
('62', 2, 'CH Robinson', '866681448', '232188321', 'Mcallen TX  13', 'Plainfield IN 7am', '12,000', '1900', 1396, '16', '1.36', '1.35', '2017-05-12', '2017-05-15', 'overdrivellc1@gmail.com'),
('63', 4, 'JNI Logistics Llc', '(541) 973-2591', '12769', 'Matawan NJ', 'Rison AR', '17,100', '1350', 1082, '118', '1.25', '1.13', '2017-05-11', '2017-05-15', 'MichaelB47@aol.com'),
('64', 1, 'Cover-It-Freight', '3309834888', '51137', 'Cottageville, WV by 1500', 'Massillon, OH by 2100', '43,000', '500', 157, '80', '3.18', '2.11', '2017-05-13', '2017-05-13', 'charlievansickle262@gmail.com'),
('65', 2, 'Atlantic Logistics', '904.886.3519', '139138', 'Crane IN ', 'Columbus OH', '28,000', '625', 259, '76', '2.41', '1.87', '2017-05-15', '2017-05-16', 'overdrivellc1@gmail.com'),
('66', 3, 'Cavalry Logistics', '615) 324-0588', '758993', 'Mcallen TX', 'Forth Worth TX', '42,850', '800', 500, '14', '1.60', '1.56', '2017-05-15', '2017-05-16', 'overdrivellc1@gmail.com'),
('67', 3, 'TQL', '800-580-3101 x54936', '8586754', 'Forth Worth TX', 'Houston TX', '42,500', '490', 263, '0', '1.86', '1.86', '2017-05-16', '2017-05-17', 'overdrivellc1@gmail.com'),
('68', 2, 'JRayl Transport', '800 929 5092 x 3465', '777355', 'Ashville OH 13 ', 'Atkins VA 6 ', '40,000', '675', 292, '21', '2.31', '2.16', '2017-05-16', '2017-05-17', 'overdrivellc1@gmail.com'),
('69', 2, 'GlobalTranz', '6022454232', '13483070', 'Napoleon OH', 'Memphis TN', '41,500', '1029', 569, '75', '1.81', '1.60', '2017-05-16', '2017-05-17', 'overdrivellc1@gmail.com'),
('70', 3, 'PLS Logistics', '4695134843', '12989952', 'Houston TX', 'Austin TX', '30,000', '500', 169, '0', '2.96', '2.96', '2017-05-17', '2017-05-17', 'overdrivellc1@gmail.com'),
('71', 1, 'WMW Logistics', '8779695644', '1020424', 'Ashland OH', 'Wapakoneta OH', '42,500', '350', 121, '0', '2.89', '2.89', '2017-05-17', '2017-05-17', 'charlievansickle262@gmail.com'),
('72', 1, 'Megacorp Logistics\n', '910) 332-0820', '281196', 'Lodi, OH 14', 'Findlay, OH 18', '43,000', '300', 106, '65', '2.83', '1.75', '2017-05-17', '2017-05-17', 'charlievansickle262@gmail.com'),
('73', 1, 'Red Classic Transprtation Services', '8667688809', '1329136', 'Macedonia OH 7 am', 'Columbus OH 13', '43,400', '500', 133, '57', '3.76', '2.63', '2017-05-18', '2017-05-18', 'charlievansickle262@gmail.com'),
('74', 3, 'Scott Logistics', '904-900-2126', '617106', 'Seguin  17:30', 'Houston  TX 11', '44,200', '500', 162, '0', '3.09', '3.09', '2017-05-18', '2017-05-19', 'overdrivellc1@gmail.com'),
('75', 3, 'NT Logistics', '469-362-5040 x.5164', '21735', 'Houston  TX 16', 'San Antonio TX  23', '44,300', '500', 197, '36', '2.54', '2.15', '2017-05-19', '2017-05-19', 'overdrivellc1@gmail.com'),
('76', 2, 'Addtran Logistics', '224380141', '1428780', 'Memphis TN', 'Alamo TX', '45,000', '1300', 960, '0', '1.35', '1.35', '2017-05-18', '2017-05-19', 'overdrivellc1@gmail.com'),
('77', 6, 'Trinity Logistics', '6124142416', '4894720', 'Houston Tx 8', 'Guernsey WY', '45,000', '3000', 1313, '88', '2.28', '2.14', '2017-05-18', '2017-05-19', 'Sparky@gt.rr.com'),
('78', 3, 'American National Diversified Inc', '(903) 213-4247', '771502', 'Seguin TX 4:30', 'Weslaco TX 15', '44,300', '375', 260, '36', '1.44', '1.27', '2017-05-20', '2017-05-20', 'overdrivellc1@gmail.com'),
('79', 1, 'Spikes Freight Service', '205-978-2121', '102909', 'Wilmington OH 3pm', 'Akron OH', '44,000', '450', 187, '62', '2.41', '1.81', '2017-05-18', '2017-05-19', 'charlievansickle262@gmail.com'),
('80', 1, 'Interstate Freight Carriers', '(440) 349-8109', '336', 'Akron OH', 'Sidney OH', '40,300', '465', 187, '0', '2.49', '2.49', '2017-05-19', '2017-05-19', 'charlievansickle262@gmail.com'),
('81', 4, 'United Logistics', '800-269-9903', '42284', 'Memphis, TN', 'MTN Grove, MO', '6,300', '400', 85, '0', '1.73', '1.73', '2017-05-19', '2017-05-22', 'MichaelB47@aol.com'),
('82', 4, 'Landstar', '205-313-2662', '7844434', 'Tishomingo, MS', 'Jefferson City, MO', '8,000', '650', 470, '73', '1.38', '1.20', '2017-05-18', '2017-05-22', 'MichaelB47@aol.com'),
('83', 2, 'Logistics Planning Services', '855-444-6608', 'KSX-118088', 'Mission TX', 'Lewisville TX 8', '7,000', '900', 536, '15', '1.68', '1.63', '2017-05-19', '2017-05-22', 'overdrivellc1@gmail.com'),
('84', 3, 'XPO', '(704) 837-0617', '4942552', 'Mcallen TX', 'Dallas TX', '44,000', '800', 506, '16', '1.58', '1.53', '2017-05-22', '2017-05-23', 'overdrivellc1@gmail.com'),
('85', 7, 'BNSF Logistics', '(210) 637-0663', 'LID2354067', 'San Antonio, TX', 'Gulfport, MS', '25 000 lb', '1,800', 621, '0', '2.90', '$2.90', '2017-05-02', '2017-05-04', 'goldsealtransport@yahoo.com'),
('86', 7, 'Sureway Transport', '(844) 832-4293', '3599099', 'Calvert, AL', 'Chicago, IL', '38 448 lb', '2,050', 876, '107', '2.34', '$2.09', '2017-05-04', '2017-05-05', 'goldsealtransport@yahoo.com'),
('87', 7, 'Landstar Ranger', '(205) 969-8625', '1630640', 'Chicago, IL', 'Cameron, MO', '40 000 lb', '1,150', 520, '57', '2.21', '$1.99', '2017-05-05', '2017-05-08', 'goldsealtransport@yahoo.com'),
('88', 8, 'TA Services', '(888) 502-9509', '153640', 'Houston, TX', 'Wallingford, CT', '45 000 lb', '4,000', 1, '0', '2.38', '$2.38', '2017-05-05', '2017-05-08', 'Hector@chromeenvironmental.com'),
('89', 9, 'CQTS', '(859) 444-3376', '164457', 'Elkhorn, WI', 'Harrisburg, IL', '32 000 lb', '1,200', 555, '30', '2.16', '$2.05', '2017-05-02', '2017-05-03', 'eulalio.alvarez@gmail.com'),
('90', 9, 'Landstar Ranger', '(855) 848-1555', '1105557', 'E St Louis, IL', 'Chattanooga, TN', '30 000 lb', '1,000', 435, '120', '2.30', '$1.80', '2017-05-03', '2017-05-04', 'eulalio.alvarez@gmail.com'),
('91', 12, 'Online Freight Services', '(651) 468-6869', '650085', 'Hackney, KS', 'Chicago Hts, IL', '48 000 lb', '1,430', 723, '120', '1.98', '$1.70', '2017-04-24', '2017-04-25', 'soonertrucking@gmail.com'),
('92', 12, 'Paramount', '(800) 510-9304', '877402', 'Elgin, IL', 'Livonia, MI', '35 000 lb', '1,150', 540, '38', '2.13', '$1.99', '2017-04-25', '2017-04-26', 'soonertrucking@gmail.com'),
('93', 12, 'R&R Express', '(918) 734-5679', '646-0635-0417', 'Erie, MI', 'Morristown, TN', '48 000 lb', '1,000', 470, '28', '2.13', '$2.01', '2017-04-26', '2017-04-27', 'soonertrucking@gmail.com'),
('94', 12, 'Capital Trans Solutions', '(770) 261-0829', 'LDFM4774', 'Crossville, TN', 'Columbus, OH', '27 000 lb', '1,025', 365, '117', '2.81', '$2.13', '2017-04-27', '2017-04-28', 'soonertrucking@gmail.com'),
('95', 12, 'OTC Logistics', '(770) 775-7503', NULL, 'Delaware, OH', 'Commerce City, CO', '43 000 lb', '2,900', 1, '27', '2.29', '$2.24', '2017-04-28', '2017-05-02', 'soonertrucking@gmail.com'),
('96', 12, 'Worldwide', 'Denise Staton', '3493688', 'Glenpool, OK', 'Milan, IL', '20,000', '1,200', 596, '14', '2.01', '$1.76', '2017-05-08', '2017-05-09', 'soonertrucking@gmail.com'),
('97', 7, 'ITS', 'Molly', '87090', 'Des Moines, IA', 'E Peoria, IL', '10,000', '550', 266, '144', '2.07', '$1.34', '2017-05-08', '2017-05-09', 'goldsealtransport@yahoo.com'),
('98', 8, 'Ecogistics', 'Garrett', '37160', 'Wallingford, CT', 'Chicago, IL', '46,500', '1,000', 896, '16', '1.12', '$1.10', '2017-05-08', '2017-05-09', 'Hector@chromeenvironmental.com'),
('99', 12, 'Landstar', '346-223-0024', '3024008', 'Oglesby, IL', 'Pulaski, PA', '48,000', '950', 490, '17', '1.94', '$1.87', '2017-05-09', '2017-05-10', 'soonertrucking@gmail.com'),
('100', 9, 'RFX Inc.', '810-618-1363', '4296522', 'Indianapolis, IN', 'Troy, MI', '43,000', '800', 309, '80', '2.59', '$2.06', '2017-05-09', '2017-05-10', 'eulalio.alvarez@gmail.com'),
('101', 7, 'Watco Supply', '913-553-2910', '4296522', 'Keokuk, IA', 'Strasburg, OH', '44,000', '1,150', 603, '115', '1.91', '$1.60', '2017-05-09', '2017-05-10', 'goldsealtransport@yahoo.com'),
('102', 12, 'Buchanan Logistics', '260-471-1877', '1786787', 'Vandergrift, PA', 'Carol Stream, IL', '33,185', '1,150', 517, '75', '2.22', '$1.94', '2017-05-10', '2017-05-11', 'soonertrucking@gmail.com'),
('103', 8, 'RLJ Transport', '(336) 625-3300', '61639', 'Chicago, IL', 'Houston, TX', '47,000', '1,900', 1045, '0', '1.82', '$1.82', '2017-05-09', '2017-05-10', 'Hector@chromeenvironmental.com'),
('104', 7, 'Bulldog National', '330-686-1106', '12104', 'Brookfield, OH', 'Garret, IN', '43,938', '800', 270, '83', '2.96', '$2.27', '2017-05-10', '2017-05-11', 'goldsealtransport@yahoo.com'),
('105', 11, 'Mode Transportation', '501-413-2080', '45039', 'Gavenport, IA', 'Dallas, TX', '46,000', '2,000', 866, '2', '2.31', '$2.30', '2017-05-10', '2017-05-12', 'soonertrucking@gmail.com'),
('106', 9, 'United Vision Logistics', '417-673-2773', '2162336', 'Warren, MI', 'Hazlewood, MO', '40,000', '1,300', 563, '20', '2.31', '$2.23', '2017-05-10', '2017-05-11', 'eulalio.alvarez@gmail.com'),
('107', 7, 'Circle 8 Logistics', '312-300-7447', '131065', 'Bremen, IN', 'Lebanon, TN', '8,876', '900', 408, '37', '2.21', '$2.02', '2017-05-11', '2017-05-12', 'goldsealtransport@yahoo.com'),
('108', 9, 'Citation Logistics', '985-641-8233', '46797', 'Granite Cy, IL', 'Channahon, IL', '35,000', '1,000', 247, '13', '4.04', '$3.85', '2017-05-11', '2017-05-12', 'eulalio.alvarez@gmail.com'),
('109', 7, 'Landstar Ranger', '205-271-6541', '4192819', 'Spring Hills, TN', 'Ft Worth, TX', '37,000', '1,700', 693, '59', '2.45', '$2.26', '2017-05-12', '2017-05-15', 'goldsealtransport@yahoo.com'),
('110', 11, 'Texas Freight', '254-898-1117', '61079', 'Waxahachie, TX', 'Pulaski, VA', '45,540', '2,175', 1075, '29', '2.02', '$1.97', '2017-05-12', '2017-05-15', 'soonertrucking@gmail.com'),
('111', 12, 'Rome Transp.', '918-734-5679', '158176', 'Cleveland, OH', 'Hutchinson, KS', '47,690', '1,950', 992, '79', '1.97', '$1.82', '2017-05-12', '2017-05-15', 'soonertrucking@gmail.com'),
('112', 9, 'Worldwide ', '312-994-1393', '176009', 'Melrose Park, IL', 'Middleton, WI', '28,000', '1,200', 148, '46', '8.11', '$6.19', '2017-05-12', '2017-05-12', 'eulalio.alvarez@gmail.com'),
('113', 8, 'Swan Logistics', '817-330-1883', '53-327930', 'Baytown, TX', 'Asherton, TX', '45,000', '1,000', 341, '27', '2.93', '$2.72', '2017-05-12', '2017-05-15', 'Hector@chromeenvironmental.com'),
('114', 11, 'Landstar Ranger', '205-443-7107', '6196039', 'Roanoke, VA', 'Grand Rapids, MI', '46,500', '1,400', 664, '58', '2.11', '$1.94', '2017-05-15', '2017-05-16', 'soonertrucking@gmail.com'),
('115', 7, 'KCH Transport', '770-962-6829', '322053', 'Mt Pleasant, TX', 'Richmond, VA', '40,000', '2,500', 1162, '140', '2.15', '$1.92', '2017-05-15', '2017-05-17', 'goldsealtransport@yahoo.com'),
('116', 8, 'Redwood Multimodal', '312-698-8144', '773039', 'Laredo, TX', 'Jonesboro, AR', '46,500', '1,450', 876, '0', '1.66', '$1.66', '2017-05-15', '2017-05-16', 'Hector@chromeenvironmental.com'),
('117', 12, 'Stutsman Logistics', '319-679-5294', 'L009942', 'Kanopolis, KS', 'Ft Pierre, SD', '46,500', '1,200', 438, '66', '2.74', '$2.38', '2017-05-15', '2017-05-16', 'soonertrucking@gmail.com'),
('118', 10, 'Trinity Logistics', '320-227-7015', '4893052', 'Petersburg, VA', 'Edgerton, WI', '46,720', '1,750', 941, '91', '1.86', '$1.70', '2017-05-16', '2017-05-17', 'Marvins.Transport@gmail.com'),
('119', 12, 'Watco Supply Chains', '913-601-4135', '210461', 'Ipswich, SD', 'Wooster, OH', '41,000', '1,900', 1032, '132', '1.84', '$1.63', '2017-05-16', '2017-05-17', 'soonertrucking@gmail.com'),
('120', 9, 'BNSF Logistics', '937-827-0201', '2373403', 'Bedford Park, IL', 'Laredo, TX', '39,360', '2,550', 1330, '84', '1.92', '$1.80', '2017-05-16', '2017-05-18', 'eulalio.alvarez@gmail.com'),
('121', 8, 'ATS Logistics', '844-890-7973', '3623568', 'Osceola, AR', 'Laredo, TX', '30,651', '2,275', 919, '25', '2.48', '$2.41', '2017-05-16', '2017-05-17', 'Hector@chromeenvironmental.com'),
('122', 11, 'Total Quality Logistics', '(513) 831-2600', '8606799', 'S Band, IN', 'Columbus, OH', '46,000', '750', 253, '106', '2.96', '$2.09', '2017-05-16', '2017-05-17', 'soonertrucking@gmail.com'),
('123', 8, 'Redwood Multimodal', '312-698-8144', '8606799', 'Laredo, TX', 'Gonzales, LA', '40,000', '1,200', 601, '0', '2.00', '$2.00', '2017-05-17', '2017-05-18', 'Hector@chromeenvironmental.com'),
('124', 7, 'Coyote Logistics', '877-626-9683', '9883788', 'Hampton, VA', 'Norcross, GA', '45,000', '1,150', 560, '76', '2.05', '$1.81', '2017-05-17', '2017-05-18', 'goldsealtransport@yahoo.com'),
('125', 10, 'ZMac Transport', '262-664-4151', '9883788', 'Chicago, IL', 'Millersburg, OH', '47,000', '1,125', 358, '126', '3.14', '$2.32', '2017-05-17', '2017-05-18', 'Marvins.Transport@gmail.com'),
('126', 11, 'BESL', '918-734-5679', '700934', 'West Chester, OH', 'Inwood, WV', '45,000', '1,200', 447, '90', '2.68', '$2.23', '2017-05-17', '2017-05-18', 'soonertrucking@gmail.com'),
('127', 12, 'Freight Logistics', '800-866-7882', '341524', 'Chicago, IL', 'Shawnee, OK', '46,000', '1,650', 767, '41', '2.15', '$2.04', '2017-05-19', '2017-05-22', 'soonertrucking@gmail.com'),
('128', 12, 'Trinity Logistics', '320-227-7015', '4895874', 'Columbus, OH', 'Merrillville, IN', '40,000', '1100', 314, '40', '3.50', '3.11', '2017-05-18', '2017-05-19', 'soonertrucking@gmail.com'),
('129', 8, 'Ryan Trans', '913-553-5457', '1062644', 'Zachary, LA', 'Corpus Christi, TX', '43,242', '1400', 492, '39', '2.85', '2.64', '2017-05-18', '2017-05-19', 'Hector@chromeenvironmental.com'),
('130', 7, 'Nolan Transportation', '615-393-8222', '11869', 'Birmingham, AL', 'Wooster, OH', '44,312', '1500', 666, '69', '2.25', '2.04', '2017-05-18', '2017-05-19', 'goldsealtransport@yahoo.com'),
('131', 10, 'Kaplan Trucking', '800-255-3801', '1736', 'Cleveland, OH', 'Kansas City, MO', '45,200', '1400', 767, '32', '1.83', '1.75', '2017-05-18', '2017-05-19', 'Marvins.Transport@gmail.com'),
('132', 11, 'Traffic Tech', '514-343-0044', '12328545', 'Baltimore, MD', 'Tulsa, OK', '40,160', '2200', 1214, '80', '1.81', '1.70', '2017-05-19', '2017-05-22', 'soonertrucking@gmail.com'),
('133', 10, 'R & R Express', '205-957-4365', '808-0123-0517', 'Grandview, MO', 'Atlanta, GA', '30,000', '1750', 836, '30', '2.09', '2.02', '2017-05-19', '2017-05-20', 'Marvins.Transport@gmail.com'),
('134', 7, 'PLS Logistics', '623-?277-4551', '623?2774551', 'Masillion, OH', 'Mineapolis, MN', '25,000', '1600', 763, '24', '2.10', '2.03', '2017-05-19', '2017-05-22', 'goldsealtransport@yahoo.com'),
('135', 10, 'Logistics Made Simple', '423-893-5115', '76224', 'Acworth, GA', 'Philadelphia, PA', '44,500', '2400', 803, '33', '2.99', '2.87', '2017-05-22', '2017-05-23', 'Marvins.Transport@gmail.com'),
('2', 10, 'SheerTrans Logistics', '866-200-5884', 'ST33900', 'Quincy, IL', 'Worland, WY', '42,924', '3350', 1162, '0.00', '2.88', '2.88', '2017-07-28', '2017-07-31', 'Marvins.Transport@gmail.com'),
('3', 10, 'Ameri Co Carriers', '800-546-4288', '2376537', 'Lovell, WY', 'Lansing, MI', '47,000', '2200', 1462, '70.00', '1.50', '1.44', '2017-07-31', '2017-08-02', 'Marvins.Transport@gmail.com'),
('4', 7, 'Greatwide Truckload', '910-508-5528', 'G2539822', 'Richfield, WI', 'Tulsa, OK', '20,000', '1750', 787, '70.00', '2.22', '2.04', '2017-07-28', '2017-07-29', 'goldsealtransport@yahoo.com'),
('5', 15, 'Shipping Connections', '479-795-8036', '64197', 'Warren, AR', 'Pasadena, TX', '48,000', '1075', 396, '81.00', '2.71', '2.25', '2017-07-28', '2017-07-31', 'bracamontestrucking17@gmail.com'),
('6', 7, 'USA Truck Inc', '972-385-8112', '3643351', 'Shawnee, OK', 'La Crosse, WI', '23,712', '2050', 819, '90.00', '2.50', '2.26', '2017-07-29', '2017-07-31', 'goldsealtransport@yahoo.com'),
('7', 15, 'T A Services', '888-502-9527', '173939', 'Houston, TX', 'Mtn Home, AR', '47,500', '1300', 583, '0.00', '2.23', '2.23', '2017-07-31', '2017-08-01', 'bracamontestrucking17@gmail.com'),
('8', 7, 'KCH Transportation', '423-595-8080', '325287', 'Wisconsin Dell, WI', 'Columbus, NE', '40,000', '1300', 503, '91.00', '2.58', '2.19', '2017-07-31', '2017-08-01', 'goldsealtransport@yahoo.com'),
('9', 5, 'Meadow Lark Agency', '406-237-0863', '962472', 'Seguin, TX', 'College Station, TX', '48,000', '475', 160, '36.00', '2.97', '2.42', '2017-08-01', '2017-08-02', 'toledotransport2012@gmail.com'),
('10', 15, 'US Xpress', '423-510-4162', '3117249', 'Mtn View, AR', 'Mangolia, TX', '45,000', '1200', 529, '46.00', '2.27', '2.09', '2017-08-01', '2017-08-02', 'bracamontestrucking17@gmail.com'),
('11', 15, 'PLS Logistics', '724-814-8782', '13162646', 'Seabrook, TX', 'Harrison, AR', '47,000', '1200', 570, '29.00', '2.11', '2.00', '2017-08-03', '2017-08-04', 'bracamontestrucking17@gmail.com'),
('12', 12, '24/7 Express', '888-274-6751', '140877', 'Leonard, OK', 'Dallas, TX', '45,000', '700', 255, '28.00', '2.75', '2.47', '2017-08-01', '2017-08-02', 'soonertrucking@gmail.com'),
('13', 12, 'Four Star Services', '313-386-0100', '1233503', 'Gainsville, TX', 'Wapakoneta, OH', '8,000', '2000', 1030, '61.00', '1.94', '1.83', '2017-08-02', '2017-08-04', 'soonertrucking@gmail.com'),
('14', 7, 'GIX Logistics', '308-398-8541', '3183824', 'Columbus, NE', 'Warsaw, IN', '40,000', '1050', 624, '0.00', '1.68', '1.68', '2017-08-01', '2017-08-02', 'goldsealtransport@yahoo.com'),
('15', 10, 'Trinity Logistics', '262-502-9225', '4973925', 'Quincy, MI', 'Utica, NY', '40,000', '2000', 550, '72.00', '3.64', '3.22', '2017-08-03', '2017-08-04', 'Marvins.Transport@gmail.com'),
('16', 7, 'Total Quality Logistics', '800-580-3101 x51574', '8988280', 'Saint Joseph, MI', 'Harrison, AR', '14,000', '1400', 647, '54.00', '2.16', '2.00', '2017-08-02', '2017-08-03', 'goldsealtransport@yahoo.com'),
('17', 7, 'Landstar', '816-210-6504', '9193588', 'Springdale, AR', 'Muncie, IN', '11,000', '1200', 655, '73.00', '1.83', '1.65', '2017-08-03', '2017-08-04', 'goldsealtransport@yahoo.com'),
('18', 7, 'Armstrong Logistics', '724-859-5972', '6877', 'Franklin, OH', 'Seward, NE', '40,939', '2000', 801, '73.00', '2.50', '2.29', '2017-08-04', '2017-08-07', 'goldsealtransport@yahoo.com'),
('19', 7, 'Landstar', '828-756-4536', '9557202', 'Valley, NE', 'Morton, IL', '1,000', '800', 430, '63.00', '1.86', '1.62', '2017-08-07', '2017-08-08', 'goldsealtransport@yahoo.com'),
('20', 12, 'Trident Transport', '423-805-3705', '14251', 'Hilliard, OH', 'Huntington, TN', '45,000', '1650', 464, '26.00', '3.56', '3.37', '2017-08-04', '2017-08-07', 'soonertrucking@gmail.com'),
('21', 12, 'Circle 8 Logistics', '312-300-7447 x7605', '146937', 'Memphis, TN', 'Medina, OH', '45,000', '1750', 702, '119.00', '2.49', '2.13', '2017-08-07', '2017-08-08', 'soonertrucking@gmail.com'),
('22', 5, 'Online Freight Solutions', '800-284-2603', '679145', 'Corpus Christi, TX', 'La Porte, TX', '35,000', '600', 232, '31.00', '2.59', '2.28', '2017-08-04', '2017-08-04', 'toledotransport2012@gmail.com'),
('23', 10, 'Buchanan Logistics', '260-471-1877', '1823990', 'Rome, NY', 'Holland, MI', '24,000', '1500', 760, '16.00', '1.97', '1.93', '2017-08-04', '2017-08-07', 'Marvins.Transport@gmail.com'),
('24', 15, 'Chrome Environmental', '866-229-6300', '5139802', 'Calico Rock, AR', 'Kansas City, MO', '45,000', '1350', 302, '146.00', '4.47', '3.01', '2017-08-07', '2017-08-08', 'bracamontestrucking17@gmail.com'),
('25', 10, 'AG Specialties', '832-786-2144', '1746', 'Ludington, MI', 'Leetsdale, PA', '46,000', '1100', 498, '7.00', '2.21', '2.18', '2017-08-07', '2017-08-08', 'Marvins.Transport@gmail.com'),
('26', 17, 'Freight Tec', '866-867-0230', '30303', 'Memphis, TN', 'Middle Point, OH', '10,310', '900', 630, '138.00', '1.43', '1.17', '2017-08-07', '2017-08-08', 'queencitytrucking@gmail.com'),
('27', 12, 'Kirsch Transportation', '877-341-9611', '58903', 'Vienna, OH', 'McDonough, GA', '44,000', '1550', 735, '67.00', '2.11', '1.93', '2017-08-08', '2017-08-10', 'soonertrucking@gmail.com'),
('28', 7, 'Total Quality Logistics', '800-580-3101 x52230', '9012125', 'Springdale, IL', 'Greencastle, PA', '7,000', '1550', 700, '67.00', '2.21', '2.02', '2017-08-08', '2017-08-09', 'goldsealtransport@yahoo.com'),
('29', 10, 'LMO Transport', '440-338-3000', '3375919', 'Chardon, OH', 'Dalton, GA', '44,000', '1700', 646, '21.00', '2.63', '2.55', '2017-08-09', '2017-08-10', 'Marvins.Transport@gmail.com'),
('30', 15, 'US LOGISTICS', '330-879-1189', '479570', 'Ft Riley, KS', 'Hooks, TX', '18,312', '950', 517, '47.00', '1.84', '1.68', '2017-08-09', '2017-08-10', 'bracamontestrucking17@gmail.com'),
('31', 7, 'J. B. Express', '740-702-9830', '247807', 'Baltimore, MD', 'Mtn Hope, WV', '20,000', '1000', 354, '85.00', '2.82', '2.28', '2017-08-09', '2017-08-10', 'goldsealtransport@yahoo.com'),
('32', 17, 'D&D Transportation', '501-850-5205', '77775', 'Pandora, OH', 'Springfield, TN', '4,000', '700', 404, '30.00', '1.73', '1.61', '2017-08-09', '2017-08-10', 'queencitytrucking@gmail.com'),
('33', 17, 'D&D Transportation', '501-850-5205', '7778', 'Springfield, TN', 'Alsip, IL', '2,074', '850', 450, '0.00', '1.89', '1.89', '2017-08-10', '2017-08-11', 'queencitytrucking@gmail.com'),
('34', 1, 'Landstar', '(828) 726-7319', '8831869', 'Strongsville OH', 'Clyde OH', '20,000', '625', 157, '48.00', '3.98', '3.05', '2017-07-28', '2017-07-28', 'charlievansickle262@gmail.com'),
('35', 3, 'Go By Truck', '417-501-8919', '16340', 'Houston TX', 'San Antonio TX', '6,000', '923', 197, '0.00', '4.69', '4.69', '2017-07-27', '2017-07-28', 'overdrivellc1@gmail.com'),
('36', 3, 'Transfix', '9252312608', '42967', 'Irving TX', 'Houton TX', '37,000', '550', 251, '14.00', '2.19', '2.08', '2017-08-01', '2017-08-02', 'overdrivellc1@gmail.com'),
('37', 3, 'Arc Best', '(479) 494-6800', '426691831', 'Pharr TX', 'Irving TX', '19,000', '900', 512, '12.00', '1.76', '1.72', '2017-07-31', '2017-08-01', 'overdrivellc1@gmail.com'),
('38', 4, 'Guilded Logistics', '(330) 274-1070 (p)', '119628', 'York PA', 'Butler IN', '5,800', '770', 498, '161.00', '1.55', '1.17', '2017-07-31', '2017-08-01', 'MichaelB47@aol.com'),
('39', 4, 'JT', '4175818200', '13454', 'Mechansiburg PA', 'Renselaer IN', '11,000', '575', 161, '0.00', '3.57', '3.57', '2017-07-31', '2017-08-01', 'MichaelB47@aol.com'),
('40', 7, 'Bourne', '417-782-5880', '35200', 'Aberdeen MD', 'Fort Bragg NC', '9,000', '725', 393, '44.00', '1.84', '1.66', '2017-08-01', '2017-08-02', 'goldsealtransport@yahoo.com'),
('41', 2, 'TTS', '817-405-3322', '4575144', 'Pharr TX', 'Cambridge OH', '4,500', '2100', 1619, '12.00', '1.30', '1.29', '2017-08-01', '2017-08-03', 'overdrivellc1@gmail.com'),
('42', 6, 'RJS Logistics', '(954) 784-5706', '11596', 'Deming NM', 'Joliet IL', '4,500', '2100', 1420, '100.00', '1.48', '1.38', '2017-08-01', '2017-08-04', 'Sparky@gt.rr.com'),
('43', 2, 'Cam Logistics', '(614) 409-1776', '227570', 'Dover OH', 'West Point VA', '42,000', '1300', 465, '38.00', '2.80', '2.58', '2017-08-03', '2017-08-04', 'overdrivellc1@gmail.com'),
('44', 3, 'Polaris Logistics', '832-783-9729', '128588', 'Houston TX', 'Grand Prairie TX', '42,000', '575', 253, '0.00', '2.27', '2.27', '2017-08-02', '2017-08-03', 'overdrivellc1@gmail.com'),
('45', 7, 'Trinity', '(262) 502-9225', '4972770', 'Sumter NC', 'Randallstown MD', '15,000', '1300', 498, '137.00', '2.61', '2.05', '2017-08-02', '2017-08-03', 'goldsealtransport@yahoo.com'),
('46', 1, 'Haulmark Services', '6362871045', '76678', 'Napoleon OH', 'Youngstown OH', '42,000', '700', 202, '65.00', '3.47', '2.62', '2017-08-03', '2017-08-04', 'charlievansickle262@gmail.com'),
('47', 1, 'Southland', '(877) 900-6744', '437097', 'Akron OH', 'Wapakoneta OH', '44,000', '425', 169, '50.00', '2.51', '1.94', '2017-08-03', '2017-08-03', 'charlievansickle262@gmail.com'),
('48', 3, 'Transfix', '925-231-2608', '45508', 'Arlington TX', 'Houston TX', '43,000', '550', 254, '7.00', '2.17', '2.11', '2017-08-03', '2017-08-04', 'overdrivellc1@gmail.com'),
('49', 4, 'RS Logistics', '865-988-7557', '1590', 'Indianapolis IN', 'Knoxville TN', '5,000', '700', 357, '107.00', '1.96', '1.51', '2017-08-02', '2017-08-03', 'MichaelB47@aol.com'),
('50', 6, 'CH Robinson', '(915) 282-3251', '239136078', 'Chicago IL', 'Lexington SC', '25,000', '1725', 803, '47.00', '2.15', '2.03', '2017-08-04', '2017-08-07', 'Sparky@gt.rr.com');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2017_07_16_141542_add_mobile_no_columns_to_users_table', 2),
(16, '2017_07_16_142228_add_mobile_no_columns_to_userss_table', 3),
(18, '2017_07_16_142456_remove_mobile_no_columns_to_userss_table', 4),
(20, '2017_07_17_215407_delete_user_field', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `is_active` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Driver_ID` int(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `role`, `is_active`, `remember_token`, `created_at`, `updated_at`, `Driver_ID`) VALUES
(2, 'qwe', 'qwe', '123123123', 'Justin.taylor@mergetransit.com ', '$2y$10$4xKcmcOsvadRKjk2iAfxzuibZ/vvWLjmv9Ps/tljowG927qJovVXW', 2, '1', 'n3WhfPANPCJUImAdih6cdpjWZuCTXQUKit15ImUJAWXz1lJtKbUP0u7q2UaH', '2017-07-18 13:29:23', '2017-07-18 13:29:23', 0),
(3, 'asd', 'asd', '123123', 'asd@asd.com', '$2y$10$dNAshdqdBKi95.1eNtwWoOM1usHNkOchdibq.qpBa0S0TVxoPOcOq', 0, '1', 'pmmvCqsGjlGaUe1nZZgVgOD1xJc9wMa4U1fxZ3tv7bdqWcS4zXVHyEWuKAHc', '2017-07-18 14:55:55', '2017-07-18 14:55:55', 0),
(4, 'Sanjay', 'Agnani', '9601486744', 'sanjayagnani92@gmail.com', '$2y$10$YbbCfO3DxoeweuOqWoekA.d3lVLHBIl8eby4EsY1QLeph3EynYiBm', 0, '1', '7wiL0JVXRh35Obzl2Hy3hYDvDv9667hj1Hx8r3kUR8oEK0FAZjG8o5iyIoXr', '2017-07-26 20:26:30', '2017-07-26 20:26:30', 0),
(5, 'Ajay', 'Jogi', '123123123', 'ajayjogi@gmail.com', '$2y$10$bJJHSnrvE37gO49GpwHcu.SvGjCPO1Ro8LxfS7nqGCZYGjImnQir.', 3, '1', 'zcnSmcEbeOqLLdKM11D2rVTAtBTD6wSO1avgfQafoY4sTz3iRaZGLcEV4JUQ', '2017-08-03 15:52:57', '2017-08-03 15:52:57', 0),
(6, 'Sanjay', 'Agnani1', '123', 'sanjayagnani@gmail.com', '$2y$10$PcGppbS/5yCZh0VAf3m1IeBundpgpvZ6aws46gGcR7uTxwVDrI39m', 0, '1', NULL, '2017-08-15 17:06:00', '2017-08-15 17:06:00', 0),
(123, 'Charlie', 'Charlie Vansickle', '419-606-3942', 'charlievansickle262@gmail.com', '$2a$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', 'cG526sXW8VwNPieF4kK0IMyCW5RcgriTQHkJUtuSYC4Ve0DUBB8vvTGksrDa', NULL, NULL, 1),
(124, 'Danny', 'Overdrive LLC (Danny)', '956-246-2758', 'overdrivellc1@gmail.com', '$2a$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 2),
(125, 'Mike', '129 Hotshot (Michael B)', '205-495-3678', 'MichaelB47@aol.com', '$2a$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 4),
(126, 'Enrique', 'Toledo Transport (Graciela)', '832-830-7699', 'toledotransport2012@gmail.com', '$2a$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 5),
(127, 'Gordon', 'Morningstar (Gordon)', '409-201-7974', 'Sparky@gt.rr.com', '$2a$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', '2lbgcr4UbXXYB2gurJ9gtCq1r1bDaVfoKbLktso7gzeLqIna8KCzn0YLNDwa', NULL, NULL, 6),
(128, 'Lupe', 'Lupe Martinez (Gold Seal)', '956-244-4652', 'goldsealtransport@yahoo.com', '$2a$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 7),
(129, 'Hector', 'Hector (Chrome Environmental)', '281-889-7009', 'Hector@chromeenvironmental.com', '$2a$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 8),
(130, 'Lalo', 'Lalo Alvarex (AB Trucking)', '956-207-6276', 'eulalio.alvarez@gmail.com', '$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 9),
(131, 'Marvin', 'Marvins Transport - Marvin', '703-919-1975', 'Marvins.Transport@gmail.com', '$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 10),
(132, 'Michael', 'Sooner Trucking - Michael', '918-734-5679', 'soonertrucking@gmail.com', '$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 11),
(133, 'Hugo Bracamontes', 'Bracamontes Trucking (Aracely)', '915-282-3251', 'bracamontestrucking17@gmail.com', '$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 15),
(134, 'Luis Torres', '5 Bright Stars Trucking (Luis)', '336-268-0020', 'fivebst@hotmail.com', '$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 16),
(135, 'Rebecca Waling', 'Queen City Trucking (Driver 1)', '469-620-2474', 'queencitytrucking@gmail.com', '$06$NfJ/g6G8AVr/phrGvPzP0uEKU9zl8/fNBpl1shXLdNYW3wT.NG5BK', 3, '1', NULL, NULL, NULL, 17),
(6, 'Joanna', 'Shine', '883997701', 'joanna.shine@mergetransit.com', '$2y$10$A0PRS/clhHMV7m3oD2J/IeJRx2fKfGaaJ26gOB0OLmnIi.Kjh.Gxq', 0, '1', NULL, '2017-08-08 14:23:10', '2017-08-08 14:23:10', 0),
(7, 'john', 'john', '9601486744', 'john@gmail.com', '$2y$10$Wa3v9tLJdqCJC.CFQCY.puH09qLd3pEctema5JemXHiOxqgva4bwG', 0, '1', NULL, '2017-08-08 14:56:45', '2017-08-08 14:56:45', 0),
(8, 'Frank', 'Curtis', '2108760554', 'frank@mergetransit.com', '$2y$10$OvIT9lpxxEutD3zJHPvGGu7wApgxll5lVIbvFujVosdym4b18mb8G', 0, '1', NULL, '2017-08-09 17:30:58', '2017-08-09 17:30:58', 0),
(0, 'Sanjay', 'Agnani', '1234566789', 'sanjayagnani992@gmail.com', '$2y$10$.irPhDl95FvrED08.GXqkOsobwVU3PrwSj98T49YjPKLz.oDSMnBS', 0, '1', '2BRFMyfjaNCYLCiGRFuwcHkhnZirq2N70HoaMFJEzkYa9BqN9cpCKjBkrKDA', '2017-08-22 18:37:18', '2017-08-22 18:37:18', 0),
(0, 'wide', 'dev', '123456', 'webdev.star1@gmail.com', '$2y$10$zXv17EVgoUY9Sm4KYZblv.Ho27KXhHy2j1Z8ek5l94xX3zCHduOKK', 0, '1', NULL, '2017-08-26 04:24:48', '2017-08-26 04:24:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_old`
--

CREATE TABLE IF NOT EXISTS `users_old` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `is_active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_old`
--

INSERT INTO `users_old` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `role`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'qwe', 'qwe', '123123123', 'Justin.taylor@mergetransit.com ', '$2y$10$4xKcmcOsvadRKjk2iAfxzuibZ/vvWLjmv9Ps/tljowG927qJovVXW', 2, '1', 'kwoQlZJjdLQtp5kVkdw9HRnL3HwjXqM1I9CYW72NVxRzTXBhNQXEYIbcgcrz', '2017-07-18 02:59:23', '2017-07-18 02:59:23'),
(3, 'asd', 'asd', '123123', 'asd@asd.com', '$2y$10$dNAshdqdBKi95.1eNtwWoOM1usHNkOchdibq.qpBa0S0TVxoPOcOq', 0, '1', 'pmmvCqsGjlGaUe1nZZgVgOD1xJc9wMa4U1fxZ3tv7bdqWcS4zXVHyEWuKAHc', '2017-07-18 04:25:55', '2017-07-18 04:25:55'),
(4, 'Sanjay', 'Agnani', '9601486744', 'sanjayagnani92@gmail.com', '$2y$10$YbbCfO3DxoeweuOqWoekA.d3lVLHBIl8eby4EsY1QLeph3EynYiBm', 0, '1', 'ZGE2yxjZ1bG0Ubdz4VDbAthNG4PSAQaVxKhOvDnK2w79y7Z9MvR7IcsEKHur', '2017-07-26 09:56:30', '2017-07-26 09:56:30'),
(5, 'ajay', 'shah', '9601486744', 'ajayshah@gmail.com', '$2y$10$4ev.Lox6wnyT8EKBf/kP4eHpZiMXlsHtk0gCXOANIn3m.0Q.kUNIK', 0, '1', 'k24IpKMVJqoxaMbfiibadJqTuhzak9VrhUkzXvc6mV8BBOPv5rOnhlVihMQR', '2017-08-08 09:04:18', '2017-08-08 09:04:18'),
(6, 'Joanna', 'Shine', '883997701', 'joanna.shine@mergetransit.com', '$2y$10$A0PRS/clhHMV7m3oD2J/IeJRx2fKfGaaJ26gOB0OLmnIi.Kjh.Gxq', 0, '1', NULL, '2017-08-08 14:23:10', '2017-08-08 14:23:10'),
(7, 'john', 'john', '9601486744', 'john@gmail.com', '$2y$10$Wa3v9tLJdqCJC.CFQCY.puH09qLd3pEctema5JemXHiOxqgva4bwG', 0, '1', NULL, '2017-08-08 14:56:45', '2017-08-08 14:56:45'),
(8, 'Frank', 'Curtis', '2108760554', 'frank@mergetransit.com', '$2y$10$OvIT9lpxxEutD3zJHPvGGu7wApgxll5lVIbvFujVosdym4b18mb8G', 0, '1', NULL, '2017-08-09 17:30:58', '2017-08-09 17:30:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users_old`
--
ALTER TABLE `users_old`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users_old`
--
ALTER TABLE `users_old`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
