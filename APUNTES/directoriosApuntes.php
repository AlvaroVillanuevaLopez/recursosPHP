<?php
/*
Un directorio es una agrupacción de ficheros u otros directorios para mentener un orden.
En un directorio nos podemos encontrar, ficheros u otros directorios.
Usamos getcwd() para obtener el directorio actual (la ruta) o el que pasemos por parametro, en un string.
*/
echo getcwd();
/*
Con chdir() cambiamos al directorio, pasado por parametro como string, siempre y cuando exista en la misma ruta.
No muestra el directorio resultado, para eso usamos getcwd().
Con chdir() solo cambiamos de directorio a nivel servidor (PHP) para el navegador siempre se está en el mismo
directorio del fichero que esta abierto
*/
echo "<br>";
chdir("../");
echo getcwd();
/*
Con scardir() obtenemos el contenido del directorio, pasado por parametro como string, en forma de array.
El array devuelto es un array numerico con el nombre de los ficheros y/o directorios que se encuentren.
Se incluyen las ordenes "." (directorio actual) y ".." (directorio padre), es recomendado borrar estos valores
*/
echo "<br>";
$arrayContenido = scandir(getcwd());
var_dump($arrayContenido);
