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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
    <title>Mon profil</title>
</head>
<body>
    <nav>
      <?php 
         require('../includes/control_nav.php');
        ?>
    
       <?php 
         require('../includes/navbar.php');
       ?>
    </nav> 

    <header class="profil">
        <div class="text">
            <h2>Mes Questions : </h2>
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
                  <h5>
                      <a href="article.php?id=<?= $question['id']; ?>">
                           <?= $question['titre']; ?>
                      </a>
                  </h5>
            
                  <div class="second-part">                            
                    <h4><?= $CategorieInfos['nom']; ?></h4>

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
     

</body>
</html>