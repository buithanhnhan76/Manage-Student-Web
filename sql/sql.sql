create table NGUOIDUNG(
	id int AUTO_INCREMENT primary key,
 	username varchar(50),
    password varchar(50),
	email varchar(50)
)
insert into NGUOIDUNG values(1,'buithanhnhan76','123456','nhanbui37@gmail.com')

create table HOCSINH(
	mahocsinh int AUTO_INCREMENT primary key,
	hoten varchar(50),
	gioitinh varchar(5),
	ngaysinh date,
	diachi varchar(50),
	email varchar(50),
	malop varchar(10)
)

insert into HOCSINH values('19520000','Trần Văn A','nam','2005/2/24','Hồ Chí Minh','a@gmail.com','10A1');
insert into HOCSINH values('19520001','Trần Văn B','nam','2005/3/24','Thủ Đức','b@gmail.com','10A1');
insert into HOCSINH values('19520002','Trần Văn C','nam','2005/5/24','Biên Hòa','c@gmail.com','10A1');
insert into HOCSINH values('19520003','Trần Văn D','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','10A2');
insert into HOCSINH values('19520004','Trần Văn E','nam','2005/6/24','Cái Bè','e@gmail.com','10A2');
insert into HOCSINH values('19520005','Trần Văn F','nam','2005/8/24','Vĩnh Long','f@gmail.com','10A2');
insert into HOCSINH values('19520006','Trần Văn G','nam','2005/9/24','Vũng Tàu','g@gmail.com','10A3');
insert into HOCSINH values('19520007','Trần Văn H','nam','2005/11/24','Hà Nội','h@gmail.com','10A3');
insert into HOCSINH values('19520008','Trần Văn I','nam','2005/12/23','Huế','j@gmail.com','10A3');
insert into HOCSINH values('19520009','Trần Văn J','nam','2005/5/25','Hồ Chí Minh','a@gmail.com','10A4');
insert into HOCSINH values('195200010','Trần Văn K','nam','2005/3/24','Thủ Đức','b@gmail.com','10A4');
insert into HOCSINH values('195200011','Trần Văn L','nam','2005/5/25','Biên Hòa','c@gmail.com','10A4');
insert into HOCSINH values('195200012','Trần Văn M','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','11A1');
insert into HOCSINH values('195200013','Trần Văn N','nam','2005/6/24','Cái Bè','e@gmail.com','11A1');
insert into HOCSINH values('195200014','Trần Văn O','nam','2005/8/24','Vĩnh Long','f@gmail.com','11A1');
insert into HOCSINH values('195200015','Trần Văn P','nam','2005/9/24','Vũng Tàu','g@gmail.com','11A2');
insert into HOCSINH values('195200016','Trần Văn Q','nam','2005/11/23','Hà Nội','h@gmail.com','11A2');
insert into HOCSINH values('195200017','Trần Văn R','nam','2005/12/24','Huế','j@gmail.com','11A2');
insert into HOCSINH values('195200018','Trần Văn S','nam','2005/2/24','Hồ Chí Minh','a@gmail.com','11A3');
insert into HOCSINH values('195200019','Trần Văn T','nam','2005/3/24','Thủ Đức','b@gmail.com','11A3');
insert into HOCSINH values('195200020','Trần Văn Y','nam','2005/5/24','Biên Hòa','c@gmail.com','11A3');
insert into HOCSINH values('195200021','Trần Văn V','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','12A1');
insert into HOCSINH values('195200022','Trần Văn W','nam','2005/6/24','Cái Bè','e@gmail.com','12A1');
insert into HOCSINH values('195200023','Trần Văn S','nam','2005/8/24','Vĩnh Long','f@gmail.com','12A1');
insert into HOCSINH values('195200024','Trần Văn X','nam','2005/9/24','Vũng Tàu','g@gmail.com','12A2');
insert into HOCSINH values('195200025','Trần Văn Y','nam','2005/11/24','Hà Nội','h@gmail.com','12A2');
insert into HOCSINH values('195200026','Trần Văn Z','nam','2005/12/24','Huế','j@gmail.com','12A2');

create table LOP(
	malop varchar(10) primary key,
	tenlop varchar(10),
	siso int,
	makhoi varchar(10)
)

insert into LOP values('10A1','Lop 10A1','40','10');
insert into LOP values('10A2','Lop 10A2','39','10');
insert into LOP values('10A3','Lop 10A3','37','10');
insert into LOP values('10A4','Lop 10A4','37','10');
insert into LOP values('11A1','Lop 11A1','40','11');
insert into LOP values('11A2','Lop 11A2','39','11');
insert into LOP values('11A3','Lop 11A3','37','11');
insert into LOP values('12A1','Lop 12A1','40','12');
insert into LOP values('12A2','Lop 12A2','39','12');


alter table hocsinh 
add constraint hocsinh_lop foreign key(malop) references lop(malop)

create table HOCKY(
	mahocky varchar(10) primary key,
	tenhocky varchar(20)
);
insert into HOCKY values('hk1','Học Kỳ 1');
insert into HOCKY values('hk2','Học Kỳ 2');


create table MONHOC(
	mamonhoc varchar(20) primary key,
	tenmonhoc varchar(20)
)

insert into MONHOC values('Toan','Toán');
insert into MONHOC values('Ly','Lý');
insert into MONHOC values('Hoa','Hóa');
insert into MONHOC values('Sinh','Sinh');
insert into MONHOC values('Su','Sử');
insert into MONHOC values('Dia','Địa');
insert into MONHOC values('Van','Văn');
insert into MONHOC values('Daoduc','Đạo Đức');
insert into MONHOC values('Theduc','Thể Dục');


create table PHIEUDIEM(
	maphieudiem int AUTO_INCREMENT primary key,
	mamonhoc varchar(20),
	mahocsinh int,
	mahocky varchar(10),
	diem15p float,
	diem1t float,
	diemcuoiky float
)

alter table PHIEUDIEM
add constraint FK1 foreign key(mahocsinh) references HOCSINH(mahocsinh),
add constraint FK2 foreign key(mamonhoc) references MONHOC(mamonhoc),
add constraint FK3 foreign key(mahocky) references HOCKY(mahocky)


insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520000','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520001','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520002','2','7.8','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520003','7','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520004','10','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520005','9','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520006','1','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520007','10','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520008','10','10','1'); 

insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520000','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520001','9','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520002','6','7.8','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520003','4','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520004','1','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520005','9','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520006','1','7','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520007','10','5','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520008','10','3','1');

insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520000','10','7.5','5');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk2','19520000','9','7','5');


