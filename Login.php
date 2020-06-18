<?php
session_start();
?>

<html>


<head>
    <link href="./Webshop_opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>

        <div class="row">
            <div class="logo">
                <img src="../Webshop marvel/img/marvel logo.png" div>
                <ul class="main-nav">
                    <li><a href="../Webshop marvel/Webshop_home.php"> HOME </a></li>
                    <li><a href="../Webshop marvel/Producten.php"> PRODUCTEN </a></li>
                    <li><a href="../Webshop marvel/Contact.php"> CONTACT </a></li>
                    <?php
                    if (isset($_SESSION['Email'])) {
                        echo $_SESSION['Naam'];
                        echo '<li><a href="../Webshop marvel/Uitloggen.php"> LOGUIT </a></li>';
                    } else {
                        echo '<li><a class="Active" href="../Webshop marvel/Login.php"> LOGIN</a></li>';
                    }
                    ?>
                    <li><a href="../Webshop marvel/Winkelwagen.php"> WINKELWAGEn </a></li>
                </ul>
            </div>

            <div id="form">
                <form action="../Webshop marvel/verwerk_inloggen.php" method="POST">
                    Naam:<br>
                    <input type="text" name="naam"><br>

                    Wachtwoord:<br>
                    <input type="text" name="wachtwoord"><br><br>

                    <input type="submit" value="Submit">
                </form>

                <p>
                    Nog geen account?
                    Registreer uzelf dan <a href="./Registreren.php">hier</a>
                </p>

            </div>


    </header>



</body>

</html>