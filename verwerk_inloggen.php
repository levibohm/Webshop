<?php
session_start();
$Naam = $_POST['naam'];
$Wachtwoord = $_POST['wachtwoord'];
include 'Connectie.php';



$vraag = " SELECT * FROM klant WHERE Naam = '" .$Naam. "' AND Wachtwoord ='" .$Wachtwoord. "'";
$resultaat = $conn->query($vraag);


if ( $resultaat->num_rows > 0)
{
   $rij = $resultaat->fetch_assoc();  //Een rij ophalen
   
   $_SESSION['Nummer'] = $rij  ['Nummer'];
   $_SESSION['Email'] = $rij ['Email'];
   $_SESSION['naam'] = $rij ['Naam'];
   $_SESSION['Plaats'] = $rij ['Plaats'];
   $_SESSION['Postcode'] = $rij ['Postcode'];
   $_SESSION['Straat'] = $rij ['Straat'];
   $_SESSION['Telefoonnr'] = $rij ['Telefoonnr'];
   $_SESSION['Admin'] = $rij ['Admin'];
   echo $_SESSION['Email'];
   echo $rij ['Email'];
   header("Location: ../Webshop marvel/Webshop_home.php");
}
else
{
echo 'We dont have a match';
}

?>