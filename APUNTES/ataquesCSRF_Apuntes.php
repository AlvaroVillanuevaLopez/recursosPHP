<?php
/*
Los ataques CRSF consisten en suplantar un formulario en el que un usuario tiene una sesion activa (SESION_ID),
replicando el formulario original pero insertando campos hidden con el mismo name que el original. A la hora de procesar
la informacion llega por $_POST y se recojen los campos hidden al tener el mismo name.

Para protegernos de esto, debemos hacer los formulario únicos. Debemos definir un campo hidden (token) con una marca de tiempo
única (microtime()) esto luego se guardará en la sesión $_SESSION['token']
*/