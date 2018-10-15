-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB

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
-- Current Database: `cocorico`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `cocorico` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `cocorico`;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` smallint(6) NOT NULL,
  `validated` tinyint(1) NOT NULL,
  `amount` decimal(8,0) NOT NULL,
  `amount_fee_as_asker` decimal(8,0) NOT NULL,
  `amount_fee_as_offerer` decimal(8,0) NOT NULL,
  `amount_total` decimal(8,0) NOT NULL,
  `cancellation_policy` smallint(6) NOT NULL,
  `new_booking_at` datetime DEFAULT NULL,
  `payed_booking_at` datetime DEFAULT NULL,
  `refused_booking_at` datetime DEFAULT NULL,
  `canceled_asker_booking_at` datetime DEFAULT NULL,
  `alerted_expiring` tinyint(1) NOT NULL,
  `alerted_imminent` tinyint(1) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E00CEDDEA76ED395` (`user_id`),
  KEY `IDX_E00CEDDED4619D1A` (`listing_id`),
  KEY `start_idx` (`start`),
  KEY `end_idx` (`end`),
  KEY `start_time_idx` (`start_time`),
  KEY `end_time_idx` (`end_time`),
  KEY `status_idx` (`status`),
  KEY `validated_idx` (`validated`),
  KEY `new_booking_at_idx` (`new_booking_at`),
  KEY `alerted_expiring_idx` (`alerted_expiring`),
  KEY `alerted_imminent_idx` (`alerted_imminent`),
  KEY `created_at_idx` (`createdAt`),
  KEY `updated_at_idx` (`updatedAt`),
  CONSTRAINT `FK_E00CEDDEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E00CEDDED4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (115286456,471015005,708573537,'2018-09-16 00:00:00','2018-09-16 00:00:00','1970-01-01 04:00:00','1970-01-01 05:00:00',1,0,500,600,600,600,1,'2018-09-14 12:36:57',NULL,NULL,NULL,0,0,'test','2018-09-14 12:36:57','2018-09-14 12:36:57'),(169514006,471015005,708573537,'2018-09-15 00:00:00','2018-09-15 00:00:00','1970-01-01 21:00:00','1970-01-01 22:00:00',1,0,500,600,600,600,1,'2018-09-14 05:54:32',NULL,NULL,NULL,0,0,'test','2018-09-14 05:54:32','2018-09-14 05:54:32'),(1731874161,471015005,708573537,'2018-09-15 00:00:00','2018-09-15 00:00:00','1970-01-01 02:00:00','1970-01-01 03:00:00',1,0,500,600,600,600,1,'2018-09-14 10:19:09',NULL,NULL,NULL,0,0,'test','2018-09-14 10:19:09','2018-09-14 10:19:09'),(1820473358,471015005,708573537,'2018-09-17 00:00:00','2018-09-17 00:00:00','1970-01-01 07:00:00','1970-01-01 08:00:00',1,0,500,600,600,600,1,'2018-09-15 16:09:04',NULL,NULL,NULL,0,0,'test','2018-09-15 16:09:04','2018-09-15 16:09:04'),(1868862051,471015005,708573537,'2018-09-15 00:00:00','2018-09-15 00:00:00','1970-01-01 02:00:00','1970-01-01 03:00:00',1,0,500,600,600,600,1,'2018-09-14 10:45:00',NULL,NULL,NULL,0,0,'test','2018-09-14 10:45:00','2018-09-14 10:45:00'),(1910078426,471015005,708573537,'2018-09-17 00:00:00','2018-09-17 00:00:00','1970-01-01 07:00:00','1970-01-01 08:00:00',1,0,500,600,600,600,1,'2018-09-15 16:11:28',NULL,NULL,NULL,0,0,'test','2018-09-15 16:11:28','2018-09-15 16:11:28');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_bank_wire`
--

DROP TABLE IF EXISTS `booking_bank_wire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking_bank_wire` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `amount` decimal(8,0) NOT NULL,
  `payed_at` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8929A0B83301C60` (`booking_id`),
  KEY `IDX_8929A0B8A76ED395` (`user_id`),
  KEY `status_bbw_idx` (`status`),
  KEY `created_at_bbw_idx` (`createdAt`),
  CONSTRAINT `FK_8929A0B83301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8929A0B8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_bank_wire`
--

LOCK TABLES `booking_bank_wire` WRITE;
/*!40000 ALTER TABLE `booking_bank_wire` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking_bank_wire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_payin_refund`
--

DROP TABLE IF EXISTS `booking_payin_refund`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking_payin_refund` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `amount` decimal(8,0) NOT NULL,
  `payed_at` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2CD4E82D3301C60` (`booking_id`),
  KEY `IDX_2CD4E82DA76ED395` (`user_id`),
  KEY `status_pr_idx` (`status`),
  KEY `created_at_pr_idx` (`createdAt`),
  CONSTRAINT `FK_2CD4E82D3301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2CD4E82DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_payin_refund`
--

