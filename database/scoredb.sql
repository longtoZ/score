-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 04:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tieu`
--

CREATE TABLE `chi_tieu` (
  `NAM_HOC` int(25) NOT NULL,
  `MA_TRUONG` varchar(250) CHARACTER SET utf8 NOT NULL,
  `MA_NV` varchar(25) CHARACTER SET utf8 NOT NULL,
  `CHI_TIEU` int(25) NOT NULL,
  `SO_LUONG` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chi_tieu`
--

INSERT INTO `chi_tieu` (`NAM_HOC`, `MA_TRUONG`, `MA_NV`, `CHI_TIEU`, `SO_LUONG`) VALUES
(2021, 'HCM_1', 'NV1', 675, 1349),
(2021, 'HCM_10', 'NV1', 405, 173),
(2021, 'HCM_100', 'NV1', 540, 289),
(2021, 'HCM_101', 'NV1', 540, 330),
(2021, 'HCM_102', 'NV1', 900, 1515),
(2021, 'HCM_103', 'NV1', 675, 1318),
(2021, 'HCM_104', 'NV1', 540, 914),
(2021, 'HCM_105', 'NV1', 630, 999),
(2021, 'HCM_106', 'NV1', 675, 1220),
(2021, 'HCM_107', 'NV1', 630, 620),
(2021, 'HCM_108', 'NV1', 675, 858),
(2021, 'HCM_11', 'NV1', 955, 1557),
(2021, 'HCM_12', 'NV1', 585, 320),
(2021, 'HCM_13', 'NV1', 630, 402),
(2021, 'HCM_14', 'NV1', 675, 689),
(2021, 'HCM_15', 'NV1', 140, 219),
(2021, 'HCM_16', 'NV1', 1035, 1437),
(2021, 'HCM_17', 'NV1', 190, 520),
(2021, 'HCM_18', 'NV1', 810, 1259),
(2021, 'HCM_19', 'NV1', 360, 176),
(2021, 'HCM_2', 'NV1', 630, 1219),
(2021, 'HCM_20', 'NV1', 810, 1937),
(2021, 'HCM_21', 'NV1', 675, 1069),
(2021, 'HCM_22', 'NV1', 720, 783),
(2021, 'HCM_23', 'NV1', 675, 887),
(2021, 'HCM_24', 'NV1', 585, 852),
(2021, 'HCM_25', 'NV1', 630, 266),
(2021, 'HCM_26', 'NV1', 630, 1357),
(2021, 'HCM_27', 'NV1', 180, 242),
(2021, 'HCM_28', 'NV1', 450, 537),
(2021, 'HCM_29', 'NV1', 630, 203),
(2021, 'HCM_3', 'NV1', 585, 762),
(2021, 'HCM_30', 'NV1', 630, 994),
(2021, 'HCM_31', 'NV1', 540, 138),
(2021, 'HCM_32', 'NV1', 585, 690),
(2021, 'HCM_33', 'NV1', 450, 184),
(2021, 'HCM_34', 'NV1', 675, 820),
(2021, 'HCM_35', 'NV1', 585, 649),
(2021, 'HCM_36', 'NV1', 540, 324),
(2021, 'HCM_37', 'NV1', 630, 347),
(2021, 'HCM_38', 'NV1', 405, 425),
(2021, 'HCM_39', 'NV1', 675, 889),
(2021, 'HCM_4', 'NV1', 150, 56),
(2021, 'HCM_40', 'NV1', 510, 832),
(2021, 'HCM_41', 'NV1', 675, 401),
(2021, 'HCM_42', 'NV1', 360, 251),
(2021, 'HCM_43', 'NV1', 225, 132),
(2021, 'HCM_44', 'NV1', 420, 587),
(2021, 'HCM_46', 'NV1', 765, 771),
(2021, 'HCM_47', 'NV1', 675, 1197),
(2021, 'HCM_48', 'NV1', 810, 1373),
(2021, 'HCM_49', 'NV1', 630, 862),
(2021, 'HCM_5', 'NV1', 270, 527),
(2021, 'HCM_50', 'NV1', 630, 438),
(2021, 'HCM_51', 'NV1', 855, 1034),
(2021, 'HCM_52', 'NV1', 540, 1691),
(2021, 'HCM_53', 'NV1', 675, 452),
(2021, 'HCM_54', 'NV1', 675, 642),
(2021, 'HCM_55', 'NV1', 810, 1195),
(2021, 'HCM_56', 'NV1', 630, 592),
(2021, 'HCM_57', 'NV1', 855, 1519),
(2021, 'HCM_58', 'NV1', 810, 1273),
(2021, 'HCM_59', 'NV1', 855, 1393),
(2021, 'HCM_6', 'NV1', 585, 693),
(2021, 'HCM_60', 'NV1', 720, 1655),
(2021, 'HCM_61', 'NV1', 545, 384),
(2021, 'HCM_62', 'NV1', 675, 826),
(2021, 'HCM_63', 'NV1', 720, 925),
(2021, 'HCM_64', 'NV1', 675, 1667),
(2021, 'HCM_65', 'NV1', 450, 1484),
(2021, 'HCM_66', 'NV1', 720, 774),
(2021, 'HCM_67', 'NV1', 495, 1383),
(2021, 'HCM_68', 'NV1', 720, 1613),
(2021, 'HCM_69', 'NV1', 585, 762),
(2021, 'HCM_7', 'NV1', 585, 422),
(2021, 'HCM_70', 'NV1', 675, 662),
(2021, 'HCM_71', 'NV1', 630, 505),
(2021, 'HCM_72', 'NV1', 675, 573),
(2021, 'HCM_73', 'NV1', 540, 484),
(2021, 'HCM_74', 'NV1', 675, 702),
(2021, 'HCM_75', 'NV1', 675, 696),
(2021, 'HCM_76', 'NV1', 585, 361),
(2021, 'HCM_77', 'NV1', 495, 188),
(2021, 'HCM_78', 'NV1', 675, 197),
(2021, 'HCM_79', 'NV1', 675, 832),
(2021, 'HCM_8', 'NV1', 450, 1041),
(2021, 'HCM_80', 'NV1', 585, 383),
(2021, 'HCM_81', 'NV1', 45, 29),
(2021, 'HCM_82', 'NV1', 280, 256),
(2021, 'HCM_83', 'NV1', 320, 303),
(2021, 'HCM_84', 'NV1', 360, 372),
(2021, 'HCM_85', 'NV1', 675, 955),
(2021, 'HCM_86', 'NV1', 495, 634),
(2021, 'HCM_87', 'NV1', 450, 537),
(2021, 'HCM_88', 'NV1', 675, 1033),
(2021, 'HCM_89', 'NV1', 405, 258),
(2021, 'HCM_9', 'NV1', 585, 1564),
(2021, 'HCM_90', 'NV1', 540, 688),
(2021, 'HCM_91', 'NV1', 540, 859),
(2021, 'HCM_92', 'NV1', 630, 948),
(2021, 'HCM_93', 'NV1', 585, 1033),
(2021, 'HCM_94', 'NV1', 675, 1107),
(2021, 'HCM_95', 'NV1', 540, 414),
(2021, 'HCM_96', 'NV1', 540, 941),
(2021, 'HCM_97', 'NV1', 720, 1109),
(2021, 'HCM_98', 'NV1', 675, 1130),
(2021, 'HCM_99', 'NV1', 360, 386);

