<?php

require('../../m/conbd.php');

//Recuperer ses données de la table questions 
$getAllMyQuestions = $bdd->prepare('SELECT id, titre, contenu, categorie FROM questions WHERE email_auteur = ? ORDER BY id DESC');


//Les stocker dans un tableau qui prend en parametre l'email de l'utilisateur
$getAllMyQuestions->execute(array($_SESSION['email']));

?>