-- MySQL dump 10.17  Distrib 10.3.20-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: laundry
-- ------------------------------------------------------
-- Server version	10.3.20-MariaDB-0ubuntu0.19.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,290),(2,1,NULL,NULL,'Customers',2,17),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,2,NULL,NULL,'isAuthorized',13,14),(9,1,NULL,NULL,'Groups',18,31),(10,9,NULL,NULL,'index',19,20),(11,9,NULL,NULL,'view',21,22),(12,9,NULL,NULL,'add',23,24),(13,9,NULL,NULL,'edit',25,26),(14,9,NULL,NULL,'delete',27,28),(15,9,NULL,NULL,'isAuthorized',29,30),(16,1,NULL,NULL,'Users',32,51),(17,16,NULL,NULL,'index',33,34),(18,16,NULL,NULL,'view',35,36),(19,16,NULL,NULL,'add',37,38),(20,16,NULL,NULL,'edit',39,40),(21,16,NULL,NULL,'delete',41,42),(22,16,NULL,NULL,'login',43,44),(23,16,NULL,NULL,'logout',45,46),(24,16,NULL,NULL,'isAuthorized',47,48),(25,1,NULL,NULL,'Conditions',52,65),(26,25,NULL,NULL,'index',53,54),(27,25,NULL,NULL,'view',55,56),(28,25,NULL,NULL,'add',57,58),(29,25,NULL,NULL,'edit',59,60),(30,25,NULL,NULL,'delete',61,62),(31,25,NULL,NULL,'isAuthorized',63,64),(32,1,NULL,NULL,'Pages',66,71),(33,32,NULL,NULL,'display',67,68),(34,32,NULL,NULL,'isAuthorized',69,70),(35,1,NULL,NULL,'Roles',72,85),(36,35,NULL,NULL,'index',73,74),(37,35,NULL,NULL,'view',75,76),(38,35,NULL,NULL,'add',77,78),(39,35,NULL,NULL,'edit',79,80),(40,35,NULL,NULL,'delete',81,82),(41,35,NULL,NULL,'isAuthorized',83,84),(42,1,NULL,NULL,'Items',86,103),(43,42,NULL,NULL,'index',87,88),(44,42,NULL,NULL,'view',89,90),(45,42,NULL,NULL,'add',91,92),(46,42,NULL,NULL,'edit',93,94),(47,42,NULL,NULL,'delete',95,96),(48,42,NULL,NULL,'isAuthorized',97,98),(49,1,NULL,NULL,'Prices',104,117),(50,49,NULL,NULL,'index',105,106),(51,49,NULL,NULL,'view',107,108),(52,49,NULL,NULL,'add',109,110),(53,49,NULL,NULL,'edit',111,112),(54,49,NULL,NULL,'delete',113,114),(55,49,NULL,NULL,'isAuthorized',115,116),(56,1,NULL,NULL,'Categories',118,131),(57,56,NULL,NULL,'index',119,120),(58,56,NULL,NULL,'view',121,122),(59,56,NULL,NULL,'add',123,124),(60,56,NULL,NULL,'edit',125,126),(61,56,NULL,NULL,'delete',127,128),(62,56,NULL,NULL,'isAuthorized',129,130),(63,1,NULL,NULL,'Payments',132,145),(64,63,NULL,NULL,'index',133,134),(65,63,NULL,NULL,'view',135,136),(66,63,NULL,NULL,'add',137,138),(67,63,NULL,NULL,'edit',139,140),(68,63,NULL,NULL,'delete',141,142),(69,63,NULL,NULL,'isAuthorized',143,144),(70,1,NULL,NULL,'LaundryRequests',146,163),(71,70,NULL,NULL,'index',147,148),(72,70,NULL,NULL,'view',149,150),(73,70,NULL,NULL,'add',151,152),(74,70,NULL,NULL,'edit',153,154),(75,70,NULL,NULL,'delete',155,156),(76,70,NULL,NULL,'isAuthorized',157,158),(77,1,NULL,NULL,'PaymentOptions',164,177),(78,77,NULL,NULL,'index',165,166),(79,77,NULL,NULL,'view',167,168),(80,77,NULL,NULL,'add',169,170),(81,77,NULL,NULL,'edit',171,172),(82,77,NULL,NULL,'delete',173,174),(83,77,NULL,NULL,'isAuthorized',175,176),(84,1,NULL,NULL,'Acl',178,179),(85,1,NULL,NULL,'AclManager',180,201),(86,85,NULL,NULL,'Acl',181,200),(87,86,NULL,NULL,'index',182,183),(88,86,NULL,NULL,'permissions',184,185),(89,86,NULL,NULL,'updateAcos',186,187),(90,86,NULL,NULL,'updateAros',188,189),(91,86,NULL,NULL,'revokePerms',190,191),(92,86,NULL,NULL,'drop',192,193),(93,86,NULL,NULL,'defaults',194,195),(94,86,NULL,NULL,'manageAro',196,197),(95,86,NULL,NULL,'isAuthorized',198,199),(96,1,NULL,NULL,'AdminLTE',202,203),(97,1,NULL,NULL,'DebugKit',204,239),(98,97,NULL,NULL,'Toolbar',205,208),(99,98,NULL,NULL,'clearCache',206,207),(100,97,NULL,NULL,'Panels',209,214),(101,100,NULL,NULL,'index',210,211),(102,100,NULL,NULL,'view',212,213),(103,97,NULL,NULL,'Composer',215,218),(104,103,NULL,NULL,'checkDependencies',216,217),(105,97,NULL,NULL,'MailPreview',219,226),(106,105,NULL,NULL,'index',220,221),(107,105,NULL,NULL,'sent',222,223),(108,105,NULL,NULL,'email',224,225),(109,97,NULL,NULL,'DebugKit',227,228),(110,97,NULL,NULL,'Requests',229,232),(111,110,NULL,NULL,'view',230,231),(112,97,NULL,NULL,'Dashboard',233,238),(113,112,NULL,NULL,'index',234,235),(114,112,NULL,NULL,'reset',236,237),(115,1,NULL,NULL,'Documents',240,271),(116,115,NULL,NULL,'Documents',241,254),(117,116,NULL,NULL,'index',242,243),(118,116,NULL,NULL,'view',244,245),(119,116,NULL,NULL,'add',246,247),(120,116,NULL,NULL,'edit',248,249),(121,116,NULL,NULL,'delete',250,251),(122,116,NULL,NULL,'isAuthorized',252,253),(123,115,NULL,NULL,'Categories',255,270),(124,123,NULL,NULL,'index',256,257),(125,123,NULL,NULL,'add',258,259),(126,123,NULL,NULL,'edit',260,261),(127,123,NULL,NULL,'delete',262,263),(128,123,NULL,NULL,'moveUp',264,265),(129,123,NULL,NULL,'moveDown',266,267),(130,123,NULL,NULL,'isAuthorized',268,269),(131,1,NULL,NULL,'Markdown',272,273),(132,1,NULL,NULL,'Migrations',274,275),(133,16,NULL,NULL,'welcome',49,50),(134,2,NULL,NULL,'check',15,16),(135,1,NULL,NULL,'LaundryRequestItems',276,289),(136,135,NULL,NULL,'index',277,278),(137,135,NULL,NULL,'view',279,280),(138,135,NULL,NULL,'add',281,282),(139,135,NULL,NULL,'edit',283,284),(140,135,NULL,NULL,'delete',285,286),(141,135,NULL,NULL,'isAuthorized',287,288),(142,42,NULL,NULL,'getItems',99,100),(143,42,NULL,NULL,'getItemsProperties',101,102),(144,70,NULL,NULL,'home',159,160),(145,70,NULL,NULL,'checkRequest',161,162);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lft` (`lft`,`rght`),
  KEY `alias` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Groups',1,NULL,1,6),(2,NULL,'Groups',2,NULL,7,10),(3,1,'Roles',1,NULL,2,5),(4,2,'Roles',2,NULL,8,9),(5,3,'Users',6,NULL,3,4);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aro_id` int(11) NOT NULL,
  `aco_id` int(11) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `aro_id` (`aro_id`,`aco_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,5,1,'1','1','1','1'),(2,1,1,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Male','Male Wears','2020-06-27 09:08:01','2020-06-27 09:08:01'),(2,'Female','Female Wears','2020-06-27 09:08:21','2020-06-27 09:08:21'),(3,'Household','Household Fabrics','2020-06-27 09:08:48','2020-06-27 09:08:48');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `wedding_anniversary` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_Unique_Phone_number` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Osanyinlokun Oladiipo Ernest','08161888116','donmode4u@gmail.com','osogbo','1993-06-10',NULL,'2020-06-27 10:16:25','2020-06-27 10:16:25');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Super Administrator','2020-06-27 06:47:25','2020-06-27 06:47:25'),(2,'Administrator','2020-06-27 06:47:34','2020-06-27 06:47:34');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,1,'Male Jeans','Male Jeans','2020-06-27 09:09:12','2020-06-27 09:10:14'),(2,1,'Male T-Shirt','Male T-Shirt','2020-06-27 09:09:31','2020-06-27 09:10:24'),(3,2,'Female Jeans','Female Jeans','2020-06-27 09:10:05','2020-06-27 09:10:05'),(4,3,'Cutton','Cutton','2020-06-27 09:10:44','2020-06-27 09:10:44');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laundry_request_items`
--

DROP TABLE IF EXISTS `laundry_request_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laundry_request_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `laundry_request_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `fabric_condition` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laundry_request_items`
--

