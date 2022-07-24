<?php

try {
    $pet = readline("¿Qué animal quieres adoptar? ");
    if ($pet != "michi" && $pet != "conejo") {
        throw new Exception("No se puede adoptar ese animal");
    }
    echo "¡Gracias por adoptar un $pet!";

} catch (\Throwable $e) {
   echo $e->getMessage();
}

?>