<?php

$host = "localhost";
$usuario_bd = "root"; 
$contrasena_bd = "";
$nombre_bd = "pes";

$conn = new mysqli($host, $usuario_bd, $contrasena_bd, $nombre_bd);


if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


$nombre_usuario = $_POST['new-username'];
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$contrasena = $_POST['new-password'];


$sql_verificar = "SELECT * FROM usuarios WHERE correo='$correo'";
$resultado_verificar = $conn->query($sql_verificar);

if ($resultado_verificar->num_rows > 0) {
    header("location:login.php");
} else {

    $sql = "INSERT INTO usuarios (usuario, correo, contrasena,  telefono ) VALUES ('$nombre_usuario', '$correo', '$telefono', '$contrasena')";
    
    if ($conn->query($sql) === TRUE) {
        header("location:login.php");
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}


$conn->close();
?>
