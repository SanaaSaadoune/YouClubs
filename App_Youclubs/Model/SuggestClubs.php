<?php
    include '../Model/DataBase.php';

    if( $_SESSION["club"] == null){
    header("Location:../View/Connexion.php");
    
    }else{
    //Afficher les suggestions concernant le club connecté
    $stmt = $db->prepare("SELECT * FROM suggestion, membre, club
    WHERE suggestion.id_membre = membre.id_membre AND suggestion.id_club = club.id_club  AND club.id_club = ? ORDER BY date_suggest desc LIMIT 20 ");
    $stmt->execute(array($_SESSION['id_club']));
    $suggestClub = $stmt->fetchAll();
    }
