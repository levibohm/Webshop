<?php
$Voornaam = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Naam = $Voornaam . ' ' . $Lastname;
$Email = $_POST['email'];
$Wachtwoord = $_POST['wachtwoord'];
$Plaats = $_POST['plaats'];
$Postcode = $_POST['postcode'];
$Straat = $_POST['straat'];
$Telefoonnummer = $_POST['telefoonnr'];
include 'Connectie.php';

$vraag = "INSERT INTO klant( Email, Naam, Wachtwoord, Plaats, Postcode, Straat, Telefoonnr) 
Values('".$Email."' , '" .$Naam."' , '".$Wachtwoord."' , '".$Plaats."' , '".$Postcode."' , '".$Straat."' , '".$Telefoonnummer."')";
$resultaat = $conn->query($vraag);


if ( $resultaat == false )
{
   echo "Fout in insert-query of toevoegen niet gelukt!";
}
else
{
   header('../Webshop marvel/Webshop_home.php');
   exit;
}

echo $vraag;
