<html>


<head>
    <link href="./Webshop opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>

        <div class="row">
            <div class="logo">
                <img src="../Webshop marvel/img/marvel logo.png" div>
                <ul class="main-nav">
                    <li><a href="../Webshop marvel/Webshop home.php"> HOME </a></li>
                    <li><a href="../Webshop marvel/Producten.php"> PRODUCTEN </a></li>
                    <li><a href="../Webshop marvel/Contact.php"> CONTACT </a></li>
                    <li class="active"><a href="../Webshop marvel/Login.php"> LOGIN </a></li>
                    <li><a href="../Webshop marvel/Winkelwagen.php"> WINKELWAGEN </a></li>
                </ul>
            </div>

            <?php
            session_start();
            if (isset($_SESSION['Naam'])) {
                echo '<p class="Login-status">Je bent ingelogd!</p>';
            } else {
                echo '<p class="Login-status">Je bent uitgelogd!</p>';
            }
            ?>

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