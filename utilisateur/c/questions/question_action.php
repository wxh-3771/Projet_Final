<?php
require('../../m/conbd.php');

//Valider le formulaire
if (isset($_SESSION["auth"])) {
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides
    if(!empty($_POST['title']) AND !empty($_POST['descript']) AND !empty($_POST['content'])){
        
        //Les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['descript'])); //On autorise les sauts de lignes faites par l'utilisateur
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/Y');
        $question_email_author = $_SESSION['email'];
        $question_pseudo_author = $_SESSION['pseudo'];

        //Insérer la question sur la question et l'enregistrer dans un tableau
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, descript, contenu, email_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
        $insertQuestionOnWebsite->execute(
            array(
                $question_title, 
                $question_description, 
                $question_content, 
                $question_email_author, 
                $question_pseudo_author, 
                $question_date
            )
        );
        
        $successMsg = "Votre question a été publiée sur notre Forum";
        
    }else{
        $errorMsg = "Attention! Veuillez compléter tous les champs afin de publier votre question !";
    }

}
}

?>