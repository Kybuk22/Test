DROP DATABASE IF EXISTS wedkowanie;
Create DATABASE wedkowanie;

Use wedkowanie ;
GO



CREATE table Ryby (
  id INT UNSIGNED NOT NULL  PRIMARY KEY,
  nazwa varchar(100) ,
  wystepowanie varchar(100),
  styl_zycia int,
);

CREATE table Okres_ochronny (
    id INT UNSIGNED NOT NULL PRIMARY KEY,
    Ryby_id int,
    od_miesiaca int,
    do_miesiaca int,
    wymiar_ochronny int,
    foreign key (Ryby_id) references Ryby(id)
);

CREATE table Lowisko (
    id INT UNSIGNED NOT NULL  PRIMARY KEY,
    Ryby_id int,
    akwen varchar(100),
    wojewodztwo varchar(100) ,
    rodzaj int ,
    foreign key (Ryby_id) references Ryby(id)
);
