<?php require('../../c/users/login.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/connex.css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
</head>
<body>
    <div class="w">
        <form class="form" method="POST">
          <?php require('../../c/messages/msgerror_connexion.php'); ?>

           <h1>Connexion</h1>

           <div class="text">
             <input type="email"placeholder="E-mail de l'utilisateur" name="email" >
           </div>
           <div class="text">
             <input type="password"placeholder="Mot de passe" name="password" >
           </div>

           <div>
              <button class="btn" type="submit" name="validate">Se Connecter</button>
           </div>
           
           
           <div class="btn">
             <a href="inscription.php">S'inscrire </a> 
           </div>
           <div class="btn">
             <a href="accueil.php">Retour au site </a>
           </div>
        </form> 
    </div>
</body>
</html>