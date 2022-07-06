<?php
require('../../c/questions/categorie.php');
?>
<!DOCTYPE html>
<html lang="fr">
      <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="icon" type="imgs/png" href="../imgs/log.png">
         <link rel="stylesheet" href="../css/qst-par-cat.css">

         <link rel="stylesheet" href="../css/footer.css">
         <link rel="stylesheet" href="../css/navbar.css">

         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
         <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
         
         <title>Les Questions de La Categorie Selectionnée </title>
      </head>

     <body>
         <?php 
            while($t = $AllQuestions->fetch()) {
               ?>
               <tr>
                  <td class="main">
                     <h4><a href="article.php?id=<?=$t['id'];?>"><?= $t['titre']; ?></a></h4>
                     <p><?=$t['contenu'] ;?></p>
                     <?= $t['date_publication']; ?><br />par <?= $t['pseudo_auteur']; ?>
                  </td>
               </tr>
               <br><br>
              <?php 
            } 
         ?>

         <br>

         <a href="poster.php?categorie=<?=$code_categorie;?>"> <button>Ajouter une nouvelle questions</button></a>

         <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
     </body>
</html>