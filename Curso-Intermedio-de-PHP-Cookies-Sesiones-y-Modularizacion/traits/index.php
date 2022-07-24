<?php
require("vendor/autoload.php");

use App\Classes\Perritu;
use App\Classes\Michi;

$mrmichi = new Michi();
$firulais = new Perritu();


echo $firulais->play() . "<br>";
echo $mrmichi->play() . "<br>";




?>