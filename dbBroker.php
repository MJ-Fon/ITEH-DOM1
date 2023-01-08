<?php 

$host = "localhost";
$db = "bendovi";
$user = "root";
$pass = "";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_errno){
    exit("Konekcija je neuspesna: " . $conn->connect_errno);
}

?>