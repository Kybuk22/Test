CREATE DATABASE baza;
Use baza;

CREATE TABLE uzytkownik(
id int AUTO_INCREMENT,
imie varchar(100),
nazwisko varchar(100),
telefone varchar(100),
email varchar(100),
Primary key(id)
);

CREATE TABLE ogloszenie(
id int AUTO_INCREMENT PRIMARY KEY,
uzytkownik_id int,
kategoria int,
podkategoria int,
tytul varchar(100),
tresc varchar(200),
FOREIGN KEY (uzytkownik_id) REFERENCES uzytkownik(id)
);



Select id, tytul, tresc
From ogloszenie
Where kategoria=1;

Select uz.telefon 
From ogloszenie as og
Join uzytkownik as uz
