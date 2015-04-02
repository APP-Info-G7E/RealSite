<?php
function motListe()
{
	$liste = array('pomme', 'poire', 'isep','iseplive', 'raph', 'alix','lambert', 'manon', 'pg','guigui');
	return $liste[array_rand($liste)];
}

function captcha()
{
	 $mot = motListe();

    $_SESSION['captcha'] = $mot;

    return $mot;
}
?>








