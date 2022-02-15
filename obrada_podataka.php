
<?php 

require_once('mysqlconnector.php');
$konekcija=(new mysqlconnector())->connectToMysql();

$ime=$_POST["ime"];
$prezime=$_POST["prezime"];
$telefon=$_POST["telefon"];
$mail=$_POST["mail"];
$adresa=$_POST["adresa"];

$sql_komanda="INSERT INTO pacevil (ime, prezime, telefon, email, adresa)
 VALUES('$ime', '$prezime', '$telefon', '$mail', '$adresa')";


// provera
if(mysqli_query($konekcija, $sql_komanda)) {
    header("Location: prikaz_podataka.php");  
 }else {
    echo "Sql komanda nije uspela". mysqli_error($konekcija);
  }
  


?>
