<?php
$courses =[
    'PHP'=>'PHP',
    'JavaScript'=>'JavaScript',
    'Python'=>'Python',
    'C#'=>'C#',
    'C++'=>'C++'];


foreach($courses as $course){
    echo "$course <br>";
}
echo '<br>';

function upper($course,$key){
    echo strtoupper($course) .": $key <br>";
}

array_walk($courses,'upper');


echo '<pre>';
var_dump($courses);
echo '</pre>';
echo '<br>';

echo (bool) array_key_exists('PHP',$courses);
echo in_array('PHP',$courses);
array_keys($courses);
array_values($courses);
