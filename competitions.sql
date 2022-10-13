-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: competitions
-- ------------------------------------------------------
-- Server version	5.7.29

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
-- Table structure for table `championship`
--

DROP TABLE IF EXISTS `championship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `championship` (
  `championship_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `country_id` int(11) NOT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`championship_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `championship_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `championship`
--

LOCK TABLES `championship` WRITE;
/*!40000 ALTER TABLE `championship` DISABLE KEYS */;
INSERT INTO `championship` VALUES (1,'Australian Open',1,'2022-01-20','2022-01-31'),(2,'Wimbledon',4,'2020-06-01','2020-07-15'),(3,'Black Forest Open',5,'2007-02-10','2007-02-20'),(4,'Challenger de Granby',11,'2007-10-15','2007-11-15'),(5,'Lambertz Open',5,'2007-06-10','2007-06-20'),(6,'Garden Open',10,NULL,NULL),(7,'Challenger Eckental',5,NULL,NULL),(8,'Franken Challenge',5,NULL,NULL),(9,'Manchester Open',4,NULL,NULL),(10,'Guzzini Challenger',10,NULL,NULL),(11,'Israel Open',8,NULL,NULL),(14,'Epic Comp',8,'2001-08-09','2002-08-09');
/*!40000 ALTER TABLE `championship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `club`
--

DROP TABLE IF EXISTS `club`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `club` (
  `club_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club`
--

LOCK TABLES `club` WRITE;
/*!40000 ALTER TABLE `club` DISABLE KEYS */;
INSERT INTO `club` VALUES (1,'Aiken Tennis Club'),(2,'Westside Tennis Club'),(3,'Cromarty Tennis Club'),(4,'Northern Lawn Club'),(5,'Tuxedo Club'),(6,'Warwick Boat Club'),(7,'Club de Paris'),(8,'Queen Club'),(9,'Phoenix Country Club'),(10,'Oratory Tennis Club'),(11,'Torrent Club'),(12,'New Club'),(13,'changed name'),(14,'Epic Club 2'),(15,'Any Name'),(16,'Any Name 2'),(17,'New New Club');
/*!40000 ALTER TABLE `club` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `club_championship`
--

DROP TABLE IF EXISTS `club_championship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `club_championship` (
  `championship_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `join_day` date NOT NULL,
  PRIMARY KEY (`championship_id`,`club_id`),
  KEY `club_id` (`club_id`),
  CONSTRAINT `club_championship_ibfk_1` FOREIGN KEY (`championship_id`) REFERENCES `championship` (`championship_id`),
  CONSTRAINT `club_championship_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `club_championship`
--

LOCK TABLES `club_championship` WRITE;
/*!40000 ALTER TABLE `club_championship` DISABLE KEYS */;
INSERT INTO `club_championship` VALUES (1,1,'2021-12-01'),(1,6,'2022-01-01'),(1,8,'2022-01-13'),(1,10,'2021-12-31'),(4,5,'2007-10-11'),(4,7,'2007-09-30'),(4,8,'2009-07-30'),(5,7,'2006-06-06'),(10,6,'2023-05-12'),(10,8,'2022-07-08');
/*!40000 ALTER TABLE `club_championship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(3) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `country`
--

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
INSERT INTO `country` VALUES (1,'AUS'),(2,'ARG'),(3,'BRA'),(4,'GBR'),(5,'DEU'),(6,'GRC'),(7,'GEO'),(8,'ISR'),(9,'IND'),(10,'ITA'),(11,'CAN'),(12,'CHN'),(13,'NZL');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL AUTO_INCREMENT,
  `club_id` int(11) NOT NULL,
  `boss_id` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `position` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`manager_id`),
  KEY `club_id` (`club_id`),
  KEY `boss_id` (`boss_id`),
  CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`),
  CONSTRAINT `manager_ibfk_2` FOREIGN KEY (`boss_id`) REFERENCES `manager` (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
INSERT INTO `manager` VALUES (1,7,NULL,'Jaquelyn','Madden','1977-07-07','admin'),(2,1,NULL,'Tashya','Roy','1989-04-13','admin'),(3,5,NULL,'Megan','Mcdowell','1978-10-01','admin'),(4,6,NULL,'Yetta','William','1994-02-16','admin'),(5,6,4,'Samuel','Parker','1978-08-12','sys'),(6,6,4,'Oleg','Villarreal','1988-01-31','sys'),(7,1,2,'Calista','Riley','1990-08-07','manager'),(8,7,1,'Tobias','Santos','1990-01-23','sys'),(9,5,3,'Erich','Welch','1997-03-04','manager'),(10,5,3,'Keaton','Dennis','1999-01-04','manager'),(11,5,3,'Oleg','Li','1999-12-12','man');
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `club_id` int(11) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `position` varchar(15) NOT NULL,
  PRIMARY KEY (`player_id`),
  KEY `club_id` (`club_id`),
  CONSTRAINT `player_ibfk_1` FOREIGN KEY (`club_id`) REFERENCES `club` (`club_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES (12,1,'Alex','Wilson','1970-01-20','master'),(13,1,'Andrew','Adams','1971-02-17','master'),(14,7,'Cedric','Burton','1980-07-23','premaster'),(15,10,'Danel','Harris','1975-03-17','noob'),(16,1,'Chaz','Stevens','1989-11-11','noob'),(17,8,'Bernard','Shaw','1856-07-26','master'),(18,6,'Bruce','Walker','2000-12-09','noob'),(19,6,'Bruno','Buccellati','1970-01-01','premaster'),(20,10,'Corey','Lewis','1999-11-11','premaster'),(21,10,'Ben','Snow','1977-08-17','noob'),(22,7,'Arthur','Barcroft','1990-03-06','master');
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user','user');
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

-- Dump completed on 2022-10-13 11:51:37
