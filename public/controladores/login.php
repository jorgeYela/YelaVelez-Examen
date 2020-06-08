<?php

    session_start();

    include '../../config/conexionBD.php';

    $usuario = isset($_POST["usuarioB"]) ? trim($_POST["usuarioB"]) : null;

    $sql = "SELECT * FROM usuario WHERE usu_cedula = '$usuario'";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        $_SESSION['isLogged'] = TRUE;
        echo "<p>Muy Bien</p>";
        header("Location: ../../admin/vista/usuario/index.php/?usuario=$usuario");

    } else {

        echo "<p>Muy Mal</p>";

    }

    $conn->close();
?>