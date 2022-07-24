<?php
 echo 'un texto de de una linea
varias lineas
comilla simple \' backslash \\ continuar con mas texto
$variable <br>' ; 

/* $name = 'italo';
echo "Mi nombre es $name <br>"; */

$teacher = 'italo';
$italo = 'Profesor de PHP';
echo "Mi nombre es $teacher y soy ${$teacher} <br>";

function getTeacher(){
    return 'teacher';

}

$teacher = 'Italo';

echo "${getTeacher()}";


