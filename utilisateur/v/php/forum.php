<?php 
 session_start();
 require('../../c/questions/barre_recherche.php');
 require('../../c/url.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="imgs/png" href="../imgs/log.png">
      <link rel= "stylesheet" href="../css/forum.css">

      <link rel="stylesheet" href="../css/footer.css">
      <link rel="stylesheet" href="../css/navbar.css">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

      <title>Forum</title>
    </head>
    
<body>
   <?php 
      require('../includes/navbar.php');
   ?>
  
   <div>      
    <div class="Box">
      <form method="GET">
        <input type="text" name="search" placeholder="Rechercher dans le forum...">
        <input type="submit" name="validate" value="Rechercher">
     </form>
    </div>     
   </div>

  <div class="container">
    <div class="subform">
      <div class="subform-title">
        <h1>Les Catégories</h1>
        <?php
            while($c = $categories->fetch()) {
            ?>

              <div>
                <div class="main">
                  <h6><a href="../../v/php/questions_par_categorie.php?categorie=<?= url_custom_encode($c['nom']) ?>">
                  <?= $c['nom'] ?></a></h6>
                </div>
              </div>
              <?php 
            } 
          ?>
    </div>
      </div>
     
    
      
    

  </div>
  <div class="forum">
        <div class="subform-title">
          <h1>Forum</h1>
        </div>
        <?php 
            while($question = $getAllQuestions->fetch()){
              require('../../c/questions/nom_categorie.php');
              ?>
              <div class="subforum-row">
                <div class="subforum-description subforum-column">
                  <h4><a href="article.php?id=<?= $question['id']; ?>">
                    <?= $question['titre']; ?>
                  </a></h4>
                  <br>
                  <p>catégorie : <?= $CategorieInfos['nom']; ?></p>
              </div>
                  
                <div class="subforum-info subforum-column">
                  Par L'utilisateur : <?= $question['pseudo_auteur']; ?> 
                  <br>Le <?= $question['date_publication'];  ?>
                </div>
              </div>
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
