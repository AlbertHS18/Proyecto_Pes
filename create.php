<?php	
    session_start();
    include('includes/variables.php');
    if(file_exists('includes/funciones.php'))
		require_once('includes/funciones.php');
?>
<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <title>Explosión de sabor</title>  
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
	<script src="js/modernizr.js"></script> 

</head>

<body id="page-top" class="politics_version">

    <?php	   
    if (isset($_GET['message']) && $_GET['message']=='true'){
        echo"<script>
                alert('Ya posses un pedido en curso, cuando sea entregado podrá realizar su próximo pedido');
             </script>";
    }
    ?>
   
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="imagenes/logo.ico" alt="Logo del restaurante" class="mr-2">
             Restaurant explosión de sabor
        </a>
    </div>
    </nav>
	

    <section id="banner" class="container-fluid p-0">
    <div class="banner-img" style="position:relative; background:url('images/slider.jpg') center/cover no-repeat; height:500px">
        <div class="banner-text" style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align:center; color:#fff; background-color: rgba(0, 0, 0, 0.5); padding: 20px;">
            <h2 style="color: #fff;">¡Pide lo que quieras!</h2>
            <p>Deliciosidad saltando en tu boca.</p>
            <a class="btn-slider" href="#menu" style="background-color: #ff9100; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Pedir</a>
        </div>
    </div>
</section>




	<!-- <div class="container alert alert-success" id="message">
            <strong>Success!</strong> Pedido enviado!.
        </div>
    <script>$("#message").delay(30).fadeOut(20);</script> -->
    
    <div id="menu" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <br>
                <br>
                <h1>Menú</h1>
                <br>
            </div><!-- end title -->
      
            <div class="d-flex p-2">                
                <!-- Muestra el menu -->
                <div class="container col-sm-9">
                    <div class="row">
                        <?php                   
                            Menu($productos);					
                        ?>  
                    </div>
                </div>

                <!-- Muestra el pedido -->
                <div class="container col-sm-10" id="one">
                    <div class="row">                       
                            <?php
                                if (! isset($_SESSION['orden'])){
                                    $orden=array('estado'=>'agregando','orden'=>null);
                                }
                                else 
                                    $orden=array('estado'=>'agregando','orden'=>$_SESSION['orden']);
                                MostrarPedido([$orden],'agregando');
                            ?>                                                                                                   
                    </div>
                </div>    
            </div>
                       
        </div><!-- end container -->
    </div><!-- end section -->

    <footer class="bg-dark text-light text-center py-3">
    <div class="container">
        <p class="mb-0">&copy; 2024 Restaurante Explosión de sabor, todos los derechos reservados By Albert Hernández & Francisco Javier.</p>
    </div>
</footer>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Slider-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>

    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>
</html>
