<?php
/*
La interacción entre el lenguaje de programación de y el sistema de gestión de bases de datos es el elemento fundamental 
para lograr que una aplicación web sea realmente dinámica.
El usuario y contraseña estándar para conectar con el gestor de BBDD (en este caso mysql) es:
"root" "root"
Sin embargo, nunca debemos usar este usuario en los script, deberemos usar otro usuario que ya está en la BBDD ya que
tanto el nombre y password (root, usuario administradpr) quedan a simple vista en el código lo cual no es seguro

Para la conexión a una BBDD debemos crear un objeto que establezca dicha conexión, dicho objeto dependerá del SGBD
(mysqli o PDO) al constructor de dicho objeto le deberemnos pasar 4 parámetros;
el host, nombre usuario, password usuario y nombre de la BBDD

$conexion = new mysqli("localhost","root","root", "jardineria");
$conexion = new PDO("mysql:host=localhost;dbname=periodico","root","root");

Al tratarse de un objeto, $conexion posee diferente métodos que podemos invocar. Antes de realizar cualquier operqacion, 
deberemos comprobar que  en la conexion no se produjo ningun problema, comprobando si $conexion es false. 
Esto lo podremos comprobar con la siguiente sentencia

$strsql="SELECT * FROM PEDIDOS";
if($resu=$conexion->query($strsql)){
    //OPERACIONES CUALESQUIERA
}

Debido a que si $conexion falla, se devulve false (no entra en el if). El objeto $resu se trata del resultado de
ejecutar la sentencia $strsql, al terminar de trabajar con $resu y $conexion, de seben cerrar sus flujos mediante 
el método close() 

$conexion->close();
$resu->close();

Si las librerias usadas son PDO deberemos usar 

$conexion=null;
$resu=null;

Para obtener los datos resultado de una sentencia SELECT, usamos algunas de estas funciones, dentro de un while();
    mysqli_num_rows($resultado)             ->Devuelve la cantidad de filas en el conjunto de $resultado.
    mysqli_fetch_array($resultado, 'tipo')  ->Devuelve un array con los valores de una fila del conjunto $resultado
                                            Dependiendo del tipo el array a devolver será asociativo (MYSQLI_ASSOC), 
                                            numérico (MYSQLI_NUM) o ambos tipos (array bidimensional MYSQLI_BOTH).
    mysqli_fetch_row($resultado)            ->Devuelve un array numérico con una fila del $resultado,FALSE si no quedan filas.
    mysqli_fetch_assoc($resultado)          ->Devuelve un array asociativo con una fila del $resultado,FALSE si no quedan filas.
    mysqli_field_count($conexion)           ->Obtener la cantidad de columnas de la ultima ejecucion de una sentencia.
    mysqli_fetch_field($resultado)          ->Retorna el siguiente campo del $resultado, FALSE si ya no quedan columnas.
    mysqli_fetch_all($resultado, 'tipo')    ->Transforma todo el $resultado en un único array del tipo identificado 
                                            ([MYSQLI_ASSOC, MYSQLI_NUM, MYSQLI_BOTH]). Esto nos permite prescindir del while()
                                            pero debermos recorrer el array con un foreach().

A la hora de establecer conexion con una BBDD, podemos espicificar la codificacion ($charset) de los caracteres
esto nos resultará útil, ya que la mayoria de datos son texto, que, al estar en diferente codificacion, podríasmos tener
problemas al operar con ellos. Debemos trabajar con la misma codificacion en BBDD y en el script. Algunas funciones son:
    mysqli_set_charset($conex, $charset)    ->Establece qué codificación utilizará PHP para los datos que envíe a través
                                            de la conexión con la BBDD.
    mysqli_character_set_name($conex)      ->Obtiene el conjunto de caracteres predeterminado.
    utf8_encode($data)                     ->Codifica un string $data, de ISO-8859-1 a UTF-8
    utf8_decode($data)                     ->Convierte un string $data codificada en ISO8859-1 con UTF-8 
                                            a un sencillo byte ISO-8859-1
*/