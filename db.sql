-- MySQL dump 10.13  Distrib 5.1.50, for redhat-linux-gnu (i686)
--
-- Host: localhost    Database: answers
-- ------------------------------------------------------
-- Server version	5.1.50

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=193 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,384),(2,1,NULL,NULL,'Pages',2,17),(3,2,NULL,NULL,'display',3,4),(4,2,NULL,NULL,'build_acl',5,6),(5,2,NULL,NULL,'add',7,8),(6,2,NULL,NULL,'edit',9,10),(7,2,NULL,NULL,'index',11,12),(8,2,NULL,NULL,'view',13,14),(9,2,NULL,NULL,'delete',15,16),(10,1,NULL,NULL,'Groups',18,41),(11,10,NULL,NULL,'index',19,20),(12,10,NULL,NULL,'view',21,22),(13,10,NULL,NULL,'add',23,24),(14,10,NULL,NULL,'edit',25,26),(15,10,NULL,NULL,'delete',27,28),(16,10,NULL,NULL,'manage_index',29,30),(17,10,NULL,NULL,'manage_view',31,32),(18,10,NULL,NULL,'manage_add',33,34),(19,10,NULL,NULL,'manage_edit',35,36),(20,10,NULL,NULL,'manage_delete',37,38),(21,10,NULL,NULL,'build_acl',39,40),(22,1,NULL,NULL,'Tags',42,67),(23,22,NULL,NULL,'index',43,44),(24,22,NULL,NULL,'view',45,46),(25,22,NULL,NULL,'add',47,48),(26,22,NULL,NULL,'edit',49,50),(27,22,NULL,NULL,'delete',51,52),(28,22,NULL,NULL,'manage_index',53,54),(29,22,NULL,NULL,'manage_view',55,56),(30,22,NULL,NULL,'manage_add',57,58),(31,22,NULL,NULL,'manage_edit',59,60),(32,22,NULL,NULL,'manage_delete',61,62),(33,22,NULL,NULL,'build_acl',63,64),(34,1,NULL,NULL,'UsersTags',68,91),(35,34,NULL,NULL,'index',69,70),(36,34,NULL,NULL,'view',71,72),(37,34,NULL,NULL,'add',73,74),(38,34,NULL,NULL,'edit',75,76),(39,34,NULL,NULL,'delete',77,78),(40,34,NULL,NULL,'manage_index',79,80),(41,34,NULL,NULL,'manage_view',81,82),(42,34,NULL,NULL,'manage_add',83,84),(43,34,NULL,NULL,'manage_edit',85,86),(44,34,NULL,NULL,'manage_delete',87,88),(45,34,NULL,NULL,'build_acl',89,90),(46,1,NULL,NULL,'Categories',92,115),(47,46,NULL,NULL,'index',93,94),(48,46,NULL,NULL,'view',95,96),(49,46,NULL,NULL,'add',97,98),(50,46,NULL,NULL,'edit',99,100),(51,46,NULL,NULL,'delete',101,102),(52,46,NULL,NULL,'manage_index',103,104),(53,46,NULL,NULL,'manage_view',105,106),(54,46,NULL,NULL,'manage_add',107,108),(55,46,NULL,NULL,'manage_edit',109,110),(56,46,NULL,NULL,'manage_delete',111,112),(57,46,NULL,NULL,'build_acl',113,114),(58,1,NULL,NULL,'Activities',116,139),(59,58,NULL,NULL,'index',117,118),(60,58,NULL,NULL,'view',119,120),(61,58,NULL,NULL,'add',121,122),(62,58,NULL,NULL,'edit',123,124),(63,58,NULL,NULL,'delete',125,126),(64,58,NULL,NULL,'manage_index',127,128),(65,58,NULL,NULL,'manage_view',129,130),(66,58,NULL,NULL,'manage_add',131,132),(67,58,NULL,NULL,'manage_edit',133,134),(68,58,NULL,NULL,'manage_delete',135,136),(69,58,NULL,NULL,'build_acl',137,138),(70,1,NULL,NULL,'QuestionsTags',140,165),(71,70,NULL,NULL,'index',141,142),(72,70,NULL,NULL,'view',143,144),(73,70,NULL,NULL,'add',145,146),(74,70,NULL,NULL,'edit',147,148),(75,70,NULL,NULL,'delete',149,150),(76,70,NULL,NULL,'manage_index',151,152),(77,70,NULL,NULL,'manage_view',153,154),(78,70,NULL,NULL,'manage_add',155,156),(79,70,NULL,NULL,'manage_edit',157,158),(80,70,NULL,NULL,'manage_delete',159,160),(81,70,NULL,NULL,'build_acl',161,162),(82,1,NULL,NULL,'Users',166,203),(83,82,NULL,NULL,'index',167,168),(84,82,NULL,NULL,'view',169,170),(85,82,NULL,NULL,'register',171,172),(86,82,NULL,NULL,'edit',173,174),(87,82,NULL,NULL,'delete',175,176),(88,82,NULL,NULL,'login',177,178),(89,82,NULL,NULL,'logout',179,180),(90,82,NULL,NULL,'afterSave',181,182),(91,82,NULL,NULL,'initDB',183,184),(92,82,NULL,NULL,'manage_index',185,186),(93,82,NULL,NULL,'manage_view',187,188),(94,82,NULL,NULL,'manage_edit',189,190),(95,82,NULL,NULL,'manage_delete',191,192),(96,82,NULL,NULL,'manage_login',193,194),(97,82,NULL,NULL,'manage_logout',195,196),(98,82,NULL,NULL,'build_acl',197,198),(99,82,NULL,NULL,'add',199,200),(100,1,NULL,NULL,'Questions',204,235),(101,100,NULL,NULL,'index',205,206),(102,100,NULL,NULL,'view',207,208),(103,100,NULL,NULL,'add',209,210),(104,100,NULL,NULL,'edit',211,212),(105,100,NULL,NULL,'delete',213,214),(106,100,NULL,NULL,'manage_index',215,216),(107,100,NULL,NULL,'manage_view',217,218),(108,100,NULL,NULL,'manage_add',219,220),(109,100,NULL,NULL,'manage_edit',221,222),(110,100,NULL,NULL,'manage_delete',223,224),(111,100,NULL,NULL,'build_acl',225,226),(112,1,NULL,NULL,'Answers',236,255),(113,112,NULL,NULL,'index',237,238),(114,112,NULL,NULL,'view',239,240),(115,112,NULL,NULL,'add',241,242),(116,112,NULL,NULL,'edit',243,244),(117,112,NULL,NULL,'delete',245,246),(118,112,NULL,NULL,'manage_index',247,248),(119,112,NULL,NULL,'manage_view',249,250),(120,112,NULL,NULL,'manage_add',251,252),(121,112,NULL,NULL,'build_acl',253,254),(122,1,NULL,NULL,'Watchlists',256,279),(123,122,NULL,NULL,'index',257,258),(124,122,NULL,NULL,'view',259,260),(125,122,NULL,NULL,'add',261,262),(126,122,NULL,NULL,'edit',263,264),(127,122,NULL,NULL,'delete',265,266),(128,122,NULL,NULL,'manage_index',267,268),(129,122,NULL,NULL,'manage_view',269,270),(130,122,NULL,NULL,'manage_add',271,272),(131,122,NULL,NULL,'manage_edit',273,274),(132,122,NULL,NULL,'manage_delete',275,276),(133,122,NULL,NULL,'build_acl',277,278),(134,100,NULL,NULL,'unresolved',227,228),(135,70,NULL,NULL,'tagsearch',163,164),(136,100,NULL,NULL,'tagsearch',229,230),(137,82,NULL,NULL,'openlogin',201,202),(138,100,NULL,NULL,'ask',231,232),(139,1,NULL,NULL,'AnswersVotes',280,307),(140,139,NULL,NULL,'index',281,282),(141,139,NULL,NULL,'view',283,284),(142,139,NULL,NULL,'add',285,286),(143,139,NULL,NULL,'edit',287,288),(144,139,NULL,NULL,'delete',289,290),(145,139,NULL,NULL,'manage_index',291,292),(146,139,NULL,NULL,'manage_view',293,294),(147,139,NULL,NULL,'manage_add',295,296),(148,139,NULL,NULL,'manage_edit',297,298),(149,139,NULL,NULL,'manage_delete',299,300),(150,139,NULL,NULL,'build_acl',301,302),(151,1,NULL,NULL,'QuestionsVotes',308,335),(152,151,NULL,NULL,'index',309,310),(153,151,NULL,NULL,'view',311,312),(154,151,NULL,NULL,'add',313,314),(155,151,NULL,NULL,'edit',315,316),(156,151,NULL,NULL,'delete',317,318),(157,151,NULL,NULL,'manage_index',319,320),(158,151,NULL,NULL,'manage_view',321,322),(159,151,NULL,NULL,'manage_add',323,324),(160,151,NULL,NULL,'manage_edit',325,326),(161,151,NULL,NULL,'manage_delete',327,328),(162,151,NULL,NULL,'build_acl',329,330),(163,100,NULL,NULL,'autoComplete',233,234),(164,151,NULL,NULL,'up',331,332),(165,151,NULL,NULL,'down',333,334),(166,139,NULL,NULL,'up',303,304),(167,139,NULL,NULL,'down',305,306),(168,22,NULL,NULL,'autoComplete',65,66),(169,1,NULL,NULL,'AnswersComments',336,359),(170,169,NULL,NULL,'index',337,338),(171,169,NULL,NULL,'view',339,340),(172,169,NULL,NULL,'add',341,342),(173,169,NULL,NULL,'edit',343,344),(174,169,NULL,NULL,'delete',345,346),(175,169,NULL,NULL,'manage_index',347,348),(176,169,NULL,NULL,'manage_view',349,350),(177,169,NULL,NULL,'manage_add',351,352),(178,169,NULL,NULL,'manage_edit',353,354),(179,169,NULL,NULL,'manage_delete',355,356),(180,169,NULL,NULL,'build_acl',357,358),(181,1,NULL,NULL,'QuestionsComments',360,383),(182,181,NULL,NULL,'index',361,362),(183,181,NULL,NULL,'view',363,364),(184,181,NULL,NULL,'add',365,366),(185,181,NULL,NULL,'edit',367,368),(186,181,NULL,NULL,'delete',369,370),(187,181,NULL,NULL,'manage_index',371,372),(188,181,NULL,NULL,'manage_view',373,374),(189,181,NULL,NULL,'manage_add',375,376),(190,181,NULL,NULL,'manage_edit',377,378),(191,181,NULL,NULL,'manage_delete',379,380),(192,181,NULL,NULL,'build_acl',381,382);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(10) unsigned DEFAULT NULL,
  `answer_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `activity_type` tinyint(4) DEFAULT NULL COMMENT '0 - Added question\n1 - Replied to question\n2 - Voted best answer for question\n3 - Gave a thumbs up\n4 - Gave a thumbs down ',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `atindex` (`id`),
  KEY `atuindex` (`user_id`),
  KEY `atqindex` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id` bigint(10) unsigned NOT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aidindex` (`id`),
  KEY `auindex` (`user_id`),
  KEY `aqindex` (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES (10,'<p>Wow! interesting question I must say.</p>',40,15,'0000-00-00 00:00:00','2010-12-07 11:06:21'),(9,'<p>This is wrong answer. NO USE AT ALL. NONSENSE.</p>',40,15,'0000-00-00 00:00:00','2010-12-07 11:03:41'),(8,'<p>I wish I could help. I am also facing the same issue :-)</p>',40,15,'0000-00-00 00:00:00','2010-12-07 10:54:55');
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers_comments`
--

