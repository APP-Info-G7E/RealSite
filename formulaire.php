

<!DOCTYPE html>

<html>

    <head>
        
                    <?php session_start(); ?>
                    <?php require('captcha.php'); ?>
        
    </head>
    
    <body>






<form action="verification.php" method="post">

    

        <label for="pseudo">Pseudo</label>

            <input type="text" name="pseudo" id="pseudo" /><br />
        
        
        
          <label for="mp">Mot de passe</label>

            <input type="password" name="mp" id="mp" /><br />

            

        <label for="captcha">Recopiez le mot : "<?php echo captcha(); ?>"</label>

            <input type="text" name="captcha" id="captcha" /><br />

        

        <input type="submit" value="envoyer" />

    

</form>
        
    </body>
    
</html>