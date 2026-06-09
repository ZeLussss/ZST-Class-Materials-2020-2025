-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pracownicy
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
  `ID_Dzialu` int(11) NOT NULL AUTO_INCREMENT,
  `Dzial` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Dzialu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzialy`
--

LOCK TABLES `dzialy` WRITE;
/*!40000 ALTER TABLE `dzialy` DISABLE KEYS */;
INSERT INTO `dzialy` VALUES (1,'it'),(2,'Sprzedaz'),(3,'Kontrola');
/*!40000 ALTER TABLE `dzialy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pracownicy` (
  `IDPrac` int(11) NOT NULL AUTO_INCREMENT,
  `Nazwisko` varchar(45) DEFAULT NULL,
  `Placa` decimal(8,2) DEFAULT NULL,
  `ID_dzialu` int(11) DEFAULT NULL,
  `ID_zespolu` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDPrac`),
  KEY `ID_dzialu` (`ID_dzialu`),
  KEY `ID_zespolu` (`ID_zespolu`),
  CONSTRAINT `pracownicy_ibfk_1` FOREIGN KEY (`ID_dzialu`) REFERENCES `dzialy` (`ID_Dzialu`),
  CONSTRAINT `pracownicy_ibfk_2` FOREIGN KEY (`ID_zespolu`) REFERENCES `zespoly` (`ID_Zespolu`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pracownicy`
--

LOCK TABLES `pracownicy` WRITE;
/*!40000 ALTER TABLE `pracownicy` DISABLE KEYS */;
INSERT INTO `pracownicy` VALUES (2,'Misiak',7500.00,1,1),(3,'Przybyło',4050.00,1,2),(4,'Kisiel',7500.00,2,3),(5,'Stefański',7500.00,2,4),(6,'Maczuga',5500.00,1,1),(7,'Tusk',7700.00,1,5),(8,'Połański',8500.00,2,4),(9,'Fikoł',7750.00,1,2),(10,'Skowron',7750.00,3,6),(11,'Pikula',3450.00,3,3),(12,'Namiastka',2400.00,2,5),(13,'Kwiek',6500.00,2,4);
/*!40000 ALTER TABLE `pracownicy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zapytania`
--

DROP TABLE IF EXISTS `zapytania`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zapytania` (
  `nr_pyt` int(11) NOT NULL AUTO_INCREMENT,
  `zapytanie_sql` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nr_pyt`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zapytania`
--

LOCK TABLES `zapytania` WRITE;
/*!40000 ALTER TABLE `zapytania` DISABLE KEYS */;
INSERT INTO `zapytania` VALUES (1,'SELECT Nazwisko FROM pracownicy WHERE Zespol = \"logistyka\" LIMIT 2;'),(2,'SELECT Nazwisko FROM pracownicy WHERE Placa = (SELECT MAX(Placa) FROM pracownicy);'),(3,'SELECT Nazwisko FROM pracownicy WHERE Placa = (SELECT MIN(Placa) FROM pracownicy);'),(4,'SELECT Dzial, count(Dzial) as Liczba FROM pracownicy GROUP BY Dzial;'),(5,'SELECT Nazwisko FROM pracownicy WHERE Placa > 7000;'),(6,'SELECT IDPrac, Nazwisko FROM pracownicy WHERE Placa LIKE \"5%\" ORDER BY IDPrac;'),(7,'SELECT Nazwisko FROM pracownicy WHERE Placa > 7000 ORDER BY Nazwisko;'),(8,'SELECT SUM(Placa) AS Sumarycznie FROM pracownicy WHERE Dzial = \"Sprzedaz\";'),(9,'SELECT IDPrac, Nazwisko FROM pracownicy WHERE IDPrac % 2 = 0;'),(10,'SELECT AVG(Placa) AS Srednia FROM pracownicy;'),(11,'SELECT Nazwisko FROM pracownicy WHERE Zespol IS NULL && Dzial IS NULL;');
/*!40000 ALTER TABLE `zapytania` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zespoly`
--

DROP TABLE IF EXISTS `zespoly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zespoly` (
  `ID_Zespolu` int(11) NOT NULL AUTO_INCREMENT,
  `Zespol` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_Zespolu`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zespoly`
--

LOCK TABLES `zespoly` WRITE;
/*!40000 ALTER TABLE `zespoly` DISABLE KEYS */;
INSERT INTO `zespoly` VALUES (1,'logistyka'),(2,'Ochrona'),(3,'Det'),(4,'Hurt'),(5,'Pomoc'),(6,'Magazyn');
/*!40000 ALTER TABLE `zespoly` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-24 11:33:31
