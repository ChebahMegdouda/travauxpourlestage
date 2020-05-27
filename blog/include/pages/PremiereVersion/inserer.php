<p> Titre :  <?php echo $_POST['titre'] ?>  </p> </br>
<p> l'article :  <?php echo $_POST['article'];  ?>  </p> </br> 
<?php 
$db = new Mypdo();
$managerarticle = new ArticleManager($db); 

	$article= new Article(
				array('titre' => $_POST['titre'],
					'article' => $_POST['article']
	)		
); 
$message= "ajout&eacute;"; 
$managerarticle->add($article); ?>
<?php echo "L'article : ".$_POST['titre'].", a  été ajouté "; ?>

<p> Titre :  <?php echo $_POST['titre'] ?>  </p> </br>
<p> l'article :  <?php echo $_POST['article'];  ?>  </p> </br> 
