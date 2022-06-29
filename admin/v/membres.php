<?php
session_start();
require('../c/admin_secu.php');
require('../c/membres_action.php');

?>

<html>
<head>
    <title>Afficher tous les Membres du Forum</title>

</head>
<body>
  <nav>
     <a href ="../c/admin_logout.php"><button>Déconnexion</button></a>
     <a href = "home.php"><button>Home</button></a>
  </nav>

  <h1>Les membres du forum : </h1>

  <?php 

     while($users = $RecupUsers->fetch()) {
          ?>
          <fieldset> 
              <div>
                  <div>
                     <h3> Utilisateur :  <?= $users['pseudo']; ?> , 
                     <br><br>
                     Email : <?= $users['email'];?> ,</h3>
                  </div>

                  <div>
                     <h4>Nombre de signalement de cet utilisateur par les autres membres : </h4>
                  </div>
             </div>
          </fieldset>
          <br>
          <?php
       } 
   ?>

</body>
</html>