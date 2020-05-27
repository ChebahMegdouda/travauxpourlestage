<h1>liste tout les commentaires</h1>
<?php
      $db = new Mypdo();
      $managercommentaire = new CommentaireManager($db);
      echo $managercommentaire->GetNumberCom()." commentaires"; 
 ?>

 <table>
 	<tr>
            <th>Nom</th>
            <th>Commentaire</th>
      </tr>
      <?php $listeCom = $managercommentaire->getList();
      foreach ($listeCom as $Commentaire ) {?>
      <tr>
            <th> <?php echo "Nom : ".$Commentaire->getPseudo(); ?></th>
            <th> <?php echo $Commentaire->getTexte(); ?></th>
      </tr>
<?php } ?>
 <table>
