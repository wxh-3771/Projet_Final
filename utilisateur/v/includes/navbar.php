  
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark " >
        <a class="navbar-brand" href="#"><h1>My<span>Space</span></h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" ></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-light" href="accueil.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="forum.php">Forum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="informations.php">Informations</a>
              </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="regles.php">Reglement</a>
            </li>
          </ul>

          
          <form class="form-inline my-2 my-sm-0" >

               <?php 
                   if(isset($_SESSION['auth']) AND !isset($_SESSION['admin'])){
                     ?>
                     <a href="profil.php?email=<?= $_SESSION['email']; ?>"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Profil</button></a>
                     <a href="../../c/users/logout.php"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Déconnexion</button></a>
                     <?php
                   }
               ?>

                <?php                
                   if(isset($_SESSION['admin'])){
                     ?>
                     <a href="../../../admin/v/home.php"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Home</button></a>
                     <a href="../../../admin/v/membres.php"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Membres du Forum</button></a>
                     <a href="../../../admin/c/admin_logout.php"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Déconnexion</button></a>
                     <?php
                   }
                ?>



              <?php 
                   if(!isset($_SESSION['auth']) AND !isset($_SESSION['admin'])){
                     ?>
                     <a href="inscription.php"><button class="btn btn-outline-light my-2 my-sm-0" type="button">Inscription</button></a>
                     <a href="connexion.php"><button class="btn btn-outline-light my-2 my-sm-0 " type="button">Connexion</button></a>
                     <?php
                    }
               ?>
            </form>
          
          
        </div>
  </nav>