
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
  `code_name` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL DEFAULT '',
  `code` varchar(1000) NOT NULL DEFAULT '',
  `html` varchar(4000) NOT NULL DEFAULT '',
  `js` varchar(3000) NOT NULL DEFAULT '',
  `css` varchar(4000) NOT NULL DEFAULT '',
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
INSERT INTO `code_code` VALUES ('1','1','Hello world','','','&lt;div class=&quot;hello&quot;&gt;Hello world&lt;/div&gt;','// 没有JS啦','.hello {\n	color: #f00;\n	font-size: 50px;\n}','2016-09-10 11:24:43','2016-09-10 11:24:43'),('1473500776','1473470973','呵呵','','','&lt;h1&gt;呵呵&lt;/h1&gt;','function() text{\n    alert(1);\n}','h1 {\n    color: #f00;\n}','2016-09-10 17:46:16','2016-09-10 17:46:16'),('1473511063','1473470973','','','','','','','2016-09-10 20:37:43','2016-09-10 20:37:43'),('1473512581','1473470973','html测试','','','&lt;div class=&quot;test&quot;&gt;&lt;/div&gt;','','.test {\n	width: 100px;\n	height: 100px;\n	background-color: #09f;\n}','2016-09-10 21:03:01','2016-09-10 21:03:01'),('1473526184','1473470973','css实现H5','','','&lt;div class=&quot;sk-rotating-plane&quot;&gt;&lt;/div&gt;','','body{\n  background-color: #d35400;\n}\n.sk-rotating-plane {\n  width: 40px;\n  height: 40px;\n  background-color: #FFF;\n  margin: 40px auto;\n  -webkit-animation: sk-rotatePlane 1.2s infinite ease-in-out;\n          animation: sk-rotatePlane 1.2s infinite ease-in-out; }\n\n@-webkit-keyframes sk-rotatePlane {\n  0% {\n    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);\n            transform: perspective(120px) rotateX(0deg) rotateY(0deg); }\n  50% {\n    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);\n            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }\n  100% {\n    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);\n            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }\n\n@keyframes sk-rotatePlane {\n  0% {\n    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);\n            transform: perspective(120px) rotateX(0deg) rotateY(0deg); }\n  50% {\n    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);\n            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }\n  100% {\n    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);\n            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); } }','2016-09-11 00:49:44','2016-09-11 00:49:44'),('1473553937','1473470973','css 动画 ready','','','&lt;div class=&quot;demo&quot;&gt;\n  &lt;div class=&quot;demo__colored-blocks&quot;&gt;\n    &lt;div class=&quot;demo__colored-blocks-rotater&quot;&gt;\n      &lt;div class=&quot;demo__colored-block&quot;&gt;&lt;/div&gt;\n      &lt;div class=&quot;demo__colored-block&quot;&gt;&lt;/div&gt;\n      &lt;div class=&quot;demo__colored-block&quot;&gt;&lt;/div&gt;\n    &lt;/div&gt;\n    &lt;div class=&quot;demo__colored-blocks-inner&quot;&gt;&lt;/div&gt;\n    &lt;div class=&quot;demo__text&quot;&gt;Ready&lt;/div&gt;\n  &lt;/div&gt;\n  &lt;div class=&quot;demo__inner&quot;&gt;\n    &lt;svg class=&quot;demo__numbers&quot; viewBox=&quot;0 0 100 100&quot;&gt;\n      &lt;defs&gt;\n        &lt;path class=&quot;demo__num-path-1&quot; d=&quot;M40,28 55,22 55,78&quot;&gt;&lt;/path&gt;\n        &lt;path class=&quot;demo__num-join-1-2&quot; d=&quot;M55,78 55,83 a17,17 0 1,0 34,0 a20,10 0 0,0 -20,-10&quot;&gt;&lt;/path&gt;\n        &lt;path class=&quot;demo__num-path-2&quot; d=&quot;M69,73 l-35,0 l30,-30 a16,16 0 0,0 -22.6,-22.6 l-7,7&quot;&gt;&lt;/path&gt;\n        &lt;path class=&quot;demo__num-join-2-3&quot; d=&quot;M28,69 Q25,44 34.4,27.4&quot;&gt;&lt;/path&gt;\n        &lt;path class=&quot;demo__num-path-3&quot; d=&quot;M30,20 60,20 40,50 a18,15 0 1,1 -12,19&quot;&gt;&lt;/path&gt;\n      &lt;/defs&gt;\n      &lt;path class=&quot;demo__numbers-path&quot; d=&quot;M-10,20 60,20 40,50 a18,15 0 1,1 -12,19 \n               Q25,44 34.4,27.4\n               l7,-7 a16,16 0 0,1 22.6,22.6 l-30,30 l35,0 L69,73 \n               a20,10 0 0,1 20,10 a17,17 0 0,1 -34,0 L55,83 \n               l0,-61 L40,28&quot;&gt;&lt;/path&gt;\n    &lt;/svg&gt;\n  &lt;/div&gt;\n&lt;/div&gt;','','\n        *, *:before, *:after {\n  box-sizing: border-box;\n  margin: 0;\n  padding: 0; }\n\nbody {\n  background: #32386D;\n  font-family: Helvetica, Arial, sans-serif; }\n\n.demo {\n  position: absolute;\n  left: 50%;\n  top: 50%;\n  width: 500px;\n  height: 140px;\n  margin-top: -70px;\n  padding: 10px;\n  border-radius: 20px;\n  transform: translateX(-50%); }\n  .demo__colored-blocks {\n    overflow: hidden;\n    position: absolute;\n    left: 50%;\n    top: 0;\n    width: 500px;\n    height: 100%;\n    margin-left: -250px;\n    padding: 10px;\n    border-radius: 20px;\n    perspective: 1000px;\n    animation: demoAnim 4s ease-in-out infinite, contAnim 4s infinite; }\n    .demo__colored-blocks-rotater {\n      position: absolute;\n      left: 0;\n      top: 0;\n      width: 100%;\n      height: 100%;\n      border-radius: inherit;\n      animation: rotation 1.3s linear infinite; }\n    .demo__colored-blocks-inner {\n      overflow: hidden;\n      position: relative;\n      height: 100%;\n      background: #32386D;\n      border-radius: inherit; }\n  .demo__colored-block {\n    position: absolute;\n    left: 50%;\n    top: 50%;\n    width: 300%;\n    height: 300%;\n    transform-origin: 0 0; }\n    .demo__colored-block:nth-child(1) {\n      transform: rotate(0deg) skewX(-30deg);\n      background-color: #FD3359; }\n    .demo__colored-block:nth-child(2) {\n      transform: rotate(120deg) skewX(-30deg);\n      background-color: #F4D302; }\n    .demo__colored-block:nth-child(3) {\n      transform: rotate(240deg) skewX(-30deg);\n      background-color: #21BDFF; }\n  .demo__inner {\n    overflow: hidden;\n    position: relative;\n    width: 100%;\n    height: 100%; }\n  .demo__numbers {\n    overflow: visible;\n    position: absolute;\n    left: 50%;\n    top: 50%;\n    width: 100px;\n    height: 100px;\n    margin-left: -50px;\n    margin-top: -50px; }\n    .demo__numbers-path {\n      fill: none;\n      stroke-width: 10px;\n      stroke: #fff;\n      stroke-linecap: round;\n      stroke-linejoin: round;\n      stroke-dasharray: 0, 518.05507;\n      stroke-dashoffset: 0;\n      animation: numAnim 4s ease-in-out infinite;\n      opacity: 0; }\n  .demo__text {\n    position: absolute;\n    left: 50%;\n    top: 0;\n    width: 500px;\n    height: 100%;\n    margin-left: -250px;\n    text-align: center;\n    line-height: 140px;\n    font-size: 100px;\n    color: #fff;\n    text-transform: uppercase;\n    letter-spacing: 15px;\n    transform: translateX(10px);\n    animation: hideText 4s infinite; }\n\n@keyframes contAnim {\n  15%, 100% {\n    margin-left: -250px;\n    width: 500px; }\n  25%, 90% {\n    margin-left: -70px;\n    width: 140px; } }\n@keyframes numAnim {\n  15% {\n    stroke-dasharray: 0, 518.05507;\n    stroke-dashoffset: 0;\n    opacity: 0; }\n  25%, 41% {\n    opacity: 1;\n    stroke-dasharray: 144.42566, 518.05507;\n    stroke-dashoffset: -40; }\n  53%, 66% {\n    stroke-dasharray: 136.02162, 518.05507;\n    stroke-dashoffset: -227.2387; }\n  76% {\n    stroke-dasharray: 113.47512, 518.05507;\n    stroke-dashoffset: -445.89957; }\n  88%, 100% {\n    stroke-dasharray: 72.15549, 518.05507;\n    stroke-dashoffset: -445.89957; }\n  92% {\n    opacity: 1; }\n  100% {\n    opacity: 0; } }\n@keyframes rotation {\n  to {\n    transform: rotate(360deg); } }\n@keyframes demoAnim {\n  15% {\n    border-radius: 20px;\n    transform: rotate(0); }\n  30%, 43% {\n    border-radius: 50%;\n    transform: rotate(360deg); }\n  52%, 65% {\n    border-radius: 0;\n    transform: rotate(720deg); }\n  78%, 90% {\n    border-radius: 50%;\n    transform: rotate(1080deg); }\n  100% {\n    border-radius: 20px;\n    transform: rotate(1440deg); } }\n@keyframes hideText {\n  15%, 100% {\n    opacity: 1; }\n  20%, 96% {\n    opacity: 0; } }','2016-09-11 08:32:17','2016-09-11 08:32:17'),('1473558083','1473470973','删除','','','删除','','','2016-09-11 09:41:23','2016-09-11 09:41:23'),('1473568061','1','活动','','','&lt;div class=&quot;title&quot;&gt;闯关活动&lt;/div&gt;\n&lt;div class=&quot;title&quot;&gt;排名奖品&lt;/div&gt;\n&lt;div class=&quot;title&quot;&gt;活动规则&lt;/div&gt;','','.title {\n    position: relative;\n    width: 180px;\n    margin: 0 auto;\n    margin-bottom: 20px;\n    color: #fff;\n    line-height: 50px;\n    text-align: center;\n    font-size: 24px;\n    background-color: #fa7c28;\n}\n.title:before {\n    position: absolute;\n    left: 0;\n    top: 6px;\n    content: &quot;  &quot;;\n    display: block;\n    margin-left: -30px;\n    border-left: 12px solid transparent;\n    border-top: 18px solid #fa7c28;\n    border-right: 12px solid #fa7c28;\n    border-bottom: 18px solid #fa7c28;\n}\n.title:after {\n    position: absolute;\n    top: 6px;\n    right: 0;\n    content: &quot;  &quot;;\n    display: block;\n    margin-right: -30px;\n    border-left: 12px solid #fa7c28;\n    border-top: 18px solid #fa7c28;\n    border-right: 12px solid transparent;\n    border-bottom: 18px solid #fa7c28;\n}','2016-09-11 12:27:41','2016-09-11 12:27:41'),('2','1473470973','默认代码','','','<div class=\"frame\">','','@import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);','2016-09-10 11:24:43','2016-09-10 11:24:43');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
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
  `like_count` int(11) NOT NULL DEFAULT '0' COMMENT '用户是否锁定',
  `fork_count` int(11) NOT NULL DEFAULT '0',
  `insist_day` int(11) NOT NULL DEFAULT '0',
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
INSERT INTO `code_user` VALUES ('1','1418503647@qq.com','陈建杭','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 08:15:40','',0,'',0,0,'',0,'',2,2,2),('1473470973','123456@163.com','这没啥稀奇','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 09:29:33','',0,'',0,0,'',0,'',1,1,1),('1473470974','test@qq.com','张伟','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 10:17:22','',0,'',0,0,'',0,'',0,0,2),('1473471545','pangxie@qq.com','螃蟹','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 09:39:05','',0,'',0,0,'',0,'',3,0,4),('1473471607','chongzi@qq.com','虫子','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 09:40:07','',0,'',0,0,'',0,'',0,0,0),('1473473842','chengxuyaun@qq.com','程序猿','c4ca4238a0b923820dcc509a6f75849b','2016-09-10 10:17:22','',0,'',0,0,'',0,'',0,0,0);
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

-- Dump completed on 2016-09-11 20:52:24
