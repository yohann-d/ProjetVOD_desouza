<nav>

  <div class="Topnav" id="myTopnav"> 
    <a href="index.php" class="active"><span>ALLO</span>SIMPLON</a>

    <?php 
      if(isset($_SESSION)){
      if ($_SESSION['id_typeuser']==1){
        ?>
       <a href="include/admin.php">admin</a>
      <?php
        }
      }
    ?>
    <a href="inscription.php">S'inscrire</a>
    <a href="connect.php">Se connecter</a>
    
    <a href="film.php?id=6">Film</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
  </div>     
</nav>

