-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: szkola
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `dziennik`
--

DROP TABLE IF EXISTS `dziennik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dziennik` (
  `IDdziennika` int(11) NOT NULL AUTO_INCREMENT,
  `uczniowie_IDuczniowie` int(11) DEFAULT NULL,
  `klasy_IDklasy` int(11) DEFAULT NULL,
  `przedmioty_IDuczniowie` int(11) DEFAULT NULL,
  `nauczyciele_IDnauczyciele` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDdziennika`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dziennik`
--

LOCK TABLES `dziennik` WRITE;
/*!40000 ALTER TABLE `dziennik` DISABLE KEYS */;
/*!40000 ALTER TABLE `dziennik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klasy`
--

DROP TABLE IF EXISTS `klasy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klasy` (
  `IDklasy` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(45) DEFAULT NULL,
  `data_od` varchar(45) DEFAULT NULL,
  `data_do` varchar(45) DEFAULT NULL,
  `nauczyciele_IDnauczyciele` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDklasy`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klasy`
--

LOCK TABLES `klasy` WRITE;
/*!40000 ALTER TABLE `klasy` DISABLE KEYS */;
INSERT INTO `klasy` VALUES (1,'1TI','2023','2028',NULL),(2,'2TI','2022','2027',NULL),(3,'3TI','2021','2026',NULL),(4,'4TI','2020','2025',NULL),(5,'5TI','2019','2024',NULL);
/*!40000 ALTER TABLE `klasy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nauczyciele`
--

DROP TABLE IF EXISTS `nauczyciele`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nauczyciele` (
  `IDnauczyciele` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(45) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `data_urodzenia` varchar(45) DEFAULT NULL,
  `miejscowosc` varchar(45) DEFAULT NULL,
  `kod_pocztowy` varchar(45) DEFAULT NULL,
  `ulica` varchar(45) DEFAULT NULL,
  `nr_domu` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDnauczyciele`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nauczyciele`
--

LOCK TABLES `nauczyciele` WRITE;
/*!40000 ALTER TABLE `nauczyciele` DISABLE KEYS */;
INSERT INTO `nauczyciele` VALUES (1,'Tomasz','Pikusa','dd.mm.rrrr','?','?','Ul.xxx.xxx','xx'),(2,'Janusz','Moczyróg','dd.mm.rrrr','?','?','Ul.xxx.xxx','xx'),(3,'Ewa','Wardzała','dd.mm.rrrr','?','?','Ul.xxx.xxx','xx'),(4,'Janusz','Sadowski','dd.mm.rrrr','?','?','Ul.xxx.xxx','xx'),(5,'Paweł','Piątek','dd.mm.rrrr','?','?','Ul.xxx.xxx','xx');
/*!40000 ALTER TABLE `nauczyciele` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oceny`
--

DROP TABLE IF EXISTS `oceny`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oceny` (
  `IDoceny` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(45) DEFAULT NULL,
  `ocena` varchar(45) DEFAULT NULL,
  `dziennik_IDdziennika` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDoceny`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oceny`
--

LOCK TABLES `oceny` WRITE;
/*!40000 ALTER TABLE `oceny` DISABLE KEYS */;
INSERT INTO `oceny` VALUES (1,'2.10.2023','5',NULL),(2,'4.10.2023','4',NULL),(3,'4.10.2023','5',NULL),(4,'4.10.2023','6',NULL),(5,'10.10.2023','1',NULL),(6,'10.10.2023','4',NULL),(7,'10.10.2023','2',NULL),(8,'15.10.2023','2',NULL),(9,'15.10.2023','5',NULL),(10,'15.10.2023','6',NULL),(11,'23.10.2023','4',NULL),(12,'23.10.2023','6',NULL);
/*!40000 ALTER TABLE `oceny` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `przedmioty`
--

DROP TABLE IF EXISTS `przedmioty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `przedmioty` (
  `IDprzedmioty` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDprzedmioty`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `przedmioty`
--

LOCK TABLES `przedmioty` WRITE;
/*!40000 ALTER TABLE `przedmioty` DISABLE KEYS */;
INSERT INTO `przedmioty` VALUES (1,'Informatyka'),(2,'Bazy danych'),(3,'Systemy komputerowe'),(4,'Sieci komputerowe'),(5,'Aplikacje sieciowe');
/*!40000 ALTER TABLE `przedmioty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sekretariat`
--

DROP TABLE IF EXISTS `sekretariat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sekretariat` (
  `IDsekretariat` int(11) NOT NULL AUTO_INCREMENT,
  `dyrektor` varchar(45) DEFAULT NULL,
  `zastepca_dyrektora` varchar(45) DEFAULT NULL,
  `sekretarz_I` varchar(45) DEFAULT NULL,
  `sekretarz_II` varchar(45) DEFAULT NULL,
  `sekretarz_III` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IDsekretariat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sekretariat`
--

LOCK TABLES `sekretariat` WRITE;
/*!40000 ALTER TABLE `sekretariat` DISABLE KEYS */;
INSERT INTO `sekretariat` VALUES (1,'Jacek Różycki','Ewa Łabno','Pani Kasia','Pani Ula','Pan Bartek');
/*!40000 ALTER TABLE `sekretariat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uczniowie`
--

DROP TABLE IF EXISTS `uczniowie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uczniowie` (
  `IDuczniowie` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(255) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `data_urodzenia` varchar(45) DEFAULT NULL,
  `miejscowosc` varchar(45) DEFAULT NULL,
  `kod_pocztowy` varchar(45) DEFAULT NULL,
  `ulica` varchar(45) DEFAULT NULL,
  `nr_domu` varchar(45) DEFAULT NULL,
  `klasy_IDklasy` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDuczniowie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uczniowie`
--

LOCK TABLES `uczniowie` WRITE;
/*!40000 ALTER TABLE `uczniowie` DISABLE KEYS */;
INSERT INTO `uczniowie` VALUES (1,'Ksawery','Zelek','16.09.2005','Tarnów','33-100','Ul.xxx.xxx','xx',NULL),(2,'Tymek','Wilczyński','dd.mm.rrrr','Tarnów','33-100','Ul.xxx.xxx','xx',NULL),(3,'Sebastian','Skrabot','dd.mm.rrrr','?','?','Ul.xxx.xxx','xx',NULL);
/*!40000 ALTER TABLE `uczniowie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-23  9:08:33
