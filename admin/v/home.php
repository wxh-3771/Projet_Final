<?php 
session_start();
require('../c/admin_secu.php');
?>

<html>
    <head>
        <title>Bienvenu sur l'Espace Administrateur</title>
    </head>
    
    <h1>
     <a href ="../c/admin_logout.php"><button>Déconnexion</button></a>

    </h1>
    
    <h1>Faites du bon travail : <?=$_SESSION['pseudo']?></h1>
    <div>
        <a href ="membres.php"><button> Afficher Les Membres du Forum </button></a>
       

    </div>
     
</html>