<?php
session_start();
if (!empty($_POST["ingresar"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo '<div id="access-denied"class="alert alert-danger">Campos vacíos</div>';
    } else {
        $usuario = $_POST["username"];
        $pass = $_POST["password"];

        $sql = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?");
        $sql->bind_param("ss", $usuario, $pass);
        $sql->execute();
        $result = $sql->get_result();

        $_SESSION['correo'] = $usuario;

        if ($result->num_rows == 1) {
            $datos = $result->fetch_assoc();
            if ($datos["id_usuario"] == 1) {
                header("location: admin/vista.php");
            } else {
                header("location: user/index.php"); 
            }
        } else {
            echo '<script>document.body.classList.add("show-denied");</script>';
            echo '<div id="access-denied" class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>
