<?php
if (!empty($_POST["ingresar"])){
    if (empty($_POST["username"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">campos vacios </div>';
    } else {
        $usuario = $_POST["username"];
        $pass = $_POST["password"];
        $sql = $conexion->query("select * from usuarios where mail='$usuario' and passwd='$pass' ");
        if ($datos=$sql->fetch_object()){
            header("location:user/index.php");
        } else {
           
            echo '<script>document.body.classList.add("show-denied");</script>';
            echo '<div id="access-denied" class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>


