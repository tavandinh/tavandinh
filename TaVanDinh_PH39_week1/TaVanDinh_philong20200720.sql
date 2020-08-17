-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: phi_long
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_id_UNIQUE` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_map`
--

DROP TABLE IF EXISTS `category_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_map` (
  `category_map_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `category_child_id` int(11) NOT NULL,
  PRIMARY KEY (`category_map_id`),
  UNIQUE KEY `category_map_id_UNIQUE` (`category_map_id`),
  KEY `category_id` (`category_id`),
  KEY `category_child_id` (`category_child_id`),
  CONSTRAINT `category_map_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  CONSTRAINT `category_map_ibfk_2` FOREIGN KEY (`category_child_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_map`
--

LOCK TABLES `category_map` WRITE;
/*!40000 ALTER TABLE `category_map` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `product_thumbail_img` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `product_maker_price` decimal(12,2) DEFAULT NULL,
  `product_price` decimal(12,2) NOT NULL,
  `product_detail` json DEFAULT NULL,
  `product_pr_html` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `product_maker_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `product_promotion_id` int(11) DEFAULT NULL,
  `product_code` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_child_category`
--

DROP TABLE IF EXISTS `product_child_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_child_category` (
  `product_child_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_child_category_id`),
  UNIQUE KEY `product_child_category_id_UNIQUE` (`product_child_category_id`),
  KEY `category_id` (`category_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_child_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  CONSTRAINT `product_child_category_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_child_category`
--

LOCK TABLES `product_child_category` WRITE;
/*!40000 ALTER TABLE `product_child_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_child_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_img`
--

DROP TABLE IF EXISTS `product_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_img` (
  `idproduct_img_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_img_order` int(11) NOT NULL,
  `product_img_name` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idproduct_img_id`),
  UNIQUE KEY `idproduct_img_id_UNIQUE` (`idproduct_img_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_img_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_img`
--

LOCK TABLES `product_img` WRITE;
/*!40000 ALTER TABLE `product_img` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_img` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_quantity`
--

DROP TABLE IF EXISTS `product_quantity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_quantity` (
  `product_quantity_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `product_quantity` int(11) NOT NULL,
  PRIMARY KEY (`product_quantity_id`),
  UNIQUE KEY `product_id_UNIQUE` (`product_id`),
  KEY `shop_id` (`shop_id`),
  CONSTRAINT `product_quantity_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  CONSTRAINT `product_quantity_ibfk_2` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`shop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_quantity`
--

LOCK TABLES `product_quantity` WRITE;
/*!40000 ALTER TABLE `product_quantity` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_quantity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_supporter`
--

DROP TABLE IF EXISTS `product_supporter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_supporter` (
  `product_supporter_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `supporter_id` int(11) NOT NULL,
  PRIMARY KEY (`product_supporter_id`),
  UNIQUE KEY `product_support_id_UNIQUE` (`product_supporter_id`),
  KEY `supporter_id` (`supporter_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_supporter_ibfk_1` FOREIGN KEY (`supporter_id`) REFERENCES `supporter` (`supporter_id`),
  CONSTRAINT `product_supporter_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_supporter`
--

LOCK TABLES `product_supporter` WRITE;
/*!40000 ALTER TABLE `product_supporter` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_supporter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `shop_city` varchar(45) COLLATE utf8_bin NOT NULL,
  `shop_address` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`shop_id`),
  UNIQUE KEY `shop_id_UNIQUE` (`shop_id`),
  UNIQUE KEY `shop_name_UNIQUE` (`shop_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supporter`
--

DROP TABLE IF EXISTS `supporter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `supporter` (
  `supporter_id` int(11) NOT NULL AUTO_INCREMENT,
  `supporter_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `support_phone` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`supporter_id`),
  UNIQUE KEY `supporter_id_UNIQUE` (`supporter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supporter`
--

LOCK TABLES `supporter` WRITE;
/*!40000 ALTER TABLE `supporter` DISABLE KEYS */;
/*!40000 ALTER TABLE `supporter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'phi_long'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-20  1:26:06
