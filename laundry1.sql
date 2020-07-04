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
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,322),(2,1,NULL,NULL,'Customers',2,19),(3,2,NULL,NULL,'index',3,4),(4,2,NULL,NULL,'view',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'delete',11,12),(8,2,NULL,NULL,'isAuthorized',13,14),(9,1,NULL,NULL,'Groups',20,35),(10,9,NULL,NULL,'index',21,22),(11,9,NULL,NULL,'view',23,24),(12,9,NULL,NULL,'add',25,26),(13,9,NULL,NULL,'edit',27,28),(14,9,NULL,NULL,'delete',29,30),(15,9,NULL,NULL,'isAuthorized',31,32),(16,1,NULL,NULL,'Users',36,57),(17,16,NULL,NULL,'index',37,38),(18,16,NULL,NULL,'view',39,40),(19,16,NULL,NULL,'add',41,42),(20,16,NULL,NULL,'edit',43,44),(21,16,NULL,NULL,'delete',45,46),(22,16,NULL,NULL,'login',47,48),(23,16,NULL,NULL,'logout',49,50),(24,16,NULL,NULL,'isAuthorized',51,52),(25,1,NULL,NULL,'Conditions',58,73),(26,25,NULL,NULL,'index',59,60),(27,25,NULL,NULL,'view',61,62),(28,25,NULL,NULL,'add',63,64),(29,25,NULL,NULL,'edit',65,66),(30,25,NULL,NULL,'delete',67,68),(31,25,NULL,NULL,'isAuthorized',69,70),(32,1,NULL,NULL,'Pages',74,81),(33,32,NULL,NULL,'display',75,76),(34,32,NULL,NULL,'isAuthorized',77,78),(35,1,NULL,NULL,'Roles',82,97),(36,35,NULL,NULL,'index',83,84),(37,35,NULL,NULL,'view',85,86),(38,35,NULL,NULL,'add',87,88),(39,35,NULL,NULL,'edit',89,90),(40,35,NULL,NULL,'delete',91,92),(41,35,NULL,NULL,'isAuthorized',93,94),(42,1,NULL,NULL,'Items',98,117),(43,42,NULL,NULL,'index',99,100),(44,42,NULL,NULL,'view',101,102),(45,42,NULL,NULL,'add',103,104),(46,42,NULL,NULL,'edit',105,106),(47,42,NULL,NULL,'delete',107,108),(48,42,NULL,NULL,'isAuthorized',109,110),(49,1,NULL,NULL,'Prices',118,133),(50,49,NULL,NULL,'index',119,120),(51,49,NULL,NULL,'view',121,122),(52,49,NULL,NULL,'add',123,124),(53,49,NULL,NULL,'edit',125,126),(54,49,NULL,NULL,'delete',127,128),(55,49,NULL,NULL,'isAuthorized',129,130),(56,1,NULL,NULL,'Categories',134,149),(57,56,NULL,NULL,'index',135,136),(58,56,NULL,NULL,'view',137,138),(59,56,NULL,NULL,'add',139,140),(60,56,NULL,NULL,'edit',141,142),(61,56,NULL,NULL,'delete',143,144),(62,56,NULL,NULL,'isAuthorized',145,146),(63,1,NULL,NULL,'Payments',150,165),(64,63,NULL,NULL,'index',151,152),(65,63,NULL,NULL,'view',153,154),(66,63,NULL,NULL,'add',155,156),(67,63,NULL,NULL,'edit',157,158),(68,63,NULL,NULL,'delete',159,160),(69,63,NULL,NULL,'isAuthorized',161,162),(70,1,NULL,NULL,'LaundryRequests',166,185),(71,70,NULL,NULL,'index',167,168),(72,70,NULL,NULL,'view',169,170),(73,70,NULL,NULL,'add',171,172),(74,70,NULL,NULL,'edit',173,174),(75,70,NULL,NULL,'delete',175,176),(76,70,NULL,NULL,'isAuthorized',177,178),(77,1,NULL,NULL,'PaymentOptions',186,201),(78,77,NULL,NULL,'index',187,188),(79,77,NULL,NULL,'view',189,190),(80,77,NULL,NULL,'add',191,192),(81,77,NULL,NULL,'edit',193,194),(82,77,NULL,NULL,'delete',195,196),(83,77,NULL,NULL,'isAuthorized',197,198),(84,1,NULL,NULL,'Acl',202,203),(85,1,NULL,NULL,'AclManager',204,227),(86,85,NULL,NULL,'Acl',205,226),(87,86,NULL,NULL,'index',206,207),(88,86,NULL,NULL,'permissions',208,209),(89,86,NULL,NULL,'updateAcos',210,211),(90,86,NULL,NULL,'updateAros',212,213),(91,86,NULL,NULL,'revokePerms',214,215),(92,86,NULL,NULL,'drop',216,217),(93,86,NULL,NULL,'defaults',218,219),(94,86,NULL,NULL,'manageAro',220,221),(95,86,NULL,NULL,'isAuthorized',222,223),(96,1,NULL,NULL,'AdminLTE',228,229),(97,1,NULL,NULL,'DebugKit',230,265),(98,97,NULL,NULL,'Toolbar',231,234),(99,98,NULL,NULL,'clearCache',232,233),(100,97,NULL,NULL,'Panels',235,240),(101,100,NULL,NULL,'index',236,237),(102,100,NULL,NULL,'view',238,239),(103,97,NULL,NULL,'Composer',241,244),(104,103,NULL,NULL,'checkDependencies',242,243),(105,97,NULL,NULL,'MailPreview',245,252),(106,105,NULL,NULL,'index',246,247),(107,105,NULL,NULL,'sent',248,249),(108,105,NULL,NULL,'email',250,251),(109,97,NULL,NULL,'DebugKit',253,254),(110,97,NULL,NULL,'Requests',255,258),(111,110,NULL,NULL,'view',256,257),(112,97,NULL,NULL,'Dashboard',259,264),(113,112,NULL,NULL,'index',260,261),(114,112,NULL,NULL,'reset',262,263),(115,1,NULL,NULL,'Documents',266,301),(116,115,NULL,NULL,'Documents',267,282),(117,116,NULL,NULL,'index',268,269),(118,116,NULL,NULL,'view',270,271),(119,116,NULL,NULL,'add',272,273),(120,116,NULL,NULL,'edit',274,275),(121,116,NULL,NULL,'delete',276,277),(122,116,NULL,NULL,'isAuthorized',278,279),(123,115,NULL,NULL,'Categories',283,300),(124,123,NULL,NULL,'index',284,285),(125,123,NULL,NULL,'add',286,287),(126,123,NULL,NULL,'edit',288,289),(127,123,NULL,NULL,'delete',290,291),(128,123,NULL,NULL,'moveUp',292,293),(129,123,NULL,NULL,'moveDown',294,295),(130,123,NULL,NULL,'isAuthorized',296,297),(131,1,NULL,NULL,'Markdown',302,303),(132,1,NULL,NULL,'Migrations',304,305),(133,16,NULL,NULL,'welcome',53,54),(134,2,NULL,NULL,'check',15,16),(135,1,NULL,NULL,'LaundryRequestItems',306,321),(136,135,NULL,NULL,'index',307,308),(137,135,NULL,NULL,'view',309,310),(138,135,NULL,NULL,'add',311,312),(139,135,NULL,NULL,'edit',313,314),(140,135,NULL,NULL,'delete',315,316),(141,135,NULL,NULL,'isAuthorized',317,318),(142,42,NULL,NULL,'getItems',111,112),(143,42,NULL,NULL,'getItemsProperties',113,114),(144,70,NULL,NULL,'home',179,180),(145,70,NULL,NULL,'checkRequest',181,182),(146,2,NULL,NULL,'writeToPDF',17,18),(147,135,NULL,NULL,'writeToPDF',319,320),(148,9,NULL,NULL,'writeToPDF',33,34),(149,16,NULL,NULL,'writeToPDF',55,56),(150,25,NULL,NULL,'writeToPDF',71,72),(151,32,NULL,NULL,'writeToPDF',79,80),(152,35,NULL,NULL,'writeToPDF',95,96),(153,42,NULL,NULL,'writeToPDF',115,116),(154,49,NULL,NULL,'writeToPDF',131,132),(155,56,NULL,NULL,'writeToPDF',147,148),(156,63,NULL,NULL,'writeToPDF',163,164),(157,70,NULL,NULL,'writeToPDF',183,184),(158,77,NULL,NULL,'writeToPDF',199,200),(159,86,NULL,NULL,'writeToPDF',224,225),(160,116,NULL,NULL,'writeToPDF',280,281),(161,123,NULL,NULL,'writeToPDF',298,299);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Groups',1,NULL,1,6),(2,NULL,'Groups',2,NULL,7,12),(3,1,'Roles',1,NULL,2,5),(4,2,'Roles',2,NULL,8,11),(5,3,'Users',6,NULL,3,4),(6,4,'Users',7,NULL,9,10);
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,5,1,'1','1','1','1'),(2,1,1,'1','1','1','1'),(3,2,5,'1','1','1','1'),(4,2,134,'1','1','1','1'),(5,2,22,'1','1','1','1'),(6,2,23,'1','1','1','1'),(7,2,133,'1','1','1','1'),(8,2,66,'1','1','1','1'),(9,2,67,'1','1','1','1'),(10,2,72,'1','1','1','1'),(11,2,73,'1','1','1','1'),(12,2,74,'1','1','1','1'),(13,2,144,'1','1','1','1'),(14,2,145,'1','1','1','1'),(15,2,142,'1','1','1','1'),(16,2,143,'1','1','1','1');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laundry_request_items`
--

LOCK TABLES `laundry_request_items` WRITE;
/*!40000 ALTER TABLE `laundry_request_items` DISABLE KEYS */;
INSERT INTO `laundry_request_items` VALUES (1,1,4,4,'good','2020-06-29 08:43:25','2020-06-29 08:43:25'),(2,1,2,2,'good','2020-06-29 08:43:25','2020-06-29 08:43:25'),(3,1,3,3,'Red jean has loose button','2020-06-29 08:43:25','2020-06-29 08:43:25'),(4,2,2,2,'','2020-06-29 17:41:54','2020-06-29 17:41:54'),(5,3,2,2,'good','2020-06-30 08:08:41','2020-06-30 08:08:41'),(6,3,3,2,'good','2020-06-30 08:08:41','2020-06-30 08:08:41');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laundry_requests`
--

