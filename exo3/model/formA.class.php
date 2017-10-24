<?php
require_once('../controleur/objetFormA.php');


class FormA extends Form{
  private $_boutonRdo;
  private $_boutonCb;

// constructeur
// -----------------------

  public function __construct($boutonRdo,$boutonCb){
    $this->setBoutonRdo($boutonRdo);
    $this->setBoutonCb($boutonCb);
  }

// setters
// -----------------------

public function setBoutonRdo($boutonRdo){
  $this->_boutonRdo="<INPUT type= 'radio'  checked> check ça";
}
public function setBoutonCb($boutonCb){
  $this->_boutonCb="<input type='checkbox'> check ça aussi";
}
// getters
// -----------------------------
public function getBoutonRdo(){
  return $this->_boutonRdo;
}
public function getBoutonCb(){
  return $this->_boutonCb;
}
public function affiche(){
  $this->code();
  echo $this->_boutonRdo . " " . $this->_boutonCb;
}
}
 ?>
