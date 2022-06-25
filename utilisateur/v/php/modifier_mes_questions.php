<?php
    require('../../c/security.php');
    require('../../c/questions/recup_infos_quest.php');
    require('../../c/questions/modifier_quest.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/connex.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
    <title>Mon profil</title>
</head> 

<body>   
   <!-- <nav>
     <?php 
         //require('../includes/control_nav.php');
        ?>
    
     <?php 
         //require('../includes/navbar.php');
       ?>
  </nav> -->

    <br><br>
    <div class="w">
        <?php require('../../c/messages/msgerror_modification.php') ; ?>
        
        <?php 
            if(isset($question_content)){ 
                ?>
                <form class="form" method="POST">
                    <div class="text">
                        <label>Titre de la question</label>
                        <input type="text" name="title" value="<?= $question_title; ?>">
                    </div>
                    <div class="text">
                        <label for="exampleInputEmail1" class="form-label">Description de la question</label>
                        <textarea class="form-control" name="descript"><?= $question_description; ?></textarea>
                    </div>
                    <div class="text">
                        <label>Contenu de la question</label>
                        <textarea type="text" name="content"><?= $question_content; ?></textarea>
                    </div>

                    <button type="submit" class="btn" name="validate">Modifier la question</button>
                </form>
                <?php
            }
        ?>
        

    </div>

    <?php 
     // require('../includes/footer.php');
    ?>
     
    

</body>
</html>