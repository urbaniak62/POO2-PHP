<?php

require_once('../model/connection.class.php');
require_once('../model/form.class.php');
require_once('../model/bdd.php');


// connection Bdd
// ---------------
// $manager= new Bdd('bdd');
// -----------------object formulaire
// -----------------------------------
$tab=new Form("form","fieldset");
$tab->setText("textaera");
$tab->setSubmit("submit");
$tab->code();

var_dump($tab);
?>
