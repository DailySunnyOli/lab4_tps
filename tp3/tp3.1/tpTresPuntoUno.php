<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3.1</title>
    <style>
            body{
                    background-color:black;
                    color:white;
                    font-size: 20px;
                }
    </style>
</head>
<body>

<?php

$cantidadValores;
$keys= array(); //arreglo con valores random
$message;
$variable_auxiliar;
function imprimir_Array($array){
    foreach($array as $key => $value){
        echo "[" , $key , "] - " , $value , '<br>'; 
    }
}
//EJERCICIO 1 =*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
    $name = 'juan,maria,pepe,andrea,jorgelina,cecilia'; //array dado en la guía
   //a.- convertir string a array
    $array = explode(',', $name); //transforma string en array- recibe indicador de corte y array
    
    //b.- ordenar alfabéticamente
    sort($array);

    function upperFirstCase_Array($array){

        foreach($array as $key=> $value){ //lo recorro

            //c.- cambiar a mayúscula la primera letra
            $array[$key] = ucfirst($value); //transforma en Mayuscula la primera letra
        }
        return $array;
    }
    
    $array = upperFirstCase_Array($array);

    //d.- obtener la cantidad de valores

    function cargarValoresRandom_Array($array, $keys){
        $i = 0;
        $cantidadValores = count($array);
        while ($i < $cantidadValores){
        $keys[]= rand(0, 250);
        $i++;
        }

        return $keys;
    }
    
    $keys= cargarValoresRandom_Array($array, $keys);

    sort($keys);

    

    echo "Arreglo ordenado ",'<br>';
    imprimir_Array($array);
    echo '<br>';
    echo "Arreglo de claves",'<br>';
    imprimir_Array($keys);

    //e.- imprimir arreglo fusionado
    echo '<br>';
    echo "Arreglo de claves",'<br>';
    $keys = array_combine($keys, $array);

    imprimir_Array($keys);

    
    //EJERCICIO 2 =*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
    function buscarValor_Array($valor, $array){
        $flag = array_search($valor, $array); //busca la AGUJA en el PAJAR- retorna la primera key correspondiente al valor encontrado
        
        $message = $flag!= false? "Existe":"NO existe";

        //si flag es distinto de false, pongo "Existe", si no "No existe"- lo alojo en Mensaje

        return $message;
    }

    
    echo '<br>';
    $variable_aux = "Cecilia";
    $message = buscarValor_Array($variable_aux, $array);
    echo $message, " el nombre ", $variable_aux, " en el arreglo";
    

    echo '<br>';
    $variable_aux = "Lucrecia";
    $message = buscarValor_Array($variable_aux, $array);
    echo $message, " el nombre ", $variable_aux, " en el arreglo";
   
     //EJERCICIO 3 =*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*
     function buscarClave_Array($key, $array){
        $flag = array_search($valor, $array); //busca la AGUJA en el PAJAR- retorna la primera key correspondiente al valor encontrado
        
        $message = $flag!= false? "Existe":"NO existe";

        //si flag es distinto de false, pongo "Existe", si no "No existe"- lo alojo en Mensaje

        return $message;
    }

?>
</body>
</html>