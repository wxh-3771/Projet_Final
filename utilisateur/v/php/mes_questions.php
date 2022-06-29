<?php 
    require('../../c/security.php'); 
    require('../../c/questions/question_toutes.php');
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mes_questions.css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
    <title>Mon profil</title>

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>
<body>
   <section class="hero" style="background-color: black;">
      <?php 
            require('../includes/navbar.php');
        ?>
   
        <header class="profil">
            <div class="text">
                <h1>Mes Questions : </h1>
                <br>
            </div>
        </header>

        <div>

            <?php 
                while($question = $getAllMyQuestions->fetch()){
                    
                    //Recuperer le nom de la categorie qui correspond au code de la question
                    require('../../c/questions/nom_categorie.php');
                    ?>

                    <div class="posts ">
                        <h3>
                            <a href="article.php?id=<?= $question['id']; ?>">
                                <?= $question['titre']; ?>
                            </a>
                        </h3>
                    
                        <div class="second-part">                            
                            <h5><?= $CategorieInfos['nom']; ?></h5>

                                <p>
                                    <?= $question['contenu']; ?>
                                </p>
                                <a href="article.php?id=<?= $question['id']; ?>"> Accéder a la question</a>
                                <a href="modifier_mes_questions.php?id=<?= $question['id']; ?>"> Modifier la question</a>
                                <a href="../../c/questions/supprimer_quest.php?id=<?= $question['id']; ?>">Supprimer la question</a>
                        </div>
                    </div>
                    <br>
                    <?php
                }
            ?>
            
        </div>
        
        <?php 
            require('../includes/footer.php');
        ?>

      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>