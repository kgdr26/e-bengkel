/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.11.8-MariaDB : Database - db_ebengkel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ebengkel` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `db_ebengkel`;

/*Table structure for table `mst_cat_part` */

DROP TABLE IF EXISTS `mst_cat_part`;

CREATE TABLE `mst_cat_part` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `mst_cat_part` */

insert  into `mst_cat_part`(`id`,`name`,`update_by`,`is_active`,`last_update`) values 
(1,'Rantai Roda',1,1,'2023-11-11 16:40:57'),
(2,'Panbel Roda',1,1,'2023-12-26 17:13:17'),
(3,'Tes name 123',1,0,'2023-12-26 17:19:07'),
(4,'Tes Kategory',1,0,'2024-04-01 11:28:45'),
(5,'Universal',1,1,'2024-04-01 11:29:02');

/*Table structure for table `mst_keperluan` */

DROP TABLE IF EXISTS `mst_keperluan`;

CREATE TABLE `mst_keperluan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

/*Data for the table `mst_keperluan` */

insert  into `mst_keperluan`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'Service',1,1,'2023-12-06 15:11:27'),
(2,'Pergantian Sparepart',1,1,'2023-12-06 15:11:40');

/*Table structure for table `mst_role` */

DROP TABLE IF EXISTS `mst_role`;

CREATE TABLE `mst_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

/*Data for the table `mst_role` */

insert  into `mst_role`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'SUPERADMIN',1,1,'2023-11-28 21:43:21'),
(2,'MONTIR',1,1,'2023-11-28 21:43:35'),
(3,'KASIR',1,1,'2023-11-28 21:43:45');

/*Table structure for table `mst_sparepart` */

DROP TABLE IF EXISTS `mst_sparepart`;

CREATE TABLE `mst_sparepart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `kode_part` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `support_by` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `mst_sparepart` */

