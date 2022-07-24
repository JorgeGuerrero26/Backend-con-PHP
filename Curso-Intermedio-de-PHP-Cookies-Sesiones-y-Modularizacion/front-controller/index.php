<?php

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
        require("pages/home.php");
        break;
    case 'contact':
        require("pages/contact.php");
        break;
    case 'services':
        require("pages/services.php");
        break;
    deafult:
        require("pages/404.php");
        break;
}


?>