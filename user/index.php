<?php	
    session_start();
    include('includes/variables.php');
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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




<section id="banner" class="container-fluid p-0">

    <div class="banner-img" style="position:relative; background:url('imagenes/slider.jpg') center/cover no-repeat; height:400px">

        <div class="banner-text" style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align:center; color:#fff ">
            <h1>Explosión de sabor</h1>
            <p>La mejor comida en un solo lugar.</p>

        </div>

    </div>

</section>

<section id="id" class="container mt-4 text-center">
    <div class="jumbotron bg-dark text-white">
        <br/>
        <h2>¡Bienvenid@ a Explosión de sabor!</h2>
        <p> Descubre una experiencia culinaria unico</p>
        <br/>
    </div>
</section>

<section id="chefs" class="container mt4 text-center" >
        <br>
        <h2>Nuestros Chefs</h2>
        <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/colaboradores/r.jpg"class="card-img-top"alt="Chef 1"/>
                <div class="card-body">
                    <h5 class="card-title">Chef 1</h5>
                    <p class="card-text">La chef Rebeca </p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/colaboradores/m.jpg"class="card-img-top"alt="Chef 1"/>
                <div class="card-body">
                    <h5 class="card-title">Chef 2</h5>
                    <p class="card-text">El chef Marco </p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="imagenes/colaboradores/a.jpg"class="card-img-top"alt="Chef 1"/>
                <div class="card-body">
                    <h5 class="card-title">Chef 3</h5>
                    <p class="card-text">El chef Antonio </p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>




        <header>
            <!-- place navbar here -->
        </header>
        <main>




        <br>
        <br>

    <!-- Sección de horarios-->
<div class="text-center bg-light p-4">
    <h3 class="mb-4"> Horario de atención </h3>
    <div>
        <p> <strong>Lunes a Viernes </strong></p>
        <p> <strong>11:00 a.m. - 10:00 p.m. </strong></p>
    </div>

    <div>
        <p> <strong>Sábado</strong></p>
        <p> <strong>12:00 a.m. - 5:00 p.m. </strong></p>
    </div>

    <div>
        <p> <strong>Domingo</strong></p>
        <p> <strong>7:00 a.m. - 2:00 p.m. </strong></p>
    </div>


</div>
    
        <br>






        </main>

        <footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <p class="mb-0">&copy; 2024 Restaurante Explosión de sabor, todos los derechos reservados By Albert Hernández & Francisco Javier.</p>
    </div>
</footer>



        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
