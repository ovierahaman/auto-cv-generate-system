-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 10:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv_info`
--

CREATE TABLE `cv_info` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `language` varchar(20) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `cstartdate` date NOT NULL,
  `cposition` varchar(150) NOT NULL,
  `varsityname` varchar(100) NOT NULL,
  `cgpa` varchar(5) NOT NULL,
  `varsitypyear` date NOT NULL,
  `collegename` varchar(100) NOT NULL,
  `hscgpa` varchar(5) NOT NULL,
  `clgpyear` date NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `sscgpa` varchar(5) NOT NULL,
  `sclpyear` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cv_info`
--

INSERT INTO `cv_info` (`id`, `name`, `address`, `phone`, `email`, `birthday`, `gender`, `language`, `skill`, `companyname`, `cstartdate`, `cposition`, `varsityname`, `cgpa`, `varsitypyear`, `collegename`, `hscgpa`, `clgpyear`, `schoolname`, `sscgpa`, `sclpyear`, `image`, `username`) VALUES
(7, 'Ovie Rahaman', 'badda', '23321564165', 'ovie@gmail.com', '2001-10-16', 'male', 'English', 'C, C++, Java, Git', 'VivaSoft', '2023-08-01', 'Jr. Executive', 'UIU', '3.25', '2023-08-16', 'KPC', '5.00', '2023-08-11', 'PGHS', '5.00', '2023-08-17', 'images/342352797_755328339427520_457550647628712823_n.jpg', 'ovie'),
(8, 'Mithu Alam', 'Gabtoli', '01759612342', 'mithu@gmail.com', '2002-12-03', 'male', 'English', 'null', 'Zero Hour', '2023-11-29', 'Executive', 'ULAB', '3.25', '2024-07-09', 'Mirpur Cant. Public', '5.00', '2020-06-30', 'Mirpur Smriti School & College', '5.00', '2016-10-29', 'images/WhatsApp Image 2023-07-25 at 3.25.24 PM.jpg', 'mithu'),
(9, 'Nuren Akter', 'Mirpur 1', '01650178322', 'nuren@gmail.com', '2005-12-07', 'female', 'English', 'Graphics Design, Java, Wordpress', 'Therap', '2023-06-14', 'Jr. Executive', 'United International University', '3.65', '2024-04-15', 'Mirpur Cant. Public', '5.00', '2023-07-19', 'Mirpur Smriti School & College', '5.00', '2023-07-06', 'images/361977533_1629924374157950_5859342210867176974_n (1).jpg', 'nuren'),
(10, 'Marin Akter', 'Gazipur', '01731049535', 'marin@gmail.com', '2003-06-12', 'female', 'English', 'Graphis Design', 'Zero Hour', '2023-06-30', 'Executive', 'United International University', '3.00', '2023-07-13', 'Ideal School & College', '5.00', '2023-07-12', 'Ideal School & College', '5.00', '2016-07-12', 'images/353444009_1209743813070962_6144855607629666551_n.jpg', 'marin'),
(12, '', '', '', 'zayed@gmail.com', '2000-11-29', 'male', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', 'Zayed Khasru'),
(13, 'Samrat Abdul Jalil', 'DIU Goli, Satarkul, Badda, Dhaka', '0177457777', 'zayed@gmail.com', '2023-08-01', 'male', 'English', 'C, C++, JAVA, PYTHON, PHP< LARAVEL, HTML, Css', 'VivaSoft', '2023-08-15', 'Jr. Executive at CV Giver', 'United International University', '4.00', '2023-08-14', 'Khulna Public Collage', '5.00', '2023-06-07', 'Norail Govt High School', '5.00', '2016-01-21', 'images/333585052_505399438405873_4902834133863702079_n.jpg', 'Zayed Bin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(7, 'ovie', 'ovie@gmail.com', '1111'),
(8, 'mithu', 'mithu@gmail.com', '1111'),
(9, 'nuren', 'nuren@gmail.com', '1111'),
(10, 'marin', 'marin@gmail.com', '1111'),
(11, 'asif', 'asif@gmail.com', '1111'),
(12, 'Zayed Khasru', 'zayed@gmail.com', '1234'),
(13, 'Zayed Bin', 'zayed@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv_info`
--
ALTER TABLE `cv_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv_info`
--
ALTER TABLE `cv_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
