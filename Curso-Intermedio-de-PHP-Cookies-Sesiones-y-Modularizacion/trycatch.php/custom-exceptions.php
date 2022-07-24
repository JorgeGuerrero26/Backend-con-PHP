<?php

class MichiException extends Exception{
    public function getMeow(){
        return "Meow";
    }
}

class ConejiException extends Exception{
    public function getRabbut(){
        return "Conejo";
    }
}

try {
    $exception = readline("Excepcion a lanzar: ");
    if ($exception == "michi") 
        throw new MichiException("Meow");
     else 
        throw new ConejiException("Conejo");
    


    
} catch (MichiException $e) {
   echo $e->getMessage() . "\n";
   echo $e->getMeow();
}catch (ConejiException $e) {
   echo $e->getMessage() . "\n";
   echo $e->getRabbut();
   //Obtener linea de codigo
    echo $e->getLine();
}finally{
    echo "Se ha lanzado la excepcion";
}


?>