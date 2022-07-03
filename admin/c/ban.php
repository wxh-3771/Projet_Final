<?php
require('../../utilisateur/m/conbd.php');

if(isset($_SESSION['admin'])){

  if(isset($_POST['ban'])){
     $user_signaled = $_POST['user_signaled'];

     $query = $bdd->query("UPDATE users SET valeur_par_defaut = 1 WHERE email = '$user_signaled' ");
     $delete_signal_user = $bdd->prepare("DELETE FROM signales WHERE email_signaled = '$user_signaled'");
     if($query){
        echo "Usrer bani";
    }
       
   }
}
?>