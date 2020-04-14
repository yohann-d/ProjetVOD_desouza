<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation film</title>

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
$id = $_GET['id']; ?>

<?php
$req = $bdd->prepare("SELECT f.id_film,f.titre,f.synopsis,f.note,f.duree,f.date, f.bande_annonce,i.id_image,i.affiche,i.id_film,j.id_film,j.id_acteur,a.id_acteur,a.nom,a.prenom,a.image,r.id_realisateur,r.nom_rea,r.prenom_rea,r.image_rea,d.id_film,d.id_realisateur
                      FROM film f, imgg i, jouer j, acteur a, realisateur r, drealiser d
                      WHERE j.id_acteur = a.id_acteur
                      AND   r.id_realisateur = d.id_realisateur
                      AND   f.id_film = i.id_film
                      AND   j.id_film = f.id_film
                      AND   j.id_film = i.id_film
                      AND   d.id_film = f.id_film
                      AND   d.id_film = i.id_film
                      AND   d.id_film = j.id_film
                      AND   j.id_film = $id");
$req->execute();

$donnees = $req->fetch(); ?>






 
            <h2 class="titrep"><?php echo $donnees['titre'] ?></h2>
            <div class="imgsyno d-md-flex ">
                <div class="img_film col-md-3 ">
                    <img src="<?php echo $donnees['affiche'] ?>" alt="">
                </div>
                <div class="synopsis col-md-3 ">
                    <h2>Synopsis</h2>
                    <br>
                    <br>
                    <p><?php echo $donnees['synopsis'] ?></p>
                </div>
            </div>
            </div>
            <h2 class="titrepp">Résumé</h2>
            <div class="resume d-md-flex">
                <div class="prond col-md-2 ">
                    <p"><?php echo $donnees['duree'] ?></p>
                    <h5>Durée</h5>
            </div>
            <div class="prond col-md-2 ">
                <p><?php echo $donnees['note'] ?>/5</p>
                <h5>Note</h5>
            </div>
            <div class="prond col-md-2 ">
                <p ><?php echo $donnees['date'] ?></p>
                <h5>Date de sortie</h5>
            </div>
            </div>
            <h2 class="titrepp">Realisateur</h2>   
            <div class="ensrea d-md-flex"> 
                      
                <div class="realisateur col-md-4">
                    <img src="<?php echo $donnees['image_rea'] ?>" alt="">
                    <h5><?php echo $donnees['nom_rea'] ?>   <?php echo $donnees['prenom_rea'] ?></h5>
                </div>
                <div class="frame col-md-4">
                   
                <?php echo $donnees['bande_annonce'] ?>
                 <h5>Bande annonce</h5>
                </div>
            </div>
            <h2 class="titrepp">Acteur</h2>

            
        <div class="ensact d-md-flex">


  <?php          
while($donnees = $req->fetch()) { ?>

            <div class="acteur col-md-3">
                <img src="<?php echo $donnees['image'] ?>" alt="">
                <h5><?php echo $donnees['nom'] ?>   <?php echo $donnees['prenom'] ?></h5>
            </div>
        
        
<?php } ?>


       
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