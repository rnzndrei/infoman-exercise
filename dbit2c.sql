-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2025 at 02:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbit2c`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `fldindex` int(11) NOT NULL,
  `fldcoursecode` varchar(50) NOT NULL,
  `fldcourse` varchar(50) NOT NULL,
  `fldunits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`fldindex`, `fldcoursecode`, `fldcourse`, `fldunits`) VALUES
(1, 'SYSDE', 'System Analysis and Design', 3),
(2, 'INFOMAN', 'Information Management', 3),
(3, 'INFASEC', 'Information Security', 3),
(4, 'INTEPROG', 'Integrative Programming and Technologies', 3),
(5, 'ITELECT', 'IT Elective 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbllist`
--

CREATE TABLE `tbllist` (
  `fldindex` int(11) NOT NULL,
  `fldstudentindex` int(11) NOT NULL,
  `fldcourseindex` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllist`
--

INSERT INTO `tbllist` (`fldindex`, `fldstudentindex`, `fldcourseindex`) VALUES
(3, 1, 3),
(4, 1, 2),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `fldindex` int(10) NOT NULL,
  `fldstudentnumber` varchar(50) NOT NULL,
  `fldlastname` varchar(50) NOT NULL,
  `fldfirstname` varchar(50) NOT NULL,
  `fldmiddlename` varchar(50) NOT NULL,
  `fldprogramofstudy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`fldindex`, `fldstudentnumber`, `fldlastname`, `fldfirstname`, `fldmiddlename`, `fldprogramofstudy`) VALUES
(1, '2023350761', 'Del Rosario', 'Renz Andrei', 'Tolentino', 'BSIT'),
(2, '4211', 'Liwanag', 'Katherine Anne', 'Alonzo', 'BSIT'),
(3, '123', 'Estrella', 'Juan Benjo', 'Garcia', 'BSIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`fldindex`);

--
-- Indexes for table `tbllist`
--
ALTER TABLE `tbllist`
  ADD PRIMARY KEY (`fldindex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
