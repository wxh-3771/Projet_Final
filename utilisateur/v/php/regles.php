<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySpace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/regles.css"> <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png" >
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
        <h2>Règlements du forum de discussion</h2>
        <h5>À faire et à ne pas faire</h5>
    </header>
    <section class="main">
        <div class="content">
            <div class="card" id="forum">
                <div class="righ">
                        <a><img src="../imgs/regle1.jpg" alt=""></a>
                </div>
                <div class="lef">
                     <h1>Soyez respectueux</h1>
                    <p> Notre forum est un lieu où les étudiants peuvent échanger 
                        des informations, avoir des conversations,
                         poser des questions. Les utilisateurs doivent traiter les autres 
                         utilisateurs, l'administration du Forum avec respect. Les commentaires
                          irritants et irrespectueux ne sont pas tolérés.
                         Les messages contrevenant à nos règlements sur le contenu pourraient
                          être effacés sans aucun avertissement.</p>
                </div>
            </div>
            <div class="card">
                <div class="leftt">
                    <h1 >Soyez aimable</h1>
                    <p>Évitez de vous adresser délibérément à un ou des participants
                     du forum de manière à les contrarier ou à les frustrer,
                      par le biais de messages incendiaires, hors sujet, ou dans
                     le but de perturber les discussions normales pour votre divertissement
                      personnel.
                    </p>
                </div>
                <div class="rightt">
                    <a> <img src="../imgs/regle2.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </section>

      
  <?php 
      require('../includes/footer.php');
    ?>
     
     
</body>
</html> 