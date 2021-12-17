-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2021 lúc 04:02 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `parkings`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Z6xG3I0Lr2XjgRQjcXUoE.siEiV0XdXgUCbwXB5w/d82MJG6x5Oe6', '2021-12-08 19:27:22', '2021-12-08 19:27:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Trần Huy', 'kiH3dFz@gmail.com', '$2y$10$230tY1dygyGCKq1H2IEdB.pQgxy5RpGalXWvDZ71HvskwdKsg8rMq', NULL, NULL),
(2, 'Anh Dức', 'QMrQfNK@gmail.com', '$2y$10$pWXTBh2eIar9bWglSoPTaOUQ5FCGSgMG2kow0DEw8OOUph6wbVene', NULL, NULL),
(3, 'Mào Dũng', 'WCNUf45@gmail.com', '$2y$10$qW.K9qmjADOrZkmfdn8.p.V33D7rTSxAK2D4A6s8SeYb7G4jSGa/O', NULL, NULL),
(4, 'Nhật Vượng', 'YlZJkq3@gmail.com', '$2y$10$7DE0x5uY/NvJexHhLnXdq.b0Qz.HDYRqTYIEcPDmBSsMaDk6chCtC', NULL, NULL),
(5, 'Văn Đồng', 'm2eoZlL@gmail.com', '$2y$10$0ZFeIl9Qd5jfciM8bqhOjuBi7IaaFNVEiTvxfYGUSLMsDnxghxNX2', NULL, NULL),
(6, 'Nguyễn Đức', 'duc@gmail.com', '$2y$10$H77vxCRfWqgIpTBZtm9J9u/sTfjZ5riCLkBEffRjhe1hWB3k8OvOK', '2021-12-08 19:52:49', '2021-12-08 19:52:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_11_12_140145_create_parking_managers', 1),
(3, '2021_11_14_081824_create_parkings_home', 1),
(4, '2021_11_18_025053_create_parking_slot', 1),
(5, '2021_11_18_030354_create_driver', 1),
(6, '2021_11_24_031729_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parking_homes`
--

CREATE TABLE `parking_homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png',
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_panking_slot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_manager_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parking_homes`
--

INSERT INTO `parking_homes` (`id`, `avatar`, `address`, `sdt`, `price`, `area`, `start_time`, `end_time`, `max_panking_slot`, `parking_manager_id`, `created_at`, `updated_at`) VALUES
(1, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'Số 5, Mễ Trì Thượng, Mễ trì, Nam Từ Liêm', '0943212331', '5 000', '1000', '5:30', '0:00', '700', 1, NULL, NULL),
(2, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'Số 77, Mễ Trì Thượng, Mễ trì, Nam Từ Liêm', '0943212388', '5 000', '1000', '5:30', '0:00', '700', 1, NULL, NULL),
(3, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'Số 12, Mễ Trì Hạ, Mễ trì, Nam Từ Liêm', '09432123', '5 000', '1000', '5:30', '0:00', '700', 1, NULL, NULL),
(4, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'Số 24, Mễ Trì Hạ, Mễ trì, Nam Từ Liêm', '09483243', '5 000', '1000', '5:30', '0:00', '700', 1, NULL, NULL),
(5, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'Số 24, Ngõ 7, Tổ 02, Hồ Tùng Mậu, Nam Từ Liêm', '1CHJcAjVNI', '5 000', '1000', '5:30', '0:00', '700', 2, NULL, NULL),
(6, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'Số 08, Ngõ 123, Tổ 12, Hồ Tùng Mậu, Nam Từ Liêm', 'ZnNFEurVfg', '5 000', '1000', '5:30', '0:00', '700', 2, NULL, NULL),
(7, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'Số 78, Hồ Tùng Mậu, Nam Từ Liêm, Nam Từ Liêm', '09843234', '5 000', '1000', '5:30', '0:00', '700', 4, NULL, NULL),
(8, 'https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png', 'số nhà 60, Mễ Trì Hạ, Mễ trì, Nam Từ Liêm, Mễ trì', '094312312', '6000', '1000', '8:00', '21:00', '100', 4, '2021-12-10 22:35:12', '2021-12-10 22:35:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parking_managers`
--

CREATE TABLE `parking_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parking_managers`
--

INSERT INTO `parking_managers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Nhật Vượng', 'JlVZ4H4@gmail.com', '$2y$10$/vG0xMmqEYIX6y9C1Mo77.kj9Ld2p8lODXsqyZmrY4iy0rIKchm1S', NULL, NULL),
(2, 'Anh Tài', 'GT4NsXt@gmail.com', '$2y$10$02GE5YewCPhhuuefO0xGsuHMlWuNEF4./5rrRLTUslkXvmHaaL2W2', NULL, NULL),
(3, 'Nhất Quán', 'nenI9ml@gmail.com', '$2y$10$WMmBIgj5C3YQGOXjYTFGF.Gf3yyfb8EE7/awprPr6RqadNoX3rnCO', NULL, NULL),
(4, 'Thủy Hử', 'lppX8H9@gmail.com', '$2y$10$E7gCh1mrNgQF9A6Gy76QfO.zey7HkMuxpbSbFepUnMFQXwT/p4Q66', NULL, NULL),
(5, 'Phú Lâm', 'IvQ8LXK@gmail.com', '$2y$10$.HoNg3FyTpu92fwKLSEFq.MuRITxjqOkZ8QAFW6ZVRRYtGfSdOQuO', NULL, NULL),
(6, 'Phú Lâm', '7Zvlm2I@gmail.com', '$2y$10$Zd/bMgwffUDbxJWKuB2dTeNwy23KAgEghhXkKwCqEnoZ2mO0zsbxy', NULL, NULL),
(7, 'Hoài Lam', 'hoailam@gmail.com', '$2y$10$EK3U8SocCjv50eAAapkIYu8cQXVWJqYlsqEHItcO1JMuFjIh1YIhq', '2021-12-08 18:46:47', '2021-12-08 18:46:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parking_slots`
--

CREATE TABLE `parking_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parking_home_id` bigint(20) UNSIGNED NOT NULL,
  `driver_id` bigint(20) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tecktime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parking_slots`
--

INSERT INTO `parking_slots` (`id`, `parking_home_id`, `driver_id`, `sdt`, `time`, `tecktime`, `vehicle`, `created_at`, `updated_at`) VALUES
(2, 8, 1, '09865423', '8:30', '20:30', 'xe may', '2021-12-11 06:17:35', '2021-12-11 06:17:35'),
(3, 8, 2, '09712321', '5:30', '21:30', 'xe may', '2021-12-11 06:51:15', '2021-12-11 06:51:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `parking_homes`
--
ALTER TABLE `parking_homes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parking_homes_parking_manager_id_foreign` (`parking_manager_id`);

--
-- Chỉ mục cho bảng `parking_managers`
--
ALTER TABLE `parking_managers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `parking_slots`
--
ALTER TABLE `parking_slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parking_slots_parking_home_id_foreign` (`parking_home_id`),
  ADD KEY `parking_spots_driver_id_foreign` (`driver_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `parking_homes`
--
ALTER TABLE `parking_homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `parking_managers`
--
ALTER TABLE `parking_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `parking_slots`
--
ALTER TABLE `parking_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `parking_homes`
--
ALTER TABLE `parking_homes`
  ADD CONSTRAINT `parking_homes_parking_manager_id_foreign` FOREIGN KEY (`parking_manager_id`) REFERENCES `parking_managers` (`id`);

--
-- Các ràng buộc cho bảng `parking_slots`
--
ALTER TABLE `parking_slots`
  ADD CONSTRAINT `parking_slots_parking_home_id_foreign` FOREIGN KEY (`parking_home_id`) REFERENCES `parking_homes` (`id`),
  ADD CONSTRAINT `parking_spots_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
