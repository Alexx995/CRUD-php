<?php 



require_once('mysqlconnector.php');
$konekcija=(new mysqlconnector())->connectToMysql();

$idp=$_GET['id'];
$imer=$_GET["imer"]; //var_dump($imer);
$prezimer=$_GET["prezimer"];
$telefonr=$_GET["telefonr"];
$mailr=$_GET["mailr"];
$adresar=$_GET["adresar"];


$sql_komanda="UPDATE pacevil SET ime='$imer', prezime='$prezimer', telefon='$telefonr', email='$mailr', adresa='$adresar' WHERE id='$idp' ";

var_dump($sql_komanda);


// provera
if(mysqli_query($konekcija, $sql_komanda)) {
    header("Location: prikaz_podataka.php");  
 }else {
    echo "Sql komanda nije uspela". mysqli_error($konekcija);
  }
  



?>

