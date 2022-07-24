<?php
try {
    $resultado = 20/0;
    echo $resultado;
} catch (\Throwable $e) {
    //echo $e->getMessage();
    //echo $e->getCode();
    //echo $e->getFile();
    //echo $e->getLine();

    echo "<pre>";
    var_dump($e->getTrace());
    echo "</pre>";

}



?>