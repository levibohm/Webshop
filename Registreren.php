<html>

<head>
    <link href="../Webshop marvel/Webshop opmaak.css" rel="stylesheet" type="text/css">
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

            <div id="form">
                <form action="../Webshop marvel/verwerk_registreren.php" method="POST">


                    Email:<br>
                    <input type="text" name="email"><br>

                    First name:<br>
                    <input type="text" name="firstname"><br>

                    Last name:<br>
                    <input type="text" name="lastname"><br>

                    Wachtwoord (Maximaal 10 tekens):<br>
                    <input type="text" name="wachtwoord"><br>

                    Plaats:<br>
                    <input type="text" name="plaats"><br>

                    Postcode:<br>
                    <input type="text" name="postcode"><br>

                    Straat:<br>
                    <input type="text" name="straat"><br>

                    Telefoonnummer:<br>
                    <input type="text" name="telefoonnr"><br><br>


                    <input type="submit" value="Submit">


                </form>
            </div>
    </header>

</body>

</html>