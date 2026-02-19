<?php
/*
Para acceder a un fichero, es necesario  usar la función fopen() y guardarla en una variable. El fichero y el script deben tener permisos
A fopen() le pasaremos como parámetro "nombreFichero" y "modo de apertura".
Los distintos modos de apertura son r,r+,w,w+,a,a+,x,x+,c,c+. Normalmente usaremos r (para leer) y a+(escribir al final) o r+(escribir al incio).
*/
$ficheroElegido = fopen("ficheroEjemplo1.txt", "r");
/*
Usamos fgets($fichero) para obtener (sin saltos de linea) una linea, desde el puntero del fichero (inicio del mismo o no), hasta el \n.
Para comprobar si con fgets($fichero) hemos llegado al final del archivo, usamos feof($fichero) que nos devolverá true o false.
Opcionalmente podemos pasar un numero de bytes como longitud de lectura fgets($fichero,[$longitud]).
También podemos usar rewind($fichero) para colocar el puntero al inicio del mismo.
Solemos usar la siguiente estructura para obtener todo el contenido de un fichero.
*/
$contenido = "";
while (($linea = fgets($ficheroElegido)) !== false) {
    $contenido .= $linea . "<br>"; //Guardamos todo el contenido en una variable string, incluyendo saltos de linea ya que no los obtuvimos
}
echo $contenido;
/*
Siempre que dejemos de trabajar con un fichero debemos cerrarlo con fclose($fichero) así evitaremos posibles accesos indeseados
*/
fclose($ficheroElegido);
/*
Para escribir contenido en un fichero usamos fwrite() o alias, fputs(), que nos devolverá los byte escritos.
Los parametros son fputs($fichero, $stringAEscribir), opcionalmente podemos pasar una longitud, fputs($fichero, $stringAEscribir,[$longitud]).
*/
$ficheroElegido = fopen("ficheroEjemplo2.txt", "a+"); //Accedemos en modo lectura y en "a" para no sobreescribir el contenido.
fputs($ficheroElegido, "Esto es un texto de ejemplo\n"); //El caracter de salto de linea es \n a diferencia del <br> en el navagador.
echo "ECRITURA REALIZADA";
/*
Ante errores al escribir, usamos fflush($fichero), forzando la escritura de los datos del buffer, limpiandolo para posteriores peticiones.
*/
fclose($ficheroElegido);
