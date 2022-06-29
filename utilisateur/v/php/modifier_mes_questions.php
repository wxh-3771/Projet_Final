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
    <link rel="icon" type="imgs/png" href="../imgs/log.png">
    <title>Mon profil</title>
    
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    
</head> 

<body>   

   <section class="hero" style="background-color: black;">
      <?php 
            require('../includes/navbar.php');
        ?>
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
                        <label>Categorie de la question</label>
                        <input type="text" name="title" value="<?= $CategorieInfos['nom']; ?>" disabled="disabled">
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
        require('../includes/footer.php');
        ?>
    </section>
    

</body>
</html>