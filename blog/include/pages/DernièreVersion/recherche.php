<h1> rechercher un article </h1>
<?php 
/* Cette page est faite pour simplifier la recherche d'un article qu'on souhaite modifié ou supprimé  */
$db = new Mypdo();
$managerarticle = new ArticleManager($db);
$listeArt=$managerarticle->getListOrderByDate();
	/* condition de vérification de validation de la séléction d'un article */
		if(!isset($_POST['Valider']))
	{?>
		<form method="post" action="#" id="formCenter">
<label> Veuillez Séléctionner l'article que vous souhaitez modifier ou supprimer: </label></br> 
			<select name="Article">
		<?php foreach($listeArt as $Article)
		{?>
				<option value="<?php echo $Article->getId(); ?>"><?php echo $Article->getTitre();?></option>
  <?php } ?>
	</select></br>

			<input type="submit" name="Valider" value="Valider">
		</form>
<?php }else { 
		/* après séléction d'un article, on affiche celui ci */
	$listeArticle = $managerarticle->getArticleById($_POST['Article']); ?>
	<div id="Article">
        <div id="interieur">
            <li> <strong > l'article : </strong><?php echo $listeArticle->getTitre(); ?>  </li></br>
            <p> <?php echo  substr($listeArticle->getArticle(), 0, 200) ;?> ... </br><a  href="index.php?page=0&id=<?php echo $listeArticle->getId(); ?> "> <mark >lire la suite</a></mark></p> 
            <?php echo ' rédigé par :'.$listeArticle->getAuteur(); ?>
        </div>
    </div>
<?php } ?>

 