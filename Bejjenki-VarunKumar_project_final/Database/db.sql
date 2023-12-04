/*
SQLyog Community Edition- MySQL GUI v6.07
Host - 5.5.30 : Database - car_comparison
*********************************************************************
Server version : 5.5.30
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `car_comparison`;

USE `car_comparison`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `car_details` */

DROP TABLE IF EXISTS `car_details`;

CREATE TABLE `car_details` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `car_company` varchar(25) DEFAULT NULL,
  `car_model` varchar(25) DEFAULT NULL,
  `car_price` varchar(25) DEFAULT NULL,
  `fuel_type` varchar(45) DEFAULT NULL,
  `transmsn_type` varchar(70) DEFAULT NULL,
  `seats` varchar(100) DEFAULT NULL,
  `engine` varchar(100) DEFAULT NULL,
  `mileage` varchar(100) DEFAULT NULL,
  `merits` varchar(1000) DEFAULT NULL,
  `demerits` varchar(1000) DEFAULT NULL,
  `car_pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `car_details` */

insert  into `car_details`(`sno`,`car_company`,`car_model`,`car_price`,`fuel_type`,`transmsn_type`,`seats`,`engine`,`mileage`,`merits`,`demerits`,`car_pic`) values (1,'Maruti','Maruti Suzuki alto 800','450000','Petrol','Manual','5','123','134.4','good pickup','	Not used for long time drive','alto.jpg'),(2,'Hyundai','Hyundai Grand i10','365000','Petrol','Automatic','6','134','134.67','Automatic system','	Not provided the air bags','hun.jpg');

/*Table structure for table `register` */

DROP TABLE IF EXISTS `register`;

CREATE TABLE `register` (
  `name` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `passwrd` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `register` */

insert  into `register`(`name`,`userid`,`passwrd`,`email`,`contact`) values ('a','a','a','a@gmail.com','1231231234');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
