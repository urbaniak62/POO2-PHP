<?php
require_once('../controleur/object.php');
require_once('connection.class.php');
require_once("bdd.class.php");


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

  // -----constructeur

  public function __construct($nom,$age,$sexe,$couleur){
    $this->_nom=$nom;
    $this->_age=$age;
    $this->_sexe=$sexe;
    $this->_couleur=$couleur;
  }
  // ------------setters
  // ----------------------

  public function setNom($nom){
    if (strlen($nom>=10)) {
      echo "ce chat à un nom trop long";
    }
    $this->_nom=$nom;
    }

  public function setAge($age){
    if ($age >=30) {
      echo "ce chat est trop vieux";
    }
    else{
    $this->_age=$age;
    }
  }
  public function setSexe($sexe){
    if (in_array($sexe, [self::SEXE_M, self::SEXE_F])){
      $this->_sexe=$sexe;
    }
  }
  public function setCouleur($couleur){
    if (in_array($couleur, [sel::COULEUR_B, self::COULEUR_BL, self::COULEUR_R])) {
      $this->_couleur=$couleur;
    }
  }
  // -------------getters
  // -----------------------------
  public function getNom(){
    return $this->_nom;
  }
  public function getAge(){
    return $this->_age;
  }
  public function getSexe(){
    return $this->_sexe;
  }
  public function getCouleur(){
    return $this->_couleur;
  }
  // ------function affiche
  // -----------------------
  public function affiche(){
    echo $this->_nom . " " . $this->_age . " "
    . $this->_sexe . " " . $this->_couleur;
  }
}

 ?>