-- --------------------------------------------------------

--
-- Table structure for table `diem_chuan`
--

CREATE TABLE `diem_chuan` (
  `NAM_HOC` int(25) NOT NULL,
  `MA_TRUONG` varchar(250) CHARACTER SET utf8 NOT NULL,
  `MA_NV` varchar(250) CHARACTER SET utf8 NOT NULL,
  `DIEM` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diem_chuan`
--

INSERT INTO `diem_chuan` (`NAM_HOC`, `MA_TRUONG`, `MA_NV`, `DIEM`) VALUES
(2021, 'HCM_1', 'NV1', 24.1),
(2021, 'HCM_1', 'NV2', 24.3),
(2021, 'HCM_1', 'NV3', 24.9),
(2021, 'HCM_10', 'NV1', 18.5),
(2021, 'HCM_10', 'NV2', 19),
(2021, 'HCM_10', 'NV3', 19.4),
(2021, 'HCM_100', 'NV1', 17),
(2021, 'HCM_100', 'NV2', 17.3),
(2021, 'HCM_100', 'NV3', 17.6),
(2021, 'HCM_101', 'NV1', 18.8),
(2021, 'HCM_101', 'NV2', 19),
(2021, 'HCM_101', 'NV3', 19.2),
(2021, 'HCM_102', 'NV1', 23.6),
(2021, 'HCM_102', 'NV2', 23.9),
(2021, 'HCM_102', 'NV3', 24.3),
(2021, 'HCM_103', 'NV1', 22.2),
(2021, 'HCM_103', 'NV2', 22.5),
(2021, 'HCM_103', 'NV3', 22.8),
(2021, 'HCM_104', 'NV1', 20.3),
(2021, 'HCM_104', 'NV2', 20.6),
(2021, 'HCM_104', 'NV3', 20.8),
(2021, 'HCM_105', 'NV1', 21.4),
(2021, 'HCM_105', 'NV2', 21.9),
(2021, 'HCM_105', 'NV3', 22.4),
(2021, 'HCM_106', 'NV1', 21.3),
(2021, 'HCM_106', 'NV2', 21.6),
(2021, 'HCM_106', 'NV3', 21.9),
(2021, 'HCM_107', 'NV1', 19.3),
(2021, 'HCM_107', 'NV2', 19.4),
(2021, 'HCM_107', 'NV3', 20),
(2021, 'HCM_108', 'NV1', 19.8),
(2021, 'HCM_108', 'NV2', 20.1),
(2021, 'HCM_108', 'NV3', 20.4),
(2021, 'HCM_11', 'NV1', 22.8),
(2021, 'HCM_11', 'NV2', 23.2),
(2021, 'HCM_11', 'NV3', 23.3),
(2021, 'HCM_12', 'NV1', 20.2),
(2021, 'HCM_12', 'NV2', 20.6),
(2021, 'HCM_12', 'NV3', 20.8),
(2021, 'HCM_13', 'NV1', 18.1),
(2021, 'HCM_13', 'NV2', 18.5),
(2021, 'HCM_13', 'NV3', 18.8),
(2021, 'HCM_14', 'NV1', 20),
(2021, 'HCM_14', 'NV2', 20.5),
(2021, 'HCM_14', 'NV3', 20.6),
(2021, 'HCM_15', 'NV1', 22.9),
(2021, 'HCM_15', 'NV2', 23.2),
(2021, 'HCM_15', 'NV3', 24),
(2021, 'HCM_16', 'NV1', 21.9),
(2021, 'HCM_16', 'NV2', 22),
(2021, 'HCM_16', 'NV3', 22.5),
(2021, 'HCM_17', 'NV1', 25),
(2021, 'HCM_17', 'NV2', 25.2),
(2021, 'HCM_17', 'NV3', 25.4),
(2021, 'HCM_18', 'NV1', 23.6),
(2021, 'HCM_18', 'NV2', 24),
(2021, 'HCM_18', 'NV3', 24.2),
(2021, 'HCM_19', 'NV1', 18.3),
(2021, 'HCM_19', 'NV2', 18.7),
(2021, 'HCM_19', 'NV3', 19),
(2021, 'HCM_2', 'NV1', 24.4),
(2021, 'HCM_2', 'NV2', 24.7),
(2021, 'HCM_2', 'NV3', 25.2),
(2021, 'HCM_20', 'NV1', 25.2),
(2021, 'HCM_20', 'NV2', 25.4),
(2021, 'HCM_20', 'NV3', 25.9),
(2021, 'HCM_21', 'NV1', 23.6),
(2021, 'HCM_21', 'NV2', 23.8),
(2021, 'HCM_21', 'NV3', 24.5),
(2021, 'HCM_22', 'NV1', 21.1),
(2021, 'HCM_22', 'NV2', 21.4),
(2021, 'HCM_22', 'NV3', 21.6),
(2021, 'HCM_23', 'NV1', 20),
(2021, 'HCM_23', 'NV2', 20.4),
(2021, 'HCM_23', 'NV3', 20.6),
(2021, 'HCM_24', 'NV1', 22.2),
(2021, 'HCM_24', 'NV2', 22.5),
(2021, 'HCM_24', 'NV3', 22.7),
(2021, 'HCM_25', 'NV1', 18.4),
(2021, 'HCM_25', 'NV2', 18.5),
(2021, 'HCM_25', 'NV3', 18.8),
(2021, 'HCM_26', 'NV1', 24.7),
(2021, 'HCM_26', 'NV2', 24.8),
(2021, 'HCM_26', 'NV3', 25),
(2021, 'HCM_27', 'NV1', 21.8),
(2021, 'HCM_27', 'NV2', 22.1),
(2021, 'HCM_27', 'NV3', 22.3),
(2021, 'HCM_28', 'NV1', 18.9),
(2021, 'HCM_28', 'NV2', 19.2),
(2021, 'HCM_28', 'NV3', 19.6),
(2021, 'HCM_29', 'NV1', 17),
(2021, 'HCM_29', 'NV2', 17.3),
(2021, 'HCM_29', 'NV3', 17.6),
(2021, 'HCM_3', 'NV1', 21.5),
(2021, 'HCM_3', 'NV2', 21.7),
(2021, 'HCM_3', 'NV3', 21.8),
(2021, 'HCM_30', 'NV1', 20.7),
(2021, 'HCM_30', 'NV2', 21.2),
(2021, 'HCM_30', 'NV3', 21.5),
(2021, 'HCM_31', 'NV1', 17.4),
(2021, 'HCM_31', 'NV2', 17.6),
(2021, 'HCM_31', 'NV3', 18),
(2021, 'HCM_32', 'NV1', 20.4),
(2021, 'HCM_32', 'NV2', 20.6),
(2021, 'HCM_32', 'NV3', 20.8),
(2021, 'HCM_33', 'NV1', 18),
(2021, 'HCM_33', 'NV2', 18.6),
(2021, 'HCM_33', 'NV3', 18.7),
(2021, 'HCM_34', 'NV1', 20.9),
(2021, 'HCM_34', 'NV2', 21),
(2021, 'HCM_34', 'NV3', 21.3),
(2021, 'HCM_35', 'NV1', 20.5),
(2021, 'HCM_35', 'NV2', 20.8),
(2021, 'HCM_35', 'NV3', 21.4),
(2021, 'HCM_36', 'NV1', 17.2),
(2021, 'HCM_36', 'NV2', 17.3),
(2021, 'HCM_36', 'NV3', 18.2),
(2021, 'HCM_37', 'NV1', 16.8),
(2021, 'HCM_37', 'NV2', 17),
(2021, 'HCM_37', 'NV3', 17.7),
(2021, 'HCM_38', 'NV1', 19.7),
(2021, 'HCM_38', 'NV2', 20),
(2021, 'HCM_38', 'NV3', 20.5),
(2021, 'HCM_39', 'NV1', 21.7),
(2021, 'HCM_39', 'NV2', 22),
(2021, 'HCM_39', 'NV3', 22.1),
(2021, 'HCM_4', 'NV1', 18),
(2021, 'HCM_4', 'NV2', 18.2),
(2021, 'HCM_4', 'NV3', 19),
(2021, 'HCM_40', 'NV1', 23.5),
(2021, 'HCM_40', 'NV2', 24.1),
(2021, 'HCM_40', 'NV3', 24.5),
(2021, 'HCM_41', 'NV1', 19.1),
(2021, 'HCM_41', 'NV2', 19.3),
(2021, 'HCM_41', 'NV3', 19.6),
(2021, 'HCM_42', 'NV1', 19),
(2021, 'HCM_42', 'NV2', 19.2),
(2021, 'HCM_42', 'NV3', 20.1),
(2021, 'HCM_43', 'NV1', 18.3),
(2021, 'HCM_43', 'NV2', 18.5),
(2021, 'HCM_43', 'NV3', 19.3),
(2021, 'HCM_44', 'NV1', 22.4),
(2021, 'HCM_44', 'NV2', 22.6),
(2021, 'HCM_44', 'NV3', 22.9),
(2021, 'HCM_45', 'NV1', 20.4),
(2021, 'HCM_45', 'NV2', 20.6),
(2021, 'HCM_45', 'NV3', 20.8),
(2021, 'HCM_46', 'NV1', 19.4),
(2021, 'HCM_46', 'NV2', 19.8),
(2021, 'HCM_46', 'NV3', 19.9),
(2021, 'HCM_47', 'NV1', 22.9),
(2021, 'HCM_47', 'NV2', 23.3),
(2021, 'HCM_47', 'NV3', 23.6),
(2021, 'HCM_48', 'NV1', 21),
(2021, 'HCM_48', 'NV2', 21.2),
(2021, 'HCM_48', 'NV3', 21.8),
(2021, 'HCM_49', 'NV1', 20),
(2021, 'HCM_49', 'NV2', 20.2),
(2021, 'HCM_49', 'NV3', 20.3),
(2021, 'HCM_5', 'NV1', 23.8),
(2021, 'HCM_5', 'NV2', 24.2),
(2021, 'HCM_5', 'NV3', 24.6),
(2021, 'HCM_50', 'NV1', 18.7),
(2021, 'HCM_50', 'NV2', 19.2),
(2021, 'HCM_50', 'NV3', 19.6),
(2021, 'HCM_51', 'NV1', 23.1),
(2021, 'HCM_51', 'NV2', 23.6),
(2021, 'HCM_51', 'NV3', 24),
(2021, 'HCM_52', 'NV1', 25.8),
(2021, 'HCM_52', 'NV2', 26.3),
(2021, 'HCM_52', 'NV3', 26.8),
(2021, 'HCM_53', 'NV1', 19.1),
(2021, 'HCM_53', 'NV2', 19.4),
(2021, 'HCM_53', 'NV3', 19.6),
(2021, 'HCM_54', 'NV1', 19.8),
(2021, 'HCM_54', 'NV2', 20.2),
(2021, 'HCM_54', 'NV3', 20.7),
(2021, 'HCM_55', 'NV1', 22.3),
(2021, 'HCM_55', 'NV2', 22.5),
(2021, 'HCM_55', 'NV3', 22.7),
(2021, 'HCM_56', 'NV1', 20.8),
(2021, 'HCM_56', 'NV2', 21.4),
(2021, 'HCM_56', 'NV3', 21.9),
(2021, 'HCM_57', 'NV1', 24),
(2021, 'HCM_57', 'NV2', 24.2),
(2021, 'HCM_57', 'NV3', 24.5),
(2021, 'HCM_58', 'NV1', 23.3),
(2021, 'HCM_58', 'NV2', 23.6),
(2021, 'HCM_58', 'NV3', 23.9),
(2021, 'HCM_59', 'NV1', 20.9),
(2021, 'HCM_59', 'NV2', 21.3),
(2021, 'HCM_59', 'NV3', 21.5),
(2021, 'HCM_6', 'NV1', 21),
(2021, 'HCM_6', 'NV2', 21.4),
(2021, 'HCM_6', 'NV3', 21.6),
(2021, 'HCM_60', 'NV1', 25.4),
(2021, 'HCM_60', 'NV2', 25.7),
(2021, 'HCM_60', 'NV3', 26),
(2021, 'HCM_61', 'NV1', 19.6),
(2021, 'HCM_61', 'NV2', 20.1),
(2021, 'HCM_61', 'NV3', 20.4),
(2021, 'HCM_62', 'NV1', 22.8),
(2021, 'HCM_62', 'NV2', 23.1),
(2021, 'HCM_62', 'NV3', 23.2),
(2021, 'HCM_63', 'NV1', 22.8),
(2021, 'HCM_63', 'NV2', 23),
(2021, 'HCM_63', 'NV3', 23.2),
(2021, 'HCM_64', 'NV1', 25.3),
(2021, 'HCM_64', 'NV2', 25.4),
(2021, 'HCM_64', 'NV3', 26),
(2021, 'HCM_65', 'NV1', 26.3),
(2021, 'HCM_65', 'NV2', 26.5),
(2021, 'HCM_65', 'NV3', 27),
(2021, 'HCM_66', 'NV1', 21.1),
(2021, 'HCM_66', 'NV2', 21.5),
(2021, 'HCM_66', 'NV3', 21.6),
(2021, 'HCM_67', 'NV1', 25.9),
(2021, 'HCM_67', 'NV2', 26.3),
(2021, 'HCM_67', 'NV3', 26.6),
(2021, 'HCM_68', 'NV1', 24.4),
(2021, 'HCM_68', 'NV2', 24.8),
(2021, 'HCM_68', 'NV3', 25),
(2021, 'HCM_69', 'NV1', 22),
(2021, 'HCM_69', 'NV2', 22.2),
(2021, 'HCM_69', 'NV3', 22.4),
(2021, 'HCM_7', 'NV1', 18.2),
(2021, 'HCM_7', 'NV2', 18.5),
(2021, 'HCM_7', 'NV3', 18.7),
(2021, 'HCM_70', 'NV1', 19.1),
(2021, 'HCM_70', 'NV2', 19.4),
(2021, 'HCM_70', 'NV3', 19.7),
(2021, 'HCM_71', 'NV1', 17.8),
(2021, 'HCM_71', 'NV2', 18.1),
(2021, 'HCM_71', 'NV3', 18.4),
(2021, 'HCM_72', 'NV1', 20.4),
(2021, 'HCM_72', 'NV2', 20.6),
(2021, 'HCM_72', 'NV3', 20.9),
(2021, 'HCM_73', 'NV1', 18.1),
(2021, 'HCM_73', 'NV2', 18.5),
(2021, 'HCM_73', 'NV3', 18.8),
(2021, 'HCM_74', 'NV1', 17.6),
(2021, 'HCM_74', 'NV2', 18),
(2021, 'HCM_74', 'NV3', 18.4),
(2021, 'HCM_75', 'NV1', 18),
(2021, 'HCM_75', 'NV2', 18.3),
(2021, 'HCM_75', 'NV3', 18.6),
(2021, 'HCM_76', 'NV1', 18.8),
(2021, 'HCM_76', 'NV2', 19),
(2021, 'HCM_76', 'NV3', 19.8),
(2021, 'HCM_77', 'NV1', 17),
(2021, 'HCM_77', 'NV2', 17.2),
(2021, 'HCM_77', 'NV3', 17.6),
(2021, 'HCM_78', 'NV1', 15.5),
(2021, 'HCM_78', 'NV2', 15.6),
(2021, 'HCM_78', 'NV3', 15.8),
(2021, 'HCM_79', 'NV1', 18.6),
(2021, 'HCM_79', 'NV2', 18.9),
(2021, 'HCM_79', 'NV3', 19.2),
(2021, 'HCM_8', 'NV1', 24.4),
(2021, 'HCM_8', 'NV2', 24.9),
(2021, 'HCM_8', 'NV3', 25.2),
(2021, 'HCM_80', 'NV1', 17),
(2021, 'HCM_80', 'NV2', 17.2),
(2021, 'HCM_80', 'NV3', 17.8),
(2021, 'HCM_81', 'NV1', 15),
(2021, 'HCM_81', 'NV2', 15.5),
(2021, 'HCM_81', 'NV3', 16),
(2021, 'HCM_82', 'NV1', 16),
(2021, 'HCM_82', 'NV2', 16.5),
(2021, 'HCM_82', 'NV3', 17),
(2021, 'HCM_83', 'NV1', 15),
(2021, 'HCM_83', 'NV2', 15.5),
(2021, 'HCM_83', 'NV3', 16),
(2021, 'HCM_84', 'NV1', 15.3),
(2021, 'HCM_84', 'NV2', 15.5),
(2021, 'HCM_84', 'NV3', 15.8),
(2021, 'HCM_85', 'NV1', 21.8),
(2021, 'HCM_85', 'NV2', 22),
(2021, 'HCM_85', 'NV3', 22.4),
(2021, 'HCM_86', 'NV1', 19.6),
(2021, 'HCM_86', 'NV2', 19.8),
(2021, 'HCM_86', 'NV3', 20.4),
(2021, 'HCM_87', 'NV1', 19),
(2021, 'HCM_87', 'NV2', 19.2),
(2021, 'HCM_87', 'NV3', 19.4),
(2021, 'HCM_88', 'NV1', 20.5),
(2021, 'HCM_88', 'NV2', 21),
(2021, 'HCM_88', 'NV3', 21.5),
(2021, 'HCM_89', 'NV1', 18.5),
(2021, 'HCM_89', 'NV2', 18.8),
(2021, 'HCM_89', 'NV3', 19.1),
(2021, 'HCM_9', 'NV1', 25.3),
(2021, 'HCM_9', 'NV2', 25.5),
(2021, 'HCM_9', 'NV3', 26),
(2021, 'HCM_90', 'NV1', 19.2),
(2021, 'HCM_90', 'NV2', 19.4),
(2021, 'HCM_90', 'NV3', 19.8),
(2021, 'HCM_91', 'NV1', 20.5),
(2021, 'HCM_91', 'NV2', 21),
(2021, 'HCM_91', 'NV3', 21.4),
(2021, 'HCM_92', 'NV1', 25.1),
(2021, 'HCM_92', 'NV2', 25.5),
(2021, 'HCM_92', 'NV3', 25.8),
(2021, 'HCM_93', 'NV1', 24.2),
(2021, 'HCM_93', 'NV2', 24.5),
(2021, 'HCM_93', 'NV3', 24.8),
(2021, 'HCM_94', 'NV1', 23),
(2021, 'HCM_94', 'NV2', 23.3),
(2021, 'HCM_94', 'NV3', 23.5),
(2021, 'HCM_95', 'NV1', 20.2),
(2021, 'HCM_95', 'NV2', 20.4),
(2021, 'HCM_95', 'NV3', 20.8),
(2021, 'HCM_96', 'NV1', 21.7),
(2021, 'HCM_96', 'NV2', 22),
(2021, 'HCM_96', 'NV3', 22.2),
(2021, 'HCM_97', 'NV1', 21.3),
(2021, 'HCM_97', 'NV2', 21.5),
(2021, 'HCM_97', 'NV3', 22.2),
(2021, 'HCM_98', 'NV1', 21.4),
(2021, 'HCM_98', 'NV2', 21.9),
(2021, 'HCM_98', 'NV3', 22.4),
(2021, 'HCM_99', 'NV1', 18.9),
(2021, 'HCM_99', 'NV2', 19.3),
(2021, 'HCM_99', 'NV3', 19.5);

-- --------------------------------------------------------

--
-- Table structure for table `loai_truong`
--

CREATE TABLE `loai_truong` (
  `MA_LOAI` varchar(250) CHARACTER SET utf8 NOT NULL,
  `TEN_LOAI` varchar(250) CHARACTER SET utf8 NOT NULL,
  `HINH_THUC` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai_truong`
--

INSERT INTO `loai_truong` (`MA_LOAI`, `TEN_LOAI`, `HINH_THUC`) VALUES
('L01', 'Trường chuyên', 'Công lập'),
('L02', 'Trường có lớp chuyên', 'Công lập'),
('L03', 'Trường không có lớp chuyên', 'Công lập'),
('L04', 'Trường bán công', 'Công lập'),
('L05', 'Trường không có lớp chuyên', 'Tư Thục'),
('L06', 'Trường không có lớp chuyên', 'Quốc tế');

-- --------------------------------------------------------

--
-- Table structure for table `nguyen_vong`
--

CREATE TABLE `nguyen_vong` (
  `MA_NV` varchar(250) CHARACTER SET utf8 NOT NULL,
  `TEN_NV` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nguyen_vong`
--

INSERT INTO `nguyen_vong` (`MA_NV`, `TEN_NV`) VALUES
('NV1', 'Nguyện vọng 1'),
('NV2', 'Nguyện vọng 2'),
('NV3', 'Nguyện vọng 3');

-- --------------------------------------------------------

--
-- Table structure for table `truong`
--

CREATE TABLE `truong` (
  `MA_TRUONG` varchar(250) CHARACTER SET utf8 NOT NULL,
  `TEN_TRUONG` varchar(250) CHARACTER SET utf8 NOT NULL,
  `TINH/TP` varchar(250) CHARACTER SET utf8 NOT NULL,
  `QUAN/HUYEN` varchar(250) CHARACTER SET utf8 NOT NULL,
  `MA_LOAI` varchar(25) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truong`
--

INSERT INTO `truong` (`MA_TRUONG`, `TEN_TRUONG`, `TINH/TP`, `QUAN/HUYEN`, `MA_LOAI`) VALUES
('HCM_1', 'THPT Trưng Vương', 'TP Ho Chi Minh', 'Quận 1', 'L02'),
('HCM_10', 'THPT Lê Thị Hồng Gấm', 'TP Ho Chi Minh', 'Quận 3', 'L02'),
('HCM_100', 'THPT Phước Kiển', 'TP Ho Chi Minh', 'Nhà Bè', 'L02'),
('HCM_101', 'THPT Dương Văn Dương', 'TP Ho Chi Minh', 'Nhà Bè', 'L02'),
('HCM_102', 'THPT Tây Thạnh', 'TP Ho Chi Minh', 'Tân Phú', 'L02'),
('HCM_103', 'THPT Lê Trọng Tấn', 'TP Ho Chi Minh', 'Tân Phú', 'L02'),
('HCM_104', 'THPT Vĩnh Lộc', 'TP Ho Chi Minh', 'Bình Tân', 'L02'),
('HCM_105', 'THPT Nguyễn Hữu Cảnh', 'TP Ho Chi Minh', 'Bình Tân', 'L02'),
('HCM_106', 'THPT Bình Hưng Hòa', 'TP Ho Chi Minh', 'Bình Tân', 'L02'),
('HCM_107', 'THPT Bình Tân', 'TP Ho Chi Minh', 'Bình Tân', 'L02'),
('HCM_108', 'THPT An Lạc', 'TP Ho Chi Minh', 'Bình Tân', 'L02'),
('HCM_11', 'THPT Marie Curie', 'TP Ho Chi Minh', 'Quận 3', 'L02'),
('HCM_12', 'THPT Nguyễn Thị Diệu', 'TP Ho Chi Minh', 'Quận 3', 'L02'),
('HCM_13', 'THPT Nguyễn Trãi', 'TP Ho Chi Minh', 'Quận 4', 'L02'),
('HCM_14', 'THPT Nguyễn Hữu Thọ', 'TP Ho Chi Minh', 'Quận 4', 'L02'),
('HCM_15', 'TH Thực Hành Sài Gòn', 'TP Ho Chi Minh', 'Quận 5', 'L02'),
('HCM_16', 'THPT Hùng Vương', 'TP Ho Chi Minh', 'Quận 5', 'L02'),
('HCM_17', 'TH Thực Hành Đại Học Sư Phạm', 'TP Ho Chi Minh', 'Quận 5', 'L02'),
('HCM_18', 'THPT Trần Khai Nguyên', 'TP Ho Chi Minh', 'Quận 5', 'L02'),
('HCM_19', 'THPT Trần Hữu Trang', 'TP Ho Chi Minh', 'Quận 5', 'L02'),
('HCM_2', 'THPT Bùi Thị Xuân', 'TP Ho Chi Minh', 'Quận 1', 'L02'),
('HCM_20', 'THPT Mạc Đĩnh Chi', 'TP Ho Chi Minh', 'Quận 6', 'L02'),
('HCM_21', 'THPT Bình Phú', 'TP Ho Chi Minh', 'Quận 6', 'L02'),
('HCM_22', 'THPT Nguyễn Tất Thành', 'TP Ho Chi Minh', 'Quận 6', 'L02'),
('HCM_23', 'THPT Phạm Phú Thứ', 'TP Ho Chi Minh', 'Quận 6', 'L02'),
('HCM_24', 'THPT Lê Thánh Tôn', 'TP Ho Chi Minh', 'Quận 7', 'L02'),
('HCM_25', 'THPT Tân Phong', 'TP Ho Chi Minh', 'Quận 7', 'L02'),
('HCM_26', 'THPT Ngô Quyền', 'TP Ho Chi Minh', 'Quận 7', 'L02'),
('HCM_27', 'THPT Nam Sài Gòn', 'TP Ho Chi Minh', 'Quận 7', 'L02'),
('HCM_28', 'THPT Lương Văn Can', 'TP Ho Chi Minh', 'Quận 8', 'L02'),
('HCM_29', 'THPT Ngô Gia Tự', 'TP Ho Chi Minh', 'Quận 8', 'L02'),
('HCM_3', 'THPT Len Lơ Man', 'TP Ho Chi Minh', 'Quận 1', 'L02'),
('HCM_30', 'THPT Tạ Quang Bửu', 'TP Ho Chi Minh', 'Quận 8', 'L02'),
('HCM_31', 'THPT Nguyễn Văn Linh', 'TP Ho Chi Minh', 'Quận 8', 'L02'),
('HCM_32', 'THPT Võ Văn Kiệt', 'TP Ho Chi Minh', 'Quận 8', 'L02'),
('HCM_33', 'THPT Chuyên Năng Khiếu TDTT Nguyễn Thị Định', 'TP Ho Chi Minh', 'Quận 8', 'L02'),
('HCM_34', 'THPT Nguyễn Huệ', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_35', 'THPT Phước Long', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_36', 'THPT Long Trường', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_37', 'THPT Nguyễn Văn Tăng', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_38', 'THPT Tǎng Nhơn Phú A', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_39', 'THPT Nguyễn Khuyến', 'TP Ho Chi Minh', 'Quận 10', 'L02'),
('HCM_4', 'THPT Năng Khiếu TDTT', 'TP Ho Chi Minh', 'Quận 1', 'L02'),
('HCM_40', 'THPT Nguyễn Du', 'TP Ho Chi Minh', 'Quận 10', 'L02'),
('HCM_41', 'THPT Nguyễn An Ninh', 'TP Ho Chi Minh', 'Quận 10', 'L02'),
('HCM_42', 'THCS-THPT Diên Hồng', 'TP Ho Chi Minh', 'Quận 10', 'L02'),
('HCM_43', 'THCS-THPT Sương Nguyệt Anh', 'TP Ho Chi Minh', 'Quận 10', 'L02'),
('HCM_44', 'THPT Nguyễn Hiền', 'TP Ho Chi Minh', 'Quận 11', 'L02'),
('HCM_45', 'THPT Trần Quang Khải', 'TP Ho Chi Minh', 'Quận 11', 'L02'),
('HCM_46', 'THPT Nam Kỳ Khởi Nghĩa', 'TP Ho Chi Minh', 'Quận 11', 'L02'),
('HCM_47', 'THPT Võ Trường Toản', 'TP Ho Chi Minh', 'Quận 12', 'L02'),
('HCM_48', 'THPT Trường Chinh', 'TP Ho Chi Minh', 'Quận 12', 'L02'),
('HCM_49', 'THPT Thạnh Lộc', 'TP Ho Chi Minh', 'Quận 12', 'L02'),
('HCM_5', 'THPT Lương Thế Vinh', 'TP Ho Chi Minh', 'Quận 1', 'L02'),
('HCM_50', 'THPT Thanh Đa', 'TP Ho Chi Minh', 'Bình Thạnh', 'L02'),
('HCM_51', 'THPT Võ Thị Sáu', 'TP Ho Chi Minh', 'Bình Thạnh', 'L02'),
('HCM_52', 'THPT Gia Định', 'TP Ho Chi Minh', 'Bình Thạnh', 'L02'),
('HCM_53', 'THPT Phan Đăng Lưu', 'TP Ho Chi Minh', 'Bình Thạnh', 'L02'),
('HCM_54', 'THPT Trần Văn Giàu', 'TP Ho Chi Minh', 'Bình Thạnh', 'L02'),
('HCM_55', 'THPT Hoàng Hoa Thám', 'TP Ho Chi Minh', 'Bình Thạnh', 'L02'),
('HCM_56', 'THPT Gò Vấp', 'TP Ho Chi Minh', 'Gò Vấp', 'L02'),
('HCM_57', 'THPT Nguyễn Công Trứ', 'TP Ho Chi Minh', 'Gò Vấp', 'L02'),
('HCM_58', 'THPT Trần Hưng Đạo', 'TP Ho Chi Minh', 'Gò Vấp', 'L02'),
('HCM_59', 'THPT Nguyễn Trung Trực', 'TP Ho Chi Minh', 'Gò Vấp', 'L02'),
('HCM_6', 'THPT Giồng Ông Tố', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_60', 'THPT Phú Nhuận', 'TP Ho Chi Minh', 'Phú Nhuận', 'L02'),
('HCM_61', 'THPT Hàn Thuyên', 'TP Ho Chi Minh', 'Phú Nhuận', 'L02'),
('HCM_62', 'THPT Tân Bình', 'TP Ho Chi Minh', 'Tân Bình', 'L02'),
('HCM_63', 'THPT Nguyễn Chí Thanh', 'TP Ho Chi Minh', 'Tân Bình', 'L02'),
('HCM_64', 'THPT Trần Phú', 'TP Ho Chi Minh', 'Tân Bình', 'L02'),
('HCM_65', 'THPT Nguyễn Thượng Hiền', 'TP Ho Chi Minh', 'Tân Bình', 'L02'),
('HCM_66', 'THPT Nguyễn Thái Bình', 'TP Ho Chi Minh', 'Tân Bình', 'L02'),
('HCM_67', 'THPT Nguyễn Hữu Huân', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_68', 'THPT Thủ Đức', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_69', 'THPT Tam Phú', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_7', 'THPT Thủ Thiêm', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_70', 'THPT Hiệp Bình', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_71', 'THPT Đào Sơn Tây', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_72', 'THPT Linh Trung', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_73', 'THPT Bình Chiểu', 'TP Ho Chi Minh', 'TP Thủ Đức', 'L02'),
('HCM_74', 'THPT Bình Chánh', 'TP Ho Chi Minh', 'Bình Chánh', 'L02'),
('HCM_75', 'THPT Tân Túc', 'TP Ho Chi Minh', 'Bình Chánh', 'L02'),
('HCM_76', 'THPT Vĩnh Lộc B', 'TP Ho Chi Minh', 'Bình Chánh', 'L02'),
('HCM_77', 'THPT Năng Khiếu TDTT Bình Chánh', 'TP Ho Chi Minh', 'Bình Chánh', 'L02'),
('HCM_78', 'THPT Phong Phú', 'TP Ho Chi Minh', 'Bình Chánh', 'L02'),
('HCM_79', 'THPT Lê Minh Xuân', 'TP Ho Chi Minh', 'Bình Chánh', 'L02'),
('HCM_8', 'THPT Lê Quý Đôn', 'TP Ho Chi Minh', 'Quận 3', 'L02'),
('HCM_80', 'THPT Đa Phước', 'TP Ho Chi Minh', 'Bình Chánh', 'L02'),
('HCM_81', 'THCS-THPT Thanh An', 'TP Ho Chi Minh', 'Cần Giờ', 'L02'),
('HCM_82', 'THPT Bình Khánh', 'TP Ho Chi Minh', 'Cần Giờ', 'L02'),
('HCM_83', 'THPT Cần Thạnh', 'TP Ho Chi Minh', 'Cần Giờ', 'L02'),
('HCM_84', 'THPT An Nghĩa', 'TP Ho Chi Minh', 'Cần Giờ', 'L02'),
('HCM_85', 'THPT Củ Chi', 'TP Ho Chi Minh', 'Củ Chi', 'L02'),
('HCM_86', 'THPT Quang Trung', 'TP Ho Chi Minh', 'Củ Chi', 'L02'),
('HCM_87', 'THPT An Nhơn Tây', 'TP Ho Chi Minh', 'Củ Chi', 'L02'),
('HCM_88', 'THPT Trung Phú', 'TP Ho Chi Minh', 'Củ Chi', 'L02'),
('HCM_89', 'THPT Trung Lập', 'TP Ho Chi Minh', 'Củ Chi', 'L02'),
('HCM_9', 'THPT Nguyễn Thị Minh Khai', 'TP Ho Chi Minh', 'Quận 3', 'L02'),
('HCM_90', 'THPT Phú Hòa', 'TP Ho Chi Minh', 'Củ Chi', 'L02'),
('HCM_91', 'THPT Tân Thông Hội', 'TP Ho Chi Minh', 'Củ Chi', 'L02'),
('HCM_92', 'THPT Nguyễn Hữu Cầu', 'TP Ho Chi Minh', 'Hóc Môn', 'L02'),
('HCM_93', 'THPT Lý Thường Kiệt', 'TP Ho Chi Minh', 'Hóc Môn', 'L02'),
('HCM_94', 'THPT Bà Điểm', 'TP Ho Chi Minh', 'Hóc Môn', 'L02'),
('HCM_95', 'THPT Nguyễn Văn Cừ', 'TP Ho Chi Minh', 'Hóc Môn', 'L02'),
('HCM_96', 'THPT Nguyễn Hữu Tiến', 'TP Ho Chi Minh', 'Hóc Môn', 'L02'),
('HCM_97', 'THPT Phạm Văn Sáng', 'TP Ho Chi Minh', 'Hóc Môn', 'L02'),
('HCM_98', 'THPT Hồ Thị Bi', 'TP Ho Chi Minh', 'Hóc Môn', 'L02'),
('HCM_99', 'THPT Long Thới', 'TP Ho Chi Minh', 'Nhà Bè', 'L02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chi_tieu`
--
ALTER TABLE `chi_tieu`
  ADD PRIMARY KEY (`NAM_HOC`,`MA_TRUONG`,`MA_NV`),
  ADD KEY `MA_TRUONG` (`MA_TRUONG`),
  ADD KEY `MA_NV` (`MA_NV`);

--
-- Indexes for table `diem_chuan`
--
ALTER TABLE `diem_chuan`
  ADD PRIMARY KEY (`NAM_HOC`,`MA_TRUONG`,`MA_NV`),
  ADD KEY `MA_TRUONG` (`MA_TRUONG`),
  ADD KEY `MA_NV` (`MA_NV`);

--
-- Indexes for table `loai_truong`
--
ALTER TABLE `loai_truong`
  ADD PRIMARY KEY (`MA_LOAI`);

--
-- Indexes for table `nguyen_vong`
--
ALTER TABLE `nguyen_vong`
  ADD PRIMARY KEY (`MA_NV`);

--
-- Indexes for table `truong`
--
ALTER TABLE `truong`
  ADD PRIMARY KEY (`MA_TRUONG`),
  ADD KEY `LOAI` (`MA_LOAI`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tieu`
--
ALTER TABLE `chi_tieu`
  ADD CONSTRAINT `FK_chi_tieu_nguyen_vong` FOREIGN KEY (`MA_NV`) REFERENCES `nguyen_vong` (`MA_NV`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_chi_tieu_truong` FOREIGN KEY (`MA_TRUONG`) REFERENCES `truong` (`MA_TRUONG`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `diem_chuan`
--
ALTER TABLE `diem_chuan`
  ADD CONSTRAINT `FK_diem_chuan_nguyen_vong` FOREIGN KEY (`MA_NV`) REFERENCES `nguyen_vong` (`MA_NV`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_diem_chuan_truong` FOREIGN KEY (`MA_TRUONG`) REFERENCES `truong` (`MA_TRUONG`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `truong`
--
ALTER TABLE `truong`
  ADD CONSTRAINT `FK_truong_loai_truong` FOREIGN KEY (`MA_LOAI`) REFERENCES `loai_truong` (`MA_LOAI`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
