<?php

require('../../m/conbd.php');

if(isset($_POST['validate'])){
    if (!isset($_SESSION["auth"])) {
        header("Location: connexion.php");// rediriger à la page bienvenue
    }    
    
    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertAnswer = $bdd->prepare('INSERT INTO answers(email_auteur, pseudo_auteur, id_question, contenu)VALUES(?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['email'], $_SESSION['pseudo'], $idOfTheQuestion, $user_answer));

    }else{
        $errorMsg = "Vous n'avez pas remplit les champs"; //Les messages d'erreurs
    }
   
}

?>