<?php
require('../c/login_action.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../utilisateur/v/css/admin_login.css">
    <link rel="icon" type="imgs/png" href="../../utilisateur/v/imgs/log.png">
</head>
<body>
    <div class="w">
        <form class="form" method="POST">
          <?php require('../../utilisateur/c/messages/msgerror_connexion.php'); ?>

           <h1>Administrateur</h1>

           <div class="text">
             <input type="email"placeholder="Email de l'Administrateur" name="email" >
           </div>

           <div class="text">
             <input type="text"placeholder="Pseudo de l'Administrateur" name="pseudo" >
           </div>
           <div class="text">
             <input type="password"placeholder="Mot de passe" name="password" >
           </div>
           <br>

           <div >
              <button class ="btn" type="submit" name="validate">Se Connecter</button>
           </div>
           
           <div class="btn">
             <a href="../../utilisateur/v/php/accueil.php">Retour au site </a>
           </div>
        </form> 
    </div>
</body>
</html>