<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Personnes
//

case 0:
	// inclure ici la page accueil photo
	include_once('include/pages/DernièreVersion/lister.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici les pages de la dernière version
	include_once('include/pages/DernièreVersion/article.php');
	break;
case 2:
	// inclure ici la page affichage article
	include_once('include/pages/DernièreVersion/commentaire.php');
	break;
case 3:
	// inclure ici la page affichage article
	include_once('include/pages/DernièreVersion/modification.php');
	break;
case 4:
	// inclure ici la page affichage article
	include_once('include/pages/DernièreVersion/supprimer.php');
	break;
case 5:
	// inclure ici la page affichage article
	include_once('include/pages/DernièreVersion/recherche.php');
	break;
default : 	include_once('include/pages/DernièreVersion/lister.php');
}
	
?>
</div>