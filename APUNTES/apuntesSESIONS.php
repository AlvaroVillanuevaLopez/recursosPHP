<?php
/*
Las sesiones nos sirven para guardar caractéres  a modo de identificación del usuario entre varias páginas.
Las sesiones se almacenan en el servidor.
Para establecer sesiones se usa la funcion: 
*/
session_start(); //DEBE IR AL PRINCIPIO DEL SCRIPT
/*
Para establecer un ID a la sesión del usuario, o un valor que nosotros definamos, se usa la funcion: 
*/
session_id(); //DEBE IR AL PRINCIPIO DEL SCRIPT, asigna un valor único a la sesión del usuario
session_id('22'); //DEBE IR AL PRINCIPIO DEL SCRIPT, asigna un valor 22 definido por nosotros
/*
También podemos establecer un nombre a la sesión del usuario, todas las sesiones se crean con el nombre, por defecto PHPSESID: 
*/
session_name(); //PHPSESSID
session_name('JUAN'); //JUAN
/*
Todas las sesiones se guardan en el array asociativo global $_SESSION, con el nombre con el que se hayan definido.
*/
$_SESSION['nombre'] = 'juan';
/*
Si queremos eliminar una sesion en especifico usamos:
*/
unset($_SESSION['nombre']); //ESTO ELIMINA EL VALOR DE $_SESSION['nombre']
/*
Pasado cierto tiempo, las sesiones caducan y el servidor no las guarda más, si queremos acelerar dicho tiempo, podemos usar:
*/
session_destroy(); //TERMINA LA SESSION PERO NO BORRA LAS VARIABLES DEL ARRAY $_SESSION
session_unset();//BORRA TODAS LAS VARIABLES DEJANDO VACIO EL ARRAY $_SESSION