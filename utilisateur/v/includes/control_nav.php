
<div class="a">
          
  <h1>My<span>Space</span></h1>
 </div>

<div class="onglet">
            <div class="c">
                <?php 
                   if(isset($_SESSION['auth']) AND !isset($_SESSION['admin'])){
                     ?>
                     <a href="profil.php?email=<?= $_SESSION['email']; ?>"><button>Profil</button></a>
                     <a href="../../c/users/logout.php"><button>Déconnexion</button></a>
                     <?php
                   }
               ?>

                <?php                
                   if(isset($_SESSION['admin'])){
                     ?>
                     <a href="../../../admin/v/home.php"><button>Home</button></a>
                     <a href="../../../admin/v/membres.php"><button>Membres du Forum</button></a>
                     <a href="../../../admin/c/admin_logout.php"><button>Déconnexion</button></a>
                     <?php
                   }
                ?>



              <?php 
                   if(!isset($_SESSION['auth']) AND !isset($_SESSION['admin'])){
                     ?>
                     <a href="connexion.php"><button> connecter</button></a>
                     <a href="inscription.php"><button>'inscrire</button></a>
                     <?php
                    }
               ?>
            </div>
<div>
