<?php

require('../../m/conbd.php');

//Vérifier si l'id de la question est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer les données de la question
        $question = $checkIfQuestionExists->fetch();
        if($question['email_auteur'] == $_SESSION['email']){
            
            $question_title = $question['titre'];
            // $question_categorie = $questionInfos['categorie'];
            $question_content = $question['contenu'];

            $question_content = str_replace('<br />', '', $question_content);

            //Recuperer le nom de la categorie qui correspond au code de la question
           require('../../c/questions/nom_categorie.php');
        }else{
            $errorMsg = "Vous n'êtes pas l'auteur de cette question";
        }

    }else{
        $errorMsg = "Aucune question n'a été trouvée";
    }

}else{
    $errorMsg = "Aucune question n'a été trouvée pour cet id";
}
?>