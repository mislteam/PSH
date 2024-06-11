-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test-psh`
--

-- --------------------------------------------------------

--
-- Table structure for table `township`
--

CREATE TABLE `townships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `township`
--

INSERT INTO `townships` (`id`, `region_id`, `name`) VALUES
(1, 13, 'တာမွေမြို့နယ်'),
(2, 9, 'ကျောက်ဆည်မြို့'),
(3, 9, 'မိတ္ထီလာမြို့'),
(4, 9, 'မြင်းခြံမြို့'),
(5, 9, 'ညောင်ဦးမြို့'),
(6, 9, 'ပြင်ဦးလွင်မြို့'),
(7, 9, 'ရမည်းသင်းမြို့'),
(8, 9, 'အောင်မြေသာဇံမြို့နယ်'),
(9, 9, 'ချမ်းအေးသာဇံမြို့နယ်'),
(10, 9, 'မဟာအောင်မြေမြို့နယ်'),
(11, 9, 'ချမ်းမြသာစည်မြို့နယ်'),
(12, 9, 'ပြည်ကြီးတံခွန်မြို့နယ်'),
(13, 9, 'အမရပူရမြို့နယ်'),
(14, 9, 'ပုသိမ်ကြီးမြို့နယ်'),
(15, 9, 'မတ္တရာမြို့နယ်'),
(16, 9, 'စဉ့်ကူးမြို့နယ်'),
(17, 15, 'ပုသိမ်မြို့	'),
(18, 8, 'မကွေးမြို့'),
(19, 15, 'ဟင်္သာတမြို့	'),
(20, 8, 'ချောက်မြို့'),
(21, 8, 'ရေနံချောင်းမြို့'),
(22, 9, 'မိုးကုတ်မြို့နယ်'),
(23, 8, 'တောင်တွင်းကြီးမြို့'),
(24, 15, 'မအူပင်မြို့	'),
(25, 8, 'နတ်မောက်မြို့'),
(26, 15, 'မြောင်းမြမြို့	'),
(27, 9, 'သပိတ်ကျဉ်းမြို့နယ်'),
(28, 15, 'ဖျာပုံမြို့	'),
(29, 8, 'မြို့သစ်မြို့'),
(30, 8, 'မင်းဘူးမြို့'),
(31, 9, 'စဉ့်ကိုင်မြို့နယ်'),
(32, 8, 'ပွင့်ဖြူမြို့'),
(33, 9, 'မြစ်သားမြို့နယ်'),
(34, 8, 'စလင်းမြို့'),
(35, 9, 'တံတားဦးမြို့နယ်'),
(36, 8, 'ငဖဲမြို့'),
(37, 9, 'တောင်သာမြို့နယ်'),
(38, 8, 'စေတုတ္တရာမြို့'),
(39, 9, 'နွားထိုးကြီးမြို့နယ်'),
(40, 9, 'ကျောက်ပန်းတောင်းမြို့နယ်'),
(41, 15, 'လပွတ္တာမြို့	'),
(42, 9, 'ငါန်းဇွန်မြို့နယ်'),
(43, 8, 'သရက်မြို့'),
(44, 9, 'ပျော်ဘွယ်မြို့နယ်'),
(45, 9, 'မလှိုင်မြို့နယ်'),
(46, 8, 'အောင်လံမြို့'),
(47, 9, 'သာစည်မြို့နယ်'),
(48, 8, 'ဆင်ပေါင်ဝဲမြို့'),
(49, 9, 'ဝမ်းတွင်းမြို့နယ်'),
(50, 8, 'မင်းတုန်းမြို့'),
(51, 8, 'မင်းလှမြို့'),
(52, 8, 'ကံမမြို့'),
(53, 8, 'ပခုက္ကူမြို့'),
(54, 8, 'မြိုင်မြို့'),
(55, 15, 'ကန်ကြီးထောင့်မြို့'),
(57, 8, 'ဆိပ်ဖြူမြို့'),
(58, 8, 'ရေစကြိုမြို့'),
(59, 8, 'ပေါက်မြို့'),
(60, 15, 'ငပုတောမြို့နယ်'),
(61, 8, 'ဂန့်ဂေါမြို့'),
(62, 8, 'ထီးလင်းမြို့'),
(63, 8, 'ဆောမြို့'),
(64, 13, 'တောင်ဥက္ကလာပ'),
(65, 15, 'သာပေါင်းမြို့နယ်'),
(66, 15, 'ကျောင်းကုန်းမြို့နယ်'),
(67, 13, ''),
(68, 15, 'ကျုံပျော်မြို့နယ်'),
(69, 15, 'ရေကြည်မြို့နယ်'),
(70, 15, 'ဇလွန်မြို့နယ်'),
(71, 15, 'လေးမျက်နှာမြို့နယ်'),
(72, 15, 'မြန်အောင်မြို့နယ်'),
(73, 15, 'ကြံခင်းမြို့နယ်	'),
(74, 15, 'အင်္ဂပူမြို့နယ်	'),
(75, 15, 'အိမ်မဲမြို့နယ်	'),
(76, 15, 'ဝါးခယ်မမြို့နယ်'),
(77, 15, 'ပန်းတနော်မြို့နယ်	'),
(78, 15, 'ညောင်တုန်းမြို့နယ်	'),
(79, 15, 'ဓနုဖြူမြို့နယ်	'),
(80, 15, 'ဘိုကလေးမြို့နယ်	'),
(81, 15, 'ကျိုက်လတ်မြို့နယ်	'),
(82, 15, 'ဒေးဒရဲမြို့နယ်	'),
(83, 15, 'မော်လမြိုင်ကျွန်းမြို့နယ် '),
(84, 7, 'ပဲခူးမြို့'),
(85, 7, 'သနပ်ပင်မြို့နယ်'),
(86, 7, 'ကဝမြို့'),
(87, 7, 'ဝေါမြို့နယ်'),
(88, 7, 'ညောင်လေးပင်မြို့'),
(89, 7, 'ကျောက်တံခါးမြို့'),
(90, 7, 'ဒိုက်ဦးမြို့နယ်'),
(91, 7, 'ရွှေကျင်မြို့နယ်'),
(92, 7, 'ပြည်မြို့'),
(93, 7, 'ပေါက်ခေါင်းမြို့နယ်'),
(94, 7, 'ပန်းတောင်းမြို့'),
(95, 7, 'ပေါင်းတည်မြို့'),
(96, 7, 'သဲကုန်းမြို့နယ်'),
(97, 7, 'ရွှေတောင်မြို့'),
(98, 7, 'သာယာဝတီမြို့နယ်'),
(99, 7, 'လက်ပံတန်းမြို့'),
(100, 7, 'မင်းလှမြို့'),
(101, 7, 'အုတ်ဖိုမြို့နယ်'),
(102, 7, 'ဇီးကုန်းမြို့'),
(103, 7, 'နတ်တလင်းမြို့'),
(104, 7, 'မိုးညိုမြို့နယ်'),
(105, 7, 'ကြို့ပင်ကောက်မြို့နယ်'),
(106, 7, 'တောင်ငူမြို့'),
(107, 7, 'ရေတာရှည်မြို့'),
(108, 7, 'ကျောက်ကြီးမြို့နယ်'),
(109, 7, 'ဖြူးမြို့'),
(110, 7, 'အုတ်တွင်းမြို့နယ်'),
(111, 7, 'ထန်းတပင်မြို့နယ်'),
(112, 13, 'ဒဂုံမြို့သစ်(ဆိပ်ကမ်း)'),
(113, 13, 'ဒဂုံမြို့သစ်(တောင်ပိုင်း)'),
(114, 13, 'ဒဂုံမြို့သစ်(မြောက်ပိုင်း)'),
(115, 13, 'ဒဂုံမြို့သစ်(အရှေ့ပိုင်း)'),
(116, 13, 'ဒေါပုံ'),
(117, 13, 'ပုဇွန်တောင်'),
(118, 13, 'ဗိုလ်တထောင်'),
(119, 13, 'မင်္ဂလာတောင်ညွန့်'),
(120, 13, 'မြောက်ဥက္ကလာပ'),
(121, 13, 'ရန်ကင်း'),
(122, 13, 'သာကေတ'),
(123, 13, 'သင်္ဃန်းကျွန်း'),
(124, 13, 'ကမာရွတ်'),
(125, 13, 'ကျောက်တံတား'),
(126, 13, 'ကြည့်မြင်တိုင်'),
(127, 13, 'စမ်းချောင်း'),
(128, 13, 'ဒဂုံ'),
(129, 13, 'ပန်းဘဲတန်း'),
(130, 13, 'ဗဟန်း'),
(131, 13, 'မရမ်းကုန်း'),
(132, 13, 'လသာ'),
(133, 13, 'လမ်းမတော်'),
(134, 13, 'လှိုင်'),
(135, 13, 'အလုံ'),
(136, 13, 'တိုက်ကြီး'),
(137, 13, 'ထန်းတပင်'),
(138, 13, 'မင်္ဂလာဒုံ'),
(139, 13, 'မှော်ဘီ'),
(140, 13, 'ရွှေပြည်သာ'),
(141, 13, 'လှိုင်သာယာ'),
(142, 13, 'လှည်းကူး'),
(143, 13, 'အင်းစိန်'),
(144, 13, 'ကိုကိုးကျွန်း'),
(145, 13, 'ကော့မှူး'),
(146, 13, 'ကျောက်တန်း'),
(147, 13, 'ကွမ်းခြံကုန်း'),
(148, 13, 'ခရမ်း'),
(149, 13, 'ဆိပ်ကြီး/ခနောင်တို'),
(150, 13, 'တွံတေး'),
(151, 13, 'ဒလ'),
(152, 13, 'သန်လျင်'),
(153, 13, 'သုံးခွ'),
(154, 10, 'တပ်ကုန်းမြို့နယ်'),
(155, 10, 'ဇေယျာသီရိမြို့နယ်'),
(156, 10, 'ဥတ္တရသီရိမြို့နယ်'),
(157, 10, 'ပုဗ္ဗသီရိမြို့နယ်'),
(158, 10, 'ပျဉ်းမနားမြို့နယ် '),
(159, 10, 'လယ်ဝေးမြို့နယ်'),
(160, 10, 'ဇမ္ဗူသီရိမြို့နယ်'),
(161, 10, 'ဒက္ခိဏသီရိမြို့နယ်'),
(162, 2, 'လွိုင်ကော်'),
(163, 2, 'ဒီမောဆို'),
(164, 2, 'ဖရူဆို'),
(165, 2, 'ရှားတော'),
(166, 2, 'ဘောလခဲ'),
(167, 2, 'ဖာဆောင်း'),
(168, 2, 'မယ်စဲ့'),
(169, 3, 'ဘားအံ'),
(170, 3, 'လှိုင်းဘွဲ့'),
(171, 3, 'သံတောင်ကြီး'),
(172, 3, 'ဖာပွန်'),
(173, 3, 'မြဝတီ'),
(174, 3, 'ကြာအင်းဆိပ်ကြီး'),
(175, 3, 'ကော့ကရိတ်'),
(176, 4, 'ဟားခါး'),
(177, 4, 'ထန်တလန်'),
(178, 4, 'ဖလမ်း'),
(179, 4, 'တီးတိန်'),
(180, 4, 'တွန်းဇန်'),
(181, 4, 'မင်းတပ်'),
(182, 4, 'မတူပီ'),
(183, 4, 'ကန်ပက်လက်'),
(184, 4, 'ပလက်ဝ'),
(185, 5, 'စစ်ကိုင်း'),
(186, 5, 'မြင်းမူ'),
(187, 5, 'မြောင်'),
(188, 5, 'ရွှေဘို'),
(189, 5, 'ခင်ဦး'),
(190, 5, 'ဝက်လက်'),
(191, 5, 'ကန့်ဘလူ'),
(192, 5, 'ကျွန်းလှ'),
(193, 5, 'ရေဦး'),
(194, 5, 'ဒီပဲယင်း'),
(195, 5, 'တန့်ဆည်'),
(196, 5, 'မုံရွာ'),
(197, 5, 'ဘုတလင်'),
(198, 5, 'အရာတော်'),
(199, 5, 'ချောင်းဦး'),
(200, 5, 'ကသာ'),
(201, 5, 'အင်းတော်'),
(202, 5, 'ထီးချိုင့်'),
(203, 5, 'ဗန်းမောက်'),
(204, 5, 'ကောလင်း'),
(205, 5, 'ဝန်းသို'),
(206, 5, 'ပင်လည်ဘူး'),
(207, 5, 'ကလေး'),
(208, 5, 'ကလေးဝ'),
(209, 5, 'မင်းကင်း'),
(210, 5, 'တမူး'),
(211, 5, 'မော်လိုက်'),
(212, 5, 'ဖောင်းပြင်'),
(213, 5, 'ခန္တီး'),
(214, 5, 'ဟုမ္မလင်း'),
(215, 5, 'လေရှီး'),
(216, 5, 'လဟယ်'),
(217, 5, 'နန်းယွန်း'),
(218, 5, 'ယင်းမာပင်'),
(219, 5, 'ဆားလင်းကြီး'),
(220, 5, 'ပုလဲ'),
(221, 5, 'ကနီ'),
(222, 11, 'မော်လမြိုင်မြို့နယ်'),
(223, 11, 'ကျိုက်မရောမြို့နယ်'),
(224, 11, 'ချောင်းဆုံမြို့နယ်'),
(225, 11, 'မုဒုံမြို့နယ်'),
(226, 11, 'ရေးမြို့နယ်'),
(227, 11, 'သံဖြူဇရပ်မြို့နယ်'),
(228, 11, 'သထုံမြို့နယ်'),
(229, 11, 'ကျိုက်ထိုမြို့နယ်'),
(230, 11, 'ပေါင်မြို့နယ်'),
(231, 11, 'ဘီးလင်းမြို့နယ်'),
(232, 6, 'ထားဝယ်မြို့နယ်'),
(233, 6, 'ရေဖြူမြို့နယ်'),
(234, 6, 'လောင်းလုံမြို့နယ်'),
(235, 6, 'သရက်ချောင်းမြို့နယ်'),
(236, 6, 'မြိတ်မြို့နယ်'),
(237, 6, 'ကျွန်းစုမြို့နယ်'),
(238, 6, 'တနင်္သာရီမြို့နယ်'),
(239, 6, 'ပုလောမြို့နယ်'),
(240, 6, 'ကော့သောင်းမြို့နယ်'),
(241, 6, 'ဘုတ်ပြင်းမြို့နယ်'),
(242, 12, 'စစ်တွေမြို့နယ်'),
(243, 12, 'ပုဏ္ဏားကျွန်းမြို့နယ်'),
(244, 12, 'ပေါက်တောမြို့နယ်'),
(245, 12, 'ရသေ့တောင်မြို့နယ်'),
(246, 12, 'မြောက်ဦးမြို့နယ်'),
(247, 12, 'ကျောက်တော်မြို့နယ်'),
(248, 12, 'မင်းပြားမြို့နယ်'),
(249, 12, 'မြေပုံမြို့နယ်'),
(250, 12, 'မောင်တောမြို့နယ်'),
(251, 12, 'ဘူးသီးတောင်မြို့နယ်'),
(252, 12, 'ကျောက်ဖြူမြို့နယ်'),
(253, 12, 'မာန်အောင်မြို့နယ်'),
(254, 12, 'ရမ်းဗြဲမြို့နယ်'),
(255, 12, 'အမ်းမြို့နယ်'),
(256, 12, 'သံတွဲမြို့နယ်'),
(257, 12, 'တောင်ကုတ်မြို့နယ်'),
(258, 12, 'ဂွမြို့နယ်'),
(259, 14, 'တောင်ကြီးမြို့နယ်'),
(260, 14, 'ညောင်ရွှေမြို့နယ်'),
(261, 14, 'ဟိုပုံးမြို့နယ်'),
(262, 14, 'ဆီဆိုင်မြို့နယ်'),
(263, 14, 'ကလောမြို့နယ်'),
(264, 14, 'ပင်းတယမြို့နယ်'),
(265, 14, 'ရွာငံမြို့နယ်'),
(266, 14, 'ရပ်စောက်မြို့နယ်'),
(267, 14, 'ပင်လောင်းမြို့နယ်'),
(268, 14, 'ဖယ်ခုံမြို့နယ်'),
(269, 14, 'လွိုင်လင်မြို့နယ်'),
(270, 14, 'လဲချားမြို့နယ်'),
(271, 14, 'နမ့်စန်(တောင်)မြို့နယ်'),
(272, 14, 'ကွန်ဟိန်းမြို့နယ်'),
(273, 14, 'ကျေးသီးမြို့နယ်'),
(274, 14, 'မိုင်းကိုင်မြို့နယ်'),
(275, 14, 'မိုင်းရှူးမြို့နယ်'),
(276, 14, 'လင်းခေးမြို့နယ်'),
(277, 14, 'မိုးနဲမြို့နယ်'),
(278, 14, 'မောက်မယ်မြို့နယ်'),
(279, 14, 'မိုင်းပန်မြို့နယ်'),
(280, 14, 'လားရှိုးမြို့နယ်'),
(281, 14, 'သိန္နီမြို့နယ်'),
(282, 14, 'မိုင်းရယ်မြို့နယ်'),
(283, 14, 'တန့်ယန်းမြို့နယ်'),
(284, 14, 'ကွမ်းလုံမြို့နယ်'),
(285, 14, 'မူဆယ်မြို့နယ်'),
(286, 14, 'နမ့်ခမ်းမြို့နယ်'),
(287, 14, 'ကွတ်ခိုင်မြို့နယ်'),
(288, 14, 'ကျောက်မဲမြို့နယ်'),
(289, 14, 'နောင်ချိုမြို့နယ်'),
(290, 14, 'နောင်ချိုမြို့နယ်'),
(291, 14, 'သီပေါမြို့နယ်'),
(292, 14, 'နမ္မတူမြို့နယ်'),
(293, 14, 'နမ့်ဆန်(မြောက်)မြို့နယ်'),
(294, 14, 'မိုးမိတ်မြို့နယ်'),
(295, 14, 'မဘိမ်းမြို့နယ်'),
(296, 14, 'မန်တုံမြို့နယ်'),
(297, 14, 'မိုးမိတ်မြို့နယ်'),
(298, 14, 'မဘိမ်းမြို့နယ်'),
(299, 14, 'ကွမ်းလုံမြို့နယ်'),
(300, 14, 'လောက်ကိုင်မြို့နယ်'),
(301, 14, 'ကုန်းကြမ်းမြို့နယ်'),
(302, 14, 'ဟိုပန်မြို့နယ်'),
(303, 14, 'မိုင်းမောမြို့နယ်'),
(304, 14, 'ပန်ဝိုင်မြို့နယ်'),
(305, 14, 'မက်မန်းမြို့နယ်'),
(306, 14, 'ပန်ဆမ်း(ပန်ခမ်း)မြို့နယ်'),
(307, 14, 'နားဖန်းမြို့နယ်'),
(308, 14, 'ကျိုင်းတုံမြို့နယ်'),
(309, 14, 'မိုင်းခတ်မြို့နယ်'),
(310, 14, 'မိုင်းယန်းမြို့နယ်'),
(311, 14, 'မိုင်းလားမြို့နယ်'),
(312, 14, 'မိုင်းပျဉ်းမြို့နယ်'),
(313, 14, 'မိုင်းဆတ်မြို့နယ်'),
(314, 14, 'မိုင်းပျဉ်းမြို့နယ်'),
(315, 14, 'မိုင်းတုံမြို့နယ်'),
(316, 14, 'တာချီလိတ်မြို့နယ်'),
(317, 14, 'မိုင်းဖြတ်မြို့နယ်'),
(318, 14, 'မိုင်းယောင်းမြို့နယ်'),
(319, 14, 'မိုင်းဖြတ်မြို့နယ်'),
(320, 14, 'မိုင်းယောင်းမြို့နယ်'),
(321, 1, 'မြစ်ကြီးနားမြို့နယ်'),
(322, 1, 'ဝိုင်းမော်မြို့နယ်'),
(323, 1, 'တနိုင်းမြို့နယ်'),
(324, 1, 'ချီဖွေမြို့နယ်'),
(325, 1, 'ဆော့လော်မြို့နယ်'),
(326, 1, 'အင်ဂျန်းယန်မြို့နယ်'),
(327, 1, 'မိုးညှင်းမြို့နယ်'),
(328, 1, 'မိုးကောင်းမြို့နယ်'),
(329, 1, 'ဖားကန့်မြို့နယ်'),
(330, 1, 'ဗန်းမော်မြို့နယ်'),
(331, 1, 'ရွှေကူမြို့နယ်'),
(332, 1, 'မိုးမောက်မြို့နယ်'),
(333, 1, 'မံစီမြို့နယ်'),
(334, 1, 'ပူတာအိုမြို့နယ်'),
(335, 1, 'ဆွမ်ပရာဘွမ်မြို့နယ်'),
(336, 1, 'မချမ်းဘောမြို့နယ်'),
(337, 1, 'ခေါင်လန်ဖူးမြို့နယ်'),
(338, 1, 'နောင်မွန်မြို့နယ်');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `township`
--
ALTER TABLE `townships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `townships_region_id_foreign` (`region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `township`
--
ALTER TABLE `townships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `townships`
--
ALTER TABLE `townships`
  ADD CONSTRAINT `townships_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
