<?php
    session_start();
    require('../../c/users/profil_action.php');
?>
<!DOCTYPE html>
<html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="imgs/png" href="../imgs/log.png">
            <link rel="stylesheet" href="../css/profil.css">

            <link rel="stylesheet" href="../css/footer.css">
            <link rel="stylesheet" href="../css/navbar.css">

            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
            
            <title>Mon profil</title>
        </head>

        <body>

            <?php 
             require('../includes/navbar.php');
            ?>

            
            <header class="profil">
                <div class="text"> 
                 <h3><?php require('../../c/users/bonjour.php');?> <?= $user_pseudo; ?></h3>
                 <h5>On est ravie de vous revoir parmi nous ! </h5>

                </div>
            </header> 
            
          <div>
                <?php     
                 require('../../c/messages/msgerror_connexion.php');
                ?>

                <p>Vos Informations personelles du compte sont les suivantes : </p>
                <div class="infos">
                    <h6>@<?= $user_pseudo; ?></h6>
                    <h6><?= $user_lastname . ' ' . $user_firstname; ?></h6>
                </div>
                
                <br>

                <div>
                    <p>Les questions que vous avez postées sont les suivantes : </p>
                    <a href="mes_questions.php"><button>Mes Questions</button></a>
                </div>
            </div>
                
          <?php 
             require('../includes/footer.php');
            ?>
                
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      </body>
</html>