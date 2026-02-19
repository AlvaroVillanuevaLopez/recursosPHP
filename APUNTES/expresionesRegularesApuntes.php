<?php
/*
Una expresión regular es un string que define un patrón. Normalmente se usan como condicionante para buscar elementos en arrays 
o validar campos de texto. 
Lo más habitual es usarlas en el $patron de las funciones:
    preg_grep($patron, $array)          ->Devuelve un array con los valores que coinciden con $patron, mantiene las claves originales de $array
    preg_match($patron, $string)        ->Devuelve 1 (true) si $string coincide con $patron, ó 0 (false) si no coincide
para comprobar qué cadenas cumplen el patrón en $array

    El caracter . representa cualquier carácter pero solo UNO, A-Z, a-z, 0-9 o cualquier otro símbolo

    El carácter ^ indica cómo debe de ser el inicio de la cadena 

    El carácter $ indica cómo debe de ser el final de la cadena 

    El carácter + determina que cierto elemento va a repetirse UNA o MÁS veces

    El carácter * determina que cierto elemento va a repetirse CERO o MÁS veces

    El carácter ? determina que cierto elemento puede que aparezca UNA vez o NINGUNA

    Los carácteres {} se usan para definir, con un número, la cantidad de veces que va a repetirse un elemento 

    Los caracteres [] permiten especificar el rango de caracteres válidos a comparar. Pueden ser [ao] (solo ao) ó [a-o] (de la a a la o)
        Normalmente se suelen concatenar varios [], dentro de estos últimos, el símbolo ^ funciona como NEGADOR

    Los carácteres () sirven para agrupar un subconjunto de caracteres

    El caracter | lo usamos para alternar entre varias opciones
        Si queremos utilizar caracteres especiales en el patrón, sin que se interprete como metacaracter,
        tendremos que “escaparlo” Para esto usamos \ justo antes del caracter que queremos escribir
*/