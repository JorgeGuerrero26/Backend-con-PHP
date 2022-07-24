<?php
/* $greet = function ($name){ //Varriable que requiere logica
    return "Hello $name";
};

echo $greet('World');
 */

 function greet(Closure $lang,$name){
    return $lang($name);
 }

 $es = function($name){
    return "Hola $name";
 };
 $en = function($name){
    return "Hello $name";
 };

 echo greet($es,'Linda');
 
echo '<br>';
