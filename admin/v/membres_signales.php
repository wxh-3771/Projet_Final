<?php 
require('../c/admin_secu.php');
require('../c/tous_signales.php');
require('../c/ban.php');
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
            
            <title>Bienvenu sur l'Espace Administrateur</title>
        </head>

        <body>
            <?php 
                require('../../utilisateur/v/includes/navbar.php');
            ?>
            
            <br><br>

         <table>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Action</th>
               </tr>

               <?php
                  //La condtion des trois signalement 
                  if($getUserSignaled->rowCount() > 0){
    
                      while($signal = $getUserSignaled->fetch()){
                            ?>     
                            <tr>
                               <td> <?= $signal['nom']; ?> </td>
                                <td><?= $signal['prenom']; ?></td>
                               <td> <?= $signal['pseudo']; ?></td>
                               <td> <?= $signal['email'];?></td>
                                <td>

                                    <?php
                                        //Dans le cas contraire où l'utilisateur n'est pas banni on affiche un bouton pour le bannir
                                        if($signal['valeur_par_defaut'] == 0){  
                                           ?>
                                            <form action ="" method="POST">
                                                <input class="btn" type="text" name="user_signaled" value="<?=$signal['email']?>" hidden  >
                                                <input class="btn-btn" type="submit" name="ban" value="Bannir">
                                            </form>
                                            <?php 
                                           
                                        }
                                         
                                    ?>
                              </td>
                            </tr>
                            <?php 
                        } 
                    }else{
                        echo "Aucun membre n'a été signalé";
                    }  
                ?>  
          </table>
            <br>
             
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        </body>
</html>