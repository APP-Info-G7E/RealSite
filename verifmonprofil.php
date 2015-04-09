     <?php session_start(); ?>
<?php 
$ville = $_POST['ville'];
$departement = $_POST['departement'];
$pseudo2 = $_POST['pseudo'];
$pass_hache = sha1($_POST['mp']);
$mp = $_POST['mp'];
$email = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$codepostale = $_POST['codepostale'];
$pseudo = $_SESSION['pseudo'];
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');





$req = $bdd->prepare("UPDATE utilisateursinscrits SET Pass = '$pass_hache', Nom = '$nom', Pseudo = '$pseudo2', Mail = '$email', Prénom = '$prenom', CodePostal = '$codepostale', Ville = '$ville', Département = '$departement', Adresse = '$adresse' 
WHERE Pseudo = ".$bdd->quote($pseudo));

$req->execute(array(

      'Pseudo' => $pseudo,
    

    'Pass' => $pass_hache,
    
    
    'Mail' => $email,
    
    
    'Prénom' => $prenom,
    
    
    'CodePostal' => $codepostale,
    
    
    'Ville' => $ville,
    
    
    'Département' => $departement,
    
    
    'Adresse' => $adresse ,
    
    'Nom' => $nom));

     
     header ("Refresh: 0;URL=http://localhost/tests/index.php");


?>
        
        
 
        


        

