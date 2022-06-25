
<div class="a">
          
  <h1>My<span>Space</span></h1>
 </div>

<div class="onglet">
            <div class="c">
                <?php 
                   if(isset($_SESSION['auth'])){
                     ?>
                     <a href="profil.php?email=<?= $_SESSION['email']; ?>"><button>Profil</button></a>
                     <a href="poster.php"><button>Poster</button></a>
                     <a href="../../c/users/logout.php"><button>Déconnexion</button></a>
                     <?php
                   }
               ?>

              <?php 
                   if(!isset($_SESSION['auth'])){
                     ?>
                     <a href="connexion.php"><button> connecter</button></a>
                     <a href="inscription.php"><button>'inscrire</button></a>
                     <?php
                    }
               ?>
            </div>
<div>
