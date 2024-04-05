<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explosión de sabor</title>
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrer policy="no-referrer">
    <style>
        body {
            background-image: url('imagenes/fondo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .login-form {
            background-color: rgba(0, 0, 0, 0.8); /* Cambiado a un fondo oscuro */
            padding: 20px;
            border-radius: 10px;
            width: 300px;
        }

        .register-link {
            text-align: center;
            margin-bottom: 15px;
        }

        .register-link a {
            color: #fff;
            text-decoration: underline;
        }

        .input-group-text {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 20px;
            color: #fff;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 20px;
            padding-left: 30px;
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .form-label {
            color: #fff; /* Cambiando el color del texto de las etiquetas */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><span>Inicio</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php"><span>Menú</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="informacion.php"><span>Acerca de...</span></a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="login.php"><span>Login</span></a></li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <div class="login-form">

            <!-- Formulario de registro -->
            <h2 class="text-center mb-4">Registrarse</h2>
            <form method="post" action="registro.php">
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" name="new-username" placeholder="Nombre de usuario" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" name="new-password" placeholder="Contraseña" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    <input type="tel" class="form-control" name="phone" placeholder="Teléfono" required>
                </div>
                <br>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary" name="registrar" value="registrar">Registrarse</button>
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
