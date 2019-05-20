-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 20, 2019 at 05:15 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databoard`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdgstage`
--

CREATE TABLE `pdgstage` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `reg_number` varchar(16) NOT NULL,
  `department` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `sudoe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `pdgstage`
--

INSERT INTO `pdgstage` (`id`, `full_name`, `reg_number`, `department`, `email`, `phone`, `file_name`, `sudoe`) VALUES
(11, 'chima prosper ukoma', '20151010176', '1', 'chimaprosperukoma@gmail.com', '07064749857', 'REMOTE SENSING (1).pptx', 'f1b4febdba249f48747413c5d10862a9.pptx'),
(19, 'Ifejianyi Henry', '08158672452', '1', 'oladokunoluwasegun@gmail.com', '8158672452', 'f1b4febdba249f48747413c5d10862a9 (1).pptx', 'cdbbbf53a8bbb0ef1d6ee8ef26c953a4.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `pgdstage1`
--

CREATE TABLE `pgdstage1` (
  `id` int(10) NOT NULL,
  `full_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `reg_number` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET latin1 NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `pgdstg1`
--

CREATE TABLE `pgdstg1` (
  `id` int(11) NOT NULL,
  `full_name` varchar(35) NOT NULL,
  `reg_number` int(11) NOT NULL,
  `department` varchar(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `ppt_file` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(212, 'chima prosper ukoma', 'chimaprosperukoma@gmail.com', 'I love jesus'),
(213, '', '', ''),
(233, 'chima prosper ukoma', 'chimaprosperukoma@gmail.com', 'google my name'),
(234, 'chima prosper ukoma', 'chimaprosperukoma@gmail.com', 'google my name'),
(235, '', '', ''),
(236, '', '', ''),
(237, '', '', ''),
(238, 'Ifejianyi', 'oladokunoluwasegun@gmail.com', 'ok'),
(239, '', '', ''),
(240, 'chima prosper ukoma', 'chimaprosperukoma@gmail.com', 'send\r\n'),
(241, '', '', ''),
(242, '', '', ''),
(243, '', '', ''),
(244, '', '', ''),
(245, '', '', ''),
(246, '', '', ''),
(247, '', '', ''),
(248, '', '', ''),
(249, '', '', ''),
(250, '', '', ''),
(251, '', '', ''),
(252, '', '', ''),
(253, '', '', ''),
(254, '', '', ''),
(255, '', '', ''),
(256, '', '', ''),
(257, '', '', ''),
(258, '', '', ''),
(259, '', '', ''),
(260, '', '', ''),
(261, '', '', ''),
(262, '', '', ''),
(263, '', '', ''),
(264, '', '', ''),
(265, '', '', ''),
(266, '', '', ''),
(267, '', '', ''),
(268, '', '', ''),
(269, '', '', ''),
(270, '', '', ''),
(271, '', '', ''),
(272, '', '', ''),
(273, '', '', ''),
(274, '', '', ''),
(275, '', '', ''),
(276, '', '', ''),
(277, '', '', ''),
(278, '', '', ''),
(279, '', '', ''),
(280, '', '', ''),
(281, '', '', ''),
(282, '', '', ''),
(283, '', '', ''),
(284, '', '', ''),
(285, '', '', ''),
(286, '', '', ''),
(287, '', '', ''),
(288, '', '', ''),
(289, '', '', ''),
(290, '', '', ''),
(291, '', '', ''),
(292, '', '', ''),
(293, '', '', ''),
(294, '', '', ''),
(295, '', '', ''),
(296, '', '', ''),
(297, '', '', ''),
(298, '', '', ''),
(299, '', '', ''),
(300, '', '', ''),
(301, '', '', ''),
(302, '', '', ''),
(303, '', '', ''),
(304, '', '', ''),
(305, '', '', ''),
(306, '', '', ''),
(307, '', '', ''),
(308, '', '', ''),
(309, '', '', ''),
(310, '', '', ''),
(311, '', '', ''),
(312, '', '', ''),
(313, '', '', ''),
(314, '', '', ''),
(315, '', '', ''),
(316, '', '', ''),
(317, '', '', ''),
(318, '', '', ''),
(319, '', '', ''),
(320, '', '', ''),
(321, '', '', ''),
(322, '', '', ''),
(323, '', '', ''),
(324, '', '', ''),
(325, '', '', ''),
(326, '', '', ''),
(327, '', '', ''),
(328, '', '', ''),
(329, '', '', ''),
(330, '', '', ''),
(331, '', '', ''),
(332, '', '', ''),
(333, '', '', ''),
(334, '', '', ''),
(335, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdgstage`
--
ALTER TABLE `pdgstage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgdstage1`
--
ALTER TABLE `pgdstage1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgdstg1`
--
ALTER TABLE `pgdstg1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdgstage`
--
ALTER TABLE `pdgstage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pgdstage1`
--
ALTER TABLE `pgdstage1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
