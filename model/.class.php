<?php
require_once('../controleur/object.php')

class Chat{
  private $_nom;
  private $_age;
  private $_sexe;
  private $_couleur;

// constante sexe
  const SEXE_M='male';
  const SEXE_F='femele';

  // constante couleur
  const COULEUR_B='bleu';
  const COULEUR_BL='blanc';
  const COULEUR_R='rouge';

  public function __construct($nom,$age,$sexe,$couleur){
    $this->_nom($nom);
    $this->_age($age);
    $this->_sexe($sexe);
    $this->couleur($couleur);
  }
  // ------------setters
  // ----------------------
  public function setNom($nom){

  }
  public function setAge($age){

  }
  public function setSexe($sexe){

  }
  public function setCouleur($couleur){

  }
  // -------------getters
  // -----------------------------
  public function getNom(){
    return $this->$nom;
  }
  public function getAge(){
    return $this->$nom;
  }
  public function getSexe(){
    return $this->$nom;
  }
  public function getCouleur(){
    return $this->$nom;
  }
}

 ?>
