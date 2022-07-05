<?php
require('../../utilisateur/m/conbd.php');

    if(isset($_GET['id']) AND !empty($_GET['id'])){
        //recuperer l'id de la question de l'url
        $id_question = $_GET['id'];
        //var_dump($id_question);

       //verifier si la question existe
        $recupQuestion = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
        $recupQuestion->execute(array($id_question));
        
       $reponse = $bdd->prepare('SELECT * FROM answers WHERE id_question = ?');
        $reponse->execute(array($id_question));

        if($recupQuestion->rowCount() > 0 ){
            $delete_question = $bdd->prepare('DELETE FROM questions WHERE id = ?');
            $delete_question->execute(array($id_question));

           $delete_reponses = $bdd->prepare('DELETE FROM answers WHERE id_question = ?');
            $delete_reponses->execute(array($id_question));

            header('Location: ../v/questions.php');

        }else{
            echo "Aucune question trouvée";
        }

        // if($delete_question){ echo"Cette question a été supprimer avec toutes ses réponses"; }
     }else{
        echo "Aucun identifiant trouvé !";
    }

?>