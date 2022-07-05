<?php

require('../../utilisateur/m/conbd.php');

if(isset($_SESSION['admin'])){

    //Recuperer les données de l'utilisateur qui a été signalé et les stocker dans un tableau
    $getUserSignaled = $bdd->prepare('SELECT DISTINCT users.email,users.nom,users.prenom,users.pseudo, users.valeur_par_defaut FROM signales INNER JOIN users ON  signales.user_signaled = users.email');
    $getUserSignaled->execute(array());

}


?>