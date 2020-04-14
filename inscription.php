<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allo Simplon</title>

<!-------
    css
-------->

    <link rel="stylesheet" href="css/formulaire.css">
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
  <div class="row">
  		<div class="col-12">
        <div class="logo">
          <a href="index.php"><img src=img/left-arrow.png alt=""/></a>
        </div>

  <div class="website">
  	<div class="row">
  		<div class="col-12">
        <div class="logo">
          <a href="index.html"><img src=images/left-arrow.png alt=""/></a>
        </div>
  			<h1 class="titre">Formulaire d'inscription</h1>
  		</div>
  	</div>
    <form action="traitement/inscrip.php" method="POST">
      <div class="ensfor">
       <div class="row">
         <div class="col-6">
         <input class="login" type="text" placeholder="pseudo" name="pseudo" required>
         </div>
       </div>
      </div>
       <div class="ensfor">
       	 <div class="row">
       	 	<div class="col-6">
                <input class="login" type="text" placeholder="nom" name="nom_user" required>
       	 	</div>
       	 </div>
       	</div>
        <div class="ensfor">
          <div class="row">
            <div class="col-6r">
            <input class="login" type="text" placeholder="prénom" name="prenom_user" required>
            </div>
          </div>
        </div>
        <div class="ensfor">
       	 <div class="row">
       	 	<div class="col-6">
                <input class="login" type="email" placeholder="email" name="mail_user" required>
       	 	</div>
       	 </div>
        </div>
        <div class="ensfor">
       	 <div class="row">
       	 	<div class="col-6">
                <input class="login"  type="password" placeholder="Mot de passe" name="mdp_user" required>
       	 	</div>
       	 </div>
           </div>
           <div class='ensfor'>
                <div class="row">
                    <select name="type_user" id="type">
                    <option name ="type_user" value="1">Admin</option>
                    <option name ="type_user" value="2">User</option>
                    </select>
                </div>
            </div>

        <div class="bouton">
            <div class="rows">
                <div class="col-6">
            
                    <input class="btn btn-primary mb-2"type="submit" id='inscription' name="inscription" value='Inscription'>
                </div>
          </div>
        </div>
    </form>
</div>

<!-----------------
    SCRIPT 
------------------>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



















