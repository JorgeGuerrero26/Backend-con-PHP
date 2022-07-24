<?php
$courses =['PHP','JavaScript'];
$wishes = ['JavaScript','Python','C#','C++'];

echo '<pre>';
var_dump(array_diff($wishes,$courses)); 
echo '</pre>';
echo '<br>';


$arrayA = [1,2,3,4,5];
$arrayB = [3,4,5,6,7];

echo '<pre>';
var_dump(array_diff($arrayA,$arrayB));
echo '</pre>';
echo '<br>';

?>