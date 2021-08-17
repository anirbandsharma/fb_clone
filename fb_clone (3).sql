-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2021 at 09:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fb_clone`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `comment` longtext NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friends_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `friend_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friends_id`, `id`, `friend_id`) VALUES
(1, 1, 1),
(21, 16, 16),
(22, 17, 17),
(23, 18, 18),
(24, 16, 1),
(25, 1, 16),
(26, 1, 18),
(27, 18, 1),
(28, 16, 18),
(29, 18, 16),
(30, 16, 17),
(31, 17, 16),
(32, 17, 18),
(33, 18, 17);

-- --------------------------------------------------------

--
-- Table structure for table `friend_rqst`
--

CREATE TABLE `friend_rqst` (
  `friend_rqst_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `friend_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_rqst`
--

INSERT INTO `friend_rqst` (`friend_rqst_id`, `id`, `friend_id`) VALUES
(18, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(100) NOT NULL,
  `post_id` int(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `post_id`, `id`) VALUES
(29, 38, 1),
(30, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `post_detail` longtext NOT NULL,
  `upload_time` datetime NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `id`, `post_detail`, `upload_time`, `photo`) VALUES
(36, 18, 'post by raju', '2021-08-09 16:45:33', 'uploads/'),
(37, 1, 'hello world!!\r\n', '2021-08-09 19:39:21', 'uploads/'),
(38, 1, 'testing 1 2 3', '2021-08-09 19:39:32', 'uploads/'),
(39, 1, '', '2021-08-10 12:51:16', 'uploads/5ihh0t.jpg'),
(40, 1, 'aaaa', '2021-08-10 12:51:52', 'uploads/'),
(41, 1, 'aaaa', '2021-08-10 12:52:09', 'uploads/5ihh0t.jpg'),
(42, 16, '', '2021-08-13 01:16:58', 'uploads/Screenshot from 2021-08-10 21-40-41.png'),
(43, 16, '', '2021-08-13 01:17:44', 'uploads/5ihh0t.jpg'),
(44, 16, 'test', '2021-08-13 01:17:54', 'uploads/'),
(45, 17, 'hello\r\n', '2021-08-14 01:19:24', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `profile_photo` varchar(255) NOT NULL DEFAULT 'images/avatar.jpg',
  `cover_photo` varchar(255) NOT NULL DEFAULT 'images/cover.jpeg',
  `bio` varchar(255) NOT NULL DEFAULT '(Not available)',
  `work` varchar(255) NOT NULL DEFAULT '(Not available)',
  `relationship` enum('None','Single','In a relationship','In an open relationship','It''s complicated','Engaged','Married','Separated','Divorced','Widowed') NOT NULL DEFAULT 'None',
  `contact` varchar(255) NOT NULL DEFAULT 'Not available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `email`, `password`, `dob`, `gender`, `profile_photo`, `cover_photo`, `bio`, `work`, `relationship`, `contact`) VALUES
(1, 'Anirban', 'Sharma', 'anirban@gmail.com', 'aa', '2021-08-01', 'Male', 'uploads/spiderman.png', 'uploads/earth-1149733.jpg', 'I am the first account.', 'I made fakebook', 'Single', 'a@a.a'),
(16, 'test', 'use', 'test@a.a', 'aa', '2021-05-07', 'Male', 'uploads/7396db0eaa291d47efaa4fca60c59a33.jpg', 'uploads/j.jpeg', '(Not available)', '(Not available)', 'None', 'Not available'),
(17, 'Another', 'User', 'a@a.a', 'aa', '2021-03-18', 'Male', 'uploads/TMKOC-Jethalal-Dancing-768x564.jpg', 'uploads/65364106.jpg', 'this is the bio', 'student', 'Divorced', 'a@a.a'),
(18, 'raju', 'kumar', 'r@a.a', 'aa', '2021-05-07', 'Male', 'images/avatar.jpg', 'images/cover.jpeg', '(Not available)', '(Not available)', 'None', 'Not available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friends_id`),
  ADD KEY `id` (`id`),
  ADD KEY `friend_id` (`friend_id`);

--
-- Indexes for table `friend_rqst`
--
ALTER TABLE `friend_rqst`
  ADD PRIMARY KEY (`friend_rqst_id`),
  ADD KEY `id` (`id`),
  ADD KEY `friend_id` (`friend_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `friends_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `friend_rqst`
--
ALTER TABLE `friend_rqst`
  MODIFY `friend_rqst_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
