<?php
require('../../utilisateur/m/conbd.php');

if(isset($_SESSION['admin'])){

  if(isset($_POST['ban'])){
     $user_signaled = $_POST['user_signaled'];

     if($_POST['nbr']>=3){
         $query = $bdd->query("UPDATE users SET valeur_par_defaut = 1 WHERE email = '$user_signaled' ");
         if($query){
             header('Location: ../v/home.php');
            }
       }
   }
}
?>