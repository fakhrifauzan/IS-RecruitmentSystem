-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 06:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id_submission` int(11) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_vacancy` int(4) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `verified` int(4) NOT NULL DEFAULT '0',
  `website` varchar(150) DEFAULT NULL,
  `linkedin` varchar(150) DEFAULT NULL,
  `github` varchar(150) DEFAULT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `recommendation` varchar(150) NOT NULL,
  `in_review` tinyint(4) NOT NULL DEFAULT '0',
  `interview` tinyint(4) NOT NULL DEFAULT '0',
  `offer` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id_submission`, `id_user`, `id_vacancy`, `resume`, `verified`, `website`, `linkedin`, `github`, `facebook`, `twitter`, `recommendation`, `in_review`, `interview`, `offer`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '1_RESUME_10.pdf', 0, 'http://asss.ms', NULL, NULL, NULL, NULL, 'Si Maverick', 0, 0, 0, '2018-04-20 21:38:45', '2018-04-20 21:38:45'),
(2, 11, 1, '[1]_RESUME_11.pdf', 1, 'http://asss.ms', NULL, NULL, NULL, NULL, 'Si Pengamat', 1, 0, 0, '2018-04-21 10:01:35', '2018-04-21 10:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `location` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `location`, `phone`, `role`, `created_at`, `updated_at`) VALUES
(1, 'fakhrifauzan', '831ba08bf21deb86d0dc2b2f5c77f477', 'Fakhri', 'Fauzan', 'fazan697@gmail.com', 'Tangerang Selatan', '08567018044', 2, '2018-04-20 18:56:25', '0000-00-00 00:00:00'),
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'WAWAN', 'BC HIKMAT', 'admin@proyeklangit.id', 'Bandung', '21321132', 0, '2018-04-20 19:58:13', '2018-04-20 19:58:13'),
(11, 'maurice', 'e10adc3949ba59abbe56e057f20f883e', 'MAURICE', 'FIKRY', 'maurice@gmail.com', 'Bandung', '085245885332', 0, '2018-04-21 10:00:03', '2018-04-21 10:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id_vacancy` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `job_desc` text NOT NULL,
  `qualifications` text NOT NULL,
  `additional` text,
  `location` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id_vacancy`, `title`, `job_desc`, `qualifications`, `additional`, `location`, `type`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Data Analyst', 'Kepoooo', 'Kepooo', NULL, 'Jakarta', 'Internship', 1, 1, '2018-04-20 21:51:02', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id_submission`),
  ADD KEY `submission_user` (`id_user`),
  ADD KEY `submission_vacancy` (`id_vacancy`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id_vacancy`),
  ADD KEY `vacancy_user` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `submission`
--
ALTER TABLE `submission`
  MODIFY `id_submission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id_vacancy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `submission_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `submission_vacancy` FOREIGN KEY (`id_vacancy`) REFERENCES `vacancy` (`id_vacancy`);

--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_user` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
