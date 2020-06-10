<?php
session_start();
session_destroy();

header("Location: ../Webshop marvel/Webshop_home.php");
?>