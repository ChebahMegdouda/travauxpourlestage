<?php
class Article{
  private $idArticle; 
	private $titre; 
  private $categorie;
	private $article;
  private $auteur;
  private $date;

 

	public function __construct($valeurs = array()){
    if (!empty($valeurs)){
      $this->affecte($valeurs);
    }
  }

public function affecte($donnees){
    foreach($donnees as $attribut => $valeur){
      switch ($attribut) {
        case 'idArticle':
          $this->setId($valeur);
        break;
        case 'titre':
          $this->setTitre($valeur);
        break;
        case 'categorie':
          $this->setCategorie($valeur);
        break;
        case 'article':
          $this->setArticle($valeur);
        break;
        case 'auteur':
          $this->setAuteur($valeur);
        break;
        case 'date':
          $this->setDate($valeur);
        break;
       
      }
    }
  }

  public function setTitre($titre){
    $this->titre = $titre;
  }


  public function setCategorie($categorie){
    $this->categorie = $categorie;
  }


  public function setId($id){
    $this->idArticle = $id;
  }

  public function setAuteur($auteur){
    $this->auteur = $auteur;
  }

  public function setDate($date){
    $this->date = $date;
  }

  public function setArticle($article){
    $this->article = $article;
  }

  
  public function getTitre(){
    return $this->titre;
  }
  public function getArticle(){
    return $this->article;
  }
  public function getDate(){
    return $this->date;
  }
  public function getId(){
    return $this->idArticle;
  }
  public function getCategorie(){
    return $this->categorie;
  }
  
  public function getAuteur(){
    return $this->auteur;
  }



}