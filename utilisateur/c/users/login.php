<?php
session_start();
require('../../m/conbd.php');
if (isset($_SESSION["auth"])) {
    header("Location: profil.php?id=".$_SESSION['email']);// rediriger à la page bienvenue
}

//Valider le formulaire
if(isset($_POST['validate'])){
    
    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['email']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $user_mail = htmlspecialchars($_POST['email']);
        $user_password = htmlspecialchars($_POST['password']);

     

        //Vérifier si l'utilisateur existe = si le pseudo est correct
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $checkIfUserExists->execute(array($user_mail));

        if($checkIfUserExists->rowCount() > 0){
            
            //Stocker les données de l'utilisateur en les récupérant
            $usersInfos = $checkIfUserExists->fetch();

            //Vérifier si le mot de passe est correct
            if(password_verify($user_password, $usersInfos['mdp'])){
            
                //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
                $_SESSION['auth'] = true; //On va l'utilisé pour savoir est que l'utilisateur est connecté ou pas
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['nom'];
                $_SESSION['firstname'] = $usersInfos['prenom'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['email'] = $usersInfos['email'];

                //Rediriger l'utilisateur vers sa page de profil 
                header("Location: profil.php?email=".$_SESSION['email']);
                

            }else{
                $errorMsg = "Attention! Votre mot de passe est incorrect !";
            }

        }else{
            $errorMsg = "Attention! Votre E-mail est incorrect !";
        }
        

    }else{
        $errorMsg = "Attention! S'il vous plait compléter tous les champs !";
    }
}
?>