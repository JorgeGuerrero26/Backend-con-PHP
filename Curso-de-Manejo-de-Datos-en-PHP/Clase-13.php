<?php
/* $courses =[
    10 =>'PHP',
    100 =>'JavaScript',
    1000 =>'Python',
    100000 =>'C#',
    1000000 => 'C++'];

krsort($courses);

echo '<pre>';
//var_dump($courses);

echo '<br>';

var_dump(array_slice($courses,1));
echo '</pre>';
 */

$courses=['PHP','JavaScript','Python','C#','C++'];
echo '<pre>';
var_dump(array_chunk($courses,2)); //Divide el array en grupos de 2 elementos
echo '</pre>';

array_shift($courses); //Elimina el primer elemento del array
array_pop($courses); //Elimina el ultimo elemento del array
array_unshift($courses,'PHP'); //Agrega un elemento al principio del array
array_push($courses,'C#'); //Agrega un elemento al final del array
array_flip($courses); //Invertir el orden de los elementos del array




?>