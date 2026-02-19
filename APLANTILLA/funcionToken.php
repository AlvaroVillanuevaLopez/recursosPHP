<?php
function comprobarToken()
/*
    session_start();

    
    $token = uniqid();
    $_SESSION['token'] = $token;
    echo "<input type='hidden' name='token' value='" . $token . "'/>";
*/
{
    if (isset($_SESSION['identidad']) && isset($_SESSION['token']) && isset($_POST['token'])) {
        if ($_SESSION['token'] == $_POST['token']) {
            unset($_SESSION['token']);
        } else {
            die("<p>Tokens disntintos, error de validación</p>");
        }
    } else {
        die("<p>Token no recuperado, error de validación</p>");
    }
}