LOCK TABLES `laundry_requests` WRITE;
/*!40000 ALTER TABLE `laundry_requests` DISABLE KEYS */;
INSERT INTO `laundry_requests` VALUES (1,6,1,1,'2020-06-29 08:43:24','2020-06-30 00:55:58'),(2,6,1,NULL,'2020-06-29 17:41:54','2020-06-29 17:41:54'),(3,7,1,2,'2020-06-30 08:08:41','2020-06-30 08:09:13');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,1,1,1,3000,'2020-06-30 00:55:57','2020-06-30 00:55:57'),(2,3,1,1,800,'2020-06-30 08:09:12','2020-06-30 08:09:12');
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,1,1,'superadmin','$2y$10$qPNRQKmNYYs4kyDKI/QSeeodIhK0W8LoL8ck3vWK0/3HvmRYOUy96','Akinyemi Kemi','08176764909','kfadare@yahoo.co.uk','2020-06-27 06:49:48','2020-06-27 06:49:48'),(7,2,2,'laundry_staff','$2y$10$dHNuGrjKs.X1qBCW7ODT9uGodE05/wRtiI4ElRiHaoLfkDjSKstme','John Smith','0806000112233','johnsmith@test.test','2020-06-30 07:41:02','2020-06-30 07:41:02');
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

-- Dump completed on 2020-06-30  9:13:27
