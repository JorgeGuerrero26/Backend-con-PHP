<?php

//Establecer la zona horaria
/* date_default_timezone_set("America/Argentina/Buenos_Aires");

//Obtener la fecha actual
 $now = date("Y-m-d H:i:s"); */


//strtotime
//echo strtotime($now);
//echo strtotime("17 april 2020");
//echo strtotime("+1 day");
//echo strtotime("next Monday");
//echo strtotime("last Wednesday");

/* $unix_time_last_wednesday = strtotime("last Wednesday");
echo date("Y-m-d H:i:s", $unix_time_last_wednesday); */

//Fechas inmutables
//$date_inmutable = new DateTimeImmutable();

//Diferencia de tiempo
/* $today = new DateTime();
$mrmichi_birth =  new DateTime("2020-03-25");
$interval = $mrmichi_birth->diff($today);
echo $interval->format("%y años, %m meses, %d días"); */

// Crear desde un formato dado
/* $date = DateTime::createFromFormat("l j F y", "Sunday 17 April 2022");
echo $date->format("Y-m-d H:i:s"); */

//Modificar una fecha
$date = new DateTime();
$date->modify("+1 day");
echo $date->format("Y-m-d H:i:s");

?>