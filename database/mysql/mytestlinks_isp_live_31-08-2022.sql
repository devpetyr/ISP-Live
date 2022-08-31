-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2022 at 06:40 PM
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
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
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
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `agency_name`, `agency_contact_person`, `agency_street_address_1`, `agency_street_address_2`, `agency_street_address_3`, `agency_city`, `agent_state`, `agency_zip_code`, `agency_country`, `agency_phone_number`, `agent_email`, `status`, `created_at`, `updated_at`) VALUES
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
(13, 'FXC-523', '2022-08-31 18:25:20', '2022-08-31 18:25:20');

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
(7, 'test123', 1, '2022-08-30 17:22:27', '2022-08-30 17:22:27');

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
  `saf_id` int(11) DEFAULT NULL,
  `using_agent` varchar(255) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `saf_agreement_information`
--

CREATE TABLE `saf_agreement_information` (
  `id` int(11) NOT NULL,
  `saf_id` int(11) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `saf_airport_information`
--

CREATE TABLE `saf_airport_information` (
  `id` int(11) NOT NULL,
  `saf_id` int(11) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `saf_medical_information`
--

CREATE TABLE `saf_medical_information` (
  `id` int(11) NOT NULL,
  `saf_id` int(11) DEFAULT NULL,
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
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saf_other_information`
--

CREATE TABLE `saf_other_information` (
  `id` int(11) NOT NULL,
  `saf_id` int(11) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `saf_payment_information`
--

CREATE TABLE `saf_payment_information` (
  `id` int(11) NOT NULL,
  `saf_id` int(11) DEFAULT NULL,
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
  `placement_fee` decimal(14,2) DEFAULT NULL,
  `late_fee` decimal(14,2) DEFAULT NULL,
  `deposit_fee` decimal(14,2) DEFAULT NULL,
  `airport_pickup_fee` decimal(14,2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saf_student_information`
--

CREATE TABLE `saf_student_information` (
  `id` int(11) NOT NULL,
  `saf_id` int(11) DEFAULT NULL,
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
(22, 'admin', 4, 1, '2022-08-30 15:30:14', '2022-08-30 15:30:14');

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
-- Table structure for table `student_application_fee_payment`
--

CREATE TABLE `student_application_fee_payment` (
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
-- Dumping data for table `student_application_fee_payment`
--

INSERT INTO `student_application_fee_payment` (`id`, `invoice_number`, `student_id`, `std_app_fee_id`, `payment_id`, `payment_url`, `price`, `status`, `created_at`, `updated_at`) VALUES
(4, '1660941522452378913', 19, 21, 'ch_3LYbxkFo3JNYSfwX1AvM3x9r', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKNHp_5cGMgbnBiVrf6w6LBY3OWb4ErPm09dAONdtuqU6PEnq7uUVyjFQMqO4jDZ99wMRVKmFLtv25-XO', '1000.00', 1, '2022-08-19 20:38:42', '2022-08-19 20:38:42'),
(6, '1660997387763384096', 33, 28, 'ch_3LYqUoFo3JNYSfwX0dfodEZy', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKIueg5gGMgZG2moj-1Y6LBaASZac5Xms9THBQnIMYKqi6XIRm6sW2ZazFneh5xKO1si8Xk8wzf1U-N-9', '2500.00', 1, '2022-08-20 12:09:47', '2022-08-20 12:09:47'),
(10, '1661181152979565799', 35, 39, 'ch_3LZcIlFo3JNYSfwX0Xev1ThY', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKOC5jpgGMgaqykAxpNs6LBYf-bVS6-KkWs2_rH6r5SBozX278oHc9U9V2DdM7DGsPZaAM4rfNy3dqscZ', '15000.00', 1, '2022-08-22 15:12:32', '2022-08-22 15:12:32'),
(11, '1661253773239527986', 36, 40, 'ch_3LZvC4Fo3JNYSfwX1cP02BoY', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKI3xkpgGMgaNf23bUUc6LBY92eEMoTvg94HDEbxP6IVqa4zf0QGPYU47K6UiE4qdzzzu5Av4yLaOS-lG', '15000.00', 1, '2022-08-31 11:22:53', '2022-08-23 11:22:53'),
(13, '1661280521879428471', 19, 42, 'ch_3La29UFo3JNYSfwX1HCWMJMX', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKInClJgGMgbYO-rv7KM6LBaE5qQ_JzzXcFheU7-RAKVpC-KjhDOsLSoMCvRHuSSYqM6EHwliB3kVp-K8', '250.00', 1, '2022-08-31 18:48:41', '2022-08-23 18:48:41'),
(14, '1661365729880595799', 40, 45, 'ch_3LaOJoFo3JNYSfwX1YMSmVkR', 'https://pay.stripe.com/receipts/payment/CAcaFwoVYWNjdF8xS25oQ0VGbzNKTllTZndYKOHbmZgGMgZ5zElYuRU6LBYfQTQopMevlSXjbHERPy1V--v_2LrNpnMkyZqvrADo-ok4oKgHZLfTUBpe', '500.00', 1, '2022-08-24 18:28:49', '2022-08-24 18:28:49');

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
-- Table structure for table `student_application_form_fees`
--

CREATE TABLE `student_application_form_fees` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `is_paid` int(11) NOT NULL DEFAULT 0 COMMENT 'unpaid = 0,\r\npaid = 1',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_application_form_fees`
--

INSERT INTO `student_application_form_fees` (`id`, `user_id`, `fees`, `is_paid`, `created_at`, `updated_at`) VALUES
(22, 31, '4512', 0, '2022-08-19 14:49:28', '2022-08-23 12:10:16'),
(28, 33, '2500', 1, '2022-08-20 12:08:41', '2022-08-20 12:09:47'),
(39, 35, '15000', 1, '2022-08-22 15:10:46', '2022-08-22 15:12:32'),
(40, 36, '15000', 1, '2022-08-23 11:19:05', '2022-08-23 11:22:53'),
(42, 19, '250', 1, '2022-08-23 18:47:15', '2022-08-23 18:48:41'),
(43, 38, '500', 0, '2022-08-24 16:30:31', '2022-08-24 16:30:31'),
(44, 39, '2500', 0, '2022-08-24 18:18:24', '2022-08-24 18:18:24'),
(45, 40, '500', 1, '2022-08-24 18:27:07', '2022-08-24 18:28:49');

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
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` int(16) NOT NULL,
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

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `user_role`, `status`, `application_submitted`, `is_active`, `is_reset`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'last name', 'admin@mail.com', '$2a$12$8mAKc.Qz.X9vkxhQfjUl3OwSO9YG0tJJbiHbLVtzrODB1x7erGq1i', 1, 1, NULL, 1, 0, '2022-06-28 17:12:18', '2022-06-28 17:12:18'),
(15, 'driver', 'last name', 'driver@mail.com', '$2y$10$EqvGqzl57TgaUWMo.HE/j.fl42Ea51lQxg6m9jrIAL63QG0utFJkq', 5, 1, 0, 1, 0, '2022-07-19 14:08:59', '2022-08-31 18:31:26'),
(16, 'vedor', 'last name', 'vedor94522@lodores.com', '$2y$10$bZVf5NEQb1R7wFbU1x8ECePTwuUO9B2EYaQVTujwxHygfXDJ72jV.', 2, 1, 1, 1, 0, '2022-07-19 14:09:30', '2022-07-19 14:09:49'),
(19, 'dev petyr', 'last name', 'devpetyr911@gmail.com', '$2y$10$Cr8D22JcToQyEmHgv8x91OIcnu5t5Bgx0I4/E0pcpbalwMJ3UvWa6', 2, 1, 1, 1, 0, '2022-07-20 09:34:39', '2022-08-26 18:17:26'),
(20, 'gijejo', 'last name', 'libi@mailinator.com', '$2y$10$kx8kFd//t9QVPxMNc5wH6eggJRhySdslBE1cFmfr7i8gjtBN/0ZkW', 2, 1, NULL, 0, 0, '2022-07-20 09:41:21', '2022-07-20 09:41:21'),
(21, 'dev', 'last name', 'devpetyr9111@gmail.com', '$2y$10$G4jy6aGjB6kzLQaog6aP5OlJNnzw5I4orPfP4uksQJnOj6hSq5KFm', 3, 1, NULL, 1, 1, '2022-07-21 06:02:14', '2022-08-24 17:17:48'),
(23, 'culycep', 'last name', 'holayim840@5k2u.com', '$2y$10$3xxhkNHpXECyHdwdH876we2rGGbvY.VAZWKJSwjjNYdNGjpwKj2Z2', 2, 1, NULL, 0, 0, '2022-07-27 08:40:44', '2022-07-27 08:40:44'),
(24, 'dev', 'last name', 'tocode7297@logodez.com', '$2y$10$dnB43Q8osK/0SVLfWjKyf.cr1w6PONtSII.ihTDaQ1WcO3n6KA7ua', 2, 1, NULL, 0, 0, '2022-07-28 06:52:26', '2022-07-28 06:52:26'),
(25, 'dev', 'last name', 'devpetyr@gmail.com', '$2y$10$t.Z5MblsqDWUuhIAPWAD.OYOpwU/EegyIrkvWhHYTNz9kBkpkn67.', 2, 1, NULL, 0, 0, '2022-07-28 06:55:08', '2022-07-28 06:55:08'),
(26, 'kawol', 'last name', 'zylon@mailinator.com', '$2y$10$LUMXRYK/AKPVZcKEB5sNF.iNxmhP73vrXQhzx2RTxMuXTgIu.6BLC', 2, 1, NULL, 0, 0, '2022-07-28 06:59:32', '2022-07-28 06:59:32'),
(27, 'host', 'last name', 'host@mail.com', '$2y$10$EpeLC9.AqNalzgMkDVIWJO/1k5FpUu/ZUxJIGyBNQ2IwqJYQTleYu', 3, 1, NULL, 0, 0, '2022-07-28 07:17:52', '2022-07-28 07:17:52'),
(28, 'hocegawex', 'last name', 'fypo@mailinator.com', '$2y$10$4JQIawMMCCuTRj1ZmTi82uczsyVwwIHJGZkV77mX4E5584yXkPi1u', 3, 1, NULL, 0, 0, '2022-07-28 07:19:53', '2022-07-28 07:19:53'),
(29, 'lenuci', 'last name', 'xucehim@mailinator.com', '$2y$10$IU02gYn.VD78zTsKIC7RlucHyRFWz1Q.m6TNkln71ppAHareHZ0zK', 3, 1, NULL, 0, 0, '2022-07-28 07:21:47', '2022-07-28 07:21:47'),
(30, 'xusanidy', 'last name', 'qumekihix@mailinator.com', '$2y$10$srVUbltxjBk9SkthUFA0FOFEYInmh6J4vhGTQ6Rraoh8.fspIBuJ2', 3, 1, NULL, 1, 0, '2022-07-28 07:25:43', '2022-07-28 07:27:15'),
(31, 'wirar53049', 'last name', 'wirar53049@zfobo.com', '$2y$10$9FXpGpFyqXESyGya9Z2lieHzlVBTqY3mvfunIg47enoIl0.HWeiSq', 2, 1, 0, 1, 0, '2022-08-19 06:28:12', '2022-08-19 08:06:42'),
(33, 'TESUSER', 'last name', 'koxiga8024@offsala.com', '$2y$10$eoXlgxetyEQOMm5LRAywZ.0KfO1UQQ3cdSTyNBpA3JNgZfZm2A0cu', 2, 1, 1, 1, 0, '2022-08-20 12:06:47', '2022-08-20 12:07:32'),
(34, 'janobob', 'last name', 'xozuhyhy@mailinator.com', '$2y$10$u60s5pPI61U4HugYQh5Mru2JHanXsK5c0atX/U1eDjxNJd.AFkXEm', 2, 1, 0, 0, 0, '2022-08-22 14:09:27', '2022-08-22 14:09:27'),
(35, 'lasower', 'last name', 'lasower233@ukgent.com', '$2y$10$rvtE0s76E2CNH50uBWfXOO/yZRzObNUK4uQp0wcE4D0BopSfs2s76', 2, 1, 1, 1, 0, '2022-08-22 15:01:06', '2022-08-22 15:02:48'),
(36, 'xayamas', 'last name', 'xayamas494@xitudy.com', '$2y$10$6I54JprYPVLRxPmIklhzvu9IZt78l1xAzleyrhyn2AqAibHfEUXs6', 2, 1, 1, 1, 0, '2022-08-23 11:16:40', '2022-08-23 11:17:45'),
(37, 'kaxore', 'last name', 'kaxore5900@otodir.com', '$2y$10$mDCm1w46z/wIOj0MPyAu0OnPscGLqJJ65/TXt7vVcTc4Y5RWGAYRW', 2, 1, 0, 1, 0, '2022-08-23 12:23:50', '2022-08-23 12:24:07'),
(38, 'kedito8858@vasqa.com', 'last name', 'kedito8858@vasqa.com', '$2y$10$GOKB41mfYuttnWnxkCfSdOZDTl0FPycBlEnA0SXZflkkGCBp62o62', 2, 1, 1, 1, 1, '2022-08-24 16:23:23', '2022-08-24 17:32:54'),
(39, 'remesor555@rxcay.com', 'last name', 'remesor555@rxcay.com', '$2y$10$JkvwoLZYQjGDkgUPjAA1/.ZTWz/UksB8OecqVs30z4baHFFEC4WL.', 2, 1, 1, 1, 0, '2022-08-24 17:54:51', '2022-08-24 18:11:04'),
(40, 'greg', 'last name', 'berit61820@vasqa.com', '$2y$10$uehhYfjXS79yGaX1aI/lFebgONCuUMYqLL/MkKrO2be66aX7ma.sW', 2, 1, 1, 1, 1, '2022-08-24 18:23:16', '2022-08-24 18:29:38'),
(41, 'lekara', 'last name', 'lekara2636@otodir.com', '$2y$10$lt3R29wsG9uNk6U/l/FgIu6VeOtepUiEqLv0y2.GSzTOyZagdHpla', 2, 1, 0, 1, 0, '2022-08-25 10:37:38', '2022-08-25 10:38:21'),
(42, 'greg1', 'last name', 'fexos61171@vasqa.com', '$2y$10$UqO5PsJXC.UBNUNU1eG24.j/rqUKa6eBrtugnFIEchR06Y4jgyo.a', 2, 1, 0, 1, 0, '2022-08-29 17:58:26', '2022-08-29 18:01:12'),
(43, 'greg123', 'last name', 'cidene6861@vasqa.com', '$2y$10$pguWuZvGjStvIHuu04oA5OH/Xfrdkht/1ILwQ59itKYvnx3hu92cy', 2, 1, 0, 1, 0, '2022-08-29 18:10:28', '2022-08-29 18:10:58'),
(44, 'gregadams', 'last name', 'diwifo5839@ulforex.com', '$2y$10$FyK85.DhhZB7S/ZJr3SftON2VXzzGVpHlGbrJb5rOLfGqewVn6T/y', 2, 1, 0, 1, 0, '2022-08-29 18:17:57', '2022-08-29 18:19:56'),
(45, 'greg321', 'last name', 'jikipon546@ulforex.com', '$2y$10$A1URAxDgekHnmxpSqJz2U.dr6AxGTsa6UxaeT6BmxBmZAJ4HdWUYu', 2, 1, 0, 1, 0, '2022-08-29 18:39:47', '2022-08-29 18:40:07'),
(46, 'cahelic', 'last name', 'cahelic514@otodir.com', '$2y$10$/uh5R3ZteJWvFg9ivB6VD.021a3muMZlAtWjr5wKZ04jYvk7pLa8e', 3, 1, 0, 1, 0, '2022-08-31 09:23:12', '2022-08-31 09:23:40'),
(47, 'vasqa', 'last name', 'wotoyi1594@vasqa.com', '$2y$10$58B1PrvSilullDMU6ECMKOxCGmlEEwCPsVuSAETtSFgvYGuGyFDzW', 2, 1, 0, 1, 0, '2022-08-31 15:06:00', '2022-08-31 15:16:03'),
(48, 'abc123', 'xym', 'abc@mail.com', '$2y$10$7HMt88ZP7KDYmGy7jMx/b.wycByxCzukpPG7ORFk53FX8hL3hLsoa', 5, 0, NULL, 0, 0, '2022-08-31 17:45:01', '2022-08-31 17:53:01'),
(50, 'Steve', 'Thomson', 'Stevethomson@gmail.com', '$2y$10$O83hcu0n3DGfGOOomTlJSOSQi4sWnjvSGoESoOmp36VrTOzB6hrg2', 5, 0, NULL, 0, 0, '2022-08-31 18:30:26', '2022-08-31 18:30:26');

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
-- Indexes for table `agents`
--
ALTER TABLE `agents`
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
-- Indexes for table `images_student_application_form`
--
ALTER TABLE `images_student_application_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `std_app_form_img_id` (`std_app_form_id`);

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
-- Indexes for table `student_application_fee_payment`
--
ALTER TABLE `student_application_fee_payment`
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
-- Indexes for table `student_application_form_fees`
--
ALTER TABLE `student_application_form_fees`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `images_student_application_form`
--
ALTER TABLE `images_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `requested_agency_student_application_form`
--
ALTER TABLE `requested_agency_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `saf_agent_information`
--
ALTER TABLE `saf_agent_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saf_agreement_information`
--
ALTER TABLE `saf_agreement_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saf_airport_information`
--
ALTER TABLE `saf_airport_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saf_medical_information`
--
ALTER TABLE `saf_medical_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saf_other_information`
--
ALTER TABLE `saf_other_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saf_payment_information`
--
ALTER TABLE `saf_payment_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saf_student_basic_information`
--
ALTER TABLE `saf_student_basic_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saf_student_information`
--
ALTER TABLE `saf_student_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `school_details_student_application_form`
--
ALTER TABLE `school_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_application_fee_payment`
--
ALTER TABLE `student_application_fee_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_application_form`
--
ALTER TABLE `student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_application_form_fees`
--
ALTER TABLE `student_application_form_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_details_student_application_form`
--
ALTER TABLE `student_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
