<?php

require('../../m/conbd.php');

$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id, email_auteur, pseudo_auteur, id_question, contenu FROM answers WHERE id_question = ? ORDER BY id DESC');
$getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion)); 

?>