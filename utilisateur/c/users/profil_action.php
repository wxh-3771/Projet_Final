<?php

require('../../m/conbd.php');
if (!isset($_SESSION['auth']) AND isset($_SESSION['admin'])) {
    header("Location: ../../../admin/v/home.php"); //rediriger vers la page login
    exit();
}elseif(!isset($_SESSION['auth'])){
    header("Location: connexion.php");

}

//Récupérer l'identifiant de l'utilisateur
if(isset($_GET['email']) AND !empty($_GET['email'])){

    //L'id de l'utilisateur
    $idOfUser = $_GET['email'];

    //Vérifier si l'utilisateur existe
    $checkIfUserExists = $bdd->prepare('SELECT pseudo, nom, prenom FROM users WHERE email = ?');
    $checkIfUserExists->execute(array($idOfUser));

    if($checkIfUserExists->rowCount() > 0){
        
        //Récupérer toutes les données de l'utilisateur
        $usersInfos = $checkIfUserExists->fetch();

        $user_pseudo = $usersInfos['pseudo'];
        $user_lastname = $usersInfos['nom'];
        $user_firstname = $usersInfos['prenom'];

        //Récupérer toutes les questions publiées par l'utilisateur
        // $getHisQuestions = $bdd->prepare('SELECT * FROM questions WHERE email_auteur = ? ORDER BY id DESC');
        // $getHisQuestions->execute(array($idOfUser));

    }else{
        $errorMsg = "Aucun utilisateur trouvé";
    }

}else{
    $errorMsg = "Aucun utilisateur trouvé";
}

?>