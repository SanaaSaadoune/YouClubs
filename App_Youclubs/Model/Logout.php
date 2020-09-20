<?php

session_start();
//détruit toutes les variables de la session
session_unset();
session_destroy();

header('location: ../View/Connexion.php');
exit();
?>