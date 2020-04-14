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

<?php

/*SLIDER*/
$req = $bdd->prepare("SELECT * FROM slid WHERE id_slid='2'");
$req->execute();
$slide = $req->fetch();

$req = $bdd->prepare("SELECT * FROM slid WHERE id_slid='1'");
$req->execute();
$slide2 = $req->fetch();

$req = $bdd->prepare("SELECT * FROM slid WHERE id_slid='3'");
$req->execute();
$slide3 = $req->fetch();

?>




<div id="carouselExampleControls" class=" carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="imgd w-100" src="<?php echo $slide['affichee'] ?>" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $slide['intro_slid'] ?> </h5>
                        <p><?php echo $slide['titre_slid'] ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="imgd w-100 " src="<?php echo $slide2['affichee'] ?>" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $slide2['intro_slid'] ?></h5>
                        <p><?php echo $slide2['titre_slid'] ?></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="imgd w-100" src="<?php echo $slide3['affichee'] ?>" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $slide3['intro_slid'] ?></h5>
                        <p><?php echo $slide3['titre_slid'] ?></p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
</div>
 

<!-------------------
    prochainement
-------------------->
<div class="prochainement">
    <div>
        <h2>Prochainement</h2>
    </div>
    
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/img_autre/star_w2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">La conclusion de la saga Skywalker. De nouvelles légendes vont naître dans cette bataille épique pour la liberté.</p>
            </div>   
        </div>
        <div class="card">
            <img class="card-img-top" src="img/img_autre/appel.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">La paisible vie domestique de Buck, un chien au grand cœur, bascule lorsqu’il est brusquement arraché à sa maison en Californie et se retrouve enrôlé comme chien de traîneau dans les étendues sauvages du Yukon canadien pendant la ruée vers l’or des années 1890.</p>
            </div> 
        </div>
        <div class="card">
           <img class="card-img-top" src="img/img_autre/richar2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Description</h5>
                <p class="card-text">En 1996, Richard Jewell fait partie de l'équipe chargée de la sécurité des Jeux d'Atlanta. Il est l'un des premiers à alerter de la présence d'une bombe et à sauver des vies. Mais il se retrouve bientôt suspecté... de terrorisme.
</p>
            </div> 
        </div>
    </div>
</div>



<!-------------------
    paralax
-------------------->

<div class="parallax">
    
    </div>
    
<!-------------------
    Sortie de la semaine
-------------------->
<div class="sorties">
    <div>
        <h2>Sorties de la semaine</h2>
    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/affiche/avengers_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=1"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/affiche/star_w_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">La conclusion de la saga Skywalker. De nouvelles légendes vont naître dans cette bataille épique pour la liberté.</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=2"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/affiche/appel_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">La paisible vie domestique de Buck, un chien au grand cœur, bascule lorsqu’il est brusquement arraché à sa maison en Californie et se retrouve enrôlé comme chien de traîneau dans les étendues sauvages du Yukon canadien pendant la ruée vers l’or des années 1890.</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=3"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/affiche/richard_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">En 1996, Richard Jewell fait partie de l'équipe chargée de la sécurité des Jeux d'Atlanta. Il est l'un des premiers à alerter de la présence d'une bombe et à sauver des vies. Mais il se retrouve bientôt suspecté... de terrorisme.
</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=5"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>

    </div>
</div>  


<!-------------------
    paralax
-------------------->

<div class="parallax"></div>

<!-------------------
    A l'affiche
-------------------->
<div class="alaffiche">
    <div>
        <h2>A l'affiche</h2>
    </div>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="img/affiche/richard_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">En 1996, Richard Jewell fait partie de l'équipe chargée de la sécurité des Jeux d'Atlanta. Il est l'un des premiers à alerter de la présence d'une bombe et à sauver des vies. Mais il se retrouve bientôt suspecté... de terrorisme.
</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=5"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/affiche/appel_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">La paisible vie domestique de Buck, un chien au grand cœur, bascule lorsqu’il est brusquement arraché à sa maison en Californie et se retrouve enrôlé comme chien de traîneau dans les étendues sauvages du Yukon canadien pendant la ruée vers l’or des années 1890.</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=3"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/affiche/star_w_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">La conclusion de la saga Skywalker. De nouvelles légendes vont naître dans cette bataille épique pour la liberté.</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=2"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/affiche/avengers_aff.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel.</p>
            </div>
            <div class="card-footer">
            <a href="presentation.php?id=1"><button type="button" class="btn btn-outline-info">Voir</button></a>
            </div>
        </div>

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