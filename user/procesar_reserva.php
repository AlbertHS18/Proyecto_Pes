
<?php
session_start();
$host = "localhost";
$usuario_bd = "root";
$contrasena_bd = ""; 
$nombre_bd = "pes"; 

$conn = new mysqli($host, $usuario_bd, $contrasena_bd, $nombre_bd);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$numero_de_mesa = $_POST['mesa'];
$cantidad_de_personas = $_POST['persona'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$correo = $_SESSION['correo'];
$sql_verificar = "SELECT * FROM reservas WHERE fecha='$fecha' AND hora='$hora'";
$resultado_verificar = $conn->query($sql_verificar);    

if ($resultado_verificar->num_rows > 0) {
    header('location:reserva.php');
} else {
    $sql = "INSERT INTO reservas (mesa, personas, fecha, hora, correo) VALUES ('$numero_de_mesa', '$cantidad_de_personas', '$fecha', '$hora', '$correo')";

    if ($conn->query($sql) === TRUE) {
        header('location:index.php');
    } else {
        echo "Error al realizar la reserva: " . $conn->error;
    }
}       


$conn->close();
?>