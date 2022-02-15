<?php

require_once('mysqlconnector.php');
$konekcija=(new mysqlconnector())->connectToMysql();

// izvlacenje podataka

$sql_komanda="SELECT * FROM pacevil";
$rezultat=mysqli_query($konekcija, $sql_komanda);
//$podaci=mysqli_fetch_assoc($rezultat); 
//var_dump($podaci);
while(($row = mysqli_fetch_assoc($rezultat))) {
    $podaci[] = $row;
}  
session_start();

$_SESSION["podaci"]=$podaci;


header("Location: views/prikaz_podataka.html"); 

 ?>