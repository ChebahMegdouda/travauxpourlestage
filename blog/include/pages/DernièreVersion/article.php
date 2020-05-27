<?php 
$db= new Mypdo(); 
$articlemanager = new ArticleManager($db); 

	if(empty($_POST["titre"]) || empty($_POST["categorie"]) || empty($_POST["auteur"]) ||empty($_POST["article"])){
			?>
		<form method="post" action="#" id="formCenter">
			<h1> ajouter un article </h1>
	  		<p> Titre : <input type="text" name="titre"> </p></br>
	  		<p> Catégorie : <input type="text" name="categorie" ></p> </br>
	  		<p> auteur : <input type="text" name ="auteur"> </p> </br>
	  		<p> Article : </br> <textarea type="text" name="article" rows="10" cols="100"> </textarea> </p> 
	  		<input type="submit" name="Valider" value="Valider" id="valider">
		</form> 
	
	<?php }

else {

		$date= date('Y-m-d H:i:s');
		$article= new Article(
				array(
					'titre' => $_POST['titre'],
					'auteur'=>$_POST['auteur'],
					'categorie'=>$_POST['categorie'],
					'article' => $_POST['article'],
					'date'=> $date
			 
	)		
);

$message= "ajout&eacute;"; 
$articlemanager->add($article);?>

<div id="reponse">
	<?php echo "L'article : ".$_POST['titre'].", a  été ajouté. "; ?>
</div>
<?php } ?>
