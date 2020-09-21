<?php
    include '../Model/DataBase.php';
    session_start();
    if( $_SESSION["club"] == null){
    header("Location:../View/Connexion.php");
    
    }else{
        $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
        if ($do == 'manage') 
        {
            //Afficher les evenements non clôturés du club connecté
            $stmt = $db->prepare("SELECT * FROM evenement WHERE cloture=0 and id_club = ?");
            $stmt->execute(array($_SESSION['id_club']));
            $rows = $stmt->fetchAll();
        }
    }