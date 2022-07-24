<?php
//require '../Reto-Ejercicio/User.php';
require 'Author.php';
require 'Category.php';
require 'Post.php';
//Herencia
$Author = new Author('Juan','example@gmail.com','123456','1990-01-01','1','2020-01-01','2020-01-01','2020-01-01');
echo $Author->crearPost();
echo $Author->crearArticulo();

$post = new Post();
$post->category = new Category();
echo $post->category->mostrarCategoria();
 

?>