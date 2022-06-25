<?php

require('../../m/conbd.php');

$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT email_auteur, pseudo_auteur, id_question, contenu FROM answers WHERE id_question = ? ORDER BY id DESC');
$getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion)); 


?>