insert  into `mst_sparepart`(`id`,`id_category`,`kode_part`,`name`,`support_by`,`image`,`stock`,`price`,`update_by`,`is_active`,`last_update`) values 
(1,5,'06401K18900','Drive Chain Kit','[\"Verza 150 (2013 - 2018)\",\"CB 150 R (2013 - 2018)\",\"sfdsfdsfdsf\"]','sparepart1.jpg',120,5000,1,1,'2024-05-20 10:07:16'),
(2,2,'kgdr123','Tes name','[\"Beat\",\"Vario\"]','56820.jpeg',100,0,1,0,'2024-04-01 11:47:50'),
(3,2,'ghh786667','Tes name tes123','[\"Vario\",\"Beat\",\"CB150R\",\"Tess\"]','80489.jpeg',700,0,1,1,'2024-04-01 15:45:34'),
(4,5,'53205-K25-900','BATOK A. BEAT PGMI','[\"Beath\",\"CB150R\"]','default.png',100,10000,1,1,'2024-04-01 15:46:06'),
(5,5,'53206-KUY-960','BATOK. B. BEAT ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(6,5,'53205-KVL-NWFMB','BATOK A.X. 125','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(7,5,'37110-KEH-601','BATOK KM MG.PRO ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(8,5,'37400-KYE-901','BATOK KM. MONO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(9,5,'17211-K18-900','BUSA FILTER VERZA','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(10,5,'5320A-KTL-700','BATOK B ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(11,5,'53206-KEV-080ZA','BATOK B ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(12,5,'53205-K03-N30ZA ','BATOK A ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(13,5,'53205-K25-900PFW','BATOK A  ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(14,5,'53205-KUY-910 FMB','BATOK A ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(15,5,'53205-KVL-N00FMB','BATOK A','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(16,5,'34901-KFV-B51','BOHLAM DEPAN REVO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(17,5,'34905-KAN-1001','BOHLAM SEN','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(18,5,'34930-KWA-930','BOHLAM SEN MONO SOK','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(19,5,'98069-58921','BUSI X24 MEGAPRO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(20,5,'23100-KZL-BAO','BAN PENGGERAK SET','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(21,5,'44830-KC6-000','CABEL, SPEEDOMTR ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(22,5,'17910-KSP-B01','CABLE COMPTHROTTLE ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(23,5,'8LK6 X125-KTM','CAVER LP ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(24,5,'53205-KVY-910','COVER HDL FR (PD PK MT)','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(25,5,'06401-KPH-881 ','DRIVE, CHIN KIT ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(26,5,'37800-KTL-740 ','FUEL UNIT','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(27,5,'17211-K15-900','FILTER CB 150','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(28,5,'23100-KVR-RAO ','FANBELT ROLE VARIO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(29,5,'53178-KVB-900','HANDLE REM KIRI ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(30,5,'53178-KEH-601','HANDLE KOPLING MG.PRO ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(31,5,'2266-KPH-880','GIGI NANA S ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(32,5,'4483-KVY-721','KABEL KM BEAT ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(33,5,'44830-KVB-T00','KABEL KM VARIO ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(34,5,'77910-KTM-850','KABEL GAS 125 ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(35,5,'507A4-KRS-690','KARET STEP REVO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(36,5,'41241-K04-005','KARET TROMOL TIGER','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(37,5,'41241-6B4-770','KARET TROMOL SUPRA/GRAND','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(38,5,'41241-KFL-850','KARET TROMOL X 125','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(39,5,'41241-KW7-881','KARET TROMOL DOBEL DISK','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(40,5,'35010-K03','KONTAK REVO PGMI','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(41,5,'43125-KPH-903','KAMPAS REM TROMOL (NA)','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(42,5,'43130-KZL-930','KAMPAS REM TROMOL (NA)','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(43,5,'06435-KPP-901','KAMPAS REM CAKRAM BLKG','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(44,5,'06435-KSP-B01','KAMPAS REM CAKRAM DPN','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(45,5,'NB-6302-RS','KLAHAR MG.PRO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(46,5,'HB-6301-R2','KLAHAR MG.PRO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(47,5,'06535-KTR-900','KOMSTIR MG.PRO/MONO, CB 150 ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(48,5,'06535-041-010','KOMSTIR MG.PRO WIN ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(49,5,'33700-KVY-961','LAMPU STOP BEAT LAMA ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(50,5,'3370-KVR-600','LPU STOP ASSY REVO LAMA','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(51,5,'34901-KPH-881','LAMPU DPN ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(52,5,'33400-K25-901, 33450-KVO-961','LAMPU  SEN  BEAT K25.PGMI ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(53,5,'33400-KEV-601, 33450-KEV-601','LAMPU SEN SPURA X','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(54,5,'33400-KVL-N01 (r), 33450-KVL-N01 (L)','LAMPU SEN DPN X125','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(55,5,'3340-KPH-881','LPU SEN KARISMA','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(56,5,'33400-KVR-601, 33450-KVR-601','LAMPU SEN REVO LAMA ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(57,5,'33400-KEH-900','LAMPU SEN PRO/MAX','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(58,5,'K.C.J','LAMPU SEN TIGER ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(59,5,'35850-KCJ-690','OTOMATIS STARTER MEGAPRO/SUPRA','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(60,5,'91203-685-761','OIL SEAL GER','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(61,5,'51490-149-840','OIL SEAL SOK WIN','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(62,5,'558175ML','OIL SHOCK DPN ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(63,5,'28120-KVB-901','PION STRARTER','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(64,5,'06455-KPP-901','PAK CAKRAM DPN MEGAPRO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(65,5,'14401-KV8-901','RANTAI KLEP VARIO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(66,5,'06535-GN5-505','RACE STEERING KIT','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(67,5,'06141-GNB-505','RANTAI KLEP WIN/ GRAND','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(68,5,'06141-KRS-500 ','RANTAI KLEP REVO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(69,5,'17210-K16-900','SARINGAN UDARA ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(70,5,'17210-KZR-600','SARINGAN UDARA ','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(71,5,'51490-KCS-905','SEAL SHOCK DPN MG PRO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(72,5,'51490-GNS-305','SEAL BET FR FORK','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(73,5,'90765-229-004','SEAL BOS DPN SEMUA MOTOR','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(74,5,'0641-KEH-002','TOP SET MEGAPRO','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(75,5,'16970-KPH-902','VAKUM X125','[]','default.png',100,10000,1,1,'2024-04-01 11:40:45'),
(76,5,'fgfgsfdg','tesss-123-hhhh','[\"hgjhg\",\"ghjghj\"]','sample.png',90,7000,1,1,'2024-05-20 10:09:04');

/*Table structure for table `trx_booking` */

DROP TABLE IF EXISTS `trx_booking`;

CREATE TABLE `trx_booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  `nopol` varchar(255) DEFAULT NULL,
  `merk_kendaraan` text DEFAULT NULL,
  `keperluan` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `date_booking` datetime DEFAULT NULL,
  `kode_qr` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `trx_booking` */

insert  into `trx_booking`(`id`,`name`,`no_tlp`,`nopol`,`merk_kendaraan`,`keperluan`,`date`,`date_booking`,`kode_qr`,`status`) values 
(1,'Kang Dru','08123344556678','B 3211 KYZ','Honda Beath',1,'2024-05-20','2024-05-20 10:33:41','20240520000000001',1),
(2,'Badru','089976543321','B 1234 KYZ','CB 150 R',1,'2024-05-21','2024-05-20 16:23:22','20240521000000002',1),
(3,'adsadsad','55656565656','B 1234 GFT','fdsadfsdfds',1,'2024-05-21','2024-05-20 22:11:03','2024052100003',1),
(4,'ewdwe','555','4444','sdfsdf',1,'2024-06-11','2024-06-09 21:07:57','2024061100004',1);

/*Table structure for table `trx_result` */

DROP TABLE IF EXISTS `trx_result`;

CREATE TABLE `trx_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_booking` int(11) DEFAULT NULL,
  `id_confirmation` int(11) DEFAULT NULL,
  `id_montir` int(11) DEFAULT NULL,
  `data_result` mediumtext DEFAULT NULL,
  `date_confirmation` datetime DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `trx_result` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `no_tlp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`pass`,`role_id`,`name`,`email`,`no_tlp`,`foto`,`is_active`,`status`,`update_by`,`last_update`) values 
(1,'kgdr','$2y$10$c3W.UkaWWfqg53Xl7esRT.RckZLC/r2vREKedHl/GroQMIJb2WBvO','1',1,'Kang Dru','kgdr@gmail.com','081211159962','default.jpg',1,1,1,'2024-05-21 09:42:51'),
(2,'medi','$2y$10$bMwpEXewYPlWeSQIJZxsWOUH6EEtgUPL.iC566XdepOemCAPUO2dO','1',2,'Medi123','medi@gmail.com','0888877772','default.jpg',1,0,1,'2024-04-23 08:50:16'),
(3,'555','$2y$10$AcBn6Ovb3Z.mHy2aWQAgN.uSxRxx9eilQxK2AvcjrcbHoYL3m/vfq','5',3,'Test Input ddsdsds','tes@gmailo.com','5555','59495.jpeg',0,0,1,'2024-04-23 08:50:17'),
(4,'55','$2y$10$FIK0OIRFwGMYzvwQ73KbUOinXptYyeqW7IarIxfuQJOAC01YwQ1re','55555',2,'kang','samsudinteam131022@gmail.com','555555','default.jpg',0,0,1,'2024-04-23 08:50:18'),
(5,'kasir','$2y$10$6GupL7S.GQEGf1l8XZ4bI./MBHlhN55sQYiWtaQRssOIkBYPhfQ3S','1',3,'Kasir','kasir@gmailcom','081211159978','default.jpg',1,0,1,'2024-04-23 08:50:19'),
(6,'7','$2y$10$Pzjy/hwpqrhDIT5.ZAplberYg.bKp6318JmX5OqR2cIzejW4YiUiC','7',3,'tesuuuu','tes@name.com','7777','default.jpg',0,0,1,'2024-04-23 08:50:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
