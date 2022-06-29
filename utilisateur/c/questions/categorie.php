<?php 

require('../../m/conbd.php');
require('../../c/url.php');

if(isset($_GET['categorie']) AND !empty($_GET['categorie'])) {

   $GetNameCategorie = htmlspecialchars($_GET['categorie']);
   
   //Mettre toutes les categories a l'interieure d'un tableau
   $categories = array();

   $req_categories = $bdd->query('SELECT * FROM categories');

   while($c = $req_categories->fetch()) {
      array_push($categories, array($c['code'],url_custom_encode($c['nom'])));
   }

  
   //Verifier si la categorie recuperée par url existe vraiment cad qu'elle trouve dans notre tableau de categories 
   foreach($categories as $cat) { 
      
      if(in_array($GetNameCategorie, $cat)) {
       $code_categorie = intval($cat[0]);
      }
   }   //SELECT * FROM questions WHERE categorie = ? ORDER BY id DESC

   if(@$code_categorie){

      //
      $ArrayCategorie = array($code_categorie);

      $req ="SELECT questions.titre, questions.id, questions.categorie, questions.contenu, 
      questions.email_auteur, questions.pseudo_auteur, questions.date_publication FROM questions 
      INNER JOIN categories ON questions.categorie = categories.code WHERE categories.code = ? ORDER BY id DESC";

      $AllQuestions = $bdd->prepare($req);
      $AllQuestions->execute($ArrayCategorie);

   }else{
      die("Erreur: Categorie Inexistante");
   }

}else{
   die('Erreur: Aucune Categorie selectionnée');
}


?>