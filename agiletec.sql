/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.5-10.4.21-MariaDB : Database - agiletec
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`agiletec` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `agiletec`;

/*Table structure for table `aboutus` */

DROP TABLE IF EXISTS `aboutus`;

CREATE TABLE `aboutus` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tiile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `aboutus` */

insert  into `aboutus`(`id`,`image`,`name`,`tiile`) values (1,'prof.jpg','Darrel steword','Developer'),(2,'prof2.jpg','Brooklyn Symmons','Developer'),(3,'prof3.jpg','Svannaha nguyen','Developer'),(4,'prof4.jpg','Jacob jonnus','admin'),(5,'prof5.jpg','Marvin MC kinney','Admin');

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`username`,`password`) values ('agiletec','123456'),('kowshik','qwerty');

/*Table structure for table `careerregister` */

DROP TABLE IF EXISTS `careerregister`;

CREATE TABLE `careerregister` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pnum` varchar(100) DEFAULT NULL,
  `resume` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `careerregister` */

insert  into `careerregister`(`id`,`name`,`email`,`pnum`,`resume`) values (5,'rashmi','rashmi@gmail.com','878990','resume.pdf'),(6,'rittu','rittu@gmail.com','998765','resume.pdf');

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `prereq` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `exit` varchar(100) NOT NULL,
  `descript` varchar(500) NOT NULL,
  `cimg` varchar(50) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `course` */

insert  into `course`(`id`,`cname`,`level`,`prereq`,`duration`,`exit`,`descript`,`cimg`,`syllabus`) values (4,'Web Development','Beginner/ Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','web.jpg','2. Web Programming.pdf'),(5,'Android Development','Advance','Basic Knowledge of Java','68hrs','Android Application Developer','Android programming language is backed and developed by Google and Open Handset Alliance (a consortium of 84 firms). The number of handsets running on Android increases by 21000 fresh and new installs per day and that is good enough reason for one to start developing applications and games for that market / audience. By learning the trending technology like Android anyone can get job easily in IT.','android.jpg','2. OOP with Java.pdf');

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(20) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

/*Data for the table `gallery` */

insert  into `gallery`(`id`,`image`,`title`) values (8,'gal1.png','Life at AgileTEC'),(9,'gal2.png','Life at AgileTEC'),(10,'gal3.png','Life at AgileTEC'),(11,'gal4.png','Life at AgileTEC'),(22,'gal5.png','Life at AgileTEC'),(24,'gal6.png','Life at AgileTEC');

/*Table structure for table `ieeeprojectguide` */

DROP TABLE IF EXISTS `ieeeprojectguide`;

CREATE TABLE `ieeeprojectguide` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `prere` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `exit` varchar(100) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `pimg` varchar(50) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ieeeprojectguide` */

insert  into `ieeeprojectguide`(`id`,`service_name`,`level`,`prere`,`duration`,`exit`,`descrip`,`pimg`,`syllabus`) values (1,'web design project','beginner/Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','st1.png','2. Web Programming.pdf'),(2,'Android App','Beginner/ Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','st1.png','Web Programming.pdf'),(3,'website design','Beginner/ Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','st1.png','Web Programming.pdf');

/*Table structure for table `internshipprogram` */

DROP TABLE IF EXISTS `internshipprogram`;

CREATE TABLE `internshipprogram` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `prere` varchar(100) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `exit` varchar(100) DEFAULT NULL,
  `descrip` varchar(500) DEFAULT NULL,
  `iimg` varchar(50) DEFAULT NULL,
  `syllabus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `internshipprogram` */

insert  into `internshipprogram`(`id`,`service_name`,`level`,`prere`,`duration`,`exit`,`descrip`,`iimg`,`syllabus`) values (1,'web development','Beginner/ Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','st1.png','2. OOP with Java.pdf'),(2,'web development','Beginner/ Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','st1.png',' Web Programming.pdf'),(3,'web development','beginner/advance','Basic Knowledge of Computer','68hrs','Web developer','this is decription for above course','st1.png','2. Web Programming.pdf');

/*Table structure for table `intership` */

DROP TABLE IF EXISTS `intership`;

CREATE TABLE `intership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(20) NOT NULL,
  `smail` varchar(20) NOT NULL,
  `spno` int(20) NOT NULL,
  `course` varchar(25) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `intership` */

insert  into `intership`(`id`,`sname`,`smail`,`spno`,`course`,`branch`,`year`) values (1,'Kowshik','kowshik@gmail.com',2147483647,'Diploma','Computer Science',3),(3,'Sanjay','sanjay@gmail.com',1234567890,'Degree','Information Technolo',2),(4,'Akshay','ak@gmail.com',1234567890,'Diploma','Computer Science',4),(13,'new name','newmail@gmail.com',987654443,'Degree','Information Technolo',2),(14,'kowshik1','kowshik1@gmail.com',2147483647,'Diploma','Computer Science',2),(15,'rashmi','rashmikharvi909@gmai',908978675,'Diploma','Information Technolo',2);

/*Table structure for table `iprojectregister` */

DROP TABLE IF EXISTS `iprojectregister`;

CREATE TABLE `iprojectregister` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `smail` varchar(100) DEFAULT NULL,
  `spno` varchar(100) DEFAULT NULL,
  `training_id` int(30) NOT NULL,
  `is_value` int(40) DEFAULT NULL,
  `is_contacted` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `iprojectregister` */

