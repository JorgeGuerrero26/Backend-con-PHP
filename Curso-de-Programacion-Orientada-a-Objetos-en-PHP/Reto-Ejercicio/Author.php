<?php
require 'User.php';
class Author extends User{
    public function crearPost(){
        return 'Creando un post';
    }
    public function crearArticulo(){
        return 'Creando un articulo';
    }    
}


?>