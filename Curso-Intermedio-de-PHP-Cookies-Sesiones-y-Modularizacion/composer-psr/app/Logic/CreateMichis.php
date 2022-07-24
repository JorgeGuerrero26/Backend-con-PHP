<?php

use App\Classes\Michi;
use App\Classes\MichisAdoptados;

function createMichis(){
    $mr_michi = new Michi("Mr. Michi", "1", "1/1/2000");
    $mr_michi_adopted = new MichisAdoptados("Mr. Michi", "1/1/2000", "Juancito");
    echo $mr_michi->sayMeow() . "Me adoptó {$mr_michi_adopted->getAdoptedBy()} el {$mr_michi_adopted->getDateAdopted()}" ;
}

?>