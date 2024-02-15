-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 02:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergie_table`
--

CREATE TABLE IF NOT EXISTS `allergie_table` (
  `al_id` int(11) NOT NULL AUTO_INCREMENT,
  `pa_hc_no` bigint(12) NOT NULL,
  `a_name` varchar(250) NOT NULL,
  `d_date` date NOT NULL,
  `severity` varchar(250) NOT NULL,
  `medicines` varchar(250) NOT NULL,
  `effects` varchar(250) NOT NULL,
  PRIMARY KEY (`al_id`),
  KEY `pa_hc_no` (`pa_hc_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `allergie_table`
--

INSERT INTO `allergie_table` (`al_id`, `pa_hc_no`, `a_name`, `d_date`, `severity`, `medicines`, `effects`) VALUES
(1, 123465824, 'Pollen Grains ', '2014-02-18', 'dangerous', '', 'itiching on eyes '),
(2, 123465824, 'fragrance ', '2019-06-18', 'Normal', 'none', 'Start sneezing frequently'),
(3, 123465824, 'grains ', '2003-02-18', 'medium ', 'none ', 'iyes itching '),
(4, 123465824, 'grains ', '2003-02-18', 'medium ', 'none ', 'iyes itching '),
(5, 123465826, 'Pollen grains ', '2014-01-30', 'normal', ' none ', 'itching in eyes'),
(6, 123465826, 'Dolo 564 tablet', '2022-09-02', 'meduim ', 'none ', 'Stomach ache, vomiting'),
(7, 123465826, 'Dust partical', '2022-10-07', 'normal ', 'none ', ''),
(8, 123465826, 'Sunlight', '0000-00-00', '3 level burns', 'sunscreen ', 'skin will get damage');

-- --------------------------------------------------------

--
-- Table structure for table `disease_table1`
--

