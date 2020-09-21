<?php

    include '../Model/DataBase.php';
    include '../Includes/functions.php';
    session_start();
    if( $_SESSION["membre"] == null){
    header("Location:../View/Connexion.php");
    
    }else{
        $id_event = isset($_GET['id_event']) && is_numeric($_GET['id_event']) ? intval($_GET['id_event']) : 0;
        
        //Afficher les infos de l'evenement qu'on souhaite consulter
        $stmt = $db->prepare("SELECT DATE_FORMAT(date_event, '%Y-%m-%d | %H:%i') as date_event, nom_event,article, photo_event,description_event FROM evenement WHERE id_event = ? LIMIT 1");
        $stmt->execute(array($id_event));
        $row = $stmt->fetch();

        //Afficher les photos de l'événement concerné
        $stmt2 = $db->prepare("SELECT * FROM photo WHERE id_event = ?");
        $stmt2->execute(array($id_event));
        $row2 = $stmt2->fetchAll();
    }
