create table NGUOIDUNG(
	id int AUTO_INCREMENT primary key,
 	username varchar(50),
    password varchar(50),
	email varchar(50)
)
insert into NGUOIDUNG values(1,'buithanhnhan76','123456','nhanbui37@gmail.com')

create table HOCSINH(
	mahs int AUTO_INCREMENT primary key,
	hoten varchar(50),
	gioitinh varchar(5),
	ngaysinh date,
	diachi varchar(50),
	email varchar(10),
	malop varchar(10)
)

create table LOP(
	malop varchar(10) primary key,
	tenlop varchar(10),
	siso int,
	makhoi varchar(10)
)
insert into LOP values('10A1','Lop 10A1','40','10');
insert into LOP values('10A2','Lop 10A2','39','10');
insert into LOP values('10A3','Lop 10A3','37','10');

insert into LOP values('11A1','Lop 11A1','40','11');
insert into LOP values('11A2','Lop 11A2','39','11');
insert into LOP values('11A3','Lop 11A3','37','11');

insert into LOP values('12A1','Lop 12A1','40','12');
insert into LOP values('12A2','Lop 12A2','39','12');
insert into LOP values('12A3','Lop 12A3','37','12');

