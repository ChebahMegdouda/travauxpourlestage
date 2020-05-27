<h1>Articles</h1><?php
$db = new Mypdo();
$managerarticle = new ArticleManager($db);
$managercommentaire= new CommentaireManager($db);
$listeArt=$managerarticle->getListOrderByDate();

/* condition vérification passage id dans l'url, c'est à dire si un article a été séléctionné on affiche l'article+commentaires avec les boutons modif/suppression/ajout commentaire */
      if (!empty($_GET["id"])){ ?>
            <?php 
            $id=$_GET['id']; 
            $listeArticle = $managerarticle->getArticleById($id);?>
            <h2> <?php echo "Titre : ".$listeArticle->getTitre(); ?></h2>
            <?php echo nl2br($listeArticle->getArticle());?></br></br>
            <?php echo "redigé par : ".$listeArticle->getTitre(); ?> </br></br>
      <a href="index.php?page=2&id=<?php echo $id ?>"><input type="button" value="ajouter un commentaire"> </a>
	<a href="index.php?page=3&id=<?php echo $id ?>"><input type="button" value="modifier"> </a>
	<a href="index.php?page=4&id=<?php echo $id ?>"><input type="button" value="supprimer" ></a> </br></br>
      
            <?php echo $managercommentaire->GetNumberComById($id)." commentaires"; '</br>'?>
      <table>
 	      <tr>
                  <th>Nom</th>
                  <th>Commentaire</th>
             </tr>

      <?php $listeCom = $managercommentaire->getListById($id);
            foreach ($listeCom as $Commentaire ) {?>
                  <tr>
                        <th> <?php echo $Commentaire->getPseudo(); ?></th>
                        <th> <?php echo $Commentaire->getTexte(); ?></th>
                  </tr>
      <?php } ?>

      <table>
<?php } else{ ?> <!-- Si aucun article n'a été séléctionné on affiche tout les articles avec une liste déroulante permettant de filtrer la recherche par titre si on le souhaite -->

<!-- condition permettant de voir si un article est séléctionné depuis la liste déroulante-->
      <?php if (!isset($_POST['Valider']))
      {?>
            <form method="POST" action="#" id="formCenter">
                  <p> choisir un article par titre : </p>
                  <select name="Article1">

            <?php foreach($listeArt as $Article1){ ?>
                  <label> titre : </label>
                  <option value="<?php echo $Article1->getId(); ?>"><?php echo $Article1->getTitre();?></option>
            <?php } ?>
                  </select>
            <input type="submit" name="Valider" value="Valider"/></a> 

            </form>

<?php $listeArticle = $managerarticle->getListOrderByDate(); ?>

 <div id="Article">
      <ol> <?php 
            foreach ($listeArticle as $Article )
            {?>
      <div id="interieur">
            <li> <strong> l'article : </strong> <?php echo $Article->getTitre();?>  </li></br>
            <p> <?php echo  substr($Article->getArticle(), 0, 200) ;?> ... </br><a  href="index.php?page=0&id=<?php echo $Article->getId(); ?> "> <mark >lire la suite</a></mark></p>
            <?php echo ' rédigé par :'.$Article->getAuteur(); ?>
      </div>
      <?php } ?>
      </ol>
</div>
<?php }

/* si un article est séléctionné a partir de la liste déroulante, on affiche celui ci */
      if (isset($_POST['Article1'])) 
      {
  $listeArticle = $managerarticle->getArticleById($_POST['Article1']); ?>
 <div id="Article">
      <ol> 
            <div id="interieur">
            <li> <strong> l'article : </strong> <?php echo $listeArticle->getTitre();?>  </li></br>
            <p> <?php echo  substr($listeArticle->getArticle(), 0, 200) ;?> ... </br><a  href="index.php?page=0&id=<?php echo $listeArticle->getId(); ?> "> <mark >lire la suite</a></mark></p>
            <?php echo 'rédigé par :'.$listeArticle->getAuteur(); ?>
            </div>
      </ol>
</div>
 
 <?php} ?>

<?php }?>
<?php } ?>






      
 


      
 