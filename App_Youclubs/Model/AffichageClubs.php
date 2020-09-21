<?php
    include '../Model/DataBase.php';
    session_start();
    if( $_SESSION["admin"] == null){
    header("Location:../View/Connexion.php");
    
    }else{
        $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
        if ($do == 'manage') 
        {
            //Affichage des clubs
            $stmt = $db->prepare("SELECT * FROM club");
            $stmt->execute(array());
            $rows = $stmt->fetchAll();
        }
    }