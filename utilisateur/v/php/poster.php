<?php 
    require('../../c/security.php'); 
    require('../../c/questions/question_action.php');
?>
<html lang="fr">
<head>
<title>ECRIRE UN POST</title>
<link rel="stylesheet" type="text/css" href="../css/poster.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="icon" type="imgs/png" href="../imgs/log.png">
</head>
<body>
   <nav>
      <?php 
         require('../includes/control_nav.php');
       ?>
    
     <?php 
         require('../includes/navbar.php');
     ?>
   </nav>

<div class="formstyle">
<center>
<h1>Ajouter un post</h1>
</center>
</div>
<div style>
  <form class="post" method="POST">

   <?php require('../../c/messages/msgerror_publier_quest.php'); ?>

   <fieldset class="account-info">
     <label>
       Titre
       <input type="text" name="title" class="sub">
       Description
      </label>
      <textarea rows="2" cols="60" name="descript" class="textarea"></textarea>
      <label>Contenu de la question</label>
      <textarea rows="18" cols="60" name="content" class="textarea"></textarea>
  </fieldset>

  <fieldset class="account-action">
    <input class="btn" type="submit" name="validate" value="Poster" >
  </fieldset>
</form>
<br>
</div>
    
<?php 
      require('../includes/footer.php');
    ?>
     
     
    
</body>
</html>