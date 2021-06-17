create table NGUOIDUNG(
	id int AUTO_INCREMENT primary key,
 	username varchar(50),
    password varchar(50),
	email varchar(50)
)
insert into NGUOIDUNG values(1,'buithanhnhan76','123456','nhanbui37@gmail.com')

create table LOP(
	malop varchar(10) primary key,
	tenlop varchar(10),
	siso int,
	makhoi varchar(10)
)
insert into LOP values('10A1','Lop 10A1','30','10');
insert into LOP values('10A2','Lop 10A2','10','10');
insert into LOP values('10A3','Lop 10A3','37','10');
insert into LOP values('10A4','Lop 10A4','37','10');
insert into LOP values('11A1','Lop 11A1','10','11');
insert into LOP values('11A2','Lop 11A2','39','11');
insert into LOP values('11A3','Lop 11A3','37','11');
insert into LOP values('12A1','Lop 12A1','10','12');
insert into LOP values('12A2','Lop 12A2','39','12');


create table HOCSINH(
	mahocsinh int AUTO_INCREMENT primary key,
	hoten varchar(50),
	gioitinh varchar(5),
	ngaysinh date,
	diachi varchar(50),
	email varchar(50),
	malop varchar(10)
)
alter table hocsinh 
add constraint hocsinh_lop foreign key(malop) references lop(malop)
-- 10A1 students
insert into HOCSINH values('19520000','Trần Văn A','nam','2005/2/24','Hồ Chí Minh','a@gmail.com','10A1');
insert into HOCSINH values('19520001','Trần Văn B','nam','2005/3/24','Thủ Đức','b@gmail.com','10A1');
insert into HOCSINH values('19520002','Trần Văn C','nam','2005/5/24','Biên Hòa','c@gmail.com','10A1');
insert into HOCSINH values('19520003','Trần Văn D','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','10A1');
insert into HOCSINH values('19520004','Trần Văn E','nam','2005/6/24','Cái Bè','e@gmail.com','10A1');
insert into HOCSINH values('19520005','Trần Văn F','nam','2005/8/24','Vĩnh Long','f@gmail.com','10A1');
insert into HOCSINH values('19520006','Trần Văn G','nam','2005/9/24','Vũng Tàu','g@gmail.com','10A1');
insert into HOCSINH values('19520007','Trần Văn H','nam','2005/11/24','Hà Nội','h@gmail.com','10A1');
insert into HOCSINH values('19520008','Trần Văn I','nam','2005/12/23','Huế','j@gmail.com','10A1');
insert into HOCSINH values('19520009','Trần Văn J','nam','2005/5/25','Hồ Chí Minh','a@gmail.com','10A1');
insert into HOCSINH values('19520010','Trần Văn K','nam','2005/3/24','Thủ Đức','b@gmail.com','10A1');
insert into HOCSINH values('19520011','Trần Văn L','nam','2005/5/25','Biên Hòa','c@gmail.com','10A1');
insert into HOCSINH values('19520012','Trần Văn M','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','10A1');
insert into HOCSINH values('19520013','Trần Văn N','nam','2005/6/24','Cái Bè','e@gmail.com','10A1');
insert into HOCSINH values('19520014','Trần Văn O','nam','2005/8/24','Vĩnh Long','f@gmail.com','10A1');
insert into HOCSINH values('19520015','Trần Văn P','nam','2005/9/24','Vũng Tàu','g@gmail.com','10A1');
insert into HOCSINH values('19520016','Trần Văn Q','nam','2005/11/23','Hà Nội','h@gmail.com','10A1');
insert into HOCSINH values('19520017','Trần Văn R','nam','2005/12/24','Huế','j@gmail.com','10A1');
insert into HOCSINH values('19520018','Trần Văn S','nam','2005/2/24','Hồ Chí Minh','a@gmail.com','10A1');
insert into HOCSINH values('19520019','Trần Văn T','nam','2005/3/24','Thủ Đức','b@gmail.com','10A1');
insert into HOCSINH values('19520020','Trần Văn Y','nam','2005/5/24','Biên Hòa','c@gmail.com','10A1');
insert into HOCSINH values('19520021','Trần Văn V','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','10A1');
insert into HOCSINH values('19520022','Trần Văn Wuy','nam','2005/6/24','Cái Bè','e@gmail.com','10A1');
insert into HOCSINH values('19520023','Trần Văn SS','nam','2005/8/24','Vĩnh Long','f@gmail.com','10A1');
insert into HOCSINH values('19520024','Trần Văn Hưng','nam','2005/9/24','Vũng Tàu','g@gmail.com','10A1');
insert into HOCSINH values('19520025','Trần Văn Hùng','nam','2005/11/24','Hà Nội','h@gmail.com','10A1');
insert into HOCSINH values('19520026','Trần Văn Hoài','nam','2005/12/24','Huế','j@gmail.com','10A1');
insert into HOCSINH values('19520027','Trần Văn Ngư','nam','2005/8/24','Vĩnh Long','f@gmail.com','10A1');
insert into HOCSINH values('19520028','Trần Văn Nha','nam','2005/9/24','Vũng Tàu','g@gmail.com','10A1');
insert into HOCSINH values('19520029','Trần Văn Nam','nam','2005/11/24','Hà Nội','h@gmail.com','10A1');

