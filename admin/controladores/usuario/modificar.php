<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Datos Usuario - Paquete</title>
</head>
<body>
    <?php

        include '../../../config/conexionBD.php';

        $codigo = $_POST["codigo"];
        $fecha_envio = isset($_POST["fecha_envio"]) ? trim($_POST["fecha_envio"]) : null;
        $descripcion = isset($_POST["descripcion"]) ? mb_strtoupper(trim($_POST["descripcion"]), 'UTF-8') : null;
        $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
        $tiempoEntrega = isset($_POST["tiempoEntrega"]) ? mb_strtoupper(trim($_POST["tiempoEntrega"]), 'UTF-8') : null;
        $remitente = isset($_POST["remitente"]) ? mb_strtoupper(trim($_POST["remitente"]), 'UTF-8') : null;
        $estado= isset($_POST["estado"]) ? mb_strtoupper(trim($_POST["estado"]), 'UTF-8') : null;

        $sql = "UPDATE paquete " .
            "SET paq_fecha_envio = '$fecha_envio', ".
            "paq_descripcion = '$descripcion', ".
            "paq_direccion = '$direccion', ".
            "paq_tiempo_entrega = '$tiempoEntrega', ".
            "paq_remitente = '$remitente', ".
            "paq_estado = '$estado' ".
            "WHERE paq_codigo = $codigo";
        
        if($conn->query($sql) === TRUE) {
            echo "Se ha actualizado los datos personales correctamente !!!<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        }

        echo "<a href='../../vista/usuario/index.php'>Regresar</a>";
        $conn->close();

    ?>

</body>
</html>