LOCK TABLES `laundry_request_items` WRITE;
/*!40000 ALTER TABLE `laundry_request_items` DISABLE KEYS */;
INSERT INTO `laundry_request_items` VALUES (1,1,4,4,'good','2020-06-29 08:43:25','2020-06-29 08:43:25'),(2,1,2,2,'good','2020-06-29 08:43:25','2020-06-29 08:43:25'),(3,1,3,3,'Red jean has loose button','2020-06-29 08:43:25','2020-06-29 08:43:25'),(4,2,2,2,'','2020-06-29 17:41:54','2020-06-29 17:41:54');
/*!40000 ALTER TABLE `laundry_request_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laundry_requests`
--

DROP TABLE IF EXISTS `laundry_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laundry_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laundry_requests`
--

LOCK TABLES `laundry_requests` WRITE;
/*!40000 ALTER TABLE `laundry_requests` DISABLE KEYS */;
INSERT INTO `laundry_requests` VALUES (1,6,1,1,'2020-06-29 08:43:24','2020-06-30 00:55:58'),(2,6,1,NULL,'2020-06-29 17:41:54','2020-06-29 17:41:54');
/*!40000 ALTER TABLE `laundry_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_options`
--

DROP TABLE IF EXISTS `payment_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_options`
--

LOCK TABLES `payment_options` WRITE;
/*!40000 ALTER TABLE `payment_options` DISABLE KEYS */;
INSERT INTO `payment_options` VALUES (1,'Bank Transfer','Bank Transfer','2020-06-27 09:11:07','2020-06-27 09:11:07'),(2,'POS','POS','2020-06-27 09:11:16','2020-06-27 09:11:16'),(3,'Cash','Cash Deposit','2020-06-27 09:11:28','2020-06-27 09:11:28');
/*!40000 ALTER TABLE `payment_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `laundry_request_id` int(11) NOT NULL,
  `payment_option_id` int(11) NOT NULL,
  `full_payment` tinyint(1) DEFAULT 0,
  `amount` float NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,1,1,1,3000,'2020-06-30 00:55:57','2020-06-30 00:55:57');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `meta` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prices`
--

LOCK TABLES `prices` WRITE;
/*!40000 ALTER TABLE `prices` DISABLE KEYS */;
INSERT INTO `prices` VALUES (1,1,200,'','2020-06-27 09:12:23','2020-06-27 09:12:23'),(2,2,200,'','2020-06-27 09:12:33','2020-06-27 09:12:33'),(3,3,200,'','2020-06-27 09:13:04','2020-06-27 09:13:04'),(4,4,500,'','2020-06-27 09:13:52','2020-06-27 09:13:52');
/*!40000 ALTER TABLE `prices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,1,'Administrator','2020-06-27 06:47:53','2020-06-27 06:47:53'),(2,2,'Administrator','2020-06-27 06:48:05','2020-06-27 06:48:05');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `users_UNIQUE_PHONENUMBER` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,1,1,'superadmin','$2y$10$qPNRQKmNYYs4kyDKI/QSeeodIhK0W8LoL8ck3vWK0/3HvmRYOUy96','Akinyemi Kemi','08176764909','kfadare@yahoo.co.uk','2020-06-27 06:49:48','2020-06-27 06:49:48');
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

-- Dump completed on 2020-06-30  2:00:08
