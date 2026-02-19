<?php
function ejemploPDOfetchAll($usuario, $password)
{
    try {
        $laCone = new PDO('mysql:dbname=cursoscp;host=127.0.0.1', 'web', 'web');
        $laCone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $senten = $laCone->prepare('SELECT  * FROM admins WHERE username=? AND password=?');
        $senten->bindValue(1, $usuario);
        $senten->bindValue(2, $password);
        $senten->execute();
        $filas = $senten->fetchAll(PDO::FETCH_NUM); // ó PDO::FETCH_ASSOC
        return $filas;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function mostrarLaDataEnTabla()
{
    echo "
    <table>
            <tr>
                <th>CÓDIGO</th>
                <th>NOMBRE</th>
                <th>NÚMERO DE PLAZAS</th>
                <th>PLAZO DE INSCRIPCIÓN</th>
            </tr>

    ";
    try {
        $laCone = new PDO('mysql:dbname=cursoscp;host=127.0.0.1', 'web', 'web');
        $laCone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $senten = $laCone->prepare('SELECT  codigo, nombre, numeroplazas, plazoinscripcion FROM cursos WHERE abierto=1');
        $senten->execute();
        while ($filas = $senten->fetch(PDO::FETCH_NUM)) {
            echo "<tr>";
            foreach ($filas as $valor) {
                echo "<td>" . $valor . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function comprobarRegistro($usuario, $password)
{
    try {
        $laCone = new PDO('mysql:dbname=cursoscp;host=127.0.0.1', 'web', 'web');
        $laCone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $senten = $laCone->prepare('SELECT  * FROM admins WHERE username=? AND password=?');
        $senten->bindValue(1, $usuario);
        $senten->bindValue(2, $password);
        $senten->execute();
        if ($filas = $senten->fetch(PDO::FETCH_NUM)) {
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function mostrarLaDataEnSeleccion()
{
    try {
        $laCone = new PDO('mysql:dbname=cursoscp;host=127.0.0.1', 'web', 'web');
        $laCone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $senten = $laCone->prepare('SELECT  codigo, nombre FROM cursos WHERE abierto=1');
        $senten->execute();
        while ($filas = $senten->fetch(PDO::FETCH_NUM)) {
            echo "<option value='" . $filas[0] . "'>" . $filas[1] . "</option>";
        }
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function insertarValor($dni, $curso)
{
    try {
        $fecha = new DateTime();
        $hoy = $fecha->format("Y-m-d");
        $laCone = new PDO('mysql:dbname=cursoscp;host=127.0.0.1', 'web', 'web');
        $laCone->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $senten = $laCone->prepare("INSERT INTO solicitudes (dni, codigocurso, fechasolicitud, admitido) VALUES
        ('$dni', '$curso', '$hoy', '0');");
        $senten->execute();
        return true;
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
