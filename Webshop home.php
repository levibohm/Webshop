<html>

<head>
    <title>Marvel Fan Shop</title>
    <link href="Webshop opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>

<?php
session_start();
if (isset($_SESSION['Naam'])){
    echo '<p class="Login-status">You are logged in!</p>';
}
else {
    echo '<p class="Login-status">You are logged out!</p>';
}
?>
        <div class="row">
            <div class="logo">
                <img src="../Webshop marvel/img/marvel logo.png" div> <ul class="main-nav">
                <li class="active"><a href="../Webshop marvel/Webshop home.php"> HOME </a></li>
                <li><a href="../Webshop marvel/Producten.php"> PRODUCTEN </a></li>
                <li><a href="../Webshop marvel/contact.php"> CONTACT </a></li>
                <li><a href="../Webshop marvel/Login.php"> LOGIN </a></li>
                <li><a href="../Webshop marvel/Winkelwagen.php"> WINKELWAGEN </a></li>
                </ul>

            </div>

            <div class="hero">
                <h1>Welkom bij de Marvel Fan Shop</h1>
                <p>De fan shop voor al uw marvel actiefiguren, zolang de voorraad strekt</p>
            </div>

    </header>



</body>

</html>