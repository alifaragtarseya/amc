-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tarseya`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/about/kyad-altryk-fy-alokal-alabdaaay-2024-03-21-04-44-27-6549.png', '2023-11-28 10:39:51', '2024-03-21 14:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `about_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'قيادة الطريق في الوكالة الإبداعية', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '<p><span style=\"color: #000000;\">منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.</span></p>', NULL, NULL),
(2, 1, 'en', 'Who we Are?', 'We are the first innovative choice that provides you with exceptional solutions to reflect the best of your business.Passion and creativity drive us to be the icon ofimpressive solutions in the field of media and publicrelations.', '<p>We are the first innovative choice that provides you with exceptional solutions to reflect the best of your business.Passion and creativity drive us to be the icon ofimpressive solutions in the field of media and publicrelations.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `phone`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0123456789', '$2y$10$foD2.weqz8Xns3q0dpjaluFoc7qoK0Ixb0sO42MwBU4wnxLCcNdiy', 'uploads/admins/admin-2023-12-03-11-37-56-6704.jpg', '2023-11-28 10:39:51', '2023-12-06 11:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/blogs/kyfy-agraaa-tdkyk-thsyn-mhrkat-albhth-seo-althy-sysaaadk-aal-ksb-alaamlaaa-2024-02-08-12-27-21-2456.png', '2024-02-08 10:27:21', '2024-02-08 10:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `blog_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'كيفية إجراء تدقيق تحسين محركات البحث (SEO) الذي سيساعدك على كسب العملاء', 'في مجال التسويق الرقمي المتغير باستمرار، يلعب تحسين محركات البحث (SEO) دورًا محوريًا في تعزيز الشهرة عبر الإنترنت وزيادة حركة المرور على موقع الويب العضوي. في', '<p>في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء.&nbsp;</p>\r\n<p>في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء.&nbsp;</p>', NULL, NULL),
(2, 1, 'en', 'كيفية إجراء تدقيق تحسين محركات البحث (SEO) الذي سيساعدك على كسب العملاء', 'في مجال التسويق الرقمي المتغير باستمرار، يلعب تحسين محركات البحث (SEO) دورًا محوريًا في تعزيز الشهرة عبر الإنترنت وزيادة حركة المرور على موقع الويب العضوي. في', '<p>في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء.&nbsp;</p>\r\n<p>في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء.&nbsp;</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/brands/laboriosam-aut-occa-2023-11-28-12-44-08-4700.png', '2023-11-28 10:44:08', '2023-11-28 10:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `brand_translations`
--

CREATE TABLE `brand_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_translations`
--

INSERT INTO `brand_translations` (`id`, `brand_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'Voluptas et perspici', 'Fugit velit volupt', NULL, NULL),
(2, 1, 'en', 'Laboriosam aut occa', 'Temporibus occaecat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/products-cats/brmg-aloyb-2024-01-31-09-54-16-6763.png', '2023-11-28 10:47:31', '2024-01-31 19:54:16'),
(3, 'uploads/products-cats/mobyl-abylykshn-2024-01-31-09-54-41-1418.png', '2023-11-29 13:26:12', '2024-01-31 19:54:41');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'برمجة الويب', 'برمجة الويب', NULL, NULL),
(2, 1, 'en', 'برمجة الويب', 'برمجة الويب', NULL, NULL),
(5, 3, 'ar', 'موبيل ابيليكشن', 'موبيل ابيليكشن', NULL, NULL),
(6, 3, 'en', 'موبيل ابيليكشن', 'موبيل ابيليكشن', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countrs`
--

CREATE TABLE `countrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bg_hover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countrs`
--

INSERT INTO `countrs` (`id`, `image`, `number`, `created_at`, `updated_at`, `bg_hover`) VALUES
(1, 'uploads/counters/snoat-mn-alkhbr-2024-03-21-04-06-23-7258.png', '12', '2023-12-01 07:07:46', '2024-03-21 14:06:23', 'uploads/counters/bg-hover-2024-01-31-09-27-21-5905.png'),
(3, 'uploads/counters/mshroaa-2024-01-30-05-54-25-4740.png', '150', '2024-01-29 15:37:22', '2024-01-31 19:44:22', 'uploads/counters/bg-hover-2024-01-31-09-44-22-4568.png'),
(4, 'uploads/counters/bld-mkhtlf-2024-01-30-05-54-43-8354.png', '5', '2024-01-29 15:39:16', '2024-01-31 19:48:59', 'uploads/counters/bg-hover-2024-01-31-09-48-59-8931.png'),
(5, 'uploads/counters/aamyl-2024-01-30-05-55-13-3829.png', '1500', '2024-01-29 15:39:48', '2024-01-31 19:49:39', 'uploads/counters/bg-hover-2024-01-31-09-49-39-3795.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `countr_translations`
--

CREATE TABLE `countr_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countr_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countr_translations`
--

INSERT INTO `countr_translations` (`id`, `countr_id`, `locale`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'سنوات من الخبرة', NULL, NULL),
(2, 1, 'en', 'سنوات من الخبرة', NULL, NULL),
(5, 3, 'ar', 'مشروع', NULL, NULL),
(6, 3, 'en', 'مشروع', NULL, NULL),
(7, 4, 'ar', 'بلد مختلفة', NULL, NULL),
(8, 4, 'en', 'بلد مختلفة', NULL, NULL),
(9, 5, 'ar', 'عميل', NULL, NULL),
(10, 5, 'en', 'عميل', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `created_at`, `updated_at`) VALUES
(1, '2024-02-10 14:56:51', '2024-02-10 14:56:51'),
(2, '2024-02-10 14:57:15', '2024-02-10 14:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_translations`
--

INSERT INTO `faq_translations` (`id`, `faq_id`, `locale`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'Id dolorem est obca', 'Fuga Impedit fuga', NULL, NULL),
(2, 1, 'en', 'Unde in repellendus', 'Vel ipsam dolor est', NULL, NULL),
(3, 2, 'ar', 'Et mollitia est eni', 'Eligendi aut quia la', NULL, NULL),
(4, 2, 'en', 'Aut nisi ipsum id q', 'Perferendis do nisi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/features/fryk-aaml-mhtrf-2024-03-23-05-47-18-4162.png', '2023-12-01 06:58:28', '2024-03-23 03:47:18'),
(3, 'uploads/features/tkalyf-mnasb-2024-01-31-05-50-43-5715.png', '2024-01-31 15:50:43', '2024-01-31 15:50:43'),
(4, 'uploads/features/daam-fny-247-2024-01-31-05-51-05-9003.png', '2024-01-31 15:51:05', '2024-01-31 15:51:05'),
(5, 'uploads/features/afdl-alaaamal-2024-01-31-05-51-35-4407.png', '2024-01-31 15:51:35', '2024-01-31 15:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `feature_translations`
--

CREATE TABLE `feature_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_translations`
--

INSERT INTO `feature_translations` (`id`, `feature_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'فريق عمل محترف', 'لدينا فريق علي درجة من الخبرة\r\nلخدمة عملاؤنا.', NULL, NULL),
(2, 1, 'en', 'فريق عمل محترف', 'Our team of experts has years of experience in IT services and stays up-to-date with the latest technologies and trends.', NULL, NULL),
(5, 3, 'ar', 'تكاليف مناسبة', 'باقات اسعار تناسب حجم اعمالك بتكاليف منخفضة.', NULL, NULL),
(6, 3, 'en', 'تكاليف مناسبة', 'باقات اسعار تناسب حجم اعمالك بتكاليف منخفضة.', NULL, NULL),
(7, 4, 'ar', 'دعم فني 24/7', 'في خدمة عملاؤنا دوما وعلي مدار الساعة.', NULL, NULL),
(8, 4, 'en', 'دعم فني 24/7', 'في خدمة عملاؤنا دوما وعلي مدار الساعة.', NULL, NULL),
(9, 5, 'ar', 'أفضل الأعمال', 'نعمل علي اخراج أعمال عملاؤنا  بشكل احترافي', NULL, NULL),
(10, 5, 'en', 'أفضل الأعمال', 'نعمل علي اخراج أعمال عملاؤنا  بشكل احترافي', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meta_tag_banners`
--

CREATE TABLE `meta_tag_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL COMMENT 'this column will be enum',
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_tag_banners`
--

INSERT INTO `meta_tag_banners` (`id`, `page`, `title`, `title_en`, `keywords`, `description`, `description_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'products', 'معرض أعمالــــنا', 'معرض أعمالــــنا', 'Nisi voluptatem ill', 'Vel dignissimos odit', 'Vel illum minus quo', 'uploads/metatags/ea-amet-quae-deseru-2024-02-06-07-22-32-7171.jpg', '2023-11-28 10:49:00', '2024-02-06 17:23:56'),
(2, 'home', 'الصفحة الرئيسية', 'HomePage', 'home , slider', 'يسشيسش', 'يسشيشسيسش', NULL, '2023-11-29 08:12:22', '2023-11-29 08:44:04'),
(3, 'about', 'من نحن', 'About', 'About', 'About', 'About', 'uploads/metatags/about-2024-02-05-09-54-00-9970.png', '2023-11-29 18:22:51', '2024-02-05 19:54:00'),
(4, 'contact', 'اطلب خدمتك وتواصل معنا الان', 'اطلب خدمتك وتواصل معنا الان', 'Laborum Quia et non', 'يرجى ملء النموذج السريع وسنتواصل معك بسرعة البرق', 'يرجى ملء النموذج السريع وسنتواصل معك بسرعة البرق', 'uploads/metatags/atlb-khdmtk-otoasl-maana-alan-2024-02-05-09-19-57-9309.png', '2023-11-29 18:44:20', '2024-02-05 19:19:57'),
(5, 'project', 'Fuga A voluptas eni', 'Maxime eligendi ulla', 'Obcaecati enim dolor', 'Quisquam lorem quae', 'Cumque mollit ut ali', 'uploads/metatags/maxime-eligendi-ulla-2023-11-29-09-33-18-9152.jpg', '2023-11-29 19:33:18', '2023-11-29 19:33:18'),
(6, 'service', 'خدمات متنوعة', 'خدمات متنوعة', 'Adipisci esse ea qu', 'نحن نقدم مجموعة واسعة من وظائف تكنولوجيا المعلومات، بما في ذلك تنفيذ وإدارة معدات المؤسسات، والنسخ الاحتياطي للبيانات واستعادتها، ونشر البرامج وترقيتها، ودعم مكتب المساعدة، والخدمات المُدارة.', 'نحن نقدم مجموعة واسعة من وظائف تكنولوجيا المعلومات، بما في ذلك تنفيذ وإدارة معدات المؤسسات، والنسخ الاحتياطي للبيانات واستعادتها، ونشر البرامج وترقيتها، ودعم مكتب المساعدة، والخدمات المُدارة.', 'uploads/metatags/khdmat-mtnoaa-2024-03-24-05-54-35-5830.png', '2023-11-30 04:47:24', '2024-03-24 15:54:35'),
(7, 'blogs', 'اخر المقالات', 'Blogs', 'Blogs', 'Blogs', 'Blogs', 'uploads/metatags/blogs-2024-02-08-12-24-07-8020.jpg', '2024-02-08 10:23:49', '2024-02-08 10:33:19'),
(8, 'packages', 'الباقات', 'الباقات', 'الباقات', 'باقات متنوعة باسعار متميزة لتصميم المواقع', 'باقات متنوعة باسعار متميزة لتصميم المواقع', 'uploads/metatags/albakat-2024-02-08-05-14-10-7239.jpg', '2024-02-08 15:14:10', '2024-02-08 15:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_163450_create_admins_table', 1),
(6, '2023_11_28_005105_create_sliders_table', 1),
(7, '2023_11_28_005122_create_slider_translations_table', 1),
(8, '2023_11_28_005417_create_meta_tag_banners_table', 1),
(9, '2023_11_28_035602_create_abouts_table', 1),
(10, '2023_11_28_035616_create_about_translations_table', 1),
(11, '2023_11_28_045816_create_parteners_table', 1),
(17, '2023_11_28_114315_create_projects_table', 1),
(18, '2023_11_28_114334_create_project_translations_table', 1),
(19, '2023_11_28_121000_create_brands_table', 1),
(20, '2023_11_28_121019_create_brand_translations_table', 1),
(21, '2023_11_28_121032_create_categories_table', 1),
(22, '2023_11_28_121043_create_category_translations_table', 1),
(23, '2023_11_28_121103_create_products_table', 1),
(24, '2023_11_28_121114_create_product_translations_table', 1),
(25, '2023_11_28_121124_create_product_images_table', 1),
(26, '2023_11_28_130445_create_settings_table', 2),
(27, '2023_11_30_083456_create_countrs_table', 3),
(28, '2023_11_30_083535_create_countr_translations_table', 3),
(29, '2023_11_30_083555_create_features_table', 3),
(30, '2023_11_30_083606_create_feature_translations_table', 3),
(31, '2023_12_03_095804_add_type_column_to_sliders_table', 4),
(32, '2023_11_28_054942_create_services_table', 5),
(33, '2023_11_28_054952_create_service_translations_table', 5),
(34, '2024_01_31_211820_add_bg_hover_column_to_countrs_table', 6),
(35, '2024_02_06_100331_add_video_url_to_services_table', 7),
(36, '2024_02_06_194557_add_url_and_color1_color2_to_products_table', 8),
(37, '2024_02_06_200130_add_project_logo_to_products_table', 9),
(38, '2024_02_06_201533_add_field_and_technology_and_country_to_products_table', 10),
(39, '2024_02_06_220305_create_work_steps_table', 11),
(40, '2024_02_06_220359_create_work_step_translations_table', 11),
(41, '2024_02_08_121256_create_blogs_table', 12),
(42, '2024_02_08_121306_create_blog_translations_table', 12),
(43, '2024_02_08_160718_create_package_categories_table', 13),
(44, '2024_02_08_160745_create_packages_table', 13),
(45, '2024_02_08_160757_create_package_translations_table', 13),
(46, '2024_02_10_164112_create_faqs_table', 14),
(47, '2024_02_10_164141_create_faq_translations_table', 14),
(48, '2024_02_11_005131_create_reviews_table', 15),
(49, '2024_02_11_005145_create_review_translations_table', 15),
(50, '2024_03_19_174144_add_bg_image_column_to_sliders_table', 15),
(51, '2024_02_12_124038_create_teams_table', 16),
(52, '2024_02_12_124056_create_team_translations_table', 16),
(53, '2024_03_24_190231_add_type_to_parteners_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'uploads/packages/althhby-2024-02-08-04-52-03-8743.png', 1, '2024-02-08 14:52:03', '2024-02-08 15:04:47'),
(2, 'uploads/packages/alfdy-2024-02-08-05-07-47-2697.png', 1, '2024-02-08 15:07:47', '2024-02-08 15:07:47'),
(3, 'uploads/packages/albronzy-2024-02-08-05-10-21-1758.png', 1, '2024-02-08 15:10:21', '2024-02-08 15:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `package_categories`
--

CREATE TABLE `package_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_categories`
--

INSERT INTO `package_categories` (`id`, `title`, `title_en`, `created_at`, `updated_at`) VALUES
(1, 'باقات للأفراد والشركات', 'باقات للأفراد والشركات', '2024-02-08 14:33:54', '2024-02-08 14:33:54'),
(2, 'باقات تصميم المواقع', 'باقات تصميم المواقع', '2024-02-08 14:34:03', '2024-02-08 14:34:03'),
(3, 'باقات الهوية البصرية', 'باقات الهوية البصرية', '2024-02-08 14:34:11', '2024-02-08 14:34:11'),
(4, 'باقات وسائل التواصل الاجتماعي', 'باقات وسائل التواصل الاجتماعي', '2024-02-08 14:34:23', '2024-02-08 14:34:23'),
(5, 'باقات تطبيقات الهاتف IOS / Android', 'باقات تطبيقات الهاتف IOS / Android', '2024-02-08 14:34:31', '2024-02-08 14:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `package_translations`
--

CREATE TABLE `package_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_translations`
--

INSERT INTO `package_translations` (`id`, `package_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'الذهبيةd', '150 ريال سعودي / شهر', '<ol>\r\n<li>مساحة تخزينية: 5 GB gfgdf g fdg df g f d g fdfgdf gf dg fdg gf</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB<br />مساحة تخزينية: 5 GB</li>\r\n</ol>', '2024-02-08 14:52:03', '2024-02-08 15:39:45'),
(2, 1, 'en', 'الذهبية', '150 ريال سعودي / شهر', '<ol>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n</ol>', '2024-02-08 14:52:03', '2024-02-08 14:52:03'),
(3, 2, 'ar', 'الفضية', '150 ريال سعودي / شهر', '<ol>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n</ol>', '2024-02-08 15:07:47', '2024-02-08 15:07:47'),
(4, 2, 'en', 'الفضية', '150 ريال سعودي / شهر', '<ol>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n</ol>', '2024-02-08 15:07:47', '2024-02-08 15:07:47'),
(5, 3, 'ar', 'البرونزية', '150 ريال سعودي / شهر', '<ol>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n</ol>', '2024-02-08 15:10:21', '2024-02-08 15:10:21'),
(6, 3, 'en', 'البرونزية', '150 ريال سعودي / شهر', '<ol>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n<li>مساحة تخزينية: 5 GB</li>\r\n</ol>', '2024-02-08 15:10:21', '2024-02-08 15:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `parteners`
--

CREATE TABLE `parteners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'partener',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parteners`
--

INSERT INTO `parteners` (`id`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 'uploads/partener/1-2023-12-01-10-56-24-5983.jpg', 'partener', '2023-12-01 08:56:24', '2023-12-01 08:56:24'),
(2, 'uploads/partener/2-2023-12-01-11-07-39-9654.png', 'partener', '2023-12-01 09:07:39', '2023-12-01 09:07:39'),
(3, 'uploads/partener/3-2024-03-24-07-14-07-9468.png', 'tool', '2024-03-24 17:14:07', '2024-03-24 17:14:07'),
(4, 'uploads/partener/4-2024-03-24-07-16-09-7388.png', 'tool', '2024-03-24 17:16:09', '2024-03-24 17:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `color1` varchar(255) DEFAULT NULL,
  `color2` varchar(255) DEFAULT NULL,
  `project_logo` varchar(255) DEFAULT NULL,
  `technology` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `category_id`, `brand_id`, `created_at`, `updated_at`, `url`, `color1`, `color2`, `project_logo`, `technology`, `country`, `field`) VALUES
(3, 'uploads/products/omnis-qui-perspiciat-2023-11-28-01-03-59-3288.jpg', 1, 1, '2023-11-28 11:03:59', '2024-03-25 13:25:40', '6 week', '#d07016', '#000000', 'uploads/products/logo-2024-02-06-08-08-47-7501.png', 'Design App From Start', 'المملكة العربية السعودية', 'Ahmed Ramadan'),
(4, 'uploads/products/sapiente-natus-volup-2024-02-01-05-43-07-3518.png', 1, NULL, '2024-02-01 15:43:07', '2024-02-06 18:31:19', 'https://kuwaitpedia.com/', '#054d00', '#07056b', 'uploads/products/logo-2024-02-06-08-31-19-4526.png', 'HTML, CSS, Bootstrap, PHP', 'المملكة العربية السعودية', 'مشروع خاص بشركة تقدم خدمات متنوعة للعقارات'),
(5, 'uploads/products/quia-nihil-et-anim-u-2024-03-25-03-26-59-5170.png', 3, NULL, '2024-03-25 13:27:00', '2024-03-25 13:27:00', 'Aperiam repellendus', NULL, NULL, NULL, 'Quia magni cum conse', 'Libero commodo volup', 'Facilis quod sunt n');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(6, 3, 'uploads/products/images/omnis-qui-perspiciat-2023-11-28-01-03-59-8577.png', '2023-11-28 11:03:59', '2023-11-28 11:03:59'),
(7, 3, 'uploads/products/images/omnis-qui-perspiciat-2023-11-28-01-03-59-7889.png', '2023-11-28 11:03:59', '2023-11-28 11:03:59'),
(8, 3, 'uploads/products/images/omnis-qui-perspiciat-2023-11-28-01-03-59-3418.png', '2023-11-28 11:03:59', '2023-11-28 11:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(5, 3, 'ar', 'Exercitation omnis i', 'في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة.', '<p>في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة.</p>', NULL, NULL),
(6, 3, 'en', 'Omnis qui perspiciat', 'في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة.', '<p>في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة.</p>', NULL, NULL),
(7, 4, 'ar', 'Debitis tenetur sed', 'Voluptatem et ab cu', '<p>Beatae architecto ve.</p>', NULL, NULL),
(8, 4, 'en', 'Sapiente natus volup', 'Neque id nostrud vol', '<p>Cumque laborum. Dese.</p>', NULL, NULL),
(9, 5, 'ar', 'Sunt et libero offi', 'Velit veniam offici', '<p>dsadsdsadsadsa</p>', NULL, NULL),
(10, 5, 'en', 'Quia nihil et anim u', 'Nihil error vel labo', '<p>dsadsadsadsadsad</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/projects/et-sint-dignissimos-2023-11-29-03-39-36-3257.jpg', '2023-11-29 13:39:36', '2023-11-29 13:39:36'),
(2, 'uploads/projects/dolorem-iste-hic-vol-2023-11-29-03-40-09-7690.jpg', '2023-11-29 13:40:09', '2023-11-29 13:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `project_translations`
--

CREATE TABLE `project_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_translations`
--

INSERT INTO `project_translations` (`id`, `project_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'Nisi aut ad nihil fu', NULL, 'Ut excepturi est ad', NULL, NULL),
(2, 1, 'en', 'Et sint dignissimos', NULL, 'Amet harum dolores', NULL, NULL),
(3, 2, 'ar', 'Ut ab non enim sunt', NULL, 'Laudantium illo ius', NULL, NULL),
(4, 2, 'en', 'Dolorem iste hic vol', NULL, 'Duis nostrud nulla t', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_translations`
--

CREATE TABLE `review_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `icon`, `created_at`, `updated_at`, `video_url`) VALUES
(1, 'uploads/services/images/altgar-alalktrony-2024-01-31-07-44-24-1779.png', 'uploads/services/icons/icon-2024-03-23-07-21-12-2674.png', '2024-01-31 17:44:24', '2024-03-23 05:21:12', 'https://www.youtube.com/watch?v=16RuOnwB-LA&list=TLPQMTAwMTIwMjRIq5z3gua3NQ&index=12'),
(2, 'uploads/services/images/ttbykat-almobyl-2024-01-31-08-56-12-4931.png', 'uploads/services/icons/icon-2024-01-31-08-56-12-6906.png', '2024-01-31 18:56:12', '2024-01-31 18:56:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'التجارة الالكترونية', 'في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة.\r\nكوننا أفضل شركات التسويق الرقمي في دبي نركز على المساعي القائمة على النتائج. بالنسبة لجميع تفاعلات العملاء، فإن هدفنا الأساسي هو تحقيق النتائج. توفر وكالة دبي للتسويق الرقمي للشركات مجموعة متنوعة من الطرق للوصول إلى جمهورها المستهدف والتواصل معه، مما يؤدي إلى جذب العملاء المحتملين والمدافعين الذين يكون لهم تأثير كبير على انطباع علامتك التجارية، كما يعملون أيضًا كوسيلة مبيعات ووسيلة إعلانية منخفضة التكلفة.', '<h1>كيف نعمل؟</h1>\r\n<p>&nbsp;</p>\r\n<p>فهم الصنــاعة</p>\r\n<p>إن اتجاه الصناعة المتنامي هو أحد الأشياء التي يجب التركيز عليها بشدة. نحن نركز على اتجاهات الأعمال التي تساعد على استهداف الجمهور المناسب في الوقت المناسب وبالطريقة الصحيحة للتسويق الرقمي</p>\r\n<p>&nbsp;</p>\r\n<p>فهم الصنــاعة</p>\r\n<p>إن اتجاه الصناعة المتنامي هو أحد الأشياء التي يجب التركيز عليها بشدة. نحن نركز على اتجاهات الأعمال التي تساعد على استهداف الجمهور المناسب في الوقت المناسب وبالطريقة الصحيحة للتسويق الرقمي</p>\r\n<p>فهم الصنــاعة</p>\r\n<p>إن اتجاه الصناعة المتنامي هو أحد الأشياء التي يجب التركيز عليها بشدة. نحن نركز على اتجاهات الأعمال التي تساعد على استهداف الجمهور المناسب في الوقت المناسب وبالطريقة الصحيحة للتسويق الرقمي</p>', NULL, NULL),
(2, 1, 'en', 'التجارة الالكترونية', 'في العمل، النجاح هو كل شيء. بفضل التسويق الرقمي، لمساعدة الشركات على اكتساب السمعة والنجاح في الفضاء عبر الإنترنت. يرتبط التسويق الرقمي باستخدام القنوات الرقمية مثل منصات الوسائط الاجتماعية وتطبيقات الهاتف المحمول وتسويق المحتوى وإعلانات Google ومحركات البحث وغيرها من الوسائط الرقمية الحالية والجديدة. فهو يظل في قلب التسويق في عالم يعتمد على التكنولوجيا، وبدونه يصبح عملك عديم الفائدة.\r\nكوننا أفضل شركات التسويق الرقمي في دبي نركز على المساعي القائمة على النتائج. بالنسبة لجميع تفاعلات العملاء، فإن هدفنا الأساسي هو تحقيق النتائج. توفر وكالة دبي للتسويق الرقمي للشركات مجموعة متنوعة من الطرق للوصول إلى جمهورها المستهدف والتواصل معه، مما يؤدي إلى جذب العملاء المحتملين والمدافعين الذين يكون لهم تأثير كبير على انطباع علامتك التجارية، كما يعملون أيضًا كوسيلة مبيعات ووسيلة إعلانية منخفضة التكلفة.', '<p style=\"text-align: right;\">كيف نعمل؟</p>', NULL, NULL),
(3, 2, 'ar', 'تطبيقات الموبيل', 'تطبيقات الموبيل', '<p>تطبيقات الموبيل</p>', NULL, NULL),
(4, 2, 'en', 'تطبيقات الموبيل', 'تطبيقات الموبيل', '<p>تطبيقات الموبيل</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name_ar', 'شركة النور', '2023-11-29 07:27:57', '2023-11-29 09:17:37'),
(2, 'site_name_en', 'Nor Company', '2023-11-29 07:27:57', '2023-11-29 09:17:37'),
(3, 'address_ar', 'عنوان باللغة العربية', '2023-11-29 07:27:57', '2023-11-29 19:04:15'),
(4, 'address_en', 'Illo quidem sit quae', '2023-11-29 07:27:57', '2023-11-29 07:27:57'),
(5, 'short_description_ar', 'Dolore sit consectet', '2023-11-29 07:27:57', '2023-11-29 07:27:57'),
(6, 'short_description_en', 'Aliqua Voluptate ap', '2023-11-29 07:27:57', '2023-11-29 07:27:57'),
(7, 'phone', '01270122393', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(8, 'whatsapp', '201270122393', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(9, 'email_1', 'ramadaba29@gmail.com', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(10, 'email_2', 'ramadaba29@gmail.com', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(11, 'facebook_link', 'https://www.facebook.com/profile.php?id=100014484707215', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(12, 'youtube_link', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(13, 'twitter', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(14, 'instagram', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(15, 'snapchat', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(16, 'telegram', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(17, 'linkedin', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(18, 'tiktok', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(19, 'logo', 'uploads/settings/logo-2024-03-19-05-00-23-9737.png', '2023-11-29 09:17:37', '2024-03-19 15:00:23'),
(20, 'logo_white', 'uploads/settings/logo-white-2024-03-25-06-32-15-1138.png', '2023-11-29 09:17:37', '2024-03-25 16:32:16'),
(21, 'favicon', 'uploads/settings/favicon-2024-03-25-06-32-15-4533.png', '2023-11-29 09:17:37', '2024-03-25 16:32:16'),
(22, 'contact_image', 'uploads/settings/-2024-02-04-11-40-40-9965.png', '2023-11-29 19:11:12', '2024-02-04 09:40:40'),
(23, 'description_ar', '<p>Ratione eaque alias .</p>', '2024-01-30 17:07:02', '2024-02-04 10:53:18'),
(24, 'description_en', '<p>Temporibus reprehend.</p>', '2024-01-30 17:07:02', '2024-02-04 10:53:18'),
(25, 'goals_ar', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(26, 'goals_en', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(27, 'our_message_ar', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(28, 'our_message_en', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(29, 'our_vision_ar', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(30, 'our_vision_en', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(31, 'rate_us_ar', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(32, 'rate_us_en', 'منذ نشأتنا ونحن نسعى إلى إنشاء قصتك الخاصة في عالم التسويق الرقمي، من خلال تقديم كافة الخدمات والحلول الرقمية التي تحتاجها لإنشاء وإرساء قاعدتك وبناء سمعة وعلاقات وثيقة مع العملاء للوصول لأعلى نسبة مبيعات، من خلال فريق من المتخصصين في مجالهم.', '2024-01-30 17:07:02', '2024-01-30 17:11:52'),
(33, 'features_video_url', 'https://www.youtube.com/watch?v=JnAq9zkcNrs', '2024-01-31 15:46:45', '2024-01-31 15:46:45'),
(34, 'sa_phone', '201270122393', '2024-02-04 10:53:18', '2024-02-05 17:31:55'),
(35, 'sa_whatsapp', '201270122393', '2024-02-04 10:53:18', '2024-02-05 17:31:55'),
(36, 'sa_email_1', 'puluroh@mailinator.com', '2024-02-04 10:53:18', '2024-02-04 10:53:18'),
(37, 'sa_email_2', 'cepepodex@mailinator.com', '2024-02-04 10:53:18', '2024-02-04 10:53:18'),
(38, 'sa_address_ar', 'شارع الأمير محمد بن سعد بن عبد العزيز - حي الملقا', '2024-02-04 10:53:18', '2024-02-05 08:43:19'),
(39, 'sa_address_en', 'شارع الأمير محمد بن سعد بن عبد العزيز - حي الملقا', '2024-02-04 10:53:18', '2024-02-05 08:43:20'),
(40, 'eg_phone', '90', '2024-02-04 10:53:18', '2024-02-04 10:53:18'),
(41, 'eg_whatsapp', '4', '2024-02-04 10:53:18', '2024-02-04 10:53:18'),
(42, 'eg_email_1', 'qyzevotu@mailinator.com', '2024-02-04 10:53:18', '2024-02-04 10:53:18'),
(43, 'eg_email_2', 'vadaxy@mailinator.com', '2024-02-04 10:53:18', '2024-02-04 10:53:18'),
(44, 'eg_address_ar', 'شارع الأمير محمد بن سعد بن عبد العزيز - حي الملقا', '2024-02-04 10:53:18', '2024-02-05 08:43:20'),
(45, 'eg_address_en', 'شارع الأمير محمد بن سعد بن عبد العزيز - حي الملقا', '2024-02-04 10:53:18', '2024-02-05 08:43:20'),
(46, 'bg_footer', 'uploads/settings/-2024-02-10-07-25-23-3292.gif', '2024-02-10 17:25:23', '2024-02-10 17:25:23'),
(47, 'company_profile', 'uploads/settings/-2024-02-10-07-52-08-5080.pdf', '2024-02-10 17:50:36', '2024-02-10 17:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `link`, `created_at`, `updated_at`, `type`, `bg_image`) VALUES
(1, 'uploads/sliders/-2024-03-19-05-46-07-6935.png', 1, NULL, '2023-11-29 09:52:52', '2024-03-19 15:47:30', 'image', 'uploads/sliders/-2024-03-19-05-47-30-3902.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'خدمات تصميم وتطوير', 'المواقع الألكترونية, البرمجة الرقمية , المتاجر', NULL, NULL),
(2, 1, 'en', 'Expert IT Services for Your Growing Business', 'Every pleasure is to be welcomed and every pain avoided. and every pain avoided. certain circumstances ands', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, '2024-03-24 14:50:51', '2024-03-24 14:50:51'),
(2, NULL, '2024-03-24 14:51:03', '2024-03-24 14:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `jop` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_translations`
--

INSERT INTO `team_translations` (`id`, `team_id`, `locale`, `title`, `jop`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'Rerum atque quo qui', 'Praesentium exercita', NULL, NULL),
(2, 1, 'en', 'Dolor numquam volupt', 'Commodi porro illum', NULL, NULL),
(3, 2, 'ar', 'Sed perspiciatis vo', 'Et illo deleniti in', NULL, NULL),
(4, 2, 'en', 'Maxime ex aspernatur', 'Sequi obcaecati eum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_steps`
--

CREATE TABLE `work_steps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_steps`
--

INSERT INTO `work_steps` (`id`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'uploads/work-steps/ut-accusantium-eum-a-2024-02-06-10-25-36-1169.png', NULL, '2024-02-06 20:24:35', '2024-02-06 20:25:36'),
(3, NULL, NULL, '2024-02-08 08:16:29', '2024-02-08 08:16:29'),
(4, NULL, NULL, '2024-02-08 08:18:07', '2024-02-08 08:18:07'),
(5, NULL, NULL, '2024-02-08 08:18:27', '2024-02-08 08:18:27'),
(6, NULL, NULL, '2024-02-08 08:18:45', '2024-02-08 08:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `work_step_translations`
--

CREATE TABLE `work_step_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_step_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_step_translations`
--

INSERT INTO `work_step_translations` (`id`, `work_step_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'التخطيط', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(2, 1, 'en', 'التخطيط', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(5, 3, 'ar', 'التصور', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(6, 3, 'en', 'التصور', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(7, 4, 'ar', 'التصميم', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(8, 4, 'en', 'التصميم', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(9, 5, 'ar', 'التنفيذ', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(10, 5, 'en', 'التنفيذ', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(11, 6, 'ar', 'التطوير', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL),
(12, 6, 'en', 'التطوير', 'يكتب هنا نص مبسط لوصف كل عملية في سطرين هنا علي الاكثر', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_translations_about_id_foreign` (`about_id`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_translations_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_translations_locale_index` (`locale`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_translations_brand_id_foreign` (`brand_id`),
  ADD KEY `brand_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_translations_category_id_foreign` (`category_id`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `countrs`
--
ALTER TABLE `countrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countr_translations_countr_id_foreign` (`countr_id`),
  ADD KEY `countr_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_translations_faq_id_foreign` (`faq_id`),
  ADD KEY `faq_translations_locale_index` (`locale`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_translations_feature_id_foreign` (`feature_id`),
  ADD KEY `feature_translations_locale_index` (`locale`);

--
-- Indexes for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `package_categories`
--
ALTER TABLE `package_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_translations_package_id_foreign` (`package_id`),
  ADD KEY `package_translations_locale_index` (`locale`);

--
-- Indexes for table `parteners`
--
ALTER TABLE `parteners`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_translations_product_id_foreign` (`product_id`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_translations_project_id_foreign` (`project_id`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_translations`
--
ALTER TABLE `review_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_translations_service_id_foreign` (`service_id`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_translations_slider_id_foreign` (`slider_id`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_translations_team_id_foreign` (`team_id`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_steps`
--
ALTER TABLE `work_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_step_translations`
--
ALTER TABLE `work_step_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_step_translations_work_step_id_foreign` (`work_step_id`),
  ADD KEY `work_step_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_translations`
--
ALTER TABLE `brand_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countrs`
--
ALTER TABLE `countrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countr_translations`
--
ALTER TABLE `countr_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feature_translations`
--
ALTER TABLE `feature_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package_categories`
--
ALTER TABLE `package_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_translations`
--
ALTER TABLE `package_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `parteners`
--
ALTER TABLE `parteners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_translations`
--
ALTER TABLE `review_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_steps`
--
ALTER TABLE `work_steps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `work_step_translations`
--
ALTER TABLE `work_step_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD CONSTRAINT `blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD CONSTRAINT `brand_translations_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD CONSTRAINT `countr_translations_countr_id_foreign` FOREIGN KEY (`countr_id`) REFERENCES `countrs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD CONSTRAINT `feature_translations_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_translations`
--
ALTER TABLE `package_translations`
  ADD CONSTRAINT `package_translations_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_step_translations`
--
ALTER TABLE `work_step_translations`
  ADD CONSTRAINT `work_step_translations_work_step_id_foreign` FOREIGN KEY (`work_step_id`) REFERENCES `work_steps` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