-- 10A2 students
insert into HOCSINH values('19520030','Trần Văn Nam','nam','2005/2/24','Hồ Chí Minh','a@gmail.com','10A2');
insert into HOCSINH values('19520031','Trần Văn Ngân','nam','2005/3/24','Thủ Đức','b@gmail.com','10A2');
insert into HOCSINH values('19520032','Trần Văn Nhi','nữ','2005/5/24','Biên Hòa','c@gmail.com','10A2');
insert into HOCSINH values('19520033','Trần Văn Hoài','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','10A2');
insert into HOCSINH values('19520034','Trần Văn Hưng','nam','2005/6/24','Cái Bè','e@gmail.com','10A2');
insert into HOCSINH values('19520035','Trần Văn FF','nữ','2005/8/24','Vĩnh Long','f@gmail.com','10A2');
insert into HOCSINH values('19520036','Trần Văn Yasuo','nam','2005/9/24','Vũng Tàu','g@gmail.com','10A2');
insert into HOCSINH values('19520037','Trần Văn HH','nữ','2005/11/24','Hà Nội','h@gmail.com','10A2');
insert into HOCSINH values('19520038','Trần Văn II','nam','2005/12/23','Huế','j@gmail.com','10A2');
insert into HOCSINH values('19520039','Trần Văn JJ','nam','2005/5/25','Hồ Chí Minh','a@gmail.com','10A2');

-- 11A1

insert into HOCSINH values('19520040','Trần Văn Na','nam','2005/2/24','Hồ Chí Minh','a@gmail.com','11A1');
insert into HOCSINH values('19520041','Trần Văn Ngun','nam','2005/3/24','Thủ Đức','b@gmail.com','11A1');
insert into HOCSINH values('19520042','Trần Văn Nhu','nữ','2005/5/24','Biên Hòa','c@gmail.com','11A1');
insert into HOCSINH values('19520043','Trần Văn Hoài','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','11A1');
insert into HOCSINH values('19520044','Trần Văn Hư','nam','2005/6/24','Cái Bè','e@gmail.com','11A1');
insert into HOCSINH values('19520045','Trần Văn FF','nữ','2005/8/24','Vĩnh Long','f@gmail.com','11A1');
insert into HOCSINH values('19520046','Trần Văn suo','nam','2005/9/24','Vũng Tàu','g@gmail.com','11A1');
insert into HOCSINH values('19520047','Trần Văn H','nữ','2005/11/24','Hà Nội','h@gmail.com','11A1');
insert into HOCSINH values('19520048','Trần Văn I','nam','2005/12/23','Huế','j@gmail.com','11A1');
insert into HOCSINH values('19520049','Trần Văn J','nam','2005/5/25','Hồ Chí Minh','a@gmail.com','11A1');

-- 12A1

