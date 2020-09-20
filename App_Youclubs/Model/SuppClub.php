<?php
    include '../Model/DataBase.php';
    include '../Includes/functions.php';

    
    $id_club    = "";
    $Success ="";
    $id_club = isset($_GET['id_club']);

    $stmt = $db->prepare("SELECT * FROM club WHERE id_club = ? LIMIT 1");
    $stmt->execute(array($id_club));
    $row = $stmt->fetch();

    if(isset($_POST['Supprimer']))
    {  
            $stmt = $db->prepare("DELETE FROM club WHERE id_club= ?");
            $stmt->execute(array($id_club));

            $Success ="<br> <br> <div class='alert alert-success' role='alert'> Club bien supprimé ! </div>" .
             header('refresh:2;url=../View/Dashboard.php');
        
    }