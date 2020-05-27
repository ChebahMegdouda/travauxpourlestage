<?php
class CommentaireManager{
	public function __construct($db){
		$this->db = $db;
	}

public function add($Commentaire){
		$req = $this->db->prepare('INSERT INTO commentaire (id, pseudo, email, texte,  date, idArticle) VALUES (:id, :pseudo, :email, :texte,  :date, :idArticle )');
		$req->bindValue(':id',$Commentaire->getId(),PDO::PARAM_INT);
		$req->bindValue(':pseudo',$Commentaire->getPseudo(),PDO::PARAM_STR);
		$req->bindValue(':email',$Commentaire->getEmail(),PDO::PARAM_STR);
		$req->bindValue(':texte',$Commentaire->getTexte(),PDO::PARAM_STR);
		$req->bindValue(':date',$Commentaire->getDate(),PDO::PARAM_STR);
		$req->bindValue(':idArticle',$Commentaire->getIdArticle(),PDO::PARAM_INT);
		$req->execute();
	}
public function getList(){
		$listeCommentaire = array();
		$sql = 'SELECT pseudo, email, texte, date FROM commentaire';
		$req = $this->db->query($sql);    
		while($Commentaire = $req->fetch(PDO::FETCH_OBJ)){
			$listeCommentaire[] = new Commentaire($Commentaire);
		}
		return $listeCommentaire;
		$req->closeCursor();
	}
// PDO ne reconnait pas COUNT
public function GetNumberCom(){
	$req = 'SELECT * FROM commentaire';
	$res=$this->db->query($req)->rowCount(); 

	return $res; 	
}

public function GetNumberComById($id){
	$sql = $this->db->prepare('SELECT * FROM commentaire where idArticle=:id');
	$sql->bindValue(':id',$id,PDO::PARAM_INT);
	$sql->execute();
	$req= $sql->rowCount();
	return $req; 
}

public function getListById($id){
		$listeCommentaire = array();
		$sql = $this->db->prepare('SELECT * FROM commentaire where idArticle=:id');
		$sql->bindValue(':id',$id);
		$sql->execute();   
		while($Commentaire = $sql->fetch(PDO::FETCH_OBJ)){
			$listeCommentaire[] = new Commentaire($Commentaire);
		}
		return $listeCommentaire;
		$req->closeCursor();
	}


}
?>