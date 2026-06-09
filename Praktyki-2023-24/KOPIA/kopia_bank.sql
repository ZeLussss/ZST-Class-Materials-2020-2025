-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bank
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
-- Table structure for table `dzialy`
--

DROP TABLE IF EXISTS `dzialy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzialy` (
  `ID_dzialu` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(30) DEFAULT NULL,
  `adres` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_dzialu`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzialy`
--

LOCK TABLES `dzialy` WRITE;
/*!40000 ALTER TABLE `dzialy` DISABLE KEYS */;
INSERT INTO `dzialy` VALUES (1,'Tarnow','33-100'),(2,'Krakow','33-xxx'),(3,'Nowy Sącz','xx-xxx'),(4,'Brzesko','xx-xxx'),(5,'Bochnia','xx-xxx'),(6,'Rzeszów','xx-xxx'),(7,'Limanowa','34-600'),(8,'Myślenice','xx-xxx'),(9,'Krosno','xx-xxx'),(10,'Mielec','xx-xxx');
/*!40000 ALTER TABLE `dzialy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pracownicy` (
  `ID_pracownika` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) DEFAULT NULL,
  `nazwisko` varchar(25) DEFAULT NULL,
  `ID_dzialu` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_pracownika`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pracownicy`
--

LOCK TABLES `pracownicy` WRITE;
/*!40000 ALTER TABLE `pracownicy` DISABLE KEYS */;
INSERT INTO `pracownicy` VALUES (1,'Ksawery','Zelek',1),(2,'Tymoteusz','Wilczyński',3),(3,'Kacper','Wrona',2),(4,'Sebastian','Skrabot',4),(5,'Krzysiek','Wolański',8),(6,'Jakub','Żurek',10),(7,'Adrian','Starostka',9),(8,'Hubert','Zelek',7),(9,'Kacper','Zelek',6),(10,'Kacper','Pyzdek',5);
/*!40000 ALTER TABLE `pracownicy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stanowiska`
--

DROP TABLE IF EXISTS `stanowiska`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stanowiska` (
  `ID_stanowiska` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(25) DEFAULT NULL,
  `placaOD` decimal(7,2) DEFAULT NULL,
  `placaDO` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`ID_stanowiska`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stanowiska`
--

LOCK TABLES `stanowiska` WRITE;
/*!40000 ALTER TABLE `stanowiska` DISABLE KEYS */;
INSERT INTO `stanowiska` VALUES (1,'szef',5000.00,7000.00),(2,'szef działu',4000.00,5500.00),(3,'Kierownik',3500.00,4500.00),(4,'Pracownik',3000.00,4500.00),(5,'Administracja',3070.00,4200.00),(6,'Ochrona',2500.00,3500.00),(7,'asystent',4000.00,6000.00),(8,'młodszy specjalista',3500.00,4500.00),(9,'specjalista',4000.00,5000.00),(10,'starszy specjalista',4500.00,5500.00);
/*!40000 ALTER TABLE `stanowiska` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-20  9:54:27
