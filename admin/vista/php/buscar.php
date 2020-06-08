<?php
    include '../../../config/conexionBD.php';
    $salida = "";
    $query = "SELECT * FROM usuario ORDER BY usu_codigo";
    if(isset($_POST['consulta'])) {
        $q = $conn->real_escape_string($_POST['consulta']);
        $query = "SELECT *
                  FROM usuario
                  WHERE usu_correo LIKE '%" .$q. "%' OR usu_cedula LIKE '%" .$q. "%'";
    }
    $resultado = $conn->query($query);
    if($resultado->num_rows > 0) {
        $salida.="<table class='tabla_datos'>
                    <thead>
                        <tr>
                            <td>Codigo</td>
                            <td>Cedula</td>
                            <td>Nombres</td>
                            <td>Apellidos</td>
                            <td>Correo</td>
                        </tr>
                    </thead>
                    <tbody>";
        while($fila = $resultado->fetch_assoc()){
            $salida.="<tr>
                        <td>" .$fila['usu_codigo']."</td>
                        <td>" .$fila['usu_cedula']."</td>
                        <td>" .$fila['usu_nombres']."</td>
                        <td>" .$fila['usu_apellidos']."</td>
                        <td>" .$fila['usu_correo']."</td>
                    </tr>";
        }
        $salida.="</tbody></table>";
    } else {
        $salida.="No existen datos con tales especificaciones :(";
    }
    echo $salida;
    $conn->close();
?>