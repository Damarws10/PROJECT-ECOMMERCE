CREATE TABLE `user` (
	`id_user` bigint(20) NOT NULL AUTO_INCREMENT,
	`nama` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`alamat` varchar(255) NOT NULL,
	`level` varchar(255) NOT NULL,
	`no_telepon` varchar(255) NOT NULL,
	`status` enum('on','off') NOT NULL,
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `barang` (
	`id_barang` int(20) NOT NULL AUTO_INCREMENT,
	`id_kategori` int(20) NOT NULL,
	`nama_barang` varchar(255) NOT NULL,
	`spesifikasi` TEXT NOT NULL,
	`gambar_barang` varchar(255) NOT NULL,
	`harga` int(20) NOT NULL,
	`stok` tinyint(4) NOT NULL,
	`status` enum('on','off') NOT NULL,
	PRIMARY KEY (`id_barang`)
);

CREATE TABLE `kota` (
	`id_kota` int(20) NOT NULL AUTO_INCREMENT,
	`kota` varchar(255) NOT NULL,
	`tarif` int(20) NOT NULL,
	`status` enum('on','off') NOT NULL,
	PRIMARY KEY (`id_kota`)
);

CREATE TABLE `kategori` (
	`id_kategori` int(20) NOT NULL AUTO_INCREMENT,
	`kategori` varchar(255) NOT NULL,
	`status` enum('on','off') NOT NULL,
	PRIMARY KEY (`id_kategori`)
);

CREATE TABLE `detail_pemesanan` (
	`id_pemesanan` int(20) NOT NULL UNIQUE,
	`id_barang` int(20) NOT NULL UNIQUE,
	`harga` int(20) NOT NULL,
	`quantity` tinyint(4) NOT NULL
);

CREATE TABLE `pembayaran` (
	`id_pembayaran` int(20) NOT NULL AUTO_INCREMENT,
	`id_pesanan` int(20) NOT NULL UNIQUE,
	`no_rekening` varchar(255) NOT NULL,
	`nama_akun` varchar(255) NOT NULL,
	`tanggal_tranfer` DATE NOT NULL,
	PRIMARY KEY (`id_pembayaran`)
);

CREATE TABLE `pesanan` (
	`id_pesanan` int(20) NOT NULL AUTO_INCREMENT,
	`id_kota` int(20) NOT NULL UNIQUE,
	`id_user` int(20) NOT NULL,
	`nama_pemesan` varchar(255) NOT NULL,
	`tanggal_pemesanan` varchar(255) NOT NULL,
	`no_telepon` varchar(255) NOT NULL,
	`alamat` varchar(255) NOT NULL,
	`gambar_barang` varchar(255) NOT NULL,
	`status` enum('on','off') NOT NULL,
	PRIMARY KEY (`id_pesanan`)
);

ALTER TABLE `barang` ADD CONSTRAINT `barang_fk0` FOREIGN KEY (`id_kategori`) REFERENCES `kategori`(`id_kategori`);

ALTER TABLE `detail_pemesanan` ADD CONSTRAINT `detail_pemesanan_fk0` FOREIGN KEY (`id_pemesanan`) REFERENCES `pesanan`(`id_pesananan`);

ALTER TABLE `detail_pemesanan` ADD CONSTRAINT `detail_pemesanan_fk1` FOREIGN KEY (`id_barang`) REFERENCES `barang`(`id_barang`);

ALTER TABLE `pembayaran` ADD CONSTRAINT `pembayaran_fk0` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan`(`id_pesanan`);

ALTER TABLE `pesanan` ADD CONSTRAINT `pesanan_fk0` FOREIGN KEY (`id_kota`) REFERENCES `kota`(`id_kota`);

ALTER TABLE `pesanan` ADD CONSTRAINT `pesanan_fk1` FOREIGN KEY (`id_user`) REFERENCES `user`(`id_user`);

ALTER TABLE `pesanan` ADD CONSTRAINT `pesanan_fk2` FOREIGN KEY (`no_telepon`) REFERENCES `user`(`no_telepon`);

ALTER TABLE `pesanan` ADD CONSTRAINT `pesanan_fk3` FOREIGN KEY (`alamat`) REFERENCES `user`(`alamat`);

ALTER TABLE `pesanan` ADD CONSTRAINT `pesanan_fk4` FOREIGN KEY (`gambar_barang`) REFERENCES `barang`(`gambar_barang`);








