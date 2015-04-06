 
<?php
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
$pseudo = $_POST['pseudo'];
$email = $_POST['mail'];
$req = $bdd->prepare("SELECT Pass FROM mydb.utilisateursinscrits WHERE Pseudo = '$pseudo' AND Mail = '$email' ");

$req->execute(array(

    'Pseudo' => $pseudo,

    'Mail' => $email));

$resultat = $req->fetch();

if (!$resultat)

{

    echo 'Pseudo ou email inconnu';
     header ("Refresh: 1;URL=http://localhost/tests/mpoublie.php");

}

else

{

    

  

    

    echo 'Vous êtes connecté !';
     header ("Refresh: 5;URL=http://localhost/tests/index.php");

}

?>
        
        