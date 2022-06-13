#
# TABLE STRUCTURE FOR: customer
#

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id_customer` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `user_login_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_customer`),
  KEY `user_login_id` (`user_login_id`),
  CONSTRAINT `fk_user_login_id` FOREIGN KEY (`user_login_id`) REFERENCES `user_login` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `no_tlp`, `user_login_id`, `status`, `foto`) VALUES ('0000000001', 'Krisna2', 'jalan baladewa2', '12038209d', '12', '1', '');
INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `no_tlp`, `user_login_id`, `status`, `foto`) VALUES ('0000000004', 'testing', '2701 S Bayshore Dr, Miami, FL', '138u13098', '15', '1', '15.png');


#
# TABLE STRUCTURE FOR: fasilitas
#

DROP TABLE IF EXISTS `fasilitas`;

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('123', 'Tempat parkir', 'Ketersediaan tempat parkir di tempat futsal');
INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('124', 'Kamar ganti', 'Ketersediaan kamar ganti di tempat futsal');
INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('126', 'Papan Skor', '');
INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('127', 'Shower air dingin', '');
INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('128', 'Team T-shirt', '');
INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('129', 'Canteen', '');
INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('130', 'Bar', '');
INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES ('131', 'Musik', '');


#
# TABLE STRUCTURE FOR: lapang
#

DROP TABLE IF EXISTS `lapang`;

CREATE TABLE `lapang` (
  `id_lapang` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_lapang` varchar(10) NOT NULL,
  `harga` double NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `id_provider` int(10) unsigned NOT NULL,
  `jenis` smallint(2) NOT NULL,
  PRIMARY KEY (`id_lapang`),
  UNIQUE KEY `id_lapang` (`id_lapang`),
  KEY `id_provider` (`id_provider`),
  CONSTRAINT `fk_lapang_provider` FOREIGN KEY (`id_provider`) REFERENCES `provider` (`id_provider`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('4', 'A', '60000', '25 X 14', '8', '2');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('5', 'B', '50000', '25 X 14', '8', '3');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('7', 'C', '150000', '25 X 14', '8', '1');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('8', 'D', '120000', '25 X 14', '8', '0');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('9', 'A', '50000', '25 X 15', '1', '0');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('10', 'B', '70000', '25 X 14', '1', '2');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('11', 'C', '70000', '25 X 14', '1', '2');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('12', 'A', '120000', '50 m X 100m', '10', '0');
INSERT INTO `lapang` (`id_lapang`, `kode_lapang`, `harga`, `ukuran`, `id_provider`, `jenis`) VALUES ('13', 'B', '60000', '50m x 100m', '10', '0');


#
# TABLE STRUCTURE FOR: provider
#

DROP TABLE IF EXISTS `provider`;

CREATE TABLE `provider` (
  `id_provider` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `user_login_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL,
  `longitude` float DEFAULT '0',
  `latitude` float DEFAULT '0',
  `provinsi_id` int(11) NOT NULL,
  `jam_buka` tinyint(2) DEFAULT '8',
  `jam_tutup` tinyint(2) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_provider`),
  KEY `user_login_id` (`user_login_id`),
  KEY `provinsi_id` (`provinsi_id`),
  CONSTRAINT `fk_provider_user_login` FOREIGN KEY (`user_login_id`) REFERENCES `user_login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_provinsi_id` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`provinsi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `provider` (`id_provider`, `nama`, `lokasi`, `user_login_id`, `status`, `longitude`, `latitude`, `provinsi_id`, `jam_buka`, `jam_tutup`, `no_rek`) VALUES ('1', 'Krisna Futsal', 'jalan baladwa gang 2 no i30B', '2', '1', '0', '0', '1', '8', '22', '');
INSERT INTO `provider` (`id_provider`, `nama`, `lokasi`, `user_login_id`, `status`, `longitude`, `latitude`, `provinsi_id`, `jam_buka`, `jam_tutup`, `no_rek`) VALUES ('8', 'testing2', 'bandung2', '11', '1', '0', '0', '2', '8', '22', '');
INSERT INTO `provider` (`id_provider`, `nama`, `lokasi`, `user_login_id`, `status`, `longitude`, `latitude`, `provinsi_id`, `jam_buka`, `jam_tutup`, `no_rek`) VALUES ('10', 'adsads', 'jlkjklj', '19', '1', '5345650', '6786880', '1', '8', '21', '');


#
# TABLE STRUCTURE FOR: provider_fasilitas
#

DROP TABLE IF EXISTS `provider_fasilitas`;

CREATE TABLE `provider_fasilitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_provider` int(10) unsigned NOT NULL,
  `id_fasilitas` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_provider` (`id_provider`),
  KEY `id_fasilitas` (`id_fasilitas`),
  CONSTRAINT `fk_fasilitas` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_fasilitas_provider` FOREIGN KEY (`id_provider`) REFERENCES `provider` (`id_provider`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `provider_fasilitas` (`id`, `id_provider`, `id_fasilitas`) VALUES ('1', '8', '123');
INSERT INTO `provider_fasilitas` (`id`, `id_provider`, `id_fasilitas`) VALUES ('2', '8', '124');
INSERT INTO `provider_fasilitas` (`id`, `id_provider`, `id_fasilitas`) VALUES ('3', '8', '126');
INSERT INTO `provider_fasilitas` (`id`, `id_provider`, `id_fasilitas`) VALUES ('8', '10', '127');
INSERT INTO `provider_fasilitas` (`id`, `id_provider`, `id_fasilitas`) VALUES ('9', '1', '123');
INSERT INTO `provider_fasilitas` (`id`, `id_provider`, `id_fasilitas`) VALUES ('10', '1', '124');
INSERT INTO `provider_fasilitas` (`id`, `id_provider`, `id_fasilitas`) VALUES ('11', '1', '126');


#
# TABLE STRUCTURE FOR: provider_gallery
#

DROP TABLE IF EXISTS `provider_gallery`;

CREATE TABLE `provider_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `id_provider` int(10) unsigned NOT NULL,
  `is_display_picture` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_provider` (`id_provider`),
  CONSTRAINT `fk_provider_gallery` FOREIGN KEY (`id_provider`) REFERENCES `provider` (`id_provider`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('4', 'add-icon.png', '8', '0');
INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('5', 'book.png', '8', '0');
INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('7', 'close_blue.png', '8', '1');
INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('8', 'lapang-futsal.png', '1', '0');
INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('12', 'usaha-lapangan-futsal.png', '10', '1');
INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('16', 'lapangan futsal.png', '1', '1');
INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('17', '86d71b26214bd5005ff3ca692c3cde94.png', '1', '0');
INSERT INTO `provider_gallery` (`id`, `foto`, `id_provider`, `is_display_picture`) VALUES ('19', '86d71b26214bd5005ff3ca692c3cde94.png', '1', '0');


#
# TABLE STRUCTURE FOR: provinsi
#

DROP TABLE IF EXISTS `provinsi`;

CREATE TABLE `provinsi` (
  `provinsi_id` int(10) NOT NULL AUTO_INCREMENT,
  `provinsi_nama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`provinsi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('1', 'Nanggroe Aceh Darussalam');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('2', 'Sumatera Utara');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('3', 'Sumatera Barat');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('4', 'Riau');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('5', 'Kepulauan Riau');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('6', 'Kepulauan Bangka-Belitung');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('7', 'Jambi');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('8', 'Bengkulu');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('9', 'Sumatera Selatan');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('10', 'Lampung');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('11', 'Banten');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('12', 'DKI Jakarta');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('13', 'Jawa Barat');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('14', 'Jawa Tengah');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('15', 'Daerah Istimewa Yogyakarta  ');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('16', 'Jawa Timur');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('17', 'Bali');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('18', 'Nusa Tenggara Barat');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('19', 'Nusa Tenggara Timur');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('20', 'Kalimantan Barat');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('21', 'Kalimantan Tengah');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('22', 'Kalimantan Selatan');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('23', 'Kalimantan Timur');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('24', 'Gorontalo');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('25', 'Sulawesi Selatan');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('26', 'Sulawesi Tenggara');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('27', 'Sulawesi Tengah');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('28', 'Sulawesi Utara');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('29', 'Sulawesi Barat');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('30', 'Maluku');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('31', 'Maluku Utara');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('32', 'Papua Barat');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('33', 'Papua');
INSERT INTO `provinsi` (`provinsi_id`, `provinsi_nama`) VALUES ('34', 'Kalimantan Utara');


#
# TABLE STRUCTURE FOR: transaksi
#

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(50) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_main` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selsai` time NOT NULL,
  `total_bayar` int(11) NOT NULL DEFAULT '0',
  `id_lapang` int(10) unsigned NOT NULL,
  `id_customer` int(10) unsigned zerofill NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kode_transaksi`),
  KEY `id_customer` (`id_customer`),
  KEY `id_lapang` (`id_lapang`),
  CONSTRAINT `fk_transaksi_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_transaksi_lapang` FOREIGN KEY (`id_lapang`) REFERENCES `lapang` (`id_lapang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transaksi` (`kode_transaksi`, `tgl_transaksi`, `tgl_sewa`, `tgl_main`, `jam_mulai`, `jam_selsai`, `total_bayar`, `id_lapang`, `id_customer`, `status`) VALUES ('TR001', '2016-11-11', '2016-12-23', '2016-12-23', '08:00:00', '10:00:00', '0', '4', '0000000001', '0');
INSERT INTO `transaksi` (`kode_transaksi`, `tgl_transaksi`, `tgl_sewa`, `tgl_main`, `jam_mulai`, `jam_selsai`, `total_bayar`, `id_lapang`, `id_customer`, `status`) VALUES ('TR002', '2016-11-09', '2016-12-25', '2016-12-25', '08:00:00', '10:00:00', '0', '5', '0000000001', '0');
INSERT INTO `transaksi` (`kode_transaksi`, `tgl_transaksi`, `tgl_sewa`, `tgl_main`, `jam_mulai`, `jam_selsai`, `total_bayar`, `id_lapang`, `id_customer`, `status`) VALUES ('TR003', '2016-11-09', '2016-12-24', '2016-12-24', '11:00:00', '12:00:00', '0', '4', '0000000001', '0');
INSERT INTO `transaksi` (`kode_transaksi`, `tgl_transaksi`, `tgl_sewa`, `tgl_main`, `jam_mulai`, `jam_selsai`, `total_bayar`, `id_lapang`, `id_customer`, `status`) VALUES ('TRX000000000111846', NULL, '2016-12-28', '2016-12-28', '08:00:00', '09:00:00', '0', '11', '0000000001', '0');
INSERT INTO `transaksi` (`kode_transaksi`, `tgl_transaksi`, `tgl_sewa`, `tgl_main`, `jam_mulai`, `jam_selsai`, `total_bayar`, `id_lapang`, `id_customer`, `status`) VALUES ('TRX00000000014210', NULL, '2016-12-25', '2016-12-25', '14:00:00', '16:00:00', '0', '4', '0000000001', '0');
INSERT INTO `transaksi` (`kode_transaksi`, `tgl_transaksi`, `tgl_sewa`, `tgl_main`, `jam_mulai`, `jam_selsai`, `total_bayar`, `id_lapang`, `id_customer`, `status`) VALUES ('TRX00000000014613', NULL, '2016-12-27', '2016-12-28', '08:00:00', '10:00:00', '0', '4', '0000000001', '0');
INSERT INTO `transaksi` (`kode_transaksi`, `tgl_transaksi`, `tgl_sewa`, `tgl_main`, `jam_mulai`, `jam_selsai`, `total_bayar`, `id_lapang`, `id_customer`, `status`) VALUES ('TRX00000000014852', NULL, '2016-12-25', '2016-12-25', '19:00:00', '21:00:00', '0', '4', '0000000001', '0');


#
# TABLE STRUCTURE FOR: user_login
#

DROP TABLE IF EXISTS `user_login`;

CREATE TABLE `user_login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `role`) VALUES ('1', 'krisna', 'kfebrianto96@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', '1');
INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `role`) VALUES ('2', 'febraintop', 'kfebrianto98@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', '2');
INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `role`) VALUES ('11', 'testing2', 'kfebrianto2016@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', '2');
INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `role`) VALUES ('12', 'testing2', 'kfebrianto2@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', '3');
INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `role`) VALUES ('15', 'testing', 'admin@gie-art.com', '5f4dcc3b5aa765d61d8327deb882cf99', '3');
INSERT INTO `user_login` (`id`, `username`, `email`, `password`, `role`) VALUES ('19', 'adsa', 'dasa@ads', 'a8f5f167f44f4964e6c998dee827110c', '2');


