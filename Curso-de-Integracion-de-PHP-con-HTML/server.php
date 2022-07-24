<?php
$is_float = filter_var("Esto no es un numero", FILTER_VALIDATE_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);
var_dump($is_float);

$is_int = filter_var("Esto no es un numero", FILTER_VALIDATE_INT,FILTER_FLAG_ALLOW_THOUSAND);
var_dump($is_int);

$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);
var_dump($is_ip);

$is_url = filter_var("platzi.com", FILTER_VALIDATE_URL);
var_dump($is_url);

$is_email = filter_var("platzi.com", FILTER_VALIDATE_EMAIL);
var_dump($is_email);
?>