/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.16 : Database - phpmvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`phpmvc` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `phpmvc`;

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `short_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `author_name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`date`,`short_content`,`text`,`author_name`) values (1,'тест','2018-04-04','тестовая запись','В данный момент я работаю над дополнительными платными материалами и домашними заданиями этого урока. Как только они станут доступны, информация появится в этом блоке.\r\n\r\nЕсли Вы заинтересовались, напишите мне и я постараюсь подготовить их быстрее.','Fayziev M'),(2,'тест2','2018-04-18','тестттт','Сфера Web не стоит на месте. Сайты постоянно совершенствуются с учетом удобства использования.\r\n\r\nВ предыдущем занятии мы начали реализацию MVC каркаса будущего проекта. Сейчас же перед нами стоит задача модифицировать написанный код для поддержки ЧПУ - понятных человеку адресов страниц. В реализации этого подхода нам понадобятся некоторые знания регулярных выражений.\r\n\r\nТакже в уроке рассматривается процесс создания модели (Model) и вида (View) на примере раздела \"Новости\".','Fayziev M');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
