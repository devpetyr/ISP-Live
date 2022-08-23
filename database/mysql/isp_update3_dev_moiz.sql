-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 09:51 PM
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
-- Database: `xpiasbzoerxk_isp`
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

-- --------------------------------------------------------

--
-- Table structure for table `creditcard_details_student_application_form`
--

CREATE TABLE `creditcard_details_student_application_form` (
  `id` int(11) NOT NULL,
  `credit_card_type` varchar(255) DEFAULT NULL,
  `name_on_card` varchar(255) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `card_exp_date` date DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `emergency_details_student_application_form`
--

CREATE TABLE `emergency_details_student_application_form` (
  `id` int(11) NOT NULL,
  `emergency_contact_first_name` varchar(255) DEFAULT NULL,
  `emergency_contact_last_name` varchar(255) DEFAULT NULL,
  `emergency_contact_phone_number` varchar(255) DEFAULT NULL,
  `emergency_contact_relation` varchar(255) DEFAULT NULL,
  `emergency_contact_email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `student_application_form`
--

CREATE TABLE `student_application_form` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
  `status` int(11) DEFAULT NULL COMMENT 'Active = 1,\r\nInactive = 0',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_details_student_application_form`
--

CREATE TABLE `student_details_student_application_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role`, `status`, `application_submitted`, `is_active`, `is_reset`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@mail.com', '$2a$12$8mAKc.Qz.X9vkxhQfjUl3OwSO9YG0tJJbiHbLVtzrODB1x7erGq1i', 1, 1, NULL, 1, 0, '2022-06-28 17:12:18', '2022-06-28 17:12:18'),
(15, 'pabiv', 'pabiv82820@lodores.com', '$2y$10$R3Xk6.5w3hmLQEwdv2Bc9uwOdBTHc2Qqsq5avZ6Y/3YEdj7XGdm8.', 3, 1, 0, 1, 0, '2022-07-19 14:08:59', '2022-07-19 14:08:59'),
(16, 'vedor', 'vedor94522@lodores.com', '$2y$10$bZVf5NEQb1R7wFbU1x8ECePTwuUO9B2EYaQVTujwxHygfXDJ72jV.', 2, 1, 1, 1, 0, '2022-07-19 14:09:30', '2022-07-19 14:09:49'),
(19, 'dev petyr', 'devpetyr911@gmail.com', '$2y$10$FCvN3NzIfqyeQHwiDmvYXu91OZEKB4G1GnRLdww0xC.T8iUpLmBUm', 2, 1, NULL, 1, 0, '2022-07-20 09:34:39', '2022-07-20 09:34:39'),
(20, 'gijejo', 'libi@mailinator.com', '$2y$10$kx8kFd//t9QVPxMNc5wH6eggJRhySdslBE1cFmfr7i8gjtBN/0ZkW', 2, 1, NULL, 0, 0, '2022-07-20 09:41:21', '2022-07-20 09:41:21'),
(21, 'dev', 'devpetyr9111@gmail.com', '$2y$10$G4jy6aGjB6kzLQaog6aP5OlJNnzw5I4orPfP4uksQJnOj6hSq5KFm', 3, 1, NULL, 1, 0, '2022-07-21 06:02:14', '2022-07-21 06:02:14'),
(23, 'culycep', 'holayim840@5k2u.com', '$2y$10$3xxhkNHpXECyHdwdH876we2rGGbvY.VAZWKJSwjjNYdNGjpwKj2Z2', 2, 1, NULL, 0, 0, '2022-07-27 08:40:44', '2022-07-27 08:40:44');

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
-- Indexes for table `requested_agency_student_application_form`
--
ALTER TABLE `requested_agency_student_application_form`
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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airport_details_student_application_form`
--
ALTER TABLE `airport_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cardholder_details_student_application_form`
--
ALTER TABLE `cardholder_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creditcard_details_student_application_form`
--
ALTER TABLE `creditcard_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `electronic_form_details_student_application_form`
--
ALTER TABLE `electronic_form_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_details_student_application_form`
--
ALTER TABLE `emergency_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_details_student_application_form`
--
ALTER TABLE `fee_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images_student_application_form`
--
ALTER TABLE `images_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_details_student_application_form`
--
ALTER TABLE `other_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requested_agency_student_application_form`
--
ALTER TABLE `requested_agency_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_details_student_application_form`
--
ALTER TABLE `school_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_application_form`
--
ALTER TABLE `student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_details_student_application_form`
--
ALTER TABLE `student_details_student_application_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
