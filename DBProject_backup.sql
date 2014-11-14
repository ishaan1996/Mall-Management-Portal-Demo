-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: DBProject
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `Bill`
--

DROP TABLE IF EXISTS `Bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bill` (
  `RefNo` int(11) NOT NULL AUTO_INCREMENT,
  `CustId` int(11) DEFAULT NULL,
  `Amt` double NOT NULL,
  `DateOfBill` date NOT NULL,
  `ModeOfPayment` binary(1) NOT NULL,
  PRIMARY KEY (`RefNo`),
  KEY `CustId` (`CustId`),
  CONSTRAINT `Bill_ibfk_1` FOREIGN KEY (`CustId`) REFERENCES `Customer` (`CustId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bill`
--

LOCK TABLES `Bill` WRITE;
/*!40000 ALTER TABLE `Bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `Bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Category`
--

DROP TABLE IF EXISTS `Category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(100) NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Category`
--

LOCK TABLES `Category` WRITE;
/*!40000 ALTER TABLE `Category` DISABLE KEYS */;
INSERT INTO `Category` VALUES (1,'medical'),(2,'grocery'),(3,'kitchenware'),(4,'cleaning_aids');
/*!40000 ALTER TABLE `Category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customer` (
  `CustId` int(11) NOT NULL,
  `CustName` varchar(100) NOT NULL,
  `DOJ` date NOT NULL,
  `LoyaltyPts` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  PRIMARY KEY (`CustId`),
  CONSTRAINT `Customer_ibfk_1` FOREIGN KEY (`CustId`) REFERENCES `User` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customer`
--

LOCK TABLES `Customer` WRITE;
/*!40000 ALTER TABLE `Customer` DISABLE KEYS */;
INSERT INTO `Customer` VALUES (2,'cust1','2014-11-08',0,'adr1','cust1@b.c'),(3,'cust2','2014-11-08',0,'adr2','cust2@b.c'),(15,'cust3','2014-11-08',0,'adr3','cust3@b.c'),(16,'customer','2014-11-09',0,'adr4','cust4@b.c'),(17,'customer2','2014-11-09',0,'adr5','cust5@b.c'),(18,'customer3','2014-11-09',0,'addr6','cust6@b.c'),(19,'','2014-11-09',0,'','');
/*!40000 ALTER TABLE `Customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Department`
--

DROP TABLE IF EXISTS `Department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Department` (
  `DepId` int(11) NOT NULL AUTO_INCREMENT,
  `DepName` varchar(100) NOT NULL,
  `ManagerId` int(11) NOT NULL,
  PRIMARY KEY (`DepId`),
  KEY `ManagerId` (`ManagerId`),
  CONSTRAINT `Department_ibfk_1` FOREIGN KEY (`ManagerId`) REFERENCES `Employee` (`EmpId`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Department`
--

LOCK TABLES `Department` WRITE;
/*!40000 ALTER TABLE `Department` DISABLE KEYS */;
INSERT INTO `Department` VALUES (1,'Accounts',1),(2,'Hygiene',19),(3,'Security',31),(4,'Electrical',32),(5,'Law',33),(6,'Item Order',24);
/*!40000 ALTER TABLE `Department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Employee`
--

DROP TABLE IF EXISTS `Employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Employee` (
  `EmpId` int(11) NOT NULL,
  `EmpName` varchar(100) NOT NULL,
  `DOJ` date DEFAULT NULL,
  `DOB` date NOT NULL,
  `JobType` varchar(40) DEFAULT NULL,
  `DepId` int(11) NOT NULL,
  PRIMARY KEY (`EmpId`),
  CONSTRAINT `Employee_ibfk_1` FOREIGN KEY (`EmpId`) REFERENCES `User` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Employee`
--

LOCK TABLES `Employee` WRITE;
/*!40000 ALTER TABLE `Employee` DISABLE KEYS */;
INSERT INTO `Employee` VALUES (1,'employee1','2014-11-08','2014-11-07','Accounts Manager',1),(19,'employee2','2014-11-10','2014-11-09','Hygiene Manager',2),(20,'employee3','2014-11-10','2014-11-09','clerk',1),(21,'employee4','2014-11-10','2014-11-09','clerk',1),(22,'employee5','2014-11-10','2014-11-09','Jr. Accountant',1),(23,'employee6','2014-11-10','2014-11-09','cook',2),(24,'Employee7','2014-11-11','2014-11-10','Order Manager',6),(25,'employee8','2014-11-10','2014-11-09','sweeper',2),(26,'employee9','1990-01-01','1974-01-01','sweeper',2),(28,'employee10','1990-01-01','1974-01-01','utensil washer',2),(29,'employee11','1990-01-01','1974-01-01','typist',1),(30,'employee12','1990-01-01','1974-01-01','steno',1),(31,'employee13','2005-05-17','1989-08-17','Security Manager',3),(32,'employee14','1990-01-01','1974-01-01','Electrical Manager',4),(33,'employee15','1990-01-01','1974-01-01','Law Manager',5);
/*!40000 ALTER TABLE `Employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ItemOrder`
--

DROP TABLE IF EXISTS `ItemOrder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ItemOrder` (
  `ProdId` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Status` binary(1) NOT NULL,
  KEY `ProdId` (`ProdId`),
  CONSTRAINT `ItemOrder_ibfk_1` FOREIGN KEY (`ProdId`) REFERENCES `Product` (`ProdId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ItemOrder`
--

LOCK TABLES `ItemOrder` WRITE;
/*!40000 ALTER TABLE `ItemOrder` DISABLE KEYS */;
/*!40000 ALTER TABLE `ItemOrder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product` (
  `ProdId` int(11) NOT NULL AUTO_INCREMENT,
  `ProdName` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Qty` int(11) NOT NULL,
  `MinQty` int(11) NOT NULL,
  `Description` text NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `WId` int(11) NOT NULL,
  PRIMARY KEY (`ProdId`),
  KEY `CategoryId` (`CategoryId`),
  KEY `WId` (`WId`),
  CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `Category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Product_ibfk_2` FOREIGN KEY (`WId`) REFERENCES `Warehouse` (`WId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Product`
--

LOCK TABLES `Product` WRITE;
/*!40000 ALTER TABLE `Product` DISABLE KEYS */;
INSERT INTO `Product` VALUES (1,'potato 1KG',19.95,50,5,'Fresh potato straight from the farms of Himachal.',2,1),(3,'Potato 1.5KG',25.95,30,5,'Fresh potato straight from the farms of Himachal.',2,1),(4,'Tomato 1KG',19.95,20,3,'Fresh tomato straight from the farms of Shimla.',2,1);
/*!40000 ALTER TABLE `Product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Type` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES ('admin','admin',5,34),('cust1','abcd',0,2),('cust2','abcd',0,3),('cust3','abcd',0,15),('cust4','abcd',0,16),('cust5','abcd',0,17),('cust6','abcd',0,18),('ep1','abcd',1,1),('ep11','abcd',2,28),('ep12','abcd',2,29),('ep13','abcd',2,30),('ep14','abcd',1,31),('ep15','abcd',1,32),('ep16','abcd',1,33),('ep2','abcd',1,19),('ep3','abcd',2,20),('ep4','abcd',2,21),('ep5','abcd',2,22),('ep6','abcd',2,23),('ep7','abcd',3,24),('ep8','abcd',2,25),('ep9','abcd',2,26);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Warehouse`
--

DROP TABLE IF EXISTS `Warehouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Warehouse` (
  `WId` int(11) NOT NULL AUTO_INCREMENT,
  `WName` varchar(40) NOT NULL,
  `Fax` varchar(20) NOT NULL,
  `PhoneNo` varchar(20) NOT NULL,
  `Rent` int(11) NOT NULL,
  `ManagerId` int(11) NOT NULL,
  `Owner` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  PRIMARY KEY (`WId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Warehouse`
--

LOCK TABLES `Warehouse` WRITE;
/*!40000 ALTER TABLE `Warehouse` DISABLE KEYS */;
INSERT INTO `Warehouse` VALUES (1,'grocery','01752371955','01752000000',2000,1,'own1','adr1');
/*!40000 ALTER TABLE `Warehouse` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-13 17:28:46
