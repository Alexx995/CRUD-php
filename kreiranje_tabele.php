
<?php 

 // parametri za vezu 
 $server="localhost";
 $user="root";
 $password="";
 $baza="todolist";


 // ostvarivanje veze
 $konekcija=mysqli_connect($server, $user, $password, $baza);

// sta ako dodje ili ne dodje do konekcije
if(!$konekcija) {
    echo "Ovo ne radi";
} else {
    echo "Ovo radi<br>";
}

$sql_komanda="CREATE TABLE register(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    ime VARCHAR(30) NOT NULL,
    prezime VARCHAR(30) NOT NULL,
    telefon INT,
    email VARCHAR(70),
    pasword VARCHAR(70)
    

)";

// provera
if(mysqli_query($konekcija, $sql_komanda)) {
    echo"Uspelo je";
  
 }else {
    echo "Sql komanda nije uspela". mysqli_error($konekcija);
  }
  

?>
