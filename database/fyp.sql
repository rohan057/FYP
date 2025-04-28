-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 28, 2025 at 12:12 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `dob` date NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `external_support` enum('yes','no') NOT NULL,
  `contact_method` varchar(255) DEFAULT NULL,
  `availability` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `dob`, `phone`, `external_support`, `contact_method`, `availability`, `created_at`) VALUES
(1, '2003-05-15', '07497780914', 'yes', 'Face to Face', '{\"monday\":[\"AM\"],\"tuesday\":[\"PM\"],\"wednesday\":[\"All Day\"],\"thursday\":[\"AM\"],\"friday\":[\"PM\"]}', '2025-02-05 17:01:50'),
(2, '2003-05-15', '07497780914', 'no', 'Face to Face, Online Meeting, Telephone', '{\"monday\":[\"PM\"],\"wednesday\":[\"PM\"],\"friday\":[\"PM\"]}', '2025-02-05 17:03:00'),
(3, '2003-05-15', '07497780914', 'yes', NULL, NULL, '2025-02-05 17:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `credit_redemptions`
--

DROP TABLE IF EXISTS `credit_redemptions`;
CREATE TABLE IF NOT EXISTS `credit_redemptions` (
  `redemption_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `redemption_amount` int NOT NULL,
  `redemption_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `giftcard_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`redemption_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `credit_redemptions`
--

INSERT INTO `credit_redemptions` (`redemption_id`, `user_id`, `redemption_amount`, `redemption_date`, `giftcard_type`) VALUES
(1, 1, 10000, '2025-02-13 11:11:14', 'Amazon'),
(2, 1, 10000, '2025-02-13 11:30:08', 'Amazon'),
(3, 1, 1000, '2025-02-14 12:29:08', 'Spotify'),
(4, 1, 5000, '2025-02-14 12:30:36', 'Spotify'),
(5, 1, 1000, '2025-02-14 12:31:12', 'Currys'),
(6, 1, 1000, '2025-02-14 12:31:17', 'Apple'),
(7, 1, 1000, '2025-02-14 12:31:21', 'Spotify'),
(8, 1, 1000, '2025-02-14 12:31:24', 'Google Play'),
(9, 1, 1000, '2025-02-14 12:31:29', 'Amazon'),
(10, 1, 500, '2025-02-14 13:10:02', 'Amazon'),
(11, 1, 500, '2025-02-18 17:12:51', 'Amazon');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(1, 'What is the purpose of this wellbeing tool?', 'This tool is designed to support Aston University students\' mental health and wellbeing by providing access to resources like counseling appointments, exercise plans, nutritious meals, mindfulness practices, and more all in one place.'),
(2, 'Who can use this platform?', 'This platform is exclusively for Aston University students. You must use your campus login credentials to access certain private features like the journal and goal tracker.'),
(3, 'How can I book a counseling appointment?', 'You can book a counseling appointment by navigating to the Home Page and clicking on \"Book Appointment\" and selecting a time slot that suits you.'),
(4, 'Where can I find emergency hotline numbers?', 'Emergency hotline numbers can be found on the Home Page under the \"Hotline Numbers\" section for quick access to relevant services.'),
(5, 'What types of student resources are available?', 'You can access infographic tips, articles on wellbeing, and external resources to help you balance your studies and mental health.'),
(6, 'What is the event calendar for?', 'The event calendar shows upcoming wellbeing-related events, workshops, and activities available to Aston University students.'),
(7, 'What types of exercise plans are available?', 'The exercise plans include strength training and cardio workouts that require no equipment, so you can easily follow them anywhere.'),
(8, 'Are there meal suggestions for different diets?', 'Yes! We offer meal suggestions for meat eaters, vegetarians, and vegans, all focused on promoting balanced nutrition.'),
(9, 'How can I start practicing mindfulness?', 'You can read mindfulness practices and watch guided meditation videos in the \"Meditation and Mindfulness\" section.'),
(10, 'Why should I practice meditation?', 'Meditation can help reduce stress, improve focus, and enhance emotional wellbeing.'),
(11, 'What funding resources are available?', 'We provide information on extra funding opportunities for both UK and international students, including scholarships.'),
(12, 'How can I request additional resources?', 'You can request additional resources by filling out the form in the \"Request Resources\" section.'),
(13, 'Is the anonymous feedback really anonymous?', 'Yes, your identity is not collected or stored when you provide feedback through the anonymous feedback form.'),
(14, 'What features require me to log in?', 'Features like the private journal and goal tracker are only available to logged-in users. You must use your Aston University login credentials to access them.'),
(15, 'How does the goal tracker work?', 'The goal tracker helps you set, manage, and track personal goals related to your wellbeing and academic performance.'),
(16, 'How can I earn and redeem credits?', 'You earn credits by achieving your set goals. These credits can be redeemed for rewards offered through the platform.'),
(17, 'What kind of rewards can I get?', 'Rewards at the moment only offer gift cards.');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

DROP TABLE IF EXISTS `goals`;
CREATE TABLE IF NOT EXISTS `goals` (
  `goal_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `goal` varchar(255) NOT NULL,
  `is_completed` tinyint(1) DEFAULT '0',
  `reward_credits` int NOT NULL,
  PRIMARY KEY (`goal_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`goal_id`, `user_id`, `goal`, `is_completed`, `reward_credits`) VALUES
(3, 2, 'I will submit my assignment', 0, 100),
(23, 1, 'Limit social media use to 1 hour or less in a day', 0, 50),
(19, 1, 'I will submit my assignment', 0, 100),
(22, 2, 'Go for a 30-minute walk or do some physical exercise', 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `private_journal`
--

DROP TABLE IF EXISTS `private_journal`;
CREATE TABLE IF NOT EXISTS `private_journal` (
  `journal_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `journal_entry` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`journal_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `private_journal`
--

INSERT INTO `private_journal` (`journal_id`, `user_id`, `journal_entry`, `created_at`) VALUES
(1, 1, 'Worked on a task today, made some progress, and encountered a few challenges. Plan to continue refining tomorrow.', '2025-02-06 17:29:48'),
(2, 1, 'Focused on refining a part of the project today. Progress was steady, though there’s still some work left to finalize. Looking forward to tackling the next steps.', '2025-02-06 17:30:23'),
(3, 2, 'Worked on some tasks today. Progress was steady, and I’ll continue working on them tomorrow.', '2025-02-06 17:31:01'),
(4, 2, 'Spent time on a few tasks today. Made progress and will continue working on them soon.', '2025-02-06 17:31:27'),
(6, 1, 'Today I went for a long walk and made some fresh food', '2025-02-28 11:58:04'),
(7, 1, 'Today I worked on some coursework and completed the first part of it', '2025-02-28 11:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_credits` int DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_credits`) VALUES
(1, '210074349@aston.ac.uk', 'pass', 9450),
(2, '220074349@aston.ac.uk', 'pass', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