insert  into `iprojectregister`(`id`,`pname`,`college`,`course`,`branch`,`sname`,`smail`,`spno`,`training_id`,`is_value`,`is_contacted`) values (2,'webapp','josep','BCA','cs','ramya','ramya@gmail.com','9876544398',2,1,1),(4,'bankapp','kpt','Diploma','EC','prapthi','prapthi@gmail.com','9876544398',1,0,1),(5,'bankapp','kpt','Degree','CS','rashmi','ramya@gmail.com','908978675',1,1,1),(6,'bankapp','kpt','Diploma','CS','rashmi','frg@gmail.com','099786',2,0,1),(7,'bankapp','kpt','Diploma','CS','rashmi','frg@gmail.com','099786',2,0,1),(8,'webapp','josep','Diploma','CS','','prapthi@gmail.com','9876544398',1,1,1),(9,'webapp','josep','Diploma','CS','','prapthi@gmail.com','9876544398',1,1,1),(10,'bankapp','kpt','Degree','CS','rgtg','prapthi@gmail.com','099786',1,1,0),(11,'bankapp','kpt','Degree','CS','rgtg','prapthi@gmail.com','099786',1,1,0),(12,'web app','wpt','Diploma','CS','hghgh','jjgghg','08979797',0,0,0);

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `notification` */

insert  into `notification`(`id`,`msg`) values (1,'New Android Development Course is Available Now'),(2,'New Flutter Course is Available Now');

/*Table structure for table `productimage` */

DROP TABLE IF EXISTS `productimage`;

CREATE TABLE `productimage` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `product_id` int(30) DEFAULT NULL,
  `image_title` varchar(50) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `productimage` */

insert  into `productimage`(`id`,`product_id`,`image_title`,`image`,`description`) values (1,1,'rrr','st1.png','rtrr'),(3,2,'gtjkt','st2.png','rrrrrrt'),(4,1,'','st3.png',''),(5,1,'vfv','com2.png','gfgfg');

/*Table structure for table `project_topic` */

DROP TABLE IF EXISTS `project_topic`;

CREATE TABLE `project_topic` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `platform` varchar(500) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `project_topic` */

insert  into `project_topic`(`id`,`title`,`platform`,`description`) values (1,'wewerer','Android App','etytrr');

/*Table structure for table `register` */

DROP TABLE IF EXISTS `register`;

CREATE TABLE `register` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pnum` varchar(30) NOT NULL,
  `service_id` int(30) DEFAULT NULL,
  `is_contacted` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

/*Data for the table `register` */

insert  into `register`(`id`,`name`,`email`,`pnum`,`service_id`,`is_contacted`) values (1,'rashmi','rashmi@gmail.com','66857464',1,1),(2,'ddd','ddd@gmail.com','787866',2,1),(3,'hhh','hhh@gmail.com','3435343',3,1),(4,'yrueyt','rittu@gmail.com','90909099',1,0),(15,'subha','su@gmail.com','787866',2,0),(35,'rithesh','ddd@gmail.com','787878',3,1),(36,'aaa','aaa@gmail.com','98767',2,0),(37,'rashmi','rethrj@gmail.com','99787675656',3,0),(38,'rithesh','subhash@gmail.com','90909099',1,0),(39,'bbgg','kkk@gmail.com','99787675656',3,0),(40,'rashmi','ddd@gmail.com','99787675656',3,0),(41,'ramya','subhash@gmail.com','99787675656',2,0),(42,'rashmi','kkk@gmail.com','787878',1,0),(43,'rashmi','rittu@gmail.com','3435343',2,0),(44,'subhash','kkk@gmail.com','787878',3,0),(45,'yrueyt','kkk@gmail.com','99787675656',3,0),(46,'rashmi','subhash@gmail.com','99787675656',2,1),(50,'rashmi','rashmi@gmail.com','3435343',2,1),(51,'ramya','ddd@gmail.com','787866',2,1),(52,'ramya','ddd@gmail.com','787866',2,1),(53,'subhash','rethrj@gmail.com','90909099',2,1),(54,'rashmi','kkk@gmail.com','99787675656',1,1),(55,'ramya','kkk@gmail.com','787878',1,1),(56,'rashmi','kkk@gmail.com','90909099',2,1),(57,'ramya','ramya@gmail.com','9876765',1,1);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `careeropt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `settings` */

insert  into `settings`(`careeropt`) values ('Show');

/*Table structure for table `softwareproducts` */

DROP TABLE IF EXISTS `softwareproducts`;

CREATE TABLE `softwareproducts` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `platform` varchar(20) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `technology_used` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_active` int(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `softwareproducts` */

insert  into `softwareproducts`(`id`,`title`,`platform`,`description`,`technology_used`,`image`,`is_active`) values (1,'ksakjdksjd','jnsjdjsd','jjdhfjdfjdfh','jidjkdjfkdf','st2.png',0),(2,'iuwieweir','nfbdfjdf','hjwejgrjegr','ejhrje','card2.jpg',0),(3,'mnrerkejr','jqwhjg','rrejhrjher','krjkerjkr','gal5.png',0);

/*Table structure for table `softwaretraining` */

DROP TABLE IF EXISTS `softwaretraining`;

CREATE TABLE `softwaretraining` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `prereq` varchar(100) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `exit` varchar(100) DEFAULT NULL,
  `descrip` varchar(500) DEFAULT NULL,
  `simg` varchar(50) DEFAULT NULL,
  `syllabus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `softwaretraining` */

insert  into `softwaretraining`(`id`,`service_name`,`level`,`prereq`,`duration`,`exit`,`descrip`,`simg`,`syllabus`) values (1,'Web development','beginner/advance','Basic knowledge of computer','68hrs','Web Developer','this is decription for above course','st1.png','2. Web Programming.pdf'),(2,'web development','Beginner/ Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','st2.png','Web Programming.pdf'),(3,'web development','Beginner/ Advance','Basic Knowledge of Computer','68hrs','Web Developer','this is decription for above course','st3.png','Web Programming.pdf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
