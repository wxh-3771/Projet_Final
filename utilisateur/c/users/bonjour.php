<?php 
echo (date("H")<16)?("Bonjour"):("Bonsoir"); /* ici cela va afficher soit Bonsoir si l'heure -qui est l'heure système de 
l'utilisateur- est supérieure à 16h Ou soit Bonjour si cet heure inférieure à 16h*/
?>