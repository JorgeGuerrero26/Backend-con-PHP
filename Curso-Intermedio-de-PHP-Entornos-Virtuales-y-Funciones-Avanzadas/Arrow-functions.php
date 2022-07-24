<?php
/* $cajero = 0;
$add_cajero = fn($add) => $cajero += $add;
echo $add_cajero(5); */


$edades = [13,14,35];
/* $mayores_de_edad = array_filter($edades, function($current){
    return $current >= 18;
}); */
$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);

print_r($mayores_de_edad);


?>