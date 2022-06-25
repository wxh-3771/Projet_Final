<?php
require('../../utilisateur/m/conbd.php');
session_start();

if(isset($_POST['validate'])){
    if(!empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['password'])){
 
      // $pseudo_default = "Administrateur";
      // $email_default = "admin.forum.myspace.1@gmail.com";
      // $password_default = "admin123";

      $email_saisi = htmlspecialchars(($_POST['email']));
      $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
      $password_saisi = htmlspecialchars($_POST['password']);
 
      $checkIfAdmin = $bdd->prepare('SELECT * from administrateur WHERE email = ?');
      $checkIfAdmin->execute(array($email_saisi));
      //password_hash($_POST['password'], PASSWORD_DEFAULT);

      if($checkIfAdmin->rowCount() > 0){

        $administ = $checkIfAdmin->fetch();

        // if(password_verify($password_saisi, $admin['password'])){
        if($password_saisi == $administ['password'] ){
          
          $_SESSION['admin'] = true;
          $_SESSION['email'] = $administ['email'];
          $_SESSION['pseudo'] = $administ['pseudo'];

          header('Location: ../v/home.php'); 

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