insert into HOCSINH values('19520050','Trần Na','nam','2005/2/24','Hồ Chí Minh','a@gmail.com','12A1');
insert into HOCSINH values('19520051','Trần Ngun','nam','2005/3/24','Thủ Đức','b@gmail.com','12A1');
insert into HOCSINH values('19520052','Trần Nhu','nữ','2005/5/24','Biên Hòa','c@gmail.com','12A1');
insert into HOCSINH values('19520053','Trần Hoài','nam','2005/1/24','Hồ Chí Minh','d@gmail.com','12A1');
insert into HOCSINH values('19520054','Trần Hư','nam','2005/6/24','Cái Bè','e@gmail.com','12A1');
insert into HOCSINH values('19520055','Trần FF','nữ','2005/8/24','Vĩnh Long','f@gmail.com','12A1');
insert into HOCSINH values('19520056','Trần suo','nam','2005/9/24','Vũng Tàu','g@gmail.com','12A1');
insert into HOCSINH values('19520057','Trần H','nữ','2005/11/24','Hà Nội','h@gmail.com','12A1');
insert into HOCSINH values('19520058','Trần I','nam','2005/12/23','Huế','j@gmail.com','12A1');
insert into HOCSINH values('19520059','Trần J','nam','2005/5/25','Hồ Chí Minh','a@gmail.com','12A1');

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

-- Data 10A1
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520000','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520001','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520002','2','7.8','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520003','7','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520004','10','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520005','9','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520006','5','6','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520007','10','0','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520008','10','10','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520009','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520010','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520011','2','8','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520012','7','9','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520013','10','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520014','9','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520015','1','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520016','10','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520017','10','9','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520018','5','6','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520019','10','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520020','10','10','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520021','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520022','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520023','2','6','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520024','7','9','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520025','2','5','7');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520026','9','8','8');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520027','1','7','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520028','0','8','9');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520029','0','10','1');

insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520000','8','2','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520001','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520002','2','7.8','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520003','7','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520004','10','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520005','9','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520006','5','6','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520007','10','0','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520008','10','10','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520009','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520010','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520011','2','8','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520012','7','9','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520013','10','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520014','9','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520015','1','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520016','10','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520017','10','5','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520018','5','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520019','10','3','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520020','10','1','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520021','8','5','2');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520022','6','7','5');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520023','2','6','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520024','7','9','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520025','2','4','7');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520026','9','6','8');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520027','1','7','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520028','0','5','9');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk2','19520029','0','5','1');

-- Data 10A1
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520000','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520001','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520002','2','3','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520003','7','0','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520004','10','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520005','9','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520006','5','5','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520007','10','0','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520008','10','10','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520009','8','2','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520010','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520011','2','1','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520012','7','9','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520013','10','4','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520014','9','1','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520015','1','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520016','10','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520017','10','0','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520018','5','2','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520019','10','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520020','10','10','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520021','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520022','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520023','2','6','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520024','7','9','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520025','2','5','7');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520026','9','8','8');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520027','1','7','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520028','0','8','9');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520029','0','10','1'); 

-- Data 10A2
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520030','8','7.5','6');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520031','6','7','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520032','2','8','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520033','7','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520034','10','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520035','1','8','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520036','5','0','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520037','10','0','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520038','1','0','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520039','8','5','6');

-- Data 11A1
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520040','2','5','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520041','6','2','3');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520042','2','1','4');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520043','7','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520044','10','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520045','1','2','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520046','5','0','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520047','10','0','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520048','1','0','0'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520049','8','2','6');

-- Data 12A1
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520050','2','5','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520051','6','2','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520052','2','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520053','7','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520054','10','1','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520055','1','2','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520056','5','0','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520057','10','10','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520058','1','10','10'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Toan','hk1','19520059','8','2','10');

insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520050','2','5','2');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520051','6','2','2');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520052','2','1','0');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520053','7','1','0');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520054','10','1','5');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520055','1','2','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520056','5','0','1');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520057','10','5','10');
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520058','1','10','10'); 
insert into PHIEUDIEM(mamonhoc, mahocky,mahocsinh, diem15p, diem1t, diemcuoiky) values ('Ly','hk1','19520059','2','2','0');


