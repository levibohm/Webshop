<?php
include 'Connectie.php';


$vraag = 'SELECT * FROM producten';


$resultaat = $conn->query($vraag);


if ($resultaat->num_rows > 0) {
    echo '<div class="producten">';
    while($rij = $resultaat->fetch_assoc()) //Een rij ophalen
    {

        $id = $rij['Prod_id'];
        $naam = $rij['Prod_naam'];
        $prijs = $rij['Prod_prijs'];
        $omschrijving = $rij['Prod_omschrijving'];
        $image = $rij['Prod_image'];


        echo '<form class="card">';
        echo '<h3>' . $naam . '</h3>';
        echo '<img src="' . $image . '"width="250" height="190">';
        echo ' <p class="prijs">€ ' . $prijs . '</p>';
        echo ' <p class="omschrijving">' . $omschrijving . '</p>';
        echo '<p> <button>Add to Cart</button></p>';
        echo '</form>';
    }

    echo '</div>';
}

?>


<style>
    .producten {
        display: flex;
        flex-flow: row wrap;
        float: center;
        text-align: center;
    }
    .card {
    box-shadow: 4px 4px 8px 4px #f85b0027;
    font-family: arial;
    margin:75px;
    padding: 10px;
    top: 25px;
    display: inline-block;
    }

 header
{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(img/Avengers.png);
    height: 150vh;
    background-size: cover;
    background-position: center;
    color: white;
}

h1 {
    color: white;
    text-transform: uppercase;
    font-size: 70px;
    text-align: center;
    margin-top: 275px;
}

</style>
