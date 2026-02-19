<?php
function escribirEnFichero($ficheroOfi, $ficheroTemp, $caracterSeparador)
{
    while (($lineaNew = fgets($ficheroOfi)) !== false) {
        $lineaNew = trim($lineaNew);
        $arrayContenido = explode($caracterSeparador, $lineaNew);

        if (trim($arrayContenido[1]) == 'adios') {
            $arrayContenido[1] = "valor";
        }
        $contenidoNew = implode($caracterSeparador, $arrayContenido);
        fputs($ficheroTemp, $contenidoNew . "\n");
    }
    fclose($ficheroOfi);
    fclose($ficheroTemp);
    rename("ficheroEjemplo1Temp.txt", "ficheroEjemplo1.txt");
}
$ficheroOfi = fopen("ficheroEjemplo1.txt", "r");
$ficheroTemp = fopen("ficheroEjemplo1Temp.txt", "w");
escribirEnFichero($ficheroOfi, $ficheroTemp, ",");
echo "<p>MIRA EL FICHERO, SUBNORMAL</p>";
