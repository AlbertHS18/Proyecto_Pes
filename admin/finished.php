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
    <br>
    <br>
<div class="container-fluid content" id="all">
        <div class="row">      
            <?php
            session_start();
            if (isset($_SESSION['pedidos'])){    
                MostrarPedido($_SESSION['pedidos'], 'Finalizado', true); 
            }
            ?>      
        </div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>