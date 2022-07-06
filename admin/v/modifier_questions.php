<?php
require('../c/admin_secu.php');
require('../c/modifier.php');
?>

<!DOCTYPE html>
<html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modifier Les Questions</title>
            
            <link rel="icon" type="imgs/png" href="../../utilisateur/v/imgs/log.png">
            <link rel="stylesheet" href="../../utilisateur/v/css/navbar.css">
            <link rel="stylesheet" href="./css/modifier-qst.css">

            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
            
        </head> 

        <body>   

        <section class="hero">
            <?php 
              require('../../utilisateur/v/includes/navbar.php');
            ?>
            <br><br>
            
                <div class="conteneur">
                    
                    <?php 
                        if(isset($question_content)){ 
                            ?>
                            <form class="form" method="POST">
                                <div class="text">
                                    <label>Titre de la question</label>
                                    <input type="text" name="title" value="<?= $question_title; ?>">
                                </div>
                                <div class="text">
                                  <label>Categorie de la question</label>
                                  <?php require('../../utilisateur/c/questions/nom_categorie.php');?>
                                  <input type="text" name="title" value="<?= $CategorieInfos['nom']; ?>" disabled="disabled">
                                </div>
                                <div class="text">
                                    <label>Contenu de la question</label>
                                    <textarea type="text" name="content"><?= $question_content; ?></textarea>
                                </div>

                                <button type="submit" class="btn" name="validate">Modifier la question</button>
                            </form>
                            <?php
                        }
                    ?>
                    

                </div>
            </section>

            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
            

        </body>
 </html>