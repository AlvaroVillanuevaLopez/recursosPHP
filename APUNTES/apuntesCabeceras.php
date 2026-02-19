<?php
/*
Las cabeceras nos aportan información relacionada con las peticiones y respuestas de los servidores
Podemos enviar cabeceras al servidor mediante la función 
header("cabecera: valor");
Es importante reclacar que las cabeceras deben enviarse antes de cualquier etiqueta o impresión html
El mayor uso que le podemos sacar es el redireccionamiento a cualquier página, esto lo logramos mediante la sentencia
header("Location: pagina");
*/
header("Location: ej.php");
/*
Para que funcione dicha acción, se debe definiar antes de cualquier salida html.
*/