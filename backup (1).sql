-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1,	'administrator',	'admin@gmail.com',	'administrator'),
(2,	'administrator2',	'admin2@gmail.com',	'administrator2'),
(3,	'usertest',	'usertest@gmail.com',	'usertest');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `owned_by` varchar(50) NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `barang` (`owned_by`, `id`, `nama`, `deskripsi`, `harga`) VALUES
('administrator',	1,	'Test Barang 1',	'barang ini keramat hati hati',	123);

DROP TABLE IF EXISTS `daftar_barang`;
CREATE TABLE `daftar_barang` (
  `deskripsi` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `harga` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `kuantitas` int NOT NULL,
  `created_by` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `daftar_barang` (`deskripsi`, `harga`, `id`, `nama_barang`, `kuantitas`, `created_by`) VALUES
('Hiasan Dinding Kontemporer : Infinite, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	200,	1,	'Hiasan Dinding Kontemporer csrf',	12,	'administrator'),
('Hiasan Dinding sci-fi : робот, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	300,	2,	'Hiasan Dinding sci-fi : робот',	10,	'Ariyan'),
('Hiasan Dinding Ruang Tamu : japanese art, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya . lukisan ini biasa di tempelkan di ruang tamu rumah',	100,	3,	'Hiasan Dinding Ruang Tamu : japanese art',	20,	'administrator'),
('Hiasan Dinding : Abstractika Gold , Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	250,	4,	'Hiasan Dinding : Abstractika Gold',	8,	'administrator'),
('Hiasan Dinding Ruang Tamu : Planto Negra, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	150,	5,	'Hiasan Dinding Planto Negra',	17,	'administrator'),
('Soothe Your Beauty, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	330,	6,	'Hiasan Dinding Soothe Your Soul',	21,	'Wafiq'),
('Abstract Maroon iron, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	400,	7,	'Abstract Maroon Iron',	7,	'miftah'),
('Ink Dark Scribble, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	80,	8,	'Ink Dark Scribble',	33,	'Septian'),
('Ombre Dream Cubes, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	512,	9,	'Ombre Dream Cubes',	1,	'administrator'),
('Monologs, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya . lukisan ini biasa di tempelkan di ruang tamu rumah',	1000,	10,	'Monologs',	2,	'imanuel kristo'),
('Hiasan Dinding : Perforation, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	450,	11,	'Perforation',	5,	'administrator'),
('Hiasan Dinding : Ventura, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	312,	12,	'Ventura',	3,	'administrator');

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `news` (`id`, `judul`, `deskripsi`) VALUES
(1,	'Bjorka: Hero or Enemy?',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum erat turpis, et euismod magna luctus sed. Pellentesque sed lorem at augue euismod accumsan. Aliquam dui neque, volutpat a interdum mattis, sollicitudin et nisi. Mauris rutrum augue a magna dignissim, ut scelerisque arcu congue. Curabitur nec maximus massa. Aliquam varius est eget venenatis dignissim. Sed metus nisl, aliquet vulputate euismod ut, pharetra sit amet orci. Aenean eros est, sodales eget nulla iaculis, accumsan ornare dui. Duis interdum ligula ac felis scelerisque varius. Maecenas ac orci imperdiet, congue nulla vel, maximus urna. Quisque faucibus est nisl, eu ultricies leo feugiat ac.\r\n\r\nAliquam semper ut nibh vitae luctus. Donec aliquam nisi quis scelerisque vulputate. Praesent eget vulputate ligula. Proin justo lorem, tincidunt quis turpis sit amet, faucibus interdum massa. Vivamus nec aliquam elit. Nullam dictum ornare lacus, a eleifend turpis pretium sed. Duis hendrerit volutpat lorem ac convallis. Cras sodales ante dui, ut v');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `user` (`id`, `fullname`, `username`, `telephone_number`, `email`, `password`) VALUES
(1,	'Attacker',	'attacker',	'123',	'attacker@gmail.com',	'attacker'),
(2,	'Victim',	'victim',	'123',	'victim@gmail.com',	'victim');

-- 2022-11-09 14:27:08
