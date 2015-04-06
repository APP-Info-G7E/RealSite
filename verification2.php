<?php session_start(); ?>
        

<?php 
$ville = $_POST['ville'];
$departement = $_POST['departement'];
$pseudo = $_POST['pseudo'];
$pass_hache = sha1($_POST['mp']);
$mp = $_POST['mp'];
$email = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$codepostale = $_POST['codepostale'];
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');



if ( $_POST['verif_code'] == $_SESSION['verif_code']){

$req = $bdd->prepare("INSERT INTO mydb.utilisateursinscrits (Pseudo, Nom, Prénom, Adresse, Mail, Pass, CodePostal, Département, Ville) VALUES ('$pseudo', '$nom', '$prenom', '$adresse', '$email', '$pass_hache', '$codepostale', '$departement', '$ville' )");


$req->execute(array(

    'Pseudo' => $pseudo,
    

    'Pass' => $pass_hache,
    
    
    'Mail' => $email,
    
    
    'Nom' => $nom,
    
    
    'Prénom' => $prenom,
    
    
    'CodePostal' => $codepostale,
    
    
    'Ville' => $ville,
    
    
    'Département' => $departement,
    
    

    'Adresse' => $adresse));
        

     echo'<script>alert("Bienvenue sur Pomme d`Happy, le happy marché des happy jardiniers !")</script>';
     header ("Refresh: 0;URL=http://localhost/tests/index.php");

    
    
} else {  

 echo'<script>alert("Code incorrect")</script>';
      header ("Refresh: 0;URL=http://localhost/tests/inscription.php");
    
}

    
    
?>
        
        


        

