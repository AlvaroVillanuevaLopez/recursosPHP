<?php
/*
Cuando queremos conectar con diferentes SGBD, utilizamos la extenson PDO (PHP Data Objects)
que como su propio nombre indica, se trata de una libreria que genera clases para comprobar la conexion y posibles errores.
    PDO:                ->Crea la conexion
    PDOStatement:       ->Representa la sentencia preparada tra de la ejecución,un conjunto de resultados asociado
    PDOException:       ->Representa posibles errores

El constructor de PDO es;
    $laCone = new PDO (‘mysql:host=127.0.0.1; dbname=pizzeria’, $usuario, $password);

Para capturar y mostrar posibles errores, incluida la conexión;
    print_r($laCone->errorInfo();
    print_r($laCone->errorCode();

PDO tambien permite usar excepciones, para ello debemos usar el método PDO::setAtribute() seguido de PDO::ATTR_ERRMODE,
este último parámetro puede tomar el valor [PDO::ERRMODE_SILENT, PDO::ERRMODE_EXCEPTION, PDO::ERRMODE_WARNING];
    try{
        $laCone = new PDO ('mysql:dbname=pizzeria;host=127.0.0.1', $usuario, $pwd);
        $laCone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
        echo 'Error: '.$e->getMessage();
    }

Podemos realizar consultas mediante 2 métodos;
    PDO::query(string $consulta)    ->Utlizado cuando las consultas no contenen parámetros externos
                                      No se escapan automátcamente los parámetros y devuelve un objeto PDOStatement o False
        $senten=$laCone->query(‘SELECT nombre FROM ingredientes’);

    PDO::prepare(string $consulta)  ->Escapa los parámetros de la consulta automátcamente
                                      Devuelve un objeto PDOStatement ó False
                                      La consulta se ejecuta en tres pasos;
                                            PDOStatement::bindValue(‘:parametro’, $valor)   ->Prepara la consulta
                                            PDOStatement::bindParam(1, $valor)              ->Vincular un valor a los parámetros 
                                            PDOStatement::execute()                         ->Ejecuta la consulta
        $senten = $con->preprare('SELECT * FROM masas WHERE idMasa=? and precio=?');
        $senten->binValue(1, $masa);
        $senten->bindValue(2, $precio);
        $senten->execute();

Existen tres métodos principales para acceder al resultado de una ejecución;
    PDOStatement::fetch($modo)                     ->Obtiene la siguiente fila de un conjunto de resultados
    PDOStatement::fetchAll($modo)                  ->Obtiene un array bidimensional con todas las filas del resultado
    PDOStatement::fetchObject(string nomClase)     ->Obtiene la siguiente fila y lo devuelve como un objeto
*/