USE baza

Create table lokale (
id Int IDENTITY(1,1), 
nazwa VARCHAR(100) ,
miasto VARCHAR(100) ,
ulica VARCHAR(100),
number Int ,
)
GO
Create table dania (
id Int IDENTITY(1,1), 
typ Int,
nazwa VARCHAR(100),
cena Int 
)
GO
Create table rezerwacje (
id Int IDENTITY(1,1), 
nr_stolika Int,
data_rez Date,
licza_osob Int ,
telefon VARCHAR(100)
)
GO
Create table pracownicy(
id Int IDENTITY(1,1), 
imie VARCHAR(100),
nazwa VARCHAR(100),
stanowisko Int,
)
GO
Insert into rezerwacje 
Values(
1,'2017-07-04',4,'111222333')
GO
Select * from dania
Order by data_rez

Select nazwa from dania
Where cena <15

Update pracownicy
Set stanowiska='barman'
Where stanowiska='kelner'
