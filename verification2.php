<!DOCTYPE html>

<html>

    <head>
        
        
        	  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" />



    </head>
    
    <body>








<?php session_start(); ?>
<?php

    $email = $_POST['mail']; 

if(!empty($_POST['verif_code']) && !empty($_POST['pseudo'])  && !empty($_POST['mp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ville']) && !empty($_POST['codepostale']) && !empty($_POST['mp2']) && !empty($_POST['mail'])){
}  else {
      echo 'Il faut remplir tous les champs.';
     header ("Refresh: 2;URL=http://localhost/tests/inscription.php");
}
    



if($_POST['verif_code'] == $_SESSION['verif_code']){
          
         

}  else {

        echo 'Saisie incorrecte du nombre';
     header ("Refresh: 2;URL=http://localhost/tests/inscription.php");
        
   }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    } else {
    echo 'Cet email a un format non adapté.';
        header ("Refresh: 3;URL=http://localhost/tests/inscription.php");
    }

if ($_POST['mp'] == $_POST['mp2']){
} else {
    echo 'Mots de passe différents';
     header ("Refresh: 2;URL=http://localhost/tests/inscription.php");
}



if(!empty($_POST['verif_code']) && !empty($_POST['pseudo'])  && !empty($_POST['mp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ville']) && !empty($_POST['codepostale']) && !empty($_POST['mp2']) && !empty($_POST['mail']) && $_POST['verif_code'] == $_SESSION['verif_code'] && filter_var($email, FILTER_VALIDATE_EMAIL) && $_POST['mp'] == $_POST['mp2'] ){
    
    echo 'Bienvenue sur Pomme d Happy';
}


?>
        
        

<?php 

$pseudo = $_POST['pseudo'];
$pass_hache = sha1($_POST['mp']);
$email = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$codepostale = $_POST['codepostale'];
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');



if(!empty($_POST['verif_code']) && !empty($_POST['pseudo'])  && !empty($_POST['mp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ville']) && !empty($_POST['codepostale']) && !empty($_POST['mp2']) && !empty($_POST['mail']) && $_POST['verif_code'] == $_SESSION['verif_code'] && filter_var($email, FILTER_VALIDATE_EMAIL) && $_POST['mp'] == $_POST['mp2'] ){


$req = $bdd->prepare("INSERT INTO mydb.utilisateursinscrits (Pseudo, Nom, Prénom, Adresse, Mail, Pass, Ville, CodePostale) VALUES ('$pseudo', '$nom', '$prenom', '$adresse', '$email', '$pass_hache', '$ville', '$codepostale' )");


$req->execute(array(

    'Pseudo' => $pseudo,
    

    'Pass' => $pass_hache,
    
    
    'Mail' => $email,
    
    
    'Nom' => $nom,
    
    
    'Prénom' => $prenom,
    
    
    'Ville' => $ville,
    
    
    'CodePostale' => $codepostale,
    

    'Adresse' => $adresse));
    
     header ("Refresh: 6;URL=http://localhost/tests/index.php");
    
    
} else {  
    
}

    
    
?>
        
        

        
     
        

        
           </body>
    
</html>
        

