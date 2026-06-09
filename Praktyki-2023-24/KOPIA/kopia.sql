-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: nowa_baza
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
-- Table structure for table `pupile`
--

DROP TABLE IF EXISTS `pupile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pupile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) DEFAULT NULL,
  `wiek` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pupile`
--

LOCK TABLES `pupile` WRITE;
/*!40000 ALTER TABLE `pupile` DISABLE KEYS */;
INSERT INTO `pupile` VALUES (1,'Bonifacy',7),(2,'Krzysiek',18),(3,'Ksawery',18),(4,'Tymek',18),(5,'Seba',18),(6,'Hubcio',18),(7,'Kacper',18),(8,'Olą',7),(9,'Olne',10);
/*!40000 ALTER TABLE `pupile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zapytania`
--

DROP TABLE IF EXISTS `zapytania`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zapytania` (
  `nr_pyt` int(11) NOT NULL AUTO_INCREMENT,
  `pytanie_sql` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`nr_pyt`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zapytania`
--

LOCK TABLES `zapytania` WRITE;
/*!40000 ALTER TABLE `zapytania` DISABLE KEYS */;
INSERT INTO `zapytania` VALUES (1,'SELECT * FROM pupile WHERE imie LIKE \'b%\' or \'B%\';'),(2,'SELECT imie, wiek FROM pupile WHERE imie LIKE \'________\';'),(3,'SELECT id, imie FROM pupile WHERE imie LIKE \'%n%\' or \'%N%\' or \'%o%\' or \'%O%\';'),(4,'SELECT imie FROM pupile WHERE imie LIKE \'_o%\' or \'_O%\';'),(5,'SELECT imie FROM pupile where imie LIKE \'__n_\' or \'__N_\';'),(6,'SELECT * FROM pupile WHERE imie NOT LIKE \'a%\' or \'A%\' or \'b%\' or \'B%\';');
/*!40000 ALTER TABLE `zapytania` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-20 11:41:01
