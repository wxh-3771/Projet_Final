<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
    <link rel="stylesheet" href="../css/acceuil.css">

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    <title>Accueil</title>
</head>

<body>
    <?php 
        require('../includes/navbar.php');
    ?>

  <section class="hero-section">
        <h3 class="hero-heading"> Bienvenue sur notre Forum étudiant.</h3>
        <h4>Joignez-vous à un groupe d'étudiants et à un environnement en ligne accueillant.</h4>
        
    </section>

    <section id="list-monuments">
      <div class="heading text-center">
          <h3 class="top-heading ">Découvrez, échangez et apprenez !</h3>
      </div>
    </section>

    <div class="section-container">
      <div class="columns image" style="background-image:url('../imgs/acceuil3.jpg')">
         &nbsp;
      </div>

      <div class="columns content">
         <div class="content-container">
            <h5>Forum</h5>
            <p> Découvrez quelques-unes 
              de nos discussions, partagez vos connaissances et participez à la conversation 
              avec les autres utilisateurs!</p>
         </div>
      </div>
   </div>

   <div class="section-container">
      <div class="columns content">
         <div class="content-container">
                <h5>Informations utiles!</h5>
                <p>Découvrez et apprenez plus à propos de vos formations !</p>     
         </div>
      </div>

      <div class="columns image" style="background-image:url('../imgs/acceuil1.jpg')">
         &nbsp;
      </div>
   </div>

    <?php 
      require('../includes/footer.php');
    ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      
 
</body>
</html>