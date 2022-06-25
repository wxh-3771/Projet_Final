<?php
session_start();
require('../../m/conbd.php');
//Rendre la page inscription inacc
if (isset($_SESSION["auth"])) {
    header("Location: profil.php?email=".$_SESSION['email']);
}


//On va verifier si l'utilisateur a cliquez sur le boutton s'inscrire 
if(isset($_POST['validate'])){
     
    //Vérifier si l'utilisateur a bien complété tous les champs
    if(!empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password'])){
        
        //Les données entrées par l'utilisateur
        $user_mail = htmlspecialchars($_POST['email']);
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_password = hash("sha256",$_POST['password']);

        $pseudo_default = "Administrateur";
        $email_default = "admin.forum.myspace.1@gmail.com";

        //Vérifier si l'utilisateur existe déjà dans notre base de donnée
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $checkIfUserAlreadyExists->execute(array($user_mail));

        $checkIfUserPseudoAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $checkIfUserPseudoAlreadyExists->execute(array($user_pseudo));
        
        //Dans le cas où aucune donnée n'a été recuperé = aucun utilisateur ne posséde ce pseudo au niveau de notre base de donnée
        if($checkIfUserAlreadyExists->rowCount() == 0 AND $user_mail != $email_default ){
            
            if($checkIfUserPseudoAlreadyExists->rowCount() == 0 AND $user_pseudo != $pseudo_default ){

               //on va inséré cet utilisateur dans la base de donnée et les enregistrés dans un tableau
               $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(email, pseudo, nom, prenom, mdp)VALUES(?, ?, ?, ?, ?)');
               $insertUserOnWebsite->execute(array($user_mail, $user_pseudo, $user_lastname, $user_firstname, $user_password));

               //Récupérer les informations de l'utilisateur afin de l'authenfier
               $getInfosOfThisUserReq = $bdd->prepare('SELECT email, pseudo, nom, prenom FROM users WHERE nom = ? AND prenom = ? AND pseudo = ? AND email = ?');
               $getInfosOfThisUserReq->execute(array($user_lastname, $user_firstname, $user_pseudo, $user_mail));

               //Les stocker dans un tableau avec fetch 
               $usersInfos = $getInfosOfThisUserReq->fetch();

               //Authenfier l'utilisateur sur notre site en récupérant ses données dans des variables globales sessions
               $_SESSION['auth'] = true;
               $_SESSION['id'] = $usersInfos['id'];
               $_SESSION['lastname'] = $usersInfos['nom'];
               $_SESSION['firstname'] = $usersInfos['prenom'];
               $_SESSION['pseudo'] = $usersInfos['pseudo'];
               $_SESSION['email'] = $usersInfos['email'];

               //Rediriger l'utilisateur vers la page de connexion pour qu'il se connecte
                header("Location: profil.php?email=".$_SESSION['email']);
    
            }else{
                $errorMsg = "Ce pseudo est deja prit, veuillez choisir un autre !";
            }
        }else{
            $errorMsg = "Erreur! Vous existez dèja sur notre site, veuillez vous connectez en saisissant d'autres informations";
        }

    }else{
        $errorMsg = "Erreur! Veuillez compléter tous les champs existants !";
    }

/*Notre equipe a preferé mettre un header dans les 2 pages register.php et login.php au lieu de mettre ici - 
c'est à dire à la place de ce commentaire que vous étes en train de lire - 
un message disant que vous venez de vous inscrire à notre site.
Dans le genre : $successMsg = "Votre inscription est réussite ! Bienvenue dans notre site !"; echo '<p>'.$errorMsg.'</p>';
Ce commentaire est pour expliquez pourquoi il manque un tel message car on n'a pas trouvé comment mettre un $successMsg et 
faire un header simultanement */

}

?>