DROP TABLE IF EXISTS `answers_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers_comments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `answer_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers_comments`
--

LOCK TABLES `answers_comments` WRITE;
/*!40000 ALTER TABLE `answers_comments` DISABLE KEYS */;
INSERT INTO `answers_comments` VALUES (1,9,15,'this is not nonsense yaar',NULL);
/*!40000 ALTER TABLE `answers_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `answers_votes`
--

DROP TABLE IF EXISTS `answers_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers_votes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `answer_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `type` enum('up','down') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers_votes`
--

LOCK TABLES `answers_votes` WRITE;
/*!40000 ALTER TABLE `answers_votes` DISABLE KEYS */;
INSERT INTO `answers_votes` VALUES (36,10,15,'down','2010-12-07 11:14:13'),(35,9,15,'up','2010-12-07 11:05:52'),(34,8,15,'down','2010-12-07 11:03:22');
/*!40000 ALTER TABLE `answers_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',10,NULL,1,4),(2,NULL,'Group',11,NULL,5,8),(3,NULL,'Group',12,NULL,9,12),(4,1,'User',15,NULL,2,3),(5,2,'User',16,NULL,6,7),(6,3,'User',17,NULL,10,11),(7,NULL,'User',18,NULL,13,14);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(2,2,1,'-1','-1','-1','-1'),(3,2,100,'1','1','1','1'),(4,2,112,'1','1','1','1'),(5,2,58,'1','1','1','1'),(6,2,46,'1','1','1','1'),(7,2,82,'1','1','1','1'),(8,2,22,'1','1','1','1'),(9,2,122,'1','1','1','1'),(10,3,1,'-1','-1','-1','-1'),(11,3,103,'1','1','1','1'),(12,3,104,'1','1','1','1'),(13,3,115,'1','1','1','1'),(14,3,116,'1','1','1','1'),(15,3,25,'1','1','1','1'),(16,3,26,'1','1','1','1'),(17,3,125,'1','1','1','1'),(18,3,126,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `catindex` (`id`),
  KEY `catpindex` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (26,'Medical Science',23,6,7),(25,'IT',23,4,5),(24,'Finance',NULL,9,10),(23,'Technology',NULL,3,8),(22,'Entertainment',NULL,1,2);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` bigint(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (10,'Administrators','2010-10-26 16:26:56','2010-10-26 16:26:56'),(11,'Managers','2010-10-26 16:27:05','2010-10-26 16:27:05'),(12,'Users','2010-10-26 16:27:12','2010-10-26 16:27:12');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `i18n`
--

DROP TABLE IF EXISTS `i18n`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `i18n` (
  `id` bigint(10) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `i18n`
--

LOCK TABLES `i18n` WRITE;
/*!40000 ALTER TABLE `i18n` DISABLE KEYS */;
INSERT INTO `i18n` VALUES (36,'en_us','User',18,'about',''),(34,'en_us','User',16,'about',''),(35,'en_us','User',17,'about',''),(5,'en_us','Category',16,'name','Arts & Humanities'),(6,'en_us','Category',17,'name','Beauty & Style'),(7,'en_us','Category',18,'name','Health'),(8,'en_us','Category',19,'name','Lifestyle'),(9,'en_us','Category',20,'name','Technology'),(10,'en_us','Category',21,'name','Information Technology'),(11,'en_us','Tag',2,'name','stupid'),(12,'en_us','Tag',2,'longname','stupid'),(13,'en_us','Tag',3,'name','idiot'),(14,'en_us','Tag',3,'longname','idiot'),(15,'en_us','Category',22,'name','Entertainment'),(16,'en_us','Category',23,'name','Technology'),(17,'en_us','Category',24,'name','Finance'),(18,'en_us','Category',25,'name','IT'),(19,'en_us','Question',2,'title','What is your name'),(20,'en_us','Question',2,'content','<p>Hi,</p>\r\n\r\n<p>i have committed just some files of those that i have modified. As you can imagine the rest of the files that i havent commited are showed when i do \"svn status\".</p>\r\n\r\n<p>How can i make \"dissapear\" those files that are showed when i do \"svn status\"? Should i revert one by one? A normal revert (svn revert -R .) will revert also the files that i have commited?</p>\r\n\r\n<p>Regards</p>\r\n\r\n<p>Javi</p>'),(21,'en_us','Question',3,'title','What is your name'),(22,'en_us','Question',3,'content','Do you know what you your name?'),(23,'en_us','Answer',1,'content','My name is Shishir'),(24,'en_us','Question',4,'title','categories are finally working?'),(25,'en_us','Question',4,'content','are they?'),(26,'en_us','Question',5,'title','THIS IS NEW Q????'),(27,'en_us','Question',5,'content','What\'s new in it?'),(28,'en_us','Question',6,'title','This is a new question sir'),(29,'en_us','Question',6,'content','wow kya question hai'),(30,'en_us','Question',7,'title','sdsadsad'),(31,'en_us','Question',7,'content','dfdsfdf'),(33,'en_us','User',15,'about',''),(38,'en_us','Category',26,'name','Medical Science'),(39,'en_us','Answer',2,'content','Are they really working boss???'),(40,'en_us','Question',8,'title','Now this is HTML question'),(41,'en_us','Question',8,'content','<h1>See the <span style=\"text-decoration: line-through;\"><strong>difference</strong> </span>yourself .. <span style=\"text-decoration: underline;\">what a great item</span></h1>'),(42,'en_us','Question',9,'title','hooohaaa'),(43,'en_us','Question',9,'content','<p>Here is some junk code .. enjoy</p>\r\n\r\n<pre><code>what a junk code really. a+b = c and nonsense goes on\r\n</code></pre>'),(44,'en_us','Tag',4,'name','science'),(45,'en_us','Tag',4,'longname','science'),(46,'en_us','Tag',5,'name','technology'),(47,'en_us','Tag',5,'longname','technology'),(48,'en_us','Question',10,'title','How long this project may take?'),(49,'en_us','Question',10,'content','<p>Do you have any time lines planned for completion of this project? Here is some code which shows what I mean.</p>\r\n\r\n<pre><code>    &lt;?php\r\n\r\n    function ago($datefrom,$dateto=-1)\r\n    {\r\n        // Defaults and assume if 0 is passed in that\r\n        // its an error rather than the epoch\r\n\r\n        if($datefrom==0) { return \"A long time ago\"; }\r\n        if($dateto==-1) { $dateto = time(); }\r\n\r\n        // Make the entered date into Unix timestamp from MySQL datetime field\r\n\r\n        $datefrom = strtotime($datefrom);\r\n\r\n        // Calculate the difference in seconds betweeen\r\n        // the two timestamps\r\n\r\n        $difference = $dateto - $datefrom;\r\n\r\n        // Based on the interval, determine the\r\n        // number of units between the two dates\r\n        // From this point on, you would be hard\r\n        // pushed telling the difference between\r\n        // this function and DateDiff. If the $datediff\r\n        // returned is 1, be sure to return the singular\r\n        // of the unit, e.g. \'day\' rather \'days\'\r\n\r\n        switch(true)\r\n        {\r\n            // If difference is less than 60 seconds,\r\n            // seconds is a good interval of choice\r\n            case(strtotime(\'-1 min\', $dateto) &lt; $datefrom):\r\n                $datediff = $difference;\r\n                $res = ($datediff==1) ? $datediff.\' second ago\' : $datediff.\' seconds ago\';\r\n                break;\r\n            // If difference is between 60 seconds and\r\n            // 60 minutes, minutes is a good interval\r\n            case(strtotime(\'-1 hour\', $dateto) &lt; $datefrom):\r\n                $datediff = floor($difference / 60);\r\n                $res = ($datediff==1) ? $datediff.\' minute ago\' : $datediff.\' minutes ago\';\r\n                break;\r\n            // If difference is between 1 hour and 24 hours\r\n            // hours is a good interval\r\n            case(strtotime(\'-1 day\', $dateto) &lt; $datefrom):\r\n                $datediff = floor($difference / 60 / 60);\r\n                $res = ($datediff==1) ? $datediff.\' hour ago\' : $datediff.\' hours ago\';\r\n                break;\r\n            // If difference is between 1 day and 7 days\r\n            // days is a good interval               \r\n            case(strtotime(\'-1 week\', $dateto) &lt; $datefrom):\r\n                $day&amp;#95;difference = 1;\r\n                while (strtotime(\'-\'.$day&amp;#95;difference.\' day\', $dateto) &gt;= $datefrom)\r\n                {\r\n                    $day&amp;#95;difference++;\r\n                }\r\n\r\n                $datediff = $day&amp;#95;difference;\r\n                $res = ($datediff==1) ? \'yesterday\' : $datediff.\' days ago\';\r\n                break;\r\n            // If difference is between 1 week and 30 days\r\n            // weeks is a good interval           \r\n            case(strtotime(\'-1 month\', $dateto) &lt; $datefrom):\r\n                $week&amp;#95;difference = 1;\r\n                while (strtotime(\'-\'.$week&amp;#95;difference.\' week\', $dateto) &gt;= $datefrom)\r\n                {\r\n                    $week&amp;#95;difference++;\r\n                }\r\n\r\n                $datediff = $week&amp;#95;difference;\r\n                $res = ($datediff==1) ? \'last week\' : $datediff.\' weeks ago\';\r\n                break;           \r\n            // If difference is between 30 days and 365 days\r\n            // months is a good interval, again, the same thing\r\n            // applies, if the 29th February happens to exist\r\n            // between your 2 dates, the function will return\r\n            // the \'incorrect\' value for a day\r\n            case(strtotime(\'-1 year\', $dateto) &lt; $datefrom):\r\n                $months&amp;#95;difference = 1;\r\n                while (strtotime(\'-\'.$months&amp;#95;difference.\' month\', $dateto) &gt;= $datefrom)\r\n                {\r\n                    $months&amp;#95;difference++;\r\n                }\r\n\r\n                $datediff = $months&amp;#95;difference;\r\n                $res = ($datediff==1) ? $datediff.\' month ago\' : $datediff.\' months ago\';\r\n\r\n                break;\r\n            // If difference is greater than or equal to 365\r\n            // days, return year. This will be incorrect if\r\n            // for example, you call the function on the 28th April\r\n            // 2008 passing in 29th April 2007. It will return\r\n            // 1 year ago when in actual fact (yawn!) not quite\r\n            // a year has gone by\r\n            case(strtotime(\'-1 year\', $dateto) &gt;= $datefrom):\r\n                $year&amp;#95;difference = 1;\r\n                while (strtotime(\'-\'.$year&amp;#95;difference.\' year\', $dateto) &gt;= $datefrom)\r\n                {\r\n                    $year&amp;#95;difference++;\r\n                }\r\n\r\n                $datediff = $year&amp;#95;difference;\r\n                $res = ($datediff==1) ? $datediff.\' year ago\' : $datediff.\' years ago\';\r\n                break;\r\n\r\n        }\r\n        return $res;\r\n\r\n?&gt;\r\n</code></pre>'),(50,'en_us','Question',11,'title','Whats the budget??'),(51,'en_us','Question',11,'content','<p>I am not sure if this project is funded. Is it?</p>'),(52,'en_us','Answer',3,'content','What budget are you talking about? There is no budget.'),(53,'en_us','Answer',4,'content','What budget are you talking about? There is no budget AT ALLLLLLLL'),(54,'en_us','Question',12,'title','This is a funny question???'),(55,'en_us','Question',12,'content','<p>everyone laugh ok???</p>'),(56,'en_us','Question',13,'title','This is a funny question??? ettytry'),(57,'en_us','Question',13,'content','<p><strong><em>ytrytrytryrtytytrytryy ytrytrytrytry</em></strong></p>'),(58,'en_us','Question',14,'title','Whats the budget??'),(59,'en_us','Question',14,'content','<p>Whats the budget??</p>'),(60,'en_us','Question',15,'title','This is a funny question???'),(61,'en_us','Question',15,'content','<p>This is a funny question???</p>'),(62,'en_us','Question',16,'title',''),(63,'en_us','Question',16,'content',''),(64,'en_us','Answer',5,'content','I don\'t know what\'s my name'),(65,'en_us','Question',17,'title','Does it identify the user automatically?'),(66,'en_us','Question',17,'content','<p>I have serious doubts on this but can someone answer this question?</p>'),(67,'en_us','Question',18,'title','Error with tmp/cache/models/'),(68,'en_us','Question',18,'content','<p>When I attempt to access the index page, I get the following warning:</p>\r\n\r\n<p>Warning (512): /var/www/AdvPhp/cakephp/app/tmp/cache/models/ is not writable [CORE/cake/libs/cache/file.php, line 267]</p>\r\n\r\n<p>However, when I change permissions to this file from 775 to</p>'),(69,'en_us','Question',19,'title','AjaxForm and app engine blobstore'),(70,'en_us','Question',19,'content','<p>Hi,</p>\r\n\r\n<p>I\'m having some difficulties with AjaxForm file upload and the app engine blobstore. I suspect the difficulty is because the blobstore upload handler (subclass of blobstore&#95;handlers.BlobstoreUploadHandler) mandates a redirect response, rather than returning any content, but I\'m not sure. I\'m expecting to get an XML document to work with, and it appears to arrive as expected to the browser, but I just can\'t get hold of it - details below.</p>\r\n\r\n<p>My app engine blobstore upload handler is as follows -</p>\r\n\r\n<pre><code>class UploadHandler(blobstore&amp;#95;handlers.BlobstoreUploadHandler):\r\n  def post(self):\r\n    upload&amp;#95;files = self.get&amp;#95;uploads(\'file\')  # \'file\' is file upload field in the form\r\n    blob&amp;#95;info = upload&amp;#95;files[0]\r\n\r\n    entity&amp;#95;key = self.request.get(\"entityKey\")\r\n\r\n    // Update a datastore entity with the blobkey (not shown)\r\n\r\n    // redirect to the uri for the updated entity\r\n    self.redirect(\'%s.xml\' % entity&amp;#95;key)\r\n</code></pre>\r\n\r\n<p>The final redirect is to a uri in my application that returns an xml document. Looking at the server output, there is no indication that anything is wrong - the redirect is serviced, and it returns the xml document as expected, with the correct mime type - so the form submission looks good, and the server response to that submission looks good.</p>\r\n\r\n<p>My client side code using ajaxForm looks as follows (sorry its a little obtuse, I dont think the problem is here though)-</p>\r\n\r\n<pre><code>// Create the form\r\nvar dialogForm = $(\"&lt;form method=\'POST\' enctype=\'multipart/form-data\'&gt;\")\r\n   .append(\"&lt;span&gt;Upload File: &lt;/span&gt;&lt;input type=\'file\' name=\'file\'/&gt;&lt;br&gt;\")\r\n   .append(\"&lt;input type=\'hidden\' name=\'entityKey\' value=\'\" + entityKey + \"\'/&gt;\")\r\n   .append(\"&lt;input type=\'hidden\' name=\'entityField\' value=\'image\'/&gt;\")\r\n   .append(\"&lt;input type=\'button\' value=\'Wait...\' disabled=\'disabled\'/&gt;\");;\r\n\r\ndialogForm.ajaxForm();\r\n\r\n// Turn the form button into a nice jQuery UI button and add a click handler\r\n$(\"input[type=button]\", dialogForm[0]).button()\r\n   .click(function() {\r\n      log.info(\"Posting to : \" + dialogForm.attr(\'action\'));\r\n      dialogForm.ajaxSubmit({\r\n         success: function(responseText, statusText, xhr, $form) {\r\n            log.info(\"Response: \" + responseText + \", statusText: \" + statusText + \", xhr: \" + goog.debug.expose(xhr) + \", form:\" + goog.debug.expose($form));\r\n         }\r\n      });\r\n    });\r\n</code></pre>\r\n\r\n<p>I set the \'action\' on the form (and enable the button) afterwards -</p>\r\n\r\n<pre><code>$.get(\'/blob&amp;#95;upload&amp;#95;url\', function(data) {\r\n  dialogForm.attr(\"action\", data);\r\n  $(\"input[type=button]\", dialogForm[0]).attr(\"value\", \"Upload\").button(\"option\", \"disabled\", false);\r\n};\r\n</code></pre>\r\n\r\n<p>I\'m using a little google closure in there as well for logging and exposing objects. Everything looks good - as expected it is posting correctly to the server, and the success function is called. If I watch the document structure in Chrome dev tools, I can see the iFrame being created briefly to handle the file upload and response.</p>\r\n\r\n<p>The problem is that I never get the xml document in the response. The log output is as follows -</p>\r\n\r\n<pre><code>[ 18.642s] [Panel] Response: null, statusText: success, xhr: 0 = [object HTMLFormElement]\r\nlength = 1\r\nselector = \r\njquery = 1.4.2, form:0 = [object HTMLFormElement]\r\nlength = 1\r\nselector = \r\njquery = 1.4.2\r\nResource interpreted as document but transferred with MIME type application/xml [ABCdefGH]\r\n</code></pre>\r\n\r\n<p>The complaint by chrome about the mime type is probably super relevant, but I\'m not making the connection :) - at least it means that it is getting the xml document at some point. In Chrome resources view, you can see the POST, and that the response is a 302 redirect, and then the subsequent GET request - the header of which looks fine -</p>\r\n\r\n<p>Request URL:http://localhost:8081/&#95;ah/upload/ABCdefGH\r\nRequest Method:GET\r\nStatus Code:200 OK\r\nRequest Headers\r\nReferer:http://localhost:8081/\r\nUser-Agent:Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10&#95;6_4; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.70 Safari/533.4\r\nResponse Headers\r\nCache-Control:no-cache\r\nContent-Length:2325\r\nContent-Type:application/xml\r\nDate:Sun, 20 Jun 2010 20:47:39 GMT\r\nExpires:Fri, 01 Jan 1990 00:00:00 GMT\r\nServer:Development/1.0</p>\r\n\r\n<p>Chrome resources view won\'t show me the content of that document (just blank) but firefox does and the xml document looks fine. Firefox gives the same end result however - null for the ajaxSubmit() responseText.</p>\r\n\r\n<p>I figure I\'m just having a brain fade here somewhere, but it\'s really got me stumped. Any pointers for getting that xml document would be great - cheers,</p>\r\n\r\n<p>Colin</p>'),(71,'en_us','Question',20,'title','How can a Swing JWindow be resized without flickering?'),(72,'en_us','Question',20,'content','<p>I am trying to make a custom UI based on a JWindow for the purpose of selecting an area of the screen to be shared. I have extended JWindow and added code to make it resizable and to \'cut out\' the centre of the window using AWTUtilities.setWindowShape().</p>\r\n\r\n<p>When running the code I am experiencing a flicker as the window is resized in negative x and y directions, i.e. up and left. What appears to be happening is that the window is resized and drawn before the components are updated. Below is a simplified version of the code. When run the top panel can be used to resize the window up and to the left. The background of the window is set to green to make it clear where the pixels I do not want showing are.</p>\r\n\r\n<p>Edit: Improved the code to shape the window correctly using a ComponentListener and added a dummy component at bottom to further illustrate flicker (also updated screenshots).</p>\r\n\r\n<p>import java.awt.BorderLayout;\r\nimport java.awt.Color;\r\nimport java.awt.Graphics;\r\nimport java.awt.Rectangle;\r\nimport java.awt.event.ComponentAdapter;\r\nimport java.awt.event.ComponentEvent;\r\nimport java.awt.event.MouseEvent;\r\nimport java.awt.event.MouseListener;\r\nimport java.awt.event.MouseMotionListener;\r\nimport java.awt.geom.Area;</p>\r\n\r\n<p>import javax.swing.JPanel;\r\nimport javax.swing.JWindow;\r\nimport javax.swing.border.CompoundBorder;\r\nimport javax.swing.border.EmptyBorder;\r\nimport javax.swing.border.EtchedBorder;\r\nimport javax.swing.border.LineBorder;</p>\r\n\r\n<p>import com.sun.awt.AWTUtilities;</p>\r\n\r\n<p>public class FlickerWindow extends JWindow implements MouseListener, MouseMotionListener{</p>\r\n\r\n<pre><code>JPanel controlPanel;\r\nJPanel outlinePanel;\r\nint mouseX, mouseY;\r\nRectangle windowRect;\r\nRectangle cutoutRect;\r\nArea windowArea;\r\n\r\npublic static void main(String[] args) {\r\n    FlickerWindow fw = new FlickerWindow();\r\n}\r\n\r\npublic FlickerWindow() {\r\n    super();\r\n    setLayout(new BorderLayout());\r\n    setBounds(500, 500, 200, 200);\r\n    setBackground(Color.GREEN);\r\n\r\n    controlPanel = new JPanel();\r\n    controlPanel.setBackground(Color.GRAY);\r\n    controlPanel.setBorder(new EtchedBorder(EtchedBorder.LOWERED));\r\n    controlPanel.addMouseListener(this);\r\n    controlPanel.addMouseMotionListener(this);\r\n\r\n    outlinePanel = new JPanel();\r\n    outlinePanel.setBackground(Color.BLUE);\r\n    outlinePanel.setBorder(new CompoundBorder(new EmptyBorder(2,2,2,2), new LineBorder(Color.RED, 1)));\r\n\r\n    add(outlinePanel, BorderLayout.CENTER);\r\n    add(controlPanel, BorderLayout.NORTH);\r\n    add(new JButton(\"Dummy button\"), BorderLayout.SOUTH);\r\n    setVisible(true);\r\n    setShape();\r\n\r\n    addComponentListener(new ComponentAdapter() {           \r\n        @Override\r\n        public void componentResized(ComponentEvent e) {\r\n            setShape();\r\n        }});\r\n}\r\n\r\n\r\npublic void paint(Graphics g) {\r\n    // un-comment or breakpoint here to see window updates more clearly\r\n    //try {Thread.sleep(10);} catch (Exception e) {}\r\n    super.paint(g);\r\n}\r\n\r\npublic void setShape() {\r\n    Rectangle bounds = getBounds();\r\n    Rectangle outlineBounds = outlinePanel.getBounds();\r\n    Area newShape = new Area (new Rectangle(0, 0, bounds.width, bounds.height));\r\n    newShape.subtract(new Area(new Rectangle(3, outlineBounds.y + 3, outlineBounds.width - 6, outlineBounds.height - 6)));\r\n    setSize(bounds.width, bounds.height);\r\n    AWTUtilities.setWindowShape(this, newShape);\r\n}\r\n\r\npublic void mouseDragged(MouseEvent e) {\r\n    int dx = e.getXOnScreen() - mouseX;\r\n    int dy = e.getYOnScreen() - mouseY;\r\n\r\n    Rectangle newBounds = getBounds();\r\n    newBounds.translate(dx, dy);\r\n    newBounds.width -= dx;\r\n    newBounds.height -= dy;\r\n\r\n    mouseX = e.getXOnScreen();\r\n    mouseY = e.getYOnScreen();\r\n\r\n    setBounds(newBounds);\r\n}\r\n\r\npublic void mousePressed(MouseEvent e) {\r\n    mouseX = e.getXOnScreen();\r\n    mouseY = e.getYOnScreen();\r\n}\r\n\r\npublic void mouseMoved(MouseEvent e) {}\r\npublic void mouseClicked(MouseEvent e) {}\r\npublic void mouseReleased(MouseEvent e) {}\r\npublic void mouseEntered(MouseEvent e) {}\r\npublic void mouseExited(MouseEvent e) {}\r\n</code></pre>\r\n\r\n<p>}</p>\r\n\r\n<p>The overridden paint() method can be used as a breakpoint or the Thread.sleep() can be uncommented there to provide a clearer view of the update as it happens.</p>\r\n\r\n<p>My problem seems to stem from the setBounds() method causing the window to be painted to the screen before being laid out.</p>\r\n\r\n<p>Window before resizing, as it should look:</p>\r\n\r\n<p>alt text</p>\r\n\r\n<p>Window during resizing larger (up and left) as seen at breakpoint at overridden paint() method):</p>\r\n\r\n<p>alt text</p>\r\n\r\n<p>Window during resizing smaller (down and right) as seen at breakpoint at overridden paint() method):</p>\r\n\r\n<p>alt text</p>\r\n\r\n<p>Granted these screenshots are taken during aggressive mouse drag movements but the flicker becomes quite annoying even for more moderate mouse drags.</p>\r\n\r\n<p>The green area on the resize to larger screenshot shows the new background that gets drawn before any painting/layout is done, it seems to happen in the underlying ComponentPeer or native window manager. The blue area on the \'resize to smaller\' screenshot shows the JPanel\'s background being pushed into view but is now out of date. This happens under Linux(Ubuntu) and Windows XP.</p>\r\n\r\n<p>Has anyone found a way to cause a Window or JWindow to resize to a back buffer before any changes are made to the screen and thus avoid this flickering effect? Maybe there is a java.awt.... system property that can be set to avoid this, I could not find one though.</p>\r\n\r\n<p>Edit #2: Comment out the call to AWTUtilities.setWindowShape() (and optionally uncomment the Thread.sleep(10) line in paint()) then drag the top panel around aggressively in order to clearly see the nature of the flicker.</p>\r\n\r\n<p>Edit #3: Is anyone able to test this behaviour under Sun Java on Windows 7 or Mac OSX ?</p>'),(73,'en_us','Question',21,'title','AjaxForm and app engine blobstore'),(74,'en_us','Question',21,'content','<p>AjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstoreAjaxForm and app engine blobstore</p>'),(75,'en_us','Answer',6,'content','There can\'t be anything like this'),(76,'en_us','Answer',7,'content','<p>How can I tell sir?</p>'),(77,'en_us','Question',22,'title','Using one model to read and another to save data'),(78,'en_us','Question',22,'content','<p>I have model named google&#95;news.php wich uses the external data, and another model saved&#95;news.php wich usues my saved&#95;news table in database,</p>\r\n\r\n<p>In my controller I declared that Im using this two models:</p>\r\n\r\n<p>var $uses = array(\'GoogleNews\', \'SavedNews\');</p>\r\n\r\n<p>and my index function reads data:</p>\r\n\r\n<p>$this->set(\'news\',$this->GoogleNews->find(\'all\'));</p>\r\n\r\n<p>and my view looks like this:</p>\r\n\r\n<?php foreach( $news as $newsItem ) : ?>\r\n\r\n<?php echo $html->link($newsItem[\'GoogleNews\'][\'title\'], array(\'action\'=>\'add\', $newsItem[\'GoogleNews\'][\'title\'])); ?>\r\n\r\n<?php echo $newsItem[\'GoogleNews\'][\'encoded\']; ?>\r\n\r\n<p><em></p>\r\n\r\n<hr>\r\n\r\n<?php endforeach; ?>\r\n\r\n<p>How to write the add function i my controller to save each data to my database?</p>'),(79,'en_us','Tag',6,'name','models, relations'),(80,'en_us','Question',23,'title','Does it identify the user automatically?'),(81,'en_us','Question',23,'content','<p>Does it identify the user automatically?</p>'),(82,'en_us','Tag',7,'name','something, anything'),(83,'en_us','Question',24,'title','Error: $(document).ready is not a function'),(84,'en_us','Question',24,'content','<p>Error: $(document).ready is not a function</p>'),(85,'en_us','Tag',8,'name','error, cakephp'),(86,'en_us','Question',25,'title','how can i spedify fields when saving details'),(87,'en_us','Question',25,'content','<p>Hi,</p>\r\n\r\n<p>i have a controller userscontroller ,the user table contains the fields like username,password,groupname,created date,updated date,lastlogin etc.</p>\r\n\r\n<p>1.How can i insert only the details username,password,created date to the user table when a new user is created.(how can i specify more than one fields when saving the user details).?</p>\r\n\r\n<p>please help me.....</p>'),(88,'en_us','Tag',9,'name','error'),(89,'en_us','Question',26,'title','how can i spedify fields when saving details'),(90,'en_us','Question',26,'content','<p>Hi,</p>\r\n\r\n<p>i have a controller userscontroller ,the user table contains the fields like username,password,groupname,created date,updated date,lastlogin etc.</p>\r\n\r\n<p>1.How can i insert only the details username,password,created date to the user table when a new user is created.(how can i specify more than one fields when saving the user details).?</p>\r\n\r\n<p>please help me.....</p>'),(91,'en_us','Tag',10,'name',' model'),(92,'en_us','Question',27,'title','how can i spedify fields when saving details'),(93,'en_us','Question',27,'content','<p>Hi,</p>\r\n\r\n<p>i have a controller userscontroller ,the user table contains the fields like username,password,groupname,created date,updated date,lastlogin etc.</p>\r\n\r\n<p>1.How can i insert only the details username,password,created date to the user table when a new user is created.(how can i specify more than one fields when saving the user details).?</p>\r\n\r\n<p>please help me.....</p>'),(94,'en_us','Tag',11,'name','model'),(95,'en_us','Question',28,'title','why people need loans?'),(96,'en_us','Question',28,'content','<p>what will happen if they dont take loans??</p>'),(97,'en_us','Tag',12,'name','finance'),(98,'en_us','Question',29,'title','3.7.3.1.4 find(\'list\')'),(99,'en_us','Question',29,'content','<p>find(\'list\', $params) returns an indexed array, useful for any use where you would want a list such as for populating input select boxes. Below are a couple of simple (controller code) examples:</p>'),(100,'en_us','Tag',13,'name','what'),(101,'en_us','Question',30,'title','we have some more questions'),(102,'en_us','Question',30,'content','<p>wht you have so many questions?? </p>'),(103,'en_us','Tag',14,'name','uk'),(104,'en_us','Question',31,'title','here is one more questions'),(105,'en_us','Question',31,'content','<p>i am expecting lot of errors this time</p>'),(106,'en_us','Tag',15,'name','errors'),(107,'en_us','Tag',16,'name',' height'),(108,'en_us','Tag',17,'name',' falling'),(109,'en_us','Tag',18,'name',' danger'),(110,'en_us','Question',32,'title','here is one more questions'),(111,'en_us','Question',32,'content','<p>i am expecting lot of errors this time</p>'),(112,'en_us','Tag',19,'name','danger'),(113,'en_us','Tag',20,'name',' wonderful'),(114,'en_us','Tag',21,'name',' newtag'),(115,'en_us','Tag',22,'name',' oldtag'),(116,'en_us','Question',33,'title','This is a funny question???'),(117,'en_us','Question',33,'content','<p>This is a funny question???This is a funny question???This is a funny question???This is a funny question???This is a funny question???This is a funny question???This is a funny question???This is a funny question???This is a funny question???</p>'),(118,'en_us','Tag',23,'name','funny'),(119,'en_us','Tag',24,'name',' tragic'),(120,'en_us','Tag',25,'name',' sad'),(121,'en_us','Question',34,'title','do you think it\'ll ever work?'),(122,'en_us','Question',34,'content','<p>yes. I am hopeful. Why you have got this doubt?</p>'),(123,'en_us','Tag',26,'name','doubt'),(124,'en_us','Tag',27,'name','hope'),(125,'en_us','Question',35,'title','was einstein mad or scientist?'),(126,'en_us','Question',35,'content','<p>I tend to think he must be the height of madness. What do you think?</p>'),(127,'en_us','Tag',28,'name','mad'),(128,'en_us','Question',36,'title','Samba Windows File Sharing'),(129,'en_us','Question',36,'content','<p>What do you know about Samba Windows File Sharing</p>'),(130,'en_us','Tag',29,'name',''),(131,'en_us','Question',37,'title','was einstein mad or scientist?'),(132,'en_us','Question',37,'content','<p>was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?was einstein mad or scientist?</p>'),(133,'en_us','Tag',30,'name',''),(134,'en_us','Question',38,'title','Extended Internet Services?'),(135,'en_us','Question',38,'content','<p>What are Extended Internet Services?</p>'),(136,'en_us','Tag',31,'name','extended'),(137,'en_us','Tag',32,'name','sad'),(138,'en_us','Question',39,'title','was einstein mad or scientist?'),(139,'en_us','Question',39,'content','<p>once again the great question</p>'),(140,'en_us','Tag',33,'name','mad'),(141,'en_us','Tag',34,'name','sad'),(142,'en_us','Tag',35,'name','scientist'),(143,'en_us','Question',40,'title','CakePHP 1.3 Ajax pagination using JQuery helper'),(144,'en_us','Question',40,'content','<p>I am building a cake application using cake 1.3 and JS helper using JQuery. I followed the ajax pagination tutorial properly from <a href=\"http://book.cakephp.org/view/1600/Ajax-Pagination\">cake\'s 1.3 tutorial</a> however there is some issue. First page loads fine and when I click on pagination links, action is performed using Ajax however the next page is empty and then no other pagination link works (nothing happens on click). I guess it\'s a pagination chaining issue however I am following the steps needed to chain the pages properly as mentioned in above tutorial.</p>\r\n\r\n<p>One difference in my case is that I am not using the layout div\'s ID, instead I am using a div from view inside which I am looping through the data. This div contains the paginator options and pagination links so I guess it shouldn\'t be an issue.</p>'),(145,'en_us','Tag',36,'name','cakephp'),(146,'en_us','Tag',37,'name','ajax'),(147,'en_us','Tag',38,'name','jquery'),(148,'en_us','Tag',39,'name','pagination'),(149,'en_us','Answer',8,'content','<p>I wish I could help. I am also facing the same issue :-)</p>'),(150,'en_us','Answer',9,'content','<p>This is wrong answer. NO USE AT ALL. NONSENSE.</p>'),(151,'en_us','Answer',10,'content','<p>Wow! interesting question I must say.</p>');
/*!40000 ALTER TABLE `i18n` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oid_associations`
--

