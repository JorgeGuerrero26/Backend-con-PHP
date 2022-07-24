<?php

function get_country_name_switch($country){
    $name ="";
    switch ($country) {
        case 'COL':
            $name = "Colombia"; 
            break;
        case 'ESP':
            $name = "España"; 
            break;
        case 'MEX':
            $name = "Mexico"; 
            break;                
        default:
            $name = "Lo siento, no conozco ese pais";
            break;
    }

    return $name;
}
function get_country_name_match($country){
    return match($country) {
        "MX" => "México",
        "COL" => "Colombia",
        "EUA" => "Estados Unidos Americanos",
        default => "Lo siento, no conozco ese país"
    };


    
}

echo get_country_name_match("COL");
echo "\n";


?>