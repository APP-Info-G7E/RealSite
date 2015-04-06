
<?php 


$pseudo=$_SESSION['pseudo'];
$req = $bdd->query("SELECT Nom, Prénom, Adresse, Département, Mail FROM mydb.utilisateursinscrits WHERE Pseudo = ".$bdd->quote($pseudo));

  
$donnees = $req->fetch();

?>
 
        


        

