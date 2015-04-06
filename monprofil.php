     <?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pomme d'Happy</title>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" />
       <?php  $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', ''); ?>
    </head>

    <body>
         
        <?php include("header.php"); ?>
            <?php include("verifmonprofil.php"); ?>
        <div id="monprofil">
            
            
 <form id="formuinscription" method="post"  >
     <fieldset>
      <legend>Modifier mon profil</legend>
     
               <p><label for="nom">Nom*  : </label>
                    <?php include("verifmonprofil.php"); ?>
                   <input type="text" name="nom" id="nom" value="<?php echo $donnees['Nom']; ?> "  /></p>

        
        
        
          <p><label for="prenom">Prénom*  : </label>

              <input type="text" name="prenom" id="prenom" value="<?php echo $donnees['Prénom']; ?> "   /></p>
     
     
       <p><label for="adresse">Adresse :</label>

              <input type="text" name="adresse" id="adresse" value="<?php echo $donnees['Adresse']; ?> "  /></p>
     
     
      <p><label for="departement">Département : </label>
            <select id="departement" name="departement">
                                <option value="choix1"> Aucun  </option>  
<?php
 
$reponse = $bdd->query('SELECT DISTINCT ville_departement FROM mydb.villesfrance');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['ville_departement']; ?>"> <?php echo $donnees['ville_departement']; ?></option>
<?php
}
 
?>
          </select></p>
         
               <p><label for="codepostale">Code postal : </label>
            <select id="codepostale" name="codepostale">
                                <option value="choix1">Aucun</option>  
<?php

$departement = $_POST['departement'];
 
$reponse = $bdd->query('SELECT DISTINCT ville_code_postal FROM mydb.villesfrance ORDER BY ville_code_postal ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['ville_code_postal']; ?>"> <?php echo $donnees['ville_code_postal']; ?></option>
<?php
}
 
?>
          </select></p>
         
         
         
         
                     <p><label for="ville">Ville : </label>
            <select id="ville" name="ville">
                                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT villeID,ville_nom FROM mydb.villesfrance ORDER BY ville_nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['ville_nom']; ?>"> <?php echo $donnees['ville_nom']; ?></option>
<?php
}
 
?>
          </select></p>
         
  
     
     
      <p>
            <label for="pseudo">Pseudo*  : </label>
            <input type="text" id="pseudo" name="pseudo" value="<?php echo $_SESSION['pseudo']; ?> "   />
        </p>
        <p>
            <label for="mp">Nouveau mot de passe*  : </label>
            <input type="password" id="mp" name="mp"   />
        </p>
        <p>
            <label for="mp2">Confirmez le nouveau mot de passe*  : </label>
            <input type="password" id="mp2" name="mp2"   />
        </p>
        <p>
            <label for="mail">Adresse email*  : </label>
            <input type="text" id="mail" name="mail" value="<?php echo $donnees['Mail']; ?>" /></p>

        						<p><input type="submit" value="Sauvegarder"  /></p>
 


     </fieldset>


</form>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                   
            </body>
    
</html>
