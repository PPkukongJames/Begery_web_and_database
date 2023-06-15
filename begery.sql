-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 09:26 AM
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
-- Database: `begery`
--

-- --------------------------------------------------------

--
-- Table structure for table `baguette`
--

CREATE TABLE `baguette` (
  `Brno` int(11) NOT NULL,
  `Mnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baguette`
--

INSERT INTO `baguette` (`Brno`, `Mnum`) VALUES
(2000, 0),
(2001, 5);

-- --------------------------------------------------------

--
-- Table structure for table `baker`
--

CREATE TABLE `baker` (
  `Bno` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
  `Salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baker`
--

INSERT INTO `baker` (`Bno`, `UserID`, `SSN`, `Salary`) VALUES
(1, 12345, 10056004, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `bread`
--

CREATE TABLE `bread` (
  `Brno` int(11) NOT NULL,
  `Brname` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Tracknumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`Brno`, `Brname`, `Price`, `Tracknumber`) VALUES
(1000, 'white_bread', 80, NULL),
(1001, 'white_bread', 80, NULL),
(2000, 'baguette', 80, NULL),
(2001, 'baguette', 80, NULL),
(3000, 'whole_wheat_bread', 80, NULL),
(3001, 'whole_wheat_bread', 80, NULL),
(4000, 'croissant', 80, NULL),
(4001, 'croissant', 80, NULL),
(10000, 'baguette', 80, 'A1004'),
(10001, 'croissant', 160, 'A1004');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`UserID`) VALUES
(54321);

-- --------------------------------------------------------

--
-- Table structure for table `croissant`
--

CREATE TABLE `croissant` (
  `Brno` int(11) NOT NULL,
  `Mnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `croissant`
--

INSERT INTO `croissant` (`Brno`, `Mnum`) VALUES
(4000, 0),
(4001, 13);

-- --------------------------------------------------------

--
-- Table structure for table `maker`
--

CREATE TABLE `maker` (
  `Brno` int(11) NOT NULL,
  `Bno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maker`
--

INSERT INTO `maker` (`Brno`, `Bno`) VALUES
(1001, 1),
(2001, 1),
(3001, 1),
(4001, 1);

-- --------------------------------------------------------

--
-- Table structure for table `make_detail`
--

CREATE TABLE `make_detail` (
  `Brno` int(11) NOT NULL,
  `MFG` date DEFAULT NULL,
  `EXP` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make_detail`
--

INSERT INTO `make_detail` (`Brno`, `MFG`, `EXP`) VALUES
(1001, '2022-05-03', '2022-05-29'),
(2001, '2022-05-03', '2022-05-22'),
(3001, '2023-06-15', '2023-06-30'),
(4001, '2022-05-03', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `UserID` int(11) NOT NULL,
  `Phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`UserID`, `Phone`) VALUES
(54321, '0888822411');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `UserID` int(11) NOT NULL,
  `Brno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `Tracknumber` varchar(100) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Brnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`Tracknumber`, `UserID`, `Date`, `Status`, `Brnum`) VALUES
('A1004', 54321, '2023-06-15', 'waiting for payment', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `UserID` int(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Fname` varchar(100) DEFAULT NULL,
  `Sname` varchar(100) DEFAULT NULL,
  `Anum` varchar(100) DEFAULT NULL,
  `Street` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL,
  `Zipcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`UserID`, `Password`, `Email`, `Fname`, `Sname`, `Anum`, `Street`, `District`, `Province`, `Zipcode`) VALUES
(0, '4f7f99fa10804c855e6a304752c704f4', 'ppkukong_james@hotmail.com', 'Pitpibul', 'Kukong', '236', '-', 'Nongmoung', 'Lopburi', 15170),
(12345, '827ccb0eea8a706c4c34a16891f84e7b', 'pitpibul.kuk@dome.tu.ac.th', 'Pitpibul', 'Kukong', '236', '-', 'Nongmoung', 'Lopburi', 15170),
(54321, '01cfcd4f6b8770febfb40cb906715822', 'gumamoza1122334@gmail.com', 'Pitpibul', 'Kukong', '236', 'ไม่บอก', 'Nongmoung', 'lol', 15111);

-- --------------------------------------------------------

--
-- Table structure for table `white_bread`
--

CREATE TABLE `white_bread` (
  `Brno` int(11) NOT NULL,
  `Mnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `white_bread`
--

INSERT INTO `white_bread` (`Brno`, `Mnum`) VALUES
(1000, 0),
(1001, 9);

-- --------------------------------------------------------

--
-- Table structure for table `whole_wheat_bread`
--

CREATE TABLE `whole_wheat_bread` (
  `Brno` int(11) NOT NULL,
  `Mnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `whole_wheat_bread`
--

INSERT INTO `whole_wheat_bread` (`Brno`, `Mnum`) VALUES
(3000, 0),
(3001, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baguette`
--
ALTER TABLE `baguette`
  ADD PRIMARY KEY (`Brno`);

--
-- Indexes for table `baker`
--
ALTER TABLE `baker`
  ADD PRIMARY KEY (`Bno`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `bread`
--
ALTER TABLE `bread`
  ADD PRIMARY KEY (`Brno`),
  ADD KEY `Tracknumber` (`Tracknumber`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `croissant`
--
ALTER TABLE `croissant`
  ADD PRIMARY KEY (`Brno`);

--
-- Indexes for table `maker`
--
ALTER TABLE `maker`
  ADD PRIMARY KEY (`Bno`,`Brno`),
  ADD KEY `Brno` (`Brno`);

--
-- Indexes for table `make_detail`
--
ALTER TABLE `make_detail`
  ADD PRIMARY KEY (`Brno`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`UserID`,`Phone`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`UserID`,`Brno`),
  ADD KEY `Brno` (`Brno`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`Tracknumber`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `white_bread`
--
ALTER TABLE `white_bread`
  ADD PRIMARY KEY (`Brno`);

--
-- Indexes for table `whole_wheat_bread`
--
ALTER TABLE `whole_wheat_bread`
  ADD PRIMARY KEY (`Brno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baguette`
--
ALTER TABLE `baguette`
  ADD CONSTRAINT `baguette_ibfk_1` FOREIGN KEY (`Brno`) REFERENCES `bread` (`Brno`);

--
-- Constraints for table `baker`
--
ALTER TABLE `baker`
  ADD CONSTRAINT `baker_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `userr` (`UserID`);

--
-- Constraints for table `bread`
--
ALTER TABLE `bread`
  ADD CONSTRAINT `bread_ibfk_1` FOREIGN KEY (`Tracknumber`) REFERENCES `track` (`Tracknumber`);

--
-- Constraints for table `buyer`
--
ALTER TABLE `buyer`
  ADD CONSTRAINT `buyer_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `userr` (`UserID`);

--
-- Constraints for table `croissant`
--
ALTER TABLE `croissant`
  ADD CONSTRAINT `croissant_ibfk_1` FOREIGN KEY (`Brno`) REFERENCES `bread` (`Brno`);

--
-- Constraints for table `maker`
--
ALTER TABLE `maker`
  ADD CONSTRAINT `maker_ibfk_1` FOREIGN KEY (`Bno`) REFERENCES `baker` (`Bno`),
  ADD CONSTRAINT `maker_ibfk_2` FOREIGN KEY (`Brno`) REFERENCES `bread` (`Brno`);

--
-- Constraints for table `make_detail`
--
ALTER TABLE `make_detail`
  ADD CONSTRAINT `make_detail_ibfk_1` FOREIGN KEY (`Brno`) REFERENCES `maker` (`Brno`),
  ADD CONSTRAINT `make_detail_ibfk_2` FOREIGN KEY (`Brno`) REFERENCES `maker` (`Brno`);

--
-- Constraints for table `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `userr` (`UserID`);

--
-- Constraints for table `search`
--
ALTER TABLE `search`
  ADD CONSTRAINT `search_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `userr` (`UserID`),
  ADD CONSTRAINT `search_ibfk_2` FOREIGN KEY (`Brno`) REFERENCES `bread` (`Brno`);

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `track_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `buyer` (`UserID`);

--
-- Constraints for table `white_bread`
--
ALTER TABLE `white_bread`
  ADD CONSTRAINT `white_bread_ibfk_1` FOREIGN KEY (`Brno`) REFERENCES `bread` (`Brno`);

--
-- Constraints for table `whole_wheat_bread`
--
ALTER TABLE `whole_wheat_bread`
  ADD CONSTRAINT `whole_wheat_bread_ibfk_1` FOREIGN KEY (`Brno`) REFERENCES `bread` (`Brno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
