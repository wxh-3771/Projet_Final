<?php
require('../../m/conbd.php');

//Récupérer les questions par défaut sans recherche afin d'eviter d'avoir une page vide dans le cas d'une recherche fausse en limitant le nbre de questions qui seront affichées
$getAllQuestions = $bdd->query('SELECT id, email_auteur, titre, descript, pseudo_auteur, date_publication FROM questions ORDER BY id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utlisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //La recherche
    $usersSearch = $_GET['search'];

    //Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
    $getAllQuestions = $bdd->query('SELECT id, email_auteur, titre, descript, pseudo_auteur, date_publication FROM questions WHERE titre LIKE "%'.$usersSearch.'%" ORDER BY id DESC');
}
//    $getAllQuestions->execute(array($usersSearch));
// }
// if ($getAllQuestions->rowCount() == 0){

//     $msg = "Aucune question portant ce caractère n'a été trouvé, vous pouvez faire une recherche par lettre !";
//     echo '<script>'.$msg.'</script>';
// }

?>