<?php

$nomCategorie = $bdd->prepare("SELECT * FROM categories WHERE code = ?");
$nomCategorie->execute(array($question['categorie']));
if($nomCategorie->rowCount() == 1) {
   $CategorieInfos = $nomCategorie->fetch();
}

