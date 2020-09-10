<?php 
  include '../Model/AffichageSuggestions.php';
  include '../Model/SuppSuggest.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Public/Style/DashboardAdmin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php
      include '../Includes/HeaderAdmin.php';
    ?>
    <div class="space"> </div>
    <?php echo $Success; ?> 
    <div class="Image1"><img src="../Public/Images/Suppr.svg" alt="photo" width="400px" height="300px"> </div>
    <h2> Suppression du suggestion de " <?php echo $row->nom_membre. " " . $row->prenom_membre ?> "</h2>
    <div class="space"> </div>
    <form method="POST">
    <div class="buttons">
        <button type="submit" name="Supprimer" id="btnSupprimer" > Supprimer </button>
    </div>
    </form>
      <div class="retour">
        <a href="Gestion_suggest.php">
            <button><img src="../Public/Images/retour.svg" alt="retour" width="40px" height="40px"></button>
        </a>
    </div>
</body>
</html>