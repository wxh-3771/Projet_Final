<?php

require('../../m/conbd.php');

if(isset($_POST['validate'])){
    if (!isset($_SESSION["auth"])) {
        header("Location: connexion.php");// rediriger à la page bienvenue
    }    
    
    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        $answer_date = date('d/m/Y');

        $insertAnswer = $bdd->prepare('INSERT INTO answers(email_auteur, pseudo_auteur, id_question, contenu, date_publication)VALUES(?, ?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['email'], $_SESSION['pseudo'], $idOfTheQuestion, $user_answer, $answer_date));

    }else{
        $errorMsg = "Vous n'avez pas remplit le champ de Répondre"; //Les messages d'erreurs
    }
   
}

?>