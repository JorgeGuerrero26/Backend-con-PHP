<?php

require 'interface/Person.php';

class Admin implements Person{
  public $name;
  public function __construct($name){
    $this->name = $name;
  }
    public function getName(){
        return $this->name;
    }
}

$admin = new Admin('Lynda');
echo $admin->getName();

?>