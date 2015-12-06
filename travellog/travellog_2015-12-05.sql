# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: travellog
# Generation Time: 2015-12-06 03:34:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `where` varchar(50) NOT NULL DEFAULT '',
  `when` varchar(50) NOT NULL DEFAULT '',
  `cost` varchar(50) NOT NULL DEFAULT '',
  `rating` int(11) NOT NULL,
  `experience` varchar(500) NOT NULL DEFAULT '',
  `recommendations` varchar(500) NOT NULL DEFAULT '',
  `images` blob NOT NULL,
  PRIMARY KEY (`logid`),
  KEY `id` (`id`),
  CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `firstname`, `lastname`, `password`, `email`)
VALUES
	(1,'oga','okwoche','fc5e038d38a57032085441e7fe7010b0','oga@bob.com'),
	(2,'sunny','ade','spencer','ogabob@yahoo.com'),
	(3,'sola','sola','solasola','sola@sola.com'),
	(4,'tiger','woods','df0fbf14ca64335bcfc046761fe13a0e','tiger@woods.com'),
	(5,'arnold','desk','e96a5df83d6fea6d6c144f593fd5a401','desk@desk.com'),
	(6,'treasure','island','56fafa8964024efa410773781a5f9e93','island@123.com'),
	(7,'harry','sure','5559b5a1e275ae9f72d374bd39d07493','sure@sure.com'),
	(8,'nikki','okwoche','6814a9d9bb0f943f55ce4ed71fc0481a','nikki@nikki.com'),
	(9,'joash','harden','babb2e9a1a3e30eba4bb89c1937653d8','herden@go.com'),
	(10,'nikki','wonder','6814a9d9bb0f943f55ce4ed71fc0481a','nikki@wonder.com'),
	(11,'Nick','Furry','0e561187d51609f59a35e1079f062c7a','Nick@fury.com'),
	(12,'Bruce','wayne','ec0e2603172c73a8b644bb9456c1ff6e','bruce@wayne.com');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
