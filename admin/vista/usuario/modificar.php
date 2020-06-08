<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Datos Persona</title>
</head>
<body>
    <?php

        $codigo = $_GET["codigo"];

        echo "$codigo";

        $sql = "SELECT * FROM paquete WHERE paq_codigo = $codigo";

        include '../../../config/conexionBD.php';

        $result = $conn->query($sql);

        if($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
            ?>

                <form id="formularioModificar" method="POST" action="../../controladores/usuario/modificar.php">

                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
                    <label for="cedula">Fecha Envio(*)</label>
                    <input type="text" id="fecha_envio" name="fecha_envio" value="<?php echo $row["paq_fecha_envio"]; ?>" required placeholder="Ingrese la cedula ..."/>
                    <br>
                    <label for="nombres">Descripcion(*)</label>
                    <input type="text" id="descripcion" name="descripcion" value="<?php echo $row["paq_descripcion"]; ?>" required placeholder="Ingrese los nombres ..."/>
                    <br>
                    <label for="apellidos">Direccion(*)</label>
                    <input type="text" id="direccion" name="direccion" value="<?php echo $row["paq_direccion"]; ?>" required placeholder="Ingrese los apellidos ..."/>
                    <br>
                    <label for="apellidos">Tiempo Entrega(*)</label>
                    <input type="text" id="tiempoEntrega" name="tiempoEntrega" value="<?php echo $row["pac_tiempo_entrega"]; ?>" required placeholder="Ingrese los apellidos ..."/>
                    <br>
                    <label for="apellidos">Remitente(*)</label>
                    <input type="text" id="remitente" name="remitente" value="<?php echo $row["paq_remitente"]; ?>" required placeholder="Ingrese los apellidos ..."/>
                    <br>
                    <label for="telefono">Estado del Paquete(*)</label>
                    <input type="text" id="estado" name="estado" value="<?php echo $row["paq_estado"]; ?>" required placeholder="Ingrese el estado actual del paquete ..."/>
                    <br>
                    <input type="submit" id="modificar" name="modificar" value="Modificar" />
                    <input type="reset" id="cancelar" name="concelar" value="Cancelar" />

                </form>

                <?php

            }

        } else {

            echo "<p>Ha ocurrido un error inesperado !</p>";
            echo "<p>" . mysqli_error($conn) . "</p>";

        }

        $conn->close();
    
    ?>

</body>
</html>