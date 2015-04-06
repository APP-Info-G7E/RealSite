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
        
<script  type="text/javascript">

  function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
         
        
        
        
        
        
        
        
        
        
        
        
        
        <?php include("header.php"); ?>
        
        <div id="echanger">
            
            
            <form id="formuinscription" method="post" action="process_form.php">
     
     <fieldset>
         
      <legend>Mon Happy échange</legend>
         
            <p><label for="titreannonce">Titre de l'annonce :</label>
                   <input type="text" name="titreannonce" id="titreannonce" /></p>
         
         
                </fieldset>
         </form>
            
            </br></br></br></br></br>
            
         
            Je donne*  : 
<input type="radio" name="fruits" value="non" id="fruits" /> <label for="fruits">Fruits</label>
<input type="radio" name="fruits" value="non" id="legumes" /> <label for="legumes">Légumes</label>
<input type="radio" name="fruits" value="non" id="fruitslegumes" /> <label for="fruitslegumes">Fruits et légumes</label>
         
         </br></br>
         
                
            <form id="formuinscription" method="post" action="postannonce.php">
     
     <fieldset>
         
     
     
      <legend>Détail de vos produits</legend>
         
         
                 
         <p><label for="variete">Variété : </label>
         <select name="variete">
             <option value="choix1">Aucun</option>
    <?php
 
$reponse = $bdd->query('SELECT DISTINCT Variété FROM mydb.produits ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Variété']; ?>"> <?php echo $donnees['Variété']; ?></option>
<?php
}
 
?>
             </select></p>
          
         
         
         
         
         <p><label for="legumesproposes">Légume recherché 1*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
         
                  <p><label for="legumesproposes">Légume recherché 2*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
         
         
                  <p><label for="legumesproposes">Légume recherché 3*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
         
         
                  <p><label for="legumesproposes">Légume recherché 4*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
             
             
         
         <p><label for="fruitsproposes">Fruit recherché 1*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
              </select></p>

             
                      <p><label for="fruitsproposes">Fruit recherché 1*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
              </select></p>
             
                      <p><label for="fruitsproposes">Fruit recherché 2*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
              </select></p>
             
             
                      <p><label for="fruitsproposes">Fruit recherché 3*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             
              </select></p>
             
                      <p><label for="fruitsproposes">Fruit recherché 4*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             
       </select></p>
         
         
         <p><label for="quantité">Quantité (en g ou kg)*  : </label>
                   <input type="text" name="titreannonce" id="titreannonce" /></p>
         
                </fieldset>
         </form>     
         </br></br></br></br></br>
            
                      Je cherche*  :  
<input type="radio" name="fruits1" value="non" id="fruits" /> <label for="fruits">Fruits</label>
<input type="radio" name="fruits1" value="non" id="legumes" /> <label for="legumes">Légumes</label>
<input type="radio" name="fruits1" value="non" id="fruitslegumes" /> <label for="fruitslegumes">Fruits et légumes</label>
         
            
         <form id="formuinscription" method="post" action="postannonce.php">
             
     <fieldset>
         
     
     
      <legend>Détail de ce que vous recherchez</legend>
         
         
         
         
                <p><label for="variete">Variété : </label>
         <select name="variete">
             <option value="choix1">Aucun</option>
    <?php
 
$reponse = $bdd->query('SELECT DISTINCT Variété FROM mydb.produits ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Variété']; ?>"> <?php echo $donnees['Variété']; ?></option>
<?php
}
 
?>
             </select></p>
         

             
         <p><label for="legumesproposes">Légume proposé 1*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
         
                  <p><label for="legumesproposes">Légume proposé 2*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
         
         
                  <p><label for="legumesproposes">Légume proposé 3*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
         
         
                  <p><label for="legumesproposes">Légume proposé 4*  : </label>
         <select name="legumesproposes" id="legumesproposes">
            <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Legumes" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             </select></p>
             
             
         
         <p><label for="fruitsproposes">Fruit proposé 1*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
              </select></p>

             
                      <p><label for="fruitsproposes">Fruit proposé 1*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
              </select></p>
             
                      <p><label for="fruitsproposes">Fruit proposé 2*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
              </select></p>
             
             
                      <p><label for="fruitsproposes">Fruit proposé 3*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
             
              </select></p>
             
                      <p><label for="fruitsproposes">Fruit proposé 4*  : </label>
         <select name="fruitsproposes">
                <option value="choix1">Aucun</option>  
<?php
 
$reponse = $bdd->query('SELECT idProduits,Nom FROM mydb.produits WHERE Catégorie="Fruit" ORDER BY nom ASC');
 
while ($donnees = $reponse->fetch())
{
?>
           <option value="<?php echo $donnees['Nom']; ?>"> <?php echo $donnees['Nom']; ?></option>
<?php
}
 
?>
              </select></p>
   
         
         
         <p><label for="quantité">Quantité (en g ou kg)*  : </label>
                   <input type="text" name="titreannonce" id="titreannonce" /></p>
         
                </fieldset>
         </form>     
         

</br></br>

       <form id="formuinscription" method="post" action="postannonce.php" enctype="multipart/form-data">
     
     <fieldset>
         
         
     
     
      <legend>Rendez attractif votre Happy échange</legend>
         
         
         
          <p><label for="description">Description :</label>
         <textarea name="message" rows="8" cols="45">
Une description précise de votre offre attirera plus facilement d'eventuels intéréssés
              </textarea></p>
         
         </br></br>
         
         
          <p><label for="description">Image de vos fruits et légumes :</label>
         <input type="file" name="image" id="uploadImage" onchange="PreviewImage();" />
</fieldset></p>

<img id="uploadPreview" style="width: 30%; height: 10%;" />
  </br></br>
         
         <p><input type="submit" value="Déposer mon offre d'échange" /></p>

</fielset>
</form>



         
        
            
        </div>
    </body>
    
</html>