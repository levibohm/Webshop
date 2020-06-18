<?php
session_start();
?>

<html>

<head>
    <title>Marvel Fan Shop</title>
    <link href="Webshop_opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>

        <div class="row">
            <div class="logo">
                <img src="../Webshop marvel/img/marvel logo.png" div>
                <ul class="main-nav">
                    <li class="active"><a href="../Webshop marvel/Webshop_home.php"> HOME </a></li>
                    <li><a href="../Webshop marvel/Producten.php"> PRODUCTEN </a></li>
                    <li><a href="../Webshop marvel/contact.php"> CONTACT </a></li>
                    <?php
                    if (isset($_SESSION['naam'])) {
                        
                        echo $_SESSION['naam'];
                        
                        echo '<li><a href="../Webshop marvel/Uitloggen.php"> LOGUIT </a></li>';
                    
                        if ($_SESSION['Admin'] == 0) {
                        
                            echo '<li><a class="Active" href="#"> BEHEREN </a></li>';
                    
                        }
                    }
                    else {
                        echo '<li><a class="Active" href="../Webshop marvel/Login.php"> LOGIN</a></li>';
                    }
                
                    ?>
                    <li><a href="../Webshop marvel/Winkelwagen.php"> WINKELWAGEN </a></li>
                </ul>

            </div>

            <div class="hero">
                <h1>Welkom bij de Marvel Fan Shop</h1>
                <p>De fan shop voor al uw marvel actiefiguren, zolang de voorraad strekt</p>
            </div>
        </div>

    </header>



</body>

</html>