<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
    <link rel="stylesheet" href="../css/informations.css">

    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
    <title>Formations</title>
</head>

<body>
  <section class="hero">
      <?php 
         require('../includes/navbar.php');
         ?>
         <section>
         <div class="heading text-center">
            <h3>Formations proposées en MASTER</h3>
         </div>
      </section>
      
      <div class="section-container">
            <div class="columns image" style="background-image:url('../ccs/imgs/info1.jpg')">
               &nbsp;
            </div>

            <div class="columns content">
               <div class="content-container">
                  <h5>Réseaux, Mobilité et Systèmes Embarqués</h5>
                  <p> 
                     La formation pluridisciplinaire proposée dans le cadre de ce master
                     englobe la maîtrise des techniques numériques innovantes permettant
                     la conception et la mise en œuvre d’architectures de
                     télécommunication et de solutions pour les systèmes embarqués 
                     et mobiles. L’objectif principal est de développer des compétences
                     de haut niveau dans le domaine des systèmes embarqués et des 
                    communications numériques.
                 </p>
               </div>
            </div>
         </div>

         <div class="section-container">
            <div class="columns content">
               <div class="content-container">
                  <h5 >Systèmes Informatiques</h5>
                  <p>
                  Les systèmes embarqués sont généralement soumis
                  à des contraintes spécifiques, en particulier d'encombrement, 
                  de fiabilité, et d'autonomie énergétique. Du fait des spécificités,
                     la réalisation de tels systèmes fait appel à des méthodes et outils
                     de modélisation et de conception dédiés, assurant l'interaction 
                     efficace du logiciel avec le matériel. L'objectif du parcours SI
                     est d'amener les étudiants à maîtriser ces outils et 
                     méthodes.
                  </p>
              </div>
            </div>

            <div class="columns image" style="background-image:url('../imgs/css/info2.jpg')">
               &nbsp;
            </div>
         </div>

         <div class="section-container">
         <div class="columns image" style="background-image:url('../imgs/css/info3.jpg')">
            &nbsp;
         </div>

         <div class="columns content">
            <div class="content-container">
               <h5>Ingénierie des Systèmes d'Information</h5>
               <p> 
                  Cette spécialité vous permet de maîtriser ce nouveau panorama des technologies de pointe.
                  À l’issue de cette formation complète et ambitieuse, vous deviendrez des
                  experts reconnus dans la prise en mains de ces profondes mutations.     
               </p>    
            </div>
        </div>
    </div>
    
      </div>

      <div class="section-container">
      <div class="columns content">
         <div class="content-container">
            <h5 >Conduite De Projets Informatiques</h5>
            <p>
               Cette spécialité forme des ingénieurs spécialisés dans la conduite de projets informatiques en 
               collaboration avec les instances décisionnelles concernées. Par ailleurs,
               ces ingénieurs seront aptes à intégrer et simuler les processus métier de 
               l’entreprise, établir des schémas de circulation d’information et choisir 
               les standards à employer pour le traitement, les échanges et le stockage de 
               données.
           </p>
       </div>
    </div>

      <div class="columns image" style="background-image:url('../css/imgs/info4.jpg')">
         &nbsp;
      </div>
   </div>

  </section>
  
     <?php 
      require('../includes/footer.php');
    ?>
     
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>      
  
      
   
     
    
</body>
</html>