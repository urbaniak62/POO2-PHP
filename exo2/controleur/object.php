<?php

require_once('../model/connection.class.php');
require_once('../model/Chat.class.php');
require_once('../model/bdd.class.php');


// connection Bdd
// ---------------

$manager= new Bdd('bdd');

// insertion Bdd
// -----------------------

if (isset ($_POST['nom']) && isset($_POST['age']) && isset($_POST['sexe']) && isset($_POST['couleur'])) {
  $chat2=new Chat ($_POST['nom'],$_POST['age'],$_POST['sexe'],$_POST['couleur']);
  $manager->insertion($chat2);
  // var_dump($chat2);
  // var_dump($manager);
}

$chats = $manager->recup();

require_once('../vue/index.php');
// object chat miaou
// ------------------
// $miaou = new Chat ("grosminez",5,Chat::SEXE_M,Chat::COULEUR_R );
// // affichage
// // ----------------
// $miaou->affiche();
// var_dump($miaou);
// // insertion Bdd
// // -----------------
// $manager->insertion($miaou);
// $manager->recup($miaou);
// // ---objet chat mickey
// // ---------------------
// $mickey=new Chat ("mickey",35,Chat::SEXE_M,Chat::COULEUR_BL);
// $mickey->affiche();
// var_dump($mickey);
// $manager->insertion($mickey);
// $manager->recup($mickey);

// include('../vue/index.php');
 ?>
