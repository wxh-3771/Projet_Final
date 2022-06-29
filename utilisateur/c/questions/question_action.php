<?php
require('../../m/conbd.php');

//Valider le 
if (isset($_GET['categorie'])){

    //Verifier et securiser le code de la categorie recuperé en url
    $GetCategorie = htmlspecialchars($_GET['categorie']);

    //Selectionner de la table categorie et en lui fait passer le code de la categorie recuperer de l'url
    $categorie = $bdd->prepare('SELECT * FROM categories WHERE code = ?');
    $categorie->execute(array($GetCategorie));
   
    //Verifier si la categorie existe bien dans la table categorie de notre bd cad s'il trouve une ligne
    if($categorie->rowCount() == 1) {

        //Recuperer le nom de la categorie qui correspond au code 
       $CategorieInfos = $categorie->fetch();
       $categorie = $CategorieInfos['nom'];

        if (isset($_SESSION["auth"])) {

            if(isset($_POST['validate'])){

                //Vérifier si les champs ne sont pas vides
                if(!empty($_POST['title']) AND !empty($_POST['content'])){
                    
                    //Les données de la question
                    $question_title = htmlspecialchars($_POST['title']);
                    $question_content = nl2br(htmlspecialchars($_POST['content']));//On autorise les sauts de lignes faites par l'utilisateur
                    $question_date = date('d/m/Y');
                    $question_email_author = $_SESSION['email'];
                    $question_pseudo_author = $_SESSION['pseudo'];

                    //Insérer la question sur la question et l'enregistrer dans un tableau
                    $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions(titre, categorie, contenu, email_auteur, pseudo_auteur, date_publication)VALUES(?, ?, ?, ?, ?, ?)');
                    $insertQuestionOnWebsite->execute(
                        array(
                            $question_title,
                            $GetCategorie, 
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

            }//else{
                //$errorMsg = "cliquez sur le bouton 'Poster' pour poster votre questions sur le forum." ;
            //}

        }else{
            die("Vous n'etes pas en droit de poster car vous n'etes pas connecté !");
        }

   }else{
    die('Categorie invalide : inexistante ! ');
   }

}else{
    die('Pas de categorie selectionnée pour votre question, veuillez selectionné une');
}

?>