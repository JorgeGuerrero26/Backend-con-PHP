<?php
/* function sumar_edades($edades=array(13,14,35)){
    return array_sum($edades);
}

echo sumar_edades();

echo "\n";
 */

/*  function multiplicar(   $n1=1,
 $n2=2,
 $n3=3,){
    return $n1*$n2*$n3;     
 }

 echo multiplicar();
 echo "\n";
 */

/* class UnaClaseRandom {}
class OtraClaseRandom {}

// Parámetros por defecto con clases.
function receive_a_class($class = new UnaClaseRandom) {
    echo $class::class;
} */
//Incorrecto
/* function suma($n1=2,$n2){
    return $n1 + $n2;
} */
//Correcto
/* function suma($n2,$n1=2){
    return $n1 + $n2;
} */

echo suma(8,7);
echo "\n";

?>