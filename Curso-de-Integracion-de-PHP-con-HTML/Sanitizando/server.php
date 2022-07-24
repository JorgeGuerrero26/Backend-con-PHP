<?php


$username = $_POST['username'];
$name = $_POST['nombre'];
$email = $_POST['email'];
$age = $_POST['age'];

$htmlentities = htmlentities($name);
$addslashes = addslashes($username);
$onlywords  = preg_replace('/\d/', '', $username);
$onlynumbers  = preg_replace('/\D/', '', $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del usuario</title>
</head>
<body>
    <p>Username:</p>
    <p><?= $addslashes; ?></p>

    <p>Username sin numeros:</p>
    <p><?= $onlywords; ?></p>

    <p>Username sin letras:</p>
    <p><?= $onlynumbers; ?></p>

    <p>Nombre:</p>
    <p><?= $name; ?></p>

    
    <p>email:</p>
    <p><?= $email; ?></p>

    <p>Edad:</p>
    <p><?= $age; ?></p>

</body>
</html>