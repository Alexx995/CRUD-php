
<?php
require_once('mysqlconnector.php');
$konekcija=(new mysqlconnector())->connectToMysql();


// izvlacenje podataka

$sql_komandar="SELECT * FROM pacevil where id={$_GET['id']}";
$rezultat=mysqli_query($konekcija, $sql_komandar);
$rekord_iz_baze = mysqli_fetch_assoc($rezultat);

$idp=$_GET['id']; //var_dump($idp);
$imep=$rekord_iz_baze['ime'];
$prezimep=$rekord_iz_baze['prezime'];
$telefonp=$rekord_iz_baze['telefon'];
$mailp=$rekord_iz_baze['email'];
$adresap=$rekord_iz_baze['adresa']; 


session_start();

$_SESSION["id"]=$idp;
$_SESSION["ime"]=$imep;
$_SESSION["prezime"]=$prezimep;
$_SESSION["telefon"]=$telefonp;
$_SESSION["email"]=$mailp;
$_SESSION["adresa"]=$adresap;





//var_dump($imep, "testiram radi li dump");

header("Location: views/update_podataka.html"); 



?>

<!--<form action='obrada_updajtovanih_podataka.php' method = 'post'>

<input type="number" name="id" hidden value="<?php echo $_GET['id'] ?>"><br>

Ime<br>
<input type="text" name="ime" value="<?php echo $rekord_iz_baze['ime'] ?>"><br>

Prezime<br>
<input type="text" name="prezime" value="<?php echo $rekord_iz_baze['prezime'] ?>"><br>

Telefon<br>
<input type="text" name="telefon" value="<?php echo $rekord_iz_baze['telefon'] ?>"><br>

Mail<br>
<input type="text" name="mail" value="<?php echo $rekord_iz_baze['email'] ?>"><br>

Adresa<br>
<input type="text" name="adresa" value="<?php echo $rekord_iz_baze['adresa'] ?>"><br>

<br>

<input type="submit"  value="prosledi podatke">


</form>

-->

