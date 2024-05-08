
create schema if not exists krompir;
use krompir;

create table if not exists KROMPIR_VRSTA(
	ID_krompir_v INT NOT NULL auto_increment primary key,
    naziv varchar(45) not null
);

create table if not exists NAROCNIK (
	ID_narocnik int not null auto_increment primary key,
    ime varchar(45) not null,
    priimek varchar(45) not null,
    spol bool,
    datum_rojstva date,
    eposta varchar(45),
    TK_naslov int not null
);

create table if not exists NASLOV (
	ID_naslov int not null auto_increment primary key,
    kraj varchar(60) not null,
    hisna_st varchar(5) not null,
    TK_mesto INT NOT NULL
);

create table if not exists MESTO (
	ID_mesto int not null auto_increment primary key,
    mesto varchar(45),
    postna_stevilka char(4)
);

create table if not exists NAROCILO (
	ID_narocilo int not null auto_increment primary key,
    TK_krompir_v int not null,
    TK_narocnik int not null,
    teza int not null,
    sporocilo mediumtext
);

alter table NAROCILO add constraint narocilo_krompir foreign key (TK_krompir_v) references KROMPIR_VRSTA(ID_krompir_v) on update no action on delete cascade;
alter table NAROCILO add constraint narocilo_narocnik foreign key (TK_narocnik) references NAROCNIK(ID_narocnik) on update no action on delete cascade;
alter table NAROCNIK add constraint narocnik_naslov foreign key (TK_naslov) references NASLOV(ID_naslov) on update no action on delete cascade;
alter table NASLOV add constraint naslov_mesto foreign key (TK_mesto) references MESTO(ID_mesto) on update no action on delete cascade;