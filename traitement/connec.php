<?php

    include('../include/connectbdd.php');

    
    $mail = !empty($_POST['mail_user']) ? $_POST['mail_user'] : NULL;
    $mdp = !empty($_POST['mdp_user']) ? $_POST['mdp_user'] : NULL;
    
	
	
    
   $req = $bdd->prepare("SELECT mail_user, mdp_user FROM user 
                           WHERE mail_user = :mail_user 
                            AND  mdp_user = :mdp_user");
  
    $req->execute(array(
        'mail_user' => $mail,
        'mdp_user' => $mdp
		));
  
    $resultat = $req->fetch();
    
	$count = $req->rowCount();
	if($count > 0)
	{
   
    session_start();
    $_session['id_user'] = $resultat['id_user'];
    $_session['mail_user'] = $mail;
    header('location:../index.php'); 
    }





	
	else{
		
		echo "problème mail ou mdp";
		header('location:../connect.php');
    }
    
    ?>