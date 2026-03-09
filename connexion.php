<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "crud_php";

$conn = mysqli_connect($host,$user,$password,$db);

if(!$conn){
    die("Erreur de connexion: ".mysqli_connect_error());
}

?>