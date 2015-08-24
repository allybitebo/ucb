-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2015 at 08:48 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ucbdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `bureaus`
--

CREATE TABLE IF NOT EXISTS `bureaus` (
`bureau_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bureaus`
--

INSERT INTO `bureaus` (`bureau_id`, `name`, `shortname`, `address`, `telephone`, `extension`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Bureau Bico Bico', 'BICO ', '5464', '987888811', 322834, 'inocentvicent@gmail.com', 'website.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'UDBS_bureau', 'UBureau', '', '', 0, '', '', '2015-07-15 16:44:12', '2015-07-15 16:44:12'),
(3, 'CoET_Bureau', 'CoBurea', '45782943', '0222410467', 4553523, 'inocentvicent@gmail.com', 'website.com', '2015-07-15 16:45:35', '2015-07-15 16:45:35'),
(4, 'Conas Bureau', 'CONBU', '', '', 0, '', '', '2015-07-16 02:45:25', '2015-07-16 02:45:25'),
(8, 'data', 'dt', 'po box 123', '458', 0, 'inocentvicent@gmail.com', 'websiteburea', '2015-08-02 07:20:52', '2015-08-02 07:20:52'),
(9, 'bureautwo', 'b2', 'po box 12389', '234555', 0, 'inocentvicent@gmail.com', 'www.bureautwo.com', '2015-08-03 15:31:25', '2015-08-03 15:31:25'),
(10, 'bureau in', 'bIN', '2436 arusha', '13545', 0, 'inocentvicent@gmail.com', 'wed', '2015-08-04 04:55:28', '2015-08-04 04:55:28'),
(11, 'CoNAS Bureau', 'CNSBu', '35214', '0222410467', 0, 'conas@udsm.ac.ztz', 'www.burea.com', '2015-08-04 05:29:07', '2015-08-04 05:29:07'),
(12, 'name1', 'short1', 'address1 ', '123456', 3453535, 'email.@gmail.com', 'website.com', '2015-08-10 07:20:43', '2015-08-10 07:20:43'),
(13, 'new bureau', 'neB', '53267', '23535', 2147483647, 'inocentvicent@gmail.com', 'website.com', '2015-08-12 07:35:33', '2015-08-12 07:35:33'),
(14, 'add', 'sgh', 'dsfdsf', '455333', 454, 'inocentvicent@gmail.com', 'website.com', '2015-08-14 09:55:26', '2015-08-14 09:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `competences`
--

CREATE TABLE IF NOT EXISTS `competences` (
`competence_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `sector_id` int(11) unsigned NOT NULL,
  `domain_id` int(11) unsigned NOT NULL,
  `subject_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `competences`
--

INSERT INTO `competences` (`competence_id`, `name`, `description`, `sector_id`, `domain_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 'competence', 'Construction of road pavement', 1, 1, 1, '2015-07-28 09:13:13', '2015-07-28 09:13:13'),
(5, 'Competencee', 'Descr', 1, 2, 1, '2015-08-05 08:48:20', '2015-08-05 08:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE IF NOT EXISTS `consultants` (
`consultant_id` int(10) unsigned NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `displayname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `department_id` int(10) unsigned NOT NULL,
  `user_account_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`consultant_id`, `firstname`, `middlename`, `lastname`, `displayname`, `gender`, `qualification`, `title`, `email`, `telephone`, `mobile`, `website`, `department_id`, `user_account_id`, `created_at`, `updated_at`) VALUES
(1, 'Amani', 'Upendo', 'Umoja', '', 'Male', '', '', '', '', '', '', 1, 5, '2015-07-22 19:18:55', '2015-07-22 19:18:55'),
(2, 'Inocent', 'Vicent', 'Vicent', '', 'Male', '', '', '', '', '', '', 2, 2, '2015-07-22 19:20:31', '2015-07-22 19:20:31'),
(3, 'janeth', 'mosses', 'lymo', 'janeth', 'female', 'phd', 'title', 'inocentvicent@gmail.com', '864273', '57831', 'www.bureautwo.com', 1, 1, '2015-08-05 11:53:31', '2015-08-05 11:53:31'),
(4, 'firstname', 'middle', 'last', 'last', 'male', 'Doctor', 'Title', 'inocentvicent@gmail.com', '0222989', '0783425', 'website.com', 1, 1, '2015-08-12 10:22:36', '2015-08-12 10:22:36'),
(5, 'Denis ', 'Isaac', 'Mreni', 'denis', 'male', 'Title', 'Title', 'doreen@gmail.com', '076545652', '546363', 'website.com', 3, 8, '2015-08-13 11:27:42', '2015-08-13 11:27:42'),
(6, 'shamimu', 'kareem', 'ramadhani', 'shamimu', 'female', 'Chemilac processing', 'Engin', 'doreen@gmail.com', '768598', '8584934', 'website.com', 5, 1, '2015-08-13 12:17:26', '2015-08-13 12:17:26'),
(7, 'Elipokea', 'mosses', 'shio', 'shio', 'male', 'asdfghjm', 'title', 'inocentvicent@gmail.com', '98765', '0438473', 'website.com', 1, 1, '2015-08-14 10:58:44', '2015-08-14 10:58:44'),
(8, 'your firstname', 'middle name', 'last name', 'username', 'male', 'teacher', 'title', 'inocentvicent@gmail.com', '393843', '8732893489', 'website.com', 1, 1, '2015-08-17 08:10:17', '2015-08-17 08:10:17'),
(9, 'leah', 'michael', 'mwinuka', 'leah', 'female', 'teacher', 'Title', 'doreen@gmail.com', '487922', '92034850', 'www.website.com', 1, 1, '2015-08-17 08:50:19', '2015-08-17 08:50:19'),
(10, 'kjdhgkj', 'dlkmvldks;mvs', 'lkdmvlsk', 'lskjfa', 'male', 'rtu', 'akjfdlkase', 'doreen@gmail.com', '68576389', '7648937', 'websiteburea', 1, 1, '2015-08-17 11:31:08', '2015-08-17 11:31:08'),
(11, 'uyitwwopeir', 'ejflekafj', 'fkldajf;lk', 'nvcmvz', 'male', 'dlak;jvak;d', 'gfkgjfslk', 'doreen@gmail.com', '76985', '835096', 'www.burea.com@gmail.com', 1, 1, '2015-08-17 11:34:09', '2015-08-17 11:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `consultant_competence`
--

CREATE TABLE IF NOT EXISTS `consultant_competence` (
`consultant_competence_id` int(10) unsigned NOT NULL,
  `consultant_id` int(10) unsigned NOT NULL,
  `competence_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultant_project`
--

CREATE TABLE IF NOT EXISTS `consultant_project` (
`consultant_project_id` int(10) unsigned NOT NULL,
  `cons_proj_consultant_id` int(10) unsigned NOT NULL,
  `cons_proj_project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consultant_project`
--

INSERT INTO `consultant_project` (`consultant_project_id`, `cons_proj_consultant_id`, `cons_proj_project_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2015-08-18 12:09:29', '2015-08-18 12:09:29'),
(2, 5, 2, '2015-08-18 12:10:18', '2015-08-18 12:10:18'),
(3, 6, 2, '2015-08-18 12:10:18', '2015-08-18 12:10:18'),
(4, 10, 5, '2015-08-18 12:12:48', '2015-08-18 12:12:48'),
(5, 2, 4, '2015-08-18 12:12:48', '2015-08-18 12:12:48'),
(6, 8, 8, '2015-08-18 13:15:16', '2015-08-18 13:15:16'),
(7, 10, 9, '2015-08-18 13:15:16', '2015-08-18 13:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`department_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `school_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `name`, `shortname`, `address`, `telephone`, `extension`, `email`, `website`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'Electrical Engineering', 'EE', '', '', 0, '', '', 4, '2015-07-15 17:11:45', '2015-07-15 17:11:45'),
(2, 'Computer Science and Electronics', 'CSE', '', '', 0, '', '', 3, '2015-07-15 17:12:54', '2015-07-15 17:12:54'),
(3, 'Marketing ', 'MD', '', '', 0, '', '', 1, '2015-07-15 17:13:31', '2015-07-15 17:13:31'),
(4, 'Civil Engineering', 'CE', '', '', 0, '', '', 4, '2015-07-15 17:18:04', '2015-07-15 17:18:04'),
(5, 'Chemical Engineering', 'CHE', '', '', 0, '', '', 4, '2015-07-15 17:19:43', '2015-07-15 17:19:43'),
(6, 'Economics Department', 'EDP', '54747', '4563732', 1237, 'inocentvicent@gmail.com', 'website.com', 1, '2015-08-05 12:28:44', '2015-08-05 12:28:44'),
(7, 'Sales Department', 'SDEP', '2451 ', '4321', 342222, 'inocentvicent@gmail.com', 'www.website.com', 1, '2015-08-13 05:44:11', '2015-08-13 05:44:11'),
(8, 'Information and Technology', 'ICT', '1324 udsm', '7583459', 34255, 'ict@gmail.com', 'website.com', 1, '2015-08-14 11:03:43', '2015-08-14 11:03:43'),
(9, 'Ecology Department', 'ECoDEP', '74373 udsm', '89u49320', 0, 'inocentvicent@gmail.com', 'www.website.com', 5, '2015-08-17 08:22:08', '2015-08-17 08:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE IF NOT EXISTS `domains` (
`domain_id` int(10) unsigned NOT NULL,
  `domain_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`domain_id`, `domain_name`, `description`, `sector_id`, `created_at`, `updated_at`) VALUES
(1, 'Civil Engineering', 'Edit here', 1, '2015-07-21 05:42:58', '2015-07-21 05:42:58'),
(2, 'emanueli', 'true', 1, '2015-07-21 05:42:58', '2015-07-21 05:42:58'),
(6, 'domain two', 'for coict', 1, '2015-08-05 08:01:08', '2015-08-05 08:01:08'),
(7, 'the domain', 'for domain', 2, '2015-08-05 12:32:12', '2015-08-05 12:32:12'),
(8, 'Domain Four', 'write here', 4, '2015-08-05 16:29:00', '2015-08-05 16:29:00'),
(9, 'Domain five', 'Description five', 5, '2015-08-05 17:11:09', '2015-08-05 17:11:09'),
(10, 'Industrial Domain here', 'About industrial ', 1, '2015-08-12 05:33:53', '2015-08-12 05:33:53'),
(11, 'how ', 'how is how', 1, '2015-08-12 17:35:01', '2015-08-12 17:35:01'),
(12, 'old domain', 'its an old domain', 5, '2015-08-14 10:38:08', '2015-08-14 10:38:08'),
(13, 'new domain', 'From the new script', 1, '2015-08-14 10:52:49', '2015-08-14 10:52:49'),
(14, 'hajjdc', 'm  cxnm mxc', 1, '2015-08-17 11:18:21', '2015-08-17 11:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE IF NOT EXISTS `officers` (
`officer_id` int(10) unsigned NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `displayname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bureau_id` int(10) unsigned DEFAULT NULL,
  `school_id` int(10) unsigned DEFAULT NULL,
  `user_account_id` int(11) unsigned DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`officer_id`, `firstname`, `middlename`, `lastname`, `displayname`, `gender`, `qualification`, `title`, `email`, `telephone`, `mobile`, `website`, `bureau_id`, `school_id`, `user_account_id`, `updated_at`) VALUES
(1, 'Elipokea eeee', 'mosses', 'Shio', 'Shio', '', 'Doctor', 'Title', 'email.@gmail.com', '0222410467', '29856096', 'website.com', 1, 1, 1, '2015-07-16 03:06:32'),
(3, 'Ally', 'Hashim', 'Nabeel', 'Nabeel Hashim', 'M', '', '', '', '', '', '', NULL, 1, 3, '2015-07-20 12:45:46'),
(4, 'Aisha', 'Kareem', 'Abdul', 'aisha', 'Female', '', '', '', '', '', '', 4, NULL, 6, '2015-07-24 05:16:27'),
(6, 'first', 'middle', 'last', 'last', 'male', 'Dr', 'title', 'inocentvicent@gmail.com', '768433', '93474323', 'websiteburea', 1, 1, 1, '2015-08-05 11:04:21'),
(7, 'Doris', 'kinabo', 'Kinabo', 'doris', 'female', 'tutor', 'title', 'doreen@gmail.com', '072344', '654785487', 'websiteburea', 1, 3, 4, '2015-08-06 11:55:49'),
(8, 'Jackson', 'Rashid', 'Alois', 'alois', 'male', 'Doctor', 'Title', 'email.@gmail.com', '27664439', '7574839000', 'website.com', 1, 3, 2, '2015-08-10 06:26:35'),
(10, 'Ansger', 'mosses', 'Laizer', 'doris', 'male', 'ddeded', 'erwrw', 'wses', 'qwww', '4322222222222', 'website.com', 1, 3, NULL, '2015-08-13 09:33:06'),
(11, 'Nicholaus', 'bravo', 'Bobpa', 'bravo', 'male', 'Engineering', 'Title', 'doreen@gmail.com', '094732', '0438473', 'website.com', 4, 5, NULL, '2015-08-13 10:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`payment_id` int(10) unsigned NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `installment_number` int(11) NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `amount`, `description`, `installment_number`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 20000000, 'For Shule Project', 1, 3, '2015-07-28 09:44:07', '2015-07-28 09:44:07'),
(2, 40000000, 'For HIV/AIDS Project', 1, 2, '2015-07-28 09:44:58', '2015-07-28 09:44:58'),
(4, 300000, 'for project', 2, 3, '2015-08-05 07:40:15', '2015-08-05 07:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`project_id` int(10) unsigned NOT NULL,
  `project_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `client_contacts` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `project_type_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days` int(11) NOT NULL,
  `total_amount` int(11) unsigned NOT NULL,
  `project_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `project_sector_id` int(10) unsigned NOT NULL,
  `project_bureau_id` int(10) unsigned DEFAULT NULL,
  `project_school_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_number`, `project_name`, `client_name`, `client_contacts`, `project_type_id`, `start_date`, `end_date`, `days`, `total_amount`, `project_status`, `project_sector_id`, `project_bureau_id`, `project_school_id`, `created_at`, `updated_at`) VALUES
(2, '1', 'HIV/AIDS', 'Company', 'P.O BOX 1234', '456347YU', '2015-07-01', '2015-07-31', 0, 40000000, 'completed', 1, 4, NULL, '2015-07-16 03:00:11', '2015-07-16 03:00:11'),
(3, '2015/07/1', 'SHULE', 'MoVET', 'P.O.BOX 123', '', '2015-06-01', '2015-09-30', 0, 20000000, 'On going', 1, NULL, 1, '2015-07-20 13:17:27', '2015-07-20 13:17:27'),
(4, '2345', 'Building Construction', 'mosses', '3455666', 'ERT3455', '2015-08-07', '2015-08-09', 56, 900000, 'ongoing', 1, 1, 1, '2015-08-05 15:54:51', '2015-08-05 15:54:51'),
(5, '2342', 'Pname', 'client One', '566778979', '78669', '2015-08-15', '2015-08-29', 24, 230000000, '0ngoin', 1, 1, 1, '2015-08-10 08:40:25', '2015-08-10 08:40:25'),
(6, '45663JUL', 'NEW', 'client two', '73568391', '56747', '2015-08-12', '2015-08-14', 45, 800000, 'ongoing', 1, 1, 1, '2015-08-12 09:26:47', '2015-08-12 09:26:47'),
(7, '3457', 'New project', 'Inocent', 'Mwanza', '453ST', '2015-08-13', '2015-08-29', 34, 400000, 'Complete', 1, 1, 1, '2015-08-13 07:10:52', '2015-08-13 07:10:52'),
(8, '12343', 'Hospital', 'Ministry of Healthy', '13423 health', 'socila', '2015-08-22', '2015-08-18', 450, 900000000, 'Ongoing', 1, 1, 4, '2015-08-14 10:04:17', '2015-08-14 10:04:17'),
(9, 'tteyeyw', 'Laboratory', 'ministry of Healty', '4474', '743438TY', '1899-12-05', '1899-12-13', 89, 800000, 'Ongoing', 1, 1, 1, '2015-08-18 09:13:10', '2015-08-18 09:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
`school_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shortname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `extension` int(11) NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `directline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tweeter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gplus` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bureau_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `name`, `shortname`, `address`, `telephone`, `extension`, `fax`, `directline`, `email`, `website`, `facebook`, `tweeter`, `gplus`, `youtube`, `linkedin`, `skype`, `bureau_id`, `created_at`, `updated_at`) VALUES
(1, 'University of Dar es Salaam Business School', 'UDBS', 'P.O BOX 234', '0221092322', 0, '+255222410410', '+255224142543', 'udbs@udsm.ac.tz', 'www.udbs.com', 'udbsfacebook', 'udbstweet', 'udbsgplus', 'http://udbslive', 'udbslinkedin', 'udbsskype', 2, '2015-07-15 17:03:11', '2015-07-15 17:03:11'),
(3, 'College of Information and Communication Technology', 'CoICT', '', '', 0, '', '', '', '', '', '', '', '', '', '', 1, '2015-07-15 17:06:12', '2015-07-15 17:06:12'),
(4, 'College of Engineering and Technology', 'CoET', 'P.O BOX 13454', '+255343', 0, '+255222414664', '+253333333909', 'coet@udsm.ac.tz', 'www.coet.com', 'coetfacebook', 'coettweet', 'coetgplus', 'http://coetlive', 'coetlinkedin', 'coetskype', 1, '2015-07-15 17:06:12', '2015-07-15 17:06:12'),
(5, 'College of Natural and Applied Science ', 'CoNAS', '', '', 0, '', '', '', '', '', '', '', '', '', '', 4, '2015-07-16 02:46:46', '2015-07-16 02:46:46'),
(6, 'College of Humanities', 'CoHU', 'p.o box 123', '57747373', 0, '86279', '87964', 'cohu@ac.tz', 'www.cohu.com', 'cohufacebook', 'tweetercohu', 'cohugpluss', 'cohuyoutube', 'cohulinkedin', 'cohuskype', 1, '2015-08-05 17:08:02', '2015-08-05 17:08:02'),
(7, 'School of Education', 'SoEd', '2436 arusha', '343546', 2147483647, '233333', '4931493', 'inocentvicent@gmail.com', 'website.com', 'facebookacq', 'tweeter', 'gpluaacq', 'youtube', 'linkedin', 'skype', 1, '2015-08-12 08:40:50', '2015-08-12 08:40:50'),
(8, 'udsm school of law and rules', 'udsol', '123 udsol', '3455', 75389395, '757839', '86943954', 'udsol@gmail.com', 'udsol.co.tz', 'facebookudsol', 'tweeterudsol', 'gplusudsol', 'youtubeudsol', 'linkedinudsol', 'skypeudsol', 1, '2015-08-14 10:00:48', '2015-08-14 10:00:48');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE IF NOT EXISTS `sectors` (
`sector_id` int(10) unsigned NOT NULL,
  `sector_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`sector_id`, `sector_name`, `created_at`, `updated_at`) VALUES
(1, 'Engineering', '2015-07-16 02:59:06', '2015-07-16 02:59:06'),
(2, 'Information communication technology', '2015-07-21 05:42:05', '2015-07-21 05:42:05'),
(3, 'Social science', '2015-07-21 05:42:05', '2015-07-21 05:42:05'),
(4, 'marketing', '2015-08-04 07:39:20', '2015-08-04 07:39:20'),
(5, 'Economics', '2015-08-04 07:39:45', '2015-08-04 07:39:45'),
(6, 'Linguistics', '2015-08-05 11:54:28', '2015-08-05 11:54:28'),
(7, 'Mechanical Engineering', '2015-08-13 05:07:08', '2015-08-13 05:07:08'),
(8, 'Acquatic Science', '2015-08-14 11:09:26', '2015-08-14 11:09:26'),
(9, 'Sector  Edit', '2015-08-17 08:23:35', '2015-08-17 08:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`subject_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector_id` int(10) unsigned NOT NULL,
  `domain_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `name`, `description`, `sector_id`, `domain_id`, `created_at`, `updated_at`) VALUES
(1, 'Civil', 'constructions', 1, 1, '2015-07-28 09:07:11', '2015-07-28 09:07:11'),
(2, 'hewre', 'description', 6, 6, '2015-08-05 16:23:19', '2015-08-05 16:23:19'),
(3, 'Subject One', 'description', 1, 1, '2015-08-05 16:23:48', '2015-08-05 16:23:48'),
(4, 'Mechanical', 'Found here', 1, 1, '2015-08-13 07:02:11', '2015-08-13 07:02:11'),
(5, 'new subject', 'Description', 1, 1, '2015-08-14 10:09:40', '2015-08-14 10:09:40'),
(6, 'subject Name', 'Description here', 3, 8, '2015-08-17 08:25:10', '2015-08-17 08:25:10');

-- --------------------------------------------------------

--
-- Table structure for table `systemusers`
--

CREATE TABLE IF NOT EXISTS `systemusers` (
`user_account_id` int(11) unsigned NOT NULL,
  `user_first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_middle_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `account_password` text COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `systemusers`
--

INSERT INTO `systemusers` (`user_account_id`, `user_first_name`, `user_middle_name`, `user_last_name`, `user_name`, `account_password`, `account_type`, `created_at`, `updated_at`) VALUES
(1, 'Elipokea Mosses', 'Mosses', 'Shio', 'Shio', 'password', 'officer', '2015-07-15 17:25:46', '2015-07-15 17:25:46'),
(2, 'Inocent', 'Vicent', 'Vicent', 'Vicent', 'password', 'consultant', '2015-07-16 02:37:10', '2015-07-16 02:37:10'),
(3, 'Ally', 'Hashim', 'Nabeel', 'nabeel', 'password', 'officer', '2015-07-20 12:44:22', '2015-07-20 12:44:22'),
(4, 'Admin1', 'AdminMiddle1', 'AdminLast1', 'admin1', 'password', 'administrator', '2015-07-22 06:28:14', '2015-07-22 06:28:14'),
(5, 'Amani', 'Upendo', 'Umoja', 'umoja', 'password', 'consultant', '2015-07-22 19:17:29', '2015-07-22 19:17:29'),
(6, 'Aisha', 'Kareem', 'Abdul', 'aisha', 'aisha', 'officer', '2015-07-24 05:08:22', '2015-07-24 05:08:22'),
(7, 'first', 'middle', 'last', 'last', 'officer', 'password', '2015-08-05 10:39:11', '2015-08-05 10:39:11'),
(8, 'Kifua', 'David', 'Wilson', 'kifua', 'officer', 'consultant', '2015-08-13 06:15:00', '2015-08-13 06:15:00'),
(9, 'Hellen', 'David', 'Makalwe', 'hellen', 'consultant', 'consultant', '2015-08-14 11:05:55', '2015-08-14 11:05:55'),
(10, 'File ', 'file two ', 'data', 'hdjksfhsdkaljf', 'officer', 'consultant', '2015-08-17 07:45:45', '2015-08-17 07:45:45'),
(11, 'Aaliyah', 'Ally', 'Bitebo', 'aaliyah', 'waukweli', 'officer', '2015-08-18 11:07:38', '2015-08-18 11:07:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bureaus`
--
ALTER TABLE `bureaus`
 ADD PRIMARY KEY (`bureau_id`);

--
-- Indexes for table `competences`
--
ALTER TABLE `competences`
 ADD PRIMARY KEY (`competence_id`), ADD KEY `index_subject_sector_id` (`sector_id`), ADD KEY `index_competence_domain_id` (`domain_id`), ADD KEY `index_competence_subject_id` (`subject_id`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
 ADD PRIMARY KEY (`consultant_id`), ADD KEY `index_consultant_department_id` (`department_id`), ADD KEY `index_consultant_user_id` (`user_account_id`);

--
-- Indexes for table `consultant_competence`
--
ALTER TABLE `consultant_competence`
 ADD PRIMARY KEY (`consultant_competence_id`), ADD KEY `index_consultant_id` (`consultant_id`), ADD KEY `index_competence_id` (`competence_id`);

--
-- Indexes for table `consultant_project`
--
ALTER TABLE `consultant_project`
 ADD PRIMARY KEY (`consultant_project_id`), ADD KEY `index_cons_proj_consultant_id` (`cons_proj_consultant_id`), ADD KEY `index_cons_proj_project_id` (`cons_proj_project_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`department_id`), ADD KEY `index_dept_school_id` (`school_id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
 ADD PRIMARY KEY (`domain_id`), ADD KEY `index_sector_id` (`sector_id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
 ADD PRIMARY KEY (`officer_id`), ADD KEY `index_officer_bureau_id` (`bureau_id`), ADD KEY `index_officer_school_id` (`school_id`), ADD KEY `index_officer_user_id` (`user_account_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`payment_id`), ADD KEY `index_payment_project_id` (`project_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`project_id`), ADD KEY `index_project_bureau_id` (`project_bureau_id`), ADD KEY `index_project_school_id` (`project_school_id`), ADD KEY `index_project_sector_id` (`project_sector_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
 ADD PRIMARY KEY (`school_id`), ADD KEY `index_bureau_school_id` (`bureau_id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
 ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`subject_id`), ADD KEY `index_subject_sector_id` (`sector_id`), ADD KEY `index_subject_domain_id` (`domain_id`);

--
-- Indexes for table `systemusers`
--
ALTER TABLE `systemusers`
 ADD PRIMARY KEY (`user_account_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bureaus`
--
ALTER TABLE `bureaus`
MODIFY `bureau_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `competences`
--
ALTER TABLE `competences`
MODIFY `competence_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
MODIFY `consultant_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `consultant_competence`
--
ALTER TABLE `consultant_competence`
MODIFY `consultant_competence_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consultant_project`
--
ALTER TABLE `consultant_project`
MODIFY `consultant_project_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `department_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
MODIFY `domain_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
MODIFY `officer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `payment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `project_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
MODIFY `school_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
MODIFY `sector_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `subject_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `systemusers`
--
ALTER TABLE `systemusers`
MODIFY `user_account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `competences`
--
ALTER TABLE `competences`
ADD CONSTRAINT `FK_competence_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `domains` (`domain_id`),
ADD CONSTRAINT `FK_competence_sector_id` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`sector_id`),
ADD CONSTRAINT `FK_competence_subject_id` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`);

--
-- Constraints for table `consultants`
--
ALTER TABLE `consultants`
ADD CONSTRAINT `FK_consultant_department_id` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`),
ADD CONSTRAINT `FK_consultant_user_id` FOREIGN KEY (`user_account_id`) REFERENCES `systemusers` (`user_account_id`);

--
-- Constraints for table `consultant_competence`
--
ALTER TABLE `consultant_competence`
ADD CONSTRAINT `FK__competence_id` FOREIGN KEY (`competence_id`) REFERENCES `competences` (`competence_id`),
ADD CONSTRAINT `FK_consultant_id` FOREIGN KEY (`consultant_id`) REFERENCES `consultants` (`consultant_id`);

--
-- Constraints for table `consultant_project`
--
ALTER TABLE `consultant_project`
ADD CONSTRAINT `FK_cons_proj_consultant_id` FOREIGN KEY (`cons_proj_consultant_id`) REFERENCES `consultants` (`consultant_id`),
ADD CONSTRAINT `FK_cons_proj_project_id` FOREIGN KEY (`cons_proj_project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
ADD CONSTRAINT `FK_school_id` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`);

--
-- Constraints for table `domains`
--
ALTER TABLE `domains`
ADD CONSTRAINT `FK_domain_sector_id` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`sector_id`);

--
-- Constraints for table `officers`
--
ALTER TABLE `officers`
ADD CONSTRAINT `FK_officer_bureau_id` FOREIGN KEY (`bureau_id`) REFERENCES `bureaus` (`bureau_id`),
ADD CONSTRAINT `FK_officer_school_id` FOREIGN KEY (`school_id`) REFERENCES `schools` (`school_id`),
ADD CONSTRAINT `FK_officer_user_id` FOREIGN KEY (`user_account_id`) REFERENCES `systemusers` (`user_account_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
ADD CONSTRAINT `FK_payment_project_id` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
ADD CONSTRAINT `FK_project_bureau_id` FOREIGN KEY (`project_bureau_id`) REFERENCES `bureaus` (`bureau_id`),
ADD CONSTRAINT `FK_project_school_id` FOREIGN KEY (`project_school_id`) REFERENCES `schools` (`school_id`),
ADD CONSTRAINT `FK_project_sector_id` FOREIGN KEY (`project_sector_id`) REFERENCES `sectors` (`sector_id`);

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
ADD CONSTRAINT `FK_bureau_id` FOREIGN KEY (`bureau_id`) REFERENCES `bureaus` (`bureau_id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
ADD CONSTRAINT `FK_subject_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `domains` (`domain_id`),
ADD CONSTRAINT `FK_subject_sector_id` FOREIGN KEY (`sector_id`) REFERENCES `sectors` (`sector_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
