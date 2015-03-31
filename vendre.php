<!DOCTYPE html>
<html>
    <head>
        <title>Pomme d'Happy</title>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" />

    </head>

    <body>
        
        <?php include("header.php"); ?>
        
        <div id="echanger">
            
            
            <form id="formuinscription" method="post" action="postannoncevendre.php">
     
     <fieldset>
         
     
     
      <legend>Mon Happy vente</legend>
         
            <p><label for="titreannonce">Titre de l'annonce :</label>
                   <input type="text" name="titreannonce" id="titreannonce" /></p>
         
         
                </fieldset>
         </form>
            
            </br></br></br></br></br>
            
         
            Je vends*  : 
<input type="radio" name="fruits" value="non" id="fruits" /> <label for="fruits">Fruits</label>
<input type="radio" name="fruits" value="non" id="legumes" /> <label for="legumes">Légumes</label>
<input type="radio" name="fruits" value="non" id="fruitslegumes" /> <label for="fruitslegumes">Fruits et légumes</label>
         
         </br></br>
         
                
            <form id="formuinscription" method="post" action="postannonce.php">
     
     <fieldset>
         
     
     
      <legend>Détail de vos produits</legend>
         
         <p><label for="legumesproposes">Légumes proposés*  : </label>
         <select name="legumesproposes">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
             </select></p>
             
             
         
         <p><label for="fruitsproposes">Fruits proposés*  : </label>
         <select name="fruitsproposes">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
             </select></p>
             
             
         <p><label for="categorie">Catégorie : </label>
         <select name="catégorie">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
             </select></p>
             
             
         
         <p><label for="variete">Variété : </label>
         <select name="variete">
    <option value="choix1">Choix 1</option>
    <option value="choix2">Choix 2</option>
    <option value="choix3">Choix 3</option>
    <option value="choix4">Choix 4</option>
             </select></p>
         
         
         <p><label for="quantité">Quantité (en g ou kg)*  : </label>
                   <input type="text" name="quantite" id="quantite" /></p>
         
         <p><label for="prix">Prix*  : </label>
                   <input type="text" name="prix" id="prix" /></p>
         

         
         
         
                </fieldset>
         </form>




  </br></br></br>



       <form id="formuinscription" method="post" action="postannonce.php">
     
     <fieldset>
         
         
     
     
      <legend>Rendez attractif votre Happy vente</legend>
         
         
         
          <p><label for="description">Description :</label>
         <textarea name="message" rows="8" cols="45">
Une description précise de votre offre attirera plus facilement d'eventuels intéréssés
              </textarea></p>
         
         </br></br>
         
         
          <p><label for="description">Image de vos fruits et légumes :</label>
         <input type="file" name="nom" /></fieldset></p>
         
  </br></br> 
         <p><input type="submit" value="Déposer mon offre de vente" /></p>

</fielset>
</form>
         
</body>
</html>



















