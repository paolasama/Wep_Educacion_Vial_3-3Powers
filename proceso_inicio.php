<?php
    include("datos.php");

    $email = $_POST["email"];
    $pass = $_POST["pass"];


    $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND pass = '$pass'";
    $resultado = mysqli_query($conn, $consulta);

    $filas = mysqli_num_rows($resultado);
    if($filas > 0)
    {
        header("Location: registro.html");
        exit();
    }
    else
    {
        echo "<div class='textophp'><h3>USUARIO O CONTRASEÑA INCORRECTOS</h3></div>";
        include ("iniciar_sesion.html");
    }
    mysqli_free_result($resultado);
    mysqli_close($conn);
?>