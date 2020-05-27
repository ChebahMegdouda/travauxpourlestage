<?php 
$db= new Mypdo(); 
$articlemanager = new ArticleManager($db); 

if(empty($_POST["titre"])){

	?><h1>Mon Blog</h1></br>

<form method="post" action="#">

	  <p> Titre : <input type="text" name="titre" </p> </br>
	  <p> auteur : <input type="text" name ="auteur"> </br>
	  <p> Article : <textarea type="text" name="article" > </textarea>  </p> </br>
	  <input type="submit" name="Valider" value="Valider">

</form> 
	
<?php }
else {
	$date= date('Y-m-d H:i:s');
	$article= new Article(
				array(
					'titre' => $_POST['titre'],
					'article' => $_POST['article'],
					'auteur'=>$_POST['auteur'],
					'date'=> $date
	)		
); 
$message= "ajout&eacute;"; 
$articlemanager->add($article);
$article=$_POST['article'];
$ar= substr($article, 0, 10); ?>
<?php echo "L'article : ".$_POST['titre'].", a  été ajouté "; ?>


<p> Titre :  <?php echo $_POST['titre'];?>  </p> </br>
<p> Article :  <?php echo $ar."<a href=\"lister.php\"> lire la suite</a>  </p>";
} ?>