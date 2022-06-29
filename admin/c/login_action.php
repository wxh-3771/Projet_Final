<?php
require('../../utilisateur/m/conbd.php');
session_start();
if(isset($_SESSION['admin'])){
  header('Location: home.php');
}



if(isset($_POST['validate'])){
    if(!empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['password'])){
 
      // $pseudo_default = "Administrateur";
      // $email_default = "admin.forum.myspace.1@gmail.com";
      // $password_default = "123";

      $email_saisi = htmlspecialchars(($_POST['email']));
      $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
      $password_saisi = md5($_POST['password']);

      $password_default = '202cb962ac59075b964b07152d234b70';
      // $password_default = '$2y$10$ob7hm5L71bE1mZ.0lNaKWuTJkOnwCBwgob1lrpFTaWzsPHaa1aU.6';
 
      $checkIfAdmin = $bdd->prepare('SELECT * from administrateur WHERE email = ?');
      $checkIfAdmin->execute(array($email_saisi));
     

      if($checkIfAdmin->rowCount() > 0){

        $administ = $checkIfAdmin->fetch();

        if($password_saisi == $administ['password']){
          $_SESSION['admin'] = true;
          $_SESSION['email'] = $administ['email'];
          $_SESSION['pseudo'] = $administ['pseudo'];

          header('Location: home.php'); 

        }else{
          $errorMsg = "Votre mot de passe n'est pas conforme à cet espace !";
        }

      }else{
        $errorMsg = "Vous n'avez pas le droit d'etre ici !";
      }

    }else{
      $errorMsg = "Veuillez remplire tous les champs !";
    }
 }

?>