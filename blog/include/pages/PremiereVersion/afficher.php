<h1>liste des Articles</h1>
<?php
      $db = new Mypdo();
      $managerarticle = new ArticleManager($db); ?>


      <?php $listeArticle = $managerarticle->getList();
      foreach ($listeArticle as $Article ) {?>
      <ul>
            <li> <?php echo "Titre : ".$Article->getTitre().' rédigé par :'.$Article->getAuteur(); ?></li></br>
            <p> <?php echo $Article->getArticle(); ?></p></br>
             <?php echo "____________________________________"; ?>
      </ul>
<?php } ?>
