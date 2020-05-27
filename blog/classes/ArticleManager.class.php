<?php
class ArticleManager{
	public function __construct($db){
		$this->db = $db;
	}

public function add($Article){
		$req = $this->db->prepare('INSERT INTO article (idArticle, titre, categorie, article, auteur,laDate) VALUES (:idArticle, :titre, :categorie, :article, :auteur,  :laDate )');
		$req->bindValue(':idArticle',$Article->getId(),PDO::PARAM_INT);
		$req->bindValue(':titre',$Article->getTitre(),PDO::PARAM_STR);
		$req->bindValue(':categorie',$Article->getCategorie(),PDO::PARAM_STR);
		$req->bindValue(':article',$Article->getArticle(),PDO::PARAM_STR);
		$req->bindValue(':auteur',$Article->getAuteur(),PDO::PARAM_STR);
		$req->bindValue(':laDate',$Article->getDate(),PDO::PARAM_STR);
		$req->execute();
	}


public function getListOrderByDate(){
		$listeArticle = array();
		$sql = 'SELECT idArticle, titre, categorie, article, auteur, laDate FROM article ORDER BY laDate';
		$req = $this->db->query($sql);    
		while($Article = $req->fetch(PDO::FETCH_OBJ)){
			$listeArticle[] = new Article($Article);
		}
		return $listeArticle;
		$req->closeCursor();
	}

public function getArticleLimite($id){
		$sql = $this->db->prepare('SELECT article FROM article where idArticle=:id');
		$sql->bindValue(':id',$id);
		$sql->execute();
		$Article = $sql->fetch(PDO::FETCH_OBJ);
			
			$Article = new Article($Article);
			return $Article->getArticle();
		 
	}
public function getArticleById($id){
		$sql = $this->db->prepare('SELECT * FROM article where idArticle=:id');
		$sql->bindValue(':id',$id);
		$sql->execute();
		$Article = $sql->fetch(PDO::FETCH_OBJ);
			
			$Article = new Article($Article);
			return $Article ;
		 
	}
public function getList(){
		$listeArticle = array();
		$sql = 'SELECT titre, article, auteur, laDate FROM article';
		$req = $this->db->query($sql);    
		while($Article = $req->fetch(PDO::FETCH_OBJ)){
			$listeArticle[] = new Article($Article);
		}
		return $listeArticle;
		$req->closeCursor();
	}
public function Delete($id){
	$sql = $this->db->prepare('DELETE  FROM article where idArticle=:id');
		$sql->bindValue(':id',$id);
		$sql->execute();
		
}
public function Update($id, $article){
	$sql = $this->db->prepare('UPDATE article set article=:article where  idArticle=:id');
		$sql->bindValue(':id',$id);
		$sql->bindValue(':article',$article);
		$sql->execute();
		
}
}

?>