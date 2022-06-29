<?php require('../../c/users/register.php'); ?>
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
        <form  class="form" method="POST">
            <?php require('../../c/messages/msgerror_connexion.php'); ?>
            <h1>Inscription</h1>
            <div class="text">
                <input type="email"placeholder="E-mail" name="email" >
            </div>
            <div class="text">
                <input type="text"placeholder="Pseudo" name="pseudo" >
            </div>
            <div class="text">
                <input type="text"placeholder="Nom" name="lastname" >
            </div>
            <div class="text">
                <input type="text"placeholder="Prénom" name="firstname" >
            </div>
            <div class="text">
                <input type="password"placeholder="Mot de passe" name="password" >
            </div>
            <button class="btn" type="submit"name="validate">S'inscrire</button>
            
            <div class="btn" type="button">
                <a href="connexion.php">Se connecter </a>
            </div>
            <div class="btn" type="button">
                <a href="accueil.php">Retour au site </a>
            </div>
                
        </form>
       
    </div>
</body>
</html>