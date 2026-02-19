<?php
print "<h1>Primer ejemplo de foreach</h1>";
$matriz1 = array("PHP 3", "PHP 4", "PHP 5");
//forEach en un array numérico (no asociativo)
foreach ($matriz1 as $valor1) {
    print "Elemento de matriz 1: $valor1<br>";
}
print "<h1>Segundo ejemplo de foreach</h1>";
$matriz2 = array('PHP 3' => 1998, 'PHP 4' => 2000, 'PHP 5' => 2004);
//forEach en un array asociativo (sus claves son strings)
foreach ($matriz2 as $clave => $valor1) {
    print "Elemento de matriz 2: clave  $clave,	contenido: $valor1<br>";
}
