-- buat database fakultas
CREATE DATABASE upn_fakultas;

-- buat table jurusan
CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

-- buat table mahasiswa
CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum ('Laki-Laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id)
);

-- masukin data jurusan
insert into jurusan (kode,nama) values ('PLKT','Politik Perkotaan');
insert into jurusan (kode,nama) values ('PLAG','Politik Anggaran');

-- masukin data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'10413040', 'Icas Velaninda', 'Perempuan', 'Purbalingga', '2002-02-18', 'Jl. Cemara 3 No. 5');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'10413013', 'Michelle Anastasya Supriyadi', 'Perempuan', 'Jakarta', '2002-02-15', 'Jl. Sukarno Hatta');

-- update data mahasiswa
update mahasiswa set alamat = "Jl. Cemara 2 No. 89" where id = 1;

-- delete data mahasiswa
delete from mahasiswa where id=2;