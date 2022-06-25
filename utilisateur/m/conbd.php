<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root', '');
}catch(Exception $e){
    die('Erreur ! La connexion a échoué pour le problème suivant : ' . $e->getMessage());
} 
?>

