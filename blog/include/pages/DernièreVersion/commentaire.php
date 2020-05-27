<?php
$db = new Mypdo();
$managerarticle = new ArticleManager($db); 
$commentairemanager= new CommentaireManager($db);   
$id=$_GET['id'];
/* tout les champs doit etre rempli avant l'ajout d'un commentaire */
	if(empty($_POST["pseudo"]) || empty($_POST["email"]) || empty($_POST["texte"]))
		{?>
			<form method="POST" action="#" id="formCenter">
	  			<h1>Ajouter un commentaire</h1>
	  			<p> Nom : <input type="text" name="pseudo" value="pseudo" </p> </br>
	  			<p> Email : <input type="text" name ="email" value="email"> </br>
	  			<p> Commentaire : <textarea type="text" name="texte" value="texte"> </textarea>  </p> </br>
	  			<input type="submit" name="Envoyer" value="Envoyer">

			</form> 
	<?php } else {
		$date= date('Y-m-d H:i:s');
		$commentaire= new Commentaire(
				array(
					'pseudo' => $_POST['pseudo'],
					'email' => $_POST['email'],
					'texte'=>$_POST['texte'],
					'date'=> $date,
					'idArticle'=>$id
	)		
); 
$message= "ajout&eacute;";  
$commentairemanager->add($commentaire);  ?>
<div id="reponse">
	<?php	echo "Le commentaire a  été ajouté ".'</br>' ?>
	<a href="index.php?page=0&id=<?php echo $id ?>"> retour à l'article </a>
</div>
	<?php }  ?>
