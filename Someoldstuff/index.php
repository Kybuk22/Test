<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Imie</label>
        <input type="text" id="name"><br>
        <label>Nazwisko</label>
        <input type="text" id="surname"><br>
        <label>Numer</label>
        <input type="text" id="phone"><br>
        <label>Pesel</label>
        <input type="text" id="pesel"><br>
        <label>DataUrodzenia</label>
        <input type="date" id="bithday"><br>

        <button type="submit">Send</button>
    </form>
    <?php
error_reporting(E_ERROR | E_PARSE);

$nameInput = $_POST["name"];
$surnameInput = $_POST["surname"];
$phoneInput = $_POST["phone"];
$peselInput = $_POST["pesel"];
$birthdayInput = $_POST["birthday"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!preg_match('/[0-9]{9}/', $phoneInput))
    {
        echo "Wpisz 9 liczb do PHONE";
        return;
    }

    if(!preg_match('/[0-9]{11}/', $peselInput))
    {
        echo "Wpisz 11 liczb do PESEL";
        return;
    }

    $birthday = new DateTime($birthdayInput);
    $today = new DateTime();

    if($birthday > $today)
    {
        echo "Wrong";
        return;
    }

}

?>


</body>
</html>