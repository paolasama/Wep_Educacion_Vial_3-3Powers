<?php
include ("datos.php");
   
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error al conectar con la base de datos: " . $conn->connect_error);
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO usuarios (nombre, email, pass ) VALUES ('$nombre', '$email', '$pass')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        include ("Iniciar_sesion.html");
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
?>
