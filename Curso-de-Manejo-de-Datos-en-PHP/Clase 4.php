<?php
//Conervir un string a minúsculas
$text = "PHP es UN LENGUAJE, año 2020, DE PROGRAMACIÓN";
echo strtolower($text);
echo "<br>";
echo strtoupper($text);
echo "<br>";
echo ucfirst($text);
echo "<br>";
echo ucwords($text);
echo "<br>";
echo lcfirst($text);
echo "<br>";

//Reemplazar
$slug = str_replace(' ', '-', $text);
echo strtolower($slug);
echo "<br>";

//Modificacion
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_BOTH);
echo "<br>";

//Quitar etiquetas html
$html = '<h1>Hola</h1>';
echo strip_tags($html);
echo "<br>";

echo strtoupper($text);
echo "<br>";
echo mb_strtoupper($text);
echo "<br>";

?>