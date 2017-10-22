<?php
class Clio{

  private $_couleur;
  private $_porte;
  private $_prix;

  // --------constante ATTRIBU porte
  // --------------------------------
    const PORTE3=3;
    const PORTE5=5;

  // --------constante ATTRIBU prix
  // ------------------------------
    const PRIX=1500;


  // --------constructeur
// --------------------------------

public function __construct ($couleur,$porte,$prix){
  $this->setCouleur($couleur);
  $this->setPorte($porte);
  $this->setPrix($prix);

}

// --------------Mutatteur
// -----------------------------
  public function setCouleur($couleur){
     $this->_couleur=$couleur;
  }
  public function setPorte($porte){
    if (in_array($porte, [self::PORTE3, self::PORTE5]))
    {
      $this->_porte=$porte;
    }
  }

  public function setPrix($prix){
    if (in_array($prix, [self::PRIX])){
    $this->_prix=$prix;
    }

  }
  public function getCouleur(){
    return $this->_couleur;
  }
  public function getPorte(){
    return $this->_porte;
  }
  public function getPrix(){
    return $this->_prix;
  }
  public function affiche(){
    echo "la couleur est : " . $this->_couleur
    . " il y a : " . $this->_porte . " portes <br> son prix est de : "
    . $this->_prix . " euros.";
  }
}
$clio_rouge = new Clio ("rouge",Clio::PORTE3,Clio::PRIX);
$clio_rouge->affiche();
var_dump($clio_rouge);
$clio_verte = new Clio ("verte",Clio::PORTE5,Clio::PRIX);
$clio_verte->affiche();
var_dump($clio_verte);
 ?>
