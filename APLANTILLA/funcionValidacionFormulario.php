<?php
function validarFormulario($post)
{
    $errores = array();
    if ($post['nombre'] == "" || preg_match('/[0-9]/', $post['nombre']) || strlen(trim($post['nombre'])) > 15) {
        $errores[0] = 'EL NOMBRE NO PUEDE SER NULO, CONTENER NÚMEROS O SER MÁS LARGO QUE   CARACTÉRES';
    }
    if ($post['apellidos'] == "" || preg_match('/[0-9]/', $post['apellidos']) || strlen(trim($post['apellidos'])) > 40) {
        $errores[1] = 'EL APELLIDO NO PUEDE SER NULO, CONTENER NÚMEROS O SER MÁS LARGO QUE   CARACTÉRES';
    }
    if ($post['password'] == "" || strlen(trim($post['password'])) > 10) {
        $errores[2] = 'LA PASSWORD NO PUEDE SER NULA O SER MÁS LARGO QUE   CARACTERES';
    }
    if ($post['correo'] == "" || strlen(trim($post['correo'])) > 50) {
        $errores[3] = 'LA CORREO NO PUEDE SER NULO O SER MÁS LARGO QUE   CARACTERES';
    }
    if ($post['telefono'] == "" || strlen(trim($post['telefono'])) != 9) {
        $errores[4] = 'EL TELÉFONO NO PUEDE SER NULO Y TIENE QUE CONTENER 9 CARACTERES';
    }
    if ($post['dni'] == "" || strlen(trim($post['dni'])) != 9) {
        $errores[5] = 'EL DNI NO PUEDE SER NULO Y TIENE QUE CONTENER 9 CARACTERES';
    }
    return $errores;
}
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fallos = validarFormulario($_POST);
    if (!empty($fallos)) {
        foreach ($fallos as $valor) {
            echo "<p id='malo'>" . $valor . "</p>";
        }
    } else {
        
    }
}
*/
