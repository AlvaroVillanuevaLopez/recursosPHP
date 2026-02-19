<?php
/*
Las cookies son fragmentos de texto que se guardan en el navegador del usuaro, este puede configurar su navegador para
aceptar/declinar las cookies.
Para definir cookies necesitamos un nombre, un valor, un tiempo de vida (opcional si se deja vacío la cookie no caduca)
    y una ruta a donde irá el valor de la cookie (opcional, si se deja vacío la cookie será visible desde el directorio raíz, 
        además de que los directorios padres, podrán ver las cookies establecidas en rutas hijas).
Utilizamos la función:
*/
setcookie($nombreCookie, $valor, time() + 3600, $ruta);
/*
Todas las cookies se guardan en el array asociativo global $_COOKIES, con el nombre con el que se crearon
Para borrar una cookie podemos usar la funcion unset($nombreCookie), sin embargo esto solo elimina su valor y, si se recarga la página
se volvería a establecer dicha cookie.
Para ello definimos una cookie con el mismo nombre pero con un time()-1.
*/
setcookie($nombreCookie, $valor, time() - 1, $ruta);
/*
Esto da a entender que no se ha podido sobreescribir la cookie por lo que se elimina
*/