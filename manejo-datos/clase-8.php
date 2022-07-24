<?php
/* function greet($name){
    return "Hello $name";
}

echo greet('World');
 */
//Referencias
$course = 'PHP';
function path(&$course){
    $course = 'Laravel';
    echo $course;
}

path($course);
echo '<br>';
echo $course;
echo '<br>';

function greet($name = 'World'){
    return "Hello $name";
}   

echo greet();
echo '<br>';
echo greet('Abel');




?>