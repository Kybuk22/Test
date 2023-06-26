Create DATABASE sklep;

Use sklep ;

Create table dostawcy(

    id INT AUTO_INCREMENT PRIMARY KEY,
    Nazwa Varchar(50),
    Adress Varchar(50)
);
Create table towary(
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nazwa Varchar(20),
    cena FLOAT,
    promocja TINYINT(1),
    IdDostawcy INT(11), 
    FOREIGN KEY (IdDostawcy) REFERENCES dostawcy(id)
);
