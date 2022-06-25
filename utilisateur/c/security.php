<?php
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: connexion.php');//on bien peut vers la page d'acceuil on verra
}
?>