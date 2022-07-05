<?php
require('../../utilisateur/m/conbd.php');

// $RecupUsers = $bdd->query('SELECT pseudo, email, nbre_signalement FROM users ORDER BY email DESC');
$RecupUsers = $bdd->query('SELECT * FROM users WHERE valeur_par_defaut = 1');

?>