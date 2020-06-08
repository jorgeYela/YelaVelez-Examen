<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>REGISTRO DE INGRESO</title>
 <style type="text/css" rel="stylesheet">
    .error{
        color: red;
    }
 </style>
</head>
<body>
    <?php

        include '../../config/conexionBD.php'; 

        $cedula =  isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
        $cedulaR =  isset($_POST["cedulaR"]) ? trim($_POST["cedulaR"]) : null;
        $descripcion = isset($_POST["descripcion"]) ? mb_strtoupper(trim($_POST["descripcion"]), 'UTF-8') : null;
        $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
        $tiempoEstimado = isset($_POST["tiempo"]) ? mb_strtoupper(trim($_POST["tiempo"]), 'UTF-8') : null;
        
        $sql = "SELECT * FROM usuario WHERE usu_cedula = $cedula";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                echo "Codigo Usuario recuperado exitosamente...";

                $codigoUsuario = $row["usu_codigo"];

                date_default_timezone_set("America/Guayaquil");
                $fecha_envio = date('Y-m-d H:i:s', time());

                $sql1 = "INSERT INTO paquete VALUES (0, '$fecha_envio', '$descripcion', '$direccion', '$tiempoEstimado', $cedulaR, 'Enviado', '$codigoUsuario')";

                if($conn->query($sql1) === TRUE) {

                    echo "Paquete Enviado Satisfactoriamente...";

                } else {

                    echo "Error al enviar paquete... ";

                }

            }

        } else {
        if($conn->errno == 1062){
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
        }else{
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
            }
        }
   

        //Cerrar BD
        //cerrar la base de datos
        $conn->close();
        echo "<a href='../vista/html/crear_usuario.html'>Regresar</a>";
    ?>

</body>
</html>