<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wedkowanie";
    
    function Skrypt_1(){
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT r.nazwa, akwen, wojewodstwo FROM Lowisko l Inner JOIN Ryby r On r.id=L.Ryby.id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "nazwa: " . $row[" r.nazwa"]. " plywa w rzece " . $row["akwen"]. " " . $row["wojewodstwo"]
        $conn->close();
        }
        }}
    function Skrypt_2(){
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM Lowisko";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "" . $row["id"]. "". $row["Ryby_id"]. "" .$row["akwen"].""$row["akwen"]."".$row["wojewodstwo"]."".$row["rodzaj"]
            }
        $conn->close();
        
    }}
   
    


?>