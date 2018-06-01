/*
SQLyog Ultimate v8.61 
MySQL - 5.5.5-10.1.31-MariaDB : Database - webmail2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`webmail2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `webmail2`;

/*Table structure for table `user_details` */

DROP TABLE IF EXISTS `user_details`;

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `frist_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel_no` varchar(255) DEFAULT NULL,
  `active_status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user_details` */

insert  into `user_details`(`user_id`,`frist_name`,`last_name`,`email`,`tel_no`,`active_status`) values (1,'sandesh','raj','rajsa@deakin.edu.au','+61414855176',0),(2,'sunjay','gur','skgur@deakin.edu.au','02122',0);

/*Table structure for table `user_message` */

DROP TABLE IF EXISTS `user_message`;

CREATE TABLE `user_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date_time` varchar(255) DEFAULT NULL,
  `msg_type` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `msg_status` int(11) NOT NULL DEFAULT '0',
  `active_status` int(11) NOT NULL DEFAULT '0',
  `milisecond` longtext,
  `day` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `user_message` */

insert  into `user_message`(`id`,`user_id`,`date_time`,`msg_type`,`message`,`msg_status`,`active_status`,`milisecond`,`day`) values (3,2,'',NULL,'aiusdhiuhfsdasjgagsdadsfasjd',0,0,'1526378940',2),(4,1,NULL,'email','Hello world',0,0,'1526397780',NULL),(5,1,NULL,'sms','hi',0,0,'1526397840',NULL),(7,1,NULL,NULL,'aa',0,0,'1526410620',NULL),(9,1,NULL,NULL,'',0,0,'1526386560',NULL),(10,1,NULL,'email','email',0,0,'1526398800',NULL),(11,1,NULL,'sms','sms',0,0,'1526399700',NULL),(12,1,NULL,'sms','By sms',0,0,'1526404200',NULL),(14,1,NULL,'sms','Hello world',0,0,'1526446980',NULL),(15,1,NULL,'sms','https://www.google.com/',0,0,'1526447220',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
