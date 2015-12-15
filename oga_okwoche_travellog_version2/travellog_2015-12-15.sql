# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: travellog
# Generation Time: 2015-12-15 05:06:21 +0000
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

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;

INSERT INTO `log` (`logid`, `id`, `where`, `when`, `cost`, `rating`, `experience`, `recommendations`, `images`)
VALUES
	(1,12,'kampala','1-1-16','2000',5,'awesome','beautifu',''),
	(2,1,'shov','','',0,'','',''),
	(5,0,'aa','ff','dd',5,'vv','   fvvv',''),
	(6,0,'aa','ff','dd',5,'vv','   fvvv',''),
	(7,0,'aa','ff','dd',5,'vv','   fvvv',''),
	(8,0,'aa','ff','dd',5,'vv','   fvvv',''),
	(9,0,'aa','ff','dd',5,'vv','   fvvv',''),
	(10,0,'aa','ff','dd',5,'vv','   fvvv',''),
	(11,0,'aa','aa','aa',5,'ghghghg','hdhdhdhd','');

/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;


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
	(12,'Bruce','wayne','ec0e2603172c73a8b644bb9456c1ff6e','bruce@wayne.com'),
	(13,'tony','start','ddc5f5e86d2f85e1b1ff763aff13ce0a','tony@stark.com'),
	(14,'ben','hur','96b4931f30fc3e879efb377a6772d7e6','ben@hur.com'),
	(15,'ken','cool','c7fc8b27c4bfc184c5c6a6f4edef5ceb','ken@ken.com'),
	(16,'sugr','sug','f6432274349b5cb93433f8ed886a3f37','sug@sug.com'),
	(17,'mark','anthony','ea82410c7a9991816b5eeeebe195e20a','mark@mark.com'),
	(18,'bud','bud','a9497c686f81575e9f10d9539f69757f','bud@bud.com'),
	(19,'bo','bobo','ca2cd2bcc63c4d7c8725577442073dde','bob@bo.com'),
	(20,'hello','world','a7dd12b1dab17d25467b0b0a4c8d4a92','hello@me.com');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
