<?php

require('../../utilisateur/m/conbd.php');

if(isset($_SESSION['admin'])){

    $RecupUsers = $bdd->query('SELECT * FROM users');

    //Recuperer tous les utilisateurs signalés : user_signaled
    // $signales = $bdd->query('SELECT * FROM signales');
    // $signalement = $signales->fetch();
    // $user_signaled = $signalement['user_signaled'];

    // SELECT users.email,users.nom,users.prenom,users.pseudo FROM users INNER JOIN signales ON 
    // users.email = signales.user_signaled WHERE signales.user_signaled = ?

    // SELECT users.email,users.nom,users.prenom,users.pseudo FROM signales INNER JOIN users ON 
    // signales.user_signaled = users.email

    //Recuperer les données de l'utilisateur qui a été signalé et les stocker dans un tableau
    $getUserSignaled = $bdd->prepare('SELECT users.email,users.nom,users.prenom,users.pseudo FROM signales INNER JOIN users ON  signales.user_signaled = users.email');
    $getUserSignaled->execute(array());

    // //La condtion des trois signalement 
    // if($getUserSignaled->rowCount() >= 3){
    //     while($signal = $getUserSignaled->fetch()){
    //         //Recuperer les données de l'utilisateur signalées dans des variables
    //         $email_signaled = $signal['email'];
    //         $nom_signaled = $signal['nom'];
    //         $prenom_signaled = $signal['prenom'];
    //         $pseudo_signaled = $signal['pseudo'];
    //     }

    // }else{
    //     echo "Aucun membre n'a été signalé";
    // }

}


?>