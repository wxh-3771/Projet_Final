<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="imgs/png" href="../imgs/log.png">
        <link rel="stylesheet" href="../css/InfosRegles.css">

        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/navbar.css">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <title>Règles du Forum</title>   
 </head>

 <body>
       <section class="hero"> 
          <?php 
             require('../includes/navbar.php');
           ?>
           
            <section>
                <div class="heading text-center">
                    <h3>Règlements du Forum de discussion</h2>
                    <h2 style="color:white;margin-bottom: 50px;"  >À faire et à ne pas faire</h2>
                </div>
            </section>

            <div class="section-container">
                <div class="columns image" style="background-image:url('../imgs/regle1.jpg')">
                    &nbsp;
                </div>

                <div class="columns content">
                    <div class="content-container">
                        <h5>Soyez respectueux</h5>
                        <p> 
                         Notre forum est un lieu où les étudiants peuvent échanger 
                         des informations, avoir des conversations,
                         poser des questions. Les utilisateurs doivent traiter les autres 
                         utilisateurs, l'administration du Forum avec respect. Les commentaires
                         irritants et irrespectueux ne sont pas tolérés.
                         Les messages contrevenant à nos règlements sur le contenu pourraient
                         être effacés sans aucun avertissement.
                       </p>
                  </div>
                </div>
            </div>

            <div class="section-container">
                <div class="columns content">
                    <div class="content-container">
                        <h5 >Soyez aimable</h5>
                        <p>
                          Évitez de vous adresser délibérément à un ou des participants
                          du forum de manière à les contrarier ou à les frustrer,
                          par le biais de messages incendiaires, hors sujet, ou dans
                          le but de perturber les discussions normales pour votre divertissement
                          personnel.
                        </p>
                    </div>
                </div>
                
                <div class="columns image" style="background-image:url('../imgs/regle2.jpg')">
                    &nbsp;
                </div>
            </div>
            
            <?php 
            require('../includes/footer.php');
            ?>
        </section>         
            
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> 
  </body>
</html> 