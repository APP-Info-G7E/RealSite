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
    
      <?php include("header.php"); ?>
        
        
        
        
       <div id="connexion">
             <form id="motdepasseoublie" method="post" action="mpoubliemail.php">
     
              
              
     <fieldset>
         
      <legend>Mot de passe oublié</legend>
             </br>
        </br>
     
               <p><label for="pseudo">Pseudo : </label>

                   <input type="text" name="pseudo" id="pseudo" /></p>
        
        
        
          <p><label for="mail">E-mail :</label>

              <input type="text" name="mail" id="mail" /></p>
           
           
           


   
</br>
</br>
        

               <p class=validation3><input type="submit" value="Réinitialisation du mot de passe" /></p> 

          </fieldset>
    </form>
           
        </div>
         
   <div>
            
             <p class=mlegal2><a href="http://localhost/tests/mentionlegales.php">Mentions légales</a></p>
            <p class=faq2><a href="http://localhost/tests/FAQ.php">FAQ</a></p>
             <p class=qsn2><a href="http://localhost/tests/FAQ.php">Qui sommes nous ?</a></p>
        
        </div>












    


    </body>
    
</html>