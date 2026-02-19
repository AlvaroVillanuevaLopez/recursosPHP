<?php
/* 
$nombreFichero = fopen("nombreFichero.txt", "r"); 
*/
function sacarContenidoFichero($nombreFichero)
{
    $contenido = "";
    while (($linea = fgets($nombreFichero)) !== false) {
        $contenido .= $linea . "<br>";
    }
    return $contenido;
}

function escribirEnFichero($ficheroOfi, $ficheroTemp, $caracterSeparador)
{
    while (($lineaNew = fgets($ficheroOfi)) !== false) {
        $lineaNew = trim($lineaNew);
        $arrayContenido = explode(",", $lineaNew);

        if (trim($arrayContenido[]) == 'valor') { //CAMBIO
            $arrayContenido = "valor"; //CAMBIO
        }

        $contenidoNew = implode($caracterSeparador, $arrayContenido);
        fputs($ficheroTemp, $contenidoNew . "\n");
    }
    fclose($ficheroOfi);
    fclose($ficheroTemp);
    rename("nombreficheroTemp.txt", "nombreficheroOfi.txt"); //CAMBIO
}
