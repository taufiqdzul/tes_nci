create database tes_nci;
use tes_nci;

create table kendaraan(
	id_kendaraan int primary key auto_increment,
	jenis varchar(50),
	tarif int
);

create table parkir_masuk(
	id_masuk int primary key auto_increment,
	tgl_masuk datetime
);

create table parkir_keluar(
	id_keluar int primary key auto_increment,
	tgl_keluar datetime
);

create table transaksi(
	id_transaksi int primary key auto_increment,
	id_kendaraan int,
	id_masuk int,
	tgl_keluar datetime,
	durasi float,
	total float
);

insert into kendaraan values
	(null, 'Truk', 90),
	(null, 'Bus', 90),
	(null, 'Minibus', 80),
	(null, 'SUV/MPV', 85),
	(null, 'Sedan/Hatchback', 75),
	(null, 'Pickup', 70),
	(null, 'Moge/Sport', 90),
	(null, 'Bebek/Matic', 80);

select id_kendaraan from kendaraan order by id_kendaraan desc limit 1;

select kendaraan.id_kendaraan, tarif, jenis, tgl_masuk, tgl_keluar, durasi, total from kendaraan join transaksi on kendaraan.id_kendaraan = transaksi.id_kendaraan join parkir_masuk on parkir_masuk.id_masuk = transaksi.id_masuk;