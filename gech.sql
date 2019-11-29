-- MySQL dump 10.16  Distrib 10.1.24-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: gech
-- ------------------------------------------------------
-- Server version	10.1.24-MariaDB-6

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
-- Table structure for table `dipMarks`
--

DROP TABLE IF EXISTS `dipMarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dipMarks` (
  `marks` varchar(5) DEFAULT NULL,
  `usn` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dipMarks`
--

LOCK TABLES `dipMarks` WRITE;
/*!40000 ALTER TABLE `dipMarks` DISABLE KEYS */;
INSERT INTO `dipMarks` VALUES ('',NULL),('',NULL),('',NULL),('48','4gh14cs008'),('','4gh14cs081'),('2','4ai14cs001'),('456','4gh15me408');
/*!40000 ALTER TABLE `dipMarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enclosures`
--

DROP TABLE IF EXISTS `enclosures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enclosures` (
  `feeChallan` varchar(4) DEFAULT NULL,
  `cetAllotment` varchar(4) DEFAULT NULL,
  `sslcMarksCard` varchar(4) DEFAULT NULL,
  `pucMarksCard` varchar(4) DEFAULT NULL,
  `casteCertificate` varchar(4) DEFAULT NULL,
  `incomeCertificate` varchar(4) DEFAULT NULL,
  `kannadaMediumCertificate` varchar(4) DEFAULT NULL,
  `ruralCertificate` varchar(4) DEFAULT NULL,
  `tcOrMigrationCertificate` varchar(4) DEFAULT NULL,
  `diplomaMarksCards` varchar(4) DEFAULT NULL,
  `affidavit` varchar(4) DEFAULT NULL,
  `passportPhoto` varchar(4) DEFAULT NULL,
  `postalCovers` varchar(4) DEFAULT NULL,
  `usn` varchar(13) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enclosures`
--

LOCK TABLES `enclosures` WRITE;
/*!40000 ALTER TABLE `enclosures` DISABLE KEYS */;
INSERT INTO `enclosures` VALUES ('true','true','true','true','true','fals','true','true','true','true','true','true','true','221334'),('fals','fals','fals','fals','fals','fals','true','fals','fals','fals','fals','fals','fals','4ai14cs001'),('true','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','4gh14co081'),('fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','4gh14cs008'),('fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','4gh14cs081'),('fals','fals','fals','true','fals','fals','fals','fals','fals','fals','fals','fals','fals','4gh14cs403'),('fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','fals','4gh15me408');
/*!40000 ALTER TABLE `enclosures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fees` (
  `usn` varchar(12) DEFAULT NULL,
  `sem` varchar(3) DEFAULT NULL,
  `amount` varchar(7) DEFAULT NULL,
  `receiptNo` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fees`
--

LOCK TABLES `fees` WRITE;
/*!40000 ALTER TABLE `fees` DISABLE KEYS */;
INSERT INTO `fees` VALUES ('4gh14cs008','5',' ',' ','2017-08-10'),('4gh14cs081','',' ',' ','2017-08-10'),('4ai14cs001','1','10000','4646456','2017-08-11'),('4gh14cs403','8','45646','4646456','2017-08-11'),('4gh15me408','1','10000','4646456','2017-08-11'),('4gh14co081','1','10000','4646456','2017-08-11');
/*!40000 ALTER TABLE `fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `priority` int(3) DEFAULT NULL,
  `branch` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','password',1,'all'),(5,'cse','password',2,'cse');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oldPuMarks`
--

DROP TABLE IF EXISTS `oldPuMarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oldPuMarks` (
  `p` varchar(5) DEFAULT NULL,
  `c` varchar(5) DEFAULT NULL,
  `m` varchar(5) DEFAULT NULL,
  `bcse` varchar(5) DEFAULT NULL,
  `usn` varchar(13) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oldPuMarks`
--

LOCK TABLES `oldPuMarks` WRITE;
/*!40000 ALTER TABLE `oldPuMarks` DISABLE KEYS */;
INSERT INTO `oldPuMarks` VALUES ('5','8','7','4','4gh14co081'),('9','9','9','9','4gh14cs403');
/*!40000 ALTER TABLE `oldPuMarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `refNo` varchar(10) NOT NULL,
  `usn` varchar(12) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `sex` varchar(8) DEFAULT NULL,
  `cet` varchar(12) DEFAULT NULL,
  `allocatedCategory` varchar(10) DEFAULT NULL,
  `actualCategory` varchar(10) DEFAULT NULL,
  `caste` varchar(100) DEFAULT NULL,
  `income` varchar(8) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `puOrDip` varchar(10) DEFAULT NULL,
  `permanentAddress` varchar(200) DEFAULT NULL,
  `correspondenceAddress` varchar(200) DEFAULT NULL,
  `residencePhone` varchar(13) DEFAULT NULL,
  `studentPhone` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `accno` varchar(30) DEFAULT NULL,
  `epicNo` varchar(20) DEFAULT NULL,
  `aadhar` varchar(20) DEFAULT NULL,
  `bloodGroup` varchar(5) DEFAULT NULL,
  `scheme` varchar(5) DEFAULT NULL,
  `sem` int(3) DEFAULT NULL,
  `allowed` varchar(6) DEFAULT 'false',
  PRIMARY KEY (`refNo`),
  UNIQUE KEY `usn` (`usn`),
  UNIQUE KEY `accno` (`accno`),
  UNIQUE KEY `aadhar` (`aadhar`),
  UNIQUE KEY `studentPhone` (`studentPhone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES ('1234','4gh14co081','second','Profile Father','Profile Mother','male','12','n','b','n','78','cse','pu','jbkj','kjbb','789','789','hbhh@gmail.com','9789','979897','7979','b+','2010',1,'true'),('456','4gh15me408','admin','Profile Father','name','male','456','vhj','vh','vhj','465','cse','diploma','kljj','jlkjl','7987897898','7897897899','hbhh@gmail.com','454654','564646','4564564','b+','2010',1,'true');
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-17 13:08:23
