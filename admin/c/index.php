<?php 
session_start();
if(isset($_SESSION['admin'])){
    header('Location: ../v/home.php');
}else{
    header('Location: ../../utilisateur/v/php/accueil.php');
}

?>