<?php
$db = new Mypdo();
$managerarticle = new ArticleManager($db); 
$commentairemanager= new CommentaireManager($db);   
$id=$_GET['id'];
$managerarticle->Delete($id); /* appel à la fonction delete */ ?>

<div id="reponse">
 	<p> l'article a bien été supprimé </p> </br>
 	<a href="index.php?page=0"> revenir à la liste des articles </a>
</div>
 	 
 	

 		