<?php
/*
Se trata de una funcion para paginar resultados de SELECT los parametros;
    $numPag         ->(int) El número de la página actual, es obtenido mediante $_GET
    $resPorPag      ->(int) El tamaño de cada página, los Resultados Por Páginas
*/
function paginacion($numPag, $resPorPag)
{
    try {
        $laCone = new PDO('mysql:dbname=correos;host=127.0.0.1', 'web', 'web');
        $laCone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $senten = "SELECT nombre, apellidos, direccion, CP FROM cuentas LIMIT " . (($numPag - 1) * $resPorPag) . "," . $resPorPag;
        $resulset = $laCone->prepare($senten);
        $resulset->execute();
        return $resulset;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        return null;
    }
}
