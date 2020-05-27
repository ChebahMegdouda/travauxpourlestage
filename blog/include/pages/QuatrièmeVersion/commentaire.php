<?php 
$db= new Mypdo(); 
$commentairemanager= new CommentaireManager($db); 


if(empty($_POST["pseudo"]) || empty($_POST["email"]) || empty($_POST["texte"])){

	?><h1>Envoyer un commentaire</h1></br>

<form method="POST" action="#">

	  <p> Nom : <input type="text" name="pseudo" value="pseudo" </p> </br>
	  <p> Email : <input type="text" name ="email" value="email"> </br>
	  <p> Commentaire : <textarea type="text" name="texte" value="texte"> </textarea>  </p> </br>
	  <input type="submit" name="Envoyer" value="Envoyer">

</form> 
	
<?php }
else {
	$date= date('Y-m-d H:i:s');
	$commentaire= new Commentaire(
				array(
					'pseudo' => $_POST['pseudo'],
					'email' => $_POST['email'],
					'texte'=>$_POST['texte'],
					'date'=> $date
	)		
); 
$message= "ajout&eacute;"; 
$commentairemanager->add($commentaire); 
echo "Le commentaire a  été ajouté "; 

} ?>