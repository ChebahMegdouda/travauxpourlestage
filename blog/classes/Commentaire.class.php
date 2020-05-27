<?php
class Commentaire{
  private $id; 
  private $pseudo;
	private $email; 
	private $texte;
  private $date;
  private $idArticle;
 

	public function __construct($valeurs = array()){
    if (!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut) {
        case 'id':
          $this->setId($valeur);
        break;
        case 'pseudo':
          $this->setPseudo($valeur);
        break;
        case 'email':
          $this->setEmail($valeur);
        break;
        case 'texte':
          $this->setTexte($valeur);
        break;
        case 'date':
          $this->setDate($valeur);
        break;
        case 'idArticle':
          $this->setIdArticle($valeur);
        break;
      }
    }
  }

 
  public function setId($id){
    $this->id = $id;
  }
  public function setIdArticle($idArticle){
    $this->idArticle = $idArticle;
  }

  public function setPseudo($pseudo){
    $this->pseudo = $pseudo;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function setTexte($texte){
    $this->texte = $texte;
  }

   public function setDate($date){
    $this->date = $date;
  }
  
  public function getTexte(){
    return $this->texte;
  }
  public function getPseudo(){
    return $this->pseudo;
  }
  public function getDate(){
    return $this->date;
  }
  public function getId(){
    return $this->id;
  }
  public function getEmail(){
    return $this->email;
  }

  public function getIdArticle(){
    return $this->idArticle;
  }



}