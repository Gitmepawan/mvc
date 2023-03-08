-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 06, 2017 at 02:43 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'employees_assign'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_employees'
--

CREATE TABLE tbl_employees (
  id smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  emp_fname varchar(50) NOT NULL,
  emp_lname varchar(75) NOT NULL,
  emp_job varchar(25) NOT NULL,
  emp_image varchar(50) NOT NULL,
  emp_thumb varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_employees'
--

INSERT INTO tbl_employees (id, emp_fname, emp_lname, emp_job, emp_image, emp_thumb) VALUES
(1, 'Mary', 'Smith', 'Accounting', 'person1.jpg', 'person1th.jpg'),
(2, 'Bob', 'Delgado', 'Sales', 'person2.jpg', 'person2th.jpg'),
(3, 'Emily', 'Strange', 'Sales', 'person3.jpg', 'person3th.jpg'),
(4, 'Greg', 'Murphy', 'CEO', 'person4.jpg', 'person4th.jpg'),
(5, 'Wanda', 'Zymote', 'Accounting', 'person5.jpg', 'person5th.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
