<?php	   
    if(file_exists('includes/funciones.php'))
		require_once('includes/funciones.php');
?>
<!doctype html>
<html lang="en">

    <head>
    <title>Explosión de sabor</title>  
    <link rel="shortcut icon" href="../imagenes/logo.png" type="image/x-icon" /> 
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link
        rel="stylesheet"
        href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css "
        crossorigin="anonymous" referrer policy="no-referrer" 
        /> 
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
            <li class="nav-item"><a class="nav-link" href="vistareserva.php"><span> Vista de reservas</span></a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href=""><span>Admin</span></a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid content mtop">
    <div class="row">      
        <?php
        session_start();
        // Elimina la línea que muestra la sesión
        // print_r($_SESSION);
        if (isset($_SESSION['pedidos'])){    
            MostrarPedido($_SESSION['pedidos'], 'Pendiente', true); 
        }
        ?>      
    </div>
</div> 
</body>

</html>