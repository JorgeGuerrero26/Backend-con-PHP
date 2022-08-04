<?php

/* $user = array_key_exists('PHP_AUTH_USER',$_SERVER) ? $_SERVER['PHP_AUTH_USER'] : '';
$pwd = array_key_exists('PHP_AUTH_PW',$_SERVER) ? $_SERVER['PHP_AUTH_PW'] : '';

if ($user !== 'mauro' && $pwd !== '1234'){
    die;
}
 */

 /* if(
    !array_key_exists('HTTP_X_HASH',$_SERVER) ||
    !array_key_exists('HTTP_X_TIMESTAMP',$_SERVER) ||
    !array_key_exists('HTTP_X_UID',$_SERVER) 
 ){
    die;
 } */

 if(!array_key_exists('HTTP_X_TOKEN',$_SERVER)){
    die;
 }

 $url = 'http://localhost:80001';

 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_HTTPHEADER,[
        "X-Token: ".$_SERVER['HTTP_X_TOKEN'],
 ]);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,   true);

    $result = curl_exec($ch);

    if ($result === false) {
        die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    }   


list($hash,$uid,$timestamp) = [
    $_SERVER['HTTP_X_HASH'],
    $_SERVER['HTTP_X_UID'],
    $_SERVER['HTTP_X_TIMESTAMP'],
];

$secret = 'contrasena';

$newHash = sha1($uid.$timestamp.$secret);

if ($newHash !== $hash){
    die;    
}

$alloweedResourcesTypes = [
    'books',
    'authors',
    'geners',
];

$resourceType = $_GET['resourceType'];

if (!in_array($resourceType, $alloweedResourcesTypes)) {
    die('Resource type not allowed');
}

$books = [
    1=>[        
        'titulo' => 'El señor de los anillos',
        'id_autor' => 'J.R.R. Tolkien',
        'id_genero' => 'Fantasia',
    ],
    2=>[        
        'titulo' => 'El señor de los anillos 2',
        'id_autor' => 'J.R.R. Tolkien',
        'id_genero' => 'Fantasia',
    ],
    3=>[        
        'titulo' => 'El señor de los anillos 3',
        'id_autor' => 'J.R.R. Tolkien',
        'id_genero' => 'Fantasia',
    ],
  
];

header('Content-Type: application/json');


$resourceId = array_key_exists('resourceId', $_GET) ? $_GET['resourceId'] : null;
switch(strtoupper($_SERVER['REQUEST_METHOD'])){

    case 'GET':
        if(empty($resourceId)){
            echo json_encode($books);
        }else{
            echo json_encode($books[$resourceId]);
        }
        break;
    case 'POST':
        $json = file_get_contents('php://input');
        $books[] = json_decode($json, true);
        // echo array_keys( $books )[count($books) -1];
        echo json_encode($books);
        break;
    case 'PUT':
        if (!empty($resourceId) && array_key_exists($resourceId, $books)){ 
            $json = file_get_contents('php://input');
            $books [$resourceId] = json_decode($json, true);

            echo json_encode($books);
        }
        break;  
    case 'DELETE':
        if (!empty($resourceId) && array_key_exists($resourceId, $books)){ 
            $json = file_get_contents('php://input');
            unset($books[$resourceId]);          

            echo json_encode($books);
        }
        break;




}
