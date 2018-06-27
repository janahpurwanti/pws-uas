# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-06-27 16:23:54
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "mahasiswa"
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `nim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `hoby` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fakultas` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "mahasiswa"
#

INSERT INTO `mahasiswa` VALUES ('15125011628','janah purwantih','jaksel','janahpurwanti19@gmail.com','0000-00-00','tidur','089602555448','fti','2018-06-27 15:23:51','2018-06-27 15:23:51',2),('15125011628','janah purwantih','jaksel','janahpurwanti19@gmail.com','0000-00-00','tidur','089602555448','fti','2018-06-27 15:25:21','2018-06-27 15:25:21',3),('1512501162','janah','fatmawati','janah@gmail.com','0000-00-00','makan','089602555449','ekonomi','2018-06-27 15:26:15','2018-06-27 15:26:15',4);

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2018_06_27_045135_mahasiswa',1);
