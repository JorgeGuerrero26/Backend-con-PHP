<?php
setcookie(
  name: "subdomain_cookie",
    value: "Esta cookie solo está disponible en el subdominio",
    expires_or_options: time()+60*60*24,
    path: "/Cookies-Sesiones-Modularización/cookies/platzi/configuracion/",
    domain:"localhost",
    secure: false,
    httponly: true

);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";



?>