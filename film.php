<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allo Simplon</title>

<!-------
    css
-------->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />



<!-----------------
    BOOTSTRAP  
------------------>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/nav.js"></script>
    
</head>
<body>

<!-----------------
    NAVBAR  
------------------>

    <?php include 'include/nav.php'; ?>
         
<!-----------------
    SLIDER
------------------>
<?php include 'include/connectbdd.php'; ?>
  
  



<br>
<div class="carousel-item active">
    <img class="imgd w-100" src="img/img_slid/slid3.jpg" alt="First slide">
    <div class="carousel-caption d-none d-md-block">
        <h5>Tous nos films </h5>
        
    </div>
</div>
<div class="nav_genre" id="mynav_genre">
    <a href="film.php?id=6" >Tous</a>
    <a href="film.php?id=1">Action</a>
    <a href="film.php?id=2">S.F</a>
    <a href="film.php?id=3">Aventure</a>
    <a href="film.php?id=4">comédie</a>
    <a href="film.php?id=5">Drame</a>
    </a>
  </div> 
 <div class="sorties">   
    <div><br><br>
        <h2>Nos films</h2>
    </div>


	<div class="card-film d-md-flex">


<?php
$id = $_GET['id']; ?>
<?php

$req = $bdd->prepare("SELECT f.id_film, f.titre, f.synopsis, f.note, f.duree, f.date, i.id_image, i.affiche, i.id_film, g.id_genre, g.nom_genre, t.id_film, t.id_genre
                      FROM film f, imgg i, genre g, typee t
                      WHERE g.id_genre = t.id_genre
                      AND   f.id_film = i.id_film
                      
                      AND   t.id_film = f.id_film
                      /*AND   t.id_film = i.id_film*/
                      AND   g.id_genre = $id");
                     
                       
                                        
$req->execute();
while($donnees = $req->fetch()) {
								?>
								
    <div class="card-deck  col-md-4 ">
        <div class="card">
            <img class="card-img-top" src="<?php echo $donnees['affiche'] ?>" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title"><?php echo $donnees['titre'] ?></h5>
            <p class="card-text"><?php echo $donnees['synopsis'] ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $donnees['nom_genre'] ?></li>
            </ul>
            <div class="card-footer">
            <a href="presentation.php?id=<?php echo $donnees['id_film'] ?>"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>
       
    </div>
    
<?php } ?>
</div>
</div> 



<!-----------------
    FOOTER 
------------------>

    <?php include 'include/footer.php'; ?>

<!-----------------
    SCRIPT 
------------------>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>