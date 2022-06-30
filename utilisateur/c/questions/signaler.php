<?php
session_start();
require('../../m/conbd.php');


if(isset($_POST['signaler'])){
    $rep_id = $_POST['rep_id'];
    $user_email = $_SESSION['email'];
    $user_signaled = $_POST['user_signaled'];

    $query = $bdd->query("INSERT INTO signales (user_email,rep_id,user_signaled) VALUES ('$user_email','$rep_id','$user_signaled')");
    if($query){
        header("Location: ../../v/php/forum.php");
    }

}

?>