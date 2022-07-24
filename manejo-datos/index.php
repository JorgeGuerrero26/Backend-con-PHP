<?php
/* $fronend =[
    'frontend1'=>'PHP',
    'frontend2'=>'JavaScript'];
$backend= [
    'backend1'=>'Python',
    'backend2'=>'C#',
    'backend3'=>'C++'];

echo '<pre>';
var_dump($fronend+$backend); //Union de dos arrays
echo '</pre>';

$fronend1 = ['PHP','JavaScript'];
$backend1 = ['Python','C#','C++'];

echo '<pre>';
var_dump(array_merge($fronend1,$backend1)); //Unir dos arrays
echo '</pre>'; */

$courses =['PHP','JavaScript'];
$categories = ['frontend','backend'];

echo '<pre>';
var_dump(array_combine($categories,$courses)); //Combina los arrays






?>