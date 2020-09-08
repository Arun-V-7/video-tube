-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2020 at 08:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1->User,2->Admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bruce Vein', 'bruce@vein.com', NULL, '$2y$10$7cztdfGiHHHRfTmto7pGTeD5GdtMX1oauPa8kWOMmnKsQJmhVr2r2', NULL, 2, '2020-08-30 05:25:13', '2020-08-30 05:25:13'),
(2, 'Arun.V', 'arunvelmurugan333@gmail.com', NULL, '$2y$10$7cztdfGiHHHRfTmto7pGTeD5GdtMX1oauPa8kWOMmnKsQJmhVr2r2', NULL, 1, '2020-08-30 00:34:43', '2020-08-30 00:34:43'),
(3, 'V .Arun', 'arun.imageylnk@gmail.com', NULL, '$2y$10$o1/SEQ6dPjspqX/w/peRuONPg4xGuy4pgFFvyBaPOE/3Pz1U/ByUi', NULL, 1, '2020-08-30 13:25:26', '2020-08-30 13:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_path` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tumbnail` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_path`, `tumbnail`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, '/assets/videos/videoplayback892701656.mp4', '/assets/tumbnails/20190507-142212-avengers-endgame-poster-top-half987603443.jpg', 'Marvel Studios\' Avengers: Endgame - Official Trailer', 'Whatever it takes. Watch the brand-new trailer for Marvel Studios’ Avengers: Endgame. In theaters April 26.\n\n► Learn more: https://marvel.com/movies/avengers-en...\n\n► Subscribe to Marvel: http://bit.ly/WeO3YJ\n\nFollow Marvel on Twitter: ‪https://twitter.com/marvel\nLike Marvel on FaceBook: ‪https://www.facebook.com/Marvel\n\nFor even more news, stay tuned to:\nTumblr: ‪http://marvelentertainment.tumblr.com/\nInstagram: https://www.instagram.com/marvel\nGoogle+: ‪https://plus.google.com/+marvel\nPinterest: ‪http://pinterest.com/marvelofficial', '2020-09-08 18:08:47', '2020-09-08 18:08:47'),
(2, '/assets/videos/videoplayback (1)1090915986.mp4', '/assets/tumbnails/hqdefault681803653.jpg', 'Imagine Dragons - Believer - Pinkpop 2017 (HD Live Show)', 'Imagine Dragons performing \"Believer\" at Pinkpop 2017.\n\nLyrics:\nFirst things first\nI\'mma say all the words inside my head\nI\'m fired up and tired of the way that things have been, oh ooh\nThe way that things have been, oh ooh\n\nSecond things second\nDon\'t you tell me what you think that I could be\nI\'m the one at the sail, I\'m the master of my sea, oh ooh\nThe master of my sea, oh ooh\n\nI was broken from a young age\nTaking my sulking to the masses\nWriting my poems for the few\nThat look at me, took to me, shook to me, feeling me\nSinging from heartache from the pain\nTaking my message from the veins\nSpeaking my lesson from the brain\nSeeing the beauty through the...\n\nPain!\nYou made me a, you made me a believer, believer\nPain!\nYou break me down, you build me up, believer, believer\nPain!\nOh let the bullets fly, oh let them rain\nMy life, my love, my drive, it came from...\nPain!\nYou made me a, you made me a believer, believer\n\nThird things third\nSend a prayer to the ones up above\nAll the hate that you\'ve heard has turned your spirit to a dove, oh ooh\nYour spirit up above, oh ooh\n\nI was choking in the crowd\nBuilding my rain up in the cloud\nFalling like ashes to the ground\nHoping my feelings, they would drown\nBut they never did, ever lived, ebbing and flowing\nInhibited, limited\nTill it broke open and rained down\nAnd rained down, like...\n\nPain!\nYou made me a, you made me a believer, believer\nPain!\nYou break me down, you build me up, believer, believer\nPain!\nOh let the bullets fly, oh let them rain\nMy life, my love, my drive, it came from...\nPain!\nYou made me a, you made me a believer, believer\n\nLast things last\nBy the grace of the fire and the flames\nYou\'re the face of the future, the blood in my veins, oh ooh\nThe blood in my veins, oh ooh\nBut they never did, ever lived, ebbing and flowing\nInhibited, limited\nTill it broke open and rained down\nAnd rained down, like...\n\nPain!\nYou made me a, you made me a believer, believer\nPain!\nYou break me down, you build me up, believer, believer\nPain!\nOh let the bullets fly, oh let them rain\nMy life, my love, my drive, it came from...\nPain!\nYou made me a, you made me a believer, believer', '2020-09-08 18:11:48', '2020-09-08 18:11:48'),
(3, '/assets/videos/videoplayback (3)2073665475.mp4', '/assets/tumbnails/maxresdefault731658977.jpg', 'Maari 2 - Rowdy Baby (Video Song) | Dhanush, Sai Pallavi | Yuvan Shankar Raja | Balaji Mohan', 'Unleashing the Video Song of #RowdyBaby from #Maari2. Maari 2 stars Dhanush, Sai Pallavi, Krishna, Varalakshmi Sarathkumar & Tovino Thomas in lead roles; Music Composed by Yuvan Shankar Raja & Directed by Balaji Mohan.\n\nTrack Credits\nTrack: Rowdy Baby\nSingers: Dhanush & Dhee\nLyrics: Poetu Dhanush\nMusic: Yuvan Shankar Raja\n\nhttp://divo.in/Maari2\n\niTunes - http://bit.ly/RowdyBabyMaari2\nGoogle Play - http://bit.ly/2E3Y0mI\nGaana - https://bit.ly/2P67L4Q\nSaavn - https://bit.ly/2AvI34R\nHungama - https://bit.ly/2E27OOf\nRaaga - https://bit.ly/2BDhXhZ\nWynk Music - https://bit.ly/2FN69Od\nJio Music - https://bit.ly/2zvkWaS\nIdea Music - https://bit.ly/2PXP0WX\n\nComposed & Arranged by Yuvan Shankar Raja', '2020-09-08 18:16:54', '2020-09-08 18:16:54'),
(4, '/assets/videos/videoplayback (2)302147700.mp4', '/assets/tumbnails/15045622ea0e0a3072c4312895f8f254623289764.jpg', 'Official CSK #WhistlePodu Video 2018', 'The summer we\'ve all been waiting for is here. Thala has returned and the yellow army is back.\nWhat are you waiting for?\n#WhistlePodu . #Yellove #SummerIsHere', '2020-09-08 18:18:25', '2020-09-08 18:18:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
