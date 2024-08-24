create table mahasiswa(
	id serial primary key,
	nama varchar(255),
	nrp integer,
	email varchar(255),
	jurusan varchar(255)
);

insert into mahasiswa(nama, nrp, email, jurusan) values
('Aam Hamidah', 20241001, 'aam@gmail.com', 'Sistem Informasi'),
('Alvin Nurhakim', 20241002, 'alvin@gmail.com', 'Teknik Informatika'),
('Anisa Mufidah', 20241003, 'anisa@gmail.com', 'Ilmu Komputer'),
('Birgita Helena', 20241004, 'birgita@gmail.com', 'Teknik Informatika'),
('Dea Saftika', 20241005, 'dea@gmail.com', 'Ilmu Komputer'),
('Delta Ferdian', 20241006, 'delta@gmail.com', 'Sistem Informasi'),
('Diego Nathanael', 20241007, 'diego@gmail.com', 'Ilmu Komputer'),
('Fadil Ramadhan', 20241008, 'fadil@gmail.com', 'Sistem Informasi'),
('Faiz Farhan', 20241009, 'faiz@gmail.com', 'Teknik Informatika'),
('Fajar Rifqi', 20241010, 'fajar@gmail.com', 'Sistem Informasi')

insert into mahasiswa(nama, nrp, email, jurusan) values
('Fany Ayu', 20241011, 'fany@gmail.com', 'Teknik Informatika')

insert into mahasiswa(nama, nrp, email, jurusan) values
('Febry Kurnia', 20241012, 'febry@gmail.com', 'Ilmu Komputer')

insert into mahasiswa(nama, nrp, email, jurusan) values
('Galih Ahmad', 20241013, 'galih@gmail.com', 'Teknik Informatika')

CREATE TYPE jenis_kelamin_enum AS ENUM ('Laki-laki', 'Perempuan');

alter table mahasiswa
add column jurusan varchar(255)
add column jenis_kelamin jenis_kelamin_enum,
add column ekstrakurikuler varchar(255)
