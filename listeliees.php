<?php
if(isset($_POST['go']) || isset($_POST['ville_departement'])) {


    $json = array();


    if(isset($_POST['go'])) {
        // requête qui récupère les régions
        $requete = "SELECT villeID, ville_departement FROM villesfrance ORDER BY ville_departement";
    } else if(isset($_POST['ville_departement'])) {
        $id = htmlentities(intval($_POST['ville_departement']));
        // requête qui récupère les départements selon la région
        $requete = "SELECT villeID, ville_code_postal FROM villesfrance WHERE ville_departement = ". $id ." ORDER BY ville_code_postal";
    }


    // connexion à la base de données
   
        $bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
  
    // exécution de la requête
    $resultat = $bdd->query($requete);


    // résultats
    while($donnees = $resultat->fetch(PDO::FETCH_ASSOC)) {
        // je remplis un tableau et mettant l'id en index (que ce soit pour les régions ou les départements)
        $json[$donnees['villeID']][] = utf8_encode($donnees['ville_departement']);
    }


    // envoi du résultat au success
    echo json_encode($json);
}
?>