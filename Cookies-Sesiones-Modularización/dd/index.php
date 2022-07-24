<?php

require ("vendor/autoload.php");

class Michi{
    protected $patas = [];
    protected $color;

    function __construct(string $color){
        $this->color = $color;

        for ($i=0; $i < 4; $i++) { 
            $this->patas[$i] = new PataDeMichi();
        }
    }
}

class PataDeMichi{
    protected $nails = 4;
    protected $decription = "Tiana manchitas";
    public function ger_decription() : string{
        return $this->decription;
    }
}

$casa_de_michis = array(
    "nombre" => "Casa de Michis",
    "ubicacion" =>  [
        "calle" => "Calle de los Michis",
        "numero" => 123
    ],    
    "numero_de_michis" => 3,
    "michis" => [
        new Michi("rojo"),
        new Michi("azul"),
        new Michi("verde")
    ]
);

/* echo "<pre>";
var_dump($casa_de_michis);
echo "</pre>"; */

dd($casa_de_michis);

?>