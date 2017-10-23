<?php
require_once('connection.class.php');
  class Bdd
  {
    public $_bdd;


// -------constructeur

    public function __construct($bdd){
        $this->_bdd=$bdd;

}
// ---------------INSERTIoN dans base de donné

    public function insertion(chat $insert){
      $req=connection()-> prepare('INSERT INTO chat(nom,age,sexe,couleur)
        VALUES(:nom,:age,:sexe,:couleur)');

        $req->execute (array(
  'nom'=>$insert->getNom(),
  'age'=>$insert->getAge(),
  'sexe'=>$insert->getSexe(),
  'couleur'=>$insert->getCouleur()
  ));
}
// ---------------RECUPERATION des données
// ----------------------------------------
public function recup(chat $recup){
  $req=connection()->query('SELECT * FROM chat');
  $donnees=$req->fetch();
}
}
?>
