-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2016 at 07:01 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.6.27-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_grosir`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `jabatan`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'yogi putra', 'oohyugi', 'mail.yogiputra@gmail.com', 'Super Admin', '$2y$10$rrqTgFA7g4UCFr.5U.OrfePK5ijUupPn3Qc.Az5li3VNcOGJ.GJci', '4M7ssvq8upzF780QA2wq0IHaqOPRJkj8oPjh1fnnf0KZp0xiw5WF6diTxgbY', '2016-11-05 21:50:06', '2016-11-12 03:38:35'),
(5, 'member', 'membeer', 'member@g.c', 'karyawan', '$2y$10$0sCNbyNpUQhrtCrG6X6S9uU2Bx6if4H2a.h92O/qkXuSjoYQ5UhMW', '2qMLI9eamshujgW5RqSnhnbSXs2agenqROhf2ETnZY1En04zAnh5KKFJOcCJ', '2016-11-05 23:55:14', '2016-11-12 03:29:39'),
(6, 'test', 'test1', 'test@test.test', 'karyawan', '12345', NULL, '2016-11-12 04:13:22', '2016-11-12 04:13:22'),
(8, 'testlagi', 'testlagi', 'testt@test.test', 'karyawan', '12345', NULL, '2016-11-12 04:18:02', '2016-11-12 04:18:02'),
(9, 'testlagi', 'testlagi11', 'testtt@test.testt', 'Super Admin', '12345', NULL, '2016-11-12 04:29:42', '2016-11-12 04:29:42'),
(10, 'qwerty', 'qwerty', 'qw@q.c', 'karyawan', '12345', NULL, '2016-11-12 04:35:11', '2016-11-12 04:35:11'),
(11, 'qwerty', 'qwertyq', 'qw@q.cc', 'karyawan', '12345', NULL, '2016-11-12 04:38:54', '2016-11-12 04:38:54'),
(12, 'qwertyq', 'qwertyqq', 'qw@q.ccq', 'karyawan', '12345', NULL, '2016-11-12 04:41:38', '2016-11-12 04:41:38'),
(13, 'qwertyqq', 'qwertyqqqq', 'qw@q.ccqs', 'karyawan', '12345', NULL, '2016-11-12 04:52:04', '2016-11-12 04:52:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
