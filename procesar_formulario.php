<?php
// ... Código de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$database = "evaluacion";


$conn = new mysqli($servidor,$usuario,$password,$database);

if($conn->connect_error){
    die("error de conexion: ".$conn->connect_error);
}


// Obtener los datos del formulario
$pregunta1 = $_POST['Pregunta1'];
$pregunta2 = $_POST['Pregunta2'];
$pregunta3 = $_POST['Pregunta3'];
$pregunta4 = $_POST['Pregunta4'];
$pregunta5 = $_POST['Pregunta5'];
$pregunta6 = $_POST['Pregunta6'];
$pregunta7 = $_POST['Pregunta7'];
$pregunta8 = $_POST['Pregunta8'];
$pregunta9 = $_POST['Pregunta9'];
// Obtén los valores de las siguientes 7 preguntas

// Insertar los datos en la base de datos
$sql = "INSERT INTO resultados (Pregunta1, Pregunta2, Pregunta3, Pregunta4, Pregunta5, Pregunta6, Pregunta7, Pregunta8, Pregunta9) VALUES ('$pregunta1', '$pregunta2', '$pregunta3','$pregunta4', '$pregunta5', '$pregunta6','$pregunta7', '$pregunta8', '$pregunta9')";
// Agrega aquí los valores de las siguientes 7 preguntas

if ($conn->query($sql) === TRUE) {
    include ("registro.html");
} else {
    echo "Error al guardar las respuestas: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>