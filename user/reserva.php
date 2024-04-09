<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explosión de sabor</title>  
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon" /> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background-image: url('imagenes/fondo3.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .reservation-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .reservation-form {
            background-color: #212529; /* Cambiar el color de fondo aquí */
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }
    </style>
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
            <span class="navbar-toggle-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="index.php"><span>Inicio</span></a></li>
                <li class="nav-item"><a class="nav-link" href="create.php"><span>Pedidos</span></a></li>
                <li class="nav-item"><a class="nav-link" href="reserva.php"><span>Reserva</span></a></li>
                <li class="nav-item"><a class="nav-link" href="informacion.php"><span>Acerca de...</span></a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href=""><span>Usuario</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="reservation-container">
    <div class="reservation-form">
        <h2 class="text-center mb-4">Reserva de mesa</h2>
        <form action="procesar_reserva.php" method="POST">
            <div class="mb-3">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="date" name="fecha">
            </div>
            <div class="mb-3">
                <label for="time" class="form-label">Hora</label>
                <input type="time" class="form-control" id="time" name="hora">
            </div>
            <div class="mb-3">
                <label for="table" class="form-label"><i class="fas fa-chair"></i> Mesa</label>
                <select class="form-select" id="table" name="mesa">
                    <option selected disabled>Selecciona una mesa</option>
                    <?php for ($i = 1; $i <= 8; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="guests" class="form-label"><i class="fas fa-users"></i> Cantidad de personas</label>
                <select class="form-select" id="guests" name="persona">
                    <option selected disabled>Selecciona</option>
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <br>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" value="reserva">Reservar</button>
            </div>
        </form>
    </div>
</div>

<footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <p class="mb-0">&copy; 2024 Restaurante Explosión de sabor, todos los derechos reservados By Albert Hernández & Francisco Javier.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
