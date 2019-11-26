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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'0','/tmp/phpzrfUSp','gioi thiuj tra sua',0,'Trà sữa',1,NULL,NULL,'2019-08-10 21:45:12','2019-08-10 21:47:40','2019-08-10 21:47:40'),(2,'2_','/uploads/categories/2/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg','gioi thiuj tra sua',0,'Trà sữa',1,NULL,NULL,'2019-08-10 21:46:32','2019-08-10 22:13:07','2019-08-10 22:13:07'),(3,'0_3','/uploads/categories/3/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Món khai vị',0,'Lục Trà Hoa Đăng',1,NULL,NULL,'2019-08-10 22:08:33','2019-08-10 22:13:12','2019-08-10 22:13:12'),(4,'4_','/uploads/categories/4/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Đô',0,'Cà phê',1,NULL,NULL,'2019-08-10 22:13:39','2019-08-10 22:18:26','2019-08-10 22:18:26'),(5,'5','/uploads/categories/5/do_uong.jpg','Các loại đồ uống',0,'Thức uống',1,NULL,NULL,'2019-08-10 22:19:17','2019-08-17 21:25:26',NULL),(6,'6','/uploads/categories/6/do_an.jpg','Các loại đồ ăn',0,'Thức ăn',1,NULL,NULL,'2019-08-10 22:19:38','2019-08-17 21:28:09',NULL),(7,'5','/uploads/categories/7/coffee.jpg','Cà phê',6,'Coffee',1,NULL,NULL,'2019-08-10 22:20:05','2019-08-17 21:29:36',NULL),(8,'5','/uploads/categories/8/thuc_uong_da_xay.jpg','Thức uống đá xay',5,'Thức uống đá xay',1,NULL,NULL,'2019-08-11 00:59:32','2019-08-17 21:32:27',NULL),(9,'5','/uploads/categories/9/do_uong.jpg','Trà trái cây',8,'Trà trái cây',1,NULL,NULL,'2019-08-11 01:00:23','2019-08-17 21:32:02',NULL),(10,'6','/uploads/categories/10/thuc_an_nhe.jpg','Thức ăn nhẹ',8,'Thức ăn nhẹ',1,NULL,NULL,'2019-08-11 01:00:33','2019-08-17 21:34:38',NULL),(11,'5_7','/uploads/categories/11/coldbrew_kv.png','Cold brew',5,'Cold brew',1,NULL,NULL,'2019-08-11 01:01:15','2019-08-17 21:36:08',NULL),(12,'5_7','/uploads/categories/12/caramel_macchiato.jpg','Caramel Macchiato',11,'Caramel Macchiato',1,NULL,NULL,'2019-08-11 01:01:41','2019-08-17 21:37:12',NULL),(13,'5_7','/uploads/categories/13/cafe-sua-nong.jpg','Cà phê sữa',11,'Cà phê sữa',1,NULL,NULL,'2019-08-11 01:01:50','2019-08-17 21:38:28',NULL),(14,'5_7','/uploads/categories/14/americano-nong.jpg','Americano',6,'Americano',1,NULL,NULL,'2019-08-11 01:04:15','2019-08-17 21:39:03',NULL),(15,'5_7','/uploads/categories/15/cappuccino_master.jpg','Cappucino',6,'Cappucino',1,NULL,NULL,'2019-08-11 01:04:33','2019-08-17 21:40:57',NULL),(16,'5_7','/uploads/categories/16/latte_nong.jpg','Latte',7,'Latte',1,NULL,NULL,'2019-08-11 01:05:01','2019-08-17 21:42:10',NULL),(17,'5_7_17','/uploads/categories/17/mocha_ice_blended_master.jpg','Mocha',7,'Mocha',1,NULL,NULL,'2019-08-17 21:44:43','2019-08-17 21:44:43',NULL),(18,'5_7_18','/uploads/categories/18/espresso_master.jpg','Espresso',7,'Espresso',1,NULL,NULL,'2019-08-17 21:46:43','2019-08-17 21:46:43',NULL),(19,'5_8','/uploads/categories/19/mocha_ice_blended_master.jpg','Chocolate đá xay',8,'Chocolate đá xay',0,NULL,NULL,'2019-08-17 21:47:22','2019-08-25 07:29:47',NULL),(20,'5_8','/uploads/categories/20/mocha_ice_blended_master.jpg','Phúc bồn tử cam đá xay',8,'Phúc bồn tử cam đá xay',0,NULL,NULL,'2019-08-17 21:47:48','2019-08-25 07:30:07',NULL),(21,'5_8','/uploads/categories/21/mocha_ice_blended_master.jpg','Matcha đá.xay',8,'Matcha đá.xay',0,NULL,NULL,'2019-08-17 21:49:10','2019-08-25 07:30:34',NULL),(22,'5_8','/uploads/categories/22/mocha_ice_blended_master.jpg','Cookies đá xay',8,'Cookies đá xay',0,NULL,NULL,'2019-08-17 21:50:17','2019-08-25 07:30:54',NULL),(23,'5_8','/uploads/categories/23/mocha_ice_blended_master.jpg','Chanh sả đá xay',8,'Chanh sả đá xay',0,NULL,NULL,'2019-08-17 21:50:43','2019-08-25 07:31:02',NULL),(24,'5_8','/uploads/categories/24/mocha_ice_blended_master.jpg','Cam đá xay',8,'Cam đá xay',0,NULL,NULL,'2019-08-17 21:50:58','2019-08-25 07:31:17',NULL),(25,'5_8','/uploads/categories/25/mocha_ice_blended_master.jpg','Ổi hồng việt quất đá xay',8,'Ổi hồng việt quất đá xay',0,NULL,NULL,'2019-08-17 21:51:10','2019-08-25 07:31:32',NULL),(26,'5_9','/uploads/categories/26/mocha_ice_blended_master.jpg','Trà ô long',9,'Trà ô long',0,NULL,NULL,'2019-08-17 21:51:57','2019-08-25 07:31:53',NULL),(27,'5_9','/uploads/categories/27/mocha_ice_blended_master.jpg','Lục trà hoa đăng',9,'Lục trà hoa đăng',0,NULL,NULL,'2019-08-17 21:52:26','2019-08-25 07:32:09',NULL),(28,'6_10','/uploads/categories/28/mocha_ice_blended_master.jpg','Đậu phộng tỏi ớt',10,'Đậu phộng tỏi ớt',0,NULL,NULL,'2019-08-17 21:53:59','2019-08-25 07:32:54',NULL),(29,'6_10','/uploads/categories/29/mocha_ice_blended_master.jpg','Bánh mì que',10,'Bánh mì que',0,NULL,NULL,'2019-08-17 21:55:36','2019-08-25 07:33:15',NULL),(30,'6_10','/uploads/categories/30/mocha_ice_blended_master.jpg','Da Cá Sấy Giòn Vị Trứng Muối',10,'Da Cá Sấy Giòn Vị Trứng Muối',0,NULL,NULL,'2019-08-17 21:57:09','2019-08-25 07:33:38',NULL),(31,'6_10','/uploads/categories/31/mocha_ice_blended_master.jpg','Khô gà lá chanh',10,'Khô gà lá chanh',0,NULL,NULL,'2019-08-17 21:58:43','2019-08-25 07:33:52',NULL),(32,'6_10','/uploads/categories/32/mocha_ice_blended_master.jpg','Điều vàng rang muối',10,'Điều vàng rang muối',0,NULL,NULL,'2019-08-17 22:00:47','2019-08-25 07:34:07',NULL),(33,'6_10','/uploads/categories/33/mocha_ice_blended_master.jpg','Hạt sen sấy',10,'Hạt sen sấy',0,NULL,NULL,'2019-08-17 22:01:43','2019-08-25 07:34:21',NULL),(34,'6_10','/uploads/categories/34/mocha_ice_blended_master.jpg','Khô gà bơ cay',10,'Khô gà bơ cay',0,NULL,NULL,'2019-08-17 22:03:06','2019-08-25 07:34:35',NULL),(35,'6_10','/uploads/categories/35/mocha_ice_blended_master.jpg','Cơm cháy chà bông',10,'Cơm cháy chà bông',0,NULL,NULL,'2019-08-17 22:03:19','2019-08-25 07:34:51',NULL),(36,'6_10','/uploads/categories/36/mocha_ice_blended_master.jpg','Gạo lứt sấy giòn',10,'Gạo lứt sấy giòn',0,NULL,NULL,'2019-08-17 22:03:30','2019-08-25 07:35:07',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common_images`
--

LOCK TABLES `common_images` WRITE;
/*!40000 ALTER TABLE `common_images` DISABLE KEYS */;
INSERT INTO `common_images` VALUES (21,'/uploads/products/4/images/cold_brew_cam_sa.jpg',4,'Product',NULL,NULL,'2019-08-18 00:31:22','2019-08-18 00:31:22'),(22,'/uploads/products/4/images/cold_brew_cam_sa.png',4,'Product',NULL,NULL,'2019-08-18 00:31:22','2019-08-18 00:31:22'),(23,'/uploads/products/5/images/coldbrew_phuc_bon_tu.png',5,'Product',NULL,NULL,'2019-08-18 00:34:20','2019-08-18 00:34:20'),(24,'/uploads/products/6/images/coldbrew_milk.jpg',6,'Product',NULL,NULL,'2019-08-18 00:36:31','2019-08-18 00:36:31'),(25,'/uploads/products/8/images/caramel_macchiato.jpg',8,'Product',NULL,NULL,'2019-08-18 00:40:49','2019-08-18 00:40:49'),(26,'/uploads/products/9/images/caramel_macchiato.jpg',9,'Product',NULL,NULL,'2019-08-18 00:43:53','2019-08-18 00:43:53'),(27,'/uploads/products/7/images/caramel_macchiato.jpg',7,'Product',NULL,NULL,'2019-08-18 01:15:20','2019-08-18 01:15:20'),(28,'/uploads/products/10/images/caramel_macchiato.jpg',10,'Product',NULL,NULL,'2019-08-18 01:17:02','2019-08-18 01:17:02'),(29,'/uploads/products/11/images/caramel_macchiato.jpg',11,'Product',NULL,NULL,'2019-08-18 01:17:23','2019-08-18 01:17:23'),(30,'/uploads/products/12/images/americano-nong.jpg',12,'Product',NULL,NULL,'2019-08-18 01:18:01','2019-08-18 01:18:01'),(31,'/uploads/products/13/images/cappuccino_master.jpg',13,'Product',NULL,NULL,'2019-08-18 01:18:41','2019-08-18 01:18:41'),(32,'/uploads/products/14/images/cappuccino_master.jpg',14,'Product',NULL,NULL,'2019-08-18 01:19:08','2019-08-18 01:19:08'),(33,'/uploads/products/15/images/latte_nong.jpg',15,'Product',NULL,NULL,'2019-08-18 01:22:27','2019-08-18 01:22:27'),(34,'/uploads/products/16/images/latte_nong.jpg',16,'Product',NULL,NULL,'2019-08-18 01:22:51','2019-08-18 01:22:51'),(35,'/uploads/products/17/images/mocha_ice_blended_master.jpg',17,'Product',NULL,NULL,'2019-08-18 01:23:51','2019-08-18 01:23:51'),(36,'/uploads/products/18/images/mocha_ice_blended_master.jpg',18,'Product',NULL,NULL,'2019-08-18 01:24:13','2019-08-18 01:24:13'),(37,'/uploads/products/19/images/espresso_master.jpg',19,'Product',NULL,NULL,'2019-08-18 01:25:17','2019-08-18 01:25:17'),(38,'/uploads/products/20/images/espresso_master.jpg',20,'Product',NULL,NULL,'2019-08-18 01:25:49','2019-08-18 01:25:49'),(61,'/uploads/products/23/images/chocolate_ice_blended_master.jpg',23,'Product',NULL,NULL,'2019-08-25 07:24:49','2019-08-25 07:24:49'),(63,'/uploads/products/24/images/chocolate_ice_blended_master.jpg',24,'Product',NULL,NULL,'2019-08-25 07:25:26','2019-08-25 07:25:26'),(65,'/uploads/products/25/images/matcha_ice_blended_master.jpg',25,'Product',NULL,NULL,'2019-08-25 07:26:11','2019-08-25 07:26:11'),(66,'/uploads/products/26/images/cookies-da-xay.jpg',26,'Product',NULL,NULL,'2019-08-25 07:27:09','2019-08-25 07:27:09'),(67,'/uploads/products/27/images/cookies-da-xay.jpg',27,'Product',NULL,NULL,'2019-08-25 07:27:41','2019-08-25 07:27:41'),(68,'/uploads/products/28/images/cookies-da-xay.jpg',28,'Product',NULL,NULL,'2019-08-25 07:28:01','2019-08-25 07:28:01'),(69,'/uploads/products/29/images/cookies-da-xay.jpg',29,'Product',NULL,NULL,'2019-08-25 07:28:34','2019-08-25 07:28:34'),(70,'/uploads/products/21/images/tra_oo_long.png',21,'Product',NULL,NULL,'2019-08-25 07:38:41','2019-08-25 07:38:41'),(71,'/uploads/products/22/images/luc-tra-hoa-dang.jpg',22,'Product',NULL,NULL,'2019-08-25 07:39:19','2019-08-25 07:39:19'),(72,'/uploads/products/30/images/dau_phong_toi_ot.jpg',30,'Product',NULL,NULL,'2019-08-25 07:40:19','2019-08-25 07:40:19'),(74,'/uploads/products/31/images/banh_mi_que.jpg',31,'Product',NULL,NULL,'2019-08-25 07:40:52','2019-08-25 07:40:52'),(75,'/uploads/products/32/images/banh_mi_que.jpg',32,'Product',NULL,NULL,'2019-08-25 07:41:23','2019-08-25 07:41:23'),(77,'/uploads/products/33/images/banh_mi_que.jpg',33,'Product',NULL,NULL,'2019-08-25 07:42:35','2019-08-25 07:42:35'),(78,'/uploads/products/34/images/banh_mi_que.jpg',34,'Product',NULL,NULL,'2019-08-25 07:42:50','2019-08-25 07:42:50'),(79,'/uploads/products/35/images/banh_mi_que.jpg',35,'Product',NULL,NULL,'2019-08-25 07:43:01','2019-08-25 07:43:01'),(80,'/uploads/products/36/images/banh_mi_que.jpg',36,'Product',NULL,NULL,'2019-08-25 07:43:13','2019-08-25 07:43:13'),(81,'/uploads/products/37/images/banh_mi_que.jpg',37,'Product',NULL,NULL,'2019-08-25 07:43:24','2019-08-25 07:43:24'),(82,'/uploads/products/38/images/banh_mi_que.jpg',38,'Product',NULL,NULL,'2019-08-25 07:43:42','2019-08-25 07:43:42');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,NULL,0,NULL,'0869120588',NULL,NULL,NULL,'2019-08-10 21:52:00','2019-08-10 21:52:00',NULL),(2,NULL,0,NULL,'0869120577',NULL,NULL,NULL,'2019-08-10 21:57:41','2019-08-10 21:57:41',NULL),(3,NULL,0,NULL,'0869120688',NULL,NULL,NULL,'2019-08-10 22:07:51','2019-08-10 22:07:51',NULL),(4,NULL,0,NULL,'08645884',NULL,NULL,NULL,'2019-08-10 22:10:03','2019-08-10 22:10:03',NULL),(5,NULL,0,NULL,'0869120587',NULL,NULL,NULL,'2019-08-10 22:11:14','2019-08-10 22:11:14',NULL),(6,NULL,0,NULL,'0854958904',NULL,NULL,NULL,'2019-08-10 22:12:15','2019-08-10 22:12:15',NULL),(7,NULL,0,NULL,'0869120589',NULL,NULL,NULL,'2019-08-10 22:12:43','2019-08-10 22:12:43',NULL),(8,NULL,0,NULL,'0869120580',NULL,NULL,NULL,'2019-08-10 22:13:39','2019-08-10 22:13:39',NULL),(9,NULL,0,NULL,'0869120590',NULL,NULL,NULL,'2019-08-10 22:15:35','2019-08-10 22:15:35',NULL),(10,NULL,0,NULL,'0869120599',NULL,NULL,NULL,'2019-08-10 22:16:52','2019-08-10 22:16:52',NULL),(11,NULL,0,NULL,'0387997547',NULL,NULL,NULL,'2019-08-10 22:19:08','2019-08-10 22:19:08',NULL),(12,NULL,0,NULL,'0999999999',NULL,NULL,NULL,'2019-08-10 22:25:07','2019-08-10 22:25:07',NULL),(13,NULL,0,NULL,'12345678',NULL,NULL,NULL,'2019-08-10 22:27:04','2019-08-10 22:27:04',NULL),(14,NULL,0,NULL,'123456789',NULL,NULL,NULL,'2019-08-10 23:32:40','2019-08-10 23:32:40',NULL),(15,NULL,0,'Doan','0912190812',NULL,NULL,NULL,'2019-08-23 08:50:38','2019-08-23 08:50:38',NULL),(16,NULL,0,'Gjgjg','0986546673',NULL,NULL,NULL,'2019-10-08 23:25:47','2019-10-08 23:25:47',NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device_customer`
--

DROP TABLE IF EXISTS `device_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device_customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device_customer`
--

LOCK TABLES `device_customer` WRITE;
/*!40000 ALTER TABLE `device_customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `device_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `device_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_customer`
--

DROP TABLE IF EXISTS `game_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game_customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_customer`
--

LOCK TABLES `game_customer` WRITE;
/*!40000 ALTER TABLE `game_customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `game_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_customer_logs`
--

DROP TABLE IF EXISTS `game_customer_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game_customer_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `game_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `winner_type` int(11) NOT NULL,
  `point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_customer_logs`
--

LOCK TABLES `game_customer_logs` WRITE;
/*!40000 ALTER TABLE `game_customer_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `game_customer_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
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
INSERT INTO `levels` VALUES (1,1,'tang_1','Tầng 1',1,'2019-08-10 20:14:10','2019-08-10 21:52:04',NULL),(2,1,'tang_2','Tang 2',1,'2019-08-10 20:17:24','2019-08-10 20:17:24',NULL),(3,1,'tang_3','Tầng 3',1,'2019-08-10 20:35:50','2019-08-17 20:10:08',NULL),(4,1,'tang_4','Tầng 4',1,'2019-08-10 21:02:01','2019-08-17 20:10:18',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `material_types`
--

LOCK TABLES `material_types` WRITE;
/*!40000 ALTER TABLE `material_types` DISABLE KEYS */;
INSERT INTO `material_types` VALUES (1,NULL,'ml',1,'2019-08-10 23:53:32','2019-08-17 22:25:00',NULL),(2,NULL,NULL,1,'2019-08-10 23:53:48','2019-08-17 22:25:10',NULL),(3,NULL,'shot',1,'2019-08-10 23:53:55','2019-08-17 22:25:23',NULL),(4,NULL,'lo',1,'2019-08-10 23:54:05','2019-08-11 00:00:04','2019-08-11 00:00:04'),(5,NULL,'lát',1,'2019-08-17 22:25:44','2019-08-17 22:25:44',NULL),(6,NULL,'quả',1,'2019-08-17 22:32:41','2019-08-17 22:32:41',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materials`
--

LOCK TABLES `materials` WRITE;
/*!40000 ALTER TABLE `materials` DISABLE KEYS */;
INSERT INTO `materials` VALUES (1,NULL,1,'Sữa tươi thanh trùng','5400',1,'2019-08-11 00:03:20','2019-08-17 22:35:29',NULL),(2,NULL,1,'Sữa tươi tiệt trùng','5400',1,'2019-08-11 00:03:50','2019-08-17 22:36:15',NULL),(3,NULL,2,'Sugar','900',1,'2019-08-11 00:04:26','2019-08-11 00:19:14','2019-08-11 00:19:14'),(4,NULL,1,'Kem tươi','5000',1,'2019-08-17 22:37:32','2019-08-17 22:37:32',NULL),(5,NULL,2,'Chocolate','1500',1,'2019-08-17 22:38:42','2019-08-17 22:38:42',NULL),(6,NULL,2,'Đá','1500',1,'2019-08-17 22:39:01','2019-08-17 22:39:01',NULL),(7,NULL,2,'Matcha','1500',1,'2019-08-17 22:39:18','2019-08-17 22:39:18',NULL),(8,NULL,2,'Cookies','1500',1,'2019-08-17 22:39:36','2019-08-17 22:39:36',NULL),(9,NULL,4,'Chanh','50',1,'2019-08-17 22:39:58','2019-08-17 22:39:58',NULL),(10,NULL,2,'Xả','350',1,'2019-08-17 22:40:30','2019-08-17 22:40:30',NULL),(11,NULL,4,'Cam','50',1,'2019-08-17 22:40:52','2019-08-17 22:40:52',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_05_22_085544_create_categories_table',1),(9,'2019_05_24_088359_create_products_table',1),(10,'2019_07_26_055215_add_field_categories',1),(11,'2019_07_26_060620_add_field_user_admin',1),(12,'2019_07_29_032725_create_role_tables',1),(13,'2019_07_29_034102_default_role_database',1),(14,'2019_07_30_033141_add_path_categories',1),(15,'2019_07_30_084309_create_shop_table',1),(16,'2019_07_30_085924_create_user_shop_table',1),(17,'2019_07_31_022630_create_table_level',1),(18,'2019_07_31_040023_create_tables',1),(19,'2019_07_31_063108_create_topping_table',1),(20,'2019_07_31_063129_create_topping_categories_table',1),(21,'2019_07_31_094637_create_product_topping_table',1),(22,'2019_07_31_095932_create_images_table',1),(23,'2019_08_01_022213_add_more_field_product',1),(24,'2019_08_01_023518_add_status_field_product',1),(28,'2019_08_05_060225_create_size_table',2),(29,'2019_08_05_062023_create_size_product_table',2),(30,'2019_08_09_031754_create_customer_table',2),(31,'2019_08_09_040315_create_material_table',2),(32,'2019_08_09_040433_create_material_type_table',2),(33,'2019_08_09_054638_create_orders_table',2),(34,'2019_08_09_054719_create_order_product_table',2),(38,'2019_08_09_060405_create_bill_tmp_table',3),(39,'2019_08_09_061705_add_open_close_time_shop',3),(40,'2019_08_09_061936_add_open_time_and_duration_product',3),(41,'2019_08_11_020625_add_active_field_customer',4),(42,'2019_08_12_080827_create_size_product_material_table',5),(43,'2019_08_13_062036_add_more_order_product',6),(44,'2019_08_13_090549_create_order_product_topping_table',6),(45,'2019_08_14_035127_add_table_id_into_order',7),(46,'2019_08_14_042857_create_order_logs_table',7),(47,'2019_08_16_092529_create_tags_table',8),(48,'2019_08_16_092623_create_tag_product_table',8),(49,'2019_08_16_094739_add_phone_name_into_orders_table',8),(50,'2019_08_18_065027_add_min_max_step_into_size_resource_table',9),(51,'2019_08_18_070141_create_steps_table',9),(52,'2019_08_18_084915_add_comment_order_product_table',10),(53,'2019_08_19_101958_add_more_field_order',11),(54,'2019_08_30_031340_add_product_size_material_id_into_step_table',12),(55,'2019_08_30_035131_create_order_material_logs_table',12),(56,'2019_08_30_035943_create_transaction_logs_table',12),(57,'2019_08_30_085231_add_amount_after_promotion_order',13),(58,'2019_11_03_151142_add_weight_number_size_product_table',13),(59,'2019_08_30_091100_create_promotions_table',14),(60,'2019_09_24_071747_create_device_log_tables',14),(61,'2019_09_24_071956_create_device_customer',14),(62,'2019_09_24_072411_create_table_games',14),(63,'2019_09_24_072515_create_game_customer',14),(64,'2019_09_24_073403_create_game_customer_logs',14);
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
INSERT INTO `oauth_access_tokens` VALUES ('0294414acb6e191926c32cc842c638729a4a8dc79bd1ba218709f92b582843f56885735a091e5bb0',1,1,'Laravel','[]',1,'2019-08-16 03:21:08','2019-08-17 19:54:12','2020-08-16 10:21:08'),('0618d2cd07d2c5297dadb8f6bc4efde9ff81fa048499c774ece31c722c5f7921f26f616fb6474080',5,1,'Laravel','[]',0,'2019-08-17 19:54:23','2019-08-17 19:54:23','2020-08-18 02:54:23'),('077078bba6ad4466fa783fc6677f00eb7ca48a8c247ff2ad602aaf979389ac4c6a34eaa869ab2cf8',10,1,'Laravel','[]',0,'2019-11-03 09:45:48','2019-11-03 09:45:48','2020-11-03 16:45:48'),('0a91a290f0e05bfd2bf4742e66cd589bd4103c465599fbf872f511bba31e206657c2fa3757469bf6',10,1,'Laravel','[]',1,'2019-10-05 08:50:09','2019-11-01 09:25:04','2020-10-05 15:50:09'),('17206b1f34bb007a5c02763dc57b34e089a85fc9b0a4f9ce66d6fbc27c0999074ada12f44f51b43f',1,1,'Laravel','[]',0,'2019-08-17 20:42:05','2019-08-17 20:42:05','2020-08-18 03:42:05'),('17224e00f62dd98feddd7d0ebd5fff2c306e6b886f91c8778a1ef5698bcae68d5e5812683289a469',10,1,'Laravel','[]',1,'2019-08-17 20:18:49','2019-11-01 09:25:04','2020-08-18 03:18:49'),('1a55326061fa89740a2d9cd6e91c2369416a10c1a44e7fad1816f9190920990dd00b2d4fbec0fbf8',2,1,'Laravel','[]',0,'2019-08-17 19:48:06','2019-08-17 19:48:06','2020-08-18 02:48:06'),('1b8964a726758b5475c08710c9c254fa1a4ff20bbf1f0b28996d201fb51fae4f7bae2806dc04964f',1,1,'Laravel','[]',1,'2019-08-10 20:59:22','2019-08-17 19:54:12','2020-08-11 03:59:22'),('1d72cded6f9835f261fda400bb7f191b3e872a135cabf329f0fe905de5ae9cdc634d587842b86d32',1,1,'Laravel','[]',0,'2019-11-10 07:27:22','2019-11-10 07:27:22','2020-11-10 14:27:22'),('2971d45ecd3ee414b207a242b5d091f891e6f7355e1db302ab5b093cc65bdc78a20100df322d0053',1,1,'Laravel','[]',0,'2019-11-03 08:58:28','2019-11-03 08:58:28','2020-11-03 15:58:28'),('2d543615c24dffa51a9c5e78532bc504d1ca0aa3287351735b1729d2e356b3d03e360118dee0ae86',1,1,'Laravel','[]',1,'2019-08-10 20:58:04','2019-08-17 19:54:12','2020-08-11 03:58:04'),('2d989213a4e3e77f004fd1ecbf5e73af20185e99443f134d1ea95b5de10fed933221b250aa00fe5f',1,1,'Laravel','[]',0,'2019-11-08 15:59:08','2019-11-08 15:59:08','2020-11-08 22:59:08'),('2e4afaeea1fdb728c4ef2fb935678ec977a9e728c8cb973fa9f09980aa1ec2c016b4a95ab94f764b',1,1,'Laravel','[]',0,'2019-11-20 03:36:32','2019-11-20 03:36:32','2020-11-20 10:36:32'),('303e14b7c703703a5828e407f11bff53be51755e9dc7e8b715e98086cb015a62e0eeacc88a393962',1,1,'Laravel','[]',0,'2019-11-20 03:36:33','2019-11-20 03:36:33','2020-11-20 10:36:33'),('332a6614e8ec76e89e86b036334051313a78dafba36e86215b3028020f679645048935281ebf3a5e',10,1,'Laravel','[]',1,'2019-08-23 08:42:01','2019-11-01 09:25:04','2020-08-23 15:42:01'),('3468d23ba081f31eb0398cf543353fba7aa933540226c5d493666feb0afc1bc16cc29f50bd607372',10,1,'Laravel','[]',0,'2019-11-03 09:29:05','2019-11-03 09:29:05','2020-11-03 16:29:05'),('393418be6802e54535eed5ff4ddaa7f7cdb79819318ca9a08471f9ea18b1f9ccf893026fb0896618',1,1,'Laravel','[]',0,'2019-08-22 09:00:23','2019-08-22 09:00:23','2020-08-22 16:00:23'),('3c05792908bce4f5a3d7fc98023c908a774cc848472f2017961d94e318a7d17585fa46da15f417c2',2,1,'Laravel','[]',0,'2019-08-17 19:49:15','2019-08-17 19:49:15','2020-08-18 02:49:15'),('4b870f365d2661d952c9ba57a38dbce3ff3b17a670d28f8a091110991af02a49151fc6930fdcdce9',1,1,'Laravel','[]',0,'2019-11-10 04:44:06','2019-11-10 04:44:06','2020-11-10 11:44:06'),('4dc64db041f669df3eb5ca01a7940a103d41599e18c0049d5d17015543066c69f247e6abe40e2c86',1,1,'Laravel','[]',0,'2019-11-08 15:58:44','2019-11-08 15:58:44','2020-11-08 22:58:44'),('4e0435a011eba87b52b26cbae863855b4ff3acc3d1fd84e1a71fe95074d0710b44a703bbfae44166',1,1,'Laravel','[]',0,'2019-11-07 08:12:01','2019-11-07 08:12:01','2020-11-07 15:12:01'),('4f112a057ff52377f82ed669c4a25da5a3a4d432cfb6035231858a880697bdc2e8a1fa22b4f99f02',10,1,'Laravel','[]',0,'2019-11-03 09:36:00','2019-11-03 09:36:00','2020-11-03 16:36:00'),('591b0a552c31472796f80dff00b8d56076f26bfe5e91ecb30432f741f1790487520fbff7a68c602b',10,1,'Laravel','[]',0,'2019-11-01 09:25:28','2019-11-01 09:25:28','2020-11-01 16:25:28'),('5ad552838deba42cabf21df37bcbe850ca88b8a556445a2b2791b23aadbb2e8e329e45047c8a1994',1,1,'Laravel','[]',0,'2019-11-20 03:36:35','2019-11-20 03:36:35','2020-11-20 10:36:35'),('64a245288fb1ba7b60bf85b699c90f38d3216f8b2d7c8e8589f1ad023be8f1595310e49ba9b972eb',1,1,'Laravel','[]',0,'2019-08-23 08:48:29','2019-08-23 08:48:29','2020-08-23 15:48:29'),('6831a3a50c3508edf8976660fc77a1de4238a7f8d39c9e6446d9ec56acc84df5ac05509cca0dd85e',10,1,'Laravel','[]',1,'2019-08-21 08:32:14','2019-11-01 09:25:04','2020-08-21 15:32:14'),('6a262094f665e351002808bd1507a128b8495a1b29201e4ee5b589c77e0a2639a6e66b62cee9fbbf',1,1,'Laravel','[]',1,'2019-08-10 20:51:32','2019-08-17 19:54:12','2020-08-11 03:51:32'),('6cb8dad9b77f087dfeea21d39783a87a6602cd537c3afcf5d3c8881e493ed34a7efb056824291dae',1,1,'Laravel','[]',0,'2019-11-08 08:45:35','2019-11-08 08:45:35','2020-11-08 15:45:35'),('6ced5508cca926ca41bb88f2fb128bed24771a75ea933306e73c0711d9c31cbf687cbd627825c849',1,1,'Laravel','[]',0,'2019-11-03 08:55:41','2019-11-03 08:55:41','2020-11-03 15:55:41'),('6d8c18822ba473500bf65c0a5cd954a7d230607f88a2f9208832dd4a62326a161e226066f8b50598',10,1,'Laravel','[]',0,'2019-11-23 21:14:19','2019-11-23 21:14:19','2020-11-24 04:14:19'),('6f0e5c3d41cf2d289653cb5443b5c41a16340661b9e885fe6a824906cdf5d1ca327beab7dbaba91f',1,1,'Laravel','[]',0,'2019-11-20 03:41:37','2019-11-20 03:41:37','2020-11-20 10:41:37'),('7341eadc2f928bbbf7ece19543de5b02b43495010426a3e72f3579834ab0f4961615c3c676000417',10,1,'Laravel','[]',1,'2019-08-21 08:16:22','2019-11-01 09:25:04','2020-08-21 15:16:22'),('73adcab592f8097ebd538769be83c3d60a23d145b76f7349091cc8c762f40eb8c29b8bd0c8ed8e06',10,1,'Laravel','[]',0,'2019-11-03 09:51:08','2019-11-03 09:51:08','2020-11-03 16:51:08'),('73cb1bf0c6b8fec3d8d11bd735a8f050b4c1e2b933e2b9889fc34d70cccb69a1d2ac0c684b92700a',1,1,'Laravel','[]',1,'2019-08-10 19:50:16','2019-08-17 19:54:12','2020-08-11 02:50:16'),('751d63bad3f510152ff0c613614853f501a96307fee5077bd6752481b78e96d5df92c737e98f07b0',5,1,'Laravel','[]',0,'2019-08-17 19:55:42','2019-08-17 19:55:42','2020-08-18 02:55:42'),('7cb2735e0a0cc9a97c74af2b2dea0307dc24add624c61e5ef5cd56110290444283ef215ef87889cc',1,1,'Laravel','[]',0,'2019-11-20 03:36:30','2019-11-20 03:36:30','2020-11-20 10:36:30'),('7f56d4ed3a7da8048b964fa2917af37afce46e5db84613e30f586f6a6074d9b0c4dcec77aeda62a9',1,1,'Laravel','[]',0,'2019-11-11 16:24:45','2019-11-11 16:24:45','2020-11-11 23:24:45'),('7fb8fd8f624ff92b78b5e987c417d09150fd418076fd0a15f125ae62417159957cf0192a276f6b11',10,1,'Laravel','[]',1,'2019-10-22 08:14:37','2019-11-01 09:25:04','2020-10-22 15:14:37'),('84a8253431d3b871b29ccd5efc073f8e7336673d3fa2c3fd55972111a27ef03713e463c8b61a9829',1,1,'Laravel','[]',1,'2019-08-10 19:50:34','2019-08-17 19:54:12','2020-08-11 02:50:34'),('856731b0d2b27dc7208391eefbf28697a60032736ae6665d75bfb2f65585347540c6a88d1ac8d295',1,1,'Laravel','[]',0,'2019-11-11 17:11:15','2019-11-11 17:11:15','2020-11-12 00:11:15'),('85d13e6e1cc5918bd48799c57631353070ab5aa77b9661de4cea343b9cd64c188e208ae7ebe03806',1,1,'Laravel','[]',1,'2019-08-10 20:39:07','2019-08-17 19:54:12','2020-08-11 03:39:07'),('85e93c947406b5c2f702f9e4d864c8344f37bc9c3dfa390d99e4449fca2eb51396c15e94ac058487',1,1,'Laravel','[]',1,'2019-08-10 20:56:11','2019-08-17 19:54:12','2020-08-11 03:56:11'),('861a670906118e1f183093987a2e6a9745bcee175a80bf9b69d593d6f2e656d16d8fceddf7e345b4',1,1,'Laravel','[]',0,'2019-08-17 20:01:34','2019-08-17 20:01:34','2020-08-18 03:01:34'),('86be4b2255adf4bc978a52127e12bf8fc58aedf4c962e48c6713aa3e83a4a61966baf96e3578438a',1,1,'Laravel','[]',1,'2019-08-10 21:31:37','2019-08-17 19:54:12','2020-08-11 04:31:37'),('8868a196b4ebd798568d0a53c5a0f389ea7da8d8bf9b58073f565eaabb19ccb4aab1e4b56587baef',10,1,'Laravel','[]',0,'2019-11-06 18:45:00','2019-11-06 18:45:00','2020-11-07 01:45:00'),('8b4bcb3718580a6b900732a6b3e9e9a05b1e288a168cb041d5ddf78cf385677cddbd4b7b4d62d458',1,1,'Laravel','[]',0,'2019-11-04 02:58:31','2019-11-04 02:58:31','2020-11-04 09:58:31'),('944a3676ebeeb4e9646d4df39f04591f00232f5de6e810dfcff753d11a18c332f0b4ade3cee43630',1,1,'Laravel','[]',0,'2019-11-20 03:42:37','2019-11-20 03:42:37','2020-11-20 10:42:37'),('a022b9b79a9f041e606472ac6a6e21700cd35c84c2ec9e9a1142133ea7ab398912442e1888fe0b88',1,1,'Laravel','[]',0,'2019-11-12 03:51:35','2019-11-12 03:51:35','2020-11-12 10:51:35'),('a16978ff3e035c54a448fcf7c65071c467da9818452c67f59efd96a9786423c9c42480ac52e1c747',1,1,'Laravel','[]',0,'2019-11-20 02:11:00','2019-11-20 02:11:00','2020-11-20 09:11:00'),('a37c8e199cd415fe4e3607ed024f74d8fbaef2aff39cb7fbb20ee00a24527a599c7b52d32ad8a675',8,1,'Laravel','[]',0,'2019-08-17 20:06:09','2019-08-17 20:06:09','2020-08-18 03:06:09'),('a572dd5c1a1db5e9825a5c538fb942ede5b59624faf36e9fc5ecd3669205d8f895fb677a0d410423',9,1,'Laravel','[]',0,'2019-08-17 20:09:17','2019-08-17 20:09:17','2020-08-18 03:09:17'),('a63c658f8cf2f31648955f8bb7d9cd955f91d662065b507dbc9871d10917ac272e63ee4ee5bf206f',6,1,'Laravel','[]',0,'2019-08-17 19:54:17','2019-08-17 19:54:17','2020-08-18 02:54:17'),('a8b4bc6dab3acaffb1428197aedea6a9815b5bcfc5a6b86df37ccbf4373e4355e0784a22420cab5b',1,1,'Laravel','[]',1,'2019-08-17 19:44:14','2019-08-17 19:54:12','2020-08-18 02:44:14'),('a9471b31d9b1d6f699a11a46c8648bf3ed12ffbde6674191a7b96d6e4c38a65fd287f171705a86f4',1,1,'Laravel','[]',1,'2019-08-10 22:26:46','2019-08-17 19:54:12','2020-08-11 05:26:46'),('a9719c6b76db7a19b4be92bae0cb14c14fdb0dcbef408e66008e6459268da4af4179d2fa00202f1d',1,1,'Laravel','[]',0,'2019-11-03 23:55:06','2019-11-03 23:55:06','2020-11-04 06:55:06'),('ac2b93c970084cbf6e4c9483058b162701eb640e510214e9ac42870a279e8af0401ef2153c7ace3b',10,1,'Laravel','[]',1,'2019-08-23 09:18:02','2019-11-01 09:25:04','2020-08-23 16:18:02'),('b0ce3b3a6e59272168537e68716403ef4ef2ae0a377345db5b475f779c5f2f1a2cde90ff9659b4eb',1,1,'Laravel','[]',1,'2019-08-10 20:58:59','2019-08-17 19:54:12','2020-08-11 03:58:59'),('b425996d2e477bd81ea2d31a7c62b5317561e234ba9372e643862be7ef29eb81cf0a855048bdf257',1,1,'Laravel','[]',0,'2019-11-23 02:51:39','2019-11-23 02:51:39','2020-11-23 09:51:39'),('b5f9502d8f9bc2e68c014d992b1224ce00aff0a4cbe21eb798c24299f8d4dc19df8df5dfd018a074',8,1,'Laravel','[]',0,'2019-08-17 20:06:19','2019-08-17 20:06:19','2020-08-18 03:06:19'),('b6294a7d73df36d04beef9aba9b32aee507dec3dc1f8f269068e0984edea75f516743855d3925ed0',10,1,'Laravel','[]',0,'2019-11-23 19:59:04','2019-11-23 19:59:04','2020-11-24 02:59:04'),('b69022bb20a66d983e92816cc378b72f003dba271a13892f168e91f66ee95ce7b347c39c334de2a4',1,1,'Laravel','[]',0,'2019-11-04 09:35:03','2019-11-04 09:35:03','2020-11-04 16:35:03'),('b92c876845523f1b094198e365222d70fc0c607f22ea208df24dbfec752c152af850ebbba4f6f8c3',1,1,'Laravel','[]',1,'2019-08-10 19:44:15','2019-08-17 19:54:12','2020-08-11 02:44:15'),('c0922c4ba81eb1ca26395c7225fbf1593289a1c7b3d48ebfcacd9318d3727d1d2e72b3479558c770',9,1,'Laravel','[]',0,'2019-08-20 21:05:06','2019-08-20 21:05:06','2020-08-21 04:05:06'),('c18fcd1cff73d8de7e2dda44cdee1639ff8b259c93cf0eeb6be891d2b57fabe0b1a19fe217df87af',1,1,'Laravel','[]',1,'2019-08-10 20:20:25','2019-08-17 19:54:12','2020-08-11 03:20:25'),('c6765027771269f4b281d44b12778fa7ae6f3be55e3b5ac00b20ddde39f81f25438c8dda635ce0ec',1,1,'Laravel','[]',0,'2019-09-03 03:57:43','2019-09-03 03:57:43','2020-09-03 10:57:43'),('c91419ae0bc59640f3d0e9f31a59f8904a267c80f480eaa79e492a730d2bba64dafed5431ce9f04c',1,1,'Laravel','[]',1,'2019-08-17 19:50:20','2019-08-17 19:54:12','2020-08-18 02:50:20'),('ca6a23b7b8cdb7a5c52932a472d87d66793cf954541e5c3a0e0ed6b7bb17ba66f51092c2a095d71a',10,1,'Laravel','[]',1,'2019-08-23 08:58:37','2019-11-01 09:25:04','2020-08-23 15:58:37'),('cc097fcdc0b4f2d8506223378ba5e49d3cb925f3fa54f8820b82f884df9406d19718b78bb8a549a2',1,1,'Laravel','[]',1,'2019-08-10 20:44:04','2019-08-17 19:54:12','2020-08-11 03:44:04'),('cc43aa7595ba2762d11542d21add0dc0c38636b5a812145ea2c35a17698b30c132a5e9369177c38a',1,1,'Laravel','[]',1,'2019-08-10 20:59:09','2019-08-17 19:54:12','2020-08-11 03:59:09'),('cd1f14b3bd4516479e5d31c628061cbef39a0af20dcc231d6706196f58dccfa5b76ba78cf7269e36',1,1,'Laravel','[]',0,'2019-11-20 02:34:27','2019-11-20 02:34:27','2020-11-20 09:34:27'),('ce194030b59809d3195b9c9f9838ea12f856483ca412d6df68bb06acd23308a588edf550a88256dd',1,1,'Laravel','[]',1,'2019-08-17 19:43:30','2019-08-17 19:54:12','2020-08-18 02:43:30'),('d3460d153da4ce6d86c801daee83d6335e60f5c746840dc2e4ec1b3045b6e696fe73bff36a4d00a9',10,1,'Laravel','[]',0,'2019-11-06 19:20:11','2019-11-06 19:20:11','2020-11-07 02:20:11'),('d371c97d0c69678c2c565fdce9c746875008b7f1505266699dbe0a67fe9edd03bc3af5b199db3488',10,1,'Laravel','[]',1,'2019-10-22 08:38:21','2019-11-01 09:25:04','2020-10-22 15:38:21'),('dbfa3f62a4eaa438588c0546fd59c5786313250acd37b81f97f452b18b88016b10efc2339d141638',1,1,'Laravel','[]',0,'2019-08-19 03:03:09','2019-08-19 03:03:09','2020-08-19 10:03:09'),('dd6a288edd19b08f74b7d07980e5341e7def81e1124cf6b9e3bf7417ffdb5b0d77b3b1d1f042d84b',10,1,'Laravel','[]',1,'2019-10-22 08:38:42','2019-11-01 09:25:04','2020-10-22 15:38:42'),('deee57b61aab581fbc6a2e3e2913fc17e7cf1cff60cc76325abbde90c9dfb278e20bf5ebd2721347',10,1,'Laravel','[]',0,'2019-11-03 09:56:05','2019-11-03 09:56:05','2020-11-03 16:56:05'),('e81aa51217a956adc660fdd882e0ecccaf23799645ef5391adb2222cf94c9edffb0803ad1f2779b2',1,1,'Laravel','[]',0,'2019-11-04 00:15:26','2019-11-04 00:15:26','2020-11-04 07:15:26'),('eca6fba440b64379e8a43cf3b34124315e0c44c2da1b4389abe77a7691b2ad15c8df1ef3f7a849a4',1,1,'Laravel','[]',1,'2019-08-10 20:12:54','2019-08-17 19:54:12','2020-08-11 03:12:54'),('f103eb5b4465922b70227945eba316b2a8983c6d6a4e80457d782ad88c5955d2b44afc403099a739',10,1,'Laravel','[]',1,'2019-10-05 08:57:41','2019-11-01 09:25:04','2020-10-05 15:57:41'),('f18a31e0ba183686b77c4bb9a601770859850bd9497bb560a3748e7cc6c1da76db32126346c19fb8',10,1,'Laravel','[]',0,'2019-11-07 17:42:50','2019-11-07 17:42:50','2020-11-08 00:42:50'),('f96000cf9d1249b52eaf9081ac1c6ec2bc483fcdeb5f006311cfc8a24350c3732cae6eb9073f857b',1,1,'Laravel','[]',0,'2019-11-08 15:58:37','2019-11-08 15:58:37','2020-11-08 22:58:37'),('fab66a5ae180207f86fbd12cc777c7aec6925b22d8f3f741955c6edd71b659bc3a7561e763852f31',1,1,'Laravel','[]',1,'2019-08-10 20:37:52','2019-08-17 19:54:12','2020-08-11 03:37:52'),('fef601c870d6e9500ed8c1dca628bedffea88952513d62adb649b6636bb48e9363c4e8c4435a45a3',1,1,'Laravel','[]',1,'2019-08-10 21:00:41','2019-08-17 19:54:12','2020-08-11 04:00:41');
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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_bill_tmps`
--

LOCK TABLES `order_bill_tmps` WRITE;
/*!40000 ALTER TABLE `order_bill_tmps` DISABLE KEYS */;
INSERT INTO `order_bill_tmps` VALUES (1,'1',1,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(2,'2',6,'2019-08-18 02:08:25','2019-08-18 02:08:25'),(3,'3',8,'2019-08-18 02:11:52','2019-08-18 02:11:52'),(4,'4',11,'2019-08-19 08:46:18','2019-08-19 08:46:18'),(5,'5',12,'2019-08-23 09:00:36','2019-08-23 09:00:36'),(6,'6',13,'2019-08-23 09:02:16','2019-08-23 09:02:16'),(7,'7',14,'2019-08-23 09:05:09','2019-08-23 09:05:09'),(8,'8',15,'2019-08-23 09:05:10','2019-08-23 09:05:10'),(9,'9',16,'2019-08-23 09:05:12','2019-08-23 09:05:12'),(10,'10',17,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(11,'11',18,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(12,'12',19,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(13,'13',20,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(14,'14',21,'2019-08-23 09:05:14','2019-08-23 09:05:14'),(15,'15',22,'2019-08-23 09:05:15','2019-08-23 09:05:15'),(16,'16',23,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(17,'17',24,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(18,'18',25,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(19,'19',26,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(20,'20',27,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(21,'21',28,'2019-08-23 09:05:21','2019-08-23 09:05:21'),(22,'22',29,'2019-08-23 09:06:41','2019-08-23 09:06:41'),(23,'23',30,'2019-08-23 09:08:59','2019-08-23 09:08:59'),(24,'24',31,'2019-08-23 09:09:26','2019-08-23 09:09:26'),(25,'25',32,'2019-08-23 09:09:27','2019-08-23 09:09:27'),(26,'26',33,'2019-08-23 09:09:27','2019-08-23 09:09:27'),(27,'27',34,'2019-08-23 09:09:27','2019-08-23 09:09:27'),(28,'28',35,'2019-08-23 09:09:28','2019-08-23 09:09:28'),(29,'29',36,'2019-08-23 09:09:28','2019-08-23 09:09:28'),(30,'30',37,'2019-08-23 09:09:29','2019-08-23 09:09:29'),(31,'31',38,'2019-08-23 09:09:29','2019-08-23 09:09:29'),(32,'32',39,'2019-08-23 09:09:29','2019-08-23 09:09:29'),(33,'33',40,'2019-08-23 09:19:42','2019-08-23 09:19:42'),(34,'34',81,'2019-11-04 10:03:17','2019-11-04 10:03:17'),(35,'35',82,'2019-11-06 08:29:46','2019-11-06 08:29:46'),(36,'36',83,'2019-11-06 08:34:10','2019-11-06 08:34:10'),(37,'37',84,'2019-11-06 19:20:28','2019-11-06 19:20:28'),(38,'38',85,'2019-11-06 19:20:49','2019-11-06 19:20:49'),(39,'39',86,'2019-11-07 02:53:19','2019-11-07 02:53:19'),(40,'40',87,'2019-11-20 07:12:13','2019-11-20 07:12:13'),(41,'41',88,'2019-11-23 21:16:56','2019-11-23 21:16:56');
/*!40000 ALTER TABLE `order_bill_tmps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_logs`
--

DROP TABLE IF EXISTS `order_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_new_id` int(11) DEFAULT NULL,
  `order_new_created_by` int(11) DEFAULT NULL,
  `order_old_id` int(11) DEFAULT NULL,
  `order_old_created_by` int(11) DEFAULT NULL,
  `order_old_data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_logs`
--

LOCK TABLES `order_logs` WRITE;
/*!40000 ALTER TABLE `order_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_material_logs`
--

DROP TABLE IF EXISTS `order_material_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_material_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `material_order_quantity` int(11) DEFAULT NULL,
  `material_quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_material_logs`
--

LOCK TABLES `order_material_logs` WRITE;
/*!40000 ALTER TABLE `order_material_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_material_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_product_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `ship_id` int(11) DEFAULT NULL,
  `total_price_topping` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `table_id` int(11) DEFAULT '1',
  `table_qr_code` text COLLATE utf8mb4_unicode_ci,
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
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (1,NULL,NULL,NULL,25000,1,2,'Awu2QadmP3T6qLDG',NULL,4,1,1,1,1,'2','100000','225000',NULL,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(2,NULL,NULL,NULL,0,1,2,'Awu2QadmP3T6qLDG',NULL,5,1,1,3,1,'1','200000','200000',NULL,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(3,NULL,NULL,NULL,0,1,2,'Awu2QadmP3T6qLDG',NULL,4,1,1,2,1,'1','300000','300000',NULL,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(4,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,6,1,1,'1','50000','50000',NULL,'2019-08-18 02:08:25','2019-08-18 02:08:25'),(5,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,8,2,1,'1','50000','50000',NULL,'2019-08-18 02:11:52','2019-08-18 02:11:52'),(6,NULL,100000,NULL,10000,NULL,NULL,NULL,NULL,5,1,9,1,1,'2','50000','110000',NULL,'2019-08-19 08:44:02','2019-08-19 08:44:02'),(7,NULL,100000,NULL,10000,NULL,NULL,NULL,NULL,5,1,10,1,1,'2','50000','110000',NULL,'2019-08-19 08:45:03','2019-08-19 08:45:03'),(8,NULL,100000,NULL,10000,NULL,NULL,NULL,NULL,5,1,11,1,1,'2','50000','110000',NULL,'2019-08-19 08:46:17','2019-08-19 08:46:17'),(9,NULL,50000,NULL,10000,NULL,NULL,NULL,NULL,5,1,12,1,1,'1','50000','60000',NULL,'2019-08-23 09:00:36','2019-08-23 09:00:36'),(10,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,12,1,1,'1','50000','70000',NULL,'2019-08-23 09:00:36','2019-08-23 09:00:36'),(11,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,13,1,1,'1','50000','70000',NULL,'2019-08-23 09:02:15','2019-08-23 09:02:15'),(12,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,14,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:09','2019-08-23 09:05:09'),(13,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,14,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:09','2019-08-23 09:05:09'),(14,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,15,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:10','2019-08-23 09:05:10'),(15,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,15,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:10','2019-08-23 09:05:10'),(16,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,16,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:12','2019-08-23 09:05:12'),(17,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,16,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:12','2019-08-23 09:05:12'),(18,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,17,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(19,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,18,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(20,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,17,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(21,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,18,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(22,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,19,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(23,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,19,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(24,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,20,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(25,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,20,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(26,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,21,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:14','2019-08-23 09:05:14'),(27,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,21,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:14','2019-08-23 09:05:14'),(28,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,22,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:15','2019-08-23 09:05:15'),(29,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,22,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:15','2019-08-23 09:05:15'),(30,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,23,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(31,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,23,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(32,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,24,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(33,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,24,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(34,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,25,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(35,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,25,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(36,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,26,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(37,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,26,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(38,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,27,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(39,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,27,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(40,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,28,1,1,'2','50000','120000',NULL,'2019-08-23 09:05:21','2019-08-23 09:05:21'),(41,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,28,1,1,'1','50000','50000',NULL,'2019-08-23 09:05:21','2019-08-23 09:05:21'),(42,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,29,1,1,'2','50000','120000',NULL,'2019-08-23 09:06:41','2019-08-23 09:06:41'),(43,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,30,1,1,'1','50000','50000',NULL,'2019-08-23 09:08:59','2019-08-23 09:08:59'),(44,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,31,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:26','2019-08-23 09:09:26'),(45,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,32,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:27','2019-08-23 09:09:27'),(46,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,33,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:27','2019-08-23 09:09:27'),(47,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,34,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:27','2019-08-23 09:09:27'),(48,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,35,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:28','2019-08-23 09:09:28'),(49,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,36,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:28','2019-08-23 09:09:28'),(50,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,37,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:29','2019-08-23 09:09:29'),(51,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,38,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:29','2019-08-23 09:09:29'),(52,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,39,3,1,'1','50000','50000',NULL,'2019-08-23 09:09:29','2019-08-23 09:09:29'),(53,NULL,100000,NULL,10000,NULL,NULL,NULL,NULL,7,1,40,2,1,'2','50000','110000',NULL,'2019-08-23 09:19:42','2019-08-23 09:19:42'),(54,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,41,1,1,'1','50000','70000',NULL,'2019-10-05 09:00:11','2019-10-05 09:00:11'),(55,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,42,1,1,'1','50000','70000',NULL,'2019-10-05 09:00:12','2019-10-05 09:00:12'),(56,NULL,150000,NULL,10000,NULL,NULL,NULL,NULL,5,1,43,1,1,'3','50000','160000',NULL,'2019-10-08 23:35:27','2019-10-08 23:35:27'),(57,NULL,150000,NULL,10000,NULL,NULL,NULL,NULL,5,1,44,1,1,'3','50000','160000',NULL,'2019-10-08 23:35:29','2019-10-08 23:35:29'),(58,NULL,150000,NULL,10000,NULL,NULL,NULL,NULL,5,1,45,1,1,'3','50000','160000',NULL,'2019-10-08 23:35:32','2019-10-08 23:35:32'),(59,NULL,100000,NULL,0,NULL,NULL,NULL,NULL,5,1,46,1,1,'2','50000','100000',NULL,'2019-11-03 08:47:07','2019-11-03 08:47:07'),(60,NULL,50000,NULL,10000,NULL,NULL,NULL,NULL,5,1,47,1,1,'1','50000','60000',NULL,'2019-11-03 09:16:42','2019-11-03 09:16:42'),(61,NULL,50000,NULL,10000,NULL,NULL,NULL,NULL,5,1,48,1,1,'1','50000','60000',NULL,'2019-11-03 09:19:23','2019-11-03 09:19:23'),(62,NULL,50000,NULL,10000,NULL,NULL,NULL,NULL,5,1,49,1,1,'1','50000','60000',NULL,'2019-11-03 09:21:23','2019-11-03 09:21:23'),(63,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,50,1,1,'2','50000','120000',NULL,'2019-11-03 09:53:52','2019-11-03 09:53:52'),(64,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,51,1,1,'2','50000','120000',NULL,'2019-11-03 09:53:55','2019-11-03 09:53:55'),(65,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,52,1,1,'2','50000','120000',NULL,'2019-11-03 09:53:56','2019-11-03 09:53:56'),(66,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,53,1,1,'2','50000','120000',NULL,'2019-11-03 09:53:56','2019-11-03 09:53:56'),(67,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,54,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:00','2019-11-03 09:54:00'),(68,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,55,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:00','2019-11-03 09:54:00'),(69,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,56,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:03','2019-11-03 09:54:03'),(70,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,57,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:03','2019-11-03 09:54:03'),(71,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,58,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:22','2019-11-03 09:54:22'),(72,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,59,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:22','2019-11-03 09:54:22'),(73,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,60,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(74,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,61,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(75,NULL,100000,NULL,20000,NULL,NULL,NULL,NULL,5,1,62,1,1,'2','50000','120000',NULL,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(76,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,63,2,1,'1','50000','70000',NULL,'2019-11-03 09:56:32','2019-11-03 09:56:32'),(77,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,64,2,1,'1','50000','70000',NULL,'2019-11-03 09:56:33','2019-11-03 09:56:33'),(78,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,65,2,1,'1','50000','70000',NULL,'2019-11-03 09:56:34','2019-11-03 09:56:34'),(79,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,66,2,1,'1','50000','70000',NULL,'2019-11-03 09:56:57','2019-11-03 09:56:57'),(80,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,67,2,1,'1','50000','70000',NULL,'2019-11-03 09:56:57','2019-11-03 09:56:57'),(81,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,68,1,1,'1','50000','70000',NULL,'2019-11-03 22:39:19','2019-11-03 22:39:19'),(82,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,69,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:05','2019-11-04 00:16:05'),(83,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,70,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:08','2019-11-04 00:16:08'),(84,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,71,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:09','2019-11-04 00:16:09'),(85,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,72,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:18','2019-11-04 00:16:18'),(86,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,73,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:21','2019-11-04 00:16:21'),(87,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,74,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:21','2019-11-04 00:16:21'),(88,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,75,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:35','2019-11-04 00:16:35'),(89,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,76,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:38','2019-11-04 00:16:38'),(90,NULL,90000,NULL,0,NULL,NULL,NULL,NULL,6,1,77,1,1,'2','45000','90000',NULL,'2019-11-04 00:16:39','2019-11-04 00:16:39'),(91,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,78,1,1,'1','50000','50000',NULL,'2019-11-04 09:26:43','2019-11-04 09:26:43'),(92,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,79,1,1,'1','50000','50000',NULL,'2019-11-04 09:35:08','2019-11-04 09:35:08'),(93,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,80,1,1,'1','50000','50000',NULL,'2019-11-04 09:35:51','2019-11-04 09:35:51'),(94,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,7,1,81,1,1,'1','50000','50000',NULL,'2019-11-04 10:03:17','2019-11-04 10:03:17'),(95,NULL,100000,NULL,10000,NULL,NULL,NULL,NULL,7,1,82,1,1,'2','50000','110000',NULL,'2019-11-06 08:29:46','2019-11-06 08:29:46'),(96,NULL,50000,NULL,10000,NULL,NULL,NULL,NULL,5,1,83,1,1,'1','50000','60000',NULL,'2019-11-06 08:34:10','2019-11-06 08:34:10'),(97,NULL,50000,NULL,10000,NULL,NULL,NULL,NULL,7,1,84,2,1,'1','50000','60000',NULL,'2019-11-06 19:20:28','2019-11-06 19:20:28'),(98,NULL,50000,NULL,10000,NULL,NULL,NULL,NULL,7,1,85,1,1,'1','50000','60000',NULL,'2019-11-06 19:20:49','2019-11-06 19:20:49'),(99,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,86,1,1,'1','50000','70000',NULL,'2019-11-07 02:53:19','2019-11-07 02:53:19'),(100,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,87,2,1,'1','50000','50000',NULL,'2019-11-20 07:12:13','2019-11-20 07:12:13'),(101,NULL,50000,NULL,20000,NULL,NULL,NULL,NULL,5,1,88,2,1,'1','50000','70000',NULL,'2019-11-23 21:16:56','2019-11-23 21:16:56');
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product_topping`
--

DROP TABLE IF EXISTS `order_product_topping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product_topping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_product_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `topping_id` int(11) DEFAULT NULL,
  `topping_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product_topping`
--

LOCK TABLES `order_product_topping` WRITE;
/*!40000 ALTER TABLE `order_product_topping` DISABLE KEYS */;
INSERT INTO `order_product_topping` VALUES (1,1,1,4,1,10000,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(2,1,1,4,2,15000,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(3,8,11,5,3,10000,'2019-08-19 08:46:18','2019-08-19 08:46:18'),(4,9,12,5,2,10000,'2019-08-23 09:00:36','2019-08-23 09:00:36'),(5,10,12,5,2,10000,'2019-08-23 09:00:36','2019-08-23 09:00:36'),(6,10,12,5,3,10000,'2019-08-23 09:00:36','2019-08-23 09:00:36'),(7,11,13,5,2,10000,'2019-08-23 09:02:16','2019-08-23 09:02:16'),(8,11,13,5,3,10000,'2019-08-23 09:02:16','2019-08-23 09:02:16'),(9,12,14,5,2,10000,'2019-08-23 09:05:09','2019-08-23 09:05:09'),(10,12,14,5,3,10000,'2019-08-23 09:05:09','2019-08-23 09:05:09'),(11,14,15,5,2,10000,'2019-08-23 09:05:10','2019-08-23 09:05:10'),(12,14,15,5,3,10000,'2019-08-23 09:05:10','2019-08-23 09:05:10'),(13,16,16,5,2,10000,'2019-08-23 09:05:12','2019-08-23 09:05:12'),(14,16,16,5,3,10000,'2019-08-23 09:05:12','2019-08-23 09:05:12'),(15,18,17,5,2,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(16,19,18,5,2,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(17,18,17,5,3,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(18,19,18,5,3,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(19,22,19,5,2,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(20,22,19,5,3,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(21,24,20,5,2,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(22,24,20,5,3,10000,'2019-08-23 09:05:13','2019-08-23 09:05:13'),(23,26,21,5,2,10000,'2019-08-23 09:05:14','2019-08-23 09:05:14'),(24,26,21,5,3,10000,'2019-08-23 09:05:14','2019-08-23 09:05:14'),(25,28,22,5,2,10000,'2019-08-23 09:05:15','2019-08-23 09:05:15'),(26,28,22,5,3,10000,'2019-08-23 09:05:15','2019-08-23 09:05:15'),(27,30,23,5,2,10000,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(28,30,23,5,3,10000,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(29,32,24,5,2,10000,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(30,32,24,5,3,10000,'2019-08-23 09:05:19','2019-08-23 09:05:19'),(31,34,25,5,2,10000,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(32,34,25,5,3,10000,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(33,36,26,5,2,10000,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(34,36,26,5,3,10000,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(35,38,27,5,2,10000,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(36,38,27,5,3,10000,'2019-08-23 09:05:20','2019-08-23 09:05:20'),(37,40,28,5,2,10000,'2019-08-23 09:05:21','2019-08-23 09:05:21'),(38,40,28,5,3,10000,'2019-08-23 09:05:21','2019-08-23 09:05:21'),(39,42,29,5,2,10000,'2019-08-23 09:06:41','2019-08-23 09:06:41'),(40,42,29,5,3,10000,'2019-08-23 09:06:41','2019-08-23 09:06:41'),(41,53,40,7,1,10000,'2019-08-23 09:19:42','2019-08-23 09:19:42'),(42,54,41,5,2,10000,'2019-10-05 09:00:11','2019-10-05 09:00:11'),(43,54,41,5,3,10000,'2019-10-05 09:00:11','2019-10-05 09:00:11'),(44,55,42,5,2,10000,'2019-10-05 09:00:12','2019-10-05 09:00:12'),(45,55,42,5,3,10000,'2019-10-05 09:00:13','2019-10-05 09:00:13'),(46,56,43,5,3,10000,'2019-10-08 23:35:27','2019-10-08 23:35:27'),(47,57,44,5,3,10000,'2019-10-08 23:35:29','2019-10-08 23:35:29'),(48,58,45,5,3,10000,'2019-10-08 23:35:32','2019-10-08 23:35:32'),(49,60,47,5,2,10000,'2019-11-03 09:16:42','2019-11-03 09:16:42'),(50,61,48,5,2,10000,'2019-11-03 09:19:23','2019-11-03 09:19:23'),(51,62,49,5,2,10000,'2019-11-03 09:21:23','2019-11-03 09:21:23'),(52,63,50,5,2,10000,'2019-11-03 09:53:52','2019-11-03 09:53:52'),(53,63,50,5,3,10000,'2019-11-03 09:53:52','2019-11-03 09:53:52'),(54,64,51,5,2,10000,'2019-11-03 09:53:55','2019-11-03 09:53:55'),(55,64,51,5,3,10000,'2019-11-03 09:53:55','2019-11-03 09:53:55'),(56,65,52,5,2,10000,'2019-11-03 09:53:56','2019-11-03 09:53:56'),(57,65,52,5,3,10000,'2019-11-03 09:53:56','2019-11-03 09:53:56'),(58,66,53,5,2,10000,'2019-11-03 09:53:56','2019-11-03 09:53:56'),(59,66,53,5,3,10000,'2019-11-03 09:53:56','2019-11-03 09:53:56'),(60,67,54,5,2,10000,'2019-11-03 09:54:00','2019-11-03 09:54:00'),(61,67,54,5,3,10000,'2019-11-03 09:54:00','2019-11-03 09:54:00'),(62,68,55,5,2,10000,'2019-11-03 09:54:00','2019-11-03 09:54:00'),(63,68,55,5,3,10000,'2019-11-03 09:54:00','2019-11-03 09:54:00'),(64,69,56,5,2,10000,'2019-11-03 09:54:03','2019-11-03 09:54:03'),(65,69,56,5,3,10000,'2019-11-03 09:54:03','2019-11-03 09:54:03'),(66,70,57,5,2,10000,'2019-11-03 09:54:03','2019-11-03 09:54:03'),(67,70,57,5,3,10000,'2019-11-03 09:54:03','2019-11-03 09:54:03'),(68,71,58,5,2,10000,'2019-11-03 09:54:22','2019-11-03 09:54:22'),(69,71,58,5,3,10000,'2019-11-03 09:54:22','2019-11-03 09:54:22'),(70,72,59,5,2,10000,'2019-11-03 09:54:22','2019-11-03 09:54:22'),(71,72,59,5,3,10000,'2019-11-03 09:54:22','2019-11-03 09:54:22'),(72,73,60,5,2,10000,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(73,73,60,5,3,10000,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(74,74,61,5,2,10000,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(75,74,61,5,3,10000,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(76,75,62,5,2,10000,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(77,75,62,5,3,10000,'2019-11-03 09:54:29','2019-11-03 09:54:29'),(78,76,63,5,2,10000,'2019-11-03 09:56:32','2019-11-03 09:56:32'),(79,76,63,5,3,10000,'2019-11-03 09:56:32','2019-11-03 09:56:32'),(80,77,64,5,2,10000,'2019-11-03 09:56:33','2019-11-03 09:56:33'),(81,77,64,5,3,10000,'2019-11-03 09:56:33','2019-11-03 09:56:33'),(82,78,65,5,2,10000,'2019-11-03 09:56:34','2019-11-03 09:56:34'),(83,78,65,5,3,10000,'2019-11-03 09:56:34','2019-11-03 09:56:34'),(84,79,66,5,2,10000,'2019-11-03 09:56:57','2019-11-03 09:56:57'),(85,79,66,5,3,10000,'2019-11-03 09:56:57','2019-11-03 09:56:57'),(86,80,67,5,2,10000,'2019-11-03 09:56:57','2019-11-03 09:56:57'),(87,80,67,5,3,10000,'2019-11-03 09:56:57','2019-11-03 09:56:57'),(88,81,68,5,2,10000,'2019-11-03 22:39:19','2019-11-03 22:39:19'),(89,81,68,5,3,10000,'2019-11-03 22:39:19','2019-11-03 22:39:19'),(90,95,82,7,1,10000,'2019-11-06 08:29:46','2019-11-06 08:29:46'),(91,96,83,5,3,10000,'2019-11-06 08:34:10','2019-11-06 08:34:10'),(92,97,84,7,1,10000,'2019-11-06 19:20:28','2019-11-06 19:20:28'),(93,98,85,7,1,10000,'2019-11-06 19:20:49','2019-11-06 19:20:49'),(94,99,86,5,2,10000,'2019-11-07 02:53:19','2019-11-07 02:53:19'),(95,99,86,5,3,10000,'2019-11-07 02:53:19','2019-11-07 02:53:19'),(96,101,88,5,2,10000,'2019-11-23 21:16:56','2019-11-23 21:16:56'),(97,101,88,5,3,10000,'2019-11-23 21:16:56','2019-11-23 21:16:56');
/*!40000 ALTER TABLE `order_product_topping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_transaction_logs`
--

DROP TABLE IF EXISTS `order_transaction_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_transaction_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_before` int(11) DEFAULT NULL,
  `total_after` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_transaction_logs`
--

LOCK TABLES `order_transaction_logs` WRITE;
/*!40000 ALTER TABLE `order_transaction_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_transaction_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `amount_after_promotion` int(11) DEFAULT NULL,
  `updated_order_by` int(11) DEFAULT NULL,
  `confirm_payment_by` int(11) DEFAULT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL,
  `total_topping_price` int(11) DEFAULT NULL,
  `total_product_price` int(11) DEFAULT NULL,
  `ship_id` int(11) DEFAULT NULL,
  `ship_price` int(11) DEFAULT NULL,
  `order_type_id` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT '1',
  `table_qr_code` text COLLATE utf8mb4_unicode_ci,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,NULL,NULL,NULL,NULL,NULL,2,1,25000,700000,NULL,NULL,1,NULL,1,'Awu2QadmP3T6qLDG',NULL,'725000','comment so 1',1,1,'2019-08-17 20:12:36','2019-08-17 20:12:36',NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:02:55','2019-08-18 02:02:55',NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:03:54','2019-08-18 02:03:54',NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:04:43','2019-08-18 02:04:43',NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:07:45','2019-08-18 02:07:45',NULL),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:08:25','2019-08-18 02:08:25',NULL),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:11:13','2019-08-18 02:11:13',NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:11:52','2019-08-18 02:11:52',NULL),(9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,110000,NULL,0,1,NULL,10,NULL,NULL,'110000',NULL,1,1,'2019-08-19 08:44:02','2019-08-19 08:44:02',NULL),(10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,110000,NULL,0,1,NULL,10,NULL,NULL,'110000',NULL,1,1,'2019-08-19 08:45:03','2019-08-19 08:45:03',NULL),(11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,110000,NULL,0,1,NULL,10,NULL,NULL,'110000',NULL,1,1,'2019-08-19 08:46:17','2019-08-19 08:46:17',NULL),(12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,130000,NULL,0,1,NULL,10,NULL,NULL,'130000',NULL,1,1,'2019-08-23 09:00:36','2019-08-23 09:00:36',NULL),(13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-08-23 09:02:15','2019-08-23 09:02:15',NULL),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:09','2019-08-23 09:05:09',NULL),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:10','2019-08-23 09:05:10',NULL),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:12','2019-08-23 09:05:12',NULL),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:13','2019-08-23 09:05:13',NULL),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:13','2019-08-23 09:05:13',NULL),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:13','2019-08-23 09:05:13',NULL),(20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:13','2019-08-23 09:05:13',NULL),(21,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:14','2019-08-23 09:05:14',NULL),(22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:15','2019-08-23 09:05:15',NULL),(23,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:19','2019-08-23 09:05:19',NULL),(24,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:19','2019-08-23 09:05:19',NULL),(25,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:20','2019-08-23 09:05:20',NULL),(26,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:20','2019-08-23 09:05:20',NULL),(27,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:20','2019-08-23 09:05:20',NULL),(28,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-08-23 09:05:21','2019-08-23 09:05:21',NULL),(29,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,120000,NULL,0,1,NULL,10,NULL,NULL,'120000',NULL,1,1,'2019-08-23 09:06:41','2019-08-23 09:06:41',NULL),(30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:08:59','2019-08-23 09:08:59',NULL),(31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:26','2019-08-23 09:09:26',NULL),(32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:27','2019-08-23 09:09:27',NULL),(33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:27','2019-08-23 09:09:27',NULL),(34,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:27','2019-08-23 09:09:27',NULL),(35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:28','2019-08-23 09:09:28',NULL),(36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:28','2019-08-23 09:09:28',NULL),(37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:29','2019-08-23 09:09:29',NULL),(38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:29','2019-08-23 09:09:29',NULL),(39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-23 09:09:29','2019-08-23 09:09:29',NULL),(40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,110000,NULL,0,1,NULL,10,NULL,NULL,'110000',NULL,1,1,'2019-08-23 09:19:42','2019-08-23 09:19:42',NULL),(41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-10-05 09:00:11','2019-10-05 09:00:11',NULL),(42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-10-05 09:00:12','2019-10-05 09:00:12',NULL),(43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,160000,NULL,0,1,NULL,10,NULL,NULL,'160000',NULL,1,1,'2019-10-08 23:35:27','2019-10-08 23:35:27',NULL),(44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,160000,NULL,0,1,NULL,10,NULL,NULL,'160000',NULL,1,1,'2019-10-08 23:35:29','2019-10-08 23:35:29',NULL),(45,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,160000,NULL,0,1,NULL,10,NULL,NULL,'160000',NULL,1,1,'2019-10-08 23:35:32','2019-10-08 23:35:32',NULL),(46,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,100000,NULL,0,1,NULL,10,NULL,NULL,'100000',NULL,1,1,'2019-11-03 08:47:07','2019-11-03 08:47:07',NULL),(47,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,60000,NULL,0,1,NULL,10,NULL,NULL,'60000',NULL,1,1,'2019-11-03 09:16:42','2019-11-03 09:16:42',NULL),(48,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,60000,NULL,0,1,NULL,10,NULL,NULL,'60000',NULL,1,1,'2019-11-03 09:19:23','2019-11-03 09:19:23',NULL),(49,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,120000,NULL,0,1,NULL,10,NULL,NULL,'120000',NULL,1,1,'2019-11-03 09:21:23','2019-11-03 09:21:23',NULL),(50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:53:52','2019-11-03 09:53:52',NULL),(51,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:53:55','2019-11-03 09:53:55',NULL),(52,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:53:56','2019-11-03 09:53:56',NULL),(53,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:53:56','2019-11-03 09:53:56',NULL),(54,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:00','2019-11-03 09:54:00',NULL),(55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:00','2019-11-03 09:54:00',NULL),(56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:03','2019-11-03 09:54:03',NULL),(57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:03','2019-11-03 09:54:03',NULL),(58,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:22','2019-11-03 09:54:22',NULL),(59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:22','2019-11-03 09:54:22',NULL),(60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:29','2019-11-03 09:54:29',NULL),(61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:29','2019-11-03 09:54:29',NULL),(62,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,170000,NULL,0,1,NULL,10,NULL,NULL,'170000',NULL,1,1,'2019-11-03 09:54:29','2019-11-03 09:54:29',NULL),(63,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-03 09:56:32','2019-11-03 09:56:32',NULL),(64,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-03 09:56:33','2019-11-03 09:56:33',NULL),(65,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-03 09:56:34','2019-11-03 09:56:34',NULL),(66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-03 09:56:57','2019-11-03 09:56:57',NULL),(67,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-03 09:56:57','2019-11-03 09:56:57',NULL),(68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-03 22:39:19','2019-11-03 22:39:19',NULL),(69,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,90000,NULL,0,1,NULL,1,NULL,NULL,'90000',NULL,1,1,'2019-11-04 00:16:05','2019-11-04 00:16:05',NULL),(70,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,90000,NULL,0,1,NULL,1,NULL,NULL,'90000',NULL,1,1,'2019-11-04 00:16:08','2019-11-04 00:16:08',NULL),(71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,90000,NULL,0,1,NULL,1,NULL,NULL,'90000',NULL,1,1,'2019-11-04 00:16:09','2019-11-04 00:16:09',NULL),(72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,90000,NULL,0,1,NULL,1,NULL,NULL,'90000',NULL,1,1,'2019-11-04 00:16:18','2019-11-04 00:16:18',NULL),(73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,90000,NULL,0,1,NULL,1,NULL,NULL,'90000',NULL,1,1,'2019-11-04 00:16:21','2019-11-04 00:16:21',NULL),(74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,90000,NULL,0,1,NULL,1,NULL,NULL,'90000',NULL,1,1,'2019-11-04 00:16:21','2019-11-04 00:16:21',NULL),(75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,135000,NULL,0,1,NULL,1,NULL,NULL,'135000',NULL,1,1,'2019-11-04 00:16:35','2019-11-04 00:16:35',NULL),(76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,135000,NULL,0,1,NULL,1,NULL,NULL,'135000',NULL,1,1,'2019-11-04 00:16:38','2019-11-04 00:16:38',NULL),(77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,135000,NULL,0,1,NULL,1,NULL,NULL,'135000',NULL,1,1,'2019-11-04 00:16:39','2019-11-04 00:16:39',NULL),(78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-11-04 09:26:43','2019-11-04 09:26:43',NULL),(79,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-11-04 09:35:08','2019-11-04 09:35:08',NULL),(80,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-11-04 09:35:51','2019-11-04 09:35:51',NULL),(81,50000,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-11-04 10:03:17','2019-11-04 10:03:17',NULL),(82,100000,NULL,NULL,NULL,NULL,NULL,NULL,0,110000,NULL,0,1,NULL,10,NULL,NULL,'110000',NULL,1,1,'2019-11-06 08:29:46','2019-11-06 08:29:46',NULL),(83,50000,NULL,NULL,NULL,NULL,NULL,NULL,0,60000,NULL,0,1,NULL,10,NULL,NULL,'60000',NULL,1,1,'2019-11-06 08:34:10','2019-11-06 08:34:10',NULL),(84,50000,NULL,NULL,NULL,NULL,NULL,NULL,0,60000,NULL,0,1,NULL,10,NULL,NULL,'60000',NULL,1,1,'2019-11-06 19:20:28','2019-11-06 19:20:28',NULL),(85,50000,NULL,NULL,NULL,NULL,NULL,NULL,0,60000,NULL,0,1,NULL,10,NULL,NULL,'60000',NULL,1,1,'2019-11-06 19:20:49','2019-11-06 19:20:49',NULL),(86,50000,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-07 02:53:19','2019-11-07 02:53:19',NULL),(87,50000,NULL,NULL,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-11-20 07:12:13','2019-11-20 07:12:13',NULL),(88,50000,NULL,NULL,NULL,NULL,NULL,NULL,0,70000,NULL,0,1,NULL,10,NULL,NULL,'70000',NULL,1,1,'2019-11-23 21:16:56','2019-11-23 21:16:56',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_topping`
--

LOCK TABLES `product_topping` WRITE;
/*!40000 ALTER TABLE `product_topping` DISABLE KEYS */;
INSERT INTO `product_topping` VALUES (1,5,2,NULL,'2019-08-11 01:42:11','2019-08-11 01:42:11'),(2,5,3,NULL,'2019-08-11 01:42:37','2019-08-11 01:42:37'),(3,30,7,NULL,'2019-11-02 17:08:35','2019-11-02 17:08:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'2 phut','21:00:00','09:00:00',NULL,'/uploads/products/1/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',1,'Mon_tra_sua',1,'123','1',35000,15000,'Tra_sua',5,'2019-08-11 00:31:52','2019-08-11 01:21:58','2019-08-11 01:21:58'),(2,'5 phut','22:00:00','09:00:00',NULL,'/uploads/products/2/avatar/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',2,'Món trà hoa đăng cho mùa thu',1,'124','2',35000,10000,'Chocolate Đá Xay',14,'2019-08-11 00:46:11','2019-08-11 01:22:02','2019-08-11 01:22:02'),(3,'2 phut','21:00:00','09:00:00',NULL,'/uploads/products/3/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',2,'Món matcha đủ vị',1,'125','3',35000,15000,'Matcha phú quý',5,'2019-08-11 00:47:14','2019-08-11 01:22:05','2019-08-11 01:22:05'),(4,'5 phút',NULL,NULL,NULL,'/uploads/products/4/avatar/cold_brew_cam_sa.jpg',1,'Cold brew Cam sả',1,'101','1',50000,25000,'Cold brew Cam sả',11,'2019-08-11 01:22:43','2019-08-18 00:31:22',NULL),(5,'5 phút',NULL,NULL,NULL,'/uploads/products/5/avatar/coldbrew_phuc_bon_tu.png',2,'Cold brew Phúc bồn tử',1,'102','2',50000,25000,'Cold brew Phúc bồn tử',11,'2019-08-11 01:23:40','2019-08-18 00:34:20',NULL),(6,'5 phút',NULL,NULL,NULL,'/uploads/products/6/avatar/coldbrew_milk.jpg',3,'Cold brew Sữa tươi',1,'103','3',45000,22500,'Cold brew Sữa tươi',11,'2019-08-11 01:24:17','2019-08-18 00:36:31',NULL),(7,'5 phút',NULL,NULL,NULL,'/uploads/products/7/avatar/caramel_macchiato.jpg',4,'Caramel Macchiato Đá',1,'104','4',50000,25000,'Caramel Macchiato Đá',12,'2019-08-11 01:24:41','2019-08-18 01:15:20',NULL),(8,'5 phút',NULL,NULL,NULL,'/uploads/products/8/avatar/caramel_macchiato.jpg',5,'Caramel Macchiato Nóng',1,'AzoHWkSFtKuCX4jT','5',50000,25000,'Caramel Macchiato Nóng',12,'2019-08-18 00:40:49','2019-08-18 00:40:49',NULL),(9,'5 phút',NULL,NULL,NULL,'/uploads/products/9/avatar/caramel_macchiato.jpg',6,'Cà phê sữa Đá',1,'rHOLxd84a7yjJR6h','6',29000,14500,'Cà phê sữa Đá',13,'2019-08-18 00:43:53','2019-08-18 00:43:53',NULL),(10,'5 phút',NULL,NULL,NULL,'/uploads/products/10/avatar/caramel_macchiato.jpg',7,'Cà phê sữa Nóng',1,'VnE1Ha84wjlRpbBT','7',35000,17500,'Cà phê sữa Nóng',13,'2019-08-18 01:17:02','2019-08-18 01:17:02',NULL),(11,'5 phút',NULL,NULL,NULL,'/uploads/products/11/avatar/caramel_macchiato.jpg',8,'Americano Đá',1,'nirs7NPVEK9LA3IF','8',40000,20000,'Americano Đá',14,'2019-08-18 01:17:23','2019-08-18 01:17:23',NULL),(12,'5 phút',NULL,NULL,NULL,'/uploads/products/12/avatar/americano-nong.jpg',9,'Americano Nóng',1,'B7jq3ixQlX1Ir8HE','9',40000,20000,'Americano Nóng',14,'2019-08-18 01:18:01','2019-08-18 01:18:01',NULL),(13,'5 phút',NULL,NULL,NULL,'/uploads/products/13/avatar/cappuccino_master.jpg',10,'Cappucino Đá',1,'13SF4Dv8VZris5TPu0','10',50000,25000,'Cappucino Đá',15,'2019-08-18 01:18:41','2019-08-18 01:18:41',NULL),(14,'5 phút',NULL,NULL,NULL,'/uploads/products/14/avatar/cappuccino_master.jpg',11,'Cappucino Nóng',1,'140ChR746Fs5p8zHX3','11',50000,25000,'Cappucino Nóng',15,'2019-08-18 01:19:08','2019-08-18 01:19:08',NULL),(15,'5 phút',NULL,NULL,NULL,'/uploads/products/15/avatar/latte_nong.jpg',12,'Latte Đá',1,'15gVq6fONhm23tSBQb','12',50000,25000,'Latte Đá',16,'2019-08-18 01:22:27','2019-08-18 01:22:27',NULL),(16,'5 phút',NULL,NULL,NULL,'/uploads/products/16/avatar/latte_nong.jpg',13,'Latte Nóng',1,'16HUPqZS1JGYT5VyNQ','13',50000,25000,'Latte Nóng',16,'2019-08-18 01:22:51','2019-08-18 01:22:51',NULL),(17,'5 phút',NULL,NULL,NULL,'/uploads/products/17/avatar/mocha_ice_blended_master.jpg',14,'Mocha Đá',1,'17iV2vySJAKBclpdrM','14',50000,25000,'Mocha Đá',17,'2019-08-18 01:23:51','2019-08-18 01:23:51',NULL),(18,'5 phút',NULL,NULL,NULL,'/uploads/products/18/avatar/mocha_ice_blended_master.jpg',15,'Mocha Nóng',1,'18ATHrznk94dPUDb0j','15',50000,25000,'Mocha Nóng',17,'2019-08-18 01:24:13','2019-08-18 01:24:13',NULL),(19,'5 phút',NULL,NULL,NULL,'/uploads/products/19/avatar/espresso_master.jpg',16,'Espresso Đá',1,'19ynYmI1KWRSzxepvu','16',45000,22500,'Espresso Đá',18,'2019-08-18 01:25:17','2019-08-18 01:25:17',NULL),(20,'5 phút',NULL,NULL,NULL,'/uploads/products/20/avatar/espresso_master.jpg',17,'Espresso Nóng',1,'20tneExQ8yVz2MWH9J','17',40000,20000,'Espresso Nóng',18,'2019-08-18 01:25:49','2019-08-18 01:25:49',NULL),(21,'10 phút',NULL,NULL,NULL,'/uploads/products/21/avatar/tra_oo_long.png',1,'Trà ô long',1,'118','18',50000,25000,'Trà ô long',9,'2019-08-18 01:27:11','2019-08-25 07:38:41',NULL),(22,'10 phút',NULL,NULL,NULL,'/uploads/products/22/avatar/luc-tra-hoa-dang.jpg',2,'Lục trà hoa đăng',1,'119','19',50000,25000,'Lục trà hoa đăng',9,'2019-08-18 01:28:06','2019-08-25 07:39:19',NULL),(23,'5 phút',NULL,NULL,NULL,'/uploads/products/23/avatar/chocolate_ice_blended_master.jpg',1,'Chocolate đá xay',1,'120','20',59000,29500,'Chocolate đá xay',8,'2019-08-18 01:29:06','2019-08-25 07:24:49',NULL),(24,'5 phút',NULL,NULL,NULL,'/uploads/products/24/avatar/chocolate_ice_blended_master.jpg',2,'Phúc bồn tử cam đá xay',1,'121','21',59000,29500,'Phúc bồn tử cam đá xay',8,'2019-08-18 01:30:00','2019-08-25 07:25:25',NULL),(25,'5 phút',NULL,NULL,NULL,'/uploads/products/25/avatar/matcha_ice_blended_master.jpg',3,'Matcha đá xay',1,'122','22',59000,29500,'Matcha đá xay',8,'2019-08-18 01:30:43','2019-08-25 07:26:10',NULL),(26,'5 phút',NULL,NULL,NULL,'/uploads/products/26/avatar/cookies-da-xay.jpg',4,'Cookies đá xay',1,'123','23',59000,29500,'Cookies đá xay',8,'2019-08-18 01:31:22','2019-08-25 07:27:08',NULL),(27,'5 phút',NULL,NULL,NULL,'/uploads/products/27/avatar/cookies-da-xay.jpg',5,'Chanh sả đá xay',1,'124','24',49000,24500,'Chanh sả đá xay',8,'2019-08-18 01:32:40','2019-08-25 07:27:41',NULL),(28,'5 phút',NULL,NULL,NULL,'/uploads/products/28/avatar/cookies-da-xay.jpg',6,'Cam đá xay',1,'125','25',59000,29500,'Cam đá xay',8,'2019-08-18 01:33:05','2019-08-25 07:28:01',NULL),(29,'5 phút',NULL,NULL,NULL,'/uploads/products/29/avatar/cookies-da-xay.jpg',7,'Ổi hồng việt quất đá xay',1,'126','26',59000,29500,'Ổi hồng việt quất đá xay',8,'2019-08-18 01:33:24','2019-08-25 07:28:34',NULL),(30,'5 phút','12:00:00','10:00:00',NULL,'/uploads/products/30/avatar/dau_phong_toi_ot.jpg',1,'Đậu phộng tỏi ớt',1,'127','27',10000,5000,'Đậu phộng tỏi ớt',10,'2019-08-18 01:35:33','2019-08-25 07:40:19',NULL),(31,'5 phút','12:00:00','10:00:00',NULL,'/uploads/products/31/avatar/banh_mi_que.jpg',2,'Bánh mì que',1,'128','28',10000,5000,'Bánh mì que',10,'2019-08-18 01:35:55','2019-08-25 07:40:52',NULL),(32,'5 phút','12:00:00','10:00:00',NULL,'/uploads/products/32/avatar/banh_mi_que.jpg',3,'Da Cá Sấy Giòn Vị Trứng Muối',1,'129','29',30000,15000,'Da Cá Sấy Giòn Vị Trứng Muối',10,'2019-08-18 01:36:12','2019-08-25 07:41:23',NULL),(33,'5 phút','22:00:00','18:00:00',NULL,'/uploads/products/33/avatar/banh_mi_que.jpg',4,'Khô gà lá chanh',1,'130','30',20000,10000,'Khô gà lá chanh',10,'2019-08-18 01:39:22','2019-08-25 07:42:35',NULL),(34,'5 phút','00:00:01','00:00:01',NULL,'/uploads/products/34/avatar/banh_mi_que.jpg',5,'Điều vàng rang muối',1,'131','31',20000,10000,'Điều vàng rang muối',10,'2019-08-18 01:40:18','2019-08-25 07:42:50',NULL),(35,'5 phút','00:00:01','00:00:01',NULL,'/uploads/products/35/avatar/banh_mi_que.jpg',6,'Hạt sen sấy',1,'132','32',30000,15000,'Hạt sen sấy',10,'2019-08-18 01:42:10','2019-08-25 07:43:01',NULL),(36,'5 phút','00:00:01','00:00:01',NULL,'/uploads/products/36/avatar/banh_mi_que.jpg',7,'Khô gà bơ cay',1,'133','33',20000,10000,'Khô gà bơ cay',10,'2019-08-18 01:42:26','2019-08-25 07:43:13',NULL),(37,'5 phút','00:00:01','00:00:01',NULL,'/uploads/products/37/avatar/banh_mi_que.jpg',8,'Cơm cháy chà bông',1,'134','34',25000,12500,'Cơm cháy chà bông',10,'2019-08-18 01:42:37','2019-08-25 07:43:24',NULL),(38,'5 phút','00:00:01','00:00:01',NULL,'/uploads/products/38/avatar/banh_mi_que.jpg',9,'Gạo lứt sấy giòn',1,'135','35',10000,5000,'Gạo lứt sấy giòn',10,'2019-08-18 01:42:47','2019-08-25 07:43:42',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promotions`
--

DROP TABLE IF EXISTS `promotions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_total_min` int(11) DEFAULT NULL,
  `money_promotion` int(11) DEFAULT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promotions`
--

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
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
  `weight_number` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_product`
--

LOCK TABLES `size_product` WRITE;
/*!40000 ALTER TABLE `size_product` DISABLE KEYS */;
INSERT INTO `size_product` VALUES (1,NULL,5,1,NULL,NULL,'2019-08-11 01:59:18','2019-08-11 01:59:18',NULL),(2,NULL,6,1,NULL,NULL,'2019-08-11 01:59:28','2019-08-11 01:59:28',NULL),(3,NULL,5,1,NULL,NULL,'2019-08-11 02:01:02','2019-08-11 02:01:02',NULL),(4,NULL,5,1,NULL,NULL,'2019-08-11 02:03:53','2019-08-11 02:03:53',NULL),(5,NULL,5,1,NULL,NULL,'2019-08-11 02:04:10','2019-08-11 02:04:10',NULL),(6,NULL,5,1,NULL,NULL,'2019-08-11 02:05:00','2019-08-11 02:05:00',NULL),(7,NULL,5,1,NULL,NULL,'2019-08-11 02:07:12','2019-08-11 02:07:12',NULL),(8,NULL,5,1,NULL,NULL,'2019-08-11 02:07:31','2019-08-11 02:07:31',NULL),(9,NULL,5,1,NULL,NULL,'2019-08-11 02:07:37','2019-08-11 02:07:37',NULL),(10,NULL,5,1,NULL,NULL,'2019-08-11 02:09:33','2019-08-11 02:09:33',NULL),(11,NULL,5,1,NULL,NULL,'2019-08-11 02:11:12','2019-08-11 02:11:12',NULL),(12,NULL,5,1,NULL,NULL,'2019-08-11 02:14:27','2019-08-11 02:14:27',NULL),(13,NULL,5,1,NULL,NULL,'2019-08-11 02:29:06','2019-08-11 02:29:06',NULL),(14,NULL,5,1,NULL,NULL,'2019-08-11 02:29:55','2019-08-11 02:29:55',NULL),(15,NULL,5,1,NULL,NULL,'2019-08-11 02:33:14','2019-08-11 02:33:14',NULL),(16,NULL,5,1,NULL,NULL,'2019-08-11 02:34:55','2019-08-11 02:34:55',NULL),(17,NULL,5,1,NULL,NULL,'2019-08-11 02:46:06','2019-08-11 02:46:06',NULL),(18,NULL,5,1,NULL,NULL,'2019-08-11 02:48:17','2019-08-11 02:48:17',NULL),(19,NULL,5,1,'10000',NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22',NULL),(20,NULL,5,2,'10000',NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00',NULL),(21,NULL,6,1,'10000',NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50',NULL),(22,NULL,5,1,'100000',NULL,'2019-08-17 08:00:33','2019-08-17 08:00:33',NULL),(23,NULL,8,1,'10000',NULL,'2019-08-18 01:05:17','2019-08-25 08:06:35','2019-08-25 08:06:35'),(24,NULL,7,1,'50000',NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40',NULL),(25,NULL,7,2,'50000',NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54',NULL),(26,NULL,7,3,'50000',NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33',NULL),(27,NULL,8,1,'50000',NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45',NULL),(28,NULL,8,2,'50000',NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56',NULL),(29,NULL,8,3,'50000',NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02',NULL),(30,NULL,9,1,'45000',NULL,'2019-08-25 08:10:50','2019-11-07 21:21:11','2019-11-07 21:21:11'),(31,NULL,9,2,'45000',NULL,'2019-08-25 08:10:56','2019-11-07 21:21:29','2019-11-07 21:21:29'),(32,NULL,9,3,'45000',NULL,'2019-08-25 08:10:59','2019-11-02 21:01:03','2019-11-02 21:01:03'),(33,NULL,9,3,'50000',NULL,'2019-11-02 17:09:25','2019-11-02 21:01:03','2019-11-02 21:01:03'),(34,NULL,9,3,'50000',NULL,'2019-11-02 21:01:03','2019-11-04 08:25:28','2019-11-04 08:25:28'),(35,1,9,3,'0',NULL,'2019-11-04 08:25:54','2019-11-07 21:21:43','2019-11-07 21:21:43'),(36,1,10,3,'50000',NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34',NULL),(37,1,9,1,'0',NULL,'2019-11-07 21:21:11','2019-11-07 21:26:20','2019-11-07 21:26:20'),(38,2,9,2,'10000',NULL,'2019-11-07 21:21:29','2019-11-07 21:26:31','2019-11-07 21:26:31'),(39,3,9,3,'20000',NULL,'2019-11-07 21:21:43','2019-11-07 21:26:00','2019-11-07 21:26:00'),(40,2,9,3,'20000',NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00',NULL),(41,3,9,1,'0',NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20',NULL),(42,1,9,2,'10000',NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31',NULL),(43,1,11,1,'0',NULL,'2019-11-07 21:28:02','2019-11-08 02:47:07','2019-11-08 02:47:07'),(44,2,11,2,'5000',NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14',NULL),(45,3,11,3,'10000',NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23',NULL),(46,1,11,1,'0',NULL,'2019-11-08 02:47:07','2019-11-08 02:47:30','2019-11-08 02:47:30'),(47,2,11,1,'10000',NULL,'2019-11-08 02:47:30','2019-11-08 02:47:38','2019-11-08 02:47:38'),(48,3,11,1,'15000',NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38',NULL);
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
  `max` int(11) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `step_distance` int(11) DEFAULT NULL COMMENT 'khoảng cách bước nhảy',
  `status` int(11) DEFAULT NULL COMMENT 'active hoặc inactive',
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
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_product_material`
--

LOCK TABLES `size_product_material` WRITE;
/*!40000 ALTER TABLE `size_product_material` DISABLE KEYS */;
INSERT INTO `size_product_material` VALUES (1,NULL,NULL,NULL,NULL,19,5,1,1,1,NULL,NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22'),(2,NULL,NULL,NULL,NULL,19,5,1,2,2,NULL,NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22'),(3,NULL,NULL,NULL,NULL,20,5,2,1,1,NULL,NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00'),(4,NULL,NULL,NULL,NULL,20,5,2,2,2,NULL,NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00'),(5,NULL,NULL,NULL,NULL,21,6,1,1,1,NULL,NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50'),(6,NULL,NULL,NULL,NULL,21,6,1,2,2,NULL,NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50'),(9,20,NULL,10,1,24,7,1,1,10,NULL,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(10,200,NULL,50,1,24,7,1,6,100,NULL,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(11,1,NULL,1,0,24,7,1,9,1,NULL,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(12,20,NULL,10,1,25,7,2,1,10,NULL,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(13,200,NULL,50,1,25,7,2,6,100,NULL,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(14,1,NULL,1,1,25,7,2,9,1,NULL,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(15,20,NULL,10,1,26,7,3,1,10,NULL,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(16,200,NULL,50,1,26,7,3,6,100,NULL,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(17,1,NULL,1,1,26,7,3,11,1,NULL,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(18,20,NULL,10,1,27,8,1,1,10,NULL,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(19,200,NULL,50,1,27,8,1,6,100,NULL,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(20,1,NULL,1,1,27,8,1,11,1,NULL,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(21,20,NULL,10,1,28,8,2,1,10,NULL,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(22,200,NULL,50,1,28,8,2,6,100,NULL,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(23,1,NULL,1,1,28,8,2,11,1,NULL,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(24,20,NULL,10,1,29,8,3,1,10,NULL,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(25,200,NULL,50,1,29,8,3,6,100,NULL,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(26,1,NULL,1,1,29,8,3,11,1,NULL,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(45,20,NULL,10,1,36,10,3,1,10,NULL,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(46,200,NULL,50,1,36,10,3,6,100,NULL,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(47,1,NULL,1,1,36,10,3,11,1,NULL,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(57,20,NULL,10,1,40,9,3,1,10,NULL,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(58,200,NULL,50,1,40,9,3,6,100,NULL,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(59,1,NULL,1,1,40,9,3,11,1,NULL,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(60,20,NULL,10,1,41,9,1,1,10,NULL,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(61,200,NULL,50,1,41,9,1,6,100,NULL,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(62,1,NULL,1,1,41,9,1,11,1,NULL,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(63,20,NULL,10,1,42,9,2,1,10,NULL,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(64,200,NULL,50,1,42,9,2,6,100,NULL,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(65,1,NULL,1,1,42,9,2,11,1,NULL,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(69,20,NULL,10,1,44,11,2,1,10,NULL,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(70,200,NULL,50,1,44,11,2,6,100,NULL,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(71,1,NULL,1,1,44,11,2,11,1,NULL,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(72,20,NULL,10,1,45,11,3,1,10,NULL,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(73,200,NULL,50,1,45,11,3,6,100,NULL,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(74,1,NULL,1,1,45,11,3,11,1,NULL,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(81,20,NULL,10,1,48,11,1,1,10,NULL,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(82,200,NULL,50,1,48,11,1,6,100,NULL,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(83,1,NULL,1,1,48,11,1,11,1,NULL,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38');
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
INSERT INTO `sizes` VALUES (1,'S moi',0,NULL,'2019-08-10 23:40:04','2019-08-10 23:42:37',NULL),(2,'M',1,NULL,'2019-08-10 23:40:13','2019-08-10 23:40:13',NULL),(3,'L',1,NULL,'2019-08-10 23:40:17','2019-08-10 23:40:17',NULL),(4,'cay',1,NULL,'2019-08-10 23:40:21','2019-08-10 23:40:21',NULL),(5,'không cay',1,NULL,'2019-08-10 23:40:28','2019-08-17 22:05:30',NULL);
/*!40000 ALTER TABLE `sizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `steps`
--

DROP TABLE IF EXISTS `steps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `steps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `size_product_material_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `steps`
--

LOCK TABLES `steps` WRITE;
/*!40000 ALTER TABLE `steps` DISABLE KEYS */;
INSERT INTO `steps` VALUES (8,NULL,'Khoong sữa',0,7,1,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(9,NULL,'Ít sữa',10,7,1,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(10,NULL,'Nhiều sữa',20,7,1,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(11,NULL,'rat nhieu duong',18,7,1,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(12,NULL,'Ít đá',50,7,6,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(13,NULL,'Vừa đá',100,7,6,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(14,NULL,'Nhiều đá',150,7,6,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(15,NULL,'Rất nhiều đá',200,7,6,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(16,NULL,'Khoong chanh',0,7,9,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(17,NULL,'Co chanh',1,7,9,1,NULL,'2019-08-20 21:06:40','2019-08-20 21:06:40'),(18,NULL,'Khoong sữa',0,7,1,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(19,NULL,'Ít sữa',10,7,1,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(20,NULL,'Nhiều sữa',20,7,1,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(21,NULL,'rat nhieu duong',18,7,1,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(22,NULL,'Ít đá',50,7,6,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(23,NULL,'Vừa đá',100,7,6,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(24,NULL,'Nhiều đá',150,7,6,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(25,NULL,'Rất nhiều đá',200,7,6,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(26,NULL,'Khoong chanh',0,7,9,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(27,NULL,'Co chanh',1,7,9,2,NULL,'2019-08-20 21:06:54','2019-08-20 21:06:54'),(28,NULL,'Khoong sữa',0,7,1,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(29,NULL,'Ít sữa',10,7,1,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(30,NULL,'Nhiều sữa',20,7,1,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(31,NULL,'rat nhieu duong',18,7,1,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(32,NULL,'Ít đá',50,7,6,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(33,NULL,'Vừa đá',100,7,6,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(34,NULL,'Nhiều đá',150,7,6,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(35,NULL,'Rất nhiều đá',200,7,6,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(36,NULL,'Khoong cam',0,7,11,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(37,NULL,'Co cam',1,7,11,3,NULL,'2019-08-20 21:07:33','2019-08-20 21:07:33'),(38,NULL,'Khong sữa',0,8,1,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(39,NULL,'Ít sữa',10,8,1,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(40,NULL,'Nhiều sữa',20,8,1,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(41,NULL,'Ít đá',50,8,6,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(42,NULL,'Vừa đá',100,8,6,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(43,NULL,'Nhiều đá',150,8,6,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(44,NULL,'Rất nhiều đá',200,8,6,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(45,NULL,'Khoong cam',0,8,11,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(46,NULL,'Co cam',1,8,11,1,NULL,'2019-08-25 08:08:45','2019-08-25 08:08:45'),(47,NULL,'Khong sữa',0,8,1,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(48,NULL,'Ít sữa',10,8,1,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(49,NULL,'Nhiều sữa',20,8,1,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(50,NULL,'Ít đá',50,8,6,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(51,NULL,'Vừa đá',100,8,6,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(52,NULL,'Nhiều đá',150,8,6,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(53,NULL,'Rất nhiều đá',200,8,6,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(54,NULL,'Khoong cam',0,8,11,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(55,NULL,'Co cam',1,8,11,2,NULL,'2019-08-25 08:08:56','2019-08-25 08:08:56'),(56,NULL,'Khong sữa',0,8,1,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(57,NULL,'Ít sữa',10,8,1,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(58,NULL,'Nhiều sữa',20,8,1,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(59,NULL,'Ít đá',50,8,6,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(60,NULL,'Vừa đá',100,8,6,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(61,NULL,'Nhiều đá',150,8,6,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(62,NULL,'Rất nhiều đá',200,8,6,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(63,NULL,'Khoong cam',0,8,11,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(64,NULL,'Co cam',1,8,11,3,NULL,'2019-08-25 08:09:02','2019-08-25 08:09:02'),(120,45,'Khoong sữa',0,10,1,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(121,45,'Ít sữa',10,10,1,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(122,45,'Nhiều sữa',20,10,1,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(123,45,'rat nhieu duong',18,10,1,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(124,46,'Ít đá',50,10,6,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(125,46,'Vừa đá',100,10,6,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(126,46,'Nhiều đá',150,10,6,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(127,46,'Rất nhiều đá',200,10,6,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(128,47,'Khoong cam',0,10,11,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(129,47,'Co cam',1,10,11,3,NULL,'2019-11-04 08:26:34','2019-11-04 08:26:34'),(157,57,'Khong sữa',0,9,1,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(158,57,'Ít sữa',10,9,1,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(159,57,'Nhiều sữa',20,9,1,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(160,58,'Ít đá',50,9,6,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(161,58,'Vừa đá',100,9,6,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(162,58,'Nhiều đá',150,9,6,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(163,58,'Rất nhiều đá',200,9,6,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(164,59,'Khoong cam',0,9,11,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(165,59,'Co cam',1,9,11,3,NULL,'2019-11-07 21:26:00','2019-11-07 21:26:00'),(166,60,'Khong sữa',0,9,1,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(167,60,'Ít sữa',10,9,1,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(168,60,'Nhiều sữa',20,9,1,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(169,61,'Ít đá',50,9,6,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(170,61,'Vừa đá',100,9,6,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(171,61,'Nhiều đá',150,9,6,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(172,61,'Rất nhiều đá',200,9,6,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(173,62,'Khoong cam',0,9,11,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(174,62,'Co cam',1,9,11,1,NULL,'2019-11-07 21:26:20','2019-11-07 21:26:20'),(175,63,'Khong sữa',0,9,1,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(176,63,'Ít sữa',10,9,1,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(177,63,'Nhiều sữa',20,9,1,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(178,64,'Ít đá',50,9,6,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(179,64,'Vừa đá',100,9,6,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(180,64,'Nhiều đá',150,9,6,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(181,64,'Rất nhiều đá',200,9,6,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(182,65,'Khoong cam',0,9,11,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(183,65,'Co cam',1,9,11,2,NULL,'2019-11-07 21:26:31','2019-11-07 21:26:31'),(194,69,'Khoong sữa',0,11,1,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(195,69,'Ít sữa',10,11,1,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(196,69,'Nhiều sữa',20,11,1,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(197,69,'rat nhieu duong',18,11,1,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(198,70,'Ít đá',50,11,6,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(199,70,'Vừa đá',100,11,6,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(200,70,'Nhiều đá',150,11,6,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(201,70,'Rất nhiều đá',200,11,6,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(202,71,'Khoong cam',0,11,11,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(203,71,'Co cam',1,11,11,2,NULL,'2019-11-07 21:28:14','2019-11-07 21:28:14'),(204,72,'Khoong sữa',0,11,1,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(205,72,'Ít sữa',10,11,1,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(206,72,'Nhiều sữa',20,11,1,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(207,72,'rat nhieu duong',18,11,1,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(208,73,'Ít đá',50,11,6,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(209,73,'Vừa đá',100,11,6,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(210,73,'Nhiều đá',150,11,6,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(211,73,'Rất nhiều đá',200,11,6,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(212,74,'Khoong cam',0,11,11,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(213,74,'Co cam',1,11,11,3,NULL,'2019-11-07 21:28:23','2019-11-07 21:28:23'),(232,81,'Khong sữa',0,11,1,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(233,81,'Ít sữa',10,11,1,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(234,81,'Nhiều sữa',20,11,1,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(235,82,'Ít đá',50,11,6,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(236,82,'Vừa đá',100,11,6,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(237,82,'Nhiều đá',150,11,6,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(238,82,'Rất nhiều đá',200,11,6,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(239,83,'Khoong cam',0,11,11,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38'),(240,83,'Co cam',1,11,11,1,NULL,'2019-11-08 02:47:38','2019-11-08 02:47:38');
/*!40000 ALTER TABLE `steps` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables`
--

LOCK TABLES `tables` WRITE;
/*!40000 ALTER TABLE `tables` DISABLE KEYS */;
INSERT INTO `tables` VALUES (1,1,'Bàn 1',NULL,'1_1_1',3,3,10,1,'2019-08-10 20:37:04','2019-08-17 20:13:10',NULL),(2,1,'Bàn 2',NULL,'1_1_2',2,3,6,1,'2019-08-10 20:38:45','2019-08-17 20:13:34',NULL),(3,1,'Bàn 3',NULL,'1_1_3',1,3,4,1,'2019-08-10 20:39:10','2019-08-17 20:13:57',NULL),(4,2,'Bàn 1',NULL,'1_2_1',3,2,10,1,'2019-08-10 20:56:02','2019-08-17 20:14:33',NULL),(5,2,'Bàn 2',NULL,'1_2_2',2,2,6,1,'2019-08-10 21:09:12','2019-08-17 20:16:11',NULL),(6,2,'Bàn 3',NULL,'1_2_3',1,2,4,1,'2019-08-10 21:09:57','2019-08-17 20:16:28',NULL),(7,3,'Bàn 1',NULL,'1_3_1',3,1,10,1,'2019-08-10 21:10:57','2019-08-17 20:17:01',NULL),(8,3,'Bàn 2',NULL,'1_3_2',2,2,6,1,'2019-08-10 21:11:23','2019-08-17 20:17:30',NULL),(9,4,'Bàn 1',NULL,'1_4_1',1,1,4,1,'2019-08-10 21:12:10','2019-08-17 20:17:52',NULL),(10,4,'Bàn 2','OpHIFT4b5UnQMqu8','1_4_2',3,1,10,1,'2019-08-17 20:19:02','2019-08-17 20:19:02',NULL);
/*!40000 ALTER TABLE `tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag_product`
--

DROP TABLE IF EXISTS `tag_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag_product`
--

LOCK TABLES `tag_product` WRITE;
/*!40000 ALTER TABLE `tag_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `tag_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topping_category`
--

LOCK TABLES `topping_category` WRITE;
/*!40000 ALTER TABLE `topping_category` DISABLE KEYS */;
INSERT INTO `topping_category` VALUES (4,1,12,1,NULL,NULL),(5,1,14,1,NULL,NULL),(6,1,15,1,NULL,NULL),(7,1,16,1,NULL,NULL),(8,1,18,1,NULL,NULL),(9,2,19,1,NULL,NULL),(10,3,26,1,NULL,NULL),(11,4,27,1,NULL,NULL),(12,5,23,1,NULL,NULL),(13,6,24,1,NULL,NULL),(14,6,25,1,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toppings`
--

LOCK TABLES `toppings` WRITE;
/*!40000 ALTER TABLE `toppings` DISABLE KEYS */;
INSERT INTO `toppings` VALUES (1,'Espresso (1shot)','10000',1,'2019-08-11 01:39:27','2019-08-11 01:39:27',NULL),(2,'Sauce Chocolate','10000',1,'2019-08-11 01:42:11','2019-08-17 23:47:36',NULL),(3,'Trân châu trắng','10000',1,'2019-08-11 01:42:37','2019-08-17 23:48:25',NULL),(4,'Trân châu đen','10000',1,'2019-08-17 23:48:49','2019-08-17 23:48:49',NULL),(5,'Đào ngâm','10000',1,'2019-08-17 23:49:24','2019-08-17 23:49:24',NULL),(6,'Vải ngâm','10000',1,'2019-08-17 23:49:45','2019-08-17 23:49:45',NULL),(7,'Espresso (3shot)','20000',1,'2019-11-02 17:08:35','2019-11-02 17:08:35',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_shop`
--

LOCK TABLES `user_shop` WRITE;
/*!40000 ALTER TABLE `user_shop` DISABLE KEYS */;
INSERT INTO `user_shop` VALUES (6,9,1,'2019-08-17 20:08:06','2019-08-17 20:08:06'),(7,10,1,'2019-08-17 20:08:22','2019-08-17 20:08:22');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,1,'admin','Admin','trantunghn196@gmail.com',NULL,'$2y$10$/okfB8xsffX3HfluaNAOgOeKeIsEfRrHbc4DGDWR2G5.F8zJOzbGq',NULL,'2019-08-08 20:04:22','2019-08-08 20:04:22',NULL),(2,NULL,1,'tunglaso2','tran thanh tung','tunglaso2@gmail.com',NULL,'$2y$10$1B/6shqODs1QP1N6iTg8we/yxcdw5g4.yFUs6WSTr8hqgWu77xEgy',NULL,'2019-08-10 19:59:29','2019-08-17 20:03:23','2019-08-17 20:03:23'),(3,NULL,1,'tunglaso3','tran thanh tung','tunglaso3@gmail.com',NULL,'$2y$10$bD5bwW1lB342YClOe41l5uXN4y2kSkcXGPc3nvFFtBZSHlTOQsNJq',NULL,'2019-08-10 20:01:59','2019-08-17 20:03:27','2019-08-17 20:03:27'),(4,NULL,1,'tunglaso4','tran thanh tung','tunglaso4@gmail.com',NULL,'$2y$10$guzJd9aSNEo6CjN36BFhdeTZqCRVo9TrsINNn0W4Yt1yWQTo4ciqa',NULL,'2019-08-10 20:03:11','2019-08-17 20:03:30','2019-08-17 20:03:30'),(5,NULL,1,'tunghoang','tung hoang','tunghoangx4x7x0x5@gmail.com',NULL,'$2y$10$EgVcfgR7wP3/qOUPjHuVLuZt8lVEM5tit7OGDYhssJfrHDLRD9s8K',NULL,'2019-08-17 19:53:37','2019-08-17 20:03:32','2019-08-17 20:03:32'),(6,NULL,1,'tuanvm','vu manh tuan','tuanvm@gmail.com',NULL,'$2y$10$wcpf7GyHUb.cxA83ogns2epxvpQ7DdIETnawTZyRqsVQROuI8yDiO',NULL,'2019-08-17 19:54:09','2019-08-17 20:03:34','2019-08-17 20:03:34'),(7,NULL,1,'tuanvm','vu manh tuan','tuanvm@gmail.com',NULL,'$2y$10$zqn8o9VxYFGOiPvfQutbtecM6tIqyOan2QRvZVhRgUASER4CpQ4jy',NULL,'2019-08-17 20:04:13','2019-08-17 20:07:46','2019-08-17 20:07:46'),(8,NULL,1,'tungh','Hoang Tung','hoangtung@gmail.com',NULL,'$2y$10$aIE2JI8bfGg3K6OJMgtgWO7fJWfFaSof5XkPcGV1pBy/DiLiTlUQK',NULL,'2019-08-17 20:04:33','2019-08-17 20:07:48','2019-08-17 20:07:48'),(9,1,1,'tungh','Hoang Tung','hoangtung@gmail.com',NULL,'$2y$10$LMZR3/VGaQqHNE45lqU56uIasljwCBxhp1ppppbJb8AN9c2DXi/Hu',NULL,'2019-08-17 20:08:06','2019-08-17 20:08:06',NULL),(10,1,1,'tuanvm','Vu Manh Tuan','tuanvm@gmail.com',NULL,'$2y$10$vTFviImhopuMuQIQafyoiuHNYNEx.ytcKOTV8aDiCVxYJJ5ktqpse',NULL,'2019-08-17 20:08:22','2019-08-17 20:08:22',NULL);
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

-- Dump completed on 2019-11-26 13:09:03
