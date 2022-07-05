<?php 
session_start();
if (!isset($_SESSION['admin']) AND isset($_SESSION['auth'])) {
     header("Location: ../../utilisateur/v/php/forum.php");
    exit();
}elseif(!isset($_SESSION['admin'])){
   header("Location: admin_login.php"); //rediriger vers la page login
}
?>