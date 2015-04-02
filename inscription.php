<?php session_start(); ?>

<!DOCTYPE html>

<html>

    <head>
        <title>Page connexion</title>
        
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" />
      
        
    </head>

    <body>
        

    
       
        <div id="header">
            
            
            <div id="logo">
                <a href="http://localhost/tests/index.php"><img src="images/LogoPh.png" alt="accueil" id="logo"></a>        	
               
                <p class="titre">Pomme d'Happy</p>
               
            </div>
        

        
        
            <div id="nav-wrapper"> 
				<div id="nav">
					
                        
                    <p  class=accueil><a href="http://localhost/tests/index.php">Accueil</a></p>
						<p class=annonces><a href="Annonces.html">Annonces</a></p>
						<p  class=monpanier><a href="monpanier.html">Mon panier</a>
						<p class=forum><a href="forum.html">Forum</a>
                        <p class=connexion2><a href="http://localhost/tests/connexion.php">Connexion</a>
                        <p class=inscription><a href="http://localhost/tests/inscription.php">Inscription</a>
                        
                        
                    
				</div>
			</div>
        </div>  
        
            <div id="inscription">
        

 <form id="formuinscription" method="post" action="inscription.php"  >
     <fieldset>
      <legend>Informations personnelles</legend>
     
               <p><label for="nom">Nom*  : </label>
                   <input type="text" name="nom" id="nom"  /></p>
        
        
        
          <p><label for="prenom">Prénom*  : </label>

              <input type="text" name="prenom" id="prenom"   /></p>
     
     
       <p><label for="adresse">Adresse :</label>

              <input type="text" name="adresse" id="adresse" /></p>
     
     
      <p><label for="codepostale">Code postal*  : </label>

              <input type="text" name="codepostale" id="codepostale" /></p>
     
     
      <p><label for="ville">Ville :</label>

              <input type="text" name="ville" id="ville" /></p>
     
     
      <p><label for="pays">Pays : </label>
            <select id="pays" name="pays">
                <option value="ca">Italie</option>
                <option value="us">Allemagne</option>
                <option value="be">Belgique</option>
                <option value="fr">France</option>
          </select></p>
        </fieldset>
     
    </br>
        </br>
        </br>
        </br>
        
        
        
        
        
     <fieldset>
     <legend>Compte</legend>

        </br>
        </br>
     
     
      <p>
            <label for="pseudo">Pseudo*  : </label>
            <input type="text" id="pseudo" name="pseudo"  />
        </p>
        <p>
            <label for="mp">Mot de passe*  : </label>
            <input type="password" id="mp" name="mp"   />
        </p>
        <p>
            <label for="mp2">Confirmer le mot de passe*  : </label>
            <input type="password" id="mp2" name="mp2"   />
        </p>
        <p>
            <label for="mail">Adresse email*  : </label>
            <input type="text" id="mail" name="mail"  /></p>
</fieldset>
        
     
						<p><img src="verif_code_gen.php" alt="Code de vérification" /></p>

<p><label for="verif_code" >Recopiez le code ci-dessus* :</label>  <input type="text" id="verif_code"  name="verif_code" /></p>

</br></br>
						<p><input type="submit" value="s'inscrire"  /></p>
 
</form>

<script type="text/javascript" src="js.js"></script>



        </div>

 <p class=mlegal3><a href="http://localhost/tests/mentionlegales.php">Mentions légales</a></p>
            <p class=faq3><a href="http://localhost/tests/FAQ.php">FAQ</a></p>
             <p class=qsn3><a href="http://localhost/tests/qsn.php">Qui sommes nous ?</a></p>













       
            </body>
    
</html>



















