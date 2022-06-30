<?php

require('../../m/conbd.php');

$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id, email_auteur, pseudo_auteur, id_question, contenu, date_publication, signaler FROM answers WHERE id_question = ? ORDER BY id DESC');
$getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion)); 

?>