<?php
//var_dump($_POST['user_signaled']);
if (isset($_SESSION['admin'])){

   if(isset($_POST['unban'])){
       $user_signaled = $_POST['user_signaled'];

       $query = $bdd->query("UPDATE users SET valeur_par_defaut = 0 WHERE email = '$user_signaled'");
       
       if($query){
        echo "Vous venez de debannir ce membre et il pourra desorme reacceder au Forum";
        }
   }
}
?>