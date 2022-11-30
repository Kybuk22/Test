create database wedkowanie;
use wedkowanie;

create table Ryby (
  id int not null auto_increment,
  nazwa text,
  wystepowanie text,
  styl_zycia int,
  primary key (id)
);

create table Okres_ochronny (
    id int not null auto_increment,
    Ryby_id int,
    od_miesiaca int,
    do_miesiaca int,
    wymiar_ochronny int,
    primary key (id),
    foreign key (Ryby_id) references Ryby(id)
);

create table Lowisko (
    id int not null auto_increment,
    Ryby_id int,
    akwen text,
    wojewodztwo text,
    rodzaj int,
    primary key (id),
    foreign key (Ryby_id) references Ryby(id)
);

