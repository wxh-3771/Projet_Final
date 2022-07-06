<?php 
require('../c/admin_secu.php');
?>

<!DOCTYPE html>
<html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="imgs/png" href="../../utilisateur/v/imgs/log.png">

            <link rel="stylesheet" href="../../utilisateur/v/css/navbar.css">
            <link rel="stylesheet" href="./css/home.css">

            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
            
            <title>Bienvenu sur l'Espace Administrateur</title>
        </head>

        <body>
            <?php 
                require('../../utilisateur/v/includes/navbar.php');
            ?>

            <br>
            
            
            <h1>Faites du bon travail : <?=$_SESSION['pseudo']?></h1>
            <br>

            <div class="btn">
                <a href ="membres.php"><button class="btn btn-outline-dark my-2 my-sm-0" type="button"> Afficher Les Membres du Forum </button></a>
                <a href ="questions.php"><button class="btn btn-outline-dark my-2 my-sm-0" type="button"> Afficher Les Questions du Forum </button></a>
            </div>
            

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        </body>
</html>