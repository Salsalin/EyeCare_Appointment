-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 04:42 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalprojectdemo`
--
CREATE DATABASE IF NOT EXISTS `finalprojectdemo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `finalprojectdemo`;

-- --------------------------------------------------------

--
-- Table structure for table `apt`
--

CREATE TABLE IF NOT EXISTS `apt` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `date1` date NOT NULL,
  `time1` varchar(30) NOT NULL,
  `date2` date NOT NULL,
  `time2` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `patient_id` int(11) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `apt`
--

INSERT INTO `apt` (`doctor_id`, `name`, `date1`, `time1`, `date2`, `time2`, `description`, `patient_id`) VALUES
(13, 'Dr. Shabneen Rahman', '2017-05-16', '8.00 AM', '2017-05-02', '8.00 AM', 'df', 0),
(14, '', '2017-05-02', '8.00 AM', '2017-05-01', '8.00 AM', 'df', 0),
(15, 'Dr.Mohammed Atif Makdum', '2017-05-01', '8.00 AM', '2017-05-16', '8.00 AM', '3dv', 0),
(16, 'Dr.Mohammed Atif Makdum', '2017-05-02', '8.00 AM', '2017-05-05', '8.00 AM', 'dd', 0),
(17, 'Dr.Mohammed Atif Makdum', '2017-05-01', '11.45 AM', '2017-05-11', '10.45 AM', 'efcv', 17);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `doctor_detail` varchar(300) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `day` varchar(60) NOT NULL,
  `start_time` varchar(50) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `fee` varchar(20) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `photo`, `name`, `doctor_detail`, `mobile`, `qualification`, `specialist`, `day`, `start_time`, `end_time`, `fee`) VALUES
(11, '../images/dr-atif.jpg', 'Dr.Mohammed Atif Makdum', 'Dr. Mohammed Atif completed his graduation from Kasturba Medical College(KMC),Manipal. He completed his fellowship in Vitreo-Retina from Nethradham Super-Speciality Eye Hospital,India.', '01984695950', 'M.B.B.S..M.S', 'Ophthalmologist', 'Monday&Friday', '5:00 PM', '8:00 PM', '900/-'),
(12, '../images/dr-rouksana.jpg', 'Dr. Rouksana Edappagath', 'Dr. Rouksana Edappagath graduated from Calicut Medical College. She completed her MS Ophthalmology from JIPMER(Jawaharlal institute of Postgraduate Medical Education and Research).', '01716428969', 'M.B.B.S..M.S', 'Ophthalmologist', 'Tuesday,Thursday,Friday,', '2:30 PM', '5:30 PM', '700/-'),
(15, '../images/images (17).jpg', 'Dr. Shabneen Rahman', 'Dr. Shabneen Rahman  has done fellowship in cornea & anterior segment. She is very passionate about her patients and wants them to receive excellent care.', '01914001234', 'M.B.B.S..M.S', 'Eye Specialist.', 'Monday,Friday,Saturday', '3:00 PM', '6:00 PM', '700/-'),
(18, '../images/cbcd12db4e14891dffa702fcd749d029.jpg', 'Dr. Kamal Haider Khan', 'Dr. Kamal Haider Khan completed his MBBS degree from Dhaka Medical College (DMC) . He is now Consultant & Director of Bangladesh Eye Hospital.', '01717911391', 'M.B.B.S..M.S..DO..MC', 'Glaucoma Specialist', 'Tuesday,Friday', '9:00 AM', '12:00 PM', '1000/-'),
(19, '../images/561c8-doctors-profile-picture.jpg', 'Dr.Fatema Ferdous Ara', 'Dr. Fatema Ferdous Ara working as a registrar at National Institute of Ophthalmology And Hospital. Passed MBBS from Comilla Medical College And Hospital. She obtained FCPS from  Bangladesh college of  surgeons.', '01921787778', 'M.B.B.S..FCPS(Eye)', 'Phaco & Anterior Segment Surgeon', 'Friday', '8:00 AM', '1:00 PM', '800/-');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_appointment`
--

CREATE TABLE IF NOT EXISTS `doctor_appointment` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(40) NOT NULL,
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `doctor_appointment`
--

INSERT INTO `doctor_appointment` (`doctor_id`, `doctor_name`, `description`, `date`, `time`) VALUES
(14, 'Dr.Rouksana Edappagath', 'book appointment for test', '2016-07-11', '06:35 PM'),
(15, 'Dr.Jalal Ahmed', 'book apointment', '2017-05-11', '07:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`patient_id`, `username`, `gender`, `email`, `password`, `phone`, `address`, `city`) VALUES
(12, '', '', 'admin@gmail.com', '12345', '', '', ''),
(17, 'mou', 'female', 'mouri@gmail.com', 'mou', '01731988218', 'Monohorpur', 'Comilla');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
