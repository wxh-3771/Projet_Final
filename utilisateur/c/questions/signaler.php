<?php
require('../../m/conbd.php');

if(!isset($_SESSION['admin']) AND isset($_SESSION['auth'])){
if(isset($_POST['signaler'])){
    $rep_id = $_POST['rep_id'];
    //celui qui a signalé la réponse
    $user_email = $_SESSION['email'];
    //celui qui a ete signalé
    $user_signaled = $_POST['user_signaled'];

    $query = $bdd->query("INSERT INTO signales (rep_id, user_email, user_signaled) VALUES ('$user_email','$rep_id','$user_signaled')");
    if($query){
        echo "Cette réponse a été signalée ! ";
    }

}
}
?>