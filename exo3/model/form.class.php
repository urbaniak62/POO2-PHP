<?php
require_once('../controleur/objectForm.php');
require_once('connection.class.php');
require_once("bdd.php");

class Form{
  private $_text;
  private $_submit;
  private $_fieldset;
  private $_form;



  public function __construct($form,$fieldset){
    $this->setForm($form);
    $this->setFieldset($fieldset);
  }
  public function setText($text){
    $this->_text="<br><label>message</label><input type='text'>";
  }
  public function setSubmit($submit){
    $this->_submit="<input type='submit'>";
  }
  public function setFieldset($fieldset){
    $this->_fieldset="<form methode ='post'><fieldset>fieldset";
  }
  public function setForm($form){
    $this->_form="</fieldset></form>";
  }
  public function getText(){
    return $this->_text;
  }
  public function getSubmit(){
    return $this->_submit;
  }
  public function getFieldset(){
    return $this->_fieldset;
  }
  public function getForm(){
    return $this->_form;
  }
  public function code(){
    echo $this->_form . " " . $this->_fieldset
    . " " . $this->_text . " " . $this->_submit;
  }
}
 ?>
