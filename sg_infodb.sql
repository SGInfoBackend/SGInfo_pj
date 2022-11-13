-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 03:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sg_infodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_rooms`
--

CREATE TABLE `book_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rent_house_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_rooms`
--

INSERT INTO `book_rooms` (`id`, `rent_house_id`, `check_in`, `check_out`, `adult`, `children`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 13, '2022-09-15', '2022-09-21', 1, 3, 21, '2022-09-02 03:11:44', '2022-09-02 03:11:44'),
(2, 13, '2022-09-15', '2022-09-21', 1, 3, 21, '2022-09-02 03:12:16', '2022-09-02 03:12:16'),
(3, 13, '2022-09-15', '2022-09-21', 1, 3, 21, '2022-09-02 03:12:33', '2022-09-02 03:12:33'),
(4, 13, '2022-09-15', '2022-09-30', 3, 3, 21, '2022-09-02 03:40:29', '2022-09-02 03:40:29'),
(5, 13, '2022-09-29', '2022-09-15', 3, 1, 21, '2022-09-07 22:08:36', '2022-09-07 22:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '7fc804d9-4528-46d0-8b69-16c52243be4a', 'database', 'default', '{\"uuid\":\"7fc804d9-4528-46d0-8b69-16c52243be4a\",\"displayName\":\"App\\\\Mail\\\\BookRoomConfirmedMarkdown\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:34:\\\"App\\\\Mail\\\\BookRoomConfirmedMarkdown\\\":3:{s:8:\\\"bookroom\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:19:\\\"App\\\\Models\\\\BookRoom\\\";s:2:\\\"id\\\";N;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";N;}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:16:\\\"example@mail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 'Illuminate\\Database\\Eloquent\\ModelNotFoundException: No query results for model [App\\Models\\BookRoom]. in C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php:587\nStack trace:\n#0 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(102): Illuminate\\Database\\Eloquent\\Builder->firstOrFail()\n#1 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesAndRestoresModelIdentifiers.php(57): App\\Mail\\BookRoomConfirmedMarkdown->restoreModel(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#2 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\SerializesModels.php(126): App\\Mail\\BookRoomConfirmedMarkdown->getRestoredPropertyValue(Object(Illuminate\\Contracts\\Database\\ModelIdentifier))\n#3 [internal function]: App\\Mail\\BookRoomConfirmedMarkdown->__unserialize(Array)\n#4 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(96): unserialize(\'O:34:\"Illuminat...\')\n#5 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(59): Illuminate\\Queue\\CallQueuedHandler->getCommand(Array)\n#6 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#7 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(425): Illuminate\\Queue\\Jobs\\Job->fire()\n#8 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(375): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#9 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(173): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#10 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(150): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#11 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(134): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#12 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#13 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#14 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#15 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#16 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#17 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(139): Illuminate\\Container\\Container->call(Array)\n#18 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\symfony\\console\\Command\\Command.php(308): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#19 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(124): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#20 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\symfony\\console\\Application.php(998): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#21 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\symfony\\console\\Application.php(299): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#22 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\symfony\\console\\Application.php(171): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#23 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#24 C:\\xampp\\htdocs\\SGInfo_pj\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#25 C:\\xampp\\htdocs\\SGInfo_pj\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#26 {main}', '2022-09-07 22:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_30_032254_create_sessions_table', 1),
(7, '2022_07_22_075003_add_google_id_column', 2),
(8, '2022_09_01_102417_create_book_rooms_table', 3),
(9, '2022_09_08_025229_create_jobs_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6JsnlSpJZFB61RCF2NmB9pM7d4wqMpXwvoHzY7Zx', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiY2NCNEhCU2EyZ0lXSTFsN0Y3cWZvWmx0dExEMVFpZEtNQmZNdXpMYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb29tZGV0YWlsLzEzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MTp7aTowO3M6MTU6InN1Y2Nlc3NfbWVzc2FnZSI7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbE5WTWsxOEhiZGl1UGJaT0k3QWR0dXU1VmsvUVU3STNRR0J1NG1OWE1RUzNxelNHN0J0U2EiO30=', 1662611917),
('6mzcLD4paabwVvy7bA0AEp33NlKXl0jKxtnFHh7M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiek9TaTZBNVZWNjFuUlpIRkw2UVdER1k5bWJZeHE0R1VtcEtSeUswYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662443552),
('aZ8egzir0usgQ74dscXaKqjbVtul1y2ZpET7Ki9y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQTdoOXNCZkIzWFBEWmJyTDQyamhnRUY4eEdBS080b1llcTE2clJaRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662606266),
('bI6vlK9C286h1RuzI5xyBiofWeuQVCcbAkQieula', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaFNoYnllYmVnNWdaejFCSlV3eU1RTW5iOVBSTFYycFR4aVpFc04yQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662100450),
('GLd3uLjl89IJxA40FntKNRbUnYkOYVKhrfCEDwIb', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYXRmMlFNRlRCTVVsMVpHMTNMZm1scUNBOFNsMnFRYUVVZXFiTUY1UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb29tZGV0YWlsLzEzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbE5WTWsxOEhiZGl1UGJaT0k3QWR0dXU1VmsvUVU3STNRR0J1NG1OWE1RUzNxelNHN0J0U2EiO30=', 1662435002),
('Habb3Ar3NoCJB82b6rcWSTtzRvsNlAC8nhpBxvoN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjVqbTAycENEQkF4eEVDRFNqQnNuZ2ZmUVNPOHRvUUFhNDZaZzVsUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1667983001),
('hDqo47nhXLmDz3MbnbRqxIo7CQMJZcNiog3WJcZY', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV1FTbzNqVTE5d3hDNDFpZkhBU1EzWVdFYW85Y2dtRjdoZEVqUWdRMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb29tZGV0YWlsLzEzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbE5WTWsxOEhiZGl1UGJaT0k3QWR0dXU1VmsvUVU3STNRR0J1NG1OWE1RUzNxelNHN0J0U2EiO30=', 1662113583),
('hNSbQrSqXVhGF4ykKfS5Kj6GafyQ4SPBOwzzl921', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYlZycmUzNG1oSEMyTWIzWWRWbmE5TXJMRTBCTDRqdWVXZm9mb29RTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662189659),
('hURyUwsbsIFMTTBdrZrNJq8nuf0uDROC87W6xO6q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSUQ5S1dJcUhLc3JqTFlHMkFMYktFQXRwcFVubXM0T05BdThLVE84dCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozNToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Jvb21kZXRhaWwvMTMiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662694664),
('IpmsAagor2yZ7kuIxnjwtr15BCH5bO4iLNr34xld', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVnpiUU91OXNobVZGNTV0QVN4c09sMTdybGt0ak5vV0tuSTQ0bjdvbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662086784),
('jp1eJt0GXHDlqQcGnAFrK6fKL4rb6j8aD9wetpcb', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUXMxSG1CcHF1QjFqSnREdk5DT1gxb3hFWElUbzJWOGhSMUY1S3dkaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9nZW5lcmFsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbE5WTWsxOEhiZGl1UGJaT0k3QWR0dXU1VmsvUVU3STNRR0J1NG1OWE1RUzNxelNHN0J0U2EiO30=', 1662192638),
('jVxNs9klmzsYFY3LaCxYSUQr2zVtfSBxuNQ9B65e', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYUFKMlB2UG5ReTVuNXZab2tOMHRhYnBHcGp3blRTTEpWMklUSG5jaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662434850),
('MmWfltamUWSaCVINelhmAaRktbMy0u59plH7NJhf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnNmdkJyYUVOMkQyMTFGUTdkWEQwbjhpT2lva0p6RDdjcWh0b21nZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yb29tcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1667900215),
('pHsGeYn3WrNmjGF73Y4dUFzv5puUcTccoml7iWE8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjZOVDVZN0tGSDVuMUV2MDdPWDVhQWdEeGJsQU03WVVyNGc1N1JKViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1666927386),
('ps04S628wodS0FpSqlWt3ZaQb0AoiutRDzQDBRfo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3BpbXNFSGl3THJhT1VvbXRwOGJRZ0x6N3JrRnJlQXNPZ0VXeVVzSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1662716389),
('YJzPwtTcDhBbHlLmvNsSCnBPscb92yna9p6qEjVZ', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTlJSRGU3NlJSV2tlRDVtZndSTUpWTzFjaXVPNXNQVVM2cUlqODNyayI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRsTlZNazE4SGJkaXVQYlpPSTdBZHR1dTVWay9RVTdJM1FHQnU0bU5YTVFTM3F6U0c3QnRTYSI7fQ==', 1662449463);

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_agent`
--

