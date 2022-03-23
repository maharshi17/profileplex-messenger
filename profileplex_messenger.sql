-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 10:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profileplex_messenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `archived`
--

CREATE TABLE `archived` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `for_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `for_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`id`, `message_id`, `for_user_id`) VALUES
(1, 19, 10),
(2, 21, 10),
(3, 32, 9),
(5, 39, 2);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `is_sent` int(1) NOT NULL,
  `is_read` int(1) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`, `is_sent`, `is_read`, `time`, `date`) VALUES
(1, 8, 5, 'aGlpaWk=', 1, 1, '11:36 PM', '11 Jun, 2020'),
(2, 8, 5, 'aG93ZmRmZmQ=', 1, 1, '11:36 PM', '11 Jun, 2020'),
(3, 8, 5, 'ZGZkZmZk', 1, 1, '11:36 PM', '11 Jun, 2020'),
(4, 8, 5, 'ZGY=', 1, 1, '11:36 PM', '11 Jun, 2020'),
(5, 8, 5, 'ZGZkZmQ=', 1, 1, '11:36 PM', '11 Jun, 2020'),
(6, 8, 5, 'ZGY=', 1, 1, '11:36 PM', '11 Jun, 2020'),
(7, 8, 5, 'ZGZmZA==', 1, 1, '11:36 PM', '11 Jun, 2020'),
(8, 5, 10, 'aGVsbG8uLmhvdyBhcmUgeW91Pw==', 1, 1, '6:24 PM', '1 Jul, 2020'),
(9, 10, 5, 'aGlpaQ==', 1, 1, '6:25 PM', '1 Jul, 2020'),
(10, 10, 5, 'aGpkc2poc2Ro', 1, 1, '6:25 PM', '1 Jul, 2020'),
(11, 10, 5, 'c2RoamRzaGo=', 1, 1, '6:25 PM', '1 Jul, 2020'),
(12, 5, 10, 'aGpzZGhqZHM=', 1, 1, '6:25 PM', '1 Jul, 2020'),
(13, 5, 10, 'aGpzZGhqZA==', 1, 1, '6:25 PM', '1 Jul, 2020'),
(14, 10, 6, 'YmRzamJkc2hkcw==', 1, 0, '6:26 PM', '1 Jul, 2020'),
(15, 10, 6, 'aGpkc2hkaGo=', 1, 0, '6:26 PM', '1 Jul, 2020'),
(16, 10, 5, 'ZmRqaGo=', 1, 1, '6:26 PM', '1 Jul, 2020'),
(17, 10, 6, 'c2RiamhzZGo=', 1, 0, '6:27 PM', '1 Jul, 2020'),
(18, 10, 6, 'aGVsbG8=', 1, 0, '6:27 PM', '1 Jul, 2020'),
(19, 10, 6, 'aGVsbG88YnI+PGJyPjxicj48YnI+c2RqZGhqc2Q8YnI+PGltZyBhbHQ9IvCfmKsiIGNsYXNzPSJlbW9qaW9uZWVtb2ppIiBzcmM9Imh0dHBzOi8vY2RuLmpzZGVsaXZyLm5ldC9lbW9qaW9uZS9hc3NldHMvMy4xL3BuZy8zMi8xZjYyYi5wbmciPjxpbWcgYWx0PSLwn5irIiBjbGFzcz0iZW1vamlvbmVlbW9qaSIgc3JjPSJodHRwczovL2Nkbi5qc2RlbGl2ci5uZXQvZW1vamlvbmUvYXNzZXRzLzMuMS9wbmcvMzIvMWY2MmIucG5nIj48aW1nIGFsdD0i8J+YqyIgY2xhc3M9ImVtb2ppb25lZW1vamkiIHNyYz0iaHR0cHM6Ly9jZG4uanNkZWxpdnIubmV0L2Vtb2ppb25lL2Fzc2V0cy8zLjEvcG5nLzMyLzFmNjJiLnBuZyI+PGltZyBhbHQ9IvCfmKsiIGNsYXNzPSJlbW9qaW9uZWVtb2ppIiBzcmM9Imh0dHBzOi8vY2RuLmpzZGVsaXZyLm5ldC9lbW9qaW9uZS9hc3NldHMvMy4xL3BuZy8zMi8xZjYyYi5wbmciPjxpbWcgYWx0PSLwn5irIiBjbGFzcz0iZW1vamlvbmVlbW9qaSIgc3JjPSJodHRwczovL2Nkbi5qc2RlbGl2ci5uZXQvZW1vamlvbmUvYXNzZXRzLzMuMS9wbmcvMzIvMWY2MmIucG5nIj48YnI+PGJyPnNkamRqZHNrajxicj48aW1nIGFsdD0i8J+YtCIgY2xhc3M9ImVtb2ppb25lZW1vamkiIHNyYz0iaHR0cHM6Ly9jZG4uanNkZWxpdnIubmV0L2Vtb2ppb25lL2Fzc2V0cy8zLjEvcG5nLzMyLzFmNjM0LnBuZyI+PGltZyBhbHQ9IvCfmLQiIGNsYXNzPSJlbW9qaW9uZWVtb2ppIiBzcmM9Imh0dHBzOi8vY2RuLmpzZGVsaXZyLm5ldC9lbW9qaW9uZS9hc3NldHMvMy4xL3BuZy8zMi8xZjYzNC5wbmciPjxpbWcgYWx0PSLwn5i0IiBjbGFzcz0iZW1vamlvbmVlbW9qaSIgc3JjPSJodHRwczovL2Nkbi5qc2RlbGl2ci5uZXQvZW1vamlvbmUvYXNzZXRzLzMuMS9wbmcvMzIvMWY2MzQucG5nIj48aW1nIGFsdD0i8J+YtCIgY2xhc3M9ImVtb2ppb25lZW1vamkiIHNyYz0iaHR0cHM6Ly9jZG4uanNkZWxpdnIubmV0L2Vtb2ppb25lL2Fzc2V0cy8zLjEvcG5nLzMyLzFmNjM0LnBuZyI+PGJyPjxicj4=', 1, 0, '6:28 PM', '1 Jul, 2020'),
(20, 10, 6, 'aGpzZGhqZHNoanNkaA==', 1, 0, '6:29 PM', '1 Jul, 2020'),
(21, 10, 6, 'c2RqaGRo', 1, 0, '6:29 PM', '1 Jul, 2020'),
(22, 10, 6, 'aXVzZGl1c2R1aXNkZHM=', 1, 0, '6:29 PM', '1 Jul, 2020'),
(23, 10, 6, 'bnNkbmtrZHNrbg==', 1, 0, '6:29 PM', '1 Jul, 2020'),
(24, 10, 6, 'a2pzZGtqc2Rrag==', 1, 0, '6:29 PM', '1 Jul, 2020'),
(25, 10, 6, 'a2pzZGtqc2Rrag==', 1, 0, '6:29 PM', '1 Jul, 2020'),
(33, 9, 6, 'aGlp', 1, 1, '2:11 PM', '4 Oct, 2020'),
(34, 9, 6, 'YW5uYQ==', 1, 1, '2:11 PM', '4 Oct, 2020'),
(37, 9, 2, 'SGlpaTxpbWcgYWx0PSLwn5iEIiBjbGFzcz0iZW1vamlvbmVlbW9qaSIgc3JjPSJodHRwczovL2Nkbi5qc2RlbGl2ci5uZXQvZW1vamlvbmUvYXNzZXRzLzMuMS9wbmcvMzIvMWY2MDQucG5nIj4=', 1, 1, '6:41 PM', '10 Feb, 2021'),
(38, 2, 9, 'aGkgbWFoYXJzaGk=', 1, 1, '6:41 PM', '10 Feb, 2021'),
(39, 9, 2, 'aGpkamhzZGRz', 1, 1, '6:41 PM', '10 Feb, 2021'),
(40, 2, 9, 'amtka2pkc2tq', 1, 1, '6:41 PM', '10 Feb, 2021'),
(41, 2, 9, 'aGkgbWFoYXJzaGkgPGJyPjxicj48YnI+ZmpoZGhqZmpmaGpmPGJyPjxicj5zZGpoaGpkamg8YnI+PGJyPmhqZHNqaGZoajxicj48YnI+aGpzZGpoZHNzaA==', 1, 1, '6:42 PM', '10 Feb, 2021'),
(42, 9, 2, 'aGVsbG8=', 1, 0, '10:23 PM', '17 Mar, 2021'),
(43, 9, 4, 'SGV5LCBKYWNvYg==', 1, 0, '2:51 PM', '23 Mar, 2022'),
(44, 6, 9, 'SGV5LCBNYWhhcnNoaS4gSG93IGFyZSB5b3U/', 1, 1, '2:56 PM', '23 Mar, 2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_photo` varchar(35) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `about` varchar(150) NOT NULL,
  `is_profile_private` int(11) NOT NULL,
  `token` varchar(20) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `last_login` bigint(20) NOT NULL,
  `created_at` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `email`, `password`, `profile_photo`, `gender`, `dob`, `about`, `is_profile_private`, `token`, `is_verified`, `last_login`, `created_at`) VALUES
