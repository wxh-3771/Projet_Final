<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySpace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/apropos.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
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

    <header>
        <h2>À propos</h2>
        <h5>Tout ce qu'il y à savoir sur notre forum !</h5>
    </header>

    <section class="main">
      <p>
      MySpace est une interface d'échanges d'informations à destination 
      des étudiants de la Licence 3 Informatique de l'université Mouloud Mammeri.<br></br>
      <br>Ce forum est le format idéal pour permettre aux étudiants de discuter et
       débattre entre eux, partager des conseils ou encore poser des questions.</br>
       Il n'est pas nécessaire de s'inscrire à un forum pour en lire les messages, 
       parcontre pour pouvoir poser des questions, discuter débattre ... vous devez vous inscrire
       ou vous connectez si vous avez déja un compte !</p>
    </section>
    
    <?php 
      require('../includes/footer.php');
    ?>
     
  
</body>
</html>