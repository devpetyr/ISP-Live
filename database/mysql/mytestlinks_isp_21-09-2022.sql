-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2022 at 01:34 PM
-- Server version: 10.5.17-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytestlinks_isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id`, `name`, `city`, `state`, `country`, `address`, `contact`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Commonwealths Puerto', 'Los Angeles', 'Los Angeles', 'Los Angeles', 'Los Angeles', 321, 1, '2022-09-01 13:27:44', '2022-09-01 13:27:44'),
(8, 'Axel Burgess', 'Nulla pariatur Veli', 'Accusantium animi e', 'Illum cumque volupt', 'Enim error voluptate', 59, 1, '2022-09-02 13:16:55', '2022-09-02 13:56:09'),
(10, 'Agency name', 'city', 'state', 'country', 'address', 123456789, 1, '2022-09-02 18:41:11', '2022-09-02 18:41:11'),
(11, 'Isp', 'New york', 'asd', 'asd', 'asd', 1234567589, 1, '2022-09-09 18:50:35', '2022-09-09 18:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agency_id`, `first_name`, `last_name`, `phone_number`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'abc', 'abc', 123456789, 'abc@mail.com', 1, '2022-09-01 12:28:45', '2022-09-02 16:48:21'),
(5, 1, 'Jayme', 'Chapman', 788, 'vumoricuvu@mailinator.com', 1, '2022-09-01 15:29:42', '2022-09-01 15:29:42'),
(6, 8, 'Forrest', 'Perkins', 241, 'vinekuv@mailinator.com', 1, '2022-09-01 17:13:52', '2022-09-02 16:48:30'),
(8, 1, 'Lara', 'Glover', 195, 'dypanamuki@mailinator.com', 1, '2022-09-02 13:18:15', '2022-09-02 13:18:15'),
(9, 1, 'Ian', 'Pate', 450, 'mitogopov@mailinator.com', 1, '2022-09-02 13:49:53', '2022-09-02 13:56:20'),
(10, 8, 'test', 'test', 12345, 'test@mail.com', 0, '2022-09-02 17:03:08', '2022-09-02 17:15:25'),
(11, 10, 'first name', 'last name', 123456789, 'email@gmail.com', 1, '2022-09-02 18:42:00', '2022-09-02 18:42:00'),
(12, 11, 'john', 'doe', 123, 'johndoe@gmail.com', 1, '2022-09-09 18:51:05', '2022-09-09 18:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `agents_old`
--

CREATE TABLE `agents_old` (
  `id` int(11) NOT NULL,
  `agency_name` varchar(225) DEFAULT NULL,
  `agency_contact_person` varchar(225) DEFAULT NULL,
  `agency_street_address_1` varchar(225) DEFAULT NULL,
  `agency_street_address_2` varchar(225) DEFAULT NULL,
  `agency_street_address_3` varchar(225) DEFAULT NULL,
  `agency_city` varchar(255) DEFAULT NULL,
  `agent_state` varchar(255) DEFAULT NULL,
  `agency_zip_code` varchar(225) DEFAULT NULL,
  `agency_country` varchar(255) DEFAULT NULL,
  `agency_phone_number` varchar(255) DEFAULT NULL,
  `agent_email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents_old`
--

INSERT INTO `agents_old` (`id`, `agency_name`, `agency_contact_person`, `agency_street_address_1`, `agency_street_address_2`, `agency_street_address_3`, `agency_city`, `agent_state`, `agency_zip_code`, `agency_country`, `agency_phone_number`, `agent_email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc agency name', 'abc agency contact person', 'abc agency street address 1', 'abc agency street address 2', 'abc agency street address 3', '125809', '1416', 'abc zip code', '233', '+(111)111-111', 'agent_email@gmail.com', 1, '2022-07-22 16:05:42', '2022-07-22 16:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Emirates', '2022-08-31 11:04:21', '2022-08-31 18:25:44'),
(3, 'xyz', '2022-08-31 15:05:00', '2022-08-31 15:05:00'),
(7, 'abc1', '2022-08-31 16:32:51', '2022-08-31 16:32:51'),
(8, 'abc1', '2022-08-31 16:34:50', '2022-08-31 16:34:50'),
(9, 'abc1', '2022-08-31 16:36:14', '2022-08-31 16:36:14'),
(10, 'abc1', '2022-08-31 16:42:25', '2022-08-31 16:42:25'),
(13, 'FXC-523', '2022-08-31 18:25:20', '2022-08-31 18:25:20'),
(14, 'new airline123', '2022-09-01 10:12:08', '2022-09-01 10:12:26');

-- --------------------------------------------------------

--
-- Table structure for table `airport_details_student_application_form`
--

CREATE TABLE `airport_details_student_application_form` (
  `id` int(11) NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `arrival_airport` varchar(255) DEFAULT NULL,
  `arrival_flight_number` varchar(255) DEFAULT NULL,
  `flight_type` varchar(255) DEFAULT NULL,
  `arrival_airline` varchar(255) DEFAULT NULL,
  `airport_arrival_time` time DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport_details_student_application_form`
--

INSERT INTO `airport_details_student_application_form` (`id`, `arrival_date`, `arrival_airport`, `arrival_flight_number`, `flight_type`, `arrival_airline`, `airport_arrival_time`, `status`, `created_at`, `updated_at`) VALUES
(1, '1997-11-17', 'RNO', '954', 'domestic', 'Delta Airlines', '04:19:00', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, '2022-09-01', 'SJC', 'FAA CodeA26', 'international', 'American Airlines-Int’l', '21:34:00', 1, '2022-08-19 07:45:27', '2022-08-19 07:45:27'),
(3, '2022-09-01', 'SJC', 'FAA CodeA26', 'international', 'American Airlines-Int’l', '21:34:00', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(4, '2022-01-20', 'PSP', '800', 'domestic', 'Delta Airlines', '16:03:00', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(5, '1991-06-05', 'HNL', '761', 'domestic', 'Cathay Pacific', '09:20:00', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(6, '1984-06-06', 'SJC', '140', 'domestic', 'United Airlines-Domestic', '13:59:00', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(7, '1990-05-16', 'BUR', '663', 'domestic', 'Delta Airlines', '01:06:00', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(8, '1988-02-29', 'RNO', '319', 'domestic', 'American Airlines-Int’l', '00:37:00', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(9, '1996-10-20', 'OAK', '39', 'domestic', 'Cathay Pacific', '04:07:00', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(10, '1992-05-20', 'HNL', '48', 'international', 'Japan Airlines', '22:43:00', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(11, '1984-07-06', 'SFO', '255', 'domestic', 'British Airways', '09:12:00', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `cardholder_details_student_application_form`
--

CREATE TABLE `cardholder_details_student_application_form` (
  `id` int(11) NOT NULL,
  `cardholder_first_name` varchar(255) DEFAULT NULL,
  `cardholder_last_name` varchar(255) DEFAULT NULL,
  `cardholder_email` varchar(255) DEFAULT NULL,
  `cardholder_street_address_line_1` varchar(255) DEFAULT NULL,
  `cardholder_street_address_line_2` varchar(255) DEFAULT NULL,
  `cardholder_street_address_line_3` varchar(255) DEFAULT NULL,
  `cardholder_city` varchar(255) DEFAULT NULL,
  `cardholder_state` varchar(255) DEFAULT NULL,
  `cardholder_zipcode` varchar(255) DEFAULT NULL,
  `cardholder_country` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardholder_details_student_application_form`
--

INSERT INTO `cardholder_details_student_application_form` (`id`, `cardholder_first_name`, `cardholder_last_name`, `cardholder_email`, `cardholder_street_address_line_1`, `cardholder_street_address_line_2`, `cardholder_street_address_line_3`, `cardholder_city`, `cardholder_state`, `cardholder_zipcode`, `cardholder_country`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Justin', 'Carr', 'himym@mailinator.com', '840 First Freeway', 'Hic aliqua Et reici', 'Dolorem veritatis nu', 'Saepe aspernatur ame', 'American Samoa', '62228', 'Equatorial Guinea', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'wirar', 'smith', 'wirar53049@zfobo.com', 'wirar Street', NULL, NULL, 'hollywood', 'California', '90028', 'United States', 1, '2022-08-19 07:45:27', '2022-08-19 07:45:27'),
(3, 'wirar', 'smith', 'wirar53049@zfobo.com', 'wirar Street', NULL, NULL, 'hollywood', 'California', '90028', 'United States', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(4, 'Barry', 'Freeman', 'xefasab@mailinator.com', '586 Second Road', 'Duis adipisicing min', 'Eveniet pariatur O', 'Ea magnam exercitati', 'Alaska', '64341', 'Wallis And Futuna', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(5, 'Beatrice', 'Fowler', 'nobiji@mailinator.com', '48 North Nobel Street', 'Quo dolor ab eiusmod', 'Dolore omnis est eu', 'Et unde est qui dele', 'South Dakota', '45051', 'Finland', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(6, 'Amery', 'Best', 'jipowo@mailinator.com', '77 South Rocky Second Street', 'Iste ab eligendi ea', 'Eaque autem officia', 'Expedita proident e', 'Washington', '84066', 'Swaziland', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(7, 'Jane', 'Stevenson', 'zefi@mailinator.com', '838 Nobel Lane', 'Sapiente est aut exp', 'Reprehenderit venia', 'Dolores irure aut ma', 'Connecticut', '57986', 'Finland', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(8, 'Cleo', 'King', 'qevuc@mailinator.com', '269 Hague Parkway', 'Perferendis neque ni', 'Voluptatem est sit', 'Aliquam nemo digniss', 'Nebraska', '62366', 'Bulgaria', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(9, 'Trevor', 'Price', 'kuduxyqare@mailinator.com', '25 Second Freeway', 'Esse qui architecto', 'Ratione expedita est', 'Est itaque velit er', 'California', '16005', 'Mongolia', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(10, 'Meredith', 'Ballard', 'ruper@mailinator.com', '274 West Nobel Extension', 'Laudantium modi con', 'Id veritatis cillum', 'Exercitation qui ali', 'Maryland', '85211', 'Ethiopia', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(11, 'Jeanette', 'Good', 'fikeqivaw@mailinator.com', '33 First Parkway', 'Explicabo Ex vitae', 'Minima quia voluptat', 'Culpa do ullam offi', 'Delaware', '38839', 'Jersey', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `creditcard_details_student_application_form`
--

CREATE TABLE `creditcard_details_student_application_form` (
  `id` int(11) NOT NULL,
  `credit_card_type` varchar(255) DEFAULT NULL,
  `name_on_card` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `card_exp_date` date DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creditcard_details_student_application_form`
--

INSERT INTO `creditcard_details_student_application_form` (`id`, `credit_card_type`, `name_on_card`, `card_number`, `card_exp_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Master Card', 'Germaine Cantrell', '371', '2004-06-30', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'Master Card', 'wirar', '4238585969648158', '2022-08-18', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(3, 'Visa', 'Keefe Perez', '822', '2012-11-25', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(4, 'Visa', 'Yoshio Dickerson', '155', '1982-07-09', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(5, 'Visa', 'Yen Blake', '958', '2004-01-05', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(6, 'Master Card', 'Thaddeus Bentley', '170', '2003-08-05', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(7, 'Visa', 'September Little', '943', '2008-01-27', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(8, 'Visa', 'Kylee Douglas', '769', '1978-07-29', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(9, 'Master Card', 'Leigh Dodson', '863', '2021-12-06', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(10, 'Visa', 'Hop Cote', '922', '2010-10-13', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `electronic_form_details_student_application_form`
--

CREATE TABLE `electronic_form_details_student_application_form` (
  `id` int(11) NOT NULL,
  `student_electronic_signature_1` varchar(255) DEFAULT NULL,
  `student_name_2` varchar(255) DEFAULT NULL,
  `student_electronic_signature_date_1` date DEFAULT NULL,
  `cardholder_electronic_signature` varchar(255) DEFAULT NULL,
  `cardholder_name` varchar(255) DEFAULT NULL,
  `cardholder_date` date DEFAULT NULL,
  `student_electronic_signature_2` varchar(255) DEFAULT NULL,
  `student_electronic_signature_date_2` date DEFAULT NULL,
  `parent_electronic_signature_1` varchar(255) DEFAULT NULL,
  `parent_electronic_signature_date_1` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Active = 1,\r\nInactive = 0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronic_form_details_student_application_form`
--

INSERT INTO `electronic_form_details_student_application_form` (`id`, `student_electronic_signature_1`, `student_name_2`, `student_electronic_signature_date_1`, `cardholder_electronic_signature`, `cardholder_name`, `cardholder_date`, `student_electronic_signature_2`, `student_electronic_signature_date_2`, `parent_electronic_signature_1`, `parent_electronic_signature_date_1`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Voluptatem Dolor ma', 'Dante Garrett', '2006-10-30', 'Voluptatem eveniet', 'Abigail Bentley', '1992-01-10', 'Ex id pariatur Vita', '1994-10-28', 'Voluptas fugiat opt', '2022-06-28', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'wirar smith', 'wirar smith', '2022-08-19', 'wirar smith', 'wirar smith', '2022-08-19', 'wirar smith', '2022-08-19', 'smith drove', '2022-08-19', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(3, 'Laboris ut aut enim', 'Olympia Gay', '1997-03-07', 'Voluptatibus illo ad', 'Buffy Adams', '1988-02-21', 'Debitis officia volu', '1986-02-12', 'Quidem atque autem e', '2007-01-11', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(4, 'Deleniti rem odio nu', 'Xander Reeves', '2009-05-08', 'Numquam et est in en', 'TaShya Norris', '1983-04-20', 'Perspiciatis in in', '2009-08-25', 'Enim facere culpa r', '2001-05-18', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(5, 'Quod nihil natus ali', 'Nero Harris', '2018-02-11', 'Accusamus ut qui non', 'Violet David', '1970-02-16', 'Amet pariatur Offi', '2000-04-05', 'Libero reprehenderit', '1979-11-04', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(6, 'Aliquam a dolorem qu', 'Chase Mcleod', '1978-07-05', 'Voluptatem est proi', 'Elaine Barton', '2015-01-03', 'Et totam libero anim', '1986-11-30', 'Non quas iure nulla', '2017-02-13', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(7, 'Quaerat et eligendi', 'Arsenio Mccarty', '1989-07-10', 'Ipsa voluptates off', 'Ingrid Russo', '1985-10-01', 'Est minima incididun', '1971-01-03', 'Voluptate saepe illo', '1986-04-05', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(8, 'Quis facere non accu', 'Macey Rivers', '1984-08-17', 'Quia sint rerum amet', 'Dawn Combs', '2012-11-13', 'Unde commodo sed duc', '1985-04-09', 'Laborum nesciunt su', '2012-08-05', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(9, 'Porro est qui moles', 'Micah Odom', '2002-03-28', 'Et adipisicing maior', 'Serina Mays', '2021-05-05', 'Temporibus similique', '2012-03-30', 'Quia aute optio lab', '1973-04-02', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(10, 'Eum tenetur consecte', 'Upton Bryan', '1983-05-09', 'Incidunt culpa aliq', 'Mira Martin', '2004-05-31', 'Molestiae aliquid se', '1986-05-17', 'Sunt deserunt eiusmo', '2010-07-08', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_details_student_application_form`
--

CREATE TABLE `emergency_details_student_application_form` (
  `id` int(11) NOT NULL,
  `emergency_contact_name` varchar(255) DEFAULT NULL,
  `emergency_contact_phone_number` varchar(255) DEFAULT NULL,
  `emergency_contact_relation` varchar(255) DEFAULT NULL,
  `emergency_contact_email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_details_student_application_form`
--

INSERT INTO `emergency_details_student_application_form` (`id`, `emergency_contact_name`, `emergency_contact_phone_number`, `emergency_contact_relation`, `emergency_contact_email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Goodwin', '+1 (656) 295-8502', 'Ut vero expedita quo', 'putyfyfol@mailinator.com', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'drove', '1 (323) 348-5501', 'Father', 'Smithdrove@zfobo.com', 1, '2022-08-19 07:45:27', '2022-08-19 07:45:27'),
(3, 'drove', '1 (323) 348-5501', 'Father', 'Smithdrove@zfobo.com', 1, '2022-08-19 08:06:41', '2022-08-19 08:06:41'),
(4, 'Welch', '+1 (797) 146-4107', 'Natus praesentium ex', 'jydigaqun@mailinator.com', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(5, 'Duffy', '+1 (301) 731-1528', 'Pariatur Eum blandi', 'fugu@mailinator.com', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(6, 'Sloan', '+1 (181) 319-5608', 'Ullamco quis rem inc', 'kyny@mailinator.com', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(7, 'Watkins', '+1 (234) 163-3236', 'Soluta possimus sit', 'syhyt@mailinator.com', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(8, 'Noel', '+1 (261) 743-6475', 'Inventore culpa vel', 'xypywy@mailinator.com', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(9, 'Ochoa', '+1 (623) 684-5789', 'Quia ex magna facere', 'sohitykuwe@mailinator.com', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(10, 'Kent', '+1 (252) 535-4941', 'Perspiciatis alias', 'tysuneqa@mailinator.com', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(11, 'King', '+1 (909) 487-3298', 'Commodi modi dolore', 'gidy@mailinator.com', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `fee_details_student_application_form`
--

CREATE TABLE `fee_details_student_application_form` (
  `id` int(11) NOT NULL,
  `placement_fee` varchar(255) DEFAULT NULL,
  `monthly_service_fee` varchar(255) DEFAULT NULL,
  `airport_pickup_fee` varchar(255) DEFAULT NULL,
  `deposit_fee` varchar(255) DEFAULT NULL,
  `late_fee` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Active = 1,\r\nInactive = 0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_details_student_application_form`
--

INSERT INTO `fee_details_student_application_form` (`id`, `placement_fee`, `monthly_service_fee`, `airport_pickup_fee`, `deposit_fee`, `late_fee`, `status`, `created_at`, `updated_at`) VALUES
(1, 'no', 'yes', 'yes', 'yes', 'no', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'yes', 'yes', 'yes', 'yes', 'no', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(3, 'no', 'yes', 'no', 'yes', 'no', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(4, 'no', 'no', 'yes', 'no', 'yes', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(5, 'no', 'yes', 'no', 'no', 'yes', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(6, 'yes', 'no', 'yes', 'no', 'no', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(7, 'yes', 'yes', 'no', 'no', 'yes', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(8, 'no', 'yes', 'no', 'no', 'yes', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(9, 'yes', 'no', 'yes', 'yes', 'no', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(10, 'no', 'no', 'no', 'yes', 'no', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `haf_adult_informations`
--

CREATE TABLE `haf_adult_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name1` varchar(255) DEFAULT NULL,
  `last_name1` varchar(255) DEFAULT NULL,
  `work_phone1` varchar(255) DEFAULT NULL,
  `relation1` varchar(255) DEFAULT NULL,
  `occupation1` varchar(255) DEFAULT NULL,
  `employer1` varchar(255) DEFAULT NULL,
  `gender1` varchar(255) DEFAULT NULL,
  `first_name2` varchar(255) DEFAULT NULL,
  `last_name2` varchar(255) DEFAULT NULL,
  `work_phone2` varchar(255) DEFAULT NULL,
  `relation2` varchar(255) DEFAULT NULL,
  `occupation2` varchar(255) DEFAULT NULL,
  `employer2` varchar(255) DEFAULT NULL,
  `gender2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_adult_informations`
--

INSERT INTO `haf_adult_informations` (`id`, `user_id`, `first_name1`, `last_name1`, `work_phone1`, `relation1`, `occupation1`, `employer1`, `gender1`, `first_name2`, `last_name2`, `work_phone2`, `relation2`, `occupation2`, `employer2`, `gender2`, `created_at`, `updated_at`) VALUES
(1, 2, 'test', 'Avila', '+1 (729) 268-9405', 'Laborum in minim ut', 'Dignissimos aut saep', 'Distinctio Aliquid', 'adult1_female', 'Graiden', 'Foley', '+1 (793) 319-8762', 'Doloremque deserunt', 'Mollit et mollitia s', 'Aliquip vitae fuga', 'adult2_male', '2022-09-09 14:57:29', '2022-09-09 14:57:29'),
(3, 67, 'Shafira', 'Burke', '+1 (488) 509-9855', 'Illum et occaecat a', 'Soluta consequat Es', 'Anim laborum cum bea', 'male', 'Whitney', 'Hopper', '+1 (527) 587-41980', 'Eu aut quia dolor de', 'Qui eos aut nobis eo', 'Sit aut aute quo sit', 'female', '2022-09-12 13:10:57', '2022-09-20 16:57:52'),
(4, 68, 'Warren123', 'Wheeler4235', '+1 (801) 129-7023', 'Voluptas minim commo', 'Dolorem nisi aliquam', 'Expedita qui repudia', 'male', 'Riley', 'Bonner', '+1 (193) 494-5587', 'In odit temporibus a', 'Consequatur corrupti', 'Possimus commodo su', 'female', '2022-09-12 17:06:00', '2022-09-13 11:11:40'),
(5, 69, 'Kerry', 'Beard', '+1 (589) 199-8963', 'Ut et ut tempora sit', 'Quibusdam ut est lau', 'Eum aut voluptatem', 'male', 'Forrest', 'Guerra', '+1 (216) 792-7122', 'Quae omnis molestiae', 'Debitis sunt nihil q', 'Ea et explicabo Ear', 'female', '2022-09-13 11:18:10', '2022-09-13 11:18:10'),
(6, 70, 'Baker', 'Grant', '+1 (132) 316-4529', 'Dolorem ex dolore qu', 'Voluptatibus ducimus', 'Corrupti et volupta', 'male', 'Paloma', 'Melendez', '+1 (446) 753-1913', 'Praesentium tempor r', 'Libero suscipit ad r', 'Libero aliquip atque', 'female', '2022-09-15 09:57:38', '2022-09-15 09:57:38'),
(7, 73, 'Emily', 'Ross', '+1 (203) 849-1342', 'Recusandae Ea et en', 'Omnis maxime sunt te', 'Saepe ipsam nesciunt', 'male', 'Nina', 'Landry', '+1 (643) 659-9779', 'Aliqua Est laudanti', 'Quo dicta laboriosam', 'Lorem corporis duis', 'female', '2022-09-15 18:09:55', '2022-09-15 18:09:55'),
(8, 74, 'tuyhertr', 'rtyertyret', '75676', 'yertytery', 'thytredyhert', 'hfygdfg', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-16 10:52:55', '2022-09-16 10:52:55'),
(9, 79, 'Emily', 'Ross', '+1 (203) 849-1342', 'Recusandae Ea et en', 'Omnis maxime sunt te', 'Saepe ipsam nesciunt', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-16 17:00:31', '2022-09-16 17:00:31'),
(10, 85, 'Cains', 'Gray', '+1 (635) 564-2049', 'Dolorem magni ea qui', 'Dolor sunt', 'Recusandae Odio qua', 'female', 'Angela', 'Salinas', '+1 (453) 592-1304', 'Vel do consectetur', 'Incidunt autem nisi', 'Porro qui culpa volu', 'male', '2022-09-19 12:04:58', '2022-09-20 14:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `haf_basic_host_informations`
--

CREATE TABLE `haf_basic_host_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cell_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `work_phone` varchar(255) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `application_status` int(11) DEFAULT 0 COMMENT '1 = Approved , 2 = Rejected',
  `status` int(11) DEFAULT 0,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_basic_host_informations`
--

INSERT INTO `haf_basic_host_informations` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `cell_phone`, `email`, `occupation`, `employer`, `work_phone`, `home_address`, `profile_photo`, `application_status`, `status`, `notes`, `created_at`, `updated_at`) VALUES
(24, 67, 'test', 'Wolfe', '2009-09-13', '+1 (115) 708-49467', 'tes5465645t@mail.com', 'Labore officiis offi', 'Error necessitatibus', '03001234567', 'Culpa consequatur N7tr867', '16631747609999.jpg', 1, 1, 'rejected', '2022-09-14 16:59:20', '2022-09-20 16:08:15'),
(25, 68, 'Penelope', 'Johns', '2016-08-24', '+1 (919) 931-4914', 'zusil@mailinator.com', 'Officiis voluptatem', 'Eius id in velit ve', '+1 (712) 976-9323', 'Odio reprehenderit', '16630616509999.jpg', 0, 1, 'test.\r\n\r\n\r\n123', '2022-09-12 17:05:00', '2022-09-20 16:08:45'),
(26, 69, 'Dawn', 'Crosby', '1999-12-24', '+1 (532) 362-5901', 'hotaca@mailinator.com', 'Molestiae mollitia e', 'Nihil sit laboris o', '+1 (768) 333-2224675645', 'Distinctio Esse el', '16630677949999.jpg', 0, 1, NULL, '2022-09-13 11:16:34', '2022-09-15 16:12:08'),
(27, 70, 'Brennan', 'Hahn', '1999-03-19', '+1 (724) 101-4933fgdsddfgf', 'romehiz@mailinator.com', 'Asperiores cumque do', 'Omnis nisi non enim', '+1 (616) 773-7173', 'Corporis est in lab', '16632403969999.jpg', 1, 1, 'test123\r\ntesting\r\nalpha\r\n1)note\r\n2)note', '2022-09-15 11:13:16', '2022-09-20 12:50:22'),
(28, 73, 'Leilani', 'Macias', '2003-07-09', '+1 (272) 809-4769', 'vufyma@mailinator.com', 'Est esse quasi volu', 'Rerum reprehenderit', '+1 (964) 823-8621', 'Veritatis qui deseru', '16632653719999.png', 1, 0, NULL, '2022-09-15 18:09:31', '2022-09-15 18:21:32'),
(29, 74, 'Mallory', 'Stone', '1979-08-16', '+1 (333) 383-6521', 'fynujox@mailinator.com', 'Libero consectetur', 'Corporis qui volupta', '+1 (743) 425-7605', 'Itaque proident occ', '16633227829999.jpg', 1, 0, NULL, '2022-09-16 10:06:22', '2022-09-16 11:45:47'),
(30, 76, 'Kyla', 'Blevins', '1975-06-10', '+1 (372) 918-2262hdfghdfghdf', 'fiqyv@mailinator.com', 'Nemo voluptatibus asgf', 'Cillum non quam volu', '+1 (414) 459-6181gfhfdghdfgh', 'Cum molestiae eligen', '16633452779999.jpg', 0, 0, NULL, '2022-09-16 16:21:17', '2022-09-16 16:21:17'),
(31, 79, 'Leilani', 'Macias', '1996-03-07', '+1 (272) 809-4769', 'vufyma@mailinator.com', 'Est esse quasi volu', 'Rerum reprehenderit', '+1 (964) 823-8621', 'Veritatis qui deseru', '16633475389999.png', 1, 0, NULL, '2022-09-16 16:58:58', '2022-09-16 17:02:17'),
(32, 85, 'Testing testing', 'Baird', '1982-08-16', '+1 (655) 834-4961', 'mihejik@mailinator.com', 'Voluptatem corrupti', 'Nisi aut minim nulla', '+1 (887) 448-2884', 'Maiores qui perspici', '16636662399999.jpg', 1, 0, NULL, '2022-09-20 09:30:39', '2022-09-20 13:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `haf_child_informations`
--

CREATE TABLE `haf_child_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name1` varchar(255) DEFAULT NULL,
  `last_name1` varchar(255) DEFAULT NULL,
  `dob1` varchar(255) DEFAULT NULL,
  `gender1` varchar(255) DEFAULT NULL,
  `first_name2` varchar(255) DEFAULT NULL,
  `last_name2` varchar(255) DEFAULT NULL,
  `dob2` varchar(255) DEFAULT NULL,
  `gender2` varchar(255) DEFAULT NULL,
  `first_name3` varchar(255) DEFAULT NULL,
  `last_name3` varchar(255) DEFAULT NULL,
  `dob3` varchar(255) DEFAULT NULL,
  `gender3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_child_informations`
--

INSERT INTO `haf_child_informations` (`id`, `user_id`, `first_name1`, `last_name1`, `dob1`, `gender1`, `first_name2`, `last_name2`, `dob2`, `gender2`, `first_name3`, `last_name3`, `dob3`, `gender3`, `created_at`, `updated_at`) VALUES
(1, 2, 'Barrett', 'Joyce', '2010-06-14', 'child1_female', 'Francis', 'Deleon', '2009-12-10', 'child2_male', 'Portia', 'Short', '1981-09-18', 'child3_male', '2022-09-09 15:01:09', '2022-09-09 15:01:09'),
(2, 1, 'test child', 'Joyce', '2010-06-14', 'child1_male', 'Francis', 'Deleon', '2009-12-10', 'child2_male', 'Portia', 'Short', '1981-09-18', 'child3_male', '2022-09-09 15:01:54', '2022-09-09 15:01:54'),
(4, 67, 'Joan', 'Cain', '2001-10-13', 'female', 'Gray', 'Johnston', '1998-09-28', 'male', 'Maisie', 'Rivers', '1980-07-10', 'male', '2022-09-12 13:11:07', '2022-09-14 11:26:34'),
(5, 68, 'Damon', 'Wall', '2003-08-01', 'female', 'Dustin', 'Norris', '1990-04-19', 'male', 'Ali', 'Robinson', '2007-11-12', 'female', '2022-09-12 17:06:10', '2022-09-13 11:13:40'),
(6, 69, 'Rudyard', 'Trujillo', '1996-11-25', 'female', 'Dawn', 'Ramos', '2020-09-08', 'male', 'Medge', 'Serrano', '2012-07-10', 'female', '2022-09-13 11:17:20', '2022-09-13 11:17:20'),
(7, 70, 'ffgfdsg', 'gdfsgdsfg', '2022-09-13', 'female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-15 11:04:26', '2022-09-15 11:08:29'),
(8, 73, 'Sybil', 'Hamilton', '1999-04-04', 'female', 'Amir', 'Rosales', '1989-06-01', 'male', 'Leandra', 'Ellis', '2003-03-13', 'female', '2022-09-15 18:10:00', '2022-09-15 18:10:00'),
(9, 74, 'ghfg', 'hdfgh', '2022-09-15', 'female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-16 10:58:10', '2022-09-16 10:58:10'),
(10, 79, 'Sybil', 'Hamilton', '2022-09-14', 'female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-16 17:00:42', '2022-09-16 17:00:42'),
(11, 85, 'Ainsley', 'Shelton', '1983-12-16', 'female', 'Pearl', 'Rose', '2010-03-12', 'male', 'Uriel', 'West', '1992-10-26', 'male', '2022-09-19 12:05:03', '2022-09-20 13:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `haf_emergency_informations`
--

CREATE TABLE `haf_emergency_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `number1` varchar(255) DEFAULT NULL,
  `name2` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `number2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_emergency_informations`
--

INSERT INTO `haf_emergency_informations` (`id`, `user_id`, `name1`, `email1`, `number1`, `name2`, `email2`, `number2`, `created_at`, `updated_at`) VALUES
(1, 2, 'emergency contacts1', 'emergencycontacts@maqil.com', 'emergency contacts1', 'emergency contacts2', 'emergencycontacts@maqil.com', 'emergency contacts2', '2022-09-09 15:12:28', '2022-09-09 15:12:28'),
(3, 67, 'Harding Dasfgdfsgdsfg', 'test@mailinator.com', '+1 (115) 708-494654646', 'Malcolm Hahnghdghdf', 'test123@mailinator.com', '+1 (115) 708-4946546435643564', '2022-09-12 13:11:42', '2022-09-14 14:38:46'),
(4, 68, 'Eleanor Moonigbjodgbjdfgnbjdfgnblcvblcnfcglknfglknlkgnnlk', 'xikadupyn@mailinator.com', '+1 (188) 323-99631212121', 'Morgan Dennis', 'rahekoqob@mailinator.com', '+1 (506) 734-2507', '2022-09-12 17:06:50', '2022-09-13 10:14:58'),
(5, 69, 'Lunea Richard', 'byjitok@mailinator.com', '+1 (665) 912-6297', 'Hamish Steele', 'cizitu@mailinator.com', '+1 (783) 209-9438', '2022-09-13 11:24:10', '2022-09-13 11:24:10'),
(6, 70, 'Quinn Bruce', 'ximyxufuwu@mailinator.com', '+62555454545121', 'Jason Shannon', 'taqe@mailinator.com', '+1 (783) 209-9438', '2022-09-15 11:11:00', '2022-09-15 11:11:00'),
(7, 73, 'Miranda Moreno', 'xici@mailinator.com', '+1 (155) 756-6472', 'Burke Abbott', 'nacoqukazy@mailinator.com', '+1 (861) 169-5636', '2022-09-15 18:10:13', '2022-09-15 18:10:13'),
(8, 74, 'gthfdth', 'tedamewuho@mailinator.com', '+1 (184) 326-8377', 'Mary Nixon', 'budoxop@mailinator.com', '+1 (783) 209-9438', '2022-09-16 11:07:42', '2022-09-16 11:07:42'),
(9, 79, 'Miranda Moreno', 'xici@mailinator.com', '+1 (155) 756-6472', 'Burke Abbott', 'nacoqukazy@mailinator.com', '+1 (861) 169-5636', '2022-09-16 17:01:24', '2022-09-16 17:01:24'),
(10, 85, 'Baxter Peterson', 'ynecy@mailinator.com', '+1 (959) 166-9036', 'Rachel Jennings', 'guq@mailinator.com', '+1 (113) 814-4258', '2022-09-19 12:05:15', '2022-09-20 13:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `haf_partner_informations`
--

CREATE TABLE `haf_partner_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cell_phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `employer` varchar(255) DEFAULT NULL,
  `work_phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_partner_informations`
--

INSERT INTO `haf_partner_informations` (`id`, `user_id`, `first_name`, `last_name`, `dob`, `cell_phone`, `email`, `occupation`, `employer`, `work_phone`, `created_at`, `updated_at`) VALUES
(1, 2, 'test', 'Pollard', '2000-02-27', '+1 (483) 342-8001', 'fedely@mailinator.com', 'Iure dolores vero qu', 'Sunt iure ipsum opt', '+1 (894) 739-3208', '2022-09-09 15:00:14', '2022-09-09 15:00:14'),
(3, 67, 'TaShya', 'Farmer', '1996-06-01', '+1 (579) 704-7453', 'zefexevon@mailinator.com', 'Enim omnis ad ad qui', 'Consequatur qui accu', '+1 (442) 844-8363', '2022-09-12 13:10:45', '2022-09-14 09:24:48'),
(4, 68, 'Nero', 'Summers', '1980-08-07', '+1 (593) 332-5558', 'panecy@mailinator.com', 'Sed omnis nulla iure', 'Aute et iste vitae d', '+1 (101) 304-4669', '2022-09-12 17:05:51', '2022-09-13 09:39:46'),
(5, 69, 'Aubrey', 'Mckinney', '2010-08-13', '+1 (674) 647-2528', 'zimi@mailinator.com', 'Debitis qui magni in', 'Dolor expedita debit', '+1 (181) 223-5661', '2022-09-13 11:16:50', '2022-09-13 11:16:50'),
(6, 70, 'Madesonsfrgh', 'Chaneysfrthy', '1981-10-24', '+1 (759) 239-3112yret', 'rifecexoko@mailinator.comyre', 'Et dignissimos sed ayert', 'Reprehenderit optioerty', '+1 (294) 928-1817erty', '2022-09-15 09:54:24', '2022-09-15 11:14:48'),
(7, 73, 'Rudyard', 'Harrington', '1992-03-18', '+1 (379) 965-7743', 'dinogy@mailinator.com', 'Culpa dolores quis', 'Beatae amet cupidit', '+1 (434) 456-3976', '2022-09-15 18:09:50', '2022-09-15 18:09:50'),
(8, 74, 'Allistair', 'Estes', '1990-05-13', '+1 (618) 697-6885', 'leqi@mailinator.com', 'Quia itaque nihil no', 'Voluptatibus velit', '+1 (391) 564-6219', '2022-09-16 10:45:53', '2022-09-16 10:45:53'),
(9, 79, 'Christine', 'Morse', '1994-03-03', '+1 (182) 412-8076', 'tuborusake@mailinator.com', 'Est nostrum in reru', 'Labore quod itaque v', '+1 (826) 799-5911', '2022-09-16 16:59:43', '2022-09-16 16:59:43'),
(10, 85, 'Joan', 'Hermanghgfhj', '1973-01-03', '+1 (381) 853-5911', 'mosova@mailinator.com', 'Velit iusto do a es', 'Dolores et perferend', '+1 (448) 505-55716455675', '2022-09-19 12:04:54', '2022-09-20 14:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `haf_personal_informations`
--

CREATE TABLE `haf_personal_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `anyone_residing_in_the_home` varchar(255) DEFAULT NULL,
  `criminal_background_check` varchar(255) DEFAULT NULL,
  `anyone_in_your_home_smoke` varchar(255) DEFAULT NULL,
  `high_speed_wireless_Internet` varchar(255) DEFAULT NULL,
  `WHO_approved_COVID_Vaccine` varchar(255) DEFAULT NULL,
  `family_interests` varchar(255) DEFAULT NULL,
  `breakfast_food_available_and_prepare_dinner` varchar(255) DEFAULT NULL,
  `your_daily_and_weekly_activities` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_personal_informations`
--

INSERT INTO `haf_personal_informations` (`id`, `user_id`, `anyone_residing_in_the_home`, `criminal_background_check`, `anyone_in_your_home_smoke`, `high_speed_wireless_Internet`, `WHO_approved_COVID_Vaccine`, `family_interests`, `breakfast_food_available_and_prepare_dinner`, `your_daily_and_weekly_activities`, `created_at`, `updated_at`) VALUES
(1, 2, 'yes', 'yes', 'no', 'no', 'no', 'Personal Information1', 'Personal Information2', 'Personal Information3', '2022-09-09 15:11:38', '2022-09-09 15:11:38'),
(3, 67, 'no', 'no', 'no', 'yes', 'no', 'Qui nisi ab voluptas', 'Cupiditate qui alias', 'Eos vel qui ex maxim', '2022-09-12 13:11:30', '2022-09-14 12:14:18'),
(4, 68, 'yes', 'yes', 'no', 'no', 'yes', 'Deleniti non et esse', 'Aliquip unde quasi q', 'Voluptatem magna est', '2022-09-12 17:06:36', '2022-09-13 09:45:33'),
(5, 69, 'yes', 'no', 'no', 'no', 'yes', 'Assumenda deleniti e', 'Qui velit pariatur', 'Delectus ut dolorum', '2022-09-13 11:19:11', '2022-09-13 11:19:11'),
(6, 70, 'yes', 'yes', 'yes', 'yes', 'yes', 'Voluptate adipisci t', 'Placeat incidunt e', 'Fugit esse quas ut', '2022-09-15 11:09:57', '2022-09-15 11:31:40'),
(7, 73, 'yes', 'yes', 'yes', 'no', 'yes', 'Minim nulla enim asp', 'Aliquip voluptatem', 'Neque doloremque err', '2022-09-15 18:10:09', '2022-09-15 18:10:09'),
(8, 74, 'yes', 'yes', 'yes', 'yes', 'yes', 'xyz', 'xyz', 'xyz', '2022-09-16 11:06:44', '2022-09-16 11:06:44'),
(9, 79, 'no', 'no', 'no', 'no', 'no', 'Minim nulla enim asp', 'Aliquip voluptatem', 'Neque doloremque err', '2022-09-16 17:01:11', '2022-09-16 17:01:11'),
(10, 85, 'no', 'yes', 'yes', 'yes', 'no', 'Id occaecat proident', 'Ipsum sed et ex omn', 'Est ad in aliquid pa', '2022-09-19 12:05:11', '2022-09-20 13:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `haf_pet_informations`
--

CREATE TABLE `haf_pet_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pets_info` varchar(255) DEFAULT NULL,
  `pets_info_detail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_pet_informations`
--

INSERT INTO `haf_pet_informations` (`id`, `user_id`, `pets_info`, `pets_info_detail`, `created_at`, `updated_at`) VALUES
(1, 2, 'yes', 'Inside', '2022-09-09 15:05:45', '2022-09-09 15:05:45'),
(5, 67, 'yes', 'Both', '2022-09-12 13:11:18', '2022-09-14 11:42:59'),
(6, 68, 'yes', 'Outside', '2022-09-12 17:06:22', '2022-09-13 09:44:29'),
(7, 69, 'yes', 'Inside', '2022-09-13 11:18:40', '2022-09-13 11:18:40'),
(8, 70, 'yes', 'Inside', '2022-09-15 11:09:01', '2022-09-15 11:32:54'),
(9, 73, 'yes', 'Inside', '2022-09-15 18:10:04', '2022-09-15 18:10:04'),
(10, 74, 'no', NULL, '2022-09-16 11:03:19', '2022-09-16 11:03:19'),
(11, 79, 'yes', 'Inside', '2022-09-16 17:00:56', '2022-09-16 17:00:56'),
(12, 85, 'no', 'Both', '2022-09-19 12:05:07', '2022-09-19 12:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `haf_school_informations`
--

CREATE TABLE `haf_school_informations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `home_type` varchar(255) DEFAULT NULL,
  `home_bedrooms_detail` varchar(255) DEFAULT NULL,
  `student_gender` varchar(255) DEFAULT NULL,
  `student_meal` varchar(255) DEFAULT NULL,
  `first_school_detail` varchar(255) DEFAULT NULL,
  `second_school_detail` varchar(255) DEFAULT NULL,
  `third_school_detail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haf_school_informations`
--

INSERT INTO `haf_school_informations` (`id`, `user_id`, `home_type`, `home_bedrooms_detail`, `student_gender`, `student_meal`, `first_school_detail`, `second_school_detail`, `third_school_detail`, `created_at`, `updated_at`) VALUES
(1, 2, 'House', '1', 'male_student', 'meals_student', 'test school1', 'test school2', 'test school3', '2022-09-09 15:05:45', '2022-09-09 15:05:45'),
(2, 1, 'Apartment/Townhome/Condominium', '3', 'male_student', 'no_preference', 'Assumenda nisi et re', 'Ipsa voluptates dol', 'Voluptatem voluptat', '2022-09-12 11:29:53', '2022-09-12 11:29:53'),
(7, 67, 'House', '2', 'no preference', 'meals student', 'Omnis doloribus accu67456', 'Eum sit itaque prae6575467', 'Ratione qui duis non7456756', '2022-09-12 13:11:18', '2022-09-14 14:40:11'),
(8, 68, 'House', '1', 'male_student', 'no_preference', 'Molestiae non sed qu', 'Doloremque excepteur', 'Quo molestias accusa', '2022-09-12 17:06:22', '2022-09-12 17:06:22'),
(9, 68, 'House', '1', 'male_student', 'no_preference', 'Molestiae non sed qu', 'Doloremque excepteur', 'Quo molestias accusa', '2022-09-12 17:25:36', '2022-09-12 17:25:36'),
(10, 68, 'House', '1', 'male_student', 'no_preference', 'Molestiae non sed qu', 'Doloremque excepteur', 'Quo molestias accusa', '2022-09-13 09:44:29', '2022-09-13 09:44:29'),
(11, 69, 'Apartment/Townhome/Condominium', '2', 'no_preference', 'no_preference', 'Voluptatibus eligend', 'Cumque nesciunt in', 'Odio rerum ut aliqui', '2022-09-13 11:18:40', '2022-09-13 11:18:40'),
(12, 70, 'House', '2', 'male', 'no meals student', 'Suscipit facilis pro65456', 'Ea voluptatem tempo54645645', 'Voluptatem voluptat6456545', '2022-09-15 11:09:01', '2022-09-15 11:40:37'),
(13, 73, 'House', '2', 'male_student', 'no_meals_student', 'Amet voluptas simil', 'Aperiam error accusa', 'Minus veniam perfer', '2022-09-15 18:10:04', '2022-09-15 18:10:04'),
(14, 74, 'House', '3', 'female_student', 'no_preference', 'xyz school', NULL, NULL, '2022-09-16 11:03:19', '2022-09-16 11:51:22'),
(15, 79, 'Apartment/Townhome/Condominium', '1', 'female_student', 'no_preference', 'Amet voluptas simil', NULL, NULL, '2022-09-16 17:00:56', '2022-09-16 17:00:56'),
(16, 85, 'Apartment/Townhome/Condominium', '3', 'male_student', 'no_preference', 'Vero ea non vero rep', 'Rem sit suscipit eos', 'Dignissimos quia ips', '2022-09-19 12:05:07', '2022-09-20 13:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `images_student_application_form`
--

CREATE TABLE `images_student_application_form` (
  `id` int(11) NOT NULL,
  `std_app_form_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Active = 1,\r\nInactive = 0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images_student_application_form`
--

INSERT INTO `images_student_application_form` (`id`, `std_app_form_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '16591002299291581858.jfif', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 2, '16609144029461248274.jpg', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(3, 3, '16609370259284204521.jpg', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(4, 4, '16609415757888053696.jpg', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(5, 5, '16609972529377159681.jpg', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(6, 6, '16611805686869690210.jpg', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(7, 7, '16612534658812919942.jpg', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(8, 8, '16613585469436516824.jfif', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(9, 9, '16613646648403378465.jfif', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(10, 10, '16613655575609020586.jpg', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `section_id` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `description`, `section_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 85, 'Update host details', NULL, 1, '2022-09-20 13:12:02', '2022-09-20 13:12:02'),
(2, 85, 'Host Information form updated successfully', NULL, 1, '2022-09-20 13:14:22', '2022-09-20 13:14:22'),
(3, 85, 'Partner form updated successfully', NULL, 1, '2022-09-20 13:18:55', '2022-09-20 13:18:55'),
(4, 85, 'Adult form updated successfully', NULL, 1, '2022-09-20 13:19:25', '2022-09-20 13:19:25'),
(5, 85, 'Child form updated successfully', NULL, 1, '2022-09-20 13:19:45', '2022-09-20 13:19:45'),
(6, 85, 'Details form updated successfully', NULL, 1, '2022-09-20 13:21:01', '2022-09-20 13:21:01'),
(7, 85, 'Personal Information form updated successfully', NULL, 1, '2022-09-20 13:21:10', '2022-09-20 13:21:10'),
(8, 85, 'Emergency contact form updated successfully', NULL, 1, '2022-09-20 13:21:27', '2022-09-20 13:21:27'),
(9, 72, 'Student information application form updated successfully.', '#Form-Section2-1', 1, '2022-09-20 13:49:37', '2022-09-20 13:49:37'),
(10, 85, 'Partner form updated successfully', NULL, 1, '2022-09-20 14:08:18', '2022-09-20 14:08:18'),
(11, 85, 'Adult form updated successfully', NULL, 1, '2022-09-20 14:08:25', '2022-09-20 14:08:25'),
(14, 72, 'Basic information application form updated successfully.', '#Form-Section1', 1, '2022-09-20 15:24:30', '2022-09-20 15:24:30'),
(15, 72, 'Other information application form updated successfully.', '#Form-Section4', 1, '2022-09-20 15:25:09', '2022-09-20 15:25:09'),
(17, 72, 'Agent information application form submitted successfully.', '#Form-Section3', 1, '2022-09-20 17:24:59', '2022-09-20 17:24:59'),
(18, 72, 'Agent information application form updated successfully.', '#Form-Section3', 1, '2022-09-20 17:25:32', '2022-09-20 17:25:32'),
(19, 72, 'Agent information application form submitted successfully.', '#Form-Section3', 1, '2022-09-20 17:26:09', '2022-09-20 17:26:09'),
(20, 1, 'Basic information application form updated successfully.', '#Form-Section1', 1, '2022-09-20 17:50:22', '2022-09-20 17:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `other_details_student_application_form`
--

CREATE TABLE `other_details_student_application_form` (
  `id` int(11) NOT NULL,
  `date_that_i_need_to_move_to_my_homestay` date DEFAULT NULL,
  `what_is_your_english_level` varchar(255) DEFAULT NULL,
  `do_you_smoke` varchar(255) DEFAULT NULL,
  `meal_option` varchar(255) DEFAULT NULL,
  `food_restrictions` text DEFAULT NULL,
  `do_you_accept_children_under_8_years_in_host_home` varchar(255) DEFAULT NULL,
  `are_you_allergic_to_animals` varchar(255) DEFAULT NULL,
  `if_yes_please_indicate_animal` varchar(255) DEFAULT NULL,
  `will_you_have_a_car` varchar(255) DEFAULT NULL,
  `major_field_of_study` varchar(255) DEFAULT NULL,
  `specific_needs` text DEFAULT NULL,
  `hobbies_and_interest` text DEFAULT NULL,
  `describe_your_family` text DEFAULT NULL,
  `have_you_traveled_abroad_before` text DEFAULT NULL,
  `medical_information` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Acitve = 1,\r\nInactive = 0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_details_student_application_form`
--

INSERT INTO `other_details_student_application_form` (`id`, `date_that_i_need_to_move_to_my_homestay`, `what_is_your_english_level`, `do_you_smoke`, `meal_option`, `food_restrictions`, `do_you_accept_children_under_8_years_in_host_home`, `are_you_allergic_to_animals`, `if_yes_please_indicate_animal`, `will_you_have_a_car`, `major_field_of_study`, `specific_needs`, `hobbies_and_interest`, `describe_your_family`, `have_you_traveled_abroad_before`, `medical_information`, `status`, `created_at`, `updated_at`) VALUES
(1, '1996-01-30', 'low', 'yes', '2 meals per day', 'Quia eveniet id fug', 'no', 'no', 'Reprehenderit ad omn', 'no', 'Statistics', 'Anim sunt quos aut', 'Corporis ducimus si', 'Ut saepe fugit odio', 'Optio dignissimos i', 'Officia aliquam eum', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, '2023-01-02', 'high', 'no', '2 meals per day', 'Ginger', 'does not matter', 'yes', 'Dog', 'yes', 'Chemistry', 'Water Dispenser', 'FootBall', 'I have 5 siblings', 'Yes, I had travelled many countries', 'None', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(3, '1988-09-01', 'medium', 'yes', '2 meals per day', 'Veniam itaque offic', 'does not matter', 'yes', 'Ipsam libero in et e', 'no', 'Literature', 'Voluptatem qui sapie', 'Aut sunt consequatu', 'Excepteur enim volup', 'Mollit qui sit elige', 'Veniam voluptatem', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(4, '1999-04-30', 'high', 'no', 'No meals', 'Eius labore et digni', 'yes', 'no', 'Rerum est sed mollit', 'no', 'Geography', 'Quod perferendis mod', 'Minus eiusmod sit q', 'Dolore nulla aut vol', 'Facilis non soluta e', 'Qui deleniti et porr', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(5, '1989-10-13', 'medium', 'yes', 'No meals', 'Et ea autem aut hic', 'no', 'yes', 'At non consequatur', 'no', 'Area studies', 'Delectus sunt labo', 'Et nostrum nihil asp', 'Dolorem ut incididun', 'Culpa similique vol', 'Aliquid laboriosam', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(6, '2013-05-19', 'low', 'yes', 'No meals', 'Inventore et consequ', 'does not matter', 'yes', 'Rerum id consectetur', 'yes', 'Computer sciences', 'Dolor aut autem cons', 'Architecto sequi bla', 'Rerum adipisicing qu', 'Inventore aliquam no', 'Sit maiores dolor e', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(7, '2016-11-07', 'high', 'yes', '2 meals per day', 'Sint delectus eos l', 'no', 'no', 'Dolores porro ut odi', 'no', 'Life sciences', 'Qui aut accusantium', 'Ut et quis architect', 'Autem dolorum dolor', 'Quam suscipit nemo q', 'Duis ipsa doloremqu', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(8, '2010-12-30', 'high', 'yes', '2 meals per day', 'Et est magni rerum', 'yes', 'yes', 'Error ullam et atque', 'yes', 'Logic', 'Assumenda in sunt qu', 'Consectetur in persp', 'Totam autem officia', 'Aut quibusdam volupt', 'Minim consequatur d', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(9, '2003-10-31', 'high', 'no', '2 meals per day', 'Animi minima occaec', 'no', 'yes', 'Cupiditate qui tempo', 'no', 'Physics', 'Eum quod amet alias', 'Quo aute molestiae v', 'Consequatur esse e', 'Sequi in eos omnis', 'Atque consequat Cup', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(10, '1998-01-01', 'medium', 'yes', '2 meals per day', 'Aut reprehenderit r', 'does not matter', 'yes', 'Laudantium quo ipsu', 'no', 'Chemistry', 'Hic rerum non earum', 'Est voluptate hic ni', 'Tempora dolore neque', 'Consequatur neque qu', 'Excepteur occaecat u', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `program_student_application_form`
--

CREATE TABLE `program_student_application_form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_student_application_form`
--

INSERT INTO `program_student_application_form` (`id`, `user_id`, `program`, `created_at`, `updated_at`) VALUES
(1, 19, 'College Student', '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 31, 'College Student', '2022-08-19 07:45:27', '2022-08-19 07:45:27'),
(3, 31, 'College Student', '2022-08-19 08:06:41', '2022-08-19 08:06:41'),
(4, 19, 'College Student', '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(5, 19, 'Junior High School Student', '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(6, 33, 'Junior High School Student', '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(7, 35, 'Junior High School Student', '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(8, 36, 'Junior High School Student', '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(9, 38, 'Junior High School Student', '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(10, 39, 'Junior High School Student', '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(11, 40, 'High School Student', '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Region 1', 1, '2022-08-23 15:01:21', '2022-08-23 15:01:21'),
(4, 'region new test 1', 1, '2022-08-26 17:59:26', '2022-08-26 17:59:26'),
(5, 'adminrgeye', 1, '2022-08-30 17:12:46', '2022-08-30 17:12:46'),
(7, 'test123', 1, '2022-08-30 17:22:27', '2022-08-30 17:22:27'),
(8, 'My new region 123', 1, '2022-09-09 18:43:21', '2022-09-09 18:48:41');

-- --------------------------------------------------------

--
-- Table structure for table `requested_agency_student_application_form`
--

CREATE TABLE `requested_agency_student_application_form` (
  `id` int(11) NOT NULL,
  `agency_name` varchar(255) DEFAULT NULL,
  `agency_contact_person` varchar(255) DEFAULT NULL,
  `agency_street_address_1` varchar(255) DEFAULT NULL,
  `agency_street_address_2` varchar(255) DEFAULT NULL,
  `agency_street_address_3` varchar(255) DEFAULT NULL,
  `agency_city` varchar(255) DEFAULT NULL,
  `agency_state` varchar(255) DEFAULT NULL,
  `agency_zip_code` varchar(255) DEFAULT NULL,
  `agency_country` varchar(255) DEFAULT NULL,
  `agency_phone_number` varchar(255) DEFAULT NULL,
  `agent_email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Active = 1,\r\nInactive =0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested_agency_student_application_form`
--

INSERT INTO `requested_agency_student_application_form` (`id`, `agency_name`, `agency_contact_person`, `agency_street_address_1`, `agency_street_address_2`, `agency_street_address_3`, `agency_city`, `agency_state`, `agency_zip_code`, `agency_country`, `agency_phone_number`, `agent_email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eagan Kennedy', 'Error ea enim in ull', '47 Green Nobel Avenue', 'Vitae eiusmod quia v', 'Laboris in est aut i', 'Eum commodi odit vol', 'Texas', '94103', 'Ghana', '+1 (706) 651-5245', 'sotu@mailinator.com', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'Alma Mckinney', 'Labore quis minus do', '261 North Milton Parkway', 'Modi incidunt aliqu', 'Qui rem ex sed porro', 'Architecto voluptas', 'Missouri', '77754', 'Fiji', '+1 (259) 698-3376', 'kaqu@mailinator.com', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(3, 'Shannon Patton', 'Sed voluptate deleni', '847 White Milton Freeway', 'Do optio dolor quod', 'Fugiat autem volupta', 'Occaecat voluptatem', 'New Hampshire', '47706', 'Yemen', '+1 (589) 889-3484', 'biwynob@mailinator.com', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(4, 'Zane Woods', 'Quia aut exercitatio', '28 Old Avenue', 'Labore vel dicta ips', 'Sint rerum quia sed', 'Perferendis fuga Un', 'Oregon', '67525', 'Guyana', '+1 (125) 851-6766', 'lywygif@mailinator.com', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `saf_agent_information`
--

CREATE TABLE `saf_agent_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `agency_name` varchar(255) DEFAULT NULL,
  `agency_contact_person` varchar(255) DEFAULT NULL,
  `agent_phone_number` varchar(255) DEFAULT NULL,
  `agent_email` varchar(255) DEFAULT NULL,
  `agent_wechat_number` varchar(255) DEFAULT NULL,
  `agent_line_number` varchar(255) DEFAULT NULL,
  `agent_whatsapp_number` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_agent_information`
--

INSERT INTO `saf_agent_information` (`id`, `user_id`, `agency_name`, `agency_contact_person`, `agent_phone_number`, `agent_email`, `agent_wechat_number`, `agent_line_number`, `agent_whatsapp_number`, `status`, `created_at`, `updated_at`) VALUES
(9, 40, 'Silas Bass', 'Rerum autem sunt qui', '+1 (734) 847-5298', 'xedu@mailinator.com', '369', '876', '929', 1, '2022-09-13 14:38:50', '2022-09-13 14:38:50'),
(10, 1, 'Kieran Anthony', 'Cumque et tenetur qu', '+1 (596) 809-8382', 'bekibofan@mailinator.com', '320', '800', '403', 1, '2022-09-14 09:09:34', '2022-09-14 09:09:34'),
(11, 71, 'Farrah Simmons', 'Non rerum optio opt', '+1 (116) 323-8398', 'hyku@mailinator.com', '204', '983', '702', 1, '2022-09-16 12:29:19', '2022-09-16 12:29:19'),
(13, 82, 'Wyatt Cooke', 'Repellendus Officii', '+1 (671) 454-4281', 'tesunaly@mailinator.com', '154', '43', '778', 1, '2022-09-16 17:44:51', '2022-09-16 17:44:51'),
(14, 83, 'Reese Barrera', 'In magnam labore fac', '+1 (251) 105-9217', 'sijewaqu@mailinator.com', '421', '21', '90', 1, '2022-09-16 18:06:31', '2022-09-16 18:06:31'),
(15, 1, 'dsda232323', '323213', '23234234', '3242343243`', '432423', 're3424', '4324', 1, '2022-09-20 17:18:15', '2022-09-20 17:18:15'),
(16, 1, 'ageny name', 'contact person', '23234234', 'agents@gmail.com', '123', '123', '123', 1, '2022-09-20 17:22:40', '2022-09-20 17:22:40'),
(18, 72, 'ageny name', 'Smith Roof', '444444444444', 'smith@gmail.com', '626', '951', '773', 1, '2022-09-20 17:26:09', '2022-09-20 17:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `saf_agreement_information`
--

CREATE TABLE `saf_agreement_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fees_agreement` varchar(255) DEFAULT NULL,
  `contract_period_agreement` varchar(255) DEFAULT NULL,
  `payments_agreement` varchar(255) DEFAULT NULL,
  `deposit_agreement` varchar(255) DEFAULT NULL,
  `meal_plans_agreement` varchar(255) DEFAULT NULL,
  `student_faq_sheet_agreement` varchar(255) DEFAULT NULL,
  `airport_pickup_agreement` varchar(255) DEFAULT NULL,
  `transportation_agreement` varchar(255) DEFAULT NULL,
  `host_possessions_agreement` varchar(255) DEFAULT NULL,
  `prohibited_activities_agreement` varchar(255) DEFAULT NULL,
  `medical_agreement` varchar(255) DEFAULT NULL,
  `request_for_host_change_agreement` varchar(255) DEFAULT NULL,
  `media_photo_release_agreement` varchar(255) DEFAULT NULL,
  `covid_19_protocol_for_students_agreement` varchar(255) DEFAULT NULL,
  `program_termination_agreement` varchar(255) DEFAULT NULL,
  `warranties_consent_agreement` varchar(255) DEFAULT NULL,
  `limitation_of_liability_agreement` varchar(255) DEFAULT NULL,
  `indemnification_agreement` varchar(255) DEFAULT NULL,
  `governing_law_agreement` varchar(255) DEFAULT NULL,
  `force_majeure_agreement` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_agreement_information`
--

INSERT INTO `saf_agreement_information` (`id`, `user_id`, `fees_agreement`, `contract_period_agreement`, `payments_agreement`, `deposit_agreement`, `meal_plans_agreement`, `student_faq_sheet_agreement`, `airport_pickup_agreement`, `transportation_agreement`, `host_possessions_agreement`, `prohibited_activities_agreement`, `medical_agreement`, `request_for_host_change_agreement`, `media_photo_release_agreement`, `covid_19_protocol_for_students_agreement`, `program_termination_agreement`, `warranties_consent_agreement`, `limitation_of_liability_agreement`, `indemnification_agreement`, `governing_law_agreement`, `force_majeure_agreement`, `status`, `created_at`, `updated_at`) VALUES
(4, 41, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-13 12:23:32', '2022-09-13 12:23:40'),
(5, 1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-14 09:10:08', '2022-09-14 09:10:14'),
(6, 72, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-15 15:48:35', '2022-09-15 15:48:43'),
(7, 71, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-16 14:32:45', '2022-09-16 14:56:42'),
(8, 77, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-16 16:37:11', '2022-09-16 16:37:23'),
(9, 78, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-16 16:52:26', '2022-09-16 16:52:43'),
(10, 82, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-16 17:46:57', '2022-09-16 17:47:09'),
(11, 83, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-16 18:07:51', '2022-09-16 18:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `saf_airport_information`
--

CREATE TABLE `saf_airport_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `request_for_airport_pickup_driver` varchar(255) DEFAULT NULL,
  `number_of_people_needing_driver` int(11) DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `airport_arrival_time` time DEFAULT NULL,
  `flight_type` varchar(255) DEFAULT NULL,
  `arrival_airport` varchar(255) DEFAULT NULL,
  `arrival_airline` varchar(255) DEFAULT NULL,
  `arrival_flight_number` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_airport_information`
--

INSERT INTO `saf_airport_information` (`id`, `user_id`, `request_for_airport_pickup_driver`, `number_of_people_needing_driver`, `arrival_date`, `airport_arrival_time`, `flight_type`, `arrival_airport`, `arrival_airline`, `arrival_flight_number`, `status`, `created_at`, `updated_at`) VALUES
(4, 41, 'yes', 82, '1986-03-14', '06:16:00', 'domestic', 'RNO', 'Asiana Airlines', '310', 1, '2022-09-13 12:23:13', '2022-09-13 12:23:13'),
(6, 1, 'no', 650, '1971-08-18', '14:14:00', 'international', 'LAX', 'Asiana Airlines', '231', 1, '2022-09-14 09:10:31', '2022-09-14 09:10:31'),
(7, 72, 'no', 367, '2007-11-03', '09:18:00', 'international', 'RNO', 'United Airlines-Int’l', '21', 1, '2022-09-15 15:48:23', '2022-09-15 15:48:23'),
(8, 71, 'yes', 2, '2022-09-24', '07:37:00', 'international', 'PSP', 'American Airlines-Int’l', 'as1234', 1, '2022-09-16 13:33:48', '2022-09-16 13:33:48'),
(9, 77, 'no', 891, '2023-06-06', '12:10:00', 'international', 'RNO', 'American Airlines-Int’l', '150', 1, '2022-09-16 16:35:19', '2022-09-16 16:35:19'),
(10, 78, 'yes', 862, '2023-06-07', '22:50:00', 'international', 'BUR', 'Singapore Airlines', '641', 1, '2022-09-16 16:51:46', '2022-09-16 16:51:46'),
(11, 82, 'yes', 5, '2022-10-11', '00:00:00', 'international', 'SFO', 'American Airlines-Domestic', 'FLK-1234', 1, '2022-09-16 17:46:28', '2022-09-16 17:46:28'),
(12, 83, 'yes', 6, '2022-12-22', '12:17:00', 'domestic', 'SJC', 'Singapore Airlines', '170', 1, '2022-09-16 18:07:25', '2022-09-16 18:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `saf_fees`
--

CREATE TABLE `saf_fees` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `is_paid` int(11) NOT NULL DEFAULT 0 COMMENT 'unpaid = 0,\r\npaid = 1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saf_fees`
--

INSERT INTO `saf_fees` (`id`, `user_id`, `fees`, `is_paid`, `created_at`, `updated_at`) VALUES
(48, 41, '5050', 0, '2022-09-15 15:35:34', '2022-09-15 15:35:34'),
(49, 72, '4512', 1, '2022-09-15 15:50:02', '2022-09-15 15:54:12'),
(50, 71, '123', 0, '2022-09-16 16:53:41', '2022-09-16 16:53:41'),
(51, 78, '123', 1, '2022-09-16 16:55:01', '2022-09-16 17:14:09'),
(52, 82, '10000', 1, '2022-09-16 17:51:55', '2022-09-16 17:54:15'),
(53, 83, '10000', 1, '2022-09-16 18:10:55', '2022-09-16 18:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `saf_fee_payment`
--

CREATE TABLE `saf_fee_payment` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(255) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `std_app_fee_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_url` varchar(255) DEFAULT NULL,
  `price` decimal(14,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saf_fee_payment`
--

INSERT INTO `saf_fee_payment` (`id`, `invoice_number`, `student_id`, `std_app_fee_id`, `payment_id`, `payment_url`, `price`, `status`, `created_at`, `updated_at`) VALUES
(15, '1663257252401664413', 72, 49, 'ch_3LiKOFFo3JNYSfwX0rvnYsv5', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKKOVjZkGMgak1yykxrA6LBYaEjfGXkcp08EmgzWeKpRjS2t36vMK_CzUtDS1tvMy3QU69VOkhMXXGtps', '4512.00', 1, '2022-09-15 15:54:12', '2022-09-15 15:54:12'),
(16, '1663348449596696202', 78, 51, 'ch_3Lii7AFo3JNYSfwX19q7Qcl1', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKOHdkpkGMgbAo6Vmtqc6LBbAxFRyL1EWuVKGTFhfr-_eEud6BjOK7Gwz-aMpXt98sTJD6BK1HJBZI5Sy', '123.00', 1, '2022-09-16 17:14:09', '2022-09-16 17:14:09'),
(17, '1663350855288732271', 82, 52, 'ch_3LiijyFo3JNYSfwX11EOgBrm', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKMfwkpkGMgbF2l7ZClQ6LBb89pUAe_yDh_hs02i4Qn48CakNdqlFfw3o6MT1F_yjbx3qTI_bv0k6p3qL', '10000.00', 1, '2022-09-16 17:54:15', '2022-09-16 17:54:15'),
(18, '1663351976673797415', 83, 53, 'ch_3Lij23Fo3JNYSfwX00OyOe0v', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKKj5kpkGMgb5KEoZ7wM6LBb-zwb2D_nWJq1HbunJhaXZY_jkcuj6APxryL4ynLX-CYnK7SXR4z2MegkI', '10000.00', 1, '2022-09-16 18:12:56', '2022-09-16 18:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `saf_medical_information`
--

CREATE TABLE `saf_medical_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `are_you_in_good_health` varchar(255) DEFAULT NULL,
  `if_no_please_explain_health` varchar(255) DEFAULT NULL,
  `do_you_have_medical_allergies` varchar(255) DEFAULT NULL,
  `if_yes_please_explain_medical_allergies` varchar(255) DEFAULT NULL,
  `do_you_take_medication` varchar(255) DEFAULT NULL,
  `if_yes_please_explain_medication` varchar(255) DEFAULT NULL,
  `under_care_of_psychiatrist_past_five_year` varchar(255) DEFAULT NULL,
  `if_yes_please_explain_reason_of_psychiatrist` varchar(255) DEFAULT NULL,
  `have_who_approved_vaccination` varchar(255) DEFAULT NULL,
  `vaccine_name` varchar(255) DEFAULT NULL,
  `dates_administered` date DEFAULT NULL,
  `vaccine_card_photograph` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_medical_information`
--

INSERT INTO `saf_medical_information` (`id`, `user_id`, `are_you_in_good_health`, `if_no_please_explain_health`, `do_you_have_medical_allergies`, `if_yes_please_explain_medical_allergies`, `do_you_take_medication`, `if_yes_please_explain_medication`, `under_care_of_psychiatrist_past_five_year`, `if_yes_please_explain_reason_of_psychiatrist`, `have_who_approved_vaccination`, `vaccine_name`, `dates_administered`, `vaccine_card_photograph`, `status`, `created_at`, `updated_at`) VALUES
(4, 41, 'yes', 'Aut nulla facere ita', 'yes', 'Dignissimos illo aut', 'yes', 'Est proident aut u', 'no', 'Quam illo proident', 'no', 'Samson Duran', '1991-02-09', '16631777799999.jpg', 1, '2022-09-13 12:23:05', '2022-09-14 17:49:39'),
(5, 1, 'no', 'Eum ducimus similiq', 'no', 'Culpa dolores aute', 'yes', 'Nobis quidem dolore', 'yes', 'Omnis delectus aute', 'no', 'George Acosta', '1970-05-04', NULL, 1, '2022-09-14 09:09:52', '2022-09-14 09:09:52'),
(6, 72, 'no', 'Veniam dolorum quis', 'no', 'Tempore eum debitis', 'no', 'Vel velit ducimus o', 'no', 'Minus aliquid offici', 'no', 'Eaton Stein', '2010-04-14', '16632568959999.jpg', 1, '2022-09-15 15:48:15', '2022-09-15 15:48:15'),
(7, 71, 'yes', 'hkgk', 'yes', 'ghjkghjk', 'yes', 'ghjkghkgjh', 'yes', 'kghjkghjk', 'yes', 'ghjkghjkghjkgh', '2022-09-24', '16633355649999.jpg', 1, '2022-09-16 13:39:24', '2022-09-16 13:39:24'),
(8, 77, 'yes', 'Totam itaque dolore', 'yes', 'Fugit numquam sed e', 'yes', 'Ut ut commodi quod q', 'no', 'Porro asperiores dol', 'no', 'Nyssa Knox', '1970-02-20', '16633458539999.jpg', 1, '2022-09-16 16:30:53', '2022-09-16 16:30:53'),
(9, 78, 'yes', 'Autem dolorem do dol', 'yes', 'Proident vel amet', 'yes', 'In assumenda recusan', 'no', 'Enim aute iusto inci', 'no', 'Francis Dalton', '1976-01-28', '16633470779999.jfif', 1, '2022-09-16 16:51:17', '2022-09-16 16:51:17'),
(10, 82, 'no', 'Laboriosam consequa', 'no', 'Sed ratione autem es', 'no', 'Omnis vel Nam illum', 'no', 'Qui proident at ess', 'yes', 'Yasir Ryan', '2003-08-31', '16633503189999.jpg', 1, '2022-09-16 17:45:18', '2022-09-16 17:45:18'),
(11, 83, 'yes', 'Est non unde maxime', 'yes', 'Cupiditate aut dolor', 'no', 'Sint voluptatem Ani', 'no', 'Rerum et consequatur', 'no', 'Kuame Cervantes', '1985-12-19', '16633516199999.jpg', 1, '2022-09-16 18:06:59', '2022-09-16 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `saf_other_information`
--

CREATE TABLE `saf_other_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `specific_needs` varchar(255) DEFAULT NULL,
  `hobbies_and_interest` varchar(255) DEFAULT NULL,
  `describe_your_personality` varchar(255) DEFAULT NULL,
  `describe_your_family` varchar(255) DEFAULT NULL,
  `describe_your_travel_experience` varchar(255) DEFAULT NULL,
  `write_greeting_to_host` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_other_information`
--

INSERT INTO `saf_other_information` (`id`, `user_id`, `specific_needs`, `hobbies_and_interest`, `describe_your_personality`, `describe_your_family`, `describe_your_travel_experience`, `write_greeting_to_host`, `status`, `created_at`, `updated_at`) VALUES
(5, 41, 'Dignissimos magna om', 'Dolor anim quis mole', 'Corrupti voluptate', 'Rerum eaque nihil el', 'Velit reprehenderit', 'Veniam consequatur', 1, '2022-09-13 12:22:52', '2022-09-13 12:22:52'),
(7, 1, 'Voluptatibus vel vel', 'Aute elit dolorem r', 'Do architecto quia a', 'Voluptas culpa dolo', 'Corporis perspiciati', 'Deserunt error volup', 1, '2022-09-14 09:09:40', '2022-09-14 09:09:40'),
(8, 72, 'Ut consequat Nihil', 'Id architecto qui m', 'Quis enim id laudant', 'Excepturi expedita d', 'Aut assumenda volupt', 'Facilis amet impedi', 1, '2022-09-15 15:48:05', '2022-09-15 15:48:05'),
(9, 71, 'Repellendus Debitis', 'Quia eius amet qui', 'Tempora officiis vel', 'Eius tempore quas e', 'Illo odio enim quos', 'Veritatis ut dolores', 1, '2022-09-16 14:55:13', '2022-09-16 14:55:13'),
(10, 77, 'Anim magna necessita', 'Id eos nulla eaque', 'Voluptatum tempore', 'Qui minus qui repreh', 'Blanditiis necessita', 'Ullam beatae maxime', 1, '2022-09-16 16:30:25', '2022-09-16 16:30:25'),
(11, 78, 'Id sunt saepe dolor', 'Voluptates qui lorem', 'Elit ullamco non an', 'Doloremque excepturi', 'Qui amet et ullamco', 'Voluptatem sint sap', 1, '2022-09-16 16:50:59', '2022-09-16 16:50:59'),
(12, 82, 'Ea veniam quasi sit dsa', 'Consectetur recusan', 'Qui ut sit et modi', 'Odit eligendi tenetu', 'Necessitatibus quia', 'Vero voluptas illum', 1, '2022-09-16 17:45:00', '2022-09-16 17:51:31'),
(13, 83, 'Est dolorum culpa vo', 'Tempor dolor necessi', 'Voluptatum sit volup', 'Non anim alias dolor', 'Libero eiusmod ex mo', 'Enim reiciendis ipsu', 1, '2022-09-16 18:06:36', '2022-09-16 18:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `saf_payment_information`
--

CREATE TABLE `saf_payment_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `cardholder_first_name` varchar(255) DEFAULT NULL,
  `cardholder_last_name` varchar(255) DEFAULT NULL,
  `cardholder_address` varchar(255) DEFAULT NULL,
  `cardholder_city` varchar(255) DEFAULT NULL,
  `cardholder_state` varchar(255) DEFAULT NULL,
  `cardholder_zipcode` varchar(255) DEFAULT NULL,
  `cardholder_country` varchar(255) DEFAULT NULL,
  `cardholder_email` varchar(255) DEFAULT NULL,
  `credit_card_type` varchar(255) DEFAULT NULL,
  `name_on_card` varchar(255) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `card_cvc` int(11) DEFAULT NULL,
  `card_exp_date` date DEFAULT NULL,
  `placement_fee` varchar(255) DEFAULT NULL,
  `late_fee` varchar(255) DEFAULT NULL,
  `deposit_fee` varchar(255) DEFAULT NULL,
  `airport_pickup_fee` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_payment_information`
--

INSERT INTO `saf_payment_information` (`id`, `user_id`, `payment_method`, `cardholder_first_name`, `cardholder_last_name`, `cardholder_address`, `cardholder_city`, `cardholder_state`, `cardholder_zipcode`, `cardholder_country`, `cardholder_email`, `credit_card_type`, `name_on_card`, `card_number`, `card_cvc`, `card_exp_date`, `placement_fee`, `late_fee`, `deposit_fee`, `airport_pickup_fee`, `status`, `created_at`, `updated_at`) VALUES
(5, 41, 'Check or Money Order', 'Branden', 'Barrera', 'Lorem vel esse nisi', 'Voluptatem Anim mag', 'Utah', '37034', 'Netherlands', 'nego@mailinator.com', 'Master Card', 'Levi Burke', '753', 74, '1976-06-02', NULL, NULL, 'yes', 'yes', 1, '2022-09-13 12:23:24', '2022-09-13 12:23:24'),
(6, 1, 'Check or Money Order', 'Price', 'Lowe', 'Et et qui minim ab m', 'Quasi reprehenderit', 'Alaska', '29507', 'Switzerland', 'parezojab@mailinator.com', 'Visa', 'Anjolie Boyle', '969', 8, '2001-11-20', 'yes', 'yes', NULL, 'yes', 1, '2022-09-14 09:10:03', '2022-09-14 09:10:03'),
(7, 72, 'Credit Card', 'Harrison', 'Floyd', 'Iusto ullam et volup', 'Ipsa molestias anim', 'Wisconsin', '15466', 'Slovakia', 'kytyfoj@mailinator.com', 'Visa', 'Lila Chen', '106', 86, '1980-10-21', 'yes', NULL, NULL, NULL, 1, '2022-09-15 15:48:31', '2022-09-15 15:48:31'),
(8, 71, 'Credit Card', 'fghrh', 'Myers', 'Adipisci autem deser', 'Velit ut cumque est', 'Utah', '72407', 'Congo', 'gyba@mailinator.com', 'Visa', 'fghrh', '4242424242424242', 50, '2024-07-10', NULL, NULL, 'yes', 'yes', 1, '2022-09-16 14:31:49', '2022-09-16 14:31:49'),
(9, 77, 'Credit Card', 'Adrienne', 'Tanner', 'Excepteur velit nihi', 'Ipsum possimus sin', 'Washington', '59173', 'Israel', 'qifur@mailinator.com', 'Visa', 'Shelley Bentley', '331', 37, '2025-11-12', 'yes', 'yes', NULL, NULL, 1, '2022-09-16 16:36:30', '2022-09-16 16:36:30'),
(10, 78, 'Credit Card', 'Chaney', 'Frost', 'Voluptatem temporibu', 'Saepe optio libero', 'New York', '64789', 'Puerto Rico', 'makoce@mailinator.com', 'Visa', 'Yoko Dalton', '147', 9, '2023-06-15', NULL, NULL, 'yes', NULL, 1, '2022-09-16 16:52:15', '2022-09-16 16:52:15'),
(11, 82, 'Check or Money Order', 'Eve', 'Keith', 'Quaerat voluptatem', 'Quod ut aut sunt en', 'Maine', '18851', 'Indonesia', 'sifufojodu@mailinator.com', 'Master Card', 'Travis Larsen', '301', 88, '2023-07-05', NULL, 'yes', NULL, NULL, 1, '2022-09-16 17:46:51', '2022-09-16 17:46:51'),
(12, 83, 'Check or Money Order', 'Nasim', 'Compton', 'Est pariatur Id ip', 'Velit voluptatibus d', 'Ohio', '11316', 'Canada', 'hylo@mailinator.com', 'Visa', 'Miranda Houston', '905', 78, '2024-11-13', 'yes', 'yes', 'yes', 'yes', 1, '2022-09-16 18:07:41', '2022-09-16 18:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `saf_status`
--

CREATE TABLE `saf_status` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `form_section1` int(11) DEFAULT 0,
  `form_section2_1` int(11) DEFAULT 0,
  `form_section2_2` int(11) DEFAULT 0,
  `form_section3` int(11) DEFAULT 0,
  `form_section4` int(11) DEFAULT 0,
  `form_section5` int(11) DEFAULT 0,
  `form_section6` int(11) DEFAULT 0,
  `form_section7` int(11) DEFAULT 0,
  `form_section8_1_1` int(11) DEFAULT 0,
  `form_section8_1_2` int(11) DEFAULT 0,
  `form_section8_2` int(11) DEFAULT 0,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_status`
--

INSERT INTO `saf_status` (`id`, `user_id`, `form_section1`, `form_section2_1`, `form_section2_2`, `form_section3`, `form_section4`, `form_section5`, `form_section6`, `form_section7`, `form_section8_1_1`, `form_section8_1_2`, `form_section8_2`, `status`, `created_at`, `updated_at`) VALUES
(8, 41, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-13 12:21:56', '2022-09-13 12:23:46'),
(10, 40, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, NULL, '2022-09-13 12:48:58', '2022-09-13 14:38:50'),
(11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-14 09:09:01', '2022-09-14 09:10:31'),
(12, 71, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-15 13:12:14', '2022-09-16 14:56:42'),
(13, 72, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-15 15:47:21', '2022-09-15 15:48:48'),
(14, 77, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-16 16:24:45', '2022-09-16 16:37:28'),
(15, 78, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-16 16:40:37', '2022-09-16 16:52:49'),
(16, 82, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-16 17:43:51', '2022-09-16 17:47:17'),
(17, 83, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2022-09-16 18:05:13', '2022-09-16 18:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `saf_student_basic_information`
--

CREATE TABLE `saf_student_basic_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `program` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country_of_permanent_residence` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `passport_exp` date DEFAULT NULL,
  `student_profile_photo` varchar(255) DEFAULT NULL,
  `agree` varchar(255) DEFAULT NULL,
  `using_agent` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `application_status` int(11) DEFAULT 0 COMMENT '1 = Approved , 2 = Rejected',
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_student_basic_information`
--

INSERT INTO `saf_student_basic_information` (`id`, `user_id`, `program`, `first_name`, `last_name`, `dob`, `age`, `gender`, `country_of_permanent_residence`, `passport_number`, `passport_exp`, `student_profile_photo`, `agree`, `using_agent`, `notes`, `application_status`, `status`, `created_at`, `updated_at`) VALUES
(7, 41, 'College Student', 'Martina', 'Calderon', '2005-08-09', 93, 'Other', 'Latvia', '475', '2023-07-12', '16630717533250924945.png', 'yes', 'yes', 'Student Application Notes\r\ntest', 1, 1, '2022-09-13 12:22:33', '2022-09-20 17:22:40'),
(9, 40, 'Junior High School Student', 'Howard', 'Benton', '2021-05-26', 42, 'Other', 'Jordan', '361', '1992-10-23', '16630799045365248368.png', 'yes', 'yes', NULL, 0, 1, '2022-09-13 14:38:24', '2022-09-13 14:38:50'),
(10, 1, 'High School Student', 'Cameron', 'Dickerson', '2022-07-04', 61, 'Female', 'Papua New Guinea', '630', '1987-05-02', '16631465419355385609.png', 'yes', 'yes', NULL, 0, 1, '2022-09-14 09:09:01', '2022-09-14 09:10:21'),
(11, 71, 'High School Student', 'gfdh', 'gfd', '2022-09-15', 1, 'Male', 'Afghanistan', '45345', '2022-09-24', '16632475349234053025.jpg', 'yes', 'yes', NULL, 1, 1, '2022-09-15 13:12:14', '2022-09-16 16:53:41'),
(12, 72, 'High School Student', 'Wade', 'Duncan', '2012-05-21', 46, 'Male', 'Montserrat', '248', '2023-07-26', '16632568416109266730.jfif', 'yes', 'yes', NULL, 1, 1, '2022-09-15 15:47:21', '2022-09-20 17:26:09'),
(13, 77, 'College Student', 'Elizabeth', 'Wilcox', '1996-05-05', 87, 'Female', 'CÔte D\'ivoire', '71546565', '2025-11-19', '16633454852237025477.jpg', 'yes', 'yes', NULL, 0, 1, '2022-09-16 16:24:45', '2022-09-20 17:16:11'),
(14, 78, 'College Student', 'Kelly', 'Holden', '1999-05-16', 84, 'Male', 'Tonga', '641', '2023-03-01', '16633464373697008824.jfif', 'yes', 'no', NULL, 1, 1, '2022-09-16 16:40:37', '2022-09-16 16:55:01'),
(15, 82, 'Junior High School Student', 'Uptone', 'Huff', '2001-01-01', 22, 'Male', 'Lesotho', '96312345645', '2023-10-17', '16633502316787946260.jfif', 'yes', 'yes', NULL, 1, 1, '2022-09-16 17:43:51', '2022-09-16 17:51:55'),
(16, 83, 'High School Student', 'mack', 'mack', '1998-04-01', 45, 'Male', 'Iceland', '577', '2023-07-05', '16633515136776887698.jfif', 'yes', 'yes', NULL, 1, 1, '2022-09-16 18:05:13', '2022-09-16 18:10:55');

-- --------------------------------------------------------

--
-- Table structure for table `saf_student_information`
--

CREATE TABLE `saf_student_information` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `student_address` text DEFAULT NULL,
  `student_country` varchar(255) DEFAULT NULL,
  `student_address_zip_code` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_phone` varchar(255) DEFAULT NULL,
  `father_email` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_phone` varchar(255) DEFAULT NULL,
  `mother_email` varchar(255) DEFAULT NULL,
  `student_contact_phone_number` varchar(255) DEFAULT NULL,
  `student_contact_email` varchar(255) DEFAULT NULL,
  `student_contact_wechat_number` varchar(255) DEFAULT NULL,
  `student_contact_line_number` varchar(255) DEFAULT NULL,
  `student_contact_whatsApp_number` varchar(255) DEFAULT NULL,
  `emergency_contact_name` varchar(255) DEFAULT NULL,
  `emergency_contact_relation` varchar(255) DEFAULT NULL,
  `emergency_contact_phone_number` varchar(255) DEFAULT NULL,
  `emergency_contact_email` varchar(255) DEFAULT NULL,
  `school_you_attend` varchar(255) DEFAULT NULL,
  `school_name_not_in_list` varchar(255) DEFAULT NULL,
  `school_city` varchar(255) DEFAULT NULL,
  `school_state` varchar(255) DEFAULT NULL,
  `major_field_of_study` varchar(255) DEFAULT NULL,
  `length_of_stay` varchar(255) DEFAULT NULL,
  `contract_start_date` date DEFAULT NULL,
  `contract_end_date` date DEFAULT NULL,
  `what_is_your_english_level` varchar(255) DEFAULT NULL,
  `do_you_accept_children_under_8_years_in_host_home` varchar(255) DEFAULT NULL,
  `are_you_allergic_to_animals` varchar(255) DEFAULT NULL,
  `if_yes_please_indicate_animal` varchar(255) DEFAULT NULL,
  `meal_option` varchar(255) DEFAULT NULL,
  `food_restrictions` varchar(255) DEFAULT NULL,
  `do_you_smoke` varchar(255) DEFAULT NULL,
  `will_you_have_a_car` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saf_student_information`
--

INSERT INTO `saf_student_information` (`id`, `user_id`, `student_address`, `student_country`, `student_address_zip_code`, `father_name`, `father_phone`, `father_email`, `mother_name`, `mother_phone`, `mother_email`, `student_contact_phone_number`, `student_contact_email`, `student_contact_wechat_number`, `student_contact_line_number`, `student_contact_whatsApp_number`, `emergency_contact_name`, `emergency_contact_relation`, `emergency_contact_phone_number`, `emergency_contact_email`, `school_you_attend`, `school_name_not_in_list`, `school_city`, `school_state`, `major_field_of_study`, `length_of_stay`, `contract_start_date`, `contract_end_date`, `what_is_your_english_level`, `do_you_accept_children_under_8_years_in_host_home`, `are_you_allergic_to_animals`, `if_yes_please_indicate_animal`, `meal_option`, `food_restrictions`, `do_you_smoke`, `will_you_have_a_car`, `status`, `created_at`, `updated_at`) VALUES
(9, 41, 'Neque fugit reprehe', 'India', '65335', 'Gail Carney', '+1 (306) 378-1967', 'vukon@mailinator.com', 'Lois Mays', '+1 (379) 186-7113', 'sumepazyr@mailinator.com', '+1 (127) 458-3821', 'mohyw@mailinator.com', '840', '276', '203', 'Jade Deleon', 'Qui hic fuga Velit', '+1 (342) 313-4501', 'vabacefy@mailinator.com', 'Golden West College', 'Gay Reese', 'Qui est in maxime v', 'Georgia', 'Ipsa ad ratione qui', '2 Months', '2006-01-10', '2008-12-10', 'low', 'does not matter', 'no', 'Esse nisi quia eos', 'No meals', 'Dolore quia sint do', 'yes', 'no', 1, '2022-09-13 12:21:56', '2022-09-13 12:22:01'),
(11, 40, 'Culpa aut nulla lore', 'Ghana', '74730', 'Ignatius Barry', '+1 (665) 329-9643', 'lokegik@mailinator.com', 'Rhoda Henry', '+1 (119) 826-3175', 'zovefopaf@mailinator.com', '+1 (214) 172-3874', 'kidonu@mailinator.com', '619', '246', '997', 'Daniel Brady', 'Et exercitation odit', '+1 (764) 904-6531', 'wagaquzij@mailinator.com', 'University of Hawaii, Manoa, NICE', 'Moses Burt', 'Mollitia est cumque', 'Hawaii', 'Beatae repellendus', 'Other', '1989-05-28', '2019-05-06', 'medium', 'no', 'yes', 'Quasi obcaecati labo', 'No meals', 'Quisquam laborum in', 'no', 'yes', 1, '2022-09-13 12:48:58', '2022-09-13 14:37:53'),
(12, 1, 'Ut pariatur Pariatu', 'Saint Lucia', '78386', 'Risa Ortiz', '+1 (149) 458-5426', 'zutudegyh@mailinator.com', 'Lance Cannon', '+1 (788) 405-3663', 'luqolo@mailinator.com', '+1 (426) 146-9577', 'bepicaz@mailinator.com', '430', '557', '391', 'Dara Mccray', 'Et non ipsa recusan', '+1 (238) 184-8884', 'qosymerak@mailinator.com', 'UC Berkeley', 'Nehru Holloway', 'Non autem illum rep', 'Arkansas', 'Rerum quia qui quis', '2 Months', '2000-07-07', '2009-04-15', 'high', 'yes', 'yes', 'Debitis cum suscipit', 'No meals', 'Nam suscipit volupta', 'yes', 'no', 1, '2022-09-14 09:09:09', '2022-09-14 09:09:17'),
(13, 71, 'xyz', 'Afghanistan', '12345', 'gdfh', '+12121', 'gesr@mail.com', 'gfd', '+123', 'gest@mail.com', '+12345', 'gest@mail.com', 'cfhngfdghdfgh', '+923408433535', '123', 'gf', 'gfh', '123+', 'dafsgdsfgfdsgdsfdrfssdfgdsfrggewrsedrgertredfgdfrgdsfrgesr@mail.com', 'Admissions Academy', 'hfghfgddfghfgyhyfgjgtyfujity', 'yutreyuhtryujhrt', 'Nebraska', 'rtyretyert', '2 Months', '2022-09-24', '2022-09-24', 'medium', 'no', 'yes', 'dsgfgsd', 'No meals', 'gsdergrthrtyr', 'yes', 'yes', 1, '2022-09-15 13:41:41', '2022-09-16 16:12:02'),
(14, 72, 'Et aliquid quasi cil', 'Saint Vincent And The Grenadines', '26527', 'August Gentry', '+1 (683) 468-1367', 'navuvopi@mailinator.com', 'Irene Reynolds', '+1 (461) 253-6734', 'rykelevyd@mailinator.com', '+1 (212) 221-3232', 'motusyh@mailinator.com', '674', '230', '661', 'Demetria Shelton', 'Veniam enim ex sunt', '+1 (526) 524-6642', 'bukymuco@mailinator.com', 'English Language Institute', 'Elmo Garza', 'Similique exercitati', 'Virginia', 'Ut illum veritatis', '3 Months', '2018-01-13', '1999-09-11', 'medium', 'yes', 'yes', 'Lorem optio et even', '2 meals per day', 'Facilis eum dolorum', 'no', 'yes', 1, '2022-09-15 15:47:37', '2022-09-15 15:47:49'),
(15, 77, 'Ipsa neque pariatur', 'Liberia', '43250', 'Vivien Conner', '+1 (798) 703-6483', 'mere@mailinator.com', 'Anjolie Warner', '+1 (158) 426-5108', 'gynory@mailinator.com', '+1 (863) 839-2437', 'lytafapodo@mailinator.com', '400', '432', '855', 'Colby Harding', 'Corporis voluptas ip', '+1 (853) 927-1761', 'lyzi@mailinator.com', 'Sora Language School', 'Britanni Frazier', 'Quis debitis ex veli', 'North Carolina', 'Ad dolore in omnis i', '2 Months', '2024-07-11', '2025-07-10', 'low', 'does not matter', 'no', 'Dolor id commodi cul', '2 meals per day', 'Non voluptatum amet', 'yes', 'yes', 1, '2022-09-16 16:28:06', '2022-09-16 16:29:49'),
(16, 78, 'Architecto quos moll', 'France', '61688', 'Heather Pittman', '+1 (141) 395-2725', 'zepy@mailinator.com', 'Gannon Cooke', '+1 (856) 178-9849', 'paxukosy@mailinator.com', '+1 (418) 968-6572', 'tamesuv@mailinator.com', '154', '447', '821', 'Joan Flores', 'Mollit sapiente nihi', '+1 (386) 369-5377', 'kacax@mailinator.com', 'University of Hawaii at Manoa', 'Kai Lopez', 'Magnam amet quas in', 'Connecticut', 'Fuga Nihil fuga Mo', '2 Months', '2024-01-08', '2025-06-25', 'high', 'does not matter', 'no', 'Quia sint eiusmod re', '2 meals per day', 'Optio voluptates ac', 'no', 'yes', 1, '2022-09-16 16:40:45', '2022-09-16 16:50:43'),
(17, 82, 'Quaerat qui velit p', 'Kiribati', '62296', 'Mallory Huber', '+1 (527) 976-6378', 'wipuhufaci@mailinator.com', 'Arthur Carpenter', '+1 (867) 306-6562', 'pifozoco@mailinator.com', '+1 (318) 472-6035', 'sufa@mailinator.com', '480', '997', '340', 'Maia Foreman', 'Elit unde ut quis r', '+1 (429) 302-9663', 'sypem@mailinator.com', 'Art Center College of Design', 'Seth Rivers', 'Fuga Qui commodi et', 'Georgia', 'Eos quo consequat A', '2 Months', '2022-12-31', '2023-06-21', 'low', 'yes', 'yes', 'Blanditiis explicabo', '2 meals per day', 'Sint tenetur tempora', 'no', 'no', 1, '2022-09-16 17:44:01', '2022-09-16 17:44:42'),
(18, 83, 'Ad ipsum quidem cons', 'Martinique', '64183', 'Tatum Scott', '+1 (386) 289-5437', 'hadypuky@mailinator.com', 'Camilla Newton', '+1 (909) 947-8235', 'vihuj@mailinator.com', '+1 (747) 925-9852', 'tujusiqity@mailinator.com', '800', '623', '694', 'Maryam Noble', 'Ducimus qui tenetur', '+1 (592) 146-2013', 'jalu@mailinator.com', 'Woodside International HS', 'Jamal Stark', 'Ab earum corrupti i', 'South Dakota', 'Delectus consequatu', 'Other', '2022-12-31', '2023-12-31', 'low', 'yes', 'yes', 'Incididunt nostrud d', '2 meals per day', 'Eligendi eius sit a', 'yes', 'yes', 1, '2022-09-16 18:05:22', '2022-09-16 18:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `region_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'school', 1, 1, '2022-08-23 13:54:05', '2022-08-30 17:04:16'),
(5, 'School 3', 1, 1, '2022-08-23 14:50:40', '2022-08-23 14:50:51'),
(11, 'test test', 4, 1, '2022-08-26 18:11:36', '2022-08-26 18:11:48'),
(12, 'Cynthia Villarreal', 4, 1, '2022-08-30 15:25:28', '2022-08-30 15:25:28'),
(13, 'Lyle Hoover', 4, 1, '2022-08-30 15:25:54', '2022-08-30 15:25:54'),
(16, 'admin', 4, 1, '2022-08-30 15:28:39', '2022-08-30 15:28:39'),
(17, 'George', 4, 1, '2022-08-30 15:29:23', '2022-08-30 15:29:23'),
(19, 'admin', 4, 1, '2022-08-30 15:29:35', '2022-08-30 15:29:35'),
(20, 'admin', 4, 1, '2022-08-30 15:29:43', '2022-08-30 15:29:43'),
(21, 'test', 4, 1, '2022-08-30 15:29:49', '2022-08-30 15:29:49'),
(22, 'admin', 4, 1, '2022-08-30 15:30:14', '2022-08-30 15:30:14'),
(25, 'School Name', 1, 1, '2022-09-02 18:39:05', '2022-09-02 18:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `school_details_student_application_form`
--

CREATE TABLE `school_details_student_application_form` (
  `id` int(11) NOT NULL,
  `school_you_attend` varchar(255) DEFAULT NULL,
  `school_name_not_in_list` varchar(255) DEFAULT NULL,
  `school_city` varchar(255) DEFAULT NULL,
  `school_state` varchar(255) DEFAULT NULL,
  `length_of_stay` varchar(255) DEFAULT NULL COMMENT '2 months = 2,\r\n3 months = 3',
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_details_student_application_form`
--

INSERT INTO `school_details_student_application_form` (`id`, `school_you_attend`, `school_name_not_in_list`, `school_city`, `school_state`, `length_of_stay`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apple Computers', 'Kaye Kirkland', 'Minima aperiam et co', 'American Samoa', '3 Months', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'Glendale College', NULL, 'Hollywood', 'California', '3 Months', 1, '2022-08-19 07:45:27', '2022-08-19 07:45:27'),
(3, 'Glendale College', NULL, 'Hollywood', 'California', '3 Months', 1, '2022-08-19 08:06:42', '2022-08-19 08:06:42'),
(4, 'Eagle Fustar', 'Paloma Freeman', 'Est ratione earum iu', 'Nebraska', '3 Months', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(5, 'Futton - SAC', 'Freya Wilder', 'Non ratione ea lorem', 'New Jersey', '2 Months', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(6, 'Tourist-SF', 'Ava Velazquez', 'Anim aut non cillum', 'Florida', '3 Months', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(7, 'Santiago High School', 'Beau Frank', 'Possimus facilis el', 'Utah', '2 Months', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(8, 'Transworld Schools', 'Xyla Pennington', 'Voluptatem Fugiat d', 'Ohio', '3 Months', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(9, 'Truckee Meadows Community College', 'Liberty Holland', 'Iusto quia earum des', 'Guam', '3 Months', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(10, 'AF International', 'Dawn Blair', 'Ut deserunt pariatur', 'North Carolina', '2 Months', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(11, 'Holy Family High School', 'Willa Macias', 'Reiciendis similique', 'South Dakota', '3 Months', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `student_application_form`
--

CREATE TABLE `student_application_form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `program_id` int(16) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `student_form_details_id` int(11) DEFAULT NULL,
  `using_agent` varchar(255) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `requested_agency_id` int(11) DEFAULT NULL,
  `emergency_details_id` int(11) DEFAULT NULL,
  `school_form_details_id` int(11) DEFAULT NULL,
  `other_details_id` int(11) DEFAULT NULL,
  `request_for_airport_pickup_driver` varchar(255) DEFAULT NULL,
  `number_of_people_needing_driver` int(11) DEFAULT NULL,
  `airport_details_id` int(11) DEFAULT NULL,
  `fee_details_id` int(11) DEFAULT NULL,
  `student_name_1` varchar(255) DEFAULT NULL,
  `cardholder_details_id` int(11) DEFAULT NULL,
  `creditcard_details_id` int(11) DEFAULT NULL,
  `electronic_form_id` int(11) DEFAULT NULL,
  `student_name_3` varchar(255) DEFAULT NULL,
  `student_email_2` varchar(255) DEFAULT NULL,
  `agree` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'Rejected = 2,\r\nApprove= 1,\r\nPending = 0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_application_form`
--

INSERT INTO `student_application_form` (`id`, `user_id`, `program_id`, `payment_method`, `student_form_details_id`, `using_agent`, `agency_id`, `requested_agency_id`, `emergency_details_id`, `school_form_details_id`, `other_details_id`, `request_for_airport_pickup_driver`, `number_of_people_needing_driver`, `airport_details_id`, `fee_details_id`, `student_name_1`, `cardholder_details_id`, `creditcard_details_id`, `electronic_form_id`, `student_name_3`, `student_email_2`, `agree`, `status`, `created_at`, `updated_at`) VALUES
(1, 19, 1, '-', 1, 'yes', NULL, 1, 1, 1, 1, 'no', NULL, 1, 1, 'Gavin Chen', 1, 1, 1, 'Hilda Mills', 'pydi@mailinator.com', 'yes', 1, '2022-07-29 08:10:29', '2022-08-20 15:10:46'),
(2, 31, 3, '-', 3, 'no', NULL, NULL, 3, 3, 2, 'yes', 2, 3, 2, 'wirar', 3, 2, 2, 'wirar smith', 'wirar53049@zfobo.com', 'yes', 1, '2022-08-19 08:06:42', '2022-08-23 12:09:12'),
(3, 19, 4, '-', 4, 'no', NULL, NULL, 4, 4, 3, 'no', NULL, 4, 3, 'Drew Small', 4, 3, 3, 'Tana Massey', 'dewivodiz@mailinator.com', 'yes', 1, '2022-08-19 19:23:45', '2022-08-23 18:47:15'),
(4, 19, 5, '-', 5, 'no', NULL, NULL, 5, 5, 4, 'yes', 5, 5, 4, 'Arsenio Gardner', 5, 4, 4, 'Morgan Bell', 'vipypa@mailinator.com', 'yes', 0, '2022-08-19 20:39:35', '2022-08-20 14:13:30'),
(5, 33, 6, '-', 6, 'yes', NULL, 2, 6, 6, 5, 'no', NULL, 6, 5, 'Jackson Calderon', 6, 5, 5, 'Jesse Cardenas', 'wiwiluw@mailinator.com', 'yes', 1, '2022-08-20 12:07:32', '2022-08-20 12:08:41'),
(6, 35, 7, '-', 7, 'no', NULL, NULL, 7, 7, 6, 'no', NULL, 7, 6, 'Jaquelyn Daugherty', 7, 6, 6, 'Stewart Buchanan', 'meqavemiva@mailinator.com', 'yes', 1, '2022-08-22 15:02:48', '2022-08-22 15:10:46'),
(7, 36, 8, '-', 8, 'no', NULL, NULL, 8, 8, 7, 'no', NULL, 8, 7, 'Winter Martin', 8, 7, 7, 'Idola Barnett', 'zidakezewu@mailinator.com', 'yes', 1, '2022-08-23 11:17:45', '2022-08-23 11:19:05'),
(8, 38, 9, '-', 9, 'yes', NULL, 3, 9, 9, 8, 'no', NULL, 9, 8, 'Mufutau Burns', 9, 8, 8, 'Serina Fuller', 'fycebakif@mailinator.com', 'yes', 1, '2022-08-24 16:29:06', '2022-08-24 16:30:31'),
(9, 39, 10, '-', 10, 'yes', NULL, 4, 10, 10, 9, 'no', NULL, 10, 9, 'Amal Morgan', 10, 9, 9, 'Chandler Noel', 'rowuhijif@mailinator.com', 'yes', 1, '2022-08-24 18:11:04', '2022-08-24 18:18:24'),
(10, 40, 11, '-', 11, 'no', NULL, NULL, 11, 11, 10, 'no', NULL, 11, 10, 'Jakeem Herring', 11, 10, 10, 'Casey Serrano', 'tefecepow@mailinator.com', 'yes', 1, '2022-08-24 18:25:57', '2022-08-24 18:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `student_details_student_application_form`
--

CREATE TABLE `student_details_student_application_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `other_gender` varchar(255) DEFAULT NULL,
  `country_of_permanent_residence` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `address3` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `wechat_whatsapp` varchar(255) DEFAULT NULL,
  `student_email_1` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details_student_application_form`
--

INSERT INTO `student_details_student_application_form` (`id`, `first_name`, `last_name`, `dob`, `age`, `gender`, `other_gender`, `country_of_permanent_residence`, `address1`, `address2`, `address3`, `city`, `state`, `zip_code`, `country`, `phone_number`, `wechat_whatsapp`, `student_email_1`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mona', 'Harvey', '1982-02-02', NULL, 'Male', NULL, 'Trinidad And Tobago', '230 White Second Parkway', 'Nam aliqua Ut in do', 'Eum ea veniam minim', 'Quisquam maiores qui', 'Washington DC', '64998', 'Brazil', '+1 (943) 569-5352', 'Officiis expedita bl', 'qoniwizaku@mailinator.com', 1, '2022-07-29 08:10:29', '2022-07-29 08:10:29'),
(2, 'Drack', 'Brave', '2022-07-19', NULL, 'Male', NULL, 'United States', 'Abc Street', NULL, NULL, 'Hollywood', 'California', '90028', 'United States', '1 (323) 348-5501', NULL, 'wirar53049@zfobo.com', 1, '2022-08-19 07:45:27', '2022-08-19 07:45:27'),
(3, 'Drack', 'Brave', '2022-07-19', NULL, 'Male', NULL, 'United States', 'Abc Street', NULL, NULL, 'Hollywood', 'California', '90028', 'United States', '1 (323) 348-5501', NULL, 'wirar53049@zfobo.com', 1, '2022-08-19 08:06:41', '2022-08-19 08:06:41'),
(4, 'Nevada', 'Kennedy', '2009-03-22', NULL, 'Female', NULL, 'Tuvalu', '879 South Old Boulevard', 'Dolor nobis et saepe', 'Id ipsum facere et', 'Molestias ut dolorem', 'Maine', '62045', 'Suriname', '+1 (138) 769-1692', 'Est numquam cillum', 'jyker@mailinator.com', 1, '2022-08-19 19:23:45', '2022-08-19 19:23:45'),
(5, 'Astra', 'Hunter', '2011-04-14', NULL, 'Male', NULL, 'Portugal', '234 East Clarendon Drive', 'Quos ducimus fuga', 'Ea dolores ipsa et', 'Sit et tempore ea v', 'Indiana', '55009', 'Burkina Faso', '+1 (909) 521-3145', 'Cillum aute a amet', 'fuvy@mailinator.com', 1, '2022-08-19 20:39:35', '2022-08-19 20:39:35'),
(6, 'Shad', 'Hart', '2000-12-10', NULL, 'Female', NULL, 'Tuvalu', '925 North Rocky First Lane', 'Explicabo Occaecat', 'Tempor tempora est e', 'Nisi nemo expedita u', 'Hawaii', '15274', 'Yemen', '+1 (756) 691-8671', 'Et labore quia moles', 'rykyrowi@mailinator.com', 1, '2022-08-20 12:07:32', '2022-08-20 12:07:32'),
(7, 'Holmes', 'Shaffer', '1994-01-03', NULL, 'Male', NULL, 'Croatia', '632 North Clarendon Road', 'Quae commodi quam mi', 'Tenetur libero dolor', 'Sint nisi nisi veli', 'Washington DC', '55527', 'Central African Republic', '+1 (734) 264-5858', 'Recusandae Sed reru', 'gyfacar@mailinator.com', 1, '2022-08-22 15:02:48', '2022-08-22 15:02:48'),
(8, 'Dorian', 'Sherman', '2008-06-05', NULL, 'Female', NULL, 'Isle Of Man', '461 Rocky Fabien Drive', 'Odio accusamus non i', 'Dolor deleniti nulla', 'Facilis voluptates q', 'Arkansas', '80597', 'Svalbard And Jan Mayen', '+1 (125) 549-8486', 'Quia molestiae quia', 'bogitafi@mailinator.com', 1, '2022-08-23 11:17:45', '2022-08-23 11:17:45'),
(9, 'Aquila', 'Marquez', '2014-10-08', NULL, 'Female', NULL, 'Montenegro', '579 Nobel Street', 'Nihil amet id sed n', 'Mollitia neque sed a', 'Cumque ullamco quia', 'Washington', '73025', 'Sierra Leone', '+1 (625) 697-8079', 'Est ad veritatis ne', 'zicydefyc@mailinator.com', 1, '2022-08-24 16:29:06', '2022-08-24 16:29:06'),
(10, 'Charity', 'Knowles', '2008-03-04', NULL, 'Female', NULL, 'Union der Sozialistischen Sowjetrepubliken', '173 West Second Street', 'Tenetur sint volupta', 'Deleniti perspiciati', 'Ex aliqua Dolorem i', 'American Samoa', '89600', 'Monaco', '+1 (314) 907-1365', 'Qui commodi adipisci', 'gibobonor@mailinator.com', 1, '2022-08-24 18:11:04', '2022-08-24 18:11:04'),
(11, 'Shaine', 'Barnett', '1987-12-18', NULL, 'Female', NULL, 'Haiti', '12 Rocky Fabien Freeway', 'Temporibus consectet', 'Dolorem corrupti ar', 'Repudiandae est sed', 'Arkansas', '68235', 'Togo', '+1 (779) 786-8485', 'Non Nam dolore dolor', 'dymoho@mailinator.com', 1, '2022-08-24 18:25:57', '2022-08-24 18:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role` int(16) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `application_submitted` int(11) DEFAULT NULL COMMENT 'Submitted = 1,\r\nNot Submitted = 0',
  `is_active` int(11) NOT NULL DEFAULT 0,
  `is_reset` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `user_role`, `avatar`, `status`, `application_submitted`, `is_active`, `is_reset`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', '$2y$10$U404emFNvJQbGqI5fBSoHOr/GD6moqH1JPnkbF57QBWThIz0x2lzu', 1, NULL, 1, 1, 1, 0, '2022-06-28 17:12:18', '2022-09-20 15:49:03'),
(15, 'driver1', 'last name', 'driver@mail.com', '$2y$10$X4aCEyplf6qAnnmymJTu4.nuz86N0roiXQcQZXMeUZ6Hjk3OYHoOe', 5, NULL, 1, 0, 1, 0, '2022-07-19 14:08:59', '2022-09-20 10:12:46'),
(16, 'vedor', 'last name', 'vedor94522@lodores.com', '$2y$10$bZVf5NEQb1R7wFbU1x8ECePTwuUO9B2EYaQVTujwxHygfXDJ72jV.', 5, NULL, 1, 0, 1, 0, '2022-07-19 14:09:30', '2022-09-16 15:33:07'),
(19, 'dev petyr', 'last name', 'devpetyr911@gmail.com', '$2y$10$V7PdxpfLSWz5pBCIYJ009.oOPXGgQCp21FyQx82fodlnV3nEIn1o.', 5, NULL, 1, 0, 1, 0, '2022-07-20 09:34:39', '2022-09-16 15:38:18'),
(20, 'ddd', 'last name', 'libi@mailinator.com', '$2y$10$qgA6iXDyqE.yGA55dUCXh.FZaoWYG/rhqJkTJoutaAvisGwQl.Qtq', 5, NULL, 1, 0, 1, 0, '2022-07-20 09:41:21', '2022-09-16 15:34:08'),
(21, 'dev', 'last name', 'devpetyr9111@gmail.com', '$2y$10$G4jy6aGjB6kzLQaog6aP5OlJNnzw5I4orPfP4uksQJnOj6hSq5KFm', 3, NULL, 1, NULL, 0, 1, '2022-07-21 06:02:14', '2022-08-24 17:17:48'),
(23, 'culycep', 'last name', 'holayim840@5k2u.com', '$2y$10$3xxhkNHpXECyHdwdH876we2rGGbvY.VAZWKJSwjjNYdNGjpwKj2Z2', 2, NULL, 1, 0, 1, 0, '2022-07-27 08:40:44', '2022-09-16 16:06:35'),
(24, 'dev', 'last name', 'tocode7297@logodez.com', '$2y$10$dnB43Q8osK/0SVLfWjKyf.cr1w6PONtSII.ihTDaQ1WcO3n6KA7ua', 2, NULL, 1, NULL, 0, 0, '2022-07-28 06:52:26', '2022-07-28 06:52:26'),
(25, 'dev', 'last name', 'devpetyr@gmail.com', '$2y$10$t.Z5MblsqDWUuhIAPWAD.OYOpwU/EegyIrkvWhHYTNz9kBkpkn67.', 2, NULL, 1, NULL, 0, 0, '2022-07-28 06:55:08', '2022-07-28 06:55:08'),
(26, 'kawol', 'last name', 'zylon@mailinator.com', '$2y$10$LUMXRYK/AKPVZcKEB5sNF.iNxmhP73vrXQhzx2RTxMuXTgIu.6BLC', 2, NULL, 1, NULL, 0, 0, '2022-07-28 06:59:32', '2022-07-28 06:59:32'),
(27, 'host', 'last name', 'host@mail.com', '$2y$10$EpeLC9.AqNalzgMkDVIWJO/1k5FpUu/ZUxJIGyBNQ2IwqJYQTleYu', 3, NULL, 1, NULL, 0, 0, '2022-07-28 07:17:52', '2022-07-28 07:17:52'),
(28, 'hocegawex', 'last name', 'fypo@mailinator.com', '$2y$10$4JQIawMMCCuTRj1ZmTi82uczsyVwwIHJGZkV77mX4E5584yXkPi1u', 3, NULL, 1, NULL, 0, 0, '2022-07-28 07:19:53', '2022-07-28 07:19:53'),
(29, 'lenuci', 'last name', 'xucehim@mailinator.com', '$2y$10$IU02gYn.VD78zTsKIC7RlucHyRFWz1Q.m6TNkln71ppAHareHZ0zK', 3, NULL, 1, NULL, 0, 0, '2022-07-28 07:21:47', '2022-07-28 07:21:47'),
(30, 'xusanidy', 'last name', 'qumekihix@mailinator.com', '$2y$10$srVUbltxjBk9SkthUFA0FOFEYInmh6J4vhGTQ6Rraoh8.fspIBuJ2', 3, NULL, 1, NULL, 1, 0, '2022-07-28 07:25:43', '2022-07-28 07:27:15'),
(31, 'wirar53049', 'last name', 'wirar53049@zfobo.com', '$2y$10$9FXpGpFyqXESyGya9Z2lieHzlVBTqY3mvfunIg47enoIl0.HWeiSq', 2, NULL, 1, 0, 1, 0, '2022-08-19 06:28:12', '2022-08-19 08:06:42'),
(33, 'TESUSER', 'last name', 'koxiga8024@offsala.com', '$2y$10$eoXlgxetyEQOMm5LRAywZ.0KfO1UQQ3cdSTyNBpA3JNgZfZm2A0cu', 2, NULL, 1, 1, 1, 0, '2022-08-20 12:06:47', '2022-08-20 12:07:32'),
(34, 'janobob', 'last name', 'xozuhyhy@mailinator.com', '$2y$10$u60s5pPI61U4HugYQh5Mru2JHanXsK5c0atX/U1eDjxNJd.AFkXEm', 2, NULL, 1, 0, 0, 0, '2022-08-22 14:09:27', '2022-08-22 14:09:27'),
(35, 'lasower', 'last name', 'lasower233@ukgent.com', '$2y$10$rvtE0s76E2CNH50uBWfXOO/yZRzObNUK4uQp0wcE4D0BopSfs2s76', 2, NULL, 1, 1, 1, 0, '2022-08-22 15:01:06', '2022-08-22 15:02:48'),
(36, 'xayamas', 'last name', 'xayamas494@xitudy.com', '$2y$10$6I54JprYPVLRxPmIklhzvu9IZt78l1xAzleyrhyn2AqAibHfEUXs6', 2, NULL, 1, 1, 1, 0, '2022-08-23 11:16:40', '2022-08-23 11:17:45'),
(37, 'kaxore', 'last name', 'kaxore5900@otodir.com', '$2y$10$mDCm1w46z/wIOj0MPyAu0OnPscGLqJJ65/TXt7vVcTc4Y5RWGAYRW', 2, NULL, 1, 0, 1, 0, '2022-08-23 12:23:50', '2022-08-23 12:24:07'),
(38, 'kedito8858@vasqa.com', 'last name', 'kedito8858@vasqa.com', '$2y$10$GOKB41mfYuttnWnxkCfSdOZDTl0FPycBlEnA0SXZflkkGCBp62o62', 2, NULL, 1, 1, 1, 1, '2022-08-24 16:23:23', '2022-08-24 17:32:54'),
(39, 'remesor555@rxcay.com', 'last name', 'remesor555@rxcay.com', '$2y$10$JkvwoLZYQjGDkgUPjAA1/.ZTWz/UksB8OecqVs30z4baHFFEC4WL.', 2, NULL, 1, 1, 1, 0, '2022-08-24 17:54:51', '2022-08-24 18:11:04'),
(40, 'greg', 'last name', 'berit61820@vasqa.com', '$2y$10$lt3R29wsG9uNk6U/l/FgIu6VeOtepUiEqLv0y2.GSzTOyZagdHpla', 2, NULL, 1, 0, 1, 0, '2022-08-24 18:23:16', '2022-09-13 12:26:08'),
(41, 'lekara', 'last name', 'lekara2636@otodir.com', '$2y$10$lt3R29wsG9uNk6U/l/FgIu6VeOtepUiEqLv0y2.GSzTOyZagdHpla', 2, NULL, 1, 1, 1, 0, '2022-08-25 10:37:38', '2022-09-13 12:23:46'),
(42, 'greg1', 'last name', 'fexos61171@vasqa.com', '$2y$10$UqO5PsJXC.UBNUNU1eG24.j/rqUKa6eBrtugnFIEchR06Y4jgyo.a', 2, NULL, 1, 0, 1, 0, '2022-08-29 17:58:26', '2022-08-29 18:01:12'),
(43, 'greg123', 'last name', 'cidene6861@vasqa.com', '$2y$10$pguWuZvGjStvIHuu04oA5OH/Xfrdkht/1ILwQ59itKYvnx3hu92cy', 2, NULL, 1, 0, 1, 0, '2022-08-29 18:10:28', '2022-08-29 18:10:58'),
(44, 'gregadams', 'last name', 'diwifo5839@ulforex.com', '$2y$10$FyK85.DhhZB7S/ZJr3SftON2VXzzGVpHlGbrJb5rOLfGqewVn6T/y', 2, NULL, 1, 0, 1, 0, '2022-08-29 18:17:57', '2022-08-29 18:19:56'),
(45, 'greg321', 'last name', 'jikipon546@ulforex.com', '$2y$10$A1URAxDgekHnmxpSqJz2U.dr6AxGTsa6UxaeT6BmxBmZAJ4HdWUYu', 2, NULL, 1, 0, 1, 0, '2022-08-29 18:39:47', '2022-08-29 18:40:07'),
(46, 'cahelic', 'last name', 'cahelic514@otodir.com', '$2y$10$/uh5R3ZteJWvFg9ivB6VD.021a3muMZlAtWjr5wKZ04jYvk7pLa8e', 3, NULL, 1, 0, 1, 0, '2022-08-31 09:23:12', '2022-08-31 09:23:40'),
(47, 'vasqa', 'last name', 'wotoyi1594@vasqa.com', '$2y$10$58B1PrvSilullDMU6ECMKOxCGmlEEwCPsVuSAETtSFgvYGuGyFDzW', 2, NULL, 1, 0, 1, 0, '2022-08-31 15:06:00', '2022-08-31 15:16:03'),
(48, 'abc123', 'xym', 'abc@mail.com', '$2y$10$7HMt88ZP7KDYmGy7jMx/b.wycByxCzukpPG7ORFk53FX8hL3hLsoa', 5, NULL, 0, NULL, 0, 0, '2022-08-31 17:45:01', '2022-08-31 17:53:01'),
(50, 'Steve', 'Thomson', 'Stevethomson@gmail.com', '$2y$10$O83hcu0n3DGfGOOomTlJSOSQi4sWnjvSGoESoOmp36VrTOzB6hrg2', 5, NULL, 0, NULL, 0, 0, '2022-08-31 18:30:26', '2022-08-31 18:30:26'),
(53, 'driver', 'test', 'testdriver@mail.com', '$2y$10$1gwikwkrGAiXploUWjAScO3XU.fKElUuxayVknnFGtj/hC7ahkak6', 5, NULL, 0, 0, 1, 0, '2022-09-01 10:23:17', '2022-09-02 14:25:41'),
(55, 'coordinator', 'coordinator', 'coordinator@mail.com', '$2y$10$bme1Pawh4uShikjp.Dc7TOYOOdNxk6Qr657XvuEcHFlNL0..LZjK6', 4, NULL, 0, NULL, 1, 0, '2022-09-02 10:11:36', '2022-09-02 18:06:16'),
(57, 'Lacey', 'Bean', 'cigiji@mailinator.com', '$2y$10$Gg8XwsaQQZiaBpE.oAMElOr8YANXMyjUm6spzHbAwoK2HjWOognp.', 4, NULL, 1, NULL, 1, 0, '2022-09-02 11:44:17', '2022-09-02 11:44:17'),
(59, 'Ivy', 'Owens', 'gapa@mailinator.com', '$2y$10$mzlB0xnvkZr.fNRrGIxhvepYoLIiM3POpYgrULnQyYSU878Z4gYaO', 4, NULL, 1, NULL, 1, 0, '2022-09-02 12:02:55', '2022-09-02 12:02:55'),
(60, 'Armand', 'Farley', 'texucesemy@mailinator.com', '$2y$10$03qu6bjyQIfrM7eoHH.8Y.Z8/8cVytLwILgOiSdWGdIO/clK3gh3S', 4, NULL, 0, NULL, 1, 0, '2022-09-02 13:39:28', '2022-09-02 13:41:45'),
(61, 'Kirby', 'Cotton', 'firi@mailinator.com', '$2y$10$0qK3NFBX3kazNKCmUfnjN.LoxBPb1mPmgg0w1qBi3MKJQ.8zOUHgC', 4, NULL, 0, NULL, 1, 0, '2022-09-02 13:39:45', '2022-09-02 13:55:56'),
(62, 'testing123', 'test', 'test@mail.com', '$2y$10$KOjm.4z9UDRjsaAOmZWAQOW3sOn1yyLyK2JNUPf6EstDDrWjdIXdC', 4, NULL, 0, NULL, 1, 0, '2022-09-02 17:01:24', '2022-09-02 17:08:50'),
(63, 'test driver', 'test driver', 'testdriveradmin@mail.com', '$2y$10$RLDoaP9KZ3yK9rwJkzZmcuoT37m6FxFg/bSg0C/Glk9qvt14LQGDS', 5, NULL, 1, NULL, 1, 0, '2022-09-02 17:05:45', '2022-09-02 17:05:45'),
(64, 'driver first name', 'driver last name', 'driveremail@gmail.com', '$2y$10$4vV3RIgFjSa43iVEMnlAku5R0L7ol4t6waZuUY98r.dgvt5BYRLr.', 5, NULL, 1, NULL, 1, 0, '2022-09-02 18:40:32', '2022-09-02 18:40:32'),
(65, 'coordinator first name', 'last name', 'coordinator@gmail.com', '$2y$10$kWPEVHVZoAbW1a3rb7mtaeCCZMOCNXLeLBi9YxFxGIiCATKIQQCkC', 4, NULL, 1, NULL, 1, 0, '2022-09-02 18:42:43', '2022-09-02 18:42:43'),
(66, 'john', 'doe', 'johndoe@mail.com', '$2y$10$3mXsHGUngqOT.joxJHJhU.ZWWMWEyxctTaWzpsV0yVOXhCKALo4CW', 4, NULL, 0, NULL, 1, 0, '2022-09-09 18:45:49', '2022-09-09 18:45:49'),
(67, 'testing', 'testing', 'kadoya4175@laluxy.com', '$2y$10$n0qlI.pCFJJgr/TD3W2iiOZ7BoXIZGwwBX6x92GBsPR4O8MuyYh7q', 3, NULL, 1, 1, 1, 0, '2022-09-12 10:05:02', '2022-09-12 14:13:42'),
(68, 'test2', 'test2', 'ripibi5183@laluxy.com', '$2y$10$5fULvi.1hdkiVvdjQO111.Bxs9g5NRrWpcAjUU7Mp4dVspR71GBrq', 3, NULL, 1, 1, 1, 0, '2022-09-12 17:03:21', '2022-09-12 17:06:50'),
(69, 'moyin', 'moyin', 'moyin94425@moenode.com', '$2y$10$CxUQpFcBgtnqDrXXzPYxqOzawtbV1OoBnfP5jGunOl8ApTTsgQvR.', 3, NULL, 1, 1, 1, 0, '2022-09-13 11:15:46', '2022-09-13 11:24:10'),
(70, 'QAtesting', 'QAtesting', 'fomod32165@oncebar.com', '$2y$10$gfZJwm7vzZyTfrktNzJg5eW4mm.NpbPzmwwfpLOMRSS0s8vW0BFxu', 3, NULL, 1, 1, 1, 0, '2022-09-15 09:50:12', '2022-09-15 11:11:00'),
(71, 'hoxet80572@moenode.com', 'hoxet80572@moenode.com', 'hoxet80572@moenode.com', '$2y$10$/v3GspuwN75qCKjaBnM09OnTF68gKiRWe1ZqJGrY/ay47L0d/9D0O', 2, NULL, 1, 1, 1, 0, '2022-09-15 12:19:19', '2022-09-16 14:56:46'),
(72, 'karew', 'laluxy', 'karew92008@laluxy.com', '$2y$10$882LYw/oV8CPs4XTOKlCXu7ZgO/PHHj/c/zkqXz77KHxbNc8oPxwa', 2, '16632568416109266730.jfif', 1, 1, 1, 0, '2022-09-15 12:44:29', '2022-09-20 10:21:27'),
(73, 'cehalel', 'oncebar', 'cehalel485@oncebar.com', '$2y$10$w4H2YnvL6Z1.dCxQOnZpFe1LHDkL8xM1AUgnR1vPcySJui5Udr//a', 3, NULL, 1, 1, 1, 0, '2022-09-15 18:06:36', '2022-09-15 18:10:13'),
(74, 'hevavep436@edxplus.com', 'hevavep436@edxplus.com', 'hevavep436@edxplus.com', '$2y$10$LbUiNszFhUGVzvTeMIEAy.gzyKxRoDac8uY7Eg4VhkUD99trKFv7.', 3, NULL, 1, 1, 1, 0, '2022-09-16 09:13:42', '2022-09-16 11:07:42'),
(75, 'Odessa', 'Wilkins', 'sdfgy53442@gmail.com', '$2y$10$z0S2TFqooCX1ry.I7pi.zufPI9hxM0iGypONmHeu7.HTPZqCTyOhe', 2, NULL, 0, 0, 1, 0, '2022-09-16 15:56:18', '2022-09-16 15:58:45'),
(76, 'jowaged768@ploneix.com', 'jowaged768@ploneix.com', 'jowaged768@ploneix.com', '$2y$10$9ejrOgMBas.N/dHugVHaautrR5suRC67oPokbIi5qjjHrfD7loBfG', 3, NULL, 1, 0, 1, 0, '2022-09-16 16:19:32', '2022-09-16 16:19:46'),
(77, 'vineda5153@orlydns.com', 'vineda5153@orlydns.com', 'vineda5153@orlydns.com', '$2y$10$b9hy7QxfpC6wd9ZN/UTVg.3o.xc5NA6pzDI3Sy4Rc0YA/6hgRUtO.', 2, NULL, 1, 1, 1, 0, '2022-09-16 16:22:43', '2022-09-16 16:37:28'),
(79, 'jejina5510@geekjun.com', 'jejina5510@geekjun.com', 'jejina5510@geekjun.com', '$2y$10$YFNeCZowaL1SPmPQ1vVOFe2D7ErQ3AyrCUtAs.N2DOBxHrT75VNri', 3, NULL, 1, 1, 1, 0, '2022-09-16 16:56:58', '2022-09-16 17:01:24'),
(80, 'sad', 'dsad', 'jokog85435@ploneix.com', '$2y$10$vlFy//C.bZqjQn0SXXZTFOTYNCyFqlNWbZlD2QXVckitV31AgMrnu', 2, NULL, 1, 0, 0, 0, '2022-09-16 17:32:24', '2022-09-16 17:32:24'),
(82, 'student first name', 'student last name', 'witot78954@dnitem.com', '$2y$10$Vtd7DuiJxXLm57OOysNSi.HoNZO.xLVVkq9qnJlnUOE1hrIafVRt6', 2, NULL, 1, 1, 1, 0, '2022-09-16 17:41:27', '2022-09-16 17:47:17'),
(83, 'student first name', 'student last name', 'najime9872@dineroa.com', '$2y$10$SbNP/HdyTxqEX7WOL4fG6eXTrDeg8NzUCBijp1GFNd1A4pkg9YHr6', 2, NULL, 1, 1, 1, 0, '2022-09-16 18:03:57', '2022-09-16 18:08:02'),
(84, 'ndkfdsnjn', 'mdklsfdfkln', 'cigeda8081@dnitem.com', '$2y$10$5jS7imyUFpc0g5.ukuaXSeuFv177TuOw0HECsZpY1dobVatXJ.krW', 2, NULL, 1, 0, 1, 0, '2022-09-18 15:57:52', '2022-09-18 15:58:14'),
(85, 'testing update name', 'testing update last name', 'tigoti5607@pahed.com', '$2y$10$nyqYTC/UqPKemlqmsuCbfe2kK5O1CMlvgW9IW0dJupptsXPTht.PK', 3, NULL, 1, 1, 1, 0, '2022-09-19 11:57:02', '2022-09-19 13:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-06-28 17:11:30', '2022-06-28 17:11:30'),
(2, 'Student', '2022-06-28 17:11:30', '2022-06-28 17:11:30'),
(3, 'Host', '2022-06-28 17:11:54', '2022-06-28 17:11:54'),
(4, 'Coordinator', '2022-06-28 17:11:54', '2022-06-28 17:11:54'),
(5, 'Driver', '2022-07-19 15:13:54', '2022-07-19 15:13:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents_old`
--
ALTER TABLE `agents_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airport_details_student_application_form`
--
ALTER TABLE `airport_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardholder_details_student_application_form`
--
ALTER TABLE `cardholder_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditcard_details_student_application_form`
--
ALTER TABLE `creditcard_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronic_form_details_student_application_form`
--
ALTER TABLE `electronic_form_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_details_student_application_form`
--
ALTER TABLE `emergency_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_details_student_application_form`
--
ALTER TABLE `fee_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_adult_informations`
--
ALTER TABLE `haf_adult_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_basic_host_informations`
--
ALTER TABLE `haf_basic_host_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_child_informations`
--
ALTER TABLE `haf_child_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_emergency_informations`
--
ALTER TABLE `haf_emergency_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_partner_informations`
--
ALTER TABLE `haf_partner_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_personal_informations`
--
ALTER TABLE `haf_personal_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_pet_informations`
--
ALTER TABLE `haf_pet_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haf_school_informations`
--
ALTER TABLE `haf_school_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_student_application_form`
--
ALTER TABLE `images_student_application_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `std_app_form_img_id` (`std_app_form_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_details_student_application_form`
--
ALTER TABLE `other_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_student_application_form`
--
ALTER TABLE `program_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requested_agency_student_application_form`
--
ALTER TABLE `requested_agency_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_agent_information`
--
ALTER TABLE `saf_agent_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_agreement_information`
--
ALTER TABLE `saf_agreement_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_airport_information`
--
ALTER TABLE `saf_airport_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_fees`
--
ALTER TABLE `saf_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_fee_payment`
--
ALTER TABLE `saf_fee_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_medical_information`
--
ALTER TABLE `saf_medical_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_other_information`
--
ALTER TABLE `saf_other_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_payment_information`
--
ALTER TABLE `saf_payment_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_status`
--
ALTER TABLE `saf_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_student_basic_information`
--
ALTER TABLE `saf_student_basic_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saf_student_information`
--
ALTER TABLE `saf_student_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_details_student_application_form`
--
ALTER TABLE `school_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_application_form`
--
ALTER TABLE `student_application_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_form_details_id` (`student_form_details_id`),
  ADD KEY `requested_agency_id` (`requested_agency_id`),
  ADD KEY `emergency_details_id` (`emergency_details_id`),
  ADD KEY `school_form_details_id` (`school_form_details_id`),
  ADD KEY `other_details_id` (`other_details_id`),
  ADD KEY `airport_details_id` (`airport_details_id`),
  ADD KEY `fee_details_id` (`fee_details_id`),
  ADD KEY `cardholder_details_id` (`cardholder_details_id`),
  ADD KEY `creditcard_details_id` (`creditcard_details_id`),
  ADD KEY `electronic_form_id` (`electronic_form_id`);

--
-- Indexes for table `student_details_student_application_form`
--
ALTER TABLE `student_details_student_application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles` (`user_role`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `agents_old`
--
ALTER TABLE `agents_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `airport_details_student_application_form`
--
ALTER TABLE `airport_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cardholder_details_student_application_form`
--
ALTER TABLE `cardholder_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `creditcard_details_student_application_form`
--
ALTER TABLE `creditcard_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `electronic_form_details_student_application_form`
--
ALTER TABLE `electronic_form_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `emergency_details_student_application_form`
--
ALTER TABLE `emergency_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fee_details_student_application_form`
--
ALTER TABLE `fee_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `haf_adult_informations`
--
ALTER TABLE `haf_adult_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `haf_basic_host_informations`
--
ALTER TABLE `haf_basic_host_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `haf_child_informations`
--
ALTER TABLE `haf_child_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `haf_emergency_informations`
--
ALTER TABLE `haf_emergency_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `haf_partner_informations`
--
ALTER TABLE `haf_partner_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `haf_personal_informations`
--
ALTER TABLE `haf_personal_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `haf_pet_informations`
--
ALTER TABLE `haf_pet_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `haf_school_informations`
--
ALTER TABLE `haf_school_informations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `images_student_application_form`
--
ALTER TABLE `images_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `other_details_student_application_form`
--
ALTER TABLE `other_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program_student_application_form`
--
ALTER TABLE `program_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requested_agency_student_application_form`
--
ALTER TABLE `requested_agency_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saf_agent_information`
--
ALTER TABLE `saf_agent_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `saf_agreement_information`
--
ALTER TABLE `saf_agreement_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `saf_airport_information`
--
ALTER TABLE `saf_airport_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saf_fees`
--
ALTER TABLE `saf_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `saf_fee_payment`
--
ALTER TABLE `saf_fee_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `saf_medical_information`
--
ALTER TABLE `saf_medical_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `saf_other_information`
--
ALTER TABLE `saf_other_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `saf_payment_information`
--
ALTER TABLE `saf_payment_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saf_status`
--
ALTER TABLE `saf_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `saf_student_basic_information`
--
ALTER TABLE `saf_student_basic_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `saf_student_information`
--
ALTER TABLE `saf_student_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `school_details_student_application_form`
--
ALTER TABLE `school_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_application_form`
--
ALTER TABLE `student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_details_student_application_form`
--
ALTER TABLE `student_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images_student_application_form`
--
ALTER TABLE `images_student_application_form`
  ADD CONSTRAINT `std_app_form_img_id` FOREIGN KEY (`std_app_form_id`) REFERENCES `student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `student_application_form`
--
ALTER TABLE `student_application_form`
  ADD CONSTRAINT `airport_details_id` FOREIGN KEY (`airport_details_id`) REFERENCES `airport_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cardholder_details_id` FOREIGN KEY (`cardholder_details_id`) REFERENCES `cardholder_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `creditcard_details_id` FOREIGN KEY (`creditcard_details_id`) REFERENCES `creditcard_details_student_application_form` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `electronic_form_id` FOREIGN KEY (`electronic_form_id`) REFERENCES `electronic_form_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `emergency_details_id` FOREIGN KEY (`emergency_details_id`) REFERENCES `emergency_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fee_details_id` FOREIGN KEY (`fee_details_id`) REFERENCES `fee_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `other_details_id` FOREIGN KEY (`other_details_id`) REFERENCES `other_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `requested_agency_id` FOREIGN KEY (`requested_agency_id`) REFERENCES `requested_agency_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `school_form_details_id` FOREIGN KEY (`school_form_details_id`) REFERENCES `school_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `student_form_details_id` FOREIGN KEY (`student_form_details_id`) REFERENCES `student_details_student_application_form` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_roles` FOREIGN KEY (`user_role`) REFERENCES `user_roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
