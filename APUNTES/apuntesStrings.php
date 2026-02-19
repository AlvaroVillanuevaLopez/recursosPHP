<?php
/*
En PHP podemos procesar cadenas de muchas formas, para definirlas podemos usar "" (que soportan caracteres especiales, útil para HTML)
    o '' (que imprimen tal cual el cáracter)
Para concatenar se usa el . y podemos acceder a cualquier caracter de la cadena medainte [] entre un numero (como los arrays, se empieza en 0)
Según su método, podemos formatear la impresion (printf()) o no (echo) (print)
Algunas funciones útiles sobre cadenas son:

strstr ($string, $stBsq)        ->Devuelve desde la primera aparición de $stBsq incluida, hasta el fnal. Coincidencia total. Case-sensitve.

stristr ($string, $charBsq)     ->Lo mismo que strstr() pero no es Case-sensitve.

strrchr ($string, $charBsq)     ->Devuelve la ultima aparición de $charBsq incluido, hasta el fnal. Coincidencia total. Case-sensitve.

strlen ($string)                ->Devuelve la longitud de $string.

implode ($delimitador,$array)   ->Devuleve un string, resultado de unir todos los valores de $array, concatenados por $delimitador.

strtok ($string,$delimitador)   ->Divide una cadena en subcadenas separadas por $delimitador, solo devuelve la primera, usar en un bucle para obtener las demas.

preg_match($string, $variable)  ->Devuelve 1 (true) si la variable cumple con la expresión regular de $string, o 0 (false) si no se cumple.
                                debe ser delimitado por el carácter /; ["/string/"].

nl2br ($string)                 ->Todos los saltos de línea serán convertidos a etquetas <br>.

strtolower ($string)            ->Devuelve todos los caracteres $string en minuscula

strtoupper ($string)            ->Devuelve todos los caracteres $string en mayuscula

rtrim ($string,$listaChar)      ->Elimina los espacios en blanco y caracteres a la derecha de la cadena (“ “, ”\n”, ”\t”, ”\r”,...) Devuelve la cadena modifcada.
                                Permite incluir una $listaChar con los caracteres a eliminar del final.

ltrim ($string,$listaChar)      ->Elimina los espacios en blanco y caracteres a la izquierda de la cadena (“ “, ”\n”, ”\t”, ”\r”,...) Devuelve la cadena modifcada.
                                Permite incluir una $listaChar con los caracteres a eliminar del final.

trim ($string)                  ->Eliminan caracteres vacíos y en blaco por ambos lados de $string.               

substr ($string,$ini,$long)     ->Devuelve una subcadena de longitud $long a partir de la posición $ini de la cadena $string.

strcmp ($string1,$string2)      ->Compara dos cadenas, es Case-sensitve. Devuelve 
                                >0 si $string1>$string2 
                                <0 si $string1<$string2 
                                =0 si $string1==$string2 

strcaseccmp ($string1,$string2) ->Lo mismo que strcmp() pero sin ser Case-sensitve.

strncmp ($str1,$str2,$long)     ->Sólo compara los caracteres hasta la longitud $long
*/