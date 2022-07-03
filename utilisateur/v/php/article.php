<?php 
   require('../../c/security.php');
    require('../../c/questions/article_action.php');
    require('../../c/questions/reponse_quest.php');
    require('../../c/questions/reponses_toutes.php');
    require('../../c/questions/signaler.php');
    
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" type="imgs/png" href="../imgs/log.png">
      <link rel="stylesheet" href="../css/article.css">
      
      <link rel="stylesheet" href="../css/footer.css">
      <link rel="stylesheet" href="../css/navbar.css">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      
      <title>La Question Selectionnée</title>
    </head>

   <body>
     <div>
        <?php 
          require('../includes/navbar.php');
        ?>
      
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
                    <textarea rows="4" cols="97" name="answer"></textarea>
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
                          <h3> Utilisateur :  <?= $answer['pseudo_auteur']; ?></h3>
                          <p>Le : <?= $answer['date_publication'] ?></p>
                      </div>      
                                      
                      <div class="b">
                        <h4><?= $answer['contenu']; ?></h4> 
                      </div>      

                      <form action= "" method="POST">
                          <input class="btn" type="text" name="rep_id" value="<?php echo $answer['id']; ?>" hidden>
                          <input class="btn" type="text" name="user_signaled" value="<?php echo $answer['email_auteur']; ?>" hidden >
                          <input class="btn-btn" type="submit" name="signaler" value="Signaler">
                      </form>           
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
     </div>

     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   </body>
</html>