
        <div id="header2">
            
            <div id="logo2">
                <a href="http://localhost/tests/index.php"><img src="images/LogoPh.png" alt="accueil" id="logo2"></a>        			                
            </div>
        
        
            <div id="nav-wrapper2"> 
				<div id="nav">
					
                    <ul>
                        
				      
                    <p  class=accueil><a href="http://localhost/tests/index.php">Accueil</a></p>
						<p class=annonces><a href="Annonces.html">Annonces</a></p>
						<p  class=monpanier><a href="monpanier.html">Mon panier</a></li>
						<p class=forum><a href="forum.html">Forum</a></li>
                                    <?php
if (isset ($_SESSION['pseudo']) && (!empty($_SESSION['pseudo']))){ 
    
                        echo'<p class=deconnexion><a href="deconnexion.php">Deconnexion</a></p>';
}
else {
                        echo'<p class=connexion2><a href="connexion.php">Connexion</a></p>';
}
?>
            
            
            
            
                        <?php
if (isset ($_SESSION['pseudo']) && (!empty($_SESSION['pseudo']))){
    
                        echo'<p class=inscription><a href="monprofil.php">Mon profil</a></p>';
}
else {
                        echo'<p class=inscription><a href="inscription.php">Inscription</a></p>';
}
?>
                        
					</ul>
                    
				</div>
			</div>
        </div>    
