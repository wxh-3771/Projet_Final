<?php

require('../../utilisateur/m/conbd.php');

//Vérifier si l'id de la question est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfQuestion = $_GET['id'];

    //Vérifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfQuestion));

    if($checkIfQuestionExists->rowCount() > 0){

        //Récupérer les données de la question
        $question = $checkIfQuestionExists->fetch();

            
            $question_title = $question['titre'];
            // $question_categorie = $questionInfos['categorie'];
            $question_content = $question['contenu'];

            $question_content = str_replace('<br />', '', $question_content);

            if(isset($_POST['validate'])){

                //Vérifier si les champs sont remplis
                if(!empty($_POST['title']) AND !empty($_POST['content'])){
            
                    //Les données à faire passer dans la requête
                    $new_question_title = htmlspecialchars($_POST['title']);
                    $new_question_content = nl2br(htmlspecialchars($_POST['content']));
                    
                    //Modifier les informations de la question qui possède l'id rentré en paramètre dans l'URL
                    $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET titre = ?, contenu = ? WHERE id = ?');
                    $editQuestionOnWebsite->execute(array($new_question_title, $new_question_content, $idOfQuestion));
            
                    //Redirection vers la page d'affichage des questions de l'utilisateur qui est le profil
                    header('Location: questions.php ');
            
                }else{
                    echo "Veuillez compléter tous les champs...";
                }
            
            }

    }else{
       echo "Aucune question n'a été trouvée";
    }

}else{
    echo "Aucune question n'a été trouvée pour cet id";
}
?>