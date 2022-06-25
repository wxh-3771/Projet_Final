<?php
    session_start();
    require('../../c/users/profil_action.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profil.css">
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
            
            <h1><?php require('../../c/users/bonjour.php');?> <?= $user_pseudo; ?></h1>
            <h3>On est ravie de vous revoir parmi nous ! </h3>
        
            <h3>Voici les dernières Informations de votre compte : </h3>

        </div>
    </header> 
    
    <div>
        <?php 
            
            require('../../c/messages/msgerror_connexion.php');
                ?>

                <h3>Vos Informations personelles du compte sont les suivantes : </h3>
                <div class="p">
                  <h4>@<?= $user_pseudo; ?></h4>
                   <h4><?= $user_lastname . ' ' . $user_firstname; ?></h4>
               </div>
               <br>

               <h3>Les questions que vous avez postées sont les suivantes : </h3>
                   <a href="mes_questions.php"><button>Mes Questions</button></a>
               

               <!-- <?php 
                //   while($question = $getAllMyQuestions->fetch()){
                  ?>
    
                    <div class="posts ">
                        <h5>
                            <a href="article.php?id=<?//= $question['id']; ?>">
                                <?//= $question['titre']; ?>
                            </a>
                        </h5>
            
                        <div class="second-part">
                            <p>
                                <?//= $question['descript']; ?>
                            </p>
                            <a href="article.php?id=<?//= $question['id']; ?>"> Accéder a la question</a>
                            <a href="modifier_mes_questions?id=<?//= $question['id']; ?>"> Modifier la question</a>
                            <a href="../../c/supprimer_quest.php?id=<?//= $question['id']; ?>">Supprimer la question</a>
                        </div>
                  </div>
                   <br>

                <?php
                //}
        ?>   -->
  </div>
    
  <?php 
      require('../includes/footer.php');
    ?>
     
    
</body>
</html>