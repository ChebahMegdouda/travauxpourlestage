<?php session_start(); ?>
<!doctype html>
<html lang="fr">

<head>

  <meta charset="utf-8">

<?php
		$title = "Bienvenue sur le site de covoiturage de l'IUT.";?>
		<title>
		<?php echo $title ?>
		</title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
	<body>
	<div id="header">
		<div id="entete">
			<div class="colonne">
				MyBlog,<br />le blog qui vous donne la parole !
			</div>
			</div>
			<div id="menuhaut">
<form method="POST" action="#" id="formh">

	  <a href="index.php?page=1"> <input type="button" value="Ajouter un article"> </a>
	  <a href="index.php?page=0"><input type="button" value="Voir les articles"> </a>
	  <a href="index.php?page=5"><input type="button" value="Modifier un article"></a>
	   <a href="index.php?page=5"><input type="button" value="Supprimer un article"></a>

</form> 
</div>
	</div>
	