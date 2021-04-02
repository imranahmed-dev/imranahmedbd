-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 08:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imranahmedbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '1 = active, 2 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'ওয়েব সাইট দরকার?', 'web-sait-drkar', '<p>বর্তমান বিশ্বে তথ্য প্রযুক্তির এই উষালগ্নে একটি ওয়েবসাইট এর গুরুত্ব কতটুকু তা আর আলাদাভাবে বলার কিছু নাই। একটি ওয়েবসাইট-ই পারে আপনার কাংক্ষিত গ্রাওহের কাছে খুব সহজেই আপনাকে পৌছে দিতে। ধরুন আপনার একটা মোবাইলের দোকান আছে। আপনার দোকানের একটি ওয়েবসাইট আছে। আপনার ওয়েবসাইট থেকে সারা দেশের মানুষ আপনার আপনার ক্যাটালগ দেখে আপনার প্রোডাক্ট, প্রাইস ও সার্ভিস সম্পর্কে খুব সহজেই জানতে পারছে এবং অন্যন্য কোম্পানী বা দোকানের সাথে কোম্পেয়ার করতে পারতেছে। এখন যদি আপনার প্রতি জেলায় ডেলিভারীর ব্যাবস্থা থাকে তবে খুব সহজেই একজেলায় দোকান রেখেও সারা দেশব্যাপি ব্যবসার প্রসার ঘটাতে পারছেন। হয়তো আপনার একটা ফেসবুকে একটা পেজ আছে, কিন্তু পেজের বিশ্বাসযোগ্যতা কতটুকু? আপনার ওয়েবসাইটই পারে গ্রাহকের আস্থা কয়েকগুন বাড়িয়ে দিতে।<br><br>ধরুন আপনার একটি শিক্ষাপ্রতিষ্ঠান (স্কুল/কলেজ অথবা কোচিং সেন্টার)। আপনার ওয়েবসাইটের মাধ্যমে আপনাদের প্রতিষ্ঠানের বৈশিষ্ট্য, আপনাদের সাফল্য, আপনাদের শিক্ষার মান সবাই কে জানিতে দিতে পারেন। ফটোগ্যালারী ও ছবির মাধ্যমে কৃতিছাত্রদের হাইলাইট করতে পারেন। তাহলে খুব সহজেই আপনার প্রতিষ্ঠান সম্পর্কে সবার একটা পজেটিভ ধারনা জন্মাবে।<br>আপনি একটি এনজিও এর প্রধান। আপনার ওয়েবসাইটই পারে বিশ্ববাসীর কাছে আপনার প্রতিষ্ঠানের কার্যক্রম পৌছে দিতে।<br>আপনি ফ্রীল্যান্সার অথবা কোন আইটি ব্যাবসার সাথে জরিত। আপনার প্রোফেশনালিটির বহিঃপ্রকাশ ঘটবে আপনার ওয়েবসাইটেই। আপনার পোর্টফোলিওই বলে দেবে আপনি কতটুকু দক্ষ। আপনার গ্রাহক জানতে পারবে আপনি তার কাজটি করে দিতে পারবেন কিনা অথা এই কাজের জন্য তার বাজেট কত করতে হতে পারে। ক্লায়েন্ট এর দৃস্টি আকর্ষনের মেইন হাতিয়ারই হইলো ওয়েবসাইট।<br>আর আমি দিচ্ছি আপনাকে&nbsp; অন্তান্ত সাশ্রয়ী প্যাকেজে আপনার ওয়েবসাইট তৈরী করার সুযোগ। ওয়েবসাইট তৈরী করুন আর আপনার ব্যাবসাকে কয়েকগুনে প্রসারিত করুন।<br></p>', '/uploaded/blog/1617278474_6065b60a33b57.png', 1, '2021-04-01 05:48:22', '2021-04-01 06:01:14'),
(4, 2, 'ক্যারিয়ার হিসেবে ওয়েব ডেভেলপার', 'kzariyar-hisebe-web-develpar', '<p>অনলাইনে কাজের চাহিদার শীর্ষে রয়েছে ওয়েব প্রোগ্রামিং, আর্টিকেল রাইটিং, পিএইচপি, এইচটিএমএল ও গ্রাফিক্স ডিজাইন। মজার বিষয় হলো গ্রাফিক ডিজাইনার ও এসইও জানা লোক অনলাইনে যথেষ্ট থাকলেও ওয়েব প্রোগ্রামিং জানা লোকের সংখ্যা কম। সম্প্রতি মার্কেটপ্লেস ইল্যান্স তাদের এক জরিপে জানায়, প্রতিমাসে বিশ্বব্যাপী প্রায় ১ মিলিয়ন ওয়েবসাইট অনলাইনে যুক্ত হচ্ছে। আর এই বিশাল সংকটটি চোখে পড়বে তখনই যখন আপনি ওডেস্ক, ইল্যান্স বা এই ধরনের আউটসোর্সিং সাইটগুলোর জব অফারগুলো দেখবেন। ওয়েব ডেভেলপিং কাজের জন্য আবেদনের সংখ্যাও একেবারে কম, তাই সেখানে কাজ পাওয়ার সম্ভাবনা বেশি। এবারের মূল ফিচারে আলোচনা করা হলো ওয়েব ডেভেলপার হওয়ার নানা দিক। লিখেছেন রবি হাসান<br><br><b>ওয়েব ডিজাইনার হতে হলে কি কম্পিউটার সায়েন্স থেকে পাশ করতে হবে?</b><br><br>কম্পিউটার সায়েন্স থেকে পাশ করে তবেই ওয়েব ডিজাইনার হতে হবে, এটা ভাবাটাই স্বাভাবিক। কিন্তু বাস্তবতা ভিন্ন। বেশিরভাগ ওয়েব ডেভেলপমেন্ট সম্পর্কিত অফিসগুলোতে গেলেই দেখা যায় যে ৯০ শতাংশ ডেভেলপারের এডুকেশন ব্যাকগ্রাউন্ড কম্পিউটার সায়েন্সের বাইরে। তাই নিজের কম্পিউটার সায়েন্সে পড়ার ব্যাকগ্রাউন্ড না থাকলে ভয় পাওয়ার কিছুই নেই।<br><br><b>ওয়েব ডেভেলপার হতে হলে কী করতে হবে?</b><br><br>পৃথিবীর যেকোনো কাজেই ধৈর্য, পরিশ্রম, কাজের প্রতি ভালোবাসা ও সঠিক দিকনির্দেশনা খুব প্রয়োজন। মাত্র ২০ হাজার টাকার চাকরির জন্য যদি জীবনের ৩০টি বছর ধৈর্যের সাথে পরিশ্রম করতে পারেন, তাহলে যেখানে একজন ওয়েব ডেভেলপার হিসেবে মাসে ৭০ থেকে ১ লক্ষ টাকা আয়ের সুযোগ রয়েছে সেখানে ৬ থেকে ৭ মাস ভালোভাবে পরিশ্রম করতে ক্ষতি কী! সবসময়ই অন্য কাউকে আউটসোর্সিং করতে দেখলে আফসোস করি, কিন্তু তাদের আয়কে লোভ না করে তারা কীভাবে এই জায়গাটা অর্জন করেছে সেটা খতিয়ে দেখাটাই গুরুত্বপূর্ণ। আর জীবনের শুরুতেই নির্দিষ্ট কোনোকিছুর জন্য নিজেকে ভালোভাবে যোগ্য করে তোলাই বুদ্ধিমানের কাজ। আমাদের দেশে ওয়েব ডেভেলাপিং কোর্স শেখানোর অসংখ্য প্রতিষ্ঠান রয়েছে। এসব প্রতিষ্ঠানে ৬ মাস কিংবা ১ বছরের মেয়াদি কোর্সে ভর্তি হয়ে মনোযোগের সঙ্গে কোর্সটি সম্পন্ন করুন। কোর্স সম্পন্ন হওয়ার আগেই আপনি আউটসোর্সিং করার যোগ্য হয়ে উঠবেন।<br><br><b>আয় কী রকম হতে পারে?</b><br><br>একজন ওয়েব ডিজাইনার ওয়েবসাইট লেআউট তৈরি, থিম তৈরি, এবং কোডিং করে থাকেন। এসইও বিষয়ক জ্ঞানগুলোও থাকা প্রয়োজন ওয়েব ডিজাইনারের। কারণ ওয়েবসাইটকে এসইও ফ্রেন্ডলি করে ডিজাইন করা একজন ওয়েব ডিজাইনারের দায়িত্ব।<br><br>এসব বিষয়ে দক্ষ একজন ওয়েব ডিজাইনারের বেতন সারাবিশ্বের যেকোনো জায়গাতে কিংবা মার্কেটপ্লেসগুলোতে ঘণ্টাপ্রতি ২০ ডলার হতে ৫০ ডলার হয়ে থাকে, যেখানে একজন গ্রাফিক ডিজাইনারের বেতন হয়ে থাকে ১০-২০ ডলার/প্রতি ঘণ্টা। এ রেট দক্ষতা এবং অভিজ্ঞতার উপর ভিত্তি করে আরও অনেক বেশি হয়ে থাকে।<br><br><b>ওয়েব ডিজাইনার নাকি ওয়েব ডেভেলপার হবো?</b><br><br>এ প্রশ্নের উত্তর পেতে হলে আগে জানা দরকার ওয়েব ডিজাইন কিংবা ওয়েব ডেভেলপিংয়ের মধ্যে পার্থক্য।<br><br>ওয়েব ডিজাইন :ওয়েবসাইটের বাইরের দিকটা যা দেখছেন, অর্থাত্ ডিজাইন, লে-আউট, কালার সবকিছু ওয়েব ডিজাইনের মধ্যে পড়ে। আর এজন্য জানা থাকতে হয়, photoshop, html, css, jquery, javascript।<br><br>ওয়েব ডেভেলপিং :ওয়েবসাইটটির পেছনে যদি কোনো অ্যাপ্লিকেশন থাকে কিংবা ওয়েবসাইটটির যে যে অংশটুকু কোডিংকে স্পর্শ ছাড়া পরিবর্তন করা যায়, সেইটুকুই ওয়েব ডেভেলপিং।<br><br>ফেসবুক দিয়েই বুঝানোর চেষ্টা করি। ফেসবুকের কালার, লেআউট যা দেখছি, সেগুলোকে মিলিয়ে বলা যায় ওয়েব ডিজাইন। কিন্তু সেখানে রেজিস্ট্রার করা, তারপর আইডি দিয়ে লগইন করা, পোস্ট করা, ছবি আপলোড করা ইত্যাদি ওয়েব ডেভেলপিংয়ের কাজ। ওয়েব ডেভেলপের জন্য জানা থাকতে হবে, php, mysql প্রভৃতি।<br><br><b>পার্থক্যটা জেনে গেলাম, এবার চলে আসি আসল প্রশ্নে অর্থাত্ আমি কোনটা হবো? ওয়েব ডিজাইনার নাকি ওয়েব ডেভেলপার?</b><br><br>যেকোনো ওয়েব ডেভেলপারকে আগে অবশ্যই ওয়েব ডিজাইনটা ভালোভাবে জানা থাকতে হয়। কিন্তু একজন ওয়েব ডিজাইনারের ওয়েব ডেভেলপিংয়ের বিষয়ে কোনো জ্ঞান থাকার দরকার নেই। অর্থাত্ ওয়েব ডিজাইনাররাই পরবর্তী সময়ে তাদের ক্যারিয়ারের ওপরের ধাপে যাওয়ার জন্য ওয়েব ডেভেলপিংটা শিখতে পারে।<br><br>যারা ব্যর্থ হয়, তার কারণ<br><br>l কোডের জটিলতাকে ভয় করা :ক্যারিয়ারের শুরুর দিকে সবসময়ের জটিল কোডের সম্মুখীন হওয়ার জন্য মনপ্রাণ দিয়ে আশা করবেন। ওয়েব ডেভেলপিং করতে গিয়ে যত বেশি কোডের জটিলতার সম্মুখীন হবেন, তত বেশি নিজের ভেতর কনফিডেন্ট তৈরি হবে। ওয়েব ডেভেলপারদের মনে রাখা দরকার, একজন ওয়েব ডেভেলপারদের কাছে অসম্ভব বলে কিছু নেই। এ বিশ্বাসটা ক্যারিয়ারের শুরু থেকেই নিজের মধ্যে তৈরি রাখতে হবে। যেটুকু শিখেছি, এর বাইরে কিছু দেখলেই পারা যাবে না, এ বিশ্বাসটা একজন ওয়েব ডেভেলপারের ব্যর্থ ক্যারিয়ারের জন্য অত্যন্ত বেশি দায়ী।<br><br>l খুব বেশি অন্যের উপর নির্ভরশীল :একজন ওয়েব ডেভেলপারকে সারাজীবন ধরেই শিখতে হয়। আপনি কারও কাছ থেকে প্রশিক্ষণ নিয়ে একটা পর্যায় পর্যন্ত যেতে পারেন। কিন্তু বাকি পথটা একা একাই হাঁটতে হবে। আর সেজন্য প্রচুর পরিমাণ গুগল থেকে সার্চ করে নিজে নিজে শেখার অভ্যাসটা শুরু থেকেই করে নিতে হবে। কোডিং সম্পর্কিত যেকোনো সমস্যার সমাধানই গুগলে পাবেন।<br><br>l রিয়েল লাইফ প্রজেক্ট না করা :যত শিখবেন তার চাইতে বেশি প্রজেক্ট করার চেষ্টা করে যেতে হবে। যত বেশি প্রজেক্ট করবেন, তত বেশি কোডিংয়ের জটিলতার সম্মুখীন হবেন। আর এ বিষয়টি আপনাকে ভালো মানের ওয়েব ডেভেলপার হিসেবে প্রস্তুত করবে। সুতরাং কোডিংয়ের জটিলতা আছে এ রকম কাজ করার চেষ্টা করুন প্রচুর পরিমাণে। কাছের কারও ওয়েবসাইট ফ্রি ডেভেলপিং করে কিংবা নিজের ব্যক্তিগত ওয়েবসাইট ডেভেলপিং করেও রিয়েল লাইফ প্রজেক্টের অভিজ্ঞতা অর্জন করতে পারেন।<br><br>l নিজের কাজের পোর্টফলিও না থাকা :কমপক্ষে ৫টি কাজের অভিজ্ঞতা থাকা ছাড়া আসলে চাকরি খুঁজলে কিংবা আউটসোর্সিং করতে গেলে কাজ না পাওয়ার আশঙ্কাটাই বেশি। এটা শুধু ওয়েব ডিজাইন কিংবা ওয়েব ডেভেলপিংয়ের ক্ষেত্রে না, যেকোনো সেক্টরের জন্য একই কথা প্রযোজ্য। এ কাজটি আমরা করি না দেখেই দক্ষ হওয়ার পরও বেশিরভাগ সময় বেকার বসে থাকি। শেখার শুরুর দিক থেকেই এদিকে সবচেয়ে বেশি গুরুত্ব দিয়ে নজর দেওয়া উচিত। ওয়েব ডিজাইনের ক্ষেত্রে একই ধরনের না করে আলাদা আলাদা ধরনের এবং জটিল কোডিংসহ ওয়েব ডেভেলপ করে সেগুলোকে কাজের পোর্টফলিও হিসেবে প্রস্তুত করুন।<br></p>', '/uploaded/blog/1617278375_6065b5a7e8a0e.jpg', 1, '2021-04-01 05:54:55', '2021-04-01 05:59:35'),
(5, 3, 'ভর্তি চলছে, ভর্তি চলছে, ভর্তি চলছে।', 'vrti-clche-vrti-clche-vrti-clche', '<p>আপনি কি একজন Full Stack Web Developer হিসেবে নিজের ক্যারিয়ার গড়তে চান? কিংবা ফ্রীল্যান্সিং করে টাকা উপার্জন করতে চান?<br>তাহলে আর দেরি না করে, নিজের সময় ও মেধাকে কাজে লাগিয়ে আমাদের কোর্সগুলো করার মাধ্যমে হয়ে উঠুন একজন Full Stack Web Developer..।</p><p><br></p><h5>আমাদের কোর্সসমূহঃ</h5><b>1. Professional web design full course.</b><br>   -Duration: 2 months.<br>   -Course fee: 3,000tk<p></p><p><br><b>2. Professional web development with PHP, Laravel, MySQL.</b><br>   -Duration: 2 months.<br>   -Course fee: 4,000tk</p><p><br><b>3. Advance Laravel e-commerce Development Course.</b><br>   -Duration: 2 months.<br>   -Course fee: 4,000tk</p><p><br></p><h5>কি কি শিখানো হবে বিস্তারিত ও  Registration করতে ভিজিট করুনঃ</h5>Website: <a href=\"https://imranahmedbd.com\" target=\"_blank\" class=\"docs-creator\">https://imranahmedbd.com</a><p></p><p><br><b>ক্লাস শুরু ১০ এপ্রিল ২০২১ ইং তারিখ থেকে।</b></p><h5>কোর্স ইন্সট্রাক্টরঃ</h5><p>-Md. Imran Ahmed<br>-Full Stack Web Developer<br>-Studied Diploma in Computer  Engineering at Barguna Government Polytechnic Institute-BGPI<br>-For more details: <a href=\"https://imranahmedbd.com\" target=\"_blank\" class=\"docs-creator\">https://imranahmedbd.com</a><br></p><p></p><p><br><b>THANK YOU</b><br></p>', '/uploaded/blog/1617388245_606762d5ad90a.jpg', 1, '2021-04-02 12:30:45', '2021-04-02 12:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Self Development', 'self-development', '2021-03-28 23:28:40', '2021-03-28 23:28:40'),
(2, 'Internet tips', 'internet-tips', '2021-03-29 13:26:21', '2021-03-29 13:26:21'),
(3, 'Notice', 'notice', '2021-04-02 12:20:50', '2021-04-02 12:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `client_says`
--

CREATE TABLE `client_says` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_says`
--

INSERT INTO `client_says` (`id`, `type`, `description`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'There are many variations of passages of Lorem Ipsum available, by injected humour, or randomised words which don\'t look even slightly believable.', 'Test', 'Test', '/uploaded/clientsay/1617371586_606721c2aa0d6.png', '2021-04-01 05:03:12', '2021-04-02 07:53:06'),
(2, 'Test', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'Test', 'Test', NULL, '2021-04-01 05:29:36', '2021-04-02 07:52:02'),
(3, 'Test', 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'Test', 'Test', NULL, '2021-04-01 05:29:55', '2021-04-02 07:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_enroll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slug`, `category`, `image`, `student_enroll`, `duration`, `skill_level`, `fee`, `short_description`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 'Advance Laravel Ecommerce Development Course', 'advance-laravel-ecommerce-development-course', 'Web Development', '/uploaded/course/1616785039_605e2e8faada6.jpg', '10', '45 Days', 'Advance', '4,000Tk', '<p>After doing this course you will learn about all the functionality of an ecommerce. And be able to develop any type of ecommerce website<br></p>', '<h4><font color=\"#e24003\">What You Will Learn:</font></h4><h6><font color=\"#e24003\"><br></font></h6><ul><li>Category</li><li>Sub Category</li><li>Brand</li><li>Color</li><li>Size</li><li>Coupon</li><li>Newsletter</li><li>Wishlist (Ajax)</li><li>Add to cart (Ajax)</li><li>Search</li><li>Order Tracking</li><li>Multiple Authentication</li><li>Blog</li></ul><ul><li>Product management</li><li>Product discount</li><li>Product price calculation (Jquery)</li><li>Product Stock management</li></ul><ul><li>Order management</li><li>New Order</li><li>Confirm Order</li><li>Progress Delivery</li><li>Success Delivery</li><li>Cancel Order</li><li>Return Order</li></ul><ul><li>Report Management</li><li>Today Order</li><li>Today Delivered</li><li>This Month Order</li><li>Search Report</li><li>Search by date range</li><li>Search by date</li><li>Search by Month</li><li>Search by year</li></ul><ul><li>Multiple languages</li><li>Mail</li><li>Payment gateway integration</li><li>Product comment</li><li>Contact message</li><li>Site settings</li><li>ETC</li></ul><h4><font color=\"#df4509\">You will also learn more:</font></h4><h6><br></h6><ul><li>Databases</li><li>Domain</li><li>Hosting</li><li>Server</li><li>Server handling</li><li>Popular framework Laravel</li><li>How a website works.</li><li>How to upload a website to the server.</li><li>Local server Xampp, Wamp, etc</li><li>ETC<br></li></ul>', '2021-03-26 12:57:19', '2021-03-29 12:56:25'),
(2, 'Professional Web Development with PHP,Laravel, MySQL', 'professional-web-development-with-phplaravel-mysql', 'Web Development', '/uploaded/course/1616785338_605e2fbad1658.jpg', '10', '2 month', 'Beginners', '4,000Tk', '<p><span style=\"font-weight: normal;\">After doing this course you will get a good idea about website development. And be able to develop any website</span></p>', '<p></p><h4><font color=\"#e0460a\" style=\"\">What You Will Learn:</font></h4><h6><font color=\"#e0460a\" style=\"\"><br></font></h6><ul><li>Web Development Language (PHP).</li><li>Write hello world in PHP.</li><li>Calculations.</li><li>Variable in PHP.</li><li>Constant.</li><li>Magic Constant.</li><li>Understanding data types.</li><li>Type of operators in PHP.</li><li>Understand Control structures in PHP.</li><li>If condition.</li><li>Else condition.</li><li>Elseif condition, </li><li>Nested condition.</li><li>Understand loop in PHP.</li><li>While loop.</li><li>Do while loop.</li><li>For loop.</li><li>Foreach loop.</li><li>Nested loop</li><li>Break and continue statement.</li><li>Switch statement.</li></ul><ul><li>Form handling</li><li>Form Validation</li><li>Php CRUD</li><li>Php OOP&nbsp;</li><li>Php OOP CRUD</li><li>PHP AJAX Crud<br></li><li>Data insert.</li><li>Data Read.</li><li>Data Update.</li><li>Data Delete</li></ul><ul><li>PHP login registration system&nbsp; (Authentication)</li><li>Multiple Authentication.</li><li>Admin panel setup.</li><li>Template setup</li><li>Develop full website using PHP</li><li>Develop Blog website using PHP</li><li>ETC</li></ul><p><br></p><h4><font color=\"#e0480d\" style=\"\">Database:</font></h4><ul><li>MySQL</li></ul><p><br></p><h4><font color=\"#e0480d\" style=\"\">Advance (Laravel):</font></h4><h6><font color=\"#e0480d\" style=\"\"><br></font></h6><ul><li>Laravel Installation</li><li>Laravel Folder Structure</li><li>Route</li><li>Blade syntax</li><li>Model&nbsp;</li><li>Migration</li><li>Controller</li><li>Middleware</li><li>Laravel Authentication</li><li>Laravel Crud&nbsp;</li><li>Data insert.</li><li>Data Read.</li><li>Data Update</li><li>Data Soft Delete</li><li>Data Hard Delete</li><li>Data Restore</li><li>Laravel from validation</li><li>Email Send</li><li>Multiple Image Upload</li><li>Middleware auth access user control</li><li>User Profile</li><li>Change Password</li><li>Email&nbsp; Verify</li><li>Develop a full website using Laravel.</li><li>Develop a blog website using Laravel</li><li>ETC</li></ul><h4><font style=\"\" color=\"#df4003\">You will also learn more:</font></h4><ul><li>Databases</li><li>Domain</li><li>Hosting</li><li>Server</li><li>Server handling</li><li>Popular framework Laravel</li><li>How a website works.</li><li>How to upload a website to the server.<br></li><li>Local server Xampp, Wamp,etc</li><li>ETC</li></ul><pre><blockquote><pre><p></p></pre></blockquote></pre><h5><p></p></h5><p></p>', '2021-03-26 13:02:18', '2021-03-29 13:09:21'),
(3, 'Professional Web Design Full Course', 'professional-web-design-full-course', 'Web Design', '/uploaded/course/1616785401_605e2ff93ca39.jpg', '30', '2 month', 'Beginners', '3,000Tk', '<p><font color=\"#636363\" style=\"font-weight: normal;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span>After doing this course you will get a good idea about website design. And be able to design any website</font></p>', '<h5><font color=\"#ff0000\" style=\"\">What You Will Learn:</font></h5><h5><font color=\"#ff0000\" style=\"\"><br></font></h5><ul><li>Website design tools and software<font color=\"#ff0000\" style=\"\"><br></font></li></ul><h5></h5><h6><p></p><blockquote><p></p><ul><li><span style=\"font-weight: normal;\">Html.</span></li></ul><ul><li><span style=\"font-weight: normal;\">Css .</span></li></ul><ul><li><span style=\"font-weight: normal;\">Javascript.</span></li></ul><ul><li><span style=\"font-weight: normal;\">jQuery.</span></li></ul><ul><li><span style=\"font-weight: normal;\">jQuery Plugins Integration.</span></li></ul><ul><li><span style=\"font-weight: normal;\">Bootstrap.</span></li></ul></blockquote><p><ul><li><span style=\"font-weight: normal;\">Create animation using CSS</span></li></ul><p><ul><li><span style=\"font-weight: normal;\">Create animation using Jquery</span></li></ul><ul><li><span style=\"font-weight: normal;\">Fontawesome</span></li></ul><ul><li><span style=\"font-weight: 400;\">Google font</span></li></ul><ul><li><span style=\"font-weight: 400;\">Create awesome hover effect using after, before</span></li></ul></p></p><blockquote><ul><li><span style=\"font-weight: normal;\">Responsive Design.</span></li></ul><ul><li><span style=\"font-weight: normal;\">Psd To Html.</span></li></ul><ul><li><span style=\"font-weight: normal;\">5+ Full Project.</span></li></ul><ul><li><span style=\"font-weight: normal;\">Problem Solving.</span></li></ul><ul><li><span style=\"font-weight: normal;\">CLI (Comand Line Interface).</span></li></ul></blockquote><ul><li><span style=\"font-weight: normal;\">Creating a package of files</span><br></li></ul><p><br></p><blockquote><p></p></blockquote><p></p><p><br></p></h6><h5><font color=\"#df4003\" style=\"\">You will also learn more:</font></h5><h6><font color=\"#df4003\" style=\"\"><br></font></h6><h5></h5><h6><ul><li><span style=\"font-weight: normal;\">About Server.</span></li></ul><ul><li><span style=\"font-weight: normal;\">About domains.</span></li></ul><ul><li><span style=\"font-weight: normal;\">About hosting.</span></li></ul><ul><li><span style=\"font-weight: normal;\">About database.</span></li></ul><ul><li><span style=\"font-weight: normal;\">How a website works.</span></li></ul><ul><li><span style=\"font-weight: normal;\">How to upload a website to the server.</span></li></ul></h6>', '2021-03-26 13:03:21', '2021-04-02 10:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `course_registers`
--

CREATE TABLE `course_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canceled_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2021_03_25_115758_create_portfolios_table', 2),
(11, '2021_03_25_115823_create_courses_table', 2),
(12, '2021_03_25_165730_create_settings_table', 3),
(13, '2021_03_26_200338_create_contacts_table', 4),
(14, '2021_03_28_135356_create_course_registers_table', 5),
(15, '2021_02_27_173313_create_blogs_table', 6),
(16, '2021_02_27_174254_create_blog_categories_table', 6),
(17, '2021_04_01_102256_create_client_says_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('imranemon.developer@gmail.com', '$2y$10$wJwjNR7FY21piFJLx7CvM.fdRm6.UmPWsTpNIkPUMsP.T/dce7tg6', '2021-04-02 10:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category`, `image`, `website_link`, `home`, `created_at`, `updated_at`) VALUES
(2, 'Home | Ramel BD', 'Web Design & Development', '/uploaded/portfolio/1616781456_605e209019008.png', 'http://www.ramelbd.com/', NULL, '2021-03-26 11:57:36', '2021-03-26 11:57:36'),
(3, 'Dreambaz || Online Shopping', 'Web Development', '/uploaded/portfolio/1616781507_605e20c3ba24c.png', 'http://dreambaz.com/', NULL, '2021-03-26 11:58:27', '2021-03-26 11:58:27'),
(4, 'Home - Overall Private Limited', 'Web Design', '/uploaded/portfolio/1616781557_605e20f5bc35e.png', 'http://overall.com.bd/', NULL, '2021-03-26 11:59:17', '2021-03-26 11:59:17'),
(5, 'হোম | ঠাকুরগাঁও জেলার সামাজিক নিরাপত্তা উপকারভোগীদের তালিকা', 'Web Design', '/uploaded/portfolio/1616781663_605e215f486ab.png', 'http://relief.softech.com.bd/', NULL, '2021-03-26 12:01:03', '2021-03-26 12:01:03'),
(6, 'ফাষ্টপোষ্ট -  হোম', 'Web Design', '/uploaded/portfolio/1616781698_605e218257a3f.png', 'http://fastpost.com.bd/', NULL, '2021-03-26 12:01:38', '2021-03-26 12:01:38'),
(7, 'Bayrakalarab - Home', 'Web Design & Development', '/uploaded/portfolio/1616781764_605e21c473d48.png', 'http://bayrakalarab.com/en', NULL, '2021-03-26 12:02:44', '2021-03-26 12:02:44'),
(8, 'Jobincu - Home', 'Web Design & Development', '/uploaded/portfolio/1616781857_605e222129642.png', 'https://jobincu.com/en', NULL, '2021-03-26 12:04:17', '2021-03-26 12:04:17'),
(9, 'ডাক বিডি || সেবার ক্ষেত্রে আপোহীন', 'Web Design', '/uploaded/portfolio/1616781896_605e2248d73df.png', 'http://dakbd.com/', NULL, '2021-03-26 12:04:56', '2021-03-26 12:04:56'),
(10, 'ইউনিয়ন পরিষদ | হোম', 'Web Design', '/uploaded/portfolio/1616782015_605e22bf484e7.png', 'http://updigitalization.com/', NULL, '2021-03-26 12:06:55', '2021-03-26 12:06:55'),
(11, 'AgroFresh | freshness matters', 'Web Development', '/uploaded/portfolio/1616782053_605e22e54b8dc.png', 'http://agrofresh.com.bd/', NULL, '2021-03-26 12:07:33', '2021-03-26 12:07:33'),
(12, 'Home | Gyms - Fitness Equipment', 'Web Design', '/uploaded/portfolio/1616782114_605e23222597d.png', 'http://clubsbasic.com/', 1, '2021-03-26 12:08:34', '2021-03-26 12:08:34'),
(13, 'Avtech CCTV Camera Price In Bangladesh | Avtech Bangladesh', 'Web Design', '/uploaded/portfolio/1616782168_605e235845b31.png', 'https://www.avtechbd.xyz/', 1, '2021-03-26 12:09:28', '2021-03-26 12:09:28'),
(14, 'Drinkcan | Water Purifier in Bangladesh', 'Web Design', '/uploaded/portfolio/1616782234_605e239a22c2b.png', 'https://www.drinkcan.com.bd/', 1, '2021-03-26 12:10:34', '2021-03-26 12:10:34'),
(15, 'Home - My Happiness Way', 'Web Design & Development', '/uploaded/portfolio/1616782286_605e23ce072f7.png', 'https://myhappinessway.com/', 1, '2021-03-26 12:11:26', '2021-03-26 12:11:26'),
(16, 'Hikvision Bangladesh | CCTV Camera NVR DVR Access Control', 'Web Design', '/uploaded/portfolio/1616782318_605e23ee77b9e.png', 'https://www.hikvisionbd.com/', 1, '2021-03-26 12:11:58', '2021-03-26 12:11:58'),
(17, 'Daktarbook | Daktarbook in Bangladesh', 'Web Design & Development', '/uploaded/portfolio/1616782367_605e241f4c0f5.png', 'https://daktarbook.com/', 1, '2021-03-26 12:12:47', '2021-03-26 12:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_condition` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_policy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `banner`, `section_banner`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `github_link`, `youtube_link`, `mobile_one`, `mobile_two`, `email_one`, `email_two`, `terms_condition`, `privacy_policy`, `about_me`, `address`, `map_link`, `short_about`, `created_at`, `updated_at`) VALUES
(1, '/uploaded/logo/1616693014_605cc71642916.png', '/uploaded/banner/1617372561_6067259171330.jpg', '/uploaded/banner/1617372952_6067271834d8d.jpg', 'https://facebook.com/imran.emonn', 'https://twitter.com/imran_emonn', 'https://www.instagram.com/imranahmed.dev/', 'https://www.linkedin.com/public-profile/in/imran-emonn', 'https://github.com/imranahmed-dev', NULL, '+88 01755430927', '+88 01826763236', 'imranahmed.developer@gmail.com', NULL, NULL, NULL, NULL, 'Baliadangi, Thakurgaon, Rangpur, Bangladesh 5140', 'https://goo.gl/maps/rYX9Xtpi2bx5FhHv5', NULL, NULL, '2021-04-02 08:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '1 = admin, 2 = user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `provider_id`, `provider`, `email_verified_at`, `mobile`, `address`, `image`, `password`, `last_seen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Imran Ahmed', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, '/uploaded/admin/1616679173_605c9105f2c92.jpg', '$2y$10$nUN3uJg.2AXAQFp2PlJGk.F.Acqk58AVCRgTKu6u3SIKPsjdRPDua', '2021-04-02 12:33:01', NULL, '2021-03-25 05:47:36', '2021-04-02 12:33:01'),
(29, 2, 'Imran Ahmed', 'imranemon.developer@gmail.com', NULL, NULL, NULL, '01755430927', 'Baliadangi, Thakurgaon, Rangpur, Bangladesh 5140', '/uploaded/user/1617387201_60675ec135b85.jpg', '$2y$10$om/NzuX1zgEnF6JHZMNuj.i1n18tEewfpJF0JmbJTvNFjybc7okf2', '2021-04-02 12:33:15', 'OxKDLGbzPA04zLi1w2R18xrLsqc93K87j1ZHOImuePFaJblZYIT7tKMEAqKp', '2021-04-02 12:09:15', '2021-04-02 12:33:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_category_name_unique` (`category_name`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `client_says`
--
ALTER TABLE `client_says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_title_unique` (`title`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`);

--
-- Indexes for table `course_registers`
--
ALTER TABLE `course_registers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_says`
--
ALTER TABLE `client_says`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_registers`
--
ALTER TABLE `course_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
