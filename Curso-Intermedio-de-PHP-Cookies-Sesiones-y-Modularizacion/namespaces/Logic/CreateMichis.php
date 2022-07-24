<?php
require("Classes/MichisDisponibles/Michi.php");
require("Classes/MichisAdoptados/Michi.php");

use MichisDisponibles\Michi;
use MichisAdoptados\Michi as MichisAdoptados;

$mrmichi = new Michi("Mr. Michi", "25", "now");
$michisancio = new Michi("Michi Sanción", "25", "now");




?>