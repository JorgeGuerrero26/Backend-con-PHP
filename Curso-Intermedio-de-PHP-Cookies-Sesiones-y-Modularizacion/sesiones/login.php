<?php

session_start();

$users = [
    array(
        "username" => "Jorge",
        "email" => "retaxito@noesmiemail.com"
    ),

    array(
        "username" => "MR. Michi",
        "email" => "michi@noesmiemail.com"
    ),



    

];

$user = $_GET["user"] ?? "";

echo "El usuario elegido es " . $users[$user]["username"];

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];