<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Artykuły papiernicze</title>
</head>
<body>

    <div class = "Baner">

        <h2>W naszym sklepie internetowym kupisz najtaniej</h2>

    </div> 
    <div class = "Container">

        <div class = "Lewy">
             <h2>Kontakt</h2>
            <p>telefon: 444333222<br>
                e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="./promocja2.png" alt = "promocja" class="Obraz">
        </div>

        <div class = "Srodek">
                <h2>Promocja 10% obejmuje artykuły:</h2>

        <div class="List">
            <ul>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sklep";
                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql ="SELECT t.Nazwa  FROM `towary` t Where t.promocja is NOT NULL";
                $result = $conn->query($sql);
                foreach($result as $row) {
                    echo '<li>'.$row["Nazwa"].'</li>';
                };

            ?>
        </ul>
        </div>
            </div>

        <div class = "Prawy">
            <h2>Cena wybranego artykułu w promocji</h2>
            <form action='index.php' method='Post' class='Form'>

            <select typqe='select' name='produkt' > 
                <option value='Gumka do mazania'>Gumka do mazania</option>
                <option value='Cienkopis'>Cienkopis</option>
                <option value='Pisaki 60 szt.'>Pisaki 60 szt.</option>
                <option value='Markery 4 szt.'>Markery 4 szt.</option>
            </select>

            <input type='submit' name='submit'  value='WYBIERZ'> 
            
            </form>
            <?php
            error_reporting(E_ALL ^ E_WARNING); 
            
            if($_POST['submit'] == "WYBIERZ"){
                $val=$_POST['produkt'];
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sklep";
                $query ="SELECT t.cena  FROM `towary` t Where t.Nazwa='$val'";
                $result = $conn->query($query);
                foreach($result as $row) {
                    echo round($row["cena"]*0.90, 2) ;
                };
                $conn->close();
            }
            ?>
        </div>
    </div>
    <div class = "Stopka">
        <p>Autor strony:000000000</p>
    </div>
</body>
</html>