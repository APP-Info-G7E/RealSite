<?php session_start(); ?>
<!DOCTYPE html>

<html>

    <head>
        
        
        	  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" />



    </head>
    
    <body>









<?php 


$pseudo = $_POST['pseudo'];
$pass_hache = sha1($_POST['mp']);
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');




$req = $bdd->prepare("SELECT IDUtilisateur FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' AND Pass = '$pass_hache' ");

$req->execute(array(

    'Pseudo' => $pseudo,

    'Pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)

{

    echo 'Mauvais identifiant ou mot de passe !';
     header ("Refresh: 1;URL=http://localhost/tests/connexion.php");

}

else

{

    

  

    $_SESSION['pseudo'] = $pseudo;

    echo 'Vous êtes connecté !';
     header ("Refresh: 0;URL=http://localhost/tests/index.php");

}

?>
        
        
        <?php

if ((isset($_SESSION['login'])) && ($_SESSION['login'] != ''))
{
'http://localhost/tests/inscription.php';
}
else {
    exit(); 
}

?>
        
        
        
        
    </body>
    
</html>
        
        