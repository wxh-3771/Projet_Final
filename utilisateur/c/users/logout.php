<?php

   //Declarer toutes les sessions
   session_start(); 

   //Les stocker dans un tableau
   $_SESSION = []; 
   
   //Enfin les detruire
   session_destroy(); 

   //Rediriger vers la page d'acceuil du site 
   header("Location: ../../v/php/accueil.php ");


?>