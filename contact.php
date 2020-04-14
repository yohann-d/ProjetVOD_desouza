
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/formulaire.css">
    <link    href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black|Cabin|Fredoka+One|Krona+One|Passion+One&display=swap"
    rel="stylesheet">

    <title>Formulaire de contact</title>
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
  			<h1 class="titre">Formulaire de contact</h1>
  		</div>
  	</div>
    <form action="traitement.php" method="post">
      <div class="name">
       <div class="row">
         <div class="col-6">
          <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" required>
         </div>
         <div class="col-6">
          <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" required>
         </div>
       </div>
      </div>
       <div class="row">
       	 <div class="col-12">
       	 	<div class="email">
       	 	<input type="email" class="form-control" id="mail" placeholder="Email" name="mail" required>
       	 	</div>
       	 </div>
       	</div>
        <div class="row">
          <div class="col-12">
            <div class="text-area">
              <textarea class="text-area" id="message" placeholder="Message" rows="10" cols="50" name="message" ></textarea>
            </div>
          </div>
        </div>
        <div class="rows">
          <div class="col-12">
            <div class="bouton">
              <button type="submit" class="btn btn-primary mb-2">Envoyé</button>
            </div>
          </div>
        </div>
    </form>
</div>
  </body>

 </html>
