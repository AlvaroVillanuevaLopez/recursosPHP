<html>

<body>
    <?php
    //Una vez subido el fichero, toda la información del mismo se recoge en el array global $_FILES['name']
    /*
    Para dicho array, el parametro 'name' es el mismo que el name definido en el input type=file 
    tiene las siguiente características:
        $_FILES['name']['name'] => Nombre del archivo
        $_FILES['name']['tmp_name'] => Ruta completa directorio temporal al que se sube el archivo en primer lugar
        $_FILES['name']['size'] => Tamaño del archivo en bytes
        $_FILES['name']['type'] => Tipo de archivo en nomenclatura MIME
        $_FILES['name']['error'] => Nos dice si hay un error con el fichero (no se suele usar)
    
    */
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) { //Nos devuelve true si el archivo se ha subido 
        echo "name:" . $_FILES['foto']['name'] . "<br>";
        echo "tmp_name:" . $_FILES['foto']['tmp_name'] . "<br>";
        echo "size:" . $_FILES['foto']['size'] . "<br>";
        echo "type:" . $_FILES['foto']['type'] . "<br>";
        $nombreDirectorio = "img/";
        $nombreFichero = $_FILES['foto']['name'];
        $nombreCompleto = $nombreDirectorio . $nombreFichero;
        //Convenientemente, debemos mover los archivos subidos a un directorio que no sea temporal
        if (is_dir($nombreDirectorio)) {  // Es un directorio existente
            $idUnico = time();
            $nombreFichero = $idUnico . "-" . $nombreFichero;
            //Definimos un ID único a cada archivo, podemos usar microtime() también
            $nombreCompleto = $nombreDirectorio . $nombreFichero;
            //La ruta nueva se establece con el nombreDirectorio y el nombreFichero (con el ID)
            move_uploaded_file($_FILES['foto']['tmp_name'], $nombreCompleto);
            //Movemos el fichero, de la ruta temporal ($_FILES['foto']['tmp_name']) a la nueva ruta $nombreCompleto
            echo "Fichero subido con el nombre: $nombreFichero<br>";
        } else echo 'Directorio definitivo inválido';
    } else
        print("No se ha podido subir el fichero<br>");
    ?>
</body>

</html>