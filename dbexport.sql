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
INSERT INTO `categories` VALUES (1,'0','/tmp/phpzrfUSp','gioi thiuj tra sua',0,'Trà sữa',1,NULL,NULL,'2019-08-10 21:45:12','2019-08-10 21:47:40','2019-08-10 21:47:40'),(2,'2_','/uploads/categories/2/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg','gioi thiuj tra sua',0,'Trà sữa',1,NULL,NULL,'2019-08-10 21:46:32','2019-08-10 22:13:07','2019-08-10 22:13:07'),(3,'0_3','/uploads/categories/3/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Món khai vị',0,'Lục Trà Hoa Đăng',1,NULL,NULL,'2019-08-10 22:08:33','2019-08-10 22:13:12','2019-08-10 22:13:12'),(4,'4_','/uploads/categories/4/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg','Đô',0,'Cà phê',1,NULL,NULL,'2019-08-10 22:13:39','2019-08-10 22:18:26','2019-08-10 22:18:26'),(5,'5','/uploads/categories/5/do_uong.jpg','Các loại đồ uống',0,'Thức uống',1,NULL,NULL,'2019-08-10 22:19:17','2019-08-17 21:25:26',NULL),(6,'6','/uploads/categories/6/do_an.jpg','Các loại đồ ăn',0,'Thức ăn',1,NULL,NULL,'2019-08-10 22:19:38','2019-08-17 21:28:09',NULL),(7,'5','/uploads/categories/7/coffee.jpg','Cà phê',6,'Coffee',1,NULL,NULL,'2019-08-10 22:20:05','2019-08-17 21:29:36',NULL),(8,'5','/uploads/categories/8/thuc_uong_da_xay.jpg','Thức uống đá xay',5,'Thức uống đá xay',1,NULL,NULL,'2019-08-11 00:59:32','2019-08-17 21:32:27',NULL),(9,'5','/uploads/categories/9/do_uong.jpg','Trà trái cây',8,'Trà trái cây',1,NULL,NULL,'2019-08-11 01:00:23','2019-08-17 21:32:02',NULL),(10,'6','/uploads/categories/10/thuc_an_nhe.jpg','Thức ăn nhẹ',8,'Thức ăn nhẹ',1,NULL,NULL,'2019-08-11 01:00:33','2019-08-17 21:34:38',NULL),(11,'5_7','/uploads/categories/11/coldbrew_kv.png','Cold brew',5,'Cold brew',1,NULL,NULL,'2019-08-11 01:01:15','2019-08-17 21:36:08',NULL),(12,'5_7','/uploads/categories/12/caramel_macchiato.jpg','Caramel Macchiato',11,'Caramel Macchiato',1,NULL,NULL,'2019-08-11 01:01:41','2019-08-17 21:37:12',NULL),(13,'5_7','/uploads/categories/13/cafe-sua-nong.jpg','Cà phê sữa',11,'Cà phê sữa',1,NULL,NULL,'2019-08-11 01:01:50','2019-08-17 21:38:28',NULL),(14,'5_7','/uploads/categories/14/americano-nong.jpg','Americano',6,'Americano',1,NULL,NULL,'2019-08-11 01:04:15','2019-08-17 21:39:03',NULL),(15,'5_7','/uploads/categories/15/cappuccino_master.jpg','Cappucino',6,'Cappucino',1,NULL,NULL,'2019-08-11 01:04:33','2019-08-17 21:40:57',NULL),(16,'5_7','/uploads/categories/16/latte_nong.jpg','Latte',7,'Latte',1,NULL,NULL,'2019-08-11 01:05:01','2019-08-17 21:42:10',NULL),(17,'5_7_17','/uploads/categories/17/mocha_ice_blended_master.jpg','Mocha',7,'Mocha',1,NULL,NULL,'2019-08-17 21:44:43','2019-08-17 21:44:43',NULL),(18,'5_7_18','/uploads/categories/18/espresso_master.jpg','Espresso',7,'Espresso',1,NULL,NULL,'2019-08-17 21:46:43','2019-08-17 21:46:43',NULL),(19,'5_8_19','/uploads/categories/19/chocolate_ice_blended_master.jpg','Chocolate đá xay',8,'Chocolate đá xay',1,NULL,NULL,'2019-08-17 21:47:22','2019-08-17 21:47:22',NULL),(20,'5_8_20','/uploads/categories/20/chocolate_ice_blended_master.jpg','Phúc bồn tử cam đá xay',8,'Phúc bồn tử cam đá xay',1,NULL,NULL,'2019-08-17 21:47:48','2019-08-17 21:47:48',NULL),(21,'5_8_21','/uploads/categories/21/matcha_ice_blended_master.jpg','Matcha đá xay',8,'Matcha đá xay',1,NULL,NULL,'2019-08-17 21:49:10','2019-08-17 21:49:10',NULL),(22,'5_8_22','/uploads/categories/22/cookies-da-xay.jpg','Cookies đá xay',8,'Cookies đá xay',1,NULL,NULL,'2019-08-17 21:50:17','2019-08-17 21:50:17',NULL),(23,'5_8_23','/uploads/categories/23/cookies-da-xay.jpg','Chanh sả đá xay',8,'Chanh sả đá xay',1,NULL,NULL,'2019-08-17 21:50:43','2019-08-17 21:50:43',NULL),(24,'5_8_24','/uploads/categories/24/cookies-da-xay.jpg','Cam đá xay',8,'Cam đá xay',1,NULL,NULL,'2019-08-17 21:50:58','2019-08-17 21:50:58',NULL),(25,'5_8_25','/uploads/categories/25/cookies-da-xay.jpg','Ổi hồng việt quất đá xay',8,'Ổi hồng việt quất đá xay',1,NULL,NULL,'2019-08-17 21:51:10','2019-08-17 21:51:10',NULL),(26,'5_9_26','/uploads/categories/26/tra_oo_long.png','Trà ô long',9,'Trà ô long',1,NULL,NULL,'2019-08-17 21:51:57','2019-08-17 21:51:57',NULL),(27,'5_9_27','/uploads/categories/27/luc-tra-hoa-dang.jpg','Lục trà hoa đăng',9,'Lục trà hoa đăng',1,NULL,NULL,'2019-08-17 21:52:26','2019-08-17 21:52:26',NULL),(28,'6_10_28','/uploads/categories/28/dau_phong_toi_ot.jpg','Đậu phộng tỏi ớt',10,'Đậu phộng tỏi ớt',1,NULL,NULL,'2019-08-17 21:53:59','2019-08-17 21:53:59',NULL),(29,'6_10_29','/uploads/categories/29/banh_mi_que.jpg','Bánh mì que',10,'Bánh mì que',1,NULL,NULL,'2019-08-17 21:55:36','2019-08-17 21:55:36',NULL),(30,'6_10_30','/uploads/categories/30/da_ca_say.jpg','Da Cá Sấy Giòn Vị Trứng Muối',10,'Da Cá Sấy Giòn Vị Trứng Muối',1,NULL,NULL,'2019-08-17 21:57:09','2019-08-17 21:57:09',NULL),(31,'6_10_31','/uploads/categories/31/kho_ga_la_chanh.jpg','Khô gà lá chanh',10,'Khô gà lá chanh',1,NULL,NULL,'2019-08-17 21:58:43','2019-08-17 21:58:43',NULL),(32,'6_10_32','/uploads/categories/32/kho_ga_la_chanh.jpg','Điều vàng rang muối',10,'Điều vàng rang muối',1,NULL,NULL,'2019-08-17 22:00:47','2019-08-17 22:00:47',NULL),(33,'6_10_33','/uploads/categories/33/kho_ga_la_chanh.jpg','Hạt sen sấy',10,'Hạt sen sấy',1,NULL,NULL,'2019-08-17 22:01:43','2019-08-17 22:01:43',NULL),(34,'6_10_34','/uploads/categories/34/kho_ga_la_chanh.jpg','Khô gà bơ cay',10,'Khô gà bơ cay',1,NULL,NULL,'2019-08-17 22:03:06','2019-08-17 22:03:06',NULL),(35,'6_10_35','/uploads/categories/35/kho_ga_la_chanh.jpg','Cơm cháy chà bông',10,'Cơm cháy chà bông',1,NULL,NULL,'2019-08-17 22:03:19','2019-08-17 22:03:19',NULL),(36,'6_10_36','/uploads/categories/36/kho_ga_la_chanh.jpg','Gạo lứt sấy giòn',10,'Gạo lứt sấy giòn',1,NULL,NULL,'2019-08-17 22:03:30','2019-08-17 22:03:30',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common_images`
--

LOCK TABLES `common_images` WRITE;
/*!40000 ALTER TABLE `common_images` DISABLE KEYS */;
INSERT INTO `common_images` VALUES (21,'/uploads/products/4/images/cold_brew_cam_sa.jpg',4,'Product',NULL,NULL,'2019-08-18 00:31:22','2019-08-18 00:31:22'),(22,'/uploads/products/4/images/cold_brew_cam_sa.png',4,'Product',NULL,NULL,'2019-08-18 00:31:22','2019-08-18 00:31:22'),(23,'/uploads/products/5/images/coldbrew_phuc_bon_tu.png',5,'Product',NULL,NULL,'2019-08-18 00:34:20','2019-08-18 00:34:20'),(24,'/uploads/products/6/images/coldbrew_milk.jpg',6,'Product',NULL,NULL,'2019-08-18 00:36:31','2019-08-18 00:36:31'),(25,'/uploads/products/8/images/caramel_macchiato.jpg',8,'Product',NULL,NULL,'2019-08-18 00:40:49','2019-08-18 00:40:49'),(26,'/uploads/products/9/images/caramel_macchiato.jpg',9,'Product',NULL,NULL,'2019-08-18 00:43:53','2019-08-18 00:43:53'),(27,'/uploads/products/7/images/caramel_macchiato.jpg',7,'Product',NULL,NULL,'2019-08-18 01:15:20','2019-08-18 01:15:20'),(28,'/uploads/products/10/images/caramel_macchiato.jpg',10,'Product',NULL,NULL,'2019-08-18 01:17:02','2019-08-18 01:17:02'),(29,'/uploads/products/11/images/caramel_macchiato.jpg',11,'Product',NULL,NULL,'2019-08-18 01:17:23','2019-08-18 01:17:23'),(30,'/uploads/products/12/images/americano-nong.jpg',12,'Product',NULL,NULL,'2019-08-18 01:18:01','2019-08-18 01:18:01'),(31,'/uploads/products/13/images/cappuccino_master.jpg',13,'Product',NULL,NULL,'2019-08-18 01:18:41','2019-08-18 01:18:41'),(32,'/uploads/products/14/images/cappuccino_master.jpg',14,'Product',NULL,NULL,'2019-08-18 01:19:08','2019-08-18 01:19:08'),(33,'/uploads/products/15/images/latte_nong.jpg',15,'Product',NULL,NULL,'2019-08-18 01:22:27','2019-08-18 01:22:27'),(34,'/uploads/products/16/images/latte_nong.jpg',16,'Product',NULL,NULL,'2019-08-18 01:22:51','2019-08-18 01:22:51'),(35,'/uploads/products/17/images/mocha_ice_blended_master.jpg',17,'Product',NULL,NULL,'2019-08-18 01:23:51','2019-08-18 01:23:51'),(36,'/uploads/products/18/images/mocha_ice_blended_master.jpg',18,'Product',NULL,NULL,'2019-08-18 01:24:13','2019-08-18 01:24:13'),(37,'/uploads/products/19/images/espresso_master.jpg',19,'Product',NULL,NULL,'2019-08-18 01:25:17','2019-08-18 01:25:17'),(38,'/uploads/products/20/images/espresso_master.jpg',20,'Product',NULL,NULL,'2019-08-18 01:25:49','2019-08-18 01:25:49'),(39,'/uploads/products/21/images/tra_oo_long.png',21,'Product',NULL,NULL,'2019-08-18 01:27:11','2019-08-18 01:27:11'),(40,'/uploads/products/22/images/luc-tra-hoa-dang.jpg',22,'Product',NULL,NULL,'2019-08-18 01:28:06','2019-08-18 01:28:06'),(41,'/uploads/products/23/images/chocolate_ice_blended_master.jpg',23,'Product',NULL,NULL,'2019-08-18 01:29:06','2019-08-18 01:29:06'),(42,'/uploads/products/24/images/coldbrew_phuc_bon_tu.png',24,'Product',NULL,NULL,'2019-08-18 01:30:00','2019-08-18 01:30:00'),(43,'/uploads/products/25/images/matcha_ice_blended_master.jpg',25,'Product',NULL,NULL,'2019-08-18 01:30:43','2019-08-18 01:30:43'),(44,'/uploads/products/25/images/matcha_latte_master.jpg',25,'Product',NULL,NULL,'2019-08-18 01:30:43','2019-08-18 01:30:43'),(45,'/uploads/products/26/images/cookies_ice_blended.jpg',26,'Product',NULL,NULL,'2019-08-18 01:31:22','2019-08-18 01:31:22'),(46,'/uploads/products/26/images/cookies-da-xay.jpg',26,'Product',NULL,NULL,'2019-08-18 01:31:22','2019-08-18 01:31:22'),(47,'/uploads/products/27/images/camdaxay.png',27,'Product',NULL,NULL,'2019-08-18 01:32:40','2019-08-18 01:32:40'),(48,'/uploads/products/28/images/camdaxay.png',28,'Product',NULL,NULL,'2019-08-18 01:33:05','2019-08-18 01:33:05'),(49,'/uploads/products/29/images/camdaxay.png',29,'Product',NULL,NULL,'2019-08-18 01:33:25','2019-08-18 01:33:25'),(50,'/uploads/products/30/images/dau_phong_toi_ot.jpg',30,'Product',NULL,NULL,'2019-08-18 01:35:33','2019-08-18 01:35:33'),(53,'/uploads/products/31/images/banh_mi_que.jpg',31,'Product',NULL,NULL,'2019-08-18 01:37:06','2019-08-18 01:37:06'),(54,'/uploads/products/32/images/banh_mi_que.jpg',32,'Product',NULL,NULL,'2019-08-18 01:37:35','2019-08-18 01:37:35'),(55,'/uploads/products/33/images/kho_ga_la_chanh.jpg',33,'Product',NULL,NULL,'2019-08-18 01:39:22','2019-08-18 01:39:22'),(56,'/uploads/products/34/images/kho_ga_la_chanh.jpg',34,'Product',NULL,NULL,'2019-08-18 01:40:18','2019-08-18 01:40:18'),(57,'/uploads/products/35/images/kho_ga_la_chanh.jpg',35,'Product',NULL,NULL,'2019-08-18 01:42:10','2019-08-18 01:42:10'),(58,'/uploads/products/36/images/kho_ga_la_chanh.jpg',36,'Product',NULL,NULL,'2019-08-18 01:42:26','2019-08-18 01:42:26'),(59,'/uploads/products/37/images/kho_ga_la_chanh.jpg',37,'Product',NULL,NULL,'2019-08-18 01:42:37','2019-08-18 01:42:37'),(60,'/uploads/products/38/images/kho_ga_la_chanh.jpg',38,'Product',NULL,NULL,'2019-08-18 01:42:47','2019-08-18 01:42:47');
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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_06_01_000001_create_oauth_auth_codes_table',1),(4,'2016_06_01_000002_create_oauth_access_tokens_table',1),(5,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(6,'2016_06_01_000004_create_oauth_clients_table',1),(7,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(8,'2019_05_22_085544_create_categories_table',1),(9,'2019_05_24_088359_create_products_table',1),(10,'2019_07_26_055215_add_field_categories',1),(11,'2019_07_26_060620_add_field_user_admin',1),(12,'2019_07_29_032725_create_role_tables',1),(13,'2019_07_29_034102_default_role_database',1),(14,'2019_07_30_033141_add_path_categories',1),(15,'2019_07_30_084309_create_shop_table',1),(16,'2019_07_30_085924_create_user_shop_table',1),(17,'2019_07_31_022630_create_table_level',1),(18,'2019_07_31_040023_create_tables',1),(19,'2019_07_31_063108_create_topping_table',1),(20,'2019_07_31_063129_create_topping_categories_table',1),(21,'2019_07_31_094637_create_product_topping_table',1),(22,'2019_07_31_095932_create_images_table',1),(23,'2019_08_01_022213_add_more_field_product',1),(24,'2019_08_01_023518_add_status_field_product',1),(28,'2019_08_05_060225_create_size_table',2),(29,'2019_08_05_062023_create_size_product_table',2),(30,'2019_08_09_031754_create_customer_table',2),(31,'2019_08_09_040315_create_material_table',2),(32,'2019_08_09_040433_create_material_type_table',2),(33,'2019_08_09_054638_create_orders_table',2),(34,'2019_08_09_054719_create_order_product_table',2),(38,'2019_08_09_060405_create_bill_tmp_table',3),(39,'2019_08_09_061705_add_open_close_time_shop',3),(40,'2019_08_09_061936_add_open_time_and_duration_product',3),(41,'2019_08_11_020625_add_active_field_customer',4),(42,'2019_08_12_080827_create_size_product_material_table',5),(43,'2019_08_13_062036_add_more_order_product',6),(44,'2019_08_13_090549_create_order_product_topping_table',6),(45,'2019_08_14_035127_add_table_id_into_order',7),(46,'2019_08_14_042857_create_order_logs_table',7),(47,'2019_08_16_092529_create_tags_table',8),(48,'2019_08_16_092623_create_tag_product_table',8),(49,'2019_08_16_094739_add_phone_name_into_orders_table',8),(50,'2019_08_18_065027_add_min_max_step_into_size_resource_table',9),(51,'2019_08_18_070141_create_steps_table',9),(52,'2019_08_18_084915_add_comment_order_product_table',10);
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
INSERT INTO `oauth_access_tokens` VALUES ('0294414acb6e191926c32cc842c638729a4a8dc79bd1ba218709f92b582843f56885735a091e5bb0',1,1,'Laravel','[]',1,'2019-08-16 03:21:08','2019-08-17 19:54:12','2020-08-16 10:21:08'),('0618d2cd07d2c5297dadb8f6bc4efde9ff81fa048499c774ece31c722c5f7921f26f616fb6474080',5,1,'Laravel','[]',0,'2019-08-17 19:54:23','2019-08-17 19:54:23','2020-08-18 02:54:23'),('17206b1f34bb007a5c02763dc57b34e089a85fc9b0a4f9ce66d6fbc27c0999074ada12f44f51b43f',1,1,'Laravel','[]',0,'2019-08-17 20:42:05','2019-08-17 20:42:05','2020-08-18 03:42:05'),('17224e00f62dd98feddd7d0ebd5fff2c306e6b886f91c8778a1ef5698bcae68d5e5812683289a469',10,1,'Laravel','[]',0,'2019-08-17 20:18:49','2019-08-17 20:18:49','2020-08-18 03:18:49'),('1a55326061fa89740a2d9cd6e91c2369416a10c1a44e7fad1816f9190920990dd00b2d4fbec0fbf8',2,1,'Laravel','[]',0,'2019-08-17 19:48:06','2019-08-17 19:48:06','2020-08-18 02:48:06'),('1b8964a726758b5475c08710c9c254fa1a4ff20bbf1f0b28996d201fb51fae4f7bae2806dc04964f',1,1,'Laravel','[]',1,'2019-08-10 20:59:22','2019-08-17 19:54:12','2020-08-11 03:59:22'),('2d543615c24dffa51a9c5e78532bc504d1ca0aa3287351735b1729d2e356b3d03e360118dee0ae86',1,1,'Laravel','[]',1,'2019-08-10 20:58:04','2019-08-17 19:54:12','2020-08-11 03:58:04'),('3c05792908bce4f5a3d7fc98023c908a774cc848472f2017961d94e318a7d17585fa46da15f417c2',2,1,'Laravel','[]',0,'2019-08-17 19:49:15','2019-08-17 19:49:15','2020-08-18 02:49:15'),('6a262094f665e351002808bd1507a128b8495a1b29201e4ee5b589c77e0a2639a6e66b62cee9fbbf',1,1,'Laravel','[]',1,'2019-08-10 20:51:32','2019-08-17 19:54:12','2020-08-11 03:51:32'),('73cb1bf0c6b8fec3d8d11bd735a8f050b4c1e2b933e2b9889fc34d70cccb69a1d2ac0c684b92700a',1,1,'Laravel','[]',1,'2019-08-10 19:50:16','2019-08-17 19:54:12','2020-08-11 02:50:16'),('751d63bad3f510152ff0c613614853f501a96307fee5077bd6752481b78e96d5df92c737e98f07b0',5,1,'Laravel','[]',0,'2019-08-17 19:55:42','2019-08-17 19:55:42','2020-08-18 02:55:42'),('84a8253431d3b871b29ccd5efc073f8e7336673d3fa2c3fd55972111a27ef03713e463c8b61a9829',1,1,'Laravel','[]',1,'2019-08-10 19:50:34','2019-08-17 19:54:12','2020-08-11 02:50:34'),('85d13e6e1cc5918bd48799c57631353070ab5aa77b9661de4cea343b9cd64c188e208ae7ebe03806',1,1,'Laravel','[]',1,'2019-08-10 20:39:07','2019-08-17 19:54:12','2020-08-11 03:39:07'),('85e93c947406b5c2f702f9e4d864c8344f37bc9c3dfa390d99e4449fca2eb51396c15e94ac058487',1,1,'Laravel','[]',1,'2019-08-10 20:56:11','2019-08-17 19:54:12','2020-08-11 03:56:11'),('861a670906118e1f183093987a2e6a9745bcee175a80bf9b69d593d6f2e656d16d8fceddf7e345b4',1,1,'Laravel','[]',0,'2019-08-17 20:01:34','2019-08-17 20:01:34','2020-08-18 03:01:34'),('86be4b2255adf4bc978a52127e12bf8fc58aedf4c962e48c6713aa3e83a4a61966baf96e3578438a',1,1,'Laravel','[]',1,'2019-08-10 21:31:37','2019-08-17 19:54:12','2020-08-11 04:31:37'),('a37c8e199cd415fe4e3607ed024f74d8fbaef2aff39cb7fbb20ee00a24527a599c7b52d32ad8a675',8,1,'Laravel','[]',0,'2019-08-17 20:06:09','2019-08-17 20:06:09','2020-08-18 03:06:09'),('a572dd5c1a1db5e9825a5c538fb942ede5b59624faf36e9fc5ecd3669205d8f895fb677a0d410423',9,1,'Laravel','[]',0,'2019-08-17 20:09:17','2019-08-17 20:09:17','2020-08-18 03:09:17'),('a63c658f8cf2f31648955f8bb7d9cd955f91d662065b507dbc9871d10917ac272e63ee4ee5bf206f',6,1,'Laravel','[]',0,'2019-08-17 19:54:17','2019-08-17 19:54:17','2020-08-18 02:54:17'),('a8b4bc6dab3acaffb1428197aedea6a9815b5bcfc5a6b86df37ccbf4373e4355e0784a22420cab5b',1,1,'Laravel','[]',1,'2019-08-17 19:44:14','2019-08-17 19:54:12','2020-08-18 02:44:14'),('a9471b31d9b1d6f699a11a46c8648bf3ed12ffbde6674191a7b96d6e4c38a65fd287f171705a86f4',1,1,'Laravel','[]',1,'2019-08-10 22:26:46','2019-08-17 19:54:12','2020-08-11 05:26:46'),('b0ce3b3a6e59272168537e68716403ef4ef2ae0a377345db5b475f779c5f2f1a2cde90ff9659b4eb',1,1,'Laravel','[]',1,'2019-08-10 20:58:59','2019-08-17 19:54:12','2020-08-11 03:58:59'),('b5f9502d8f9bc2e68c014d992b1224ce00aff0a4cbe21eb798c24299f8d4dc19df8df5dfd018a074',8,1,'Laravel','[]',0,'2019-08-17 20:06:19','2019-08-17 20:06:19','2020-08-18 03:06:19'),('b92c876845523f1b094198e365222d70fc0c607f22ea208df24dbfec752c152af850ebbba4f6f8c3',1,1,'Laravel','[]',1,'2019-08-10 19:44:15','2019-08-17 19:54:12','2020-08-11 02:44:15'),('c18fcd1cff73d8de7e2dda44cdee1639ff8b259c93cf0eeb6be891d2b57fabe0b1a19fe217df87af',1,1,'Laravel','[]',1,'2019-08-10 20:20:25','2019-08-17 19:54:12','2020-08-11 03:20:25'),('c91419ae0bc59640f3d0e9f31a59f8904a267c80f480eaa79e492a730d2bba64dafed5431ce9f04c',1,1,'Laravel','[]',1,'2019-08-17 19:50:20','2019-08-17 19:54:12','2020-08-18 02:50:20'),('cc097fcdc0b4f2d8506223378ba5e49d3cb925f3fa54f8820b82f884df9406d19718b78bb8a549a2',1,1,'Laravel','[]',1,'2019-08-10 20:44:04','2019-08-17 19:54:12','2020-08-11 03:44:04'),('cc43aa7595ba2762d11542d21add0dc0c38636b5a812145ea2c35a17698b30c132a5e9369177c38a',1,1,'Laravel','[]',1,'2019-08-10 20:59:09','2019-08-17 19:54:12','2020-08-11 03:59:09'),('ce194030b59809d3195b9c9f9838ea12f856483ca412d6df68bb06acd23308a588edf550a88256dd',1,1,'Laravel','[]',1,'2019-08-17 19:43:30','2019-08-17 19:54:12','2020-08-18 02:43:30'),('eca6fba440b64379e8a43cf3b34124315e0c44c2da1b4389abe77a7691b2ad15c8df1ef3f7a849a4',1,1,'Laravel','[]',1,'2019-08-10 20:12:54','2019-08-17 19:54:12','2020-08-11 03:12:54'),('fab66a5ae180207f86fbd12cc777c7aec6925b22d8f3f741955c6edd71b659bc3a7561e763852f31',1,1,'Laravel','[]',1,'2019-08-10 20:37:52','2019-08-17 19:54:12','2020-08-11 03:37:52'),('fef601c870d6e9500ed8c1dca628bedffea88952513d62adb649b6636bb48e9363c4e8c4435a45a3',1,1,'Laravel','[]',1,'2019-08-10 21:00:41','2019-08-17 19:54:12','2020-08-11 04:00:41');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_bill_tmps`
--

LOCK TABLES `order_bill_tmps` WRITE;
/*!40000 ALTER TABLE `order_bill_tmps` DISABLE KEYS */;
INSERT INTO `order_bill_tmps` VALUES (1,'1',1,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(2,'2',6,'2019-08-18 02:08:25','2019-08-18 02:08:25'),(3,'3',8,'2019-08-18 02:11:52','2019-08-18 02:11:52');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (1,NULL,NULL,NULL,25000,1,2,'Awu2QadmP3T6qLDG',NULL,4,1,1,1,1,'2','100000','225000',NULL,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(2,NULL,NULL,NULL,0,1,2,'Awu2QadmP3T6qLDG',NULL,5,1,1,3,1,'1','200000','200000',NULL,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(3,NULL,NULL,NULL,0,1,2,'Awu2QadmP3T6qLDG',NULL,4,1,1,2,1,'1','300000','300000',NULL,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(4,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,6,1,1,'1','50000','50000',NULL,'2019-08-18 02:08:25','2019-08-18 02:08:25'),(5,NULL,50000,NULL,0,NULL,NULL,NULL,NULL,5,1,8,2,1,'1','50000','50000',NULL,'2019-08-18 02:11:52','2019-08-18 02:11:52');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product_topping`
--

LOCK TABLES `order_product_topping` WRITE;
/*!40000 ALTER TABLE `order_product_topping` DISABLE KEYS */;
INSERT INTO `order_product_topping` VALUES (1,1,1,4,1,10000,'2019-08-17 20:12:36','2019-08-17 20:12:36'),(2,1,1,4,2,15000,'2019-08-17 20:12:36','2019-08-17 20:12:36');
/*!40000 ALTER TABLE `order_product_topping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,NULL,NULL,2,1,25000,700000,NULL,NULL,1,NULL,1,'Awu2QadmP3T6qLDG',NULL,'725000','comment so 1',1,1,'2019-08-17 20:12:36','2019-08-17 20:12:36',NULL),(2,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:02:55','2019-08-18 02:02:55',NULL),(3,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:03:54','2019-08-18 02:03:54',NULL),(4,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:04:43','2019-08-18 02:04:43',NULL),(5,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:07:45','2019-08-18 02:07:45',NULL),(6,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:08:25','2019-08-18 02:08:25',NULL),(7,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:11:13','2019-08-18 02:11:13',NULL),(8,NULL,NULL,NULL,NULL,0,50000,NULL,0,1,NULL,10,NULL,NULL,'50000',NULL,1,1,'2019-08-18 02:11:52','2019-08-18 02:11:52',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'2 phut','21:00:00','09:00:00',NULL,'/uploads/products/1/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',1,'Mon_tra_sua',1,'123','1',35000,15000,'Tra_sua',5,'2019-08-11 00:31:52','2019-08-11 01:21:58','2019-08-11 01:21:58'),(2,'5 phut','22:00:00','09:00:00',NULL,'/uploads/products/2/avatar/mon-luc-tra-hoa-dang-cho-mua-trung-thu_b709808234964905a4563d22caacd646_large.jpg',2,'Món trà hoa đăng cho mùa thu',1,'124','2',35000,10000,'Chocolate Đá Xay',14,'2019-08-11 00:46:11','2019-08-11 01:22:02','2019-08-11 01:22:02'),(3,'2 phut','21:00:00','09:00:00',NULL,'/uploads/products/3/avatar/ach-lam-mon-matcha-phu-quy-vi-la-cho-mua-doan-vien-1_0bb5015fdef949bc93b509969b1eed3b_large.jpg',2,'Món matcha đủ vị',1,'125','3',35000,15000,'Matcha phú quý',5,'2019-08-11 00:47:14','2019-08-11 01:22:05','2019-08-11 01:22:05'),(4,'5 phút',NULL,NULL,NULL,'/uploads/products/4/avatar/cold_brew_cam_sa.jpg',1,'Cold brew Cam sả',1,'101','1',50000,25000,'Cold brew Cam sả',11,'2019-08-11 01:22:43','2019-08-18 00:31:22',NULL),(5,'5 phút',NULL,NULL,NULL,'/uploads/products/5/avatar/coldbrew_phuc_bon_tu.png',2,'Cold brew Phúc bồn tử',1,'102','2',50000,25000,'Cold brew Phúc bồn tử',11,'2019-08-11 01:23:40','2019-08-18 00:34:20',NULL),(6,'5 phút',NULL,NULL,NULL,'/uploads/products/6/avatar/coldbrew_milk.jpg',3,'Cold brew Sữa tươi',1,'103','3',45000,22500,'Cold brew Sữa tươi',11,'2019-08-11 01:24:17','2019-08-18 00:36:31',NULL),(7,'5 phút',NULL,NULL,NULL,'/uploads/products/7/avatar/caramel_macchiato.jpg',4,'Caramel Macchiato Đá',1,'104','4',50000,25000,'Caramel Macchiato Đá',12,'2019-08-11 01:24:41','2019-08-18 01:15:20',NULL),(8,'5 phút',NULL,NULL,NULL,'/uploads/products/8/avatar/caramel_macchiato.jpg',5,'Caramel Macchiato Nóng',1,'AzoHWkSFtKuCX4jT','5',50000,25000,'Caramel Macchiato Nóng',12,'2019-08-18 00:40:49','2019-08-18 00:40:49',NULL),(9,'5 phút',NULL,NULL,NULL,'/uploads/products/9/avatar/caramel_macchiato.jpg',6,'Cà phê sữa Đá',1,'rHOLxd84a7yjJR6h','6',29000,14500,'Cà phê sữa Đá',13,'2019-08-18 00:43:53','2019-08-18 00:43:53',NULL),(10,'5 phút',NULL,NULL,NULL,'/uploads/products/10/avatar/caramel_macchiato.jpg',7,'Cà phê sữa Nóng',1,'VnE1Ha84wjlRpbBT','7',35000,17500,'Cà phê sữa Nóng',13,'2019-08-18 01:17:02','2019-08-18 01:17:02',NULL),(11,'5 phút',NULL,NULL,NULL,'/uploads/products/11/avatar/caramel_macchiato.jpg',8,'Americano Đá',1,'nirs7NPVEK9LA3IF','8',40000,20000,'Americano Đá',14,'2019-08-18 01:17:23','2019-08-18 01:17:23',NULL),(12,'5 phút',NULL,NULL,NULL,'/uploads/products/12/avatar/americano-nong.jpg',9,'Americano Nóng',1,'B7jq3ixQlX1Ir8HE','9',40000,20000,'Americano Nóng',14,'2019-08-18 01:18:01','2019-08-18 01:18:01',NULL),(13,'5 phút',NULL,NULL,NULL,'/uploads/products/13/avatar/cappuccino_master.jpg',10,'Cappucino Đá',1,'13SF4Dv8VZris5TPu0','10',50000,25000,'Cappucino Đá',15,'2019-08-18 01:18:41','2019-08-18 01:18:41',NULL),(14,'5 phút',NULL,NULL,NULL,'/uploads/products/14/avatar/cappuccino_master.jpg',11,'Cappucino Nóng',1,'140ChR746Fs5p8zHX3','11',50000,25000,'Cappucino Nóng',15,'2019-08-18 01:19:08','2019-08-18 01:19:08',NULL),(15,'5 phút',NULL,NULL,NULL,'/uploads/products/15/avatar/latte_nong.jpg',12,'Latte Đá',1,'15gVq6fONhm23tSBQb','12',50000,25000,'Latte Đá',16,'2019-08-18 01:22:27','2019-08-18 01:22:27',NULL),(16,'5 phút',NULL,NULL,NULL,'/uploads/products/16/avatar/latte_nong.jpg',13,'Latte Nóng',1,'16HUPqZS1JGYT5VyNQ','13',50000,25000,'Latte Nóng',16,'2019-08-18 01:22:51','2019-08-18 01:22:51',NULL),(17,'5 phút',NULL,NULL,NULL,'/uploads/products/17/avatar/mocha_ice_blended_master.jpg',14,'Mocha Đá',1,'17iV2vySJAKBclpdrM','14',50000,25000,'Mocha Đá',17,'2019-08-18 01:23:51','2019-08-18 01:23:51',NULL),(18,'5 phút',NULL,NULL,NULL,'/uploads/products/18/avatar/mocha_ice_blended_master.jpg',15,'Mocha Nóng',1,'18ATHrznk94dPUDb0j','15',50000,25000,'Mocha Nóng',17,'2019-08-18 01:24:13','2019-08-18 01:24:13',NULL),(19,'5 phút',NULL,NULL,NULL,'/uploads/products/19/avatar/espresso_master.jpg',16,'Espresso Đá',1,'19ynYmI1KWRSzxepvu','16',45000,22500,'Espresso Đá',18,'2019-08-18 01:25:17','2019-08-18 01:25:17',NULL),(20,'5 phút',NULL,NULL,NULL,'/uploads/products/20/avatar/espresso_master.jpg',17,'Espresso Nóng',1,'20tneExQ8yVz2MWH9J','17',40000,20000,'Espresso Nóng',18,'2019-08-18 01:25:49','2019-08-18 01:25:49',NULL),(21,'10 phút',NULL,NULL,NULL,'/uploads/products/21/avatar/tra_oo_long.png',1,'Trà ô long',1,'216pWViDfBtnQ3lZYs','18',50000,25000,'Trà ô long',26,'2019-08-18 01:27:11','2019-08-18 01:27:11',NULL),(22,'10 phút',NULL,NULL,NULL,'/uploads/products/22/avatar/luc-tra-hoa-dang.jpg',2,'Lục trà hoa đăng',1,'22Mfw0RI9gCUDQuNzc','19',50000,25000,'Lục trà hoa đăng',27,'2019-08-18 01:28:06','2019-08-18 01:28:06',NULL),(23,'5 phút',NULL,NULL,NULL,'/uploads/products/23/avatar/chocolate_ice_blended_master.jpg',1,'Chocolate đá xay',1,'23Iyn4TCs9RzSJAHMx','20',59000,29500,'Chocolate đá xay',19,'2019-08-18 01:29:06','2019-08-18 01:29:06',NULL),(24,'5 phút',NULL,NULL,NULL,'/uploads/products/24/avatar/coldbrew_phuc_bon_tu.png',2,'Phúc bồn tử cam đá xay',1,'24W3nyKml9YzuhNpdr','21',59000,29500,'Phúc bồn tử cam đá xay',20,'2019-08-18 01:30:00','2019-08-18 01:30:00',NULL),(25,'5 phút',NULL,NULL,NULL,'/uploads/products/25/avatar/matcha_ice_blended_master.jpg',3,'Matcha đá xay',1,'25GuglbWk9xYP84Osm','22',59000,29500,'Matcha đá xay',21,'2019-08-18 01:30:43','2019-08-18 01:30:43',NULL),(26,'5 phút',NULL,NULL,NULL,'/uploads/products/26/avatar/cookies-da-xay.jpg',4,'Cookies đá xay',1,'26PW2mdENu4v5cD9nV','23',59000,29500,'Cookies đá xay',22,'2019-08-18 01:31:22','2019-08-18 01:31:22',NULL),(27,'5 phút',NULL,NULL,NULL,'/uploads/products/27/avatar/camdaxay.png',5,'Chanh sả đá xay',1,'27uZCXPfkn5QzJstY9','24',49000,24500,'Chanh sả đá xay',23,'2019-08-18 01:32:40','2019-08-18 01:32:40',NULL),(28,'5 phút',NULL,NULL,NULL,'/uploads/products/28/avatar/camdaxay.png',6,'Cam đá xay',1,'28JoklTDAeXgj4GcRI','25',59000,29500,'Cam đá xay',24,'2019-08-18 01:33:05','2019-08-18 01:33:05',NULL),(29,'5 phút',NULL,NULL,NULL,'/uploads/products/29/avatar/camdaxay.png',7,'Ổi hồng việt quất đá xay',1,'290Uwn1NVQ4KLRkOpe','26',59000,29500,'Ổi hồng việt quất đá xay',25,'2019-08-18 01:33:24','2019-08-18 01:33:24',NULL),(30,'5 phút','12:00:00','10:00:00',NULL,'/uploads/products/30/avatar/dau_phong_toi_ot.jpg',1,'Đậu phộng tỏi ớt',1,'300Q3gRqbFiAI8CoKJ','27',10000,5000,'Đậu phộng tỏi ớt',28,'2019-08-18 01:35:33','2019-08-18 01:35:33',NULL),(31,'5 phút','12:00:00','10:00:00',NULL,'/uploads/products/31/avatar/banh_mi_que.jpg',2,'Bánh mì que',1,'128','28',10000,5000,'Bánh mì que',29,'2019-08-18 01:35:55','2019-08-18 01:37:06',NULL),(32,'5 phút','12:00:00','10:00:00',NULL,'/uploads/products/32/avatar/banh_mi_que.jpg',3,'Da Cá Sấy Giòn Vị Trứng Muối',1,'129','29',30000,15000,'Da Cá Sấy Giòn Vị Trứng Muối',30,'2019-08-18 01:36:12','2019-08-18 01:37:35',NULL),(33,'5 phút','22:00:00','18:00:00',NULL,'/uploads/products/33/avatar/kho_ga_la_chanh.jpg',4,'Khô gà lá chanh',1,'33CmDA9uvEeLldBFST','30',20000,10000,'Khô gà lá chanh',31,'2019-08-18 01:39:22','2019-08-18 01:39:22',NULL),(34,'5 phút','22:00:00','18:00:00',NULL,'/uploads/products/34/avatar/kho_ga_la_chanh.jpg',5,'Điều vàng rang muối',1,'34iJgOmGjcSu5lIkWP','31',20000,10000,'Điều vàng rang muối',32,'2019-08-18 01:40:18','2019-08-18 01:40:18',NULL),(35,'5 phút','22:00:00','18:00:00',NULL,'/uploads/products/35/avatar/kho_ga_la_chanh.jpg',6,'Hạt sen sấy',1,'35TCEuQzX3WjriHbSL','32',30000,15000,'Hạt sen sấy',33,'2019-08-18 01:42:10','2019-08-18 01:42:10',NULL),(36,'5 phút','22:00:00','18:00:00',NULL,'/uploads/products/36/avatar/kho_ga_la_chanh.jpg',7,'Khô gà bơ cay',1,'36sw2ZXvRpgKBFU67W','33',20000,10000,'Khô gà bơ cay',34,'2019-08-18 01:42:26','2019-08-18 01:42:26',NULL),(37,'5 phút','22:00:00','18:00:00',NULL,'/uploads/products/37/avatar/kho_ga_la_chanh.jpg',8,'Cơm cháy chà bông',1,'37p8Hit5B93Wb6NdPo','34',25000,12500,'Cơm cháy chà bông',35,'2019-08-18 01:42:37','2019-08-18 01:42:37',NULL),(38,'5 phút','22:00:00','18:00:00',NULL,'/uploads/products/38/avatar/kho_ga_la_chanh.jpg',9,'Gạo lứt sấy giòn',1,'38bOJxCv5AhBzTy6ce','35',10000,5000,'Gạo lứt sấy giòn',36,'2019-08-18 01:42:47','2019-08-18 01:42:47',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_product`
--

LOCK TABLES `size_product` WRITE;
/*!40000 ALTER TABLE `size_product` DISABLE KEYS */;
INSERT INTO `size_product` VALUES (1,5,1,NULL,NULL,'2019-08-11 01:59:18','2019-08-11 01:59:18',NULL),(2,6,1,NULL,NULL,'2019-08-11 01:59:28','2019-08-11 01:59:28',NULL),(3,5,1,NULL,NULL,'2019-08-11 02:01:02','2019-08-11 02:01:02',NULL),(4,5,1,NULL,NULL,'2019-08-11 02:03:53','2019-08-11 02:03:53',NULL),(5,5,1,NULL,NULL,'2019-08-11 02:04:10','2019-08-11 02:04:10',NULL),(6,5,1,NULL,NULL,'2019-08-11 02:05:00','2019-08-11 02:05:00',NULL),(7,5,1,NULL,NULL,'2019-08-11 02:07:12','2019-08-11 02:07:12',NULL),(8,5,1,NULL,NULL,'2019-08-11 02:07:31','2019-08-11 02:07:31',NULL),(9,5,1,NULL,NULL,'2019-08-11 02:07:37','2019-08-11 02:07:37',NULL),(10,5,1,NULL,NULL,'2019-08-11 02:09:33','2019-08-11 02:09:33',NULL),(11,5,1,NULL,NULL,'2019-08-11 02:11:12','2019-08-11 02:11:12',NULL),(12,5,1,NULL,NULL,'2019-08-11 02:14:27','2019-08-11 02:14:27',NULL),(13,5,1,NULL,NULL,'2019-08-11 02:29:06','2019-08-11 02:29:06',NULL),(14,5,1,NULL,NULL,'2019-08-11 02:29:55','2019-08-11 02:29:55',NULL),(15,5,1,NULL,NULL,'2019-08-11 02:33:14','2019-08-11 02:33:14',NULL),(16,5,1,NULL,NULL,'2019-08-11 02:34:55','2019-08-11 02:34:55',NULL),(17,5,1,NULL,NULL,'2019-08-11 02:46:06','2019-08-11 02:46:06',NULL),(18,5,1,NULL,NULL,'2019-08-11 02:48:17','2019-08-11 02:48:17',NULL),(19,5,1,'10000',NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22',NULL),(20,5,2,'10000',NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00',NULL),(21,6,1,'10000',NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50',NULL),(22,5,1,'100000',NULL,'2019-08-17 08:00:33','2019-08-17 08:00:33',NULL),(23,8,1,'10000',NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17',NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `size_product_material`
--

LOCK TABLES `size_product_material` WRITE;
/*!40000 ALTER TABLE `size_product_material` DISABLE KEYS */;
INSERT INTO `size_product_material` VALUES (1,NULL,NULL,NULL,NULL,19,5,1,1,1,NULL,NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22'),(2,NULL,NULL,NULL,NULL,19,5,1,2,2,NULL,NULL,'2019-08-12 09:26:22','2019-08-12 09:26:22'),(3,NULL,NULL,NULL,NULL,20,5,2,1,1,NULL,NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00'),(4,NULL,NULL,NULL,NULL,20,5,2,2,2,NULL,NULL,'2019-08-12 09:28:00','2019-08-12 09:28:00'),(5,NULL,NULL,NULL,NULL,21,6,1,1,1,NULL,NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50'),(6,NULL,NULL,NULL,NULL,21,6,1,2,2,NULL,NULL,'2019-08-12 09:29:50','2019-08-12 09:29:50'),(7,18,NULL,6,1,23,8,1,1,6,NULL,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17'),(8,10,NULL,5,0,23,8,1,2,5,NULL,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17');
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `steps`
--

LOCK TABLES `steps` WRITE;
/*!40000 ALTER TABLE `steps` DISABLE KEYS */;
INSERT INTO `steps` VALUES (1,'trung binh duong',0,8,1,1,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17'),(2,'trung binh duong',6,8,1,1,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17'),(3,'nhieu duong',12,8,1,1,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17'),(4,'rat nhieu duong',18,8,1,1,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17'),(5,'trung binh duong',0,8,2,1,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17'),(6,'trung binh duong',5,8,2,1,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17'),(7,'trung binh duong',10,8,2,1,NULL,'2019-08-18 01:05:17','2019-08-18 01:05:17');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toppings`
--

LOCK TABLES `toppings` WRITE;
/*!40000 ALTER TABLE `toppings` DISABLE KEYS */;
INSERT INTO `toppings` VALUES (1,'Espresso (1shot)','10000',1,'2019-08-11 01:39:27','2019-08-11 01:39:27',NULL),(2,'Sauce Chocolate','10000',1,'2019-08-11 01:42:11','2019-08-17 23:47:36',NULL),(3,'Trân châu trắng','10000',1,'2019-08-11 01:42:37','2019-08-17 23:48:25',NULL),(4,'Trân châu đen','10000',1,'2019-08-17 23:48:49','2019-08-17 23:48:49',NULL),(5,'Đào ngâm','10000',1,'2019-08-17 23:49:24','2019-08-17 23:49:24',NULL),(6,'Vải ngâm','10000',1,'2019-08-17 23:49:45','2019-08-17 23:49:45',NULL);
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

-- Dump completed on 2019-08-19 14:59:52
