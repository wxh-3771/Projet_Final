<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySpace</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/informations.css">
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
        <h2>Formations proposées en MASTER</h2>
    </header>
    <section class="main">
        <div class="content">
            <div class="card">
                <div class="righ">
                        <a><img src="../imgs/info1.jpg" alt=""></a>
                </div>
                <div class="lef">
                     <h1>Réseaux, Mobilité et Systèmes Embarqués</h1>
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
            <div class="card">
                <div class="leftt">
                    <h1 >Systèmes Informatiques</h1>
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
                <div class="rightt">
                    <a> <img src="../imgs/info2.jpg" alt=""></a>
                </div>
            </div>
            <div class="card">
                <div class="righ">
                    <a><img src="../imgs/info3.jpg" alt=""></a>
                </div>
            
               <div class="lef">
                 <h1>Ingénierie des Systèmes d'Information</h1>
                 <p> 
                   Cette spécialité vous permet de maîtriser ce nouveau panorama des technologies de pointe.
                  À l’issue de cette formation complète et ambitieuse, vous deviendrez des
                   experts reconnus dans la prise en mains de ces profondes mutations.     
                 </p>
                </div>
            </div>
           <div class="card">
             <div class="leftt">
               <h1 >Conduite De Projets Informatiques</h1>
                <p>
                 Cette spécialité forme des ingénieurs spécialisés dans la conduite de projets informatiques en 
                 collaboration avec les instances décisionnelles concernées. Par ailleurs,
                 ces ingénieurs seront aptes à intégrer et simuler les processus métier de 
                 l’entreprise, établir des schémas de circulation d’information et choisir 
                 les standards à employer pour le traitement, les échanges et le stockage de 
                 données.
               </p>
             </div>
                <div class="rightt">
                    <a> <img src="../imgs/info4.jpg" alt=""></a>
                </div>
            </div>
        
        </div>
    </section>

      
    <?php 
      require('../includes/footer.php');
    ?>
     
     
    
</body>
</html>