DROP TABLE IF EXISTS `oid_associations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oid_associations` (
  `server_url` blob NOT NULL,
  `handle` varchar(255) NOT NULL,
  `secret` blob NOT NULL,
  `issued` int(11) NOT NULL,
  `lifetime` int(11) NOT NULL,
  `assoc_type` varchar(64) NOT NULL,
  PRIMARY KEY (`server_url`(255),`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oid_associations`
--

LOCK TABLES `oid_associations` WRITE;
/*!40000 ALTER TABLE `oid_associations` DISABLE KEYS */;
INSERT INTO `oid_associations` VALUES ('https://www.google.com/accounts/o8/ud','AOQobUezjOIHCNkkSIk7gm0h4doH5wqPxrZrHJU8NyiSX7rnthBnAt5V','ƒû*\\¢æ§BÅÃ#)∞°ø?ƒ´',1291354002,46799,'HMAC-SHA1');
/*!40000 ALTER TABLE `oid_associations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oid_nonces`
--

DROP TABLE IF EXISTS `oid_nonces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oid_nonces` (
  `server_url` varchar(2047) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `salt` char(40) NOT NULL,
  UNIQUE KEY `server_url` (`server_url`(255),`timestamp`,`salt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oid_nonces`
--

LOCK TABLES `oid_nonces` WRITE;
/*!40000 ALTER TABLE `oid_nonces` DISABLE KEYS */;
/*!40000 ALTER TABLE `oid_nonces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` bigint(10) unsigned NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created` datetime NOT NULL,
  `status` enum('open','closed') DEFAULT 'open',
  `category_id` int(10) unsigned DEFAULT NULL,
  `modified` datetime NOT NULL,
  `hits` bigint(20) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `qidindex` (`id`),
  KEY `quindex` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 COMMENT='questions to be stored here.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (40,'CakePHP 1.3 Ajax pagination using JQuery helper','<p>I am building a cake application using cake 1.3 and JS helper using JQuery. I followed the ajax pagination tutorial properly from <a href=\"http://book.cakephp.org/view/1600/Ajax-Pagination\">cake\'s 1.3 tutorial</a> however there is some issue. First page loads fine and when I click on pagination links, action is performed using Ajax however the next page is empty and then no other pagination link works (nothing happens on click). I guess it\'s a pagination chaining issue however I am following the steps needed to chain the pages properly as mentioned in above tutorial.</p>\r\n\r\n<p>One difference in my case is that I am not using the layout div\'s ID, instead I am using a div from view inside which I am looping through the data. This div contains the paginator options and pagination links so I guess it shouldn\'t be an issue.</p>',15,'2010-12-07 10:49:47','open',22,'2010-12-07 16:15:50',86);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_comments`
--

DROP TABLE IF EXISTS `questions_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_comments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `question_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_comments`
--

LOCK TABLES `questions_comments` WRITE;
/*!40000 ALTER TABLE `questions_comments` DISABLE KEYS */;
INSERT INTO `questions_comments` VALUES (2,40,15,'this is a wonderful comment!!!',NULL),(3,40,15,'this is a another wonderful comment!!!',NULL),(4,40,15,'this is a yet another wonderful comment!!!',NULL),(5,40,15,'this is a yet yet another wonderful comment!!!',NULL),(6,40,15,'this is a yet yet yet another wonderful comment!!!',NULL);
/*!40000 ALTER TABLE `questions_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_tags`
--

DROP TABLE IF EXISTS `questions_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_tags` (
  `id` bigint(11) unsigned NOT NULL,
  `question_id` bigint(11) unsigned DEFAULT NULL,
  `tag_id` bigint(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_tags`
--

LOCK TABLES `questions_tags` WRITE;
/*!40000 ALTER TABLE `questions_tags` DISABLE KEYS */;
INSERT INTO `questions_tags` VALUES (106,40,39),(105,40,38),(104,40,37),(103,40,36);
/*!40000 ALTER TABLE `questions_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions_votes`
--

DROP TABLE IF EXISTS `questions_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions_votes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `question_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `type` enum('up','down') DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions_votes`
--

LOCK TABLES `questions_votes` WRITE;
/*!40000 ALTER TABLE `questions_votes` DISABLE KEYS */;
INSERT INTO `questions_votes` VALUES (194,40,15,'up','2010-12-07 10:54:36');
/*!40000 ALTER TABLE `questions_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` bigint(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `longname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tidindex` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (39,'pagination',NULL),(38,'jquery',NULL),(37,'ajax',NULL),(36,'cakephp',NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(10) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '',
  `level` tinyint(4) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `group_id` int(11) unsigned DEFAULT NULL,
  `about` text,
  `avatar` varchar(200) DEFAULT NULL,
  `facebook_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `uidindex` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (16,'basant','Basant','Singh','basant@sopantech.com','0e22beeb38888eace9750e4fbc026243e7761be8',1,'2010-10-26 16:29:00','2010-12-03 14:26:30',11,'','',0),(17,'hemant','Hemant','Singh','hemant@sopantech.com','0655d6dc98d4235dbb137d984d7e78661ec89b1e',1,'2010-10-26 16:29:37','2010-10-26 16:29:52',12,'','',0),(18,'sopantech','SopanTech','Solutions','info@sopantech.com','0e22beeb38888eace9750e4fbc026243e7761be8',1,'2010-10-27 14:34:54','2010-10-27 14:34:54',NULL,'',NULL,0),(15,'shishir','Shishir','Singh','shishir@sopantech.com','0e22beeb38888eace9750e4fbc026243e7761be8',1,'2010-10-26 16:28:09','2010-11-01 15:32:19',10,'','',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_tags`
--

DROP TABLE IF EXISTS `users_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_tags` (
  `id` bigint(11) unsigned NOT NULL,
  `tag_id` bigint(11) unsigned DEFAULT NULL,
  `user_id` bigint(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_tags`
--

LOCK TABLES `users_tags` WRITE;
/*!40000 ALTER TABLE `users_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `watchlists`
--

DROP TABLE IF EXISTS `watchlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `watchlists` (
  `id` bigint(10) unsigned NOT NULL,
  `question_id` bigint(10) unsigned DEFAULT NULL,
  `user_id` bigint(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wlindex` (`id`),
  KEY `wuindex` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `watchlists`
--

LOCK TABLES `watchlists` WRITE;
/*!40000 ALTER TABLE `watchlists` DISABLE KEYS */;
/*!40000 ALTER TABLE `watchlists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'answers'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-12-07 16:19:31
