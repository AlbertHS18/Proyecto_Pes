<?php	   
    if(file_exists('includes/funciones.php'))
		require_once('includes/funciones.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explosión de sabor</title>
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/x-icon" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="imagenes/logo.ico" alt="Logo del restaurante" class="mr-2">
             Restaurant explosión de sabor
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="vista.php">Vista de Pedidos</a></li>
                <li class="nav-item"><a class="nav-link" href="finished.php">Vista de Pedidos Terminados</a></li>
                <li class="nav-item"><a class="nav-link" href="vistareserva.php">Vista de reservas</a></li>
            </ul>


            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="../index.php">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br> 

<style>
.card {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
}
</style>

<script>
        setTimeout(function(){
            document.getElementById('access-denied').style.display = 'none';
        }, 3000);
    </script>
    
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pes";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if(isset($_POST['eliminar'])) {
    $id_reserva_a_eliminar = $_POST['id_reserva'];
    $sql_delete = "DELETE FROM reservas WHERE id_reserva = $id_reserva_a_eliminar";
    if ($conn->query($sql_delete) === TRUE) {
        echo '<div id="access-denied" class="alert alert-danger">La reserva ha sido eliminada exitosamente.</div>';
    } else {
        echo '<div id="access-denied" class="alert alert-danger">Error al eliminar la reserva: .</div>'.$conn->error;
    }
}

$sql = "SELECT * FROM reservas r,usuarios u WHERE r.correo = u.correo ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
?>
        <div class="card">
            <div>Usuario: <?php echo $row["usuario"]; ?></div>
            <div>Correo: <?php echo $row["correo"]; ?></div>
            <div>Mesa: <?php echo $row["mesa"]; ?></div>
            <div>Personas: <?php echo $row["personas"]; ?></div>
            <div>Fecha: <?php echo $row["fecha"]; ?></div>
            <div>Hora: <?php echo $row["hora"]; ?></div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="hidden" name="id_reserva" value="<?php echo $row["id_reserva"]; ?>">
                <input type="submit" name="eliminar" value="Eliminar">
            </form>
        </div>
<?php
    }
} else {
    echo "No se encontraron resultados.";
}
?>
 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>