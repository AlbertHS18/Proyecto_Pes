<?php	
    session_start();
    include('includes/variables.php');
    if(file_exists('includes/funciones.php'))
		require_once('includes/funciones.php');
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

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

    <script src="https://www.paypal.com/sdk/js?client-id=AcGHRF2LrmsIAn0TtPmQjEQvwqkktFTeGNSFcpoYmDpJ7qE6JcJC30aavEa6fEd7msKHXUaGrcbeEj_k"></script>

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
                <ul class="navbar-nav ms-auto ml-auto"> <!-- Agregamos ml-auto aquí -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['correo'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../index.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mtop">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-3">Detalle de facturación</h1>
                <br>
                <br>
            </div>

            <div class="col-md-12">
                <form action="logic.php" method="POST" id="form">
                    <input type="hidden" name="action" value="add_pedido">
                    <div class="form-group">
                        <label>Nombre:</label><span> *</span>
                        <input type="text" name="nombre" class="form-control form-control-sm"
                            class="form-control form-control-sm" required="">
                    </div>
                    <div class="form-group">
                        <label>Apellido:</label><span> *</span>
                        <input type="text" name="apellido" class="form-control form-control-sm" required="">
                    </div>
                    <div class="form-group">
                        <label>Numero de Contacto:</label><span> *</span>
                        <input type="number" placeholder="" class="form-control form-control-sm" name="telefono"
                            required="">
                    </div>
                    <div class="form-group">
                        <label> Lugar de entrega:</label><span> *</span>
                        <input type="Text" name="direccion" class="form-control form-control-sm" required="">
                    </div>
                    <div class="form-group">
                        <label> Notas del Pedido:</label>
                        <textarea name="nota" form="form" class="form-control form-control-sm" rows="5"></textarea>
                    </div>

                    <input type='hidden' name='action' value='add_pedido'>
                    
                    <button type="submit" class="btn"
                         style="display: block; margin-top: 20px;">Enviar Pedido
                    </button>
           
                    <div id="paypal-button-container"></div>
<script>
    paypal.Buttons({
        style: {
            layout: 'horizontal', // Opciones: horizontal, vertical
            color: 'gold', // Opciones: gold, blue, silver, black
            shape: 'rect', // Opciones: rect, pill
            label: 'paypal' // Opciones: paypal, checkout, pay, buynow, installment
        },
        createOrder: function(data, actions) {
            // Esta función se llama cuando se inicia el proceso de pago.
            // Aquí puedes definir la lógica para crear la orden de PayPal.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '1.00' // Monto del pago
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // Esta función se llama cuando el pago ha sido aprobado por el usuario.
            return actions.order.capture().then(function(details) {
                // Aquí puedes ejecutar acciones adicionales después de que se ha completado el pago.
                alert('Pago completado por ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container');
</script>


                </form>
            </div>
        </div>
    </div>
    </div>


    <br>
    <br>
    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2024 Restaurante Explosión de sabor, todos los derechos reservados By Albert
                Hernández & Francisco Javier.</p>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous">
    </script>
</body>

</html>
