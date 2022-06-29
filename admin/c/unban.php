<?php

require('../../utilisateur/m/conbd.php');

if (isset($_SESSION['admin'])){
   if(isset($_POST['unban'])){
       $user_signaled = $_POST['user_signaled'];
       $query = $bdd->query("UPDATE users SET valeur_par_defaut = 0 WHERE email = '$user_signaled' ");
       if($query){
         header("Location: ../../v/php/forum.php");
        }
   }
}
?>