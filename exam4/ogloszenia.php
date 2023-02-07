<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl1.css">
    <title>Portal ogłoszeniowy</title>
</head>
<body>
    <header>
        <h1>Portal Ogłoszeniowy</h1>
    </header>

    <div id="lewy">
        <h2>Kategorie ogłoszeń</h2>
        <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>

        <img src="książki.jpg" alt="Kupię / sprzedam książkę">
        <table>
            <tr>
                <td>Liczba ogłoszeń</td>
                <td>Ceba ogłoszenia</td>
                <td>Bonus</td>
            </tr>
            <tr>
                <td>1 - 10</td>
                <td>1 PLN</td>
                <td rowspan="3">Subskrypcja newslettera to upsut 0.20 PLN na ogłoszenie</td>
            </tr>
            <tr>
                <td>11 - 50</td>
                <td>0.80 PLN</td>

            </tr>
            <tr>
                <td>51 i więcej</td>
                <td>0.60 PLN</td>

            </tr>
        </table>
    </div>

    <div id="prawy">
        <h2>Ogłoszenia kategorii książki</h2>

        <?php

            $db=mysqli_connect("localhost", "root", " ", "ogloszenie");
            if(!db){ 
                die("bruh :( ");
            }

            $sql = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria=1;";
            $result = mysqli_query($db, $sql);  
            while($row = mysqli_fetch_array($result))
            {

                echo("<h3>" . $row["id"] . "-" . $row["tytul"] . "</h3>");
                echo("<p>" . $row["tresc"] . "</p>");

            }


        ?>

    </div>

    <footer>
        Portal ogłoszeniowy opracował: 0000000000
    </footer>
</body>
</html>