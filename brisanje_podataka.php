<?php 

require_once('mysqlconnector.php');
$konekcija=(new mysqlconnector())->connectToMysql();

$sql_komanda="DELETE FROM pacevil WHERE id={$_POST['id']}";


// provera

if(mysqli_query($konekcija, $sql_komanda)) {
    header("Location: prikaz_podataka.php");  
 }else {
    echo "Sql komanda nije uspela". mysqli_error($konekcija);
  }
  

?>
