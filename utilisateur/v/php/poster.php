<?php 
    require('../../c/security.php'); 
    require('../../c/questions/question_action.php');
?>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="imgs/png" href="../imgs/log.png">
      <link rel="stylesheet" type="text/css" href="../css/poster.css">
    

      <link rel="stylesheet" href="../css/footer.css">
      <link rel="stylesheet" href="../css/navbar.css">

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
      <title>Ecrire Une Question</title>
    </head>

   <body>
      <?php 
        require('../includes/navbar.php');
      ?>

      <div class="formstyle">
         <h1>Ajouter une Question dans le Forum</h1>
      </div>

      <div>
        <form class="post" method="POST">

         <?php require('../../c/messages/msgerror_publier_quest.php'); ?>

         <fieldset class="account-info">
            <label>
              Titre
              <input type="text" name="title" class="sub"> 
            </label>

            <label>
              Categorie
              <input value="<?=$categorie ;?>" class="textarea" type="text" disabled="disabled">
            </label>

            <label>
              Contenu de la question
              <textarea rows="15" cols="62" name="content" class="textarea"></textarea>
            </label>
          </fieldset>

          <fieldset class="account-action">
           <input class="btn" type="submit" name="validate" value="Poster" >
          </fieldset>
        </form>
      </div>
          
      <?php 
        require('../includes/footer.php');
      ?>

     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>