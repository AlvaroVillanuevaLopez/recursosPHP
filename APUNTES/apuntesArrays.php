<?php
/*
En PHP existen varios tipos de arrays,
arrays numericos;           $arrayNumerico=array(1,2,3,4,5) ->Sus indices son numeros emepzando en 0
arrays asociativos;         $arrayAsociativo=array('Juan' =>'Pedro',
                                                    'Carmen' =>'BBDD',
                                                    'Goyo' =>'Sistemas') ->Sus indices pueden ser cadenas
arrays escalares;           $arrayEscalar = array(1,1,1,1,1, 8=>1 ,4=>1,19, 3=>13) ->Se trata de una mezcla de los dos anteriores
Otro tipo de array es el array multidimensional, se trata de un array que contiene otros array.
$array1=array('ENERO', 'FEBRERO', 'MARZO');
$array2=array('ABRIL', 'MAYO', 'JUNIO');
$arrayM=array($array1, $array2);
Para recorrer estos array debemos usar una condicional en un doble bucle, ya sea for o foreach
for($x=0;$x<sizeof($arrayM);$x++){           ->Usamos sizeof($array) para saber la longitud del array
    if(is_array($arrayM[x])){                ->La funcion is_array($array) devolverá true si es un array y false en caso contrario
        for($y=0;$y<sizeof($arrayM[x]);$y++){
            echo $arrayM[x][y];
        }
    }
}
foreach($arrayM as $valor){                  ->Si podemos encontrarnos valores que no sean arrays, simplemente definiremos un if(){}else{}
    if(is_array($valor)){               
        foreach($valor as $valor1){
            echo $valor1;
        }
    }
}
    
Algunas funciones interesantes en arrays son:

count($array) | sizeof($array)  ->Devuleve el numero de elemetos del array

var_dump($array)                ->Imprime un array con todos los campos detallados, útil para comprobaciones

preg_grep($pattern, $array)     ->Devuelve un array con los elementos que cumplen la expresión regular de $pattern, 
                                debe ser delimitado por el carácter /; ["/pattern/"].

array_search(valor, $array)     ->Permite buscar un valor en un array y si lo encuentra devuelve su clave, sino devuelve false

array_count_values($array)      ->Cuenta las veces que aparece cada elemento de un array, pudiendolos devolver en un array

array_pop ($array)              ->Elimina el último elemento del array, si se imprime, se muestra el elemento, modifica el array original

array_push($array,$valor)       ->Inserta $valor al final del array, si se imprime se devuelve el numero de elementos del array, modifica el array original

array_shift ($array)            ->Elimina el primer elemento del array, si se imprime muestra dicho elemento, modifica el array original 
                                indexando las claves numéricas empezando desde cero (las claves asociativas no)

array_unshift ($array,$valor)   ->Inserta $valor al inicio del array, si se imprime se devuelve el numero de elementos del array, modifica el array original

array_merge($array1,$array2)    ->Une los arrays indicados, empezando por el primero. Elimina los elementos con claves duplicadas en arrays asociativos 
                                (dejando la última leída). En arrays numéricos se generan nuevas claves con array_merge_recursive($array1,$array2)           
                                combinamos los arrays sin perder elementos aunque los valored con claves duplicadas, serán otro array    

implode ($delimitador,$array)   ->Convierte un array en una cadena de caracteres separando sus elementos con la cadena indicada en $delimitador

array_reverse ($array [,true])  ->Devuelve el array invertido, si se define true, se conservan las claves

shuffle ($array)                ->Desordena  un array, modificándolo

sort ($array)                   ->Ordena un array de menor a mayor, o alfabéticamente (Se eliminan las claves alfanumericas por numeros).

rsort ($array)                  ->Ordena un array de mayor a menor (Se eliminan las claves alfanumericas por numeros).

asort ($array)                  ->Ordena un array manteniendo la correlación de los índices y los elementos

arsort ($array)                 ->Ordena un array, en orden inverso, manteniendo la correlación de los índices y los elementos 

ksort ($array)                  ->Ordena un array por clave, manteniendo la correlación entre la clave y los valores

krsort ($array)                 ->Ordena un array por clave, en orden inverso, manteniendo la correlación entre la clave y los valores
*/