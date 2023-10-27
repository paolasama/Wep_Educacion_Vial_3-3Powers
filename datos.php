<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$database = "evaluacion";
$conn = new mysqli($servidor,$usuario,$password, $database);

if($conn->connect_error){
    die("error de conexion: ".$conn->connect_error);
}


?>  