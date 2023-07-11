-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 01:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_history`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobhistory`
--

CREATE TABLE `jobhistory` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `job_position` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `application_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `job_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jobhistory`
--

INSERT INTO `jobhistory` (`id`, `company_name`, `job_position`, `description`, `application_date`, `job_status`) VALUES
(1, 'MEET SOFTWARE CO., LTD', 'Software developer', NULL, '2023-06-21 17:00:00', 'rejected'),
(2, 'บริษัท ไดเวอร์ซิชั่น (Diversition) สาขาเชียงใหม่', 'PHP Programmer', NULL, '2023-06-23 17:00:00', 'rejected'),
(3, 'บริษัท ดูดีอินดีด คอร์ปอเรชั่น', 'Front-End Developer', NULL, '2023-06-26 17:00:00', 'applied'),
(4, 'IT-CAT', 'Programmer', 'ไม่ได้ส่ง, บริษัทติดต่อมาเองผ่าน JobThai', '2023-07-03 17:00:00', 'applied'),
(5, 'Golden Hour Studio', 'Junior Front-end  Developer', 'ส่งผ่านไลน์', '2023-07-04 17:00:00', 'applied'),
(6, 'บริษัท อินเตอร์เน็ตประเทศไทย จำกัด(มหาชน)', 'Programmer / Developer', NULL, '2023-06-26 17:00:00', 'applied'),
(7, 'LFFINTECH CO., LTD.', 'Back-End Developer', '-', '2023-07-06 17:00:00', 'applied'),
(8, 'Wewebplus.com', 'PHP Programmer ( สัญญาจ้าง 2 เดือน )', 'WFH JobThai', '2023-07-08 17:00:00', 'applied'),
(9, 'THiNKNET Co., Ltd.', 'Software Engineer (DevOps)', 'WFH 95% + Office 5%\r\n(JobThai)', '2023-07-08 17:00:00', 'applied'),
(10, 'บริษัท ดิจิทัล วัลเลย์ จำกัด', 'Fullstack Developer ( PHP / Laravel )', 'WFH (JobThai)', '2023-07-09 17:00:00', 'applied'),
(11, 'บริษัท ไอคอนเน็คมาร์เก็ตติ้ง จำกัด', 'Developer', 'WFH (JobThai)', '2023-07-09 19:36:00', 'applied'),
(12, 'ธนาคาร ซีไอเอ็มบี ไทย จำกัด (มหาชน)', 'Java / Mobile Developer (Chiang Mai)', 'ส่งเฉพาะ JobThai', '2023-07-09 19:44:00', 'applied');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobhistory`
--
ALTER TABLE `jobhistory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobhistory`
--
ALTER TABLE `jobhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
