<?php
function dodaj($server,$uzytkownik,$haslo,$baza,$dane){
    if(($db=mysqli_connect($server,$uzytkownik,$haslo,$baza)) !=FALSE)
    {
        $sql ="
        INSERT INTO rezerwacja(data_rez,licza_osob,telefon)
        VALUES('{$dane[0]}','{$dane[1]}','{$dane[2]}');
        ";

        $result = mysqli_query($db,$sql);
        if($result !=FALSE){
            return mysqli_close($db);;
        }
    }
    return FALSE;
}
function wczytaj($server,$uzytkownik,$haslo,$baza){
    if(($db =mysqli_connect($server,$uzytkownik,$haslo,$baza)) !=FALSE){

        $sql ="
        SELECT nazwa,cena From Dania LIMIT 3;
        ";
        $result = mysqli_query($db,$sql);
        
        while($row=mysqli_fetch_array($result)){
            echo("<li>{$row['nazwa']}-{$row['cena']}zł</li>")
        }
    }
    return FALSE;
}

function clear_data($data){
    $data =trim($data);
    $data =stripslashes($data);
    $data =htmlspecialchars($data);
    return $data;
}

$data = $ilosz_osob = $telefon = $zgoda = "";

if($_SERVER['REQUEST_METOD'] =="POST"){
    $data = clear_data($_POST["data"]);
    $ilosz_osob = clear_data($_POST["ilosc_osob"]);
    $telefon = clear_data($_POST["telefon"]);    
    $zgoda = clear_data($_POST["zgoda"]);    

    if(dodaj('localhost','root','','baza',array($data ,$ilosz_osob,$telefon))){
        echo("Dodano")
    }else{
        echo("Nie dodano")
    }
}
?>
