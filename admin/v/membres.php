<?php
session_start();
require('../c/admin_secu.php');
require('../c/membres_action.php');

?>

<!DOCTYPE html>
<html lang="fr">
     <head>
        <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="icon" type="imgs/png" href="../../utilisateur/v/imgs/log.png">

         <link rel="stylesheet" href="../../utilisateur/v/css/footer.css">
         <link rel="stylesheet" href="../../utilisateur/v/css/navbar.css">

         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
         <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
            
         <title>Afficher tous les Membres du Forum</title>
      </head>

    <body>
         <?php 
             require('../../utilisateur/v/includes/navbar.php');
           ?>

         <br>
         <h1>Les membres du forum : </h1>

         <?php 
            while($users = $RecupUsers->fetch()) {
               ?>
             <table>
                <tr>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>Pseudo</th>
                     <th>Email</th>
                     <th>Etat</th>
                </tr>
  
                  <tr>
                     <td><?= $users['nom']; ?></td>
                     <td><?= $users['prenom']; ?></td>
                     <td><?= $users['pseudo']; ?></td>
                     <td><?= $users['email'];?></td>
                     <td>
                        <?php 
                          //Dans le cas contraire où l'utilisateur n'est pas banni on affiche un bouton pour le bannir
                         if($users['valeur_par_defaut'] == 0){
                            require('../c/ban.php');
                            ?>
                            <form method="POST">
                               <input class="btn" type="text" name="nbr" value="<?php  ?>" hidden>
                               <input class="btn" type="text" name="user_signaled" value="<?php  ?>" hidden>
                               <button class="btn" type="submit" name="ban" >Bannir</button>
                            </form>

                            <?php 
                            //Donc ici l'utilisateur est banni alors on affiche un bouton pour le debannir
                            }elseif($users['valeur_par_defaut'] == 1){
                            require('../c/unban.php');
                            ?>
                             <form  method="POST">
                               <input class="btn" type="text" name="user_signaled" value="<?php  ?>" hidden>
                               <button class="btn" type="submit" name="unban" >Debannir</button>
                             </form>
                             <?php
                           }
                        ?>
                     </td>
                 </tr>
             </table>
             <br>
             <?php
            } 
         ?>

         <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>