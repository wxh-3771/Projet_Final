<?php 
    session_start();
    require('../../c/questions/article_action.php');
    require('../../c/questions/reponses_toutes.php');
    require('../../c/questions/reponse_quest.php');
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/article.css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
    <title>Document</title>
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

    <div>
      <div class="erro">
           <p>
               <?php  
                 require('../../c/messages/msgerror_connexion.php'); 
               ?>
           <p>
      </div>

        <?php   
           if(isset($question_publication_date)){
              ?>
              <br><br>
              <fieldset class="f">
              <section class="qst">
                   <h3><?= $question_title; ?></h3>
                   <hr>
                   <p><?= $question_content; ?></p>
                
                  <!-- afficher les informations de la question avec le titre  -->
                 <small>
                        Par L'utilisateur : <?=$question_pseudo_author;?> 
                        <br>Le <?=$question_publication_date;?>
                  </small>
               </section>
              </fieldset>
               <br>
              <section class="rep">
                  <form method="POST">
                       <div>
                           <div>
                             <label> Réponse : </label>
                           </div>
                
                           <textarea rows="8" cols="107" name="answer"></textarea>
                           <br><br>
                           <button type="submit" name="validate">Répondre</button>
                      </div>
                  </form>
                  <br><br>
                  <br><br>
                  <!-- Afficher l'espace commentaire, si la question a été trouvée = utilisation de la boucle while -->
                  <?php 
                      while($answer = $getAllAnswersOfThisQuestion->fetch()){
                           ?>
                          <fieldset class="d"> 
                          <div class="rep1">
                              <div class="a">
                                  <h3> Utilisateur :  <?= $answer['pseudo_auteur']; ?>,
                                     <!-- N° : <//?= $answer['id_auteur']; ?>    -->
                                  </h3>
                              </div>

                              <div class="b">
                                 <h4><?= $answer['contenu']; ?></h4>
                              </div>

                              <!-- <div class="b">
                                 <h5><?//= $answer['date_publication']; ?></h5>
                              </div> -->
                          </div>
                          </fieldset>
                          <br>
                          <?php
                       }
                   ?>
              </section>
              <?php
            }
       ?>
</div>  

    
<?php 
    require('../includes/footer.php');
    ?>
     

</body>
</html>