LOCK TABLES `booking_payin_refund` WRITE;
/*!40000 ALTER TABLE `booking_payin_refund` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking_payin_refund` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking_user_address`
--

DROP TABLE IF EXISTS `booking_user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `booking_user_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B7DC90443301C60` (`booking_id`),
  CONSTRAINT `FK_B7DC90443301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking_user_address`
--

LOCK TABLES `booking_user_address` WRITE;
/*!40000 ALTER TABLE `booking_user_address` DISABLE KEYS */;
INSERT INTO `booking_user_address` VALUES (3,1131943635,'test address','Paris','75001','FR','2018-09-13 04:52:09','2018-09-13 04:52:09'),(4,618602271,'test address','Paris','75001','FR','2018-09-13 05:29:56','2018-09-13 05:29:56'),(5,249577815,'test address','Paris','75001','FR','2018-09-13 05:34:34','2018-09-13 05:34:34'),(6,1450912841,'test address','Paris','75001','FR','2018-09-13 05:44:03','2018-09-13 05:44:03'),(7,1390046178,'test address','Paris','75001','FR','2018-09-13 05:46:38','2018-09-13 05:46:38'),(8,2082313041,'test address','Paris','75001','FR','2018-09-13 06:12:34','2018-09-13 06:12:34'),(9,1356308259,'test address','Paris','75001','FR','2018-09-13 06:20:53','2018-09-13 06:20:53'),(10,196959165,'test address','Paris','75001','FR','2018-09-13 06:24:22','2018-09-13 06:24:22'),(11,966944258,'test address','Paris','75001','FR','2018-09-14 03:28:14','2018-09-14 03:28:14'),(12,1637455190,'test address','Paris','75001','FR','2018-09-14 04:19:03','2018-09-14 04:19:03'),(13,45722390,'test address','Paris','75001','FR','2018-09-14 04:20:16','2018-09-14 04:20:16'),(14,1108489302,'test address','Paris','75001','FR','2018-09-14 05:48:03','2018-09-14 05:48:03'),(15,429111531,'test address','Paris','75001','FR','2018-09-14 05:51:58','2018-09-14 05:51:58'),(16,169514006,'test address','Paris','75001','FR','2018-09-14 05:54:32','2018-09-14 05:54:32'),(17,1731874161,'test address','Paris','75001','FR','2018-09-14 10:19:09','2018-09-14 10:19:09'),(18,1868862051,'test address','Paris','75001','FR','2018-09-14 10:45:00','2018-09-14 10:45:00'),(19,115286456,'test address','Paris','75001','FR','2018-09-14 12:36:57','2018-09-14 12:36:57'),(20,1820473358,'test address','Paris','75001','FR','2018-09-15 16:09:04','2018-09-15 16:09:04'),(21,1910078426,'test address','Paris','75001','FR','2018-09-15 16:11:28','2018-09-15 16:11:28');
/*!40000 ALTER TABLE `booking_user_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_at_c_idx` (`createdAt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `footer_published_idx` (`published`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footer`
--

LOCK TABLES `footer` WRITE;
/*!40000 ALTER TABLE `footer` DISABLE KEYS */;
/*!40000 ALTER TABLE `footer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footer_translation`
--

DROP TABLE IF EXISTS `footer_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footer_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` bigint(20) DEFAULT NULL,
  `url` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `footer_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_439793442C2AC5D3` (`translatable_id`),
  KEY `footer_url_hash_idx` (`url_hash`),
  CONSTRAINT `FK_439793442C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `footer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footer_translation`
--

LOCK TABLES `footer_translation` WRITE;
/*!40000 ALTER TABLE `footer_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `footer_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_area`
--

DROP TABLE IF EXISTS `geo_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `geocoding_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D3B312683A405C9` (`geocoding_id`),
  KEY `IDX_D3B31268F92F3E70` (`country_id`),
  CONSTRAINT `FK_D3B312683A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_D3B31268F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_area`
--

LOCK TABLES `geo_area` WRITE;
/*!40000 ALTER TABLE `geo_area` DISABLE KEYS */;
INSERT INTO `geo_area` VALUES (2,2,3),(3,3,6);
/*!40000 ALTER TABLE `geo_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_area_translation`
--

DROP TABLE IF EXISTS `geo_area_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_area_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_area_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_7A5BDDAB2C2AC5D3` (`translatable_id`),
  KEY `name_gat_idx` (`name`),
  CONSTRAINT `FK_7A5BDDAB2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_area` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_area_translation`
--

LOCK TABLES `geo_area_translation` WRITE;
/*!40000 ALTER TABLE `geo_area_translation` DISABLE KEYS */;
INSERT INTO `geo_area_translation` VALUES (3,2,'Île-de-France','ile-de-france','en'),(4,2,'Île-de-France','ile-de-france','fr'),(5,3,'Harju maakond','harju-maakond','en'),(6,3,'Harju maakond','harju-maakond','ee');
/*!40000 ALTER TABLE `geo_area_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_city`
--

DROP TABLE IF EXISTS `geo_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `geocoding_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_297C2D343A405C9` (`geocoding_id`),
  KEY `IDX_297C2D34F92F3E70` (`country_id`),
  KEY `IDX_297C2D34BD0F409C` (`area_id`),
  KEY `IDX_297C2D34AE80F5DF` (`department_id`),
  CONSTRAINT `FK_297C2D343A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_297C2D34AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `geo_department` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_297C2D34BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `geo_area` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_297C2D34F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_city`
--

LOCK TABLES `geo_city` WRITE;
/*!40000 ALTER TABLE `geo_city` DISABLE KEYS */;
INSERT INTO `geo_city` VALUES (2,2,2,2,1),(3,3,3,3,5);
/*!40000 ALTER TABLE `geo_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_city_translation`
--

DROP TABLE IF EXISTS `geo_city_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_city_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_city_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_72D469D42C2AC5D3` (`translatable_id`),
  KEY `name_gct_idx` (`name`),
  CONSTRAINT `FK_72D469D42C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_city` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_city_translation`
--

LOCK TABLES `geo_city_translation` WRITE;
/*!40000 ALTER TABLE `geo_city_translation` DISABLE KEYS */;
INSERT INTO `geo_city_translation` VALUES (3,2,'Paris','paris','en'),(4,2,'Paris','paris','fr'),(5,3,'Tallinn','tallinn','en'),(6,3,'Tallinn','tallinn','ee');
/*!40000 ALTER TABLE `geo_city_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_coordinate`
--

DROP TABLE IF EXISTS `geo_coordinate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_coordinate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `lat` decimal(11,7) NOT NULL,
  `lng` decimal(11,7) NOT NULL,
  `zip` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B2E13D99F92F3E70` (`country_id`),
  KEY `IDX_B2E13D99BD0F409C` (`area_id`),
  KEY `IDX_B2E13D99AE80F5DF` (`department_id`),
  KEY `IDX_B2E13D998BAC62AF` (`city_id`),
  KEY `coordinate_idx` (`lat`,`lng`),
  CONSTRAINT `FK_B2E13D998BAC62AF` FOREIGN KEY (`city_id`) REFERENCES `geo_city` (`id`),
  CONSTRAINT `FK_B2E13D99AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `geo_department` (`id`),
  CONSTRAINT `FK_B2E13D99BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `geo_area` (`id`),
  CONSTRAINT `FK_B2E13D99F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_coordinate`
--

LOCK TABLES `geo_coordinate` WRITE;
/*!40000 ALTER TABLE `geo_coordinate` DISABLE KEYS */;
INSERT INTO `geo_coordinate` VALUES (2,2,2,2,2,48.8697174,2.3509855,'75002','Rue de la Lune','9','9 Rue de la Lune, 75002 Paris, France','2018-09-10 07:58:22','2018-09-10 07:58:22'),(3,3,3,3,3,59.4369415,24.7429300,'10123','Rataskaevu','7','Rataskaevu 7, 10123 Tallinn, Estonia','2018-09-16 02:09:39','2018-09-16 02:09:39');
/*!40000 ALTER TABLE `geo_coordinate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_country`
--

DROP TABLE IF EXISTS `geo_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `geocoding_id` int(11) DEFAULT NULL,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E46544643A405C9` (`geocoding_id`),
  KEY `code_idx` (`code`),
  CONSTRAINT `FK_E46544643A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_country`
--

LOCK TABLES `geo_country` WRITE;
/*!40000 ALTER TABLE `geo_country` DISABLE KEYS */;
INSERT INTO `geo_country` VALUES (2,4,'FR'),(3,7,'EE');
/*!40000 ALTER TABLE `geo_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_country_translation`
--

DROP TABLE IF EXISTS `geo_country_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_country_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_country_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_F705D5582C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_F705D5582C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_country_translation`
--

LOCK TABLES `geo_country_translation` WRITE;
/*!40000 ALTER TABLE `geo_country_translation` DISABLE KEYS */;
INSERT INTO `geo_country_translation` VALUES (3,2,'France','france','en'),(4,2,'France','france','fr'),(5,3,'Estonia','estonia','en'),(6,3,'Estonia','estonia','ee');
/*!40000 ALTER TABLE `geo_country_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_department`
--

DROP TABLE IF EXISTS `geo_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `geocoding_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B46066043A405C9` (`geocoding_id`),
  KEY `IDX_B4606604F92F3E70` (`country_id`),
  KEY `IDX_B4606604BD0F409C` (`area_id`),
  CONSTRAINT `FK_B46066043A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_B4606604BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `geo_area` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B4606604F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_department`
--

LOCK TABLES `geo_department` WRITE;
/*!40000 ALTER TABLE `geo_department` DISABLE KEYS */;
INSERT INTO `geo_department` VALUES (2,2,2,2),(3,3,3,NULL);
/*!40000 ALTER TABLE `geo_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_department_translation`
--

DROP TABLE IF EXISTS `geo_department_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_department_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_department_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_95DC05742C2AC5D3` (`translatable_id`),
  KEY `name_gdt_idx` (`name`),
  CONSTRAINT `FK_95DC05742C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_department` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_department_translation`
--

LOCK TABLES `geo_department_translation` WRITE;
/*!40000 ALTER TABLE `geo_department_translation` DISABLE KEYS */;
INSERT INTO `geo_department_translation` VALUES (3,2,'Paris','paris','en'),(4,2,'Paris','paris','fr'),(5,3,'nodepartment','nodepartment','en'),(6,3,'nodepartment','nodepartment','ee');
/*!40000 ALTER TABLE `geo_department_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geo_geocoding`
--

DROP TABLE IF EXISTS `geo_geocoding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geo_geocoding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` decimal(11,7) NOT NULL,
  `lng` decimal(11,7) NOT NULL,
  `viewport` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geo_geocoding`
--

LOCK TABLES `geo_geocoding` WRITE;
/*!40000 ALTER TABLE `geo_geocoding` DISABLE KEYS */;
INSERT INTO `geo_geocoding` VALUES (1,48.8566140,2.3522219,'((48.815573, 2.224199), (48.9021449, 2.4699208))','locality,political'),(2,48.8566140,2.3522219,'((48.815573, 2.224199), (48.9021449, 2.4699208))','locality,political'),(3,48.8499198,2.6370411,'((48.1200811, 1.4461699999999), (49.241504, 3.5590069))','administrative_area_level_1,political'),(4,46.2276380,2.2137490,'((41.31433, -5.5590999999999), (51.1241999, 9.6624999000001))','country,political'),(5,59.4369608,24.7535747,'((59.351809, 24.5501939), (59.591577, 24.926289))','locality,political'),(6,59.3334239,25.2466974,'((58.991798, 23.7299921), (59.700126, 25.9551167))','administrative_area_level_1,political'),(7,58.5952720,25.0136071,'((57.509316, 21.6540999), (59.7315, 28.2101389))','country,political');
/*!40000 ALTER TABLE `geo_geocoding` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6DC044C55E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lexik_currency`
--

DROP TABLE IF EXISTS `lexik_currency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lexik_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `rate` decimal(10,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lexik_currency`
--

LOCK TABLES `lexik_currency` WRITE;
/*!40000 ALTER TABLE `lexik_currency` DISABLE KEYS */;
INSERT INTO `lexik_currency` VALUES (9,'EUR',1.0000),(10,'USD',1.1615),(11,'JPY',128.7400),(12,'GBP',0.8928),(13,'CHF',1.1217),(14,'RUB',80.6765),(15,'AUD',1.6219),(16,'CAD',1.5238);
/*!40000 ALTER TABLE `lexik_currency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing`
--

DROP TABLE IF EXISTS `listing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `type` smallint(6) DEFAULT NULL,
  `price` decimal(8,0) NOT NULL,
  `certified` tinyint(1) DEFAULT NULL,
  `min_duration` smallint(6) DEFAULT NULL,
  `max_duration` smallint(6) DEFAULT NULL,
  `cancellation_policy` smallint(6) NOT NULL,
  `average_rating` smallint(6) DEFAULT NULL,
  `comment_count` int(11) DEFAULT NULL,
  `admin_notation` decimal(3,1) DEFAULT NULL,
  `availabilities_updated_at` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CB0048D464D218E` (`location_id`),
  KEY `IDX_CB0048D4A76ED395` (`user_id`),
  KEY `created_at_l_idx` (`createdAt`),
  KEY `status_l_idx` (`status`),
  KEY `price_idx` (`price`),
  KEY `type_idx` (`type`),
  KEY `min_duration_idx` (`min_duration`),
  KEY `max_duration_idx` (`max_duration`),
  KEY `average_rating_idx` (`average_rating`),
  KEY `admin_notation_idx` (`admin_notation`),
  CONSTRAINT `FK_CB0048D464D218E` FOREIGN KEY (`location_id`) REFERENCES `listing_location` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_CB0048D4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing`
--

LOCK TABLES `listing` WRITE;
/*!40000 ALTER TABLE `listing` DISABLE KEYS */;
INSERT INTO `listing` VALUES (319498002,1500702414,3,2,NULL,3000,NULL,1,7,1,NULL,0,NULL,NULL,'2018-09-16 02:09:39','2018-09-16 02:11:54'),(708573537,1500702414,2,2,NULL,4000,1,1,NULL,1,NULL,0,NULL,'2018-09-10 15:20:33','2018-09-10 07:58:22','2018-09-12 05:52:52'),(968803691,1500702414,4,2,NULL,5000,NULL,NULL,NULL,1,NULL,0,NULL,NULL,'2018-09-16 08:30:54','2018-09-16 08:30:54');
/*!40000 ALTER TABLE `listing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_category`
--

DROP TABLE IF EXISTS `listing_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E0307BBB727ACA70` (`parent_id`),
  CONSTRAINT `FK_E0307BBB727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `listing_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_category`
--

LOCK TABLES `listing_category` WRITE;
/*!40000 ALTER TABLE `listing_category` DISABLE KEYS */;
INSERT INTO `listing_category` VALUES (48,NULL,1,0,6,48),(49,48,2,1,3,48),(50,48,4,1,5,48),(51,NULL,1,0,8,51),(52,51,2,1,5,51),(53,52,3,2,4,51),(54,51,6,1,7,51);
/*!40000 ALTER TABLE `listing_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_category_translation`
--

DROP TABLE IF EXISTS `listing_category_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_category_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_category_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_606EDC1F2C2AC5D3` (`translatable_id`),
  KEY `name_idx` (`name`),
  CONSTRAINT `FK_606EDC1F2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_category_translation`
--

LOCK TABLES `listing_category_translation` WRITE;
/*!40000 ALTER TABLE `listing_category_translation` DISABLE KEYS */;
INSERT INTO `listing_category_translation` VALUES (95,48,'Plumbing','plumbing-95','en'),(96,48,'Plumbing','plumbing-96','fr'),(97,49,'Toilet Repair','toilet-repair-97','en'),(98,49,'Toilet Repair','toilet-repair-98','fr'),(99,50,'Category1_2','category1-2','en'),(100,50,'Categorie1_2','categorie1-2','fr'),(101,51,'Category2','category2','en'),(102,51,'Categorie2','categorie2','fr'),(103,52,'Category2_1','category2-1','en'),(104,52,'Categorie2_1','categorie2-1','fr'),(105,53,'Category2_1_1','category2-1-1','en'),(106,53,'Categorie2_1_1','categorie2-1-1','fr'),(107,54,'Category2_2','category2-2','en'),(108,54,'Categorie2_2','categorie2-2','fr');
/*!40000 ALTER TABLE `listing_category_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_characteristic`
--

DROP TABLE IF EXISTS `listing_characteristic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_characteristic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_characteristic_type_id` int(11) NOT NULL,
  `listing_characteristic_group_id` int(11) NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_97E210EC3A0F8087` (`listing_characteristic_type_id`),
  KEY `IDX_97E210ECE4714E36` (`listing_characteristic_group_id`),
  KEY `position_idx` (`position`),
  CONSTRAINT `FK_97E210EC3A0F8087` FOREIGN KEY (`listing_characteristic_type_id`) REFERENCES `listing_characteristic_type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_97E210ECE4714E36` FOREIGN KEY (`listing_characteristic_group_id`) REFERENCES `listing_characteristic_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_characteristic`
--

LOCK TABLES `listing_characteristic` WRITE;
/*!40000 ALTER TABLE `listing_characteristic` DISABLE KEYS */;
INSERT INTO `listing_characteristic` VALUES (5,4,3,1),(6,5,3,2),(7,6,4,3),(8,6,4,4);
/*!40000 ALTER TABLE `listing_characteristic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_characteristic_group`
--

DROP TABLE IF EXISTS `listing_characteristic_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_characteristic_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_62B4C3E4462CE4F5` (`position`),
  KEY `position_lcg_idx` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_characteristic_group`
--

LOCK TABLES `listing_characteristic_group` WRITE;
/*!40000 ALTER TABLE `listing_characteristic_group` DISABLE KEYS */;
INSERT INTO `listing_characteristic_group` VALUES (3,1),(4,2);
/*!40000 ALTER TABLE `listing_characteristic_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_characteristic_group_translation`
--

DROP TABLE IF EXISTS `listing_characteristic_group_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_characteristic_group_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_characteristic_group_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_6C8407162C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_6C8407162C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_characteristic_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_characteristic_group_translation`
--

LOCK TABLES `listing_characteristic_group_translation` WRITE;
/*!40000 ALTER TABLE `listing_characteristic_group_translation` DISABLE KEYS */;
INSERT INTO `listing_characteristic_group_translation` VALUES (5,3,'Rules','en'),(6,3,'Groupe_1','fr'),(7,4,'Additional Information','en'),(8,4,'Groupe_2','fr');
/*!40000 ALTER TABLE `listing_characteristic_group_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_characteristic_translation`
--

DROP TABLE IF EXISTS `listing_characteristic_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_characteristic_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_characteristic_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_945E8F882C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_945E8F882C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_characteristic` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_characteristic_translation`
--

LOCK TABLES `listing_characteristic_translation` WRITE;
/*!40000 ALTER TABLE `listing_characteristic_translation` DISABLE KEYS */;
INSERT INTO `listing_characteristic_translation` VALUES (9,5,'License','Do you have a license for this work','en'),(10,5,'Caractéristique_1','Description de la Caractéristique_1','fr'),(11,6,'How many','Characteristic_2 description','en'),(12,6,'Caractéristique_2','Description de la Caractéristique_2','fr'),(13,7,'Characteristic_3','Characteristic_3 description','en'),(14,7,'Caractéristique_3','Description de la Caractéristique_3','fr'),(15,8,'Characteristic_4','Characteristic_4 description','en'),(16,8,'Caractéristique_4','Description de la Caractéristique_4','fr');
/*!40000 ALTER TABLE `listing_characteristic_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_characteristic_type`
--

DROP TABLE IF EXISTS `listing_characteristic_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_characteristic_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_characteristic_type`
--

LOCK TABLES `listing_characteristic_type` WRITE;
/*!40000 ALTER TABLE `listing_characteristic_type` DISABLE KEYS */;
INSERT INTO `listing_characteristic_type` VALUES (4,'Yes/No'),(5,'Quantity'),(6,'Free for needy');
/*!40000 ALTER TABLE `listing_characteristic_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_characteristic_value`
--

DROP TABLE IF EXISTS `listing_characteristic_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_characteristic_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_characteristic_type_id` int(11) NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1203DF153A0F8087` (`listing_characteristic_type_id`),
  KEY `position_lcv_idx` (`position`),
  CONSTRAINT `FK_1203DF153A0F8087` FOREIGN KEY (`listing_characteristic_type_id`) REFERENCES `listing_characteristic_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_characteristic_value`
--

LOCK TABLES `listing_characteristic_value` WRITE;
/*!40000 ALTER TABLE `listing_characteristic_value` DISABLE KEYS */;
INSERT INTO `listing_characteristic_value` VALUES (8,4,1),(9,4,2),(10,5,1),(11,5,2),(12,5,3),(13,6,1),(14,6,2);
/*!40000 ALTER TABLE `listing_characteristic_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_characteristic_value_translation`
--

DROP TABLE IF EXISTS `listing_characteristic_value_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_characteristic_value_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_characteristic_value_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_8BC9A0F42C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_8BC9A0F42C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_characteristic_value` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_characteristic_value_translation`
--

LOCK TABLES `listing_characteristic_value_translation` WRITE;
/*!40000 ALTER TABLE `listing_characteristic_value_translation` DISABLE KEYS */;
INSERT INTO `listing_characteristic_value_translation` VALUES (15,8,'Yes','en'),(16,8,'Oui','fr'),(17,9,'No','en'),(18,9,'Non','fr'),(19,10,'1','en'),(20,10,'1','fr'),(21,11,'2','en'),(22,11,'2','fr'),(23,12,'3','en'),(24,12,'3','fr'),(25,13,'Custom value 1','en'),(26,13,'Valeur personnalisée 1','fr'),(27,14,'Custom value 2','en'),(28,14,'Valeur personnalisée 2','fr');
/*!40000 ALTER TABLE `listing_characteristic_value_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_discount`
--

DROP TABLE IF EXISTS `listing_discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `discount` smallint(6) NOT NULL,
  `from_quantity` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `discount_unique` (`listing_id`,`from_quantity`),
  KEY `IDX_79CD674D4619D1A` (`listing_id`),
  KEY `discount_idx` (`discount`),
  KEY `from_quantity_idx` (`from_quantity`),
  CONSTRAINT `FK_79CD674D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_discount`
--

LOCK TABLES `listing_discount` WRITE;
/*!40000 ALTER TABLE `listing_discount` DISABLE KEYS */;
/*!40000 ALTER TABLE `listing_discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_image`
--

DROP TABLE IF EXISTS `listing_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_33D3DCD3D4619D1A` (`listing_id`),
  KEY `position_li_idx` (`position`),
  CONSTRAINT `FK_33D3DCD3D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_image`
--

LOCK TABLES `listing_image` WRITE;
/*!40000 ALTER TABLE `listing_image` DISABLE KEYS */;
INSERT INTO `listing_image` VALUES (5,708573537,'b02299f137b72311a4a2841a37a52a901bea80b7.jpg',1),(6,319498002,'e215e5e0cb1ff256a1e56cee7a9562056ef92899.jpg',1),(7,968803691,'87dac47e622550e5d5a7ca5f28e54d92b1c51d18.jpeg',1);
/*!40000 ALTER TABLE `listing_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_listing_category`
--

DROP TABLE IF EXISTS `listing_listing_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_listing_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `listing_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1AFD54EAD4619D1A` (`listing_id`),
  KEY `IDX_1AFD54EA455844B0` (`listing_category_id`),
  CONSTRAINT `FK_1AFD54EA455844B0` FOREIGN KEY (`listing_category_id`) REFERENCES `listing_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1AFD54EAD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_listing_category`
--

LOCK TABLES `listing_listing_category` WRITE;
/*!40000 ALTER TABLE `listing_listing_category` DISABLE KEYS */;
INSERT INTO `listing_listing_category` VALUES (2,708573537,49),(3,708573537,53),(4,708573537,54),(5,319498002,50),(6,319498002,53),(7,968803691,49);
/*!40000 ALTER TABLE `listing_listing_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_listing_characteristic`
--

DROP TABLE IF EXISTS `listing_listing_characteristic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_listing_characteristic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `listing_characteristic_id` int(11) NOT NULL,
  `listing_characteristic_value_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2FD5B3B6D4619D1A` (`listing_id`),
  KEY `IDX_2FD5B3B6C27F7D66` (`listing_characteristic_id`),
  KEY `IDX_2FD5B3B6E3052CD3` (`listing_characteristic_value_id`),
  CONSTRAINT `FK_2FD5B3B6C27F7D66` FOREIGN KEY (`listing_characteristic_id`) REFERENCES `listing_characteristic` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FD5B3B6D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FD5B3B6E3052CD3` FOREIGN KEY (`listing_characteristic_value_id`) REFERENCES `listing_characteristic_value` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_listing_characteristic`
--

LOCK TABLES `listing_listing_characteristic` WRITE;
/*!40000 ALTER TABLE `listing_listing_characteristic` DISABLE KEYS */;
INSERT INTO `listing_listing_characteristic` VALUES (5,708573537,5,8),(6,708573537,6,11),(7,708573537,7,13),(8,708573537,8,10);
/*!40000 ALTER TABLE `listing_listing_characteristic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_location`
--

DROP TABLE IF EXISTS `listing_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `coordinate_id` int(11) NOT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B8E2EBB1D4619D1A` (`listing_id`),
  KEY `IDX_B8E2EBB198BBE953` (`coordinate_id`),
  CONSTRAINT `FK_B8E2EBB198BBE953` FOREIGN KEY (`coordinate_id`) REFERENCES `geo_coordinate` (`id`),
  CONSTRAINT `FK_B8E2EBB1D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_location`
--

LOCK TABLES `listing_location` WRITE;
/*!40000 ALTER TABLE `listing_location` DISABLE KEYS */;
INSERT INTO `listing_location` VALUES (2,708573537,2,'FR','Paris','75002','rue de la Lune','9'),(3,319498002,3,'EE','Tallinn','10123','Rataskaevu','7'),(4,968803691,3,'EE','Tallinn','10123','Rataskaevu','7');
/*!40000 ALTER TABLE `listing_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listing_translation`
--

DROP TABLE IF EXISTS `listing_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listing_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `rules` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_E3779C3D2C2AC5D3` (`translatable_id`),
  KEY `slug_idx` (`slug`),
  CONSTRAINT `FK_E3779C3D2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listing_translation`
--

LOCK TABLES `listing_translation` WRITE;
/*!40000 ALTER TABLE `listing_translation` DISABLE KEYS */;
INSERT INTO `listing_translation` VALUES (3,708573537,'Toilet Repair Listing','Listing One Description Toilet Repair Listing to test','No return','toilet-repair-listing-708573537','en'),(4,708573537,'Annonce une','Description de l\'annonce une',NULL,'annonce-une-708573537','fr'),(5,319498002,'I am good with electric repairing and services','This is test electrical repairing services',NULL,'i-am-good-with-electric-repairing-and-services-319498002','en'),(6,968803691,'I am good with different contracting','I am good with different contracting',NULL,'i-am-good-with-different-contracting-968803691','en');
/*!40000 ALTER TABLE `listing_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B6BD307FE2904019` (`thread_id`),
  KEY `IDX_B6BD307FF624B39D` (`sender_id`),
  CONSTRAINT `FK_B6BD307FE2904019` FOREIGN KEY (`thread_id`) REFERENCES `message_thread` (`id`),
  CONSTRAINT `FK_B6BD307FF624B39D` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (3,3,471015005,'test','2018-09-13 05:29:57'),(4,4,471015005,'wfasf','2018-09-13 05:44:03'),(5,5,471015005,'test','2018-09-13 05:46:38'),(6,6,471015005,'test','2018-09-13 06:20:54'),(7,7,471015005,'test','2018-09-13 06:24:22'),(8,8,471015005,'test','2018-09-14 03:28:14'),(9,9,471015005,'test','2018-09-14 04:19:03'),(10,10,471015005,'test','2018-09-14 04:20:16'),(11,11,471015005,'test','2018-09-14 05:48:03'),(12,12,471015005,'test','2018-09-14 05:51:59'),(13,13,471015005,'test','2018-09-14 05:54:33'),(14,14,471015005,'test','2018-09-14 10:19:09'),(15,15,471015005,'test','2018-09-14 10:45:00'),(16,16,471015005,'test','2018-09-14 12:36:59');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message_metadata`
--

DROP TABLE IF EXISTS `message_metadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) DEFAULT NULL,
  `participant_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4632F005537A1329` (`message_id`),
  KEY `IDX_4632F0059D1C3019` (`participant_id`),
  CONSTRAINT `FK_4632F005537A1329` FOREIGN KEY (`message_id`) REFERENCES `message` (`id`),
  CONSTRAINT `FK_4632F0059D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message_metadata`
--

LOCK TABLES `message_metadata` WRITE;
/*!40000 ALTER TABLE `message_metadata` DISABLE KEYS */;
INSERT INTO `message_metadata` VALUES (5,3,1500702414,0),(6,3,471015005,0),(7,4,1500702414,0),(8,4,471015005,0),(9,5,1500702414,0),(10,5,471015005,0),(11,6,1500702414,0),(12,6,471015005,0),(13,7,1500702414,0),(14,7,471015005,0),(15,8,1500702414,0),(16,8,471015005,0),(17,9,1500702414,0),(18,9,471015005,0),(19,10,1500702414,0),(20,10,471015005,0),(21,11,1500702414,0),(22,11,471015005,0),(23,12,1500702414,0),(24,12,471015005,0),(25,13,1500702414,0),(26,13,471015005,0),(27,14,1500702414,0),(28,14,471015005,0),(29,15,1500702414,0),(30,15,471015005,0),(31,16,1500702414,0),(32,16,471015005,0);
/*!40000 ALTER TABLE `message_metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message_thread`
--

DROP TABLE IF EXISTS `message_thread`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message_thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isSpam` tinyint(1) NOT NULL,
  `createdBy_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_607D18C3301C60` (`booking_id`),
  KEY `IDX_607D18C3174800F` (`createdBy_id`),
  KEY `IDX_607D18CD4619D1A` (`listing_id`),
  CONSTRAINT `FK_607D18C3174800F` FOREIGN KEY (`createdBy_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_607D18C3301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_607D18CD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message_thread`
--

LOCK TABLES `message_thread` WRITE;
/*!40000 ALTER TABLE `message_thread` DISABLE KEYS */;
INSERT INTO `message_thread` VALUES (3,708573537,618602271,'Toilet Repair Listing','2018-09-13 05:29:57',0,471015005),(4,708573537,1450912841,'Toilet Repair Listing','2018-09-13 05:44:03',0,471015005),(5,708573537,1390046178,'Toilet Repair Listing','2018-09-13 05:46:38',0,471015005),(6,708573537,1356308259,'Toilet Repair Listing','2018-09-13 06:20:54',0,471015005),(7,708573537,196959165,'Toilet Repair Listing','2018-09-13 06:24:22',0,471015005),(8,708573537,966944258,'Toilet Repair Listing','2018-09-14 03:28:14',0,471015005),(9,708573537,1637455190,'Toilet Repair Listing','2018-09-14 04:19:03',0,471015005),(10,708573537,45722390,'Toilet Repair Listing','2018-09-14 04:20:16',0,471015005),(11,708573537,1108489302,'Toilet Repair Listing','2018-09-14 05:48:03',0,471015005),(12,708573537,429111531,'Toilet Repair Listing','2018-09-14 05:51:59',0,471015005),(13,708573537,169514006,'Toilet Repair Listing','2018-09-14 05:54:33',0,471015005),(14,708573537,1731874161,'Toilet Repair Listing','2018-09-14 10:19:09',0,471015005),(15,708573537,1868862051,'Toilet Repair Listing','2018-09-14 10:45:00',0,471015005),(16,708573537,115286456,'Toilet Repair Listing','2018-09-14 12:36:59',0,471015005);
/*!40000 ALTER TABLE `message_thread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message_thread_metadata`
--

DROP TABLE IF EXISTS `message_thread_metadata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message_thread_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) DEFAULT NULL,
  `participant_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_participant_message_date` datetime DEFAULT NULL,
  `last_message_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_38FC293EE2904019` (`thread_id`),
  KEY `IDX_38FC293E9D1C3019` (`participant_id`),
  CONSTRAINT `FK_38FC293E9D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_38FC293EE2904019` FOREIGN KEY (`thread_id`) REFERENCES `message_thread` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message_thread_metadata`
--

LOCK TABLES `message_thread_metadata` WRITE;
/*!40000 ALTER TABLE `message_thread_metadata` DISABLE KEYS */;
INSERT INTO `message_thread_metadata` VALUES (5,3,1500702414,0,NULL,'2018-09-13 05:29:57'),(6,3,471015005,0,'2018-09-13 05:29:57',NULL),(7,4,1500702414,0,NULL,'2018-09-13 05:44:03'),(8,4,471015005,0,'2018-09-13 05:44:03',NULL),(9,5,1500702414,0,NULL,'2018-09-13 05:46:38'),(10,5,471015005,0,'2018-09-13 05:46:38',NULL),(11,6,1500702414,0,NULL,'2018-09-13 06:20:54'),(12,6,471015005,0,'2018-09-13 06:20:54',NULL),(13,7,1500702414,0,NULL,'2018-09-13 06:24:22'),(14,7,471015005,0,'2018-09-13 06:24:22',NULL),(15,8,1500702414,0,NULL,'2018-09-14 03:28:14'),(16,8,471015005,0,'2018-09-14 03:28:14',NULL),(17,9,1500702414,0,NULL,'2018-09-14 04:19:03'),(18,9,471015005,0,'2018-09-14 04:19:03',NULL),(19,10,1500702414,0,NULL,'2018-09-14 04:20:16'),(20,10,471015005,0,'2018-09-14 04:20:16',NULL),(21,11,1500702414,0,NULL,'2018-09-14 05:48:03'),(22,11,471015005,0,'2018-09-14 05:48:03',NULL),(23,12,1500702414,0,NULL,'2018-09-14 05:51:59'),(24,12,471015005,0,'2018-09-14 05:51:59',NULL),(25,13,1500702414,0,NULL,'2018-09-14 05:54:33'),(26,13,471015005,0,'2018-09-14 05:54:33',NULL),(27,14,1500702414,0,NULL,'2018-09-14 10:19:09'),(28,14,471015005,0,'2018-09-14 10:19:09',NULL),(29,15,1500702414,0,NULL,'2018-09-14 10:45:00'),(30,15,471015005,0,'2018-09-14 10:45:00',NULL),(31,16,1500702414,0,NULL,'2018-09-14 12:36:59'),(32,16,471015005,0,'2018-09-14 12:36:59',NULL);
/*!40000 ALTER TABLE `message_thread_metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `published_idx` (`published`),
  KEY `created_at_p_idx` (`createdAt`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (7,1,'2018-09-10 07:58:23','2018-09-10 07:58:23'),(8,1,'2018-09-10 07:58:23','2018-09-10 07:58:23'),(9,1,'2018-09-10 07:58:23','2018-09-10 07:58:23'),(10,1,'2018-09-10 07:58:23','2018-09-10 07:58:23'),(11,1,'2018-09-10 07:58:23','2018-09-10 07:58:23'),(12,1,'2018-09-10 07:58:23','2018-09-10 07:58:23');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_translation`
--

DROP TABLE IF EXISTS `page_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` bigint(20) DEFAULT NULL,
  `meta_title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_A3D51B1D2C2AC5D3` (`translatable_id`),
  KEY `slug_pt_idx` (`slug`),
  CONSTRAINT `FK_A3D51B1D2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `page` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_translation`
--

LOCK TABLES `page_translation` WRITE;
/*!40000 ALTER TABLE `page_translation` DISABLE KEYS */;
INSERT INTO `page_translation` VALUES (13,7,'Who we are?','in progress','Who we are?','<p dir=\"ltr\"><strong>KoduTeenus bringing new idea, technologies and solutions to not only Estonian but also other European countries.<br />\r\n<br />\r\nWe are going to provide a bridge to people to satisfying experience of home services by their neighbour. Our AI and elastic search will find exact task and providers matched in second.</strong></p>\r\n\r\n<p><strong>Fee logically nil, client get same or more amount discount coupons of other businesses.<br />\r\n<br />\r\nOur TaskProviders come from a wide variety of backgrounds, including young professionals, stay-at-home parents, retirees, students, and many others who want to help their neighbors while earning some extra money!<br />\r\n<br />\r\nThey are local entrepreneurs and independent contractors who work for themselves and are not employed by us. We simply provides the platform for Clients and provider to meet.<br />\r\n<br />\r\nEach provider go through an verification process before they can join our community, including an identity verification.<br />\r\n<br />\r\nWe will also provide discounted periodic subscription for home cleaning services.</strong></p>','who-we-are','en'),(14,7,'Qui sommes nous?','en cours','Qui sommes nous?','<p>Nous sommes Cocorico bien s&ucirc;r !</p>\r\n\r\n<h2>Qu&#39;est-ce que c&#39;est?</h2>\r\n\r\n<p>Cocorico est un projet open source d&eacute;di&eacute; &agrave; la r&eacute;alisation d&#39;une solution puissante (et gratuite) pour les places de march&eacute; collaboratives (ou pas &agrave; vrai dire).</p>\r\n\r\n<h2>Qui finance tout &ccedil;a ?</h2>\r\n\r\n<p><a href=\"http://www.cocolabs.io\" target=\"_blank\">Cocolabs</a>. Nous r&eacute;alisons des marketplaces pour de nombreuses entreprises &agrave; travers le monde et sommes les cr&eacute;teurs de Cocorico.&nbsp;</p>\r\n\r\n<h2>Qu&rsquo;utilisez-vous sur Cocorico ?</h2>\r\n\r\n<p>Cocorico utilise Symfony 2.</p>\r\n\r\n<h2>O&ugrave; puis-je l&rsquo;obtenir?</h2>\r\n\r\n<p>Ici : <a href=\"https://github.com/Cocolabs-SAS/cocorico\" target=\"_blank\">https://github.com/Cocolabs-SAS/cocorico</a></p>\r\n\r\n<h2>Avez-vous une mascotte ?</h2>\r\n\r\n<p>Voici une vid&eacute;o de &quot;Cocotte&quot;&nbsp;: http://<a href=\"http://cocorico.rocks/\">cocorico.rocks/</a></p>','qui-sommes-nous','fr'),(15,8,'How it works?','how it works','How it works?','<p>Home owners, offices or other people need many task to be done which are not possible without any expert&rsquo;s help. Like if need to fit a TV wall mount which need not only special equipment but also expertise to complete the task without any problem.&nbsp;</p>\r\n\r\n<p>At that time TaskTakers comes to our application to select a type of task they need to be done and select her locality to search TaskProviders. Application use AI and elastic power search to provide many verified TaskProviders in that locality along with map location and their details.&nbsp;</p>\r\n\r\n<p>We also provide discounted periodic subscription for home cleaning.</p>','how-it-works','en'),(16,8,'Comment ca marche?','en cours','Comment ca marche?','<p>en cours</p>','comment-ca-marche','fr'),(17,9,'The team','in progress','The team','in progress','the-team','en'),(18,9,'L\'équipe','en cours','L\'équipe','en cours','lequipe','fr'),(19,10,'FAQ','faq','FAQ','<p>Who are our client<br />\r\nTaskTakers<br />\r\n<br />\r\n<br />\r\n&nbsp; TaskProviders<br />\r\nPeople mainly home owners &amp;&nbsp;<br />\r\noffices. Who are looking for&nbsp;<br />\r\nsome services to be done by&nbsp;<br />\r\nservice provider from&nbsp;<br />\r\nneighbourhood<br />\r\nElectric &amp; furniture&nbsp;<br />\r\nrepairing, fitting,&nbsp;<br />\r\nplumbing, house &amp; lawn&nbsp;<br />\r\ncleaning, painting, lifting&nbsp;<br />\r\n&amp; moving heavy goods,&nbsp;<br />\r\nmounting &amp; installation,&nbsp;<br />\r\ngeneral services, home&nbsp;<br />\r\nimprovement, physiotherapy,&nbsp;<br />\r\nyoga teaching, &nbsp;helping aged&nbsp;<br />\r\npersons, gardening and&nbsp;<br />\r\nothers<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\nAny body who have time&nbsp;<br />\r\nand skills to do some&nbsp;<br />\r\nspecific type of task<br />\r\nThey are mainly from&nbsp;<br />\r\nneighbourhood<br />\r\nThey are ready to help&nbsp;<br />\r\nothers especially in&nbsp;<br />\r\nneighbouhood&nbsp;<br />\r\nAnd earn money by&nbsp;<br />\r\nhelping others in his&nbsp;<br />\r\nown locality mainlySteps in application &ndash; TaskTakers&nbsp;<br />\r\neg.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\nHome owner need to clean&nbsp;<br />\r\nrooftop<br />\r\nComes to application<br />\r\nSelect service type<br />\r\nSelect place<br />\r\nDate &amp; time&nbsp;<br />\r\nSelect for how many hour&nbsp;<br />\r\nneeded<br />\r\nSearch will show&nbsp;<br />\r\nproviders in maps&nbsp;<br />\r\nAlso it will show&nbsp;<br />\r\nproviders in right tab<br />\r\nAfter selecting by&nbsp;<br />\r\nclicking on one of the&nbsp;<br />\r\nprovider<br />\r\nIt will show more details&nbsp;<br />\r\npage of that provider<br />\r\nIt will show the map and&nbsp;<br />\r\ncalendar<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\nAlso show the Fee both&nbsp;<br />\r\nstrict and flexible&nbsp;<br />\r\nClick on Book now<br />\r\nIt will ask to login or&nbsp;<br />\r\nregister if not already<br />\r\nAfter login it will&nbsp;<br />\r\ncomplete the payment of&nbsp;<br />\r\nFee<br />\r\nAlso select discount&nbsp;<br />\r\ncoupon<br />\r\nHe will get the contact&nbsp;<br />\r\ndetails when provider&nbsp;<br />\r\nagreed<br />\r\nAlso client will get a&nbsp;<br />\r\nsecret token. Which&nbsp;<br />\r\nprovider need this to&nbsp;<br />\r\nupdate us to prove he has&nbsp;<br />\r\ndone.Step in application &ndash; TaskProviders&nbsp;<br />\r\neg.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\nTaskProvider need to register with details and &nbsp;&euro; 20&nbsp;<br />\r\ncaution money + verification charge<br />\r\nWe will verify with his ID and confirm the listing for&nbsp;<br />\r\nspecific area<br />\r\nEvery provider will get a verification ID from&nbsp;<br />\r\nKoduTeenus. Also plan to provide a company Tshirt Free&nbsp;<br />\r\nof cost later&nbsp;<br />\r\nWe will send TaskTaker&rsquo;s request to selcted providers&nbsp;<br />\r\nfor agreed<br />\r\nWho will agreed first by paying our Fee<br />\r\nThen he will get the contact details of client<br />\r\nAfter done his task. He need to take secret token from&nbsp;<br />\r\nclient and update to app. Otherwise application will&nbsp;<br />\r\nthink he has not done his task and deduct caution money<br />\r\nWe will take the feed back from TaskTakers as well<br />\r\nBased on reviews TaskProviders will get the listing&nbsp;<br />\r\npriority with other metrics eg. How many sucessful&nbsp;<br />\r\ntransaction done etc</p>','faq','en'),(20,10,'FAQ','en cours','FAQ','<p>en cours</p>','faq','fr'),(21,11,'Legal notices','in progress','Legal notices','in progress','legal-notices','en'),(22,11,'Mentions légales','en cours','Mentions légales','en cours','mentions-legales','fr'),(23,12,'Terms of use','in progress','Terms of use','in progress','terms-of-use','en'),(24,12,'Conditions générales d\'utilisation','en cours','Conditions générales d\'utilisation','en cours','conditions-generales-dutilisation','fr');
/*!40000 ALTER TABLE `page_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parameter`
--

DROP TABLE IF EXISTS `parameter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parameter` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2A9791105E237E06` (`name`),
  KEY `value_idx` (`value`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parameter`
--

LOCK TABLES `parameter` WRITE;
/*!40000 ALTER TABLE `parameter` DISABLE KEYS */;
INSERT INTO `parameter` VALUES (3,'cocorico.fee_as_asker','0.00','%'),(4,'cocorico.fee_as_offerer','0.00','%'),(5,'cocorico.fee_general','5.00','');
/*!40000 ALTER TABLE `parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parameter_audit`
--

DROP TABLE IF EXISTS `parameter_audit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parameter_audit` (
  `id` bigint(20) NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parameter_audit`
--

LOCK TABLES `parameter_audit` WRITE;
/*!40000 ALTER TABLE `parameter_audit` DISABLE KEYS */;
/*!40000 ALTER TABLE `parameter_audit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `review` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `review_by` int(11) NOT NULL,
  `review_to` int(11) NOT NULL,
  `rating` smallint(6) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_794381C63301C60` (`booking_id`),
  KEY `IDX_794381C6BEDC2389` (`review_by`),
  KEY `IDX_794381C65690230F` (`review_to`),
  KEY `created_at_r_idx` (`createdAt`),
  CONSTRAINT `FK_794381C63301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_794381C65690230F` FOREIGN KEY (`review_to`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_794381C6BEDC2389` FOREIGN KEY (`review_by`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `review`
--

LOCK TABLES `review` WRITE;
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `revisions`
--

DROP TABLE IF EXISTS `revisions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `revisions`
--

LOCK TABLES `revisions` WRITE;
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
INSERT INTO `revisions` VALUES (1,'2018-09-06 12:00:59',''),(2,'2018-09-09 16:27:01','super-admin@cocorico.rocks'),(3,'2018-09-09 16:27:25','super-admin@cocorico.rocks'),(4,'2018-09-10 07:58:23',''),(5,'2018-09-10 14:59:41','super-admin@cocorico.rocks'),(6,'2018-09-10 15:00:12','super-admin@cocorico.rocks'),(7,'2018-09-10 15:28:36','super-admin@cocorico.rocks'),(8,'2018-09-10 15:29:00','super-admin@cocorico.rocks');
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_prefix` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_of_residence` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profession` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iban` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bic` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_owner_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_owner_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annual_income` decimal(10,2) DEFAULT NULL,
  `phone_verified` tinyint(1) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `id_card_verified` tinyint(1) DEFAULT NULL,
  `nb_bookings_offerer` smallint(6) DEFAULT NULL,
  `nb_bookings_asker` smallint(6) DEFAULT NULL,
  `fee_as_asker` smallint(6) DEFAULT NULL,
  `fee_as_offerer` smallint(6) DEFAULT NULL,
  `average_rating_as_asker` smallint(6) DEFAULT NULL,
  `average_rating_as_offerer` smallint(6) DEFAULT NULL,
  `mother_tongue` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer_delay` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  KEY `created_at_u_idx` (`createdAt`),
  KEY `slug_u_idx` (`slug`),
  KEY `enabled_idx` (`enabled`),
  KEY `email_idx` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (471015005,'asker@koduteenus.online','asker@koduteenus.online','asker@koduteenus.online','asker@koduteenus.online',1,'979sps3dk3s4kgw80oo4ok4w8cko4w8','gC1uzQfHBSWSnQ1a10ISVyogcPDb3dcpQ3oqK5B5BbDgzbvW+acqZX3/B/jO9EjPqe68OiKClfz20EVyy0XerA==','2018-09-16 08:31:35',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'AskerName','AskerFirstName','+33',NULL,'1975-08-27','FR','FR',NULL,NULL,NULL,NULL,NULL,1000.00,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'en',NULL,'askerfirstname-471015005','2018-09-10 07:58:21','2018-09-16 08:31:35'),(499845420,'super-admin@koduteenus.online','super-admin@koduteenus.online','super-admin@koduteenus.online','super-admin@koduteenus.online',1,'srde2aw0u9wgkg8skksos0gook8g4ck','B5eV4JxfG3eqgtmsAjSlI6uWjgoW293haxLS50+Po/e0QazxU1YVrjcTgKvBIa3oaR4I087BhwOXMzptXMQQLw==','2018-09-17 13:16:01',0,0,NULL,NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',0,NULL,'super-admin','super-admin','+33',NULL,'1978-07-01','FR','FR',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'et',NULL,'super-admin-499845420','2018-09-10 07:58:21','2018-09-17 13:16:01'),(1500702414,'offerer@koduteenus.online','offerer@koduteenus.online','offerer@koduteenus.online','offerer@koduteenus.online',1,'crhj90d6vlcs0cc08gc0ow080wwswcs','NgH+HsJzwLrFpRHpXTZ2dSKgbZFVrGFUVNP4UUIHTuyQFFXytG348l/Jk3SYcUFww6Dve0Vzw8zdrIbG6ICPwg==','2018-09-16 08:27:15',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'OffererName','OffererFirstName','+370','4324234','1973-05-29','FR','FR',NULL,NULL,NULL,NULL,NULL,1000.00,0,1,0,NULL,NULL,NULL,0,NULL,NULL,'en',NULL,'offererfirstname-1500702414','2018-09-10 07:58:21','2018-09-16 08:27:15'),(1778790455,'disableuser@koduteenus.online','disableuser@koduteenus.online','disableuser@koduteenus.online','disableuser@koduteenus.online',0,'q5tdotsba9wgc480goo0ckcskcg4s8g','WgAPY1aD87NUgPBow9GjX76jiWBDGR90cCr9jn4ZnV/kU71BtpKDYpL52/04yRPr1ALgSBnmpmdSSiCcQ7ARfg==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'DisableUserLastName','DisableUserFirstName','+33',NULL,'1978-08-27','FR','FR',NULL,NULL,NULL,NULL,NULL,1000.00,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,'en',NULL,'disableuserfirstname','2018-09-10 07:58:21','2018-09-10 07:58:21');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL DEFAULT '1',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5543718BA76ED395` (`user_id`),
  KEY `user_address_type_idx` (`type`),
  CONSTRAINT `FK_5543718BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_address`
--

LOCK TABLES `user_address` WRITE;
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
INSERT INTO `user_address` VALUES (1,1500702414,1,'Rue de Rivoli','Paris','75001','FR','2018-09-10 14:42:27','2018-09-10 14:42:27'),(2,1500702414,2,NULL,NULL,NULL,'FR','2018-09-10 14:42:27','2018-09-10 14:42:27'),(3,471015005,2,'test address','Paris','75001','FR','2018-09-13 03:31:45','2018-09-13 03:31:45'),(4,471015005,1,'test address','Paris','75001','FR','2018-09-13 03:31:45','2018-09-13 03:31:45');
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_facebook`
--

DROP TABLE IF EXISTS `user_facebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_facebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `facebook_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hometown` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hometown_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nb_friends` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8BF92CE0A76ED395` (`user_id`),
  KEY `facebook_id_idx` (`facebook_id`),
  CONSTRAINT `FK_8BF92CE0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_facebook`
--

LOCK TABLES `user_facebook` WRITE;
/*!40000 ALTER TABLE `user_facebook` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_facebook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_8F02BF9DA76ED395` (`user_id`),
  KEY `IDX_8F02BF9DFE54D947` (`group_id`),
  CONSTRAINT `FK_8F02BF9DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8F02BF9DFE54D947` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group`
--

LOCK TABLES `user_group` WRITE;
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_image`
--

DROP TABLE IF EXISTS `user_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_27FFFF07A76ED395` (`user_id`),
  KEY `position_u_idx` (`position`),
  CONSTRAINT `FK_27FFFF07A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_image`
--

LOCK TABLES `user_image` WRITE;
/*!40000 ALTER TABLE `user_image` DISABLE KEYS */;
INSERT INTO `user_image` VALUES (2,1500702414,'412aff4e23912303fe541d5f10eb2335a8abb16f.jpg',1),(4,471015005,'ce3014773ca028b33b0440d80876110ae8af5897.jpg',1);
/*!40000 ALTER TABLE `user_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_language`
--

DROP TABLE IF EXISTS `user_language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_345695B5A76ED395` (`user_id`),
  CONSTRAINT `FK_345695B5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_language`
--

LOCK TABLES `user_language` WRITE;
/*!40000 ALTER TABLE `user_language` DISABLE KEYS */;
INSERT INTO `user_language` VALUES (1,1500702414,'en'),(2,1500702414,'fr'),(3,471015005,'en');
/*!40000 ALTER TABLE `user_language` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_translation`
--

DROP TABLE IF EXISTS `user_translation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_1D728CFA2C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_1D728CFA2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_translation`
--

LOCK TABLES `user_translation` WRITE;
/*!40000 ALTER TABLE `user_translation` DISABLE KEYS */;
INSERT INTO `user_translation` VALUES (1,1500702414,'I am a contractor','en'),(2,471015005,'I am seeking for help','en');
/*!40000 ALTER TABLE `user_translation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `test`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `test` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `test`;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-17 15:45:55
