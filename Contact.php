<?php
session_start();
?>

<html>

<head>
    <link href="Webshop_opmaak.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>

        <div class="row">
            <div class="logo">
                <img src="../Webshop marvel/img/marvel logo.png" div>
                <ul class="main-nav">
                    <li><a href="../Webshop marvel/Webshop_home.php"> HOME </a></li>
                    <li><a href="../Webshop marvel/Producten.php"> PRODUCTEN </a></li>
                    <li class="active"><a href="../Webshop marvel/Contact.php"> CONTACT </a></li>
                    <?php
                    if (isset($_SESSION['naam'])) {
                        
                        echo $_SESSION['naam'];
                        
                        echo '<li><a href="../Webshop marvel/Uitloggen.php"> LOGUIT </a></li>';
                    
                        if ($_SESSION['Admin'] == 0) {
                        
                            echo '<li><a href="#">Beheren</a></li>';
                    
                        }
                    }
                    else {
                        echo '<li><a class="Active" href="../Webshop marvel/Login.php"> LOGIN</a></li>';
                    }
                
                    ?>
                    <li><a href="../Webshop marvel/Winkelwagen.php"> WINKELWAGEN </a></li>
                </ul>
            </div>
            <p>
                Wij zijn telefonisch bereikbaar op maandag t/m donderdag van 09:00 tot 17:00 en op E-mail kunt u ons altijd vragen stellen en wordt er z.s.m gereageerd op uw vraag.
            </p>
            <P>
                onze contactgegevens:
            </P>
            <p>
                E-Mail: 162738@novacollege.nl
            </p>
            <p>
                Telefoonnummer: (023) 530 20 10
            </p>
    </header>
</body>

</html>