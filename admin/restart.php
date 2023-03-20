<?php
	include '../config.php';

	echo "delete all admin\n";
	mysqli_query($conn, "DELETE FROM admin");
	echo "reset auto increment\n";
	mysqli_query($conn, "ALTER TABLE admin AUTO_INCREMENT = 1");
	echo "insert data\n";
	mysqli_query($conn, "INSERT INTO admin VALUES (1, 'admin', 'admin@gmail.com', 'admin')");
	mysqli_query($conn, "INSERT INTO admin VALUES (2, 'test', 'test@gmail.com', 'test')");
	
	echo "\n-------------\n";

	echo "delete all daftar_barang\n";
	mysqli_query($conn, "DELETE FROM daftar_barang");
	echo "reset auto increment\n";
	mysqli_query($conn, "ALTER TABLE daftar_barang AUTO_INCREMENT = 1");
	echo "insert data\n";

	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (1,	'Hiasan Dinding Kontemporer CSRFTEST1',	'Hiasan Dinding Kontemporer : Infinite, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	200,	12,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (2,	'Hiasan Dinding sci-fi : робот',	'Hiasan Dinding sci-fi : робот, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	300,	10,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (3,	'Hiasan Dinding Ruang Tamu : japanese art',	'Hiasan Dinding Ruang Tamu : japanese art, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya . lukisan ini biasa di tempelkan di ruang tamu rumah',	100,	20,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (4,	'Hiasan Dinding : Abstractika Gold',	'Hiasan Dinding : Abstractika Gold , Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	250,	8,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (5,	'Hiasan Dinding Planto Negra',	'Hiasan Dinding Ruang Tamu : Planto Negra, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	150,	17,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (6,	'Hiasan Dinding Soothe Your Soul',	'Soothe Your Beauty, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	330,	21,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (7,	'Abstract Maroon Iron',	'Abstract Maroon iron, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	400,	7,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (8,	'Ink Dark Scribble',	'Ink Dark Scribble, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	80,	33,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (9,	'Ombre Dream Cubes',	'Ombre Dream Cubes, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	512,	1,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (10,	'Monologs',	'Monologs, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya . lukisan ini biasa di tempelkan di ruang tamu rumah',	1000,	2,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (11,	'Perforation',	'Hiasan Dinding : Perforation, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	450,	5,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (12,	'Ventura',	'Hiasan Dinding : Ventura, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	312,	3,	'admin')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (13,	'Hiasan Dinding Sci-fi : leno',	'Hiasan Dinding Sci-fi : leno, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya ',	300,	3,	'test')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (14,	'Hiasan Dinding Kamar : Mexicola',	'Hiasan Dinding Kamar : Mexicola, mengandung keunikan tersendiri dalam karyanya yang membuat karya ini menarik dimata penikmatnya . lukisan ini biasa di tempelkan di ruang tamu rumah',	340,	30,	'test')");
	mysqli_query($conn, "INSERT INTO daftar_barang VALUES (15,	'Hiasan Dinding Selemene',	'Hiasan Dinding Selemene, Nikmati seni terbaik dunia yang akan menghidupkan kehidupan di ruangan atau pengaturan mana pun. Pilih dari pilihan bingkai berkualitas tinggi kami yang indah untuk dipadukan dengan karya seni yang tepat yang cocok untuk Anda. Semua cetakan tiba siap untuk digantung.',	400,	2,	'test')");
?>