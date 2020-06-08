<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informacion Usuario</title>
</head>
<body>
    <table style="width:100%">
        <tr>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Fecha Envio Paquete</th>
            <th>Paquete Descripcion</th>
            <th>Direccion</th>
            <th>Remitente</th>
            <th>Paquete Estado</th>
        </tr>
        <?php
            include '../../../config/conexionBD.php';
            $v1 = $_GET['usuario'];
            $sql = "SELECT * FROM usuario, paquete WHERE usu_cedula = '$v1' AND usu_codigo = paq_fk_usuario";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo " <td>" .$row["usu_cedula"] . "</td>";
                    echo " <td>" .$row["usu_nombres"] . "</td>";
                    echo " <td>" .$row["usu_apellidos"] . "</td>";
                    echo " <td>" .$row["usu_correo"] . "</td>";
                    echo " <td>" .$row["paq_fecha_envio"] . "</td>";
                    echo " <td>" .$row["paq_descripcion"] . "</td>";
                    echo " <td>" .$row["paq_direccion"] . "</td>";
                    echo " <td>" .$row["paq_remitente"] . "</td>";
                    echo " <td>" .$row["paq_estado"] . "</td>";
                    echo " <td> <a href='modificar.php?codigo=" .$row['paq_codigo'] . "'>Modificar</a> </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo " <td colspan='7'>No existen usuarios registrados en el sistema </td>";
                echo "</tr>";
            }
            $conn->close();
        ?>
    </table>
</body>
</html>