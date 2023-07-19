-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 10:30 AM
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
  `job_salary` varchar(255) DEFAULT NULL,
  `submit_by1` varchar(255) DEFAULT NULL,
  `submit_by2` varchar(255) DEFAULT NULL,
  `submit_by3` varchar(255) DEFAULT NULL,
  `submit_by4` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(1023) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `application_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `job_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jobhistory`
--

-- INSERT INTO `jobhistory` (`id`, `company_name`, `job_position`, `job_salary`, `submit_by1`, `submit_by2`, `submit_by3`, `submit_by4`, `description`, `location`, `address`, `link`, `application_date`, `job_status`) VALUES
-- (1, 'MEET SOFTWARE CO., LTD', 'Software developer', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-21 17:00:00', 'rejected'),
-- (2, 'บริษัท ไดเวอร์ซิชั่น (Diversition) สาขาเชียงใหม่', 'PHP Programmer', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-23 17:00:00', 'rejected'),
-- (3, 'บริษัท ดูดีอินดีด คอร์ปอเรชั่น', 'Front-End Developer', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-26 17:00:00', 'applied'),
-- (4, 'IT-CAT', 'Programmer', NULL, '', NULL, NULL, NULL, 'ไม่ได้ส่ง, บริษัทติดต่อมาเองผ่าน JobThai', NULL, NULL, NULL, '2023-07-03 17:00:00', 'applied'),
-- (5, 'Golden Hour Studio', 'Junior Front-end  Developer', NULL, '', NULL, NULL, NULL, 'ส่งผ่านไลน์', NULL, NULL, NULL, '2023-07-04 17:00:00', 'applied'),
-- (6, 'บริษัท อินเตอร์เน็ตประเทศไทย จำกัด(มหาชน)', 'Programmer / Developer', '-', 'Email', NULL, 'JobThai', NULL, 'Email (JobThai) \r\nประจำสาขาเชียงใหม่ ฝน (065-512-4932)\r\nhttps://www.jobthai.com/th/job/1082395', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3497.735717763598!2d98.93569638912474!3d18.764069765713906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3a6e0b88a5fb%3A0x31f00df790402cf9!2sSTeP%20-%20Science%20and%20Technology%20Park!5e0!3m2!1sth!2sth!4v1689329525583!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'บริษัท อินเทอร์เน็ตประเทศไทย จำกัด (มหาชน) 1768 อาคารไทยซัมมิท ทาวเวอร์ ชั้น 10-12 และชั้น IT ถ.เพชรบุรีตัดใหม่ แขวงบางกะปิ เขตห้วยขวาง กรุงเทพมหานคร 10310', 'https://www.inet.co.th/', '2023-06-26 17:00:00', 'contacted_back'),
-- (7, 'LFFINTECH CO., LTD.', 'Back-End Developer', NULL, '', NULL, NULL, NULL, '-', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1442.1515437870544!2d98.97315509741283!3d18.813221446965947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3b88a3c4384b%3A0x27948c945ac8d884!2z4Lia4Lij4Li04Lip4Lix4LiXIOC5geC4reC4peC5gOC4reC4n-C4n-C4tOC4meC5gOC4l-C4hCDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1689330627027!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'เลขที่ 181/276 หมู่ 3 ถ.โพธาราม ต.ช้างเผือก อ.เมือง จ.เชียงใหม่ 50300', 'https://lffintech.co.th/', '2023-07-06 17:00:00', 'applied'),
-- (8, 'Wewebplus.com', 'PHP Programmer ( สัญญาจ้าง 2 เดือน )', NULL, '', NULL, NULL, NULL, 'WFH JobThai', NULL, NULL, NULL, '2023-07-08 17:00:00', 'applied'),
-- (9, 'THiNKNET Co., Ltd.', 'Software Engineer (DevOps)', '25000-70000', 'Email', NULL, 'JobThai', NULL, 'WFH 95% + Office 5%\r\nEmail (JobThai)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d749.390959492167!2d98.97421537668656!3d18.81178386511575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3b9a22463921%3A0x67ca1fa94ee2f6f3!2sThinknet!5e0!3m2!1sth!2sth!4v1689330067521!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'บริษัท ทิงค์เน็ต จำกัด (สาขาเชียงใหม่) เลขที่ 114/3 ถนนซุปเปอร์ไฮเวย์ ซอยโพธาราม 1 ตำบลช้างเผือก อำเภอเมืองเชียงใหม่ เชียงใหม่ 50300', 'https://www.thinknet.co.th/', '2023-07-08 17:00:00', 'contacted_back'),
-- (10, 'บริษัท ดิจิทัล วัลเลย์ จำกัด', 'Fullstack Developer ( PHP / Laravel )', NULL, '', NULL, NULL, NULL, 'WFH (JobThai)', NULL, NULL, NULL, '2023-07-09 17:00:00', 'applied'),
-- (11, 'บริษัท ไอคอนเน็คมาร์เก็ตติ้ง จำกัด', 'Developer', NULL, '', NULL, NULL, NULL, 'WFH (JobThai)', NULL, NULL, NULL, '2023-07-09 19:36:00', 'applied'),
-- (12, 'ธนาคาร ซีไอเอ็มบี ไทย จำกัด (มหาชน)', 'Java / Mobile Developer (Chiang Mai)', NULL, '', NULL, NULL, NULL, 'ส่งเฉพาะ JobThai', NULL, NULL, NULL, '2023-07-09 19:44:00', 'applied'),
-- (13, 'บริษัท ค.เคหะภัณฑ์', 'Web Programmer', NULL, '', NULL, NULL, NULL, 'Mail (JobNorth)', NULL, NULL, NULL, '2023-07-11 19:38:00', 'applied'),
-- (14, 'บริษัท โลจิคตอน จำกัด', 'PHP Website Programmer', NULL, '', NULL, NULL, NULL, 'Email (JobNorth)', NULL, NULL, NULL, '2023-07-11 19:51:00', 'applied'),
-- (15, 'บริษัท กาญจน์กนก พร็อพเพอร์ตี้ จำกัด', 'Full Stack Web Developer', NULL, '', NULL, NULL, NULL, 'Email (JobNorth)', NULL, NULL, NULL, '2023-07-11 20:08:00', 'applied'),
-- (16, 'บริษัท เดอะไลฟอาย จำกัด', 'Junior Programmer', '13000-15000', 'Email', 'JobNorth', NULL, NULL, 'Email (JobNorth) อยากได้เงินเดือน 16000-20000\r\nhttps://www.jobnorththailand.com/job/877138', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d944.4726978272743!2d99.03084917945357!3d18.758414499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da2fb37ec7479b%3A0xf37e7101c9eb092e!2z4LmA4LiU4Lit4Liw4LmE4Lil4Lif4Lit4Liy4Lii!5e0!3m2!1sth!2sth!4v1689330380273!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '50 หมู่ 4 ตำบลท่าศาลา อำเภอเมืองเชียงใหม่ จังหวัดเชียงใหม่, เชียงใหม่', 'https://www.theliveeye.com/', '2023-07-15 14:50:50', 'contacted_back'),
-- (17, 'บริษัท ไดเวอร์ซิชั่น (Diversition) สาขาเชียงใหม่', 'Frontend Web Developer', NULL, '', NULL, NULL, NULL, 'ส่งเฉพาะ JobNorth', NULL, NULL, NULL, '2023-07-11 22:22:00', 'applied'),
-- (18, 'บริษัท อินโนนิตี้ จำกัด', 'Full Stack Programmer (Flutter)', NULL, '', NULL, NULL, NULL, 'Email 25000-35000', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6729.840393676074!2d99.01582477768369!3d18.798360724761675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da25814e911075%3A0xf404729c76f7f198!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4reC4tOC4meC5guC4meC4meC4tOC4leC4teC5iSDguIjguLPguIHguLHguJQ!5e0!3m2!1sth!2sth!4v1689204145755!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '161/81 ต.หนองป่าครั่ง อ.เมืองเชียงใหม่ จ.เชียงใหม่ 50000, เชียงใหม่', 'https://www.jobnorththailand.com/job/888548', '2023-07-11 22:58:00', 'applied'),
-- (19, 'บริษัท เนเวอร์สลีป จำกัด', 'Programmer', NULL, '', NULL, NULL, NULL, 'Email (JobNorth)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17625.239999639747!2d98.95150410995294!3d18.785533689175054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da3b3487bc5d7b%3A0xdc4d4833433c7682!2sNever%20Sleep!5e0!3m2!1sth!2sth!4v1689198500778!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '184 หมู่ 10 ต.สุเทพ อ.เมืองเชียงใหม่ จ.เชียงใหม่, เชียงใหม่', 'https://www.facebook.com/neversleepcoltd/', '2023-07-12 15:42:00', 'applied'),
-- (20, 'Humanica', 'Front-End Developer', '20000-22000', NULL, NULL, NULL, 'Other', 'พี่ส่งให้', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2120.204960067379!2d98.93640543354597!3d18.76355639840966!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da30b994caf679%3A0x276bc591019cfd74!2z4Lit4Li44LiX4Lii4Liy4LiZ4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmM4Lig4Liy4LiE4LmA4Lir4LiZ4Li34Lit!5e0!3m2!1sth!2sth!4v1689754785309!5m2!1sth!2sth\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'อาคารอำนวยการอุทยานวิทยาศาสตร์ภาคเหนือ (จังหวัดเชียงใหม) 155 หมู่ 2 ตำบลแม่เหียะ อำเภอเมือง จังหวัดเชียงใหม่ 50100', 'https://step.cmu.ac.th/NSP/contact.php', '2023-07-15 15:39:00', 'hired');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
