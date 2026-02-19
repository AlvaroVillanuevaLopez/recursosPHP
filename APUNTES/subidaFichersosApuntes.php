<html>

<body>
    Inserción de la fotografía del usuario:
    <form action="procesaFicherosApuntes.php" method="post" enctype="multipart/form-data">
        <?php
        //Para que un formulario pueda soportar subida de ficheros, debe tener 'enctype="multipart/form-data"'
        echo "Nombre usuario:<input type='text' name='usuario'/><br/>";
        echo "Fichero con su fotografía:<input type='file' name='foto'/><br/>";
        //El campo que nos deja recoger un fichero es <input type='file'/> solo funciona si hay 'enctype="multipart/form-data"'
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>