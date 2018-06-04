create database kenyangcom;

use kenyangcom;

CREATE TABLE `event_admin` (
	`id` int(11) NOT NULL auto_increment,
	`judul_event` varchar(100),
	`jenis_event` varchar(100),
	`deskripsi_event` varchar(100),
	`tanggal_mulai` varchar(100),
	`tanggal_berakhir` varchar(100),
	PRIMARY KEY (`id`)
);
