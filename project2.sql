-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 06:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_part_1`
--

CREATE TABLE `about_part_1` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `text_box` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_part_1`
--

INSERT INTO `about_part_1` (`id`, `text`, `text_box`) VALUES
(1, 'about to me', 'adfsf sdf asdf asdfas dfasdfasdf fdsfdsfdsfsdfwfasdfsdfa dfasdfasdfadsfa faf');

-- --------------------------------------------------------

--
-- Table structure for table `about_part_2`
--

CREATE TABLE `about_part_2` (
  `id` int(11) NOT NULL,
  `heading_forth` varchar(255) NOT NULL,
  `heading_frist` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `saying` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_part_2`
--

INSERT INTO `about_part_2` (`id`, `heading_forth`, `heading_frist`, `name`, `post`, `saying`) VALUES
(1, 'SAD ASDasd aqcwee Ddsadfd ', ' ASDADsa asd asdsadasqW ASD ', 'SDF SFSFSSADFSAF', 'teachers', 'SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Ddsadfd SAD ASDasd aqcwee Dds');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `image`) VALUES
(1, 'admin', 'admin@gmail.com', '123132132', '21232f297a57a5a743894a0e4a801fc3', 'WhatsApp_Image_2023-02-27_at_20_50_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_course`
--

CREATE TABLE `admin_course` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_course`
--

INSERT INTO `admin_course` (`id`, `heading`, `paragraph`) VALUES
(1, 'courses', ' skdf skdfsnvj snvjsdnlsd fnsakdf nksjdfnsf sdnfsadf nskdfj');

-- --------------------------------------------------------

--
-- Table structure for table `admin_course_part2`
--

CREATE TABLE `admin_course_part2` (
  `id` int(11) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `coursepart` varchar(255) NOT NULL,
  `courseprice` varchar(255) NOT NULL,
  `text_area` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_course_part2`
--

INSERT INTO `admin_course_part2` (`id`, `coursename`, `coursepart`, `courseprice`, `text_area`, `photo`) VALUES
(10, 'awkj vwwfwk f,dmsfnsdkf msdf ', 'sdf m,sfns sdlfsdlfkf sdfdsaf ', '1000', 'sfk ksdf sdfsdfkasldf v,sdfmosdf ds,fjsokd wef sdfjsdf sd,lflo sflsdakfj osdfa', 'Learn-Ethical-Hacking-from-Scratch-23-Value-FREE-For-a-Limited-Time-eBook_112.png'),
(13, 'dfadf sdf sdfasdf sfsa dfasdf', 'sfdsf asdfasdf sd', '100$', 'awdf vsdfadfas dfasfsdafsadfasdf', 'Advanced-excel_210.jpg'),
(14, 'web development', 'web designing', '2000', 'jdnf kdf sdkfjdfnaskjfjsd fmksnkdfsdf sdfskdfjsdnkfkajnfkdsfkasfsdan kfjsadfas jksdafd knsdfk ', 'Advanced-excel_211.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_traner`
--

CREATE TABLE `admin_traner` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_traner`
--

INSERT INTO `admin_traner` (`id`, `heading`, `paragraph`) VALUES
(1, 'trainer', 'When pursuing or facilitating learning, referencing quotes from well-known sources can provide insight and inspiration to you. Quotes that resonate with you can be helpful for gaining perspective on the topic of learning, especially for those involved in\r');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `location_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `heading`, `paragraph`, `email_id`, `email`, `phone`, `phone_number`, `location_name`, `address`, `title`, `title_paragraph`) VALUES
(1, 'contact', 'When pursuing or facilitating learning, referencing quotes from well-known sources can provide insight and inspiration to you. Quotes that resonate with you can be helpful for gaining perspective on the topic of learning, especially for those involved in ', 'rohit@gmail.com', 'rohit@gmail.com', '08824453320', '08824453320', ' fgkjsdgj gier kfdsgkdfjgoien rsgk;dfg ', 'dsfsdfsf fdsf sdf sd', 'join our e-news', 'When pursuing or facilitating learning, referencing quotes from well-known sources can provide insight and inspiration to you. Quotes that resonate with you can be helpful for gaining perspective on the topic of learning, especially for those involved in ');

-- --------------------------------------------------------

--
-- Table structure for table `events_admin_part_frist`
--

CREATE TABLE `events_admin_part_frist` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_admin_part_frist`
--

INSERT INTO `events_admin_part_frist` (`id`, `heading`, `paragraph`) VALUES
(1, 'events details', 'adjf dsf skadfkska kjsadfnsa kfjdsfkjasdkfjsadnfksadjfkskdaj sakdfj skjdsfkjsdakjf sdkfjjksdf kjsadkjfhksajd kjsfksdjkfj sdfk sdkfkjs dhjfhdsa ');

-- --------------------------------------------------------

--
-- Table structure for table `events_admin_part_seconds`
--

CREATE TABLE `events_admin_part_seconds` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `timing_details` datetime NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events_admin_part_seconds`
--

INSERT INTO `events_admin_part_seconds` (`id`, `heading`, `timing_details`, `details`, `image`) VALUES
(1, 'dfsdf dfdsafadsf fdsf sasdf', '2023-07-26 14:12:00', 'asdfsadf scsdfafsad dfafsdfasfdafa dsffasdfaa dsf', 'basic-computer-training-banner11.jpg'),
(2, 'sdfasfs sdfadsfasdf saf sdafsdf sdsdf', '2023-07-26 20:14:00', 'afasd fsdfavacasdd dfasdfdfdsfzxsaw fxfzarfr adfsad adfassdfsad sdfaf', 'basic-computer-training-course-500x500_118.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(255) NOT NULL,
  `bgimg` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `heading_frist` varchar(255) NOT NULL,
  `heading_second` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `bgimg`, `text`, `heading_frist`, `heading_second`) VALUES
(1, '2981458_2863_42.jpg', 'A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers.', 'Good thinging', 'adsfsdf dfds d v');

-- --------------------------------------------------------

--
-- Table structure for table `home_part_2`
--

CREATE TABLE `home_part_2` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph_frist` varchar(255) NOT NULL,
  `list_frist` varchar(255) NOT NULL,
  `list_second` varchar(255) NOT NULL,
  `list_third` varchar(255) NOT NULL,
  `paragraph_second` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_part_2`
--

INSERT INTO `home_part_2` (`id`, `heading`, `paragraph_frist`, `list_frist`, `list_second`, `list_third`, `paragraph_second`, `image`) VALUES
(1, 'For other uses, see School (disambiguation). \"Schooling\" redirects here. For the surname, see Schooling (surname).', 'A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers. ', 'The names for these schools vary by country (discussed in the Regional terms section below) ', 'tudents in a given country may also attend schools before and after primary (elementary in the U.S.)', 'University, vocational school, college or seminary may be available after secondary school.', ' such as a school of economics or dance. Alternative schools may provide nontraditional curriculum and methods', '123785_00_2x3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_part_3`
--

CREATE TABLE `home_part_3` (
  `id` int(11) NOT NULL,
  `heading_frist` varchar(255) NOT NULL,
  `paragraph_frist` varchar(255) NOT NULL,
  `servies_frist_heading` varchar(255) NOT NULL,
  `servies_frist_paragraph` varchar(255) NOT NULL,
  `servies_second_heading` varchar(255) NOT NULL,
  `servies_second_paragraph` varchar(255) NOT NULL,
  `servies_third_heading` varchar(255) NOT NULL,
  `servies_third_paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_part_3`
--

INSERT INTO `home_part_3` (`id`, `heading_frist`, `paragraph_frist`, `servies_frist_heading`, `servies_frist_paragraph`, `servies_second_heading`, `servies_second_paragraph`, `servies_third_heading`, `servies_third_paragraph`) VALUES
(1, 'Inspiring Quotes About Learning', 'A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students under the direction of teachers. \r\nA school is an educational institution designed to provide learning spaces and learning en', '7 inspiring quotes', 'When pursuing or facilitating learning, referencing quotes from well-known sources can provide ', 'Motivational quotes', '“Every act of conscious learning requires the willingness to suffer an injury to one\'s self-esteem. That is why young children, before they are aware of their own self-importance, learn so easily.”—Thomas Szasz', 'Famous quotes regarding learning', '“Those people who develop the ability to continuously acquire new and better forms of knowledge that they can apply to their work and to their lives will be the movers and shakers in our society for the indefinite future.”—Brian Tracy');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_part_frist`
--

CREATE TABLE `pricing_part_frist` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing_part_frist`
--

INSERT INTO `pricing_part_frist` (`id`, `heading`, `paragraph`) VALUES
(1, 'pricing details', 'fsdkjfsndkf sdkfj sdfdnsjkfn sajdnf sdf fkj sdjkasfhjsd fsdbfjsdjdnfk sdfhsdkfsdfsd jksdfj sdffsdjf skjdfsjdfsbdfbjksadfjsbdjfksdjhfkjh sdf');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_part_second`
--

CREATE TABLE `pricing_part_second` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pricing` varchar(11) NOT NULL,
  `s_frist` varchar(255) NOT NULL,
  `s_second` varchar(255) NOT NULL,
  `s_third` varchar(255) NOT NULL,
  `s_forth` varchar(255) NOT NULL,
  `s_fifth` varchar(255) NOT NULL,
  `button` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing_part_second`
--

INSERT INTO `pricing_part_second` (`id`, `user`, `pricing`, `s_frist`, `s_second`, `s_third`, `s_forth`, `s_fifth`, `button`) VALUES
(1, 'students', '', 'asdfasfsd', 'dfsa fdsfsadf d', ' df sadffsdfadfsfsdfsd', ' df gfdg dfg df g', ' f gsdfg sdg f dfg', 'updadfsaddfd'),
(3, 'students', '0', 'asdfasfsd', 'dfsa fdsfsadf d', ' df sadffsdfadfsfsdfsd', ' dfsdfsdfsd', ' f gsdfg sdg f dfg', 'updadfsaddfd'),
(4, 'students', '0', 'asdfasfsd', 'dfsa fdsfsadf d', ' df sadffsdfadfsfsdfsd', ' df gfdg dfg df g', ' f gsdfg sdg f dfg', 'updadfsaddfd'),
(5, 'students', '223232', 'asdfasfsd', 'dfsa fdsfsadf d', ' df sadffsdfadfsfsdfsd', ' df gfdg dfg df g', ' f gsdfg sdg f dfg', 'update'),
(6, 'free', '3434', 'asdfasfsd', 'dfsa fdsfsadf d', ' df sadffsdfadfsfsdfsd', ' df gfdg dfg df g', ' f gsdfg sdg f dfg', 'updadfsaddfd'),
(7, 'free', '3434', 'asdfasfsd', 'dfsa fdsfsadf d', ' df sadffsdfadfsfsdfsd', ' df gfdg dfg df g', ' f gsdfg sdg f dfg', 'updadfsaddfd'),
(8, 'free', '3434', 'asdfasfsd', 'dfsa fdsfsadf d', ' df sadffsdfadfsfsdfsd', ' df gfdg dfg df g', ' f gsdfg sdg f dfg', 'updadfsaddfd');

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `id` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincide` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`id`, `student_name`, `father_name`, `dob`, `address`, `sex`, `course`, `city`, `district`, `state`, `pincide`, `email`, `mobile_number`, `photo`) VALUES
(5, 'kakakakakakakkakaakak', 'ramanand shah', '2017-02-07', 'kanpur', 'male', 'B.Tech', 'New Delhi', 'Mumbai', 'Goa', '909090', 'ankitasdfsaf@gmail.com', '9090902323', 'an.png'),
(6, 'rahul', 'lalaram bairwa', '2023-07-25', 'sdfsdfSCD sd wds', 'male', '-1', 'Goa', '-1', 'Patna', 'FweWF', 'ankitnagarwal5@gmail.com', '898977897989', 'WIN_20230120_18_30_23_Pro.jpg'),
(8, 'lokesh', 'asdfsdf ', '2023-07-04', ' dfsdfsaf f fsdf ', 'male', 'B.Tech', 'New Delhi', 'Goa', 'Mumbai', '303303', 'ankitnagarwal0005@gmail.com', '90078766743', 'WhatsApp_Image_2023-05-27_at_22_33_06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_data`
--

CREATE TABLE `teachers_data` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers_data`
--

INSERT INTO `teachers_data` (`id`, `name`, `post`, `salary`, `mobile_number`, `photo`) VALUES
(2, 'kamal', 'teacher', '20000', '8080909089', 'bpn3.jpg'),
(3, 'pintu', 'vp', '30000', '292923939', 'IMG_20221205_220247_324.jpg'),
(6, 'karan', 'frasher', '8000', '2020202030', 'images1.png');

-- --------------------------------------------------------

--
-- Table structure for table `trainers_part_1`
--

CREATE TABLE `trainers_part_1` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `parahraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_part_1`
--
ALTER TABLE `about_part_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_part_2`
--
ALTER TABLE `about_part_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_course`
--
ALTER TABLE `admin_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_course_part2`
--
ALTER TABLE `admin_course_part2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_traner`
--
ALTER TABLE `admin_traner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_admin_part_frist`
--
ALTER TABLE `events_admin_part_frist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_admin_part_seconds`
--
ALTER TABLE `events_admin_part_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_part_2`
--
ALTER TABLE `home_part_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_part_3`
--
ALTER TABLE `home_part_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_part_frist`
--
ALTER TABLE `pricing_part_frist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_part_second`
--
ALTER TABLE `pricing_part_second`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_data`
--
ALTER TABLE `teachers_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers_part_1`
--
ALTER TABLE `trainers_part_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_part_1`
--
ALTER TABLE `about_part_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_part_2`
--
ALTER TABLE `about_part_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_course`
--
ALTER TABLE `admin_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_course_part2`
--
ALTER TABLE `admin_course_part2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_traner`
--
ALTER TABLE `admin_traner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_admin_part_frist`
--
ALTER TABLE `events_admin_part_frist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_admin_part_seconds`
--
ALTER TABLE `events_admin_part_seconds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_part_2`
--
ALTER TABLE `home_part_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_part_3`
--
ALTER TABLE `home_part_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_part_frist`
--
ALTER TABLE `pricing_part_frist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_part_second`
--
ALTER TABLE `pricing_part_second`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students_data`
--
ALTER TABLE `students_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers_data`
--
ALTER TABLE `teachers_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainers_part_1`
--
ALTER TABLE `trainers_part_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