CREATE TABLE IF NOT EXISTS `disease_table1` (
  `pa_hc_no` bigint(12) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `dr_id` int(10) NOT NULL,
  `medicines` varchar(250) NOT NULL,
  `symtoms` varchar(250) NOT NULL,
  `d_date` date NOT NULL,
  `suggest` varchar(250) NOT NULL,
  `report` varchar(250) NOT NULL,
  `ongoind_d_no` int(5) NOT NULL,
  `disease_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_show` int(11) NOT NULL,
  PRIMARY KEY (`disease_id`),
  KEY `pa_hc_no` (`pa_hc_no`),
  KEY `dr_id` (`dr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `disease_table1`
--

INSERT INTO `disease_table1` (`pa_hc_no`, `d_name`, `dr_id`, `medicines`, `symtoms`, `d_date`, `suggest`, `report`, `ongoind_d_no`, `disease_id`, `d_show`) VALUES
(123465824, 'Cancer', 7, 'paracetemol', 'hair fall, blood loss', '0000-00-00', 'take rest', 'Cancerparacetemol.png', 1, 2, 1),
(123465824, 'diabetes', 7, 'glycomate-25', 'high blood sugar ', '0000-00-00', 'eat less sugar ', '', 1, 3, 1),
(123465826, 'Diabetes', 7, 'glycomate-25', 'high blood sugar ', '0000-00-00', 'eat less sugar ', 'Diabetesglycomate-25.png', 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dr_registration`
--

CREATE TABLE IF NOT EXISTS `dr_registration` (
  `dr_id` int(10) NOT NULL AUTO_INCREMENT,
  `dr_emailid` varchar(50) NOT NULL,
  `dr_mono` int(10) NOT NULL,
  `dr_password` varchar(10) NOT NULL,
  PRIMARY KEY (`dr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dr_registration`
--

INSERT INTO `dr_registration` (`dr_id`, `dr_emailid`, `dr_mono`, `dr_password`) VALUES
(7, 'atiyakharwa@gmail.com', 1234564567, 'Jk@1090412'),
(8, 'mohammedkagdi68@gmail.com', 2147483647, 'Jk@12345'),
(9, 'abc@gmail.com', 2147483647, 'Jk@123456');

-- --------------------------------------------------------

--
-- Table structure for table `master_doctor_table`
--

CREATE TABLE IF NOT EXISTS `master_doctor_table` (
  `dr_id` int(10) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `adhar_no` int(15) NOT NULL,
  `dr_mono` varchar(12) NOT NULL,
  `dr_address` varchar(250) NOT NULL,
  `dr_degree` varchar(50) NOT NULL,
  `dr_special` varchar(50) NOT NULL,
  `clinic_name` varchar(50) NOT NULL,
  `clinic_address` varchar(50) NOT NULL,
  `clinic_no` int(12) NOT NULL,
  `dr_datetime` datetime NOT NULL,
  `fileloc` varchar(50) NOT NULL,
  KEY `doctorid` (`dr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_doctor_table`
--

INSERT INTO `master_doctor_table` (`dr_id`, `dr_name`, `adhar_no`, `dr_mono`, `dr_address`, `dr_degree`, `dr_special`, `clinic_name`, `clinic_address`, `clinic_no`, `dr_datetime`, `fileloc`) VALUES
(7, 'Juzar kagdi ', 2147483647, '9727300563', 'bharuch fasd', 'sadda', 'sda', 'ASD', 'sdaf', 0, '2023-02-26 00:00:00', '7.png'),
(8, 'Juzar kagdi ', 2147483647, '7984915566', 'c-1520, Lal bazaar, rajput streetbharuch ', 'mbbs', 'Dentalist', 'happysmile', 'zadheswar bharuch', 2147483647, '2023-03-02 00:00:00', '8.png'),
(8, 'Juzar kagdi ', 2147483647, '7984915566', 'c-1520, Lal bazaar, rajput streetbharuch ', 'mbbs', 'Dentalist', 'happysmile', 'zadheswar bharuch', 2147483647, '2023-03-02 00:00:00', '8.png'),
(9, 'Chirag bhamwala', 2147483647, '4567893581', 'Lal Bazaar, patan , madhya pradesh .', 'mbbs', 'physician', 'happysmile', ' Lal Bazaar, patan , madhya pradesh ', 2147483647, '2023-03-02 00:00:00', '9.png');

-- --------------------------------------------------------

--
-- Table structure for table `master_patient_table`
--

CREATE TABLE IF NOT EXISTS `master_patient_table` (
  `p_name` varchar(50) NOT NULL,
  `healthcardnumber` bigint(12) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `aadhar_no` varchar(12) NOT NULL,
  `emergency_no` varchar(12) NOT NULL,
  `emc_name` varchar(50) NOT NULL,
  `emc_relation` varchar(50) NOT NULL,
  `date_issue_hc` date NOT NULL,
  `fileloc` text NOT NULL,
  `dob` date NOT NULL,
  KEY `healthcardnumber` (`healthcardnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_patient_table`
--

INSERT INTO `master_patient_table` (`p_name`, `healthcardnumber`, `phoneno`, `address`, `email`, `bloodgroup`, `gender`, `age`, `aadhar_no`, `emergency_no`, `emc_name`, `emc_relation`, `date_issue_hc`, `fileloc`, `dob`) VALUES
('Juzar Kagdi', 123465824, '', 'C 1520 Lal Bazaar, Rajput street Bharuch-392001, G', '', 'b+', 'Male', 21, '450065002500', '2147483647', 'Banu ', 'mother ', '2000-02-12', '123465824.png', '2003-08-18'),
('xyz abc ', 123465825, '0000000000', 'xyz, abc,-000000, gujarat', '', 'b+', 'Male', 20, '0', '0', 'name', 'realation', '2000-02-12', '123465825.png', '2000-02-18'),
('Atiya Kharwa', 123465826, '9727300563', 'C master compound station road , Ankleshwarc master compound ,station road ,ankleshwar', '', 'O+', 'Female', 20, '746861553524', '2147483647', 'Asma', 'Mother', '2000-02-12', '123465826.png', '2002-06-15'),
('Kruti Pankajkumar Jadav', 123465827, '8866831130', '2402,AyodhyanagarLinkroad', '', 'o +', 'Female', 20, '281640636618', '2147483647', 'Jankhana', 'Mother', '2000-02-12', '123465827.png', '2023-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `pt_registration`
--

CREATE TABLE IF NOT EXISTS `pt_registration` (
  `pa_hc_no` bigint(12) NOT NULL AUTO_INCREMENT,
  `pt_emailid` varchar(50) NOT NULL,
  `pt_mono` bigint(15) NOT NULL,
  `pt_password` varchar(10) NOT NULL,
  PRIMARY KEY (`pa_hc_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=123465828 ;

--
-- Dumping data for table `pt_registration`
--

INSERT INTO `pt_registration` (`pa_hc_no`, `pt_emailid`, `pt_mono`, `pt_password`) VALUES
(123465824, 'mohammedkagdi68@gmail.com', 7984915566, 'Jk@1090412'),
(123465825, 'juzaratiya@gmail.com', 0, 'Jk@1090412'),
(123465826, 'atiyakharwa@gmail.com', 9727300563, 'Atiyak@2'),
(123465827, 'krutipankajkumar@gmail.com', 8866831130, 'Kruti2012');

-- --------------------------------------------------------

--
-- Table structure for table `vac_table`
--

CREATE TABLE IF NOT EXISTS `vac_table` (
  `vid` int(10) NOT NULL AUTO_INCREMENT,
  `pa_hc_no` bigint(12) NOT NULL,
  `vac_name` varchar(50) NOT NULL,
  `vac_date` date NOT NULL,
  `vac_place` varchar(50) NOT NULL,
  `vac_certificate` varchar(250) NOT NULL,
  PRIMARY KEY (`vid`),
  KEY `aadharcardnumber` (`pa_hc_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `vac_table`
--

INSERT INTO `vac_table` (`vid`, `pa_hc_no`, `vac_name`, `vac_date`, `vac_place`, `vac_certificate`) VALUES
(12, 123465824, 'jgfgh', '2003-02-18', 'bharuch', ''),
(13, 123465824, 'cowin', '2003-05-26', 'bharuh', 'cowin2003-05-26123465824.png'),
(14, 123465826, 'Covisheild 1 ', '2022-07-08', 'Ankleshwar ', 'Covisheild12022-07-08123465826.png'),
(15, 123465826, 'Covisheild 2', '2022-10-15', 'Ankleshwar', 'Covisheild22022-10-15123465826.png'),
(16, 123465826, 'Inactivated poliovirus vaccine', '2005-02-03', 'Modi garden, ankleshwar', 'Inactivatedpoliovirusvaccine2005-02-03123465826.png'),
(17, 123465826, 'Covisheild booster dose ', '2022-12-01', 'Bharuch', 'Covisheildboosterdose2022-12-01123465826.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allergie_table`
--
ALTER TABLE `allergie_table`
  ADD CONSTRAINT `allergie_table_ibfk_1` FOREIGN KEY (`pa_hc_no`) REFERENCES `pt_registration` (`pa_hc_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `disease_table1`
--
ALTER TABLE `disease_table1`
  ADD CONSTRAINT `disease_table1_ibfk_1` FOREIGN KEY (`pa_hc_no`) REFERENCES `pt_registration` (`pa_hc_no`),
  ADD CONSTRAINT `disease_table1_ibfk_2` FOREIGN KEY (`dr_id`) REFERENCES `dr_registration` (`dr_id`);

--
-- Constraints for table `master_doctor_table`
--
ALTER TABLE `master_doctor_table`
  ADD CONSTRAINT `doctorid` FOREIGN KEY (`dr_id`) REFERENCES `dr_registration` (`dr_id`);

--
-- Constraints for table `master_patient_table`
--
ALTER TABLE `master_patient_table`
  ADD CONSTRAINT `healthcardnumber` FOREIGN KEY (`healthcardnumber`) REFERENCES `pt_registration` (`pa_hc_no`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vac_table`
--
ALTER TABLE `vac_table`
  ADD CONSTRAINT `aadharcardnumber` FOREIGN KEY (`pa_hc_no`) REFERENCES `pt_registration` (`pa_hc_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
