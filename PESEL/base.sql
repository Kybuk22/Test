USE baza

Create table lokale (
id Int unsigned auto_increment primary key, 
nazwa VARCHAR(100) ,
miasto VARCHAR(100) ,
ulica VARCHAR(100),
number Int ,
)
Create table dania (
id Int unsigned auto_increment primary key, 
typ Int,
nazwa VARCHAR(100),
cena Int 
)
Create table rezerwacje (
id Int unsigned auto_increment primary key, 
nr_stolika Int,
data_rez Date,
licza_osob Int ,
telefon VARCHAR(100)
)
Create table pracownicy(
id Int unsigned auto_increment primary key, 
imie VARCHAR(100),
nazwa VARCHAR(100),
stanowisko Int,
)

Insert into rezerwacje 
Values(
1,'2017-07-04',4,'111222333')

Select * from dania
Order by data_rez

Select nazwa from dania
Where cena <15

Update pracownicy
Set stanowiska='barman'
Where stanowiska='kelner'
