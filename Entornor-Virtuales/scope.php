<?php

/* $outside_variable = "Esto es una variable global";

function my_function(){
    global $outside_variable;
    echo $outside_variable;
    
}

my_function(); */

$outside_variable = "Esto es una variable global";

function my_function(){    
    echo $GLOBALS['outside_variable'];
    
}

my_function();
?>