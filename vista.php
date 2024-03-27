<?php	   
    if(file_exists('includes/funciones.php'))
		require_once('includes/funciones.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explosión de sabor</title>  
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon" />  
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">  
</head>

<body class="content">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="imagenes/logo.ico" alt="Logo del restaurante" class="mr-2">
             Restaurant explosión de sabor
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link active" href="vista.php"><span>Vista de Pedidos</span> </a></li>
            <li class="nav-item"><a class="nav-link" href="finished.php"><span>Vista de Pedidos Terminados</span></a></li>
            <li class="nav-item"><a class="nav-link" href="create.php" target="blank"><span> Registro de Pedidos</span></a></li>
          </ul>
        </div>
    </nav>

    <div class="container-fluid content mtop">
        <div class="row">      
            <?php
            session_start();
            if (isset($_SESSION['pedidos'])){    
                MostrarPedido($_SESSION['pedidos'], 'Pendiente', true); 
            }
            ?>      
        </div>
    </div> 
    
</body>
</html>