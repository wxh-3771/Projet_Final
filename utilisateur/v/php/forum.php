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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <title>Forum</title>
    <link rel= "stylesheet" href="../css/forum.css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
</head>
<body>
  <nav>
        <?php 
         include('../includes/control_nav.php');
        ?>
        
        <div class="Box">
            
            <form method="GET">
                <input type="text" name="search" placeholder="Rechercher dans le forum...">
                <input type="submit" name="validate" value="Rechercher">
            </form>
            
        </div>

        <?php 
           include('../includes/navbar.php');
       ?>      
  </nav>
    

    <div class="container">
        <div class="subforum">
            <div class="subforum-title">
                <h1>Forum </h1>
            </div>


            <?php
             while($c = $categories->fetch()) {
             ?>

           <tr>
             <td class="main">
                 <h4><a href="../../v/php/questions_par_categorie.php?categorie=<?= url_custom_encode($c['nom']) ?>">
                 <?= $c['nom'] ?></a></h4>
              </td>
          </tr>
          <?php } ?>


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
        
    </div>

    
        
    
    
    <?php 
      require('../includes/footer.php');
    ?>
     

</body>

</html>