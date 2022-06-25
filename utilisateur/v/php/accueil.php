<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySpace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/acceuil.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
</head>
<body>
    
    <header>
      
      <?php 
         require('../includes/control_nav.php');
       ?>
        <br>
        <h4>
           <i>
                Bienvenue sur notre Forum étudiant.
                <br>
                Joignez-vous à un groupe d'étudiants et à un environnement en ligne accueillant.
           </i>
      </h4>
    </header>

    <nav>
        <?php 
            require('../includes/navbar.php');
        ?>
    </nav> 
        
    <section class="main">
        <h3>Découvrez, échangez et apprenez !</h3>
        <div class="content">
            <div class="card" id="forum">
                <div class="righ">
                        <a href="forum.php"><img src="../imgs/acceuil3.jpg" alt=""></a>
                </div>
                <div class="lef">
                     <h1>Forum</h1>
                    <p> Découvrez quelques-unes 
                        de nos discussions, partagez vos connaissances et participez à la conversation 
                        avec les autres utilisateurs!</p>
                </div>
            </div>
            <div class="card">
                <div class="leftt">
                    <h2 >Informations utiles.</h2>
                    <p>Découvrez et apprenez plus à propos de vos formations !
                    </p>
                </div>
                <div class="rightt">
                    <a href="informations.php"> <img src="../imgs/acceuil2.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>

      
    <?php 
      require('../includes/footer.php');
    ?>
     
     
    
</body>
</html>