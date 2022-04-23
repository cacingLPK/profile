# Host: localhost  (Version 5.5.5-10.4.20-MariaDB)
# Date: 2022-04-21 11:23:08
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `role` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'aris','$2y$10$2kvRnxTMuzmx/o1Z1Uawre26FilTesVnlEVBMVT0gd/TFeC5mjpx.',1),(3,'krisna','$2y$10$bFxGcST/yDYj.vj151UkEOdBIp3aOtJ13q1R4x0irp1EP1ok6nS.K',1);
