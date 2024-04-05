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
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon" /> 
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

    <style>
        body {
            background-image: url('imagenes/fondo2.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh; /* Ajustar la altura de la imagen al 100% del viewport */
            margin: 0; /* Eliminar márgenes */
            padding: 0; /* Eliminar relleno */
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
                    <li class="nav-item"><a class="nav-link" href="menu.php"><span>Menú</span></a></li>
                     <li class="nav-item"><a class="nav-link" href="informacion.php"><span>Acerca de...</span></a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="login.php"><span>Login</span></a></li>

            </ul>
        </div>
    </div>
</nav>

        <header>
            <!-- place navbar here -->
        </header>
        <main>

        

        <br>

    <section id="id" class="container mt-4 text-center">
    <div class="jumbotron bg-white text-Dark">
    <div id="menu" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <br>
                <h1>Menú</h1>
                <br>
                </div><!-- end title -->
      
      <div class="d-flex p-1">                
          <!-- Muestra el menu -->
          <div class="container col-sm-9">
              <div class="row">
                  <?php                   
                      Menu1($productos);					
                  ?> 
              </div>

          </div>   
      </div>
                 
  </div><!-- end container -->
</div><!-- end section -->
        <br>
        <br>
    </div>
    </section>
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
