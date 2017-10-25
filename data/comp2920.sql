-- MySQL dump 10.15  Distrib 10.0.23-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: comp2920
-- ------------------------------------------------------
-- Server version	10.0.23-MariaDB

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `authors_id` int(10) NOT NULL AUTO_INCREMENT,
  `authors_firstname` varchar(255) DEFAULT NULL,
  `authors_lastname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`authors_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Gary','Tong'),(2,'Jane','Doe'),(3,'John','Smith');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comments_id` int(10) NOT NULL AUTO_INCREMENT,
  `pictures_id` int(10) DEFAULT NULL,
  `comments_comment` text,
  PRIMARY KEY (`comments_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec dictum nulla. Pellentesque dignissim eleifend nulla ac ornare. Phasellus a justo orci.'),(2,1,'Ut nisi ante, luctus eget sagittis id, accumsan ac sapien. Phasellus non eros et tellus euismod mollis. Pellentesque a tellus quis velit congue feugiat. Cras mollis metus eu tincidunt venenatis. Aliquam pharetra ligula ut feugiat ultricies.'),(3,1,'Phasellus vel orci nulla. Nunc dignissim mauris sit amet vulputate sollicitudin.'),(4,2,'Fusce dapibus mi metus, vel rhoncus dui placerat et. Vivamus eget mi odio. Etiam sit amet velit ultricies, porttitor eros et, volutpat tortor. Nam diam dui, pellentesque ut neque quis, luctus egestas arcu. Sed lacinia est id mauris maximus, in mollis purus commodo. Donec sagittis ipsum sed augue commodo interdum. Vestibulum id est ex. Curabitur pharetra nulla vel dui scelerisque pharetra. Sed tincidunt tristique enim, sit amet fermentum tellus vulputate in. Nullam eget dignissim nisl. Nam suscipit et elit vel lobortis.'),(5,3,'Vivamus eget mi odio. Etiam sit amet velit ultricies, porttitor eros et, volutpat tortor. Nam diam dui, pellentesque ut neque quis, luctus egestas arcu. Sed lacinia est id mauris maximus, in mollis purus commodo. Donec sagittis ipsum sed augue commodo interdum. Vestibulum id est ex. Curabitur pharetra nulla vel dui scelerisque pharetra. Sed tincidunt tristique enim, sit amet fermentum tellus vulputate in. Nullam eget dignissim nisl. Nam suscipit et elit vel lobortis.'),(6,3,'Aliquam viverra ullamcorper sapien. Vivamus mauris diam, volutpat sed maximus ut, consectetur ut est. Morbi egestas finibus ipsum, ac ullamcorper sapien suscipit et. Nullam volutpat, odio non vulputate maximus, enim metus tincidunt dui, ut tempor ipsum urna non augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin vel egestas arcu. Ut orci dui, iaculis eu erat vel, elementum convallis magna. Pellentesque ultricies venenatis fermentum. Maecenas suscipit, ipsum at consequat finibus, sapien est aliquet diam, eu convallis nisl nulla ac nunc. Nulla eget nisi lacus.'),(7,3,'Proin interdum lectus sit amet lacus pulvinar mattis.'),(8,3,'Maecenas suscipit, ipsum at consequat finibus, sapien est aliquet diam, eu convallis nisl nulla ac nunc. Nulla eget nisi lacus.'),(9,3,'Pellentesque nec tincidunt lorem. Etiam ultrices neque a accumsan iaculis. Ut est lorem, faucibus luctus feugiat id, cursus a mi. '),(10,4,'Proin interdum lectus sit amet lacus pulvinar mattis. '),(11,4,'Morbi dapibus semper ex, quis elementum lectus ultrices vel. '),(12,4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),(13,5,'Lorem ipsum dolor sit amet, consectetur adipiscing elit'),(14,5,'Fusce rhoncus hendrerit odio, ac egestas erat imperdiet sit amet. Aliquam viverra nibh a eleifend lacinia. Phasellus vitae venenatis leo. Nullam iaculis fringilla massa vel pharetra.'),(15,5,'Ac egestas erat imperdiet sit amet. Aliquam viverra nibh a eleifend iaculis fringilla massa vel pharetra.'),(16,5,'Proin interdum lectus sit amet lacus pulvinar mattis. Mauris non ultrices libero. Integer id quam nunc. Aliquam pharetra est egestas sapien placerat, et auctor ex laoreet. Donec condimentum, magna eget sollicitudin finibus, sapien ante eleifend nulla, quis finibus velit felis malesuada lectus. Donec nibh metus, mattis in molestie sit amet, dapibus ut tortor. Aliquam malesuada metus orci, id fringilla erat facilisis dictum. Morbi malesuada neque a metus imperdiet, et aliquet felis elementum. Curabitur augue ligula, interdum vel dignissim non, semper in neque. Nullam erat orci, tempus ac egestas sed, sagittis eget augue. Integer elementum massa felis, vitae tristique mauris accumsan in. Praesent pulvinar odio augue, a rhoncus urna pulvinar ac.'),(17,6,'Vivamus eget mi odio. Etiam sit amet velit ultricies, porttitor eros et, volutpat tortor. Nam diam dui, pellentesque ut neque quis, luctus egestas arcu. Sed lacinia est id mauris maximus, in mollis purus commodo. Donec sagittis ipsum sed augue commodo interdum. Vestibulum id est ex. Curabitur pharetra nulla vel dui scelerisque pharetra. Sed tincidunt tristique enim, sit amet fermentum tellus vulputate in. Nullam eget dignissim nisl. Nam suscipit et elit vel lobortis.'),(18,6,'Aliquam viverra ullamcorper sapien. Vivamus mauris diam, volutpat sed maximus ut, consectetur ut est. Morbi egestas finibus ipsum, ac ullamcorper sapien suscipit et. Nullam volutpat, odio non vulputate maximus, enim metus tincidunt dui, ut tempor ipsum urna non augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin vel egestas arcu. Ut orci dui, iaculis eu erat vel, elementum convallis magna. Pellentesque ultricies venenatis fermentum. Maecenas suscipit, ipsum at consequat finibus, sapien est aliquet diam, eu convallis nisl nulla ac nunc. Nulla eget nisi lacus.'),(19,6,'Proin interdum lectus sit amet lacus pulvinar mattis. '),(20,6,'Maecenas suscipit, ipsum at consequat finibus, sapien est aliquet diam, eu convallis nisl nulla ac nunc. Nulla eget nisi lacus.'),(21,6,'Pellentesque nec tincidunt lorem. Etiam ultrices neque a accumsan iaculis. Ut est lorem, faucibus luctus feugiat id, cursus a mi.'),(22,7,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec dictum nulla. Pellentesque dignissim eleifend nulla ac ornare. Phasellus a justo orci.'),(23,7,'Ut nisi ante, luctus eget sagittis id, accumsan ac sapien. Phasellus non eros et tellus euismod mollis. Pellentesque a tellus quis velit congue feugiat. Cras mollis metus eu tincidunt venenatis. Aliquam pharetra ligula ut feugiat ultricies.'),(24,7,'Phasellus vel orci nulla. Nunc dignissim mauris sit amet vulputate sollicitudin.');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pictures` (
  `pictures_id` int(10) NOT NULL AUTO_INCREMENT,
  `authors_id` int(10) DEFAULT NULL,
  `pictures_title` varchar(255) DEFAULT NULL,
  `pictures_filename` varchar(255) DEFAULT NULL,
  `pictures_description` text,
  PRIMARY KEY (`pictures_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES (1,1,'first title','1505465478.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),(2,1,'second title','1800180867.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),(3,1,'third title','4961840325.jpg',' Aliquam nec dictum nulla. Pellentesque dignissim eleifend nulla.'),(4,2,'fourth title','5065071803.jpg','Phasellus non eros et tellus euismod mollis, adipiscing elit.'),(5,3,'fifth title','5665772016.jpg','Nunc dignissim mauris sit amet vulputate sollicitudin.'),(6,3,'sixth title','6214183289.jpg','Vivamus eget mi odio, consectetur.'),(7,2,'seventh title','6563995309.jpg','Fusce rhoncus hendrerit odio, ac egestas erat imperdiet.'),(8,2,'eighth title','6897469293.jpg',' Aliquam viverra nibh a eleifend lacinia. Phasellus vitae venenatis leo. Nullam iaculis fringilla massa vel pharetra.'),(9,3,'ninth title','7787767022.jpg','Nullam volutpat, odio non vulputate maximus, enim metus tincidunt dui'),(10,NULL,'tenth title','9191892931.jpg','Nulla eget nisi lacus'),(11,NULL,'eleventh title','9655789441.jpg','Nullam erat orci, tempus ac egestas sed, sagittis eget augue. Integer elementum massa felis, vitae tristique mauris accumsan in.');
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-07 10:52:02
