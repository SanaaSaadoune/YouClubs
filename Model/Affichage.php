<?php
    include '../Model/DataBase.php';
    session_start();
    if( $_SESSION["club"] == null){
    header("Location:../View/LoginTest.php");
    
    }else{
        $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
        if ($do == 'manage') 
        {
            $stmt = $db->prepare("SELECT * FROM evenement WHERE cloture=0");
            $stmt->execute(array());
            $rows = $stmt->fetchAll();
        }
    }