<?php 
$db = new Mypdo();
$managerarticle = new ArticleManager($db);
$id= $_GET['id'];

/* vérifier que le champs article est rempli pour pouvoir modifier l'article */
		if(empty($_POST["article"]))
	{?>
			<form method="POST" action="#" id="formCenter">
				<h1> modifier l'article </h1>
	  			<textarea type="submit" name="article" value="article" rows="10" cols="100"></textarea></br>
	  			<input type="submit" name="Valider" value="Modifier">  
			</form>
<?php } else {

	$managerarticle->update($id,$_POST['article']); ?> <!--appel à la fonction update -->
<div id="reponse">
	<?php echo "l'article a bien été modifié".'</br>' ?>
	<a href="index.php?page=0&id=<?php echo $id ?>"> revenir à l'article </a>
</div>
		<?php } ?>