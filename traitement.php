<?php
$prenom = !empty($_POST['prenom'])?$_POST['prenom']:NULL;
$nom = !empty($_POST['nom'])?$_POST['nom']:NULL;
$mail = !empty($_POST['mail'])?$_POST['mail']:NULL;
$message = !empty($_POST['message'])?$_POST['message']:NULL;
$to = "desouza@simplon-charleville.fr";
$subjet = "Formulaire-contact";


if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['message']) || empty($_POST['mail']))
{
  echo "Tous les champs doivent etre remplis";
}

else {

  $msg .= "Nom: $nom\n";
  $msg .= "Prenom: $prenom\n";
  $msg .= "Email: $mail\n";
  $msg .= "Message: $message\n";

  mail($to, $subjet, $msg);
  header('Location:index.php' );
  exit();
}



?>



