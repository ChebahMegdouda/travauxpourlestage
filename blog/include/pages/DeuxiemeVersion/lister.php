<h1>liste des Articles</h1>
<?php
 $db = new Mypdo();
$managerarticle = new ArticleManager($db);
if (!empty($_GET["id"])){ ?>
<?php 
      $id=$_GET['id'];  
      echo $managerarticle->getArticleLimite($id); ?>
<?php }else {
      $db = new Mypdo();
    $managerarticle = new ArticleManager($db);  
 $listeArticle = $managerarticle->getListOrderByDate(); //je fais appelle à une fonction qui liste les articles 
      foreach ($listeArticle as $Article ) {?>
      <ul>
            <li> <?php echo $Article->getTitre().' rédigé par :'.$Article->getAuteur().'id'.$Article->getId(); ?>  </li></br>
            <p> <?php echo  substr($Article->getArticle(), 0, 200) ;?></p></br> 
      </ul>
 <?php } ?>
<?php } ?>


      
 