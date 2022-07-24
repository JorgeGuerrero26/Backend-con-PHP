<?php

namespace App\Classes;

class MichisAdoptados{
    protected $name;
    protected $date_adopted;
    protected $adopted_by;

    function  __construct($name, $date_adopted, $adopted_by){
        $this->name = $name;
        $this->date_adopted = $date_adopted;
        $this->adopted_by = $adopted_by;
    }

    function getName(){
        return $this->name;
    }

    function getDateAdopted(){
        return $this->date_adopted;
    }

    function getAdoptedBy(){
        return $this->adopted_by;
    }

    

        
    
}
?>