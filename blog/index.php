<?php
require_once("include/config.inc.php"); 
require_once("include/autoLoad.inc.php"); 
require_once("include/header.php"); 




$db= new Mypdo();
$articlemanager = new ArticleManager($db); 
$commentaireemanager = new CommentaireManager($db);

?>
<div id="corps">
<?php require_once("include/texte.inc.php");?>
</div>

