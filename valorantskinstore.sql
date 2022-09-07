-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: CosmoG
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `administrators`
--

DROP TABLE IF EXISTS `administrators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `administrators` (
  `adminID` int NOT NULL AUTO_INCREMENT,
  `adminName` varchar(25) NOT NULL,
  `adminUsername` varchar(25) NOT NULL,
  `adminPassword` varchar(25) NOT NULL,
  PRIMARY KEY (`adminID`),
  UNIQUE KEY `adminUsername` (`adminUsername`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrators`
--

LOCK TABLES `administrators` WRITE;
/*!40000 ALTER TABLE `administrators` DISABLE KEYS */;
INSERT INTO `administrators` VALUES (1,'Thinh','thinh1','thinh123'),(2,'Kien','kien1','kien123'),(3,'Chanh','chanh1','chanh123');
/*!40000 ALTER TABLE `administrators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guests`
--

DROP TABLE IF EXISTS `guests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guests` (
  `guestID` int NOT NULL AUTO_INCREMENT,
  `guestName` varchar(25) NOT NULL,
  `guestUsername` varchar(25) NOT NULL,
  `guestPassword` varchar(100) NOT NULL,
  `guestContact` varchar(10) NOT NULL,
  PRIMARY KEY (`guestID`),
  UNIQUE KEY `guestUsername` (`guestUsername`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guests`
--

LOCK TABLES `guests` WRITE;
/*!40000 ALTER TABLE `guests` DISABLE KEYS */;
/*!40000 ALTER TABLE `guests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guns`
--

DROP TABLE IF EXISTS `guns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `guns` (
  `gunID` varchar(5) NOT NULL,
  `gunName` varchar(20) NOT NULL,
  `gunIcon` varchar(50) NOT NULL,
  PRIMARY KEY (`gunID`),
  UNIQUE KEY `gunName` (`gunName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guns`
--

LOCK TABLES `guns` WRITE;
/*!40000 ALTER TABLE `guns` DISABLE KEYS */;
INSERT INTO `guns` VALUES ('BU','Bucky','shIcon.jpg'),('KN','Knife','knIcon.jpg'),('OP','Operator','opIcon.jpg'),('PH','Phantom','phIcon.jpg'),('SH','Sheriff','shIcon.jpg'),('SP','Spectre','spIcon.jpg'),('VA','Vandal','vaIcon.jpg');
/*!40000 ALTER TABLE `guns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rarities`
--

DROP TABLE IF EXISTS `rarities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rarities` (
  `rarityID` varchar(5) NOT NULL,
  `rarityName` varchar(20) NOT NULL,
  `rarityIcon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rarityID`),
  UNIQUE KEY `rarityName` (`rarityName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rarities`
--

LOCK TABLES `rarities` WRITE;
/*!40000 ALTER TABLE `rarities` DISABLE KEYS */;
INSERT INTO `rarities` VALUES ('DE','Deluxe Edition','DE.jpg'),('PE','Premium Edition','PE.jpg'),('SE','Select Edition','SE.jpg'),('UE','Ultra Edition','UE.jpg'),('XE','Exclusive Edition','XE.jpg');
/*!40000 ALTER TABLE `rarities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skin_sets`
--

DROP TABLE IF EXISTS `skin_sets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skin_sets` (
  `skinSetName` varchar(20) NOT NULL,
  PRIMARY KEY (`skinSetName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skin_sets`
--

LOCK TABLES `skin_sets` WRITE;
/*!40000 ALTER TABLE `skin_sets` DISABLE KEYS */;
INSERT INTO `skin_sets` VALUES ('Glitchpop'),('Ion'),('Oni'),('Prime'),('Reaver');
/*!40000 ALTER TABLE `skin_sets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skins`
--

DROP TABLE IF EXISTS `skins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skins` (
  `skinID` varchar(5) NOT NULL,
  `skinName` varchar(20) DEFAULT NULL,
  `skinRarity` varchar(5) DEFAULT NULL,
  `skinPrice` double DEFAULT NULL,
  `skinSet` varchar(20) DEFAULT NULL,
  `skinImage` varchar(100) DEFAULT NULL,
  `gunType` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`skinID`),
  KEY `skinRarity` (`skinRarity`),
  KEY `skinSet` (`skinSet`),
  KEY `gunType` (`gunType`),
  CONSTRAINT `skins_ibfk_1` FOREIGN KEY (`skinRarity`) REFERENCES `rarities` (`rarityID`),
  CONSTRAINT `skins_ibfk_2` FOREIGN KEY (`skinSet`) REFERENCES `skin_sets` (`skinSetName`),
  CONSTRAINT `skins_ibfk_3` FOREIGN KEY (`gunType`) REFERENCES `guns` (`gunID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skins`
--

LOCK TABLES `skins` WRITE;
/*!40000 ALTER TABLE `skins` DISABLE KEYS */;
INSERT INTO `skins` VALUES ('BU001','Ion Bucky','DE',1775,'Ion','ionBuImage.jpg','BU'),('BU002','Ion Bucky','DE',1775,'Glitchpop','glitchpopPhImage.png','BU'),('KN010','Reaver Knife','UE',3550,'Reaver','reaverKnImage.png','KN'),('KN020','Energy Sword','XE',3550,'Ion','ionEsImage.png','KN'),('KN030','Oni Claw','UE',3550,'Oni','oniClImage.png','KN'),('KN040','Prime Axe','UE',3550,'Prime','primeAxImage.png','KN'),('KN041','Prime Karambit','UE',3550,'Prime','primeKaImage.png','KN'),('KN050','Glitchpop Dagger','XE',4350,'GlitchPop','glitchpopDaImage.png','KN'),('KN051','Glitchpop Axe','XE',4350,'Glitchpop','glitchpopAxImage.png','KN'),('OP010','Reaver Operator','PE',1775,'Reaver','reaverOpImage.png','OP'),('OP020','Ion Operator','PE',1775,'Ion','ionOpImage.png','OP'),('OP051','Glitchpop Operator','XE',2175,'GlitchPop','glitchpopOpImage.png','OP'),('PH020','Ion Phantom','PE',1775,'Ion','ionPhImage.png','PH'),('PH030','Oni Phantom','PE',1775,'Oni','oniPhImage.png','PH'),('PH041','Prime Phantom','PE',1775,'Prime','primePhImage.png','PH'),('PH051','Glitchpop Phantom','XE',2175,'GlitchPop','glitchpopPhImage.png','PH'),('SH010','Reaver Sheriff','PE',1775,'Reaver','reaverShImage.png','SH'),('SH020','Ion Sheriff','PE',1775,'Ion','ionShImage.png','SH'),('SP040','Prime Spectre','PE',1775,'Prime','primeSpImage.png','SP'),('VA010','Reaver Vandal','PE',1775,'Reaver','reaverVaImage.png','VA'),('VA041','Prime Vandal','PE',1775,'Prime','primeVaImage.png','VA'),('VA050','Glitchpop Vandal','XE',2175,'GlitchPop','glitchpopVaImage.png','VA');
/*!40000 ALTER TABLE `skins` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-07 13:16:51
