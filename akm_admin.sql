# Host: localhost  (Version 5.5.5-10.4.20-MariaDB)
# Date: 2022-04-21 11:20:41
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "about"
#

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `meta` longtext DEFAULT NULL,
  `h2` longtext DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "about"
#

INSERT INTO `about` VALUES (1,'<p>Siapa sih Aris Krisna?</p>','<p><strong>Tentang</strong></p>','<p>Saya adalah seorang yang memperhatikan etika kerja. Saya melakukan apa yang memang di perintahkan sesuai dengan posisi dan kemampuan Saya. Walaupun dalam praktiknya pasti akan menemui beberapa kendala, tapi Saya dapat dengan cepat belajar dan beradaptasi untuk tetap mencapai target yang di inginkan dan melakukannya dengan baik tanpa mengesampingkan ketelitian.</p><p>Jika dalam keadaan terdesak, Saya dapat mengambil keputusan dengan tenang dan tetap mengedepankan <i>win-to-win solution </i>dalam pengambilan keputusan tersebut, dan bertanggung jawab penuh atas apapun hasil dari keputusan tersebut.</p><p>Karena Saya menyukai hal-hal baru, Saya dapat beradaptasi dalam segala situasi dan lingkungan tempat Saya berada. Saya dapat membuat orang lain di sekitar menerima keberadaan Saya dengan senang hati.&nbsp;</p><p>Saya memiliki cukup motivasi untuk terus mengembangkan potensi diri dan konsisten dalam melakukannya.</p>');

#
# Structure for table "edu"
#

DROP TABLE IF EXISTS `edu`;
CREATE TABLE `edu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `meta` longtext DEFAULT NULL,
  `h2` longtext DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  `judulisi` longtext DEFAULT NULL,
  `isi2` longtext DEFAULT NULL,
  `judulisi2` longtext DEFAULT NULL,
  `isi3` longtext DEFAULT NULL,
  `judulisi3` longtext DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

#
# Data for table "edu"
#

INSERT INTO `edu` VALUES (1,'<p>darimana kemampuan saya berasal?</p>','<p>pendidikan</p>','<p>Saya pernah mengikuti pendidikan <i>non-formal, </i>yaitu sebuah pelatihan mempelajari teknik-teknik SEO <i>(Search Engine Optimization). </i>Setelah selesai mengikutin pelatihan tersebut, Saya mengerti beberapa hal, yaitu:</p><ul><li><i>White/Grey/Black Hat</i> SEO</li><li>Membuat sebuah konten yang SEO <i>Friendly</i></li><li>Membangun <i>Link Building</i></li><li>PBN <i>Concept</i></li></ul>','seo training',NULL,NULL,NULL,NULL);

#
# Structure for table "skills"
#

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `meta` longtext DEFAULT NULL,
  `h2` longtext DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

#
# Data for table "skills"
#

INSERT INTO `skills` VALUES (1,'<p>kemampuan yang terus saya kembangkan</p>','<p><strong>SKILLS</strong></p>','<p>Dalam hal kemampuan Saya cukup kompeten untuk menjalankan tugas yang di berikan. Jika ada suatu permasalah yang tidak dapat Saya selesaikan dengan kemampuan yang sudah Saya miliki, Saya sangat siap mempelajari hal-hal yang di butuhkan untuk menyelesaikan permasalahan tersebut.</p><p>Saya dapat bekerja dalam tim baik sebagai anggota ataupun memimpin tim Saya sendiri. Sebagai pemimpin, Saya dapat dan berusaha untuk terus mengerahkan kemampuan terbaik dari tiap-tiap anggota tim tersebut dan mengolahnya sehingga menjadikan sebuah <i>output </i>terbaik.</p><p>Jika Saya berperan sebagai anggota, Saya akan mengerahkan kemampuan terbaik Saya dalam berkontribusi dengan anggota tim lainnya untuk menciptakan sebuah <i>output </i>yang di sepakati bersama.</p>');

#
# Structure for table "test"
#

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` longtext DEFAULT NULL,
  `alamat` longtext DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "test"
#

INSERT INTO `test` VALUES (1,'3333','33333');

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
