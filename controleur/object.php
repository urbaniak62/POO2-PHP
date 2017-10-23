<?php

require_once('../model/connection.class.php');
require_once('../model/Chat.class.php');
require_once('../model/bdd.class.php');

$manager= new Bdd('bdd');
$miaou = new Chat ("grosminez",5,Chat::SEXE_M,Chat::COULEUR_R );
$miaou->affiche();
var_dump($miaou);
$manager->insertion($miaou);
 ?>
