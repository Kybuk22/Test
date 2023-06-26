CREATE DATABASE sklep;
USE sklep;
CREATE TABLE producenci(
id INT AUTO_INCREMENT PRIMARY KEY,
nazwa TEXT,
opis TEXT
);
CREATE TABLE typy(
id INT AUTO_INCREMENT PRIMARY KEY,
kategoria TEXT
);
CREATE TABLE podzespoly(
id INT AUTO_INCREMENT PRIMARY KEY,
typy_id INT ,
producenci_id INT,
nazwa TEXT,
opis TEXT,
dostepnosc TINYINT(1),
cena FLOAT,
FOREIGN KEY (typy_id) REFERENCES typy(id),
FOREIGN KEY (producenci_id) REFERENCES producenci(id)
);
