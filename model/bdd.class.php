<?php
require_once('connection.class.php');
// require_once('../vue/index.php');
  class Bdd
  {
    public $_bdd;


// -------constructeur

    public function __construct($bdd){
        $this->_bdd=$bdd;

}
// ---------------INSERTION dans base de donné

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
public function recup(){
  $req=connection()->query('SELECT * FROM chat');

  $chats=$req->fetchAll(PDO::FETCH_ASSOC);
  return $chats;

  }
}
