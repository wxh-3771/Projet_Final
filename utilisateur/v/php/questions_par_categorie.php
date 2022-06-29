<?php
require('../../c/questions/categorie.php');
?>
<html>
   <?php while($t = $AllQuestions->fetch()) {
      
      ?>
   <tr>
      <td class="main">
         <h4><a href="article.php?id=<?=$t['id'];?>"><?= $t['titre']; ?></a></h4>
         <p><?=$t['contenu'] ;?></p>
         <?= $t['date_publication']; ?><br />par <?= $t['pseudo_auteur']; ?>
      </td>
   </tr>
   <?php } ?>

   <br><br>

   <a href="poster.php?categorie=<?=$code_categorie;?>">Ajouter une nouvelle questions</a>
</table>

</html>