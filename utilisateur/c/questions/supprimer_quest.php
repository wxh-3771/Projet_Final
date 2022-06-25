<?php

//Vérifier si l'utilisateur est authentifié au niveau du site = trouver la variable $_SESSION['auth']
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: ../../v/php/connexion.php');
}

require('../../m/conbd.php');

//Vérifier si l'id est rentré en paramètre dans l'URL et le récuperer en utilisant la super-variable globale _GET
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'id de la question en paramète à partir de l'URL
    $idOfTheQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT email_auteur FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer les infos de la question
        $questionsInfos = $checkIfQuestionExists->fetch();
        if($questionsInfos['email_auteur'] == $_SESSION['email']){

         /*On a pensé que c'était pas la peine de recuperer l'id de la question car c'est deja stocker et
         recuperer dans la variable $idOfTheQuestion et c'est celle de l'URL  */

            //Supprimer la question en fonction de son id rentré en paramètre
            $deleteThisQuestion = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $deleteThisQuestion->execute(array($idOfTheQuestion));

            

            //Rediriger l'utilisateur vers ses questions
            header('Location: ../../v/php/mes_questions.php');


        }else{
            echo "Vous n'avez pas le droit de supprimer une question qui ne vous appartient pas !";
        }

    }else{
        echo "Aucune question n'a été trouvée";
    }


}else{
    echo "Aucune question n'a été trouvée";
}

?>