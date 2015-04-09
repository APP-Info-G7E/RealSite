<?php
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
$q = strtolower($_GET["q"]);
if (!$q) return;
$req = $bdd->query( "SELECT DISTINCT ville_code_postal, villeID FROM  villesfrance WHERE ville_code_postal LIKE '%$q%'");

while ($donnees = $req->fetch())
{

$cid = $donnees['villeID'];
$cname = $donnees['ville_code_postal'];
echo "$cname|$cid\n";
}
?>