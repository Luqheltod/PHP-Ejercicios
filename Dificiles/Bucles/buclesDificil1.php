<?php

//Dado un array numerico de temperaturas, determinar cual es la mas cercana al 0 . Los valores pueden ser negativos y positivas
// si dos temperaturas coinciden , por ejemplo -4 y 4, se debe mostrar 4. Si no se da ninguna temperatura, mostrar 0.



$temperaturas =[1,3,-5,7,-1];


$negativos = array();
$positivos = array();
for ($i = 0; $i < count($temperaturas); $i++)
{
    $t = $temperaturas[$i];
    
    if($t<0) {
        $negativos[] = $t;
    } else{
        $positivos[] = $t;
    }
    
    
    
    
    $resultadoNegativo = max($negativos);
    $resultadoPositivo = min($positivos);
    
    if(empty($resultadoNegativo)){
        $result = $resultadoPositivo;
    }
    
    if(empty($resultadoPositivo)){
        $result = $resultadoNegativo;
    }
    
    if(!empty($resultadoNegativo) && !empty($resultadoPositivo)){
        
        if ( abs($resultadoNegativo) == abs($resultadoPositivo) ) {
            $result = $resultadoPositivo;
        } else if ( abs($resultadoNegativo) < $resultadoPositivo ) {
            
            $result = $resultadoNegativo;
            
        } else{
            
            $result = $resultadoPositivo;
        }
        
    }
    
    
}



if ($result == NULL){
    $result = 0 ;
}
echo("$result\n");
?>