(2, 'John Doe', 'john_doe', 'johndoe@example.com', '5a4665c398525661e274c94c84476b41', '', 'Male', '26 Feb 1980', 'I am John Doe.hsdsdhjhshjdshjdsjdshhjdhjhhhhhhhhhhhhhhhhhhhhhhhhhh', 0, '', 1, 1612962876, '27 Feb 2020'),
(3, 'Jane Doe', 'jane_doe', 'janedoe@example.com', 'b5a500c5165e092b32c9884b8dc7b225', '', 'Female', '15 Jun 1982', 'I am Jane Doe.', 0, '', 1, 0, '27 Feb 2020'),
(4, 'Jacob Simmons', 'jacob_simmons', 'jacobsimmons@example.com', '1012d30447aee8c4c98b078742d81138', '', 'Male', '05 Nov 1998', 'I am Jacob Simmons.', 0, '', 1, 0, '27 Feb 2020'),
(5, 'Daniel Adams', 'daniel_adams', 'danieladams@example.com', '01cde694ccf100d11ccfdcef11512e81', '7e53801f1f8575e53801f1f865.jpg', 'Male', '09 Jan 1988', 'I am Daniel Adams', 0, '', 1, 1601811153, '27 Feb 2020'),
(6, 'Anna Fisher', 'anna_fisher', 'annafisher@example.com', '803fef21562317e5fcf81f828f666888', '1e52701f1f8575e5380ffgfz865.jpg', 'Female', '21 Feb 1988', 'I am Anna Fisher', 0, '', 1, 1648028019, '27 Feb 2020'),
(9, 'Maharshi Pandya', 'maharshi_17', 'maharshipandya1999@gmail.com', 'dd942dcaceb40438a09b809d3101ece4', '5f798b5cc12a25f798b5cc12a4.jpg', 'Male', '17 Jul 1999', 'sdhdsh hjhjsdjh shdhj dshjdhj dshjdhjdshhhhhhhhhhhhhhhhhhhhhhhhh', 0, 'ByGMJ41gZWYV0qDWjfLH', 0, 1648028063, '1 Jul 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archived`
--
ALTER TABLE `archived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT for table `archived`
--
ALTER TABLE `archived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
