<?php

include 'greet.php'; //El inclide no detiene el sistema, solo lo muestra en pantalla
require 'greet.php'; //El require detiene el sistema, si no encuentra el archivo, sale del sistema
require_once 'greet.php'; //El require_once solo incluye el archivo una vez
echo greet('World','Hello');


?>