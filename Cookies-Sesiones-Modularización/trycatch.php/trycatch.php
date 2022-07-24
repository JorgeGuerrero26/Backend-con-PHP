<?php
try{
    $resultado = 10 / 0;
    echo $resultado;
}catch(Throwable $e){
    echo "Error: " . $e->getMessage();
}



?>