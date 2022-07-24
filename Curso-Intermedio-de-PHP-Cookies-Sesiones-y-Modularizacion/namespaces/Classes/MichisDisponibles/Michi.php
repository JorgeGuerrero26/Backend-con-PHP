<?php

namespace MichisDisponibles;

class Michi{
    protected $name;
    protected $age;
    protected $birthday;

    function __construct($name, $age, $birthday){
        $this->name = $name;
        $this->age = $age;
        $this->birthday = $birthday;
    }

    function getName(){
        return $this->name;
    }

    function getAge(){
        return $this->age;
    }

    function getBirthday(){
        return $this->birthday;
    }

    function setName($name){
        $this->name = $name;
    }

    function setAge($age){
        $this->age = $age;
    }

    function setBirthday($birthday){
        $this->birthday = $birthday;
    }

    public function sayMeow(){
        return "Meow";
    }


  
}


?>