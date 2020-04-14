<?php
try   {
  $user = "dbu526540";
  $pass = "Gre-94^X";
  // Je me connecte à ma bdd
  $bdd = new PDO('mysql:host=db5000303632.hosting-data.io;dbname=dbs296619;charset=utf8', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


?>