
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: code
-- ------------------------------------------------------
-- Server version	5.7.3-m13

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
-- Table structure for table `code_code`
--

DROP TABLE IF EXISTS `code_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code_code` (
  `code_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `code` varchar(1000) NOT NULL DEFAULT '',
  `html` varchar(1000) NOT NULL DEFAULT '',
  `js` varchar(1000) NOT NULL DEFAULT '',
  `css` varchar(1000) NOT NULL DEFAULT '',
  `create_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code_code`
--

LOCK TABLES `code_code` WRITE;
/*!40000 ALTER TABLE `code_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `code_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `code_setting`
--

DROP TABLE IF EXISTS `code_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code_setting` (
  `setting_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` varchar(300) NOT NULL,
  PRIMARY KEY (`setting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code_setting`
--

LOCK TABLES `code_setting` WRITE;
/*!40000 ALTER TABLE `code_setting` DISABLE KEYS */;
INSERT INTO `code_setting` VALUES (1,'websiteName','RunCode');
/*!40000 ALTER TABLE `code_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `code_user`
--

DROP TABLE IF EXISTS `code_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code_user` (
  `user_id` varchar(20) NOT NULL,
  `email` varchar(48) DEFAULT NULL,
  `username` varchar(16) NOT NULL COMMENT '账号',
  `password` varchar(32) NOT NULL,
  `register_time` datetime NOT NULL,
  `phone` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `sex` tinyint(4) NOT NULL DEFAULT '0' COMMENT '性别（0未设置、1男、2女）',
  `true_name` varchar(4) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `score` smallint(3) NOT NULL DEFAULT '0',
  `avatar` varchar(500) NOT NULL DEFAULT '' COMMENT '头像路径',
  `is_email_valid` tinyint(4) NOT NULL DEFAULT '0' COMMENT '邮箱是否已经验证（0否1是）',
  `description` varchar(100) NOT NULL DEFAULT '',
  `is_lock` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户是否锁定',
  `domain` varchar(45) NOT NULL DEFAULT '' COMMENT '个性域名',
  PRIMARY KEY (`user_id`),
  KEY `index2` (`username`),
  KEY `index3` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code_user`
--

LOCK TABLES `code_user` WRITE;
/*!40000 ALTER TABLE `code_user` DISABLE KEYS */;
INSERT INTO `code_user` VALUES ('1','1418503647@qq.com','陈建杭','123456','2016-09-10 08:15:40','',0,'',0,0,'',0,'',0,''),('1473470973','123456@163.com','cjh@qq.com','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 09:29:33','',0,'',0,0,'',0,'',0,''),('1473471545','pangxie@qq.com','pangxie@qq.com','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 09:39:05','',0,'',0,0,'',0,'',0,''),('1473471607','chongzi@qq.com','chongzi@qq.com','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 09:40:07','',0,'',0,0,'',0,'',0,''),('1473473842','chengxuyaun@qq.com','程序猿','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 10:17:22','',0,'',0,0,'',0,'',0,'');
/*!40000 ALTER TABLE `code_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-10 10:26:40
