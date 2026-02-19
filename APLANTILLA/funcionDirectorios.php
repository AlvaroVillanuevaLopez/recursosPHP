<?php
function recorrerDirectorio($tematica)
{
    chdir("./" . $tematica);
    $arrayContenido = scandir(getcwd());
    chdir("../");
    return $arrayContenido;
}
