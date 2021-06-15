create table NGUOIDUNG(
	id int AUTO_INCREMENT primary key,
 	username varchar(50),
    password varchar(50),
	email varchar(50)
)

create table HOCSINH(
	hoten varchar(50),
	gioitinh varchar(5),
	ngaysinh date,
	diachi varchar(50),
	email varchar(10)
)

insert into NGUOIDUNG values(1,'buithanhnhan76','123456','nhanbui37@gmail.com')