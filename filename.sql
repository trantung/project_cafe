-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: developer
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: Inactive, 1: Active',
  `created_admin_id` int(11) DEFAULT NULL,
  `updated_admin_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'0','/tmp/phpzrfUSp','gioi thiuj tra sua',0,'Trà sữa',1,NULL,NULL,'2019-08-10 21:45:12','2019-08-10 21:47:40','2019-08-10 21:47:40'),(2,'2_','/uploads/categories/2/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg','gioi thiuj tra sua',0,'Trà sữa',1,NULL,NULL,'2019-08-10 21:46:32','2019-08-10 22:13:07','2019-08-10 22:13:07'),(3,'0_3','/uploads/categories/3/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Món khai vị',0,'Lục Trà Hoa Đăng',1,NULL,NULL,'2019-08-10 22:08:33','2019-08-10 22:13:12','2019-08-10 22:13:12'),(4,'4_','/uploads/categories/4/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Đô',0,'Cà phê',1,NULL,NULL,'2019-08-10 22:13:39','2019-08-10 22:18:26','2019-08-10 22:18:26'),(5,'0','/uploads/categories/5/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Đồ uống cà phê',0,'Cà phê',1,NULL,NULL,'2019-08-10 22:19:17','2019-08-11 00:56:42',NULL),(6,'0','/uploads/categories/6/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Đồ uống sử dụng đá xay',5,'Thức uống đá xay',1,NULL,NULL,'2019-08-10 22:19:38','2019-08-11 00:57:28',NULL),(7,'0','/uploads/categories/7/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Trà kết hợp với trái cây',6,'Trà trái cây',1,NULL,NULL,'2019-08-10 22:20:05','2019-08-11 00:58:01',NULL),(8,'5_8','/uploads/categories/8/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Americano',5,'Americano',1,NULL,NULL,'2019-08-11 00:59:32','2019-08-11 00:59:32',NULL),(9,'5_8_9','/uploads/categories/9/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Americano nóng',8,'Americano Nóng',1,NULL,NULL,'2019-08-11 01:00:23','2019-08-11 01:00:23',NULL),(10,'5_8_10','/uploads/categories/10/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Americano đá',8,'Americano Đá',1,NULL,NULL,'2019-08-11 01:00:33','2019-08-11 01:00:33',NULL),(11,'5_11','/uploads/categories/11/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Latte',5,'Latte',1,NULL,NULL,'2019-08-11 01:01:15','2019-08-11 01:01:15',NULL),(12,'5_11_12','/uploads/categories/12/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Latte nóng',11,'Latte Nóng',1,NULL,NULL,'2019-08-11 01:01:41','2019-08-11 01:01:41',NULL),(13,'5_11_13','/uploads/categories/13/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Latte đá',11,'Latte Đá',1,NULL,NULL,'2019-08-11 01:01:50','2019-08-11 01:01:50',NULL),(14,'6_14','/uploads/categories/14/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Chocolate Đá Xay',6,'Chocolate Đá Xay',1,NULL,NULL,'2019-08-11 01:04:15','2019-08-11 01:04:15',NULL),(15,'6_15','/uploads/categories/15/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Matcha Đá Xay',6,'Matcha Đá Xay',1,NULL,NULL,'2019-08-11 01:04:33','2019-08-11 01:04:33',NULL),(16,'7_16','/uploads/categories/16/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Trà Đào Cam Sả',7,'Trà Đào Cam Sả',1,NULL,NULL,'2019-08-11 01:05:01','2019-08-11 01:05:01',NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `common_images`
--

DROP TABLE IF EXISTS `common_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `common_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `weight_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common_images`
--

LOCK TABLES `common_images` WRITE;
/*!40000 ALTER TABLE `common_images` DISABLE KEYS */;
INSERT INTO `common_images` VALUES (11,'/uploads/products/4/images/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',4,'Product',NULL,NULL,'2019-08-11 01:22:43','2019-08-11 01:22:43'),(12,'/uploads/products/4/images/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',4,'Product',NULL,NULL,'2019-08-11 01:22:43','2019-08-11 01:22:43'),(15,'/uploads/products/6/images/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',6,'Product',NULL,NULL,'2019-08-11 01:24:17','2019-08-11 01:24:17'),(16,'/uploads/products/6/images/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',6,'Product',NULL,NULL,'2019-08-11 01:24:17','2019-08-11 01:24:17'),(17,'/uploads/products/7/images/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',7,'Product',NULL,NULL,'2019-08-11 01:24:41','2019-08-11 01:24:41'),(18,'/uploads/products/7/images/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',7,'Product',NULL,NULL,'2019-08-11 01:24:41','2019-08-11 01:24:41'),(19,'/uploads/products/5/images/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',5,'Product',NULL,NULL,'2019-08-11 01:25:57','2019-08-11 01:25:57'),(20,'/uploads/products/5/images/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',5,'Product',NULL,NULL,'2019-08-11 01:25:57','2019-08-11 01:25:57');
/*!40000 ALTER TABLE `common_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `active` int(11) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,NULL,0,NULL,'0869120588',NULL,NULL,NULL,'2019-08-10 21:52:00','2019-08-10 21:52:00',NULL),(2,NULL,0,NULL,'0869120577',NULL,NULL,NULL,'2019-08-10 21:57:41','2019-08-10 21:57:41',NULL),(3,NULL,0,NULL,'0869120688',NULL,NULL,NULL,'2019-08-10 22:07:51','2019-08-10 22:07:51',NULL),(4,NULL,0,NULL,'08645884',NULL,NULL,NULL,'2019-08-10 22:10:03','2019-08-10 22:10:03',NULL),(5,NULL,0,NULL,'0869120587',NULL,NULL,NULL,'2019-08-10 22:11:14','2019-08-10 22:11:14',NULL),(6,NULL,0,NULL,'0854958904',NULL,NULL,NULL,'2019-08-10 22:12:15','2019-08-10 22:12:15',NULL),(7,NULL,0,NULL,'0869120589',NULL,NULL,NULL,'2019-08-10 22:12:43','2019-08-10 22:12:43',NULL),(8,NULL,0,NULL,'0869120580',NULL,NULL,NULL,'2019-08-10 22:13:39','2019-08-10 22:13:39',NULL),(9,NULL,0,NULL,'0869120590',NULL,NULL,NULL,'2019-08-10 22:15:35','2019-08-10 22:15:35',NULL),(10,NULL,0,NULL,'0869120599',NULL,NULL,NULL,'2019-08-10 22:16:52','2019-08-10 22:16:52',NULL),(11,NULL,0,NULL,'0387997547',NULL,NULL,NULL,'2019-08-10 22:19:08','2019-08-10 22:19:08',NULL),(12,NULL,0,NULL,'0999999999',NULL,NULL,NULL,'2019-08-10 22:25:07','2019-08-10 22:25:07',NULL),(13,NULL,0,NULL,'12345678',NULL,NULL,NULL,'2019-08-10 22:27:04','2019-08-10 22:27:04',NULL),(14,NULL,0,NULL,'123456789',NULL,NULL,NULL,'2019-08-10 23:32:40','2019-08-10 23:32:40',NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: Inactive, 1: Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` VALUES (1,1,'tang_1','Tầng 1',1,'2019-08-10 20:14:10','2019-08-10 21:52:04',NULL),(2,1,'tang_2','Tang 2',1,'2019-08-10 20:17:24','2019-08-10 20:17:24',NULL),(3,1,'Ban_1',NULL,1,'2019-08-10 20:35:50','2019-08-10 20:35:50',NULL),(4,1,'tang_3','Tang 3',1,'2019-08-10 21:02:01','2019-08-10 21:02:01',NULL);
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `material_types`
--

DROP TABLE IF EXISTS `material_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `material_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material_types`
--

LOCK TABLES `material_types` WRITE;
/*!40000 ALTER TABLE `material_types` DISABLE KEYS */;
INSERT INTO `material_types` VALUES (1,NULL,'gr',0,'2019-08-10 23:53:32','2019-08-10 23:59:48',NULL),(2,NULL,'ml',1,'2019-08-10 23:53:48','2019-08-10 23:53:48',NULL),(3,NULL,'chai',1,'2019-08-10 23:53:55','2019-08-10 23:53:55',NULL),(4,NULL,'lo',1,'2019-08-10 23:54:05','2019-08-11 00:00:04','2019-08-11 00:00:04');
/*!40000 ALTER TABLE `material_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `material_type_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (1,NULL,1,'Mang cut','1200',1,'2019-08-11 00:03:20','2019-08-11 00:06:48',NULL),(2,NULL,1,'Đá','800',1,'2019-08-11 00:03:50','2019-08-11 00:03:50',NULL),(3,NULL,2,'Sugar','900',1,'2019-08-11 00:04:26','2019-08-11 00:19:14','2019-08-11 00:19:14');
/*!40000 ALTER TABLE `materials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_05_22_085544_create_categories_table',1),(9,'2019_05_24_088359_create_products_table',1),(10,'2019_07_26_055215_add_field_categories',1),(11,'2019_07_26_060620_add_field_user_admin',1),(12,'2019_07_29_032725_create_role_tables',1),(13,'2019_07_29_034102_default_role_database',1),(14,'2019_07_30_033141_add_path_categories',1),(15,'2019_07_30_084309_create_shop_table',1),(16,'2019_07_30_085924_create_user_shop_table',1),(17,'2019_07_31_022630_create_table_level',1),(18,'2019_07_31_040023_create_tables',1),(19,'2019_07_31_063108_create_topping_table',1),(20,'2019_07_31_063129_create_topping_categories_table',1),(21,'2019_07_31_094637_create_product_topping_table',1),(22,'2019_07_31_095932_create_images_table',1),(23,'2019_08_01_022213_add_more_field_product',1),(24,'2019_08_01_023518_add_status_field_product',1),(28,'2019_08_05_060225_create_size_table',2),(29,'2019_08_05_062023_create_size_product_table',2),(30,'2019_08_09_031754_create_customer_table',2),(31,'2019_08_09_040315_create_material_table',2),(32,'2019_08_09_040433_create_material_type_table',2),(33,'2019_08_09_054638_create_orders_table',2),(34,'2019_08_09_054719_create_order_product_table',2),(38,'2019_08_09_060405_create_bill_tmp_table',3),(39,'2019_08_09_061705_add_open_close_time_shop',3),(40,'2019_08_09_061936_add_open_time_and_duration_product',3),(41,'2019_08_11_020625_add_active_field_customer',4),(42,'2019_08_12_080827_create_size_product_material_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('1b8964a726758b5475c08710c9c254fa1a4ff20bbf1f0b28996d201fb51fae4f7bae2806dc04964f',1,1,'Laravel','[]',0,'2019-08-10 20:59:22','2019-08-10 20:59:22','2020-08-11 03:59:22'),('2d543615c24dffa51a9c5e78532bc504d1ca0aa3287351735b1729d2e356b3d03e360118dee0ae86',1,1,'Laravel','[]',1,'2019-08-10 20:58:04','2019-08-10 20:59:02','2020-08-11 03:58:04'),('6a262094f665e351002808bd1507a128b8495a1b29201e4ee5b589c77e0a2639a6e66b62cee9fbbf',1,1,'Laravel','[]',1,'2019-08-10 20:51:32','2019-08-10 20:59:02','2020-08-11 03:51:32'),('73cb1bf0c6b8fec3d8d11bd735a8f050b4c1e2b933e2b9889fc34d70cccb69a1d2ac0c684b92700a',1,1,'Laravel','[]',1,'2019-08-10 19:50:16','2019-08-10 20:59:02','2020-08-11 02:50:16'),('84a8253431d3b871b29ccd5efc073f8e7336673d3fa2c3fd55972111a27ef03713e463c8b61a9829',1,1,'Laravel','[]',1,'2019-08-10 19:50:34','2019-08-10 20:59:02','2020-08-11 02:50:34'),('85d13e6e1cc5918bd48799c57631353070ab5aa77b9661de4cea343b9cd64c188e208ae7ebe03806',1,1,'Laravel','[]',1,'2019-08-10 20:39:07','2019-08-10 20:59:02','2020-08-11 03:39:07'),('85e93c947406b5c2f702f9e4d864c8344f37bc9c3dfa390d99e4449fca2eb51396c15e94ac058487',1,1,'Laravel','[]',1,'2019-08-10 20:56:11','2019-08-10 20:59:02','2020-08-11 03:56:11'),('86be4b2255adf4bc978a52127e12bf8fc58aedf4c962e48c6713aa3e83a4a61966baf96e3578438a',1,1,'Laravel','[]',0,'2019-08-10 21:31:37','2019-08-10 21:31:37','2020-08-11 04:31:37'),('a9471b31d9b1d6f699a11a46c8648bf3ed12ffbde6674191a7b96d6e4c38a65fd287f171705a86f4',1,1,'Laravel','[]',0,'2019-08-10 22:26:46','2019-08-10 22:26:46','2020-08-11 05:26:46'),('b0ce3b3a6e59272168537e68716403ef4ef2ae0a377345db5b475f779c5f2f1a2cde90ff9659b4eb',1,1,'Laravel','[]',1,'2019-08-10 20:58:59','2019-08-10 20:59:02','2020-08-11 03:58:59'),('b92c876845523f1b094198e365222d70fc0c607f22ea208df24dbfec752c152af850ebbba4f6f8c3',1,1,'Laravel','[]',1,'2019-08-10 19:44:15','2019-08-10 20:59:02','2020-08-11 02:44:15'),('c18fcd1cff73d8de7e2dda44cdee1639ff8b259c93cf0eeb6be891d2b57fabe0b1a19fe217df87af',1,1,'Laravel','[]',1,'2019-08-10 20:20:25','2019-08-10 20:59:02','2020-08-11 03:20:25'),('cc097fcdc0b4f2d8506223378ba5e49d3cb925f3fa54f8820b82f884df9406d19718b78bb8a549a2',1,1,'Laravel','[]',1,'2019-08-10 20:44:04','2019-08-10 20:59:02','2020-08-11 03:44:04'),('cc43aa7595ba2762d11542d21add0dc0c38636b5a812145ea2c35a17698b30c132a5e9369177c38a',1,1,'Laravel','[]',0,'2019-08-10 20:59:09','2019-08-10 20:59:09','2020-08-11 03:59:09'),('eca6fba440b64379e8a43cf3b34124315e0c44c2da1b4389abe77a7691b2ad15c8df1ef3f7a849a4',1,1,'Laravel','[]',1,'2019-08-10 20:12:54','2019-08-10 20:59:02','2020-08-11 03:12:54'),('fab66a5ae180207f86fbd12cc777c7aec6925b22d8f3f741955c6edd71b659bc3a7561e763852f31',1,1,'Laravel','[]',1,'2019-08-10 20:37:52','2019-08-10 20:59:02','2020-08-11 03:37:52'),('fef601c870d6e9500ed8c1dca628bedffea88952513d62adb649b6636bb48e9363c4e8c4435a45a3',1,1,'Laravel','[]',0,'2019-08-10 21:00:41','2019-08-10 21:00:41','2020-08-11 04:00:41');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'Laravel Personal Access Client','8rbwhpQdUMkukWoMaSUmhpSvNBOemYnKDVOAZhwr','http://localhost',1,0,0,'2019-08-10 19:44:00','2019-08-10 19:44:00'),(2,NULL,'Laravel Password Grant Client','vk3WOlm52AILsY4d2va44SyJVs1tjS44boFqF9l8','http://localhost',0,1,0,'2019-08-10 19:44:00','2019-08-10 19:44:00');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2019-08-10 19:44:00','2019-08-10 19:44:00');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_bill_tmps`
--

DROP TABLE IF EXISTS `order_bill_tmps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_bill_tmps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_bill_tmps`
--

LOCK TABLES `order_bill_tmps` WRITE;
/*!40000 ALTER TABLE `order_bill_tmps` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_bill_tmps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promotion_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_topping`
--

DROP TABLE IF EXISTS `product_topping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_topping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `topping_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_topping`
--

LOCK TABLES `product_topping` WRITE;
/*!40000 ALTER TABLE `product_topping` DISABLE KEYS */;
INSERT INTO `product_topping` VALUES (1,5,2,NULL,'2019-08-11 01:42:11','2019-08-11 01:42:11'),(2,5,3,NULL,'2019-08-11 01:42:37','2019-08-11 01:42:37');
/*!40000 ALTER TABLE `product_topping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `duration_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  `open_time` time DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'active hoặc inactive',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Ảnh đại diện',
  `weight_number` int(11) DEFAULT NULL COMMENT 'thứ tự',
  `description` text COLLATE utf8mb4_unicode_ci COMMENT 'Mô tả',
  `print_view` int(11) DEFAULT NULL COMMENT 'In và hiển thị',
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'barcode món',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'mã món',
  `price_pay` int(11) DEFAULT NULL COMMENT 'giá bán',
  `price_origin` int(11) DEFAULT NULL COMMENT 'giá vốn',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'2 phut','21:00:00','09:00:00',NULL,'/uploads/products/1/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',1,'Mon_tra_sua',1,'123','1',35000,15000,'Tra_sua',5,'2019-08-11 00:31:52','2019-08-11 01:21:58','2019-08-11 01:21:58'),(2,'5 phut','22:00:00','09:00:00',NULL,'/uploads/products/2/avatar/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',2,'Món trà hoa đăng cho mùa thu',1,'124','2',35000,10000,'Chocolate Đá Xay',14,'2019-08-11 00:46:11','2019-08-11 01:22:02','2019-08-11 01:22:02'),(3,'2 phut','21:00:00','09:00:00',NULL,'/uploads/products/3/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',2,'Món matcha đủ vị',1,'125','3',35000,15000,'Matcha phú quý',5,'2019-08-11 00:47:14','2019-08-11 01:22:05','2019-08-11 01:22:05'),(4,'2 phut','21:00:00','09:00:00',NULL,'/uploads/products/4/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',2,'Americano Nóng (kxđ)',1,'100','1',30000,10000,'Americano Nóng (kxđ)',5,'2019-08-11 01:22:43','2019-08-11 01:22:43',NULL),(5,'5 phut','22:00:00','09:00:00',NULL,'/uploads/products/5/avatar/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',3,'Món trà hoa đăng cho mùa thu',1,'101','2',35000,10000,'Americano Nóng (cate2)',8,'2019-08-11 01:23:40','2019-08-11 01:25:57',NULL),(6,'4 phut','21:00:00','09:00:00',NULL,'/uploads/products/6/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',4,'Americano Nóng (cate3)',1,'102','3',25000,10000,'Americano Nóng (cate3)',9,'2019-08-11 01:24:17','2019-08-11 01:24:17',NULL),(7,'4 phut','21:00:00','09:00:00',NULL,'/uploads/products/7/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',5,'Americano Nóng (cate4)',1,'103','4',25000,10000,'Americano Nóng (cate4)',10,'2019-08-11 01:24:41','2019-08-11 01:24:41',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','Admin quản trị hệ thống','2019-08-08 20:04:16','2019-08-08 20:04:16',NULL),(2,'shop manager','Các quản lý shop','2019-08-08 20:04:16','2019-08-08 20:04:16',NULL),(3,'Cashier','Thu ngân','2019-08-08 20:04:16','2019-08-08 20:04:16',NULL),(4,'Servicer','Phục vụ','2019-08-08 20:04:16','2019-08-08 20:04:16',NULL),(5,'Kitchen/Bar','Bếp/Bar','2019-08-08 20:04:16','2019-08-08 20:04:16',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `close_time` time DEFAULT NULL,
  `open_time` time DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `require_customer_login` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shops`
--

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` VALUES (1,'22:00:00','10:00:00','Meegu1','0912957368','quang ninh','marcus','Hai ba trung','20,121212','22,212121','the best coffee branches',NULL,0,'2019-08-10 19:57:33','2019-08-10 23:37:08',NULL);
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size_product`
--

DROP TABLE IF EXISTS `size_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `size_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_product`
--

LOCK TABLES `size_product` WRITE;
/*!40000 ALTER TABLE `size_product` DISABLE KEYS */;
INSERT INTO `size_product` VALUES (1,5,1,NULL,NULL,'2019-08-11 01:59:18','2019-08-11 01:59:18',NULL),(2,6,1,NULL,NULL,'2019-08-11 01:59:28','2019-08-11 01:59:28',NULL),(3,5,1,NULL,NULL,'2019-08-11 02:01:02','2019-08-11 02:01:02',NULL),(4,5,1,NULL,NULL,'2019-08-11 02:03:53','2019-08-11 02:03:53',NULL),(5,5,1,NULL,NULL,'2019-08-11 02:04:10','2019-08-11 02:04:10',NULL),(6,5,1,NULL,NULL,'2019-08-11 02:05:00','2019-08-11 02:05:00',NULL),(7,5,1,NULL,NULL,'2019-08-11 02:07:12','2019-08-11 02:07:12',NULL),(8,5,1,NULL,NULL,'2019-08-11 02:07:31','2019-08-11 02:07:31',NULL),(9,5,1,NULL,NULL,'2019-08-11 02:07:37','2019-08-11 02:07:37',NULL),(10,5,1,NULL,NULL,'2019-08-11 02:09:33','2019-08-11 02:09:33',NULL),(11,5,1,NULL,NULL,'2019-08-11 02:11:12','2019-08-11 02:11:12',NULL),(12,5,1,NULL,NULL,'2019-08-11 02:14:27','2019-08-11 02:14:27',NULL),(13,5,1,NULL,NULL,'2019-08-11 02:29:06','2019-08-11 02:29:06',NULL),(14,5,1,NULL,NULL,'2019-08-11 02:29:55','2019-08-11 02:29:55',NULL),(15,5,1,NULL,NULL,'2019-08-11 02:33:14','2019-08-11 02:33:14',NULL),(16,5,1,NULL,NULL,'2019-08-11 02:34:55','2019-08-11 02:34:55',NULL),(17,5,1,NULL,NULL,'2019-08-11 02:46:06','2019-08-11 02:46:06',NULL),(18,5,1,NULL,NULL,'2019-08-11 02:48:17','2019-08-11 02:48:17',NULL),(19,5,1,'10000',NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22',NULL),(20,5,2,'10000',NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00',NULL),(21,6,1,'10000',NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50',NULL);
/*!40000 ALTER TABLE `size_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `size_product_material`
--

DROP TABLE IF EXISTS `size_product_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `size_product_material` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `size_product_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_product_material`
--

LOCK TABLES `size_product_material` WRITE;
/*!40000 ALTER TABLE `size_product_material` DISABLE KEYS */;
INSERT INTO `size_product_material` VALUES (1,19,5,1,1,1,NULL,NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22'),(2,19,5,1,2,2,NULL,NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22'),(3,20,5,2,1,1,NULL,NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00'),(4,20,5,2,2,2,NULL,NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00'),(5,21,6,1,1,1,NULL,NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50'),(6,21,6,1,2,2,NULL,NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50');
/*!40000 ALTER TABLE `size_product_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sizes`
--

LOCK TABLES `sizes` WRITE;
/*!40000 ALTER TABLE `sizes` DISABLE KEYS */;
INSERT INTO `sizes` VALUES (1,'S moi',0,NULL,'2019-08-10 23:40:04','2019-08-10 23:42:37',NULL),(2,'M',1,NULL,'2019-08-10 23:40:13','2019-08-10 23:40:13',NULL),(3,'L',1,NULL,'2019-08-10 23:40:17','2019-08-10 23:40:17',NULL),(4,'cay',1,NULL,'2019-08-10 23:40:21','2019-08-10 23:40:21',NULL),(5,'ngot',1,NULL,'2019-08-10 23:40:28','2019-08-10 23:40:28',NULL);
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `max_number_person` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: Inactive, 1: Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables`
--

LOCK TABLES `tables` WRITE;
/*!40000 ALTER TABLE `tables` DISABLE KEYS */;
INSERT INTO `tables` VALUES (1,1,'ban 1',NULL,'shop1_level1_1',1,2,4,1,'2019-08-10 20:37:04','2019-08-10 21:55:38',NULL),(2,1,'Ban_2','Awu2QadmP3T6qLDG','shop1_level1_2',1,1,4,1,'2019-08-10 20:38:45','2019-08-10 20:38:45',NULL),(3,1,'Ban_3','GOZWA0qsKQ26ovdw','shop1_level1_3',1,1,4,1,'2019-08-10 20:39:10','2019-08-10 20:39:10',NULL),(4,1,'Ban_4','0SoqKCRY6u394Adc','shop1_level1_4',1,2,4,1,'2019-08-10 20:56:02','2019-08-10 20:56:02',NULL),(5,1,'Ban_5','F7sZUEAu9tyhBzfL','shop1_level1_5',1,3,4,1,'2019-08-10 21:09:12','2019-08-10 21:09:12',NULL),(6,1,'Ban_6','sPxVirh5judlC4kI','shop1_level1_6',2,1,6,1,'2019-08-10 21:09:57','2019-08-10 21:09:57',NULL),(7,2,'Ban_7','BFi2O1DXJmtC4NMW','shop1_level2_7',2,1,6,1,'2019-08-10 21:10:57','2019-08-10 21:10:57',NULL),(8,2,'Ban_8','TObAr179CSkMQWuh','shop1_level2_8',2,3,6,1,'2019-08-10 21:11:23','2019-08-10 21:11:23',NULL),(9,4,'Ban_9','OCuU65IldbWTX4Kk','shop1_level3_9',3,3,10,1,'2019-08-10 21:12:10','2019-08-10 21:12:10',NULL);
/*!40000 ALTER TABLE `tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topping_category`
--

DROP TABLE IF EXISTS `topping_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topping_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topping_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topping_category`
--

LOCK TABLES `topping_category` WRITE;
/*!40000 ALTER TABLE `topping_category` DISABLE KEYS */;
INSERT INTO `topping_category` VALUES (1,1,5,1,NULL,NULL),(2,1,8,1,NULL,NULL),(3,1,10,1,NULL,NULL);
/*!40000 ALTER TABLE `topping_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toppings`
--

DROP TABLE IF EXISTS `toppings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toppings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toppings`
--

LOCK TABLES `toppings` WRITE;
/*!40000 ALTER TABLE `toppings` DISABLE KEYS */;
INSERT INTO `toppings` VALUES (1,'Espresso (1shot)','10000',1,'2019-08-11 01:39:27','2019-08-11 01:39:27',NULL),(2,'Espresso (2shot)','15000',1,'2019-08-11 01:42:11','2019-08-11 01:42:11',NULL),(3,'Espresso (3shot)','20000',1,'2019-08-11 01:42:37','2019-08-11 01:42:37',NULL);
/*!40000 ALTER TABLE `toppings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_shop`
--

DROP TABLE IF EXISTS `user_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_shop`
--

LOCK TABLES `user_shop` WRITE;
/*!40000 ALTER TABLE `user_shop` DISABLE KEYS */;
INSERT INTO `user_shop` VALUES (1,4,1,'2019-08-10 20:03:11','2019-08-10 20:03:11');
/*!40000 ALTER TABLE `user_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `username` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,1,'admin','Admin','trantunghn196@gmail.com',NULL,'$2y$10$/okfB8xsffX3HfluaNAOgOeKeIsEfRrHbc4DGDWR2G5.F8zJOzbGq',NULL,'2019-08-08 20:04:22','2019-08-08 20:04:22',NULL),(2,NULL,1,'tunglaso2','tran thanh tung','tunglaso2@gmail.com',NULL,'$2y$10$1B/6shqODs1QP1N6iTg8we/yxcdw5g4.yFUs6WSTr8hqgWu77xEgy',NULL,'2019-08-10 19:59:29','2019-08-10 19:59:29',NULL),(3,NULL,1,'tunglaso3','tran thanh tung','tunglaso3@gmail.com',NULL,'$2y$10$bD5bwW1lB342YClOe41l5uXN4y2kSkcXGPc3nvFFtBZSHlTOQsNJq',NULL,'2019-08-10 20:01:59','2019-08-10 20:01:59',NULL),(4,NULL,1,'tunglaso4','tran thanh tung','tunglaso4@gmail.com',NULL,'$2y$10$guzJd9aSNEo6CjN36BFhdeTZqCRVo9TrsINNn0W4Yt1yWQTo4ciqa',NULL,'2019-08-10 20:03:11','2019-08-10 20:03:11',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-12 23:39:27
