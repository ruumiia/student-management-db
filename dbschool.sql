-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 11:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `fldindex` int(11) NOT NULL,
  `fldstudentno` varchar(50) NOT NULL,
  `fldlastname` varchar(100) NOT NULL,
  `fldfirstname` varchar(100) NOT NULL,
  `fldmiddlename` varchar(100) NOT NULL,
  `fldgender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`fldindex`, `fldstudentno`, `fldlastname`, `fldfirstname`, `fldmiddlename`, `fldgender`) VALUES
(1, '1001', 'Rocamora', 'Nelia', 'Camo', 'Female'),
(2, '1002', 'Chavez', 'Rodante', 'San Pedro', 'Male'),
(3, '1003', 'Flores', 'Ramon', 'Mayo', 'Male'),
(4, '1004', 'Garcia', 'Donna', 'Cruz', 'Female'),
(5, '1005', 'De Vera', 'Mark', 'Anthony', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD UNIQUE KEY `fldindex` (`fldindex`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `fldindex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