CREATE TABLE `sg_info_agent` (
  `Agent_ID` int(11) NOT NULL,
  `POST_ID` int(11) DEFAULT NULL,
  `Agent_name` varchar(30) DEFAULT NULL,
  `Agent_mobile` varchar(15) DEFAULT NULL,
  `Gmail` varchar(40) DEFAULT NULL,
  `Payment_type_ID` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_apply_job`
--

CREATE TABLE `sg_info_apply_job` (
  `A_Job_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `POST_ID` int(11) DEFAULT NULL,
  `USER_name` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `Gmail` varchar(40) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `CV_File` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_apply_job`
--

INSERT INTO `sg_info_apply_job` (`A_Job_ID`, `USER_ID`, `POST_ID`, `USER_name`, `phone`, `Gmail`, `ADDRESS`, `CV_File`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Bo Kaw Taw', '0987654321', 'bokawtaw@gmail.com', NULL, 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php4A85.tmp', '2022-07-05 02:54:47', '2022-07-05 02:54:47'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'files/pzmYKeqyQDBn9ipxQk1CMLTM8VaNfTsFWt24qP3T.txt', '2022-07-07 08:55:33', '2022-07-07 08:55:33'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'public/9jxzeTzxXw0SBw7YSftyIOXKzHsB2T4mAPzx0oSL.txt', '2022-07-07 08:56:50', '2022-07-07 08:56:50'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'files/1BTLyOfP30fSh9Un74JcNphGnGCRBkBU6qYFcgeN.txt', '2022-07-07 08:58:56', '2022-07-07 08:58:56'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 'files/o2PNnmpFMEEh9RGOQKC2I37Pf24IwmmsZmoeHyzO.txt', '2022-07-07 09:00:20', '2022-07-07 09:00:20'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 'files/B3Jn2HemmOJxPksuNTkSraP2BZgbBivoy8tJa9vc.txt', '2022-07-07 09:07:24', '2022-07-07 09:07:24'),
(10, NULL, NULL, 'Tint Wai', '09123456789', 'tintwai1212@gmail.com', NULL, '{\"CV_File\":\"files\\/B3Jn2HemmOJxPksuNTkSraP2BZgbBivoy8tJa9vc.txt\",\"updated_at\":\"2022-07-07T15:37:24.000000Z\",\"created_at\":\"2022-07-07T15:37:24.000000Z\",\"id\":9}', '2022-07-07 09:07:24', '2022-07-07 09:07:24'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 09:09:44', '2022-07-07 09:09:44'),
(12, NULL, NULL, 'Aung Zin Latt', '09123456789', 'kweezin78706@gmail.com', NULL, '{\"updated_at\":\"2022-07-07T15:39:44.000000Z\",\"created_at\":\"2022-07-07T15:39:44.000000Z\",\"id\":11}', '2022-07-07 09:09:44', '2022-07-07 09:09:44'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-07 09:11:50', '2022-07-07 09:11:50'),
(14, NULL, NULL, 'Aung Zin Latt', '09123456789', 'kweezin78706@gmail.com', NULL, '{\"updated_at\":\"2022-07-07T15:41:50.000000Z\",\"created_at\":\"2022-07-07T15:41:50.000000Z\",\"id\":13}', '2022-07-07 09:11:50', '2022-07-07 09:11:50'),
(15, NULL, NULL, 'Aung Zin Latt', '09123456789', 'kweezin78706@gmail.com', NULL, 'files/ouTym7chexeEUUY6h0lVnL9V50Z4dV6COaD6f98r.txt', '2022-07-07 09:13:42', '2022-07-07 09:13:42'),
(16, NULL, NULL, 'Lwin Moe', '0987654321', 'lwinmoe@gmail.com', NULL, 'C:\\Users\\ACER\\AppData\\Local\\Temp\\php3D45.tmp', '2022-07-13 02:43:50', '2022-07-13 02:43:50'),
(17, NULL, NULL, 'Jonny Depth', '0987654325', 'johnydebth@gmail.com', NULL, 'files/jB1tfTZrDDdbk8yHmK54JyvTuuLuOfuEw2rI8G0z.txt', '2022-07-13 02:46:21', '2022-07-13 02:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_facilities`
--

CREATE TABLE `sg_info_facilities` (
  `Facilities_ID` int(11) NOT NULL,
  `Facilities_Name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_facilities`
--

INSERT INTO `sg_info_facilities` (`Facilities_ID`, `Facilities_Name`, `created_at`, `updated_at`) VALUES
(1, 'Barbeque Area', '2022-08-23 04:40:14', '2022-08-23 04:40:14'),
(2, 'Covered car park', '2022-08-23 04:40:14', '2022-08-23 04:40:14'),
(3, 'Function room', '2022-08-23 04:41:03', '2022-08-23 04:41:03'),
(4, 'Mini-Mart', '2022-08-23 04:41:03', '2022-08-23 04:41:03'),
(5, '24 hours security', '2022-08-23 04:41:25', '2022-08-23 04:41:25'),
(6, 'Swimming pool', '2022-08-23 04:41:25', '2022-08-23 04:41:25'),
(7, 'Billiards room', '2022-08-23 04:43:51', '2022-08-23 04:43:51'),
(8, 'Clubhouse', '2022-08-23 04:43:51', '2022-08-23 04:43:51'),
(9, 'Gymnasium room', '2022-08-23 04:44:08', '2022-08-23 04:44:08'),
(10, 'Sauna', '2022-08-23 04:44:08', '2022-08-23 04:44:08'),
(11, 'Squash court', '2022-08-23 04:44:26', '2022-08-23 04:44:26'),
(12, 'Tennis courts', '2022-08-23 04:44:26', '2022-08-23 04:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_general`
--

CREATE TABLE `sg_info_general` (
  `General_ID` int(11) NOT NULL,
  `GHeader_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `G_DATE` date DEFAULT NULL,
  `G_Description` varchar(1000) DEFAULT NULL,
  `G_PHOTO` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_general`
--

INSERT INTO `sg_info_general` (`General_ID`, `GHeader_ID`, `USER_ID`, `G_DATE`, `G_Description`, `G_PHOTO`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '2007-10-16', 'Amet ipsa qui perferendis autem eius. Ab voluptate rerum provident voluptatum. Illum voluptatem maiores sit voluptatem laudantium sunt. Laborum in recusandae culpa sit.', 'fugit', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(2, NULL, NULL, '1997-06-20', 'Et sed qui laudantium laboriosam occaecati voluptas magni cum. Molestiae facere harum numquam et labore quis sequi. Voluptas ad est qui aut velit. Ut quis dolores quam magni.', 'voluptates', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(3, NULL, NULL, '2009-08-30', 'Ut debitis voluptate nam aspernatur. Ut possimus possimus ea ipsam. Non et hic quo quos consequatur eum laudantium. Dicta et sed voluptatem sunt.', 'cumque', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(4, NULL, NULL, '1971-04-12', 'Totam qui alias quo molestiae. Odit quo ea doloribus sint. Dicta iusto nisi suscipit dolorum doloribus pariatur. Saepe voluptas nesciunt voluptate est commodi doloremque.', 'et', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(5, NULL, NULL, '1993-07-18', 'Sed incidunt omnis est dolor labore. Autem et quia ducimus. Aut sint rerum tenetur impedit quaerat. Distinctio quae maxime quibusdam aut quia quaerat.', 'officia', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(6, NULL, NULL, '1972-08-12', 'Nisi asperiores vero quasi quibusdam. Aut necessitatibus qui quia quis earum. Est at corporis voluptas dolor reiciendis cupiditate.', 'nihil', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(7, NULL, NULL, '2021-12-03', 'Rem nostrum aut iure eius. Voluptate libero voluptatem dolores qui id tempore alias sequi. Ut aut omnis consequatur et. Eum molestiae cupiditate quas maxime.', 'dolorem', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(8, NULL, NULL, '2006-03-15', 'Sequi id voluptas dolor voluptatibus. Sed aut illum aut non voluptas. Ipsum qui tenetur explicabo et assumenda. Laborum voluptatem voluptas similique voluptatem ipsa.', 'et', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(9, NULL, NULL, '1998-10-06', 'Beatae dolor fugiat officiis neque sit. A occaecati consequatur accusantium et. Sit nostrum explicabo aliquid et ratione optio. Et ea libero eos.', 'laudantium', '2022-06-29 23:08:15', '2022-06-29 23:08:15'),
(10, NULL, NULL, '1975-09-19', 'Et suscipit nobis facilis aperiam. Molestiae architecto ut impedit quidem expedita. Beatae ut ut occaecati voluptas. Nisi sit quia praesentium est libero in pariatur. Unde magni nemo autem quas.', 'aut', '2022-06-29 23:08:15', '2022-06-29 23:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_gheader`
--

CREATE TABLE `sg_info_gheader` (
  `GHeader_ID` int(11) NOT NULL,
  `GHeader_Name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_gheader`
--

INSERT INTO `sg_info_gheader` (`GHeader_ID`, `GHeader_Name`, `created_at`, `updated_at`) VALUES
(1, 'This is Header of General', '2022-08-30 07:22:53', '2022-08-30 07:22:53'),
(2, 'Second Header of General header', '2022-08-30 07:22:53', '2022-08-30 07:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_job`
--

CREATE TABLE `sg_info_job` (
  `Job_ID` int(11) NOT NULL,
  `Typeofrole_ID` int(11) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `Job_title` varchar(30) DEFAULT NULL,
  `Company` varchar(50) DEFAULT NULL,
  `SALARY` decimal(10,0) DEFAULT NULL,
  `Job_location` varchar(255) DEFAULT NULL,
  `Category_job` varchar(50) DEFAULT NULL,
  `Company_URL` varchar(100) DEFAULT NULL,
  `Job_Description` varchar(1000) DEFAULT NULL,
  `exp_level` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_job`
--

INSERT INTO `sg_info_job` (`Job_ID`, `Typeofrole_ID`, `USER_ID`, `Job_title`, `Company`, `SALARY`, `Job_location`, `Category_job`, `Company_URL`, `Job_Description`, `exp_level`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 'Android Developer.', 'Shaylee Kirlin', '600000', '13989 Amelie Plaza Apt. 413\nArliehaven, WY 94329', 'Mr.', 'Et qui.', 'Sunt expedita praesentium magni aspernatur. Vero unde rerum quas vel magni necessitatibus nemo.', 'Fresher/Entry', '2022-06-29 23:02:45', '2022-06-29 23:02:45'),
(2, 2, NULL, 'Example Developer', 'Freeda Haley', '100000000', '3758 Bernhard Lock Suite 552\nWebermouth, DE 96044-3312', 'Ms.', 'Qui.', 'Sit quia at et omnis neque. Provident laborum nesciunt amet enim est facere. Sit et odit odit quaerat voluptatem provident.', 'Fresher/Entry', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(3, 1, NULL, 'FullStack Developer', 'Salma Jakubowski Jr.', '5', '76150 Cartwright Drive Apt. 440\nPort Watsonfort, AL 69371', 'Dr.', 'Et modi.', 'Doloremque quo eos deserunt assumenda et quos. Cumque error qui consequatur nostrum fuga deleniti ipsum. Asperiores aliquam magni eius aut.', 'Manager', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(4, 1, NULL, 'Example Developer', 'Terry Bode', '7', '14455 Huel Mill Suite 927\nLake Laurine, KY 95395-8535', 'Prof.', 'Fugit non.', 'Accusamus explicabo molestiae maxime occaecati. Corporis eaque recusandae consequatur eius exercitationem aperiam. Provident qui soluta mollitia voluptatem. Earum officiis eveniet vitae in fugit.', 'Manager', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(5, 1, NULL, 'Junior', 'Solon Renner', '7', '4987 Kassulke View Suite 983\nSouth Elody, KS 00857', 'Dr.', 'Aliquam.', 'Sit magnam error numquam explicabo et earum. Et quisquam veniam itaque hic perferendis quia facere. Quo eligendi qui vitae minima vel veniam sed sit. Deleniti officia in esse autem officia porro eum.', 'Manager', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(6, 2, NULL, 'Backend Developer', 'Dr. Gail Durgan MD', '9', '31615 Wisozk Landing\nRoobbury, DC 67673-3131', 'Ms.', 'Et.', 'Voluptatum ut distinctio quis occaecati voluptas qui eius. Et vel eligendi explicabo laudantium. Tempora recusandae quod incidunt quas neque. Velit ad esse nobis. Quia perferendis et est.', 'Manager', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(7, 2, NULL, 'FrontEnd Developer', 'Fay Schaefer', '3', '266 Murray Fords Apt. 968\nNorth Makayla, MT 73116-4848', 'Dr.', 'Unde.', 'Amet ea est culpa sed aliquam rerum. Corrupti quod modi eos sed odio consectetur.', 'Director Above', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(8, 3, NULL, 'Laravel Developer', 'Laura Dooley', '9', '8755 Zieme Fields\nHudsonview, ND 25414-0567', 'Prof.', 'Sunt.', 'Esse et ea voluptatibus et dolorem autem id repellat. Eum itaque earum nobis ad hic voluptas. Et iusto non ad ex sapiente enim. Ab impedit et aut ut quo.', 'Director Above', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(9, 2, NULL, 'Example Developer', 'Marcellus Gibson', '150000', '591 Friesen Village Suite 825\nLake Sabrynamouth, NY 95730-5277', 'Mr.', 'Sequi.', 'Voluptatem sunt cum adipisci recusandae soluta. Exercitationem eos impedit sed nemo neque exercitationem deleniti. Et velit expedita voluptatem hic corrupti adipisci unde veritatis.', 'Director Above', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(10, 2, NULL, 'Java Developer', 'Tevin Gulgowski', '1', '29910 Tracey Manor\nWest Morton, NY 42049', 'Miss', 'Animi.', 'Sed saepe praesentium cumque. Est quasi natus tempore fugiat ipsam eum. Perferendis qui velit fuga adipisci eligendi mollitia sit. Quia molestiae nostrum eaque voluptatum reiciendis.', 'Director Above', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(11, 1, NULL, 'React Developer', 'Andre McClure', '4', '25490 Jast Ways Suite 389\nSchuppehaven, MO 96744-3013', 'Mr.', 'Saepe.', 'Excepturi quo culpa voluptas amet sit. Commodi suscipit optio facere dolorem hic iusto. Fugiat voluptatem saepe voluptatibus error officia.', '1year_Exp & Above', '2022-06-29 23:03:21', '2022-06-29 23:03:21'),
(12, 1, NULL, 'Example Developer', 'ITVisionHub', '50000', 'Yangon', 'Job for Develper', 'www.example.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1year_Exp & Above', '2022-07-04 22:40:26', '2022-07-04 22:40:26'),
(13, 2, NULL, 'React Developer', 'Studio Co.Ltd', '1000000', 'Yangon', 'Developer', 'http://studiocoltd.com', 'We are Hiring.', '1year_Exp & Above', '2022-07-05 21:38:11', '2022-07-05 21:38:11'),
(14, 3, NULL, 'PHP Developer', 'ITVision Hub', '350000', 'Yangon', 'Developer', 'http://itvisionhub.com', 'Full Stack will be better.', '', '2022-07-05 21:43:34', '2022-07-05 21:43:34'),
(15, 3, NULL, 'Laravel Developer', 'ITVision Hub', '500000', 'Yangon', 'Developer', 'http://itvisionhub.com', 'We are Hiring.', '', '2022-07-05 21:59:14', '2022-07-05 21:59:14'),
(16, 1, NULL, 'nulewixy', 'teco@mailinator.com', '10000', 'Ahlone', 'pelysape@mailinator.com', 'teku@mailinator.com', 'This is desc', '', '2022-07-18 01:40:44', '2022-07-18 01:40:44'),
(17, 1, NULL, 'qyhehi', 'rasisolyk@mailinator.com', '998', 'pigecoqi@mailinator.com', 'cujo@mailinator.com', 'hobaqocid@mailinator.com', 'Adipisicing maxime v', '', '2022-07-18 02:00:17', '2022-07-18 02:00:17'),
(18, 3, NULL, 'golok', 'gypax@mailinator.com', '342', 'fyxoqehe@mailinator.com', 'cigyz@mailinator.com', 'nyro@mailinator.com', 'Aut cupidatat in nul', '', '2022-07-18 02:49:06', '2022-07-18 02:49:06'),
(19, 3, NULL, 'Flutter Developer', 'ITVisionHub', '20000', 'Yangon', 'Software', 'https://itvisionhub.com', 'This is a short description for Flutter developer.', '1year_Exp & Above', '2022-07-20 02:06:13', '2022-07-20 02:06:13'),
(21, 3, 2, 'Web Developer', 'Studio AMK', '50000', 'Ahlone', 'web development', 'studioamk.com', 'dfjdlajf', 'Director Above', '2022-08-01 01:24:13', '2022-08-01 01:24:13'),
(22, 2, 2, 'Android Developer', 'ITVisionHub', '1000000', 'Kamaryut', 'android development', 'itvisionhub.com', 'This is a short description.', '1year_Exp & Above', '2022-08-01 01:38:55', '2022-08-01 01:38:55'),
(23, 2, 2, 'cybydi', 'lipo', '375', 'byzeqaxaf@mailinator.com', 'jyheh', 'kiciduvo@mailinator.com', 'Veniam veniam id e', 'Manager', '2022-08-01 21:42:13', '2022-08-01 21:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_keyfeature`
--

CREATE TABLE `sg_info_keyfeature` (
  `KeyFeature_ID` int(11) NOT NULL,
  `KeyFeature_Name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_keyfeature`
--

INSERT INTO `sg_info_keyfeature` (`KeyFeature_ID`, `KeyFeature_Name`, `created_at`, `updated_at`) VALUES
(1, 'Air-Conditioning', '2022-08-19 22:35:20', '2022-08-19 22:35:20'),
(2, 'Cooker Hob/Hood', '2022-08-19 22:35:57', '2022-08-19 22:35:57'),
(3, 'Fridge', '2022-08-19 22:38:11', '2022-08-19 22:38:11'),
(4, 'High Floor', '2022-08-19 22:38:37', '2022-08-19 22:38:37'),
(5, 'Intercom', '2022-08-19 22:38:41', '2022-08-19 22:38:41'),
(6, 'Renovated', '2022-08-19 22:41:46', '2022-08-19 22:41:46'),
(7, 'Dryer', '2022-08-19 22:41:48', '2022-08-19 22:41:48'),
(8, 'Water Heater', '2022-08-19 22:41:51', '2022-08-19 22:41:51'),
(9, 'Balcony', '2022-08-19 22:41:53', '2022-08-19 22:41:53'),
(10, 'Corner Unit', '2022-08-19 22:41:55', '2022-08-19 22:41:55'),
(11, 'Park / Greenery View', '2022-08-19 22:41:57', '2022-08-19 22:41:57'),
(12, 'Internet Connection', '2022-08-19 22:41:58', '2022-08-19 22:41:58'),
(13, 'Oven / Microwave', '2022-08-19 22:42:00', '2022-08-19 22:42:00'),
(14, 'Washing Machine', '2022-08-19 22:42:02', '2022-08-19 22:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_nearby`
--

CREATE TABLE `sg_info_nearby` (
  `NearBy_ID` int(11) NOT NULL,
  `NearBy_Name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_payment_type`
--

CREATE TABLE `sg_info_payment_type` (
  `Payment_type_ID` int(11) NOT NULL,
  `Payment_type_Name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_post`
--

CREATE TABLE `sg_info_post` (
  `Post_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `RELEAVENT_TYPE` char(2) DEFAULT NULL,
  `RELEAVENT_ID` int(11) DEFAULT NULL,
  `POST_DATE` varchar(40) DEFAULT NULL,
  `ALLOWANCE` char(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_rent_house`
--

CREATE TABLE `sg_info_rent_house` (
  `Rent_House_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `PROJECT_NAME` varchar(30) DEFAULT NULL,
  `Project_type` varchar(50) DEFAULT NULL,
  `Floor_lvl` varchar(10) DEFAULT NULL,
  `Floor_Size` varchar(30) DEFAULT NULL,
  `RH_Nearest_MRT_LRT` varchar(50) DEFAULT NULL,
  `RH_MRT_LRT_Line` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `DEVELOPER` varchar(30) DEFAULT NULL,
  `PSF` varchar(30) DEFAULT NULL,
  `Avaliable_From` varchar(255) DEFAULT NULL,
  `PRICE_MIN` varchar(255) DEFAULT NULL,
  `PRICE_MAX` varchar(255) DEFAULT NULL,
  `No_Room` int(11) DEFAULT NULL,
  `No_Birthroom` int(11) DEFAULT NULL,
  `No_Toilet` int(11) DEFAULT NULL,
  `Cooking_Allow` tinyint(1) DEFAULT NULL,
  `RH_Description` varchar(200) DEFAULT NULL,
  `RH_PHOTO` varchar(50) DEFAULT NULL,
  `SorR` char(2) DEFAULT NULL,
  `Flat_Y_N` char(2) DEFAULT NULL,
  `KeyFeature_IDS` varchar(255) DEFAULT NULL,
  `Facilities_IDS` varchar(255) DEFAULT NULL,
  `NearBy_IDS` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_rent_house`
--

INSERT INTO `sg_info_rent_house` (`Rent_House_ID`, `USER_ID`, `PROJECT_NAME`, `Project_type`, `Floor_lvl`, `Floor_Size`, `RH_Nearest_MRT_LRT`, `RH_MRT_LRT_Line`, `ADDRESS`, `DEVELOPER`, `PSF`, `Avaliable_From`, `PRICE_MIN`, `PRICE_MAX`, `No_Room`, `No_Birthroom`, `No_Toilet`, `Cooking_Allow`, `RH_Description`, `RH_PHOTO`, `SorR`, `Flat_Y_N`, `KeyFeature_IDS`, `Facilities_IDS`, `NearBy_IDS`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Nobis.', 'Vel et.', 'Qui.', 'Culpa.', 'Dolorem.', 'In libero.', '4282 Turner Crescent Suite 140\nWest Tiaberg, AZ 93857', 'Numquam.', 'Fugiat.', 'Bosnia and Herzegovina', '0', '3', 9, 9, 3, 0, 'Quia nemo vel qui dolorem. Modi omnis necessitatibus illum enim nisi. Sit et nam officia nam molestias.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(2, NULL, 'Sed.', 'Dolorum.', 'Nisi.', 'Fuga.', 'Est aut.', 'Dolore.', '37153 Nolan Skyway\nSouth Icie, LA 72781', 'Et sunt.', 'Porro.', 'Niger', '4', '0', 7, 4, 2, 1, 'Vero voluptates sed vel iste at. Quam maxime cumque voluptatum voluptatem. Possimus eos ex velit debitis.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(3, NULL, 'Animi.', 'Eaque.', 'Illo.', 'Similique.', 'Sint.', 'Voluptas.', '57502 Marisol Loop Apt. 351\nTressieburgh, MI 50148', 'Quod qui.', 'Dicta.', 'Western Sahara', '9', '5', 1, 9, 3, 0, 'Est magnam ipsa iste. Reiciendis vitae et natus id. Quae accusamus aut eos aperiam reiciendis repellat est. Facere quisquam est nihil.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(4, NULL, 'Odit.', 'Suscipit.', 'Ut.', 'Quod.', 'Tempore.', 'Nostrum.', '738 Cremin Gardens\nPeytonhaven, HI 87353-4695', 'Placeat.', 'Beatae.', 'Czech Republic', '2', '4', 1, 7, 8, 1, 'In rerum et sit quis. Optio in doloribus repudiandae vel officiis. Atque aut tempore nam adipisci quos. Eum illo quam libero tempore nulla sit quos nesciunt.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(5, NULL, 'Magni.', 'Harum.', 'Rem.', 'Sequi.', 'Quas.', 'Sunt.', '119 Myah Valley\nEast Princess, NV 26620', 'Eos.', 'Non.', 'Australia', '0', '3', 5, 5, 5, 1, 'Doloremque et qui similique consequatur. Non vel nisi eveniet. Nihil sunt velit perspiciatis magni praesentium. Quia eum nostrum sit in quos.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(6, NULL, 'Iure.', 'Enim.', 'Ex.', 'Cum.', 'Iure quas.', 'At.', '9936 Lyla Rapids\nNew Tevin, IA 17266-8956', 'Quo.', 'Ad.', 'Pakistan', '3', '6', 6, 10, 1, 0, 'Repudiandae facilis explicabo aperiam temporibus dolores ratione dolores architecto. Cumque mollitia minima aliquam. Asperiores aut ad ratione officia. Ea est repudiandae in quibusdam ullam.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(7, NULL, 'Optio et.', 'Aut.', 'Et.', 'Explicabo.', 'Aliquid.', 'Earum.', '3291 Sofia Stream\nMurrayborough, WV 12693-3110', 'Iure.', 'Atque ex.', 'Bahrain', '3', '6', 8, 9, 2, 1, 'Eligendi dicta qui numquam possimus. Illo nihil corporis occaecati tempore. Nemo ut voluptatibus quisquam nostrum aut excepturi voluptatem.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(8, NULL, 'Molestiae.', 'Odio.', 'Et.', 'Odit.', 'Esse.', 'Occaecati.', '5436 Koepp Springs Apt. 994\nMohrville, KS 74033-1174', 'Similique.', 'Qui.', 'Albania', '3', '1', 5, 9, 1, 1, 'Natus deleniti error illum aspernatur. Quaerat dolor dolorem amet ut nisi. Illo modi nam modi nihil.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:05', '2022-06-29 22:53:05'),
(9, NULL, 'Omnis.', 'Dolor in.', 'Aut.', 'Qui.', 'Dolorem.', 'In ut.', '9342 Kemmer Tunnel Apt. 384\nPort Luzport, IA 56285-5506', 'Deleniti.', 'Sed.', 'Saint Helena', '8', '8', 5, 7, 8, 1, 'Quaerat nobis nostrum blanditiis facilis voluptas. Officiis vel cum laboriosam eos sit. Velit suscipit ex veniam nisi aperiam. Molestiae possimus et eaque et voluptatem rem nihil.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:06', '2022-06-29 22:53:06'),
(10, NULL, 'Aut.', 'Pariatur.', 'Eos.', 'Excepturi.', 'Adipisci.', 'Eligendi.', '262 Koepp Junction Suite 724\nMohrbury, MS 08095-1826', 'Aut.', 'Vel qui.', 'Bulgaria', '5', '5', 9, 4, 9, 1, 'Aspernatur nobis eligendi ipsam laboriosam id rem laborum ut. Voluptate culpa consequatur quo laudantium iure tempora. Et non inventore voluptatem.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 22:53:06', '2022-06-29 22:53:06'),
(11, 2, NULL, 'Studio', '5th floor', '160', 'Ahlone', NULL, 'Yangon, Ahlone post office', 'Web Developer', 'psf', '2022-07-22', NULL, '100 SGD', 3, 5, NULL, NULL, 'This is a rent house description.', '1658304339.jpg', NULL, NULL, 'Cooker Hob/Hood,Fridge', 'Barbeque Area,Covered car park,Function room', NULL, '2022-07-20 01:35:39', '2022-07-20 01:35:39'),
(12, 2, NULL, 'Mine', '5th', '150', 'Ahlone', NULL, 'Yangon, near Ahlone', 'Web Developer', 'psf', '2022-07-30', NULL, '500 ', 2, 5, NULL, NULL, 'This is a description for rooms.', '1658981403.jpg', NULL, NULL, 'Air-Conditioning,Cooker Hob/Hood', 'Barbeque Area,Covered car park,Function room', NULL, '2022-07-27 21:40:03', '2022-07-27 21:40:03'),
(13, 20, NULL, 'New Home\\', '2nd', '120', 'Near from market', NULL, 'Yangon', 'Developer', '22', '2022-08-30', NULL, '2000 SGD', 3, 2, NULL, NULL, 'Description', '1660965283.jpg', NULL, NULL, 'Cooker Hob/Hood,Fridge,High Floor', 'Covered car park,Function room,Mini-Mart', NULL, '2022-08-19 20:44:43', '2022-08-19 20:44:43'),
(14, 20, NULL, 'Next Home', '3rd', '220', 'Near from hospital', NULL, 'Yangon, Insein', 'Golden Royal', '32', '2022-08-23', NULL, '2000 SGD', 2, 3, NULL, NULL, 'This is house ', '1660965824.jpg', NULL, NULL, 'Fridge,High Floor', 'Function room,Mini-Mart', NULL, '2022-08-19 20:53:44', '2022-08-19 20:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_typeofrole`
--

CREATE TABLE `sg_info_typeofrole` (
  `Typeofrole_ID` int(11) NOT NULL,
  `Typeofrole_Name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sg_info_typeofrole`
--

INSERT INTO `sg_info_typeofrole` (`Typeofrole_ID`, `Typeofrole_Name`, `created_at`, `updated_at`) VALUES
(1, 'Full Time', '2022-07-04 22:40:26', '2022-07-04 22:40:26'),
(2, 'Part Time', '2022-07-05 21:38:11', '2022-07-05 21:38:11'),
(3, 'Internship', '2022-07-05 21:43:34', '2022-07-05 21:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `sg_info_user`
--

CREATE TABLE `sg_info_user` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(30) DEFAULT NULL,
  `USER_PASSWORD` varchar(30) DEFAULT NULL,
  `Gmail` varchar(40) DEFAULT NULL,
  `ACTIVE` char(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`, `google_id`) VALUES
(2, 'Lwin Moe', 'lwinmoe@gmail.com', NULL, '$2a$12$CJopWB/kL9zSa5MntrFd0O9/ztz3vgwoxxN/hDB1bloWB29RdOyBS', NULL, NULL, NULL, NULL, NULL, NULL, 'USR', '2022-06-30 01:27:08', '2022-06-30 01:27:08', NULL),
(3, 'Admin', 'admin@admin.com', NULL, '$2y$10$NDN9TqUJ0dkRGfwm/c4p7eIUc2zgimMv4ehazgymZWi5shQn/Q2Im', NULL, NULL, NULL, NULL, NULL, NULL, 'ADM', '2022-07-01 20:37:00', '2022-07-01 20:37:00', NULL),
(20, 'Tes Name', 'test@gmail.com', NULL, '$2y$10$g2yMETw2UlZjRn6xjzdV4OnHy.DA6eaqoSMVqQ3wCWUntY6XAx91a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-19 20:34:53', '2022-08-19 20:34:53', NULL),
(21, 'test', 'test1@gmail.com', NULL, '$2y$10$lNVMk18HbdiuPbZOI7Adtuu5Vk/QU7I3QGBu4mNXMQS3qzSG7BtSa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-26 03:16:49', '2022-08-26 03:16:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_rooms`
--
ALTER TABLE `book_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sg_info_agent`
--
ALTER TABLE `sg_info_agent`
  ADD PRIMARY KEY (`Agent_ID`),
  ADD KEY `FK_Agent_POST_ID_SG` (`POST_ID`),
  ADD KEY `FK_Agent_Paymet_type_ID_SG` (`Payment_type_ID`);

--
-- Indexes for table `sg_info_apply_job`
--
ALTER TABLE `sg_info_apply_job`
  ADD PRIMARY KEY (`A_Job_ID`),
  ADD KEY `FK_Job_POST_ID_SG` (`POST_ID`),
  ADD KEY `FK_Job_A_USER_ID_SG` (`USER_ID`);

--
-- Indexes for table `sg_info_facilities`
--
ALTER TABLE `sg_info_facilities`
  ADD PRIMARY KEY (`Facilities_ID`);

--
-- Indexes for table `sg_info_general`
--
ALTER TABLE `sg_info_general`
  ADD PRIMARY KEY (`General_ID`),
  ADD UNIQUE KEY `FK_General_USER_ID` (`USER_ID`),
  ADD KEY `FK_General_G_ID` (`GHeader_ID`);

--
-- Indexes for table `sg_info_gheader`
--
ALTER TABLE `sg_info_gheader`
  ADD PRIMARY KEY (`GHeader_ID`);

--
-- Indexes for table `sg_info_job`
--
ALTER TABLE `sg_info_job`
  ADD PRIMARY KEY (`Job_ID`),
  ADD KEY `FK_Job_Typeofrole_ID_SG` (`Typeofrole_ID`),
  ADD KEY `FK_Job_USER_ID_SG` (`USER_ID`);

--
-- Indexes for table `sg_info_keyfeature`
--
ALTER TABLE `sg_info_keyfeature`
  ADD PRIMARY KEY (`KeyFeature_ID`);

--
-- Indexes for table `sg_info_nearby`
--
ALTER TABLE `sg_info_nearby`
  ADD PRIMARY KEY (`NearBy_ID`);

--
-- Indexes for table `sg_info_payment_type`
--
ALTER TABLE `sg_info_payment_type`
  ADD PRIMARY KEY (`Payment_type_ID`);

--
-- Indexes for table `sg_info_post`
--
ALTER TABLE `sg_info_post`
  ADD PRIMARY KEY (`Post_ID`),
  ADD KEY `FK_Post_USER_ID_SG` (`USER_ID`);

--
-- Indexes for table `sg_info_rent_house`
--
ALTER TABLE `sg_info_rent_house`
  ADD PRIMARY KEY (`Rent_House_ID`),
  ADD KEY `FK_Rent_House_USER_ID_SG` (`USER_ID`);

--
-- Indexes for table `sg_info_typeofrole`
--
ALTER TABLE `sg_info_typeofrole`
  ADD PRIMARY KEY (`Typeofrole_ID`);

--
-- Indexes for table `sg_info_user`
--
ALTER TABLE `sg_info_user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_rooms`
--
ALTER TABLE `book_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sg_info_agent`
--
ALTER TABLE `sg_info_agent`
  MODIFY `Agent_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sg_info_apply_job`
--
ALTER TABLE `sg_info_apply_job`
  MODIFY `A_Job_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sg_info_facilities`
--
ALTER TABLE `sg_info_facilities`
  MODIFY `Facilities_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sg_info_general`
--
ALTER TABLE `sg_info_general`
  MODIFY `General_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sg_info_gheader`
--
ALTER TABLE `sg_info_gheader`
  MODIFY `GHeader_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sg_info_job`
--
ALTER TABLE `sg_info_job`
  MODIFY `Job_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sg_info_keyfeature`
--
ALTER TABLE `sg_info_keyfeature`
  MODIFY `KeyFeature_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sg_info_nearby`
--
ALTER TABLE `sg_info_nearby`
  MODIFY `NearBy_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sg_info_payment_type`
--
ALTER TABLE `sg_info_payment_type`
  MODIFY `Payment_type_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sg_info_post`
--
ALTER TABLE `sg_info_post`
  MODIFY `Post_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sg_info_rent_house`
--
ALTER TABLE `sg_info_rent_house`
  MODIFY `Rent_House_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sg_info_typeofrole`
--
ALTER TABLE `sg_info_typeofrole`
  MODIFY `Typeofrole_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sg_info_user`
--
ALTER TABLE `sg_info_user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sg_info_agent`
--
ALTER TABLE `sg_info_agent`
  ADD CONSTRAINT `FK_Agent_POST_ID_SG` FOREIGN KEY (`POST_ID`) REFERENCES `sg_info_post` (`Post_ID`),
  ADD CONSTRAINT `FK_Agent_Paymet_type_ID_SG` FOREIGN KEY (`Payment_type_ID`) REFERENCES `sg_info_payment_type` (`Payment_type_ID`);

--
-- Constraints for table `sg_info_apply_job`
--
ALTER TABLE `sg_info_apply_job`
  ADD CONSTRAINT `FK_Job_POST_ID_SG` FOREIGN KEY (`POST_ID`) REFERENCES `sg_info_post` (`Post_ID`);

--
-- Constraints for table `sg_info_general`
--
ALTER TABLE `sg_info_general`
  ADD CONSTRAINT `FK_General_G_ID` FOREIGN KEY (`GHeader_ID`) REFERENCES `sg_info_gheader` (`GHeader_ID`),
  ADD CONSTRAINT `FK_General_USER_ID` FOREIGN KEY (`USER_ID`) REFERENCES `sg_info_user` (`USER_ID`);

--
-- Constraints for table `sg_info_job`
--
ALTER TABLE `sg_info_job`
  ADD CONSTRAINT `FK_Job_Typeofrole_ID_SG` FOREIGN KEY (`Typeofrole_ID`) REFERENCES `sg_info_typeofrole` (`Typeofrole_ID`);

--
-- Constraints for table `sg_info_post`
--
ALTER TABLE `sg_info_post`
  ADD CONSTRAINT `FK_Post_USER_ID_SG` FOREIGN KEY (`USER_ID`) REFERENCES `sg_info_user` (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
