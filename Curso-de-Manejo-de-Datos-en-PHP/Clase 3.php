<?php
$data = 'Estudio PHP';
echo $data[0];
echo "<br>";

$post = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla ex iusto aspernatur nobis consequatur, libero nemo assumenda nesciunt, quam totam praesentium alias dicta blanditiis? Consequatur impedit maiores qui nostrum praesentium!";
$extract = substr($post, 0, 20);
echo "$extract ...[ver más] <br>";
//Pasar un string a un array
$data = 'javascript,php,laravel';
$tags = explode(',', $data);
echo "<pre>";
var_dump($tags);
echo "</pre>";

//Pasar un array a un string
$courses = ['javascript', 'php', 'laravel'];
$data = implode(',', $courses);
echo $data;

$course = "    Curso de PHP     ";
echo "<pre>";
echo trim($course);


?>